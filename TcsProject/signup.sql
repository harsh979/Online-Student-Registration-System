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
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(55) NOT NULL,
  `course` varchar(20) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `local_address` varchar(100) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `percentage/cgpa` varchar(50) NOT NULL,
  `year_passing(10th)` int(10) NOT NULL,
  `peercentage/cgpa` varchar(10) NOT NULL,
  `year_passing(12th)` int(10) NOT NULL,
  `Jee_main_score` int(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `course`, `student_name`, `father_name`, `mother_name`, `dob`, `permanent_address`, `local_address`, `email_id`, `mobile_no`, `percentage/cgpa`, `year_passing(10th)`, `peercentage/cgpa`, `year_passing(12th)`, `Jee_main_score`, `password`) VALUES
(1, 'btech', 'Harshit Gupta', 'Ramesh Chandra Gupta', 'Mamta Gupta', '1999-02-20', 'vnifjbgrhi', ' fjkegBGBEIB', 'gharshit979@gmail.com', '7230853014', '84', 2012, '84', 2014, 125, '841456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
