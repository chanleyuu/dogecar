-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2021 at 08:29 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--
CREATE DATABASE IF NOT EXISTS `shoppingcart` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `shoppingcart`;

-- --------------------------------------------------------

--
-- Table structure for table `customer reviews`
--

DROP TABLE IF EXISTS `customer reviews`;
CREATE TABLE IF NOT EXISTS `customer reviews` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Review` varchar(200) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer reviews`
--

INSERT INTO `customer reviews` (`id`, `Name`, `Email`, `Review`, `Date`) VALUES
(22, 'Janis Joplin', 'jjoplin@gmail.com', 'Great car. Great MPG and smooth ride. 10/10', '2021-04-30 19:42:49'),
(4, 'John Dover', 'jdover@gmail.com', 'Perfect Little car for running around the town. Small nippy engine which provides enough power for zipping around town and motorways.', '2021-04-30 21:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `Customer id` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `Email` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `Date Ordered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Customer id`, `Email`, `Date Ordered`) VALUES
(4, '????', 'jdover@gmail.com', '2021-04-30 21:26:07'),
(20, '???', 'jjoplen@gmail.com', '2021-04-30 21:26:34');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Delorean DMC 12', '<p> 80s pop-culture icon made famous by thye 1985 movie triolgy Back to The Future</p>', '29999.00', '0.00', 3, 'delorean.jpg', '2021-03-13 17:55:02'),
(2, '2005 Volkswagon Golf Mk5', '<p> Engine: 1998cc,Turbocharged inline four</p> <p> Transmission: 6-speed Manual</p> <p>Front-wheel drive</p>  <p>Power 175 bhp<p/> <p> 0-60mph: 6.2 seconds </p>', '800.00', '1000.00', 34, 'golf.jpg', '2021-03-13 18:52:49'),
(3, '2009 Toyota Yaris', '<p> Engine: 1388cc, inline four</p> <p>Transmission: 6-speed Manual</p> Front-wheel drive</p> <p> Power 88 bhp.0-60mph: 10.2 seconds </p>', '1600.00', '0.00', 23, 'yaris.jpg', '2021-03-13 18:47:56'),
(4, '2013 Hyundai I-10', '<p> Engine: 1388cc, inline four </p> Transmission: 6-speed Manual</p> <p>Front-wheel drive</p> <p>Power 75 bhp.0-60mph: 14.2 seconds </p>', '1700.00', '0.00', 7, 'hyundai.jpg', '2021-03-13 17:42:04'),
(5, '1997 Peugeot 306 GTi-6', '<p> Engine: 1,998cc, inline four </p> <p>Transmission: 6-speed manual</p> <p>Front-wheel drive</p> <p> Power (hp): 167@6,500rpm</p> <p>Torque (lb ft): 142@5,500rpm. 0-62mph: 8.5secs </p>', '1800.00', '0.00', 2, '306.jpg', '2021-04-28 15:21:36'),
(6, '2009 Toyota Prius 1.8', '<p> Engine: 1,798cc, inline four  plus 153lb ft from electric motor</p> <p>Transmission: 6-speed automatic</p> </p>Front-wheel drive</p> Power 134bhp @ 5200rpm, 105lb ft @ 5400rpm</p> <p>0-60mph: 10.4secs </p>', '4000.00', '0.00', 4, 'prius.jpg', '2021-04-28 15:21:36'),
(7, '2005 Renault Clio 182 Cup 2.0 16v', ' <p> Engine: 1,988cc, inline four</p> <p>Transmission: 6-speed Manual</p> <p>Front-wheel drive</p> <p> Power 182bhp @ 5200rpm, 105lb ft @ 5400rpm</p> <p>0-60mph: 6.9secs </p>', '3600.00', '0.00', 2, 'clio.jpg', '2021-04-28 15:21:36'),
(8, '1998 Reliant Robin', '<p> Engine: 788cc, inline four</p> <p>Transmission: 4-speed Manual</p> <p>Front-wheel drive</p> <p>Power 38 bhp.0-60mph: Eventually </p>', '2800.00', '0.00', 4, 'reliant.jpg', '2021-04-28 15:21:36'),
(9, '2014 Smart Forwo', '<p> Engine: 900cc, inline four</p> <p>Transmission: 6-speed Automatic</p> <p>Front-wheel drive</p> <p>Power 88 bhp.0-60mph: 10.3 </p>', '8000.00', '0.00', 4, 'smart_car.jpg', '2021-04-28 15:21:36'),
(10, '2014 Ford Fiesta ST-2', '<p> Engine: 1998cc, Turbocharged inline four</p> <p>Transmission: 6-speed Manual</p> <p>Front-wheel drive</p> <p>Power 182 bhp.0-60mph: 7.2 seconds </p>', '7655.00', '0.00', 6, 'fiesta.jpg', '2021-04-28 15:21:36'),
(11, '2014 Focus St-3', '<p> Engine: 1998cc, Turbocharged inline four</p> <p>Transmission: 6-speed Manual</p> <p>Front-wheel drive</p> <p>Power 252 bhp.0-60mph: 6.2 seconds </p>', '16799.00', '0.00', 3, 'focus.jpg', '2021-04-28 15:21:36'),
(12, '2014 Seat Leon FR (DIESEL)', '<p> Engine: 1998cc, Turbocharged inline four</p> <p>Transmission: 6-speed Manual</p> <p>Front-wheel drive</p> <p>Power 175 bhp.0-60mph: 7.2 seconds </p>', '7455.00', '0.00', 2, 'leon.jpg', '2021-04-28 15:21:36'),
(13, '2016 Seat Ibiza', '<p> Engine: 1388cc, inline four</p> <p>Transmission: 6-speed Manual</p> <p>Front-wheel drive</p> <p>Power 75 bhp.0-60mph: 14.2 seconds </p>', '7602.00', '0.00', 4, 'ibiza.jpg', '2021-04-28 15:21:36'),
(14, '1994 Toyota Supra', '<p> Engine: 2988cc, Turbocharged inline six</p> <p>Transmission: 5-speed Manual</p> <p>Rear-wheel drive</p> <p>Power 320 bhp.0-60mph: 5.2 seconds </p>', '34000.00', '0.00', 3, 'supra.jpg', '2021-04-28 15:21:36'),
(15, '1983 Delorean DMC-12', '<p> Engine: 2488cc, V6</p> <p>Transmission: 5-speed Manual</p> <p>Rear-wheel drive</p> <p>Power 145 bhp.0-60mph: 10.5 seconds </p>', '28999.00', '30000.00', 2, 'delorean.jpg', '2021-04-28 15:21:36'),
(16, '1987 Toyota Corolla Levin AE86', '<p> Engine: 1588cc, inline four</p> <p>Transmission: 6-speed Manual</p> <p>Rear -wheel drive</p> <p>Power 112 bhp.0-60mph: 8.6 seconds </p>', '24000.00', '0.00', 3, 'ae86.jpg', '2021-04-28 15:21:36'),
(17, '1989 Lada Riva', '<p> Engine: 1298cc,  inline four </p> <p>Transmission: 5-speed Manual</p> <p>Rear-wheel drive</p> <p>Power 175 bhp.0-60mph: 16.2 seconds </p>', '5789.00', '0.00', 4, 'lada.jpg', '2021-04-28 15:21:36'),
(18, '1985 Peugeot 205 GTI', '<p> Engine: 1898cc, inline four</p> <p>Transmission: 5-speed Manual</p> <p>Front-wheel drive</p> <p>Power 135 bhp.0-60mph: 7.6 seconds </p>', '13499.00', '0.00', 2, '205.jpg', '2021-04-28 15:21:36'),
(19, '2015 Subaru BRZ', '<p> Engine: 1998cc, inline four</p> <p>Transmission: 6-speed Manual</p> <p>Rear-wheel drive</p> <p>Power 200 bhp.0-60mph: 6.3 seconds </p>', '34000.00', '0.00', 3, 'brz.jpg', '2021-04-28 15:34:18'),
(20, '1964 Trabant 601', '<p> Engine: 500cc, Two Stroke</p> <p>Transmission: 4-speed Manual</p> <p>front-wheel drive</p> <p>Power 35 bhp.0-60mph: 21 seconds </p>', '200.00', '0.00', 8, 'trabant.jpg', '2021-04-28 15:34:18'),
(21, '1965 Pontiac GTO', '<p>400 cu in (6.6 L) Pontiac V8</p> <p>Transmission: 4-speed Manual</p> <p>rear-wheel drive</p> <p>Power 360 bhp.0-60mph: 7 seconds </p>', '200.00', '0.00', 8, 'gto.webp', '2021-04-28 15:34:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
