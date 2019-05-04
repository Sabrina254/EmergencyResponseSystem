-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 09:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emergency_response`
--
CREATE DATABASE IF NOT EXISTS `emergency_response` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `emergency_response`;

-- --------------------------------------------------------

--
-- Table structure for table `emergency_categories`
--

CREATE TABLE `emergency_categories` (
  `id_emergency_categories` int(11) NOT NULL,
  `emergency_categories_name` varchar(45) NOT NULL,
  `emergency_categories_description` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emergency_categories`
--

INSERT INTO `emergency_categories` (`id_emergency_categories`, `emergency_categories_name`, `emergency_categories_description`) VALUES
(1, 'Medical', 'Medical');

-- --------------------------------------------------------

--
-- Table structure for table `fire_engine_information`
--

CREATE TABLE `fire_engine_information` (
  `id_fire_engine_information` int(11) NOT NULL,
  `fire_engine_information_identifier_number` varchar(45) DEFAULT NULL,
  `fire_engine_information_longitude` varchar(45) DEFAULT NULL,
  `fire_engine_information_latitude` varchar(45) DEFAULT NULL,
  `fire_engine_information_pin` varchar(45) DEFAULT NULL,
  `fire_sid_fire_station_information` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fire_rescue_report`
--

CREATE TABLE `fire_rescue_report` (
  `id_fire_rescue_report` int(11) NOT NULL,
  `fire_rescue_report_status` varchar(45) DEFAULT NULL,
  `Moderator_i_id_Moderator_information` int(11) NOT NULL,
  `Moderator_iec_id_emergency_categories` int(11) NOT NULL,
  `Moderator_ila_id_level_assignment` int(11) NOT NULL,
  `fire_ei_id_fire_engine_information` int(11) NOT NULL,
  `fire_eifsi_id_fire_station_information` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fire_station_information`
--

CREATE TABLE `fire_station_information` (
  `id_fire_station_information` int(11) NOT NULL,
  `fire_station_information_name` varchar(45) NOT NULL,
  `fire_station_information_longitude` varchar(45) NOT NULL,
  `fire_station_information_latitude` varchar(45) NOT NULL,
  `fire_station_information_identifier_number` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `general_rescue_report`
--

CREATE TABLE `general_rescue_report` (
  `id_general_rescue_report` int(11) NOT NULL,
  `general_rescue_report_status` varchar(45) DEFAULT NULL,
  `Mi_id_Moderator_information` int(11) NOT NULL,
  `Miec_id_emergency_categories` int(11) NOT NULL,
  `Mila_id_level_assignment` int(11) NOT NULL,
  `rescueti_id_rescue_team_information` int(11) NOT NULL,
  `rtirsi_id_rescue_station_information` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hospital_information`
--

CREATE TABLE `hospital_information` (
  `id_hospital_information` int(11) NOT NULL,
  `hospital_information_name` varchar(45) NOT NULL,
  `hospital_information_longitude` varchar(45) NOT NULL,
  `hospital_information_latitiude` varchar(45) NOT NULL,
  `hospital_information_available` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `level_assignment`
--

CREATE TABLE `level_assignment` (
  `id_level_assignment` int(11) NOT NULL,
  `level_assignment_name` varchar(45) NOT NULL,
  `level_assignment_description` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level_assignment`
--

INSERT INTO `level_assignment` (`id_level_assignment`, `level_assignment_name`, `level_assignment_description`) VALUES
(1, 'Medical', 'Medical');

-- --------------------------------------------------------

--
-- Table structure for table `moderator_information`
--

CREATE TABLE `moderator_information` (
  `id_Moderator_information` int(11) NOT NULL,
  `Moderator_information_name` varchar(45) NOT NULL,
  `Moderator_information_phone` varchar(45) NOT NULL,
  `moderator_email` varchar(100) NOT NULL,
  `moderator_username` varchar(100) NOT NULL,
  `Moderator_information_pin` varchar(45) NOT NULL,
  `ec_id_emergency_categories` int(11) NOT NULL,
  `level_assignment_id_level_assignment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moderator_information`
--

INSERT INTO `moderator_information` (`id_Moderator_information`, `Moderator_information_name`, `Moderator_information_phone`, `moderator_email`, `moderator_username`, `Moderator_information_pin`, `ec_id_emergency_categories`, `level_assignment_id_level_assignment`) VALUES
(1, 'Karim K. Kanji', '0703756325', 'karimkanji101@gmail.com', 'kanji-karanja', '1234', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `paramedics_information`
--

CREATE TABLE `paramedics_information` (
  `id_paramedics_information` int(11) NOT NULL,
  `paramedics_information_ambulance_number` varchar(10) DEFAULT NULL,
  `paramedics_information_available` tinyint(4) DEFAULT NULL,
  `paramedics_information_longitude` varchar(45) DEFAULT NULL,
  `paramedics_information_latitude` varchar(45) DEFAULT NULL,
  `paramedics_information_pin` varchar(45) DEFAULT NULL,
  `hospital_information_id_hospital_information` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `paramedic_rescue_report`
--

CREATE TABLE `paramedic_rescue_report` (
  `id_paramedic_rescue_report` int(11) NOT NULL,
  `paramedic_rescue_report_status` varchar(45) DEFAULT NULL,
  `id_Moderator_information` int(11) NOT NULL,
  `id_emergency_categories` int(11) NOT NULL,
  `Mila_id_level_assignment` int(11) NOT NULL,
  `id_paramedics_information` int(11) NOT NULL,
  `hi_id_hospital_information` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rescue_station_information`
--

CREATE TABLE `rescue_station_information` (
  `id_rescue_station_information` int(11) NOT NULL,
  `rescue_station_information_name` varchar(45) NOT NULL,
  `rescue_station_information_longitude` varchar(45) NOT NULL,
  `rescue_station_information_latutude` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rescue_team_information`
--

CREATE TABLE `rescue_team_information` (
  `id_rescue_team_information` int(11) NOT NULL,
  `rescue_team_information_identifier_number` varchar(45) NOT NULL,
  `rescue_team_information_pin` varchar(45) NOT NULL,
  `rescue_team_informationcol` varchar(45) NOT NULL,
  `rescue_team_information_longitude` varchar(45) NOT NULL,
  `rescue_team_information_latitude` varchar(45) NOT NULL,
  `rescue_team_information_available` varchar(45) NOT NULL,
  `rsi_id_rescue_station_information` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id_user_information` int(11) NOT NULL,
  `user_information_name` varchar(45) NOT NULL,
  `user_information_phone_number` varchar(13) NOT NULL,
  `user_information_pin` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id_user_information`, `user_information_name`, `user_information_phone_number`, `user_information_pin`) VALUES
(19, 'Karim K. Kanji', '0703756325', '1234'),
(20, 'Dr. Muhambe', '0712345678', '1234'),
(21, 'Ralak Rose', '0701243125', '1234'),
(22, 'Jean Yego', '0702682720', '1111'),
(23, 'Donnilla Justo', '0712345679', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `user_request_fire`
--

CREATE TABLE `user_request_fire` (
  `id_user_request` int(11) NOT NULL,
  `user_request_longitude` varchar(45) DEFAULT NULL,
  `user_request_latitude` varchar(45) DEFAULT NULL,
  `user_information_id_user_information` int(11) NOT NULL,
  `user_request_time_stamp` datetime DEFAULT NULL,
  `user_request_fire_status` varchar(45) DEFAULT NULL,
  `id_fire_engine_information` int(11) DEFAULT NULL,
  `fire_e_id_fire_station_information` int(11) DEFAULT NULL,
  `request_manual` varchar(4) NOT NULL,
  `request_details_manual` varchar(10000) DEFAULT NULL,
  `help_code` varchar(10) NOT NULL,
  `assigned` varchar(5) DEFAULT NULL,
  `complete` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_request_fire`
--

INSERT INTO `user_request_fire` (`id_user_request`, `user_request_longitude`, `user_request_latitude`, `user_information_id_user_information`, `user_request_time_stamp`, `user_request_fire_status`, `id_fire_engine_information`, `fire_e_id_fire_station_information`, `request_manual`, `request_details_manual`, `help_code`, `assigned`, `complete`) VALUES
(1, '36.8173056', '-1.2804096', 19, '2019-02-27 09:02:59', NULL, NULL, NULL, 'no', NULL, '', NULL, NULL),
(2, '36.816486399999995', '-1.2828671999999999', 19, '2019-02-27 10:45:17', NULL, NULL, NULL, 'no', NULL, 'F51756', NULL, NULL),
(3, NULL, NULL, 19, '2019-02-27 10:48:25', NULL, NULL, NULL, 'yes', 'Hello there', 'F19912', NULL, NULL),
(4, NULL, NULL, 23, '2019-02-27 18:51:29', NULL, NULL, NULL, 'yes', 'This is the location', 'F82027', NULL, NULL),
(5, NULL, NULL, 19, '2019-03-04 13:46:35', NULL, NULL, NULL, 'yes', 'Maseno University, School of computing and informatics, electronics lab', 'F74137', NULL, NULL),
(6, '34.6104502', '-0.0041976', 19, '2019-03-05 11:26:33', NULL, NULL, NULL, 'no', NULL, 'F16297', 'yes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_request_paramedics`
--

CREATE TABLE `user_request_paramedics` (
  `id_user_request` int(11) NOT NULL,
  `user_request_longitude` varchar(45) DEFAULT NULL,
  `user_request_latitude` varchar(45) DEFAULT NULL,
  `user_information_id_user_information` int(11) NOT NULL,
  `user_request_time_stamp` varchar(45) DEFAULT NULL,
  `paramedics_information_id_paramedics_information` int(11) DEFAULT NULL,
  `phi_id_hospital_information` int(11) DEFAULT NULL,
  `request_manual` varchar(4) NOT NULL,
  `request_details_manual` varchar(10000) DEFAULT NULL,
  `help_code` varchar(10) NOT NULL,
  `assigned` varchar(5) DEFAULT NULL,
  `complete` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_request_paramedics`
--

INSERT INTO `user_request_paramedics` (`id_user_request`, `user_request_longitude`, `user_request_latitude`, `user_information_id_user_information`, `user_request_time_stamp`, `paramedics_information_id_paramedics_information`, `phi_id_hospital_information`, `request_manual`, `request_details_manual`, `help_code`, `assigned`, `complete`) VALUES
(1, '-1.2836864000000001', '36.8238592', 19, '2019-02-27 08:26:30', NULL, NULL, 'no', NULL, '', 'yes', 'success'),
(2, NULL, NULL, 19, '2019-02-27 08:26:53', NULL, NULL, 'yes', 'Hello there', '', NULL, NULL),
(3, '34.6103531', '-0.004951199999999999', 19, '2019-02-27 08:33:15', NULL, NULL, 'no', NULL, '', NULL, NULL),
(4, NULL, NULL, 19, '2019-02-27 09:53:09', NULL, NULL, 'yes', 'HEllo', 'M21258', NULL, NULL),
(5, NULL, NULL, 19, '2019-02-27 09:55:18', NULL, NULL, 'yes', 'hello', 'M83774', NULL, NULL),
(6, '36.816486399999995', '-1.2828671999999999', 19, '2019-02-27 10:26:26', NULL, NULL, 'no', NULL, 'M61276', NULL, NULL),
(7, NULL, NULL, 19, '2019-02-27 10:51:22', NULL, NULL, 'yes', 'gyyy', 'M93785', NULL, NULL),
(8, '36.8205824', '-1.2820479999999999', 20, '2019-02-27 11:30:11', NULL, NULL, 'no', NULL, 'M77032', NULL, NULL),
(9, NULL, NULL, 21, '2019-02-27 14:53:52', NULL, NULL, 'yes', 'This is  my positition', 'M58298', NULL, NULL),
(10, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:11', NULL, NULL, 'no', NULL, 'M5562', NULL, NULL),
(11, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:17', NULL, NULL, 'no', NULL, 'M6961', NULL, NULL),
(12, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:18', NULL, NULL, 'no', NULL, 'M2284', NULL, NULL),
(13, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:18', NULL, NULL, 'no', NULL, 'M51384', NULL, NULL),
(14, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:18', NULL, NULL, 'no', NULL, 'M53823', NULL, NULL),
(15, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:19', NULL, NULL, 'no', NULL, 'M23391', NULL, NULL),
(16, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:19', NULL, NULL, 'no', NULL, 'M50942', NULL, NULL),
(17, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:19', NULL, NULL, 'no', NULL, 'M1044', NULL, NULL),
(18, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:19', NULL, NULL, 'no', NULL, 'M8389', NULL, NULL),
(19, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:20', NULL, NULL, 'no', NULL, 'M31344', 'yes', NULL),
(20, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:20', NULL, NULL, 'no', NULL, 'M36133', NULL, NULL),
(21, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:20', NULL, NULL, 'no', NULL, 'M18121', NULL, NULL),
(22, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:20', NULL, NULL, 'no', NULL, 'M31403', NULL, NULL),
(23, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:20', NULL, NULL, 'no', NULL, 'M48931', NULL, NULL),
(24, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:20', NULL, NULL, 'no', NULL, 'M75207', NULL, NULL),
(25, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:21', NULL, NULL, 'no', NULL, 'M78195', NULL, NULL),
(26, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:21', NULL, NULL, 'no', NULL, 'M45421', NULL, NULL),
(27, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:21', NULL, NULL, 'no', NULL, 'M52478', NULL, NULL),
(28, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:21', NULL, NULL, 'no', NULL, 'M93256', NULL, NULL),
(29, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:21', NULL, NULL, 'no', NULL, 'M66869', NULL, NULL),
(30, '34.604256299999996', '-0.0042654', 22, '2019-02-27 15:00:22', NULL, NULL, 'no', NULL, 'M66123', NULL, NULL),
(31, NULL, NULL, 23, '2019-02-27 18:58:24', NULL, NULL, 'yes', 'Thus is found', 'M83154', NULL, NULL),
(32, NULL, NULL, 19, '2019-02-27 19:00:05', NULL, NULL, 'yes', 'OOkay empijg', 'M34166', NULL, NULL),
(33, NULL, NULL, 19, '2019-02-27 19:03:30', NULL, NULL, 'yes', 'dd', 'M63888', NULL, NULL),
(34, NULL, NULL, 19, '2019-02-27 19:06:24', NULL, NULL, 'yes', 'so this is happening', 'M84925', NULL, NULL),
(35, NULL, NULL, 19, '2019-02-27 22:19:56', NULL, NULL, 'yes', 'so this is happening', 'M73368', NULL, NULL),
(36, NULL, NULL, 19, '2019-02-27 22:21:47', NULL, NULL, 'yes', 'so this is happening', 'M73397', NULL, NULL),
(37, NULL, NULL, 19, '2019-02-27 22:23:10', NULL, NULL, 'yes', 'so this is happening', 'M34671', NULL, NULL),
(38, NULL, NULL, 19, '2019-03-04 16:05:57', NULL, NULL, 'yes', 'hello', 'M86130', NULL, NULL),
(39, NULL, NULL, 19, '2019-03-05 10:21:09', NULL, NULL, 'yes', 'Maseno University tb3', 'M77842', 'yes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_request_rescue`
--

CREATE TABLE `user_request_rescue` (
  `id_user_request` int(11) NOT NULL,
  `user_request_longitude` varchar(45) DEFAULT NULL,
  `user_request_latitude` varchar(45) DEFAULT NULL,
  `user_information_id_user_information` int(11) NOT NULL,
  `user_request_time_stamp` varchar(45) DEFAULT NULL,
  `user_request_rescue_status` varchar(45) DEFAULT NULL,
  `rescue_team_information_id_rescue_team_information` int(11) DEFAULT NULL,
  `rtirsi_id_rescue_station_information` int(11) DEFAULT NULL,
  `request_manual` varchar(4) NOT NULL,
  `request_details_manual` varchar(10000) DEFAULT NULL,
  `help_code` varchar(10) NOT NULL,
  `assigned` varchar(5) DEFAULT NULL,
  `complete` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_request_rescue`
--

INSERT INTO `user_request_rescue` (`id_user_request`, `user_request_longitude`, `user_request_latitude`, `user_information_id_user_information`, `user_request_time_stamp`, `user_request_rescue_status`, `rescue_team_information_id_rescue_team_information`, `rtirsi_id_rescue_station_information`, `request_manual`, `request_details_manual`, `help_code`, `assigned`, `complete`) VALUES
(1, '36.816486399999995', '-1.2828671999999999', 19, '2019-02-27 10:47:45', NULL, NULL, NULL, 'no', NULL, 'N86588', NULL, NULL),
(2, NULL, NULL, 19, '2019-03-04 23:45:56', NULL, NULL, NULL, 'yes', 'This is just a test', 'N99905', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emergency_categories`
--
ALTER TABLE `emergency_categories`
  ADD PRIMARY KEY (`id_emergency_categories`);

--
-- Indexes for table `fire_engine_information`
--
ALTER TABLE `fire_engine_information`
  ADD PRIMARY KEY (`id_fire_engine_information`,`fire_sid_fire_station_information`),
  ADD KEY `fk_fire_engine_information_fire_station_information_idx` (`fire_sid_fire_station_information`);

--
-- Indexes for table `fire_rescue_report`
--
ALTER TABLE `fire_rescue_report`
  ADD PRIMARY KEY (`id_fire_rescue_report`,`fire_ei_id_fire_engine_information`,`fire_eifsi_id_fire_station_information`),
  ADD KEY `fk_fire_rescue_report_Moderator_information1_idx` (`Moderator_i_id_Moderator_information`,`Moderator_iec_id_emergency_categories`,`Moderator_ila_id_level_assignment`),
  ADD KEY `fk_fire_rescue_report_fire_engine_information1_idx` (`fire_ei_id_fire_engine_information`,`fire_eifsi_id_fire_station_information`);

--
-- Indexes for table `fire_station_information`
--
ALTER TABLE `fire_station_information`
  ADD PRIMARY KEY (`id_fire_station_information`);

--
-- Indexes for table `general_rescue_report`
--
ALTER TABLE `general_rescue_report`
  ADD PRIMARY KEY (`id_general_rescue_report`,`rescueti_id_rescue_team_information`,`rtirsi_id_rescue_station_information`),
  ADD KEY `fk_general_rescue_report_Moderator_information1_idx` (`Mi_id_Moderator_information`,`Miec_id_emergency_categories`,`Mila_id_level_assignment`),
  ADD KEY `fk_general_rescue_report_rescue_team_information1_idx` (`rescueti_id_rescue_team_information`,`rtirsi_id_rescue_station_information`);

--
-- Indexes for table `hospital_information`
--
ALTER TABLE `hospital_information`
  ADD PRIMARY KEY (`id_hospital_information`);

--
-- Indexes for table `level_assignment`
--
ALTER TABLE `level_assignment`
  ADD PRIMARY KEY (`id_level_assignment`);

--
-- Indexes for table `moderator_information`
--
ALTER TABLE `moderator_information`
  ADD PRIMARY KEY (`id_Moderator_information`,`ec_id_emergency_categories`,`level_assignment_id_level_assignment`),
  ADD KEY `fk_Moderator_information_emergency_categories1_idx` (`ec_id_emergency_categories`),
  ADD KEY `fk_Moderator_information_level_assignment1_idx` (`level_assignment_id_level_assignment`);

--
-- Indexes for table `paramedics_information`
--
ALTER TABLE `paramedics_information`
  ADD PRIMARY KEY (`id_paramedics_information`,`hospital_information_id_hospital_information`),
  ADD KEY `fk_paramedics_information_hospital_information1_idx` (`hospital_information_id_hospital_information`);

--
-- Indexes for table `paramedic_rescue_report`
--
ALTER TABLE `paramedic_rescue_report`
  ADD PRIMARY KEY (`id_paramedic_rescue_report`,`id_paramedics_information`,`hi_id_hospital_information`),
  ADD KEY `fk_paramedic_rescue_report_Moderator_information1_idx` (`id_Moderator_information`,`id_emergency_categories`,`Mila_id_level_assignment`),
  ADD KEY `fk_paramedic_rescue_report_paramedics_information1_idx` (`id_paramedics_information`,`hi_id_hospital_information`);

--
-- Indexes for table `rescue_station_information`
--
ALTER TABLE `rescue_station_information`
  ADD PRIMARY KEY (`id_rescue_station_information`);

--
-- Indexes for table `rescue_team_information`
--
ALTER TABLE `rescue_team_information`
  ADD PRIMARY KEY (`id_rescue_team_information`,`rsi_id_rescue_station_information`),
  ADD KEY `fk_rescue_team_information_rescue_station_information1_idx` (`rsi_id_rescue_station_information`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id_user_information`);

--
-- Indexes for table `user_request_fire`
--
ALTER TABLE `user_request_fire`
  ADD PRIMARY KEY (`id_user_request`,`user_information_id_user_information`),
  ADD KEY `fk_user_request_user_information1_idx` (`user_information_id_user_information`),
  ADD KEY `fk_user_request_fire_fire_engine_information1_idx` (`id_fire_engine_information`,`fire_e_id_fire_station_information`);

--
-- Indexes for table `user_request_paramedics`
--
ALTER TABLE `user_request_paramedics`
  ADD PRIMARY KEY (`id_user_request`,`user_information_id_user_information`),
  ADD KEY `fk_user_request_user_information1_idx` (`user_information_id_user_information`),
  ADD KEY `fk_user_request_paramedics_paramedics_information1_idx` (`paramedics_information_id_paramedics_information`,`phi_id_hospital_information`);

--
-- Indexes for table `user_request_rescue`
--
ALTER TABLE `user_request_rescue`
  ADD PRIMARY KEY (`id_user_request`,`user_information_id_user_information`),
  ADD KEY `fk_user_request_user_information1_idx` (`user_information_id_user_information`),
  ADD KEY `fk_user_request_rescue_rescue_team_information1_idx` (`rescue_team_information_id_rescue_team_information`,`rtirsi_id_rescue_station_information`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fire_engine_information`
--
ALTER TABLE `fire_engine_information`
  MODIFY `id_fire_engine_information` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fire_rescue_report`
--
ALTER TABLE `fire_rescue_report`
  MODIFY `id_fire_rescue_report` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fire_station_information`
--
ALTER TABLE `fire_station_information`
  MODIFY `id_fire_station_information` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_rescue_report`
--
ALTER TABLE `general_rescue_report`
  MODIFY `id_general_rescue_report` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital_information`
--
ALTER TABLE `hospital_information`
  MODIFY `id_hospital_information` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moderator_information`
--
ALTER TABLE `moderator_information`
  MODIFY `id_Moderator_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paramedics_information`
--
ALTER TABLE `paramedics_information`
  MODIFY `id_paramedics_information` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rescue_station_information`
--
ALTER TABLE `rescue_station_information`
  MODIFY `id_rescue_station_information` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rescue_team_information`
--
ALTER TABLE `rescue_team_information`
  MODIFY `id_rescue_team_information` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id_user_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_request_fire`
--
ALTER TABLE `user_request_fire`
  MODIFY `id_user_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_request_paramedics`
--
ALTER TABLE `user_request_paramedics`
  MODIFY `id_user_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_request_rescue`
--
ALTER TABLE `user_request_rescue`
  MODIFY `id_user_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fire_engine_information`
--
ALTER TABLE `fire_engine_information`
  ADD CONSTRAINT `fk_fire_engine_information_fire_station_information` FOREIGN KEY (`fire_sid_fire_station_information`) REFERENCES `fire_station_information` (`id_fire_station_information`);

--
-- Constraints for table `fire_rescue_report`
--
ALTER TABLE `fire_rescue_report`
  ADD CONSTRAINT `fk_fire_rescue_report_Moderator_information1` FOREIGN KEY (`Moderator_i_id_Moderator_information`,`Moderator_iec_id_emergency_categories`,`Moderator_ila_id_level_assignment`) REFERENCES `moderator_information` (`id_Moderator_information`, `ec_id_emergency_categories`, `level_assignment_id_level_assignment`),
  ADD CONSTRAINT `fk_fire_rescue_report_fire_engine_information1` FOREIGN KEY (`fire_ei_id_fire_engine_information`,`fire_eifsi_id_fire_station_information`) REFERENCES `fire_engine_information` (`id_fire_engine_information`, `fire_sid_fire_station_information`);

--
-- Constraints for table `general_rescue_report`
--
ALTER TABLE `general_rescue_report`
  ADD CONSTRAINT `fk_general_rescue_report_Moderator_information1` FOREIGN KEY (`Mi_id_Moderator_information`,`Miec_id_emergency_categories`,`Mila_id_level_assignment`) REFERENCES `moderator_information` (`id_Moderator_information`, `ec_id_emergency_categories`, `level_assignment_id_level_assignment`),
  ADD CONSTRAINT `fk_general_rescue_report_rescue_team_information1` FOREIGN KEY (`rescueti_id_rescue_team_information`,`rtirsi_id_rescue_station_information`) REFERENCES `rescue_team_information` (`id_rescue_team_information`, `rsi_id_rescue_station_information`);

--
-- Constraints for table `moderator_information`
--
ALTER TABLE `moderator_information`
  ADD CONSTRAINT `fk_Moderator_information_emergency_categories1` FOREIGN KEY (`ec_id_emergency_categories`) REFERENCES `emergency_categories` (`id_emergency_categories`),
  ADD CONSTRAINT `fk_Moderator_information_level_assignment1` FOREIGN KEY (`level_assignment_id_level_assignment`) REFERENCES `level_assignment` (`id_level_assignment`);

--
-- Constraints for table `paramedics_information`
--
ALTER TABLE `paramedics_information`
  ADD CONSTRAINT `fk_paramedics_information_hospital_information1` FOREIGN KEY (`hospital_information_id_hospital_information`) REFERENCES `hospital_information` (`id_hospital_information`);

--
-- Constraints for table `paramedic_rescue_report`
--
ALTER TABLE `paramedic_rescue_report`
  ADD CONSTRAINT `fk_paramedic_rescue_report_Moderator_information1` FOREIGN KEY (`id_Moderator_information`,`id_emergency_categories`,`Mila_id_level_assignment`) REFERENCES `moderator_information` (`id_Moderator_information`, `ec_id_emergency_categories`, `level_assignment_id_level_assignment`),
  ADD CONSTRAINT `fk_paramedic_rescue_report_paramedics_information1` FOREIGN KEY (`id_paramedics_information`,`hi_id_hospital_information`) REFERENCES `paramedics_information` (`id_paramedics_information`, `hospital_information_id_hospital_information`);

--
-- Constraints for table `rescue_team_information`
--
ALTER TABLE `rescue_team_information`
  ADD CONSTRAINT `fk_rescue_team_information_rescue_station_information1` FOREIGN KEY (`rsi_id_rescue_station_information`) REFERENCES `rescue_station_information` (`id_rescue_station_information`);

--
-- Constraints for table `user_request_fire`
--
ALTER TABLE `user_request_fire`
  ADD CONSTRAINT `fk_user_request_fire_fire_engine_information1` FOREIGN KEY (`id_fire_engine_information`,`fire_e_id_fire_station_information`) REFERENCES `fire_engine_information` (`id_fire_engine_information`, `fire_sid_fire_station_information`),
  ADD CONSTRAINT `fk_user_request_user_information1` FOREIGN KEY (`user_information_id_user_information`) REFERENCES `user_information` (`id_user_information`);

--
-- Constraints for table `user_request_paramedics`
--
ALTER TABLE `user_request_paramedics`
  ADD CONSTRAINT `fk_user_request_paramedics_paramedics_information1` FOREIGN KEY (`paramedics_information_id_paramedics_information`,`phi_id_hospital_information`) REFERENCES `paramedics_information` (`id_paramedics_information`, `hospital_information_id_hospital_information`),
  ADD CONSTRAINT `fk_user_request_user_information11` FOREIGN KEY (`user_information_id_user_information`) REFERENCES `user_information` (`id_user_information`);

--
-- Constraints for table `user_request_rescue`
--
ALTER TABLE `user_request_rescue`
  ADD CONSTRAINT `fk_user_request_rescue_rescue_team_information1` FOREIGN KEY (`rescue_team_information_id_rescue_team_information`,`rtirsi_id_rescue_station_information`) REFERENCES `rescue_team_information` (`id_rescue_team_information`, `rsi_id_rescue_station_information`),
  ADD CONSTRAINT `fk_user_request_user_information10` FOREIGN KEY (`user_information_id_user_information`) REFERENCES `user_information` (`id_user_information`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
