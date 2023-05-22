-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 11:27 AM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(0, 'admin', 'icoders', 'developer@yopmail.com', 'vdoa8Zr!or');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_category_id`, `category_name`) VALUES
(10, 12, ''),
(11, 0, 'laptop'),
(12, 10, 'mobil');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `is_active` int(1) NOT NULL,
  `show_when` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `parent_category_id`, `description`, `is_active`, `show_when`) VALUES
(1, 'test', 0, 11, '', 1, '0000-00-00'),
(2, 'demo', 1500, 12, '<p><strong>szdfsdafsdfsdsdfdssd</strong></p>\r\n', 0, '0000-00-00'),
(3, 'dfg', 56456, 11, '<p>45654645<s>6 456</s></p>\r\n', 1, '1900-01-16'),
(4, 'test', 35434, 10, '<p>5345345345</p>\r\n', 0, '0000-00-00'),
(5, 'asrsads', 234, 11, '<p>234234</p>\r\n', 1, '0000-00-00'),
(6, 'ersddsf', 35443, 11, '<p>dfgsdg</p>\r\n', 1, '0000-00-00'),
(7, 'sdfg', 3453, 12, '\r\ndfger5434534\r\n\r\n', 1, '0000-00-00'),
(8, 'sdfg', 3453, 12, 'dfger5434534', 1, '0000-00-00'),
(9, 'sdfg', 3453, 12, '\r\ndfger5434534\r\n\r\n', 1, '28/02/2023'),
(10, '1', 1, 11, '<p>1</p>\r\n', 1, '22/02/2023'),
(11, '', 0, 0, '', 0, '11-02-2023'),
(12, '', 0, 0, '', 0, '11-02-2023'),
(13, '', 0, 0, '', 0, '11-02-2023'),
(14, '', 0, 0, '', 0, '11-02-2023'),
(15, '', 0, 0, '', 0, '11-02-2023'),
(16, '', 0, 0, '', 0, '11-02-2023'),
(17, '', 0, 0, '', 0, '11-02-2023'),
(18, '', 0, 0, '', 0, '11-02-2023'),
(19, '', 0, 0, '', 0, '11-02-2023'),
(20, '', 0, 0, '', 0, '11-02-2023'),
(21, '', 0, 0, '', 0, '11-02-2023'),
(22, '', 0, 0, '', 0, '11-02-2023'),
(23, '', 0, 0, '', 0, '11-02-2023'),
(24, '', 0, 0, '', 0, '11-02-2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
