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
-- Table structure for table `blood_testing_result`
--

CREATE TABLE `blood_testing_result` (
  `test_result_id` int(100) NOT NULL,
  `donation_id` int(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `malaria_result` text NOT NULL,
  `hiv_result` text NOT NULL,
  `hbv_result` text NOT NULL,
  `hcv_result` text NOT NULL,
  `vdrl_result` text NOT NULL,
  `process_date` date NOT NULL,
  `batch_number` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_testing_result`
--

INSERT INTO `blood_testing_result` (`test_result_id`, `donation_id`, `blood_group`, `malaria_result`, `hiv_result`, `hbv_result`, `hcv_result`, `vdrl_result`, `process_date`, `batch_number`, `status`) VALUES
(1, 1, 'O+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(2, 2, 'A-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(3, 3, 'B+', 'Positive', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(4, 4, 'AB+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(5, 5, 'O-', 'Negative', 'Negative', 'Negative', 'Negative', 'Positive', '2023-02-08', 1, 'Pending'),
(6, 6, 'O-', 'Positive', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(7, 7, 'O-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 2, 'Pending'),
(8, 8, 'O+', 'Positive', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 2, 'Pending'),
(9, 9, 'A-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 2, 'Pending'),
(10, 10, 'B-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 2, 'Pending'),
(11, 11, 'B+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 3, 'Pending'),
(12, 12, 'O+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 3, 'Pending'),
(13, 13, 'A+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 3, 'Pending'),
(14, 14, 'A+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 3, 'Pending'),
(15, 15, 'O+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 3, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_testing_result`
--
ALTER TABLE `blood_testing_result`
  ADD PRIMARY KEY (`test_result_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_testing_result`
--
ALTER TABLE `blood_testing_result`
  MODIFY `test_result_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
