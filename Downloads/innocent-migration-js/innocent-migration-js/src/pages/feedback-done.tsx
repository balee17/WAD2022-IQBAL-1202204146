import FeedbackDone from '@/components/View/Feedback/FeedbackDone';
import Head from 'next/head';

const titleTag = 'Thank You | smarteye.id';
const metaDesc =
  'Jasa pembuatan Virtual Reality dan Augmented Reality terbaik, bagian dari Telkom Indonesia. Dapatkan konsultasi gratis untuk bisnis Anda sekarang juga!';

const FeedbackPage = () => (
  <>
    <Head>
      <title>{titleTag}</title>
      <meta name="title" content={titleTag} />
      <meta name="description" content={metaDesc} />
    </Head>

    <FeedbackDone />
  </>
);
export default FeedbackPage;
