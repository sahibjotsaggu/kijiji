-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2015 at 08:34 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kijiji`
--

-- --------------------------------------------------------

--
-- Table structure for table `books_posts`
--

CREATE TABLE IF NOT EXISTS `books_posts` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_desc` varchar(700) NOT NULL,
  `post_price` float NOT NULL,
  `uni` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `books_posts`
--

INSERT INTO `books_posts` (`id`, `email`, `image`, `post_title`, `post_desc`, `post_price`, `uni`) VALUES
(26, '', 'class_sweater_design.png', 'Better book!', 'ya, so this post is better than the other one', 50, '54d04ad646d85'),
(27, '', '06ca6d14b30e352a34638355330fe392.png', 'My name is', 'dashdkjl', 50, '54d054f48ca08'),
(28, 'sahibjot@live.ca', '10805170_10152827168608485_1628727715_n.jpg', 'Molecular Models', 'Best ones out there', 30, '54d078c44e912');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'sahibjot@live.ca', 'enter'),
(2, 'singh.sahibjot96@gmail.com', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE IF NOT EXISTS `user_posts` (
  `from_user` varchar(20) NOT NULL,
  `to_user` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`from_user`, `to_user`, `message`, `date_time`, `id`) VALUES
('singh.sahibjot96@gma', '', '', '2015-02-03 06:56:07', 1),
('singh.sahibjot96@gma', '', '', '2015-02-03 07:02:50', 2),
('sahibjot@live.ca', '', '', '2015-02-03 07:22:18', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
