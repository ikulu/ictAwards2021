-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 04, 2021 at 06:48 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awards2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'admin', '0626808168', 'admin@ictc.tz', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `name`) VALUES
(1, 'PREMIER AWARDS'),
(2, 'SPECIAL AWARDS');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `awardFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `awardFK`) VALUES
(3, 'BEST ICT COMPANY OF THE YEAR', 1),
(4, 'BEST TANZANIAN OWNED ICT COMPANY OF THE YEAR', 1),
(7, 'MOST INNOVATIVE ICT COMPANY OF THE YEAR', 1),
(8, 'BEST ICT CONTACT CENTER & BPO COMPANY OF THE YEAR', 1),
(11, 'BEST ICT COMPANY OF THE YEAR FOR ANIMATION & GAME DEVELOMENT', 1),
(12, 'BEST ICT COMPANY OF THE YEAR PROVIDING SERVICES FOR FINANCE AND ACCOUNTING', 1),
(13, 'BEST ICT COMPANY OF THE YEAR PROVIDING SERVICES FOR HEALTH INFORMATION MANAGEMENT', 1),
(14, 'BEST ICT COMPANY OF THE YEAR FOR INFORMATION TECHNOLOGY TECHNOLOGY & SOFTWARE DEVELOPMENT', 1),
(15, 'BEST YOUNG ICT ENTREPRENEUR OF THE YEAR', 1),
(16, 'BEST ICT RESEARCH OF THE YEAR', 1),
(17, 'BEST CUSTOMER SERVICE AWARD', 2);

-- --------------------------------------------------------

--
-- Table structure for table `normineeType`
--

CREATE TABLE `normineeType` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normineeType`
--

INSERT INTO `normineeType` (`id`, `name`) VALUES
(1, 'INTERNET SERVICE PROVIDER');

-- --------------------------------------------------------

--
-- Table structure for table `wapendekeza`
--

CREATE TABLE `wapendekeza` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wapendekeza`
--

INSERT INTO `wapendekeza` (`id`, `name`, `email`, `code`) VALUES
(21, 'Nicholaus Mayenga', 'mayenganicholaus66@gmail.com', 'yuiui98'),
(22, 'Kulwa', 'clausevee@gmail.com', 'yuiui98'),
(25, 'Nicholaus Mayenga', 'admin@ictc.tz', 'yuiui98');

-- --------------------------------------------------------

--
-- Table structure for table `wapendekezanawapendekezwa`
--

CREATE TABLE `wapendekezanawapendekezwa` (
  `id` int(11) NOT NULL,
  `categoriesFK` int(11) NOT NULL,
  `pendekezaID` int(11) NOT NULL,
  `pendekezwaID` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wapendekezanawapendekezwa`
--

INSERT INTO `wapendekezanawapendekezwa` (`id`, `categoriesFK`, `pendekezaID`, `pendekezwaID`, `status`) VALUES
(21, 3, 21, 2, 'confirmed'),
(22, 4, 21, 2, 'not confirmed'),
(23, 7, 21, 2, 'not confirmed'),
(24, 8, 21, 2, 'not confirmed'),
(25, 11, 21, 2, 'not confirmed'),
(26, 12, 21, 2, 'not confirmed'),
(27, 13, 21, 2, 'not confirmed'),
(28, 14, 21, 2, 'not confirmed'),
(29, 15, 21, 2, 'not confirmed'),
(30, 16, 21, 2, 'not confirmed'),
(31, 3, 22, 3, 'confirmed'),
(32, 4, 22, 2, 'not confirmed'),
(33, 7, 22, 2, 'not confirmed'),
(34, 8, 22, 2, 'confirmed'),
(35, 11, 22, 2, 'not confirmed'),
(36, 12, 22, 2, 'not confirmed'),
(37, 13, 22, 2, 'not confirmed'),
(38, 14, 22, 2, 'not confirmed'),
(39, 15, 22, 2, 'not confirmed'),
(40, 16, 22, 2, 'not confirmed'),
(43, 3, 25, 3, 'not confirmed'),
(44, 4, 25, 2, 'not confirmed'),
(45, 7, 25, 2, 'not confirmed'),
(46, 8, 25, 3, 'not confirmed'),
(47, 11, 25, 2, 'not confirmed'),
(48, 12, 25, 2, 'not confirmed'),
(49, 13, 25, 2, 'not confirmed'),
(50, 14, 25, 2, 'not confirmed'),
(51, 15, 25, 3, 'not confirmed'),
(52, 16, 25, 3, 'not confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `wapendekezwa`
--

CREATE TABLE `wapendekezwa` (
  `id` int(11) NOT NULL,
  `companyName` varchar(300) NOT NULL,
  `companyAddress` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `status` varchar(100) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wapendekezwa`
--

INSERT INTO `wapendekezwa` (`id`, `companyName`, `companyAddress`, `contact`, `status`, `type`) VALUES
(2, 'Vodacom Tanzania', 'info@vdc.go', '0626808168', 'Active', 1),
(3, 'TIGO TANZANIA', 'info@vdc.goo', '0626808165', 'Active', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adminEmail` (`email`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `awards` (`awardFK`);

--
-- Indexes for table `normineeType`
--
ALTER TABLE `normineeType`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wapendekeza`
--
ALTER TABLE `wapendekeza`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wapendekezanawapendekezwa`
--
ALTER TABLE `wapendekezanawapendekezwa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoriesPendekezaPendekezwa` (`categoriesFK`,`pendekezaID`,`pendekezwaID`),
  ADD KEY `pendekezaID` (`pendekezaID`),
  ADD KEY `pendekezwaID` (`pendekezwaID`);

--
-- Indexes for table `wapendekezwa`
--
ALTER TABLE `wapendekezwa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `normineeType`
--
ALTER TABLE `normineeType`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wapendekeza`
--
ALTER TABLE `wapendekeza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `wapendekezanawapendekezwa`
--
ALTER TABLE `wapendekezanawapendekezwa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `wapendekezwa`
--
ALTER TABLE `wapendekezwa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`awardFK`) REFERENCES `awards` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wapendekezanawapendekezwa`
--
ALTER TABLE `wapendekezanawapendekezwa`
  ADD CONSTRAINT `wapendekezanawapendekezwa_ibfk_1` FOREIGN KEY (`categoriesFK`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wapendekezanawapendekezwa_ibfk_2` FOREIGN KEY (`pendekezaID`) REFERENCES `wapendekeza` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wapendekezanawapendekezwa_ibfk_3` FOREIGN KEY (`pendekezwaID`) REFERENCES `wapendekezwa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wapendekezwa`
--
ALTER TABLE `wapendekezwa`
  ADD CONSTRAINT `wapendekezwa_ibfk_1` FOREIGN KEY (`type`) REFERENCES `normineeType` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
