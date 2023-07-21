/* eslint-disable @typescript-eslint/restrict-template-expressions */
import { Button, Col, Container, Row, Text } from '@smarteye/optic';
import { useCallback, useEffect, useState } from 'react';
import { RoomsType } from 'model/Rooms';
import { useRouter } from 'next/router';
import { DevicesType } from 'model/Devices';
import { FindDeviceByRoomType } from '@/services/device/http';
import { CategoryType } from 'model/Products';

type Props = {
  rooms: RoomsType[];
};

const RoomCard = (props: Props) => {
  const router = useRouter();
  const [device, setDevice] = useState<DevicesType | null>(null);

  const handleNextButtonClick = useCallback(() => {
    router.push(`/play/${router.query['room-type']}`);
  }, [router]);

  useEffect(() => {
    FindDeviceByRoomType(router.query['room-type'] as CategoryType).then(res => {
      const deviceId = localStorage.getItem('selectedDeviceId');

      const data = res.data.data.find(
        (f: { id: number }) => f.id === Number(deviceId)
      ) as DevicesType;

      setDevice(data);
    });
  }, [router.query]);

  return (
    <Container>
      <Row className="my-space-06 grid grid-cols-1 justify-center gap-space-04 sm:grid-cols-2">
        {props.rooms.map((room: RoomsType, index: number) => (
          <Col md={5} sm={12} key={index}>
            <div className="rounded-02 bg-neutral-06">
              <img
                className="w-full object-cover"
                src={`/images/oculus-${device?.image_id}.png`}
                alt="room 1"
              />

              <div className="p-space-02">
                <Row>
                  <Col className="mb-space-01 space-y-space-01">
                    <Text tag="h3" variant="headline-3" className="text-neutral-01">
                      {room.name}
                    </Text>

                    <Text tag="h3" variant="headline-3" className="text-neutral-01">
                      {device?.name}
                    </Text>
                  </Col>

                  <Col className="flex justify-end text-end">
                    <div className="space-y-space-01">
                      <Text
                        tag="span"
                        className={`rounded-04 p-space-01 ${
                          device?.used_status === 1
                            ? 'bg-red-02 text-red-03'
                            : 'bg-green-02 text-green-03'
                        }`}
                      >
                        {device?.used_status === 1 ? 'Unavailable' : 'Available'}
                      </Text>
                    </div>
                  </Col>
                </Row>

                <Row>
                  <Col className="space-y-space-01 text-neutral-01">
                    <Text className="flex items-center">
                      <img src="/images/icons/skating.svg" alt="Skating icon" />
                      {room.room_type.charAt(0).toUpperCase() + room.room_type.slice(1)}
                    </Text>

                    <Text className="flex items-center">
                      <img src="/images/icons/time.svg" alt="Time icon" />
                      10:00
                    </Text>

                    <Text className="flex items-center">
                      <img src="/images/icons/lens.svg" alt="Lens icon" />
                      Oculus
                    </Text>

                    <Button
                      className="my-space-01 w-full"
                      onClick={handleNextButtonClick}
                      disabled={device?.used_status === 1 ? true : false}
                    >
                      Next
                    </Button>
                  </Col>
                </Row>
              </div>
            </div>
          </Col>
        ))}
      </Row>
    </Container>
  );
};

export default RoomCard;
