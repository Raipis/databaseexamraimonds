-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Vært: localhost
-- Genereringstid: 10. 09 2017 kl. 03:21:41
-- Serverversion: 10.1.25-MariaDB
-- PHP-version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creativeadv2017videodb`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `platforms`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `address_1` varchar(200) NOT NULL,
  `address_2` varchar(200) NULL,
  `suburb` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `customer`
--

INSERT INTO `customer` (`id`, `company_name` , `first_name`, `last_name`, `address_1`,`address_2`,`suburb`,`state`,`zip`,`phone`,`email`) VALUES
(1, 'Lazy Comp','Kare', 'Pedersen', 'Bytorvet 38', NULL, 'Hojbjerg','Midtjylland','8270',27495729,'business.person@one.com' ),
(2, NULL, 'Nina', 'Nielsen', 'Vester Alle 22', '1', 'Aarhus V','Midtjylland','8270',94552155,'neckerwin22@hotmail.com' ),
(3, NULL, 'Burak', 'Bjork', 'Silkeborgvej 55', '2A', 'Hojbjerg','Syddanmark','8270',19738456,'kurlandvej@one.com' ),
(4, 'Phone Company','Lars', 'Katersen', 'Abyvej 31', NULL, 'Hojbjerg','Syddanmark','8270',97452122,'mysteryperson@yahoo.com' ),
(5, NULL, 'Bo', 'Skjodt', 'Henrik Hertz Vej 92', '4', 'Hojbjerg','Nordjylland','8270',95547212,'whoami@website.com' ),
(6, NULL, 'Patrik', 'Patriksen', 'Ringvej Syd 28', '9A', 'Hojbjerg','Hovedstaen','8270',48275927,'destroyer1337@yandex.ru' ),
(7, NULL, 'Daniel', 'Jonikas', 'Edwin Rahrs Vej 24', NULL, 'Hojbjerg','Sjaelland','8270',58606843,'stretchmetwice@jaunkas.lt' ),
(8, 'Weirdo Industries', 'Viktor', 'Swiderski', 'Yderupvej 41', NULL, 'Hojbjerg','Midtjylland','8270',34972975,'idrauegn2111@one.com' );


-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `prod_name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `product`
--

INSERT INTO `product` (`id`, `prod_name`, `description`, `price`) VALUES
(1, '2018 IKEA Winter Catalogue', 'All you need to know about newest trends and furnitures and what not in the newest catalogue. Stay on top of the game, order it now.', 19.99),
(2, '2018 IKEA Summer Catalogue', 'All you need to know about newest trends and furnitures and what not in the newest catalogue. Stay on top of the game, order it now.', 19.99),
(3, '2018 IKEA Spring Catalogue', 'All you need to know about newest trends and furnitures and what not in the newest catalogue. Stay on top of the game, order it now.', 19.99),
(4, '2018 IKEA Autumn Catalogue', 'All you need to know about newest trends and furnitures and what not in the newest catalogue. Stay on top of the game, order it now.', 19.99);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `customer_product`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `customer_product`
--

INSERT INTO `customer_order` (`id`, `customerid`, `productid`, `quantity`) VALUES
(1, 1, 2, 20),
(2, 2, 1, 20),
(3, 3, 3, 20),
(4, 5, 2, 20),
(5, 4, 2, 20),
(6, 6, 1, 20),
(7, 6, 1, 20),
(8, 1, 4, 20);


--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `platforms`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `publishers`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `videogames`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerid` (`customerid`),
  ADD KEY `productid` (`productid`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `platforms`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tilføj AUTO_INCREMENT i tabel `publishers`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
  
--
-- Tilføj AUTO_INCREMENT i tabel `videogames`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
