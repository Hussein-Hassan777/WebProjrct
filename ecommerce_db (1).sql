-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 16, 2025 at 09:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
  `id_U` int(11) DEFAULT NULL,
  `guest_email` varchar(100) DEFAULT NULL,
  `guest_phone` varchar(15) DEFAULT NULL,
  `guest_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_O`, `history`, `id_U`, `guest_email`, `guest_phone`, `guest_address`) VALUES
('O02451658', '2025-12-16', NULL, 'mohamed@gmail', '0123456789', 'cairo\r\n'),
('O03274748', '2025-12-16', NULL, 'ahmed@gmail', '098798798', 'cairo'),
('O04073716', '2025-12-16', NULL, 'mo@gmail', '099845190', '.cairo'),
('O04535715', '2025-12-15', NULL, 'omer@gmail', '3289434892', 'cairo'),
('O04542454', '2025-12-15', NULL, 'omer@gmail', '98053422', 'cairo'),
('O04551018', '2025-12-15', NULL, 'aaa@gmail.com', '2890412', 'cairo'),
('O05043250', '2025-12-15', NULL, 'ibrahim@gmail', '01138947232', 'cairo'),
('O05144678', '2025-12-15', NULL, 'aliali@gmail.com', '09123810931', 'cairo'),
('O05191654', '2025-12-15', NULL, 'mona@gmail.com', '0123456789', 'cairo'),
('O06481511', '2025-12-16', 22, NULL, NULL, NULL),
('O06522248', '2025-12-16', 22, 'amr.y@gmail.com', '0100000014', 'cairo'),
('O07062813', '2025-12-16', 22, 'amr.y@gmail.com', '0100000014', ' '),
('O07184380', '2025-12-16', NULL, 'ibrahim@gmail', '0879787876', 'cairo'),
('O07455928', '2025-12-15', NULL, 'omer@gmail', '231456769087', 'cairo'),
('O0753526', '2025-12-15', NULL, 'mona@gmail.com', '09789756', 'cairo'),
('O08044510', '2025-12-16', NULL, 'aliali@gmail.com', '094567889', 'cairo'),
('O694020e35460c', '2025-12-15', NULL, 'ali@gmail.com', '01129137281', 'Cairo, Egypt'),
('O6940215454be5', '2025-12-15', NULL, 'omer@example.com', '01238294723', 'Alexandria, Egypt'),
('O6940218026abf', '2025-12-15', NULL, 'ibrahim@example.com', '0158927322', 'Alexandria, Egypt'),
('O694021ac67b80', '2025-12-15', NULL, 'mona@example.com', '01728917211', 'Tanta, Egypt'),
('O694021f8967e7', '2025-12-15', NULL, 'ali@gmail.com', '01292492482', 'Tanta, Egypt'),
('O6940244ad2d2a', '2025-12-15', NULL, 'ibrahim@gmail.com', '01245687476', 'cairo'),
('O6940247b5e230', '2025-12-15', NULL, 'ail@gmail.com', '078754675765', 'cairo'),
('O694028752e1b5', '2025-12-15', NULL, 'omer@gmail.com', '02183982138', 'Sharm El-Sheikh, Egypt'),
('O694029fc61834', '2025-12-15', NULL, 'ali@gmail.com', '0912389211', 'cairo'),
('O69402b5a52e48', '2025-12-15', NULL, 'AIL@gmail', '09213928321', 'cairo'),
('O69402bedd0052', '2025-12-15', NULL, 'ibrahim@gmail', '24929084029', 'cairo'),
('O69402d2c8b89e', '2025-12-15', NULL, 'omer@gmail', '0193819312', 'cairo');

-- --------------------------------------------------------

--
-- Table structure for table `order_lists`
--

CREATE TABLE `order_lists` (
  `id_OL` varchar(30) NOT NULL,
  `id_O` varchar(30) NOT NULL,
  `id_P` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_lists`
--

INSERT INTO `order_lists` (`id_OL`, `id_O`, `id_P`, `quantity`) VALUES
('OL694020e356f03', 'O694020e35460c', 'P1', 1),
('OL694020e357555', 'O694020e35460c', 'P5', 1),
('OL69402154574c5', 'O6940215454be5', 'P1', 1),
('OL6940215457f0a', 'O6940215454be5', 'P6', 1),
('OL694021545830d', 'O6940215454be5', 'P12', 0),
('OL69402180291fd', 'O6940218026abf', 'P5', 5),
('OL694021ac68334', 'O694021ac67b80', 'P15', 3),
('OL694021f89908e', 'O694021f8967e7', 'P10', 1),
('OL6940244ad54eb', 'O6940244ad2d2a', 'P22', 1),
('OL6940247b6063e', 'O6940247b5e230', 'P1', 4),
('OL6940287530860', 'O694028752e1b5', 'P1', 4),
('OL694029fc63f93', 'O694029fc61834', 'P1', 1),
('OL694029fc646eb', 'O694029fc61834', 'P6', 4),
('OL69402b5a55df5', 'O69402b5a52e48', 'P1', 6),
('OL69402bedd26fe', 'O69402bedd0052', 'P1', 10),
('OL69402d2c8e171', 'O69402d2c8b89e', 'P5', 10),
('OL69402f158abd2', 'O04535715', 'P2', 1),
('OL69402f30f0900', 'O04542454', 'P5', 1),
('OL69402f5e78c99', 'O04551018', 'P9', 1),
('OL69403190c5544', 'O05043250', 'P10', 2),
('OL694033f6e531c', 'O05144678', 'P2', 3),
('OL694035046234f', 'O05191654', 'P1', 2),
('OL69405767cece8', 'O07455928', 'P1', 2),
('OL69405767cfcdb', 'O07455928', 'P14', 2),
('OL69405767d025c', 'O07455928', 'P22', 2),
('OL694059404885d', 'O0753526', 'P1', 7),
('OL6941626c3a0a1', 'O02451658', 'P9', 2),
('OL6941626c3a983', 'O02451658', 'P5', 2),
('OL69416c637e5b6', 'O03274748', 'P1', 2),
('OL69416c637f343', 'O03274748', 'P2', 1),
('OL69416c637fc90', 'O03274748', 'P3', 2),
('OL694175b945bb7', 'O04073716', 'P20', 1),
('OL69419b5fd7889', 'O06481511', 'P1', 2),
('OL69419c563efee', 'O06522248', 'P3', 1),
('OL69419fa4b7e37', 'O07062813', 'P1', 1),
('OL6941a2831ef0b', 'O07184380', 'P1', 1),
('OL6941ad4d76773', 'O08044510', 'P1', 1);

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
('P1', 'Oversized Drop-Shoulder T-Shirt', 'purple, Men, RZTTPURP003', 1500.00, 'RZIST', 'Mens T-Shirts'),
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
('Hussein', 'hussein@gmail.com', '01174628661', 'blue T-shirt', 'I want like a blue cotton T-shirt for summer'),
('Al-Hussein Hassan', 'husseinhassan@gmail.com', '01174628661', 'jacket', 'I want a summer blue jacket');

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
(1, 'admin', 'admin1', 'admin1', 'admin@a', '01138562381', '0000', 'images\\icons\\man.png'),
(2, 'customer', 'Ahmed', 'Ali', 'AhmedAli@gmail.com', '01159773461', '1234', 'images\\icons\\man.png'),
(3, 'customer', 'Aya', 'Mohammed', 'AyaMohammed@gmail.com', '01174996253', '5678', 'images\\icons\\man.png'),
(4, 'customer', 'Khalid', 'Ali', 'KhalidAli@gmail.com', '01273649745', '1111', 'images\\icons\\man.png'),
(5, 'customer', 'Mona', 'Ahmed', 'MonaAhmed@gmail.com', '01167448935', '3333', 'images\\icons\\man.png'),
(6, 'customer', 'Hussein', 'Hassan', 'HusseinHassan@gmail.com', '01125992361', '7777', 'images\\icons\\man.png'),
(7, 'customer', 'Hany', 'Ali', 'HanyAli@gmail.com', '01175893561', '4444', 'images\\icons\\man.png'),
(8, 'customer', 'ibrahim', 'gamal', 'ibrahim@gmail', '123', '123', 'images\\icons\\man.png'),
(9, 'admin', 'Ahmed', 'Ali', 'ahmed.ali@gmail.com', '0100000001', '123456', 'user1.jpg'),
(10, 'user', 'Mohamed', 'Hassan', 'mohamed.h@gmail.com', '0100000002', '123456', 'user2.jpg'),
(11, 'user', 'Sara', 'Ibrahim', 'sara.i@gmail.com', '0100000003', '123456', 'user3.jpg'),
(12, 'user', 'Nada', 'Mostafa', 'nada.m@gmail.com', '0100000004', '123456', 'user4.jpg'),
(13, 'user', 'Omar', 'Khaled', 'omar.k@gmail.com', '0100000005', '123456', 'user5.jpg'),
(14, 'user', 'Youssef', 'Mahmoud', 'youssef.m@gmail.com', '0100000006', '123456', 'user6.jpg'),
(15, 'user', 'Mona', 'Adel', 'mona.a@gmail.com', '0100000007', '123456', 'user7.jpg'),
(16, 'user', 'Hossam', 'Sayed', 'hossam.s@gmail.com', '0100000008', '123456', 'user8.jpg'),
(17, 'user', 'Reem', 'Nabil', 'reem.n@gmail.com', '0100000009', '123456', 'user9.jpg'),
(18, 'user', 'Kareem', 'Fathy', 'kareem.f@gmail.com', '0100000010', '123456', 'user10.jpg'),
(19, 'user', 'Aya', 'Tarek', 'aya.t@gmail.com', '0100000011', '123456', 'user11.jpg'),
(20, 'user', 'Mostafa', 'Ashraf', 'mostafa.a@gmail.com', '0100000012', '123456', 'user12.jpg'),
(21, 'user', 'Hala', 'Samir', 'hala.s@gmail.com', '0100000013', '123456', 'user13.jpg'),
(22, 'user', 'Amr', 'Yehia', 'amr.y@gmail.com', '0100000014', '123456', 'user14.jpg'),
(23, 'user', 'Salma', 'Ehab', 'salma.e@gmail.com', '0100000015', '123456', 'user15.jpg'),
(24, 'user', 'Tamer', 'Reda', 'tamer.r@gmail.com', '0100000016', '123456', 'user16.jpg'),
(25, 'user', 'Noha', 'Magdy', 'noha.m@gmail.com', '0100000017', '123456', 'user17.jpg'),
(26, 'user', 'Islam', 'Hamdy', 'islam.h@gmail.com', '0100000018', '123456', 'user18.jpg'),
(27, 'user', 'Mai', 'Lotfy', 'mai.l@gmail.com', '0100000019', '123456', 'user19.jpg'),
(28, 'user', 'Ali', 'Saad', 'ali.s@gmail.com', '0100000020', '123456', 'user20.jpg');

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_U` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
