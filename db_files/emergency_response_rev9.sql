-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 10:04 AM
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
(1, 'Medical', 'This deals with medical emergencies');

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
(1, 'Administrator', 'Has all priviledges');

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
(1, 'Admin', '070000000000', 'admin@ers.co.ke', 'admin', '0000', 1, 1);

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
  `user_information_pin` varchar(45) NOT NULL,
  `user_state` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id_user_information`, `user_information_name`, `user_information_phone_number`, `user_information_pin`, `user_state`) VALUES
(1, 'Karim K. kanji', '0703756325', '1234', NULL),
(2, 'Sabrina Omwoyo', '0711111111', '1111', NULL),
(3, 'Sabrina Omwoyo', '0791569682', '2222', 'deleted');

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
(1, NULL, NULL, 1, '2019-03-06 13:12:32', NULL, NULL, NULL, 'yes', 'Try', 'F84460', NULL, NULL),
(2, '34.6007827', '-0.0045202', 2, '2019-03-06 21:35:52', NULL, NULL, NULL, 'no', NULL, 'F83867', NULL, NULL),
(4, '34.6024316', '-0.0034685', 3, '2019-03-12 10:51:42', NULL, NULL, NULL, 'no', NULL, 'F20259', NULL, NULL);

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
(1, NULL, NULL, 1, '2019-03-06 10:05:55', NULL, NULL, 'yes', 'The user is here', 'M44305', 'yes', NULL),
(2, '34.6022239', '-0.0039357', 1, '2019-03-06 14:48:38', NULL, NULL, 'no', NULL, 'M19795', NULL, NULL),
(3, '34.6024316', '-0.0034685', 1, '2019-03-12 10:09:25', NULL, NULL, 'no', NULL, 'M12498', NULL, NULL),
(4, '34.6024316', '-0.0034685', 1, '2019-03-12 10:09:47', NULL, NULL, 'no', NULL, 'M49049', NULL, NULL),
(5, '34.6024316', '-0.0034685', 1, '2019-03-12 10:12:55', NULL, NULL, 'no', NULL, 'M23783', NULL, NULL),
(6, '34.6126637', '-0.001936', 1, '2019-03-12 10:36:42', NULL, NULL, 'no', NULL, 'M15687', NULL, NULL);

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
(1, NULL, NULL, 1, '2019-03-06 13:05:48', NULL, NULL, NULL, 'yes', 'so', 'N84573', 'yes', 'success');

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
-- AUTO_INCREMENT for table `emergency_categories`
--
ALTER TABLE `emergency_categories`
  MODIFY `id_emergency_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `level_assignment`
--
ALTER TABLE `level_assignment`
  MODIFY `id_level_assignment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_user_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_request_fire`
--
ALTER TABLE `user_request_fire`
  MODIFY `id_user_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_request_paramedics`
--
ALTER TABLE `user_request_paramedics`
  MODIFY `id_user_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_request_rescue`
--
ALTER TABLE `user_request_rescue`
  MODIFY `id_user_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
