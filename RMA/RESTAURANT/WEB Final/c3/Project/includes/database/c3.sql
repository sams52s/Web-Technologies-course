-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 11:18 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(50) NOT NULL,
  `adminSname` varchar(50) NOT NULL,
  `adminEmail` varchar(50) NOT NULL,
  `adminPhone` varchar(50) NOT NULL,
  `adminPassword` varchar(50) NOT NULL,
  `adminGender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `adminSname`, `adminEmail`, `adminPhone`, `adminPassword`, `adminGender`) VALUES
(1, 'Sufian Mustaq', 'mustaq', 'sufian56@gmail.com', '01706712424', '123456789@', 'male'),
(2, 'Tazul Islam', 'tazul', 'tazul35@gmail.com', '01711236344', '123456789#', 'male'),
(3, 'Md Robin', 'Robin', 'robin12@gmail.com', '01685647235', '123@456789', 'male'),
(4, 'Zunayed Shaafin', 'shaafin', 'shaafin99@gmail.com', '01875632489', '12365498@', 'male'),
(5, 'Piu Teresa', 'piu', 'piu98@gmail.com', '01365987436', '123456789@', 'female');

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
(6, 'adil122@gmail.com', 'Adil Razzo', 'male', 'Bogra', 'razzo', '123456789@', '01718698456', '1999-02-09', 'customer'),
(9, 'jawadrudro@gmail.com', 'Jawad Rudro', 'male', 'Mohammadpur', 'jawad', '123456@789', '01569874563', '1994-03-23', 'admin'),
(10, 'Esraz@gmail.com', 'Mamun Esraz', 'male', 'Banani', 'esraz', '123456789@', '01756982314', '1997-11-13', 'customer'),
(11, 'dipty12@gmail.com', 'Dipty', 'female', 'Mirpur', 'Dipty', '123456789@', '01632598574', '1998-08-06', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `reginfo`
--
ALTER TABLE `reginfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reginfo`
--
ALTER TABLE `reginfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
