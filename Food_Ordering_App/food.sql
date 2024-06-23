-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 08:15 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admincodes`
--

CREATE TABLE `admincodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admincodes`
--

INSERT INTO `admincodes` (`id`, `created_at`, `updated_at`, `code`) VALUES
(1, NULL, NULL, 'QWZQ11'),
(2, NULL, NULL, 'QR3584');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codeId` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `created_at`, `updated_at`, `username`, `password`, `email`, `codeId`, `date`) VALUES
(1, NULL, NULL, 'admin', 'popop', 'ds@tv.com', 1, '2024-06-25'),
(4, '2024-06-12 07:48:43', '2024-06-12 07:48:43', 'admin2', '$2y$12$lQbgdXF9hYeaGLzNSpaYi.UAKQY4dUS0Mp2wnekuXLmPmLSvESJXu', 'sa@fmial.com', 2, '2024-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `CategoryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `CategoryName`, `date`) VALUES
(1, NULL, '2024-06-14 10:10:00', 'hotels', '0000-00-00'),
(2, '2024-06-18 11:02:19', '2024-06-18 11:02:19', 'Resort', '2024-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Rest_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `created_at`, `updated_at`, `Rest_id`, `title`, `slogan`, `price`, `image`) VALUES
(1, '2024-06-15 06:18:30', '2024-06-15 06:18:30', 4, 'Burger with snacks', 'Enjoy your tailored delicious meal!', 80, '1718443110-png'),
(2, '2024-06-15 06:21:28', '2024-06-15 06:21:28', 3, 'Pizza with Chesse', 'Enjoy your tailored delicious meal!', 80, '1718443288-png'),
(3, '2024-06-15 11:17:34', '2024-06-15 11:17:34', 2, 'McDonald''s Burger', 'Enjoy the greatest taste in the world', 250, '1718461054-jfif'),
(4, '2024-06-15 11:18:51', '2024-06-15 11:18:51', 2, 'High Steak', 'Enjoy ur steak as fresh as it can be!', 175, '1718461131-jfif'),
(5, '2024-06-18 11:01:33', '2024-06-18 11:01:33', 5, 'Spaghetti', 'Enjoy ur Italian wonder', 275, '1718719293-jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2024_06_05_085704_create_categories_table', 2),
(18, '0001_01_01_000000_create_users_table', 3),
(19, '0001_01_01_000001_create_cache_table', 3),
(20, '0001_01_01_000002_create_jobs_table', 3),
(21, '2024_06_03_091247_create_categories_table', 3),
(22, '2024_06_03_0993640_create__restaurant_table', 3),
(23, '2024_06_04_041405_create__foods_table', 3),
(24, '2024_06_04_092319_create_orders_table', 3),
(25, '2024_06_12_063433_create_admincodes_table', 4),
(26, '2024_06_12_062533_create_admin_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `FoodId` bigint(20) UNSIGNED NOT NULL,
  `UserId` bigint(20) UNSIGNED NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `FoodId`, `UserId`, `Quantity`, `Status`, `Date`, `Price`) VALUES
(3, '2024-06-16 11:13:05', '2024-06-19 13:17:21', 2, 4, 1, 'Delivered', '2024-06-16', 80);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Cat_Id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `o_hr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_hr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `o_days` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `created_at`, `updated_at`, `Cat_Id`, `title`, `email`, `phone`, `website`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(2, '2024-06-09 06:52:20', '2024-06-13 15:48:18', 1, 'Haile Grand', 'cummings.elisha@pollich.info', '1-719-503-', 'https://pouros.com/et-quam-est-illo-voluptates-dolore-repellat-vel.html', '12hr-dsa', 'dsa-sad', 'mon-sun', '531 Hettinger Curve Suite 901\r\nPort Delfinashire, NC 05313', '1718304470-jpg', '2024-06-09'),
(3, '2024-06-09 06:52:20', '2024-06-09 06:52:20', 1, 'Prof. Clare Weimann Jr.', 'cletus.schmidt@yahoo.com', '662.204.4073', 'https://jaskolski.com/harum-in-fuga-harum-repellendus-doloremque-beatae-iure.html', '', '', '', '74988 Will Vista Suite 536\nKaylinbury, TN 33810-0378', '', '2024-06-09'),
(4, '2024-06-09 06:52:20', '2024-06-09 06:52:20', 1, 'Bradford Haag', 'lang.otis@vonrueden.com', '+16693213499', 'http://www.marquardt.biz/illum-cupiditate-praesentium-similique-unde-enim-rerum-eius.html', '', '', '', '866 Conroy Loop\nAlleneport, TX 23693-1297', '', '2024-06-09'),
(5, '2024-06-09 06:52:21', '2024-06-18 11:05:12', 2, 'Sidney Swift', 'pink.hermann@spencer.com', '6806569460', 'http://www.wolf.com/explicabo-omnis-magnam-quia.html', '7am', '5pm', 'mon-tue', '166 Esther Shore Suite 608\r\nNew Julianashire, AZ 36204', '1718719512-jpg', '2024-06-09'),
(7, '2024-06-14 11:00:31', '2024-06-14 11:00:31', 1, 'Intecontinental Hotel', 'inter@gmail.com', '0933636363', 'https://www.fsd.com', '6am', '4pm', 'mon-tue', 'Bole Road at chicago mall', '1718373631-jpg', '2024-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('MxKagu9FrLCXASkE0ZOV9fKHGGdTI7c8eO6pIPut', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:125.0) Gecko/20100101 Firefox/125.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieklWbmpscmVxNjZBZFlXUlozT1BLR2tWRHNRMVYyQkhuUmdtMU1jYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9vcmRlcnMvYWxsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1718813842);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `uname`, `email`, `email_verified_at`, `phone`, `password`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lionel', 'messi', 'leo', 'john@gmail.com', NULL, '0933636363', '$2y$12$qOznXgJfZBVeWK1fhVJUluSaF1laSEUM6XIVHb2uISTuS10p8qPTq', 'Bole Road at chicago mall', NULL, '2024-06-08 15:47:21', '2024-06-12 16:19:44'),
(3, 'Erik', 'Ten-Hag', 'tenhag', 'erik@gmail.com', NULL, '46545', '$2y$12$L7HvGymrC/Zznz9RsTUoNemFHU4XOBEPhmSRhDdLGfdb8gUem1.uO', 'England Manchester', NULL, '2024-06-13 07:38:43', '2024-06-13 07:39:10'),
(4, 'Carlo', 'Ancelloti', 'carlo', 'carlo@gmail.com', NULL, '0936656785', '$2y$12$FRK50z2NUIAdM7tfLcIFFeYZfDsxQN13GeBcNabPcPGqg57jCKula', 'Madrid,Spain', NULL, '2024-06-15 11:32:54', '2024-06-15 11:32:54'),
(5, 'Conor', 'Gallagher', 'conor', 'conor@gmail.com', NULL, '0966956589', '$2y$12$YXtemYXA.LeuDZFGFlbbJuwPkNg0kxAry.ub3g2fzeqgvCDRIGhjy', 'North London,England', NULL, '2024-06-18 04:07:08', '2024-06-18 04:07:08'),
(6, 'Bruno', 'Fernandes', 'bruno', 'bruno@gmail.com', NULL, '7845121231', '$2y$12$mJXQFOgyOgI5vnXhXjnvUujjhWAUAPgz1LK6IDOKcnPCaWwsu2VBq', 'England,Manchester', NULL, '2024-06-18 10:56:31', '2024-06-18 10:56:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admincodes`
--
ALTER TABLE `admincodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_codeid_foreign` (`codeId`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foods_rest_id_foreign` (`Rest_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_foodid_foreign` (`FoodId`),
  ADD KEY `orders_userid_foreign` (`UserId`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurants_cat_id_foreign` (`Cat_Id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admincodes`
--
ALTER TABLE `admincodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_codeid_foreign` FOREIGN KEY (`codeId`) REFERENCES `admincodes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_rest_id_foreign` FOREIGN KEY (`Rest_id`) REFERENCES `restaurants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_foodid_foreign` FOREIGN KEY (`FoodId`) REFERENCES `foods` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_userid_foreign` FOREIGN KEY (`UserId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_cat_id_foreign` FOREIGN KEY (`Cat_Id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
