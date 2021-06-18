-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 06:41 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_register` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `email`, `tanggal_register`) VALUES
(1, 'test123', '123', '123@test.com', '2021-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `kampanye`
--

CREATE TABLE `kampanye` (
  `id_kampanye` int(11) NOT NULL,
  `nama_kampanye` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_akun` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `tanggal_ditambahkan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kampanye`
--

INSERT INTO `kampanye` (`id_kampanye`, `nama_kampanye`, `deskripsi`, `id_akun`, `target`, `tanggal_ditambahkan`) VALUES
(1, 'Nama Kampanye', 'Lorem Ipsum', 1, 1000000, '2021-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `kampanye_user`
--

CREATE TABLE `kampanye_user` (
  `id` int(11) NOT NULL,
  `id_kampanye` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `donasi` int(11) NOT NULL,
  `tanggal_donasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kampanye_user`
--

INSERT INTO `kampanye_user` (`id`, `id_kampanye`, `id_akun`, `donasi`, `tanggal_donasi`) VALUES
(1, 1, 1, 10000, '2021-06-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `kampanye`
--
ALTER TABLE `kampanye`
  ADD PRIMARY KEY (`id_kampanye`);

--
-- Indexes for table `kampanye_user`
--
ALTER TABLE `kampanye_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kampanye`
--
ALTER TABLE `kampanye`
  MODIFY `id_kampanye` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kampanye_user`
--
ALTER TABLE `kampanye_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
