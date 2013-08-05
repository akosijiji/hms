-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2013 at 01:16 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospitaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `department_id` int(10) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(40) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=5 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`) VALUES
(1, 'cardiology'),
(2, 'neurology'),
(3, 'internal medicine'),
(4, 'ent');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `doctor_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `doctor_fname` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `doctor_lname` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `doctor_mname` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `department_id` int(10) NOT NULL,
  `doctor_schedule` varchar(50) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=2 ;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `user_id`, `doctor_fname`, `doctor_lname`, `doctor_mname`, `department_id`, `doctor_schedule`) VALUES
(1, 2, 'Ivan', 'Panganiban', 'S', 3, 'M-T-TH 3:00 PM - 5:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE IF NOT EXISTS `drugs` (
  `drug_code` int(11) NOT NULL AUTO_INCREMENT,
  `drug_name` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `generic_name` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `therapeutic` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `subtherapeutic` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `indication` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `manufacturer_name` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `formulation` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `dosage` varchar(10) COLLATE latin1_general_cs NOT NULL,
  `package` varchar(10) COLLATE latin1_general_cs NOT NULL,
  `mrp` int(10) NOT NULL,
  PRIMARY KEY (`drug_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=2 ;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug_code`, `drug_name`, `generic_name`, `therapeutic`, `subtherapeutic`, `indication`, `manufacturer_name`, `formulation`, `dosage`, `package`, `mrp`) VALUES
(1, 'Crocin', 'Paracetamol 250mg Amoxixilyn100mg', 'Allerygy & Immune System', 'Duretics', 'Anti-Allergy & Immune System', 'GSK Healthcare', 'Tablet', '250mg', '1x10', 20);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `mname` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `lname` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `gender` varchar(6) COLLATE latin1_general_cs NOT NULL,
  `bday` varchar(10) COLLATE latin1_general_cs NOT NULL,
  `status` varchar(10) COLLATE latin1_general_cs NOT NULL,
  `occupation` varchar(25) COLLATE latin1_general_cs NOT NULL,
  `religion` varchar(25) COLLATE latin1_general_cs NOT NULL,
  `phoneno` decimal(11,0) NOT NULL,
  `address` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `medicalHistory` varchar(3) COLLATE latin1_general_cs NOT NULL,
  `type` varchar(10) COLLATE latin1_general_cs NOT NULL,
  `remarks` longtext COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=6 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`_id`, `fname`, `mname`, `lname`, `gender`, `bday`, `status`, `occupation`, `religion`, `phoneno`, `address`, `medicalHistory`, `type`, `remarks`) VALUES
(1, 'Rebecca', 'Siervo', 'Sabio', 'Female', '09-08-1960', 'widow', 'Housewife', 'Roman Catholic', 9352593642, 'Sunnyville 4 Ampid 1, San Mateo', 'No', 'Outpatient', 'Asthma'),
(2, 'Minley', 'Aguipon', 'Niegas', 'Female', '12-08-1961', 'separated', 'Housewife', 'Others', 9182621051, 'Puting Bato, Antipolo City', '', 'Inpatient', 'asthma'),
(3, 'John Louie', 'Parreno', 'Serrano', 'Male', '', '', 'Developer', 'Iglesia Ni Cristo', 9182621051, 'Marikina City', '', 'Outpatient', ''),
(4, 'Philip James', 'Siervo', 'Sabio', 'Male', '', '', 'Student', 'Hinduist', 9182621051, 'Marikina City', '', 'Outpatient', ''),
(5, 'Rolando', 'Aguipon', 'Siervo', 'Male', '07-16-2013', 'Married', 'Welder', 'Muslim', 9323387582, 'Puting Bato, Antipolo City', '', 'Outpatient', 'Diabetes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) COLLATE latin1_general_cs NOT NULL,
  `password` varchar(15) COLLATE latin1_general_cs NOT NULL,
  `authority` varchar(15) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`_id`, `username`, `password`, `authority`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'doctor1', 'doctor1', 'doctor'),
(3, 'nurse1', 'nurse1', 'nurse'),
(4, 'pharmacist1', 'pharmacist1', 'pharmacist');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
