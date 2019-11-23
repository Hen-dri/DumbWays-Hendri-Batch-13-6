-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 11:11 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
`id_anggota` int(3) NOT NULL,
  `nm_anggota` varchar(32) DEFAULT NULL,
  `alamat` text,
  `ttl_anggota` text,
  `status_anggota` varchar(1) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nm_anggota`, `alamat`, `ttl_anggota`, `status_anggota`) VALUES
(9, 'Hendri', 'BSD Tangerang Selatan', 'Tangerang 22 Januari 1994', '1');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `kd_buku` int(5) NOT NULL,
  `judul_buku` varchar(32) DEFAULT NULL,
  `pengarang` varchar(32) DEFAULT NULL,
  `jenis_buku` varchar(32) DEFAULT NULL,
  `penerbit` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kd_buku`, `judul_buku`, `pengarang`, `jenis_buku`, `penerbit`) VALUES
(23, 'sistem penjualan', 'solihin', 'ta', 'yudhistira'),
(12, 'sistem perpustakaan', 'wahyudi', 'skripsi', 'yudhistira'),
(123, 'basis data', 'badianto', 'buku cetak', 'yudhistira'),
(34, 'android', 'karyono', 'cetak', 'yudhistira'),
(200, 'bahasa arab', 'solihin', 'cetak', 'yudistira');

-- --------------------------------------------------------

--
-- Table structure for table `meminjam`
--

CREATE TABLE IF NOT EXISTS `meminjam` (
`id_pinjam` int(3) NOT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `jumlah_pinjam` int(2) DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `id_anggota` int(3) DEFAULT NULL,
  `kd_buku` varchar(5) DEFAULT NULL,
  `kembali` int(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meminjam`
--

INSERT INTO `meminjam` (`id_pinjam`, `tgl_pinjam`, `jumlah_pinjam`, `tgl_kembali`, `id_anggota`, `kd_buku`, `kembali`) VALUES
(21, '2019-11-23', 1, '2019-11-23', 9, '23', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `meminjam`
--
ALTER TABLE `meminjam`
 ADD PRIMARY KEY (`id_pinjam`), ADD KEY `id_anggota` (`id_anggota`), ADD KEY `kd_buku` (`kd_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id_anggota` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `meminjam`
--
ALTER TABLE `meminjam`
MODIFY `id_pinjam` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
