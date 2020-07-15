-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2020 at 05:12 AM
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
-- Database: `cart_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(43, 'Parfum Wanita', '50000', 'ppp.jpeg', 5, '250000', '212'),
(44, 'Parfum Wanita', '60000', 'parfm.jpeg', 1, '60000', '11121'),
(45, 'Parfum 1', '50000', 'parffum.jpg', 1, '50000', '1212');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pmode` varchar(250) NOT NULL,
  `products` varchar(250) NOT NULL,
  `amount_paid` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(1, 'Ikhs an', 'mzanzan21@gmail.com', 's', 'Jalan Sei Musi', 'cod', 'batu(10), bunga(5)', '535000'),
(2, 'Ikhs an', 'kazan@gmail.com', '2121', 'Jalan Sei Musi', 'netbanking', 'batu(10), bunga(5)', '535000'),
(3, 'sada@', 's@gm', 's', 'Jalan Sei Musi', 'netbanking', 'batum(2), Kan(2), Kansas(3), s(4)', '14853'),
(4, 'Ikhs an', 'kazan@gmail.com', '2121', 'Jalan Sei Musi', 'cod', 'batum(2), Kan(2), Kansas(3)', '13033'),
(5, 'Ikhs an', 'kazan@gmail.com', '6282169953034', 'Jalan Sei Musi', 'cod', 'batum(4), Kan(3), Kansas(4)', '25544'),
(6, 'medan', 'kazan@gmail.com', 'user', 's', 'cod', 'batum(1), Kan(1), Kansas(1), s(1)', '6966'),
(7, 'Ikhs an', 'kazan@gmail.com', 'user', 'Jalan Sei Musi', 'cod', 'Parfum Wanita(1), Parfum 1(1), IM Parfum Pria(1)', '150000'),
(8, 'medan', 's@gm', 'user', 's', 'cod', 'Parfum Wanita(1), Parfum 1(1), IM Parfum Pria(1)', '150000'),
(9, 'ikhsa', 'kazan@gmail.com', 'user', 'Jalan Medan', 'netbanking', 'Parfum Wanita(2), IM Parfum Pria(3), Parfum 1(4)', '440000'),
(10, 'Madan', 'kazan@gmail.com', '0921', 'Jalan', 'cod', 'Parfum Wanita(3), Parfum 1(3)', '330000');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `product_weight` varchar(250) NOT NULL,
  `product_quantity` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_image`, `product_code`, `product_weight`, `product_quantity`) VALUES
(2, 'Parfum Wanita', '60000', 'parfm.jpeg', '11121', '80 ML', 4),
(3, 'Parfum 1', '50000', 'parffum.jpg', '1212', '60 ML', 5),
(4, 'IM Parfum Pria', '40000', 'parfum.jpeg', '1721921', '60 ML', 3),
(5, 'Parfum Wanita', '45500', 'parfum.jpg', 's', '30 ML', 4),
(6, 'Parfum Pria', '90000', 'PAR.jpeg', '910', '90 ML', 2),
(7, 'Parfum Wanita', '50000', 'ppp.jpeg', '212', '30 ML', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `alamat`, `no_hp`, `level`) VALUES
(1, 'sadsadasd', 'sda', 'sa', 'sa', 'das', '0'),
(2, 's', 's', '$2y$10$zLtcakgxgBgl/pA9NADFCevxma9H9meMRDEruU53.XQZFHCPIxQgq', 'sm', 's', '0'),
(3, 's', 's', '$2y$10$DzbWVUvWCDKglt4.8xoKvO.Ct2BljdpGnDkPJ2/KeuMVVrjAYN4ey', 'sm', 's', '0'),
(5, 'aji', 'aji', '$2y$10$Kxoi7kBfqSNy0LFNxg2iYe9k/s9dcmGvqAKdJ5dQ7EWZM1wKKpy3y', 'aji', '21', '0'),
(6, 'mumu', 'mumu', '$2y$10$LO2LQDzSadz/1v4d5h.QeOvKzjuUwz1fRDWXxz6duFqCV52MARud.', 'muum', 'q', 'user'),
(7, '1', '1222', '$2y$10$3JGCb7.nc3u6t6X5UQMy7.q4aon2yqu/kK4sOPcD4qeuoisXmxfpi', '1', '1', 'user'),
(8, '11', '1', '$2y$10$ihvXJIa0gYPG88d74HEtvuKqbWTjUawkkLIS7xGMSgmm1h6wFKiYS', '1', '1', 'user'),
(9, '1', '1', '$2y$10$NzuyMA.bpHPguzzttB4Q0.QHksp0LLUevqSd97Kmf63zWfzke3uHe', '1', '1', 'user'),
(10, 'hellosan', '1', '$2y$10$fSgylUvaPCVpRMFIi4l/0.KNDoQW5AI7wFgCF3LM3MKisMcCMcj9i', 'medan', '010', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
