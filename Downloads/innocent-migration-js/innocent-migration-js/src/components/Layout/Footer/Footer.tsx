import { Col, Container, Icon, Row, Text } from '@smarteye/optic';
import Link from 'next/link';
import style from './Footer.module.scss';
import { socials, products } from './constant';

const Footer = () => (
  <div className={style.footer}>
    <Container tag="footer">
      <img
        src="/images/logo-smarteye-2x.svg"
        alt="Wordmark Light"
        width="250"
        className="mb-space-03"
      />
      <Row>
        <Col sm={12} md={4} className="sm:pb-spacing-04">
          <Text className="mt-spacing-04">The Telkom Hub</Text>

          <Text className="border-dark-03 text-light-03 sm:pb-spacing-04">
            Jl. Gatot Subroto No.Kav. 52, RT.6/RW.1, <br />
            West Kuningan, Mampang Prapatan, <br />
            South Jakarta City, Jakarta 12710
          </Text>
        </Col>

        <Col sm={12} md={5} className="my-space-02">
          <Text tag="h3" variant="caption" className="text-light-03">
            Products and Services
          </Text>

          <nav className="mt-spacing-02 gap-spacing-02 flex flex-col">
            {products.map((v, i) => (
              <Link href={v.link} key={i} className="block">
                <Text tag="span">{v.label}</Text>
              </Link>
            ))}
          </nav>
        </Col>

        {/* <Col sm={6} md={2}>
          <nav className="mt-spacing-02 gap-spacing-02 flex flex-col">
            {mores.map((v, i) => (
              <Link key={i} href={v.link} className="block" rel="noreferrer">
                <Text tag="span">{v.label}</Text>
              </Link>
            ))}
          </nav>
        </Col> */}

        <Col sm={12} md={3} className="sm:pt-spacing-04">
          <Text variant="headline-3" className="mb-spacing-01 border-dark-03 sm:pt-spacing-04">
            contact@smarteye.id
          </Text>

          <div className="flex items-center">
            <Text tag="small" variant="caption">
              +62 8118 982 11
            </Text>

            <Text tag="small" variant="caption" className="text-light-03">
              &nbsp; - WhatsApp and call
            </Text>
          </div>

          <div className="flex items-center">
            <Text tag="small" variant="caption">
              +62 8129 312 9571
            </Text>

            <Text tag="small" variant="caption" className="text-light-03">
              &nbsp; - WhatsApp only
            </Text>
          </div>

          <div className={style.footer__social}>
            {socials.map((v, i) => (
              <Link
                key={i}
                href={v.link}
                title={v.icon}
                target="_blank"
                rel="noreferrer"
                className={style.footer__social__btn}
              >
                <Icon name={v.icon} color="text-dark-01" />
              </Link>
            ))}
          </div>
        </Col>
      </Row>
    </Container>
  </div>
);

export default Footer;
