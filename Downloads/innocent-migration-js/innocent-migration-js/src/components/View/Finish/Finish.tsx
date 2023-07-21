import { Button, Col, Container, Row, Text } from '@smarteye/optic';
import { useState } from 'react';
import FeedbackModal from '@/components/View/Feedback/FeedbackModal';

const Finish = () => {
  const [showModal, setShowModal] = useState<boolean>(false);

  return (
    <Container className="my-space-10 flex justify-center text-center">
      <Row>
        <Col md={12} sm={12}>
          <Text tag="h1" variant="headline-1" className="mt-space-08">
            Sesi Selesai
          </Text>

          <Text tag="span">
            Kamu sudah menyelesaikan sesi di ruangan ini. Jika ingin melakukan sesi lagi, kamu bisa
            memilih ruangan lagi.
          </Text>
        </Col>

        <Col md={12} sm={12}>
          <Button className="mb-space-10 mt-space-02 w-full" onClick={() => setShowModal(true)}>
            Berikan Feedback
          </Button>
        </Col>
      </Row>

      <FeedbackModal show={showModal} onClose={() => setShowModal(false)} />
    </Container>
  );
};

export default Finish;