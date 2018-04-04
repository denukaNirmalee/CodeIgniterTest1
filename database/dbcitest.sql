-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2018 at 12:56 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbcitest`
--

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `divisionid` int(11) NOT NULL AUTO_INCREMENT,
  `division` varchar(100) NOT NULL,
  PRIMARY KEY (`divisionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`divisionid`, `division`) VALUES
(1, 'IT Division'),
(2, 'Communication Division'),
(3, 'HR Division'),
(4, 'Electronic Division');

-- --------------------------------------------------------

--
-- Table structure for table `leave_tbl`
--

CREATE TABLE IF NOT EXISTS `leave_tbl` (
  `leaveid` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `leave_sart` date NOT NULL,
  `leave_end` date NOT NULL,
  `leave_reason` varchar(255) NOT NULL,
  `leave_approve` varchar(10) NOT NULL,
  PRIMARY KEY (`leaveid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `leave_tbl`
--

INSERT INTO `leave_tbl` (`leaveid`, `username`, `leave_sart`, `leave_end`, `leave_reason`, `leave_approve`) VALUES
(2, 'denu', '2017-06-20', '2017-06-20', 'medical leave', ''),
(3, 'sura', '2017-07-01', '2017-07-01', 'medical leave', ''),
(4, 'tharu', '2017-07-01', '2017-07-01', 'charity work', ''),
(5, 'denu', '2018-03-06', '2018-04-06', 'because of hospitalized', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `proid` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `proname` varchar(255) NOT NULL,
  `prodescription` varchar(255) NOT NULL,
  PRIMARY KEY (`proid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`proid`, `username`, `proname`, `prodescription`) VALUES
(1, 'denu', 'procument project', 'modified data uploading and reports of procument'),
(2, 'denu', 'Human Resource Project', 'modified'),
(3, 'sura', 'aaaaa', 'bbbbbbbb'),
(4, 'denu', 'deededede', 'sdvdsfdh'),
(5, 'denu', 'gtgtgt', 'nnnnnnnnnnnnnnnnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `trainee_det`
--

CREATE TABLE IF NOT EXISTS `trainee_det` (
  `trid` int(10) NOT NULL AUTO_INCREMENT,
  `trusername` varchar(20) NOT NULL,
  `trname` varchar(255) NOT NULL,
  `trdivision` varchar(100) NOT NULL,
  `trsupervisor` varchar(255) NOT NULL,
  `trstart` date NOT NULL,
  `trend` date NOT NULL,
  `traddress` varchar(255) NOT NULL,
  `trcontact` varchar(10) NOT NULL,
  `insname` varchar(255) NOT NULL,
  `insaddrs` varchar(255) NOT NULL,
  `instecheng` varchar(255) NOT NULL,
  `contactnmbr` int(10) NOT NULL,
  PRIMARY KEY (`trid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `trainee_det`
--

INSERT INTO `trainee_det` (`trid`, `trusername`, `trname`, `trdivision`, `trsupervisor`, `trstart`, `trend`, `traddress`, `trcontact`, `insname`, `insaddrs`, `instecheng`, `contactnmbr`) VALUES
(1, 'denu', 'Denuka Nirmalee', 'HR', 'Vijitha Jayanthi', '2017-08-09', '2017-12-30', '89,bandaranayake rd, Moratuwa.', '0772384659', 'University of Moratuwa', 'Faculty of Information Technology, University of Moratuwa.Sri Lanka.', 'Sumudu Wijethunga', 712345687),
(11, 'sura', 'Suharsha Mendis', 'IT', 'Rasika Somathilaka', '2016-06-09', '2017-08-30', '23/A,Rawathawaththa,Moratuwa', '0754329876', 'SLITT', 'B263, Malabe 10115', 'Pradeep Chanaka', 781234569),
(12, 'tharu', 'Tharaka Dilshani', 'Communication Division', 'Nadeeka Awanthi', '2017-06-12', '2017-12-15', '34,Bollatha,Ganemulla.', '0723458769', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `state` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `state`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'denu', 'denu', 'Trainee'),
(3, 'sura', 'sura', 'Trainee'),
(4, 'tharu', 'tharu', 'Trainee'),
(5, 'suresh', '7uuuu', 'Trainee');
