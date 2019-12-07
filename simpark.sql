-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 09:03 AM
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
(1, 'Abdurrosyiid Amrullah', 'Dsn Pilang Rejo Ds Kedungpring Kec Balongpanggang', '85748688232', 3),
(3, 'tes admin', 'rhs', '92039190', 15);

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
(5, 'Area C', 1000, 'Mobil', 500, 500);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_pemarkir` int(5) NOT NULL,
  `id_kendaraan` int(5) NOT NULL,
  `id_area` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
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
  `id_kendaraan` int(11) NOT NULL,
  `nopol` varchar(7) NOT NULL,
  `jenis_kendaraan` varchar(5) NOT NULL,
  `type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `nopol`, `jenis_kendaraan`, `type`) VALUES
(1, 's2887wl', 'motor', 'matic'),
(2, 's2887wl', 'motor', 'matic'),
(3, 'awqdwq', 'Motor', 'Bebek');

-- --------------------------------------------------------

--
-- Table structure for table `parkir`
--

CREATE TABLE `parkir` (
  `id_parkir` int(11) NOT NULL,
  `id_pemarkir` int(5) NOT NULL,
  `id_petugas` int(5) NOT NULL,
  `id_area` int(5) NOT NULL,
  `id_kendaraan` int(5) NOT NULL,
  `tanggal` datetime NOT NULL,
  `action` enum('Masuk','Keluar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkir`
--

INSERT INTO `parkir` (`id_parkir`, `id_pemarkir`, `id_petugas`, `id_area`, `id_kendaraan`, `tanggal`, `action`) VALUES
(1, 3, 3, 4, 1, '2019-12-07 00:00:00', 'Masuk'),
(2, 4, 3, 5, 2, '2019-12-04 00:00:00', 'Masuk');

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
(3, 'rosyiid', 'Pilang Rejo', '8578688232', 14),
(4, 'tesregis', 'tesregis', '1235345', 17),
(5, 'tesregis2', 'tesregis2', '1235345', 18);

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
(3, 'simona', 'pilangrejo', '8578688232', 13);

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
(14, 'user', 'user', 'user'),
(15, 'tesadmin', 'tesadmin', 'admin'),
(17, 'tesregis', 'tesregis', 'user'),
(18, 'tesregis2', 'tesregis2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_admin_user` (`id_user`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `fk_booking_pemarkir` (`id_pemarkir`),
  ADD KEY `fk_booking_kendaraan` (`id_kendaraan`),
  ADD KEY `fk_booking_area` (`id_area`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `parkir`
--
ALTER TABLE `parkir`
  ADD PRIMARY KEY (`id_parkir`),
  ADD KEY `fk_parkir_pemarkir` (`id_pemarkir`),
  ADD KEY `fk_parkir_petugas` (`id_petugas`),
  ADD KEY `fk_parkir_area` (`id_area`),
  ADD KEY `fk_parkir_kendaraan` (`id_kendaraan`);

--
-- Indexes for table `pemarkir`
--
ALTER TABLE `pemarkir`
  ADD PRIMARY KEY (`id_pemarkir`),
  ADD KEY `fk_pemarkir_user` (`id_user`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `fk_petuagas_user` (`id_user`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parkir`
--
ALTER TABLE `parkir`
  MODIFY `id_parkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemarkir`
--
ALTER TABLE `pemarkir`
  MODIFY `id_pemarkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_area` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_booking_kendaraan` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_booking_pemarkir` FOREIGN KEY (`id_pemarkir`) REFERENCES `pemarkir` (`id_pemarkir`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parkir`
--
ALTER TABLE `parkir`
  ADD CONSTRAINT `fk_parkir_area` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parkir_kendaraan` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parkir_pemarkir` FOREIGN KEY (`id_pemarkir`) REFERENCES `pemarkir` (`id_pemarkir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parkir_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemarkir`
--
ALTER TABLE `pemarkir`
  ADD CONSTRAINT `fk_pemarkir_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `fk_petuagas_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
