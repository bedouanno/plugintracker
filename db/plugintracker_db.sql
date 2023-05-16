-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 05:16 AM
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
  `plugin_date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_plugins`
--

INSERT INTO `tbl_plugins` (`id`, `plugin_name`, `plugin_link`, `plugin_image_link`, `plugin_author`, `plugin_version`, `plugin_testup_wp`, `plugin_compatible_wp`, `plugin_last_updated`, `plugin_security_notes`, `plugin_conclusion`, `plugin_requested_by`, `plugin_date_added`) VALUES
(1, 'Accessibility by UserWay', 'https://wordpress.org/plugins/userway-accessibility-widget/', 'https://ps.w.org/userway-accessibility-widget/assets/icon.svg?rev=2526447', 'UserWay.org', '2.5.0 (Plugin), V4.0 (Widget)', '6.1.1', '4.7 or higher', '7 days ago (Plugin), April 2022 (Widget)', 'In order to prevent unauthorized access or disclosure UserWay has put in place suitable physical, electronic and managerial procedures to safeguard and secure the information collected online. UserWay uses industry standard SSL (secure socket layer) encryption to transfer private personal information.', '- safe to use', 1, '0000-00-00 00:00:00'),
(2, 'ACF ', 'https://wordpress.org/plugins/advanced-custom-fields/', 'https://ps.w.org/advanced-custom-fields/assets/icon-128x128.png?rev=1082746', 'WP Engine', '6.0.7', '6.1.1', '4.7 or higher', '1 month ago', '- vulnerability issues has been patched and constantly updating<br />\r\n<br />\r\n<a href=\"https://patchstack.com/database/vulnerability/advanced-custom-fields\" target=\"_blank\">https://patchstack.com/database/vulnerability/advanced-custom-fields</a>', '- safe to use<br />\r\n<br />\r\n- the fact nga 2+ million ang active installation ani pud makes it more nga dako silag responsibility sa client in terms gyud sa ilang product nga gi buhat', 1, '0000-00-00 00:00:00');

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
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'User', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

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
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
