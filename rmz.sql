-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 11:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmz`
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
(1, 'Meat ', '2021-09-03 09:38:08', '2021-09-03 09:38:08'),
(2, 'Fruits', '2021-09-03 09:38:08', '2021-09-03 09:38:08'),
(3, 'Vegetables', '2021-09-03 09:38:08', '2021-09-03 09:38:08'),
(4, 'Dairy', '2021-09-03 09:38:08', '2021-09-03 09:38:08'),
(7, 'Protien', '2021-09-03 14:21:08', '2021-09-03 14:21:08'),
(8, 'Fish', '2021-09-05 17:03:59', '2021-09-05 17:03:59'),
(9, 'Cheese', '2021-09-05 17:04:07', '2021-09-05 17:04:07'),
(10, 'See food', '2021-09-05 17:04:18', '2021-09-05 17:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `chef_profiles`
--

CREATE TABLE `chef_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `years_of_xp` int(11) NOT NULL,
  `license` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isVIP` tinyint(1) NOT NULL DEFAULT 0,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chef_profiles`
--

INSERT INTO `chef_profiles` (`id`, `user_id`, `years_of_xp`, `license`, `isVIP`, `approved`, `created_at`, `updated_at`) VALUES
(102, 102, 22, '/uploads/1630160496.pdf', 0, 1, '2021-09-03 09:38:59', '2021-09-03 09:38:59'),
(103, 103, 50, '/uploads/CVs/1630678704.pdf', 0, 1, '2021-09-03 12:18:24', '2021-09-03 12:19:21'),
(106, 106, 22, '/uploads/CVs/1630867891.pdf', 0, 0, '2021-09-05 16:51:31', '2021-09-05 17:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` int(10) UNSIGNED NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `parent_id`, `comment`, `commentable_id`, `commentable_type`, `created_at`, `updated_at`) VALUES
(1, 102, NULL, 'is my work good?', 1, 'App\\Models\\Meal', '2021-09-03 09:41:05', '2021-09-03 09:41:05'),
(2, 101, 1, 'yeah', 1, 'App\\Models\\Meal', '2021-09-03 09:41:51', '2021-09-03 09:41:51'),
(3, 102, 2, 'thx', 1, 'App\\Models\\Meal', '2021-09-03 09:42:20', '2021-09-03 09:42:20'),
(4, 101, 3, 'just the truth bor', 1, 'App\\Models\\Meal', '2021-09-03 09:42:32', '2021-09-03 09:42:32'),
(5, 104, 2, 'aggread', 1, 'App\\Models\\Meal', '2021-09-03 09:46:00', '2021-09-03 09:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(10) UNSIGNED NOT NULL,
  `chef_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `chef_id`, `category_id`, `price`, `name`, `description`, `image`, `video`, `created_at`, `updated_at`) VALUES
(2, 102, 7, 100, 'Egg', 'Weird looking Egg', '1630690274.jpg', 'Nature Beautiful short video 720p HD.mp4', '2021-09-03 15:31:14', '2021-09-03 15:31:14'),
(3, 102, 1, 1000, 'chicken', 'Chicken', '1630690770.jpg', '', '2021-09-03 15:39:30', '2021-09-03 15:39:30'),
(4, 102, 1, 100, 'sushi', 'sushi discription', '1630755095.jpg', '', '2021-09-04 09:31:35', '2021-09-04 09:31:35'),
(5, 102, 1, 100, 'kinna', 'kinna meat', '1630755264.jpg', '', '2021-09-04 09:34:24', '2021-09-04 09:34:24'),
(6, 102, 3, 100, 'Potato', 'Potato Description', '1630760392.jpg', '', '2021-09-04 10:59:52', '2021-09-04 10:59:52'),
(7, 106, 3, 200, 'dummy box', 'box', '1630870516.png', '', '2021-09-05 17:35:16', '2021-09-05 17:35:16');

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
(25, '2021_09_03_103248_create_media_table', 1),
(46, '2014_10_12_000000_create_users_table', 2),
(47, '2014_10_12_100000_create_password_resets_table', 2),
(48, '2019_08_19_000000_create_failed_jobs_table', 2),
(49, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(50, '2021_08_23_094948_create_chef_profiles_table', 2),
(52, '2021_08_25_193215_create_categories_table', 2),
(53, '2021_08_26_201024_create_subscriptions_table', 2),
(54, '2021_08_30_091346_create_orders_table', 2),
(55, '2021_08_30_105144_create_comments_table', 2),
(56, '2021_08_25_181141_create_meals_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `meal_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `delivered` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`meal_id`, `user_id`, `quantity`, `delivered`, `created_at`, `updated_at`) VALUES
(5, 101, 1, 0, '2021-09-04 11:33:10', '2021-09-04 11:33:10'),
(5, 106, 1, 0, '2021-09-05 17:29:51', '2021-09-05 17:29:51'),
(7, 102, 1, 0, '2021-09-05 17:36:24', '2021-09-05 17:36:24'),
(3, 101, 1, 0, '2021-09-05 18:10:14', '2021-09-05 18:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `chef_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `chef_id`, `created_at`, `updated_at`) VALUES
(1, 101, 102, '2021-09-03 14:44:44', '2021-09-03 14:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `isVIP` tinyint(1) NOT NULL DEFAULT 0,
  `isChef` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `isAdmin`, `isVIP`, `isChef`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(101, 'Sergi', 'sergisamirboules@gmail.com', NULL, 1, 0, 0, '1630669532.jpg', '$2y$10$MggCsS9mUYXxUVyJxQUco.CzW0hCJvO01FPqzq20A9tccVhldbou2', NULL, '2021-09-03 09:38:52', '2021-09-03 09:38:52'),
(102, 'Karim', 'karim@gmail.com', NULL, 0, 1, 1, '1630668744.jpg', '$2y$10$VA2RdDjb9NN9UTT.zvfcq.UNa4YmXtD8/XQeVgUH4/xlbYZq/ATmS', NULL, '2021-09-03 09:38:52', '2021-09-05 17:36:04'),
(103, 'Reda', 'reda@gmail.com', NULL, 0, 1, 1, 'user.png', '$2y$10$VA2RdDjb9NN9UTT.zvfcq.UNa4YmXtD8/XQeVgUH4/xlbYZq/ATmS', NULL, '2021-09-03 09:38:53', '2021-09-03 12:19:21'),
(104, 'Reda', 'reda2@gmail.com', NULL, 0, 0, 0, '1630669532.jpg', '$2y$10$/O2OQqSiEiMN4IC9/Qp2BeW.1l6RyKfabKQzZFOj2zXCcdQjJ7Nri', NULL, '2021-09-03 09:45:33', '2021-09-03 09:45:33'),
(105, 'sandra', 'sandra@gmail.com', NULL, 0, 0, 0, 'user.png', '$2y$10$o.Xr/ujn6GNKVAXgH58FduxipLQi.x5svuJfj0xIug2Rs6HkpWvKK', NULL, '2021-09-03 16:23:16', '2021-09-03 16:23:16'),
(106, 'chef', 'chef@gmail.com', NULL, 0, 0, 0, 'user.png', '$2y$10$bhIjNJ1JKZnDBorkKJ4b5u9NKD3rp7CfLNEEknAdbD94uKFglIUtG', NULL, '2021-09-05 16:51:13', '2021-09-05 17:09:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chef_profiles`
--
ALTER TABLE `chef_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `chef_profiles_user_id_unique` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meals_chef_id_foreign` (`chef_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptions_user_id_foreign` (`user_id`),
  ADD KEY `subscriptions_chef_id_foreign` (`chef_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `chef_profiles`
--
ALTER TABLE `chef_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chef_profiles`
--
ALTER TABLE `chef_profiles`
  ADD CONSTRAINT `chef_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `meals`
--
ALTER TABLE `meals`
  ADD CONSTRAINT `meals_chef_id_foreign` FOREIGN KEY (`chef_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_chef_id_foreign` FOREIGN KEY (`chef_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
