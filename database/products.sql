-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 08:49 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `cake`
--

CREATE TABLE `cake` (
  `product_id` int(255) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_img` varchar(1000) NOT NULL,
  `Category` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`product_id`, `product_name`, `product_price`, `product_img`, `Category`) VALUES
(1, 'Birthday Cake', 40, 'housecake1.jpg', 'housecake'),
(2, 'Strawberry Cake', 40, 'housecake2.jpg', 'housecake'),
(3, 'Salted Caramel Cake', 40, 'housecake3.jpg', 'housecake'),
(4, 'Chocolate Cake', 40, 'housecake4.jpg', 'housecake'),
(5, 'Red Velvet Cake', 40, 'housecake5.jpg', 'housecake'),
(6, 'Lemon Passionfruit Cake', 40, 'housecake6.jpeg', 'housecake'),
(7, 'Carrot Cake', 40, 'housecake7.jpeg', 'housecake'),
(8, 'Noe-O Cookie Cake', 40, 'housecake8.jpg', 'housecake'),
(9, 'Tres Leches Cake', 40, 'housecake9.jpeg', 'housecake'),
(10, 'Vanilla Cupcake', 4, 'cupcake1.jpg', 'cupcake'),
(11, 'Carrot Cupcake', 4, 'cupcake2.jpg', 'cupcake'),
(12, 'Chocolate Caramel Cupcake', 4, 'cupcake3.jpg', 'cupcake\r\n'),
(13, 'Fudge Cupcake', 4, 'cupcake4.jpg', 'cupcake'),
(14, 'Lemon Drop Cupcake', 4, 'cupcake5.jpg', 'cupcake'),
(15, 'Red Velvet Cupcake', 4, 'cupcake6.jpg', 'cupcake'),
(16, 'Most-est Cupcake', 4, 'cupcake7.jpg', 'cupcake'),
(17, 'Dipp\'d Mini Cupcake', 2, 'minicupcake1.jpg', 'minicupcake'),
(18, 'Lemon Drop Mini Cupcake', 2, 'minicupcake2.jpg', 'minicupcake'),
(19, 'Most-est Mini Cupcake', 2, 'minicupcake3.jpg', 'minicupcake'),
(20, 'Red Velvel Mini Cupcake', 2, 'minicupcake4.jpg', 'minicupcake'),
(21, 'Vanilla Mini Cupcake', 2, 'minicupcake5.jpg', 'minicupcake'),
(22, 'Pumpkin Pie', 20, 'thanksgiving1.jpeg', 'thanksgiving'),
(23, 'Pumpkin Cheesecake', 6, 'thanksgiving2.jpeg', 'thanksgiving'),
(24, 'Pecan Pie', 20, 'thanksgiving3.jpeg', 'thanksgiving'),
(25, 'Pecan Tartlet', 5, 'thanksgiving4.jpeg', 'thanksgiving'),
(26, 'Mixed Berry Pie', 20, 'thanksgiving5.jpeg', 'thanksgiving'),
(27, 'Apple Pie', 20, 'thanksgiving6.jpeg', 'thanksgiving'),
(28, 'Dutch Apple Pie', 20, 'thanksgiving7.jpeg', 'thanksgiving');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Username`, `Password`, `email`) VALUES
(7, 'james', 'abc123', 'james@mail.com'),
(8, 'haha', '12345', 'haha@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cake`
--
ALTER TABLE `cake`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cake`
--
ALTER TABLE `cake`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
