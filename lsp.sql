-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 09:02 AM
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
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `no_identitas` varchar(128) NOT NULL,
  `tipe_kamar` varchar(128) NOT NULL,
  `harga` float NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `durasi` int(10) NOT NULL,
  `include_breakfast` varchar(128) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_pemesan`, `jenis_kelamin`, `no_identitas`, `tipe_kamar`, `harga`, `tanggal_pesan`, `durasi`, `include_breakfast`, `total`) VALUES
(10, 'Rizki Ramadhan', 'Laki Laki', '3276050712000732', 'Standar', 500000, '2023-08-25', 3, 'Ya', 1580000);

-- --------------------------------------------------------

--
-- Table structure for table `produk_kamar`
--

CREATE TABLE `produk_kamar` (
  `id_kamar` int(11) NOT NULL,
  `tipe_kamar` varchar(128) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `Harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk_kamar`
--

INSERT INTO `produk_kamar` (`id_kamar`, `tipe_kamar`, `photo`, `Harga`) VALUES
(1, 'Standar', 'asset/img/pexels-pixabay-271624-min.jpg', 500000),
(2, 'Deluxe', 'asset/img/pexels-pixabay-271619-min.jpg', 1000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `produk_kamar`
--
ALTER TABLE `produk_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk_kamar`
--
ALTER TABLE `produk_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
