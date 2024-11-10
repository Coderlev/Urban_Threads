-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2024 at 09:54 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothing_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Men’s Clothing', '2024-11-09 13:23:13', '2024-11-09 13:23:13'),
(2, 'Women’s Clothing', '2024-11-09 13:23:13', '2024-11-09 13:23:13'),
(3, 'Accessories', '2024-11-09 13:23:13', '2024-11-09 13:23:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2024_11_09_154924_create_products_table', 1),
(4, '2024_11_09_201710_create_categories_table', 2),
(5, '2024_11_09_201841_add_category_id_to_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Classic T-Shirt', 'A comfortable, classic t-shirt for everyday wear.', '19.99', 'https://static.zara.net/assets/public/f26d/4a00/5b524c05b736/440b6974af8d/04644482807-e1/04644482807-e1.jpg?ts=1730645441255&w=750', '2024-11-09 13:14:00', '2024-11-09 13:14:00', 1),
(2, 'Denim Jacket', 'Stylish denim jacket with a relaxed fit.', '49.99', 'https://images-cdn.ubuy.co.id/653b4be936138146b54c2af8-junge-denim-jacket-men-fleece-jacket.jpg', '2024-11-09 13:14:00', '2024-11-09 13:14:00', 1),
(3, 'Summer Dress', 'Lightweight and breezy dress perfect for summer.', '29.99', 'https://static.zara.net/assets/public/74ab/4092/5a6a4e5fa2db/22b6b2f527ae/02183247621-e1/02183247621-e1.jpg?ts=1727002783374&w=750', '2024-11-09 13:14:00', '2024-11-09 13:14:00', 2),
(12, 'Casual Shorts', 'Comfortable and casual shorts for warm weather.', '24.99', 'https://godwincharli.com/cdn/shop/collections/GodwinCharliCasualShorts.webp?v=1698195651', '2024-11-09 13:52:54', '2024-11-09 13:52:54', 1),
(14, 'Blouse', 'Elegant blouse suitable for office or casual wear.', '34.99', 'https://static.zara.net/assets/public/e12f/3df7/cd894473badc/030ebd9f96a4/04786293800-a1/04786293800-a1.jpg?ts=1730995667337&w=750', '2024-11-09 13:52:54', '2024-11-09 13:52:54', 2),
(15, 'Skinny Jeans', 'Classic skinny jeans with a modern fit.', '39.99', 'https://static.zara.net/assets/public/cfdd/483d/057a44139de3/3bb6d9fc0747/03643050401-018-a1/03643050401-018-a1.jpg?ts=1723645679919&w=750', '2024-11-09 13:52:54', '2024-11-09 13:52:54', 2),
(16, 'Leather Belt', 'Durable leather belt with a classic buckle.', '14.99', 'https://images-cdn.ubuy.co.id/6539d79484bb5c2ba521e849-chaoren-leather-reversible-belts-for-men.jpg', '2024-11-09 13:52:54', '2024-11-09 13:52:54', 3),
(17, 'Sunglasses', 'Stylish sunglasses with UV protection.', '19.99', 'https://images-cdn.ubuy.co.in/662854bd124a854eb7277247-wearme-pro-flat-top-polarized-lens.jpg', '2024-11-09 13:52:54', '2024-11-09 13:52:54', 3),
(18, 'Watch', 'Classic wristwatch with a leather strap.', '59.99', 'https://images-cdn.ubuy.co.id/6484ac96c913a5555e0f5648-2021-men-039-s-watches-top-brand.jpg', '2024-11-09 13:52:54', '2024-11-09 13:52:54', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
