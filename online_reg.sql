-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 03, 2013 at 03:34 PM
-- Server version: 5.6.11-log
-- PHP Version: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_reg`
--
CREATE DATABASE IF NOT EXISTS `online_reg` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `online_reg`;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_details`
--

CREATE TABLE IF NOT EXISTS `candidate_details` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `father_name` varchar(200) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `email_id` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `degree` varchar(200) DEFAULT NULL,
  `branch` varchar(200) DEFAULT NULL,
  `college` varchar(200) DEFAULT NULL,
  `year_of_passing` varchar(50) DEFAULT NULL,
  `class_gcp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `candidate_details`
--

INSERT INTO `candidate_details` (`id`, `name`, `father_name`, `address`, `email_id`, `phone`, `degree`, `branch`, `college`, `year_of_passing`, `class_gcp`) VALUES
(1, 'Ramesh', 'thiyagarajan', 'Anna Nagar', 'trkrameshkumar@gmail.com', '9884858702', 'MCA', 'COMPUTER APPLICATION', 'Saveetha Engineering Colleg', '2014', '6'),
(2, 'Vinoth', 'Arokya Raj', 'No: 6/72, North Silver Street, Butt Road, St Thomas Mount ,Chennai-600016', 'vino11560@yahoo.com', '9500149627', 'MCA', 'COMPUTER APPLICATION', 'Saveetha Engineering Colleg', '2015', '70'),
(3, 'Ramesh Kumar', 'thiyagarajan', 'Anna Nagar', 'trkrameshkumar@gmail.com', '9884858702', 'MEME', 'COMPUTER APPLICATION', 'Saveetha Engineering Colleg', '2014', '70'),
(4, 'Ramesh Kumar R', 'Kumar', 'thisisisis', 'college@gmail.com', '9988', '---------select---------', '--------------select---------------', '', '2013', '10'),
(5, 'Ramesh', 'kumar', 'thsadf', 'this@gmail.com', 'sdfsdfsdf', '---------select---------', '--------------select---------------', '', '2013', '8'),
(6, 'J Rinosha Barveen', 'Kumar', 'thisisisis', 'gurusaicharan03@gmail.com', '9940972576', '---------select---------', '--------------select---------------', '', '2013', '8'),
(7, 'J Rinosha Barveen', 'Kumar', 'thisisisis', 'gurusaicharan03@gmail.com', '9940972576', '---------select---------', '--------------select---------------', '', '2013', '8'),
(8, 'Ramesh kumar', 'thiyagarajan', '654654', 'ramesh@gmail.com', 'letters', '---------select---------', '--------------select---------------', '', '2013', '8'),
(9, 'Balaji N', 'Kumar', 'thisisisis', 'gurusaicharan03@gmail.com', 'leter', '---------select---------', '--------------select---------------', '', '2013', '8'),
(10, 'Ramesh', 'kumar', 'anna nagar', 'manojtotalk@gmail.com', '9884001831', 'BSc', 'AUTOMOBILE ENGINEERING', '', '2013', '8'),
(11, 'Ramesh', 'Thiyagarajan', 'No', 'thaniparames59@gmail.com', '9884001831', 'MArch', 'COMPUTER SCIENCE AND ENGG', 'savee', '2013', '8'),
(12, 'J Rinosha Barveen', 'Kumar', 'thisisisis', 'gurusaicharan03@gmail.com', '9940972576', 'BE', 'COMPUTER SCIENCE AND ENGG', '', '2013', '8'),
(13, 'Ramesh', 'thiyagarajan', 'No', 'email@gmail.com', '9884858702', '---------select---------', '--------------select---------------', 'thisis', '2013', '8'),
(14, 'Ramsh', 'thiyagarajan', 'no', 'email@gmail.com', '9884858702', 'ME', 'ELECTRONICS AND COMMUNICATION ENGG.', 'Saveetha Engineering Colleg', '2013', '8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
