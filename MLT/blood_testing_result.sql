-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 08:17 PM
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
  `Hospital_ID` int(50) NOT NULL,
  `MLT_ID` int(50) NOT NULL,
  `BloodBankDoctor_ID` int(50) NOT NULL,
  `donar_id` int(100) NOT NULL,
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

INSERT INTO `blood_testing_result` (`test_result_id`, `Hospital_ID`, `MLT_ID`, `BloodBankDoctor_ID`, `donar_id`, `blood_group`, `malaria_result`, `hiv_result`, `hbv_result`, `hcv_result`, `vdrl_result`, `process_date`, `batch_number`, `status`) VALUES
(1, 1, 1, 0, 1, 'O+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(2, 1, 1, 0, 2, 'A-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(3, 1, 1, 0, 3, 'B+', 'Positive', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(4, 1, 1, 0, 4, 'AB+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(5, 2, 3, 0, 5, 'O-', 'Negative', 'Negative', 'Negative', 'Negative', 'Positive', '2023-02-08', 1, 'Pending'),
(6, 2, 3, 0, 6, 'O-', 'Positive', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(7, 1, 1, 0, 7, 'O-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 2, 'Pending'),
(8, 1, 1, 0, 8, 'O+', 'Positive', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 2, 'Pending'),
(9, 1, 1, 0, 9, 'A-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 2, 'Pending'),
(10, 1, 1, 0, 10, 'B-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 2, 'Pending'),
(16, 2, 3, 0, 16, 'O+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-09', 1, 'Pending'),
(17, 2, 3, 0, 0, 'A-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-03-02', 1, 'Pending'),
(18, 2, 3, 0, 0, 'O-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-03-02', 1, 'Pending'),
(19, 1, 1, 0, 0, 'O-', 'Positive', 'Negative', 'Negative', 'Negative', 'Negative', '2023-03-02', 1, 'Pending'),
(20, 2, 3, 0, 0, 'O+', 'Negative', 'Positive', 'Negative', 'Negative', 'Negative', '2023-03-02', 1, 'Pending');

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
  MODIFY `test_result_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
