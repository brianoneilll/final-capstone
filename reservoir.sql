+-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 12:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservoir`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccounts`
--

CREATE TABLE `adminaccounts` (
  `adminId` int(255) NOT NULL,
  `userName` varchar(32) DEFAULT NULL,
  `firstName` tinytext DEFAULT NULL,
  `lastName` tinytext DEFAULT NULL,
  `phoneNumber` bigint(11) NOT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` tinytext DEFAULT NULL,
  `accessLevel` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminaccounts`
--

INSERT INTO `adminaccounts` (`adminId`, `userName`, `firstName`, `lastName`, `phoneNumber`, `emailAddress`, `password`, `role`, `accessLevel`) VALUES
(1001, 'jepoy01', 'Jeffrey', 'Canlas', 9550078343, 'jecanlas@cca.edu.ph', 'salnslangkakalampag', 'admin', '10'),
(1002, 'eltz02', 'Elthon Jon', 'Cayetano', 9616055377, 'ejcayetano@cca.edu.ph', 'bambitaWasalak', 'admin', '10'),
(1003, 'yanyan03', 'Brian Oniel', 'Galang', 9550987653, 'bogalang@cca.edu.ph', 'chowchow', 'admin', '10'),
(1004, 'bj04', 'Bhrandel John', 'Perez', 9345078343, 'bjperez@cca.edu.ph', 'ikaanimnabata', 'admin', '10'),
(1005, 'aya05', 'Ilah', 'Zamora', 9323456343, 'izamora@cca.edu.ph', 'abraham', 'admin', '10');

-- --------------------------------------------------------

--
-- Table structure for table `customeraccounts`
--

CREATE TABLE `customeraccounts` (
  `customerId` int(11) NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `firstName` tinytext DEFAULT NULL,
  `lastName` tinytext DEFAULT NULL,
  `phoneNumber` bigint(11) NOT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `storeId` int(11) NOT NULL,
  `productName` tinytext DEFAULT NULL,
  `price` int(32) DEFAULT NULL,
  `volume` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `storeID` int(11) NOT NULL,
  `storeName` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `storetransactions`
--

CREATE TABLE `storetransactions` (
  `transactionId` int(11) NOT NULL,
  `storeId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(32) DEFAULT NULL,
  `amount` bigint(100) DEFAULT NULL,
  `modeOfPayment` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `subscriptionId` int(11) NOT NULL,
  `subscriptionName` varchar(255) DEFAULT NULL,
  `vendorId` int(11) NOT NULL,
  `validity` bigint(100) DEFAULT NULL,
  `startDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `endDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptiontransactions`
--

CREATE TABLE `subscriptiontransactions` (
  `transactionId` int(11) NOT NULL,
  `vendorId` int(11) NOT NULL,
  `subscriptionId` int(11) NOT NULL,
  `amount` int(32) DEFAULT NULL,
  `modeOfPayment` text DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendoraccounts`
--

CREATE TABLE `vendoraccounts` (
  `vendorId` int(11) NOT NULL,
  `userName` varchar(32) DEFAULT NULL,
  `firstName` tinytext DEFAULT NULL,
  `lastName` tinytext DEFAULT NULL,
  `phoneNumber` bigint(11) NOT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `storeId` int(11) NOT NULL,
  `subscriptionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `walletbalances`
--

CREATE TABLE `walletbalances` (
  `accountNumber` int(11) NOT NULL,
  `accountName` text DEFAULT NULL,
  `balance` bigint(255) DEFAULT NULL,
  `vendorId` int(11) NOT NULL,
  `storeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wallettransactions`
--

CREATE TABLE `wallettransactions` (
  `transactionId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `StoreId` int(11) NOT NULL,
  `amount` int(32) DEFAULT NULL,
  `modeOfPayment` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaccounts`
--
ALTER TABLE `adminaccounts`
  ADD PRIMARY KEY (`adminId`,`phoneNumber`);

--
-- Indexes for table `customeraccounts`
--
ALTER TABLE `customeraccounts`
  ADD PRIMARY KEY (`customerId`,`phoneNumber`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `storeId` (`storeId`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`storeID`);

--
-- Indexes for table `storetransactions`
--
ALTER TABLE `storetransactions`
  ADD PRIMARY KEY (`transactionId`),
  ADD KEY `customerId` (`customerId`),
  ADD KEY `productId` (`productId`),
  ADD KEY `storeId` (`storeId`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`subscriptionId`),
  ADD KEY `vendorId` (`vendorId`);

--
-- Indexes for table `subscriptiontransactions`
--
ALTER TABLE `subscriptiontransactions`
  ADD PRIMARY KEY (`transactionId`),
  ADD KEY `subscriptionId` (`subscriptionId`),
  ADD KEY `vendorId` (`vendorId`);

--
-- Indexes for table `vendoraccounts`
--
ALTER TABLE `vendoraccounts`
  ADD PRIMARY KEY (`vendorId`,`phoneNumber`);

--
-- Indexes for table `walletbalances`
--
ALTER TABLE `walletbalances`
  ADD PRIMARY KEY (`accountNumber`);

--
-- Indexes for table `wallettransactions`
--
ALTER TABLE `wallettransactions`
  ADD PRIMARY KEY (`transactionId`),
  ADD KEY `customerId` (`customerId`),
  ADD KEY `StoreId` (`StoreId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminaccounts`
--
ALTER TABLE `adminaccounts`
  MODIFY `adminId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `customeraccounts`
--
ALTER TABLE `customeraccounts`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `storeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storetransactions`
--
ALTER TABLE `storetransactions`
  MODIFY `transactionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `subscriptionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptiontransactions`
--
ALTER TABLE `subscriptiontransactions`
  MODIFY `transactionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendoraccounts`
--
ALTER TABLE `vendoraccounts`
  MODIFY `vendorId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `walletbalances`
--
ALTER TABLE `walletbalances`
  MODIFY `accountNumber` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallettransactions`
--
ALTER TABLE `wallettransactions`
  MODIFY `transactionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`storeId`) REFERENCES `stores` (`storeID`);

--
-- Constraints for table `storetransactions`
--
ALTER TABLE `storetransactions`
  ADD CONSTRAINT `storetransactions_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `customeraccounts` (`customerId`),
  ADD CONSTRAINT `storetransactions_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`productId`),
  ADD CONSTRAINT `storetransactions_ibfk_3` FOREIGN KEY (`storeId`) REFERENCES `stores` (`storeID`);

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_ibfk_1` FOREIGN KEY (`vendorId`) REFERENCES `vendoraccounts` (`vendorId`);

--
-- Constraints for table `subscriptiontransactions`
--
ALTER TABLE `subscriptiontransactions`
  ADD CONSTRAINT `subscriptiontransactions_ibfk_1` FOREIGN KEY (`subscriptionId`) REFERENCES `subscriptions` (`subscriptionId`),
  ADD CONSTRAINT `subscriptiontransactions_ibfk_2` FOREIGN KEY (`vendorId`) REFERENCES `vendoraccounts` (`vendorId`);

--
-- Constraints for table `wallettransactions`
--
ALTER TABLE `wallettransactions`
  ADD CONSTRAINT `wallettransactions_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `customeraccounts` (`customerId`),
  ADD CONSTRAINT `wallettransactions_ibfk_2` FOREIGN KEY (`StoreId`) REFERENCES `stores` (`storeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
