-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2018 at 08:57 AM
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
(1, 2, 'TEST1', 'ID-1.jpg', 'http://localhost/finedae/finedae-admin/slider_management/add_slider.php', 'Show', '2018-06-06 20:43:30', '2018-06-06 20:43:30'),
(2, 1, 'TEST2', 'ID-2.jpg', 'http://localhost/finedae/finedae-admin/slider_management/add_slider.php', 'Show', '2018-06-06 20:45:08', '2018-06-06 20:45:08'),
(3, 4, 'TEST3', 'ID-3.jpg', 'http://localhost/finedae/finedae-admin/slider_management/add_slider.php', 'Show', '2018-06-06 20:45:26', '2018-06-06 20:45:26'),
(4, 6, 'TEST4', 'ID-4.jpg', 'http://localhost/finedae/finedae-admin/slider_management/add_slider.php', 'Show', '2018-06-06 20:45:39', '2018-06-06 20:45:39'),
(5, 5, 'TEST5', 'ID-5.jpg', 'http://localhost/finedae/finedae-admin/slider_management/add_slider.php', 'Show', '2018-06-06 20:45:57', '2018-06-06 20:45:57'),
(6, 3, 'VIDEO', 'ID-6.mp4', 'www5', 'Show', '2018-06-06 22:49:39', '2018-06-06 22:49:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
