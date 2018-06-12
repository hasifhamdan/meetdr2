-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2017 at 08:57 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meetdr`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `app_id` varchar(50) NOT NULL,
  `app_date` date DEFAULT NULL,
  `app_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `doctor_id` varchar(50) DEFAULT NULL,
  `patient_id` varchar(50) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `app_date`, `app_time`, `doctor_id`, `patient_id`, `status`) VALUES
('A001', '2017-04-05', '2017-09-21 06:20:31', 'D001', 'P001', 0),
('A002', '2017-05-03', '2017-09-21 06:20:44', 'D002', 'P002', 0),
('A003', '2017-07-17', '2017-09-21 06:20:51', 'D003', 'P003', 0),
('A004', '2017-08-16', '2017-09-21 06:00:00', 'D001', 'P004', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doctor_id` varchar(50) NOT NULL,
  `first_name` varchar(80) DEFAULT NULL,
  `last_name` varchar(80) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `hospt_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `first_name`, `last_name`, `title`, `hospt_id`) VALUES
('D001 ', 'Dr Amir', 'Hazim', 'Dr', 'H001'),
('D002', 'Dr Shahrul', 'Hafiz', 'Dr', 'H002'),
('D003', 'Dr Tan Chin ', 'Na', 'Dr', 'H002'),
('D004', 'Dr Kamala a/p', 'Surendran', 'Dr', 'H002'),
('D005', 'Dr Amri', 'Yahyah', 'Dr', 'H003');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_meeting`
--

CREATE TABLE IF NOT EXISTS `doctor_meeting` (
  `meeting_created` varchar(10) NOT NULL,
  `meeting_id` varchar(50) NOT NULL,
  `meeting_title` varchar(30) DEFAULT NULL,
  `meeting_desc` varchar(100) NOT NULL,
  `meeting_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `meeting_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_meeting`
--

INSERT INTO `doctor_meeting` (`meeting_created`, `meeting_id`, `meeting_title`, `meeting_desc`, `meeting_time`, `meeting_date`) VALUES
('D001', 'M001', '', 'asdas', '2017-09-21 15:36:19', '2017-06-05'),
('D001', 'M002', 'b', 'asdas', '2017-09-21 11:02:29', '2017-09-01'),
('D002', 'M003', 'c', 'asdasd', '2017-09-21 11:14:56', '2017-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE IF NOT EXISTS `emergency` (
  `emer_id` varchar(50) NOT NULL,
  `emer_date` datetime DEFAULT NULL,
  `token` text,
  `resource_id` varchar(10) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`emer_id`, `emer_date`, `token`, `resource_id`, `status`) VALUES
('E001', '2017-05-03 11:00:00', NULL, NULL, '1'),
('E002', '2017-06-08 08:00:00', NULL, NULL, '1'),
('E003', '2017-07-31 08:00:00', NULL, NULL, '1'),
('E004', '2017-08-17 10:00:00', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `hospt_id` varchar(50) NOT NULL,
  `hospt_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospt_id`, `hospt_name`) VALUES
('H001', 'KPJ Hospital'),
('H002', 'Pantai Hospital'),
('H003', 'Putra Specialist Hospital'),
('H004', 'Hospital Putrajaya');

-- --------------------------------------------------------

--
-- Table structure for table `online_appointment`
--

CREATE TABLE IF NOT EXISTS `online_appointment` (
  `OAPP_ID` varchar(50) NOT NULL,
  `t_start` timestamp NULL DEFAULT NULL,
  `t_end` timestamp NULL DEFAULT NULL,
  `OPDate` date DEFAULT NULL,
  `doctor_id` varchar(50) DEFAULT NULL,
  `status` char(1) DEFAULT '0',
  `om_time` datetime DEFAULT NULL,
  `token` text,
  `resource_id` varchar(30) NOT NULL,
  `patient_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_appointment`
--

INSERT INTO `online_appointment` (`OAPP_ID`, `t_start`, `t_end`, `OPDate`, `doctor_id`, `status`, `om_time`, `token`, `resource_id`, `patient_id`) VALUES
('OAPP1', '2017-04-05 02:00:00', '2017-04-05 04:00:00', '2017-04-05', 'D001', '1', '2017-09-20 02:00:00', NULL, '', 'P001'),
('OAPP2', '2017-07-19 07:00:00', '2017-07-19 09:00:00', '2017-07-20', 'D002', '1', '2017-09-21 02:00:00', NULL, '', 'P002');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE IF NOT EXISTS `participant` (
  `paticipant_id` varchar(50) NOT NULL,
  `meeting_id` varchar(50) DEFAULT NULL,
  `participant_token` varchar(255) DEFAULT NULL,
  `participant_status` char(1) DEFAULT '0',
  `doctor_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`paticipant_id`, `meeting_id`, `participant_token`, `participant_status`, `doctor_id`) VALUES
('fgh', 'qe', NULL, '0', NULL),
('PR001', 'M001', NULL, '1', 'D001'),
('PR002', 'M002', NULL, '0', 'D002');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `patient_id` varchar(50) NOT NULL,
  `first_name` varchar(80) DEFAULT NULL,
  `last_name` varchar(80) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `new_ic_no` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `first_name`, `last_name`, `gender`, `new_ic_no`) VALUES
('P001', 'Muhammad ', 'Zamri', 'Male', '900912015457'),
('P002', 'Muhammad', 'Syahir', 'Male', '720808047277'),
('P003', 'Nur', 'Syahirah', 'Female', '741202105456'),
('P004', 'Ng Thiam', 'Tet', 'Male', '691124055155'),
('P005', 'Sharanya', 'Subramaniam', 'Male', '770204045366');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `doctor_meeting`
--
ALTER TABLE `doctor_meeting`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`emer_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospt_id`);

--
-- Indexes for table `online_appointment`
--
ALTER TABLE `online_appointment`
  ADD PRIMARY KEY (`OAPP_ID`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`paticipant_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
