import { Col, Container, Row } from '@smarteye/optic';
import Link from 'next/link';

const Navbar = () => (
  <Container>
    <Row>
      <Col>
        <div className="justify-center py-space-04">
          <Link href="/" aria-label="goto home">
            <img src="/images/logo-smarteye-2x.svg" className="mx-auto flex" alt="logo smarteye" />
          </Link>
        </div>
      </Col>
    </Row>
  </Container>
);

export default Navbar;
