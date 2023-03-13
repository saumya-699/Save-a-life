-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 06:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_doctor`
--

CREATE TABLE `bloodbank_doctor` (
  `BloodBank_doctor_ID` int(12) NOT NULL,
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
-- Dumping data for table `bloodbank_doctor`
--

INSERT INTO `bloodbank_doctor` (`BloodBank_doctor_ID`, `Name_With_Initials`, `Hospital_ID`, `HospitalName`, `SLMC_Number`, `Email`, `ContactNumber`, `UserName`, `Password`, `Remark`, `Director_ID`) VALUES
(1, 'S.Kanishka', 4, 'Richway arya hospital', 'SLMC754', 'kanishka5@gmail.com', '0762711901', 'kanishka5@gmail.com', 'cKj21Iu,,a', 'Added', 7),
(2, 'R.Sanduni', 5, 'Galle general hospital', 'SLMC723', 'sandu6@gmail.com', '0762211601', 'sandu6@gmail.com', 'okAxb(-0Z0{Z!5rf', 'Added', 7);

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
(7, 'Abishek', '1978-05-23', 44, 'Male', 'O-', 'Red cell', 2, '2022-11-20', '2022-11-20', 'Car accident', '3', '', 'Pending', 1, 7, 5),
(8, 'Gautham Nandini', '1974-02-09', 49, 'Female', 'A+', 'Whole blood', 1, '2022-11-21', '2023-03-04', 'Kidney transplant ', '02', '', ' checked', 2, 7, 0),
(9, 'Dilan Perera', '1968-07-20', 55, 'Male', 'B+', 'Whole blood', 1, '2023-03-12', '2023-03-12', 'surgery', '1', '', 'Pending', 4, 8, 0),
(10, 'Vijay devarakonda', '1974-02-11', 49, 'Male', 'B+', 'Whole blood', 1, '2022-11-24', '2023-03-04', 'surgery', '05', '', ' checked', 2, 8, 0),
(11, 'Darren Henry', '1989-02-01', 34, 'Male', 'B-', 'Whole blood', 1, '2023-03-13', '2023-03-13', 'surgery', '06', '', 'NotAvailable', 5, 8, 0),
(12, 'Rohini Aadhi', '1962-10-09', 60, 'Female', 'B+', 'Whole blood', 1, '2022-12-11', '2022-12-10', 'surgery', '05', '', 'Pending', 5, 8, 0),
(13, 'Ravi shankar', '1988-10-01', 34, 'Male', 'O-', 'Whole blood', 1, '2023-03-04', '2023-03-04', 'surgery', '1', 'He have allergy', 'Pending', 2, 8, 0),
(14, 'Rasan Dilikshana', '1982-04-09', 40, 'Male', 'B+', 'Whole blood', 2, '2022-12-13', '2022-12-10', 'surgery', '09', 'no', 'Pending', 5, 8, 0),
(65, 'Aniston Liam', '1990-07-08', 32, 'Male', 'B-', 'Red cell', 4, '2023-03-02', '2023-03-02', 'fever', '10', '', ' checked', 2, 3, 0),
(66, 'Ravi shalini', '1993-02-04', 30, 'Female', 'AB-', 'Whole blood', 1, '2023-03-02', '2023-03-02', 'surgery', '06', '', ' checked', 2, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blood_testing_result`
--

CREATE TABLE `blood_testing_result` (
  `test_result_id` int(100) NOT NULL,
  `donation_id` int(100) NOT NULL,
  `MLT_ID` int(10) NOT NULL,
  `BloodBank_doctor_ID` int(11) NOT NULL,
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

INSERT INTO `blood_testing_result` (`test_result_id`, `donation_id`, `MLT_ID`, `BloodBank_doctor_ID`, `blood_group`, `malaria_result`, `hiv_result`, `hbv_result`, `hcv_result`, `vdrl_result`, `process_date`, `batch_number`, `status`) VALUES
(1, 1, 0, 0, 'O+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(2, 2, 0, 0, 'A-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(3, 3, 0, 0, 'B+', 'Positive', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(4, 4, 0, 0, 'AB+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(5, 5, 0, 0, 'O-', 'Negative', 'Negative', 'Negative', 'Negative', 'Positive', '2023-02-08', 1, 'Pending'),
(6, 6, 0, 0, 'O-', 'Positive', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 1, 'Pending'),
(7, 7, 0, 0, 'O-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 2, 'Pending'),
(8, 8, 0, 0, 'O+', 'Positive', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 2, 'Pending'),
(9, 9, 0, 0, 'A-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 2, 'Pending'),
(10, 10, 0, 0, 'B-', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 2, 'Pending'),
(11, 11, 0, 0, 'B+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 3, 'Pending'),
(12, 12, 0, 0, 'O+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 3, 'Pending'),
(13, 13, 0, 0, 'A+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 3, 'Pending'),
(14, 14, 0, 0, 'A+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 3, 'Pending'),
(15, 15, 0, 0, 'O+', 'Negative', 'Negative', 'Negative', 'Negative', 'Negative', '2023-02-08', 3, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `cross_matching_testing_result`
--

CREATE TABLE `cross_matching_testing_result` (
  `test_result_id` int(50) NOT NULL,
  `Request_ID` int(50) NOT NULL,
  `MLT_ID` int(50) NOT NULL,
  `BloodBank_doctor_ID` int(12) NOT NULL,
  `Hospital_ID` int(50) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `test_result` text NOT NULL,
  `process_date` date NOT NULL,
  `Status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cross_matching_testing_result`
--

INSERT INTO `cross_matching_testing_result` (`test_result_id`, `Request_ID`, `MLT_ID`, `BloodBank_doctor_ID`, `Hospital_ID`, `blood_group`, `test_result`, `process_date`, `Status`) VALUES
(1, 7, 3, 0, 4, 'O-', 'Matched', '2022-11-20', 'checked'),
(2, 8, 3, 0, 4, 'A+', 'Matched', '2022-11-20', 'checked'),
(3, 9, 4, 0, 5, 'B+', 'Matched', '2022-11-20', 'approved'),
(4, 10, 4, 0, 5, 'B+', 'Matched', '2022-11-23', 'approved'),
(5, 11, 4, 0, 5, 'B-', 'Matched', '2022-12-05', 'approved'),
(6, 12, 4, 0, 5, 'B+', 'Matched', '2022-12-10', 'approved'),
(7, 13, 4, 0, 7, 'O-', 'Matched', '2022-12-10', 'checked'),
(8, 14, 4, 0, 5, 'B+', 'Matched', '2022-12-10', 'approved'),
(9, 65, 3, 0, 2, 'B-', 'Matched', '2023-03-02', 'checked'),
(10, 66, 3, 0, 2, 'AB-', 'Matched', '2023-03-02', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `Director_ID` int(11) NOT NULL,
  `Name_With_Initials` varchar(200) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Remark` varchar(200) NOT NULL,
  `UserName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`Director_ID`, `Name_With_Initials`, `Email`, `ContactNumber`, `NIC`, `Password`, `Remark`, `UserName`) VALUES
(7, 'K.A.Sewmi', 'sewmi@gmail.com', '076543218', '996623114V', '89', 'Signed up', 'sewmi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `Donor_Id` int(20) NOT NULL,
  `Hospital_ID` int(12) NOT NULL,
  `Prefix` varchar(10) NOT NULL,
  `Full_Name` varchar(500) NOT NULL,
  `Initials` varchar(20) NOT NULL,
  `NIC_Number` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `province` varchar(200) NOT NULL,
  `postal` varchar(10) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `land_number` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`Donor_Id`, `Hospital_ID`, `Prefix`, `Full_Name`, `Initials`, `NIC_Number`, `DOB`, `Email`, `Gender`, `Address`, `province`, `postal`, `mobile_number`, `land_number`, `username`, `password`) VALUES
(1, 4, 'Ms', 'Hiruni Hansini', 'S.A.H.H Sinhabahu', '8547692411V', '1999-03-26', 'sah@gmail.com', 'Female', 'Horana', 'Western', '210', '0711314023', '0342256987', 'sah@gmail.com', 'Hiru@88');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `Hospital_ID` int(12) NOT NULL,
  `HospitalName` varchar(200) NOT NULL,
  `Type` varchar(40) NOT NULL,
  `District` varchar(60) NOT NULL,
  `Head_Of_Hospital` varchar(60) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Landline_Number` varchar(20) NOT NULL,
  `ContactNum_Hospital_Head` varchar(20) NOT NULL,
  `Director_ID` int(11) NOT NULL,
  `Remark` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`Hospital_ID`, `HospitalName`, `Type`, `District`, `Head_Of_Hospital`, `Address`, `Landline_Number`, `ContactNum_Hospital_Head`, `Director_ID`, `Remark`) VALUES
(2, 'Richway arya hospital', '', 'Colombo', 'J.K.Priyantha', 'No .233,Colombo', '01123457', '07845134', 1, 'Non-functioning'),
(5, 'Galle general hospital', '', 'Galle', 'J.K.Asiri', 'No .233,tholunna,galle.', '01123459', '07845136', 0, 'Added'),
(9, 'Karapitiya Teaching Hospital', '', 'Galle', 'R.K.Dasun', 'No .233,Galle.', '0112344348', '07845131', 0, 'Added'),
(12, 'Matara General Hospital', 'Matara', 'general', 'L.M.Hewagamage', 'No .283,Matara.', '0112344788', '07345531', 0, 'Non-functioning');

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
(1, 'Hiruni Hansini', 5, 'Galle general hospital', 'SLMC445', 'Hiruni3@gmail.com', '0762711607', 'Hiruni3@gmail.com', ',Hos(],PM8m K_o-', 'Added', 7),
(2, 'C.D.Nayomi', 4, 'Richway arya hospital', '446', 'Nayomi4@gmail.com', '0762711603', 'Nayomi4@gmail.com', 'pF)@(q7K', 'Added', 7);

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `Nurse_ID` int(11) NOT NULL,
  `Name_With_Initials` varchar(200) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `Hospital_ID` int(12) NOT NULL,
  `HospitalName` varchar(200) NOT NULL,
  `Position` varchar(63) NOT NULL,
  `DOB` date NOT NULL,
  `SLMC_Number` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `Date_of_appoinment` date NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Remark` varchar(50) NOT NULL,
  `Director_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`Nurse_ID`, `Name_With_Initials`, `NIC`, `Hospital_ID`, `HospitalName`, `Position`, `DOB`, `SLMC_Number`, `Email`, `ContactNumber`, `Date_of_appoinment`, `UserName`, `Password`, `Remark`, `Director_ID`) VALUES
(2, 'D.N.Ishini', '992314556', 9, 'Karapitiya Teaching Hospital', 'Head nurse', '2023-03-03', 'SLMC499', 'ishini3@gmail.com', '0762711567', '2023-03-13', 'ishini3@gmail.com', 'md5(Wv)y%z/dzT`-)', 'Added', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pre_medical`
--

CREATE TABLE `pre_medical` (
  `Donor_Id` int(50) NOT NULL,
  `Hospital_ID` int(12) NOT NULL,
  `Weight` varchar(100) NOT NULL,
  `Height` varchar(100) NOT NULL,
  `Blood_Group` varchar(10) NOT NULL,
  `Blood_Pressure` varchar(100) NOT NULL,
  `Hemoglobine` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pre_medical`
--

INSERT INTO `pre_medical` (`Donor_Id`, `Hospital_ID`, `Weight`, `Height`, `Blood_Group`, `Blood_Pressure`, `Hemoglobine`) VALUES
(2, 2, '5Kg', '150cm', '', '90', '12'),
(4, 5, '45', '120', 'B-', '45', '78'),
(5, 9, '45', '120', 'B-', '45', '78'),
(7, 12, '45', '120', 'A-', '45', '78');

-- --------------------------------------------------------

--
-- Table structure for table `sent_request`
--

CREATE TABLE `sent_request` (
  `Request_ID` int(5) NOT NULL,
  `Requesting_hospital_name` varchar(24) NOT NULL,
  `Requested_hospital_name` varchar(200) NOT NULL,
  `Requested_by` varchar(200) NOT NULL,
  `Requeired_blood_group` varchar(200) NOT NULL,
  `Requeired_blood_component` varchar(200) NOT NULL,
  `Requeired_no_of_packs` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sent_request`
--

INSERT INTO `sent_request` (`Request_ID`, `Requesting_hospital_name`, `Requested_hospital_name`, `Requested_by`, `Requeired_blood_group`, `Requeired_blood_component`, `Requeired_no_of_packs`, `Date`, `status`) VALUES
(11, 'Richway arya hospital', 'Galle general hospital', 'S.Kanishka', 'Red Blood Cells', 'A+', '2', '2023-03-12', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Hospital_ID` int(12) NOT NULL,
  `Blood_bagID` int(20) NOT NULL,
  `Blood_group` varchar(12) NOT NULL,
  `Component_type` varchar(40) NOT NULL,
  `MLT_ID` int(12) NOT NULL,
  `ExpiryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`Hospital_ID`, `Blood_bagID`, `Blood_group`, `Component_type`, `MLT_ID`, `ExpiryDate`) VALUES
(5, 456, 'A+', 'Red', 1, '2022-02-18'),
(5, 458, 'A+', 'Red', 2, '2022-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE `system_users` (
  `User_ID` int(10) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`User_ID`, `UserName`, `Password`, `Type`) VALUES
(5, 'sewmi@gmail.com', '89', 5),
(13, 'Hiruni3@gmail.com', ',Hos(],PM8m K_o-', 2),
(14, 'Nayomi4@gmail.com', 'pF)@(q7K', 2),
(17, 'Dawe6@gmail.com', 'T&<:A_6Y,B$*:h[h', 3),
(18, 'rashi8@gmail.com', '80osz&u;', 3),
(19, 'kanishka5@gmail.com', 'cKj21Iu,,a', 1),
(20, 'sandu6@gmail.com', 'okAxb(-0Z0{Z!5rf', 1),
(21, 'devindya3@gmail.com', 'u\"c.,q#SLq', 2),
(25, 'ishini3@gmail.com', 'Wv)y%z/dzT`-', 4);

-- --------------------------------------------------------

--
-- Table structure for table `transferdetails`
--

CREATE TABLE `transferdetails` (
  `Transfer_ID` int(12) NOT NULL,
  `Hospital_ID` int(12) NOT NULL,
  `HospitalName` varchar(200) NOT NULL,
  `Transfered_to` varchar(200) NOT NULL,
  `Transfered_by` varchar(200) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transferdetails`
--

INSERT INTO `transferdetails` (`Transfer_ID`, `Hospital_ID`, `HospitalName`, `Transfered_to`, `Transfered_by`, `Date`) VALUES
(1, 12, 'Matara', 'Richway arya hospital', 'K.A.Sewmi', '2023-03-11');

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
(2, 'J.K.Rashini', 4, 'Richway arya hospital', 'Dermatology', 'SLMC680', 'rashi8@gmail.com', '0762711701', 'rashi8@gmail.com', '80osz&u;', 'Added', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbank_doctor`
--
ALTER TABLE `bloodbank_doctor`
  ADD PRIMARY KEY (`BloodBank_doctor_ID`),
  ADD KEY `Director_ID` (`Director_ID`),
  ADD KEY `Hospital_ID` (`Hospital_ID`);

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`requeste_id`);

--
-- Indexes for table `blood_testing_result`
--
ALTER TABLE `blood_testing_result`
  ADD PRIMARY KEY (`test_result_id`);

--
-- Indexes for table `cross_matching_testing_result`
--
ALTER TABLE `cross_matching_testing_result`
  ADD PRIMARY KEY (`test_result_id`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`Director_ID`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`Donor_Id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`Hospital_ID`),
  ADD KEY `Director_ID` (`Director_ID`);

--
-- Indexes for table `mlt`
--
ALTER TABLE `mlt`
  ADD PRIMARY KEY (`MLT_ID`),
  ADD KEY `Hospital_ID` (`Hospital_ID`),
  ADD KEY `Director_ID` (`Director_ID`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`Nurse_ID`),
  ADD KEY `Director_ID` (`Director_ID`),
  ADD KEY `Hospital_ID` (`Hospital_ID`);

--
-- Indexes for table `pre_medical`
--
ALTER TABLE `pre_medical`
  ADD PRIMARY KEY (`Donor_Id`);

--
-- Indexes for table `sent_request`
--
ALTER TABLE `sent_request`
  ADD PRIMARY KEY (`Request_ID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Blood_bagID`),
  ADD KEY `Hospital_ID` (`Hospital_ID`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `transferdetails`
--
ALTER TABLE `transferdetails`
  ADD PRIMARY KEY (`Transfer_ID`),
  ADD KEY `Hospital_ID` (`Hospital_ID`),
  ADD KEY `Transfered_by` (`Transfered_by`);

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
-- AUTO_INCREMENT for table `bloodbank_doctor`
--
ALTER TABLE `bloodbank_doctor`
  MODIFY `BloodBank_doctor_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
  MODIFY `requeste_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `blood_testing_result`
--
ALTER TABLE `blood_testing_result`
  MODIFY `test_result_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cross_matching_testing_result`
--
ALTER TABLE `cross_matching_testing_result`
  MODIFY `test_result_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `Hospital_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mlt`
--
ALTER TABLE `mlt`
  MODIFY `MLT_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `Nurse_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sent_request`
--
ALTER TABLE `sent_request`
  MODIFY `Request_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `User_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `transferdetails`
--
ALTER TABLE `transferdetails`
  MODIFY `Transfer_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `warddoctor`
--
ALTER TABLE `warddoctor`
  MODIFY `WardDoctor_ID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
