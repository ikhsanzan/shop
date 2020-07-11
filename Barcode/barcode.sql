-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2020 at 08:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat_pelanggan`
--

CREATE TABLE `alamat_pelanggan` (
  `id_pelanggan` int(50) NOT NULL,
  `alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id`, `username`, `email`, `password`, `alamat`, `no_hp`, `level`) VALUES
(1, 'sadsadasd', 'sda', 'sa', 'sa', 'das', '0'),
(2, 's', 's', '$2y$10$zLtcakgxgBgl/pA9NADFCevxma9H9meMRDEruU53.XQZFHCPIxQgq', 'sm', 's', '0'),
(3, 's', 's', '$2y$10$DzbWVUvWCDKglt4.8xoKvO.Ct2BljdpGnDkPJ2/KeuMVVrjAYN4ey', 'sm', 's', '0'),
(5, 'aji', 'aji', '$2y$10$Kxoi7kBfqSNy0LFNxg2iYe9k/s9dcmGvqAKdJ5dQ7EWZM1wKKpy3y', 'aji', '21', '0'),
(6, 'mumu', 'mumu', '$2y$10$LO2LQDzSadz/1v4d5h.QeOvKzjuUwz1fRDWXxz6duFqCV52MARud.', 'muum', 'q', 'user'),
(7, '1', '1', '$2y$10$3JGCb7.nc3u6t6X5UQMy7.q4aon2yqu/kK4sOPcD4qeuoisXmxfpi', '1', '1', 'user'),
(8, '1', '1', '$2y$10$ihvXJIa0gYPG88d74HEtvuKqbWTjUawkkLIS7xGMSgmm1h6wFKiYS', '1', '1', 'user'),
(9, '1', '1', '$2y$10$NzuyMA.bpHPguzzttB4Q0.QHksp0LLUevqSd97Kmf63zWfzke3uHe', '1', '1', 'user'),
(10, 'hellosan', '1', '$2y$10$fSgylUvaPCVpRMFIi4l/0.KNDoQW5AI7wFgCF3LM3MKisMcCMcj9i', 'S', 'S', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(50) NOT NULL,
  `barcode_id` int(250) NOT NULL,
  `photo` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(50) NOT NULL,
  `id_barcode` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `nama_produk` varchar(250) NOT NULL,
  `harga` varchar(250) NOT NULL,
  `berat` varchar(250) NOT NULL,
  `stok_barang` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_barcode`, `gambar`, `nama_produk`, `harga`, `berat`, `stok_barang`) VALUES
(9, 'ff', 'Kue Talam.jpg', 'yy', '1', 'yy', 12),
(10, 'baru', 'Klepon.jpg', 'anr', '4', 's', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(50) NOT NULL,
  `id_pelanggan` varchar(250) NOT NULL,
  `id_barcode` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `jumlah` varchar(250) NOT NULL,
  `total_harga` varchar(250) NOT NULL,
  `pembayaran` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat_pelanggan`
--
ALTER TABLE `alamat_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat_pelanggan`
--
ALTER TABLE `alamat_pelanggan`
  MODIFY `id_pelanggan` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
