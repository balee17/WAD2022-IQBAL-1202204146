import { Col, Container, Row, Text } from '@smarteye/optic';
import RoomCard from './RoomCard';

const Room = (props: any) => {
  return (
    <Container>
      <Row>
        <Col>
          <div className="my-space-04 text-center">
            <Text tag="h1" variant="headline-1">
              Explore our virtual world
            </Text>

            <Text tag="span">
              Anda berada dalam virtual world. Silahkan memilih ruangan yang tersedia.
            </Text>
          </div>

          <RoomCard {...props} />
        </Col>
      </Row>
    </Container>
  );
};

export default Room;
