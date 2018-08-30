-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 11:30 PM
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
-- Database: `tcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(50) NOT NULL,
  `firstsemmarks` varchar(50) NOT NULL,
  `secondsemmarks` varchar(50) NOT NULL,
  `thirdsemmarks` varchar(50) NOT NULL,
  `fourthsemmarks` varchar(50) NOT NULL,
  `fifthsemmarks` varchar(50) NOT NULL,
  `sixthtsemmarks` varchar(50) NOT NULL,
  `seventhsemmarks` varchar(50) NOT NULL,
  `eightsemmarks` varchar(50) NOT NULL,
  `activeback` varchar(50) NOT NULL,
  `passiveback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `firstsemmarks`, `secondsemmarks`, `thirdsemmarks`, `fourthsemmarks`, `fifthsemmarks`, `sixthtsemmarks`, `seventhsemmarks`, `eightsemmarks`, `activeback`, `passiveback`) VALUES
(1, '75', '72', '', '', '', '', '', '', '0', '0'),
(2, '75', '72', '', '', '', '', '', '', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
