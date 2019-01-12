-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2019 at 10:09 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HackFest`
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
-- Table structure for table `OrderRecord`
--

CREATE TABLE `OrderRecord` (
  `date` date NOT NULL,
  `cloth` int(11) DEFAULT NULL,
  `footwear` int(11) DEFAULT NULL,
  `book` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PickUpRequest`
--

CREATE TABLE `PickUpRequest` (
  `oId` int(11) NOT NULL,
<<<<<<< HEAD
  `uId` INT(11) DEFAULT NULL,
=======
  `uId` int(11) DEFAULT NULL,
>>>>>>> sync/master
  `cloth` int(11) DEFAULT NULL,
  `footwear` int(11) DEFAULT NULL,
  `book` int(11) DEFAULT NULL,
  `orderDate` date DEFAULT NULL,
  `pickupTime` varchar(20) DEFAULT NULL,
  `pickupDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `uId` int(11) NOT NULL,
  `uFname` varchar(20) NOT NULL,
  `uLname` varchar(20) NOT NULL,
  `uPassword` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `uPhoneNo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `OrderRecord`
--
ALTER TABLE `OrderRecord`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `PickUpRequest`
--
ALTER TABLE `PickUpRequest`
  ADD PRIMARY KEY (`oId`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`uId`),
  ADD UNIQUE KEY `uId` (`uId`,`uPassword`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PickUpRequest`
--
ALTER TABLE `PickUpRequest`
  MODIFY `oId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
