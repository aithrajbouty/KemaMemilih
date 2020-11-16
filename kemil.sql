-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 04:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kemil`
--

-- --------------------------------------------------------

--
-- Table structure for table `paslon_fakultas`
--

CREATE TABLE `paslon_fakultas` (
  `kd_paslonFak` varchar(8) NOT NULL,
  `nourut_fak` tinyint(2) NOT NULL,
  `foto_ketuaFak` varchar(255) NOT NULL,
  `foto_wakilFak` varchar(255) NOT NULL,
  `poster_fak` varchar(255) NOT NULL,
  `capt_fak` text NOT NULL,
  `status_fak` enum('1','0') NOT NULL DEFAULT '1',
  `npm` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paslon_fakultas`
--

INSERT INTO `paslon_fakultas` (`kd_paslonFak`, `nourut_fak`, `foto_ketuaFak`, `foto_wakilFak`, `poster_fak`, `capt_fak`, `status_fak`, `npm`) VALUES
('FMIPA01', 1, '', '', '', '', '1', '140810180052');

-- --------------------------------------------------------

--
-- Table structure for table `paslon_univ`
--

CREATE TABLE `paslon_univ` (
  `kd_paslonUniv` varchar(8) NOT NULL,
  `nourut_univ` tinyint(2) NOT NULL,
  `foto_ketuaUniv` varchar(255) NOT NULL,
  `foto_wakilUniv` varchar(255) NOT NULL,
  `poster_univ` varchar(255) NOT NULL,
  `capt_univ` text NOT NULL,
  `status_univ` enum('1','0') NOT NULL DEFAULT '1',
  `npm` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paslon_univ`
--

INSERT INTO `paslon_univ` (`kd_paslonUniv`, `nourut_univ`, `foto_ketuaUniv`, `foto_wakilUniv`, `poster_univ`, `capt_univ`, `status_univ`, `npm`) VALUES
('UNIV01', 1, '', '', '', '', '1', '140810180053');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `npm` varchar(12) NOT NULL,
  `userPass` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `fotoUser` varchar(255) DEFAULT NULL,
  `role` enum('pemilih','adminUniv','adminFak') NOT NULL DEFAULT 'pemilih',
  `statusUser` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`npm`, `userPass`, `email`, `nama`, `fakultas`, `prodi`, `fotoUser`, `role`, `statusUser`) VALUES
('140810180052', '827ccb0eea8a706c4c34a16891f84e7b', 'shalvinazahwa@gmail.com', 'Shalvina', 'FMIPA', 'Teknik Informatika', NULL, 'pemilih', '1'),
('140810180053', 'e10adc3949ba59abbe56e057f20f883e', '123456@gmail.com', 'Paslon 2', 'FISIP', 'Ilmu Pemerintahan', NULL, 'pemilih', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vote_fakultas`
--

CREATE TABLE `vote_fakultas` (
  `kd_voteFak` int(5) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `kd_paslonFak` varchar(8) NOT NULL,
  `count_fak` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vote_univ`
--

CREATE TABLE `vote_univ` (
  `kd_voteUniv` int(5) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `kd_paslonUniv` varchar(8) NOT NULL,
  `count_univ` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paslon_fakultas`
--
ALTER TABLE `paslon_fakultas`
  ADD PRIMARY KEY (`kd_paslonFak`),
  ADD KEY `npm` (`npm`);

--
-- Indexes for table `paslon_univ`
--
ALTER TABLE `paslon_univ`
  ADD PRIMARY KEY (`kd_paslonUniv`),
  ADD KEY `npm` (`npm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `vote_fakultas`
--
ALTER TABLE `vote_fakultas`
  ADD PRIMARY KEY (`kd_voteFak`),
  ADD KEY `npm` (`npm`),
  ADD KEY `kd_paslonFak` (`kd_paslonFak`);

--
-- Indexes for table `vote_univ`
--
ALTER TABLE `vote_univ`
  ADD PRIMARY KEY (`kd_voteUniv`),
  ADD KEY `npm` (`npm`),
  ADD KEY `kd_paslonUniv` (`kd_paslonUniv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vote_univ`
--
ALTER TABLE `vote_univ`
  MODIFY `kd_voteUniv` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paslon_fakultas`
--
ALTER TABLE `paslon_fakultas`
  ADD CONSTRAINT `paslon_fakultas_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `user` (`npm`) ON DELETE CASCADE;

--
-- Constraints for table `paslon_univ`
--
ALTER TABLE `paslon_univ`
  ADD CONSTRAINT `paslon_univ_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `user` (`npm`) ON DELETE CASCADE;

--
-- Constraints for table `vote_fakultas`
--
ALTER TABLE `vote_fakultas`
  ADD CONSTRAINT `vote_fakultas_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `user` (`npm`) ON DELETE CASCADE,
  ADD CONSTRAINT `vote_fakultas_ibfk_2` FOREIGN KEY (`kd_paslonFak`) REFERENCES `paslon_fakultas` (`kd_paslonFak`) ON DELETE CASCADE;

--
-- Constraints for table `vote_univ`
--
ALTER TABLE `vote_univ`
  ADD CONSTRAINT `vote_univ_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `user` (`npm`) ON DELETE CASCADE,
  ADD CONSTRAINT `vote_univ_ibfk_2` FOREIGN KEY (`kd_paslonUniv`) REFERENCES `paslon_univ` (`kd_paslonUniv`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
