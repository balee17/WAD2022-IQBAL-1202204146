/* eslint-disable @typescript-eslint/restrict-template-expressions */
import { Button, Col, Container, Row, Text } from '@smarteye/optic';
import { useRouter } from 'next/router';
import { BigPlayButton, Player } from 'video-react';

const Tutorial = () => {
  const router = useRouter();
  const roomType = router.query['room-type'];

  const getVideoSource = () => {
    if (roomType === 'vrlab') {
      return '/videos/how-to-use-vrlab.mp4';
    } else {
      return 'https://www.youtube.com/embed/GojevL05Avw';
    }
  };

  return (
    <Container>
      <Row>
        <Col>
          <div className="my-space-02 w-full rounded-02 bg-neutral-06 p-space-04 text-primary-01">
            <Text tag="h2" variant="headline-2" className="text-center">
              How to use
              <br />
              (set up oculus)
            </Text>

            <hr className="my-space-02" />

            {roomType === 'vrlab' ? (
              <Player src={getVideoSource()}>
                <BigPlayButton position="center" />
              </Player>
            ) : (
              <iframe
                src={getVideoSource()}
                title="Quest 2 Setting Up Guardian"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                className="my-space-02 w-full"
                height={500}
              />
            )}

            <Text tag="span">
              Selipkan headset di atas mata anda dan tekan pemicu pada setiap pengontrol. Ini secara
              otomatis memasangkannya dengan headset.
              <br className="mb-space-02" />
              Untuk pengalaman terbaik Quest 2 Anda, anda memerlukan penyesuaian yang disesuaikan
              dengan jarak lensa yang tepat untuk memaksimalkan kenyamanan dan menghindari
              kekaburan. Geser Headset dan pegan kedua tail samping simetris yang terletak saling
              berhadapan di bagian bawah tali. Geser ini mengundurkan atau mengencangkan genggaman
              di sekitar sisi kepala anda.
              <br className="mb-space-02" />
              Kencangkan atau kendurkan pita ini untuk mendistribusikan tekanan headset di bagian
              atas kepala anda.
            </Text>
          </div>
        </Col>
      </Row>

      <Row className="mb-space-08">
        <Col>
          <Button
            tag="a"
            href="/product"
            variant="basic"
            className="w-full"
            onClick={() => localStorage.removeItem('selectedDeviceId')}
          >
            Back
          </Button>
        </Col>

        <Col>
          <Button
            tag="a"
            href={`/room/${router.query['room-type']}`}
            variant="primary"
            className="w-full"
          >
            Next
          </Button>
        </Col>
      </Row>
    </Container>
  );
};

export default Tutorial;
