-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 11, 2025 at 07:07 AM
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
  `id_P` varchar(30) NOT NULL,
  `image_1` varchar(200) NOT NULL,
  `image_2` varchar(200) NOT NULL,
  `image_3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_P`, `image_1`, `image_2`, `image_3`) VALUES
('P1', 'images/cards/card1/img1.avif', 'images/cards/card1/img2.avif', 'images/cards/card1/img3.avif'),
('P2', 'images/cards/card2/img1.avif', 'images/cards/card2/img2.avif', 'images/cards/card2/img3.avif'),
('P3', 'images/cards/card3/img1.avif', 'images/cards/card3/img2.avif', 'images/cards/card3/img3.avif'),
('P4', 'images/cards/card4/img1.avif', 'images/cards/card4/img2.avif', 'images/cards/card4/img3.avif'),
('P5', 'images/cards/card5/img1.avif', 'images/cards/card5/img2.avif', 'images/cards/card5/img3.avif'),
('P6', 'images/cards/card6/img1.avif', 'images/cards/card6/img2.avif', 'images/cards/card6/img3.avif'),
('P7', 'images/cards/card7/img1.avif', 'images/cards/card7/img2.avif', 'images/cards/card7/img3.avif'),
('P8', 'images/cards/card8/img1.avif', 'images/cards/card8/img2.avif', 'images/cards/card8/img3.avif'),
('P9', 'images/cards/card9/img1.avif', 'images/cards/card9/img2.avif', 'images/cards/card9/img3.avif'),
('P10', 'images/cards/card10/img1.avif', 'images/cards/card10/img2.avif', 'images/cards/card10/img3.avif'),
('P12', 'images/cards/card12/img1.avif', 'images/cards/card12/img2.avif', 'images/cards/card12/img3.avif'),
('P11', 'images/cards/card11/img1.avif', 'images/cards/card11/img2.avif', 'images/cards/card11/img3.avif'),
('P13', 'images/cards/card13/img1.avif', 'images/cards/card13/img2.avif', 'images/cards/card13/img3.avif'),
('P14', 'images/cards/card14/img1.avif', 'images/cards/card14/img2.avif', 'images/cards/card14/img3.avif'),
('P15', 'images/cards/card15/img1.avif', 'images/cards/card15/img2.avif', 'images/cards/card15/img3.avif'),
('P16', 'images/cards/card16/img1.avif', 'images/cards/card16/img2.avif', 'images/cards/card16/img3.avif'),
('P17', 'images/cards/card17/img1.avif', 'images/cards/card17/img2.avif', 'images/cards/card17/img3.avif'),
('P18', 'images/cards/card18/img1.avif', 'images/cards/card18/img2.avif', 'images/cards/card18/img3.avif'),
('P19', 'images/cards/card19/img1.avif', 'images/cards/card19/img2.avif', 'images/cards/card19/img3.avif'),
('P20', 'images/cards/card20/img1.avif', 'images/cards/card20/img2.avif', 'images/cards/card20/img3.avif'),
('P21', 'images/cards/card21/img1.avif', 'images/cards/card21/img2.avif', 'images/cards/card21/img3.avif'),
('P22', 'images/cards/card22/img1.avif', 'images/cards/card22/img2.avif', 'images/cards/card22/img3.avif'),
('P23', 'images/cards/card23/img1.avif', 'images/cards/card23/img2.avif', 'images/cards/card23/img3.avif');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id_P` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id_P`) VALUES
('P21'),
('P22'),
('P23');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_O` varchar(30) NOT NULL,
  `history` date NOT NULL DEFAULT current_timestamp(),
  `id_U` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_O`, `history`, `id_U`) VALUES
('O1', '2025-12-08', 'C1'),
('O2', '2025-12-09', 'C2'),
('O3', '2025-12-09', 'C2'),
('O4', '2025-12-09', 'C3');

-- --------------------------------------------------------

--
-- Table structure for table `order_lists`
--

CREATE TABLE `order_lists` (
  `id_OL` varchar(30) NOT NULL,
  `id_O` varchar(30) NOT NULL,
  `id_P` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_lists`
--

INSERT INTO `order_lists` (`id_OL`, `id_O`, `id_P`) VALUES
('OL1', 'O1', 'P1'),
('OL2', 'O1', 'P2'),
('OL3', 'O2', 'P2');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_P` varchar(20) NOT NULL,
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
('P1', 'Oversized Drop-Shoulder T-Shirt', 'purple, Men, RZTTPURP003', 1074.00, 'RZIST', 'Mens T-Shirts'),
('P10', 'Premium Purple Oversize/Wide Cut Faded E', 'purple, 100% Cotton, Men', 503.00, 'trendyol', 'Mens T-Shirts'),
('P11', 'Black Oversize/Wide Cut 100% Cotton Prin', 'black, Men, 100% Cotton', 427.00, 'trendyol', 'Mens T-Shirts'),
('P12', 'Black Oversize/Wide Cut Embroidered Text', 'black, Men, 50% Cotton,50% Polyester', 427.00, 'trendyol', 'Mens T-Shirts'),
('P13', 'Playground Printed Oversized Tee', 'Cream, made in Egypt, Unisex, Cotton', 623.00, 'In Your Shoe', 'Womens T-shirts'),
('P14', 'White Basic Mens Crew Neck Oversize Shor', 'white, made in Turkey, Men', 1099.00, 'trendyol', 'Mens T-Shirts'),
('P15', 'Black Oversize/Wide Cut 100% Cotton Thic', 'black, 100% Cotton, Men', 400.00, 'trendyol', 'Mens T-Shirts'),
('P16', 'Indigo Oversize/Wide Cut Short Sleeve Di', 'blue, 100% Cotton, Men', 389.00, 'trendyol', 'Mens T-Shirts'),
('P17', 'Indigo Oversize/Wide Cut Textured Knitte', 'indigo, Men', 649.00, 'trendyol', 'Mens T-Shirts'),
('P18', 'Anthracite Oversize/Wide Cut Crew Neck L', 'Anthracite, 100% Cotton, Men', 516.00, 'Trendyol Man', 'Mens T-Shirts'),
('P19', 'Black Unisex Oversize/Wide Cut Lobster P', 'black, 100% Cotton, Men', 363.00, 'trendyol', 'Mens T-Shirts'),
('P2', 'stone Oversize/Wide Cut Textured Polo Ne', 'Stone, 73% Cotton, 22% Polyester, 5% Elastane, ', 665.00, 'trendyol', 'Mens T-Shirts'),
('P20', 'Ecru Oversize 100% Cotton Minimal Text P', 'Cotton, Men, Ecru, made in Turkey', 1099.00, 'trendyol', 'Mens T-Shirts'),
('P21', 'Light Grey Oversize Fit Open Collar Summ', 'Light grey, Men, 100% Polyester', 537.00, 'trendyol', 'Mens T-Shirts'),
('P22', 'Ecru Oversize/Wide Cut Back Panda Printe', 'ecru, 100% Cotton, Men', 496.00, 'Trendyol Man', 'Mens T-Shirts'),
('P23', 'Ecru Oversize 100% Cotton Anime Printed ', 'ecru, Men, 100% Cotton', 377.00, 'trendyol', 'Mens T-Shirts'),
('P3', 'City Limits Printed Oversized Tee', 'Black, made in Egypt, Unisex, Cotton ', 598.00, 'In Your Shoe', 'Womens T-shirts'),
('P4', 'Navy Oversized T-shirt', 'Navy, Unisex', 279.00, 'Airclo', 'Womens T-shirts'),
('P5', 'AE Oversized Logo Graphic T-Shirt', 'Dusted slate, Pakistan, Men', 1000.00, 'American Eagle', 'Mens T-Shirts'),
('P6', 'AE Oversized Logo Graphic T-Shirt', 'Men, Pakistan', 1000.00, 'American Eagle', 'Mens T-Shirts'),
('P7', 'Black Oversize/Wide Cut Printed Thick 10', 'black, Men, 100% Cotton, Men', 384.00, 'trendyol', 'Mens T-Shirts'),
('P8', 'Brown Oversize/Wide Cut 100% Cotton Shor', 'brown, 100% Cotton, Men', 444.00, 'trendyol', 'Mens T-Shirts'),
('P9', 'Ecru Oversize/Wide Textured Cut T-shirt', 'ecru, 98% Polyester,2% Elastane, Men', 427.00, 'trendyol', 'Mens T-Shirts');

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
('Hussein', 'hussein@gmail.com', '01174628661', 'blue T-shirt', 'I want like a blue cotton T-shirt for summer');

-- --------------------------------------------------------

--
-- Table structure for table `the_most_rating`
--

CREATE TABLE `the_most_rating` (
  `id_P` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `the_most_rating`
--

INSERT INTO `the_most_rating` (`id_P`) VALUES
('P16'),
('P17'),
('P18');

-- --------------------------------------------------------

--
-- Table structure for table `the_most_selling`
--

CREATE TABLE `the_most_selling` (
  `id_P` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `the_most_selling`
--

INSERT INTO `the_most_selling` (`id_P`) VALUES
('P19'),
('P20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_U` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_U`, `role`, `first_name`, `last_name`, `email`, `phone`, `password`) VALUES
('A1', 'admin', 'admin1', 'admin1', 'admin1@gmail.com', '01138562381', '0000'),
('C1', 'customer', 'Ahmed', 'Ali', 'AhmedAli@gmail.com', '01159773461', '1234'),
('C2', 'customer', 'Aya', 'Mohammed', 'AyaMohammed@gmail.com', '01174996253', '5678'),
('C3', 'customer', 'Khalid', 'Ali', 'KhalidAli@gmail.com', '01273649745', '1111');

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
