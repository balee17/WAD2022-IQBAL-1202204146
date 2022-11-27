-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3315
-- Generation Time: Nov 20, 2022 at 12:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_iqbal_table`
--

CREATE TABLE `showroom_iqbal_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_iqbal_table`
--

INSERT INTO `showroom_iqbal_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(1, 'BMW M4', 'Iqbal Maulana Harahap - 1202204146', 'BMW', '2022-11-20', 'BMW M4 adalah mobil versi performa tinggi dari 4 Series yang diproduksi oleh divisi motorsport milik BMW, BMW M GmbH. M4 adalah salah satu model M paling kencang yang pernah dibuat BMW dengan 0-100 km/jam (0-62 mil/jam) hanya 4 detik.', 'M4.jpg', 'Lunas'),
(2, 'BMW M2 Competition', 'Iqbal Maulana Harahap - 1202204146', 'BMW', '2022-11-20', 'BMW M2 Competition ini ditenagai dua pilihan mesin Bensin berkapasitas 2979 cc. M2 Competition tersedia dengan transmisi Manual and Dual Clutch tergantung variannya. M2 Competition adalah Coupe 5 seater dengan panjang 4475 mm, lebar 1854 mm, wheelbase 2692 mm. serta ground clearance 122 mm.', 'M2 Compe.jpg', 'Lunas'),
(5, 'BMW 320i', 'Iqbal Maulana Harahap - 1202204146', 'BMW', '2022-11-20', 'BMW 320i dilengkapi dengan mesin TwinPower Turbo 4 cylinder 2.0 liter dengan kapasitas 1.988 cc. Dengan mesin tersebut, performa BMW 320i bisa dibilang sangat bagus.', '320i.jpg', 'Lunas'),
(6, 'BMW Z4', 'Iqbal Maulana Harahap - 1202204146', 'BMW', '2022-11-20', 'BMW Z4 adalah mobil sport RWD yang diproduksi oleh produsen mobil Jerman, BMW, yang disebut sebagai E85 dalam bentuk roadster dan E86 dalam bentuk coupe.', 'Z4.jpg', 'Lunas'),
(7, 'Toyota GR 86', 'Iqbal Maulana Harahap - 1202204146', 'Toyota', '2022-11-20', 'Mesin Toyota GR 86 ini menggunakan mesin bertipe 4-cylinders, horizontally-opposed, DOHC, 16-valves. Mesin tersebut mobil ini dapat menghasilkan tenaga hingga 173 (235) / 7.000 ps/rpm dengan besaran silinder hingga 2.387 cc.', 'GR.png', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_iqbal_table`
--
ALTER TABLE `showroom_iqbal_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_iqbal_table`
--
ALTER TABLE `showroom_iqbal_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
