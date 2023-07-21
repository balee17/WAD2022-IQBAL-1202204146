import { Button, Col, Container, Row, Text } from '@smarteye/optic';
import { RoomsType } from 'model/Rooms';
import { useRouter } from 'next/router';
import { useCallback, useEffect, useState } from 'react';
import { FindDeviceByRoomType, UpdateDeviceStatus } from '@/services/device/http';
import { DevicesType } from 'model/Devices';
import { CategoryType } from 'model/Products';

type Props = {
  rooms: RoomsType[];
};

const Play = (props: Props) => {
  const router = useRouter();
  const [timer, setTimer] = useState<number>(600);
  const [isRunning, setIsRunning] = useState(false);
  const [isSessionStarted, setIsSessionStarted] = useState(false);
  const [devices, setDevices] = useState<DevicesType[]>([]);

  useEffect(() => {
    if (router.query['room-type']) {
      const roomType = router.query['room-type'] as CategoryType;
      FindDeviceByRoomType(roomType)
        .then(res => {
          setDevices(res.data.data);
        })
        .catch(error => {
          console.error('Failed to fetch devices:', error);
        });
    }
  }, [router.query]);

  const playNotificationSound = () => {
    const audio = new Audio('/sound/notification.mp3');
    audio.play();
  };

  useEffect(() => {
    let intervalId: NodeJS.Timeout;

    if (isRunning) {
      intervalId = setInterval(() => {
        setTimer(prevTimer => {
          if (prevTimer === 44) {
            playNotificationSound();
          }

          return prevTimer - 1;
        });
      }, 1000);
    }

    return () => clearInterval(intervalId);
  }, [isRunning]);

  useEffect(() => {
    const handleBeforeUnload = () => {
      if (isRunning) {
        devices.forEach((device: { room_type: CategoryType; id: number }) => {
          try {
            const selectedDeviceId = localStorage.getItem('selectedDeviceId');
            if (device.id === Number(selectedDeviceId)) {
              UpdateDeviceStatus(device.room_type, device.id, { used_status: 0 });
              console.log(`Device ${device.id} status updated to 0 successfully!`);
            }
          } catch (error) {
            console.error(`Failed to update device ${device.id} status:`, error);
          }
        });
      }
    };

    const handleUnload = () => {
      if (isRunning) {
        setIsRunning(false);
      }
    };

    window.addEventListener('beforeunload', handleBeforeUnload);
    window.addEventListener('unload', handleUnload);

    return () => {
      window.removeEventListener('beforeunload', handleBeforeUnload);
      window.removeEventListener('unload', handleUnload);
    };
  }, [isRunning, devices]);

  useEffect(() => {
    const handleVisibilityChange = () => {
      if (document.visibilityState === 'hidden') {
        if (isRunning) {
          setIsRunning(false);
        }
      } else if (document.visibilityState === 'visible') {
        if (!isRunning && isSessionStarted) {
          setIsRunning(true);
        }
      }
    };

    document.addEventListener('visibilitychange', handleVisibilityChange);

    return () => {
      document.removeEventListener('visibilitychange', handleVisibilityChange);
    };
  }, [isRunning, isSessionStarted]);

  useEffect(() => {
    const handleRouteChange = () => {
      if (isRunning) {
        setIsRunning(false);
        devices.forEach((device: { room_type: CategoryType; id: number }) => {
          try {
            const selectedDeviceId = localStorage.getItem('selectedDeviceId');
            if (device.id === Number(selectedDeviceId)) {
              UpdateDeviceStatus(device.room_type, device.id, { used_status: 0 });
              console.log(`Device ${device.id} status updated to 0 successfully!`);
            }
          } catch (error) {
            console.error(`Failed to update device ${device.id} status:`, error);
          }
        });
      }
    };

    router.events.on('routeChangeStart', handleRouteChange);

    return () => {
      router.events.off('routeChangeStart', handleRouteChange);
    };
  }, [isRunning, devices, router]);

  useEffect(() => {
    if (timer === 0) {
      setIsRunning(false);
      router.push('/finish');

      devices.forEach((device: { room_type: CategoryType; id: number }) => {
        try {
          const selectedDeviceId = localStorage.getItem('selectedDeviceId');
          if (device.id === Number(selectedDeviceId)) {
            UpdateDeviceStatus(device.room_type, device.id, { used_status: 0 });
            console.log(`Device ${device.id} status updated to 0 successfully!`);
          }
        } catch (error) {
          console.error(`Failed to update device ${device.id} status:`, error);
        }
      });
    }
  }, [timer, devices, router]);

  const formatTime = useCallback((t: number) => {
    const minutes = Math.floor(t / 60);
    const seconds = t % 60;

    const formattedMinutes = String(minutes).padStart(2, '0');
    const formattedSeconds = String(seconds).padStart(2, '0');

    return `${formattedMinutes}:${formattedSeconds}`;
  }, []);

  const handleButtonClick = useCallback(() => {
    if (isSessionStarted) {
      setIsRunning(false);
      router.push('/finish');

      devices.forEach((device: { room_type: CategoryType; id: number }) => {
        try {
          const selectedDeviceId = localStorage.getItem('selectedDeviceId');
          if (device.id === Number(selectedDeviceId)) {
            UpdateDeviceStatus(device.room_type, device.id, { used_status: 0 });
            console.log(`Device ${device.id} status updated to 0 successfully!`);
          }
        } catch (error) {
          console.error(`Failed to update device ${device.id} status:`, error);
        }
      });
    } else {
      setIsRunning(true);
      setIsSessionStarted(true);

      devices.forEach((device: { room_type: CategoryType; id: number }) => {
        try {
          const selectedDeviceId = localStorage.getItem('selectedDeviceId');
          if (device.id === Number(selectedDeviceId)) {
            UpdateDeviceStatus(device.room_type, device.id, { used_status: 1 });
            console.log(`Device ${device.id} status updated to 1 successfully!`);
          }
        } catch (error) {
          console.error(`Failed to update device ${device.id} status:`, error);
        }
      });
    }
  }, [isSessionStarted, devices, router]);

  return (
    <Container className="my-space-10 flex justify-center text-center">
      {props.rooms.map((room: RoomsType, index: number) => (
        <Row key={index}>
          <Col md={12} sm={12}>
            <Text tag="h1" variant="headline-1" className="mt-space-05">
              {room.name}
            </Text>

            <Text tag="span">Anda dapat melakukan training selama 10 menit di ruangan ini.</Text>
          </Col>

          <Col md={12} sm={12}>
            <Text
              tag="span"
              variant="headline-2"
              className="my-space-04 flex w-full items-center justify-center rounded-04 bg-green-02 py-space-04"
            >
              {formatTime(timer)}
            </Text>
          </Col>

          <Col md={12} sm={12}>
            <Button
              className="mb-space-10 w-full"
              tag="a"
              variant={isSessionStarted ? 'danger' : 'primary'}
              onClick={handleButtonClick}
            >
              {isSessionStarted ? 'Akhiri Sesi' : 'Mulai Sesi'}
            </Button>
          </Col>
        </Row>
      ))}
    </Container>
  );
};

export default Play;
