-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 04:42 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
