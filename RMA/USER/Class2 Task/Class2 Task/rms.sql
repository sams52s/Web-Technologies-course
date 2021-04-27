-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 10:35 PM
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
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `NID` varchar(10) NOT NULL,
  `purl` varchar(255) DEFAULT "",
  `e_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `e_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `L_id` int(10) NOT NULL,
  `Location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `w_id` int(10) NOT NULL,
  `w_type` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `NID` varchar(10) NOT NULL,
  `purl` varchar(255) DEFAULT "",
  `e_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `r_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `p_id` int(10) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_admin`
--

CREATE TABLE `restaurant_admin` (
  `r_id` int(10) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `NID` varchar(10) NOT NULL,
  `purl` varchar(255) DEFAULT "",
  `e_id` int(10) NOT NULL,
  `L_id` int(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(10) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `NID` varchar(10) NOT NULL,
  `purl` varchar(255) DEFAULT "",
  `e_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `L_id` int(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_management`
--

CREATE TABLE `user_management` (
  `u_id` int(10) NOT NULL,
  `w_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_email` (`e_id`),
  ADD KEY `admin_phone` (`p_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`L_id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `management_email` (`e_id`),
  ADD KEY `management_phone` (`p_id`),
  ADD KEY `management_restaurant_admin` (`r_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `restaurant_admin`
--
ALTER TABLE `restaurant_admin`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `restaurant_admin_email` (`e_id`),
  ADD KEY `restaurant_admin_location` (`L_id`),
  ADD KEY `restaurant_admin_Admin` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `user_email` (`e_id`),
  ADD KEY `user_phone` (`p_id`),
  ADD KEY `user_location` (`L_id`),
  ADD KEY `user_Admin` (`id`);

--
-- Indexes for table `user_management`
--
ALTER TABLE `user_management`
  ADD KEY `user_user_management` (`u_id`),
  ADD KEY `management_user_management` (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `e_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `L_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `w_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant_admin`
--
ALTER TABLE `restaurant_admin`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_email` FOREIGN KEY (`e_id`) REFERENCES `email` (`e_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `admin_phone` FOREIGN KEY (`p_id`) REFERENCES `phone` (`p_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `management`
--
ALTER TABLE `management`
  ADD CONSTRAINT `management_email` FOREIGN KEY (`e_id`) REFERENCES `email` (`e_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `management_phone` FOREIGN KEY (`p_id`) REFERENCES `phone` (`p_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `management_restaurant_admin` FOREIGN KEY (`r_id`) REFERENCES `restaurant_admin` (`r_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `restaurant_admin`
--
ALTER TABLE `restaurant_admin`
  ADD CONSTRAINT `restaurant_admin_Admin` FOREIGN KEY (`id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `restaurant_admin_email` FOREIGN KEY (`e_id`) REFERENCES `email` (`e_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `restaurant_admin_location` FOREIGN KEY (`L_id`) REFERENCES `location` (`L_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_Admin` FOREIGN KEY (`id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_email` FOREIGN KEY (`e_id`) REFERENCES `email` (`e_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_location` FOREIGN KEY (`L_id`) REFERENCES `location` (`L_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_phone` FOREIGN KEY (`p_id`) REFERENCES `phone` (`p_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_management`
--
ALTER TABLE `user_management`
  ADD CONSTRAINT `management_user_management` FOREIGN KEY (`w_id`) REFERENCES `management` (`w_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `user_user_management` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Default Admin

INSERT INTO `email` VALUES (NULL, 'rubaiyadnoor@gmail.com');
INSERT INTO `phone` VALUES (NULL, '01632368818');
INSERT INTO `admin` VALUES (NULL, 'Rubaiyad', '12345678@', '1234567890',"" , 1, 1);

INSERT INTO `email` VALUES (NULL, 'shams@gmail.com');
INSERT INTO `phone` VALUES (NULL, '01668813238');
INSERT INTO `admin` VALUES (NULL, 'Shams', '12345678@', '1267834590',"" , 2, 2);

INSERT INTO `email` VALUES (NULL, 'sufian@gmail.com');
INSERT INTO `phone` VALUES (NULL, '01638823618');
INSERT INTO `admin` VALUES (NULL, 'Sufian', '12345678@', '1567234890',"" , 3, 3);

INSERT INTO `email` VALUES (NULL, 'naimul@gmail.com');
INSERT INTO `phone` VALUES (NULL, '01681338268');
INSERT INTO `admin` VALUES (NULL, 'Naimul', '12345678@', '1478562390',"" , 4, 4);


-- INSERT INTO `email` VALUES (NULL, 'akash@gmail.com');
-- INSERT INTO `location` VALUES (NULL, 'Dhaka-1206, Bangladesh');
-- INSERT INTO `restaurant_admin` VALUES (NULL, 'Akash', '12345678@', '3147285690',"" , 5, 1, 1);


-- INSERT INTO `email` VALUES (NULL, 'nabil@gmail.com');
-- INSERT INTO `phone` VALUES (NULL, '01638138268');
-- INSERT INTO `location` VALUES (NULL, 'Dhaka-1230, Bangladesh');
-- INSERT INTO `user` VALUES (NULL, 'Nabil', '12345678@', '1247856390',"" , 6, 5, 2, 1);

-- INSERT INTO `email` VALUES (NULL, 'liban@gmail.com');
-- INSERT INTO `phone` VALUES (NULL, '01638138268');
-- INSERT INTO `management` VALUES (NULL, 'Waiter', '12345678@', '1246397850',"" , 7, 6, 1);