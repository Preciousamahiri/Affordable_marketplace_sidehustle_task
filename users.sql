-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 10:20 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_list_price` decimal(10,0) NOT NULL,
  `p_price` decimal(10,0) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `p_list_price`, `p_price`, `p_image`, `featured`, `date`) VALUES
(2, 'Dress', '20', '15', '/ecommercephp/images/dress.jpeg', 1, '2021-07-21 08:59:44'),
(6, 'Bag', '10', '8', '/ecommercephp/images/bag.png', 1, '2021-07-21 09:07:06'),
(7, 'Bag', '10', '8', '/ecommercephp/images/bag.png', 2, '2021-07-21 09:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_name`, `email`, `password`, `date`) VALUES
(1, '', '', '', '', '2021-07-19 16:17:34'),
(2, 'precious amahiri', 'precious', 'precious@gmail.com', 'pass', '2021-07-19 16:36:20'),
(3, 'joy amahiri', 'joy', 'joy@gmail.com', '12345', '2021-07-19 16:39:22'),
(4, 'paul amahiri', 'paul', 'paul@gmail.com', 'winner', '2021-07-19 16:45:39'),
(7, 'precious', 'precious amahiri', 'precious@gmail.com', 'pass', '2021-07-19 16:40:28'),
(8, 'joy', 'joy amahiri', 'joy@gmail.com', '12345', '2021-07-19 16:46:54'),
(9, 'jude amahiri', 'precious', 'precious@gmail.com', 'pass', '2021-07-19 16:35:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
