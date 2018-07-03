-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 11:23 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caleg`
--

-- --------------------------------------------------------

--
-- Table structure for table `_article`
--

CREATE TABLE `_article` (
  `article_id` int(255) NOT NULL,
  `article_title` varchar(200) DEFAULT NULL,
  `article_url` text,
  `article_content` text,
  `article_create_date` date DEFAULT NULL,
  `article_publish_date` date DEFAULT NULL,
  `article_status` tinyint(1) DEFAULT NULL,
  `article_id_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_category`
--

CREATE TABLE `_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `category_photo` text,
  `category_date` date DEFAULT NULL,
  `category_status` tinyint(1) DEFAULT NULL,
  `category_type` enum('static','blog','gallery','slider') DEFAULT NULL,
  `category_sub_category` varchar(225) DEFAULT NULL,
  `category_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_contact_us`
--

CREATE TABLE `_contact_us` (
  `contact_us_id` int(11) NOT NULL,
  `contact_us_name` varchar(100) DEFAULT NULL,
  `contact_us_email` varchar(100) DEFAULT NULL,
  `contact_us_message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_photo`
--

CREATE TABLE `_photo` (
  `photo_id` int(255) NOT NULL,
  `photo_id_article` int(255) DEFAULT NULL,
  `photo_img` text,
  `photo_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_settings`
--

CREATE TABLE `_settings` (
  `settings_id` int(2) NOT NULL,
  `settings_maintenance` tinyint(1) DEFAULT NULL,
  `settings_instagram` varchar(225) DEFAULT NULL,
  `settings_facebook` varchar(225) DEFAULT NULL,
  `settings_twitter` varchar(225) DEFAULT NULL,
  `settings_youtube` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `_user`
--

CREATE TABLE `_user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_login` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_user`
--

INSERT INTO `_user` (`user_id`, `user_email`, `user_login`, `user_password`) VALUES
(1, 'a@a.com', 'aa', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_article`
--
ALTER TABLE `_article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `id_kategori` (`article_id_category`);

--
-- Indexes for table `_category`
--
ALTER TABLE `_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `_contact_us`
--
ALTER TABLE `_contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `_photo`
--
ALTER TABLE `_photo`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `id_artikel` (`photo_id_article`);

--
-- Indexes for table `_settings`
--
ALTER TABLE `_settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `_user`
--
ALTER TABLE `_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_article`
--
ALTER TABLE `_article`
  MODIFY `article_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_category`
--
ALTER TABLE `_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_user`
--
ALTER TABLE `_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `_article`
--
ALTER TABLE `_article`
  ADD CONSTRAINT `_article_ibfk_1` FOREIGN KEY (`article_id_category`) REFERENCES `_category` (`category_id`);

--
-- Constraints for table `_photo`
--
ALTER TABLE `_photo`
  ADD CONSTRAINT `_photo_ibfk_1` FOREIGN KEY (`photo_id_article`) REFERENCES `_article` (`article_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
