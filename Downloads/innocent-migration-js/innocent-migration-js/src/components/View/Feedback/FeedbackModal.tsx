import { PostFeedback } from '@/services/feedback/http';
import { Button, Col, Modal, Row, Text, TextArea } from '@smarteye/optic';
import cn from 'classnames';
import { useRouter } from 'next/router';
import { useCallback, useEffect, useState } from 'react';

interface Props {
  show: boolean;
  onClose: () => void;
}

const FeedbackModal = ({ show, onClose }: Props) => {
  const router = useRouter();
  const [rating, setRating] = useState<number>(0);
  const [comment, setComment] = useState('');
  const [selectedDeviceId, setSelectedDeviceId] = useState<number | null>(null);
  const isButtonDisabled = !rating || !comment || selectedDeviceId === null;

  useEffect(() => {
    const deviceId = localStorage.getItem('selectedDeviceId');
    if (deviceId) {
      setSelectedDeviceId(Number(deviceId));
    }
  }, []);

  const handleRatingClick = useCallback(
    (selectedRating: number) => {
      if (rating === selectedRating) {
        setRating(0);
      } else {
        setRating(selectedRating);
      }
    },
    [rating]
  );

  const handleSubmit = useCallback(() => {
    if (selectedDeviceId === null) {
      return;
    }

    const feedback = {
      device_id: selectedDeviceId,
      rating: rating,
      comment: comment
    };

    PostFeedback(feedback).then(res => res);
    router.push('/feedback-done');
  }, [selectedDeviceId, rating, comment, router]);

  return (
    <Modal shown={show} onClose={onClose} headless>
      <Row>
        <Col>
          <Text tag="h2" variant="headline-2" className="mx-auto text-center text-neutral-01">
            Berikan Feedback
          </Text>
        </Col>
      </Row>

      <Row className="flex justify-center">
        <div className="mt-space-04">
          {[1, 2, 3, 4, 5].map(star => (
            <button
              type="button"
              key={star}
              onClick={() => handleRatingClick(star)}
              className={cn(
                'text-6xl focus:outline-none',
                rating && star <= rating ? 'text-yellow-02' : 'text-neutral-03'
              )}
            >
              &#9733;
            </button>
          ))}
        </div>
      </Row>

      <Row>
        <Col className="my-space-04">
          <TextArea
            label="Feedback"
            placeholder="Masukan Pendapat Anda"
            value={comment}
            onChange={e => setComment(e.target.value)}
            required
          />
        </Col>
      </Row>

      <Row>
        <Col className="flex justify-center">
          <Button
            variant="primary"
            className={cn('w-full', { 'cursor-not-allowed opacity-50': isButtonDisabled })}
            disabled={isButtonDisabled}
            tag="button"
            onClick={handleSubmit}
          >
            Submit
          </Button>
        </Col>
      </Row>
    </Modal>
  );
};

export default FeedbackModal;
