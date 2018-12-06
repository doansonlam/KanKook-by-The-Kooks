-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2018 at 05:52 AM
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
-- Table structure for table `collection`
--

DROP TABLE IF EXISTS `collection`;
CREATE TABLE IF NOT EXISTS `collection` (
  `collection_id` int(11) NOT NULL AUTO_INCREMENT,
  `collection_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`collection_id`,`user_id`),
  KEY `fk_collection_users_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `collection_has_recipes`
--

DROP TABLE IF EXISTS `collection_has_recipes`;
CREATE TABLE IF NOT EXISTS `collection_has_recipes` (
  `collection_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  PRIMARY KEY (`collection_id`,`recipe_id`),
  KEY `fk_collection_has_recipe_id` (`recipe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `recipe_id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_name` varchar(255) COLLATE utf8_bin NOT NULL UNIQUE,
  `author_name` varchar(225) COLLATE utf8_bin NOT NULL,
  `post_date` datetime NOT NULL,
  `duration` time NOT NULL,
  `level` varchar(10) COLLATE utf8_bin NOT NULL,
  `servings` tinyint(30) NOT NULL,
  `cover_img` varchar(225) COLLATE utf8_bin NOT NULL,
  `video` varchar(225) COLLATE utf8_bin NOT NULL,
  `directions` varchar(1000) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`recipe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_has_tags`
--

DROP TABLE IF EXISTS `recipe_has_tags`;
CREATE TABLE IF NOT EXISTS `recipe_has_tags` (
  `recipe_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`recipe_id`,`tag_id`),
  KEY `fk_tag_id` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(50) COLLATE utf8_bin NOT NULL UNIQUE,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin NOT NULL UNIQUE,
  `firstname` varchar(255) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL UNIQUE,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_pfp` varchar(255) COLLATE utf8_bin NOT NULL,
  `gender` varchar(45) COLLATE utf8_bin NOT NULL,
  `description` varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `fk_collection_users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `collection_has_recipes`
--
ALTER TABLE `collection_has_recipes`
  ADD CONSTRAINT `fk_collection_has_recipe_id` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`recipe_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_recipe_has_collection_id` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`collection_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recipe_has_tags`
--
ALTER TABLE `recipe_has_tags`
  ADD CONSTRAINT `fk_tag_has_recipe_id` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`recipe_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_recipe_has_tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`tag_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
