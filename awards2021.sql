-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 10:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `normineetype`
--

CREATE TABLE `normineetype` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `wapendekezwaFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Nicholaus Mayenga', 'nic@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `wapendekezanawapendekezwa`
--

CREATE TABLE `wapendekezanawapendekezwa` (
  `categoriesFK` int(11) NOT NULL,
  `pendekezaID` int(11) NOT NULL,
  `pendekezwaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wapendekezanawapendekezwa`
--

INSERT INTO `wapendekezanawapendekezwa` (`categoriesFK`, `pendekezaID`, `pendekezwaID`) VALUES
(3, 1, 1),
(3, 1, 1),
(4, 1, 1),
(7, 1, 1),
(8, 1, 1),
(11, 1, 1),
(13, 1, 1),
(14, 1, 1),
(15, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wapendekezwa`
--

CREATE TABLE `wapendekezwa` (
  `id` int(11) NOT NULL,
  `companyName` varchar(300) NOT NULL,
  `companyAddress` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wapendekezwa`
--

INSERT INTO `wapendekezwa` (`id`, `companyName`, `companyAddress`, `contact`, `status`) VALUES
(1, 'TIGO TANZANIA', 'tigo@tele.com', '0715787898', 'system');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `normineetype`
--
ALTER TABLE `normineetype`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wapendekezwa` (`wapendekezwaFK`);

--
-- Indexes for table `wapendekeza`
--
ALTER TABLE `wapendekeza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wapendekezanawapendekezwa`
--
ALTER TABLE `wapendekezanawapendekezwa`
  ADD KEY `categoriesPendekezaPendekezwa` (`categoriesFK`,`pendekezaID`,`pendekezwaID`),
  ADD KEY `pendekezaID` (`pendekezaID`),
  ADD KEY `pendekezwaID` (`pendekezwaID`);

--
-- Indexes for table `wapendekezwa`
--
ALTER TABLE `wapendekezwa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `normineetype`
--
ALTER TABLE `normineetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wapendekeza`
--
ALTER TABLE `wapendekeza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wapendekezwa`
--
ALTER TABLE `wapendekezwa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`awardFK`) REFERENCES `awards` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `normineetype`
--
ALTER TABLE `normineetype`
  ADD CONSTRAINT `normineetype_ibfk_1` FOREIGN KEY (`wapendekezwaFK`) REFERENCES `wapendekezwa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wapendekezanawapendekezwa`
--
ALTER TABLE `wapendekezanawapendekezwa`
  ADD CONSTRAINT `wapendekezanawapendekezwa_ibfk_1` FOREIGN KEY (`categoriesFK`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wapendekezanawapendekezwa_ibfk_2` FOREIGN KEY (`pendekezaID`) REFERENCES `wapendekeza` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wapendekezanawapendekezwa_ibfk_3` FOREIGN KEY (`pendekezwaID`) REFERENCES `wapendekezwa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
