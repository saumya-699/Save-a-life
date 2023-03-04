-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 07:25 PM
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
-- Table structure for table `blood_components`
--

CREATE TABLE `blood_components` (
  `donar_id` int(50) NOT NULL,
  `bloodbag_id` int(50) NOT NULL,
  `blood_group` varchar(11) NOT NULL,
  `blood_component` varchar(11) NOT NULL,
  `processed_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `MLT_ID` int(50) NOT NULL,
  `Hospital_ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_components`
--

INSERT INTO `blood_components` (`donar_id`, `bloodbag_id`, `blood_group`, `blood_component`, `processed_date`, `expiry_date`, `MLT_ID`, `Hospital_ID`) VALUES
(7, 1, 'O-', 'Red cell', '2023-03-03', '2023-08-03', 1, 1),
(7, 2, 'O-', 'Platelet', '2023-03-03', '2023-08-03', 1, 1),
(7, 3, 'O-', 'Plasma', '2023-03-04', '2023-03-04', 1, 1),
(9, 4, 'B+', 'Red cell', '2023-03-04', '2023-06-04', 1, 1),
(9, 5, 'B+', 'Platelet', '2023-03-04', '2023-06-26', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_components`
--
ALTER TABLE `blood_components`
  ADD PRIMARY KEY (`bloodbag_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_components`
--
ALTER TABLE `blood_components`
  MODIFY `bloodbag_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
