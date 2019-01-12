-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 10:54 PM
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
('b10002'),
('b10003'),
('b10004'),
('b10005'),
('b10006');

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
('12', '2018-01-06', '1'),
('2', '2018-01-16', '1'),
('b10001', '0000-00-00', '1'),
('b10002', '0000-00-00', '2'),
('b10003', '2018-11-26', '2'),
('b10004', '2018-11-26', '2'),
('b10005', '2018-11-26', '43'),
('b10006', '2018-11-26', '1');

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
('1', 'djskgufyu', 'dguisfgwuies', 34, 'A+', 'MALE', 'asfsdgfwes', 'gurgaon', 3826, 12436776),
('2', 'asdas', 'sdter', 45, 'B-', 'FEMALE', 'asd', 'asd', 123456, 2147483647),
('d10001', 'Rohan', 'Saxena', 20, 'A+', 'MALE', 'D205', 'Faridabad', 121002, 2147483647),
('d10002', 'siddharth', 'verma', 21, 'B+', 'MALE', '102', '102', 102, 102),
('wqrw', 'sbahdj', 'jsadhaj', 3, 'AB-', 'MALE', 'dsfsdf', 'khjkjkl', 2345565, 5555555);

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
(10002, 10000, 10021, 10006, 10001);

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
('', '43', '2018-11-26'),
('12', '43', '2018-11-26'),
('2', '43', '2018-11-26'),
('b10001', '43', '2018-11-26');

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
('43', '3', '4', 'MALE', 20, '5', 6, 'A+', 7, '8');

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
('r10014', '43', '2018-11-26', 7, 5),
('r10015', '43', '2018-11-26', 7, 4),
('r10016', '43', '2018-11-26', 7, 0),
('r10017', '43', '2018-11-26', 7, 0),
('r10018', '43', '2018-11-26', 7, 0),
('r10019', '43', '2018-11-26', 7, 0),
('r10020', '43', '2018-11-26', 7, 0),
('r10021', '43', '2018-11-26', 7, 0);

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
('d10001', 'd10001'),
('v10001', 'd10002');

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
