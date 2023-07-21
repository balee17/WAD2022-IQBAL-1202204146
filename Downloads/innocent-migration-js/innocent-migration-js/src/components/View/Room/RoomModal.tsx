/* eslint-disable @typescript-eslint/restrict-template-expressions */
import { FindDeviceByRoomType, UpdateDeviceStatus } from '@/services/device/http';
import { Button, Col, Modal, Row, Text } from '@smarteye/optic';
import cn from 'classnames';
import { DevicesType } from 'model/Devices';
import { CategoryType } from 'model/Products';
import { useRouter } from 'next/router';
import { useEffect, useState } from 'react';

interface Props {
  show: boolean;
  onClose: () => void;
}

const RoomModal = ({ show, onClose }: Props) => {
  const router = useRouter();
  const [selectedImage, setSelectedImage] = useState('');
  const [devices, setDevices] = useState<DevicesType[]>([]);
  const [selectedDeviceId, setSelectedDeviceId] = useState<number | null>(null);

  useEffect(() => {
    FindDeviceByRoomType(router.query['room-type'] as CategoryType).then(res =>
      setDevices(res.data.data)
    );
  }, [router.query]);

  const handleImageClick = (image: string, deviceId: number) => {
    setSelectedImage(image);
    setSelectedDeviceId(deviceId);
    localStorage.setItem('selectedDeviceId', deviceId.toString());
  };

  const handleNextButtonClick = async () => {
    if (selectedDeviceId !== null) {
      try {
        await UpdateDeviceStatus(router.query['room-type'] as CategoryType, selectedDeviceId, {
          used_status: 1
        });
        console.log('Device status updated successfully!');
      } catch (error) {
        console.error('Failed to update device status:', error);
      }
    }

    router.push(`/play/${router.query['room-type']}`);
  };

  const isButtonDisabled = selectedImage === '';

  return (
    <Modal shown={show} onClose={onClose} headless>
      <Row>
        <Col>
          <Text tag="h2" variant="headline-2" className="mb-space-04 text-center text-neutral-01">
            Pilihlah oculus yang akan anda gunakan!
          </Text>
        </Col>
      </Row>

      <div className="flex justify-center">
        <Row className="mb-space-04">
          {devices.map(device => (
            <Col key={device.id}>
              <div
                className={cn('cursor-pointer', {
                  'rounded-03 border-2 border-primary-01 opacity-100':
                    selectedImage === `/images/oculus-${device.image_id}.png`,
                  'rounded-03 border-2 border-primary-04 border-opacity-50 opacity-50 hover:opacity-75':
                    selectedImage !== `/images/oculus-${device.image_id}.png`
                })}
                onClick={() => handleImageClick(`/images/oculus-${device.image_id}.png`, device.id)}
              >
                <img src={`/images/oculus-${device.image_id}.png`} alt={device.name} />

                <div className="p-space-02">
                  <Text tag="span" className="mb-space-02 text-xl font-bold text-neutral-01">
                    {device.name}
                  </Text>
                </div>
              </div>
            </Col>
          ))}
        </Row>
      </div>

      <Row>
        <Col className="flex justify-center">
          <Button
            variant="primary"
            className={cn('w-full', { 'cursor-not-allowed opacity-50': isButtonDisabled })}
            disabled={isButtonDisabled}
            onClick={handleNextButtonClick}
          >
            Next
          </Button>
        </Col>
      </Row>
    </Modal>
  );
};

export default RoomModal;
