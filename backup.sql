-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2016 at 06:55 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a5220582_cuma`
--

-- --------------------------------------------------------

--
-- Table structure for table `gethelp`
--

CREATE TABLE `gethelp` (
  `fname` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `lname` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `img` blob NOT NULL,
  `disc` varchar(500) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='get help table';

--
-- Dumping data for table `gethelp`
--

INSERT INTO `gethelp` VALUES('tejeswar', 'reddy', 'teje@yahoo.com', '+91784574123', '', 'help me plant tress @ Kukatpally');
INSERT INTO `gethelp` VALUES('sai', 'kiran', 'kuramsai@yahoo.com', '8125858056', 0x706c616e74696e67207472656573, 'cleaning the roads');
INSERT INTO `gethelp` VALUES('charan', 'tej', 'charan@gmail.com', '+9154679845', '', 'Paint dirty walls @ Balanagar');
INSERT INTO `gethelp` VALUES('ravi', 'shiva', 'rsk@gmail.com', '+9745127885', '', 'Cleaning the area @ patancheru');
INSERT INTO `gethelp` VALUES('ram', 'shankar', 'rsskrk@gmail.com', '+9784513698', '', 'painting walls @ Hitech City');
INSERT INTO `gethelp` VALUES('mahesh', 'd', 'msd@gmail.com', '+9745127885', '', 'Planting trees @ Dilshiknagar');

-- --------------------------------------------------------

--
-- Table structure for table `provide`
--

CREATE TABLE `provide` (
  `fname` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `lname` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `disc` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `help` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='provide help';

--
-- Dumping data for table `provide`
--

INSERT INTO `provide` VALUES('sai', 'kiran', 'kuramsai@yahoo.com', '8125858056', 'planting trees', '4');
INSERT INTO `provide` VALUES('raja', 'ram', 'raju@gmail.com', '+9191245782', 'Cleaning the area and planting trees', '3');
INSERT INTO `provide` VALUES('raja', 'ram', 'raju@gmail.com', '+9191245782', 'Cleaning the area and planting trees', '3');
INSERT INTO `provide` VALUES('ravi', 'teja', 'ravi@gmail.com', '+78451236589', 'Paintings on wall', '1');
INSERT INTO `provide` VALUES('shiv', 'shankar', 'shivsn@yahoo.com', '+97845985632', 'Cleaning the area', '1');
