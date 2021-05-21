-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 01:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `apply_id` int(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_apply` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_info`
--

CREATE TABLE `job_info` (
  `job_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_description` varchar(255) NOT NULL,
  `vacancy_no` int(50) NOT NULL,
  `experience` int(10) NOT NULL,
  `basic_pay` float NOT NULL,
  `location` varchar(255) NOT NULL,
  `last_graduation` varchar(255) NOT NULL,
  `postcode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_info`
--

INSERT INTO `job_info` (`job_id`, `user_id`, `job_title`, `job_description`, `vacancy_no`, `experience`, `basic_pay`, `location`, `last_graduation`, `postcode`) VALUES
(1, 0, 'cleaner', 'passionate for cleaning job ', 2, 1, 6, 'ealing', '', 0),
(2, 0, 'cleaner', 'passionate for cleaning job ', 2, 2, 6, 'ealing', '', 0),
(3, 0, 'cleaner', 'passionate for cleaning job ', 2, 2, 4, 'ealing', 'graduate', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_details`
--

CREATE TABLE `job_seeker_details` (
  `user_id` int(10) NOT NULL,
  `resume_upload` double NOT NULL,
  `education` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `seeker_detail_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `password`, `address`, `postcode`, `role`, `contact_no`, `photo`) VALUES
(1, 'hemani', 'patel', 'hemani123@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'kingston', 'kt6', 'Job Seeker', 758641238, 'images/IMG-20181120-WA0066.jpg'),
(2, 'hemani', 'patel', 'hemani123@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'kingston', 'kt6', 'Job Seeker', 758641238, 'images/IMG-20181120-WA0066.jpg'),
(3, 'hemani', 'patel', 'hemani123@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'kingston', 'kt6', 'Job Seeker', 758641238, 'images/IMG-20181120-WA0066.jpg'),
(4, 'niki', 'rana', 'niki456@gmail.com', 'acc4cfc0773695795955f187d86342c3', 'richmond', 'ref456', 'Job Recruiter', 785412369, 'images/BLOG-IMAGE.png'),
(5, 'brijesh', 'patel', 'brijeshp@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'kingston', 'kt7', 'Job Recruiter', 754869321, 'images/_71A6928.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `job_info`
--
ALTER TABLE `job_info`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_seeker_details`
--
ALTER TABLE `job_seeker_details`
  ADD PRIMARY KEY (`seeker_detail_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `apply_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_info`
--
ALTER TABLE `job_info`
  MODIFY `job_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_seeker_details`
--
ALTER TABLE `job_seeker_details`
  MODIFY `seeker_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
