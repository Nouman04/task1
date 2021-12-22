-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 09:29 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`) VALUES
(1, 'Tan Bucket Bag', 'This tan bucket bag features high quality PU material, constructed with front metal closure. It has a long strap making it easy to carry. This versatile piece can be paired with both eastern and western outfits.', '30', 'download1.jpg'),
(2, 'Black Bucket Bag', 'This trendy bucket bag features a unique silhouette in black hue and is optimal to carry your daily essentials. This versatile piece can be paired with both eastern and western outfits.', '40', 'download2.jpg'),
(3, 'Blue Crossbody Bag', 'This blue cross body features a unique structured shape, closed with zip and magnetic closure. The long strap makes it easy to carry and can be paired with both eastern and western outfits.', '75', 'download3.jpg'),
(4, 'Black Crossbody Bag', 'This black cross body features a unique structured shape, closed with zip and magnetic closure. The long strap makes it easy to carry and can be paired with both eastern and western outfits.', '45', 'download4.jpg'),
(5, 'Brown Crossbody Bag', 'This trendy brown cross body bag features a front flap with metal buckle at the top. This versatile piece can be paired with both eastern and western outfits.', '88', 'download5.jpg'),
(6, 'Tan Top Handle Bag', 'This trendy tan top handle bag features gathers technique on handles that enhance its design. This stylish piece can be paired with both eastern and western outfits.', '120', 'download6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `stripe_id` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id_fk` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
