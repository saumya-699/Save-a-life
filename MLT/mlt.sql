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
-- Table structure for table `mlt`
--

CREATE TABLE `mlt` (
  `MLT_ID` int(12) NOT NULL,
  `Name_With_Initials` varchar(200) NOT NULL,
  `Hospital_ID` int(12) NOT NULL,
  `HospitalName` varchar(200) NOT NULL,
  `SLMC_Number` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `ContactNumber` varchar(200) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Remark` varchar(200) NOT NULL,
  `Director_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mlt`
--

INSERT INTO `mlt` (`MLT_ID`, `Name_With_Initials`, `Hospital_ID`, `HospitalName`, `SLMC_Number`, `Email`, `ContactNumber`, `UserName`, `Password`, `Remark`, `Director_ID`) VALUES
(1, 'S.N.Senuri', 1, 'Richway arya hospital', 'SLMC753', 'senuri34@gmail.com', '0762711602', 'SLMC753', '{p!Q;Ktwrds[E:)4', 'Removed', 21),
(3, 'S.J.Kasuni', 2, 'Karapitiya Teaching Hospital', 'SLMC853', 'kasuni45@gmail.com', '0762761601', 'SLMC853', 'Ge)!RMb|8B2Muj^C', 'Removed', 21),
(4, 'J.L.Piyumal', 5, 'Richway arya hospital', 'SLMC445', 'Piyumal@45', '0762711603', 'SLMC445', 'hr32F5{y ', 'Added', 1),
(5, 'K.S.Weerasinghe', 7, 'Galle general hospital', 'SLMC445', 'Asiri8@gmail.com', '0762711603', 'SLMC445', '[0*8>Lcu8j', 'Added', 6),
(6, 'K.S.Weerasinghe', 7, 'Galle general hospital', 'SLMC445', 'Asiri8@gmail.com', '0762711603', 'SLMC445', '[0*8>Lcu8j', 'Removed', 6),
(7, 'K.S.Weerasinghe', 7, 'Galle general hospital', 'SLMC54', 'Tharuki98@gmail.com', '0762711601', 'SLMC54', '-~!B;|.VlKf', 'Removed', 6),
(8, 'K.S.Weerasinghe', 7, 'Galle general hospital', 'SLMC54', 'Tharuki98@gmail.com', '0762711601', 'SLMC54', 'Kk8W{>F:', 'Removed', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mlt`
--
ALTER TABLE `mlt`
  ADD PRIMARY KEY (`MLT_ID`),
  ADD KEY `Hospital_ID` (`Hospital_ID`),
  ADD KEY `Director_ID` (`Director_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mlt`
--
ALTER TABLE `mlt`
  MODIFY `MLT_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
