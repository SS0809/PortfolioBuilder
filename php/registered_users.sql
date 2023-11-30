-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: remotemysql.com
-- Generation Time: Sep 07, 2022 at 07:28 AM
-- Server version: 8.0.13-4
-- PHP Version: 7.3.33-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IIVAjfeDkk`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(8) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL DEFAULT 'DEFAULT',
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT 'DEFAULT',
  `points` int(255) NOT NULL DEFAULT '5',
  `suggest` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `filename` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `sudo` varchar(10) NOT NULL DEFAULT '0',
  `chart_data` varchar(50) NOT NULL DEFAULT '0, 0, 0, 0, 0, 0, 0',
  `pay` int(11) NOT NULL DEFAULT '0',
  `goal` text,
  `sabout` varchar(200) DEFAULT NULL,
  `about` int(220) DEFAULT NULL,
  `youtube` int(200) DEFAULT NULL,
  `insta` int(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `user_name`, `display_name`, `password`, `email`, `points`, `suggest`, `filename`, `sudo`, `chart_data`, `pay`, `goal`, `sabout`, `about`, `youtube`, `insta`) VALUES
(1, 'Alfred Schmidt', 'Kate Winslet', 'ad5611358209efdc202d35127a160748', 'kate@wince.com', 5, NULL, '', '0', '0, 0, 0, 0, 0, 0, 0', 0, NULL, NULL, NULL, NULL, NULL),
(2, 'saurabhss', 'Saurabh Saraswat', '5a12e5340aa481518641a39dcc6a7554', 'saurabh45215@gmail.com', 163, '', 'https://ucarecdn.com/40cf449f-7469-4bbb-897e-9004ae15eb51/', '1', '10203040506070', 1, 'developer', 'student', NULL, NULL, NULL),
(3, 'ignite', 'Satakchi Keshav', 'acbf622a3f2ceb30a9d89dae571a1f8e', 'candycrush55@gmail.com', 5, '', '', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(5, 'Nawaaz123', 'Shah Nawaaz', '2e2e22d0752d01caa72568e6576032d8', 'shahnawaazhusain865@gmail.com', 5, '', '', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(6, 'anshya0731', 'Ansh Yadav', '2a096a39abeb5dab72a68069d9fe0e46', 'anshyadav3932@gmail.com', 5, '', '', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(7, 'Kajalchandrawanshi', 'Kajal Chandrawanshi', 'f350761fb0474734296562bf19600042', 'kajalchandrawanshi570@gmail.com', 109, '', 'https://ucarecdn.com/f7d65ac6-e8f8-4777-9cc7-2e5c2658d29d/', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(8, 'kuldeeppanwar', 'kuldeep panwar', '360369d2652c85f7f86b522b10590b27', 'kuldeepparmar6162@gmail.com', 5, '', '', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(9, 'ayushibaghel', 'Ayushi Baghel', '8952c87bf7e77f08eaa003a91cc36928', 'baghelayushi44@gmail.com', 272, '', 'https://ucarecdn.com/f7d65ac6-e8f8-4777-9cc7-2e5c2658d29d/', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(10, 'harrypotter', 'Anshika Shrivastav', '8b1783004d96cc92968f007ad043a59c', 'sanshikas010@gmail.com', 5, '', 'https://ucarecdn.com/fbbb8d75-e6cc-4bab-978d-b60f02b3f2aa/', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(13, 'ankit_charpe_', 'Ankit Charpe', 'b2c868e657756283f3ada2598570349a', 'ankitcharpe01@gmail.com', 5, '', '', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(15, 'satyam.2604', 'Satyam Agrawal', '81d5c8cde06fa77a85b72ba7e51c2da8', 'satyamagrawal2604@gmail.com', 5, '', '', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(16, 'Satakshi_31', 'Satakshi Singh', 'b7ce36c4a6c8715b1bdbbba9790107fa', 'satakshisingh2331@gmail.com', 5, '', '', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(17, 'Aakrati-barsaiyan', 'Aakrati barsaiyan', 'd0f9fa541af98698d89e8b651914beb8', 'aakratibarsaiyan@gmail.com', 5, '', '', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(18, 'pragyadwivedi', 'Pragya Dwivedi', '07635692b5506e99339d2b86d2fea2ee', 'pragyadwivedi.ee21@gmail.com', 5, '', '', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(19, 'tanu_56', 'Tanu Tiwari', '0baea2f0ae20150db78f58cddac442a9', 'tiwaritanu479@gmail.com', 320, '', 'https://ucarecdn.com/bb014d79-c21c-49e1-9bd9-3990f168fc4f/', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(20, 'Sejal batra ', 'Sejal batra ', '0011b9b3b74ebde3dc61e54b2e424500', 'sejalbatra82@gmail.com', 5, NULL, NULL, '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(21, 'vandana24', 'Vandana ', '705ae79d94bee68d87a97bd8253b6df3', 'vandana.saraswat24@gmail.com', 5, '', NULL, '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(22, '_deepalisaraswat__', 'Deepali Saraswat ', '25f9e794323b453885f5181f1b624d0b', 'deepalisaraswat11@gmail.com', 5, '', '', '0', '0', 0, NULL, NULL, NULL, NULL, NULL),
(23, 'Riya yadav', 'Riya123', '456aba4a7344bb4460e8f73b046ba855', 'riyayadavdau@gmail.com', 117, '', 'https://ucarecdn.com/c63a2661-39b1-45d2-a493-d746b10baf06/', '0', '0, 0, 0, 0, 0, 0, 0', 0, NULL, NULL, NULL, NULL, NULL),
(24, 'Palak Kushwaha ', 'Palak ', 'd351b4a9a07585b317f47de42fce473a', 'palakkushwaha903@gmail.com', 5, '', NULL, '0', '0, 0, 0, 0, 0, 0, 0', 0, NULL, NULL, NULL, NULL, NULL),
(25, '__palakvyas__', 'Palak', 'ef909edd1c5d7ca4b9181a194647b978', 'palakvyas2233@gmail.com', 5, '', NULL, '0', '0, 0, 0, 0, 0, 0, 0', 0, NULL, NULL, NULL, NULL, NULL),
(26, 'Dheeraj Mishra ', 'Dhiraj ', 'c38bb20f466251bcbe51e5d0094dfde3', 'dm4489329@gmail.com', 5, '', NULL, '0', '0, 0, 0, 0, 0, 0, 0', 0, NULL, NULL, NULL, NULL, NULL),
(27, 'Sharmila Bhaskar ', 'Sharmila ', '4d73405a9d03bd741e8cde9a65c03b92', 'sbhaskar2004@gmail.com', 5, '', NULL, '0', '0, 0, 0, 0, 0, 0, 0', 0, NULL, NULL, NULL, NULL, NULL),
(28, 'abhiral_rathore', 'Abhiral Rathore', '0baea2f0ae20150db78f58cddac442a9', 'abhiralanubhav@gmail.com', 5, '', NULL, '0', '0, 0, 0, 0, 0, 0, 0', 0, NULL, NULL, NULL, NULL, NULL),
(118, 'Abhishek verma ', 'abhishek verma ', '6eae2a972b68db67ee6aca2dc53518e1', 'rv849711@gmail.com', 5, '', NULL, '0', '0, 0, 0, 0, 0, 0, 0', 0, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
