-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 02:19 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpark`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` decimal(15,0) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `alamat`, `nohp`, `id_user`) VALUES
(1, 'Abdurrosyiid Amrullah', 'Dsn Pilang Rejo Ds Kedungpring Kec Balongpanggang', '85748688232', 3);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `luas` int(11) NOT NULL,
  `jenis` enum('Motor','Mobil') NOT NULL,
  `jumlahareakosong` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id_area`, `nama`, `luas`, `jenis`, `jumlahareakosong`, `kapasitas`) VALUES
(1, 'Area A', 1200, 'Motor', 1000, 1000),
(4, 'Area B', 1000, 'Motor', 200, 200),
(5, 'Area C', 1000, 'Motor', 500, 500);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_pemarkir` int(5) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `nopol` varchar(7) NOT NULL,
  `id_kendaraan` int(5) NOT NULL,
  `jenis` varchar(5) NOT NULL,
  `no_hp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal kerja`
--

CREATE TABLE `jadwal kerja` (
  `id_petugas` int(5) NOT NULL,
  `tgl` varchar(8) NOT NULL,
  `jam` int(4) NOT NULL,
  `sift` varchar(5) NOT NULL,
  `action` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal kerja`
--

INSERT INTO `jadwal kerja` (`id_petugas`, `tgl`, `jam`, `sift`, `action`) VALUES
(1245, '12', 7, 'pagi', 'masuk'),
(1245, '12', 7, 'pagi', 'masuk'),
(11234, '11', 19, 'malam', 'masuk'),
(11234, '11', 19, 'malam', 'masuk');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(5) NOT NULL,
  `nopol` varchar(7) NOT NULL,
  `jenis kendaraan` varchar(5) NOT NULL,
  `type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `nopol`, `jenis kendaraan`, `type`) VALUES
(1991, 's2887wl', 'motor', 'matic'),
(1991, 's2887wl', 'motor', 'matic');

-- --------------------------------------------------------

--
-- Table structure for table `parkir`
--

CREATE TABLE `parkir` (
  `id_pemarkir` int(5) NOT NULL,
  `id_petugas` int(5) NOT NULL,
  `id_area` int(5) NOT NULL,
  `id_kendaraan` int(5) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `jam` int(4) NOT NULL,
  `action` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemarkir`
--

CREATE TABLE `pemarkir` (
  `id_pemarkir` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` decimal(15,0) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemarkir`
--

INSERT INTO `pemarkir` (`id_pemarkir`, `nama`, `alamat`, `nohp`, `id_user`) VALUES
(3, 'Area C', 'Pilang Rejo', '8578688232', 14);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` decimal(15,0) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `alamat`, `nohp`, `id_user`) VALUES
(3, 'Area B', 'pilangrejo', '8578688232', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('admin','petugas','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(3, 'admin', 'admin', 'admin'),
(6, 'petugas', 'petugas', 'petugas'),
(8, 'jancuk', 'jancuk', 'admin'),
(13, 'tes', 'tes3', 'petugas'),
(14, 'admi', 'tes3', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indexes for table `pemarkir`
--
ALTER TABLE `pemarkir`
  ADD PRIMARY KEY (`id_pemarkir`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemarkir`
--
ALTER TABLE `pemarkir`
  MODIFY `id_pemarkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
