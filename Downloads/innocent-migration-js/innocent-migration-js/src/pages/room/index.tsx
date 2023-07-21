import Room from '@/components/View/Room/Room';
import { GetRooms } from '@/services/room/http';
import { RoomsType } from 'model/Rooms';
import Head from 'next/head';

// const { NEXT_PUBLIC_APP_URL } = process.env;
const titleTag = 'Jasa Virtual Reality dan Augmented Reality | smarteye.id';
const metaDesc =
  'Jasa pembuatan Virtual Reality dan Augmented Reality terbaik, bagian dari Telkom Indonesia. Dapatkan konsultasi gratis untuk bisnis Anda sekarang juga!';

const RoomPage = (props: { rooms: RoomsType[] }) => (
  <>
    <Head>
      <title>{titleTag}</title>
      <meta name="title" content={titleTag} />
      <meta name="description" content={metaDesc} />
    </Head>

    <Room {...props} />
  </>
);

export async function getServerSideProps() {
  const rooms = await GetRooms().then(res => res);

  return {
    props: { rooms: rooms.data.data }
  };
}

export default RoomPage;
