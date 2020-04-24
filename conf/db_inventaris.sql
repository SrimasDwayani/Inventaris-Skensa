-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Apr 2020 pada 14.07
-- Versi Server: 10.1.29-MariaDB
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
-- Struktur dari tabel `av`
--

CREATE TABLE `av` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `kondisi` text NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` varchar(30) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bkp`
--

CREATE TABLE `bkp` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `kondisi` text NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` varchar(30) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `id_detail_pinjam` int(11) NOT NULL,
  `id_inventaris` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dpib`
--

CREATE TABLE `dpib` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `kondisi` text NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` varchar(30) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` text NOT NULL,
  `kode_jenis` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `kode_jenis`, `keterangan`) VALUES
(1, '2500kg', '1', 'satuan (bh)'),
(2, '5 - 15 kg/cm2', '2', 'satuan (bh)'),
(3, 'General', '3', '-'),
(4, '250mm', '4', '-'),
(5, 'Warda', '5', '-'),
(6, '200 mm', '6', '-'),
(7, '0 - 25 mm', '7', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Pengguna'),
(2, 'Petugas'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_register` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nip` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_register`, `nama`, `nip`, `password`) VALUES
(4, 'admin', 123456, 'admin'),
(22, 'Ni Kadek Dwi Candra Pratiwi', 123456, '$2y$10$iA/0tdNBcjjxgRsYKtUuZ.p');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_peg`
--

CREATE TABLE `log_peg` (
  `id_register` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `nip` int(11) NOT NULL,
  `password` varchar(15) NOT NULL,
  `key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_peg`
--

INSERT INTO `log_peg` (`id_register`, `nama`, `email`, `nip`, `password`, `key`) VALUES
(1, 'Ni Kadek Dwi Candra Pratiwi', 'kddwicandrapratiwi@gmail.com', 27293, '$2y$10$EHu.OgKO', 240673),
(2, 'dwi candra pratiwi', 'wican@gmail.com', 789123, '$2y$10$/udTqyWS', 0),
(3, '', '', 789123, '$2y$10$3ToixXry', 0),
(4, '', '', 789123, '$2y$10$DUo1LgIG', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mm`
--

CREATE TABLE `mm` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `kondisi` text NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` varchar(30) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mm`
--

INSERT INTO `mm` (`id_inventaris`, `nama_barang`, `kondisi`, `keterangan`, `jumlah`, `id_jenis`, `tanggal_register`, `id_ruang`, `kode_inventaris`, `id_petugas`) VALUES
(1, 'Test', 'Baik', 'ini keterangannya', 23, 5, '2016-02-10', 3, 'v5y6', 3),
(2, 'percobaan', 'Baik', 'keterangan', 21, 1, '2018-02-13', 6, 'v6hj7', 2),
(3, 'test1', 'Rusak', 'kena hapus', 7, 5, '2014-10-28', 2, 'kj8df', 8),
(4, 'test456', 'Baik', '-', 56, 1, '2020-04-30', 1, 'bg67g', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status_peminjaman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm`
--

CREATE TABLE `pm` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `kondisi` text NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` varchar(30) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id_register` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nis` int(11) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id_register`, `nama`, `nis`, `password`) VALUES
(26, 'sayauser', 567, '$2y$10$U6t0Rhzahx8bqyTUsLBDF.8wdUHaK22SQWU/19axGpxn5vUFZR50i'),
(27, 'aku dwican', 123, '$2y$10$MgrWtkv.Yku106QiLjv/rOd0PPOUC59nrm7hoLLN/r0BP/48UtCuy'),
(28, 'akumaudaftarjadiuser', 27293, '$2y$10$OBZ0U19W4Gkbk3AYv1twmu.kf2nCFC9yGjWlW3tJmd6Mq5ZjiZ6rq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rpl`
--

CREATE TABLE `rpl` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `kondisi` text NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` varchar(30) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` text NOT NULL,
  `kode_ruang` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `kode_ruang`, `keterangan`) VALUES
(1, 'TKRO', 1, '-'),
(2, 'TKRO', 2, '-'),
(5, 'Ruang Kelas XII RPL 2 ', 203, '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbsm`
--

CREATE TABLE `tbsm` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `kondisi` text NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` varchar(30) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang_masuk`
--

CREATE TABLE `tb_barang_masuk` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `nomor_register` int(11) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `bahan` varchar(20) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `tahun_pembelian` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` varchar(11) NOT NULL,
  `keadaan` varchar(20) NOT NULL,
  `lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` text NOT NULL,
  `foto` text NOT NULL,
  `nip` int(11) NOT NULL,
  `notelp` varchar(100) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama_petugas`, `foto`, `nip`, `notelp`, `id_level`) VALUES
(3, 'test', '', 65131242, '0', 0),
(4, 'Dwicandra', '', 876342516, '0', 0),
(6, 'wican', '', 4532156, '0', 0),
(7, 'Dwi Candra', '', 34215432, '0', 0),
(8, 'test testttt', '', 2147483647, '0', 0),
(9, 'Testtt', '', 12361425, '0', 0),
(10, 'Testing', '', 76132513, '0', 0),
(11, 'wican', '', 515231547, '0', 0),
(12, 'Siapa saja', '', 541726413, '0', 0),
(13, 'Test gam', '', 7614253, '2147483647', 0),
(19, 'dwicandra', 'Screenshot (6).png', 4132445, '089542317624', 6),
(22, 'Dwi Candra Test', 'Screenshot (23).png', 5555534, '245452', 8),
(25, 'Dwi Candra Test', 'IMG_20200201_163828.jpg', 4566788, '08932145365', 2),
(27, 'Dwi Candra Test', 'Screenshot (23).png', 6753426, '0897765465', 2),
(28, 'Dwi Candra Test', 'Screenshot (13).png', 765438, '087761758685', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkj`
--

CREATE TABLE `tkj` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `kondisi` text NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` varchar(30) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkro`
--

CREATE TABLE `tkro` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `kondisi` text NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` varchar(30) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tkro`
--

INSERT INTO `tkro` (`id_inventaris`, `nama_barang`, `kondisi`, `keterangan`, `jumlah`, `id_jenis`, `tanggal_register`, `id_ruang`, `kode_inventaris`, `id_petugas`) VALUES
(1, 'Alat Pengangkat', 'Baik', '-', 1, 1, '1990-01-01', 1, 'tkr1', 3),
(2, 'Kunci Moment', 'Baik', '-', 2, 2, '1990-01-01', 1, 'tkr2', 3),
(3, 'Gunting Plat ', 'Baik', '-', 2, 3, '1990-12-31', 1, 'tkr3', 3),
(4, 'Hand Drill', 'Baik', '-', 2, 6, '1990-12-31', 1, 'tkr4', 3),
(5, 'Stop Wacth', 'Baik', '-', 1, 3, '1990-12-31', 1, 'tkr5', 3),
(6, 'Alat Pelubang', 'Baik', '-', 8, 3, '1991-12-31', 1, 'tkr6', 3),
(7, 'Screw Picth Gauge', 'Baik', '-', 3, 3, '1991-12-31', 1, 'tkj7', 3),
(8, 'Kunci Filter Oil', 'Baik', '-', 2, 3, '1991-12-31', 1, 'tkr8', 3),
(9, 'Mechanical Portable H.', 'Baik', '-', 1, 3, '1991-12-31', 1, 'tkr9', 3),
(10, 'Mesin Corter', 'Baik', '-', 1, 5, '1991-12-31', 1, 'tkr10', 3),
(11, 'Inside Caliper', 'Baik', '-', 2, 6, '1991-12-31', 1, 'tkr11', 3),
(12, 'Outside Caliper', 'Baik', '-', 2, 6, '1991-12-31', 1, 'tkr12', 3),
(13, 'Ragam Catok', 'Baik', '-', 4, 3, '1991-12-31', 1, 'tkr13', 3),
(14, 'Palu Besi', 'Baik', '-', 2, 3, '1991-12-31', 1, 'tkr14', 3),
(15, 'Micrometer', 'Baik', '-', 3, 7, '1991-12-31', 1, 'tkr15', 3),
(16, 'Meja Perata', 'Baik', '-', 1, 3, '1991-12-31', 1, 'tkr16', 3),
(17, 'Piston Ring C.', 'Baik', '-', 1, 3, '1991-12-31', 1, 'tkr16', 3),
(18, 'Alat Press Tangan', 'Baik', '-', 1, 3, '1991-12-31', 1, 'tkr17', 3),
(19, 'Diesel Fuel P.', 'Baik', '-', 1, 3, '1991-12-31', 1, 'TKR18', 3),
(20, 'Mesin Diesel 1 S.', 'Baik', '-', 1, 3, '1991-12-31', 1, 'tkr19', 3),
(21, 'Kompresor Pump', 'Baik', '-', 1, 3, '1991-12-31', 1, 'tkr20', 3),
(22, 'Diesel Injection P.', 'Baik', '-', 5, 3, '1991-12-31', 1, 'tkr21', 3),
(23, 'Flat Steel', 'Baik', '-', 1, 3, '1991-12-31', 1, 'tkr22', 3),
(24, 'Injection Tester U.', 'Baik', '-', 1, 3, '1991-12-31', 1, 'tkr23', 3),
(25, 'Magnetic Dial S.', 'Baik', '-', 1, 3, '1991-12-31', 1, 'tkr24', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tl`
--

CREATE TABLE `tl` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `kondisi` text NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` varchar(30) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tp`
--

CREATE TABLE `tp` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `kondisi` text NOT NULL,
  `keterangan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` varchar(30) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `av`
--
ALTER TABLE `av`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `bkp`
--
ALTER TABLE `bkp`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD PRIMARY KEY (`id_detail_pinjam`);

--
-- Indexes for table `dpib`
--
ALTER TABLE `dpib`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_register`);

--
-- Indexes for table `log_peg`
--
ALTER TABLE `log_peg`
  ADD PRIMARY KEY (`id_register`);

--
-- Indexes for table `mm`
--
ALTER TABLE `mm`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `pm`
--
ALTER TABLE `pm`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_register`);

--
-- Indexes for table `rpl`
--
ALTER TABLE `rpl`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tbsm`
--
ALTER TABLE `tbsm`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tkj`
--
ALTER TABLE `tkj`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `tkro`
--
ALTER TABLE `tkro`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `tl`
--
ALTER TABLE `tl`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `tp`
--
ALTER TABLE `tp`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `av`
--
ALTER TABLE `av`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bkp`
--
ALTER TABLE `bkp`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  MODIFY `id_detail_pinjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dpib`
--
ALTER TABLE `dpib`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `log_peg`
--
ALTER TABLE `log_peg`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mm`
--
ALTER TABLE `mm`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pm`
--
ALTER TABLE `pm`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `rpl`
--
ALTER TABLE `rpl`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbsm`
--
ALTER TABLE `tbsm`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tkj`
--
ALTER TABLE `tkj`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tkro`
--
ALTER TABLE `tkro`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tl`
--
ALTER TABLE `tl`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tp`
--
ALTER TABLE `tp`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
