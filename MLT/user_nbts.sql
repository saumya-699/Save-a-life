-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 06:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_nbts`
--

CREATE TABLE `user_nbts` (
  `id` int(11) NOT NULL,
  `full_name` text DEFAULT NULL,
  `name_with_initials` text DEFAULT NULL,
  `nic_no` text DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` text DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `province` text DEFAULT NULL,
  `postal_code` text DEFAULT NULL,
  `mobile_no` text DEFAULT NULL,
  `blood_grp` text DEFAULT NULL,
  `rhd` text DEFAULT NULL,
  `user_name` text DEFAULT NULL,
  `password` longtext DEFAULT NULL,
  `telephone` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_nbts`
--

INSERT INTO `user_nbts` (`id`, `full_name`, `name_with_initials`, `nic_no`, `dob`, `email`, `gender`, `address`, `province`, `postal_code`, `mobile_no`, `blood_grp`, `rhd`, `user_name`, `password`, `telephone`) VALUES
(1, 'John Doe', 'J.Doe', NULL, '2022-01-22', 'john@hotmail.com', 'M', NULL, NULL, NULL, NULL, NULL, NULL, 'john', '1234', '0117865432'),
(4, 'Loretta S. Hernandez', 'L.S. Hernandez', '123456789101112', '1941-05-19', 'LorettaSHernandez@jourrapide.com', 'F', '387 Gregory Lane\r\nLouisville, KY 40205 ', 'Northern', '145220', '5024793825', 'O', 'Positive', 'loretta', '4321', '0117865432');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_nbts`
--
ALTER TABLE `user_nbts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_nbts`
--
ALTER TABLE `user_nbts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
