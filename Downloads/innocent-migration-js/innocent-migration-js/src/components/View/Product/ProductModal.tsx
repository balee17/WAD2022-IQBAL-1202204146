/* eslint-disable @typescript-eslint/restrict-template-expressions */
import { Button, Modal } from '@smarteye/optic';
import { ProductsType } from 'model/Products';
import { BigPlayButton, Player } from 'video-react';
import { useRouter } from 'next/router';
import { useCallback } from 'react';
import { UpdateDeviceStatus } from '@/services/device/http';
import { DevicesType } from 'model/Devices';

interface Props {
  show: boolean;
  onClose: () => void;
  product: ProductsType | null;
}

const ProductModal = ({ show, onClose, product }: Props) => {
  const router = useRouter();

  const handleProductClick = useCallback(() => {
    if (product) {
      localStorage.setItem('selectedDeviceId', product.id.toString());
      router.push(`/tutorial?room-type=${product.room_type}`);
    }
  }, [product, router]);

  return (
    <Modal shown={show} onClose={onClose} headless>
      {product && (
        <div>
          <Player autoPlay src={product.link}>
            <BigPlayButton position="center" />
          </Player>

          <div className="mt-space-02 flex justify-between">
            <Button variant="basic" onClick={onClose}>
              Close
            </Button>

            <Button onClick={handleProductClick} variant="primary">
              Next
            </Button>
          </div>
        </div>
      )}
    </Modal>
  );
};

export default ProductModal;
