-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 04:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_edukasi`
--

CREATE TABLE `tbl_edukasi` (
  `id_materi` int(11) NOT NULL,
  `materi` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_edukasi`
--

INSERT INTO `tbl_edukasi` (`id_materi`, `materi`, `video`, `id_kategori`) VALUES
(1, 'materi cyberbullying pelaku.pdf', 'https://www.youtube.com/embed/KQeqLdEXWaQ', 1),
(2, 'materi cyberbullying korban.pdf', 'https://www.youtube.com/embed/TN70MNF5Xmc', 2),
(3, 'materi cyberbullying tambahan.pdf', '-', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban`
--

CREATE TABLE `tbl_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `jawabanpre` varchar(10) DEFAULT NULL,
  `jawabanpost` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jawaban`
--

INSERT INTO `tbl_jawaban` (`id_jawaban`, `id_user`, `id_soal`, `id_kategori`, `jawabanpre`, `jawabanpost`) VALUES
(10, 1, 1, 2, 'tidak', 'tidak'),
(11, 1, 2, 2, 'tidak', 'iya'),
(12, 1, 3, 1, 'tidak', 'tidak'),
(13, 1, 5, 1, 'tidak', 'iya'),
(14, 1, 6, 2, 'tidak', 'tidak'),
(15, 1, 7, 1, 'iya', 'iya'),
(16, 1, 8, 2, 'tidak', 'tidak'),
(17, 1, 12, 1, 'tidak', 'iya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Pelaku'),
(2, 'Korban'),
(3, 'Tambahan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(11) NOT NULL,
  `username_login` varchar(255) NOT NULL,
  `password_login` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `username_login`, `password_login`, `foto`) VALUES
(2, 'Admin', '12345', 'avatar4.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` varchar(250) NOT NULL,
  `id_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `id_kategori`) VALUES
(1, 'Saya pernah mendapat komentar atau pesan negative di sosial media orang lain ?', '2'),
(2, 'Saya merasa tidak nyaman dengan media sosial apapun ?', '2'),
(3, 'Saya membuat dan menyebar pesan yang tidak baik ?', '1'),
(5, 'Saya mencari dan mematai-matai akun media sosial orang lain ?', '1'),
(6, 'Saya merasa dimata-matai orang lain melalui media sosial ?', '2'),
(7, 'Saya berpura-pura menjadi orang lain dimedia sosial ?', '1'),
(8, 'Saya memiliki akun media sosial untuk hiburan semata ?', '2'),
(12, 'Saat memiliki masalah dengan teman, saya meluapkan ke medsos untuk menyerang teman tersebut ?', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tanggapan`
--

CREATE TABLE `tbl_tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggapan_easy` varchar(255) NOT NULL,
  `tanggapan_normal` varchar(100) NOT NULL,
  `tanggapan_hard` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tanggapan`
--

INSERT INTO `tbl_tanggapan` (`id_tanggapan`, `id_user`, `tanggapan_easy`, `tanggapan_normal`, `tanggapan_hard`) VALUES
(1, 1, 'testing 1', 'testing 2', 'testing 3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `umur` int(10) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `umur`, `password`) VALUES
(1, 'M. Rizki Prambudi', 'rizki', 22, '12345'),
(2, 'Sukma Maulana Hakim', 'sukma', 22, '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_edukasi`
--
ALTER TABLE `tbl_edukasi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tbl_tanggapan`
--
ALTER TABLE `tbl_tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_edukasi`
--
ALTER TABLE `tbl_edukasi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_tanggapan`
--
ALTER TABLE `tbl_tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
