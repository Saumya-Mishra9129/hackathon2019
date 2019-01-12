-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 06:27 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `bId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`bId`) VALUES
('b10001'),
('b10003'),
('b10005'),
('b10006'),
('b10007'),
('b10008'),
('b10009'),
('b10010'),
('b10012'),
('b10013'),
('b10014'),
('b10015'),
('b10016'),
('b10017'),
('b10018'),
('b10019');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `bId` varchar(10) NOT NULL,
  `donationDate` date NOT NULL,
  `dId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`bId`, `donationDate`, `dId`) VALUES
('b10001', '2018-11-27', 'd10001'),
('b10002', '2018-11-27', 'd10003'),
('b10003', '2018-11-27', 'd10003'),
('b10004', '2018-11-27', 'd10004'),
('b10005', '2018-11-27', 'd10006'),
('b10006', '2018-11-27', 'd10008'),
('b10007', '2018-11-27', 'd10007'),
('b10008', '2018-11-27', 'd10008'),
('b10009', '2018-11-27', 'd10002'),
('b10010', '2018-11-27', 'd10002'),
('b10012', '2018-11-27', 'd10007'),
('b10013', '2018-11-27', 'd10007'),
('b10014', '2018-11-27', 'd10008'),
('b10015', '2018-11-27', 'd10009'),
('b10016', '2018-11-27', 'd10009'),
('b10017', '2018-11-27', 'd10010'),
('b10018', '2018-11-27', 'd10002'),
('b10019', '2018-11-27', 'd10002');

--
-- Triggers `blood`
--
DELIMITER $$
CREATE TRIGGER `updateAvailability` AFTER INSERT ON `blood` FOR EACH ROW INSERT INTO availability VALUES (NEW.bId)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `dId` varchar(10) NOT NULL,
  `dFname` varchar(20) NOT NULL,
  `dLname` varchar(20) NOT NULL,
  `dAge` int(11) NOT NULL,
  `DBloodGroup` varchar(3) NOT NULL,
  `dSex` varchar(6) NOT NULL,
  `dAddress` varchar(100) DEFAULT NULL,
  `dCity` varchar(20) NOT NULL,
  `dPincode` int(11) NOT NULL,
  `dPhoneNo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`dId`, `dFname`, `dLname`, `dAge`, `DBloodGroup`, `dSex`, `dAddress`, `dCity`, `dPincode`, `dPhoneNo`) VALUES
('d10001', 'Rohan', 'Saxena', 20, 'A+', 'MALE', 'D-205', 'Jabalpur', 482005, 2147483647),
('d10002', 'Rakshak', '-', 20, 'O-', 'MALE', 'B-201', 'Jabalpur', 482005, 2147483647),
('d10003', 'Siddharth', 'Verma', 21, 'B+', 'MALE', 'D-102', 'Jabalpur', 482005, 2147483647),
('d10004', 'Nikhil', 'Jain', 20, 'A-', 'MALE', 'D-202', 'Jabalpur', 126547, 2147483647),
('d10005', 'Nishchay', 'Sonak', 22, 'A-', 'MALE', 'D-201', 'Jabalpur', 456545, 2147483647),
('d10006', 'Kanishk', 'Mendiratta', 25, 'B+', 'MALE', 'D-206', 'Jabalpur', 121002, 2147483647),
('d10007', 'Rishi', 'Aggarwal', 18, 'AB+', 'MALE', 'F-404', 'Jabalpur', 457812, 2147483647),
('d10008', 'Aisha', 'Sharma', 22, 'B-', 'FEMALE', 'F-404', 'Jabalpur', 457812, 2147483647),
('d10009', 'Abhishek', 'Gupta', 21, 'AB+', 'MALE', 'b-301', 'AGRA', 123552, 2147483647),
('d10010', 'Saurab', 'Yadav', 19, 'AB-', 'MALE', 'C-402', 'Delhi', 857556, 2147483647),
('d10011', 'Aman ', 'Singhal', 22, 'O+', 'MALE', 'c-402', 'Faridabad', 874454, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `inc`
--

CREATE TABLE `inc` (
  `dId` int(10) DEFAULT NULL,
  `pId` int(10) DEFAULT NULL,
  `rid` int(10) DEFAULT NULL,
  `bid` int(10) DEFAULT NULL,
  `vId` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inc`
--

INSERT INTO `inc` (`dId`, `pId`, `rid`, `bid`, `vId`) VALUES
(10011, 10005, 10004, 10019, 10009);

-- --------------------------------------------------------

--
-- Table structure for table `infusion_history`
--

CREATE TABLE `infusion_history` (
  `bId` varchar(10) NOT NULL,
  `pId` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infusion_history`
--

INSERT INTO `infusion_history` (`bId`, `pId`, `date`) VALUES
('b10002', 'p10003', '2018-11-27'),
('b10004', 'p10005', '2018-11-27');

--
-- Triggers `infusion_history`
--
DELIMITER $$
CREATE TRIGGER `newInfusion` AFTER INSERT ON `infusion_history` FOR EACH ROW DELETE FROM availability WHERE bId = NEW.bId
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` varchar(10) NOT NULL,
  `pFName` varchar(20) NOT NULL,
  `pLName` varchar(20) NOT NULL,
  `pSex` varchar(6) NOT NULL,
  `pAge` int(3) NOT NULL,
  `pAdress` varchar(100) DEFAULT NULL,
  `pPhoneNo` int(10) DEFAULT NULL,
  `pBloodGroup` varchar(3) DEFAULT NULL,
  `p_pincode` int(6) NOT NULL,
  `p_city` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pFName`, `pLName`, `pSex`, `pAge`, `pAdress`, `pPhoneNo`, `pBloodGroup`, `p_pincode`, `p_city`) VALUES
('p10001', 'Hitendra', 'Singh', 'MALE', 18, 'F-301', 2147483647, 'B-', 121002, 'Jabalpur'),
('p10002', 'Rushikesh', 'Ghule', 'MALE', 21, 'F-404', 2147483647, 'AB+', 856974, 'Jabalpur'),
('p10003', 'Nitin', 'Chauhan', 'MALE', 19, 'D-202', 2147483647, 'B+', 785463, 'Jabalpur'),
('p10004', 'Priya', 'Aggarwal', 'FEMALE', 18, 'I-102', 2147483647, 'O+', 458796, 'Jabalpur'),
('p10005', 'Rashi', 'Gupta', 'FEMALE', 28, 'L-201', 458796, 'A-', 101010, 'Jabalpur');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `rid` varchar(10) NOT NULL,
  `pId` varchar(10) DEFAULT NULL,
  `date` date NOT NULL,
  `units` int(2) NOT NULL,
  `unitsRecieved` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`rid`, `pId`, `date`, `units`, `unitsRecieved`) VALUES
('r10002', 'p10001', '2018-11-27', 5, 0),
('r10003', 'p10002', '2018-11-27', 8, 0),
('r10004', 'p10004', '2018-11-27', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `vId` varchar(10) NOT NULL,
  `dId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`vId`, `dId`) VALUES
('v10001', 'd10001'),
('v10002', 'd10002'),
('v10003', 'd10003'),
('v10007', 'd10007'),
('v10008', 'd10008'),
('v10009', 'd10011');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`dId`);

--
-- Indexes for table `infusion_history`
--
ALTER TABLE `infusion_history`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`vId`),
  ADD UNIQUE KEY `dId` (`dId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
