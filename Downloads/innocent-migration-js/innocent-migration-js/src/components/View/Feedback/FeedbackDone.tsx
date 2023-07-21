import { Button, Col, Container, Row, Text } from '@smarteye/optic';

const FeedbackDone = () => (
  <Container className="my-space-10 flex justify-center text-center">
    <Row>
      <Col md={12} sm={12}>
        <Text tag="h1" variant="headline-1" className="mt-space-08">
          Terimakasih!
        </Text>

        <Text tag="span">
          Kamu sudah menyelesaikan sesi di ruangan ini. Jika ingin melakukan sesi lagi, kamu bisa
          memilih ruangan lagi.
        </Text>
      </Col>

      <Col md={12} sm={12}>
        <Button
          className="mb-space-10 mt-space-02 w-full"
          tag="a"
          onClick={() => {
            localStorage.removeItem('selectedDeviceId');
            // localStorage.removeItem('isSessionStarted');
            // localStorage.removeItem('isRunning');
          }}
          href="/"
        >
          Kembali ke Lobby
        </Button>
      </Col>
    </Row>
  </Container>
);

export default FeedbackDone;
