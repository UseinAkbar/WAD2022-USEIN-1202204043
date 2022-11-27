-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 02:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `showroom_usein_table`
--

CREATE TABLE `showroom_usein_table` (
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
-- Dumping data for table `showroom_usein_table`
--

INSERT INTO `showroom_usein_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(29, 'Fortuner', 'Usein-1202204043', 'Toyota', '2022-11-20', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, atque dolorum vitae magni incidunt, corporis repellat quis officia odio modi impedit aliquam cumque iure quae ratione illum enim animi. Libero.', 'fortuner-black.png', 'lunas'),
(31, 'Kijang', 'Usein-1202204043', 'Toyota', '2022-11-20', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, atque dolorum vitae magni incidunt, corporis repellat quis officia odio modi impedit aliquam cumque iure quae ratione illum enim animi. Libero.', 'kijang.jpg', 'belum lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_usein_table`
--
ALTER TABLE `showroom_usein_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_usein_table`
--
ALTER TABLE `showroom_usein_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
