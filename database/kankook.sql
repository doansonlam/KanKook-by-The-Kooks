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
  PRIMARY KEY (`user_id`)
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
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(50) COLLATE utf8_bin NOT NULL UNIQUE,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


-- --------------------------------------------------------

--
-- Table structure for table `saves`
--

DROP TABLE IF EXISTS `saves`;
CREATE TABLE IF NOT EXISTS `saves` (
  `user_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`recipe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_has_tags`
--

DROP TABLE IF EXISTS `recipe_has_tags`;
CREATE TABLE IF NOT EXISTS `recipe_has_tags` (
  `recipe_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`recipe_id`,`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Create Admin accounts
--
CREATE USER IF NOT EXISTS 'Kha_kooks'@'localhost' IDENTIFIED BY 'bits2634.kankook';
GRANT ALL ON kankook.* TO 'Kha_kooks'@'localhost';
CREATE USER IF NOT EXISTS 'Thang_kooks'@'localhost' IDENTIFIED BY 'bits2634.kankook';
GRANT ALL ON kankook.* TO 'Thang_kooks'@'localhost';
CREATE USER IF NOT EXISTS 'Tai_kooks'@'localhost' IDENTIFIED BY 'bits2634.kankook';
GRANT ALL ON kankook.* TO 'Tai_kooks'@'localhost';
CREATE USER IF NOT EXISTS 'Lam_kooks'@'localhost' IDENTIFIED BY 'bits2634.kankook';
GRANT ALL ON kankook.* TO 'Lam_kooks'@'localhost';


 FLUSH PRIVILEGES; 
--
-- Constraints for table `saves`
--
ALTER TABLE `saves`
  ADD CONSTRAINT `fk_saves_users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_saves_recipes_id` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`recipe_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

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
