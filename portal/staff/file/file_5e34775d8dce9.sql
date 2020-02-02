-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 05:31 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sn` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `employee_id` varchar(10) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sn`, `username`, `fname`, `lname`, `mname`, `position`, `employee_id`, `picture`, `religion`, `level`) VALUES
(1, 'c60a86a75c565c877cf6311d4f6143df', 'Adeola', 'Abiola', 'olubumi', 'site administrator', 'AA2510', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `anoucement`
--

CREATE TABLE `anoucement` (
  `sn` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `dates` varchar(10) NOT NULL,
  `viewers` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `sn` int(11) NOT NULL,
  `admission_no` varchar(10) NOT NULL,
  `class` varchar(220) NOT NULL,
  `arm` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `day` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sn`, `admission_no`, `class`, `arm`, `date`, `status`, `day`, `month`, `year`) VALUES
(1, '19/032', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(2, '19/033', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(3, '19/034', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(4, '19/035', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(5, '19/036', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(6, '19/037', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(7, '19/038', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(8, '19/039', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(9, '19/040', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(10, '19/041', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(11, '19/041', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(12, '19/041', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(13, '19/042', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(14, '19/043', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(15, '19/044', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(16, '19/045', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(17, '19/046', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(18, '19/047', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(19, '19/048', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(20, '19/049', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(21, '19/050', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(22, '19/052', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(23, '19/051', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(24, '19/053', '', '', '19-01-20', 0, 'Sunday', 'January', '2020'),
(25, '19/054', '', '', '19-01-20', 0, 'Sunday', 'January', '2020'),
(26, '19/055', '', '', '19-01-20', 0, 'Sunday', 'January', '2020'),
(27, '19/056', '', '', '19-01-20', 0, 'Sunday', 'January', '2020'),
(28, '19/057', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(29, '19/058', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(30, '19/059', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(31, '19/032', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(32, '19/033', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(33, '19/034', '', '', '19-01-20', 1, 'Sunday', 'January', '2020'),
(34, '19/000', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(35, '19/002', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(36, '19/001', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(37, '19/003', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(38, '19/004', '', '', '20-01-20', 0, 'Monday', 'January', '2020'),
(39, '19/005', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(40, '19/006', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(41, '19/007', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(42, '19/009', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(43, '19/008', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(44, '19/010', '', '', '20-01-20', 0, 'Monday', 'January', '2020'),
(45, '19/011', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(46, '19/012', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(47, '19/013', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(48, '19/014', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(49, '19/015', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(50, '19/016', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(51, '19/017', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(52, '19/018', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(53, '19/019', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(54, '19/020', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(55, '19/021', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(56, '19/022', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(57, '19/023', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(58, '19/024', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(59, '19/025', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(60, '19/026', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(61, '19/027', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(62, '19/028', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(63, '19/029', '', '', '20-01-20', 1, 'Monday', 'January', '2020'),
(64, '19/030', '', '', '20-01-20', 1, 'Monday', 'January', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `calender`
--

CREATE TABLE `calender` (
  `sn` int(11) NOT NULL,
  `session` varchar(100) NOT NULL,
  `current_term` varchar(2) NOT NULL,
  `s_start` varchar(10) NOT NULL,
  `s_stop` varchar(10) NOT NULL,
  `t_start` varchar(10) NOT NULL,
  `t_stop` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `calender`
--

INSERT INTO `calender` (`sn`, `session`, `current_term`, `s_start`, `s_stop`, `t_start`, `t_stop`, `status`) VALUES
(1, '2022/2023', '3', '13-12-2019', '13-12-2019', '13-12-2019', '13-12-2019', 0);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `sn` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `coordinator` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`sn`, `class`, `coordinator`, `status`) VALUES
(1, 'JSS1', 'AA2310', 0),
(2, 'JSS2', 'AA2511', 0),
(3, 'JSS3', 'AA3355', 0),
(4, 'SS1_science', 'AA2512', 0),
(5, 'SS1_art', 'AA2255', 0),
(6, 'SS1_commericial', 'AA2233', 0),
(8, 'SS2_science', 'AA2233', 0),
(9, 'SS2_art', 'AA3388', 0),
(10, 'SS2_commericial', 'AA2244', 0),
(11, 'SS3_science', 'AA2288', 0),
(12, 'SS3_art', 'AA2255', 0),
(13, 'SS3_commericial', 'AA3366', 0);

-- --------------------------------------------------------

--
-- Table structure for table `class_arm`
--

CREATE TABLE `class_arm` (
  `arm_id` int(11) NOT NULL,
  `arm` varchar(50) NOT NULL,
  `class_id` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `teacher` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `class_arm`
--

INSERT INTO `class_arm` (`arm_id`, `arm`, `class_id`, `class`, `teacher`, `status`) VALUES
(1, 'A', '1', 'JSS1', 'AA3311', ''),
(2, 'B', '1', 'JSS1', 'AA1010', ''),
(3, 'C', '1', 'JSS1', 'AA3333', '');

-- --------------------------------------------------------

--
-- Table structure for table `daily_report`
--

CREATE TABLE `daily_report` (
  `sn` int(11) NOT NULL,
  `admission_no` varchar(10) NOT NULL,
  `class` varchar(220) NOT NULL,
  `arm` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `report` text NOT NULL,
  `day` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `daily_report`
--

INSERT INTO `daily_report` (`sn`, `admission_no`, `class`, `arm`, `date`, `report`, `day`, `month`, `year`) VALUES
(1, '19/032', '', '', '19-01-20', 'good behaviour', 'Sunday', 'January', '2020'),
(2, '19/033', '', '', '19-01-20', 'good', 'Sunday', 'January', '2020'),
(3, '19/034', '', '', '19-01-20', 'good', 'Sunday', 'January', '2020'),
(4, '19/038', '', '', '19-01-20', 'report', 'Sunday', 'January', '2020'),
(5, '19/035', '', '', '19-01-20', 'he is a mother fucker', 'Sunday', 'January', '2020'),
(6, '19/036', '', '', '19-01-20', 'he is not a candidate for as', 'Sunday', 'January', '2020'),
(7, '19/002', '', '', '20-01-20', 'he sucks', 'Monday', 'January', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `elective_subject`
--

CREATE TABLE `elective_subject` (
  `sn` int(11) NOT NULL,
  `subject_id` varchar(20) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `elective_subject`
--

INSERT INTO `elective_subject` (`sn`, `subject_id`, `student_id`, `status`) VALUES
(1, '8', '19/002', 0),
(2, '140', '19/002', 0),
(3, '8', '19/032', 0),
(4, '140', '19/032', 0);

-- --------------------------------------------------------

--
-- Table structure for table `elective_window`
--

CREATE TABLE `elective_window` (
  `sn` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `elective_window`
--

INSERT INTO `elective_window` (`sn`, `status`) VALUES
(0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `sn` int(11) NOT NULL,
  `event` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`sn`, `event`, `date`, `time`, `status`) VALUES
(2, 'debate', '2020-01-31', '05:00', 0),
(3, 'phe', '2020-01-31', '05:00', 0),
(4, 'sport', '2020-01-31', '05:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exam_access`
--

CREATE TABLE `exam_access` (
  `sn` int(11) NOT NULL,
  `student` varchar(150) NOT NULL,
  `subject_code` varchar(150) NOT NULL,
  `exam_code` varchar(150) NOT NULL,
  `attempt` varchar(5) NOT NULL DEFAULT '0',
  `questions` text NOT NULL,
  `time_left` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `exam_access`
--

INSERT INTO `exam_access` (`sn`, `student`, `subject_code`, `exam_code`, `attempt`, `questions`, `time_left`) VALUES
(1, '19/001', '5', '5e09e2f46fbdf', '1', '', '85'),
(2, '19/001', '5', '5e09e67184284', '2', '', '40'),
(3, '19/001', '5', '5e1cafa93183c', '2', '', '306'),
(4, '19/001', '5', '5e1de2f06cd48', '1', '', '626');

-- --------------------------------------------------------

--
-- Table structure for table `exam_details`
--

CREATE TABLE `exam_details` (
  `sn` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `exam_code` varchar(150) NOT NULL,
  `type` varchar(10) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `display` varchar(10) NOT NULL,
  `from_x` varchar(200) NOT NULL,
  `to_x` varchar(200) NOT NULL,
  `from_y` varchar(150) NOT NULL,
  `to_y` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nons` varchar(10) NOT NULL,
  `questions` varchar(10) NOT NULL,
  `set_by` varchar(15) NOT NULL,
  `calculator` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `exam_details`
--

INSERT INTO `exam_details` (`sn`, `name`, `subject_code`, `exam_code`, `type`, `duration`, `display`, `from_x`, `to_x`, `from_y`, `to_y`, `password`, `nons`, `questions`, `set_by`, `calculator`) VALUES
(1, 'my test', '5', '5e09e2f46fbdf', 'test', '2', 'yes', '30-12-2019', '30-12-2019', '0000', '2300', '755f85c2723bb39381c7379a604160d8', '40', '20', 'AA2233', 0),
(2, 'my test', '5', '5e09e4efeda2c', 'test', '2', 'yes', '30-12-2019', '30-12-2019', '0000', '1100', '755f85c2723bb39381c7379a604160d8', '3', '2', 'AA2233', 0),
(3, 'testing', '5', '5e09e67184284', 'test', '2', 'yes', '30-12-2019', '30-12-2019', '0000', '2359', '755f85c2723bb39381c7379a604160d8', '3', '2', 'AA2233', 0),
(4, 'sub', '5', '5e1cafa93183c', 'CA1', '10', 'no', '13-01-2020', '13-01-2020', '0000', '2359', '755f85c2723bb39381c7379a604160d8', '100', '90', 'AA2233', 0),
(5, 'caculator test', '5', '5e1de2f06cd48', 'CA1', '300', 'yes', '14-01-2020', '14-01-2020', '0000', '2359', '5f4dcc3b5aa765d61d8327deb882cf99', '2', '1', 'AA2233', 1),
(6, 'caculator test', '112', '5e1de4a024eba', 'CA2', '2', 'no', '02-03-2020', '27-01-2020', '0000', '2359', '5f4dcc3b5aa765d61d8327deb882cf99', '3', '2', 'AA2244', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `code` int(200) NOT NULL,
  `sn` varchar(200) NOT NULL,
  `title` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `participant` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `dates` varchar(10) NOT NULL,
  `session` varchar(200) NOT NULL,
  `term` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`code`, `sn`, `title`, `amount`, `participant`, `status`, `dates`, `session`, `term`) VALUES
(1, '9db66a6344c6308b60f7ff77aa6ac44a', 'tution', '365400', 'JSS1', 0, '20-01-20', '2022/2023', '3');

-- --------------------------------------------------------

--
-- Table structure for table `final_score`
--

CREATE TABLE `final_score` (
  `sn` int(11) NOT NULL,
  `student` varchar(15) NOT NULL,
  `exam_code` varchar(150) NOT NULL,
  `score` varchar(5) NOT NULL,
  `time_spent` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `final_score`
--

INSERT INTO `final_score` (`sn`, `student`, `exam_code`, `score`, `time_spent`) VALUES
(1, '18/003', '5d76bd43db33d', '0', '10'),
(2, '18/045', '5d774b70a13bd', '0', '6'),
(3, '18/088', '5d78be95e42f5', '48', '28'),
(4, '18/089', '5d78be95e42f5', '47', '30'),
(5, '18/002', '5d78be95e42f5', '46', '8'),
(6, '18/002', '5def44f343759', '2', '1'),
(7, '', '5def44f343759', '0', '2'),
(8, '19/001', '5e09e67184284', '2', '2'),
(9, '19/001', '5e1cafa93183c', '0', '5');

-- --------------------------------------------------------

--
-- Table structure for table `gone`
--

CREATE TABLE `gone` (
  `sn` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `admission_no` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `class` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `religion` varchar(15) NOT NULL,
  `lga` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `house` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `dates` varchar(10) NOT NULL,
  `parents` varchar(50) NOT NULL,
  `parents_phone1` varchar(16) NOT NULL,
  `parents_phone2` varchar(16) NOT NULL,
  `p_email` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `year` varchar(20) NOT NULL,
  `date_admitted` varchar(10) NOT NULL,
  `date_went` varchar(20) NOT NULL,
  `batch` varchar(12) NOT NULL,
  `last_update` varchar(11) NOT NULL,
  `extral` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `graduated`
--

CREATE TABLE `graduated` (
  `sn` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `admission_no` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `class` varchar(50) NOT NULL,
  `arm` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `religion` varchar(15) NOT NULL,
  `lga` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `house` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `dates` varchar(10) NOT NULL,
  `parents` varchar(50) NOT NULL,
  `parents_phone1` varchar(16) NOT NULL,
  `parents_phone2` varchar(16) NOT NULL,
  `p_email` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `date_admitted` varchar(10) NOT NULL,
  `batch` varchar(12) NOT NULL,
  `last_update` varchar(11) NOT NULL,
  `extral` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `inactive`
--

CREATE TABLE `inactive` (
  `sn` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `admission_no` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `class` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `religion` varchar(15) NOT NULL,
  `lga` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `house` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `dates` varchar(10) NOT NULL,
  `parents` varchar(50) NOT NULL,
  `parents_phone1` varchar(16) NOT NULL,
  `parents_phone2` varchar(16) NOT NULL,
  `p_email` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `date_admitted` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `last_update` varchar(11) NOT NULL,
  `extral` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `jss3_asp`
--

CREATE TABLE `jss3_asp` (
  `sn` int(11) NOT NULL,
  `student` varchar(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `jss3_asp`
--

INSERT INTO `jss3_asp` (`sn`, `student`, `class`, `status`) VALUES
(1, '17/0001', 'SS1_art', ''),
(2, '17/0002', 'SS1_science', ''),
(3, '17/0003', 'SS1_commericial', ''),
(4, '17/0004', 'SS1_art', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `sn` int(11) NOT NULL,
  `admission` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `dates` varchar(10) NOT NULL,
  `audience` varchar(20) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `feedback` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`sn`, `admission`, `title`, `content`, `dates`, `audience`, `sender`, `feedback`, `status`) VALUES
(1, 'df587d859037c70506eaa911cd45a3d7', 'your ass', 'your ass is sososo', '18-01-20', 'JSS1', 'Paul Mbamalu', '', 1),
(2, 'df587d859037c70506eaa911cd45a3d7', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 1),
(3, 'fcea754a1a0e9610957768faf6cfc902', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(4, '6924daafd57cfb3770cef131f9c0050a', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(5, '5d8bc98666dbe707f3913cef08449355', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(6, 'c941566fbc5df0869ce985fb9f3646b7', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(7, '2ecd1ea12763e0504f59f2aa06f68f5f', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(8, '6900f61dc59e9c0bf7a886847d871560', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(9, '6e52d633c5fdb0ae5ef450c789b2242b', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(10, '7ec3230d2d5fa8e37205ad7c5bc7f2f0', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(11, 'd5c9ed423ec7dfc99a3a698e0d53d8ab', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(12, '88d977ef28077ddc1e15b3190cc26541', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(13, '467686d570b91be0c5ca330c7d26535f', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(14, 'f955bfe2725bb60d1a49b5955a207b3e', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(15, 'b8b7b1d0b4c845b24890c697192edfe6', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(16, 'd964fe0c004e2151d9703dc1552e4b3e', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(17, '1ed96ac1fa697dca99c17fba95b111cd', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(18, 'a39d933792adbbcf02f7a55117ccdc6d', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(19, '9cc836a4164c306d445aa7a5572fedc9', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(20, '0d06f1fca8df594c530afcaa25cc56e3', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(21, 'f839ee955c4d6d0d6e7c300befb10a3d', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(22, '35259d6f720e1527732783b371660bcc', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(23, '380919ba5f388ab7a14d992c5657821f', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(24, '7ace534d50d76eb78f413751459e83d8', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(25, 'ee310b7a76dbf39f88873be4816dffe2', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(26, '188394e425e35c0e23bea25a156bf664', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(27, 'fd7374df0dd75ff31a5259f2cfbaa75e', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(28, '4bc3bdf66f6c880d17aed70d99ee3a03', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(29, '257f189eca0769657096f2899c7eaacf', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(30, 'bac81be2ecf1e449d01e0cc60ddb80ea', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0),
(31, 'd41d8cd98f00b204e9800998ecf8427e', 'ur ass', 'momomo', '18-01-20', 'JSS1', 'Oluwafayokemi Adeboyejes', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oldresult`
--

CREATE TABLE `oldresult` (
  `sn` int(11) NOT NULL,
  `resultid` varchar(20) NOT NULL,
  `score` varchar(11) NOT NULL,
  `score2` varchar(3) NOT NULL,
  `score3` varchar(3) NOT NULL,
  `score4` varchar(3) NOT NULL,
  `last` varchar(3) NOT NULL DEFAULT '100',
  `subject` varchar(20) NOT NULL,
  `student` varchar(20) NOT NULL,
  `code` varchar(200) NOT NULL,
  `status` varchar(7) NOT NULL DEFAULT '0',
  `set_by` varchar(20) NOT NULL,
  `session` varchar(10) NOT NULL,
  `term` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `paid_fees`
--

CREATE TABLE `paid_fees` (
  `sn` int(11) NOT NULL,
  `fees_id` varchar(200) NOT NULL,
  `student` varchar(10) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `session` varchar(11) NOT NULL,
  `term` int(11) NOT NULL,
  `receiptid` varchar(10) NOT NULL,
  `dates` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `pin`
--

CREATE TABLE `pin` (
  `sn` int(11) NOT NULL,
  `pin` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0',
  `fees_id` varchar(200) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `admission` varchar(10) NOT NULL,
  `dates` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `pre_students`
--

CREATE TABLE `pre_students` (
  `sn` int(11) NOT NULL,
  `application_no` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `application2` varchar(150) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `lga` varchar(50) NOT NULL,
  `state` varchar(70) NOT NULL,
  `country` varchar(50) NOT NULL,
  `father` varchar(50) NOT NULL,
  `f_phone` varchar(16) NOT NULL,
  `f_email` varchar(150) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `m_phone` varchar(16) NOT NULL,
  `m_email` varchar(150) NOT NULL,
  `f_occupation` varchar(150) NOT NULL,
  `m_occupation` varchar(150) NOT NULL,
  `last_school` varchar(70) NOT NULL,
  `last_class` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `cert` varchar(150) NOT NULL,
  `last_result` varchar(150) NOT NULL,
  `passport` varchar(150) NOT NULL,
  `complete_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `sn` int(11) NOT NULL,
  `subject_id` varchar(150) NOT NULL,
  `exam_code` varchar(150) NOT NULL,
  `que_id` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`sn`, `subject_id`, `exam_code`, `que_id`, `type`, `question`, `answer`, `option1`, `option2`, `option3`) VALUES
(137, '12', '5c4452b7a68aa', '1', '', 'Floating point representation is used to store', 'real integers', 'Boolean values', 'whole numbers', 'integers'),
(138, '12', '5c4452b7a68aa', '2', '', 'The addressing mode used in an instruction of the form ADD AX, 4 is', 'immediate', 'Absolute', 'memory', 'indirect'),
(139, '12', '5c4452b7a68aa', '3', '', 'The basic operations performed by a computer are', 'All the Option', 'Logical operation', 'Storage and relative', 'Arithmetic operation'),
(140, '12', '5c4452b7a68aa', '4', '', 'ASCII and EBCDIC are the popular character coding systems. What does EBCDIC stand for?', 'Extended Binary Coded Decimal Interchange Code', 'Extended Bit Code Decimal Interchange Code', 'Extended Bit Case Decimal Interchange Code', 'Extended Binary Case Decimal Interchange Code'),
(141, '12', '5c4452b7a68aa', '5', '', 'Instruction in computer languages consists of', 'Both of the option', 'OPCODE', 'OPERAND', 'None of the option'),
(142, '12', '5c4452b7a68aa', '6', '', 'The term gigabyte refers to', '1024 megabytes', '1024 kilobytes', '1024 gigabyte', '1024 bytes'),
(143, '12', '5c4452b7a68aa', '7', '', 'In datagram subnet new route is chosen â€¦â€¦â€¦â€¦â€¦â€¦â€¦', 'for every packet sent', 'for  the last packet sent', 'for the packet which is not transmitted', 'only for the first packet'),
(144, '12', '5c4452b7a68aa', '8', '', 'Bios stands for', 'Basic input output systems', 'Base input output systems', 'base input output standards', 'basic input output standards'),
(145, '12', '5c4452b7a68aa', '9', '', 'In multicast routing with spanning tree method, a network with n groups, each with an ', 'm pruned spanning trees must be stored for a total of mn trees', 'n pruned spanning trees must be stored for a total of n trees', 'm pruned spanning trees must be stored for a total of m trees', 'n pruned spanning trees must be stored for a total of mn trees'),
(146, '12', '5c4452b7a68aa', '10', '', 'the command used on the windows platform to check the details if a network is', 'ipconfig', 'ipconfiguration', 'configure', 'config'),
(147, '12', '5c4452b7a68aa', '11', '', 'BCD is', 'Binary Coded Decimal', 'Bit Coded Decimal', 'Binary Coded Digit', 'Bit Coded Digit'),
(148, '12', '5c4452b7a68aa', '12', '', 'A set of flip flops integrated together is called ______', 'Register', 'Adder', 'Counter', 'None of the option'),
(149, '12', '5c4452b7a68aa', '13', '', 'Software in computer', 'Enhances the capabilities of the hardware machine', 'Increase the speed of central processing unit', 'Both of option', 'None of option'),
(150, '12', '5c4452b7a68aa', '14', '', 'Computers with 80286 microprocessor is', 'AT comptuers', 'PS/2 computer', 'None of option', 'XT computer'),
(151, '12', '5c4452b7a68aa', '15', '', 'LCD stands for ', 'Liquid Crystal Display', 'Light crystal Display', 'low crystal display', 'litmus crystal display'),
(152, '12', '5c4452b7a68aa', '16', '', ' Which of the following is not an input device?', 'COM (Computer Output to Microfilm)', 'Voice recognition device', 'Optical scanners', 'OCR'),
(153, '12', '5c4452b7a68aa', '17', '', 'Which of the following storage devices can store maximum amount of data?', 'Hard Disk', 'Magneto Optic', 'Floppy Disk', 'Compact Disk'),
(154, '12', '5c4452b7a68aa', '18', '', 'The ALU of a computer responds to the commands coming from', 'Control section', 'Primary memory', 'External memory', 'Cache memory'),
(155, '12', '5c4452b7a68aa', '19', '', 'Storage capacity of magnetic disk depends on', 'All of option', 'disk pack in disk surface', 'bits per inch of tracks', 'tracks per inch of surface'),
(156, '12', '5c4452b7a68aa', '20', '', 'The brain of any computer system is', 'CPU', 'Memory', 'Control unit', 'ALU'),
(157, '12', '5c4452b7a68aa', '21', '', 'The device used to regenerate a network signal is', 'repeaters ', 'hub', 'switch', 'network interface card'),
(158, '12', '5c4452b7a68aa', '22', '', 'Integrated Circuits (Ics) are related to which generation of computers?', 'Third generation', 'Fourth generation', ' First generation', 'Second generation'),
(159, '12', '5c4452b7a68aa', '23', '', 'Microprocessors as switching devices are for which generation computers', 'Fourth Generation', 'Third Generation', 'Second Generation', 'First Generation'),
(160, '12', '5c4452b7a68aa', '24', '', 'A high quality CAD system uses the following for printing drawing and graphs', 'Digital plotter', 'Dot matrix printer', 'Line printer', 'inkjet printer'),
(161, '12', '5c4452b7a68aa', '25', '', 'who invented Microsoft', 'Bill Gates', 'David Malibu', 'Jack Ma', 'Steve Jobs'),
(162, '12', '5c4452b7a68aa', '26', '', 'The two major types of computer chips are', 'Primary memory chip and Microprocessor chip', 'Microprocessor chip secondary microchip', 'external microchip and internal microchip', 'analogue and digital microchip'),
(163, '12', '5c4452b7a68aa', '27', '', 'The communication between the components in a microcomputer takes place via the address and', 'Data bus', 'I/O bus', 'Address bus', 'Control lines'),
(164, '12', '5c4452b7a68aa', '28', '', 'A group of bits that tell the computer to perform a specific operation is known as', 'Instruction code', 'Micro-operation', 'Accumulator', 'Register'),
(165, '12', '5c4452b7a68aa', '29', '', 'What characteristic of RAM memory makes it not suitable for permanent storage?', 'it is volatile ', 'too bulky', 'unreliable', 'too slow '),
(166, '12', '5c4452b7a68aa', '30', '', 'The circuit used to store one bit of data is known as', 'Flip Flop', 'Register', 'Decoder', 'Encoder'),
(167, '12', '5c4452b7a68aa', '31', '', 'Assembly language__________________', 'uses alphabetic codes in place of binary numbers used in machine language', 'is the easiest language to write programs', 'need not be translated into machine language', 'is a high level language'),
(168, '12', '5c4452b7a68aa', '32', '', 'one of the following is not a high level language', 'pascal', 'c#', 'java', 'C++'),
(169, '12', '5c4452b7a68aa', '33', '', 'The amount of time required to read a block of data from a disk into memory is composed of seek time, rotational latency, and transfer time. Rotational latency refers to', 'the time its takes for the platter to make a full rotation', 'the time it takes for the read-write head to move into position over the appropriate track', 'the time it takes for the platter to rotate the correct sector under the head', 'none of the above'),
(170, '12', '5c4452b7a68aa', '34', '', 'In computers, subtraction is generally carried out by', '2â€™s complement', '1â€™s complement ', '9â€™s complement ', '10â€™s complement'),
(171, '12', '5c4452b7a68aa', '35', '', 'The average time required to reach a storage location in memory and obtain its contents is called the', 'access time', 'turnaround time', 'transfer time', 'seek time'),
(172, '12', '5c4452b7a68aa', '36', '', 'Which of the following is at the bottom in memory hierarchy?', 'Secondary memory', 'Cache memory', 'Registers', 'RAM'),
(173, '12', '5c4452b7a68aa', '37', '', 'Virtual memory consists of', 'Static RAM ', 'Dynamic RAM', 'Magnetic memory', 'Encrypted memory'),
(174, '12', '5c4452b7a68aa', '38', '', 'A three input NOR gate gives logic high output only when', 'all input are high', 'one input is high ', 'one input is low', 'two input are low '),
(175, '12', '5c4452b7a68aa', '39', '', 'which of this is correct about a three input AND gate output', '+ + +', '+ - +', '- + +', '- - +'),
(176, '12', '5c4452b7a68aa', '40', '', 'The main memory in a Personal Computer', 'static RAM', 'Dynamic RAM', 'Hard disc', 'memory card'),
(177, '12', '5c4452b7a68aa', '41', '', 'An example of a secondary memory is', 'Servers', 'hard disk', 'RAM', 'registers'),
(178, '12', '5c4452b7a68aa', '42', '', 'The memory found in a processor is called', 'Registers', ' servers', 'primary memory', 'hard disk'),
(179, '12', '5c4452b7a68aa', '43', '', 'OLED stands for ', 'organic light emitting diode', 'organic liquid emitting diode', 'organic liquid emitting data', 'organic light emitting data'),
(180, '12', '5c4452b7a68aa', '44', '', '_________ register keeps tracks of the instructions stored in program stored in', 'PC (Program Counter)', 'AR (Address Register)', 'XR (Index Register)', 'AC (Accumulator)'),
(181, '12', '5c4452b7a68aa', '45', '', 'Logic gates with a set of input and outputs is arrangement of', 'Combinational circuit ', 'Logic circuit', 'Design circuits', 'Register'),
(182, '12', '5c4452b7a68aa', '46', '', 'The circuit converting binary data in to decimal is', 'Code converter', 'Decoder', 'Multiplexer', 'Encoder'),
(183, '12', '5c4452b7a68aa', '47', '', 'IP stands for', 'internet protocol', 'internal protocol', 'internet personality', 'internet position'),
(184, '12', '5c4452b7a68aa', '48', '', 'GPS stands for', 'Global positioning system', 'general pc systems', 'Global position settings', 'General post-marking standards'),
(185, '12', '5c4452b7a68aa', '49', '', 'Which type of switching uses the entire capacity of a dedicated link?', 'message switching', 'virtual circuit packet switching', 'datagram packet switching', 'circuit switching'),
(186, '12', '5c4452b7a68aa', '50', '', 'an example of wireless network component is ', 'wireless fidelity', 'wireless Ethernet ', 'rj45', 'fiber optics'),
(187, '12', '5c4452b7a68aa', '51', '', 'Military vehicles on a battlefield with no existing infrastructure will deploy â€¦â€¦â€¦â€¦â€¦ network', 'MANET', 'Cell Network', 'LAN', 'Cell Network'),
(188, '12', '5c4452b7a68aa', '52', '', 'A type of internet that can be accessed only in an area ls called', 'intranet', 'local area internet (LAI)', 'world wide web', 'website'),
(189, '12', '5c4452b7a68aa', '53', '', 'A normal Flooding technique is an example of ', 'Broadcasting', 'Multicasting', 'Unicasting', 'Telecasting'),
(190, '12', '5c4452b7a68aa', '54', '', 'The processes that keep track of all mobile hosts visiting the area is', 'Foreign agent', 'Home agent', 'Mobile agent', 'User agent'),
(191, '12', '5c4452b7a68aa', '55', '', 'The router algorithm takes the decision to changes the route when â€¦â€¦â€¦â€¦â€¦..', 'topology changes', 'router changes', 'transmission time does not change', 'user changes'),
(192, '12', '5c4452b7a68aa', '56', '', 'one of this is not an example of network topology', 'multiple star topology', 'bus topology', 'ring topology', 'tree topology'),
(193, '12', '5c4452b7a68aa', '57', '', 'USB stands for', 'Universal serial bus', 'united standards for bus connection', 'University serial bus', 'universal serial base'),
(194, '12', '5c4452b7a68aa', '58', '', 'The difference between an IP address and a mac address is that IP address is a _______________ address', 'software ', 'hardware ', 'permanent ', 'dedicated '),
(195, '12', '5c4452b7a68aa', '59', '', 'there are how many classes of IP address ', '5', '6', '4', '7'),
(196, '12', '5c4452b7a68aa', '60', '', 'Which is used for manufacturing chips?', 'Semiconductors', 'copper wire', 'gold', 'mercury'),
(197, '12', '5c4452b7a68aa', '61', '', 'Todayâ€™s computer giant IBM was earlier known by different name which was changes in 1924. What was that name?', 'Computing Tabulating Recording Co', 'Tabulator Machine Co.', 'The Tabulator Ltd', 'International Computer Ltd.'),
(198, '12', '5c4452b7a68aa', '62', '', 'ATM stands for', 'automated teller machine', 'automated turn-out money', 'automatic teller machine', 'automatic transfer management '),
(199, '12', '5c4452b7a68aa', '63', '', 'one of this is a type of dedicated processor', '3d graphics card', 'central processing unit', 'mother board ', 'head sink'),
(200, '12', '5c4452b7a68aa', '64', '', '________ is used to power the bios chip', 'CMOS', 'power pack', 'power jack', 'native power supply'),
(201, '12', '5c4452b7a68aa', '65', '', 'the language majorly used in designing a web page is ', 'HTML', 'PHP', 'JSON', 'x-code'),
(202, '12', '5c4452b7a68aa', '66', '', 'x-code is related to', 'IOS', 'android', 'windows', 'Linux'),
(203, '12', '5c4452b7a68aa', '67', '', 'Linux OS is best used for ', 'networking', 'regular operation ', 'programming ', 'cad'),
(204, '12', '5c4452b7a68aa', '68', '', 'an example of CAD software is ', '3dx max', 'Codeblock', 'Microsoft power point', 'photoshop'),
(205, '12', '5c4452b7a68aa', '69', '', 'MATlab stands for', 'matrix labouratory', 'mathematics labouratory', 'matrics labour', 'matris label'),
(206, '12', '5c4452b7a68aa', '70', '', 'A real time machine is a machine that', 'gives output immediately it receives input', 'receives input from different sources at the same time', 'can give output to different source at the same time', 'can process input faster than it gives output'),
(207, '12', '5c4452b7a68aa', '71', '', 'one of the following is a not brand of processor', 'Arduino', 'AMD', 'ARM', 'intel'),
(208, '12', '5c4452b7a68aa', '72', '', 'an example of presentation software is ', 'Microsoft power point', 'Microsoft words', 'presentation page', 'quick present'),
(209, '12', '5c4452b7a68aa', '73', '', 'All of these people are scholars in computer science except', 'Donald Dre', 'Allen smith', 'jack Dorsey', 'Larry page'),
(210, '12', '5c4452b7a68aa', '74', '', 'one of this is not an  example of data base is ', 'Microsoft font page', 'mySQL', 'oracle', 'Microsoft Access'),
(211, '12', '5c4452b7a68aa', '75', '', 'structured query language is associated to', 'Database', 'Cisco router ', 'all software ', 'word processing'),
(212, '12', '5c4452b7a68aa', '76', '', 'which of the following program is used to program a processor', 'Assembly language', 'low level language', 'high level language', 'machine language'),
(213, '12', '5c4452b7a68aa', '77', '', 'all of this are associated to the internet except ', 'command prompt', 'domain name', 'WWW', 'SSL'),
(214, '12', '5c4452b7a68aa', '78', '', 'Command prompt is a ', 'command area', 'game software ', 'desktop optimizer', 'image processor'),
(215, '12', '5c4452b7a68aa', '79', '', 'one of this software can be used for signal processing', 'matlab', 'media player', 'fire fox', 'adobe reader'),
(216, '12', '5c4452b7a68aa', '80', '', 'all but one are extension for image file', 'docx', 'jpg', 'png', 'gif'),
(217, '12', '5c4452b7a68aa', '81', '', 'the extension file for most windows virus is ', '.bat', '.pmp', '.xlss', '.csv'),
(218, '12', '5c4452b7a68aa', '82', '', 'one of this is not  among the uses of a spread sheet', 'sending emails', 'balancing account', 'computing result', 'preparing budget '),
(219, '12', '5c4452b7a68aa', '83', '', 'the spread sheet from Microsoft is', 'excel', 'access', 'outlook', 'publisher'),
(220, '12', '5c4452b7a68aa', '84', '', 'SSL stands for', 'secured socket layer', 'secured segmented layer', 'secured socked level', 'structured segement layer'),
(221, '12', '5c4452b7a68aa', '85', '', 'the following are brand of dedicated  gaming laptop except', 'macbook pro', 'MSI', 'RAZOR', 'alien were'),
(222, '12', '5c4452b7a68aa', '86', '', 'one of the major requirement of a gaming laptop is ', 'high graphics ', 'high internal power ', 'high sound power', 'high bus transfer power'),
(223, '12', '5c4452b7a68aa', '87', '', 'convert 24 (base 10) to hexadecimal', '0018', '0016', '0000017', '11000'),
(224, '12', '5c4452b7a68aa', '88', '', 'convert 100 (base 2) to hexadecimal', '0004', '0001F', '001000F', '11000F'),
(225, '12', '5c4452b7a68aa', '89', '', 'convert 300(base 10) binary', '100101100', '11111111000', '1111000000111', '1100110011'),
(226, '12', '5c4452b7a68aa', '90', '', 'The AX register has how many bit', '16bits', '12bits', '8bits', '4bits'),
(227, '12', '5c4452b7a68aa', '91', '', 'the process of forcefully gaining access to an unauthorized information is called ', 'hacking ', 'brute forcing', 'stealing ', 'tapping'),
(228, '12', '5c4452b7a68aa', '92', '', 'the type of processor mostly found in phones and tablets are', 'Arm', 'intel', 'amd', 'Motorola'),
(229, '12', '5c4452b7a68aa', '93', '', 'one of the following can be used in place of a monitor', 'projector', 'LED', 'digital display', 'ups'),
(230, '12', '5c4452b7a68aa', '94', '', 'which of this device prevents sudden break in power supply', 'UPS', 'NEPA', 'solar power supply', 'generator'),
(231, '12', '5c4452b7a68aa', '95', '', 'one of the following software is not needed by a computer programmer', 'Auto cad', 'netbeans', 'pycham', 'C++'),
(232, '12', '5c4452b7a68aa', '96', '', 'POS stands for', 'Point of sales', 'pay order services', 'pay offer services ', 'payment of services'),
(233, '12', '5c4452b7a68aa', '97', '', 'DB stands for', 'Data Base', 'Data Bank', 'data bus', 'data bound'),
(234, '12', '5c4452b7a68aa', '98', '', 'regarding a VDU, which of the following statement is more correct', 'it is a peripheral device', 'it is an hard ware item', 'it is an input device', ' it is a storage device'),
(235, '12', '5c4452b7a68aa', '99', '', 'the arrangement of data in a logical sequence is called ', 'sorting', 'classifying', 'reproducing', 'summarizing'),
(236, '12', '5c4452b7a68aa', '100', '', 'properly arranged data is called', 'information', 'file', 'words ', 'field'),
(339, '1', '5d774b70a13bd  ', '2', '', '<p>Find the value of x in the figure below.</p>\r\n\r\n<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/hh.JPG\" style=\"height:105px; width:199px\" /></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">20&radic;6 </span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">15&radic;6 </span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">5&radic;6 </span></span></p>', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">9&radic;20 </span></span></p>'),
(682, '5', '5def3dee34fe4', '1', '', '', '', '', '', ''),
(681, '57', '5ded88128062e', '40', '', '', '', '', '', ''),
(680, '57', '5ded88128062e', '39', '', '', '', '', '', ''),
(679, '57', '5ded88128062e', '38', '', '', '', '', '', ''),
(580, '1', '5d78be95e42f5                                           ', '39', '', '<p>&nbsp;1 &ndash; (a - b)<sup>2 </sup></p>', '<p>(1 &ndash; a - b)(1 &ndash; a - b)</p>', '<p>(1 &ndash; a + b)(1 + a - b)</p>', '<p>(1 &ndash; a + b)(1 &ndash; a + b)</p>', '<p>(1 &ndash; a - b)(1 + a - b)</p>'),
(581, '1', '5d78be95e42f5                                            ', '40', '', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/11.JPG\" style=\"height:115px; width:146px\" /></p>\r\n\r\n<p>In the frustum of a cone shown above, the top diameter is twice the bottom diameter. If the height of the frustum is h centimeters, find the height of the cone</p>', '<p>2h</p>', '<p>2<span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&pi;h</span></span></p>', '<p>&pi;h/2</p>', '<p>&pi;h</p>'),
(582, '1', '5d78be95e42f5', '41', '', '<p>The venn diagram below shows the number of students offering Music and History in a class of 80 students. If a student is picked at random from the class, what is the probability that he offers Music only?</p>\r\n\r\n<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/12.JPG\" style=\"height:79px; width:185px\" /></p>', '<p>0.13</p>', '<p>0.25</p>', '<p>0.38</p>', '<p>0.16</p>'),
(583, '1', '5d78be95e42f5 ', '42', '', '<p>&nbsp;A chord of a circle subtends an angle of 1200 at the centre of a circle of diameter 4&Ouml;3cm. Calculate the area of the major sector</p>', '<p>32&pi;cm<sup>2</sup></p>', '<p>62&pi;cm<sup>2</sup></p>', '<p>42&pi;cm<sup>2</sup></p>', '<p>55&pi;cm<sup>2</sup></p>'),
(584, '1', '5d78be95e42f5  ', '43', '', '<p>&nbsp;Find the variance of 2, 6, 8, 6, 2 and 6</p>', '<p>&radic;5</p>', '<p>&radic;6</p>', '<p>6</p>', '<p>5</p>'),
(585, '1', '5d78be95e42f5   ', '44', '', '<p>If P = <span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190911195939-1.png\" style=\"height:48px; width:42px\" /> then -2p = </span></span></span></span></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190911200050-2.png\" style=\"height:48px; width:58px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190911200153-3.png\" style=\"height:48px; width:58px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190911200402-5.png\" style=\"height:48px; width:58px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190911200253-4.png\" style=\"height:48px; width:58px\" /></p>'),
(586, '1', '5d78be95e42f5    ', '45', '', '<p>Evaluate&nbsp; <span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><em><span style=\"font-family:&quot;Cambria Math&quot;,serif\"><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190911200648-1.png\" style=\"height:36px; width:78px\" /></span></em></span></span></p>', '<p>&nbsp;-3/3</p>', '<p>6</p>', '<p>11</p>', '<p>21</p>'),
(587, '1', '5d78be95e42f5        ', '46', '', '<p>from the table below</p>\r\n\r\n<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/13.JPG\" style=\"height:171px; width:306px\" /></p>\r\n\r\n<p>&nbsp;find the mode of the distribution</p>', '<p>3.2</p>', '<p>3.4</p>', '<p>3.7</p>', '<p>4.2</p>'),
(588, '1', '5d78be95e42f5       ', '47', '', '<p>from the table below</p>\r\n\r\n<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/13.JPG\" style=\"height:171px; width:306px\" /></p>\r\n\r\n<p>The median of the distribution is</p>', '<p>4.0</p>', '<p>3.5</p>', '<p>3.2</p>', '<p>3.0</p>'),
(589, '1', '5d78be95e42f5         ', '48', '', '<p>The variance of the scores 1,2,3,4,5 is</p>', '<p>1.2</p>', '<p>1.4</p>', '<p>3.0</p>', '<p>3.1</p>'),
(590, '1', '5d78be95e42f5          ', '49', '', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190911201619-1.png\" style=\"height:100px; width:170px\" /></p>\r\n\r\n<p>The pie chart above shows the distribution of students in a secondary school class. If 30 students offered French, how many offered C.R.K?</p>', '<p>25</p>', '<p>15</p>', '<p>8</p>', '<p>10</p>'),
(591, '1', '5d78be95e42f5           ', '50', '', '<p>Evaluate 64.764<sup>2</sup> &ndash; 35.236<sup>2</sup> correct to 3 significant figures</p>', '<p>&nbsp;29.60</p>', '<p>&nbsp;29.80</p>', '<p>&nbsp;29.20</p>', '<p>&nbsp;29.90</p>'),
(592, '1', '5d78be95e42f5', '51', '', '<p>&nbsp;Make y the subject of the formula&nbsp; Z = x<sup>2</sup> + 1/y<sup>3 </sup></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912191727-1.png\" style=\"height:29px; width:66px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912191810-2.png\" style=\"height:39px; width:104px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912191841-3.png\" style=\"height:37px; width:103px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912191946-4.png\" style=\"height:37px; width:127px\" /></p>'),
(593, '1', '5d78be95e42f5 ', '52', '', '<p>simplify <img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912192226-1.png\" style=\"height:41px; width:154px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912192431-2.png\" style=\"height:48px; width:134px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912192504-3.png\" style=\"height:33px; width:96px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912192607-4.png\" style=\"height:37px; width:76px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912192644-5.png\" style=\"height:42px; width:82px\" /></p>'),
(678, '57', '5ded88128062e', '37', '', '', '', '', '', ''),
(677, '57', '5ded88128062e', '36', '', '', '', '', '', ''),
(676, '57', '5ded88128062e', '35', '', '', '', '', '', ''),
(675, '57', '5ded88128062e', '34', '', '', '', '', '', ''),
(674, '57', '5ded88128062e', '33', '', '', '', '', '', ''),
(672, '57', '5ded88128062e', '31', '', '', '', '', '', ''),
(673, '57', '5ded88128062e', '32', '', '', '', '', '', ''),
(671, '57', '5ded88128062e', '30', '', '', '', '', '', ''),
(670, '57', '5ded88128062e', '29', '', '', '', '', '', ''),
(669, '57', '5ded88128062e', '28', '', '', '', '', '', ''),
(668, '57', '5ded88128062e', '27', '', '', '', '', '', ''),
(667, '57', '5ded88128062e', '26', '', '', '', '', '', ''),
(666, '57', '5ded88128062e', '25', '', '', '', '', '', ''),
(665, '57', '5ded88128062e', '24', '', '', '', '', '', ''),
(664, '57', '5ded88128062e', '23', '', '', '', '', '', ''),
(663, '57', '5ded88128062e', '22', '', '', '', '', '', ''),
(662, '57', '5ded88128062e', '21', '', '', '', '', '', ''),
(661, '57', '5ded88128062e', '20', '', '', '', '', '', ''),
(660, '57', '5ded88128062e', '19', '', '', '', '', '', ''),
(659, '57', '5ded88128062e', '18', '', '', '', '', '', ''),
(658, '57', '5ded88128062e', '17', '', '', '', '', '', ''),
(657, '57', '5ded88128062e', '16', '', '', '', '', '', ''),
(656, '57', '5ded88128062e', '15', '', '', '', '', '', ''),
(655, '57', '5ded88128062e', '14', '', '', '', '', '', ''),
(654, '57', '5ded88128062e', '13', '', '', '', '', '', ''),
(653, '57', '5ded88128062e', '12', '', '', '', '', '', ''),
(652, '57', '5ded88128062e', '11', '', '', '', '', '', ''),
(651, '57', '5ded88128062e', '10', '', '', '', '', '', ''),
(650, '57', '5ded88128062e', '9', '', '', '', '', '', ''),
(649, '57', '5ded88128062e', '8', '', '', '', '', '', ''),
(648, '57', '5ded88128062e', '7', '', '', '', '', '', ''),
(647, '57', '5ded88128062e', '6', '', '', '', '', '', ''),
(646, '57', '5ded88128062e', '5', '', '', '', '', '', ''),
(645, '57', '5ded88128062e', '4', '', '', '', '', '', ''),
(644, '57', '5ded88128062e', '3', '', '', '', '', '', ''),
(643, '57', '5ded88128062e', '2', '', '', '', '', '', ''),
(601, '1', '5d78be95e42f5           ', '60', '', '<p>The locus of a point which is equidistant from two given fixed points is the</p>', '<p>&nbsp;perpendicular bisector of the straight line joining them</p>', '<p>transverse to the straight line joining them</p>', '<p>parallel line to the straight line joining them</p>', '<p>angle bisector of 900 which the straight line joining them makes with the horizontal</p>'),
(600, '1', '5d78be95e42f5          ', '59', '', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912221630-1.png\" style=\"height:114px; width:236px\" /></p>\r\n\r\n<p>Find the value of l in the frustum above.</p>', '<p>5cm</p>', '<p>3cm</p>', '<p>15cm</p>', '<p>67m</p>'),
(599, '1', '5d78be95e42f5', '58', '', '<p>How many 2&radic;2cm diameter discs can be cut out of a sheet of cardboard 218&radic;2p3/4cm long and&nbsp; p1/2cm wide?</p>', '<p>4<sup>9</sup></p>', '<p>&nbsp;21<sup>7</sup>p<sup>3</sup>/4(&radic;2p + 2)</p>', '<p>2<sup>10</sup>p<sup>3</sup>/4(&radic;1+2)</p>', '<p>2<sup>9</sup>(&radic;2 + 1)</p>'),
(598, '1', '5d78be95e42f5        ', '57', '', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912220101-1.png\" style=\"height:154px; width:295px\" /></p>\r\n\r\n<p>In the figure above find the angle x</p>', '<p>100<sup>0</sup></p>', '<p>120<sup>0</sup></p>', '<p>110<sup>0</sup></p>', '<p>140<sup>0</sup></p>'),
(597, '1', '5d78be95e42f5       ', '56', '', '<p>What is the nth term of the progression 27, 9,3,&hellip;&hellip;&hellip;..?</p>', '<p>27(1/3)<sup>n &ndash; 1</sup></p>', '<p>3<sup>n + 2</sup></p>', '<p>27 + 6(n - 1)</p>', '<p>27 + 18(n - 1)</p>'),
(596, '1', '5d78be95e42f5     ', '55', '', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912215224-1.png\" style=\"height:163px; width:307px\" /></p>\r\n\r\n<p>In the figure above PS = QS and QSR = 100<sup>0</sup>, find QPR</p>', '<p>40<sup>0</sup></p>', '<p>80<sup>0</sup></p>', '<p>100<sup>0</sup></p>', '<p>60<sup>0</sup></p>'),
(595, '1', '5d78be95e42f5    ', '54', '', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912212343-1.png\" style=\"height:174px; width:279px\" /></p>\r\n\r\n<p>OXYZW is a pyramid with a square base such that OX = OY = OZ = OW = 5cm and XY = XW = YZ = WZ = 6cm. Find the height OT.</p>', '<p>2&radic;5</p>', '<p>4</p>', '<p>3</p>', '<p>&radic;7</p>'),
(594, '1', '5d78be95e42f5   ', '53', '', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912192748-1.png\" style=\"height:46px; width:147px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912192815-2.png\" style=\"height:45px; width:52px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912192842-3.png\" style=\"height:49px; width:59px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912192937-5.png\" style=\"height:60px; width:59px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190912192908-4.png\" style=\"height:37px; width:63px\" /></p>'),
(338, '1', '5d774b70a13bd ', '1', '', '<p>PQRSTV is a regular polygon of side 7cm inscribed in a circle. Find the circumference of the circle PQRSTV.</p>', '<p>22cm</p>', '<p>42cm</p>', '<p>44cm</p>', '<p>64cm</p>'),
(579, '1', '5d78be95e42f5                                          ', '38', '', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/10.JPG\" style=\"height:255px; width:191px\" /></p>\r\n\r\n<p>Find the volume of the figure above.</p>', '<p>pa 2/3</p>', '<p>pa 2/3(y + x)</p>', '<p>&nbsp;(1/3pa<sup>2</sup> x + y)</p>', '<p>&nbsp;pa<sup>2</sup>y</p>'),
(578, '1', '5d78be95e42f5                                         ', '37', '', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/9.JPG\" style=\"height:133px; width:171px\" /></p>\r\n\r\n<p>In the figure above, XYZ is a triangle with XY = 5cm, XZ = 2cm and XZ is produced to E making the angle YZE = 1500. if the angle XYZ = &egrave;, calculate the value of the sin &egrave;.</p>', '<p>&nbsp;3/5</p>', '<p>&nbsp;1/5</p>', '<p>2/5</p>', '<p>7/90</p>'),
(570, '1', '5d78be95e42f5                                 ', '29', '', '<p>If x : y = 5:12 and z = 52cm, find the perimeter of the triangle.</p>\r\n\r\n<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/8.JPG\" style=\"height:121px; width:254px\" /></p>', '<p>24cm</p>', '<p>84cm</p>', '<p>23cm</p>', '<p>56cm</p>'),
(571, '1', '5d78be95e42f5                                  ', '30', '', '<p>In a family of 21 people, the average age is 14years. If the age of the grandfather is not counted, the average age drops to 12years. What is the age of the grandfather?</p>', '<p>35years</p>', '<p>45years</p>', '<p>55years</p>', '<p>65years</p>'),
(572, '1', '5d78be95e42f5                                   ', '31', '', '<p>&nbsp;The pilot of an aeroplane, flying 10km above the ground in the direction of a landmark, views the landmark to have angle of depression of 35<sup>0</sup> and 55<sup>0</sup>. find the distance between the two points of observation</p>', '<p>&nbsp;10(sin 35<sup>0</sup> &ndash; sin 55<sup>0</sup>)</p>', '<p>&nbsp;10(cos 35<sup>0</sup> &ndash; cos 55<sup>0</sup>)</p>', '<p>10(tan 35<sup>0</sup> &ndash; tan 55<sup>0</sup>)</p>', '<p>10(cot 35<sup>0</sup> &ndash; cot 55<sup>0</sup>)</p>'),
(573, '1', '5d78be95e42f5                                    ', '32', '', '<p>&nbsp;A square tile has side 30cm. How many of these tiles cover a rectangular floor of length 7.2cm and width 4.2m?</p>', '<p>345</p>', '<p>456</p>', '<p>347</p>', '<p>400</p>'),
(574, '1', '5d78be95e42f5                                     ', '33', '', '<p>&nbsp;Find n if 34<sub>n</sub> = 10011<sub>2</sub></p>\r\n\r\n<p>&nbsp;</p>', '<p>5</p>', '<p>6</p>', '<p>7</p>', '<p>8</p>'),
(575, '1', '5d78be95e42f5                                      ', '34', '', '<p>A farmer planted 5000 grains of maize and harvested 5000 cobs, each bearing 500 grains. What is the ratio of the number of grains sowed to the number harvested?</p>', '<p>&nbsp;1:500</p>', '<p>&nbsp;1:5000</p>', '<p>1:25000</p>', '<p>1:250000</p>'),
(576, '1', '5d78be95e42f5                                       ', '35', '', '<p>&nbsp;A market woman sells oils in cylindrical tins 10cm deep and 6cm diameter at #15.00 each. If she bought a full cylindrical jug 18cm deep and 10cm in diameter for #50.00, how much did she make by selling all the oil?</p>', '<p>&nbsp;#62.50</p>', '<p>#35.00</p>', '<p>#31.00</p>', '<p>#25.00</p>'),
(577, '1', '5d78be95e42f5                                        ', '36', '', '<p>Express in partial fractions <img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190911133618-1.png\" style=\"height:34px; width:79px\" /></p>', '<p>1/3x &ndash; 1 + 3/2x +</p>', '<p>3/3x + 1 &ndash; 1/2x &ndash; 1</p>', '<p>1/3x + 1 + 3/2x- 1</p>', '<p>3/3x &ndash; 1 &ndash; 1/2x + 1</p>'),
(342, '1', '5d774b70a13bd', '5', '', '<p>In the figure above, the area of the square PQRS is 100cm2. If the ratio of the area of the square TUYS to the area of the square XQVU is 1:16, find YR</p>\r\n\r\n<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/Captuffre.JPG\" style=\"height:152px; width:176px\" /></p>', '<p>6cm</p>', '<p>7cm</p>', '<p>8cm</p>', '<p>9cm</p>'),
(340, '1', '5d774b70a13bd   ', '3', '', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">In the diagram below, PQR is a straight line and PS is a tangent to the circle QRS with /PS/ = <span style=\"font-family:&quot;Cambria Math&quot;,serif\">&ang;</span>/SR/ and SPR = 400. find <span style=\"font-family:&quot;Cambria Math&quot;,serif\">&ang;</span>PSQ.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/fdf.JPG\" style=\"height:125px; width:162px\" /></span></span></p>', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><em><span style=\"font-family:&quot;Cambria Math&quot;,serif\">20&deg;</span></em></span></span></p>', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><em><span style=\"font-family:&quot;Cambria Math&quot;,serif\">30&deg;</span></em></span></span></p>', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><em><span style=\"font-family:&quot;Cambria Math&quot;,serif\">40&deg;</span></em></span></span></p>', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><em><span style=\"font-family:&quot;Cambria Math&quot;,serif\">50&deg;</span></em></span></span></p>'),
(341, '1', '5d774b70a13bd    ', '4', '', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">In the diagram below, the base diameters is 14cm while the height is 12cm. Calculate the total surface area if the cylinder has both a base and a top (p = 22/7)</span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190910160107-1.png\" style=\"height:101px; width:112px\" /></span></span></p>', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><em><span style=\"font-family:&quot;Cambria Math&quot;,serif\"><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190910160333-2.png\" style=\"height:19px; width:42px\" /></span></em></span></span></p>', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><em><span style=\"font-family:&quot;Cambria Math&quot;,serif\"><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190910160433-3.png\" style=\"height:19px; width:42px\" /></span></em></span></span></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190910160510-4.png\" style=\"height:19px; width:50px\" /></p>', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><em><span style=\"font-family:&quot;Cambria Math&quot;,serif\"><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190910160547-5.png\" style=\"height:19px; width:50px\" /></span></em></span></span></p>'),
(569, '1', '5d78be95e42f5                                ', '28', '', '<p>&nbsp;The table below gives the scores of a group of students in a Mathematics test</p>\r\n\r\n<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/7.JPG\" style=\"height:41px; width:279px\" /></p>\r\n\r\n<p>If the mode is m and the number of students who scored 4 or less is S. What is (s, m)?</p>', '<p>&nbsp;(27,4 )</p>', '<p>&nbsp;(13,4 )</p>', '<p>&nbsp;(27,8 )</p>', '<p>&nbsp;(37,4 )</p>'),
(568, '1', '5d78be95e42f5                               ', '27', '', '<p>If U and V are two distinct fixed points and W is a variable point such that UWV is a straight angle. What is the locus of W?</p>', '<p>The perpendicular bisector of UV</p>', '<p>A circle with UV as radius</p>', '<p>A line parallel to the line UV</p>', '<p>A circle with the line&nbsp; UV as the diameter</p>'),
(567, '1', '5d78be95e42f5                              ', '26', '', '<p>The figure is a solid with the trapezium PQRS as its uniform cross-section. Find its volume</p>\r\n\r\n<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/6.JPG\" style=\"height:189px; width:306px\" /></p>', '<p>102m<sup>3</sup></p>', '<p>166m<sup>3</sup></p>', '<p>545m<sup>3</sup></p>', '<p>34m<sup>3</sup></p>'),
(566, '1', '5d78be95e42f5                             ', '25', '', '<p>In 1984, Ike was 24 years old and is father was 45 years old in what year was Ike exactly half his father&rsquo;s age?</p>', '<p>1892</p>', '<p>1979</p>', '<p>1981</p>', '<p>1978</p>'),
(565, '1', '5d78be95e42f5                            ', '24', '', '<p>&nbsp;The ages of Tosan and Isa differ by 6 and the product of their ages is 187. write their ages in the form (x, y), where x &gt; y</p>', '<p>&nbsp;(12, 9)</p>', '<p>(23, 17)</p>', '<p>&nbsp;(18, 12)</p>', '<p>(17, 11)</p>'),
(564, '1', '5d78be95e42f5                           ', '23', '', '<p>&nbsp;The curve y = -x2 + 3x + 4 intersects the coordinate axes at</p>', '<p>(4,0)(0,0)(-1,0)</p>', '<p>(-4,0)(0,4)(1,1)</p>', '<p>&nbsp;(0,0)(0,1)(1,0)</p>', '<p>(0,4)(4,0)(-1,0)</p>'),
(563, '1', '5d78be95e42f5                          ', '22', '', '<p>Udoh deposited #150 00 in the bank. At the end of 5 years the simple interest on the principal was #55 00. At what rate per annum was the interest paid?</p>', '<p>11%</p>', '<p>10%</p>', '<p>5%</p>', '<p>18%</p>'),
(562, '1', '5d78be95e42f5                         ', '21', '', '<p>Simplify&nbsp; <span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><em><span style=\"font-family:&quot;Cambria Math&quot;,serif\">&nbsp;</span></em><em><span style=\"font-family:&quot;Cambria Math&quot;,serif\"> </span></em><em><span style=\"font-family:&quot;Cambria Math&quot;,serif\"><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190911130833-1.png\" style=\"height:34px; width:126px\" /></span></em><em><span style=\"font-family:&quot;Cambria Math&quot;,serif\"> </span></em></span></span></p>', '<p>&nbsp;3.6 x 10<sup>2</sup></p>', '<p>36 x 10<sup>2</sup></p>', '<p>3.6 x 10<sup>4</sup></p>', '<p>36 x 10<sup>4</sup></p>'),
(561, '1', '5d78be95e42f5                        ', '20', '', '<p>&nbsp;John gives one third of his money to Janet who has #105.00. He then finds that his money is reduced to one-fourth of what Janet now has. Find how much money John had at first.</p>', '<p>#45.00</p>', '<p>#48.00</p>', '<p>#52.00</p>', '<p>#60.00</p>'),
(560, '1', '5d78be95e42f5                       ', '19', '', '<p>Find correct to tow decimal places 100 + 1/100 + 3/1000 + 27/100</p>', '<p>100.02</p>', '<p>100.22</p>', '<p>1000.02</p>', '<p>100.01</p>'),
(559, '1', '5d78be95e42f5                      ', '18', '', '<p>Find x if Log<sub>5</sub>x = 1.5</p>', '<p>44.0</p>', '<p>72.0</p>', '<p>33.0</p>', '<p>18.9</p>'),
(558, '1', '5d78be95e42f5                     ', '17', '', '<p>In the equation below,&nbsp; solve for x if all the numbers are in base 2? 11/x = 1000/(x + 101)</p>', '<p>101</p>', '<p>11</p>', '<p>110</p>', '<p>111</p>'),
(557, '1', '5d78be95e42f5                    ', '16', '', '<p>&nbsp;A sum of money was invested at 8% per annum simple interest. If after 4years the money amounts to #330.00, find the amount originally invested.</p>', '<p>#180.00</p>', '<p>#165.00</p>', '<p>#150.00</p>', '<p>#250.00</p>'),
(556, '1', '5d78be95e42f5                   ', '15', '', '<p>&nbsp;Arrange the following numbers in ascending order of magnitude&nbsp;&nbsp;&nbsp; 6/7,13/15,0.865</p>', '<p>6/7 &lt; 0.865 &lt; 13/15</p>', '<p>&nbsp;6/7 &lt; 13/15 &lt; 0.865</p>', '<p>13/15 &lt; 6/7 &lt; 0.865</p>', '<p>13/15 &lt; 0.865 &lt; 6/7</p>'),
(555, '1', '5d78be95e42f5                  ', '14', '', '<p>&nbsp;Measurements of the diameters in centimeters of 20 copper spheres are distributed as shown below<br />\r\n&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Class boundary in cm frequency</td>\r\n			<td>frequency</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3.35-3.45</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3.45-3.55</td>\r\n			<td>6</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3.55-3.65</td>\r\n			<td>7</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3.65-3.75</td>\r\n			<td>4</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>What is the mean diameter of the copper sphere?</p>', '<p>3.40cm</p>', '<p>3.62cm</p>', '<p>3.56cm</p>', '<p>3.88cm</p>'),
(554, '1', '5d78be95e42f5                 ', '13', '', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/4.JPG\" style=\"height:187px; width:315px\" /></p>\r\n\r\n<p>The bar chart above shows the mark distribution in a class test. Find the number of students in the class.</p>', '<p>9</p>', '<p>12</p>', '<p>34</p>', '<p>18</p>'),
(553, '1', '5d78be95e42f5                ', '12', '', '<p>&nbsp;The sides of a triangle are (x + 4)cm, x cm and (x- 4) cm respectively. If the cosine of the largest angle is 1/5, find the value of x</p>', '<p>&nbsp;24cm</p>\r\n\r\n<p>&nbsp;</p>', '<p>20cm</p>', '<p>&nbsp;&nbsp; 0cm</p>', '<p>D. 88/7ccm</p>'),
(552, '1', '5d78be95e42f5              ', '11', '', '<p>&nbsp;One interior angle of a convex hexagon is 1700 and each of the remaining interior angles is equal to x0. find x</p>', '<p>110<sup>0</sup></p>', '<p>100<sup>0</sup></p>', '<p>770<sup>0</sup></p>', '<p>45<sup>0</sup></p>'),
(551, '1', '5d78be95e42f5             ', '10', '', '<p>Given a regular hexagon, calculate each interior angle of the hexagon.</p>', '<p>60<sup>0</sup></p>', '<p>70<sup>0</sup></p>', '<p>80<sup>0</sup></p>', '<p>90<sup>0</sup></p>'),
(550, '1', '5d78be95e42f5            ', '9', '', '<p>&nbsp;A construction company is owned by two partners X and Y and it is agreed that their profit will be divided in the ratio 4:5. at the end of the year. Y received #5,000 more than x. what is the total profit of the company for the year?</p>', '<p>#20,000.00</p>', '<p>P&rsquo;0#25,000.0o</p>', '<p>#30,000.00</p>', '<p>.#45,000.00</p>'),
(549, '1', '5d78be95e42f5           ', '8', '', '<p>&nbsp;Find the missing value in the following table.<br />\r\n<img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/3.JPG\" style=\"height:58px; width:316px\" /></p>', '<p>3</p>', '<p>-3</p>', '<p>-13</p>', '<p>13</p>'),
(548, '1', '5d78be95e42f5          ', '7', '', '<p>If O is the centre of the circle in the figure below. Find the value of x</p>\r\n\r\n<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/2.JPG\" style=\"height:134px; width:147px\" /></p>', '<p>3</p>', '<p>-3</p>', '<p>9</p>', '<p>-9</p>'),
(547, '1', '5d78be95e42f5         ', '6', '', '<p>PQRS is a desk of dimensions 2m x 0.8m which is inclined at 300 to the horizontal. Find the inclination of the diagonal PR to the horizontal.</p>\r\n\r\n<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/1.JPG\" style=\"height:196px; width:226px\" /></p>', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\"><em><span style=\"font-family:&quot;Cambria Math&quot;,serif\"><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190911124049-3.png\" style=\"height:19px; width:111px\" /></span></em></span></span></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190911123930-1.png\" style=\"height:19px; width:119px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190911124000-2.png\" style=\"height:19px; width:111px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/image-20190911124115-4.png\" style=\"height:19px; width:111px\" /></p>'),
(546, '1', '5d78be95e42f5        ', '5', '', '<p>&nbsp;If (2/3)m (3/4)n = 256/729, find thevalues of m and n</p>', '<p>&nbsp;m = 4, n = 2</p>', '<p>&nbsp;m = -4, n = -2</p>', '<p>m = -4, n = 2</p>', '<p>m = 4, n = -2</p>'),
(545, '1', '5d78be95e42f5       ', '4', '', '<p>&nbsp;If a rod of length 250cm is measured as 255cm longer in error, what is the percentage error in measurement?</p>', '<p>55</p>', '<p>10</p>', '<p>4</p>', '<p>2</p>'),
(544, '1', '5d78be95e42f5      ', '3', '', '<p>The letters of the word MATRICULATION are cut and put into a box. One of the letter is drawn at random from the box. Find the probability of drawing a vowel.</p>\r\n\r\n<p>&nbsp;</p>', '<p>2/13</p>', '<p>5/13</p>', '<p>7/13</p>', '<p>10/13</p>'),
(543, '1', '5d78be95e42f5     ', '2', '', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Solve the following equations 4x &ndash; 3 = 3x + y = 2y + 5x &ndash; 12</span></span></p>', '<p>&nbsp; 4x = 5, y = 2</p>', '<p>x = 2, y = 5</p>', '<p>x = 5, y = 2 &nbsp;</p>', '<p>x = 5, y = -2</p>'),
(542, '1', '5d78be95e42f5    ', '1', '', '<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">If M represents the median and D the mode of the measurements 5, 9, 3, 5, 8 then (M,D) is</span></span></p>', '<p>(6,5)</p>', '<p>(5,5)</p>', '<p>(4,7)</p>', '<p>(3,3)</p>'),
(642, '57', '5ded88128062e', '1', '', '', '', '', '', ''),
(683, '5', '5def3dee34fe4', '2', '', '', '', '', '', ''),
(684, '5', '5def3dee34fe4', '3', '', '', '', '', '', ''),
(685, '5', '5def3dee34fe4', '4', '', '', '', '', '', ''),
(686, '5', '5def3dee34fe4', '5', '', '', '', '', '', ''),
(687, '5', '5def3dee34fe4', '6', '', '', '', '', '', ''),
(688, '5', '5def3dee34fe4', '7', '', '', '', '', '', ''),
(689, '5', '5def3dee34fe4', '8', '', '', '', '', '', ''),
(690, '5', '5def3dee34fe4', '9', '', '', '', '', '', ''),
(691, '5', '5def3dee34fe4', '10', '', '', '', '', '', ''),
(692, '5', '5def3dee34fe4', '11', '', '', '', '', '', ''),
(693, '5', '5def3dee34fe4', '12', '', '', '', '', '', ''),
(694, '5', '5def3dee34fe4', '13', '', '', '', '', '', ''),
(695, '5', '5def3dee34fe4', '14', '', '', '', '', '', ''),
(696, '5', '5def3dee34fe4', '15', '', '', '', '', '', ''),
(697, '5', '5def421e332f5    ', '1', '', '<p>rsvsv</p>', '<p>svs</p>', '<p>svsv</p>', '<p>svsv</p>', '<p>svs</p>'),
(698, '5', '5def421e332f5   ', '2', '', '<p>sdvs</p>', '<p>dbd</p>', '<p>bffdd</p>', '<p>svsv</p>', '<p>svsv</p>'),
(699, '5', '5def421e332f5', '3', '', '', '', '', '', ''),
(700, '5', '5def421e332f5', '4', '', '', '', '', '', ''),
(701, '5', '5def421e332f5', '5', '', '', '', '', '', ''),
(702, '5', '5def43dfe4e00', '1', '', '', '', '', '', ''),
(703, '5', '5def43dfe4e00', '2', '', '', '', '', '', ''),
(704, '5', '5def43dfe4e00', '3', '', '', '', '', '', ''),
(705, '5', '5def44509966c', '1', '', '', '', '', '', ''),
(706, '5', '5def44509966c', '2', '', '', '', '', '', ''),
(707, '5', '5def44509966c', '3', '', '', '', '', '', ''),
(708, '5', '5def44f343759 ', '1', '', '<p>ddd</p>', '<p>ddd</p>', '<p>ddd</p>', '<p>ddd</p>', '<p>ddd</p>'),
(709, '5', '5def44f343759  ', '2', '', '<p>the author of the song letters from the skys</p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/1459288145253.jpg\" style=\"height:100px; width:100px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/ZepZgaug.jpg\" style=\"height:100px; width:100px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/index.png\" style=\"height:100px; width:100px\" /></p>', '<p><img alt=\"\" src=\"/etest2/staff/ckeditor/kcfinder/upload/images/54446716_139430587107022_6487291266311944245_n.jpg\" style=\"height:100px; width:100px\" /></p>'),
(710, '5', '5e09e2f46fbdf', '1', '', '', '', '', '', ''),
(711, '5', '5e09e2f46fbdf', '2', '', '', '', '', '', ''),
(712, '5', '5e09e2f46fbdf', '3', '', '', '', '', '', ''),
(713, '5', '5e09e2f46fbdf', '4', '', '', '', '', '', ''),
(714, '5', '5e09e2f46fbdf', '5', '', '', '', '', '', ''),
(715, '5', '5e09e2f46fbdf', '6', '', '', '', '', '', ''),
(716, '5', '5e09e2f46fbdf', '7', '', '', '', '', '', ''),
(717, '5', '5e09e2f46fbdf', '8', '', '', '', '', '', ''),
(718, '5', '5e09e2f46fbdf', '9', '', '', '', '', '', ''),
(719, '5', '5e09e2f46fbdf', '10', '', '', '', '', '', '');
INSERT INTO `questions` (`sn`, `subject_id`, `exam_code`, `que_id`, `type`, `question`, `answer`, `option1`, `option2`, `option3`) VALUES
(720, '5', '5e09e2f46fbdf', '11', '', '', '', '', '', ''),
(721, '5', '5e09e2f46fbdf', '12', '', '', '', '', '', ''),
(722, '5', '5e09e2f46fbdf', '13', '', '', '', '', '', ''),
(723, '5', '5e09e2f46fbdf', '14', '', '', '', '', '', ''),
(724, '5', '5e09e2f46fbdf', '15', '', '', '', '', '', ''),
(725, '5', '5e09e2f46fbdf', '16', '', '', '', '', '', ''),
(726, '5', '5e09e2f46fbdf', '17', '', '', '', '', '', ''),
(727, '5', '5e09e2f46fbdf', '18', '', '', '', '', '', ''),
(728, '5', '5e09e2f46fbdf', '19', '', '', '', '', '', ''),
(729, '5', '5e09e2f46fbdf', '20', '', '', '', '', '', ''),
(730, '5', '5e09e2f46fbdf', '21', '', '', '', '', '', ''),
(731, '5', '5e09e2f46fbdf', '22', '', '', '', '', '', ''),
(732, '5', '5e09e2f46fbdf', '23', '', '', '', '', '', ''),
(733, '5', '5e09e2f46fbdf', '24', '', '', '', '', '', ''),
(734, '5', '5e09e2f46fbdf', '25', '', '', '', '', '', ''),
(735, '5', '5e09e2f46fbdf', '26', '', '', '', '', '', ''),
(736, '5', '5e09e2f46fbdf', '27', '', '', '', '', '', ''),
(737, '5', '5e09e2f46fbdf', '28', '', '', '', '', '', ''),
(738, '5', '5e09e2f46fbdf', '29', '', '', '', '', '', ''),
(739, '5', '5e09e2f46fbdf', '30', '', '', '', '', '', ''),
(740, '5', '5e09e2f46fbdf', '31', '', '', '', '', '', ''),
(741, '5', '5e09e2f46fbdf', '32', '', '', '', '', '', ''),
(742, '5', '5e09e2f46fbdf', '33', '', '', '', '', '', ''),
(743, '5', '5e09e2f46fbdf', '34', '', '', '', '', '', ''),
(744, '5', '5e09e2f46fbdf', '35', '', '', '', '', '', ''),
(745, '5', '5e09e2f46fbdf', '36', '', '', '', '', '', ''),
(746, '5', '5e09e2f46fbdf', '37', '', '', '', '', '', ''),
(747, '5', '5e09e2f46fbdf', '38', '', '', '', '', '', ''),
(748, '5', '5e09e2f46fbdf', '39', '', '', '', '', '', ''),
(749, '5', '5e09e2f46fbdf', '40', '', '', '', '', '', ''),
(750, '5', '5e09e4efeda2c ', '1', '', '<p>who are you</p>', '<p>i am me</p>', '<p>not me</p>', '<p>always me</p>', '<p>good me</p>'),
(751, '5', '5e09e4efeda2c  ', '2', '', '<p>what is the capital of ondo state</p>', '<p>akure</p>', '<p>lagos</p>', '<p>usa</p>', '<p>london</p>'),
(752, '5', '5e09e4efeda2c   ', '3', '', '<p>where is ondo</p>', '<p>nigeria</p>', '<p>togo</p>', '<p>london</p>', '<p>usa</p>'),
(753, '5', '5e09e67184284 ', '1', '', '<p>where is ondo</p>', '<p>nigeria</p>', '<p>usa</p>', '<p>london</p>', '<p>eko</p>'),
(754, '5', '5e09e67184284  ', '2', '', '<p>what is pc</p>', '<p>personal computer</p>', '<p>psp</p>', '<p>wewd</p>', '<p>wwewwwew</p>'),
(755, '5', '5e09e67184284   ', '3', '', '<p>how are u</p>', '<p>fine</p>', '<p>dont no</p>', '<p>know</p>', '<p>no idea</p>'),
(756, '5', '5e1cafa93183c', '1', '', '', '', '', '', ''),
(757, '5', '5e1cafa93183c', '2', '', '', '', '', '', ''),
(758, '5', '5e1cafa93183c', '3', '', '', '', '', '', ''),
(759, '5', '5e1cafa93183c', '4', '', '', '', '', '', ''),
(760, '5', '5e1cafa93183c', '5', '', '', '', '', '', ''),
(761, '5', '5e1cafa93183c', '6', '', '', '', '', '', ''),
(762, '5', '5e1cafa93183c', '7', '', '', '', '', '', ''),
(763, '5', '5e1cafa93183c', '8', '', '', '', '', '', ''),
(764, '5', '5e1cafa93183c', '9', '', '', '', '', '', ''),
(765, '5', '5e1cafa93183c', '10', '', '', '', '', '', ''),
(766, '5', '5e1cafa93183c', '11', '', '', '', '', '', ''),
(767, '5', '5e1cafa93183c', '12', '', '', '', '', '', ''),
(768, '5', '5e1cafa93183c', '13', '', '', '', '', '', ''),
(769, '5', '5e1cafa93183c', '14', '', '', '', '', '', ''),
(770, '5', '5e1cafa93183c', '15', '', '', '', '', '', ''),
(771, '5', '5e1cafa93183c', '16', '', '', '', '', '', ''),
(772, '5', '5e1cafa93183c', '17', '', '', '', '', '', ''),
(773, '5', '5e1cafa93183c', '18', '', '', '', '', '', ''),
(774, '5', '5e1cafa93183c', '19', '', '', '', '', '', ''),
(775, '5', '5e1cafa93183c', '20', '', '', '', '', '', ''),
(776, '5', '5e1cafa93183c', '21', '', '', '', '', '', ''),
(777, '5', '5e1cafa93183c', '22', '', '', '', '', '', ''),
(778, '5', '5e1cafa93183c', '23', '', '', '', '', '', ''),
(779, '5', '5e1cafa93183c', '24', '', '', '', '', '', ''),
(780, '5', '5e1cafa93183c', '25', '', '', '', '', '', ''),
(781, '5', '5e1cafa93183c', '26', '', '', '', '', '', ''),
(782, '5', '5e1cafa93183c', '27', '', '', '', '', '', ''),
(783, '5', '5e1cafa93183c', '28', '', '', '', '', '', ''),
(784, '5', '5e1cafa93183c', '29', '', '', '', '', '', ''),
(785, '5', '5e1cafa93183c', '30', '', '', '', '', '', ''),
(786, '5', '5e1cafa93183c', '31', '', '', '', '', '', ''),
(787, '5', '5e1cafa93183c', '32', '', '', '', '', '', ''),
(788, '5', '5e1cafa93183c', '33', '', '', '', '', '', ''),
(789, '5', '5e1cafa93183c', '34', '', '', '', '', '', ''),
(790, '5', '5e1cafa93183c', '35', '', '', '', '', '', ''),
(791, '5', '5e1cafa93183c', '36', '', '', '', '', '', ''),
(792, '5', '5e1cafa93183c', '37', '', '', '', '', '', ''),
(793, '5', '5e1cafa93183c', '38', '', '', '', '', '', ''),
(794, '5', '5e1cafa93183c', '39', '', '', '', '', '', ''),
(795, '5', '5e1cafa93183c', '40', '', '', '', '', '', ''),
(796, '5', '5e1cafa93183c', '41', '', '', '', '', '', ''),
(797, '5', '5e1cafa93183c', '42', '', '', '', '', '', ''),
(798, '5', '5e1cafa93183c', '43', '', '', '', '', '', ''),
(799, '5', '5e1cafa93183c', '44', '', '', '', '', '', ''),
(800, '5', '5e1cafa93183c', '45', '', '', '', '', '', ''),
(801, '5', '5e1cafa93183c', '46', '', '', '', '', '', ''),
(802, '5', '5e1cafa93183c', '47', '', '', '', '', '', ''),
(803, '5', '5e1cafa93183c', '48', '', '', '', '', '', ''),
(804, '5', '5e1cafa93183c', '49', '', '', '', '', '', ''),
(805, '5', '5e1cafa93183c', '50', '', '', '', '', '', ''),
(806, '5', '5e1cafa93183c', '51', '', '', '', '', '', ''),
(807, '5', '5e1cafa93183c', '52', '', '', '', '', '', ''),
(808, '5', '5e1cafa93183c', '53', '', '', '', '', '', ''),
(809, '5', '5e1cafa93183c', '54', '', '', '', '', '', ''),
(810, '5', '5e1cafa93183c', '55', '', '', '', '', '', ''),
(811, '5', '5e1cafa93183c', '56', '', '', '', '', '', ''),
(812, '5', '5e1cafa93183c', '57', '', '', '', '', '', ''),
(813, '5', '5e1cafa93183c', '58', '', '', '', '', '', ''),
(814, '5', '5e1cafa93183c', '59', '', '', '', '', '', ''),
(815, '5', '5e1cafa93183c', '60', '', '', '', '', '', ''),
(816, '5', '5e1cafa93183c', '61', '', '', '', '', '', ''),
(817, '5', '5e1cafa93183c', '62', '', '', '', '', '', ''),
(818, '5', '5e1cafa93183c', '63', '', '', '', '', '', ''),
(819, '5', '5e1cafa93183c', '64', '', '', '', '', '', ''),
(820, '5', '5e1cafa93183c', '65', '', '', '', '', '', ''),
(821, '5', '5e1cafa93183c', '66', '', '', '', '', '', ''),
(822, '5', '5e1cafa93183c', '67', '', '', '', '', '', ''),
(823, '5', '5e1cafa93183c', '68', '', '', '', '', '', ''),
(824, '5', '5e1cafa93183c', '69', '', '', '', '', '', ''),
(825, '5', '5e1cafa93183c', '70', '', '', '', '', '', ''),
(826, '5', '5e1cafa93183c', '71', '', '', '', '', '', ''),
(827, '5', '5e1cafa93183c', '72', '', '', '', '', '', ''),
(828, '5', '5e1cafa93183c', '73', '', '', '', '', '', ''),
(829, '5', '5e1cafa93183c', '74', '', '', '', '', '', ''),
(830, '5', '5e1cafa93183c', '75', '', '', '', '', '', ''),
(831, '5', '5e1cafa93183c', '76', '', '', '', '', '', ''),
(832, '5', '5e1cafa93183c', '77', '', '', '', '', '', ''),
(833, '5', '5e1cafa93183c', '78', '', '', '', '', '', ''),
(834, '5', '5e1cafa93183c', '79', '', '', '', '', '', ''),
(835, '5', '5e1cafa93183c', '80', '', '', '', '', '', ''),
(836, '5', '5e1cafa93183c', '81', '', '', '', '', '', ''),
(837, '5', '5e1cafa93183c', '82', '', '', '', '', '', ''),
(838, '5', '5e1cafa93183c', '83', '', '', '', '', '', ''),
(839, '5', '5e1cafa93183c', '84', '', '', '', '', '', ''),
(840, '5', '5e1cafa93183c', '85', '', '', '', '', '', ''),
(841, '5', '5e1cafa93183c', '86', '', '', '', '', '', ''),
(842, '5', '5e1cafa93183c', '87', '', '', '', '', '', ''),
(843, '5', '5e1cafa93183c', '88', '', '', '', '', '', ''),
(844, '5', '5e1cafa93183c', '89', '', '', '', '', '', ''),
(845, '5', '5e1cafa93183c', '90', '', '', '', '', '', ''),
(846, '5', '5e1cafa93183c', '91', '', '', '', '', '', ''),
(847, '5', '5e1cafa93183c', '92', '', '', '', '', '', ''),
(848, '5', '5e1cafa93183c', '93', '', '', '', '', '', ''),
(849, '5', '5e1cafa93183c', '94', '', '', '', '', '', ''),
(850, '5', '5e1cafa93183c', '95', '', '', '', '', '', ''),
(851, '5', '5e1cafa93183c', '96', '', '', '', '', '', ''),
(852, '5', '5e1cafa93183c', '97', '', '', '', '', '', ''),
(853, '5', '5e1cafa93183c', '98', '', '', '', '', '', ''),
(854, '5', '5e1cafa93183c', '99', '', '', '', '', '', ''),
(855, '5', '5e1cafa93183c', '100', '', '', '', '', '', ''),
(856, '5', '5e1de2f06cd48 ', '1', '', '<p>the great kahli is how old</p>', '<p>1</p>', '<p>2</p>', '<p>3</p>', '<p>4</p>'),
(857, '5', '5e1de2f06cd48  ', '2', '', '<p>little kahli is how many years old</p>', '<p>2</p>', '<p>3</p>', '<p>4</p>', '<p>5</p>'),
(858, '112', '5e1de4a024eba', '1', '', '', '', '', '', ''),
(859, '112', '5e1de4a024eba', '2', '', '', '', '', '', ''),
(860, '112', '5e1de4a024eba', '3', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `sn` int(11) NOT NULL,
  `resultid` varchar(20) NOT NULL,
  `score` varchar(11) NOT NULL,
  `score2` varchar(3) NOT NULL,
  `score3` varchar(3) NOT NULL,
  `score4` varchar(3) NOT NULL,
  `last` varchar(3) NOT NULL,
  `total` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `student` varchar(20) NOT NULL,
  `code` varchar(200) NOT NULL,
  `status` varchar(7) NOT NULL DEFAULT '0',
  `set_by` varchar(20) NOT NULL,
  `term` varchar(2) NOT NULL,
  `session` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`sn`, `resultid`, `score`, `score2`, `score3`, `score4`, `last`, `total`, `subject`, `student`, `code`, `status`, `set_by`, `term`, `session`) VALUES
(1, '8', '15', '', '', '', '', '', 'Christain Religious ', '19/002', 'ChriJSS1', '0', '', '3', '2022/2023'),
(2, '5', '', '', '', '', '', '', 'social Studies', '19/002', 'sociJSS1', '0', '', '3', '2022/2023'),
(3, '5', '', '', '', '', '', '', 'social Studies', '19/003', 'sociJSS1', '0', '', '3', '2022/2023'),
(4, '5', '', '', '', '', '', '', 'social Studies', '19/004', 'sociJSS1', '0', '', '3', '2022/2023'),
(5, '5', '', '', '', '', '', '', 'social Studies', '19/005', 'sociJSS1', '0', '', '3', '2022/2023'),
(6, '5', '', '', '', '', '', '', 'social Studies', '19/006', 'sociJSS1', '0', '', '3', '2022/2023'),
(7, '5', '', '', '', '', '', '', 'social Studies', '19/007', 'sociJSS1', '0', '', '3', '2022/2023'),
(8, '5', '', '', '', '', '', '', 'social Studies', '19/008', 'sociJSS1', '0', '', '3', '2022/2023'),
(9, '5', '', '', '', '', '', '', 'social Studies', '19/009', 'sociJSS1', '0', '', '3', '2022/2023'),
(10, '5', '', '', '', '', '', '', 'social Studies', '19/010', 'sociJSS1', '0', '', '3', '2022/2023'),
(11, '5', '', '', '', '', '', '', 'social Studies', '19/011', 'sociJSS1', '0', '', '3', '2022/2023'),
(12, '5', '', '', '', '', '', '', 'social Studies', '19/012', 'sociJSS1', '0', '', '3', '2022/2023'),
(13, '5', '', '', '', '', '', '', 'social Studies', '19/013', 'sociJSS1', '0', '', '3', '2022/2023'),
(14, '5', '', '', '', '', '', '', 'social Studies', '19/014', 'sociJSS1', '0', '', '3', '2022/2023'),
(15, '5', '', '', '', '', '', '', 'social Studies', '19/015', 'sociJSS1', '0', '', '3', '2022/2023'),
(16, '5', '', '', '', '', '', '', 'social Studies', '19/016', 'sociJSS1', '0', '', '3', '2022/2023'),
(17, '5', '', '', '', '', '', '', 'social Studies', '19/017', 'sociJSS1', '0', '', '3', '2022/2023'),
(18, '5', '', '', '', '', '', '', 'social Studies', '19/018', 'sociJSS1', '0', '', '3', '2022/2023'),
(19, '5', '', '', '', '', '', '', 'social Studies', '19/019', 'sociJSS1', '0', '', '3', '2022/2023'),
(20, '5', '', '', '', '', '', '', 'social Studies', '19/020', 'sociJSS1', '0', '', '3', '2022/2023'),
(21, '5', '', '', '', '', '', '', 'social Studies', '19/021', 'sociJSS1', '0', '', '3', '2022/2023'),
(22, '5', '', '', '', '', '', '', 'social Studies', '19/022', 'sociJSS1', '0', '', '3', '2022/2023'),
(23, '5', '', '', '', '', '', '', 'social Studies', '19/023', 'sociJSS1', '0', '', '3', '2022/2023'),
(24, '5', '', '', '', '', '', '', 'social Studies', '19/024', 'sociJSS1', '0', '', '3', '2022/2023'),
(25, '5', '', '', '', '', '', '', 'social Studies', '19/025', 'sociJSS1', '0', '', '3', '2022/2023'),
(26, '5', '', '', '', '', '', '', 'social Studies', '19/026', 'sociJSS1', '0', '', '3', '2022/2023'),
(27, '5', '', '', '', '', '', '', 'social Studies', '19/027', 'sociJSS1', '0', '', '3', '2022/2023'),
(28, '5', '', '', '', '', '', '', 'social Studies', '19/028', 'sociJSS1', '0', '', '3', '2022/2023'),
(29, '5', '', '', '', '', '', '', 'social Studies', '19/029', 'sociJSS1', '0', '', '3', '2022/2023'),
(30, '5', '', '', '', '', '', '', 'social Studies', '19/030', 'sociJSS1', '0', '', '3', '2022/2023'),
(31, '5', '', '', '', '', '', '', 'social Studies', '', 'sociJSS1', '0', '', '3', '2022/2023');

-- --------------------------------------------------------

--
-- Table structure for table `result_access`
--

CREATE TABLE `result_access` (
  `sn` int(11) NOT NULL,
  `status` varchar(3) NOT NULL,
  `jss3` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `result_access`
--

INSERT INTO `result_access` (`sn`, `status`, `jss3`) VALUES
(1, '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result_query`
--

CREATE TABLE `result_query` (
  `sn` int(11) NOT NULL,
  `result` varchar(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `result_query`
--

INSERT INTO `result_query` (`sn`, `result`, `status`) VALUES
(1, 'CA1', 1),
(2, 'CA2', 1),
(3, 'CA3', 1),
(4, 'ett', 1),
(5, 'last', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result_record`
--

CREATE TABLE `result_record` (
  `sn` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `session` varchar(10) NOT NULL,
  `term` varchar(3) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `code` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `subjectid` varchar(3) NOT NULL,
  `uniq` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `result_record`
--

INSERT INTO `result_record` (`sn`, `name`, `session`, `term`, `subject`, `code`, `type`, `subjectid`, `uniq`) VALUES
(1, 'Abioye Iyanu Damilola', '2022/2023', '3', 'Christain Religious Knowledge', 'ChriJSS1', 'CA1', '8', ''),
(2, 'ENGJSS1 test 3 result for 1st term of 2017/2018 session', '2022/2023', '3', 'social Studies', 'sociJSS1', 'CA1', '5', '');

-- --------------------------------------------------------

--
-- Table structure for table `sch_sys`
--

CREATE TABLE `sch_sys` (
  `sn` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `school_domain` varchar(50) NOT NULL,
  `m_firstname` varchar(50) NOT NULL,
  `m_lastname` varchar(50) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_position` varchar(50) NOT NULL,
  `school_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sn` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `title` varchar(5) NOT NULL,
  `username` varchar(200) NOT NULL,
  `employee` varchar(10) NOT NULL,
  `job_description` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `lga` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `salary_status` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `date_employed` varchar(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `nok` varchar(20) NOT NULL,
  `rnok` varchar(20) NOT NULL,
  `pnok` varchar(16) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `department` varchar(20) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `acc` varchar(15) NOT NULL,
  `last_update` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sn`, `fname`, `mname`, `lname`, `gender`, `title`, `username`, `employee`, `job_description`, `marital_status`, `address`, `phone`, `email`, `lga`, `state`, `country`, `salary_status`, `level`, `date_employed`, `picture`, `religion`, `nok`, `rnok`, `pnok`, `qualification`, `age`, `dob`, `department`, `bank`, `acc`, `last_update`) VALUES
(1, 'Oluwafayokemi', 'Maryhan', 'Adeboyejes', 'female', 'Mrs', '35dce9d6d4e6dda82bf9aa2e02559b8d', 'AA2233', 'teaching', 'married', '13 olorunsogo street beta lab ondo', '089238465', 'funke@gmail.com', 'osun bridge', 'Osun', 'Nigerian', 'ggg', '13', '06-06-12', 'passport/a9fb43d747b3e804c5d67ce899423da75d7393e910c24.jpg', 'christanity', 'Mr Ajala patrick', 'spouse', '009988776655', 'Msc', 0, '2018-07-19', 'Art', 'First bank', '223344556644', '20-01-20'),
(3, 'oladele', 'Adesewa', 'Adura', 'male', '', '8d86219bf88512c52c2aac1fabc7c2ed', 'AA2211', 'teaching', 'married', 'Address', '009087654', 'psseter@gmail.com', 'Address', 'Address', 'Address', '332', '13', '', '', 'others', 'adigun joseph', 'boy friend', '99873883993', 'bsc', 0, '12-12-13', 'Science', 'Firstbank', '0988900876789', '06-09-17'),
(5, 'Daniel', 'Darasimi', 'Babalola', 'male', '', '075d83a51bfb14da2b51950a1ef56e48', 'AA2244', 'teaching', 'single', '12 jump street ondo', '0987652222', 'adeugadewumi@gmail.com', 'osun bridge', 'osun', 'Nigeria', 'gga', '12', '', 'passport/5328f0d965ce23501e574a93387a17e059e3fac3301db.JPG', 'islam', 'Promise Babalola', 'sister', '000999888777', 'Bsc', 0, '1987-11-01', 'Commericial', 'Access', '2233445566', '16-10-17'),
(6, 'Paul', 'Magodo', 'Mbamalu', 'Male', '', 'afb79353208b5a2e28691f2439ac3cc4', 'AA2222', 'teaching', 'married', 'Address', '08034856123', 'pete34r@gmail.com', 'Address', 'Address', 'Address', '332', '13', '', 'passport/3ddca3cf299bfa3166b62193e53e371b599428b1c730b.JPG', 'christainity', 'Mrs Ayomide Mbamalu', 'wife', '99873883993', 'bsc', 0, '24-09-1986', 'Art', 'Firstbank', '0988900876789', '10-12-17'),
(7, 'Tolulope', 'Ronke', 'Adegalu', 'male', '', '34de9ab7b77ef5be6baa212e1bbb2ad9', 'AA2255', 'teaching', 'single', '13 olorinsogo street beta lab ondo ', '0981234567', 'ronke@gmail.com', 'ondo west', 'Ondo', 'Nigeria', 'ggg', '9', '', 'passport/58ebf4dcae51ff81d5cc854a052485e55df029c323174.jpg', 'christainity', 'Adegalu David', 'brother', '247294279429', 'msc', 0, '26-04-1989', 'Science', 'UBA', '112244668899', '11-12-19'),
(8, 'Thomas', '', 'Yaro', '', '', '7063e79e81dea434c9e73bb901128983', 'AA2266', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Commericial', '', '', ''),
(9, 'Malomo', 'mara', 'Magu', 'Female', '', '739c5a6c4f143f1371f2871314b89775', 'AA2277', 'teaching', 'single', 'olopade street magogo ', '08124567898', 'maramalomo@yahoo.com', 'ore south', 'ondo state', 'nigerian', '6', '8', '', 'passport/590b467d09f4b40599e7f8ab960074615a2be7563e098.JPG', 'christainity', 'Magu Martins', 'Brother', '89823276283', 'b.art', 0, '06-06-1980', 'Art', 'first bank', '2300877721991', '09-12-17'),
(10, 'Pelumi', 'peter', 'Akinola', 'Male', '', 'c9d1e18efe29750d105522e99e086cd3', 'AA2288', 'teaching', 'Married', '7 orimolade street ondo', '0985566223311', 'palito@yahoo.com', 'ondo west', 'ondo', 'nigeria', '78', '8', '', 'passport/f7040526aca1393ec6216a5a24c056315b4c790beb9cb.jpg', 'christainity', 'Mrs jumoke Akinola', 'wife', '099888077', 'M.sc', 0, '19-01-1984', 'Science', 'diamond', '67899876789', '16-07-18'),
(11, 'Tolu', '', 'Ajayi', '', '', 'b8135d2eb3e1dd8a91930da6acadbd20', 'AA2299', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Commericial', '', '', ''),
(12, 'Abala', '', 'lolo', '', '', '6212432efa174fa4728933cc07e9d8d3', 'AA2310', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Commericial', '', '', ''),
(13, 'Bolu', '', 'Bogona', '', '', '3d092ff1582fc7dba98605213f24ef60', 'AA2511', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Admin', '', '', ''),
(14, 'krekere', '', 'monu', '', '', 'efa92c394e2edd4f0a13960de984af6f', 'AA2512', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Bursary', '', '', ''),
(15, 'Adebayo', '', 'Adelola', '', '', '66d0f027da35dfc177cbf5e5d36d8147', 'AA3300', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Art', '', '', ''),
(16, 'Adesola', '', 'Omotoye', '', '', '7901f5544e4bb47dcf0ba2470d80cca1', 'AA3311', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Commericial', '', '', ''),
(17, 'Success', '', 'Fapohunda', '', '', '84e30afe140812ad56ca98a79ea97d58', 'AA3322', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Science', '', '', ''),
(18, 'Tamidayo', '', 'Ashibi', '', '', 'ae479bedfb2e2b07171f682ecd459225', 'AA3333', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Art', '', '', ''),
(19, 'Daniel', '', 'Ogunbono', '', '', '585773820ecbe04336201a40dcceaf3d', 'AA3344', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Science', '', '', ''),
(20, 'Adebola', '', 'Ogunbono', '', '', 'c701a69003c79b2fed94a2737f8bdf79', 'AA3355', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Commericial', '', '', ''),
(21, 'AkinWale', '', 'Obaodofin', '', '', '39993d81720e64a9d6796a3f8a5262da', 'AA3366', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Art', '', '', ''),
(22, 'oladotun', 'exelent', 'Adegoke', 'Male', '', '1b4ee6d55795d151ac2f96e056706593', 'AA3377', '44', 'single', '13 golo mob london', '08127571783', 'ali@gmail.com', 'ff', 'ff', 'Nigeria', 'cc', '44', '', 'passport/a7fd0c937ff5f3d8f9d4307a9ff64dc95db3712a08f77.jpg', 'christainity', 'in', 'father', '444', '44', 0, '30-09-2019', 'Science', 'First bank', '22334455664', '26-10-19'),
(23, 'Caleb', '', 'Adedokun', '', '', '9b0f153e43bcd1a82508fcfdb181d118', 'AA3388', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Commericial', '', '', ''),
(24, 'Umuga', '', 'adeledes', '', '', '1a100d2c0dab19c4430e7d73762b3423', '333333', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Commericial', '', '', ''),
(25, 'Denis', '', 'Maculy', '', '', 'c92c42dcfbd514b5104326b47f515621', 'AA1010', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Science', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `sn` int(11) NOT NULL,
  `student` varchar(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sn` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `admission_no` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `class` varchar(50) NOT NULL,
  `arm` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `religion` varchar(15) NOT NULL,
  `lga` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `house` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `dates` varchar(10) NOT NULL,
  `parents` varchar(50) NOT NULL,
  `parents_phone1` varchar(16) NOT NULL,
  `parents_phone2` varchar(16) NOT NULL,
  `p_email` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `date_admitted` varchar(10) NOT NULL,
  `batch` varchar(12) NOT NULL,
  `last_update` varchar(11) NOT NULL,
  `extral` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sn`, `fname`, `mname`, `lname`, `admission_no`, `email`, `phone`, `gender`, `class`, `arm`, `address`, `religion`, `lga`, `state`, `country`, `picture`, `house`, `status`, `active`, `dates`, `parents`, `parents_phone1`, `parents_phone2`, `p_email`, `age`, `dob`, `username`, `date_admitted`, `batch`, `last_update`, `extral`) VALUES
(1, 'Fuller', '', 'Pope', '19/000', 'FullerPope@outlookcom', '113797', 'female', 'JSS1', '1', '', 'christainity', '', 'Ondo', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Pope', '253901', '187254', 'Pope@outlookcom', 0, '26-03-2001', '96ea59946481bf01a731c254406c441a', '', '2013/2014', '', 0),
(2, 'Alford', '', 'Dotson', '19/001', 'AlfordDotson@co.ukcom', '253746', 'female', 'JSS1', '1', '', 'islam', '', 'Ebonyi', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Dotson', '173982', '13516', 'Dotson@co.ukcom', 0, '10-02-2000', 'ed171106616a441e0a8b0d7f08d2b9d1', '', '2013/2014', '', 0),
(3, 'Jennings', 'whilt', 'Black', '19/002', 'JenningsBlack@ymailcom', '221307', 'male', 'JSS1', '1', 'uyo ', 'islam', 'uyo south', 'Akwa Ibom', 'nigeria', 'passport/19e8a8979a514c3369a11eb5f32186295e24ea602fd1d.jpg', '', 0, 1, '19-01-2020', 'Mr and Mrs Black', '55612', '179888', 'Black@ymailcom', 0, '10-09-2000', 'df587d859037c70506eaa911cd45a3d7', '', '2013/2014', '20-01-20', 0),
(4, 'Barnes', '', 'Lawrence', '19/003', 'BarnesLawrence@hotmailcom', '274061', 'male', 'JSS1', '1', '', 'christainity', '', 'Edo', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Lawrence', '167631', '229320', 'Lawrence@hotmailcom', 0, '25-09-2000', 'fcea754a1a0e9610957768faf6cfc902', '', '2013/2014', '', 0),
(5, 'Macias', '', 'Garner', '19/004', 'MaciasGarner@ymailcom', '130193', 'female', 'JSS1', '1', '', 'christainity', '', 'Enugu', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Garner', '142291', '239042', 'Garner@ymailcom', 0, '20-01-2003', '6924daafd57cfb3770cef131f9c0050a', '', '2013/2014', '', 0),
(6, 'Hancock', '', 'Tucker', '19/005', 'HancockTucker@co.ukcom', '135527', 'female', 'JSS1', '1', '', 'islam', '', 'Ondo', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Tucker', '260876', '107965', 'Tucker@co.ukcom', 0, '27-04-2000', '5d8bc98666dbe707f3913cef08449355', '', '2013/2014', '', 0),
(7, 'Stuart', '', 'Marsh', '19/006', 'StuartMarsh@outlookcom', '181221', 'female', 'JSS1', '1', '', 'islam', '', 'Ebonyi', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Marsh', '166412', '73243', 'Marsh@outlookcom', 0, '22-07-2003', 'c941566fbc5df0869ce985fb9f3646b7', '', '2013/2014', '', 0),
(8, 'Swanson', '', 'Carlson', '19/007', 'SwansonCarlson@gmailcom', '297852', 'female', 'JSS1', '1', '', 'christainity', '', 'Delta', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Carlson', '105166', '34638', 'Carlson@gmailcom', 0, '19-05-2002', '2ecd1ea12763e0504f59f2aa06f68f5f', '', '2013/2014', '', 0),
(9, 'Porter', '', 'Aguilar', '19/008', 'PorterAguilar@hotmailcom', '214858', 'male', 'JSS1', '1', '', 'islam', '', 'Taraba', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Aguilar', '220419', '71615', 'Aguilar@hotmailcom', 0, '26-05-2002', '6900f61dc59e9c0bf7a886847d871560', '', '2013/2014', '', 0),
(10, 'Hewitt', '', 'Chandler', '19/009', 'HewittChandler@yahoocom', '264835', 'female', 'JSS1', '1', '', 'christainity', '', 'Lagos', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Chandler', '166882', '187285', 'Chandler@yahoocom', 0, '21-07-2001', '6e52d633c5fdb0ae5ef450c789b2242b', '', '2013/2014', '', 0),
(11, 'Chase', '', 'Santos', '19/010', 'ChaseSantos@outlookcom', '203744', 'female', 'JSS1', '1', '', 'christainity', '', 'Osun', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Santos', '215688', '173659', 'Santos@outlookcom', 0, '27-07-2003', '7ec3230d2d5fa8e37205ad7c5bc7f2f0', '', '2013/2014', '', 0),
(12, 'Buck', '', 'Bullock', '19/011', 'BuckBullock@gmailcom', '258655', 'female', 'JSS1', '1', '', 'christainity', '', 'Kwara', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Bullock', '299386', '218601', 'Bullock@gmailcom', 0, '13-01-2001', 'd5c9ed423ec7dfc99a3a698e0d53d8ab', '', '2013/2014', '', 0),
(13, 'Gaines', '', 'Spears', '19/012', 'GainesSpears@outlookcom', '163336', 'female', 'JSS1', '1', '', 'christainity', '', 'Lagos', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Spears', '220568', '154722', 'Spears@outlookcom', 0, '26-03-2001', '88d977ef28077ddc1e15b3190cc26541', '', '2013/2014', '', 0),
(14, 'Case', '', 'Foreman', '19/013', 'CaseForeman@ymailcom', '158087', 'male', 'JSS1', '1', '', 'christainity', '', 'Ondo', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Foreman', '207731', '278982', 'Foreman@ymailcom', 0, '18-08-2002', '467686d570b91be0c5ca330c7d26535f', '', '2013/2014', '', 0),
(15, 'Galloway', '', 'Raymond', '19/014', 'GallowayRaymond@yahoocom', '173141', 'female', 'JSS1', '1', '', 'islam', '', 'Ondo', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Raymond', '178090', '115786', 'Raymond@yahoocom', 0, '10-07-2001', 'f955bfe2725bb60d1a49b5955a207b3e', '', '2013/2014', '', 0),
(16, 'Lyons', '', 'Frederick', '19/015', 'LyonsFrederick@gmailcom', '108140', 'male', 'JSS1', '1', '', 'christainity', '', 'Delta', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Frederick', '251716', '203502', 'Frederick@gmailcom', 0, '23-09-2003', 'b8b7b1d0b4c845b24890c697192edfe6', '', '2013/2014', '', 0),
(17, 'Norris', '', 'Marsh', '19/016', 'NorrisMarsh@outlookcom', '208305', 'female', 'JSS1', '1', '', 'christainity', '', 'Abia', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Marsh', '294253', '124441', 'Marsh@outlookcom', 0, '14-05-2000', 'd964fe0c004e2151d9703dc1552e4b3e', '', '2013/2014', '', 0),
(18, 'Mckinney', '', 'Dominguez', '19/017', 'MckinneyDominguez@hotmailcom', '218767', 'male', 'JSS1', '1', '', 'islam', '', 'Ebonyi', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Dominguez', '281845', '164148', 'Dominguez@hotmailcom', 0, '27-05-2002', '1ed96ac1fa697dca99c17fba95b111cd', '', '2013/2014', '', 0),
(19, 'Sweeney', '', 'Bishop', '19/018', 'SweeneyBishop@gmailcom', '260290', 'female', 'JSS1', '1', '', 'islam', '', 'Bauchi', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Bishop', '76509', '17938', 'Bishop@gmailcom', 0, '20-07-2002', 'a39d933792adbbcf02f7a55117ccdc6d', '', '2013/2014', '', 0),
(20, 'Hickman', '', 'Bruce', '19/019', 'HickmanBruce@ymailcom', '109138', 'female', 'JSS1', '1', '', 'christainity', '', 'Jigawa', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Bruce', '295687', '165869', 'Bruce@ymailcom', 0, '14-03-2003', '9cc836a4164c306d445aa7a5572fedc9', '', '2013/2014', '', 0),
(21, 'Vazquez', '', 'Kirkland', '19/020', 'VazquezKirkland@outlookcom', '165859', 'female', 'JSS1', '1', '', 'christainity', '', 'Bauchi', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Kirkland', '244983', '121288', 'Kirkland@outlookcom', 0, '22-08-2002', '0d06f1fca8df594c530afcaa25cc56e3', '', '2013/2014', '', 0),
(22, 'Whitney', '', 'Downs', '19/021', 'WhitneyDowns@hotmailcom', '221052', 'female', 'JSS1', '1', '', 'christainity', '', 'Zamfara', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Downs', '227368', '70107', 'Downs@hotmailcom', 0, '14-01-2002', 'f839ee955c4d6d0d6e7c300befb10a3d', '', '2013/2014', '', 0),
(23, 'Cameron', '', 'Puckett', '19/022', 'CameronPuckett@gmailcom', '257818', 'male', 'JSS1', '1', '', 'islam', '', 'Yobe', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Puckett', '161163', '38680', 'Puckett@gmailcom', 0, '27-01-2003', '35259d6f720e1527732783b371660bcc', '', '2013/2014', '', 0),
(24, 'Erickson', '', 'Barr', '19/023', 'EricksonBarr@outlookcom', '107784', 'male', 'JSS1', '1', '', 'islam', '', 'Ebonyi', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Barr', '101924', '98908', 'Barr@outlookcom', 0, '15-06-2002', '380919ba5f388ab7a14d992c5657821f', '', '2013/2014', '', 0),
(25, 'Hill', '', 'Marshall', '19/024', 'HillMarshall@ymailcom', '109021', 'male', 'JSS1', '1', '', 'islam', '', 'Yobe', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Marshall', '174692', '36618', 'Marshall@ymailcom', 0, '12-07-2003', '7ace534d50d76eb78f413751459e83d8', '', '2013/2014', '', 0),
(26, 'Alexander', '', 'Ware', '19/025', 'AlexanderWare@hotmailcom', '254517', 'male', 'JSS1', '1', '', 'christainity', '', 'Enugu', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Ware', '183502', '266645', 'Ware@hotmailcom', 0, '26-02-2000', 'ee310b7a76dbf39f88873be4816dffe2', '', '2013/2014', '', 0),
(27, 'Barrera', '', 'Church', '19/026', 'BarreraChurch@hotmailcom', '108609', 'female', 'JSS1', '1', '', 'christainity', '', 'Bauchi', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Church', '296473', '280775', 'Church@hotmailcom', 0, '13-09-2003', '188394e425e35c0e23bea25a156bf664', '', '2013/2014', '', 0),
(28, 'Turner', '', 'Weber', '19/027', 'TurnerWeber@co.ukcom', '182876', 'female', 'JSS1', '1', '', 'christainity', '', 'Imo', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Weber', '251357', '55161', 'Weber@co.ukcom', 0, '20-05-2003', 'fd7374df0dd75ff31a5259f2cfbaa75e', '', '2013/2014', '', 0),
(29, 'Hooper', '', 'Mcintyre', '19/028', 'HooperMcintyre@gmailcom', '241791', 'male', 'JSS1', '1', '', 'christainity', '', 'Ogun', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Mcintyre', '265191', '101942', 'Mcintyre@gmailcom', 0, '10-07-2001', '4bc3bdf66f6c880d17aed70d99ee3a03', '', '2013/2014', '', 0),
(30, 'Morin', '', 'Duran', '19/029', 'MorinDuran@co.ukcom', '169158', 'male', 'JSS1', '1', '', 'islam', '', 'Plateau', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Duran', '181945', '226601', 'Duran@co.ukcom', 0, '17-06-2001', '257f189eca0769657096f2899c7eaacf', '', '2013/2014', '', 0),
(31, 'Gould', '', 'Cote', '19/030', 'GouldCote@hotmailcom', '163166', 'male', 'JSS1', '1', '', 'islam', '', 'Borno', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Cote', '229475', '18502', 'Cote@hotmailcom', 0, '19-03-2001', 'bac81be2ecf1e449d01e0cc60ddb80ea', '', '2013/2014', '', 0),
(32, 'Flynn', '', 'Cash', '19/032', 'FlynnCash@co.ukcom', '182608', 'female', 'JSS1', '2', '', 'christainity', '', 'Adamawa', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Cash', '110348', '227693', 'Cash@co.ukcom', 0, '10-01-2003', '81b1399149720ef711a2b0f10a27aed1', '', '2013/2014', '', 0),
(33, 'Richmond', '', 'Vazquez', '19/033', 'RichmondVazquez@co.ukcom', '111949', 'female', 'JSS1', '2', '', 'christainity', '', 'Sokoto', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Vazquez', '190617', '254345', 'Vazquez@co.ukcom', 0, '14-09-2003', '65148e693be0c26a684a6839faf4b38d', '', '2013/2014', '', 0),
(34, 'Reeves', '', 'Curry', '19/034', 'ReevesCurry@gmailcom', '143678', 'female', 'JSS1', '2', '', 'christainity', '', 'Plateau', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Curry', '26272', '113141', 'Curry@gmailcom', 0, '19-02-2002', 'e7fa77f70d83f2320d23f0bec977efd5', '', '2013/2014', '', 0),
(35, 'Stout', '', 'Brewer', '19/035', 'StoutBrewer@co.ukcom', '299579', 'female', 'JSS1', '2', '', 'islam', '', 'Zamfara', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Brewer', '72502', '112186', 'Brewer@co.ukcom', 0, '24-07-2000', 'd3229fe49af4c68b4e634942e047beec', '', '2013/2014', '', 0),
(36, 'Mccarty', '', 'Koch', '19/036', 'MccartyKoch@co.ukcom', '288593', 'male', 'JSS1', '2', '', 'christainity', '', 'Oyo', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Koch', '47843', '52972', 'Koch@co.ukcom', 0, '20-09-2002', '687c89a666420cf786e76c18d6de8b47', '', '2013/2014', '', 0),
(37, 'Wallace', '', 'Donovan', '19/037', 'WallaceDonovan@ymailcom', '145060', 'male', 'JSS1', '2', '', 'christainity', '', 'Rivers', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Donovan', '68444', '76337', 'Donovan@ymailcom', 0, '17-06-2001', '29636896ebb581fe33b95731d84afa9a', '', '2013/2014', '', 0),
(38, 'Vasquez', '', 'Wall', '19/038', 'VasquezWall@hotmailcom', '230244', 'female', 'JSS1', '2', '', 'christainity', '', 'Lagos', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Wall', '117316', '278127', 'Wall@hotmailcom', 0, '23-07-2000', '403f8534db5d53048d6cde1c47dcdc9b', '', '2013/2014', '', 0),
(39, 'Singleton', '', 'Walker', '19/039', 'SingletonWalker@outlookcom', '196450', 'male', 'JSS1', '2', '', 'christainity', '', 'Plateau', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Walker', '201999', '17320', 'Walker@outlookcom', 0, '10-04-2002', 'c2a948f56db79d48509c108f259dff21', '', '2013/2014', '', 0),
(40, 'Alvarado', '', 'Mcdowell', '19/040', 'AlvaradoMcdowell@yahoocom', '105161', 'female', 'JSS1', '2', '', 'islam', '', 'Nasarawa', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Mcdowell', '197901', '143176', 'Mcdowell@yahoocom', 0, '13-03-2001', 'db957ee17f37202703f36c3cc82c3a9e', '', '2013/2014', '', 0),
(41, 'Finch', '', 'Daniel', '19/041', 'FinchDaniel@hotmailcom', '205990', 'male', 'JSS1', '2', '', 'christainity', '', 'Taraba', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Daniel', '285805', '60094', 'Daniel@hotmailcom', 0, '14-05-2003', '867a13e1a1fe5da8056b2303df688565', '', '2013/2014', '', 0),
(42, 'Rasmussen', '', 'Alvarado', '19/042', 'RasmussenAlvarado@outlookcom', '172584', 'female', 'JSS1', '2', '', 'islam', '', 'Bauchi', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Alvarado', '212936', '104836', 'Alvarado@outlookcom', 0, '27-07-2000', '795495e0d7f1c80c3f760e34f1026cb6', '', '2013/2014', '', 0),
(43, 'Lott', '', 'Nolan', '19/043', 'LottNolan@hotmailcom', '250499', 'male', 'JSS1', '2', '', 'islam', '', 'Cross River', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Nolan', '291311', '299666', 'Nolan@hotmailcom', 0, '22-08-2001', '0a0dbd743bff1344c8092f6927513fc5', '', '2013/2014', '', 0),
(44, 'Chan', '', 'Raymond', '19/044', 'ChanRaymond@ymailcom', '180129', 'male', 'JSS1', '2', '', 'islam', '', 'Yobe', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Raymond', '127175', '185680', 'Raymond@ymailcom', 0, '11-09-2000', '74329925296c7003756cf307db070b99', '', '2013/2014', '', 0),
(45, 'Valenzuela', '', 'Diaz', '19/045', 'ValenzuelaDiaz@hotmailcom', '124401', 'male', 'JSS1', '2', '', 'islam', '', 'Jigawa', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Diaz', '25412', '181725', 'Diaz@hotmailcom', 0, '17-03-2000', '647c29a4c89a943871247d70ce9fd781', '', '2013/2014', '', 0),
(46, 'Hester', '', 'Valdez', '19/046', 'HesterValdez@co.ukcom', '209814', 'female', 'JSS1', '2', '', 'christainity', '', 'Edo', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Valdez', '278247', '199438', 'Valdez@co.ukcom', 0, '26-08-2003', '15021bbde491e5d515c7cc59989a3a8a', '', '2013/2014', '', 0),
(47, 'Cochran', '', 'Shannon', '19/047', 'CochranShannon@outlookcom', '271469', 'male', 'JSS1', '2', '', 'christainity', '', 'Anambra', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Shannon', '189589', '125766', 'Shannon@outlookcom', 0, '20-09-2001', 'c548a41d0e7431ec7c49a4df603f229e', '', '2013/2014', '', 0),
(48, 'Cohen', '', 'Whitaker', '19/048', 'CohenWhitaker@outlookcom', '188227', 'female', 'JSS1', '2', '', 'christainity', '', 'Kano', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Whitaker', '34408', '292281', 'Whitaker@outlookcom', 0, '10-04-2002', '9d3e9f15e035802e2363a60436e5d4a7', '', '2013/2014', '', 0),
(49, 'Fleming', '', 'Leblanc', '19/049', 'FlemingLeblanc@hotmailcom', '197231', 'male', 'JSS1', '2', '', 'islam', '', 'Yobe', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Leblanc', '32387', '107411', 'Leblanc@hotmailcom', 0, '26-03-2002', '2610f21bdf49743a2d2e24c625082a9c', '', '2013/2014', '', 0),
(50, 'Fulton', '', 'Banks', '19/050', 'FultonBanks@outlookcom', '227624', 'female', 'JSS1', '2', '', 'christainity', '', 'Abuja', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Banks', '233871', '39949', 'Banks@outlookcom', 0, '20-04-2002', '040f2303ff98b0bb3d38ba898eaad7e9', '', '2013/2014', '', 0),
(51, 'Craft', '', 'Bond', '19/051', 'CraftBond@yahoocom', '231041', 'male', 'JSS1', '2', '', 'islam', '', 'Abia', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Bond', '89112', '249648', 'Bond@yahoocom', 0, '22-04-2001', '8054c612ab4568afc3c2ace4ce513cd5', '', '2013/2014', '', 0),
(52, 'Henson', '', 'Bird', '19/052', 'HensonBird@outlookcom', '209639', 'male', 'JSS1', '2', '', 'islam', '', 'Kano', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Bird', '105573', '184697', 'Bird@outlookcom', 0, '14-08-2000', '607bb861df4f877deee7849487320c6f', '', '2013/2014', '', 0),
(53, 'Macias', '', 'Quinn', '19/053', 'MaciasQuinn@hotmailcom', '214243', 'male', 'JSS1', '2', '', 'christainity', '', 'Kogi', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Quinn', '169469', '39547', 'Quinn@hotmailcom', 0, '14-04-2002', '89f9bc3246c3e5b989144b7e136fe8c3', '', '2013/2014', '', 0),
(54, 'Cooper', '', 'Valdez', '19/054', 'CooperValdez@co.ukcom', '224328', 'female', 'JSS1', '2', '', 'christainity', '', 'Kogi', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Valdez', '284329', '289160', 'Valdez@co.ukcom', 0, '16-06-2001', '9250d208ae17446032158d25db94d088', '', '2013/2014', '', 0),
(55, 'Glass', '', 'Rush', '19/055', 'GlassRush@co.ukcom', '145875', 'male', 'JSS1', '2', '', 'islam', '', 'Imo', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Rush', '191298', '165228', 'Rush@co.ukcom', 0, '14-02-2002', '062893db96c93d97dee383a467e0e316', '', '2013/2014', '', 0),
(56, 'Potts', '', 'Bush', '19/056', 'PottsBush@yahoocom', '292877', 'female', 'JSS1', '2', '', 'islam', '', 'Yobe', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Bush', '41885', '240454', 'Bush@yahoocom', 0, '27-08-2002', '736082e7c81f50311170eb6604beeb41', '', '2013/2014', '', 0),
(57, 'Hunt', '', 'Blanchard', '19/057', 'HuntBlanchard@hotmailcom', '119574', 'female', 'JSS1', '2', '', 'christainity', '', 'Kaduna', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Blanchard', '39283', '198633', 'Blanchard@hotmailcom', 0, '26-09-2002', '3fa96bd8a195c859ff8fb5d2a85a50b3', '', '2013/2014', '', 0),
(58, 'Lott', '', 'Little', '19/058', 'LottLittle@gmailcom', '225788', 'female', 'JSS1', '2', '', 'islam', '', 'Bauchi', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Little', '289088', '235562', 'Little@gmailcom', 0, '10-01-2001', 'eb07371210e360044e26c3b3d93f4fdd', '', '2013/2014', '', 0),
(59, 'Savage', '', 'Lancaster', '19/059', 'SavageLancaster@gmailcom', '153259', 'male', 'JSS1', '2', '', 'christainity', '', 'Ekiti', 'nigeria', '', '', 0, 1, '19-01-2020', 'Mr and Mrs Lancaster', '82351', '31381', 'Lancaster@gmailcom', 0, '16-07-2002', 'd2dde3e4d48f047e315e61319e859cb0', '', '2013/2014', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_option`
--

CREATE TABLE `student_option` (
  `sn` int(11) NOT NULL,
  `student` varchar(150) NOT NULL,
  `subject_id` varchar(15) NOT NULL,
  `exam_code` varchar(150) NOT NULL,
  `question_id` varchar(15) NOT NULL,
  `asumed_no` int(11) NOT NULL,
  `option_c` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `student_option`
--

INSERT INTO `student_option` (`sn`, `student`, `subject_id`, `exam_code`, `question_id`, `asumed_no`, `option_c`) VALUES
(1, '19/001', '5', '5e09e2f46fbdf', '28', 1, ''),
(2, '19/001', '5', '5e09e2f46fbdf', '4', 2, ''),
(3, '19/001', '5', '5e09e2f46fbdf', '6', 3, ''),
(4, '19/001', '5', '5e09e2f46fbdf', '15', 4, ''),
(5, '19/001', '5', '5e09e2f46fbdf', '16', 5, ''),
(6, '19/001', '5', '5e09e2f46fbdf', '10', 6, ''),
(7, '19/001', '5', '5e09e2f46fbdf', '14', 7, ''),
(8, '19/001', '5', '5e09e2f46fbdf', '12', 8, ''),
(9, '19/001', '5', '5e09e2f46fbdf', '24', 9, ''),
(10, '19/001', '5', '5e09e2f46fbdf', '11', 10, ''),
(11, '19/001', '5', '5e09e2f46fbdf', '3', 11, ''),
(12, '19/001', '5', '5e09e2f46fbdf', '20', 12, ''),
(13, '19/001', '5', '5e09e2f46fbdf', '35', 13, ''),
(14, '19/001', '5', '5e09e2f46fbdf', '17', 14, ''),
(15, '19/001', '5', '5e09e2f46fbdf', '34', 15, ''),
(16, '19/001', '5', '5e09e2f46fbdf', '9', 16, ''),
(17, '19/001', '5', '5e09e2f46fbdf', '27', 17, ''),
(18, '19/001', '5', '5e09e2f46fbdf', '32', 18, ''),
(19, '19/001', '5', '5e09e2f46fbdf', '23', 19, ''),
(20, '19/001', '5', '5e09e2f46fbdf', '1', 20, ''),
(21, '19/001', '5', '5e09e67184284', '2', 1, '1'),
(22, '19/001', '5', '5e09e67184284', '1', 2, '1'),
(23, '19/001', '5', '5e1cafa93183c', '48', 1, ''),
(24, '19/001', '5', '5e1cafa93183c', '35', 2, ''),
(25, '19/001', '5', '5e1cafa93183c', '11', 3, ''),
(26, '19/001', '5', '5e1cafa93183c', '60', 4, ''),
(27, '19/001', '5', '5e1cafa93183c', '24', 5, ''),
(28, '19/001', '5', '5e1cafa93183c', '17', 6, ''),
(29, '19/001', '5', '5e1cafa93183c', '86', 7, ''),
(30, '19/001', '5', '5e1cafa93183c', '52', 8, ''),
(31, '19/001', '5', '5e1cafa93183c', '25', 9, ''),
(32, '19/001', '5', '5e1cafa93183c', '83', 10, ''),
(33, '19/001', '5', '5e1cafa93183c', '94', 11, ''),
(34, '19/001', '5', '5e1cafa93183c', '75', 12, ''),
(35, '19/001', '5', '5e1cafa93183c', '40', 13, ''),
(36, '19/001', '5', '5e1cafa93183c', '9', 14, ''),
(37, '19/001', '5', '5e1cafa93183c', '98', 15, ''),
(38, '19/001', '5', '5e1cafa93183c', '81', 16, ''),
(39, '19/001', '5', '5e1cafa93183c', '58', 17, ''),
(40, '19/001', '5', '5e1cafa93183c', '37', 18, ''),
(41, '19/001', '5', '5e1cafa93183c', '28', 19, ''),
(42, '19/001', '5', '5e1cafa93183c', '76', 20, ''),
(43, '19/001', '5', '5e1cafa93183c', '26', 21, ''),
(44, '19/001', '5', '5e1cafa93183c', '36', 22, ''),
(45, '19/001', '5', '5e1cafa93183c', '53', 23, ''),
(46, '19/001', '5', '5e1cafa93183c', '18', 24, ''),
(47, '19/001', '5', '5e1cafa93183c', '31', 25, ''),
(48, '19/001', '5', '5e1cafa93183c', '47', 26, ''),
(49, '19/001', '5', '5e1cafa93183c', '44', 27, ''),
(50, '19/001', '5', '5e1cafa93183c', '6', 28, ''),
(51, '19/001', '5', '5e1cafa93183c', '93', 29, ''),
(52, '19/001', '5', '5e1cafa93183c', '74', 30, ''),
(53, '19/001', '5', '5e1cafa93183c', '79', 31, ''),
(54, '19/001', '5', '5e1cafa93183c', '55', 32, ''),
(55, '19/001', '5', '5e1cafa93183c', '49', 33, ''),
(56, '19/001', '5', '5e1cafa93183c', '20', 34, ''),
(57, '19/001', '5', '5e1cafa93183c', '97', 35, ''),
(58, '19/001', '5', '5e1cafa93183c', '85', 36, ''),
(59, '19/001', '5', '5e1cafa93183c', '7', 37, ''),
(60, '19/001', '5', '5e1cafa93183c', '1', 38, ''),
(61, '19/001', '5', '5e1cafa93183c', '57', 39, ''),
(62, '19/001', '5', '5e1cafa93183c', '78', 40, ''),
(63, '19/001', '5', '5e1cafa93183c', '32', 41, ''),
(64, '19/001', '5', '5e1cafa93183c', '54', 42, ''),
(65, '19/001', '5', '5e1cafa93183c', '64', 43, ''),
(66, '19/001', '5', '5e1cafa93183c', '45', 44, ''),
(67, '19/001', '5', '5e1cafa93183c', '62', 45, ''),
(68, '19/001', '5', '5e1cafa93183c', '67', 46, ''),
(69, '19/001', '5', '5e1cafa93183c', '39', 47, ''),
(70, '19/001', '5', '5e1cafa93183c', '65', 48, ''),
(71, '19/001', '5', '5e1cafa93183c', '38', 49, ''),
(72, '19/001', '5', '5e1cafa93183c', '56', 50, ''),
(73, '19/001', '5', '5e1cafa93183c', '27', 51, ''),
(74, '19/001', '5', '5e1cafa93183c', '70', 52, ''),
(75, '19/001', '5', '5e1cafa93183c', '90', 53, ''),
(76, '19/001', '5', '5e1cafa93183c', '8', 54, ''),
(77, '19/001', '5', '5e1cafa93183c', '16', 55, ''),
(78, '19/001', '5', '5e1cafa93183c', '87', 56, ''),
(79, '19/001', '5', '5e1cafa93183c', '10', 57, ''),
(80, '19/001', '5', '5e1cafa93183c', '59', 58, ''),
(81, '19/001', '5', '5e1cafa93183c', '4', 59, ''),
(82, '19/001', '5', '5e1cafa93183c', '29', 60, ''),
(83, '19/001', '5', '5e1cafa93183c', '12', 61, ''),
(84, '19/001', '5', '5e1cafa93183c', '96', 62, ''),
(85, '19/001', '5', '5e1cafa93183c', '99', 63, ''),
(86, '19/001', '5', '5e1cafa93183c', '43', 64, ''),
(87, '19/001', '5', '5e1cafa93183c', '80', 65, ''),
(88, '19/001', '5', '5e1cafa93183c', '21', 66, ''),
(89, '19/001', '5', '5e1cafa93183c', '22', 67, ''),
(90, '19/001', '5', '5e1cafa93183c', '46', 68, ''),
(91, '19/001', '5', '5e1cafa93183c', '13', 69, ''),
(92, '19/001', '5', '5e1cafa93183c', '61', 70, ''),
(93, '19/001', '5', '5e1cafa93183c', '19', 71, ''),
(94, '19/001', '5', '5e1cafa93183c', '72', 72, ''),
(95, '19/001', '5', '5e1cafa93183c', '77', 73, ''),
(96, '19/001', '5', '5e1cafa93183c', '82', 74, ''),
(97, '19/001', '5', '5e1cafa93183c', '51', 75, ''),
(98, '19/001', '5', '5e1cafa93183c', '34', 76, ''),
(99, '19/001', '5', '5e1cafa93183c', '100', 77, ''),
(100, '19/001', '5', '5e1cafa93183c', '41', 78, ''),
(101, '19/001', '5', '5e1cafa93183c', '30', 79, ''),
(102, '19/001', '5', '5e1cafa93183c', '95', 80, ''),
(103, '19/001', '5', '5e1cafa93183c', '84', 81, ''),
(104, '19/001', '5', '5e1cafa93183c', '89', 82, ''),
(105, '19/001', '5', '5e1cafa93183c', '23', 83, ''),
(106, '19/001', '5', '5e1cafa93183c', '73', 84, ''),
(107, '19/001', '5', '5e1cafa93183c', '92', 85, ''),
(108, '19/001', '5', '5e1cafa93183c', '14', 86, ''),
(109, '19/001', '5', '5e1cafa93183c', '5', 87, ''),
(110, '19/001', '5', '5e1cafa93183c', '42', 88, ''),
(111, '19/001', '5', '5e1cafa93183c', '68', 89, ''),
(112, '19/001', '5', '5e1cafa93183c', '50', 90, ''),
(113, '19/001', '5', '5e1de2f06cd48', '1', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sn` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `code` varchar(11) NOT NULL,
  `department` varchar(15) NOT NULL,
  `participant` varchar(20) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `dates` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sn`, `title`, `code`, `department`, `participant`, `teacher`, `type`, `dates`) VALUES
(2, 'English', 'EnglJSS1', 'art', 'JSS1', 'AA2222', 'compulsory', '19-07-2018'),
(3, 'French', 'FrenJSS1', 'art', 'JSS1', 'AA2277', 'compulsory', '19-07-2018'),
(4, 'yoruba', 'yoruJSS1', 'art', 'JSS1', 'AA2222', 'compulsory', '19-07-2018'),
(5, 'social Studies', 'sociJSS1', 'art', 'JSS1', 'AA2233', 'compulsory', '19-07-2018'),
(6, 'Integrated science', 'InteJSS1', 'science', 'JSS1', 'AA2288', 'compulsory', '19-07-2018'),
(7, 'Introductory Technology', 'IntrJSS1', 'science', 'JSS1', 'AA2211', 'compulsory', '19-07-2018'),
(8, 'Christain Religious Knowledge', 'ChriJSS1', 'art', 'JSS1', 'AA2222', 'elective', '19-07-2018'),
(9, 'Islamic Religious Knowledge', 'IslaJSS1', 'art', 'JSS1', 'AA2277', 'elective', '19-07-2018'),
(10, 'Agricultural Science', 'AgriJSS1', 'science', 'JSS1', 'AA2211', 'compulsory', '19-07-2018'),
(11, 'Physical Health Education', 'PhysJSS1', 'science', 'JSS1', 'AA2255', 'compulsory', '19-07-2018'),
(12, 'Computer', 'CompJSS1', 'science', 'JSS1', 'AA2255', 'compulsory', '19-07-2018'),
(13, 'Fineart', 'FineJSS1', 'art', 'JSS1', 'AA2233', 'compulsory', '19-07-2018'),
(14, 'Business Studies', 'BusiJSS1', 'commericial', 'JSS1', 'AA2266', 'compulsory', '19-07-2018'),
(15, 'Mathematics', 'MathJSS2', 'science', 'JSS2', 'AA3377', 'compulsory', '19-07-2018'),
(16, 'English', 'EnglJSS2', 'art', 'JSS2', 'AA3366', 'compulsory', '19-07-2018'),
(17, 'French', 'FrenJSS2', 'art', 'JSS2', 'AA2277', 'compulsory', '19-07-2018'),
(18, 'yoruba', 'yoruJSS2', 'art', 'JSS2', 'AA3366', 'compulsory', '19-07-2018'),
(19, 'social Studies', 'sociJSS2', 'art', 'JSS2', 'AA3300', 'compulsory', '19-07-2018'),
(20, 'Integrated science', 'InteJSS2', 'science', 'JSS2', 'AA3344', 'compulsory', '19-07-2018'),
(21, 'Introductory Technology', 'IntrJSS2', 'science', 'JSS2', 'AA3322', 'compulsory', '19-07-2018'),
(22, 'Christain Religious Knowledge', 'ChriJSS2', 'art', 'JSS2', 'AA2277', 'compulsory', '19-07-2018'),
(23, 'Islamic Religious Knowledge', 'IslaJSS2', 'art', 'JSS2', 'AA2222', 'compulsory', '19-07-2018'),
(24, 'Agricultural Science', 'AgriJSS2', 'science', 'JSS2', 'AA2288', 'compulsory', '19-07-2018'),
(25, 'Physical Health Education', 'PhysJSS2', 'science', 'JSS2', 'AA2255', 'compulsory', '19-07-2018'),
(26, 'Computer', 'CompJSS2', 'science', 'JSS2', 'AA2211', 'compulsory', '19-07-2018'),
(27, 'Fineart', 'FineJSS2', 'art', 'JSS2', 'AA3366', 'compulsory', '19-07-2018'),
(28, 'Business Studies', 'BusiJSS2', 'commericial', 'JSS2', 'AA3388', 'compulsory', '19-07-2018'),
(29, 'Mathematics', 'MathJSS3', 'science', 'JSS3', 'AA2288', 'compulsory', '19-07-2018'),
(30, 'English', 'EnglJSS3', 'art', 'JSS3', 'AA3300', 'compulsory', '19-07-2018'),
(31, 'French', 'FrenJSS3', 'art', 'JSS3', 'AA2222', 'compulsory', '19-07-2018'),
(32, 'yoruba', 'yoruJSS3', 'art', 'JSS3', 'AA3366', 'compulsory', '19-07-2018'),
(33, 'social Studies', 'sociJSS3', 'art', 'JSS3', 'AA2222', 'compulsory', '19-07-2018'),
(34, 'Integrated science', 'InteJSS3', 'science', 'JSS3', 'AA2211', 'compulsory', '19-07-2018'),
(35, 'Introductory Technology', 'IntrJSS3', 'science', 'JSS3', 'AA3344', 'compulsory', '19-07-2018'),
(36, 'Christain Religious Knowledge', 'ChriJSS3', 'art', 'JSS3', 'AA3366', 'compulsory', '19-07-2018'),
(37, 'Islamic Religious Knowledge', 'IslaJSS3', 'art', 'JSS3', 'AA2233', 'compulsory', '19-07-2018'),
(38, 'Agricultural Science', 'AgriJSS3', 'science', 'JSS3', 'AA3322', 'compulsory', '19-07-2018'),
(39, 'Physical Health Education', 'PhysJSS3', 'science', 'JSS3', 'AA2211', 'compulsory', '19-07-2018'),
(40, 'Computer', 'CompJSS3', 'science', 'JSS3', 'AA3344', 'compulsory', '19-07-2018'),
(41, 'Fineart', 'FineJSS3', 'art', 'JSS3', 'AA2277', 'compulsory', '19-07-2018'),
(42, 'Business Studies', 'BusiJSS3', 'commericial', 'JSS3', 'AA2310', 'compulsory', '19-07-2018'),
(43, 'Mathematics', 'MathSS1_sci', 'science', 'SS1_science', 'AA3322', 'compulsory', '19-07-2018'),
(44, 'English', 'EnglSS1_sci', 'art', 'SS1_science', 'AA3366', 'compulsory', '19-07-2018'),
(45, 'Biology', 'BiolSS1_sci', 'science', 'SS1_science', 'AA2211', 'compulsory', '19-07-2018'),
(46, 'Economics', 'EconSS1_sci', 'commericial', 'SS1_science', 'AA3388', 'compulsory', '19-07-2018'),
(47, 'Yoruba', 'YoruSS1_sci', 'art', 'SS1_science', 'AA3366', 'compulsory', '19-07-2018'),
(48, 'Physics', 'PhysSS1_sci', 'science', 'SS1_science', 'AA2255', 'compulsory', '19-07-2018'),
(49, 'Chemistry', 'ChemSS1_sci', 'science', 'SS1_science', 'AA3322', 'compulsory', '19-07-2018'),
(50, 'Technical Drawing', 'TechSS1_sci', 'science', 'SS1_science', 'AA2288', 'compulsory', '19-07-2018'),
(51, 'Geography', 'GeogSS1_sci', 'science', 'SS1_science', 'AA2255', 'compulsory', '19-07-2018'),
(52, 'Further Mathematics', 'FurtSS1_sci', 'science', 'SS1_science', 'AA2288', 'compulsory', '19-07-2018'),
(53, 'Agricultural science', 'AgriSS1_sci', 'science', 'SS1_science', 'AA2288', 'compulsory', '19-07-2018'),
(54, 'Mathematics', 'MathSS2_sci', 'science', 'SS2_science', 'AA2211', 'compulsory', '19-07-2018'),
(55, 'English', 'EnglSS2_sci', 'art', 'SS2_science', 'AA2277', 'compulsory', '19-07-2018'),
(56, 'Biology', 'BiolSS2_sci', 'science', 'SS2_science', 'AA2255', 'compulsory', '19-07-2018'),
(57, 'Economics', 'EconSS2_sci', 'commericial', 'SS2_science', 'AA3355', 'compulsory', '19-07-2018'),
(58, 'Yoruba', 'YoruSS2_sci', 'art', 'SS2_science', 'AA2277', 'compulsory', '19-07-2018'),
(59, 'Physics', 'PhysSS2_sci', 'science', 'SS2_science', 'AA3377', 'compulsory', '19-07-2018'),
(60, 'Chemistry', 'ChemSS2_sci', 'science', 'SS2_science', 'AA3322', 'compulsory', '19-07-2018'),
(61, 'Technical Drawing', 'TechSS2_sci', 'science', 'SS2_science', 'AA2255', 'compulsory', '19-07-2018'),
(62, 'Geography', 'GeogSS2_sci', 'science', 'SS2_science', 'AA2288', 'compulsory', '19-07-2018'),
(63, 'Further Mathematics', 'FurtSS2_sci', 'science', 'SS2_science', 'AA3377', 'compulsory', '19-07-2018'),
(64, 'Agricultural science', 'AgriSS2_sci', 'science', 'SS2_science', 'AA3322', 'compulsory', '19-07-2018'),
(65, 'Mathematics', 'MathSS3_sci', 'science', 'SS3_science', 'AA2211', 'compulsory', '19-07-2018'),
(66, 'English', 'EnglSS3_sci', 'art', 'SS3_science', 'AA2222', 'compulsory', '19-07-2018'),
(67, 'Biology', 'BiolSS3_sci', 'science', 'SS3_science', 'AA3322', 'compulsory', '19-07-2018'),
(68, 'Economics', 'EconSS3_sci', 'commericial', 'SS3_science', 'AA2266', 'compulsory', '19-07-2018'),
(69, 'Yoruba', 'YoruSS3_sci', 'art', 'SS3_science', 'AA2233', 'compulsory', '19-07-2018'),
(70, 'Physics', 'PhysSS3_sci', 'science', 'SS3_science', 'AA3322', 'compulsory', '19-07-2018'),
(71, 'Chemistry', 'ChemSS3_sci', 'science', 'SS3_science', 'AA2255', 'compulsory', '19-07-2018'),
(72, 'Technical Drawing', 'TechSS3_sci', 'science', 'SS3_science', 'AA2255', 'compulsory', '19-07-2018'),
(73, 'Geography', 'GeogSS3_sci', 'science', 'SS3_science', 'AA2288', 'compulsory', '19-07-2018'),
(74, 'Further Mathematics', 'FurtSS3_sci', 'science', 'SS3_science', 'AA2288', 'compulsory', '19-07-2018'),
(75, 'Agricultural science', 'AgriSS3_sci', 'science', 'SS3_science', 'AA3377', 'compulsory', '19-07-2018'),
(76, 'Mathematics', 'MathSS1_art', 'science', 'SS1_art', 'AA2288', 'compulsory', '19-07-2018'),
(77, 'English', 'EnglSS1_art', 'art', 'SS1_art', 'AA2233', 'compulsory', '19-07-2018'),
(78, 'Biology', 'BiolSS1_art', 'science', 'SS1_art', 'AA3322', 'compulsory', '19-07-2018'),
(79, 'Economics', 'EconSS1_art', 'commericial', 'SS1_art', 'AA3388', 'compulsory', '19-07-2018'),
(80, 'Yoruba', 'YoruSS1_art', 'art', 'SS1_art', 'AA3300', 'compulsory', '19-07-2018'),
(81, 'litrature in english', 'litrSS1_art', 'art', 'SS1_art', 'AA3300', 'compulsory', '19-07-2018'),
(82, 'government', 'goveSS1_art', 'art', 'SS1_art', 'AA2222', 'compulsory', '19-07-2018'),
(83, 'history', 'histSS1_art', 'art', 'SS1_art', 'AA2277', 'compulsory', '19-07-2018'),
(84, 'french', 'frenSS1_art', 'art', 'SS1_art', 'AA3333', 'compulsory', '19-07-2018'),
(85, 'visual art', 'visuSS1_art', 'art', 'SS1_art', 'AA3366', 'compulsory', '19-07-2018'),
(86, 'CRK studies', 'CRK SS1_art', 'art', 'SS1_art', 'AA3366', 'compulsory', '19-07-2018'),
(87, 'Mathematics', 'MathSS2_art', 'science', 'SS2_art', 'AA3344', 'compulsory', '19-07-2018'),
(88, 'English', 'EnglSS2_art', 'art', 'SS2_art', 'AA3300', 'compulsory', '19-07-2018'),
(89, 'Biology', 'BiolSS2_art', 'science', 'SS2_art', 'AA3344', 'compulsory', '19-07-2018'),
(90, 'Economics', 'EconSS2_art', 'commericial', 'SS2_art', 'AA3355', 'compulsory', '19-07-2018'),
(91, 'Yoruba', 'YoruSS2_art', 'art', 'SS2_art', 'AA3366', 'compulsory', '19-07-2018'),
(92, 'litrature in english', 'litrSS2_art', 'art', 'SS2_art', 'AA3333', 'compulsory', '19-07-2018'),
(93, 'government', 'goveSS2_art', 'art', 'SS2_art', 'AA3366', 'compulsory', '19-07-2018'),
(94, 'history', 'histSS2_art', 'art', 'SS2_art', 'AA3333', 'compulsory', '19-07-2018'),
(95, 'french', 'frenSS2_art', 'art', 'SS2_art', 'AA2233', 'compulsory', '19-07-2018'),
(96, 'visual art', 'visuSS2_art', 'art', 'SS2_art', 'AA2222', 'compulsory', '19-07-2018'),
(97, 'CRK studies', 'CRK SS2_art', 'art', 'SS2_art', 'AA3333', 'compulsory', '19-07-2018'),
(98, 'Mathematics', 'MathSS3_art', 'science', 'SS3_art', 'AA3377', 'compulsory', '19-07-2018'),
(99, 'English', 'EnglSS3_art', 'art', 'SS3_art', 'AA2222', 'compulsory', '19-07-2018'),
(100, 'Biology', 'BiolSS3_art', 'science', 'SS3_art', 'AA2288', 'compulsory', '19-07-2018'),
(101, 'Economics', 'EconSS3_art', 'commericial', 'SS3_art', 'AA2299', 'compulsory', '19-07-2018'),
(102, 'Yoruba', 'YoruSS3_art', 'art', 'SS3_art', 'AA2233', 'compulsory', '19-07-2018'),
(103, 'litrature in english', 'litrSS3_art', 'art', 'SS3_art', 'AA2222', 'compulsory', '19-07-2018'),
(104, 'government', 'goveSS3_art', 'art', 'SS3_art', 'AA3300', 'compulsory', '19-07-2018'),
(105, 'history', 'histSS3_art', 'art', 'SS3_art', 'AA2277', 'compulsory', '19-07-2018'),
(106, 'french', 'frenSS3_art', 'art', 'SS3_art', 'AA3333', 'compulsory', '19-07-2018'),
(107, 'visual art', 'visuSS3_art', 'art', 'SS3_art', 'AA3333', 'compulsory', '19-07-2018'),
(108, 'CRK studies', 'CRK SS3_art', 'art', 'SS3_art', 'AA2277', 'compulsory', '19-07-2018'),
(109, 'Mathematics', 'MathSS1_com', 'science', 'SS1_commericial', 'AA3322', 'compulsory', '19-07-2018'),
(110, 'English', 'EnglSS1_com', 'art', 'SS1_commericial', 'AA2222', 'compulsory', '19-07-2018'),
(111, 'Biology', 'BiolSS1_com', 'science', 'SS1_commericial', 'AA2211', 'compulsory', '19-07-2018'),
(112, 'Economics', 'EconSS1_com', 'commericial', 'SS1_commericial', 'AA2244', 'compulsory', '19-07-2018'),
(113, 'Yoruba', 'YoruSS1_com', 'art', 'SS1_commericial', 'AA3366', 'compulsory', '19-07-2018'),
(114, 'finical accounting', 'finiSS1_com', 'commericial', 'SS1_commericial', 'AA3388', 'compulsory', '19-07-2018'),
(115, 'commerance', 'commSS1_com', 'commericial', 'SS1_commericial', 'AA2299', 'compulsory', '19-07-2018'),
(116, 'geography', 'geogSS1_com', 'commericial', 'SS1_commericial', 'AA2244', 'compulsory', '19-07-2018'),
(117, 'typing', 'typiSS1_com', 'commericial', 'SS1_commericial', 'AA2266', 'compulsory', '19-07-2018'),
(118, 'Mathematics', 'MathSS2_com', 'science', 'SS2_commericial', 'AA3377', 'compulsory', '19-07-2018'),
(119, 'English', 'EnglSS2_com', 'art', 'SS2_commericial', 'AA3333', 'compulsory', '19-07-2018'),
(120, 'Biology', 'BiolSS2_com', 'science', 'SS2_commericial', 'AA3377', 'compulsory', '19-07-2018'),
(121, 'Economics', 'EconSS2_com', 'commericial', 'SS2_commericial', 'AA3355', 'compulsory', '19-07-2018'),
(122, 'Yoruba', 'YoruSS2_com', 'art', 'SS2_commericial', 'AA2222', 'compulsory', '19-07-2018'),
(123, 'finical accounting', 'finiSS2_com', 'commericial', 'SS2_commericial', 'AA2299', 'compulsory', '19-07-2018'),
(124, 'commerance', 'commSS2_com', 'commericial', 'SS2_commericial', 'AA2266', 'compulsory', '19-07-2018'),
(125, 'geography', 'geogSS2_com', 'commericial', 'SS2_commericial', 'AA3311', 'compulsory', '19-07-2018'),
(126, 'typing', 'typiSS2_com', 'commericial', 'SS2_commericial', 'AA3355', 'compulsory', '19-07-2018'),
(127, 'Mathematics', 'MathSS3_com', 'science', 'SS3_commericial', 'AA2288', 'compulsory', '19-07-2018'),
(128, 'English', 'EnglSS3_com', 'art', 'SS3_commericial', 'AA3333', 'compulsory', '19-07-2018'),
(129, 'Biology', 'BiolSS3_com', 'science', 'SS3_commericial', 'AA3322', 'compulsory', '19-07-2018'),
(130, 'Economics', 'EconSS3_com', 'commericial', 'SS3_commericial', 'AA2266', 'compulsory', '19-07-2018'),
(131, 'Yoruba', 'YoruSS3_com', 'art', 'SS3_commericial', 'AA3300', 'compulsory', '19-07-2018'),
(132, 'finical accounting', 'finiSS3_com', 'commericial', 'SS3_commericial', 'AA2310', 'compulsory', '19-07-2018'),
(133, 'commerance', 'commSS3_com', 'commericial', 'SS3_commericial', 'AA2310', 'compulsory', '19-07-2018'),
(134, 'geography', 'geogSS3_com', 'commericial', 'SS3_commericial', 'AA2299', 'compulsory', '19-07-2018');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sn` int(11) NOT NULL,
  `userid` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL DEFAULT 'password@1234',
  `userid2` varchar(150) NOT NULL,
  `password2` varchar(210) NOT NULL,
  `type` varchar(10) NOT NULL,
  `dates` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `presence` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sn`, `userid`, `password`, `userid2`, `password2`, `type`, `dates`, `status`, `active`, `presence`) VALUES
(10, 'AA2211', 'password@1234', '8d86219bf88512c52c2aac1fabc7c2ed', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '', 1, 1, 1),
(11, 'AA2222', 'password@1234', 'afb79353208b5a2e28691f2439ac3cc4', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '09-07-17', 1, 1, 1),
(12, 'AA2233', 'password@1234', '35dce9d6d4e6dda82bf9aa2e02559b8d', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '', 1, 1, 1),
(13, 'AA2244', 'password@1234', '075d83a51bfb14da2b51950a1ef56e48', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '09-07-17', 1, 1, 1),
(14, 'AA2255', 'password@1234', '34de9ab7b77ef5be6baa212e1bbb2ad9', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '09-07-17', 1, 1, 1),
(15, 'AA2266', 'password@1234', '7063e79e81dea434c9e73bb901128983', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '09-07-17', 1, 1, 1),
(16, 'AA2277', 'password@1234', '739c5a6c4f143f1371f2871314b89775', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '09-07-17', 1, 1, 1),
(17, 'AA2288', 'password@1234', 'c9d1e18efe29750d105522e99e086cd3', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '09-07-17', 1, 1, 1),
(18, 'AA2299', 'password@1234', 'b8135d2eb3e1dd8a91930da6acadbd20', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '09-07-17', 0, 1, 1),
(19, 'AA2310', 'password@1234', '6212432efa174fa4728933cc07e9d8d3', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '26-07-17', 1, 1, 1),
(35, 'AA2510', 'password@1234', 'c60a86a75c565c877cf6311d4f6143df', 'cce2f81bb110bd8e7bab9779491caf09', 'admin', '', 1, 1, 1),
(3981, 'AA3311', 'password@1234', '7901f5544e4bb47dcf0ba2470d80cca1', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '19-07-18', 1, 1, 1),
(3980, 'AA3300', 'password@1234', '66d0f027da35dfc177cbf5e5d36d8147', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '19-07-18', 0, 1, 1),
(4174, '19/044', 'password@1234', '74329925296c7003756cf307db070b99', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4173, '19/043', 'password@1234', '0a0dbd743bff1344c8092f6927513fc5', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4172, '19/042', 'password@1234', '795495e0d7f1c80c3f760e34f1026cb6', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4171, '19/041', 'password@1234', '867a13e1a1fe5da8056b2303df688565', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4170, '19/040', 'password@1234', 'db957ee17f37202703f36c3cc82c3a9e', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4169, '19/039', 'password@1234', 'c2a948f56db79d48509c108f259dff21', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4168, '19/038', 'password@1234', '403f8534db5d53048d6cde1c47dcdc9b', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4167, '19/037', 'password@1234', '29636896ebb581fe33b95731d84afa9a', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4166, '19/036', 'password@1234', '687c89a666420cf786e76c18d6de8b47', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4165, '19/035', 'password@1234', 'd3229fe49af4c68b4e634942e047beec', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4164, '19/034', 'password@1234', 'e7fa77f70d83f2320d23f0bec977efd5', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4163, '19/033', 'password@1234', '65148e693be0c26a684a6839faf4b38d', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4162, '19/032', 'password@1234', '81b1399149720ef711a2b0f10a27aed1', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 1, 1, 1),
(4161, '19/030', 'password@1234', 'bac81be2ecf1e449d01e0cc60ddb80ea', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4160, '19/029', 'password@1234', '257f189eca0769657096f2899c7eaacf', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4159, '19/028', 'password@1234', '4bc3bdf66f6c880d17aed70d99ee3a03', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4158, '19/027', 'password@1234', 'fd7374df0dd75ff31a5259f2cfbaa75e', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4157, '19/026', 'password@1234', '188394e425e35c0e23bea25a156bf664', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4156, '19/025', 'password@1234', 'ee310b7a76dbf39f88873be4816dffe2', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4154, '19/023', 'password@1234', '380919ba5f388ab7a14d992c5657821f', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4155, '19/024', 'password@1234', '7ace534d50d76eb78f413751459e83d8', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4153, '19/022', 'password@1234', '35259d6f720e1527732783b371660bcc', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4152, '19/021', 'password@1234', 'f839ee955c4d6d0d6e7c300befb10a3d', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4151, '19/020', 'password@1234', '0d06f1fca8df594c530afcaa25cc56e3', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4150, '19/019', 'password@1234', '9cc836a4164c306d445aa7a5572fedc9', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4149, '19/018', 'password@1234', 'a39d933792adbbcf02f7a55117ccdc6d', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4148, '19/017', 'password@1234', '1ed96ac1fa697dca99c17fba95b111cd', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4147, '19/016', 'password@1234', 'd964fe0c004e2151d9703dc1552e4b3e', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4146, '19/015', 'password@1234', 'b8b7b1d0b4c845b24890c697192edfe6', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4145, '19/014', 'password@1234', 'f955bfe2725bb60d1a49b5955a207b3e', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4144, '19/013', 'password@1234', '467686d570b91be0c5ca330c7d26535f', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4142, '19/011', 'password@1234', 'd5c9ed423ec7dfc99a3a698e0d53d8ab', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4143, '19/012', 'password@1234', '88d977ef28077ddc1e15b3190cc26541', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4141, '19/010', 'password@1234', '7ec3230d2d5fa8e37205ad7c5bc7f2f0', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4140, '19/009', 'password@1234', '6e52d633c5fdb0ae5ef450c789b2242b', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4139, '19/008', 'password@1234', '6900f61dc59e9c0bf7a886847d871560', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4138, '19/007', 'password@1234', '2ecd1ea12763e0504f59f2aa06f68f5f', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4137, '19/006', 'password@1234', 'c941566fbc5df0869ce985fb9f3646b7', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(3982, 'AA3322', 'password@1234', '84e30afe140812ad56ca98a79ea97d58', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '19-07-18', 0, 1, 1),
(3983, 'AA3333', 'password@1234', 'ae479bedfb2e2b07171f682ecd459225', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '19-07-18', 0, 1, 1),
(3984, 'AA3344', 'password@1234', '585773820ecbe04336201a40dcceaf3d', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '19-07-18', 0, 1, 1),
(3985, 'AA3355', 'password@1234', 'c701a69003c79b2fed94a2737f8bdf79', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '19-07-18', 0, 1, 1),
(3986, 'AA3366', 'password@1234', '39993d81720e64a9d6796a3f8a5262da', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '19-07-18', 0, 1, 1),
(3987, 'AA3377', 'password@1234', '1b4ee6d55795d151ac2f96e056706593', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '19-07-18', 1, 1, 1),
(3988, 'AA3388', 'password@1234', '9b0f153e43bcd1a82508fcfdb181d118', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '19-07-18', 0, 1, 1),
(3989, '333333', 'password@1234', '1a100d2c0dab19c4430e7d73762b3423', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '21-11-18', 0, 1, 1),
(4136, '19/005', 'password@1234', '5d8bc98666dbe707f3913cef08449355', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4135, '19/004', 'password@1234', '6924daafd57cfb3770cef131f9c0050a', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4133, '19/002', 'password@1234', 'df587d859037c70506eaa911cd45a3d7', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 1, 1, 1),
(3992, 'AA1010', 'password@1234', 'c92c42dcfbd514b5104326b47f515621', 'cce2f81bb110bd8e7bab9779491caf09', 'staff', '10-12-19', 1, 1, 1),
(4131, '19/000', 'password@1234', '96ea59946481bf01a731c254406c441a', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4134, '19/003', 'password@1234', 'fcea754a1a0e9610957768faf6cfc902', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4132, '19/001', 'password@1234', 'ed171106616a441e0a8b0d7f08d2b9d1', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4175, '19/045', 'password@1234', '647c29a4c89a943871247d70ce9fd781', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4176, '19/046', 'password@1234', '15021bbde491e5d515c7cc59989a3a8a', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4177, '19/047', 'password@1234', 'c548a41d0e7431ec7c49a4df603f229e', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4178, '19/048', 'password@1234', '9d3e9f15e035802e2363a60436e5d4a7', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4179, '19/049', 'password@1234', '2610f21bdf49743a2d2e24c625082a9c', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4180, '19/050', 'password@1234', '040f2303ff98b0bb3d38ba898eaad7e9', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4181, '19/051', 'password@1234', '8054c612ab4568afc3c2ace4ce513cd5', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4182, '19/052', 'password@1234', '607bb861df4f877deee7849487320c6f', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4183, '19/053', 'password@1234', '89f9bc3246c3e5b989144b7e136fe8c3', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4184, '19/054', 'password@1234', '9250d208ae17446032158d25db94d088', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4185, '19/055', 'password@1234', '062893db96c93d97dee383a467e0e316', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4186, '19/056', 'password@1234', '736082e7c81f50311170eb6604beeb41', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4187, '19/057', 'password@1234', '3fa96bd8a195c859ff8fb5d2a85a50b3', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4188, '19/058', 'password@1234', 'eb07371210e360044e26c3b3d93f4fdd', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1),
(4189, '19/059', 'password@1234', 'd2dde3e4d48f047e315e61319e859cb0', 'cce2f81bb110bd8e7bab9779491caf09', 'student', '19-01-2020', 0, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `anoucement`
--
ALTER TABLE `anoucement`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `class_arm`
--
ALTER TABLE `class_arm`
  ADD PRIMARY KEY (`arm_id`);

--
-- Indexes for table `daily_report`
--
ALTER TABLE `daily_report`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `elective_subject`
--
ALTER TABLE `elective_subject`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `exam_access`
--
ALTER TABLE `exam_access`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `exam_details`
--
ALTER TABLE `exam_details`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`code`),
  ADD UNIQUE KEY `code` (`sn`);

--
-- Indexes for table `final_score`
--
ALTER TABLE `final_score`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `gone`
--
ALTER TABLE `gone`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `admission_no` (`admission_no`);

--
-- Indexes for table `graduated`
--
ALTER TABLE `graduated`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `admission_no` (`admission_no`);

--
-- Indexes for table `inactive`
--
ALTER TABLE `inactive`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `jss3_asp`
--
ALTER TABLE `jss3_asp`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `student` (`student`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `oldresult`
--
ALTER TABLE `oldresult`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `paid_fees`
--
ALTER TABLE `paid_fees`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `pin`
--
ALTER TABLE `pin`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `pin` (`pin`);

--
-- Indexes for table `pre_students`
--
ALTER TABLE `pre_students`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `result_access`
--
ALTER TABLE `result_access`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `result_query`
--
ALTER TABLE `result_query`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `result_record`
--
ALTER TABLE `result_record`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `sch_sys`
--
ALTER TABLE `sch_sys`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `employee` (`employee`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `student` (`student`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `admission_no` (`admission_no`);

--
-- Indexes for table `student_option`
--
ALTER TABLE `student_option`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `userid2` (`userid2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `anoucement`
--
ALTER TABLE `anoucement`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `class_arm`
--
ALTER TABLE `class_arm`
  MODIFY `arm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `daily_report`
--
ALTER TABLE `daily_report`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `elective_subject`
--
ALTER TABLE `elective_subject`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `exam_access`
--
ALTER TABLE `exam_access`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `exam_details`
--
ALTER TABLE `exam_details`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `code` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `final_score`
--
ALTER TABLE `final_score`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gone`
--
ALTER TABLE `gone`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `graduated`
--
ALTER TABLE `graduated`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inactive`
--
ALTER TABLE `inactive`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jss3_asp`
--
ALTER TABLE `jss3_asp`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `oldresult`
--
ALTER TABLE `oldresult`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paid_fees`
--
ALTER TABLE `paid_fees`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pin`
--
ALTER TABLE `pin`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pre_students`
--
ALTER TABLE `pre_students`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=861;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `result_access`
--
ALTER TABLE `result_access`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `result_query`
--
ALTER TABLE `result_query`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `result_record`
--
ALTER TABLE `result_record`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sch_sys`
--
ALTER TABLE `sch_sys`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `student_option`
--
ALTER TABLE `student_option`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4190;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
