-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 12:58 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finedae`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-06-06 15:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`) VALUES
(1, 'LIFESTYLE'),
(2, 'TRAVEL'),
(3, 'ART&DESIGN'),
(4, 'EVENT'),
(5, 'LIFESTYLE'),
(6, 'LIFESTYLE'),
(7, 'LIFESTYLE'),
(8, 'LIFESTYLE'),
(9, 'LIFESTYLE'),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, 'LIFESTYLE'),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, 'LIFESTYLE'),
(24, 'LIFESTYLE'),
(25, 'LIFESTYLE'),
(26, ''),
(27, ''),
(28, ''),
(29, 'LIFESTYLE'),
(30, 'LIFESTYLE'),
(31, 'LIFESTYLE'),
(32, 'LIFESTYLE'),
(33, ''),
(34, ''),
(35, ''),
(36, ''),
(37, ''),
(38, ''),
(39, ''),
(40, 'LIFESTYLE'),
(41, 'LIFESTYLE'),
(42, 'LIFESTYLE'),
(43, 'LIFESTYLE'),
(44, 'LIFESTYLE'),
(45, 'LIFESTYLE'),
(46, 'LIFESTYLE'),
(47, 'LIFESTYLE'),
(48, 'LIFESTYLE'),
(49, 'LIFESTYLE'),
(50, 'LIFESTYLE'),
(51, 'LIFESTYLE'),
(52, 'LIFESTYLE'),
(53, 'LIFESTYLE'),
(54, 'LIFESTYLE'),
(55, 'LIFESTYLE'),
(56, 'LIFESTYLE'),
(57, 'LIFESTYLE'),
(58, 'LIFESTYLE'),
(59, 'LIFESTYLE'),
(60, 'LIFESTYLE'),
(61, 'LIFESTYLE'),
(62, 'LIFESTYLE'),
(63, 'LIFESTYLE'),
(64, 'LIFESTYLE');

-- --------------------------------------------------------

--
-- Table structure for table `content_list`
--

CREATE TABLE `content_list` (
  `id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `pen` varchar(255) DEFAULT NULL,
  `lens` varchar(255) DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `detail` text,
  `date` datetime NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `file_list`
--

CREATE TABLE `file_list` (
  `id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `file_list`
--

INSERT INTO `file_list` (`id`, `content`, `type`) VALUES
(12, '/finedae/finedae-admin/content_management/uploads/LIFESTYLE/1/212ea58504d0a2f481d20edb2e7d9dad09ec4174.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL,
  `status` enum('Show','Hide') NOT NULL DEFAULT 'Show',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `order`, `description`, `file`, `link`, `status`, `created_date`, `modified_date`) VALUES
(1, 5, 'TEST1', 'ID-1.jpg', 'http://localhost/finedae/finedae-admin/slider_management/add_slider.php', 'Show', '2018-06-06 20:43:30', '2018-06-06 20:43:30'),
(2, 1, 'TEST2', 'ID-2.jpg', 'http://localhost/finedae/finedae-admin/slider_management/add_slider.php', 'Show', '2018-06-06 20:45:08', '2018-06-06 20:45:08'),
(3, 3, 'TEST3', 'ID-3.jpg', 'http://localhost/finedae/finedae-admin/slider_management/add_slider.php', 'Show', '2018-06-06 20:45:26', '2018-06-06 20:45:26'),
(4, 6, 'TEST4', 'ID-4.jpg', 'http://localhost/finedae/finedae-admin/slider_management/add_slider.php', 'Show', '2018-06-06 20:45:39', '2018-06-06 20:45:39'),
(5, 4, 'TEST5', 'ID-5.jpg', 'http://localhost/finedae/finedae-admin/slider_management/add_slider.php', 'Show', '2018-06-06 20:45:57', '2018-06-06 20:45:57'),
(6, 2, 'VIDEO', 'ID-6.mp4', 'www5', 'Show', '2018-06-06 22:49:39', '2018-06-06 22:49:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_list`
--
ALTER TABLE `content_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_id` (`content_id`);

--
-- Indexes for table `file_list`
--
ALTER TABLE `file_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `content_list`
--
ALTER TABLE `content_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `file_list`
--
ALTER TABLE `file_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `content_list`
--
ALTER TABLE `content_list`
  ADD CONSTRAINT `content_list_ibfk_1` FOREIGN KEY (`content_id`) REFERENCES `content` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
