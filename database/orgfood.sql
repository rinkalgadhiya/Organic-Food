-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 08:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orgfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(15) NOT NULL,
  `unm` varchar(50) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `ans` varchar(20) NOT NULL,
  `desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `unm`, `cno`, `ans`, `desc`) VALUES
(1, 'rinkal', '7984763487', 'on', 'sdnfjhcdjchdcgdysryrbfhdusihdf'),
(4, 'parv', '8562469872', 'yes', 'askkjdcsjduhefygegfbhenbfchdsb');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(15) NOT NULL,
  `img` varchar(500) NOT NULL,
  `pnm` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `qty` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `img`, `pnm`, `price`, `qty`) VALUES
(1, 'apple.png', 'Apple', 10, 3),
(3, 'carrot.png', 'Carrot', 20, 5),
(4, 'capccum.png', 'Capcucum', 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` int(15) NOT NULL,
  `unm` varchar(50) NOT NULL,
  `a1` varchar(200) NOT NULL,
  `a2` varchar(200) NOT NULL,
  `a3` varchar(200) NOT NULL,
  `a4` varchar(200) NOT NULL,
  `a5` varchar(200) NOT NULL,
  `a6` varchar(200) NOT NULL,
  `a7` varchar(200) NOT NULL,
  `a8` varchar(200) NOT NULL,
  `a9` varchar(200) NOT NULL,
  `a10` varchar(200) NOT NULL,
  `a11` varchar(200) NOT NULL,
  `a12` varchar(200) NOT NULL,
  `a13` varchar(200) NOT NULL,
  `a14` varchar(200) NOT NULL,
  `a15` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `unm`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`) VALUES
(1, 'rinkal', 'Size of the Company', 'Per Food', 'Find cheap pesticides', 'Increase', 'Organic and non-organic food', 'Ingredients', 'Fresh', 'Organic Produce', 'Customers', 'Worse', 'False', 'True', 'U.S. Environmental Protection Agency(EPA)', '100', 'If a product is labeled organic, it means that zero pesticides were used to produce that product.'),
(2, '', 'Size of the Company', 'Per Food', '', 'Develop', 'Organic food only', 'Ingredients', 'Fresh', 'Nutritious Ingredients', 'Customers', 'Worse', 'True', 'True', 'U.S. Environmental Protection Agency(EPA)', '50', 'Organic produce is grown with the use of pesticides');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) NOT NULL,
  `unm` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `cno` varchar(12) NOT NULL,
  `utype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `unm`, `pass`, `email`, `cno`, `utype`) VALUES
(1, 'rinkal', 'rinkal', 'gadhiyarinkal66@gmai', '7984763487', 'user'),
(3, 'parv', 'parv', 'parv@gmail.com', '7856325698', 'user'),
(4, 'hardeep', 'h123', 'hardeep1@gmail.com', '7986523658', 'user'),
(6, 'admin', 'admin', 'admin@gmail.com', '5478963256', 'admin'),
(9, 'abhay', 'abhay', 'abhayfataniya@gmail.', '9054740460', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
