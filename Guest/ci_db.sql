-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: ci
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blood_request`
--

DROP TABLE IF EXISTS `blood_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `blood_request` (
  `requeste_id` int NOT NULL,
  `patient_name` text NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `patient_age` int NOT NULL,
  `patient_gender` text NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `blood_component` text NOT NULL,
  `required_amount` int NOT NULL,
  `expected_date` date NOT NULL,
  `requested_date` date DEFAULT NULL,
  `reason` varchar(200) NOT NULL,
  `ward_number` varchar(50) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `status` text NOT NULL,
  `Hospital_ID` int NOT NULL,
  `WardDoctor_ID` int NOT NULL,
  `BloodBankDoctor_ID` int NOT NULL,
  PRIMARY KEY (`requeste_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blood_request`
--

LOCK TABLES `blood_request` WRITE;
/*!40000 ALTER TABLE `blood_request` DISABLE KEYS */;
INSERT INTO `blood_request` VALUES (7,'Abishek','1978-05-23',44,'Male','O-','Red cell',2,'2022-11-20','2022-11-20','Car accident','3','','Pending',1,7,5),(8,'Gautham Nandini','1974-02-09',49,'Female','A+','Whole blood',1,'2022-11-21','2023-03-04','Kidney transplant ','02','',' checked',2,7,0),(9,'Dilan Perera','1968-07-20',55,'Male','B+','Whole blood',1,'2023-03-12','2023-03-12','surgery','1','','Pending',4,8,0),(10,'Vijay devarakonda','1974-02-11',49,'Male','B+','Whole blood',1,'2022-11-24','2023-03-04','surgery','05','',' checked',2,8,0),(11,'Darren Henry','1989-02-01',34,'Male','B-','Whole blood',1,'2023-03-13','2023-03-13','surgery','06','','NotAvailable',5,8,0),(12,'Rohini Aadhi','1962-10-09',60,'Female','B+','Whole blood',1,'2022-12-11','2023-03-14','surgery','05','','Pending',5,8,0),(13,'Ravi shankar','1988-10-01',34,'Male','O-','Whole blood',1,'2023-03-04','2023-03-04','surgery','1','He have allergy','Pending',2,8,0),(14,'Rasan Dilikshana','1982-04-09',40,'Male','B+','Whole blood',2,'2022-12-13','2022-12-10','surgery','09','no','Pending',5,8,0),(65,'Aniston Liam','1990-07-08',32,'Male','B-','Red cell',4,'2023-03-02','2023-03-02','fever','10','',' checked',2,3,0),(66,'Ravi shalini','1993-02-04',30,'Female','AB-','Whole blood',1,'2023-03-02','2023-03-02','surgery','06','',' checked',2,7,0);
/*!40000 ALTER TABLE `blood_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blood_testing_result`
--

DROP TABLE IF EXISTS `blood_testing_result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `blood_testing_result` (
  `test_result_id` int NOT NULL,
  `Donor_Id` int NOT NULL,
  `MLT_ID` int NOT NULL,
  `BloodBank_doctor_ID` int NOT NULL,
  `Hospital_ID` int NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `malaria_result` text NOT NULL,
  `hiv_result` text NOT NULL,
  `hbv_result` text NOT NULL,
  `hcv_result` text NOT NULL,
  `vdrl_result` text NOT NULL,
  `process_date` date NOT NULL,
  `batch_number` int NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`test_result_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blood_testing_result`
--

LOCK TABLES `blood_testing_result` WRITE;
/*!40000 ALTER TABLE `blood_testing_result` DISABLE KEYS */;
INSERT INTO `blood_testing_result` VALUES (1,1,1,0,5,'O+','Negative','Negative','Negative','positive','Negative','2023-02-08',1,'Pending'),(2,2,1,2,5,'A-','Negative','Negative','Negative','Negative','Negative','2023-05-01',1,'checked'),(3,3,1,0,5,'B+','Negative','Negative','positive','Negative','Negative','2023-04-27',1,'Pending'),(4,4,1,2,5,'AB+','positive','Negative','Negative','Negative','Negative','2023-05-01',1,'checked'),(5,5,1,0,5,'O-','Negative','Negative','Negative','Negative','Positive','2023-02-08',1,'Pending'),(6,6,1,2,5,'O-','Positive','Negative','Negative','Negative','Negative','2023-05-01',1,'checked'),(7,7,1,0,5,'O-','Negative','Negative','Negative','Negative','Negative','2023-02-08',2,'Pending'),(8,8,1,0,5,'O+','Positive','Negative','Negative','Negative','Negative','2023-04-27',2,'Pending'),(9,9,1,2,5,'A-','Negative','Negative','Negative','Positive','Negative','2023-05-01',2,'checked'),(10,10,0,0,0,'B-','Negative','Negative','Negative','Negative','Negative','2023-02-08',2,'Pending'),(11,11,0,0,0,'B+','Negative','Negative','Negative','Negative','Negative','2023-02-08',3,'Pending'),(12,12,0,0,0,'O+','Negative','Negative','Negative','Negative','Negative','2023-02-08',3,'Pending'),(13,13,0,0,0,'A+','Negative','Negative','Negative','Negative','Negative','2023-02-08',3,'Pending'),(14,14,0,0,0,'A+','Negative','Negative','Negative','Negative','Negative','2023-02-08',3,'Pending'),(15,15,0,0,0,'O+','Negative','Negative','Negative','Negative','Negative','2023-02-08',3,'Pending');
/*!40000 ALTER TABLE `blood_testing_result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bloodbank_doctor`
--

DROP TABLE IF EXISTS `bloodbank_doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `bloodbank_doctor` (
  `BloodBank_doctor_ID` int NOT NULL,
  `Name_With_Initials` varchar(200) NOT NULL,
  `Hospital_ID` int NOT NULL,
  `HospitalName` varchar(200) NOT NULL,
  `SLMC_Number` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `ContactNumber` varchar(200) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `AppointmentDate` date NOT NULL,
  `RetiringDate` date NOT NULL,
  `Remark` varchar(200) NOT NULL,
  `Director_ID` int NOT NULL,
  PRIMARY KEY (`BloodBank_doctor_ID`),
  KEY `Director_ID` (`Director_ID`),
  KEY `Hospital_ID` (`Hospital_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bloodbank_doctor`
--

LOCK TABLES `bloodbank_doctor` WRITE;
/*!40000 ALTER TABLE `bloodbank_doctor` DISABLE KEYS */;
INSERT INTO `bloodbank_doctor` VALUES (1,'S.Kanishka',4,'Richway arya hospital','SLMC754','kanishka5@gmail.com','0762711901','kanishka5@gmail.com','cKj21Iu,,a','0000-00-00','0000-00-00','Removed',7),(2,'R.Sanduni',5,'Galle general hospital','SLMC723','sandu6@gmail.com','0762211601','sandu6@gmail.com','okAxb(-0Z0{Z!5rf','0000-00-00','0000-00-00','Added',7),(3,'P.M.Miyumi',5,'Galle general hospital','SLMC453','wmadushi49@gmail.com','0762711605','wmadushi49@gmail.com','o','0000-00-00','0000-00-00','Added',7),(4,'K.S.Weerasinghe',5,'Galle general hospital','SLMC445','wmadushi49@gmail.com','0762711603','wmadushi49@gmail.com','n_','0000-00-00','0000-00-00','Added',7),(5,'K.S.Weerasinghe',5,'Galle general hospital','SLMC445','wmadushi49@gmail.com','0762711603','wmadushi49@gmail.com','n_','0000-00-00','0000-00-00','Added',7),(6,'A.S.diyuni',2,'Richway arya hospital','SLMC445','qharuki98@gmail.com','0762711603','qharuki98@gmail.com','Tf/_','0000-00-00','0000-00-00','Added',7),(7,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC54','Thauki98@gmail.com','0762711603','Thauki98@gmail.com','m!2=)KLOR','2023-04-27','0000-00-00','Added',0),(8,'K.Thaduni',2,'Richway arya hospital','SLMC448','Thaduni@gmail.com','0762711605','Thaduni@gmail.com','H4^s0.kv4a`NM','2023-05-01','0000-00-00','Added',0),(9,'K.Thaduni',2,'Richway arya hospital','SLMC448','Thaduni@gmail.com','0762711605','Thaduni@gmail.com','H4^s0.kv4a`NM','2023-05-01','0000-00-00','Added',0),(10,'K.Thaduni',2,'Richway arya hospital','SLMC448','Thaduni@gmail.com','0762711605','Thaduni@gmail.com','H4^s0.kv4a`NM','2023-05-01','0000-00-00','Added',0),(11,'A.S.diyuni',5,'Galle general hospital','SLMC540','Tharuki98@gmail.com','0762711607','Tharuki98@gmail.com','#>b+P5','2023-05-01','0000-00-00','Added',0),(12,'P.M.Miyumi',2,'Richway arya hospital','SLMC453','wmadushi49@gmail.com','0762711605','wmadushi49@gmail.com','BmXdZ<I5','2023-05-01','0000-00-00','Added',7),(13,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Tharuki98@gmail.com','0762711605','Tharuki98@gmail.com','B@w@h-]Ka^O','2023-05-01','0000-00-00','Added',0),(14,'A.S.diyuni',9,'Karapitiya Teaching Hospital','SLMC544','Asiri8@gmail.com','0762711607','Asiri8@gmail.com','u4?E7buF-','2023-05-01','0000-00-00','Added',0),(15,'P.M.Miyumi',12,'Matara General Hospital','SLMC445','Tharuki98@gmail.com','0762711607','Tharuki98@gmail.com','Y/_V&^FW','2023-05-01','0000-00-00','Added',0),(16,'P.M.Miyumi',5,'Galle general hospital','SLMC450','wmadushi49@gmail.com','0762711607','wmadushi49@gmail.com','+7j8CDfWCzEDMoc0','2023-05-01','0000-00-00','Added',0);
/*!40000 ALTER TABLE `bloodbank_doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cross_matching_testing_result`
--

DROP TABLE IF EXISTS `cross_matching_testing_result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `cross_matching_testing_result` (
  `test_result_id` int NOT NULL,
  `Request_ID` int NOT NULL,
  `MLT_ID` int NOT NULL,
  `BloodBank_doctor_ID` int NOT NULL,
  `Hospital_ID` int NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `test_result` text NOT NULL,
  `process_date` date NOT NULL,
  `Status` varchar(12) NOT NULL,
  PRIMARY KEY (`test_result_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cross_matching_testing_result`
--

LOCK TABLES `cross_matching_testing_result` WRITE;
/*!40000 ALTER TABLE `cross_matching_testing_result` DISABLE KEYS */;
INSERT INTO `cross_matching_testing_result` VALUES (1,7,3,0,4,'O-','Matched','2022-11-20','checked'),(2,8,3,0,4,'A+','Matched','2022-11-20','checked'),(3,9,4,0,5,'B+','Matched','2022-11-20','checked'),(4,10,4,0,5,'B+','Matched','2022-11-23','approved'),(5,11,4,0,5,'B-','Matched','2022-12-05','checked'),(6,12,4,0,5,'B+','Matched','2022-12-10','approved'),(7,13,4,0,7,'O-','Matched','2022-12-10','checked'),(8,14,4,0,5,'B+','Matched','2022-12-10','approved'),(9,65,3,0,2,'B-','Matched','2023-03-02','checked'),(10,66,3,0,2,'AB-','Matched','2023-03-02','checked');
/*!40000 ALTER TABLE `cross_matching_testing_result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `declaration_form`
--

DROP TABLE IF EXISTS `declaration_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `declaration_form` (
  `Form_ID` int NOT NULL AUTO_INCREMENT,
  `Created_Time` datetime NOT NULL,
  `PartA_a` int DEFAULT NULL,
  `PartA_b` int DEFAULT NULL,
  `PartA_c` int DEFAULT NULL,
  `PartA_d` int DEFAULT NULL,
  `PartA_e` int DEFAULT NULL,
  `PartA_f` int DEFAULT NULL,
  `PartB_a` int DEFAULT NULL,
  `PartB_b` int DEFAULT NULL,
  `PartB_c` int DEFAULT NULL,
  `PartB_d` int DEFAULT NULL,
  `PartB_e` int DEFAULT NULL,
  `PartB_f` int DEFAULT NULL,
  `PartB_h` int DEFAULT NULL,
  `PartB_i` int DEFAULT NULL,
  `PartB_j` int DEFAULT NULL,
  `PartB_k` int DEFAULT NULL,
  `PartB_l` int DEFAULT NULL,
  `PartB_m` int DEFAULT NULL,
  `PartB_n` int DEFAULT NULL,
  `PartC_a` int DEFAULT NULL,
  `PartC_b` int DEFAULT NULL,
  `PartD_a` int DEFAULT NULL,
  `PartD_b` int DEFAULT NULL,
  `PartD_c` int DEFAULT NULL,
  `PartD_d` int DEFAULT NULL,
  `PartD_e` int DEFAULT NULL,
  `PartD_f` int DEFAULT NULL,
  `PartE_a` int DEFAULT NULL,
  `PartE_b` int DEFAULT NULL,
  `PartE_c` int DEFAULT NULL,
  `PartE_d` int DEFAULT NULL,
  `PartE_e` int DEFAULT NULL,
  `PartF_a` int DEFAULT NULL,
  `PartF_b` int DEFAULT NULL,
  `PartF_c` int DEFAULT NULL,
  `Donor_ID` int DEFAULT NULL,
  PRIMARY KEY (`Form_ID`),
  UNIQUE KEY `Form_ID` (`Form_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `declaration_form`
--

LOCK TABLES `declaration_form` WRITE;
/*!40000 ALTER TABLE `declaration_form` DISABLE KEYS */;
INSERT INTO `declaration_form` VALUES (1,'2023-05-14 00:02:13',NULL,NULL,NULL,2,2,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,0,0,0,1);
/*!40000 ALTER TABLE `declaration_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `director`
--

DROP TABLE IF EXISTS `director`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `director` (
  `Director_ID` int NOT NULL,
  `Name_With_Initials` varchar(200) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Remark` varchar(200) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  PRIMARY KEY (`Director_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `director`
--

LOCK TABLES `director` WRITE;
/*!40000 ALTER TABLE `director` DISABLE KEYS */;
INSERT INTO `director` VALUES (7,'K.A.Sewmi','sewmi@gmail.com','076543218','89','Signed up','sewmi@gmail.com');
/*!40000 ALTER TABLE `director` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donation_records`
--

DROP TABLE IF EXISTS `donation_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `donation_records` (
  `Donor_Id` int NOT NULL,
  `Donation_ID` int NOT NULL,
  `Hospital_ID` int NOT NULL,
  `Donation_Date` date NOT NULL,
  `Donor_Name` varchar(500) NOT NULL,
  `Quantity` int NOT NULL,
  `Nurse_ID` int NOT NULL,
  PRIMARY KEY (`Donation_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donation_records`
--

LOCK TABLES `donation_records` WRITE;
/*!40000 ALTER TABLE `donation_records` DISABLE KEYS */;
INSERT INTO `donation_records` VALUES (1,1,5,'2022-11-02','Hiruni Hansini',1,10),(2,2,5,'2023-04-12','M.S.Weerawarna\r\n',1,10),(1,3,5,'2023-04-23','Hiruni Hansini',1,10),(2,4,5,'2022-11-12','M.S.Weerawarna\r\n',1,10);
/*!40000 ALTER TABLE `donation_records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `donor` (
  `Donor_Id` int NOT NULL,
  `Full_Name` varchar(30) NOT NULL,
  `Initials` varchar(20) NOT NULL,
  `Gender` varchar(18) NOT NULL,
  PRIMARY KEY (`Donor_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donor`
--

LOCK TABLES `donor` WRITE;
/*!40000 ALTER TABLE `donor` DISABLE KEYS */;
INSERT INTO `donor` VALUES (1,'Hiruni  hansini','H,S,Hansini','Female');
/*!40000 ALTER TABLE `donor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donors`
--

DROP TABLE IF EXISTS `donors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `donors` (
  `Donor_Id` int NOT NULL,
  `Hospital_ID` int NOT NULL,
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
  `password` varchar(50) NOT NULL,
  `Remark` varchar(20) NOT NULL,
  `blood_grp` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`Donor_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donors`
--

LOCK TABLES `donors` WRITE;
/*!40000 ALTER TABLE `donors` DISABLE KEYS */;
INSERT INTO `donors` VALUES (1,5,'Ms','Hiruni Hansini','S.A.H.H Sinhabahu','8547692411V','1999-03-26','sahhansini@gmail.com','F','Horana','Western','210','0711314023','0342256987','sah@gmail.com','4321','A',NULL),(3,0,'Mr','fdsafa','dfasfdsa','123123123','2023-05-16','','M','fdsafaf','Central','12313','213213123','','anonymous','0000','A',NULL),(6,5,'Ms','Ayeshi','L.k.Ayeshi','997834217V','0000-00-00','weerawarnamadushi@gmail.com','Female','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','Removed','[value-16]','A',NULL),(9,5,'Ms','Madushi Saumya Weerawarna','M.S.Weerawarna','994455221V','2023-04-19','wmadushi49@gmail.com','Female','No 129,Thissa road,Wadduwa','Western','34','0783411239','0112345678','wmadushi49@gmail.com','786','A',NULL);
/*!40000 ALTER TABLE `donors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `hospital` (
  `Hospital_ID` int NOT NULL,
  `HospitalName` varchar(200) NOT NULL,
  `Type` varchar(40) NOT NULL,
  `District` varchar(60) NOT NULL,
  `Head_Of_Hospital` varchar(60) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Landline_Number` varchar(20) NOT NULL,
  `ContactNum_Hospital_Head` varchar(20) NOT NULL,
  `Director_ID` int NOT NULL,
  `Remark` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospital`
--

LOCK TABLES `hospital` WRITE;
/*!40000 ALTER TABLE `hospital` DISABLE KEYS */;
INSERT INTO `hospital` VALUES (2,'Richway arya hospital','General','Colombo','J.K.Priyantha','No .233,Colombo','01123457','07845134',1,'Non-functioning'),(5,'Galle general hospital','General','Galle','J.K.Asiri','No .233,tholunna,galle.','01123459','07845136',0,'Non-functioning'),(9,'Karapitiya Teaching Hospital','Teaching','Galle','R.K.Dasun','No .233,Galle.','0112344348','07845131',1,'Non-functioning'),(12,'Matara General Hospital','General','general','L.M.Hewagamage','No .283,Matara.','0112344788','07345531',0,'Non-functioning'),(17,'Karapitiya_Teaching_Hospita','Anuradhapura','Teaching','J.P.liyange','No .233,tholunna,galle.','01123459','07345531',1,'Non-functioning');
/*!40000 ALTER TABLE `hospital` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mlt`
--

DROP TABLE IF EXISTS `mlt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `mlt` (
  `MLT_ID` int NOT NULL,
  `Name_With_Initials` varchar(200) NOT NULL,
  `Hospital_ID` int NOT NULL,
  `HospitalName` varchar(200) NOT NULL,
  `SLMC_Number` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `ContactNumber` varchar(200) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `AppointmentDate` date NOT NULL,
  `RetiringDate` date NOT NULL,
  `Remark` varchar(200) NOT NULL,
  `Director_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mlt`
--

LOCK TABLES `mlt` WRITE;
/*!40000 ALTER TABLE `mlt` DISABLE KEYS */;
INSERT INTO `mlt` VALUES (1,'Hiruni Hansini',5,'Galle general hospital','SLMC445','Hiruni3@gmail.com','0762711607','Hiruni3@gmail.com',',Hos(],PM8m K_o-','0000-00-00','0000-00-00','Added',7),(2,'C.D.Nayomi',4,'Richway arya hospital','446','Nayomi4@gmail.com','0762711603','Nayomi4@gmail.com','pF)@(q7K','0000-00-00','0000-00-00','Added',7),(40,'A.S.diyuni',2,'Richway arya hospital','SLMC450','weerawarnamadushi@gmail.com','0762711601','weerawarnamadushi@gmail.com','q#=Qp5<]','0000-00-00','0000-00-00','Added',7),(41,'P.M.Miyumi',2,'Richway arya hospital','SLMC445','wmadushi49@gmail.com','0762711607','wmadushi49@gmail.com','-mJSm_ZI6KwjARDq','0000-00-00','0000-00-00','Added',7),(42,'A.S.diyuni',2,'Richway arya hospital','SLMC450','weerawarnamadushi@gmail.com','0762711601','weerawarnamadushi@gmail.com','q#=Qp5<]','0000-00-00','0000-00-00','Added',7),(43,'K.S.Weerasinghe',5,'Galle general hospital','SLMC450','wmadushi49@gmail.com','0762711603','wmadushi49@gmail.com','tAi)s*Veb','0000-00-00','0000-00-00','Added',7),(44,'K.S.Weerasinghe',5,'Galle general hospital','SLMC445','wmadushi49@gmail.com','0762711603','wmadushi49@gmail.com','dn1nnEz^Ye`D_>q.','0000-00-00','0000-00-00','Added',7),(45,'P.M.Miyumi',2,'Richway arya hospital','SLMC548','Tharuki98@gmail.com','0762711603','Tharuki98@gmail.com','yQkN$`S*3m7>8Dr|','0000-00-00','0000-00-00','Added',7),(46,'P.M.Miyumi',2,'Richway arya hospital','SLMC548','wmadushi49@gmail.com','0762711603','wmadushi49@gmail.com','5S;UT;Zvru-`#','0000-00-00','0000-00-00','Added',7),(47,'P.M.Miyumi',2,'Richway arya hospital','SLMC548','wmadushi49@gmail.com','0762711603','wmadushi49@gmail.com','5S;UT;Zvru-`#','0000-00-00','0000-00-00','Added',7),(48,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(49,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(50,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(51,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(52,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(53,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(54,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(55,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(56,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(57,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(58,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(59,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(60,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(61,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(62,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(63,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(64,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(65,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(66,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(67,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(68,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(69,'K.S.Weerasinghe',9,'Karapitiya Teaching Hospital','SLMC450','Asiri8@gmail.com','0762711601','Asiri8@gmail.com',' #$VRJJ{m]tCj:','0000-00-00','0000-00-00','Added',7),(70,'P.M.Miyumi',9,'Karapitiya Teaching Hospital','SLMC549','Asiri8@gmail.com','0762711607','Asiri8@gmail.com','HtswHS|4\rU{H,7','2023-05-01','0000-00-00','Added',0),(71,'P.M.Miyumi',9,'Karapitiya Teaching Hospital','SLMC549','Asiri8@gmail.com','0762711607','Asiri8@gmail.com','HtswHS|4\rU{H,7','2023-05-01','0000-00-00','Added',0),(72,'K.S.Weerasinghe',5,'Galle general hospital','SLMC445','Tharuki98@gmail.com','0762711601','Tharuki98@gmail.com','L5NSeK.x$a<wU','2023-05-01','0000-00-00','Added',0),(73,'K.S.Weerasinghe',5,'Galle general hospital','SLMC445','Tharuki98@gmail.com','0762711601','Tharuki98@gmail.com','L5NSeK.x$a<wU','2023-05-01','0000-00-00','Added',0),(74,'K.S.Weerasinghe',5,'Galle general hospital','SLMC445','Tharuki98@gmail.com','0762711601','Tharuki98@gmail.com','L5NSeK.x$a<wU','2023-05-01','0000-00-00','Added',0),(75,'A.S.diyuni',9,'Karapitiya Teaching Hospital','SLMC548','wmadushi49@gmail.com','0762711601','wmadushi49@gmail.com','lC+1oX4nM]5g75^','2023-05-01','0000-00-00','Added',0);
/*!40000 ALTER TABLE `mlt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nurse`
--

DROP TABLE IF EXISTS `nurse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `nurse` (
  `Nurse_ID` int NOT NULL,
  `Name_With_Initials` varchar(200) NOT NULL,
  `Hospital_ID` int NOT NULL,
  `HospitalName` varchar(200) NOT NULL,
  `Position` varchar(63) NOT NULL,
  `DOB` date NOT NULL,
  `SLMC_Number` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `AppointmentDate` date NOT NULL,
  `RetiringDate` date NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Remark` varchar(50) NOT NULL,
  `Director_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nurse`
--

LOCK TABLES `nurse` WRITE;
/*!40000 ALTER TABLE `nurse` DISABLE KEYS */;
INSERT INTO `nurse` VALUES (2,'D.N.Ishini',9,'Karapitiya Teaching Hospital','Head nurse','2023-03-03','SLMC499','ishini3@gmail.com','0762711567','2023-03-13','0000-00-00','ishini3@gmail.com','md5(Wv)y%z/dzT`-)','Added',0),(10,'P.M.Miyumi',9,'Karapitiya Teaching Hospital','Head nurse','2023-03-16','SLMC450','Hiruni3@gmail.com','0762711603','2023-03-13','0000-00-00','Hiruni3@gmail.com','md5(01]fq8`Vy<Q0%D^)','Added',0),(18,'A.S.diyuni',5,'Galle general hospital','Head nurse','2023-04-17','SLMC540','km@gmail.com','0762711607','2023-04-13','0000-00-00','km@gmail.com','md5(g>TIh?2.,77)','Added',7),(19,'P.M.Kiyumi',2,'Richway arya hospital','Head nurse','2023-04-07','SLMC545','wmadushi49@gmail.com','0762711607','2023-04-13','0000-00-00','wmadushi49@gmail.com','md5((Itfvl)U@})','Added',7),(20,'P.M.Miyumi',5,'Galle general hospital','Head nurse','2023-04-13','SLMC450','wmadushi49@gmail.com','0762711607','2023-04-13','0000-00-00','wmadushi49@gmail.com','md5(|y]G;IG1M1t,l)','Added',7),(21,'K.S.Weerasinghe',5,'Galle general hospital','Nurse','2023-04-14','SLMC542','oharuki98@gmail.com','0762711607','2023-04-15','0000-00-00','oharuki98@gmail.com','md5(#HCI=]J,jd)','Added',7),(22,'K.S.Weerasinghe',12,'Matara General Hospital','Head nurse','2023-04-18','SLMC450','pmadushi49@gmail.com','0762711601','2023-04-15','0000-00-00','pmadushi49@gmail.com','md5(gC1642Fy#~hMf)','Added',7);
/*!40000 ALTER TABLE `nurse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pre_medical`
--

DROP TABLE IF EXISTS `pre_medical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `pre_medical` (
  `Donor_Id` int NOT NULL,
  `Hospital_ID` int NOT NULL,
  `Weight` varchar(100) NOT NULL,
  `Height` varchar(100) NOT NULL,
  `Blood_Group` varchar(10) NOT NULL,
  `Blood_Pressure` varchar(100) NOT NULL,
  `Hemoglobine` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pre_medical`
--

LOCK TABLES `pre_medical` WRITE;
/*!40000 ALTER TABLE `pre_medical` DISABLE KEYS */;
INSERT INTO `pre_medical` VALUES (2,2,'5Kg','150cm','','90','12'),(4,5,'45','120','B-','45','78'),(5,9,'45','120','B-','45','78'),(7,12,'45','120','A-','45','78');
/*!40000 ALTER TABLE `pre_medical` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sent_request`
--

DROP TABLE IF EXISTS `sent_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `sent_request` (
  `Request_ID` int NOT NULL,
  `Requesting_hospital_name` varchar(24) NOT NULL,
  `Requested_hospital_name` varchar(200) NOT NULL,
  `Requested_by` varchar(200) NOT NULL,
  `Requeired_blood_group` varchar(200) NOT NULL,
  `Requeired_blood_component` varchar(200) NOT NULL,
  `Requeired_no_of_packs` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sent_request`
--

LOCK TABLES `sent_request` WRITE;
/*!40000 ALTER TABLE `sent_request` DISABLE KEYS */;
INSERT INTO `sent_request` VALUES (11,'Richway arya hospital','Galle general hospital','S.Kanishka','Red Blood Cells','A+','2','2023-03-12','NotAvailable'),(12,'Galle general hospital','Richway arya hospital','R.Sanduni','White Blood Cells','$B+','1','2023-04-29','pending');
/*!40000 ALTER TABLE `sent_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `Hospital_ID` int NOT NULL,
  `Blood_bagID` int NOT NULL,
  `Blood_group` varchar(12) NOT NULL,
  `Component_type` varchar(40) NOT NULL,
  `MLT_ID` int NOT NULL,
  `ExpiryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
INSERT INTO `stock` VALUES (5,456,'A+','Red',1,'2022-02-18'),(5,458,'A+','Red',2,'2022-10-05');
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_users`
--

DROP TABLE IF EXISTS `system_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `system_users` (
  `User_ID` int NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system_users`
--

LOCK TABLES `system_users` WRITE;
/*!40000 ALTER TABLE `system_users` DISABLE KEYS */;
INSERT INTO `system_users` VALUES (5,'sewmi@gmail.com','89',5),(13,'Hiruni3@gmail.com',',Hos(],PM8m K_o-',2),(14,'Nayomi4@gmail.com','pF)@(q7K',2),(17,'Dawe6@gmail.com','T&<:A_6Y,B$*:h[h',3),(18,'rashi8@gmail.com','80osz&u;',3),(19,'kanishka5@gmail.com','cKj21Iu,,a',1),(20,'sandu6@gmail.com','okAxb(-0Z0{Z!5rf',1),(21,'devindya3@gmail.com','u\"c.,q#SLq',2),(25,'ishini3@gmail.com','Wv)y%z/dzT`-',4),(33,'Hiruni3@gmail.com','01]fq8`Vy<Q0%D^',4),(34,'Asiri8@gmail.com','rVVq[<cu',4),(35,'Tharuki98@gmail.com','d.5geXJ(~',4),(75,'sahhansini@gmail.com','<l0 _TI8nzM',2),(77,'pharuki98@gmail.com','h;KKNR5n',4),(78,'km@gmail.com','g>TIh?2.,77',4),(87,'wmadushi49@gmail.com','AkrcSz/4',3),(88,'wmadushi49@gmail.com',';dEM\"IbvGYr=)%A>',3),(89,'wmadushi49@gmail.com','o',1),(90,'wmadushi49@gmail.com','n_',1),(91,'wmadushi49@gmail.com','n_',1),(92,'Tharuki98@gmail.com','yQkN$`S*3m7>8Dr|',2),(93,'wmadushi49@gmail.com','5S;UT;Zvru-`#',2),(94,'wmadushi49@gmail.com','5S;UT;Zvru-`#',2),(95,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(96,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(97,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(98,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(99,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(100,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(101,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(102,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(103,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(104,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(105,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(106,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(107,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(108,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(109,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(110,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(111,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(112,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(113,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(114,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(115,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(116,'Asiri8@gmail.com',' #$VRJJ{m]tCj:',2),(117,'oharuki98@gmail.com','#HCI=]J,jd',4),(118,'pmadushi49@gmail.com','gC1642Fy#~hMf',4),(119,'qharuki98@gmail.com','Tf/_',1),(120,'Thauki98@gmail.com','m!2=)KLOR',1),(121,'Thaduni@gmail.com','H4^s0.kv4a`NM',1),(122,'Thaduni@gmail.com','H4^s0.kv4a`NM',1),(123,'Thaduni@gmail.com','H4^s0.kv4a`NM',1),(124,'Asiri8@gmail.com','HtswHS|4\rU{H,7',2),(125,'Asiri8@gmail.com','HtswHS|4\rU{H,7',2),(126,'Tharuki98@gmail.com','#>b+P5',1),(127,'Tharuki98@gmail.com','L5NSeK.x$a<wU',2),(128,'Tharuki98@gmail.com','L5NSeK.x$a<wU',2),(129,'Tharuki98@gmail.com','L5NSeK.x$a<wU',2),(130,'wmadushi49@gmail.com','BmXdZ<I5',1),(131,'Tharuki98@gmail.com','B@w@h-]Ka^O',1),(132,'Asiri8@gmail.com','u4?E7buF-',1),(133,'Tharuki98@gmail.com','Y/_V&^FW',1),(134,'wmadushi49@gmail.com','lC+1oX4nM]5g75^',2),(135,'wmadushi49@gmail.com','+7j8CDfWCzEDMoc0',1),(136,'wmadushi49@gmail.com','A^pRb:AJe=pz',3);
/*!40000 ALTER TABLE `system_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transferdetails`
--

DROP TABLE IF EXISTS `transferdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `transferdetails` (
  `Transfer_ID` int NOT NULL,
  `Hospital_ID` int NOT NULL,
  `HospitalName` varchar(200) NOT NULL,
  `Transfered_to` varchar(200) NOT NULL,
  `Transfered_by` varchar(200) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transferdetails`
--

LOCK TABLES `transferdetails` WRITE;
/*!40000 ALTER TABLE `transferdetails` DISABLE KEYS */;
INSERT INTO `transferdetails` VALUES (1,12,'Matara','Richway arya hospital','K.A.Sewmi','2023-03-11'),(2,5,'Galle','Richway arya hospital','K.A.Sewmi','2023-03-17'),(3,9,'Karapitiya','Richway arya hospital','','2023-04-15'),(4,17,'Karapitiya_Teaching_Hospita','Richway arya hospital','','2023-04-29');
/*!40000 ALTER TABLE `transferdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `warddoctor`
--

DROP TABLE IF EXISTS `warddoctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `warddoctor` (
  `WardDoctor_ID` int NOT NULL,
  `Name_With_Initials` varchar(200) NOT NULL,
  `Hospital_ID` int NOT NULL,
  `HospitalName` varchar(200) NOT NULL,
  `Specialization` varchar(200) NOT NULL,
  `SLMC_Number` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL,
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `AppointmentDate` date NOT NULL,
  `RetiringDate` date NOT NULL,
  `Remark` varchar(200) NOT NULL,
  `Director_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warddoctor`
--

LOCK TABLES `warddoctor` WRITE;
/*!40000 ALTER TABLE `warddoctor` DISABLE KEYS */;
INSERT INTO `warddoctor` VALUES (2,'J.K.Rashini',4,'Richway arya hospital','Dermatology','SLMC680','rashi8@gmail.com','0762711701','rashi8@gmail.com','80osz&u;','0000-00-00','0000-00-00','Added',7),(3,'A.S.diyuni',2,'Richway arya hospital','Obstetrics & Gynecology','SLMC445','wmadushi49@gmail.com','0762711605','wmadushi49@gmail.com','W&)C@u}^~`eW?','2023-05-10','0000-00-00','Added',7),(4,'P.M.giyumi',5,'Galle general hospital','General Surgery','SLMC549','wmadushi49@gmail.com','0762711603','wmadushi49@gmail.com','AkrcSz/4','0000-00-00','0000-00-00','Added',7),(5,'P.M.Miyumi',2,'Richway arya hospital','General Surgery','SLMC450','wmadushi49@gmail.com','0762711605','wmadushi49@gmail.com',';dEM\"IbvGYr=)%A>','2023-04-12','0000-00-00','Added',7),(6,'P.M.Miyumi',12,'Matara General Hospital','Pediatrics','SLMC445','wmadushi49@gmail.com','0762711607','wmadushi49@gmail.com','A^pRb:AJe=pz','2023-05-03','0000-00-00','Added',0);
/*!40000 ALTER TABLE `warddoctor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-14  0:18:47
