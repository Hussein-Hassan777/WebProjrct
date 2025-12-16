-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 16, 2025 at 06:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id_P` int(30) NOT NULL,
  `image_1` varchar(200) NOT NULL,
  `image_2` varchar(200) NOT NULL,
  `image_3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_P`, `image_1`, `image_2`, `image_3`) VALUES
(1, 'images/cards/card1/img1.avif', 'images/cards/card1/img2.avif', 'images/cards/card1/img3.avif'),
(2, 'images/cards/card2/img1.avif', 'images/cards/card2/img2.avif', 'images/cards/card2/img3.avif'),
(3, 'images/cards/card3/img1.avif', 'images/cards/card3/img2.avif', 'images/cards/card3/img3.avif'),
(4, 'images/cards/card4/img1.avif', 'images/cards/card4/img2.avif', 'images/cards/card4/img3.avif'),
(5, 'images/cards/card5/img1.avif', 'images/cards/card5/img2.avif', 'images/cards/card5/img3.avif'),
(6, 'images/cards/card6/img1.avif', 'images/cards/card6/img2.avif', 'images/cards/card6/img3.avif'),
(7, 'images/cards/card7/img1.avif', 'images/cards/card7/img2.avif', 'images/cards/card7/img3.avif'),
(8, 'images/cards/card8/img1.avif', 'images/cards/card8/img2.avif', 'images/cards/card8/img3.avif'),
(9, 'images/cards/card9/img1.avif', 'images/cards/card9/img2.avif', 'images/cards/card9/img3.avif'),
(10, 'images/cards/card10/img1.avif', 'images/cards/card10/img2.avif', 'images/cards/card10/img3.avif'),
(12, 'images/cards/card12/img1.avif', 'images/cards/card12/img2.avif', 'images/cards/card12/img3.avif'),
(11, 'images/cards/card11/img1.avif', 'images/cards/card11/img2.avif', 'images/cards/card11/img3.avif'),
(13, 'images/cards/card13/img1.avif', 'images/cards/card13/img2.avif', 'images/cards/card13/img3.avif'),
(14, 'images/cards/card14/img1.avif', 'images/cards/card14/img2.avif', 'images/cards/card14/img3.avif'),
(15, 'images/cards/card15/img1.avif', 'images/cards/card15/img2.avif', 'images/cards/card15/img3.avif'),
(16, 'images/cards/card16/img1.avif', 'images/cards/card16/img2.avif', 'images/cards/card16/img3.avif'),
(17, 'images/cards/card17/img1.avif', 'images/cards/card17/img2.avif', 'images/cards/card17/img3.avif'),
(18, 'images/cards/card18/img1.avif', 'images/cards/card18/img2.avif', 'images/cards/card18/img3.avif'),
(19, 'images/cards/card19/img1.avif', 'images/cards/card19/img2.avif', 'images/cards/card19/img3.avif'),
(20, 'images/cards/card20/img1.avif', 'images/cards/card20/img2.avif', 'images/cards/card20/img3.avif'),
(21, 'images/cards/card21/img1.avif', 'images/cards/card21/img2.avif', 'images/cards/card21/img3.avif'),
(22, 'images/cards/card22/img1.avif', 'images/cards/card22/img2.avif', 'images/cards/card22/img3.avif'),
(23, 'images/cards/card23/img1.avif', 'images/cards/card23/img2.avif', 'images/cards/card23/img3.avif');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id_P` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id_P`) VALUES
(21),
(22),
(23);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_O` int(30) NOT NULL,
  `history` date NOT NULL DEFAULT current_timestamp(),
  `id_U` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_O`, `history`, `id_U`) VALUES
(1, '2025-12-08', 1),
(2, '2025-12-09', 1),
(3, '2025-12-09', 2),
(4, '2025-12-09', 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_lists`
--

CREATE TABLE `order_lists` (
  `id_OL` int(30) NOT NULL,
  `id_O` int(30) NOT NULL,
  `id_P` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_lists`
--

INSERT INTO `order_lists` (`id_OL`, `id_O`, `id_P`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_P` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `describtion` varchar(150) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_P`, `name`, `describtion`, `price`, `brand`, `category`) VALUES
(1, 'Oversized Drop-Shoulder T-Shirt', 'purple, Men, RZTTPURP003', 1074.00, 'RZIST', 'Mens T-Shirts'),
(2, 'stone Oversize/Wide Cut Textured Polo Ne', 'Stone, 73% Cotton, 22% Polyester, 5% Elastane, ', 665.00, 'trendyol', 'Mens T-Shirts'),
(3, 'City Limits Printed Oversized Tee', 'Black, made in Egypt, Unisex, Cotton ', 598.00, 'In Your Shoe', 'Womens T-shirts'),
(4, 'Navy Oversized T-shirt', 'Navy, Unisex', 279.00, 'Airclo', 'Womens T-shirts'),
(5, 'AE Oversized Logo Graphic T-Shirt', 'Dusted slate, Pakistan, Men', 1000.00, 'American Eagle', 'Mens T-Shirts'),
(6, 'AE Oversized Logo Graphic T-Shirt', 'Men, Pakistan', 1000.00, 'American Eagle', 'Mens T-Shirts'),
(7, 'Black Oversize/Wide Cut Printed Thick 10', 'black, Men, 100% Cotton, Men', 384.00, 'trendyol', 'Mens T-Shirts'),
(8, 'Brown Oversize/Wide Cut 100% Cotton Shor', 'brown, 100% Cotton, Men', 444.00, 'trendyol', 'Mens T-Shirts'),
(9, 'Ecru Oversize/Wide Textured Cut T-shirt', 'ecru, 98% Polyester,2% Elastane, Men', 427.00, 'trendyol', 'Mens T-Shirts'),
(10, 'Premium Purple Oversize/Wide Cut Faded E', 'purple, 100% Cotton, Men', 503.00, 'trendyol', 'Mens T-Shirts'),
(11, 'Black Oversize/Wide Cut 100% Cotton Prin', 'black, Men, 100% Cotton', 427.00, 'trendyol', 'Mens T-Shirts'),
(12, 'Black Oversize/Wide Cut Embroidered Text', 'black, Men, 50% Cotton,50% Polyester', 427.00, 'trendyol', 'Mens T-Shirts'),
(13, 'Playground Printed Oversized Tee', 'Cream, made in Egypt, Unisex, Cotton', 623.00, 'In Your Shoe', 'Womens T-shirts'),
(14, 'White Basic Mens Crew Neck Oversize Shor', 'white, made in Turkey, Men', 1099.00, 'trendyol', 'Mens T-Shirts'),
(15, 'Black Oversize/Wide Cut 100% Cotton Thic', 'black, 100% Cotton, Men', 400.00, 'trendyol', 'Mens T-Shirts'),
(16, 'Indigo Oversize/Wide Cut Short Sleeve Di', 'blue, 100% Cotton, Men', 389.00, 'trendyol', 'Mens T-Shirts'),
(17, 'Indigo Oversize/Wide Cut Textured Knitte', 'indigo, Men', 649.00, 'trendyol', 'Mens T-Shirts'),
(18, 'Anthracite Oversize/Wide Cut Crew Neck L', 'Anthracite, 100% Cotton, Men', 516.00, 'Trendyol Man', 'Mens T-Shirts'),
(19, 'Black Unisex Oversize/Wide Cut Lobster P', 'black, 100% Cotton, Men', 363.00, 'trendyol', 'Mens T-Shirts'),
(20, 'Ecru Oversize 100% Cotton Minimal Text P', 'Cotton, Men, Ecru, made in Turkey', 1099.00, 'trendyol', 'Mens T-Shirts'),
(21, 'Light Grey Oversize Fit Open Collar Summ', 'Light grey, Men, 100% Polyester', 537.00, 'trendyol', 'Mens T-Shirts'),
(22, 'Ecru Oversize/Wide Cut Back Panda Printe', 'ecru, 100% Cotton, Men', 496.00, 'Trendyol Man', 'Mens T-Shirts'),
(23, 'Ecru Oversize 100% Cotton Anime Printed ', 'ecru, Men, 100% Cotton', 377.00, 'trendyol', 'Mens T-Shirts');

-- --------------------------------------------------------

--
-- Table structure for table `special_order`
--

CREATE TABLE `special_order` (
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `message_title` varchar(30) NOT NULL,
  `order_details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `special_order`
--

INSERT INTO `special_order` (`name`, `email`, `phone_number`, `message_title`, `order_details`) VALUES
('Hussein', 'hussein@gmail.com', '01174628661', 'blue T-shirt', 'I want like a blue cotton T-shirt for summer'),
('Al-Hussein Hassan', 'husseinhassan@gmail.com', '01174628661', 'jacket', 'I want a summer blue jacket');

-- --------------------------------------------------------

--
-- Table structure for table `the_most_rating`
--

CREATE TABLE `the_most_rating` (
  `id_P` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `the_most_rating`
--

INSERT INTO `the_most_rating` (`id_P`) VALUES
(16),
(17),
(18);

-- --------------------------------------------------------

--
-- Table structure for table `the_most_selling`
--

CREATE TABLE `the_most_selling` (
  `id_P` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `the_most_selling`
--

INSERT INTO `the_most_selling` (`id_P`) VALUES
(19),
(20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_U` int(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(16) NOT NULL,
  `profile_img` varchar(100) NOT NULL DEFAULT 'images\\icons\\man.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_U`, `role`, `first_name`, `last_name`, `email`, `phone`, `password`, `profile_img`) VALUES
(1, 'admin', 'admin1', 'admin1', 'admin1@gmail.com', '01138562381', '0000', 'images\\icons\\man.png'),
(2, 'customer', 'Ahmed', 'Ali', 'AhmedAli@gmail.com', '01159773461', '1234', 'images\\icons\\man.png'),
(3, 'customer', 'Aya', 'Mohammed', 'AyaMohammed@gmail.com', '01174996253', '5678', 'images\\icons\\man.png'),
(4, 'customer', 'Khalid', 'Ali', 'KhalidAli@gmail.com', '01273649745', '1111', 'images\\icons\\man.png'),
(5, 'customer', 'Mona', 'Ahmed', 'MonaAhmed@gmail.com', '01167448935', '3333', 'images\\icons\\man.png'),
(6, 'customer', 'Hussein', 'Hassan', 'HusseinHassan@gmail.com', '01125992361', '7777', 'images\\icons\\man.png'),
(7, 'customer', 'Hany', 'Ali', 'HanyAli@gmail.com', '01175893561', '4444', 'images\\icons\\man.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD KEY `id-P` (`id_P`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD KEY `id_P` (`id_P`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_O`),
  ADD KEY `id_U` (`id_U`);

--
-- Indexes for table `order_lists`
--
ALTER TABLE `order_lists`
  ADD PRIMARY KEY (`id_OL`),
  ADD KEY `id_O` (`id_O`),
  ADD KEY `id_P` (`id_P`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_P`);

--
-- Indexes for table `the_most_rating`
--
ALTER TABLE `the_most_rating`
  ADD KEY `id_P` (`id_P`);

--
-- Indexes for table `the_most_selling`
--
ALTER TABLE `the_most_selling`
  ADD KEY `id_P` (`id_P`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_U`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_O` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_lists`
--
ALTER TABLE `order_lists`
  MODIFY `id_OL` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_P` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_U` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_P`) REFERENCES `products` (`id_P`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`id_P`) REFERENCES `products` (`id_P`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_U`) REFERENCES `users` (`id_U`);

--
-- Constraints for table `order_lists`
--
ALTER TABLE `order_lists`
  ADD CONSTRAINT `order_lists_ibfk_1` FOREIGN KEY (`id_O`) REFERENCES `orders` (`id_O`),
  ADD CONSTRAINT `order_lists_ibfk_2` FOREIGN KEY (`id_P`) REFERENCES `products` (`id_P`);

--
-- Constraints for table `the_most_rating`
--
ALTER TABLE `the_most_rating`
  ADD CONSTRAINT `the_most_rating_ibfk_1` FOREIGN KEY (`id_P`) REFERENCES `products` (`id_P`);

--
-- Constraints for table `the_most_selling`
--
ALTER TABLE `the_most_selling`
  ADD CONSTRAINT `the_most_selling_ibfk_1` FOREIGN KEY (`id_P`) REFERENCES `products` (`id_P`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
