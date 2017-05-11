-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 12:01 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thalassemia`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `cmt_id` int(11) NOT NULL,
  `st_id_fk` int(11) DEFAULT NULL,
  `u_id_fk` int(11) DEFAULT NULL,
  `cmt_content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `med_data`
--

CREATE TABLE `med_data` (
  `md_id` int(11) NOT NULL,
  `u_id_fk` int(11) DEFAULT NULL,
  `md_gender` varchar(10) DEFAULT NULL,
  `md_nationality` varchar(100) DEFAULT NULL,
  `md_religion` varchar(100) DEFAULT NULL,
  `md_caste` varchar(100) DEFAULT NULL,
  `md_bloodgrp` varchar(10) DEFAULT NULL,
  `md_thstatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med_data`
--

INSERT INTO `med_data` (`md_id`, `u_id_fk`, `md_gender`, `md_nationality`, `md_religion`, `md_caste`, `md_bloodgrp`, `md_thstatus`) VALUES
(1, 1, 'male', 'indian', 'hinduism', 'xyz', 'A+', 'major');

-- --------------------------------------------------------

--
-- Table structure for table `story_table`
--

CREATE TABLE `story_table` (
  `st_id` int(11) NOT NULL,
  `u_id_fk` int(11) DEFAULT NULL,
  `st_title` varchar(255) DEFAULT NULL,
  `st_content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tip_table`
--

CREATE TABLE `tip_table` (
  `tip_id` int(11) NOT NULL,
  `u_id_fk` int(11) DEFAULT NULL,
  `tip_content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertype_table`
--

CREATE TABLE `usertype_table` (
  `ut_id` int(11) NOT NULL,
  `ut_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype_table`
--

INSERT INTO `usertype_table` (`ut_id`, `ut_type`) VALUES
(1, 'user'),
(2, 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(100) DEFAULT NULL,
  `u_lname` varchar(100) DEFAULT NULL,
  `u_email` varchar(100) DEFAULT NULL,
  `u_phno` bigint(20) DEFAULT NULL,
  `u_type_fk` int(11) DEFAULT NULL,
  `u_doc_regid` varchar(100) DEFAULT NULL,
  `u_pwd` varchar(100) NOT NULL,
  `u_bdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`u_id`, `u_fname`, `u_lname`, `u_email`, `u_phno`, `u_type_fk`, `u_doc_regid`, `u_pwd`, `u_bdate`) VALUES
(1, 'viraj', 'trivedi', 'a@b.com', 990909090, 1, '', 'abc', '2000-12-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`cmt_id`);

--
-- Indexes for table `med_data`
--
ALTER TABLE `med_data`
  ADD PRIMARY KEY (`md_id`);

--
-- Indexes for table `story_table`
--
ALTER TABLE `story_table`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `tip_table`
--
ALTER TABLE `tip_table`
  ADD PRIMARY KEY (`tip_id`);

--
-- Indexes for table `usertype_table`
--
ALTER TABLE `usertype_table`
  ADD PRIMARY KEY (`ut_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `cmt_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `med_data`
--
ALTER TABLE `med_data`
  MODIFY `md_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `story_table`
--
ALTER TABLE `story_table`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tip_table`
--
ALTER TABLE `tip_table`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usertype_table`
--
ALTER TABLE `usertype_table`
  MODIFY `ut_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
