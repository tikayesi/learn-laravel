-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 03:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gereja`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nama_panggilan` varchar(15) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `warga_negara` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tanggal_baptis` date DEFAULT NULL,
  `baptis_oleh` varchar(30) DEFAULT NULL,
  `keterangan` text,
  `foto` varchar(255) DEFAULT NULL,
  `no_anggota` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `warga_negara`, `pekerjaan`, `alamat`, `tanggal_baptis`, `baptis_oleh`, `keterangan`, `foto`, `no_anggota`, `status`) VALUES
(1, 'Wita KW', 'wita', 'tanjungpandan', '2020-03-02', 'Perempuan', 'Indonesia', 'Karyawan Swasta', 'kjkl', '2020-03-16', 'Pdt. Yasin Hie', 'klljo', '1584435442_IMG_9875.JPG', '999', 'Aktif'),
(2, 'Tika Yesi Kristiani', 'alay', 'lampung', '2020-03-16', 'Perempuan', 'Indonesia', 'Pegewai Swasta', 'YUI', '2020-03-16', 'Pdt. Yasin Hie', 'JKHGJH', '1584435587_WhatsApp Image 2020-01-28 at 09.51.59.jpeg', '112', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
