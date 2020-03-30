-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 08:24 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqlinjection`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `phone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `f_name`, `l_name`, `phone`) VALUES
('bjohnso', '@lsoL84class', 'John', 'So', '303-421-7932'),
('cheotheGeo', 'seCr3t', 'Omar', 'Kermiche', '949-363-3928'),
('jaySmoove', 'MWm@psRtr@sh', 'Justin', 'Reid', '1-562-305-6385'),
('melon', 'l@te4Class', 'Alex', 'Ramirez', '949-332-5900'),
('skeggox', 'eYeLuvEE381', 'Christine', 'Duong', '949-800-1915');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `l_name` (`l_name`),
  ADD UNIQUE KEY `phone` (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Table structure for table `creditcards`
--

CREATE TABLE `creditcards` (
  `nameOnCard` varchar(15) NOT NULL,
  `cardNumber` varchar(30) NOT NULL,
  `securityCode` varchar(30) NOT NULL,
  `expMonth` varchar(30) NOT NULL,
  `expYear` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creditcards`
--

INSERT INTO `creditcards` (`nameOnCard`, `cardNumber`, `securityCode`, `expMonth`, `expYear`) VALUES
('John So', '9060 7844 3900 3920', '094', '11', '2020'),
('Omar Kermiche', '8944 8499 1033 9068', '110', '12', '2022'),
('Justin Reid', '8099 3499 7644 2939', '098', '04', '2020'),
('Alexander Ramirez', '7844 6730 1900 8539', '469', '06', '2023'),
('Christine Duong', '5630 5420 8921 3245', '458', '09', '2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creditcards`
--
ALTER TABLE `creditcards`
  ADD UNIQUE KEY `nameOnCard` (`username`),
  ADD UNIQUE KEY `cardNumber` (`password`),
  ADD UNIQUE KEY `securityCode` (`l_name`);
COMMIT;
