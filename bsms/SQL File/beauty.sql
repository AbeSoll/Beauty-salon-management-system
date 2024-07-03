-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2024 at 09:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

CREATE TABLE `tblappointment` (
  `ID` int(10) NOT NULL,
  `AptNumber` varchar(80) DEFAULT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `BarberName` varchar(255) DEFAULT NULL,
  `PhoneNumber` bigint(11) DEFAULT NULL,
  `AptDate` varchar(120) DEFAULT NULL,
  `AptTime` varchar(120) DEFAULT NULL,
  `Services` varchar(120) DEFAULT NULL,
  `ApplyDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `RemarkDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblappointment`
--

INSERT INTO `tblappointment` (`ID`, `AptNumber`, `Name`, `Email`, `BarberName`, `PhoneNumber`, `AptDate`, `AptTime`, `Services`, `ApplyDate`, `Remark`, `Status`, `RemarkDate`) VALUES
(29, '530816472', 'harith', 'harith@gmail.com', 'Hafizuddin', 177587549, '7/23/2024', '12:00pm', 'Waxing and Hair Removal', '2024-07-03 06:29:16', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Gender` enum('Female','Male','Transgender') DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`ID`, `Name`, `Email`, `MobileNumber`, `Gender`, `Details`, `CreationDate`, `UpdationDate`) VALUES
(2, 'Don Williams', 'williams@gmail.com', 5565565656, 'Male', 'from Canada', '2019-07-26 11:10:02', '2021-07-09 15:11:10'),
(3, 'Tracy Peace', 'peace@gmail.com', 789465990, 'Female', 'Taking massage', '2019-07-26 11:10:28', '2021-07-09 15:35:28'),
(4, ' Jain Gloria', 'gloria@gmail.com', 5646464646, 'Female', 'from California', '2019-08-19 13:38:58', '2021-07-09 15:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`) VALUES
(26, 3, 2, 379605551, '2021-07-09 15:32:37'),
(27, 3, 4, 379605551, '2021-07-09 15:32:37'),
(28, 3, 9, 379605551, '2021-07-09 15:32:37'),
(33, 2, 8, 107583558, '2021-07-09 15:42:57'),
(34, 2, 12, 107583558, '2021-07-09 15:42:57'),
(35, 1, 1, 372872256, '2021-07-09 15:43:52'),
(36, 1, 2, 372872256, '2021-07-09 15:43:52'),
(37, 1, 4, 372872256, '2021-07-09 15:43:52'),
(38, 2, 1, 361165436, '2021-07-24 11:52:27'),
(39, 2, 2, 361165436, '2021-07-24 11:52:27'),
(40, 2, 3, 361165436, '2021-07-24 11:52:27'),
(41, 1, 1, 612048446, '2024-07-02 01:08:00'),
(42, 1, 2, 612048446, '2024-07-02 01:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `Cost`, `CreationDate`) VALUES
(1, 'Beard and Mustache Trim', 20, '2019-07-25 11:22:38'),
(2, 'Cuts and Fades', 30, '2019-07-25 11:22:53'),
(3, 'Facials', 40, '2019-07-25 11:23:10'),
(4, 'Hair Coloring and Gray Blending', 50, '2019-07-25 11:23:34'),
(5, 'Professional Braiding', 40, '2019-07-25 11:23:47'),
(6, 'Scalp Massage and Conditioning Treatment', 35, '2019-07-25 11:24:01'),
(7, 'Straight Razor Shave', 25, '2019-07-25 11:24:19'),
(8, 'Waxing and Hair Removal', 30, '2019-07-25 11:24:38'),
(9, 'Precision Cut', 25, '2019-07-25 11:24:53'),
(10, 'Clean & Very Short Hair', 15, '2019-07-25 11:25:08'),
(11, 'U-Shape Haircut', 20, '2019-07-25 11:25:35'),
(12, 'Layered Haircut', 35, '2019-08-19 13:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `userimage` varchar(255) NOT NULL DEFAULT 'but.jpg',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `name`, `lastname`, `username`, `email`, `sex`, `permission`, `password`, `mobile`, `userimage`, `status`) VALUES
(15, 'Ilham', 'Shah', 'admin', 'ilham@gmail.com', 'Male', 'Manager', '81dc9bdb52d04dc20036dbd8313ed055', 770546590, 'ilham-modified.png', 1),
(23, 'Solehin', 'Asmadi', 'solehin', 'solehinahmad954@gmail.com', 'Male', 'Staff/Barber', '81dc9bdb52d04dc20036dbd8313ed055', 177587549, 'but.jpg', 1),
(24, 'Hafizuddin', 'Raemee', 'hafiz', 'hafizraemee7@gmail.com', 'Male', 'Staff/Barber', '81dc9bdb52d04dc20036dbd8313ed055', 177587549, 'but.jpg', 1),
(25, 'Aiman', 'Afzan', 'Aiman', 'aiman@gmail.com', 'Male', 'Staff/Barber', '81dc9bdb52d04dc20036dbd8313ed055', 115765434, 'but.jpg', 1),
(26, 'Meor', 'Amir', 'Meor', 'meor@gmail.com', 'Male', 'Staff/Barber', '81dc9bdb52d04dc20036dbd8313ed055', 1867564321, 'but.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblappointment`
--
ALTER TABLE `tblappointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblappointment`
--
ALTER TABLE `tblappointment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
