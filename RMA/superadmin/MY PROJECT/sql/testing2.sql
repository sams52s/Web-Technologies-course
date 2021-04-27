-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 08:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resturant`
--

CREATE TABLE `tbl_resturant` (
  `ResturantID` int(20) NOT NULL,
  `ResturantName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Phone` int(12) NOT NULL,
  `Rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_resturant`
--

INSERT INTO `tbl_resturant` (`ResturantID`, `ResturantName`, `Address`, `City`, `Phone`, `Rating`) VALUES
(1, 'DINN', 'MOHAKHALI DHAKA', ' DHAKA', 1797540613, 4),
(2, 'Cinnamon Resturant', 'Bannani 11/2', ' DHAKA', 1797540615, 3),
(3, 'Cafe Rio', 'Uttara House Buildling', ' DHAKA', 1797540618, 4),
(4, 'Caaricorns', 'Tejgoan 1206 ', ' DHAKA', 1894540761, 4),
(5, 'Burger King', ' Bannai Road 11 ', ' DHAKA', 1726903065, 3),
(6, 'Take Out ', 'Bannai 11/2c 4th floor', ' DHAKA', 1726269060, 4),
(7, 'Take Out', 'Gulshan 1', ' DHAKA', 1757540612, 3),
(8, 'SKYLINE RESTAURANT ', 'DHANMONDI 27 ABC ROAD', ' DHAKA', 1899540512, 5),
(9, 'Prego', 'GULSHAN 2', ' DHAKA', 1966234048, 5),
(10, 'NANDOS', 'BANANI HOUSE25 ROAD 11', ' DHAKA', 183364697, 5),
(11, 'BBQ Bangladesh', 'coxs bazer', 'chitagoang', 195554061, 4),
(12, 'KABAB FACTORY', 'GULSHAN ROAD 53 HOUSE 9/A', ' DHAKA', 1797543542, 3),
(13, 'LIVE KITCHEN', 'DHANMONDI R-7 HOUSE 38/1', ' DHAKA', 135656525, 4),
(14, 'THITHY 3', '3 NEW BAILY ROAD', ' DHAKA', 189455561, 3),
(15, 'STEAK OUT ', ' JOSSOR CITY', 'JOSSOR', 147826466, 3),
(16, 'Cha time', 'Gulshan 1 road 128', ' DHAKA', 1444540618, 3),
(17, 'PIZZA HUT', 'DHANMONDI 27 road52 house 10/A', ' DHAKA', 1594540761, 3),
(18, 'CHILLOX', 'Mohakhali 1212 road 7', ' DHAKA', 185267236, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_resturant`
--
ALTER TABLE `tbl_resturant`
  ADD PRIMARY KEY (`ResturantID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_resturant`
--
ALTER TABLE `tbl_resturant`
  MODIFY `ResturantID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
