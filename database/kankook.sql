-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 23, 2018 at 06:28 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kankook`
--
CREATE DATABASE IF NOT EXISTS `kankook` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `kankook`;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `recipe_id` int(11) NOT NULL AUTO_INCREMENT,
  `directions` varchar(1000) COLLATE utf8_bin NOT NULL,
  `duration` varchar(45) COLLATE utf8_bin NOT NULL,
  `level` varchar(10) COLLATE utf8_bin NOT NULL,
  `author_name` varchar(45) COLLATE utf8_bin NOT NULL,
  `post_date` datetime NOT NULL,
  `cover_img` varchar(45) COLLATE utf8_bin NOT NULL,
  `video` varchar(45) COLLATE utf8_bin NOT NULL,
  `servings` tinyint(30) UNSIGNED NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`recipe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `recipescollection`
--

DROP TABLE IF EXISTS `recipescollection`;
CREATE TABLE IF NOT EXISTS `recipescollection` (
  `collection_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `collection_name` varchar(45) COLLATE utf8_bin NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`collection_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `tag_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(45) COLLATE utf8_czech_ci NOT NULL,
  `recipe_id` int(11) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(128) COLLATE utf8_bin NOT NULL,
  `country` char(50) COLLATE utf8_bin NOT NULL,
  `description` varchar(500) COLLATE utf8_bin NOT NULL,
  `email` char(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
