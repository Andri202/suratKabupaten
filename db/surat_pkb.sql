-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 07:58 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_pkb`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(2) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_itg`
--

CREATE TABLE `surat_itg` (
  `id` int(8) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenisKelamin` int(1) NOT NULL,
  `tempatLahir` varchar(255) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `agama` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tempatKerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `surat_itg`
--

INSERT INTO `surat_itg` (`id`, `nama`, `jenisKelamin`, `tempatLahir`, `tanggalLahir`, `agama`, `kewarganegaraan`, `pekerjaan`, `alamat`, `tempatKerja`) VALUES
(1, 'Andri', 1, 'Bandung', '2017-12-03', 'Islam', 'Indonesia', 'Wirasuasta', 'Bandung', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `surat_sikpg`
--

CREATE TABLE `surat_sikpg` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempatLahir` varchar(255) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `tempatGigi` varchar(255) NOT NULL,
  `noSipg` varchar(255) NOT NULL,
  `noStrpg` varchar(255) NOT NULL,
  `maxBerlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_sikpg`
--

INSERT INTO `surat_sikpg` (`id`, `nama`, `tempatLahir`, `tanggalLahir`, `tempatGigi`, `noSipg`, `noStrpg`, `maxBerlaku`) VALUES
(1, 'Fani Nurachman', 'Pacet', '2017-12-03', 'Bandung', '2312412', '', '2017-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `surat_sipbidan`
--

CREATE TABLE `surat_sipbidan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempatLahir` varchar(255) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `alamat_praktik` varchar(255) NOT NULL,
  `noSib` varchar(255) NOT NULL,
  `noStr` varchar(255) NOT NULL,
  `maxBerlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_sipbidan`
--

INSERT INTO `surat_sipbidan` (`id`, `nama`, `tempatLahir`, `tanggalLahir`, `alamat_rumah`, `alamat_praktik`, `noSib`, `noStr`, `maxBerlaku`) VALUES
(1, 'Andri Gunawan', 'Bandung', '2017-12-03', 'Banjirsari, No.3', 'Arcamanik No.A12', '321242123', '', '2017-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idRole` varchar(2) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_itg`
--
ALTER TABLE `surat_itg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_sikpg`
--
ALTER TABLE `surat_sikpg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_sipbidan`
--
ALTER TABLE `surat_sipbidan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`idRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surat_itg`
--
ALTER TABLE `surat_itg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_sikpg`
--
ALTER TABLE `surat_sikpg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_sipbidan`
--
ALTER TABLE `surat_sipbidan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
