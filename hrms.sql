-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 07:44 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `ID` bigint(20) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `user_name`, `password`) VALUES
(2, 'Alia_Jabeen', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `ID` int(3) NOT NULL,
  `local_city` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ID`, `local_city`) VALUES
(1, 'Quetta'),
(2, 'Turbat'),
(3, 'Khuzdar'),
(4, 'Hub'),
(5, 'Dera Murad Jamali'),
(6, 'Gwadar'),
(7, 'Sibi'),
(8, 'Nushki'),
(9, 'Kharan'),
(10, 'Kalat');

-- --------------------------------------------------------

--
-- Table structure for table `designation_tb`
--

CREATE TABLE IF NOT EXISTS `designation_tb` (
  `ID` int(3) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation_tb`
--

INSERT INTO `designation_tb` (`ID`, `designation`) VALUES
(1, 'HR Manager'),
(2, 'HR Director'),
(3, 'HR Supervisor'),
(4, 'HR Specialist'),
(5, 'Lab Assistant'),
(6, 'IT Specialist'),
(7, 'Office boy'),
(8, 'Sweeper ');

-- --------------------------------------------------------

--
-- Table structure for table `employee_tb`
--

CREATE TABLE IF NOT EXISTS `employee_tb` (
  `emp_ID` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `cnic` bigint(20) NOT NULL,
  `local_domicile` varchar(40) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `joining_date` date NOT NULL,
  `salary` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_tb`
--

INSERT INTO `employee_tb` (`emp_ID`, `name`, `f_name`, `cnic`, `local_domicile`, `date_of_birth`, `gender`, `marital_status`, `contact_no`, `email`, `nationality`, `religion`, `address`, `qualification`, `institute`, `designation`, `joining_date`, `salary`) VALUES
(21, 'Alia', 'Abdul Hakeem Qambrani', 5440106342338, 'Quetta', '1993-06-06', 'Female', 'Unmarried', 923494511831, 'alia.qambrani@gmail.com', 'Pakistani', 'Islam', 'Killi Qambrani', 'Bachelors', 'SBK Women University', 'IT Specialist', '2020-07-07', 50000),
(22, 'Fiza', 'Mehmood', 5440106342338, 'Quetta', '1991-05-06', 'Female', 'Unmarried', 923494511831, 'fiza@gmail.com', 'Pakistani', 'Islam', 'Jinah Town', 'BBA', 'SBK Women University', 'HR Specialist', '2020-07-01', 50000),
(23, 'Riffat', 'Abdul Hakeem Qambrani', 54493467234561, 'Kalat', '1996-07-12', 'Female', 'Unmarried', 923354511831, 'riffat@gmail.com', 'Pakistani', 'Islam', 'Jinah Town', 'MBA', 'University of Balochistan', 'HR Director', '2020-06-16', 50000),
(25, 'Firdos', 'Ghulam Mohammad', 55693467232314, 'Hub', '1992-08-13', 'Female', 'Married', 923113311831, 'firdos@gmail.com', 'Pakistani', 'Islam', 'Saryab Road Quetta', 'Bachelors', 'University of Balochistan', 'HR Specialist', '2020-05-01', 40000),
(26, 'Firdos', 'Ghulam Mohammad', 55693467232314, 'Hub', '1992-08-13', 'Female', 'Married', 923113311831, 'firdos@gmail.com', 'Pakistani', 'Islam', 'Saryab Road Quetta', 'Bachelors', 'University of Balochistan', 'HR Specialist', '2020-05-01', 40000),
(34, 'Samra', 'A.Manan', 54401063423381, 'Kharan', '1993-11-12', 'Female', 'Unmarried', 923354511831, 'samra@gmail.com', 'Pakistani', 'Islam', 'Killi Dheba', 'Bachelors', 'SBK Women University', 'IT Specialist', '2020-07-07', 50000),
(35, 'Mehmoona', 'Abdul Razaq', 55693467232314, 'Select...', '1989-05-12', 'Female', 'Unmarried', 923113311831, 'mehmoona@gmail.com', 'Pakistani', 'Islam', 'Jinah Town', 'Bachelors', 'SBK Women University', 'HR Supervisor', '2020-07-22', 50000),
(36, 'Nazia', 'A.Satar', 54493467234561, 'Kharan', '1992-06-21', 'Female', 'Unmarried', 923354511831, 'nazia@gmail.com', 'Pakistani', 'Islam', 'Saryab Road Quetta', 'BBA', 'SBK Women University', 'HR Specialist', '2020-07-28', 50000),
(37, 'Zahra', 'M.Anwar', 55693467232314, 'Nushki', '1986-03-12', 'Female', 'Married', 923113311831, 'zahra@gmail.com', 'Pakistani', 'Islam', 'Satellite Town ', 'BBA', 'SBK Women University', 'HR Supervisor', '2020-06-30', 50000),
(38, 'Huma', 'Amjad', 55693467232314, 'Sibi', '1985-09-12', 'Female', 'Married', 923354511831, 'huma@gmail.com', 'Pakistani', 'Islam', 'Brewery Road Quetta', 'Masters', 'University of Balochistan', 'HR Supervisor', '2020-07-22', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `qualification_tb`
--

CREATE TABLE IF NOT EXISTS `qualification_tb` (
  `ID` int(3) NOT NULL,
  `qualification` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification_tb`
--

INSERT INTO `qualification_tb` (`ID`, `qualification`) VALUES
(1, 'MBA'),
(2, 'BBA'),
(3, 'Bachelors'),
(4, 'Masters'),
(5, 'Intermediate'),
(6, 'Matriculation'),
(7, 'Middle ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `designation_tb`
--
ALTER TABLE `designation_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee_tb`
--
ALTER TABLE `employee_tb`
  ADD PRIMARY KEY (`emp_ID`);

--
-- Indexes for table `qualification_tb`
--
ALTER TABLE `qualification_tb`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `designation_tb`
--
ALTER TABLE `designation_tb`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `employee_tb`
--
ALTER TABLE `employee_tb`
  MODIFY `emp_ID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `qualification_tb`
--
ALTER TABLE `qualification_tb`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
