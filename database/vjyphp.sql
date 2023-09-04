-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 11:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vjyphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cratetable`
--

CREATE TABLE `cratetable` (
  `id` int(10) NOT NULL,
  `name` varchar(140) DEFAULT NULL,
  `mobile_no` bigint(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cratetable`
--

INSERT INTO `cratetable` (`id`, `name`, `mobile_no`, `email`, `password`, `state`, `city`, `gender`) VALUES
(1, 'vijay mishra', 8349479670, 'dular88@gmail.com', '123', 'Chhattisgarh', 'raipur', 'male'),
(3, 'milan pradhan', 46654654, 'milan@gmail.com', '456', 'Chhattisgarh', 'tfutu', 'male'),
(4, 'moho', 6463465464, 'reg@gm', '852', 'gujraat', 'tfutu', 'female'),
(5, 'fdbd', 3563463546, 'reg@gm', '827ccb0eea', 'Chhattisgarh', 'rpr', 'female'),
(6, 'sadfsadf', 66666867677, '1sdf@g', '250cf8b51c', 'Chhattisgarh', 'wdcfdw', 'female'),
(7, 'sadfsadf', 646354654654, 'vijay522@gmail.com', '1349437e3137826639b4f5165bc7e02b', 'Chhattisgarh', 'rpr', 'female'),
(8, 'vijay mishra', 66646464654, 'vij@22gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Chhattisgarh', 'rpr', 'female'),
(9, 'vijay mishra', 56464646, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'Chhattisgarh', 'rpr', 'male'),
(10, 'bablu', 85645646546, 'bab43@gmail.com', '202cb962ac59075b964b07152d234b70', 'Chhattisgarh', 'rpr', 'male'),
(11, 'rgdyryhdrey', 7567567, 'gcfhfh@yry.hgfdhfdh', '7c1195e7f6d2e0054a532cdf6ada4b9f', 'Chhattisgarh', 'fhbdfhfdh', 'male'),
(13, 'vija _dddd', 4664646464646, 'vijayy@gmail.com', '202cb962ac59075b964b07152d234b70', 'Chhattisgarh', 'rpr', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `Id` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Id`, `userId`, `title`, `description`) VALUES
(1, 0, 'hfh56', 'fjfjjgfgfhgfhgfhgfhgfggfdgdsss'),
(2, 0, 'hfh5644', 'yfjfjjjjjjhjftydfutygfuuuyrtaseeqwedhjgkkkh'),
(3, 123, 'coding', 'sgdhgt'),
(4, 9, 'hfh56', 'ururuurutrutr'),
(5, 9, 'vijaymishra', 'vgdgdgdgdvvdhjjhdjhdhddvijay is the pawerfull man in the world so'),
(6, 9, '', ''),
(7, 9, 'user_title', 'user_description'),
(8, 9, 'hfh56', 'dgsdbhdfhn'),
(9, 9, 'coding', 'fdcghfgf'),
(10, 9, '123', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cratetable`
--
ALTER TABLE `cratetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cratetable`
--
ALTER TABLE `cratetable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
