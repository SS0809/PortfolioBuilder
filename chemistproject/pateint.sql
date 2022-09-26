-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 08:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chemist`
--

-- --------------------------------------------------------

--
-- Table structure for table `pateint`
--

CREATE TABLE `pateint` (
  `timestampp` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opd` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `drug1` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty1` int(10) NOT NULL,
  `drug2` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty2` int(10) NOT NULL,
  `drug3` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty3` int(10) NOT NULL,
  `drug4` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty4` int(10) NOT NULL,
  `drug5` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty5` int(10) NOT NULL,
  `drug6` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty6` int(10) NOT NULL,
  `drug7` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty7` int(10) NOT NULL,
  `drug8` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty8` int(10) NOT NULL,
  `drug9` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty9` int(10) NOT NULL,
  `drug10` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty10` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
