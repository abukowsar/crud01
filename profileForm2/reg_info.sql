-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2014 at 09:26 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `reg_info`
--

CREATE TABLE IF NOT EXISTS `reg_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pre_track` varchar(10) NOT NULL,
  `ssc_board` varchar(20) NOT NULL,
  `hsc_board` varchar(20) NOT NULL,
  `has_laptop` varchar(10) NOT NULL,
  `ssc_roll` varchar(10) NOT NULL,
  `hsc_roll` varchar(10) NOT NULL,
  `pre_exam_center` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `father` varchar(40) NOT NULL,
  `mother` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `id_national` varchar(25) NOT NULL,
  `birth_reg` varchar(20) NOT NULL,
  `passport_number` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `h_phone` varchar(15) NOT NULL,
  `e_contact` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `a_email` varchar(20) NOT NULL,
  `c_location` varchar(20) NOT NULL,
  `p_address` text NOT NULL,
  `per_address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `reg_info`
--

INSERT INTO `reg_info` (`id`, `pre_track`, `ssc_board`, `hsc_board`, `has_laptop`, `ssc_roll`, `hsc_roll`, `pre_exam_center`, `name`, `father`, `mother`, `gender`, `religion`, `birth_date`, `nationality`, `id_national`, `birth_reg`, `passport_number`, `mobile`, `h_phone`, `e_contact`, `email`, `a_email`, `c_location`, `p_address`, `per_address`) VALUES
(10, 'ITS', 'Dhaka', 'Dhaka', '1', '3432423', '4324324', '1', 'kowsar', 'asdf', 'asdfa', 'Female', 'Christiani', '0000-00-00', 'AF', '234324', '32423', '34324', '23523', '423423', '23423', '234', '23423', '1', '234', '2q52');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
