-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 04:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keikaku`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `mal_id` varchar(255) NOT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `priority` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `upvotes` int(255) DEFAULT 1,
  `downvotes` int(255) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Generates table comments, prioritizing the initial poster.';

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `code`, `mal_id`, `comment`, `priority`, `name`, `avatar`, `upvotes`, `downvotes`) VALUES
(47, 'diligentstrictmanatee', '31043', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui', 1, 'Not a Spider', 'images/avatars/spider.png', NULL, 0),
(48, 'diligentstrictmanatee', '30831', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui', 1, 'Not a Spider', 'images/avatars/spider.png', NULL, 0),
(49, 'diligentstrictmanatee', '5114', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui', 1, 'Not a Spider', 'images/avatars/spider.png', NULL, 0),
(50, 'diligentstrictmanatee', '11843', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui', 1, 'Not a Spider', 'images/avatars/spider.png', NULL, 0),
(51, 'diligentstrictmanatee', '39587', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui', 1, 'Not a Spider', 'images/avatars/spider.png', NULL, 0),
(52, 'diligentstrictmanatee', '25777', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui', 1, 'Not a Spider', 'images/avatars/spider.png', NULL, 0),
(54, 'diligentstrictmanatee ', '30831', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui', 3, 'Cactusi', 'images/avatars/cactus.png', NULL, 0),
(55, 'diligentstrictmanatee', '5114', 'Short Comment', 3, 'I\'m Prof', 'images\\avatars\\sloth.png', NULL, 0),
(56, 'diligentstrictmanatee ', '31043', 'qqqqqqqqqq', 3, 'Boyo', 'images/avatars/boy.png', NULL, 0),
(57, 'diligentstrictmanatee ', '5114', '8888', 3, 'emporium', 'images/avatars/bear.png', NULL, 0),
(58, 'diligentstrictmanatee ', '30831', '333', 3, 'augustflorese', 'images/avatars/boy.png', NULL, 0),
(59, 'diligentstrictmanatee ', '30831', 'gg', 3, 'Boyo', 'http://graph.facebook.com/3734936129857668/picture/?type=large', NULL, 0),
(60, 'diligentstrictmanatee ', '5114', 'It\'s amazing.', 3, '', 'http://graph.facebook.com/3734936129857668/picture/?type=large', 1, 0),
(61, 'diligentstrictmanatee ', '5114', 'asdasdas', 3, '', 'http://graph.facebook.com/3734936129857668/picture/?type=large', 1, 0),
(62, 'diligentstrictmanatee', '5114', 'bbody', 3, 'Any', 'images/avatars/girl.png', 1, 0),
(63, 'diligentstrictmanatee ', '', 'asdssssss', 3, '', 'http://graph.facebook.com/3734936129857668/picture/?type=large', 1, 0),
(64, 'diligentstrictmanatee ', '5114', '99998888', 3, '', '', 1, 0),
(65, 'diligentstrictmanatee ', '5114', '44444', 3, '', '', 1, 0),
(66, 'diligentstrictmanatee ', '', '8888888888888888', 3, 'August Bryan', 'http://graph.facebook.com/3734936129857668/picture/?type=large', 1, 0),
(67, 'diligentstrictmanatee ', '', '8888888888888888', 3, 'August Bryan', 'http://graph.facebook.com/3734936129857668/picture/?type=large', 1, 0),
(68, 'diligentstrictmanatee ', '5114', '77777777777777777777777', 3, 'August Bryan', 'http://graph.facebook.com/3734936129857668/picture/?type=large', 1, 0),
(69, 'diligentstrictmanatee ', '5114', '7777777777', 3, 'August Bryan', 'http://graph.facebook.com/3734936129857668/picture/?type=large', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(255) NOT NULL,
  `code` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL,
  `mal_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `code`, `title`, `description`, `name`, `avatar`, `mal_id`) VALUES
(34, 'diligentstrictmanatee', 'Not a Spider\'s List', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui', 'Not a Spider', 'images/avatars/spider.png', '31043,30831,5114,11843,39587,25777');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `fb_id` varchar(500) NOT NULL,
  `code` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `link` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `hometown` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `code` varchar(500) NOT NULL,
  `visits` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `code`, `visits`) VALUES
(6, 'diligentstrictmanatee ', 224);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
