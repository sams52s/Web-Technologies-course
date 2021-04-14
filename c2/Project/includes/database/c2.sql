-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 11:07 AM
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
-- Database: `c2`
--

-- --------------------------------------------------------

--
-- Table structure for table `reginfo`
--

CREATE TABLE `reginfo` (
  `id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `userType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reginfo`
--

INSERT INTO `reginfo` (`id`, `email`, `Name`, `gender`, `address`, `userName`, `pass`, `Phone`, `dob`, `userType`) VALUES
(6, 'sams52tas@gmail.com', 'Toufiqul alam sams', 'male', 'Binodpur,Mirzapur. rajshahi', 'surjo', '123456789@', '01750096696', '0000-00-00', 'admin'),
(9, 'tas@gamil.com', 'sams tas', 'male', 'Binodpur rajshahi bd', 'tas', '123456@789', '01750096696', '0000-00-00', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reginfo`
--
ALTER TABLE `reginfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reginfo`
--
ALTER TABLE `reginfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
