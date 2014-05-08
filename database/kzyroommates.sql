-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2014 at 08:13 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `expensetracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `kzyroommates`
--

CREATE TABLE IF NOT EXISTS `kzyroommates` (
  `kzy_username` varchar(512) NOT NULL,
  `kzy_password` varchar(512) NOT NULL,
  `kzy_RoommateId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kzy_RoommateName` varchar(45) NOT NULL,
  `kzy_RoommateContactNumber` varchar(45) NOT NULL,
  PRIMARY KEY (`kzy_RoommateId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kzyroommates`
--

INSERT INTO `kzyroommates` (`kzy_username`, `kzy_password`, `kzy_RoommateId`, `kzy_RoommateName`, `kzy_RoommateContactNumber`) VALUES
('admin', 'admin', 1, 'chetana Jain', '9098765567');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
