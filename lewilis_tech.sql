-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 12:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lewilis_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `lt_admin`
--

CREATE TABLE `lt_admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `reset_token` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lt_admin`
--

INSERT INTO `lt_admin` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `date_created`, `reset_token`) VALUES
(1, 'lawrence', 'wangai', 'lawrence', 'lawrencewangai@gmail.com', '$2y$10$9v3Vrm9esjEIXre.DTGF7ehcXTJo8EPWqd4MuIcnsL.qp38vycDqa', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `lt_arrivals`
--

CREATE TABLE `lt_arrivals` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` varchar(64) NOT NULL,
  `category` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `discount` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_cart`
--

CREATE TABLE `lt_cart` (
  `id` int(11) NOT NULL,
  `item_id` varchar(64) NOT NULL,
  `price` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `owner` varchar(64) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_contacts`
--

CREATE TABLE `lt_contacts` (
  `id` int(11) NOT NULL,
  `from` varchar(64) NOT NULL,
  `message` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `read` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_deals`
--

CREATE TABLE `lt_deals` (
  `id` int(11) NOT NULL,
  `caption` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `time_created` varchar(64) NOT NULL,
  `edited_by` varchar(64) DEFAULT NULL,
  `position` varchar(64) DEFAULT NULL,
  `title` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_dealsoftheday`
--

CREATE TABLE `lt_dealsoftheday` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` varchar(64) NOT NULL,
  `category` varchar(64) DEFAULT NULL,
  `timetoexpire` varchar(64) NOT NULL,
  `image` varchar(64) DEFAULT NULL,
  `discount` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_faqs`
--

CREATE TABLE `lt_faqs` (
  `id` int(11) NOT NULL,
  `faq_item` varchar(64) NOT NULL,
  `faq_desc` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `time_created` varchar(64) NOT NULL,
  `edited_by` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_featured`
--

CREATE TABLE `lt_featured` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` varchar(64) NOT NULL,
  `category` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `discount` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_flashproducts`
--

CREATE TABLE `lt_flashproducts` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` varchar(64) NOT NULL,
  `category` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `discount` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_information`
--

CREATE TABLE `lt_information` (
  `id` int(11) NOT NULL,
  `about` text NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(64) NOT NULL,
  `address` varchar(64) DEFAULT NULL,
  `twitter` varchar(64) DEFAULT NULL,
  `ig` varchar(64) DEFAULT NULL,
  `google` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_inquiry`
--

CREATE TABLE `lt_inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(64) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `read` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_logins`
--

CREATE TABLE `lt_logins` (
  `id` int(11) NOT NULL,
  `ip_address` int(11) NOT NULL,
  `last_date` datetime NOT NULL DEFAULT current_timestamp(),
  `logins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lt_logins`
--

INSERT INTO `lt_logins` (`id`, `ip_address`, `last_date`, `logins`) VALUES
(1, 41139, '2021-10-23 00:00:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `lt_newsletter`
--

CREATE TABLE `lt_newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `time_created` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_orders`
--

CREATE TABLE `lt_orders` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `created_by` varchar(64) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `time_created` varchar(64) NOT NULL,
  `ip` varchar(64) NOT NULL,
  `price` varchar(64) NOT NULL,
  `discount` varchar(64) NOT NULL,
  `payment_by` varchar(64) DEFAULT NULL,
  `completed` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_paymentoptions`
--

CREATE TABLE `lt_paymentoptions` (
  `id` int(11) NOT NULL,
  `option` varchar(64) NOT NULL,
  `api_key` varchar(64) DEFAULT NULL,
  `created_by` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `time_created` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_posts`
--

CREATE TABLE `lt_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `time_created` varchar(64) NOT NULL,
  `date_edited` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_products`
--

CREATE TABLE `lt_products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `stock` int(11) NOT NULL,
  `color` varchar(64) DEFAULT NULL,
  `weight` varchar(64) NOT NULL,
  `model` varchar(64) DEFAULT NULL,
  `sub_category` varchar(64) DEFAULT NULL,
  `category` varchar(64) DEFAULT NULL,
  `discount` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `time_created` varchar(64) NOT NULL,
  `created_by` varchar(64) NOT NULL,
  `edited_by` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lt_products`
--

INSERT INTO `lt_products` (`id`, `name`, `price`, `description`, `stock`, `color`, `weight`, `model`, `sub_category`, `category`, `discount`, `image`, `date_created`, `time_created`, `created_by`, `edited_by`) VALUES
(3, 'HP 250 g6 core i3', 27000, 'Hp 25 g6 intel core i3\r\n15.6 inches screen size\r\n6th gen \r\n4gb ram 500gb hard disk', 27000, 'black grey', '', '', 'laptops', 'Electronics', '', '20211016132550.jpg', '2021-10-21 00:00:00', '18:37:14 UTC', 'lawrence', NULL),
(4, 'HP Folio 948m core i5', 29000, 'Hp Folio 9480 intel core i5\r\n14 inches screen display\r\n4gb ram 500gb hard disk\r\nbacklit keyboard', 29000, 'silver', '', '', 'laptops', 'Electronics', '', '20211013192618mfnr.jpg', '2021-10-21 00:00:00', '18:52:30 UTC', 'lawrence', NULL),
(5, '8gb pc4 laptop rams ', 4700, '8gb ddr4 laptop rams', 4700, 'all colours', '', 'RAMS', 'laptops', 'Electronics', '', '20211012125152mfnr.jpg', '2021-10-21 00:00:00', '19:06:15 UTC', 'lawrence', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lt_returnscollection`
--

CREATE TABLE `lt_returnscollection` (
  `id` int(11) NOT NULL,
  `item_id` varchar(64) NOT NULL,
  `price` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `owner` varchar(64) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_slider`
--

CREATE TABLE `lt_slider` (
  `id` int(11) NOT NULL,
  `caption` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `time_created` varchar(64) NOT NULL,
  `edited_by` varchar(64) DEFAULT NULL,
  `position` varchar(64) DEFAULT NULL,
  `title` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_special`
--

CREATE TABLE `lt_special` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` varchar(64) NOT NULL,
  `category` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `discount` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_users`
--

CREATE TABLE `lt_users` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `firstname` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `gender` varchar(64) NOT NULL,
  `birth` varchar(64) NOT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `reset_link` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `orders` varchar(64) DEFAULT NULL,
  `completed` varchar(64) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_weekly`
--

CREATE TABLE `lt_weekly` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` varchar(64) NOT NULL,
  `category` varchar(64) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `discount` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lt_wishlist`
--

CREATE TABLE `lt_wishlist` (
  `id` int(11) NOT NULL,
  `item_id` varchar(64) NOT NULL,
  `price` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `owner` varchar(64) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lt_admin`
--
ALTER TABLE `lt_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_arrivals`
--
ALTER TABLE `lt_arrivals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_cart`
--
ALTER TABLE `lt_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_contacts`
--
ALTER TABLE `lt_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_deals`
--
ALTER TABLE `lt_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_dealsoftheday`
--
ALTER TABLE `lt_dealsoftheday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_faqs`
--
ALTER TABLE `lt_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_featured`
--
ALTER TABLE `lt_featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_flashproducts`
--
ALTER TABLE `lt_flashproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_information`
--
ALTER TABLE `lt_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_inquiry`
--
ALTER TABLE `lt_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_logins`
--
ALTER TABLE `lt_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_newsletter`
--
ALTER TABLE `lt_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_orders`
--
ALTER TABLE `lt_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_paymentoptions`
--
ALTER TABLE `lt_paymentoptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_posts`
--
ALTER TABLE `lt_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_products`
--
ALTER TABLE `lt_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_returnscollection`
--
ALTER TABLE `lt_returnscollection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_slider`
--
ALTER TABLE `lt_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_special`
--
ALTER TABLE `lt_special`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_users`
--
ALTER TABLE `lt_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_weekly`
--
ALTER TABLE `lt_weekly`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lt_wishlist`
--
ALTER TABLE `lt_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lt_admin`
--
ALTER TABLE `lt_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lt_arrivals`
--
ALTER TABLE `lt_arrivals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_cart`
--
ALTER TABLE `lt_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_contacts`
--
ALTER TABLE `lt_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_deals`
--
ALTER TABLE `lt_deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_dealsoftheday`
--
ALTER TABLE `lt_dealsoftheday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_faqs`
--
ALTER TABLE `lt_faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_featured`
--
ALTER TABLE `lt_featured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_flashproducts`
--
ALTER TABLE `lt_flashproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_information`
--
ALTER TABLE `lt_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_inquiry`
--
ALTER TABLE `lt_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_logins`
--
ALTER TABLE `lt_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lt_orders`
--
ALTER TABLE `lt_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_paymentoptions`
--
ALTER TABLE `lt_paymentoptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_posts`
--
ALTER TABLE `lt_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_products`
--
ALTER TABLE `lt_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lt_returnscollection`
--
ALTER TABLE `lt_returnscollection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_slider`
--
ALTER TABLE `lt_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_special`
--
ALTER TABLE `lt_special`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_users`
--
ALTER TABLE `lt_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_weekly`
--
ALTER TABLE `lt_weekly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lt_wishlist`
--
ALTER TABLE `lt_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
