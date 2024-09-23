-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 03:05 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `21183681`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Customer_ID` int(11) NOT NULL,
  `Shoe_ID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Cart_ID` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Customer_ID`, `Shoe_ID`, `quantity`, `Cart_ID`, `Price`) VALUES
(31, 1, 1, 54, 180);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `Contact_id` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Phone_Numbers` int(11) NOT NULL,
  `Query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`Contact_id`, `Email`, `Phone_Numbers`, `Query`) VALUES
(1, 'manazamarad@gmail.com', 213, 'hi'),
(2, 'manazamarad@gmail.com', 213, 'hi'),
(3, 'manazamarad@gmail.com', 123123, 'hello\r\n'),
(4, 'efewef@efwef.com', 1231234, 'hi'),
(5, 'manazamarad@gmail.com', 123123, 'heyey'),
(6, 'manazamarad@gmail.com', 123123, 'heyey'),
(7, 'manazamarad@gmail.com', 123123, 'hellohello');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(11) NOT NULL,
  `Address1` text NOT NULL,
  `Address 2` text NOT NULL,
  `Forename` text NOT NULL,
  `Surname` text NOT NULL,
  `Email` text NOT NULL,
  `Username` text NOT NULL,
  `Pass` text NOT NULL,
  `Phonenumber` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `Address1`, `Address 2`, `Forename`, `Surname`, `Email`, `Username`, `Pass`, `Phonenumber`) VALUES
(31, '98 kings', '', 'Aman', 'Zamarad', 'manazamarad@gmail.com', '', '86a4ca93d25a17dd495f1e9ab45f5982', 987654),
(32, '30 staniforth street, The Heights', '', 'Aman', 'Zamarad', 'sdfds@sdfsd.com', '', '86a4ca93d25a17dd495f1e9ab45f5982', 2147480000);

-- --------------------------------------------------------

--
-- Table structure for table `shoe`
--

CREATE TABLE `shoe` (
  `Shoe_ID` int(5) NOT NULL,
  `Brand` text NOT NULL,
  `Gender` text NOT NULL,
  `Size` int(11) NOT NULL,
  `Colour` text NOT NULL,
  `Shoe Name` text NOT NULL,
  `Shoe img` text NOT NULL,
  `Price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoe`
--

INSERT INTO `shoe` (`Shoe_ID`, `Brand`, `Gender`, `Size`, `Colour`, `Shoe Name`, `Shoe img`, `Price`) VALUES
(1, 'Nike', 'Unisex', 8, 'Blue and black', 'Jordan 4 Blue Racers', 'Air-Jordan-4-Blue-Racer.JPG', 180),
(2, 'Nike', 'Unisex', 9, 'Red and Black', 'Jordan 4 Red Thunders', 'Air-Jordan-4-Retro-Red-Thunder.jpg', 190),
(3, 'Nike', 'Unisex', 7, 'Baby Blue', 'Jordan 1 University Blue', 'Air-Jordan-1-Retro-High-White-University-Blue-Black-Product.JPG', 520),
(4, 'Adidas', 'Unisex', 10, 'Black ', 'Adidas yeezy', 'Adidas yeezy.png', 275);

-- --------------------------------------------------------

--
-- Table structure for table `sportsshoe`
--

CREATE TABLE `sportsshoe` (
  `Shoe_ID` int(11) NOT NULL,
  `Brand` text NOT NULL,
  `size` int(11) NOT NULL,
  `Colour` text NOT NULL,
  `Shoe name` text NOT NULL,
  `Shoe img` text NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sportsshoe`
--

INSERT INTO `sportsshoe` (`Shoe_ID`, `Brand`, `size`, `Colour`, `Shoe name`, `Shoe img`, `Price`) VALUES
(1, 'Adidas', 8, 'Red', 'Adidas predator edge.3 mg', 'Adidas football cleats.png', 80),
(2, 'Nike', 7, 'Black and Red', 'Hard ground Football Boots agility', 'Hard ground Football Boots agility.png', 15),
(3, 'Nike', 10, 'Black', 'Mercurial Vapor Club FG Football Boots', 'Mercurial Vapor Club FG Football Boots.png', 89);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`Contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`Shoe_ID`);

--
-- Indexes for table `sportsshoe`
--
ALTER TABLE `sportsshoe`
  ADD PRIMARY KEY (`Shoe_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `Contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `shoe`
--
ALTER TABLE `shoe`
  MODIFY `Shoe_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sportsshoe`
--
ALTER TABLE `sportsshoe`
  MODIFY `Shoe_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
