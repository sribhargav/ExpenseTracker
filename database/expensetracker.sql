-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2014 at 04:38 PM
-- Server version: 5.5.11
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `expensetracker`
--
CREATE DATABASE IF NOT EXISTS `expensetracker` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `expensetracker`;

-- --------------------------------------------------------

--
-- Table structure for table `kzygroup`
--

CREATE TABLE IF NOT EXISTS `kzygroup` (
  `kzy_GroupId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kzy_GroupName` varchar(45) NOT NULL,
  PRIMARY KEY (`kzy_GroupId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `kzygroup`
--

INSERT INTO `kzygroup` (`kzy_GroupId`, `kzy_GroupName`) VALUES
(14, 'Icecream'),
(15, 'Default'),
(16, 'Test'),
(17, 'Sucker'),
(18, 'Teeaser');

-- --------------------------------------------------------

--
-- Table structure for table `kzygrouproommatemapping`
--

CREATE TABLE IF NOT EXISTS `kzygrouproommatemapping` (
  `kzy_GrpRmtMapId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kzy_GroupId` int(10) unsigned NOT NULL,
  `kzy_RoommateId` int(10) unsigned NOT NULL,
  PRIMARY KEY (`kzy_GrpRmtMapId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `kzygrouproommatemapping`
--

INSERT INTO `kzygrouproommatemapping` (`kzy_GrpRmtMapId`, `kzy_GroupId`, `kzy_RoommateId`) VALUES
(4, 14, 1),
(5, 14, 8),
(6, 15, 1),
(7, 15, 8),
(8, 15, 9),
(9, 15, 10),
(10, 16, 1),
(11, 17, 8),
(12, 18, 1),
(13, 18, 11);

-- --------------------------------------------------------

--
-- Table structure for table `kzyitems`
--

CREATE TABLE IF NOT EXISTS `kzyitems` (
  `kzy_ItemId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kzy_ItemName` varchar(45) NOT NULL,
  `kzy_ItemPrice` double NOT NULL,
  `kzy_ItemBoughtBy` int(10) unsigned NOT NULL,
  `kzy_ItemBoughtOn` datetime NOT NULL,
  `kzy_ItemGroupId` int(10) unsigned NOT NULL,
  PRIMARY KEY (`kzy_ItemId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kzyitems`
--

INSERT INTO `kzyitems` (`kzy_ItemId`, `kzy_ItemName`, `kzy_ItemPrice`, `kzy_ItemBoughtBy`, `kzy_ItemBoughtOn`, `kzy_ItemGroupId`) VALUES
(1, 'Vegetables', 125.36, 1, '2014-06-01 00:00:00', 14),
(2, 'Sheet', 324, 1, '2014-06-01 00:00:00', 16),
(3, 'Sheet', 324, 1, '2014-06-01 00:00:00', 16),
(4, 'dsfsdgf', 125.36, 1, '2014-06-01 00:00:00', 15),
(5, 'fjgjhgj', 125.36, 1, '2014-06-01 00:00:00', 14);

-- --------------------------------------------------------

--
-- Table structure for table `kzyroommatecredit`
--

CREATE TABLE IF NOT EXISTS `kzyroommatecredit` (
  `kzy_RoommateCreditId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kzy_CreditAmount` double NOT NULL,
  `kzy_CreditGivenTo` int(10) unsigned NOT NULL,
  `kzy_CreditGivenBy` int(10) unsigned NOT NULL,
  `kzy_CreditGivenOn` datetime NOT NULL,
  PRIMARY KEY (`kzy_RoommateCreditId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kzyroommates`
--

CREATE TABLE IF NOT EXISTS `kzyroommates` (
  `kzy_RoommateId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kzy_RoommateName` varchar(45) NOT NULL,
  `kzy_RoommateContactNumber` varchar(45) NOT NULL,
  `kzy_username` varchar(100) NOT NULL,
  `kzy_password` varchar(100) NOT NULL,
  `kzy_UserType` varchar(5) NOT NULL,
  PRIMARY KEY (`kzy_RoommateId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `kzyroommates`
--

INSERT INTO `kzyroommates` (`kzy_RoommateId`, `kzy_RoommateName`, `kzy_RoommateContactNumber`, `kzy_username`, `kzy_password`, `kzy_UserType`) VALUES
(1, 'Yogesh Gharpure', '9098765567', 'admin', 'admin', '1'),
(8, 'Priyankur Nishant', '9999999999', 'priyankur', 'priyankur', '2'),
(9, 'Sagar', '9999999999', 'sagar', 'sagar', '2'),
(10, 'Sharad', '9999999999', 'sharad', 'sharad', '2'),
(11, 'Sri Bhargav Metta', '9999999999', 'sribhargav', 'sribhargav', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
