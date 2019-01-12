-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 03:36 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cust_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cust_datetime` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_datetime`) VALUES
(1, 'Bruce Wayne', 'bruce@wayneenterprise.com', '12.02.2019 13:33:00'),
(2, 'Peter Parker', 'peter@newsagency.com', '12.02.2019 13:33:00'),
(3, 'Tony Stark', 'tony@starkindustries.com', '12.02.2019 13:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `customertwo`
--

CREATE TABLE `customertwo` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cust_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cust_datetime` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customertwo`
--

INSERT INTO `customertwo` (`cust_id`, `cust_name`, `cust_email`, `cust_datetime`) VALUES
(1, 'Bruce Wayne', 'bruce@wayneenterprise.com', '12.02.2019 13:33:00'),
(2, 'Peter Parker', 'peter@newsagency.com', '12.02.2019 13:33:00'),
(3, 'Tony Stark', 'tony@starkindustries.com', '12.02.2019 13:33:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `customertwo`
--
ALTER TABLE `customertwo`
  ADD PRIMARY KEY (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customertwo`
--
ALTER TABLE `customertwo`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
