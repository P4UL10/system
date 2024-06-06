-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 11:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `approval`
--

CREATE TABLE `approval` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('pending','approved','archived','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bluecard`
--

CREATE TABLE `bluecard` (
  `id` int(11) NOT NULL,
  `LRN` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `or_number` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `balance` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Second_Name` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `LRN` int(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `Last_Name`, `First_Name`, `Second_Name`, `number`, `LRN`, `Gender`, `age`, `email`, `birthdate`) VALUES
(1, 'dawd', 'wqedqd', 'qwdq', 0, 0, '', 0, '', '0000-00-00'),
(2, 'ASDSsadqw ', 'hjjjg', 'hghgh', 0, 0, '', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `user_id` int(11) NOT NULL,
  `LRN` int(255) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `extension_name` varchar(100) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mothers_name` varchar(100) DEFAULT NULL,
  `mothers_number` varchar(20) DEFAULT NULL,
  `fathers_name` varchar(100) DEFAULT NULL,
  `fathers_number` varchar(20) DEFAULT NULL,
  `grade_level` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved','archived','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `code` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email_verified` varchar(100) DEFAULT NULL,
  `codes` int(11) NOT NULL,
  `forgot_code` varchar(10) NOT NULL,
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expired` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`user_id`, `name`, `email`, `password`, `user_type`, `code`, `date`, `email_verified`, `codes`, `forgot_code`, `update_time`, `expired`) VALUES
(2, 'admin', 'giyutamioka09@gmail.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin', NULL, '2024-05-07 17:03:07', 'giyutamioka09@gmail.com', 0, '', '2024-05-13 06:41:44', 0),
(4, 'hehe', 'paulandrewgallego24@gmail.com', '0ebe2eca800cf7bd9d9d9f9f4aafbc0c77ae155f43bbbeca69cb256a24c7f9bb', 'user', NULL, '2024-05-13 07:06:43', 'paulandrewgallego24@gmail.com', 0, '', '2024-05-13 07:06:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `user_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `expires` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`user_id`, `code`, `expires`, `email`) VALUES
(1, 98987, 1715098314, 'paulandrewgallego24@gmail.com'),
(2, 96069, 1715101804, 'paulandrewgallego24@gmail.com'),
(3, 70924, 1715101860, 'paulandrewgallego24@gmail.com'),
(4, 74111, 1715101920, 'giyutamioka09@gmail.com'),
(5, 37345, 1715109649, 'paulandrewgallego24@gmail.com'),
(6, 25832, 1715110122, 'paulandrewgallego24@gmail.com'),
(7, 39049, 1715110135, 'paulandrewgallego24@gmail.com'),
(8, 90198, 1715147253, 'paulandrewgallego24@gmail.com'),
(9, 96610, 1715147267, 'paulandrewgallego24@gmail.com'),
(10, 96312, 1715148529, 'paulandrewgallego24@gmail.com'),
(11, 78934, 1715148574, 'paulandrewgallego24@gmail.com'),
(12, 76223, 1715148600, 'paulandrewgallego24@gmail.com'),
(13, 60911, 1715148616, 'paulandrewgallego24@gmail.com'),
(14, 35322, 1715148653, 'paulandrewgallego24@gmail.com'),
(15, 13599, 1715148664, 'paulandrewgallego24@gmail.com'),
(16, 99568, 1715148685, 'paulandrewgallego24@gmail.com'),
(17, 58149, 1715148712, 'paulandrewgallego24@gmail.com'),
(18, 24193, 1715148730, 'paulandrewgallego24@gmail.com'),
(19, 67616, 1715148763, 'paulandrewgallego24@gmail.com'),
(20, 11679, 1715148768, 'paulandrewgallego24@gmail.com'),
(21, 53913, 1715148779, 'paulandrewgallego24@gmail.com'),
(22, 99690, 1715148785, 'paulandrewgallego24@gmail.com'),
(23, 97355, 1715148790, 'paulandrewgallego24@gmail.com'),
(24, 56790, 1715148796, 'paulandrewgallego24@gmail.com'),
(25, 93783, 1715148967, 'paulandrewgallego24@gmail.com'),
(26, 73049, 1715149006, 'paulandrewgallego24@gmail.com'),
(27, 98815, 1715584317, 'paulandrewgallego24@gmail.com'),
(28, 30715, 1715584435, 'paulandrewgallego24@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approval`
--
ALTER TABLE `approval`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `bluecard`
--
ALTER TABLE `bluecard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `name` (`name`),
  ADD KEY `email` (`email`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approval`
--
ALTER TABLE `approval`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bluecard`
--
ALTER TABLE `bluecard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verify`
--
ALTER TABLE `verify`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
