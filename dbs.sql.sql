-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 04:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuizonlinenabil`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `idguru` varchar(4) COLLATE ucs2_general_mysql500_ci NOT NULL,
  `namaguru` varchar(30) COLLATE ucs2_general_mysql500_ci DEFAULT NULL,
  `password` varchar(8) COLLATE ucs2_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_mysql500_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idguru`, `namaguru`, `password`) VALUES
('G01', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` varchar(3) COLLATE ucs2_general_mysql500_ci NOT NULL,
  `namakelas` varchar(20) COLLATE ucs2_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_mysql500_ci;

--
-- Dumping data for table `kelas`
--


-- --------------------------------------------------------

--
-- Table structure for table `kuiz`
--

CREATE TABLE `kuiz` (
  `idpelajar` varchar(4) COLLATE ucs2_general_mysql500_ci NOT NULL,
  `idsoalan` varchar(4) COLLATE ucs2_general_mysql500_ci NOT NULL,
  `tarikh` varchar(10) COLLATE ucs2_general_mysql500_ci DEFAULT NULL,
  `pilih` varchar(100) COLLATE ucs2_general_mysql500_ci DEFAULT NULL,
  `peratus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_mysql500_ci;

--
-- Dumping data for table `kuiz`
--


-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `idpelajar` varchar(4) COLLATE ucs2_general_mysql500_ci NOT NULL,
  `namapelajar` varchar(30) COLLATE ucs2_general_mysql500_ci DEFAULT NULL,
  `idkelas` varchar(3) COLLATE ucs2_general_mysql500_ci DEFAULT NULL,
  `password` varchar(8) COLLATE ucs2_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_mysql500_ci;

--
-- Dumping data for table `pelajar`
--


-- --------------------------------------------------------

--
-- Table structure for table `soalan`
--

CREATE TABLE `soalan` (
  `idsoalan` varchar(4) COLLATE ucs2_general_mysql500_ci NOT NULL,
  `namasoalan` varchar(100) COLLATE ucs2_general_mysql500_ci DEFAULT NULL,
  `pilihan_a` varchar(100) COLLATE ucs2_general_mysql500_ci DEFAULT NULL,
  `pilihan_b` varchar(100) COLLATE ucs2_general_mysql500_ci DEFAULT NULL,
  `pilihan_c` varchar(100) COLLATE ucs2_general_mysql500_ci DEFAULT NULL,
  `jawapan` varchar(50) COLLATE ucs2_general_mysql500_ci DEFAULT NULL,
  `idguru` varchar(4) COLLATE ucs2_general_mysql500_ci DEFAULT NULL,
  `idtopik` varchar(3) COLLATE ucs2_general_mysql500_ci NOT NULL,
  `jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_mysql500_ci;

--
-- Dumping data for table `soalan`
--



-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `idtopik` varchar(3) COLLATE ucs2_general_mysql500_ci NOT NULL,
  `namatopik` varchar(30) COLLATE ucs2_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_general_mysql500_ci;

--
-- Dumping data for table `topik`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idguru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`);

--
-- Indexes for table `kuiz`
--
ALTER TABLE `kuiz`
  ADD PRIMARY KEY (`idpelajar`,`idsoalan`),
  ADD KEY `idpelajar` (`idpelajar`),
  ADD KEY `idsoalan` (`idsoalan`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`idpelajar`),
  ADD KEY `idkelas` (`idkelas`);

--
-- Indexes for table `soalan`
--
ALTER TABLE `soalan`
  ADD PRIMARY KEY (`idsoalan`),
  ADD KEY `idguru` (`idguru`),
  ADD KEY `idtopik` (`idtopik`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`idtopik`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kuiz`
--
ALTER TABLE `kuiz`
  ADD CONSTRAINT `kuiz_pelajar` FOREIGN KEY (`idpelajar`) REFERENCES `pelajar` (`idpelajar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kuiz_soalan` FOREIGN KEY (`idsoalan`) REFERENCES `soalan` (`idsoalan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD CONSTRAINT `pelajar_kelas` FOREIGN KEY (`idkelas`) REFERENCES `kelas` (`idkelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soalan`
--
ALTER TABLE `soalan`
  ADD CONSTRAINT `soalan_guru` FOREIGN KEY (`idguru`) REFERENCES `guru` (`idguru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soalan_idtopik` FOREIGN KEY (`idtopik`) REFERENCES `topik` (`idtopik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
