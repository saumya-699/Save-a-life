-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 09:52 AM
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
  `status` text NOT NULL,
  `Hospital_ID` int(50) NOT NULL,
  `WardDoctor_ID` int(50) NOT NULL,
  `BloodBankDoctor_ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`requeste_id`, `patient_name`, `date_of_birth`, `patient_age`, `patient_gender`, `blood_group`, `blood_component`, `required_amount`, `expected_date`, `requested_date`, `reason`, `ward_number`, `remark`, `status`, `Hospital_ID`, `WardDoctor_ID`, `BloodBankDoctor_ID`) VALUES
(7, 'Abishek', '1978-05-23', 44, 'Male', 'O-', 'Red cell', 2, '2022-11-20', '2022-11-20', 'Car accident', '3', '', 'Pending', 2, 7, 0),
(8, 'Gautham Nandini', '1974-02-09', 49, 'Female', 'A+', 'Whole blood', 1, '2022-11-21', '2022-11-20', 'Kidney transplant ', '02', '', 'Pending', 2, 7, 0),
(9, 'Dilan Perera', '1968-07-20', 55, 'Male', 'B+', 'Whole blood', 1, '2022-11-22', '2022-11-20', 'surgery', '1', '', 'Pending', 5, 8, 0),
(10, 'Vijay devarakonda', '1974-02-11', 49, 'Male', 'B+', 'Whole blood', 1, '2022-11-24', '2022-11-23', 'surgery', '05', '', 'Pending', 5, 8, 0),
(11, 'Darren Henry', '1989-02-01', 34, 'Male', 'B-', 'Whole blood', 1, '2022-12-05', '2022-12-05', 'surgery', '06', '', 'Pending', 5, 8, 0),
(12, 'Rohini Aadhi', '1962-10-09', 60, 'Female', 'B+', 'Whole blood', 1, '2022-12-11', '2022-12-10', 'surgery', '05', '', 'Pending', 5, 8, 0),
(13, 'Ravi shankar', '1988-10-01', 34, 'Male', 'O-', 'Whole blood', 1, '2022-12-12', '2022-12-10', 'surgery', '1', 'He have allergy', 'Pending', 5, 8, 0),
(14, 'Rasan Dilikshana', '1982-04-09', 40, 'Male', 'B+', 'Whole blood', 2, '2022-12-13', '2022-12-10', 'surgery', '09', 'no', 'Pending', 5, 8, 0),
(65, 'Aniston Liam', '1990-07-08', 32, 'Male', 'B-', 'Red cell', 4, '2023-03-02', '2023-03-02', 'fever', '10', '', 'Pending', 2, 3, 0),
(66, 'Ravi shalini', '1993-02-04', 30, 'Female', 'AB-', 'Whole blood', 1, '2023-03-02', '2023-03-02', 'surgery', '06', '', 'Pending', 2, 7, 0);

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
  MODIFY `requeste_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
