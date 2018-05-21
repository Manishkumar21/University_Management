-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2016 at 10:36 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `univ_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_time_table`
--

CREATE TABLE IF NOT EXISTS `add_time_table` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Day` text NOT NULL,
  `Class` varchar(20) NOT NULL,
  `Branch` text NOT NULL,
  `lecf` text NOT NULL,
  `timef` varchar(20) NOT NULL,
  `roomf` varchar(10) NOT NULL,
  `lecs` text NOT NULL,
  `times` varchar(20) NOT NULL,
  `rooms` varchar(10) NOT NULL,
  `lect` text NOT NULL,
  `timet` varchar(20) NOT NULL,
  `roomt` varchar(10) NOT NULL,
  `lecfo` text NOT NULL,
  `timefo` varchar(20) NOT NULL,
  `roomfo` varchar(10) NOT NULL,
  `lecfi` text NOT NULL,
  `timefi` varchar(20) NOT NULL,
  `roomfi` varchar(10) NOT NULL,
  `lecsi` text NOT NULL,
  `timesi` varchar(20) NOT NULL,
  `roomsi` varchar(10) NOT NULL,
  `lecse` text NOT NULL,
  `timese` varchar(20) NOT NULL,
  `roomse` varchar(10) NOT NULL,
  `lece` text NOT NULL,
  `timee` varchar(20) NOT NULL,
  `roome` varchar(10) NOT NULL,
  `lecn` text NOT NULL,
  `timen` varchar(20) NOT NULL,
  `roomn` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `add_time_table`
--

INSERT INTO `add_time_table` (`id`, `Day`, `Class`, `Branch`, `lecf`, `timef`, `roomf`, `lecs`, `times`, `rooms`, `lect`, `timet`, `roomt`, `lecfo`, `timefo`, `roomfo`, `lecfi`, `timefi`, `roomfi`, `lecsi`, `timesi`, `roomsi`, `lecse`, `timese`, `roomse`, `lece`, `timee`, `roome`, `lecn`, `timen`, `roomn`) VALUES
(9, 'Monday', '1st Year', 'CSE', '.net2', '9:00 - 9:5', '201', 'java', '9:55 - 10:', '122', 'php', '10:50 - 11', '199', 'sub', '11:45 - 12', '109', 'sub2', '12:40 - 1:', '209', 'php', '1:35 - 2:3', '201', 'sub2', '2:30 - 3:2', '210', 'sub', '3:25 - 4:2', '109', 'sub2', '4:20 - 5:0', '110');

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `admin_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `Name`, `username`, `password`) VALUES
(1, 'Manish', '15LCS010', 'manu'),
(2, 'Rajnish', '15lcs001', 'mahaveer'),
(3, 'Ankit', '14ume141', 'ankit'),
(4, 'Manisha', '15ucs028', 'manisha');

-- --------------------------------------------------------

--
-- Table structure for table `allotted_sub_table`
--

CREATE TABLE IF NOT EXISTS `allotted_sub_table` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `class` varchar(10) NOT NULL,
  `teacher` text NOT NULL,
  `subject` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `allotted_sub_table`
--

INSERT INTO `allotted_sub_table` (`id`, `class`, `teacher`, `subject`) VALUES
(1, '1st Year', 'manish', '.net'),
(3, '1st Year', 'manish', 'sub'),
(4, '2nd Year', 'manish', '.net'),
(5, '2nd Year', 'Rajnish', 'sub2'),
(6, 'Final Year', 'manish', 'java');

-- --------------------------------------------------------

--
-- Table structure for table `class_table`
--

CREATE TABLE IF NOT EXISTS `class_table` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `branch` text NOT NULL,
  `class` varchar(20) NOT NULL,
  `incharge` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `class_table`
--

INSERT INTO `class_table` (`id`, `branch`, `class`, `incharge`) VALUES
(1, 'ECE', 'CSE', 'def'),
(2, 'Pharma', '2nd Year', 'def'),
(3, 'CSE', '1st Year', 'manish'),
(4, 'CSE', '1st Year', 'manish'),
(5, 'CSE', '1st Year', 'manish');

-- --------------------------------------------------------

--
-- Table structure for table `notice_table`
--

CREATE TABLE IF NOT EXISTS `notice_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text NOT NULL,
  `Notice` text NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `notice_table`
--

INSERT INTO `notice_table` (`id`, `Title`, `Notice`, `Date`) VALUES
(2, 'dcvfedv', 'gbbe', '0000-00-00'),
(3, 'asdert', 'manish', '0000-00-00'),
(4, 'admission', 'yiub dhds jsdhsdjs  jdhbd jdhb ', '2018-07-16'),
(5, 'notice', 'hello', '2016-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE IF NOT EXISTS `student_table` (
  `stud_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `S_Name` text NOT NULL,
  `Gender` text NOT NULL,
  `B_Day` varchar(20) NOT NULL,
  `Father_Name` text NOT NULL,
  `Father_Occupation` text NOT NULL,
  `Father_No` bigint(20) NOT NULL,
  `Mother_Name` text NOT NULL,
  `Mother_Occupation` text NOT NULL,
  `Mother_No` bigint(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `M_No` bigint(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Photo` text NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`stud_id`, `S_Name`, `Gender`, `B_Day`, `Father_Name`, `Father_Occupation`, `Father_No`, `Mother_Name`, `Mother_Occupation`, `Mother_No`, `Address`, `M_No`, `Email`, `Photo`) VALUES
(1, 'Akshay', 'Male', '23 sep 1995', 'Rajat', 'Prime Minister', 123456789, 'Deepika', 'Actress', 9876543210, 'dfvsvsdsdvsd', 9807563412, 'akshay_tu_khan_hai@j', 'IMG20160502180646.jpg'),
(3, 'Rajnish', 'Male', 'jvjh ', 'tv', 'igvj.jh', 979797987987, 'yvyvhgvh', 'yvg', 987979797, 'vuvujdn kjsbfvjbsdjvs skdjbs\r\nskjbsdkbcds sdkjnsdk', 8989798787687, 'f7tuvyhb@', '1.jpg'),
(4, 'asdfghj', 'Male', 'warszetxdfcygvhj', 'rdtfgvuhj', '7rdtfgvuhj', 123456789, 'esdtrfygvhbjnk', 'wsetxdcfygvjhbn', 123456789, 'Address', 123456789, '3qawserfyvgbhj@sdfgh', 'IMG20160502180703.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subject_table`
--

CREATE TABLE IF NOT EXISTS `subject_table` (
  `sub_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sub_name` text NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `subject_table`
--

INSERT INTO `subject_table` (`sub_id`, `sub_name`) VALUES
(1, 'php'),
(2, 'java'),
(3, '.net2'),
(6, 'sub'),
(7, 'sub2');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_table`
--

CREATE TABLE IF NOT EXISTS `teacher_table` (
  `teach_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` text NOT NULL,
  `gender` text NOT NULL,
  `b_day` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `m_no` bigint(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `qualification` text NOT NULL,
  `department` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`teach_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `teacher_table`
--

INSERT INTO `teacher_table` (`teach_id`, `t_name`, `gender`, `b_day`, `address`, `m_no`, `email`, `pass`, `qualification`, `department`, `photo`) VALUES
(1, 'manish', 'Male', '23 sep 1995', 'jhwbfwjbsjbvsdjbvsjvbsdjvbsdjvbsdvbs', 9816071435, 'khiladimanu1@gmail.c', 'manu', 'B.tech', 'CSE', 'IMG20160502180646.jpg'),
(3, 'Rajnish', 'Male', '23 sep 1995', 'panjawar', 9876543210, 'dontknow@hfhf.vijv', 'sscscsd', 'B.tech', 'ECE', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
