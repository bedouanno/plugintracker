-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 12:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plugintracker_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity_log`
--

CREATE TABLE `tbl_activity_log` (
  `id` int(11) NOT NULL,
  `user_id_log` int(11) NOT NULL,
  `plugin_id_log` int(11) NOT NULL,
  `activity_desc` varchar(80) NOT NULL DEFAULT 'Other',
  `activity_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_activity_log`
--

INSERT INTO `tbl_activity_log` (`id`, `user_id_log`, `plugin_id_log`, `activity_desc`, `activity_datetime`) VALUES
(49, 1, 11, 'Created plugin for review.', '2023-06-27 18:32:33'),
(50, 1, 11, 'Deleted Plugin.', '2023-06-27 18:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assigned_committee`
--

CREATE TABLE `tbl_assigned_committee` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `plugn_id` int(11) NOT NULL,
  `assigned_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deleted_plugins`
--

CREATE TABLE `tbl_deleted_plugins` (
  `id` int(11) NOT NULL,
  `deleted_id_plugin` int(11) NOT NULL,
  `deleted_datas` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`deleted_datas`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plugins`
--

CREATE TABLE `tbl_plugins` (
  `id` int(11) NOT NULL,
  `plugin_name` varchar(225) NOT NULL,
  `plugin_link` varchar(225) NOT NULL,
  `plugin_image_link` text DEFAULT NULL,
  `plugin_author` varchar(225) NOT NULL,
  `plugin_version` varchar(225) NOT NULL,
  `plugin_testup_wp` varchar(225) NOT NULL,
  `plugin_compatible_wp` varchar(225) NOT NULL,
  `plugin_last_updated` varchar(225) NOT NULL,
  `plugin_security_notes` text NOT NULL,
  `plugin_conclusion` text NOT NULL,
  `plugin_requested_by` int(11) DEFAULT NULL COMMENT '1 = "Standard Protocol", 2 = "Client Request"',
  `plugin_added_by` int(11) DEFAULT NULL,
  `plugin_date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `plugin_updated_by` int(11) DEFAULT NULL,
  `plugin_date_update` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_plugins`
--

INSERT INTO `tbl_plugins` (`id`, `plugin_name`, `plugin_link`, `plugin_image_link`, `plugin_author`, `plugin_version`, `plugin_testup_wp`, `plugin_compatible_wp`, `plugin_last_updated`, `plugin_security_notes`, `plugin_conclusion`, `plugin_requested_by`, `plugin_added_by`, `plugin_date_added`, `plugin_updated_by`, `plugin_date_update`) VALUES
(1, 'Accessibility by UserWay', 'https://wordpress.org/plugins/userway-accessibility-widget/', 'https://ps.w.org/userway-accessibility-widget/assets/icon.svg?rev=2526447', 'UserWay.org', '2.5.0', '6.1.2', '4.7 or higher ', '3 months ago', 'In order to prevent unauthorized access or disclosure UserWay has put in place suitable physical, electronic and managerial procedures to safeguard and secure the information collected online. UserWay uses industry standard SSL (secure socket layer) encryption to transfer private personal information.', '- safe to use', 1, 1, '2023-05-19 07:21:52', 1, '2023-06-26 13:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plugin_status`
--

CREATE TABLE `tbl_plugin_status` (
  `id` int(11) NOT NULL,
  `plugin_id` int(11) NOT NULL,
  `committee_id` int(11) NOT NULL,
  `reviewed_notes` text DEFAULT NULL,
  `reviewed_by` int(11) DEFAULT NULL,
  `reviewed_date` date DEFAULT NULL,
  `plugin_status` int(11) NOT NULL DEFAULT 0 COMMENT '0 = For Review, 1 = Approved, 2 = Not Safe'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_plugin_status`
--

INSERT INTO `tbl_plugin_status` (`id`, `plugin_id`, `committee_id`, `reviewed_notes`, `reviewed_by`, `reviewed_date`, `plugin_status`) VALUES
(1, 1, 1, 'In order to prevent unauthorized access or disclosure UserWay has put in place suitable physical, electronic and managerial procedures to safeguard and secure the information collected online. UserWay uses industry standard SSL (secure socket layer) encryption to transfer private personal information. ', 1, '2023-05-19', 1),
(2, 2, 1, 'test', 1, '2023-05-19', 2),
(4, 4, 1, 'test', 1, '2023-06-26', 1),
(5, 5, 1, 'ok', 1, '2023-06-26', 1),
(6, 6, 2, 'TEST', 1, '2023-06-26', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `username`, `password`, `role`, `created_date`) VALUES
(1, 'Admin', 'User', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2023-05-17 00:00:00'),
(2, 'Committee', 'User', 'committee', '202cb962ac59075b964b07152d234b70', 2, '2023-05-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_position`
--

CREATE TABLE `tbl_users_position` (
  `id` int(11) NOT NULL,
  `position_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users_position`
--

INSERT INTO `tbl_users_position` (`id`, `position_name`) VALUES
(1, 'Admin'),
(2, 'Committee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activity_log`
--
ALTER TABLE `tbl_activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_assigned_committee`
--
ALTER TABLE `tbl_assigned_committee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_deleted_plugins`
--
ALTER TABLE `tbl_deleted_plugins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deleted_id_plugin` (`deleted_id_plugin`);

--
-- Indexes for table `tbl_plugins`
--
ALTER TABLE `tbl_plugins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_plugin_status`
--
ALTER TABLE `tbl_plugin_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users_position`
--
ALTER TABLE `tbl_users_position`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activity_log`
--
ALTER TABLE `tbl_activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_assigned_committee`
--
ALTER TABLE `tbl_assigned_committee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_deleted_plugins`
--
ALTER TABLE `tbl_deleted_plugins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_plugins`
--
ALTER TABLE `tbl_plugins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_plugin_status`
--
ALTER TABLE `tbl_plugin_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users_position`
--
ALTER TABLE `tbl_users_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
