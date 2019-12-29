-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 29 Des 2019 pada 14.29
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` decimal(15,0) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `alamat`, `nohp`, `id_user`) VALUES
(1, 'Abdurrosyiid Amrullah', 'Dsn Pilang Rejo Ds Kedungpring Kec Balongpanggang', '85748688232', 3),
(3, 'tes admin', 'rhs', '92039190', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `area`
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
-- Dumping data untuk tabel `area`
--

INSERT INTO `area` (`id_area`, `nama`, `luas`, `jenis`, `jumlahareakosong`, `kapasitas`) VALUES
(1, 'Area A', 1200, 'Motor', 996, 1000),
(4, 'Area B', 1000, 'Motor', 199, 200),
(5, 'Area C', 1000, 'Mobil', 500, 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_pemarkir` int(5) NOT NULL,
  `id_kendaraan` int(5) NOT NULL,
  `id_area` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` enum('Booking','Masuk','Keluar','Tidak Berlaku') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `id_pemarkir`, `id_kendaraan`, `id_area`, `tanggal`, `status`) VALUES
(1, 3, 7, 1, '2019-12-29 20:10:48', 'Keluar'),
(2, 3, 7, 4, '2019-12-29 20:10:44', 'Keluar'),
(8, 3, 7, 1, '2019-12-29 20:10:37', 'Keluar'),
(9, 3, 7, 1, '2019-12-29 19:28:36', 'Keluar'),
(10, 3, 8, 1, '2019-12-29 20:10:07', 'Keluar'),
(11, 3, 8, 1, '2019-12-29 20:18:58', 'Keluar'),
(12, 3, 7, 1, '2019-12-29 20:19:11', 'Keluar'),
(13, 3, 7, 4, '2019-12-29 20:19:23', 'Keluar'),
(14, 3, 7, 5, '2019-12-29 20:19:38', 'Keluar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal kerja`
--

CREATE TABLE `jadwal kerja` (
  `id_petugas` int(5) NOT NULL,
  `tgl` varchar(8) NOT NULL,
  `jam` int(4) NOT NULL,
  `sift` varchar(5) NOT NULL,
  `action` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal kerja`
--

INSERT INTO `jadwal kerja` (`id_petugas`, `tgl`, `jam`, `sift`, `action`) VALUES
(1245, '12', 7, 'pagi', 'masuk'),
(1245, '12', 7, 'pagi', 'masuk'),
(11234, '11', 19, 'malam', 'masuk'),
(11234, '11', 19, 'malam', 'masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `nopol` varchar(10) NOT NULL,
  `jenis_kendaraan` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `nopol`, `jenis_kendaraan`, `type`, `id_user`) VALUES
(7, 'L 1234 WK', 'Motor', 'Manual', 14),
(8, 'W 4123 G', 'Motor', 'Manual', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `parkir`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemarkir`
--

CREATE TABLE `pemarkir` (
  `id_pemarkir` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` decimal(15,0) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemarkir`
--

INSERT INTO `pemarkir` (`id_pemarkir`, `nama`, `alamat`, `nohp`, `id_user`) VALUES
(3, 'rosyiid', 'Pilang Rejo', '8578688232', 14),
(4, 'tesregis', 'tesregis', '1235345', 17),
(5, 'tesregis2', 'tesregis2', '1235345', 18),
(7, 'ochik', 'balongpanggang', '2313276', 20),
(8, 'bayu', 'bayu', '123132', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` decimal(15,0) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `alamat`, `nohp`, `id_user`) VALUES
(3, 'simona', 'pilangrejo', '8578688232', 13),
(4, 'petugas rosyiid', 'balongpanggang', '923897434', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('admin','petugas','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(3, 'admin', 'admin', 'admin'),
(6, 'petugas', 'petugas', 'petugas'),
(8, 'jancuk', 'jancuk', 'admin'),
(13, 'tes', 'tes3', 'petugas'),
(14, 'user', 'user', 'user'),
(15, 'tesadmin', 'tesadmin', 'admin'),
(17, 'tesregis', 'tesregis', 'user'),
(18, 'tesregis2', 'tesregis2', 'user'),
(20, 'ochik', 'ochik', 'user'),
(21, 'bayu', 'bayu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_admin_user` (`id_user`);

--
-- Indeks untuk tabel `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `fk_booking_pemarkir` (`id_pemarkir`),
  ADD KEY `fk_booking_kendaraan` (`id_kendaraan`),
  ADD KEY `fk_booking_area` (`id_area`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD KEY `fk_kendaraan_user` (`id_user`);

--
-- Indeks untuk tabel `parkir`
--
ALTER TABLE `parkir`
  ADD PRIMARY KEY (`id_parkir`),
  ADD KEY `fk_parkir_pemarkir` (`id_pemarkir`),
  ADD KEY `fk_parkir_petugas` (`id_petugas`),
  ADD KEY `fk_parkir_area` (`id_area`),
  ADD KEY `fk_parkir_kendaraan` (`id_kendaraan`);

--
-- Indeks untuk tabel `pemarkir`
--
ALTER TABLE `pemarkir`
  ADD PRIMARY KEY (`id_pemarkir`),
  ADD KEY `fk_pemarkir_user` (`id_user`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `fk_petuagas_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `parkir`
--
ALTER TABLE `parkir`
  MODIFY `id_parkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemarkir`
--
ALTER TABLE `pemarkir`
  MODIFY `id_pemarkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_area` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_booking_kendaraan` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_booking_pemarkir` FOREIGN KEY (`id_pemarkir`) REFERENCES `pemarkir` (`id_pemarkir`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `fk_kendaraan_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `parkir`
--
ALTER TABLE `parkir`
  ADD CONSTRAINT `fk_parkir_area` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parkir_kendaraan` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parkir_pemarkir` FOREIGN KEY (`id_pemarkir`) REFERENCES `pemarkir` (`id_pemarkir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_parkir_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemarkir`
--
ALTER TABLE `pemarkir`
  ADD CONSTRAINT `fk_pemarkir_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `fk_petuagas_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
