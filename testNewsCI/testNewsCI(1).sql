-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2017 at 07:47 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testNewsCI`
--

-- --------------------------------------------------------

--
-- Table structure for table `Answer`
--

CREATE TABLE IF NOT EXISTS `Answer` (
  `A_Id` int(11) NOT NULL AUTO_INCREMENT,
  `A_Name` varchar(200) DEFAULT NULL,
  `Q_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`A_Id`),
  KEY `Q_Id` (`Q_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Answer`
--

INSERT INTO `Answer` (`A_Id`, `A_Name`, `Q_Id`) VALUES
(1, '20', 2),
(2, 'Fine', 3),
(3, 'Rabab', 1),
(4, 'Engy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Exam`
--

CREATE TABLE IF NOT EXISTS `Exam` (
  `Exam_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Exam_Name` varchar(100) NOT NULL,
  `Exam_Desc` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Exam_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Exam`
--

INSERT INTO `Exam` (`Exam_Id`, `Exam_Name`, `Exam_Desc`) VALUES
(1, 'I_P', 'Image Processing'),
(2, 'D_M', 'Data Mining'),
(3, 'D_S', 'Data Structure');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'Test', 'test', 'Hello World !!'),
(2, 'D_M', 'd_m', 'Data Mining');

-- --------------------------------------------------------

--
-- Table structure for table `Question`
--

CREATE TABLE IF NOT EXISTS `Question` (
  `Q_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Q_Name` varchar(200) DEFAULT NULL,
  `Exam_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Q_Id`),
  KEY `Exam_Id` (`Exam_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Question`
--

INSERT INTO `Question` (`Q_Id`, `Q_Name`, `Exam_Id`) VALUES
(1, 'What''syour name?', 1),
(2, 'What''s your Age?', 1),
(3, 'How are you?', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Answer`
--
ALTER TABLE `Answer`
  ADD CONSTRAINT `Answer_ibfk_1` FOREIGN KEY (`Q_Id`) REFERENCES `Question` (`Q_Id`);

--
-- Constraints for table `Question`
--
ALTER TABLE `Question`
  ADD CONSTRAINT `Question_ibfk_1` FOREIGN KEY (`Exam_Id`) REFERENCES `Exam` (`Exam_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
