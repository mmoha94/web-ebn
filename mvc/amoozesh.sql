-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2017 at 04:25 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amoozesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dars`
--

CREATE TABLE IF NOT EXISTS `tbl_dars` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_persian_ci DEFAULT NULL,
  `units` int(11) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_dars`
--

INSERT INTO `tbl_dars` (`did`, `name`, `units`) VALUES
(1, 'Web', 2),
(2, 'Math', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_fields` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_fields`
--

INSERT INTO `tbl_fields` (`fid`, `fname`) VALUES
(1, 'کامپیوتر'),
(2, 'فناوری اطلاعات');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studs`
--

CREATE TABLE IF NOT EXISTS `tbl_studs` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `avgr` float DEFAULT NULL,
  `fid` int(11) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=111 ;

--
-- Dumping data for table `tbl_studs`
--

INSERT INTO `tbl_studs` (`sid`, `name`, `avgr`, `fid`) VALUES
(100, 'علیرضا', 18, 1),
(101, 'مسعود', 15.5, 2),
(107, 'علیرضا', 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `upass` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`uid`, `uname`, `upass`) VALUES
(1, 'admin', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
