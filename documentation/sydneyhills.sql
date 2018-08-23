-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 03:37 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sydneyhills`
--

-- --------------------------------------------------------

--
-- Table structure for table `sh_bookingdetails`
--

CREATE TABLE `sh_bookingdetails` (
  `bookingId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `typeOfRide` int(11) NOT NULL,
  `rideDate` date NOT NULL,
  `rideTime` time NOT NULL,
  `noOfRiders` int(11) NOT NULL,
  `bookingStatus` tinyint(2) NOT NULL COMMENT '1. Confirmed 2. Cancelled 3. Deined',
  `bookingStatusComments` text NOT NULL,
  `bookingAttended` tinyint(4) NOT NULL COMMENT '1 -  Attended 2 – Not Attended',
  `bookingAttenedDateTime` datetime NOT NULL,
  `bookingAttenedRemarks` text NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `bookingDetailsStatus` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1 – Active(Default) 2 – Inactive '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_bookingridersdetails`
--

CREATE TABLE `sh_bookingridersdetails` (
  `bookingRiderId` int(11) NOT NULL,
  `bookingId` int(11) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `riderEmail` varchar(100) NOT NULL,
  `riderPhoneNumber` varchar(13) NOT NULL,
  `riderAbilityLevel` int(11) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `bookingRidersDetailsStatus` tinyint(2) NOT NULL COMMENT '1 – Active(Default) 2 – Inactive '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_customerfamilydetails`
--

CREATE TABLE `sh_customerfamilydetails` (
  `familyDetailsId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `relation` text NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `customerFamilyStatus` tinyint(2) NOT NULL COMMENT '1 – Active(Default) 2 – Inactive '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_customers`
--

CREATE TABLE `sh_customers` (
  `customerId` int(11) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `primaryPhoneNumber` varchar(13) NOT NULL,
  `secondaryPhoneNumber` varchar(13) NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `customerAddress` text NOT NULL,
  `customerPassword` varchar(260) NOT NULL,
  `userType` tinyint(2) NOT NULL COMMENT '1. Customer 2. Admin',
  `phoneNumberStatus` tinyint(2) NOT NULL COMMENT '0 – Not verified(Default) 1 – Verified ',
  `emailStatus` tinyint(2) NOT NULL COMMENT '0 – Not verified(Default) 1 – Verified ',
  `dateOfBirth` date NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `customerstatus` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1 – Active(Default) 2 – Inactive '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sh_customers`
--

INSERT INTO `sh_customers` (`customerId`, `firstName`, `lastName`, `primaryPhoneNumber`, `secondaryPhoneNumber`, `emailAddress`, `customerAddress`, `customerPassword`, `userType`, `phoneNumberStatus`, `emailStatus`, `dateOfBirth`, `addedDate`, `editedDate`, `customerstatus`) VALUES
(1, 'sad', 'sadsad', 'assdsa', '', 'dsdafd@sdfsd.ghj', ' fsdfs', '$2y$10$BDkjkJa87yb3Whl.LylbgeTA0.NUPaN79ACriqsjH7j/RHZtnLbQy', 1, 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'sdfsf', 'fsdfsd', '435345', '', 'sandeep@gmail.com', ' sdfsfdsf', '$2y$10$AaabPGuX2ZOiQvv4EcsDteyOvSgPoeTEmEcPoxErcGZ7uLrFO42NW', 1, 0, 0, '0000-00-00', '2018-08-08 16:48:54', '0000-00-00 00:00:00', 1),
(3, 'sandeep', 'b', '9874563210', '', 'sandeep57@gmail.com', ' sdsdf', '$2y$10$AaabPGuX2ZOiQvv4EcsDteyOvSgPoeTEmEcPoxErcGZ7uLrFO42NW', 1, 0, 0, '0000-00-00', '2018-08-08 17:51:05', '0000-00-00 00:00:00', 1),
(8, 'j', 'sh', '9856324710', '', 'jsh@gmail.com', 'sdfsdf ', '$2y$10$AaabPGuX2ZOiQvv4EcsDteyOvSgPoeTEmEcPoxErcGZ7uLrFO42NW', 1, 0, 0, '0000-00-00', '2018-08-13 13:21:39', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sh_typeofhorses`
--

CREATE TABLE `sh_typeofhorses` (
  `horseTypeId` int(11) NOT NULL,
  `typeOfHorse` varchar(45) NOT NULL,
  `horseAge` int(11) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `horseStatus` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1 – Active(Default) 2 – Inactive '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sh_typeofrides`
--

CREATE TABLE `sh_typeofrides` (
  `rideTypeId` int(11) NOT NULL,
  `typeOfRide` varchar(45) NOT NULL,
  `rideAmount` decimal(11,2) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `typeOfRidesStatus` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1 – Active(Default) 2 – Inactive '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sh_typeofrides`
--

INSERT INTO `sh_typeofrides` (`rideTypeId`, `typeOfRide`, `rideAmount`, `addedDate`, `editedDate`, `typeOfRidesStatus`) VALUES
(1, 'Private Lessons (30 mins)', '65.00', '2018-08-03 16:30:33', '0000-00-00 00:00:00', 1),
(2, 'Private Lessons (1 hour)', '110.00', '2018-08-03 16:30:33', '0000-00-00 00:00:00', 1),
(3, 'Group Lessons', '65.00', '2018-08-03 16:30:33', '0000-00-00 00:00:00', 1),
(4, 'Junior Riding Club (2 hours)', '80.00', '2018-08-03 16:30:33', '0000-00-00 00:00:00', 1),
(5, 'Pony Lead (15 mins)', '35.00', '2018-08-03 16:30:33', '0000-00-00 00:00:00', 1),
(6, 'School Holiday Camps per day', '145.00', '2018-08-03 16:30:33', '0000-00-00 00:00:00', 1),
(7, 'School Holiday Camps (3 days)', '385.00', '2018-08-03 16:30:33', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sh_bookingdetails`
--
ALTER TABLE `sh_bookingdetails`
  ADD PRIMARY KEY (`bookingId`),
  ADD KEY `customerId` (`customerId`);

--
-- Indexes for table `sh_bookingridersdetails`
--
ALTER TABLE `sh_bookingridersdetails`
  ADD PRIMARY KEY (`bookingRiderId`),
  ADD KEY `bookingId` (`bookingId`);

--
-- Indexes for table `sh_customerfamilydetails`
--
ALTER TABLE `sh_customerfamilydetails`
  ADD PRIMARY KEY (`familyDetailsId`),
  ADD KEY `customerId` (`customerId`);

--
-- Indexes for table `sh_customers`
--
ALTER TABLE `sh_customers`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `sh_typeofhorses`
--
ALTER TABLE `sh_typeofhorses`
  ADD PRIMARY KEY (`horseTypeId`);

--
-- Indexes for table `sh_typeofrides`
--
ALTER TABLE `sh_typeofrides`
  ADD PRIMARY KEY (`rideTypeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sh_bookingdetails`
--
ALTER TABLE `sh_bookingdetails`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sh_bookingridersdetails`
--
ALTER TABLE `sh_bookingridersdetails`
  MODIFY `bookingRiderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sh_customerfamilydetails`
--
ALTER TABLE `sh_customerfamilydetails`
  MODIFY `familyDetailsId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sh_customers`
--
ALTER TABLE `sh_customers`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sh_typeofhorses`
--
ALTER TABLE `sh_typeofhorses`
  MODIFY `horseTypeId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sh_typeofrides`
--
ALTER TABLE `sh_typeofrides`
  MODIFY `rideTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sh_bookingdetails`
--
ALTER TABLE `sh_bookingdetails`
  ADD CONSTRAINT `sh_bookingdetails_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `sh_customers` (`customerId`);

--
-- Constraints for table `sh_bookingridersdetails`
--
ALTER TABLE `sh_bookingridersdetails`
  ADD CONSTRAINT `sh_bookingridersdetails_ibfk_1` FOREIGN KEY (`bookingId`) REFERENCES `sh_bookingdetails` (`bookingId`);

--
-- Constraints for table `sh_customerfamilydetails`
--
ALTER TABLE `sh_customerfamilydetails`
  ADD CONSTRAINT `sh_customerfamilydetails_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `sh_customers` (`customerId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
