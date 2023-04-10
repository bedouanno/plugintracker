-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 10:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
  `plugin_id` int(11) NOT NULL,
  `plugin_name` varchar(225) NOT NULL,
  `plugin_author` varchar(225) NOT NULL,
  `plugin_version` varchar(225) NOT NULL,
  `plugin_wptest` varchar(225) NOT NULL,
  `plugin_compatwp` varchar(225) NOT NULL,
  `plugin_lastupdate` varchar(225) NOT NULL,
  `plugin_notes` text NOT NULL,
  `plugin_conclusion` text NOT NULL,
  `plugin_requestedby` varchar(225) NOT NULL,
  `plugin_dateadded` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_plugins`
--

INSERT INTO `tbl_plugins` (`plugin_id`, `plugin_name`, `plugin_author`, `plugin_version`, `plugin_wptest`, `plugin_compatwp`, `plugin_lastupdate`, `plugin_notes`, `plugin_conclusion`, `plugin_requestedby`, `plugin_dateadded`) VALUES
(15, 'Proweaver Test', 'Leonardo', 'Petey', 'Leonardo', 'Brock', 'Matt', 'Cory', 'Cruiser', 'Client Request', 'Frank'),
(16, 'Disable Wordpress Updates', 'Kerry', 'Cruiser', 'Uy', 'Leonardo', 'Bob', 'Leonardo', 'Kerry', 'Standard Protocol', 'Peter');

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
(1, 'Obed', 'Ouano', 'bedouano', '202cb962ac59075b964b07152d234b70', 0),
(2, 'Obed', 'Ouano', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

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
  ADD PRIMARY KEY (`plugin_id`);

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
  MODIFY `plugin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
