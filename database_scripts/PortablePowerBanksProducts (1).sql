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
-- Table structure for table `PortablePowerBanksProducts`
--

CREATE TABLE IF NOT EXISTS `PortablePowerBanksProducts` (
  `Portable_PowerBank_ProductID` int(11) NOT NULL,
  `Portable_PowerBank_ProductCode` varchar(10) NOT NULL,
  `Portable_PowerBank_ProductName` varchar(255) NOT NULL,
  `Portable_PowerBank_description` text NOT NULL,
  `Portable_PowerBank_model` varchar(15) NOT NULL,
  `Portable_PowerBank_CategoryID` int(11) NOT NULL,
  `Portable_PowerBank_listPrice` decimal(10,2) NOT NULL,
  `Portable_PowerBank_WholesalePrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `PortablePowerBanksProducts`
--

INSERT INTO `PortablePowerBanksProducts` (`Portable_PowerBank_ProductID`, `Portable_PowerBank_ProductCode`, `Portable_PowerBank_ProductName`, `Portable_PowerBank_description`, `Portable_PowerBank_model`, `Portable_PowerBank_CategoryID`, `Portable_PowerBank_listPrice`, `Portable_PowerBank_WholesalePrice`, `DateCreated`) VALUES
(101, 'HCPB20000', 'PowerMax-20000', 'The PowerMax-20000 offers 20,000mAh of power for long-lasting device charging. It is perfect for heavy users and multiple device charging on the go.', 'HCPB-20000X', 100, 49.99, 29.99, '2024-10-18 23:51:17'),
(102, 'HCPB30000', 'PowerMax-30000', 'The PowerMax-30000 delivers 30,000mAh, capable of charging multiple devices several times over. It''s ideal for travelers needing reliable power for extended periods.', 'HCPB-30000X', 100, 59.99, 34.99, '2024-10-18 23:51:24'),
(103, 'HCPB25000', 'PowerMax-25000', 'With 25,000mAh capacity, the PowerMax-25000 balances high power and portability. It can charge a phone or tablet multiple times with ease.', 'HCPB-25000X', 100, 54.99, 32.99, '2024-10-18 23:51:30'),
(201, 'SPC15000', 'SolarCharge-15000', 'The SolarCharge-15000 provides 15,000mAh of solar-powered energy. Ideal for outdoor adventures, it charges via solar panels and USB.', 'SPC-15000X', 200, 39.99, 24.99, '2024-10-18 23:51:35'),
(202, 'SPC20000', 'SolarCharge-20000', 'The SolarCharge-20000 combines solar charging with a large 20,000mAh capacity. Perfect for long trips, it ensures power even in remote locations.', 'SPC-20000X', 200, 49.99, 29.99, '2024-10-18 23:51:39'),
(203, 'SPC18000', 'SolarCharge-18000', 'With 18,000mAh capacity, the SolarCharge-18000 is compact and eco-friendly. It offers dual charging options with solar and USB input.', 'SPC-18000X', 200, 44.99, 27.99, '2024-10-18 23:51:44'),
(301, 'SLC5000', 'SlimCharge-5000', 'The SlimCharge-5000 is ultra-thin with a 5,000mAh battery. Perfect for on-the-go users who need a lightweight, pocket-friendly charger.', 'SLC-5000X', 300, 19.99, 11.99, '2024-10-18 23:51:49'),
(302, 'SLC10000', 'SlimCharge-10000', 'Offering 10,000mAh in a sleek design, the SlimCharge-10000 is ideal for daily use. It easily fits in any bag or pocket for convenient charging.', 'SLC-10000X', 300, 29.99, 17.99, '2024-10-18 23:51:53'),
(303, 'SLC7500', 'SlimCharge-7500', 'With a slim profile and 7,500mAh power, the SlimCharge-7500 balances portability with performance. It''s perfect for quick recharges on the go.', 'SLC-7500X', 300, 24.99, 14.99, '2024-10-18 23:52:00'),
(401, 'FCPB15000', 'FastCharge-15000', 'The FastCharge-15000 offers 15,000mAh capacity with fast-charging technology. It quickly powers up your devices for when you''re in a rush.', 'FCPB-15000X', 400, 39.99, 24.99, '2024-10-18 23:52:05'),
(402, 'FCPB20000', 'FastCharge-20000', 'Delivering 20,000mAh of power with fast charging, the FastCharge-20000 is ideal for those who need quick and reliable charging solutions.', 'FCPB-20000X', 400, 49.99, 29.99, '2024-10-18 23:52:13'),
(403, 'FCPB25000', 'FastCharge-25000', 'The FastCharge-25000 provides 25,000mAh capacity with ultra-fast charging capabilities. It''s designed for power users who need quick top-ups.', 'FCPB-25000X', 400, 54.99, 32.99, '2024-10-18 23:52:17'),
(501, 'WCPB10000', 'WirelessPower-10000', 'The WirelessPower-10000 features 10,000mAh and Qi wireless charging. Charge your devices without the hassle of cables.', 'WCPB-10000X', 500, 39.99, 24.99, '2024-10-18 23:52:23'),
(502, 'WCPB15000', 'WirelessPower-15000', 'The WirelessPower-15000 offers 15,000mAh with wireless and USB charging options. Perfect for charging multiple devices simultaneously.', 'WCPB-15000X', 500, 49.99, 29.99, '2024-10-18 23:52:27'),
(503, 'WCPB20000', 'WirelessPower-20000', 'With 20,000mAh capacity, the WirelessPower-20000 supports wireless charging and fast USB charging. It ensures convenience and power on the go.', 'WCPB-20000X', 500, 59.99, 34.99, '2024-10-18 23:52:31'),
(601, 'PHC21', 'Phone Case Color blue', 'Red color phone case, for Iphone 14 pro max. Connects to the charging port and doubles as a case. ', 'Cas14', 600, 35.00, 26.00, '2024-11-01 17:16:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PortablePowerBanksProducts`
--
ALTER TABLE `PortablePowerBanksProducts`
 ADD PRIMARY KEY (`Portable_PowerBank_ProductID`), ADD UNIQUE KEY `Portable_PowerBank_ProductCode` (`Portable_PowerBank_ProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
