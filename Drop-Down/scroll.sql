-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2016 at 03:04 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `down`
--

CREATE TABLE `down` (
  `title` varchar(8000) NOT NULL,
  `content` varchar(8000) NOT NULL,
  `ref` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `down`
--

INSERT INTO `down` (`title`, `content`, `ref`) VALUES
('Java', 'This is some random text for JAVA', 'www.w3schools.com'),
('PHP', 'This is some random text for PHP', 'www.w3schools.com'),
('Javascript', 'This is some random text for Javascript', 'www.w3schools.com'),
('Json', 'This is some random text for Json', 'www.w3schools.com'),
('C#', 'This is some random text for C#', 'www.w3schools.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
