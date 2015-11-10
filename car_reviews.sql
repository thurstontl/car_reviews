-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2015 at 03:00 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car_reviews`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `review` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `make`, `model`, `year`, `review`) VALUES
(9, 'Toyota', 'Camry', 1998, 'It''s white and has an automatic transmission.'),
(2, 'Porsche', '911 Turbo', 2001, 'AWD plus 400hp makes for a fun time in the snow.'),
(3, 'Saab', '9-3', 1977, 'Dude...this thing smells like how awesomeness would smell if it has a scent.'),
(5, 'Mercedes', '260E', 1987, 'Tan on Tan, bro. Fake leather. Intermittent power steering. Gold.'),
(6, 'BWM', '2002', 1976, 'It''s orange, has 15" wheels and you can''t kill it. Ever.'),
(8, 'Toyota', 'Supra', 1998, 'Ennui twee authentic, fap kitsch bitters PBR street art. PBR Godard Bushwick drinking vinegar lomo Vice skateboard letterpress small batch lumbersexual. Bicycle rights lomo church-key, Wes Anderson Carles keffiyeh cray vegan raw denim. Occupy next level raw denim, sustainable Thundercats lo-fi bitters put a bird on it kitsch Bushwick 3 wolf moon bespoke tilde PBR&B banjo. Pitchfork iPhone cray +1 wolf drinking vinegar, direct trade kitsch meditation American Apparel XOXO post-ironic Helvetica gastropub bicycle rights. Lumbersexual polaroid beard Carles sriracha food truck, Tumblr Intelligentsia Odd Future ugh readymade blog bicycle rights. Put a bird on it church-key slow-carb, chia migas crucifix health goth viral master cleanse meggings cardigan Odd Future ethical scenester.\r\n');
