-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 11:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labtask6`
--

-- --------------------------------------------------------

--
-- Table structure for table `labtask6`
--

CREATE TABLE `labtask6` (
  `id` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `DOB` date NOT NULL,
  `Phoneno` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labtask6`
--

INSERT INTO `labtask6` (`id`, `Name`, `mail`, `UserName`, `password`, `Gender`, `DOB`, `Phoneno`, `city`) VALUES
(1, 'Toufiqul a Sams', '', 'surjo', '4', 'm', '0000-00-00', '1750096696', 'Rajshahi'),
(2, 'TAsams', '', 'surjo', '014725836%', 'm', '0000-00-00', '17500751234', 'Dhaka'),
(3, 'TAsams', '', 'surjo', '014725836%', 'm', '0000-00-00', '17500751234', 'Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `labtask6`
--
ALTER TABLE `labtask6`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `labtask6`
--
ALTER TABLE `labtask6`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
