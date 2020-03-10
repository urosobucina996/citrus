-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2020 at 07:35 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrus_fruits`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `status`, `name`, `email`, `text`) VALUES
(1, 1, 'Uros', 'uros.obucina@gmail.com', 'Prvi komentar.'),
(2, 1, 'Uros', 'uros.obucina@gmail.com', 'Prvi komentar.'),
(3, 0, 'Uros', 'uros.obucina@gmail.com', 'Prvi komentar.'),
(4, 0, 'Nemanj', 'nemanj@gmail.com', 'Ovo je drugi komentar.'),
(5, 0, 'dormatory', 'uros.obucina', 'Uros'),
(6, 0, 'dormatory', 'asdasdas', 'asdasd'),
(7, 1, 'new ', 'new@gmail.com', 'Testing 1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `image`, `description`) VALUES
(1, 'Lemon 1', 'public/images/lemon.jpg', 'Lemon 1 description'),
(2, 'Orange 1', 'public/images/lemon.jpg', 'Orange 1'),
(3, 'Grapefruit 1', 'public/images/grapefruit.jpg', 'Grapefruit 1 description'),
(4, 'Lemon 2', 'public/images/lemon.jpg', 'Lemon 2'),
(5, 'Orange 2', 'public/images/orange.jpg', 'Orange 2'),
(6, 'Grapefruit 2', 'public/images/grapefruit.jpg', 'Grapefruit 2 description'),
(7, 'Lemon 3', 'public/images/lemon.jpg', 'Lemon 3 description'),
(8, 'Orange 3', 'public/images/orange.jpg', 'Orange 3 description'),
(9, 'Grapefruit 3', 'public/images/grapefruit.jpg', 'Grapefruit 3 description');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
