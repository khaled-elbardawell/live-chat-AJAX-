-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 07:20 PM
-- Server version: 10.1.36-MariaDB
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
-- Database: `phppro`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `id_first` int(11) NOT NULL,
  `id_second` int(11) NOT NULL,
  `msg` text NOT NULL,
  `time_msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `id_first`, `id_second`, `msg`, `time_msg`) VALUES
(110, 4, 1, 'hello', '06:12'),
(111, 1, 4, 'hello', '06:13'),
(112, 1, 2, 'hello', '06:18'),
(113, 4, 1, 'ohhh', '06:19'),
(114, 4, 1, 'Ù…Ø³Ø§ Ø§Ù„Ø®ÙŠØ±Ø·\n', '08:55'),
(115, 1, 4, 'ÙƒÙŠÙ Ø§Ù„Ø­Ø§Ù„', '08:55'),
(116, 4, 1, 'hello', '09:14'),
(117, 1, 4, 'jkkk', '09:17'),
(118, 1, 4, 'kkkkk', '09:18'),
(119, 4, 1, 'Ù‡Ù„Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§Ø§', '09:19'),
(120, 1, 4, 'Ù‡Ù„Ø§Ø§Ø§Ø§Ø§ØºØ§Ù‡Ø¹Øº\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n', '09:20'),
(121, 4, 1, 'Ø¤ÙŠØ¤ÙŠ', '10:49'),
(122, 4, 1, 'Ù‡Ù„Ø§Ø§Ø§Ø§Ø§', '12:29'),
(123, 1, 4, 'kkk', '06:34'),
(124, 1, 4, 'k', '06:35'),
(125, 4, 1, 'kjk', '06:36'),
(126, 4, 1, 'kjk', '06:37'),
(127, 1, 4, 'cffg', '06:37'),
(128, 1, 4, 'kkkk', '12:18'),
(129, 1, 4, 'hhhh', '12:44'),
(130, 4, 1, 'kkkk', '12:44'),
(131, 1, 4, 'ggggg', '12:44'),
(132, 1, 4, 'ff', '09:22'),
(133, 1, 4, 'hello', '03:13'),
(134, 4, 1, 'ÙƒÙŠÙÙƒ', '03:13'),
(135, 1, 4, 'Ø§Ù„Ø­Ù…Ø¯ Ø§Ù„Ù„Ù‡ ', '03:14'),
(136, 4, 1, 'ÙƒÙŠÙ Ø§Ù„Ø§Ø­ÙˆØ§Ù„', '03:14'),
(137, 1, 2, 'nnn', '03:16'),
(138, 4, 1, 'ccc', '07:12'),
(139, 1, 4, 'ddd', '07:12'),
(140, 1, 2, 'bb', '07:16'),
(141, 4, 1, 'bbbmm', '07:17'),
(142, 1, 4, 'mm', '07:17');

-- --------------------------------------------------------

--
-- Table structure for table `rel`
--

CREATE TABLE `rel` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friends_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rel`
--

INSERT INTO `rel` (`id`, `user_id`, `friends_id`) VALUES
(42, 4, 1),
(43, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `state`) VALUES
(1, 'khaled', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'connected'),
(4, 'jihad', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'connected');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rel`
--
ALTER TABLE `rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `rel`
--
ALTER TABLE `rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
