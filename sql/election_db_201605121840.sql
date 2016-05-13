-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2016 at 03:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `election_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE IF NOT EXISTS `category_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`id`, `name`) VALUES
(1, 'Heath'),
(2, 'Taxes'),
(3, 'Jobs/Economy'),
(4, 'Democracy'),
(5, 'Education'),
(6, 'Seniors'),
(7, 'Environment'),
(8, 'Crime'),
(9, 'Govt Spending'),
(10, 'Immigration'),
(11, 'Consumers'),
(12, 'Foreign Policy'),
(13, 'Arts and Culture'),
(14, 'Families');

-- --------------------------------------------------------

--
-- Table structure for table `fact_table`
--

CREATE TABLE IF NOT EXISTS `fact_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `party_id` int(11) NOT NULL,
  `fact` varchar(300) NOT NULL,
  `fact_image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `party_id` (`party_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mp_table`
--

CREATE TABLE IF NOT EXISTS `mp_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `party_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `party_table`
--

CREATE TABLE IF NOT EXISTS `party_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `party_table`
--

INSERT INTO `party_table` (`id`, `name`) VALUES
(1, 'Liberal Party of Canada'),
(2, 'Conservative Party of Canada'),
(3, 'New Democratic Party'),
(4, 'Bloc Quebecois'),
(5, 'Green Party of Canada'),
(6, 'Libertarian Party of Canada');

-- --------------------------------------------------------

--
-- Table structure for table `province_table`
--

CREATE TABLE IF NOT EXISTS `province_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `abbreviation` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `province_table`
--

INSERT INTO `province_table` (`id`, `name`, `abbreviation`) VALUES
(1, 'Ontario', 'ON'),
(2, 'Quebec', 'QC'),
(3, 'Nova Scotia', 'NS'),
(4, 'New Brunswick', 'NB'),
(5, 'Manitoba', 'MB'),
(6, 'British Columbia', 'BC'),
(7, 'Prince Edward Island', 'PE'),
(8, 'Saskatchewan', 'SK'),
(9, 'Alberta', 'AB'),
(10, 'New Foundland and Labrador', 'NL'),
(11, 'Northwest Territories', 'NT'),
(12, 'Yukon', 'YT'),
(13, 'Nunavut', 'NU');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vote_table`
--

CREATE TABLE IF NOT EXISTS `vote_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `party_id` int(11) NOT NULL,
  `agree` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
