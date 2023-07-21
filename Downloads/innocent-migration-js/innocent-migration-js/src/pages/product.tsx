import Product from '@/components/View/Product/Product';
import { GetProducts } from '@/services/product/http';
import Head from 'next/head';

const titleTag = 'Our Product | smarteye.id';
const metaDesc =
  'Jasa pembuatan Virtual Reality dan Augmented Reality terbaik, bagian dari Telkom Indonesia. Dapatkan konsultasi gratis untuk bisnis Anda sekarang juga!';

const ProductPages = (props: any) => (
  <>
    <Head>
      <title>{titleTag}</title>
      <meta name="title" content={titleTag} />
      <meta name="description" content={metaDesc} />
      {/* <link rel="canonical" href={`${NEXT_PUBLIC_APP_URL}/`} /> */}
    </Head>
    <Product {...props} />
  </>
);

export async function getServerSideProps() {
  const products = await GetProducts().then(res => res);

  return {
    props: { products: products.data.data }
  };
}

export default ProductPages;
