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
-- Table structure for table `warddoctor`
--

CREATE TABLE `warddoctor` (
  `WardDoctor_ID` int(12) NOT NULL,
  `Name_With_Initials` varchar(200) NOT NULL,
  `Hospital_ID` int(12) NOT NULL,
  `HospitalName` varchar(200) NOT NULL,
  `Specialization` varchar(200) NOT NULL,
  `SLMC_Number` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Remark` varchar(200) NOT NULL,
  `Director_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warddoctor`
--

INSERT INTO `warddoctor` (`WardDoctor_ID`, `Name_With_Initials`, `Hospital_ID`, `HospitalName`, `Specialization`, `SLMC_Number`, `Email`, `ContactNumber`, `UserName`, `Password`, `Remark`, `Director_ID`) VALUES
(3, 'K.M.Rehan', 2, 'Karapitiya Teaching Hospital', 'cardio', 'SLMC540', 'Rehan542gmail.com', '0762456787', 'reh76_u', '987%ty#', 'updated', 5),
(7, 'Nayomi', 2, 'Karapitiya Teaching Hospital', '', 'SLMC445', 'Tharuki98@gmail.com', '0762711605', 'SLMC445', 'Hu753@iijirjijf', 'Added', 1),
(8, 'P.M.Miyumi', 5, 'Richway', 'Head nurse', 'SLMC445', 'Tharuki98@gmail.com', '0762711605', 'SLMC445', '997766542V', 'Added', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `warddoctor`
--
ALTER TABLE `warddoctor`
  ADD PRIMARY KEY (`WardDoctor_ID`),
  ADD KEY `Director_ID` (`Director_ID`),
  ADD KEY `Hospital_ID` (`Hospital_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `warddoctor`
--
ALTER TABLE `warddoctor`
  MODIFY `WardDoctor_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
