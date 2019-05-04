-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 12:22 PM
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
(2, 'Medical', 'This deals with medical emergencies');

-- --------------------------------------------------------

--
-- Table structure for table `fire_engine_information`
--

CREATE TABLE `fire_engine_information` (
  `id_fire_engine_information` int(11) NOT NULL,
  `fire_engine_information_identifier_number` varchar(45) DEFAULT NULL,
  `fire_engine_information_longitude` varchar(45) DEFAULT NULL,
  `fire_engine_information_latitude` varchar(45) DEFAULT NULL,
  `fire_engine_information_uname` varchar(45) NOT NULL,
  `fire_engine_information_email` varchar(45) NOT NULL,
  `fire_engine_information_pin` varchar(45) DEFAULT NULL,
  `status` varchar(7) DEFAULT NULL,
  `fire_station_information_id_fire_station_information` int(11) DEFAULT NULL,
  `isonline` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fire_engine_information`
--

INSERT INTO `fire_engine_information` (`id_fire_engine_information`, `fire_engine_information_identifier_number`, `fire_engine_information_longitude`, `fire_engine_information_latitude`, `fire_engine_information_uname`, `fire_engine_information_email`, `fire_engine_information_pin`, `status`, `fire_station_information_id_fire_station_information`, `isonline`) VALUES
(7, NULL, NULL, NULL, 'karimkanji101@gmail.com', 'karimkanji101@gmail.com', '1234', 'pending', NULL, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `fire_rescue_report`
--

CREATE TABLE `fire_rescue_report` (
  `id_fire_rescue_report` int(11) NOT NULL,
  `fire_rescue_report_status` varchar(45) DEFAULT NULL,
  `Moderator_i_id_Moderator_information` int(11) DEFAULT NULL,
  `Moderator_iec_id_emergency_categories` int(11) DEFAULT NULL,
  `Moderator_ila_id_level_assignment` int(11) DEFAULT NULL
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
  `Mi_id_Moderator_information` int(11) DEFAULT NULL,
  `Miec_id_emergency_categories` int(11) DEFAULT NULL,
  `Mila_id_level_assignment` int(11) DEFAULT NULL,
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
(2, 'administrator', 'Has all priviledges');

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
(2, 'Admin', '0700000000', 'admin@ers.co.ke', 'admin', '0000', 2, 2);

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
  `paramedics_information_uname` varchar(45) NOT NULL,
  `paramedics_information_email` varchar(45) NOT NULL,
  `paramedics_information_pin` varchar(45) DEFAULT NULL,
  `status` varchar(7) DEFAULT NULL,
  `hospital_information_id_hospital_information` int(11) DEFAULT NULL,
  `isonline` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `paramedic_rescue_report`
--

CREATE TABLE `paramedic_rescue_report` (
  `id_paramedic_rescue_report` int(11) NOT NULL,
  `paramedic_rescue_report_status` varchar(45) DEFAULT NULL,
  `id_Moderator_information` int(11) DEFAULT NULL,
  `id_emergency_categories` int(11) DEFAULT NULL,
  `Mila_id_level_assignment` int(11) DEFAULT NULL,
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
  `rescue_team_information_identifier_number` varchar(45) DEFAULT NULL,
  `rescue_team_information_uname` varchar(45) DEFAULT NULL,
  `rescue_team_information_email` varchar(45) DEFAULT NULL,
  `rescue_team_information_pin` varchar(45) DEFAULT NULL,
  `rescue_team_informationcol` varchar(45) DEFAULT NULL,
  `rescue_team_information_longitude` varchar(45) DEFAULT NULL,
  `rescue_team_information_latitude` varchar(45) DEFAULT NULL,
  `rescue_team_information_available` varchar(45) DEFAULT NULL,
  `status` varchar(7) DEFAULT NULL,
  `rescue_station_information_id_rescue_station_information` int(11) DEFAULT NULL,
  `isonline` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id_user_information` int(11) NOT NULL,
  `user_information_name` varchar(45) NOT NULL,
  `user_information_phone_number` varchar(13) NOT NULL,
  `user_information_pin` varchar(45) NOT NULL,
  `user_state` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id_user_information`, `user_information_name`, `user_information_phone_number`, `user_information_pin`, `user_state`) VALUES
(5, 'Karim Kanji', '0703756325', '1111', NULL);

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
(6, '34.604839999999996', '-0.0038455', 5, '2019-03-13 14:14:05', NULL, NULL, NULL, 'no', NULL, 'F23166', NULL, NULL),
(7, NULL, NULL, 5, '2019-03-13 14:29:02', NULL, NULL, NULL, 'yes', 'hey', 'F65098', NULL, NULL);

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
  `request_manual` varchar(4) NOT NULL,
  `request_details_manual` varchar(10000) DEFAULT NULL,
  `help_code` varchar(10) NOT NULL,
  `assigned` varchar(5) DEFAULT NULL,
  `complete` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_request_paramedics`
--

INSERT INTO `user_request_paramedics` (`id_user_request`, `user_request_longitude`, `user_request_latitude`, `user_information_id_user_information`, `user_request_time_stamp`, `request_manual`, `request_details_manual`, `help_code`, `assigned`, `complete`) VALUES
(8, '34.604796799999995', '-0.0038455', 5, '2019-03-13 14:13:51', 'no', NULL, 'M7458', NULL, NULL),
(9, NULL, NULL, 5, '2019-03-13 14:21:30', 'yes', 'hello', 'M94695', NULL, NULL),
(10, NULL, NULL, 5, '2019-03-13 14:29:39', 'yes', 'Maseno univeristy TB1', 'M69947', NULL, NULL);

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
  `request_manual` varchar(4) NOT NULL,
  `request_details_manual` varchar(10000) DEFAULT NULL,
  `help_code` varchar(10) NOT NULL,
  `assigned` varchar(5) DEFAULT NULL,
  `complete` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_request_rescue`
--

INSERT INTO `user_request_rescue` (`id_user_request`, `user_request_longitude`, `user_request_latitude`, `user_information_id_user_information`, `user_request_time_stamp`, `user_request_rescue_status`, `request_manual`, `request_details_manual`, `help_code`, `assigned`, `complete`) VALUES
(2, '34.604796799999995', '-0.0038455', 5, '2019-03-13 14:17:03', NULL, 'no', NULL, 'N54708', NULL, NULL),
(3, NULL, NULL, 5, '2019-03-13 14:24:32', NULL, 'yes', 'hello', 'N52343', NULL, NULL);

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
  ADD PRIMARY KEY (`id_fire_engine_information`),
  ADD KEY `fk_fire_engine_information_fire_station_information1_idx` (`fire_station_information_id_fire_station_information`);

--
-- Indexes for table `fire_rescue_report`
--
ALTER TABLE `fire_rescue_report`
  ADD PRIMARY KEY (`id_fire_rescue_report`),
  ADD KEY `fk_fire_rescue_report_Moderator_information1_idx` (`Moderator_i_id_Moderator_information`,`Moderator_iec_id_emergency_categories`,`Moderator_ila_id_level_assignment`);

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
  ADD PRIMARY KEY (`id_paramedics_information`),
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
  ADD PRIMARY KEY (`id_rescue_team_information`),
  ADD KEY `fk_rescue_team_information_rescue_station_information1_idx` (`rescue_station_information_id_rescue_station_information`);

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
  ADD KEY `fk_user_request_user_information1_idx` (`user_information_id_user_information`);

--
-- Indexes for table `user_request_rescue`
--
ALTER TABLE `user_request_rescue`
  ADD PRIMARY KEY (`id_user_request`,`user_information_id_user_information`),
  ADD KEY `fk_user_request_user_information1_idx` (`user_information_id_user_information`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emergency_categories`
--
ALTER TABLE `emergency_categories`
  MODIFY `id_emergency_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fire_engine_information`
--
ALTER TABLE `fire_engine_information`
  MODIFY `id_fire_engine_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `level_assignment`
--
ALTER TABLE `level_assignment`
  MODIFY `id_level_assignment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `moderator_information`
--
ALTER TABLE `moderator_information`
  MODIFY `id_Moderator_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paramedics_information`
--
ALTER TABLE `paramedics_information`
  MODIFY `id_paramedics_information` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paramedic_rescue_report`
--
ALTER TABLE `paramedic_rescue_report`
  MODIFY `id_paramedic_rescue_report` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_user_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_request_fire`
--
ALTER TABLE `user_request_fire`
  MODIFY `id_user_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_request_paramedics`
--
ALTER TABLE `user_request_paramedics`
  MODIFY `id_user_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_request_rescue`
--
ALTER TABLE `user_request_rescue`
  MODIFY `id_user_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fire_engine_information`
--
ALTER TABLE `fire_engine_information`
  ADD CONSTRAINT `fk_fire_engine_information_fire_station_information1` FOREIGN KEY (`fire_station_information_id_fire_station_information`) REFERENCES `fire_station_information` (`id_fire_station_information`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fire_rescue_report`
--
ALTER TABLE `fire_rescue_report`
  ADD CONSTRAINT `fk_fire_rescue_report_Moderator_information1` FOREIGN KEY (`Moderator_i_id_Moderator_information`,`Moderator_iec_id_emergency_categories`,`Moderator_ila_id_level_assignment`) REFERENCES `moderator_information` (`id_Moderator_information`, `ec_id_emergency_categories`, `level_assignment_id_level_assignment`);

--
-- Constraints for table `general_rescue_report`
--
ALTER TABLE `general_rescue_report`
  ADD CONSTRAINT `fk_general_rescue_report_Moderator_information1` FOREIGN KEY (`Mi_id_Moderator_information`,`Miec_id_emergency_categories`,`Mila_id_level_assignment`) REFERENCES `moderator_information` (`id_Moderator_information`, `ec_id_emergency_categories`, `level_assignment_id_level_assignment`),
  ADD CONSTRAINT `fk_general_rescue_report_rescue_team_information1` FOREIGN KEY (`rescueti_id_rescue_team_information`) REFERENCES `rescue_team_information` (`id_rescue_team_information`);

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
  ADD CONSTRAINT `fk_paramedics_information_hospital_information1` FOREIGN KEY (`hospital_information_id_hospital_information`) REFERENCES `hospital_information` (`id_hospital_information`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `paramedic_rescue_report`
--
ALTER TABLE `paramedic_rescue_report`
  ADD CONSTRAINT `fk_paramedic_rescue_report_Moderator_information1` FOREIGN KEY (`id_Moderator_information`,`id_emergency_categories`,`Mila_id_level_assignment`) REFERENCES `moderator_information` (`id_Moderator_information`, `ec_id_emergency_categories`, `level_assignment_id_level_assignment`),
  ADD CONSTRAINT `fk_paramedic_rescue_report_paramedics_information1` FOREIGN KEY (`id_paramedics_information`) REFERENCES `paramedics_information` (`id_paramedics_information`);

--
-- Constraints for table `rescue_team_information`
--
ALTER TABLE `rescue_team_information`
  ADD CONSTRAINT `fk_rescue_team_information_rescue_station_information1` FOREIGN KEY (`rescue_station_information_id_rescue_station_information`) REFERENCES `rescue_station_information` (`id_rescue_station_information`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_request_fire`
--
ALTER TABLE `user_request_fire`
  ADD CONSTRAINT `fk_user_request_fire_fire_engine_information1` FOREIGN KEY (`id_fire_engine_information`) REFERENCES `fire_engine_information` (`id_fire_engine_information`),
  ADD CONSTRAINT `fk_user_request_user_information1` FOREIGN KEY (`user_information_id_user_information`) REFERENCES `user_information` (`id_user_information`);

--
-- Constraints for table `user_request_paramedics`
--
ALTER TABLE `user_request_paramedics`
  ADD CONSTRAINT `fk_user_request_user_information11` FOREIGN KEY (`user_information_id_user_information`) REFERENCES `user_information` (`id_user_information`);

--
-- Constraints for table `user_request_rescue`
--
ALTER TABLE `user_request_rescue`
  ADD CONSTRAINT `fk_user_request_user_information10` FOREIGN KEY (`user_information_id_user_information`) REFERENCES `user_information` (`id_user_information`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
