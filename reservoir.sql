-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 08:54 AM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `phone_number`, `pass`, `street`, `barangay`, `city`, `province`) VALUES
(10, 'Brian Oniel', 'Galang', '0', '$2y$10$kbfNSnxbfCLRUoJlWawfVeKO9i32kCYdMcSHEBIGbGQyLg6dAxLFK', 'Cuatro de Julio', 'Lourdes Sur East', 'ANGELES CITY', 'Pampanga'),
(11, 'Jeffrey', 'Canlas', '', '$2y$10$dAcho4/j66pdpJdk12PsMOlqJSWoFyh/KFxo7m8j.V9qweHCsVzPu', 'Carlota de Leon', 'Sta. Teresita', 'Angeles ', 'Pampanga'),
(12, 'Jeffrey', 'Canlas', '+639486851842', '$2y$10$xcIZwHwh4H8AI2riSnL36OOfELMm2ABGa/ldbhO7j3/V/huadNMHG', 'Carlota de Leon', 'Sta. Teresita', 'Angeles', 'Pampanga'),
(13, 'Ilah', 'Zamora', '+639339542909', '$2y$10$QHy6F5N.aJVQ1Z8SK1v6UuO/IB0R02UzjNeYUmJ6NLHTlWzFWJHoa', 'Camalig', 'Lourdes Sur', 'Angeles', 'Pampanga'),
(14, 'Brian', 'Galang', '+639486851842', '$2y$10$TR..SjsH9BVaLVGBBaGmdu/nToiq.hRainLYFfe0/sgcUQDG8Z97O', 'Cuatro de Julio St.', 'Lourdes Sur East', 'Angeles City', 'Pampanga');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `Names` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `Names`, `Street`, `Barangay`, `City`, `Province`) VALUES
(49, '', 'Cuatro de Julio St.', 'Lourdes Sur East', 'Angeles City', 'Pampanga'),
(50, '', 'Cuatro de Julio St.', 'Lourdes Sur East', 'Angeles City', 'Pampanga'),
(51, '', 'Cuatro de Julio St.', 'Lourdes Sur East', 'Angeles City', 'Pampanga'),
(52, '', '1325 Cuatro de Julio Street Lourdes Sur East', 'Lourdes Sur East', 'Angeles City', 'Pampanga'),
(53, '', 'Camalig', 'Lourdes Sur East', 'Angeles', 'Pampanga');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `username`, `password`, `created_at`) VALUES
(42, 'khito', '$2y$10$7zpKdJC/A2XcD8rppX2fUug62UP52TpOitVXvzsnNoJgj0PvID/26', '2022-07-03 00:24:27'),
(43, 'yeye', '$2y$10$INZHejEHN67wCKgQhphb2udA7BhSJcHlZW.FWfoVwcMPFlGvIn1GS', '2022-07-03 00:30:30'),
(44, 'qwer', '$2y$10$Z2htN.F24xLK1yCn6BHEDuDiXjrzfzClsSe6IlHvKYKmZw0BNLzHq', '2022-07-03 00:35:23'),
(45, 'qwe', '$2y$10$y6n1oV00aZJwJ6Y63TWI5uGsazQfs3zEzxrqQm1MXAhkrrkBArV3y', '2022-07-03 00:43:20'),
(46, 'ching', '$2y$10$ORcu2srhtILHBnP2MOdGM.zqNSN35dac6R6Ba5dTjH1BIdWHLkS0G', '2022-07-03 14:42:30'),
(47, 'ash', '$2y$10$gdTAcbtq68WxdRYH0oiN3upRnIE9otU0z2XTKR2ch3HPeWfsC0eje', '2022-07-03 14:45:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
