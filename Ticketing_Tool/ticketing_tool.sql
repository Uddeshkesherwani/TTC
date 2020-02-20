-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 03:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketing_tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assign_list`
--

CREATE TABLE `assign_list` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `table_ir` varchar(20) NOT NULL,
  `table_id` varchar(10) NOT NULL,
  `assign_grp` text NOT NULL,
  `assign_person` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `developer_profile`
--

CREATE TABLE `developer_profile` (
  `id` int(11) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `Team` varchar(50) NOT NULL,
  `Post` varchar(50) NOT NULL,
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developer_profile`
--

INSERT INTO `developer_profile` (`id`, `user_id`, `Team`, `Post`, `Status`) VALUES
(1, '9450053980', 'Backend', 'Leader', '');

-- --------------------------------------------------------

--
-- Table structure for table `incident`
--

CREATE TABLE `incident` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `inc_no` int(11) NOT NULL,
  `contact_type` varchar(10) NOT NULL,
  `contact_name` text NOT NULL,
  `state` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `bservice` text NOT NULL,
  `assign_grp` varchar(20) NOT NULL,
  `assign_person` text NOT NULL,
  `short_description` text NOT NULL,
  `type` text NOT NULL,
  `date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `request_no` varchar(10) NOT NULL,
  `contact_type` varchar(10) NOT NULL,
  `caller_name` text NOT NULL,
  `state` varchar(20) NOT NULL,
  `category` text NOT NULL,
  `bus_ser` text NOT NULL,
  `assign_group` varchar(50) NOT NULL,
  `assign_name` text NOT NULL,
  `date` datetime NOT NULL,
  `priority` varchar(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `profile_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `type` varchar(10) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` date NOT NULL,
  `post` text NOT NULL,
  `email` text NOT NULL,
  `email-2` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `mobile-2` varchar(10) NOT NULL,
  `website` text NOT NULL,
  `company` text NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `adr` text NOT NULL,
  `short_desc` text NOT NULL,
  `twiter` text NOT NULL,
  `fb` text NOT NULL,
  `github` text NOT NULL,
  `insta` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`profile_id`, `status`, `type`, `fname`, `lname`, `gender`, `age`, `dob`, `post`, `email`, `email-2`, `mobile`, `mobile-2`, `website`, `company`, `country`, `state`, `city`, `adr`, `short_desc`, `twiter`, `fb`, `github`, `insta`, `password`) VALUES
(18, 1, 'user', 'SATYAM', 'AGRAWAL', 'Male', 0, '1998-06-26', '', 'satyam.agrawal.tech@gmail.com', '', '7880380026', '', '', 'The Tech Cubes', 'India', 'UP', 'Allahabad', '', 'I am Backend development', '', '', '', '', 'fd014d225ebbb8fc185af614c9c3f012'),
(19, 1, 'developer', 'Satyam', '', 'Male', 0, '1998-06-26', '1', '', '', '9450053980', '', '', '', '', '', '', '', '', '', '', '', '', '1fb6b08bb3446673ca7d18157f26c966');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_list`
--
ALTER TABLE `assign_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developer_profile`
--
ALTER TABLE `developer_profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inc_no` (`inc_no`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `request_no` (`request_no`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`profile_id`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_list`
--
ALTER TABLE `assign_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `developer_profile`
--
ALTER TABLE `developer_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `incident`
--
ALTER TABLE `incident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
