-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 05:11 PM
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
  `cust_id` int(11) NOT NULL,
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

INSERT INTO `customer` (`cust_id`, `first_name`, `last_name`, `phone_number`, `pass`, `street`, `barangay`, `city`, `province`) VALUES
(1, 'Brian Oniel', 'Galang', '+639486851842', '$2y$10$ZTo3M2dvw5pVQXNTO/7HdO9ChDC1UFqFCko89OuA2/rb2Y/NORbcS', 'Cuatro de Julio St.', 'Lourdes Sur East', 'ANGELES CITY', 'Pampanga'),
(2, 'Ilah', 'Zamora', '+639339542909', '$2y$10$wQ8l4PONc3ro2QqEHqoNEuQqqEv4fk2fC50Z8kShoMZNa8XoIDufe', 'Camalig', 'Lourdes Sur', 'Angeles', 'Pampanga'),
(3, 'Oniel', 'Brian', '09991234567', '', 'Cuatro de Julio St.', 'Lourdes Sur East', 'ANGELES CITY', 'Pampanga'),
(4, 'johnny Dela', 'Dayrit', '09991234567', '', 'Cuatro de Julio St.', 'Lourdes Sur East', 'ANGELES CITY', 'Pampanga'),
(5, 'mary', 'Buenaventura', '09123456789', '', 'Camalig', 'Lourdes Sur East', 'Angeles', 'Pampanga'),
(6, 'ADrian', 'Onin', '0998765432', '', 'Cuatro de Julio St.', 'Lourdes Sur East', 'ANGELES CITY', 'Pampanga'),
(7, 'ADrian', 'Onin', '0998765432', '', 'Cuatro de Julio St.', 'Lourdes Sur East', 'ANGELES CITY', 'Pampanga'),
(8, 'Elthon ', 'Cayetano', '09996783452', '', 'ewan', 'Sapang Bato', 'Angeles', 'Pampanga'),
(9, 'kevin', 'Galang', '09996542314', '', 'Cuatro de Julio St.', 'Lourdes Sur East', 'Angeles', 'Pampanga');

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

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `storename` varchar(255) NOT NULL,
  `storeadd` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `dc` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `username`, `password`, `storename`, `storeadd`, `phone`, `dc`, `created_at`) VALUES
(1, 'test5', '$2y$10$0rxA0v3rU6pjeq5B07CCl.EENOyY3nDKIk8WfXl4i527q0e6Suk8W', 'store5', '', '+639486851842', 'desc5', '2022-07-24 20:12:53'),
(2, 'zoro', '$2y$10$jBi9NxoRQpz4MLAHYwzbfeQ5OP1xHeTzHo2YRHEHAMQ0XyMR16ABq', 'Aqua Laguna', 'Lourdes Sur East', '0948', '', '2022-07-25 14:29:54'),
(3, 'sanji', '$2y$10$SNouZ/Hfz1vqNPK8zDMH2ON/zurpVVmfqj9FI54ntw4Sh/u1hTuTG', 'Aqua', '', '09486851842', 'desc6', '2022-07-25 14:30:26'),
(4, 'Jeffrey', '$2y$10$jNTp4LSz2Qlu9t5jyR0PVOuaiOtpPTq9qpu7CrG93oYqnuHD0g4t.', 'Jelaine', 'Sta Teresita', '09991234567', 'hdjakhdakja', '2022-07-25 15:32:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
