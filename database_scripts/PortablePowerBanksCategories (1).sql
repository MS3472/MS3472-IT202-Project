-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Nov 01, 2024 at 10:05 PM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ms3472`
--

-- --------------------------------------------------------

--
-- Table structure for table `PortablePowerBanksCategories`
--

CREATE TABLE IF NOT EXISTS `PortablePowerBanksCategories` (
  `Portable_PowerBank_CategoryID` int(11) NOT NULL,
  `Portable_PowerBank_CategoryCode` varchar(10) NOT NULL,
  `Portable_PowerBank_CategoryName` varchar(255) NOT NULL,
  `Portable_PowerBank_ShelfNum` varchar(5) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `PortablePowerBanksCategories`
--

INSERT INTO `PortablePowerBanksCategories` (`Portable_PowerBank_CategoryID`, `Portable_PowerBank_CategoryCode`, `Portable_PowerBank_CategoryName`, `Portable_PowerBank_ShelfNum`, `DateCreated`) VALUES
(100, 'HCPB', 'High-Capacity Power Bank', 'A1', '2024-10-18 21:59:07'),
(200, 'SPC', 'Solar-Powered Charger', 'B12', '2024-10-18 20:23:05'),
(300, 'SLC', 'Slim Portable Charger', 'A6', '2024-10-18 20:25:19'),
(400, 'FCPB', 'Fast Charging Power Bank', 'B3', '2024-10-18 20:25:44'),
(500, 'WCPB', 'Wireless Charging Power Bank', 'C2', '2024-10-18 20:26:06'),
(600, 'PHC', 'Phone case charger ', 'E2', '2024-11-01 17:11:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PortablePowerBanksCategories`
--
ALTER TABLE `PortablePowerBanksCategories`
 ADD PRIMARY KEY (`Portable_PowerBank_CategoryID`), ADD UNIQUE KEY `Portable_PowerBank_CategoryCode` (`Portable_PowerBank_CategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
