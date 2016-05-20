-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2016 at 06:02 AM
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
-- Table structure for table `fact_table`
--

CREATE TABLE IF NOT EXISTS `fact_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `party_id` int(11) NOT NULL,
  `fact` varchar(300) NOT NULL,
  `fact_image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `party_id` (`party_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fact_table`
--

INSERT INTO `fact_table` (`id`, `party_id`, `fact`, `fact_image`) VALUES
(1, 5, 'In the 2004 election, the consortium of Canadian television networks did not invite Jim Harris to the televised leaders debates. The primary reason given for this was the party''s lack of representation in the House of Commons. The Green Party was also not included in the leaders'' debates for the 200', ''),
(2, 4, 'Bloc Quebecois is the only party to be considered a regional interest as they are the only party that does not run candidates across the country during elections.\r\n', ''),
(3, 6, 'Tim Moen the current Leader of the Libertarian party, used meme''s in his election campaign during the spring to gain media attention. The slogan, attributed to Moen, reads “I want gay married couples to be able to protect their marijuana plants with guns.” The image went viral and landed Moen covera', ''),
(4, 3, 'Unlike most other Canadian parties, the NDP is integrated with its provincial and territorial parties. Membership lists are maintained by the provinces and territories. Being a member of a provincial or territorial section of the NDP includes automatic membership in the federal party. This precludes', ''),
(5, 2, 'The conservative party is one of the newest parties in canada politics.', ''),
(6, 1, 'The party has dominated federal politics for much of Canada''s history, holding power for almost 69 years in the 20th century—more than any other party in a developed country—and as a result, it is sometimes referred to as Canada''s "natural governing party".', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
