-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 01:00 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_info`
--

CREATE TABLE `blog_info` (
  `id` int(3) NOT NULL,
  `category_name` text NOT NULL,
  `blog_title` text NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `images` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_info`
--

INSERT INTO `blog_info` (`id`, `category_name`, `blog_title`, `short_description`, `long_description`, `images`, `status`) VALUES
(3, '--Select Category Name--', 'ssssssssssssss', 'sssssssssssssssssssss', 'sssssssssssssssssssssssssssssss', '', ''),
(4, '2', 'ddddddddddddddd', 'ddddddddddddd', 'ddddddddddddddddddddddddd', '', 'afa'),
(5, '1', 'cccccccccccc', 'cccccccccccccccccc', 'cccccccccccccccccccccccccccccccc', '', ']'),
(6, '1', 'fafafa123', '', 'afafaf123', '', '1]'),
(7, '2', 'fafafa099999', '9afafafafa', 'afafa0987654', '', '1]'),
(8, '--Select Category Name--', 'sumona', 'my second', 'love', '', ']'),
(9, '--Select Category Name--', 'afaafa', 'afafafa', 'afafafa', '', ']'),
(10, '--Select Category Name--', 'bbbbbbbbbbbbbbbbb', 'bbbbbbbbbbbbbbbbbbb', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbb', '', ']'),
(11, '2', 'ddddddddddddddd', 'ddddddddddddd', 'ddddddddddddddddddddddddd', '', 'afa]'),
(12, '1', 'cccccccccccc', 'cccccccccccccccccc', 'cccccccccccccccccccccccccccccccc', '', ']]');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(3) NOT NULL,
  `category_name` text NOT NULL,
  `category_description` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_description`, `status`) VALUES
(9, 'hokey', 'afafaafffffffffffffffffffffffffffffffffffffffgagagggggggggggggggggggggggggggfagagfaaaaaaaaaaaaaaa', '0'),
(10, 'Football', 'Football is a family of team sports that involve, to varying degrees, kicking a ball to score a goal. Unqualified, the word football normally means the form of football that is the most popular where the word is used.', '0'),
(11, 'Basketball', 'Basketball is a team sport in which two teams, most commonly of five players each, opposing one another on a rectangular court,', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Super Admin', 'admin@blogs.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_info`
--
ALTER TABLE `blog_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_info`
--
ALTER TABLE `blog_info`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
