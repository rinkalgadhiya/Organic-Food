-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 12:57 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(20) NOT NULL,
  `unm` varchar(50) NOT NULL,
  `img` varchar(500) NOT NULL,
  `pnm` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `qt` int(60) NOT NULL,
  `amt` int(60) NOT NULL,
  `stat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `unm`, `img`, `pnm`, `price`, `qt`, `amt`, `stat`) VALUES
(1, '', 'apple.jpg', 'apple', 20, 2, 40, 'pending'),
(3, 'rinkal', 'carrot.png', 'Carrot', 20, 2, 0, 'confirm'),
(7, 'parv', 'carrot.png', 'Carrot', 20, 3, 0, 'confirm'),
(8, 'parv', 'capccum.png', 'Capcucum', 12, 2, 24, 'confirm'),
(9, 'parv', 'apple.png', 'Apple', 10, 5, 0, 'pending'),
(10, 'parv', 'apple.png', 'Apple', 10, 5, 0, 'pending'),
(13, 'hardeep', 'apple.png', 'Apple', 10, 0, 0, 'pending'),
(14, 'hardeep', 'capccum.png', 'Capcucum', 12, 0, 0, 'pending'),
(16, 'hardeep', 'leaf lettuce.png', 'leaf lettuce', 20, 0, 0, 'pending'),
(19, 'rinkal', 'capccum.png', 'Capcucum', 12, 0, 0, 'confirm'),
(20, 'rinkal', 'apple.png', 'Apple', 10, 0, 0, 'confirm');

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
(4, 'parv', '8562469872', 'yes', 'askkjdcsjduhefygegfbhenbfchdsb'),
(5, 'geeta', '7984763487', 'no', 'sdfjuefhgefhfnjsdhfjsfhdfhhybv');

-- --------------------------------------------------------

--
-- Table structure for table `ord`
--

CREATE TABLE `ord` (
  `id` int(50) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cno` varchar(12) NOT NULL,
  `lnm` varchar(200) NOT NULL,
  `prod` varchar(200) NOT NULL,
  `quan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ord`
--

INSERT INTO `ord` (`id`, `fname`, `email`, `cno`, `lnm`, `prod`, `quan`) VALUES
(1, 'hardeep', 'hardeepchavda2206@gmail.com', '7984763487', 'zanzarda Road', 'Banana', '4'),
(2, 'rinkal', 'gadhiyarinkal66@gmail.com', '7985264523', 'Alkapuri', 'Banana', '1'),
(3, 'parv', 'hardeepchavda2206@gmail.com', '7984763487', 'sdzanzrda road', 'Apple', '2');

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
(4, 'capccum.png', 'Capcucum', 12, 2),
(6, 'leaf lettuce.png', 'leaf lettuce', 20, 1);

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
(1, 'rinkal', 'Size of the Company', 'Per Food', 'Find cheap pesticides', 'Increase', 'Organic and non-organic food', 'Ingredients', 'Fresh', 'Organic Produce', 'Customers', 'Worse', 'False', 'True', 'U.S. Environmental Protection Agency(EPA)', '100', 'If a product is labeled organic, it means that zero pesticides were used to produce that product.');

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ord`
--
ALTER TABLE `ord`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ord`
--
ALTER TABLE `ord`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
