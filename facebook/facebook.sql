-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2014 at 09:02 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `facebook`
--

CREATE TABLE IF NOT EXISTS `facebook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(127) NOT NULL,
  `password` varchar(127) NOT NULL,
  `birthDate` date NOT NULL,
  `gender` char(7) NOT NULL,
  `hobby` text NOT NULL,
  `favFood` text NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `pic1` varchar(255) NOT NULL,
  `pic2` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `facebook`
--

INSERT INTO `facebook` (`id`, `firstName`, `lastName`, `email`, `password`, `birthDate`, `gender`, `hobby`, `favFood`, `comment`, `created`, `modified`, `pic1`, `pic2`) VALUES
(1, 'Abu', 'Kowsar', 'm.a.kowsar@gmail.com', '123456', '2014-12-01', 'male', 'reading', 'Rice', 'none', '2014-12-01 00:00:00', '2014-12-04 00:00:00', 'sdf', 0x89504e470d0a1a0a0000000d4948445200000008000000080806000000c40fbe8b0000001d494441541857636060605806c2ffffff67c08619082ac02531a414000016bcb5e5ef85f58b0000000049454e44ae426082);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
