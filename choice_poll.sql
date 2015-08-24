-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2015 at 10:30 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `choice_poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `comment`, `created`) VALUES
(1, '', '', '', '0000-00-00 00:00:00'),
(2, '', '', '', '0000-00-00 00:00:00'),
(3, 's', 'olakunleolugbenga@gmail.com', 'ss', '0000-00-00 00:00:00'),
(4, 'shh', 'ss', 'sss', '0000-00-00 00:00:00'),
(5, 'shh', 'ss', 'sss', '0000-00-00 00:00:00'),
(6, 'Aladeusi', 'olakunleolugbenga@gmail.com', 'sdasdfeas', '0000-00-00 00:00:00'),
(7, '', '', '', '0000-00-00 00:00:00'),
(8, '', '', '', '0000-00-00 00:00:00'),
(9, '', '', '', '0000-00-00 00:00:00'),
(10, '', '', '', '0000-00-00 00:00:00'),
(11, '', '', '', '0000-00-00 00:00:00'),
(12, 'olaolu', 'olakunleolugbenga@gmail.com', 'wa', '0000-00-00 00:00:00'),
(13, 'SADS', 'olakunleolugbenga@gmail.com', 'SADAS', '2015-08-22 19:13:54'),
(14, 'popp', 'olakunleolugbenga@gmail.com', 'szcfs,jgmds', '2015-08-22 19:54:16'),
(15, 'olaola', 'Olugbenga_Olakunle@yahoo.com', 'jhj', '2015-08-22 19:59:59'),
(16, 'ssass', 'SM@D.CXK', 'ss', '2015-08-22 20:29:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
