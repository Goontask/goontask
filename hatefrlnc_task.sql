-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2014 at 03:16 PM
-- Server version: 5.6.15
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hatefrlnc_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `start` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deadline` timestamp NULL DEFAULT NULL,
  `private_or_public` enum('Y','N') NOT NULL DEFAULT 'Y',
  `status` enum('W','O','C','F') NOT NULL DEFAULT 'W',
  `members` varchar(400) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `files` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `checklist` varchar(255) NOT NULL,
  `status` enum('W','O','C','F') NOT NULL,
  `project` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `responsible` int(11) NOT NULL,
  `members` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL,
  `docs` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) CHARACTER SET cp1251 NOT NULL,
  `name` varchar(255) CHARACTER SET cp1251 NOT NULL,
  `birthdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role` enum('A','U') CHARACTER SET cp1251 NOT NULL DEFAULT 'U',
  `email` varchar(255) CHARACTER SET cp1251 NOT NULL,
  `mobile` varchar(255) CHARACTER SET cp1251 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `salt`, `name`, `birthdate`, `role`, `email`, `mobile`) VALUES
(29, '99a8f0c66e717f14eac04397a0fec288', 'dbnnGR5S', 'assa', '2014-04-02 22:24:36', 'U', 'kasyan.alexander@gmail.com', NULL),
(40, 'a7ffbec91529febbe598fda064f6080e', 'fFR5h8db', 'napssst3r', '2014-04-11 18:15:18', 'U', 'napssst3r@gmail.com', NULL),
(41, 'c2182a87d390434616dbfd5a4ce0c227', 'SdYBH3Nt', 'Alex Kasyan', '2014-04-20 17:18:58', 'U', 'hatefreelance@gmail.com', NULL),
(38, 'aa58003bf180aaf8dbc17e7d4c7de80f', 'KR3F4Rfe', 'da', '2014-04-02 23:21:34', 'U', 'asdasd@asdasd.ru', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
