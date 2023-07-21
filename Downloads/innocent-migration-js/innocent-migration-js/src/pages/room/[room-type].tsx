/* eslint-disable @typescript-eslint/restrict-template-expressions */
import Room from '@/components/View/Room/Room';
import { FindDeviceByRoomType } from '@/services/device/http';
import { FindRoomByRoomType } from '@/services/room/http';
import { CategoryType } from 'model/Products';
import { RoomsType } from 'model/Rooms';
import { GetServerSidePropsContext } from 'next';
import Head from 'next/head';

// const { NEXT_PUBLIC_APP_URL } = process.env;
const titleTag = 'Room | smarteye.id';
const metaDesc =
  'Jasa pembuatan Virtual Reality dan Augmented Reality terbaik, bagian dari Telkom Indonesia. Dapatkan konsultasi gratis untuk bisnis Anda sekarang juga!';

const RoomCategory = (props: { rooms: RoomsType[] }) => (
  <>
    <Head>
      <title>{titleTag}</title>
      <meta name="title" content={titleTag} />
      <meta name="description" content={metaDesc} />
      {/* <link rel="canonical" href={`${NEXT_PUBLIC_APP_URL}/`} /> */}
    </Head>
    <Room {...props} />
  </>
);

export async function getServerSideProps(context: GetServerSidePropsContext) {
  const res = await FindRoomByRoomType(context.query['room-type'] as CategoryType);
  const content = res.data;

  return { props: { rooms: content.data } };
}

export default RoomCategory;
