-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 04:53 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coronasupportdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `covidsupportweb`
--

CREATE TABLE `covidsupportweb` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidsupportweb`
--

INSERT INTO `covidsupportweb` (`id`, `Name`, `email`, `mobile`, `choice`, `message`) VALUES
(0, 'veda gayathri', 'veda@gmail.com', '9809000908', 'Donate,Comment,', 'hey hi!!'),
(0, 'veda gayathri', 'veda@gmail.com', '9809000908', 'Donate,Comment,', 'hey hi!!'),
(0, 'Gourav', 'vedagayathri@gmail.com', '9550231009', 'PFA,', 'Thanks'),
(0, 'Name', 'name@example.com', '111111111', 'PFA,Help,Comment,', 'I need your help now!!.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
