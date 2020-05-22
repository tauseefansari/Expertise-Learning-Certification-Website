-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 10:12 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expertise`
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
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8979555556, ' ', 'admin', '2020-03-07 01:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `tblapplied`
--

CREATE TABLE `tblapplied` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Progress` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblapplied`
--

INSERT INTO `tblapplied` (`Id`, `StudentId`, `Subject`, `Progress`) VALUES
(1, 1, 'Database', 40),
(2, 1, 'VB.NET', 100),
(3, 1, 'Artificial Intelligence', 20),
(4, 1, 'Java Programming', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `ID` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `Remaining` int(50) DEFAULT NULL,
  `Total` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`ID`, `StudentId`, `Remaining`, `Total`) VALUES
(1, 1, 25000, 25000),
(2, 2, 25000, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Picture` varchar(200) NOT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Qualifications` varchar(120) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `StudCourse` varchar(120) DEFAULT NULL,
  `joiningdate` date NOT NULL,
  `pass` varchar(255) NOT NULL,
  `Placed` varchar(10) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`ID`, `Name`, `Picture`, `Email`, `MobileNumber`, `Qualifications`, `Address`, `StudCourse`, `joiningdate`, `pass`, `Placed`) VALUES
(1, 'Zakiya Khan', 'Images/students/5e89cb2dd09d3girlsketch.png', 'zakiyakhan1322000@gmail.com', 1234567890, 'Degree', 'Abdul Rehmaan Street, Mumbai - 400008', 'Database,VB.NET,Artificial Intelligence,Java Programming,', '1999-02-13', 'wJqWnwy3', 'Yes'),
(2, 'Tauseef Ansari', 'Images/students/5e89cb955d25b2018-01-27-09-02-59-209.jpg', 'tauseeftanvir@gmail.com', 9321391048, 'Diploma', 'Nagpada, Mumbai - 400008, Duncan Road', 'C Programming,Machine Learning,Artificial Intelligence,Android Programming,', '1999-01-05', 'R4SmhMd6', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `ID` int(10) NOT NULL,
  `Subject` varchar(120) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`ID`, `Subject`, `CreationDate`, `Picture`) VALUES
(1, 'Database', '2020-03-07 22:16:50', '9d4d8fffdf0638a3e284c89f9dea96291586183533.jpg'),
(2, 'C Programming', '2020-03-08 05:48:54', '6e7de52c3c93344cf52b94f6abf38a2e1586183635.jpg'),
(3, 'Javascript', '2020-03-08 05:51:03', '10aed7a157b2e5c5bc65da5bf584919b1586183817.jpg'),
(4, 'VB.NET', '2020-03-08 08:03:27', '016d4599b8a7f646e555e923f0f32b2d1586183884.png'),
(5, 'Machine Learning', '2020-04-06 12:07:23', '66af5a19d41e3bf24147298363a069111586183918.png'),
(6, 'Artificial Intelligence', '2020-04-06 12:08:01', '8aaafa29ac61ee4a9408d3feb6280eb01586183937.png'),
(7, 'Python Programming', '2020-04-06 12:08:15', '7baf680fc6cf1d75764c983fbe5d7ff41586183959.jpg'),
(8, 'Java Programming', '2020-04-06 12:08:35', '746ac3fe2bf33c3a0a07b05a23c46e471586183975.jpg'),
(9, 'Android Programming', '2020-04-06 12:08:54', '9a1ca5310b1999c822550a7a154e2da11586183992.png'),
(10, 'Deep Learning', '2020-04-06 12:09:06', '881c3d3e5bb0ae79e96335fe0b5a31e91586184014jpeg'),
(11, 'CS Programming', '2020-04-06 14:18:06', '89e5117a2228a69e41cc676c7ef13f601586183410.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Picture` varchar(200) NOT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `mobilenumber` bigint(20) DEFAULT NULL,
  `Qualifications` varchar(120) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `TeacherSub` varchar(120) DEFAULT NULL,
  `JoiningDate` varchar(120) DEFAULT NULL,
  `disable` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`ID`, `Name`, `Picture`, `Email`, `mobilenumber`, `Qualifications`, `Address`, `TeacherSub`, `JoiningDate`, `disable`, `pass`) VALUES
(1, 'Zakiya', '48690fb78e952452b755a70bf9a8815c1586169959.png', 'zakiyakhan1322000@gmail.com', 123456789, 'phd', 'byculla', 'Machine Learning', '2020-03-20', '', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblapplied`
--
ALTER TABLE `tblapplied`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
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
-- AUTO_INCREMENT for table `tblapplied`
--
ALTER TABLE `tblapplied`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblpayment`
--
ALTER TABLE `tblpayment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
