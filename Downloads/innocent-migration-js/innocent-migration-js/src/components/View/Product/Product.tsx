import { Col, Container, Row, Text } from '@smarteye/optic';
import { ProductsType } from 'model/Products';
import { useCallback, useMemo, useState } from 'react';
import ProductModal from './ProductModal';

type Props = {
  products: ProductsType[];
};

const Product = (props: Props) => {
  const [showModal, setShowModal] = useState<boolean>(false);
  const [selectedProduct, setSelectedProduct] = useState<ProductsType | null>(null);

  const handleProductClick = useCallback((product: ProductsType) => {
    setSelectedProduct(product);
    setShowModal(true);
  }, []);

  const filteredProducts = useMemo(() => {
    return {
      trainingProducts: props.products.filter(
        (product: ProductsType) => product.room_type === 'training'
      ),
      tourProducts: props.products.filter((product: ProductsType) => product.room_type === 'tour'),
      vrlabProducts: props.products.filter((product: ProductsType) => product.room_type === 'vrlab')
    };
  }, [props.products]);

  const { trainingProducts, tourProducts, vrlabProducts } = filteredProducts;

  return (
    <Container>
      <div>
        <Text tag="h2" variant="headline-2" className="mt-space-02 flex justify-center">
          Room Training Section
        </Text>

        <Row className="mt-space-10 justify-center gap-y-space-03 sm:my-space-06">
          {trainingProducts.map((product: ProductsType, index: number) => (
            <Col md={6} sm={12} key={index} className="md:-my-space-08">
              <div
                className="rounded-02 bg-neutral-06 hover:cursor-pointer md:h-2/3"
                onClick={() => handleProductClick(product)}
              >
                <img
                  className="w-full rounded-t-02 md:h-5/6"
                  src={product.image}
                  alt={product.label}
                />

                <div className="flex justify-center">
                  <Text tag="span" className="text-xl font-bold text-neutral-01">
                    {product.label}
                  </Text>
                </div>
              </div>
            </Col>
          ))}
        </Row>
      </div>

      <div>
        <Text tag="h2" variant="headline-2" className="flex justify-center">
          Room Tour Section
        </Text>

        <Row className="mt-space-10 justify-center gap-y-space-03 sm:my-space-06">
          {tourProducts.map((product: ProductsType, index: number) => (
            <Col md={6} sm={12} key={index} className="md:-my-space-08">
              <div
                className="rounded-02 bg-neutral-06 hover:cursor-pointer md:h-2/3"
                onClick={() => handleProductClick(product)}
              >
                <img
                  className="w-full rounded-t-02 md:h-5/6"
                  src={product.image}
                  alt={product.label}
                />

                <div className="flex justify-center">
                  <Text tag="span" className="text-xl font-bold text-neutral-01">
                    {product.label}
                  </Text>
                </div>
              </div>
            </Col>
          ))}
        </Row>
      </div>

      <div>
        <Text tag="h2" variant="headline-2" className="flex justify-center">
          VR Box Section
        </Text>

        <Row className="mb-space-08 mt-space-10 justify-center gap-y-space-03 sm:my-space-06">
          {vrlabProducts.map((product: ProductsType, index: number) => (
            <Col md={6} sm={12} key={index} className="md:-my-space-08">
              <div
                className="rounded-02 bg-neutral-06 hover:cursor-pointer md:h-2/3"
                onClick={() => handleProductClick(product)}
              >
                <img
                  className="w-full rounded-t-02 md:h-5/6"
                  src={product.image}
                  alt={product.label}
                />

                <div className="flex justify-center">
                  <Text tag="span" className="text-xl font-bold text-neutral-01">
                    {product.label}
                  </Text>
                </div>
              </div>
            </Col>
          ))}
        </Row>
      </div>

      <ProductModal
        show={showModal}
        onClose={() => {
          setShowModal(false);
          localStorage.removeItem('selectedDeviceId');
        }}
        product={selectedProduct}
      />
    </Container>
  );
};

export default Product;
