-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 12:12 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmofficial_shoesstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(600) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `description`, `image`, `created_date`) VALUES
(1, 'Adidas', '', '', '2018-07-04 17:33:13'),
(2, 'Nike', '', '', '2018-07-04 17:33:13'),
(3, 'Vans', '', '', '2018-07-04 17:33:13'),
(4, 'Reebox', '', '', '2018-07-04 17:33:13'),
(5, 'Converse', '', '', '2018-07-04 17:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `image_detail`
--

CREATE TABLE `image_detail` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `file_image` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image_detail`
--

INSERT INTO `image_detail` (`id`, `order`, `product_id`, `file_image`, `create_date`) VALUES
(404, 3, 169, '1.jpg', '2018-07-12 11:06:39'),
(405, 2, 169, '2.jpg', '2018-07-12 11:06:39'),
(406, 7, 169, '4.jpg', '2018-07-12 11:06:39'),
(407, 1, 170, '1.jpg', '2018-07-12 11:41:51'),
(408, 4, 170, '2.jpg', '2018-07-12 11:41:51'),
(409, 3, 170, '3.jpg', '2018-07-12 11:41:51'),
(410, 2, 170, '4.jpg', '2018-07-12 11:41:51'),
(411, 1, 171, '1.jpg', '2018-07-12 11:43:22'),
(412, 2, 171, '2.jpg', '2018-07-12 11:43:22'),
(413, 3, 171, '4.jpg', '2018-07-12 11:43:22'),
(414, 2, 172, '1.jpg', '2018-07-12 11:44:48'),
(415, 1, 172, '2.jpg', '2018-07-12 11:44:48'),
(416, 3, 172, '3.jpg', '2018-07-12 11:44:48'),
(417, 4, 172, '4.jpg', '2018-07-12 11:44:48'),
(418, 1, 173, '1.jpg', '2018-07-12 11:46:15'),
(419, 2, 173, '2.jpg', '2018-07-12 11:46:15'),
(420, 3, 173, '3.jpg', '2018-07-12 11:46:15'),
(421, 4, 173, '4.jpg', '2018-07-12 11:46:15'),
(426, 1, 174, '1.jpg', '2018-07-12 11:47:25'),
(427, 2, 174, '2.jpg', '2018-07-12 11:47:25'),
(428, 3, 174, '3.jpg', '2018-07-12 11:47:25'),
(429, 4, 174, '4.jpg', '2018-07-12 11:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `type` enum('1st_hand','2nd_hand') NOT NULL DEFAULT '1st_hand',
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `brand_id`, `size`, `price`, `type`, `create_date`) VALUES
(169, 'TEST', 1, '4,4.5,5,5.5,6,6.5,7,7.5,8,8.5,9,9.5,10,10.5,11,11.5,12', 5000, '1st_hand', '2018-07-12 18:06:38'),
(170, 'dsfsdf', 1, '4,4.5,5,5.5,6,6.5,7,7.5,8,8.5,9,9.5,10,10.5,11,11.5,12', 500, '1st_hand', '2018-07-12 18:41:50'),
(171, 'asdasd', 1, '4,4.5,5,5.5,6,6.5,7,7.5,8,8.5,9,9.5,10,10.5,11,11.5,12', 4000, '1st_hand', '2018-07-12 18:43:21'),
(172, 'asdasdwerwefd', 1, '4,4.5,5,5.5,6,6.5,7,7.5,8,8.5,9,9.5,10,10.5,11,11.5,12', 500, '1st_hand', '2018-07-12 18:44:47'),
(173, 'sqewewe', 1, '4,4.5,5,5.5,6,6.5,7,7.5,8,8.5,9,9.5,10,10.5,11,11.5,12', 500, '1st_hand', '2018-07-12 18:46:14'),
(174, 'sqwe34346', 1, '4,4.5,5,5.5,11,11.5,12', 500, '2nd_hand', '2018-07-12 18:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `first_field` varchar(250) NOT NULL,
  `second_field` varchar(255) NOT NULL,
  `btn_name` varchar(255) NOT NULL,
  `file` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `status` enum('Show','Hide') NOT NULL DEFAULT 'Show',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `order`, `first_field`, `second_field`, `btn_name`, `file`, `link`, `status`, `created_date`, `modified_date`) VALUES
(1, 1, 'Women Collection 2018', 'NEW SEASON', 'SHOP NOW', 'ID-1.jpg', 'https://www.google.co.th/', 'Show', '2018-07-03 19:02:04', '2018-07-04 16:52:55'),
(2, 2, 'Men New-Season', 'JACKETS & COATS', 'SHOP NOW', 'ID-2.jpg', 'https://www.youtube.com/watch?v=9sqvQQFlf5A', 'Show', '2018-07-04 16:50:02', '2018-07-04 16:50:43'),
(3, 3, 'Men Collection 2018', 'NEW ARRIVALS', 'SHOP NOW', 'ID-3.jpg', 'http://localhost/footstore/', 'Show', '2018-07-04 16:51:47', '2018-07-04 16:51:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_detail`
--
ALTER TABLE `image_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `image_detail`
--
ALTER TABLE `image_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=430;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `image_detail`
--
ALTER TABLE `image_detail`
  ADD CONSTRAINT `image_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
