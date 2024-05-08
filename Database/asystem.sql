-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 06:03 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE IF NOT EXISTS `admininfo` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`username`, `password`, `email`, `fname`, `type`) VALUES
('Bindu', 'bindu', 'bindu@gmail.com', 'bindu', 'student'),
('dharshu', 'dharshu12', 'dharshu12@gmail.com', 'dharshini', 'admin'),
('kavin', 'kavin', 'kavin@gmail.com', 'kavin', 'student'),
('mew', 'mew', 'mew@gmail.com', 'mew', 'student'),
('raji', 'raji', 'raji@gmail.com', 'raji', 'teacher'),
('sandy', 'sandy', 'sandy@gmail.com', 'sandy', 'teacher'),
('shama', 'shama', 'shama12@gmail.com', 'shama', 'teacher'),
('siva', 'siva13', 'siva13@gmail.com', 'siva', 'student'),
('tamil', 'tamil', 'tamil@gmail.com', 'tamil', 'student'),
('thamizh', 'thamizh', 'thamizh@gmail.com', 'thamizh', 'teacher'),
('vaani', 'vaani', 'vaani@gmail.com', 'vaani', 'student'),
('varsha', 'varsha', 'varsha@gmail.com', 'varsha', 'teacher'),
('vini', 'vini', 'vini12@gmail.com', 'vini', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `stat_id` int(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `st_status` varchar(50) NOT NULL,
  `stat_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`stat_id`, `class`, `st_status`, `stat_date`) VALUES
(1, '1A', 'Present', '2022-10-14'),
(40, '1A', 'Present', '2022-10-14'),
(50, '1A', 'Absent', '2022-10-14'),
(2, '1A', 'Present', '2022-10-14'),
(1, '10B', 'Present', '2022-10-14'),
(3, '3A', 'Present', '2022-10-14'),
(2, '9C', 'Present', '2022-10-14'),
(2, '9C', 'Present', '0000-00-00'),
(1, '10B', 'Absent', '0000-00-00'),
(27, '11C', 'Present', '0000-00-00'),
(27, '11C', 'Present', '2022-10-14'),
(40, '12A', 'Present', '2022-10-14'),
(50, '12A', 'Absent', '2022-10-14'),
(40, '12A', 'Present', '2022-10-14'),
(50, '12A', 'Absent', '2022-10-14'),
(21, '1A', 'Present', '2022-10-14'),
(40, '12A', 'Absent', '2022-10-14'),
(50, '12A', 'Absent', '2022-10-14'),
(0, '', '', '0000-00-00'),
(21, '11C', 'Present', '2022-10-15'),
(27, '11C', 'Present', '2022-10-15'),
(21, '11C', 'Present', '2022-10-15'),
(27, '11C', 'Absent', '2022-10-15'),
(2, '1A', 'Present', '2022-10-15'),
(21, '11C', 'Present', '2022-10-15'),
(27, '11C', 'Absent', '2022-10-15'),
(2, '9B', 'Present', '2022-10-15'),
(21, '1A', 'Present', '2022-10-15'),
(27, '1A', 'Present', '2022-10-15'),
(50, '12B', 'Present', '2022-10-15'),
(50, '12B', 'Present', '2022-10-15'),
(3, '3A', 'Present', '2022-10-15'),
(12, '5A', 'Present', '2022-10-15'),
(16, '6B', 'Present', '2022-10-15'),
(5, '3C', 'Present', '2022-10-15'),
(27, '11C', 'Present', '2022-10-15'),
(3, '1A', 'Present', '2022-10-15'),
(30, '1A', 'Absent', '2022-10-15'),
(30, '3B', 'Present', '2022-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `st_id` int(30) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `stat_period` varchar(30) NOT NULL,
  `st_status` varchar(30) NOT NULL,
  `st_batch` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `st_id` int(30) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `st_cls` varchar(30) NOT NULL,
  `st_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`st_id`, `st_name`, `st_cls`, `st_email`) VALUES
(2, 'abi', '9C', 'abi12@gmail.com'),
(35, 'aish', '8B', 'aish@gmail.com'),
(18, 'ajay', '7C', 'ajay@gmail.com'),
(21, 'Akash', '11B', 'akash@gmail.com'),
(3, 'amuda', '3A', 'amuda@gmail.com'),
(15, 'aswini', '10B', 'aswini@gmail.com'),
(25, 'jaanu', '7A', 'jaanu@gmail.com'),
(38, 'jansi', '2A', 'jansi@gmail.com'),
(27, 'jaya', '11C', 'jaya@gmail.com'),
(12, 'manju', '5C', 'manju@gmail.com'),
(30, 'mano', '3B', 'mano@gmail.com'),
(1, 'naveen', '10A', 'naveen@gmail.com'),
(13, 'raju', '5C', 'raj@gmail.com'),
(5, 'rajkumar', '3C', 'rajkumar@gmail.com'),
(4, 'saindavi', '7A', 'saindavi@gmail.com'),
(1, 'siva', '10B', 'siva12@gmail.com'),
(16, 'sivaani', '6B', 'sivaani@gmail.com'),
(40, 'tiki', '12A', 'tiki@gmail.com'),
(50, 'tt', '12B', 'tt@gmail.com'),
(30, 'vinoth', '3A', 'vinoth@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `tc_id` int(30) NOT NULL,
  `tc_name` varchar(30) NOT NULL,
  `tc_cls` varchar(30) NOT NULL,
  `tc_sub` varchar(30) NOT NULL,
  `tc_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`tc_id`, `tc_name`, `tc_cls`, `tc_sub`, `tc_email`) VALUES
(1, 'shama', '10A', 'English', 'shama12@gmail.com'),
(12, 'Fazil', '11A', 'Tamil', 'fazil@gmail.com'),
(26, 'ravi', '4A', 'Science', 'ravi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
 ADD PRIMARY KEY (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
 ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD UNIQUE KEY `st_email` (`st_email`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
 ADD PRIMARY KEY (`tc_id`), ADD UNIQUE KEY `tc_email` (`tc_email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
