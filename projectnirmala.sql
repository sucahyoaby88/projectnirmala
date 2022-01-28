-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 05:03 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectnirmala`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `level`) VALUES
(2, 'anas', '6eea9b7ef19179a06954edd0f6c05ceb', 'admin'),
(3, 'ubbadullah', '6eea9b7ef19179a06954edd0f6c05ceb', 'admin'),
(8, 'cannavio', '6eea9b7ef19179a06954edd0f6c05ceb', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `linkyt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `description`, `about`, `email`, `location`, `whatsapp`, `linkyt`) VALUES
(1, 'Tell us what you need and we will immediately handle your needs in a fairly short time.', '<div>Nirmala Archipelago Commodity and Export (NACE), is the right company choice when you are looking for products, especially products that are widely produced in Indonesia with the best quality on the market. With the suppliers we have, we can provide you Indonesian’s masterpiece you are looking for at a competitive prices on the market. We believe that your satisfaction is our success, and we believe that your satisfaction can lead to a strong relationship to provide benefits to each other. Good products, creates good business. Therefore, Nirmala Archipelago Commodity and Export (NACE) works together with domestic producers and local communities to obtain the highest quality products. We believe that Indonesian local products can can compete with other producers product from other countries, this is what makes the world\'s eyes fixated on Indonesia\'s natural wealth. Therefore, tell us what you need and we will immediately handle your needs in a fairly short time.</div>', 'nirmalaarchipelago@gmail.com', 'Jl Dupak Rukun 7, Dupak, Krembangan, Surabaya, East Java, Indonesia. 60179.', '+62 822-3192-2318', 'https://youtu.be/4fDp3vsGSWg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reqproduct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `reqproduct`) VALUES
(1, 'abc', 'abc@gmail.com', 'wood'),
(4, 'PT JAVA PLAZA', 'javaplaza@gmail.com', 'Money'),
(5, 'PT JAVA INDAH', 'javaindah@gmail.com', 'coffe bean');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`) VALUES
(2, 'Apple', 'Apples have a big role in helping to fight diseases, one of which is diseases related to heart health.', 'images_product/dpJSOvZ9laRbyh7EHzOA9BfJhMmVfjMl0lR66PDe.jpg'),
(3, 'Coffe Bean', 'Coffee is one type of plantation plant that has been cultivated for a long time and has a fairly high economic value. Coffee comes from Africa, which is a mountainous area in Ethiopia.', 'images_product/FSYsvfB0dfwJlMYu0etnBvUAqyzyq7RyPgYn02Wc.jpg'),
(4, 'Briquettes', 'A briquette is a block of combustible material that is used as a fuel to start and maintain a flame. The most commonly used briquettes are coal briquettes, charcoal briquettes, peat briquettes, and biomass briquettes.', 'images_product/xzX1xTTSIWSyK7XwSfCzyHXKeaqknOKMxG6sUKn7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `role`, `email`, `instagram`, `image`) VALUES
(5, 'Mohammad Anas Zr', 'Chief Excecutive Officer', 'anaszaidanrafi3@gmail.com', 'mohammadanas_zr', 'images_team/UUNXvQcniB8sKNTxQIaS4SWG0jp5W74at1188YdL.jpg'),
(6, 'Ubbadullah', 'Chief Operation Officer', 'aadubbadullah2207@gmail.com', 'ubbadullah', 'images_team/a0MYSRLCthNrxRTMt6PBrNNuej5oBNDyX4oTLDuD.jpg'),
(7, 'Alexander Dc', 'Chief Financial Officer', 'cannavioalexander@gmail.com', 'boyffieee', 'images_team/yEXwJfmJ7Rl4JBeqOtvOkTbjuetqoXw2g2iDOztZ.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
