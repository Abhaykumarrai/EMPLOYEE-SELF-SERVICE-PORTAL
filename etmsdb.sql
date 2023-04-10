-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 10:38 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8979555558, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2019-10-11 04:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `ID` int(5) NOT NULL,
  `DepartmentName` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`ID`, `DepartmentName`, `CreationDate`) VALUES
(3, 'Technical', '2022-03-15 07:34:48'),
(4, 'Accounts', '2022-03-15 07:34:58'),
(5, 'Testing', '2022-03-15 07:35:08'),
(6, 'Operations', '2022-03-15 07:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbldesignation`
--

CREATE TABLE `tbldesignation` (
  `ID` int(5) NOT NULL,
  `Designation` varchar(40) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldesignation`
--

INSERT INTO `tbldesignation` (`ID`, `Designation`, `createdat`) VALUES
(1, 'EXECUTIVE DIRECTOR', '2022-11-24 00:00:00'),
(2, 'ADVISOR', '2022-11-24 00:00:00'),
(3, 'DIRECTOR', '2022-11-24 12:19:35'),
(4, 'JOINT DIRECTOR', '2022-11-24 12:23:54'),
(5, 'DEPUTY DIRECTOR', '2022-11-24 12:23:54'),
(6, 'ASSISTENT  DIRECTOR', '2022-11-24 12:28:25'),
(7, 'SENIOR MANAGER', '2022-11-24 12:28:25'),
(8, 'MANAGER', '2022-11-24 12:28:25'),
(9, 'DEPUTY MANAGER', '2022-11-24 12:28:25'),
(10, 'ASSISTANT MANAGER', '2022-11-24 12:28:25'),
(11, 'ASSISTANT DIRECTOR(TECHNICAL)', '2022-11-24 12:28:25'),
(12, 'IT ASSISTANT', '2022-11-24 12:28:25'),
(13, 'ASSISTANT', '2022-11-24 12:28:25'),
(14, 'TECHNICAL OFFICER', '2022-11-24 12:28:25'),
(15, 'DEO', '2022-11-24 12:28:25'),
(16, 'CONSULTANT', '2022-11-24 12:28:25'),
(17, 'FOOD ANALYST', '2022-11-24 12:28:25'),
(18, 'SR. PRIVAYE SECRETARY', '2022-11-24 12:28:25'),
(19, 'PERSONAL ASSISTANT', '2022-11-24 12:30:29'),
(20, 'ADMINISTRATIVE OFFICER', '2022-11-24 12:30:29'),
(21, 'MTS', '2022-11-24 12:30:29'),
(22, 'JAG-1', '2022-11-24 12:30:29'),
(23, 'JAG-2', '2022-11-24 12:30:29'),
(24, 'CENTRAL FOOD SAFETY OFFICER', '2022-11-24 12:31:16'),
(25, 'DEPUTY DIRECTOR', '2022-11-24 12:31:16'),
(31, 'IT INTERN', '2022-11-28 11:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbldscno`
--

CREATE TABLE `tbldscno` (
  `ID` int(5) NOT NULL,
  `DeptID` int(5) DEFAULT NULL,
  `Assignto` int(5) DEFAULT NULL,
  `DSCNO` varchar(255) DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `status4` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldscno`
--

INSERT INTO `tbldscno` (`ID`, `DeptID`, `Assignto`, `DSCNO`, `StartDate`, `EndDate`, `UpdationDate`, `status4`) VALUES
(8, 4, 46, 'asfarqer12132', '2022-11-10', '2022-11-16', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblemail`
--

CREATE TABLE `tblemail` (
  `ID` int(5) NOT NULL,
  `DeptID` int(5) NOT NULL,
  `AssignTo` int(5) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `UpdationDtae` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status3` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblemail`
--

INSERT INTO `tblemail` (`ID`, `DeptID`, `AssignTo`, `Email`, `StartDate`, `EndDate`, `UpdationDtae`, `status3`) VALUES
(1, 4, 46, 'aniketfssai@gmail.com', '2022-11-11', '2022-11-11', '2022-11-29 07:06:20', 1),
(2, 4, 46, 'abhainavfssai@gmail.com', '2022-11-12', '2022-11-09', '2022-11-29 09:29:33', 1),
(4, 5, 9, 'anmol@fssai.com', '2022-12-09', '2023-10-12', '2022-12-05 06:30:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `ID` int(5) NOT NULL,
  `DepartmentID` int(5) DEFAULT NULL,
  `EmpType` varchar(255) NOT NULL,
  `EmpId` varchar(100) DEFAULT NULL,
  `EmpName` varchar(200) DEFAULT NULL,
  `EmpEmail` varchar(200) DEFAULT NULL,
  `EmpContactNumber` bigint(10) DEFAULT NULL,
  `Designation` int(5) DEFAULT NULL,
  `EmpDateofbirth` date DEFAULT NULL,
  `EmpAddress` varchar(250) DEFAULT NULL,
  `EmpDateofjoining` date DEFAULT NULL,
  `ReportingOfficerName` varchar(255) DEFAULT NULL,
  `DateOfrRtirement` varchar(255) DEFAULT NULL,
  `LeaveApproving` varchar(255) DEFAULT NULL,
  `LeaveReporting` varchar(255) DEFAULT NULL,
  `LeaveControling` varchar(255) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `ProfilePic` varchar(250) DEFAULT NULL,
  `AadharCard` varchar(255) DEFAULT NULL,
  `PanCard` varchar(255) DEFAULT NULL,
  `AppointmentLetter` varchar(255) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `verification_code` varchar(255) NOT NULL,
  `is_verified` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`ID`, `DepartmentID`, `EmpType`, `EmpId`, `EmpName`, `EmpEmail`, `EmpContactNumber`, `Designation`, `EmpDateofbirth`, `EmpAddress`, `EmpDateofjoining`, `ReportingOfficerName`, `DateOfrRtirement`, `LeaveApproving`, `LeaveReporting`, `LeaveControling`, `Description`, `Password`, `ProfilePic`, `AadharCard`, `PanCard`, `AppointmentLetter`, `CreationDate`, `UpdationDate`, `verification_code`, `is_verified`) VALUES
(2, 5, '5', 'sdfas', 'guyyu', 'g@gmail.com', 7895678, 2, '2022-12-18', 'yutujh', '2022-12-21', 'ytutyu', '2022-12-17', 'ytutyjt', 'hgju', 'tyjgjuyi', 'ghjt', '202cb962ac59075b964b07152d234b70', 'b9fb9d37bdf15a699bc071ce49baea531669876834.jpg', NULL, NULL, NULL, '2022-03-15 12:23:03', '2022-12-01 06:40:34', '', 0),
(4, 5, '5', 'sdfas', 'Abir Singh', 'abir@gmail.com', 7895678, 2, '2022-12-18', 'yutujh', '2022-12-21', 'ytutyu', '2022-12-17', 'ytutyjt', 'hgju', 'tyjgjuyi', 'ghjt', '202cb962ac59075b964b07152d234b70', 'b9fb9d37bdf15a699bc071ce49baea531669876834.jpg', NULL, NULL, NULL, '2022-03-15 12:29:20', '2022-12-01 06:40:34', '', 0),
(5, 5, '5', 'sdfas', 'Anuj kumar', 'ak@gmail.com', 7895678, 2, '2022-12-18', 'yutujh', '2022-12-21', 'ytutyu', '2022-12-17', 'ytutyjt', 'hgju', 'tyjgjuyi', 'ghjt', 'f925916e2754e5e03f75dd58a5733251', 'b9fb9d37bdf15a699bc071ce49baea531669876834.jpg', NULL, NULL, NULL, '2022-03-26 06:11:45', '2022-12-01 06:40:34', '', 0),
(9, 5, '5', 'ANMOL123', 'ANMOL KUMAR RAI', 'ANMOL@GMAIL.COM', 8595793204, 2, '2022-12-18', 'UNIT-E,6 AURANGZEB ROAD NEW DELHI 110011', '2022-12-21', 'ANURAG', '2022-12-17', 'ABHAY', 'AMAN', 'ANURAG', 'MY NAME IS ANMOL', '8554f1a9b357b130ca76ae138c94a59f', 'b9fb9d37bdf15a699bc071ce49baea531669876834.jpg', NULL, NULL, NULL, '2022-11-24 07:08:52', '2022-12-02 06:44:33', '', 0),
(17, 5, '5', 'sdfas', 'ABHAY', 'ABHAYKUMARRAI666@GMAL.COM', 7895678, 2, '2022-12-18', 'yutujh', '2022-12-21', 'ytutyu', '2022-12-17', 'ytutyjt', 'hgju', 'tyjgjuyi', 'ghjt', '3bfce8038fb1b82dfe1825516a77b5fe', 'b9fb9d37bdf15a699bc071ce49baea531669876834.jpg', NULL, NULL, NULL, '2022-11-25 08:06:34', '2022-12-01 06:40:34', '', 0),
(18, 5, '5', 'sdfas', 'abhay', 'abhay56@gmail.com', 7895678, 2, '2022-12-18', 'yutujh', '2022-12-21', 'ytutyu', '2022-12-17', 'ytutyjt', 'hgju', 'tyjgjuyi', 'ghjt', '2cada6667c618c6ac903b934189673e3', 'b9fb9d37bdf15a699bc071ce49baea531669876834.jpg', NULL, NULL, NULL, '2022-11-25 11:02:34', '2022-12-01 06:40:34', '', 0),
(24, 5, '5', 'sdfas', 'abhay singh', 'abhay123564@gmail.com', 7895678, 2, '2022-12-18', 'yutujh', '2022-12-21', 'ytutyu', '2022-12-17', 'ytutyjt', 'hgju', 'tyjgjuyi', 'ghjt', 'bb5be142fb1c014f6c324126b65d55a6', 'b9fb9d37bdf15a699bc071ce49baea531669876834.jpg', NULL, NULL, NULL, '2022-11-28 05:42:58', '2022-12-01 06:40:34', '', 0),
(45, 5, '5', 'sdfas', 'anshu', 'anshu@gmail.com', 7895678, 2, '2022-12-18', 'yutujh', '2022-12-21', 'ytutyu', '2022-12-17', 'ytutyjt', 'hgju', 'tyjgjuyi', 'ghjt', 'bc26c524057efc2399352b701e94a058', 'b9fb9d37bdf15a699bc071ce49baea531669876834.jpg', NULL, NULL, NULL, '2022-11-29 05:04:07', '2022-12-01 06:40:34', '', 0),
(46, 5, '5', 'sdfas', 'aniket', 'aniket@gmail.com', 7895678, 2, '2022-12-18', '', '2022-12-21', 'ytutyu', '', '', '', '', '', '185e1a3a41e1463e1a60901060bcfefc', 'b9fb9d37bdf15a699bc071ce49baea531669879557.jpg', NULL, NULL, NULL, '2022-11-29 05:11:15', '2022-12-01 08:42:50', '', 0),
(57, 5, '5', 'sdfas', 'kajal', 'kajal@gmail.com', 7895678, 2, '2022-12-18', 'yutujh', '2022-12-21', 'ytutyu', '2022-12-17', 'ytutyjt', 'hgju', 'tyjgjuyi', 'ghjt', '5c590aa54465874e74313cc5772187f6', 'b9fb9d37bdf15a699bc071ce49baea531669876834.jpg', NULL, NULL, NULL, '2022-12-01 05:57:13', '2022-12-01 06:40:34', '', 0),
(59, 5, '5', 'sdfas', 'anil', 'anil@gmail.com', 7895678, 2, '2022-12-18', 'yutujh', '2022-12-21', 'ytutyu', '2022-12-17', 'ytutyjt', 'hgju', 'tyjgjuyi', 'ghjt', 'a2af486ce7125f6a0ee4524f435cb5e8', 'b9fb9d37bdf15a699bc071ce49baea531669876834.jpg', NULL, NULL, NULL, '2022-12-01 06:36:28', '2022-12-01 06:40:34', '', 0),
(60, NULL, '', NULL, 'kunali', 'kunali@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '785a497508090976593bd6c2a9f7e0fe', NULL, NULL, NULL, NULL, '2022-12-01 07:05:21', NULL, '', 0),
(64, NULL, '', NULL, 'ANKUR', 'ANKUR@GMAIL.COM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '181fda2f07ae5c981dc739bdb8bd9ab7', NULL, NULL, NULL, NULL, '2022-12-01 10:42:16', NULL, '', 0),
(65, 4, '2', 'ANURAG123', 'ANURAG', 'ANURAG@GMAUL.COM', 3425425245, 4, '2022-12-09', '324R23R', '2022-12-17', 'FVDFGFSD', '2022-12-09', 'DSFSD', 'SDFDS', 'DSFSD', 'DSFSDF', '3cf2a4861abf0eaa777532cac865df0a', 'b9fb9d37bdf15a699bc071ce49baea531669892289.jpg', NULL, NULL, NULL, '2022-12-01 10:58:09', NULL, '', 0),
(66, 4, '1', 'abhay123', 'dinesh', 'abhay@gmail.com', 8789786286, 6, '2022-12-15', '78268368123', '0043-03-31', 'we2q3e4', '2022-12-16', 'wqew', 'ada', 'asdasdas', 'dada', '167784d36ab99e49738fe6a6a98798b7', 'b9fb9d37bdf15a699bc071ce49baea531669895477.jpg', NULL, NULL, NULL, '2022-12-01 11:51:17', NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblemptype`
--

CREATE TABLE `tblemptype` (
  `ID` int(5) NOT NULL,
  `EmpType` varchar(255) DEFAULT NULL,
  `CreationDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblemptype`
--

INSERT INTO `tblemptype` (`ID`, `EmpType`, `CreationDate`) VALUES
(1, 'Permanent', '2022-11-28 10:30:06'),
(2, 'Deputation', '2022-11-28 10:32:22'),
(5, 'Part-Time', '2022-11-28 15:41:16'),
(6, 'Contract', '2022-11-28 15:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbleoffice`
--

CREATE TABLE `tbleoffice` (
  `ID` int(5) NOT NULL,
  `DeptID` int(5) DEFAULT NULL,
  `AssignTo` int(5) DEFAULT NULL,
  `E_office` varchar(255) DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `status2` int(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbleoffice`
--

INSERT INTO `tbleoffice` (`ID`, `DeptID`, `AssignTo`, `E_office`, `StartDate`, `EndDate`, `UpdationDate`, `status2`) VALUES
(4, 4, 46, 'asfsdfs12342353', '2022-11-09', '2022-11-12', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'FSSAIESS ( FSSAI EMPLOYEE SELF SERVICE ) - USER MANUAL', '                                                                                                                                   FSSAI EMPLOYEE SELF SERVICE\r\nWelcome to Fssai Ess User Manual page', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', 'APJ ABDUL KALAM ROAD NEW DELHI 110011', 'Abhaykumarrai666@gmal.com', 9716449999, NULL, '10:30 am to 7:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblsystem`
--

CREATE TABLE `tblsystem` (
  `ID` int(5) NOT NULL,
  `DeptID` int(5) NOT NULL,
  `AssignTo` int(5) NOT NULL,
  `SerialNumber` varchar(100) DEFAULT NULL,
  `ModelNumber` varchar(100) DEFAULT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `status1` int(1) NOT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsystem`
--

INSERT INTO `tblsystem` (`ID`, `DeptID`, `AssignTo`, `SerialNumber`, `ModelNumber`, `StartDate`, `EndDate`, `status1`, `UpdationDate`) VALUES
(3, 4, 46, '343124567', '423425353', '2022-11-18', '2022-11-17', 1, '2022-12-05 11:01:22'),
(6, 4, 45, '12312321', '2312333', '2022-11-09', '2022-11-18', 1, '2022-12-02 05:33:55'),
(8, 3, 18, '32434', '2353452', '2022-11-13', '2022-11-10', 1, '2022-12-02 05:47:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldesignation`
--
ALTER TABLE `tbldesignation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldscno`
--
ALTER TABLE `tbldscno`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblemail`
--
ALTER TABLE `tblemail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblemptype`
--
ALTER TABLE `tblemptype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbleoffice`
--
ALTER TABLE `tbleoffice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsystem`
--
ALTER TABLE `tblsystem`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbldesignation`
--
ALTER TABLE `tbldesignation`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbldscno`
--
ALTER TABLE `tbldscno`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblemail`
--
ALTER TABLE `tblemail`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tblemptype`
--
ALTER TABLE `tblemptype`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbleoffice`
--
ALTER TABLE `tbleoffice`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblsystem`
--
ALTER TABLE `tblsystem`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
