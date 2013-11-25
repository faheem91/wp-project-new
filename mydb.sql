-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2013 at 02:14 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `comment`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `CompanyId` int(11) NOT NULL AUTO_INCREMENT,
  `companyName` varchar(30) NOT NULL,
  `companySize` int(11) DEFAULT NULL,
  PRIMARY KEY (`CompanyId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `company`
--


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
  `post_link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`postID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `post`
--



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

--
-- Dumping data for table `requests`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(400) NOT NULL,
  `salt` varchar(400) NOT NULL,
  `imageUrl` varchar(50) NOT NULL DEFAULT 'default',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users`
--

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
