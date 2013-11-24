-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2013 at 11:19 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `userID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `commentId` int(11) NOT NULL AUTO_INCREMENT,
  `timeofcomment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`commentId`),
  KEY `userID` (`userID`),
  KEY `postID` (`postID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`userID`, `postID`, `description`, `commentId`, `timeofcomment`) VALUES
(13, 23, 'Testing', 23, '2013-11-24 11:17:09'),
(11, 23, 'Yeaahhhh', 24, '2013-11-24 11:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `CompanyId` int(11) NOT NULL AUTO_INCREMENT,
  `companyName` varchar(30) NOT NULL,
  `companySize` int(11) DEFAULT NULL,
  PRIMARY KEY (`CompanyId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CompanyId`, `companyName`, `companySize`) VALUES
(1, 'NYC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `connections`
--

CREATE TABLE IF NOT EXISTS `connections` (
  `userId1` int(11) NOT NULL DEFAULT '0',
  `userId2` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userId1`,`userId2`),
  KEY `userId2` (`userId2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connections`
--

INSERT INTO `connections` (`userId1`, `userId2`) VALUES
(2, 1),
(10, 1),
(1, 2),
(1, 10),
(13, 10),
(13, 11),
(10, 13),
(11, 13);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `userId` int(11) NOT NULL,
  `program` varchar(30) NOT NULL,
  `startDate` varchar(20) NOT NULL,
  `endDate` varchar(20) NOT NULL,
  `institutionId` int(11) DEFAULT NULL,
  PRIMARY KEY (`userId`),
  KEY `institutionId` (`institutionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`userId`, `program`, `startDate`, `endDate`, `institutionId`) VALUES
(1, '', '2007', '2013', 1),
(2, '', '2007', '2013', 1),
(3, '', '2007', '2013', 1),
(4, '', '2007', '2013', 1),
(5, '', '2007', '2013', 2),
(6, '', '2007', '2013', 1),
(7, '', '2007', '2013', 1),
(8, '', '2007', '2013', 2),
(9, '', '2007', '2013', 2),
(10, '', '2007', '2013', 2),
(11, '', '2007', '2013', 2),
(12, '', '2007', '2013', 2);

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE IF NOT EXISTS `institution` (
  `institutionId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`institutionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`institutionId`, `name`, `description`) VALUES
(1, 'LUMS', 'college'),
(2, 'FAST-NU', 'college');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `userId` int(11) DEFAULT NULL,
  `jobTitle` varchar(30) DEFAULT NULL,
  `startDate` varchar(20) DEFAULT NULL,
  `endDate` varchar(20) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `self_employeed` varchar(2) DEFAULT NULL,
  `CompanyId` int(11) DEFAULT NULL,
  KEY `userId` (`userId`),
  KEY `CompanyId` (`CompanyId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`userId`, `jobTitle`, `startDate`, `endDate`, `designation`, `self_employeed`, `CompanyId`) VALUES
(13, 'Taxi', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `userID` int(11) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `sharewith` tinyint(1) NOT NULL DEFAULT '1',
  `picturepath` varchar(50) DEFAULT NULL,
  `timeofpost` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`postID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`userID`, `description`, `postID`, `sharewith`, `picturepath`, `timeofpost`) VALUES
(11, 'Okay post 1 by burhan ', 18, 1, NULL, '2013-11-24 10:34:03'),
(6, 'Testing', 20, 1, NULL, '2013-11-24 10:34:03'),
(11, 'Another post by Burhan', 21, 1, NULL, '2013-11-24 10:34:03'),
(13, 'Hey', 22, 1, NULL, '2013-11-24 10:34:03'),
(11, 'Checking time stamp!', 23, 1, NULL, '2013-11-24 10:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `userId` int(11) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `PostalCode` varchar(20) NOT NULL,
  `currentStatus` int(11) NOT NULL,
  `DOB` varchar(20) DEFAULT NULL,
  `lang` varchar(20) NOT NULL,
  `YearsOfExperience` int(11) NOT NULL,
  `joiningDate` varchar(20) DEFAULT NULL,
  `profileUrl` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`userId`, `Country`, `PostalCode`, `currentStatus`, `DOB`, `lang`, `YearsOfExperience`, `joiningDate`, `profileUrl`) VALUES
(1, 'Pakistan', '20000', 0, '2013-11-22', 'English', 0, '2013-11-22', NULL),
(2, 'Pakistan', '20000', 0, '2013-11-22', 'English', 0, '2013-11-22', NULL),
(3, 'Pakistan', '20000', 0, '2013-11-22', 'English', 0, '2013-11-22', NULL),
(4, 'Pakistan', '20000', 0, '2013-11-22', 'English', 0, '2013-11-22', NULL),
(5, 'Pakistan', '20000', 0, '2013-11-22', 'English', 0, '2013-11-22', NULL),
(6, 'Pakistan', '20000', 0, '2013-11-22', 'English', 0, '2013-11-22', NULL),
(7, 'Pakistan', '20000', 0, '2013-11-22', 'English', 0, '2013-11-22', NULL),
(8, 'Pakistan', '20000', 0, '2013-11-22', 'English', 0, '2013-11-22', NULL),
(9, 'Pakistan', '20000', 0, '2013-11-22', 'English', 0, '2013-11-22', NULL),
(10, 'Pakistan', '20000', 0, '2013-11-22', 'English', 0, '2013-11-22', NULL),
(11, 'Pakistan', '20000', 0, '2013-11-22', 'English', 0, '2013-11-22', NULL),
(12, 'Pakistan', '20000', 0, '2013-11-22', 'English', 0, '2013-11-22', NULL),
(13, 'Pakistan', '3222', 0, '2013-11-24', 'English', 0, '2013-11-24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `userId1` int(11) NOT NULL DEFAULT '0',
  `userId2` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userId1`,`userId2`),
  KEY `userId2` (`userId2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `imageUrl` varchar(50) NOT NULL DEFAULT 'default',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `username`, `password`, `imageUrl`) VALUES
(1, 'Haseeb', 'Ahmed', 'haseeb@gmail.com', 'somepass', 'default'),
(2, 'Sami', 'Ahmed', 'some@gmail.com', 'somepass', 'default'),
(3, 'Haseeb', 'Khan', 'sss@email.com', 'somepass', 'default'),
(4, 'Jawad', 'Ahmed', 'fafsa@hotmail.com', 'somepass', 'default'),
(5, 'Jawad', 'Ahmed', 'asasd@someass.com', 'somepass', 'default'),
(6, 'Ali', 'Jaffri', 'adsa@asa.com', 'somepass', 'default'),
(7, 'Umair', 'Ahsan', 'umair@gmail.com', 'somepass', 'default'),
(8, 'Umair', 'Khan', 'ss@gmail.com', 'somepass', 'default'),
(9, 'Asad', 'Karamat', 'asad@gmail.com', 'somepass', 'default'),
(10, 'Faheem', 'Uddin', 'faheem@gmail.com', 'somepass', 'default'),
(11, 'Burhan', 'uddin', 'burhan@deezon.com', 'somepass', 'default'),
(12, 'Saad', 'Waqar', 'saad@waqar.com', 'somepass', 'default'),
(13, 'Test', 'Man', 'tester@gmail.com', 'somepass', 'default');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`postID`) REFERENCES `post` (`postID`);

--
-- Constraints for table `connections`
--
ALTER TABLE `connections`
  ADD CONSTRAINT `connections_ibfk_1` FOREIGN KEY (`userId1`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `connections_ibfk_2` FOREIGN KEY (`userId2`) REFERENCES `users` (`userid`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`institutionId`) REFERENCES `institution` (`institutionId`),
  ADD CONSTRAINT `education_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`userid`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `job_ibfk_2` FOREIGN KEY (`CompanyId`) REFERENCES `company` (`CompanyId`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userid`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userid`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`userId1`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`userId2`) REFERENCES `users` (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
