-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 10:16 PM
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
-- Table structure for table `cross_matching_testing_result`
--

CREATE TABLE `cross_matching_testing_result` (
  `test_result_id` int(50) NOT NULL,
  `request_id` int(50) NOT NULL,
  `MLT_ID` int(50) NOT NULL,
  `Hospital_ID` int(50) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `test_result` text NOT NULL,
  `process_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cross_matching_testing_result`
--

INSERT INTO `cross_matching_testing_result` (`test_result_id`, `request_id`, `MLT_ID`, `Hospital_ID`, `blood_group`, `test_result`, `process_date`) VALUES
(1, 7, 3, 2, 'O-', 'Matched', '2022-11-20'),
(2, 8, 3, 2, 'A+', 'Matched', '2022-11-20'),
(3, 9, 4, 5, 'B+', 'Matched', '2022-11-20'),
(4, 10, 4, 5, 'B+', 'Matched', '2022-11-23'),
(5, 11, 4, 5, 'B-', 'Matched', '2022-12-05'),
(6, 12, 4, 5, 'B+', 'Matched', '2022-12-10'),
(7, 13, 4, 5, 'O-', 'Matched', '2022-12-10'),
(8, 14, 4, 5, 'B+', 'Matched', '2022-12-10'),
(9, 65, 3, 2, 'B-', 'Matched', '2023-03-02'),
(10, 66, 3, 2, 'AB-', 'Matched', '2023-03-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cross_matching_testing_result`
--
ALTER TABLE `cross_matching_testing_result`
  ADD PRIMARY KEY (`test_result_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cross_matching_testing_result`
--
ALTER TABLE `cross_matching_testing_result`
  MODIFY `test_result_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
