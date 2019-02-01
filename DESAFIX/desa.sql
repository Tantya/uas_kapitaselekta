-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2019 at 04:25 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `setup`
--

CREATE TABLE `setup` (
  `app_title` text NOT NULL,
  `app_version` text NOT NULL,
  `app_description` text NOT NULL,
  `app_footer` text NOT NULL,
  `app_theme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setup`
--

INSERT INTO `setup` (`app_title`, `app_version`, `app_description`, `app_footer`, `app_theme`) VALUES
('SIPD Kecamatan', '1.0', 'Sistem Informasi Kecamatan', 'Aplikasi Sistem Informasi Pembuatan Dokument Kecamatan', 'skin-red');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alat`
--

CREATE TABLE `tb_alat` (
  `kd_alat` varchar(6) NOT NULL,
  `nm_alat` varchar(90) NOT NULL,
  `id_pengarang` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `qty` int(12) NOT NULL,
  `unit` int(11) NOT NULL,
  `pm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` varchar(4) NOT NULL,
  `nm_anggota` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `nrp` varchar(20) NOT NULL,
  `cc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `kd_buku` varchar(6) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `id_pengarang` int(11) NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nokk` int(16) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tgl_entri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`kd_buku`, `judul_buku`, `id_pengarang`, `rt`, `rw`, `id_penerbit`, `nik`, `nokk`, `jenis_kelamin`, `status`, `tgl_entri`) VALUES
('B00001', 'Tantya', 6, 11, 12, 3, 1313141414, 11122222, 'Laki-Laki', 'Belum Menikah', '2019-01-24'),
('B00002', 'Sultan Fery A', 6, 12, 12, 3, 12553626, 131313, 'Laki-Laki', 'Belum Menikah', '2019-01-24'),
('B00003', 'Sultan Fery A', 0, 11, 12, 3, 12553626, 131313, 'Laki-Laki', 'Belum Menikah', '2019-01-24'),
('B00004', 'ad', 3, 11, 14, 2, 13131414, 131313, 'Jenis_Kelamin', 'Menikah', '2019-01-24'),
('B00005', 'yuyu', 3, 11, 12, 2, 22323, 141414, 'Laki-Laki', 'Menikah', '2019-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `kd_pinjam` varchar(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama_pinjam` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `kd_buku` varchar(6) NOT NULL,
  `id_anggota` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
(1, 'Regol'),
(2, 'Lengkong'),
(3, 'Arjasari');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengarang`
--

CREATE TABLE `tb_pengarang` (
  `id_pengarang` int(11) NOT NULL,
  `nama_pengarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengarang`
--

INSERT INTO `tb_pengarang` (`id_pengarang`, `nama_pengarang`) VALUES
(1, 'Cisereuh'),
(2, 'Laswi'),
(3, 'Batukarut'),
(4, 'Lebak Wangi'),
(5, 'Lebak Muncang'),
(6, 'Banjaran'),
(7, 'Parakan Bolang'),
(8, 'Cimuncang'),
(9, 'Cikoneng'),
(10, 'Cigentur');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengembalian`
--

CREATE TABLE `tb_pengembalian` (
  `kd_pinjam` varchar(10) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama_pinjam` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `kd_buku` varchar(6) NOT NULL,
  `id_anggota` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id`, `fullname`, `nickname`, `username`, `password`, `level`) VALUES
(1, 'Tantya', 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Tantya', 'Tantya', 'Tantya', '430087e13415199be9f62b11e78e02dc', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_warga`
--

CREATE TABLE `tb_warga` (
  `nik` int(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `rt` int(12) NOT NULL,
  `rw` int(12) NOT NULL,
  `kec` varchar(25) NOT NULL,
  `nokk` int(16) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tgl_entri` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_warga`
--

INSERT INTO `tb_warga` (`nik`, `nama`, `desa`, `rt`, `rw`, `kec`, `nokk`, `jenis_kelamin`, `status`, `tgl_entri`) VALUES
(1266617726, 'Tantya Gustiawati', 'Batu Karut', 1, 2, 'Banjaran', 137737738, 'Jenis_Kelamin', 'Belum Menikah', '2019-01-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alat`
--
ALTER TABLE `tb_alat`
  ADD PRIMARY KEY (`kd_alat`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`kd_pinjam`);

--
-- Indexes for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `tb_pengarang`
--
ALTER TABLE `tb_pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indexes for table `tb_pengembalian`
--
ALTER TABLE `tb_pengembalian`
  ADD PRIMARY KEY (`kd_pinjam`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_warga`
--
ALTER TABLE `tb_warga`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pengarang`
--
ALTER TABLE `tb_pengarang`
  MODIFY `id_pengarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
