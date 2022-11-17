-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 08:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yusuf`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(2) NOT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `jumlah_barang` int(3) DEFAULT NULL,
  `harga_barang` int(10) NOT NULL,
  `deskripsi` varchar(750) DEFAULT NULL,
  `tanggal_ditambahkan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `jumlah_barang`, `harga_barang`, `deskripsi`, `tanggal_ditambahkan`) VALUES
(1, 'TAS EIGER', 200, 250000, 'TAS EGER LUCU ANTI PEGEL DI JAMIN ORI TAHAN BANTING TAHAN BAKAR ADA GAMBAR BARBIE NYA', '2022-11-14 15:11:56'),
(2, 'SANDAL SWALLOW', 100, 10000, 'SENDAL ANTI MALING KETIKA JUM\'AT AN', '2022-11-14 15:13:54'),
(3, 'keyboard', 10, 15000, 'anti banting tahan air bisa dibawa berenang', '2022-11-17 18:55:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
