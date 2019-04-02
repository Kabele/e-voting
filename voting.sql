-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2016 at 09:35 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `leve` int(25) NOT NULL AUTO_INCREMENT,
  `password` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  PRIMARY KEY (`leve`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`leve`, `password`, `username`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `year` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `confirmcode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `alumni`
--


-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `votecount` int(11) NOT NULL DEFAULT '0',
  `sy` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--


-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE IF NOT EXISTS `credit` (
  `leve` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`leve`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`leve`, `username`, `password`) VALUES
(1, 'alpha', 'AmiGo');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `position` varchar(50) NOT NULL,
  `IDNo` int(11) NOT NULL AUTO_INCREMENT,
  `Limit` int(11) NOT NULL,
  PRIMARY KEY (`IDNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `position`
--


-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `studid` varchar(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year` varchar(10) NOT NULL,
  `sec` varchar(5) NOT NULL,
  `password` varchar(15) NOT NULL,
  `gov` varchar(10) NOT NULL,
  `vgov` varchar(10) NOT NULL,
  `congres` varchar(10) NOT NULL,
  `board` varchar(10) NOT NULL,
  `councilor` varchar(10) NOT NULL,
  `Mayor` varchar(10) NOT NULL,
  `Vice` varchar(10) NOT NULL,
  `leve` varchar(10) NOT NULL DEFAULT '2',
  `sy` varchar(15) NOT NULL,
  PRIMARY KEY (`studid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--


-- --------------------------------------------------------

--
-- Table structure for table `votecount`
--

CREATE TABLE IF NOT EXISTS `votecount` (
  `StudID` varchar(15) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votecount`
--

