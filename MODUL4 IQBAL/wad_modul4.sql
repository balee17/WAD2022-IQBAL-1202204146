-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3315
-- Generation Time: Nov 27, 2022 at 01:01 PM
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
-- Database: `wad_modul4`
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
(2, 'BMW M2 Competition', 'Iqbal Maulana Harahap - 1202204146', 'BMW', '2022-11-20', 'hhhhhhhhhhhhhhhhhhhhh', 'M4.jpg', 'belum lunas'),
(5, 'BMW 320i', 'Iqbal Maulana Harahap - 1202204146', 'BMW', '2022-11-20', 'BMW 320i dilengkapi dengan mesin TwinPower Turbo 4 cylinder 2.0 liter dengan kapasitas 1.988 cc. Dengan mesin tersebut, performa BMW 320i bisa dibilang sangat bagus.', '320i.jpg', 'Lunas'),
(6, 'BMW Z4', 'Iqbal Maulana Harahap - 1202204146', 'BMW', '2022-11-20', 'BMW Z4 adalah mobil sport RWD yang diproduksi oleh produsen mobil Jerman, BMW, yang disebut sebagai E85 dalam bentuk roadster dan E86 dalam bentuk coupe.', 'Z4.jpg', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(2, 'iqbal', 'vall@gmail.com', '$2y$10$q6PjL7UtYOvk8ieuoMR3We4P6mmRLSYMngYWExPT3adqlMaqkwa4m', '12345'),
(3, '', 'iqbal@gmail.com', '$2y$10$Hcba5GOKVH.lZrwgMn6KwOpukt06elBWJVeLSCaQCn4G4mqx00Fz6', ''),
(4, 'iqbal', 'bal@gmail.com', '$2y$10$xr9gaqKmW5NVJ99uv6YZMegtF5mPGamq8BUiO6SD5i0k4k6uVb5RW', '0987654'),
(5, 'maulana', 'croftid78@gmail.com', '$2y$10$DedeecNbWphWzY/8jKUu7Oj9QsroGXAE06yMMbV2fN9PtJo5adZyy', '0986890'),
(6, 'iqbal', 'iqbalmaulana8533@gmail.com', '$2y$10$m907fn/zZt21tC8WeSMWzOrDPgGi/aCIBlza8sk5lplGGqZOBh4HO', '0987665577'),
(7, 'iqbal maulana', 'iqballl@gmail.com', '$2y$10$pHvzChaF5QWhJrNSxmFRbOdLvF9xvYpYZwSDhUGS5q4ug90OuM2j2', '1234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_iqbal_table`
--
ALTER TABLE `showroom_iqbal_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_iqbal_table`
--
ALTER TABLE `showroom_iqbal_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
