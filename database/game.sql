-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 03:56 AM
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
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `username`, `password`, `foto`) VALUES
(1, 'Athena', 'athena123', 'favicon.ico');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posttest`
--

CREATE TABLE `tbl_posttest` (
  `id_jawaban` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawabanpost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pretest`
--

CREATE TABLE `tbl_pretest` (
  `id_jawaban` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawabanpre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tanggapan_easy`
--

CREATE TABLE `tbl_tanggapan_easy` (
  `id_tanggapan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggapan_easy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tanggapan_hard`
--

CREATE TABLE `tbl_tanggapan_hard` (
  `id_tanggapan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggapan_hard` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tanggapan_normal`
--

CREATE TABLE `tbl_tanggapan_normal` (
  `id_tanggapan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggapan_normal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_soal`
--

INSERT INTO `tb_soal` (`id_soal`, `soal`) VALUES
(1, 'Saya pernah mendapat komentar atau pesan negative di sosial media orang lain ?'),
(2, 'Saya merasa tidak nyaman dengan media sosial apapun ?'),
(3, 'Saya membuat dan menyebar pesan yang tidak baik ?'),
(4, 'Saya mengetahui ada etika dalam berinteraksi di dunia maya yang perlu diikuti ? '),
(5, 'Saya mencari dan mematai-matai akun media sosial orang lain ?'),
(6, 'Saya merasa dimata-matai orang lain melalui media sosial ?'),
(7, 'Saya berpura-pura menjadi orang lain dimedia sosial ?'),
(8, 'Saya memiliki akun media sosial untuk hiburan semata ?'),
(9, 'Saya mengetahui dampak negative dan positif dari sosial media ?'),
(10, 'Saya memiliki batasan waktu dalam menggunakan media sosial ?'),
(11, 'Saya mengetahui bahwa bullying dapat berupa mengancam orang lain secara online ?'),
(12, 'Saat memiliki masalah dengan teman, saya meluapkan ke medsos untuk menyerang teman tersebut ?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tbl_posttest`
--
ALTER TABLE `tbl_posttest`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `tbl_pretest`
--
ALTER TABLE `tbl_pretest`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `tbl_tanggapan_easy`
--
ALTER TABLE `tbl_tanggapan_easy`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indexes for table `tbl_tanggapan_hard`
--
ALTER TABLE `tbl_tanggapan_hard`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indexes for table `tbl_tanggapan_normal`
--
ALTER TABLE `tbl_tanggapan_normal`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_posttest`
--
ALTER TABLE `tbl_posttest`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_pretest`
--
ALTER TABLE `tbl_pretest`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_tanggapan_easy`
--
ALTER TABLE `tbl_tanggapan_easy`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_tanggapan_hard`
--
ALTER TABLE `tbl_tanggapan_hard`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_tanggapan_normal`
--
ALTER TABLE `tbl_tanggapan_normal`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
