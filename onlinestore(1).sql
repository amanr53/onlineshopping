-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2016 at 01:55 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `abby-cart`
--

CREATE TABLE IF NOT EXISTS `abby-cart` (
  `id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abby-cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `abby-orders`
--

CREATE TABLE IF NOT EXISTS `abby-orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(10000) NOT NULL,
  `price` varchar(10000) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `abby-orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `abhishek1-orders`
--

CREATE TABLE IF NOT EXISTS `abhishek1-orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(10000) NOT NULL,
  `price` varchar(10000) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `abhishek1-orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `ankit1-cart`
--

CREATE TABLE IF NOT EXISTS `ankit1-cart` (
  `id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ankit1-cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `ankit1-orders`
--

CREATE TABLE IF NOT EXISTS `ankit1-orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(10000) NOT NULL,
  `price` varchar(10000) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `ordertime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ankit1-orders`
--

INSERT INTO `ankit1-orders` (`order_id`, `products`, `price`, `totalPrice`, `ordertime`) VALUES
(1, ',Casual Shirts', ',1500', 1500, '2016-04-29 08:27:07'),
(2, ',Casual Shirts 6', ',1100', 1100, '2016-04-29 08:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `ankitbhowmick-cart`
--

CREATE TABLE IF NOT EXISTS `ankitbhowmick-cart` (
  `id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ankitbhowmick-cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `ankitbhowmick-orders`
--

CREATE TABLE IF NOT EXISTS `ankitbhowmick-orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(10000) NOT NULL,
  `price` varchar(10000) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `ordertime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `ankitbhowmick-orders`
--

INSERT INTO `ankitbhowmick-orders` (`order_id`, `products`, `price`, `totalPrice`, `ordertime`) VALUES
(5, ',Apple iPhone 6S,sets,Casual Shirts,Apple iPhone 6S,Nexus6P', ',61999,545,1500,61999,39999', 166042, '0000-00-00 00:00:00'),
(7, ',Casual Shirts,Casual Shirts 3', ',1200,1500', 2700, '0000-00-00 00:00:00'),
(8, ',Apple iPhone 6S', ',61999', 61999, '2016-04-28 22:55:42'),
(9, ',Casual Shirts 5', ',1800', 1800, '2016-04-28 23:34:06'),
(10, ',,Apple iPhone 6S,Casual Shirts 6', ',,61999,1100', 63099, '2016-04-29 02:16:39'),
(11, ',Casual Shirts 6', ',1100', 1100, '2016-04-29 07:44:17'),
(12, ',Casual Shirts 6,Casual Shirts 6', ',1100,1100', 2200, '2016-04-29 08:23:23'),
(13, ',Casual Shirts,Casual Shirts', ',1200,1500', 2700, '2016-04-29 10:00:44'),
(14, ',Casual Shirts,Casual Shirts 3,Casual Shirts 4,Apple iPhone 6S', ',1500,1500,1700,61999', 66699, '2016-05-01 21:42:03'),
(15, ',Casual Shirts 4,Casual Shirts 4,Casual Shirts 3', ',1700,1700,1500', 4900, '2016-05-01 22:28:13'),
(16, ',Apple iPhone 6S,Casual Shirts,Casual Shirts', ',61999,1500,1200', 64699, '2016-05-06 12:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `anky1-cart`
--

CREATE TABLE IF NOT EXISTS `anky1-cart` (
  `id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anky1-cart`
--

INSERT INTO `anky1-cart` (`id`) VALUES
(14);

-- --------------------------------------------------------

--
-- Table structure for table `anky1-orders`
--

CREATE TABLE IF NOT EXISTS `anky1-orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(10000) NOT NULL,
  `price` varchar(10000) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `ordertime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `anky1-orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Footwear'),
(4, 'Mobiles');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `phone`, `email`, `message`) VALUES
('Ankit Bhow', 2147483647, 'ankitbhowmick@hotmail.com', 'Nice Product Keep It Up!!'),
('Ankit Bhowmick', 2147483647, 'ankitbhowmick@hotmail.com', 'Product is good'),
('Ankit Bhowmick', 1234567890, 'ankitbhowmick@hotmail.com', 'Nice 12144'),
('Mohsin', 2147483647, 'mohsin@gmail.com', 'dajkdkjasd');

-- --------------------------------------------------------

--
-- Table structure for table `harshcse-cart`
--

CREATE TABLE IF NOT EXISTS `harshcse-cart` (
  `id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harshcse-cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `harshcse-orders`
--

CREATE TABLE IF NOT EXISTS `harshcse-orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(10000) NOT NULL,
  `price` varchar(10000) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `harshcse-orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `mohsin-cart`
--

CREATE TABLE IF NOT EXISTS `mohsin-cart` (
  `id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mohsin-cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `mohsin-orders`
--

CREATE TABLE IF NOT EXISTS `mohsin-orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(10000) NOT NULL,
  `price` varchar(10000) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `mohsin-orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `description`, `price`, `image`, `quantity`) VALUES
(6, 4, 'Apple iPhone 6S', '', 61999, 'iphone6.jpg', 0),
(8, 4, 'Nexus6P', '', 39999, 'nexus6P.jpg', 2),
(9, 1, 'Casual Shirts', '', 1500, 'cs1.jpg', 1),
(10, 1, 'Casual Shirts', '', 1200, 'cs2.jpg', 1),
(13, 1, 'Casual Shirts 3', '', 1500, 'cs3.jpg', 0),
(14, 1, 'Casual Shirts 4', '', 1700, 'cs4.jpg', 0),
(15, 1, 'Casual Shirts 5', '', 1800, 'cs5.jpg', 2),
(16, 1, 'Casual Shirts 6', '', 1100, 'cs6.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time1` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `username`, `password`, `email`, `phone`) VALUES
(1, 'Ankit Bhowmick', 'ankitbhowmick', 'ankit123', 'ankitbhowmick@hotmail.com', '8754473133'),
(2, 'Mohsin Akhtar', 'mohsin', 'mohsin123', 'mohsin@gmail.com', '9874561230'),
(8, 'abhishek', 'abby', 'anny', 'abby@gmail1.com', '12'),
(9, 'anky1', 'anky1', 'asd', 'ankitbhowmick1@hotmail.com', '7894561230'),
(10, 'ankit1', 'ankit1', 'ankit1', 'ankit1@gmail.com', '1234567890');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
