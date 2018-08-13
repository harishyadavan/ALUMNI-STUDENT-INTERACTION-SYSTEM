-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2016 at 04:43 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Alumin_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `discussion forum`
--

CREATE TABLE IF NOT EXISTS `discussion forum` (
  `User Name` varchar(10) NOT NULL,
  `Discussion` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion forum`
--


-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `Images` blob NOT NULL,
  `User Name` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--


-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `User Name` varchar(10) NOT NULL,
  `Date` int(10) NOT NULL,
  `News` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `First Name` varchar(10) NOT NULL,
  `Last Name` varchar(10) NOT NULL,
  `DOB` int(11) NOT NULL,
  `Contact Number` int(10) NOT NULL,
  `User Name` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Confirm Password` varchar(10) NOT NULL,
  `Profile` varchar(10) NOT NULL,
  PRIMARY KEY (`User Name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

