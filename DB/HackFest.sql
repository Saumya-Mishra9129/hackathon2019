-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 04:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` varchar(15) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orderrecord`
--

CREATE TABLE `orderrecord` (
  `date` date NOT NULL,
  `cloth` int(11) DEFAULT NULL,
  `footwear` int(11) DEFAULT NULL,
  `book` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderrecord`
--

INSERT INTO `orderrecord` (`date`, `cloth`, `footwear`, `book`) VALUES
('2019-01-13', 43, 32, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pickuprequest`
--

CREATE TABLE `pickuprequest` (
  `oId` int(11) NOT NULL,
  `uId` int(11) DEFAULT NULL,
  `cloth` int(11) DEFAULT NULL,
  `footwear` int(11) DEFAULT NULL,
  `book` int(11) DEFAULT NULL,
  `orderDate` date DEFAULT NULL,
  `pickupTime` varchar(20) DEFAULT NULL,
  `pickupDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uId` int(11) NOT NULL,
  `uFname` varchar(20) NOT NULL,
  `uLname` varchar(20) NOT NULL,
  `uPassword` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `uPhoneNo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `uFname`, `uLname`, `uPassword`, `address`, `uPhoneNo`) VALUES
(1, 'Saumya', 'Mishra', 'qwerty', 'dwedf', 2147483647),
(2017262, 'Sparsh', 'Ahuja', 'asdfg', 'xzcvb', 123456788);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `orderrecord`
--
ALTER TABLE `orderrecord`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `pickuprequest`
--
ALTER TABLE `pickuprequest`
  ADD PRIMARY KEY (`oId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`),
  ADD UNIQUE KEY `uId` (`uId`,`uPassword`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pickuprequest`
--
ALTER TABLE `pickuprequest`
  MODIFY `oId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2017263;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
