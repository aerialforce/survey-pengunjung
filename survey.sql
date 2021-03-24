-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 03:37 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id_data` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `floor` varchar(20) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `q1` varchar(20) NOT NULL,
  `q2` varchar(20) NOT NULL,
  `q3` varchar(20) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_data`, `id_user`, `floor`, `time`, `q1`, `q2`, `q3`, `saran`) VALUES
(1, 0, '2', '2018-11-18 13:06:52', 'kurang puas', 'kurang puas', 'puas', ''),
(2, 2, '3', '2018-11-18 13:08:32', 'tidak puas', 'sangat puas', 'sangat puas', ''),
(3, 2, '2', '2018-11-18 15:12:23', 'sangat puas', 'puas', 'sangat puas', ' qwertyl;dfghj tfyghkyyvhv hyvvlyh'),
(4, 2, '2', '2018-11-18 15:12:40', 'puas', 'tidak puas', 'baik', ' ertyuiocvbnm sdfghjkertyuio23456789'),
(5, 2, '3', '2018-11-18 15:13:01', 'sangat puas', 'tidak puas', 'baik', ' 2345678ghjk fghhhjj'),
(6, 2, '1', '2018-11-18 15:34:54', 'puas', 'puas', 'sangat baik', ' saya sangan senang sekali sampai sampai setiap hari harus ketempat ini untuk membaca buku selama yang saya bisa selagi masih ada waktu yang dapat digunakan untuk membaca buku tersebut'),
(7, 2, '1', '2018-11-18 15:35:36', 'sangat puas', 'sangat puas', 'sangat baik', ' '),
(8, 2, '1', '2018-11-19 13:24:12', 'kurang puas', 'kurang puas', 'baik', ''),
(9, 2, '2', '2018-11-19 13:39:32', 'tidak puas', 'puas', 'biasa', ' senanggg'),
(10, 2, '2', '2018-11-19 14:04:03', 'puas', 'tidak puas', 'sangat baik', ' fghjkluyftg'),
(11, 2, '1', '2018-11-21 07:55:14', 'tidak puas', 'puas', 'baik', ''),
(12, 2, '1', '2018-11-26 16:25:54', 'kurang puas', 'sangat puas', '', 'logout'),
(13, 2, '1', '2018-11-26 16:29:22', 'puas', 'sangat puas', '', 'wertyui'),
(14, 2, '1', '2018-11-26 16:30:52', 'puas', 'puas', '', ''),
(15, 2, '1', '2018-11-26 16:31:03', 'tidak puas', 'sangat puas', '', 'dfghjk logout'),
(16, 2, '1', '2018-11-26 22:01:20', 'sangat puas', 'puas', '', ''),
(17, 2, '1', '2018-11-29 08:05:33', 'kurang puas', 'puas', '', ''),
(18, 8, '7', '2018-11-29 08:23:35', 'sangat puas', 'puas', '', ''),
(19, 2, '1', '2018-11-29 10:28:02', 'puas', 'kurang puas', '', ''),
(20, 2, '1', '2018-11-29 10:28:17', 'puas', 'sangat puas', '', ''),
(21, 2, '1', '2018-11-29 10:28:52', 'kurang puas', 'sangat puas', '', ''),
(22, 4, '3', '2018-11-29 11:30:55', 'kurang puas', 'puas', '', 'saya sangat senang'),
(23, 4, '3', '2018-11-29 11:31:11', 'puas', 'sangat puas', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id_text` varchar(10) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id_text`, `text`) VALUES
('1+a', 'seberapa puas anda terhadap layanan kami?'),
('1+b', 'question 1b'),
('1+c', 'question 1c'),
('2+a', 'question 2b'),
('2+b', 'question 2a'),
('2+c', 'question 2c'),
('3+a', 'question 3a'),
('3+b', 'question 3b'),
('3+c', ''),
('4+a', 'question 4a'),
('4+b', 'question 4b'),
('4+c', ''),
('5+a', 'question 5a'),
('5+b', 'question 5b'),
('5+c', ''),
('6+a', 'question 6a'),
('6+b', 'question 6b'),
('6+c', 'question 6c'),
('7+a', 'question 7a'),
('7+b', 'question 7b'),
('7+c', 'question 7c');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','operator1','operator2','operator3','operator4','operator5','operator6','operator7') NOT NULL,
  `namadep` varchar(30) NOT NULL,
  `namabel` varchar(30) NOT NULL,
  `notel` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `namadep`, `namabel`, `notel`, `email`, `alamat`) VALUES
(1, 'admin', 'admin', 'admin', '', '', '', '', ''),
(2, 'operator1', 'operator1', 'operator1', 'operator', 'operator1', '08888888888', 'operator1@gmail.com', 'UIN Jakarta'),
(3, 'operator2', 'operator2', 'operator2', '', '', '', '', ''),
(4, 'operator3', 'operator3', 'operator3', 'bagus', 'dwi', '0888', 'bagus@gmail.com', 'ciputat'),
(5, 'operator4', 'operator4', '', '', '', '', '', ''),
(6, 'operator5', 'operator5', '', '', '', '', '', ''),
(7, 'operator6', 'operator6', '', '', '', '', '', ''),
(8, 'operator7', 'operator7', 'operator6', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_text`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
