-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 09:45 AM
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
-- Table structure for table `tbl_plugin`
--

CREATE TABLE `tbl_plugin` (
  `id` int(11) NOT NULL,
  `plugin_name` varchar(225) NOT NULL,
  `plugin_link` varchar(225) NOT NULL,
  `plugin_author` varchar(225) NOT NULL,
  `plugin_version` varchar(225) NOT NULL,
  `plugin_testup_wp` varchar(225) NOT NULL,
  `plugin_compatible_wp` varchar(225) NOT NULL,
  `plugin_last_updated` varchar(225) NOT NULL,
  `plugin_security_notes` text NOT NULL,
  `plugin_conclusion` text NOT NULL,
  `plugin_requested_by` int(11) DEFAULT NULL,
  `plugin_date_added` datetime NOT NULL
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
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(1, 'Obed', 'Ouano', 'bedouano', '202cb962ac59075b964b07152d234b70', 0),
(2, 'Obed', 'Ouano', 'bedouano', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_assigned_committee`
--
ALTER TABLE `tbl_assigned_committee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_plugin`
--
ALTER TABLE `tbl_plugin`
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
-- AUTO_INCREMENT for table `tbl_plugin`
--
ALTER TABLE `tbl_plugin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
