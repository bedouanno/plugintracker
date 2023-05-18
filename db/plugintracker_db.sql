-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 11:03 AM
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
-- Indexes for table `tbl_assigned_committee`
--
ALTER TABLE `tbl_assigned_committee`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tbl_assigned_committee`
--
ALTER TABLE `tbl_assigned_committee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_plugins`
--
ALTER TABLE `tbl_plugins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_plugin_status`
--
ALTER TABLE `tbl_plugin_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
