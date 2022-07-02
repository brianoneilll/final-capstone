-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 10:50 AM
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
  `phone_number` bigint(15) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `Name`, `Street`, `Barangay`, `City`, `Province`) VALUES
(31, 'Galang Refilling Station', 'Cuatro de Julio St.', 'Lourdes Sur East', 'Angeles City', 'Pampanga'),
(32, 'Eugene Eye Drops', 'ASASASASASA', 'Enemod', 'Angeles', 'askdasd'),
(33, 'jeff station', 'ajdakjdh', 'Sta te', 'Angeles', 'Pampanga'),
(34, 'jeff station', 'ajdakjdh', 'Sta te', 'Angeles', 'Pampanga'),
(35, 'bj store', 'aslkdjald', 'manga', 'Angeles City', 'Pampanga'),
(36, 'bj store', 'aslkdjald', 'manga', 'Angeles City', 'Pampanga'),
(37, 'BJ store', 'manga', 'ahdkajhda', 'pakdlkajd', 'ljaljalkd'),
(38, 'BJ store', 'manga', 'ahdkajhda', 'pakdlkajd', 'ljaljalkd'),
(39, 'BJ store', 'manga', 'adjad', 'pakdlkajd', 'kjahfkjahkab'),
(40, 'BJ store', 'manga', 'adjad', 'pakdlkajd', 'kjahfkjahkab'),
(41, 'BJ store', 'manga', 'adjad', 'pakdlkajd', 'kjahfkjahkab'),
(42, 'yanyan store', 'Cuatro de Julio', 'Lourdes Sur', 'Angeles City', 'Pampanga');

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
(19, 'briangalang', '$2y$10$VVKGjE7mpEzfzy5rubzLl.mbJmX1uahpEVIbEuDqCp8T8NX85uvTy', '2022-06-30 01:35:58'),
(20, 'jeffcanlas', '$2y$10$u4mpW7fpIJTTtLqfwxnEnOJINhM0ggxaDXB3SMyiggn6VIBI6Eesu', '2022-06-30 01:36:58'),
(21, 'olyn09', '$2y$10$Z9ckFHoIQLb15Ou64Ps55u00n35xXpNC43ze7fXOg8ATYXqxTfboK', '2022-06-30 13:20:27'),
(22, 'chingching', '$2y$10$dAuPxw4Q/nWvuAMR1UVq5.PVMAyRPsdMJsutR9ZEo0BmsvamQTn16', '2022-06-30 14:56:37'),
(23, 'elthonpogi', '$2y$10$K5CPoamb.Luh4EkOT.8mx.3JNadhMCEq9NZFAdBH4niGt1aSXMUX.', '2022-06-30 18:49:07'),
(24, 'yanyan', '$2y$10$JUKx/Ouf/GHEHBATjNVfb.Vpl6N2MKYiojeLd6MB.hA1OswZGSIcG', '2022-07-01 00:52:02'),
(25, 'k2', '$2y$10$fnE6nYXGNKhOWTR5h/Ye7.Opghma0j/N7o0CPt61Vu.lBd99Dh/.u', '2022-07-01 00:59:59'),
(26, 'aya', '$2y$10$QB7E2brIcGmiudHLScR9ZuoecKQd2cgXOhCj2EHcnSM7XFMLcn54K', '2022-07-01 01:04:27'),
(27, 'Eugene', '$2y$10$RJbbnowfGzBkn60wsEAaxu.E6YmrMqjZzzjySPksMdRJMTCXOSvB2', '2022-07-01 14:14:52'),
(28, 'jeff', '$2y$10$99gn1yLWnCH90tABguo2Q.pSNjKWFEqQcF..P0./PFDCVAZQb./uG', '2022-07-02 16:11:51'),
(29, 'bj', '$2y$10$OIcDivmzw25FWuwACiQIi.o.m4KyVVpNkq4wmYkLXFuyrwphh6dOm', '2022-07-02 16:15:05'),
(30, 'yanyan13', '$2y$10$yhZKb8/0HUsQudLJjt84buYPfGDR9K6oMvQar8RrrDSzRWttGVV0e', '2022-07-02 16:20:47');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
