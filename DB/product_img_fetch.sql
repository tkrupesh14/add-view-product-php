-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 10:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_img_fetch`
--

-- --------------------------------------------------------

--
-- Table structure for table `fetch_img`
--

CREATE TABLE `fetch_img` (
  `pid` int(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pprice` bigint(255) NOT NULL,
  `pdetails` varchar(255) NOT NULL,
  `pimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fetch_img`
--

INSERT INTO `fetch_img` (`pid`, `pname`, `pprice`, `pdetails`, `pimage`) VALUES
(9, 'green shirt', 500, 'here is product', 'products/Mens-Standard-Fit-Short-Sleeve-Crew-T-Shirt01-600x764.jpg'),
(10, 'white shirt', 900, 'white shirt', 'products/602782-0001_1-786x1000.jpeg'),
(11, 'colorful jacket', 2000, 'colorful jacket', 'products/1_1.jpg'),
(12, 'pink coat', 5000, 'pink coat', 'products/WDÂ·NY-Black-Mens-Palm-Burgundy-Jacket01-600x764.jpg'),
(13, 'blue tshirt', 400, 'blue tshirt', 'products/7.0.1.jpg'),
(14, 'black shirt', 700, 'black shirt', 'products/1.0.1.jpg'),
(15, 'yellow t-shirt', 600000000, 'colorful jacket', 'products/Mens-Standard-Fit-Heathered-Short-Sleeve-V-Neck-T-Shirt01-600x764.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fetch_img`
--
ALTER TABLE `fetch_img`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fetch_img`
--
ALTER TABLE `fetch_img`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
