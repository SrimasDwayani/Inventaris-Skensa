-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 03:30 AM
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
(10, 'haduhhh', 240673, '$2y$10$zwlVhcrsc51TTvWqvxdugO7H8jMI5gIn7SWRDnShMlSsadELHpTZ.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_register`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
