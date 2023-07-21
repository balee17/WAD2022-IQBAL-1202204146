import Footer from '@/components/Layout/Footer/Footer';
import Navbar from '@/components/Layout/Navbar/Navbar';
import '@/styles/globals.scss';
import type { AppProps } from 'next/app';
import { useRouter } from 'next/router';

export default function App({ Component, pageProps }: AppProps) {
  const route = useRouter();
  const backgroundImage =
    route.asPath === '/' ? "url('/images/bg-home.jpg')" : "url('/images/bg-room.jpg')";

  return (
    <div
      style={{
        backgroundImage: backgroundImage,
        backgroundSize: 'cover',
        color: '#fff'
      }}
    >
      <Navbar />
      <Component {...pageProps} />
      <Footer />
    </div>
  );
}
