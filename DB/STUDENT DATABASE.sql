-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2014 at 11:09 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `bhup`
--


CREATE TABLE `bhup` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `rn` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  PRIMARY KEY  (`rn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bhup`
--

