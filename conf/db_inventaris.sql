-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 01:38 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `id_detail_pinjam` int(11) NOT NULL,
  `id_inventaris` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `kondisi` text NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` varchar(11) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'RPL'),
(2, 'MM'),
(3, 'TKJ'),
(4, 'DPIB'),
(5, 'BKP'),
(6, 'PM'),
(7, 'TKRO'),
(8, 'TBSM'),
(9, 'TL'),
(10, 'TP'),
(11, 'AV');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status_peminjaman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id_register` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nis` int(11) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id_register`, `nama`, `nis`, `password`) VALUES
(1, 'dwicandra', 123455, '$2y$10$d2RvZzhVd5cSoQpUl0M2ZexMACkIGsxYG3KqUKxSSMy9qtbZ77PjW'),
(2, 'akuakuaku', 123456789, '$2y$10$hK5iyQI72Km0CQUtGepUyuDhozXyN/bEKJYXdNqiOle32c51zP5ji'),
(3, 'dwicandrapratiwiii', 987654321, '$2y$10$EZ9NqtTRhSFEeIQeVPpyK.zpIw8kSXDTdjBr4UPMzs28f/9FqMkvm'),
(4, 'nikadekdwi', 54321, '$2y$10$N5ymZ8FZ1/fmCSLxL.ViRu96gkPM2KJahTX2KmiYYEgZfwq6WL0PS'),
(5, 'dwicandraniii', 987654321, '$2y$10$KdAVihH1x2p4fHSi2eSOB.kqG5J7pgwnMXCth6SAf5IkrWFg5A5I.'),
(6, 'hayooosiapa', 6789, '$2y$10$2mKaJtZjM4RRYF13JYWtAeJcPBgNJm83oLQbFnJt.c3Cuh3NXhRmq'),
(7, '', 0, '$2y$10$6dPpKOKiCyB8/rAY7qv4le0I1eC.2IKrEgZrobx1b42xrGbvNrOfi'),
(8, 'sayasaja', 678909, '$2y$10$7hta8YC2JEBTvmiP46X4YeRtImZsLzTOOwCcnSxEInUuHjz2GfnBO'),
(9, 'DwiCandraPratiwiAku', 987654321, '$2y$10$kyKidDj/KK7sRA1NrULmLu3T9dN2p0sD5d2Z3ts7KsXiI9QQNJdL.'),
(10, 'haduhhh', 240673, '$2y$10$zwlVhcrsc51TTvWqvxdugO7H8jMI5gIn7SWRDnShMlSsadELHpTZ.'),
(11, 'DwiCandraNi', 567123, '$2y$10$RTRz1qfnsmLhtAd8.fxEmOnnLOOIBfYHZ6mTL/P/lakL4iJmgSHxO'),
(12, '', 0, '$2y$10$yRt074ZeDI0j7zvoIR0O2.BngZM00LSp2LQYxLTHlPcVhSEwTTkv2'),
(13, 'dwicanini', 789123, '$2y$10$/U3IzFiM0oP3jKsXczNvhO6q6a4Eo4mOT2LvZEcK/uMRPV2F2L8JC'),
(14, 'dwiaja', 98567, '$2y$10$eel0te2zeXCb2rteFqSl.OyhAQQvmmwmQPolRhuuJrTmUexIpRbJS');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` text NOT NULL,
  `kode_ruang` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` text NOT NULL,
  `foto` text NOT NULL,
  `nip` int(11) NOT NULL,
  `notelp` int(20) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama_petugas`, `foto`, `nip`, `notelp`, `id_level`) VALUES
(1, 'Test 123', '', 123456, 0, 0),
(2, 'Testt', '', 243155734, 0, 0),
(3, 'test', '', 65131242, 0, 0),
(4, 'Dwicandra', '', 876342516, 0, 0),
(6, 'wican', '', 4532156, 0, 0),
(7, 'Dwi Candra', '', 34215432, 0, 0),
(8, 'test testttt', '', 2147483647, 0, 0),
(9, 'Testtt', '', 12361425, 0, 0),
(10, 'Testing', '', 76132513, 0, 0),
(11, 'wican', '', 515231547, 0, 0),
(12, 'Siapa saja', '', 541726413, 0, 0),
(13, 'Test gam', '', 7614253, 2147483647, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD PRIMARY KEY (`id_detail_pinjam`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_register`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  MODIFY `id_detail_pinjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
