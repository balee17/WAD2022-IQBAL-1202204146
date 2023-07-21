import { Button, Col, Container, Row, Text } from '@smarteye/optic';

const HomeCTA = () => (
  <Container className="-mt-space-08 flex h-screen items-center justify-center">
    <Row>
      <Col className="space-y-space-02 text-center">
        <Text tag="p" variant="headline-1">
          Break Free from Reality
        </Text>

        <Text>Wujudkan imajinasi menjadi kenyataan dalam virtual dan augmented reality.</Text>

        <Button tag="a" href="/product" variant="primary" className="mx-auto my-space-02 w-full">
          Explore Room
        </Button>
      </Col>
    </Row>
  </Container>
);

export default HomeCTA;
