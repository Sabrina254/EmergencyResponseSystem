-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 01:44 AM
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
-- Table structure for table `audit_emergency_categories`
--

CREATE TABLE `audit_emergency_categories` (
  `id` int(11) NOT NULL,
  `change_type` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `record_changed` int(11) NOT NULL,
  `emergency_category_description` varchar(1000) NOT NULL,
  `emergency_category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_emergency_categories`
--

INSERT INTO `audit_emergency_categories` (`id`, `change_type`, `time`, `record_changed`, `emergency_category_description`, `emergency_category_name`) VALUES
(1, 'INSERT', '2019-04-13 15:45:58', 8, 'Flash floods that hit an area', 'Flash Flood');

-- --------------------------------------------------------

--
-- Table structure for table `audit_fire_engine`
--

CREATE TABLE `audit_fire_engine` (
  `id` int(11) NOT NULL,
  `change_type` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `record_changed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_fire_station`
--

CREATE TABLE `audit_fire_station` (
  `id` int(11) NOT NULL,
  `change_type` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `record_changed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_hospital`
--

CREATE TABLE `audit_hospital` (
  `id` int(11) NOT NULL,
  `change_type` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `record_changed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_level`
--

CREATE TABLE `audit_level` (
  `id` int(11) NOT NULL,
  `change_type` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `record_changed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_moderator`
--

CREATE TABLE `audit_moderator` (
  `id` int(11) NOT NULL,
  `change_type` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `record_changed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_paramedics`
--

CREATE TABLE `audit_paramedics` (
  `id` int(11) NOT NULL,
  `change_type` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `record_changed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_request_fire`
--

CREATE TABLE `audit_request_fire` (
  `id` int(11) NOT NULL,
  `change_type` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `record_changed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_request_paramedics`
--

CREATE TABLE `audit_request_paramedics` (
  `id` int(11) NOT NULL,
  `change_type` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `record_changed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_request_rescue`
--

CREATE TABLE `audit_request_rescue` (
  `id` int(11) NOT NULL,
  `change_type` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `record_changed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_rescue_station`
--

CREATE TABLE `audit_rescue_station` (
  `id` int(11) NOT NULL,
  `change_type` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `record_changed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_rescue_team`
--

CREATE TABLE `audit_rescue_team` (
  `id` int(11) NOT NULL,
  `change_type` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `record_changed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_user`
--

CREATE TABLE `audit_user` (
  `id` int(11) NOT NULL,
  `change_type` varchar(10) NOT NULL,
  `time` varchar(40) NOT NULL,
  `record_changed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 'Administrator', 'Admin has full control'),
(4, 'Typhoon', 'Typhoons occurring on the beach'),
(7, 'Tornado', 'Tornados that have hit shore'),
(8, 'Flash Flood', 'Flash floods that hit an area');

--
-- Triggers `emergency_categories`
--
DELIMITER $$
CREATE TRIGGER `delete_emergency_categories` BEFORE DELETE ON `emergency_categories` FOR EACH ROW INSERT INTO audit_emergency_categories(audit_emergency_categories.change_type,audit_emergency_categories.time,audit_emergency_categories.record_changed,audit_emergency_categories.emergency_category_name,audit_emergency_categories.emergency_category_description) VALUES ('DELETE',NOW(), OLD.id_emergency_categories,OLD.emergency_categories_name,OLD.emergency_categories_description)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_emergency_categories` AFTER INSERT ON `emergency_categories` FOR EACH ROW INSERT INTO audit_emergency_categories(audit_emergency_categories.change_type,audit_emergency_categories.time,audit_emergency_categories.record_changed,audit_emergency_categories.emergency_category_name,audit_emergency_categories.emergency_category_description) VALUES ('INSERT',NOW(), NEW.id_emergency_categories,NEW.emergency_categories_name,NEW.emergency_categories_description)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_emergency_categories` AFTER UPDATE ON `emergency_categories` FOR EACH ROW INSERT INTO audit_emergency_categories(audit_emergency_categories.change_type,audit_emergency_categories.time,audit_emergency_categories.record_changed,audit_emergency_categories.emergency_category_name,audit_emergency_categories.emergency_category_description) VALUES ('UPDATE',NOW(), OLD.id_emergency_categories,OLD.emergency_categories_name,OLD.emergency_categories_description)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `fire_engine_information`
--

CREATE TABLE `fire_engine_information` (
  `id` int(11) NOT NULL,
  `identifier_number` varchar(45) DEFAULT NULL,
  `longitude` varchar(45) DEFAULT NULL,
  `latitude` varchar(45) DEFAULT NULL,
  `uname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pin` varchar(45) NOT NULL,
  `status_approval` varchar(10) DEFAULT NULL,
  `available_assignment` varchar(7) DEFAULT NULL,
  `isonline` varchar(10) DEFAULT NULL,
  `vehicle_number` varchar(45) DEFAULT NULL,
  `provider_type` varchar(45) DEFAULT NULL,
  `fire_station_information_id_fire_station_information` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fire_engine_information`
--

INSERT INTO `fire_engine_information` (`id`, `identifier_number`, `longitude`, `latitude`, `uname`, `email`, `pin`, `status_approval`, `available_assignment`, `isonline`, `vehicle_number`, `provider_type`, `fire_station_information_id_fire_station_information`) VALUES
(8, NULL, NULL, NULL, 'kanji-karanja', 'karimkanji101@gmail.com', '1234', 'rejected', NULL, 'false', NULL, 'FireFighter', NULL),
(9, NULL, NULL, NULL, 'smurfet', 'smurfet@ers.co.ke', '1111', 'pending', NULL, NULL, NULL, 'FireFighter', NULL);

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
(3, 'Administrator', 'Has all priviledges'),
(5, 'Viewer', 'Can only view');

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
  `Moderator_information_pin` varchar(200) NOT NULL,
  `ec_id_emergency_categories` int(11) NOT NULL,
  `level_assignment_id_level_assignment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moderator_information`
--

INSERT INTO `moderator_information` (`id_Moderator_information`, `Moderator_information_name`, `Moderator_information_phone`, `moderator_email`, `moderator_username`, `Moderator_information_pin`, `ec_id_emergency_categories`, `level_assignment_id_level_assignment`) VALUES
(16, 'Admin', '0700000000', 'admin@ers.co.ke  ', 'admin', '$2y$10$RFRtuJDPvsU6Z8BRDIp1fOQRV3IMoRuJRsoUqKqrAF/9sbxrCZLOi', 3, 3),
(20, 'Karim Kanji', '0703756325', 'karimkanji101@gmail.com   ', 'kanji-karanja', '$2y$10$ybjDAmFJxuXpD1arvkEgUu3Mtbtlwf5QpuRIArW4vRdoCIS2i04Fi', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `paramedics_information`
--

CREATE TABLE `paramedics_information` (
  `id` int(11) NOT NULL,
  `identifier_number` varchar(45) DEFAULT NULL,
  `longitude` varchar(45) DEFAULT NULL,
  `latitude` varchar(45) DEFAULT NULL,
  `uname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pin` varchar(45) NOT NULL,
  `status_approval` varchar(10) DEFAULT NULL,
  `available_assignment` varchar(7) DEFAULT NULL,
  `isonline` varchar(10) DEFAULT NULL,
  `vehicle_number` varchar(10) DEFAULT NULL,
  `provider_type` varchar(45) DEFAULT NULL,
  `hospital_information_id_hospital_information` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paramedics_information`
--

INSERT INTO `paramedics_information` (`id`, `identifier_number`, `longitude`, `latitude`, `uname`, `email`, `pin`, `status_approval`, `available_assignment`, `isonline`, `vehicle_number`, `provider_type`, `hospital_information_id_hospital_information`) VALUES
(0, NULL, NULL, NULL, 'kevin', 'kevin@ers.co.ke', '1111', 'rejected', NULL, 'false', NULL, 'Paramedic', NULL),
(1, NULL, NULL, NULL, 'oscar', 'oscar@ers.co.ke', '1111', 'rejected', NULL, NULL, NULL, 'Paramedic', NULL),
(2, NULL, NULL, NULL, 'oscar', 'oscar@ers.co.ke', '1111', 'rejected', NULL, NULL, NULL, 'Paramedic', NULL),
(3, NULL, NULL, NULL, 'george', 'george@ers.co.ke', '0000', 'rejected', NULL, 'false', NULL, 'Paramedic', NULL),
(4, NULL, NULL, NULL, 'jameslykie@gmail.com', 'jameslykie@gmail.com', '1111', 'rejected', NULL, 'false', NULL, 'Paramedic', NULL);

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
  `id` int(11) NOT NULL,
  `identifier_number` varchar(45) DEFAULT NULL,
  `longitude` varchar(45) DEFAULT NULL,
  `latitude` varchar(45) DEFAULT NULL,
  `uname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pin` varchar(45) NOT NULL,
  `status_approval` varchar(10) DEFAULT NULL,
  `available_assignment` varchar(7) DEFAULT NULL,
  `isonline` varchar(10) DEFAULT NULL,
  `vehicle_number` varchar(45) DEFAULT NULL,
  `provider_type` varchar(45) DEFAULT NULL,
  `rescue_station_information_id_rescue_station_information` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rescue_team_information`
--

INSERT INTO `rescue_team_information` (`id`, `identifier_number`, `longitude`, `latitude`, `uname`, `email`, `pin`, `status_approval`, `available_assignment`, `isonline`, `vehicle_number`, `provider_type`, `rescue_station_information_id_rescue_station_information`) VALUES
(0, NULL, NULL, NULL, 'admin', 'admin@ers.co.ke', '0000', 'rejected', NULL, 'true', NULL, 'RescueTeam', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id_user_information` int(11) NOT NULL,
  `user_information_name` varchar(45) NOT NULL,
  `user_information_phone_number` varchar(13) NOT NULL,
  `user_information_pin` varchar(200) NOT NULL,
  `user_state` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id_user_information`, `user_information_name`, `user_information_phone_number`, `user_information_pin`, `user_state`) VALUES
(1, 'Karim Kanji', '0703756325', '$2y$10$QZiq3ciwpPC0OiD.5ZguWOketgNNuVCZqUupOqFlP03EvUsD.cUom', NULL),
(2, 'Joseph', '0711111111', '$2y$10$QZiq3ciwpPC0OiD.5ZguWOketgNNuVCZqUupOqFlP03EvUsD.cUom', NULL),
(3, 'Karim', '0711111112', '$2y$10$PXqz7o0FoXdNHCCS6ImPmeqrBplTEKNRRrs4.r', NULL),
(4, 'Emmanuel Atemba', '0711111113', '$2y$10$r4ijrZeSYdAXUt7rxQIx.eCqCbBgd8yVpLwfllhhCe8ux2Subpnwe', NULL);

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
  `complete` varchar(10) DEFAULT NULL,
  `remarks` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_request_fire`
--

INSERT INTO `user_request_fire` (`id_user_request`, `user_request_longitude`, `user_request_latitude`, `user_information_id_user_information`, `user_request_time_stamp`, `user_request_fire_status`, `id_fire_engine_information`, `fire_e_id_fire_station_information`, `request_manual`, `request_details_manual`, `help_code`, `assigned`, `complete`, `remarks`) VALUES
(1, NULL, NULL, 1, '2019-03-21 08:23:31', NULL, 8, NULL, 'yes', 'Sudu', 'F12196', 'yes', NULL, NULL),
(2, NULL, NULL, 1, '2019-03-21 08:24:14', NULL, 8, NULL, 'yes', 'Hello there', 'F20658', 'yes', NULL, NULL),
(3, '34.6048183', '-0.0038455', 1, '2019-03-21 09:18:53', NULL, 8, NULL, 'no', NULL, 'F20062', 'yes', 'success', 'We were able to arrive on time'),
(4, NULL, NULL, 1, '2019-03-25 22:40:49', NULL, NULL, NULL, 'yes', 'Hello there', 'F66641', NULL, NULL, NULL),
(5, '34.6122033', '-0.0022427', 1, '2019-03-26 09:18:28', NULL, 8, NULL, 'no', NULL, 'F7508', 'yes', 'success', 'We arrived on time to assist'),
(6, '34.612091299999996', '-0.0023593', 1, '2019-03-26 09:36:10', NULL, 8, NULL, 'no', NULL, 'F52887', 'yes', 'success', 'This has been attended successfully'),
(7, '34.6018131', '-0.0062298', 1, '2019-03-26 09:37:24', NULL, 8, NULL, 'no', NULL, 'F74750', 'yes', 'fail', 'We were unable to reach on time'),
(8, '34.611976', '-0.0023677', 1, '2019-03-26 09:40:33', NULL, 8, NULL, 'no', NULL, 'F31369', 'yes', 'fail', 'The vehicle got a puncture'),
(9, NULL, NULL, 4, '2019-03-26 10:34:13', NULL, NULL, NULL, 'yes', 'Maseno University, School of Computing, TB1', 'F61037', NULL, NULL, NULL),
(10, '34.6123493', '-0.0021108', 1, '2019-03-26 10:47:35', NULL, 8, NULL, 'no', NULL, 'F62415', 'yes', 'success', 'Hello this works'),
(11, NULL, NULL, 1, '2019-03-27 08:23:18', NULL, NULL, NULL, 'yes', 'Maseno University, TB1', 'F65551', NULL, NULL, NULL);

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
  `id_paramedics_information` int(11) DEFAULT NULL,
  `request_manual` varchar(4) NOT NULL,
  `request_details_manual` varchar(10000) DEFAULT NULL,
  `help_code` varchar(10) NOT NULL,
  `assigned` varchar(5) DEFAULT NULL,
  `complete` varchar(10) DEFAULT NULL,
  `remarks` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_request_paramedics`
--

INSERT INTO `user_request_paramedics` (`id_user_request`, `user_request_longitude`, `user_request_latitude`, `user_information_id_user_information`, `user_request_time_stamp`, `id_paramedics_information`, `request_manual`, `request_details_manual`, `help_code`, `assigned`, `complete`, `remarks`) VALUES
(1, NULL, NULL, 1, '2019-03-21 08:09:55', 3, 'yes', 'Maseno University Main Campus TB1', 'M54484', 'yes', NULL, NULL),
(2, NULL, NULL, 1, '2019-03-21 08:14:53', NULL, 'yes', 'Hello, this is a test location', 'M90910', NULL, NULL, NULL),
(3, NULL, NULL, 1, '2019-03-21 08:17:06', NULL, 'yes', 'Hey there', 'M79098', NULL, NULL, NULL),
(4, NULL, NULL, 1, '2019-03-21 08:17:52', NULL, 'yes', 'ssup', 'M49075', NULL, NULL, NULL),
(5, NULL, NULL, 1, '2019-03-21 08:26:11', NULL, 'yes', 'Kanji is here', 'M16772', NULL, NULL, NULL),
(6, NULL, NULL, 1, '2019-03-21 08:32:52', NULL, 'yes', 'Samba', 'M34221', NULL, NULL, NULL),
(7, NULL, NULL, 1, '2019-03-21 08:33:36', NULL, 'yes', 'Sasa', 'M47196', NULL, NULL, NULL),
(8, NULL, NULL, 1, '2019-03-21 21:35:43', NULL, 'yes', 'Testing one two three', 'M93639', NULL, NULL, NULL),
(9, NULL, NULL, 1, '2019-03-21 21:37:41', NULL, 'yes', 'This is the way to go about it', 'M7610', NULL, NULL, NULL),
(10, NULL, NULL, 2, '2019-03-22 07:59:05', NULL, 'yes', 'Jamaica', 'M76510', NULL, NULL, NULL),
(11, NULL, NULL, 1, '2019-03-22 08:21:35', NULL, 'yes', 'Sombre', 'M54670', NULL, NULL, NULL),
(12, '34.6121392', '-0.0024922', 1, '2019-03-27 12:55:17', 3, 'no', NULL, 'M59269', 'yes', 'success', 'successful');

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
  `id_rescue_information` int(11) DEFAULT NULL,
  `request_manual` varchar(4) NOT NULL,
  `request_details_manual` varchar(10000) DEFAULT NULL,
  `help_code` varchar(10) NOT NULL,
  `assigned` varchar(5) DEFAULT NULL,
  `complete` varchar(10) DEFAULT NULL,
  `remarks` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_request_rescue`
--

INSERT INTO `user_request_rescue` (`id_user_request`, `user_request_longitude`, `user_request_latitude`, `user_information_id_user_information`, `user_request_time_stamp`, `user_request_rescue_status`, `id_rescue_information`, `request_manual`, `request_details_manual`, `help_code`, `assigned`, `complete`, `remarks`) VALUES
(1, NULL, NULL, 3, '2019-03-22 08:00:58', NULL, NULL, 'yes', 'Somasolat', 'N94608', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_emergency_categories`
--
ALTER TABLE `audit_emergency_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_fire_engine`
--
ALTER TABLE `audit_fire_engine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_fire_station`
--
ALTER TABLE `audit_fire_station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_hospital`
--
ALTER TABLE `audit_hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_level`
--
ALTER TABLE `audit_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_moderator`
--
ALTER TABLE `audit_moderator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_paramedics`
--
ALTER TABLE `audit_paramedics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_request_fire`
--
ALTER TABLE `audit_request_fire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_request_paramedics`
--
ALTER TABLE `audit_request_paramedics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_request_rescue`
--
ALTER TABLE `audit_request_rescue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_rescue_station`
--
ALTER TABLE `audit_rescue_station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_rescue_team`
--
ALTER TABLE `audit_rescue_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_user`
--
ALTER TABLE `audit_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency_categories`
--
ALTER TABLE `emergency_categories`
  ADD PRIMARY KEY (`id_emergency_categories`);

--
-- Indexes for table `fire_engine_information`
--
ALTER TABLE `fire_engine_information`
  ADD PRIMARY KEY (`id`),
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
  ADD PRIMARY KEY (`id`),
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
  ADD PRIMARY KEY (`id`),
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
-- AUTO_INCREMENT for table `audit_emergency_categories`
--
ALTER TABLE `audit_emergency_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `audit_fire_engine`
--
ALTER TABLE `audit_fire_engine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_fire_station`
--
ALTER TABLE `audit_fire_station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_hospital`
--
ALTER TABLE `audit_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_level`
--
ALTER TABLE `audit_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_moderator`
--
ALTER TABLE `audit_moderator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_paramedics`
--
ALTER TABLE `audit_paramedics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_request_fire`
--
ALTER TABLE `audit_request_fire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_request_paramedics`
--
ALTER TABLE `audit_request_paramedics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_request_rescue`
--
ALTER TABLE `audit_request_rescue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_rescue_station`
--
ALTER TABLE `audit_rescue_station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_rescue_team`
--
ALTER TABLE `audit_rescue_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audit_user`
--
ALTER TABLE `audit_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emergency_categories`
--
ALTER TABLE `emergency_categories`
  MODIFY `id_emergency_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fire_engine_information`
--
ALTER TABLE `fire_engine_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id_level_assignment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `moderator_information`
--
ALTER TABLE `moderator_information`
  MODIFY `id_Moderator_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `paramedics_information`
--
ALTER TABLE `paramedics_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id_user_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_request_fire`
--
ALTER TABLE `user_request_fire`
  MODIFY `id_user_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_request_paramedics`
--
ALTER TABLE `user_request_paramedics`
  MODIFY `id_user_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  ADD CONSTRAINT `fk_general_rescue_report_rescue_team_information1` FOREIGN KEY (`rescueti_id_rescue_team_information`) REFERENCES `rescue_team_information` (`id`);

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
  ADD CONSTRAINT `fk_paramedic_rescue_report_paramedics_information1` FOREIGN KEY (`id_paramedics_information`) REFERENCES `paramedics_information` (`id`);

--
-- Constraints for table `rescue_team_information`
--
ALTER TABLE `rescue_team_information`
  ADD CONSTRAINT `fk_rescue_team_information_rescue_station_information1` FOREIGN KEY (`rescue_station_information_id_rescue_station_information`) REFERENCES `rescue_station_information` (`id_rescue_station_information`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_request_fire`
--
ALTER TABLE `user_request_fire`
  ADD CONSTRAINT `fk_user_request_fire_fire_engine_information1` FOREIGN KEY (`id_fire_engine_information`) REFERENCES `fire_engine_information` (`id`),
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
