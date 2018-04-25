-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2018 at 08:49 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `address_1` varchar(200) NOT NULL,
  `address_2` varchar(200) DEFAULT NULL,
  `suburb` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `company_name`, `first_name`, `last_name`, `address_1`, `address_2`, `suburb`, `state`, `zip`, `phone`, `email`) VALUES
(1, '1997', 'Raimonds', 'Korzenevskis', 'Testhome 333', '', 'Højbjerg', 'Midtjylland', '8270', '+4591966666', 'romka995@gmail.com'),
(2, 'Test Pumpony', 'kskskso', 'owkwodkowk', 'eofwpkfwkf', 'oefkoef', 'Højbjerg', 'Midtjylland', '8000', '93939393', 'romka995@gmail.com'),
(3, 'wewewe', 'Kurok', 'Burok', 'Ringvej Vej', '2A', 'Højbjerg', 'Midtjylland', '8270', '91942222', 'tovvovo@gmail.com'),
(4, '1997', 'Volodya', 'Mirnij', 'TestHome', '', 'Højbjerg', 'Midtjylland', '8270', '+030393939', 'nunu@unu.bl'),
(5, 'Grundfos', 'Friend', 'Big', 'Vejner Vej 3', '4A', 'Aarhus C', 'Midtjylland', '8000', '93939393', 'someone@hotmail.com'),
(6, 'Grundfos', 'Friend', 'Big', 'Vejner Vej 3', '4A', 'Aarhus C', 'Midtjylland', '8000', '93939393', 'someone@hotmail.com'),
(7, 'What is this', 'Please', 'Come', 'Kunde Vej 333', '838', 'Viby', 'Midtjylland', '8260', '88888222', 'lalala@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `timeofpurchase` datetime(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `customerid`, `productid`, `timeofpurchase`) VALUES
(1, 1, 2, '2018-04-25 22:25:32.0000'),
(2, 2, 4, '2018-04-25 22:25:47.0000'),
(3, 3, 2, '2018-04-25 22:26:39.0000'),
(4, 4, 3, '2018-04-25 22:27:58.0000'),
(5, 5, 1, '2018-04-25 22:28:57.0000'),
(6, 6, 4, '2018-04-25 22:29:09.0000'),
(7, 7, 1, '2018-04-25 22:29:56.0000');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `prod_name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `prod_name`, `description`, `price`) VALUES
(1, '2018 IKEA Winter Catalogue', 'All you need to know about newest trends and furnitures and what not in the newest catalogue. Stay on top of the game, order it now.', '19.99'),
(2, '2018 IKEA Summer Catalogue', 'All you need to know about newest trends and furnitures and what not in the newest catalogue. Stay on top of the game, order it now.', '19.99'),
(3, '2018 IKEA Spring Catalogue', 'All you need to know about newest trends and furnitures and what not in the newest catalogue. Stay on top of the game, order it now.', '19.99'),
(4, '2018 IKEA Autumn Catalogue', 'All you need to know about newest trends and furnitures and what not in the newest catalogue. Stay on top of the game, order it now.', '19.99'),
(5, '', '', '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerid` (`customerid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
