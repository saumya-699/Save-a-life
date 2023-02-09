-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 09:01 AM
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
-- Table structure for table `blood_request`
--

CREATE TABLE `blood_request` (
  `requeste_id` int(50) NOT NULL,
  `patient_name` text NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `patient_age` int(100) NOT NULL,
  `patient_gender` text NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `blood_component` text NOT NULL,
  `required_amount` int(100) NOT NULL,
  `expected_date` date NOT NULL,
  `requested_date` date DEFAULT NULL,
  `reason` varchar(200) NOT NULL,
  `ward_number` varchar(50) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`requeste_id`, `patient_name`, `date_of_birth`, `patient_age`, `patient_gender`, `blood_group`, `blood_component`, `required_amount`, `expected_date`, `requested_date`, `reason`, `ward_number`, `remark`, `status`) VALUES
(7, 'Abishek', NULL, 44, 'Male', 'O-', 'Red cell', 2, '2022-11-20', '2022-11-20', 'Car accident', '3', '', 'Pending'),
(8, 'Gautham Nandini', NULL, 49, 'Female', 'A+', 'Whole blood', 1, '2022-11-21', '2022-11-20', 'Kidney transplant ', '02', '', 'Pending'),
(9, 'Dilan Perera', NULL, 55, 'Male', 'B+', 'Whole blood', 1, '2022-11-22', '2022-11-20', 'surgery', '1', '', 'Pending'),
(10, 'Vijay devarakonda', NULL, 49, 'Male', 'B+', 'Whole blood', 1, '2022-11-24', '2022-11-23', 'surgery', '05', '', 'Pending'),
(11, 'Darren Henry', NULL, 34, 'Male', 'B-', 'Whole blood', 1, '2022-12-05', '2022-12-05', 'surgery', '06', '', 'Pending'),
(12, 'Rohini Aadhi', NULL, 60, 'Female', 'B+', 'Whole blood', 1, '2022-12-11', '2022-12-10', 'surgery', '05', '', 'Pending'),
(13, 'Ravi shankar', NULL, 34, 'Male', 'O-', 'Whole blood', 1, '2022-12-12', '2022-12-10', 'surgery', '1', 'He have allergy', 'Pending'),
(14, 'Rasan Dilikshana', NULL, 40, 'Male', 'B+', 'Whole blood', 2, '2022-12-13', '2022-12-10', 'surgery', '09', 'no', 'Pending'),
(28, 'Aniston Liam', '2021-06-16', 1, 'Male', 'O-', 'Whole blood', 1, '2022-12-17', '2022-12-16', 'jfgjm', '09', '', 'Pending'),
(29, 'THARSANA', '1999-09-09', 23, 'Female', 'O-', 'Whole blood', 1, '2022-12-19', '2022-12-19', 'DFESF', '09', 'RFE', 'Pending'),
(33, 'Keethi Suresh', '1979-01-31', 44, 'Female', 'AB+', 'Red cell', 1, '2023-02-05', '2023-02-05', 'uygilujhoi', '09', 'yjgulik', 'Pending'),
(38, 'hgkhl.', '2023-02-09', 0, 'Male', 'AB+', 'Whole blood', 1, '2023-02-09', '2023-02-09', 'wsed', '09', 'ed', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`requeste_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
  MODIFY `requeste_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
