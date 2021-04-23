-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 11:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dckap_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_details`
--

CREATE TABLE `ad_details` (
  `id` int(245) NOT NULL,
  `seller_info` varchar(249) NOT NULL,
  `seller_name` varchar(249) NOT NULL,
  `full_address` varchar(700) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `product_info` varchar(249) NOT NULL,
  `product_name` varchar(249) NOT NULL,
  `price` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `product_type` varchar(10) NOT NULL,
  `visible` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad_details`
--

INSERT INTO `ad_details` (`id`, `seller_info`, `seller_name`, `full_address`, `phone_no`, `product_info`, `product_name`, `price`, `brand`, `product_type`, `visible`) VALUES
(1, 'Individual', 'Kiran Kumar', '10/3238-13, Pattinamkathan', '9600580835', 'Mobile', 'Apple 12 Mini', 56000, 'Apple', 'New', 0),
(2, 'Dealer', 'Ramesh', 'L35-C, Bharathidasan Colony, KK Nagar', '9000444000', 'tablet', 'Microsoft surface go', 34000, 'Microsoft', 'Used', 0),
(3, 'Individual', 'Karthik', '10/3238-13, Pattinamkathan', '9566138809', 'Mobile', 'pixels', 23000, 'google', 'New', 0),
(4, 'Dealer', 'Libin', '1/232, Pattinamkathan', '9090908888', 'tablet', 'Apple ipad', 66000, 'Apple', 'New', 0),
(5, 'Dealer', 'Zakir', '34/233, Kavundampalayam', '8008009999', 'Mobile', 'One plus Nord', 29999, 'One plus', 'Used', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_details`
--
ALTER TABLE `ad_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_details`
--
ALTER TABLE `ad_details`
  MODIFY `id` int(245) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
