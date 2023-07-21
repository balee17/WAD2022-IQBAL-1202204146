import Play from '@/components/View/Play/Play';
import Head from 'next/head';

// const { NEXT_PUBLIC_APP_URL } = process.env;
const titleTag = 'Jasa Virtual Reality dan Augmented Reality | smarteye.id';
const metaDesc =
  'Jasa pembuatan Virtual Reality dan Augmented Reality terbaik, bagian dari Telkom Indonesia. Dapatkan konsultasi gratis untuk bisnis Anda sekarang juga!';

const PlayPage = () => (
  <>
    <Head>
      <title>{titleTag}</title>
      <meta name="title" content={titleTag} />
      <meta name="description" content={metaDesc} />
      {/* <link rel="canonical" href={`${NEXT_PUBLIC_APP_URL}/`} /> */}
    </Head>

    {/* <Play /> */}
  </>
);
export default PlayPage;