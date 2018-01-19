-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 01:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cocktail`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `pwd` varchar(10) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `mob` varchar(10) DEFAULT NULL,
  `e_id` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `nname` varchar(20) DEFAULT NULL,
  `skul` varchar(20) DEFAULT NULL,
  `colg` varchar(20) DEFAULT NULL,
  `job` varchar(20) DEFAULT NULL,
  `hobbies` varchar(20) DEFAULT NULL,
  `reltn` varchar(20) DEFAULT NULL,
  `pro_pic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `fname`, `lname`, `pwd`, `dob`, `mob`, `e_id`, `gender`, `city`, `nname`, `skul`, `colg`, `job`, `hobbies`, `reltn`, `pro_pic`) VALUES
(1, 'Katy', 'Perry', 'iamkaty', '08/06/1989', '1474231668', 'katyisbeautiful@gmai', 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Ramu', 'Kaka', 'ramurocks', '12/10/1988', '9532556678', 'ramukaka@gmail.com', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Shushant  Singh', 'Rajput', 'oyoshushan', '21/7/1989', '956536678', 'shushu@gmail.com', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
