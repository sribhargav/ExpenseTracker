-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2014 at 04:42 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kzygrouproommatemapping`
--

CREATE TABLE IF NOT EXISTS `kzygrouproommatemapping` (
  `kzy_GrpRmtMapId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kzy_GroupId` int(10) unsigned NOT NULL,
  `kzy_RoommateId` int(10) unsigned NOT NULL,
  PRIMARY KEY (`kzy_GrpRmtMapId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kzyitems`
--

CREATE TABLE IF NOT EXISTS `kzyitems` (
  `kzy_ItemId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kzy_ItemName` varchar(45) NOT NULL,
  `kzy_ItemPrice` double NOT NULL,
  `kry_ItemBoughtBy` int(10) unsigned NOT NULL,
  `kzy_ItemBoughtOn` datetime NOT NULL,
  `kzy_ItemGroupId` int(10) unsigned NOT NULL,
  PRIMARY KEY (`kzy_ItemId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`kzy_RoommateId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
