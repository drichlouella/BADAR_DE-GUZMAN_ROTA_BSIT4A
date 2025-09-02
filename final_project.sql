-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2025 at 03:44 PM
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
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-a@l.com|127.0.0.1', 'i:1;', 1756810927),
('laravel-cache-a@l.com|127.0.0.1:timer', 'i:1756810927;', 1756810927),
('laravel-cache-conrodingel@gmail.com|127.0.0.1', 'i:1;', 1756810912),
('laravel-cache-conrodingel@gmail.com|127.0.0.1:timer', 'i:1756810911;', 1756810911),
('laravel-cache-conrodingeliodeguzman@email.com|127.0.0.1', 'i:2;', 1756810704),
('laravel-cache-conrodingeliodeguzman@email.com|127.0.0.1:timer', 'i:1756810704;', 1756810704),
('laravel-cache-conrodingeliodeguzman@gmail.com|127.0.0.1', 'i:2;', 1756810655),
('laravel-cache-conrodingeliodeguzman@gmail.com|127.0.0.1:timer', 'i:1756810654;', 1756810655);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
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
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
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
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_09_01_033948_create_products_table', 2),
(5, '2025_09_01_035113_add_is_admin_to_users_table', 3),
(7, '2025_09_01_082954_add_user_id_to_products_table', 4),
(8, '2025_09_01_093743_add_role_to_users_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `display` varchar(255) NOT NULL,
  `weight` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `display` varchar(255) NOT NULL,
  `weight` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `model`, `quantity`, `display`, `weight`, `created_at`, `updated_at`, `user_id`) VALUES
(3, 'Samsung', 'Galaxy S24', 20, '6.2-inch Dynamic AMOLED', 168, '2025-09-01 01:10:51', '2025-09-01 01:10:51', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6G4aV2nqUmgUmUJmxniq2uQjpoeU0yQbVdSBXNHm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidTFVRktuSGo1b1o4akV6VDdXWU15SHRETUpBS1Z0VlcwdVFyWlV1YSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1756820609);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(2, 'Rhea Badar', 'supplier', 'rheabadar@gmail.com', NULL, '$2y$12$RdFmUOtF8XhhAhc7MAyuMuIJg6MIpC9bDsGXlE.TGBIwgfRVP1QGu', NULL, '2025-08-31 22:35:23', '2025-08-31 22:35:23', 0),
(3, 'Vera Krys', 'supplier', 'vk@gmail.com', NULL, '$2y$12$q.nT7xUq69SV4Aa8lwk.WuHXUTK4dzBGIYV8eiHYQznX0YBIcHqYy', NULL, '2025-08-31 23:51:48', '2025-08-31 23:51:48', 0),
(6, 'Conrod Ingelio', 'supplier', 'ci@gmail.com', NULL, '$2y$12$jqvOE2z1PapXPBm6z9KWeuqwYa54zcCwcAKiYfyomcYOgb2cTcuum', NULL, '2025-09-01 01:50:24', '2025-09-01 01:50:24', 0),
(7, 'Sky', 'supplier', 'sky@gmail.com', NULL, '$2y$12$M17WWUYwdvlHt1tWgBfNdeWmzVtdiBGdaIKwL8rioMgf6q3E9FIZW', NULL, '2025-09-01 01:53:09', '2025-09-01 01:53:09', 0),
(8, 'Julifil', 'supplier', 'jf@gmail.com', NULL, '$2y$12$gaCQnEcnl1oXg7TK8g4D7.Q6/ky8qxKVDrzVbhnDX9A76CFpysf3q', NULL, '2025-09-01 01:54:29', '2025-09-01 01:54:29', 0),
(9, 'melo', 'supplier', 'melo@gmail.com', NULL, '$2y$12$fQ06PPppfhTDaga8ATm.r.4.WQljxnTxII7jXOdFoiRhQUBimTzxu', NULL, '2025-09-01 01:56:02', '2025-09-01 01:56:02', 0),
(10, 'Mia', 'admin', 'mia@gmail.com', NULL, '$2y$12$dEVil/bc2y346W0OXKUsP.s6ywzSjAswU/VByGZAD5hPI8XmkI97e', NULL, '2025-09-01 19:38:53', '2025-09-01 19:38:53', 0),
(11, 'Sandy', 'supplier', 'san@gmail.com', NULL, '$2y$12$bLtExowwpoi.NVpXnjBADuB5WyfRGBNB3FXKj9E1LkWsNsPy4C1lm', NULL, '2025-09-01 19:58:09', '2025-09-01 19:58:09', 0),
(12, 'afdaf', 'supplier', 'afaf@gmail.com', NULL, '$2y$12$FY2t338o6B1Iz0rC2AMzdufY8ytYclHyO2Ju9MnuAAImZ5duHgqci', NULL, '2025-09-01 20:21:58', '2025-09-01 20:21:58', 0),
(13, 'De Guzman, Conrod Ingelio R.', 'supplier', 'a@gmail.com', NULL, '$2y$12$SIr2kBkEuhX63k6ddEUpdO.grQCqjE5Hj7842aPHBOwrnf3einZvC', NULL, '2025-09-02 02:59:22', '2025-09-02 02:59:22', 0),
(14, 'De Guman, Conrod Ingelio R.', 'supplier', 'a@b.com', NULL, '$2y$12$MKQh83whrqcTDZDkoeaVpOa8m327zlAPJ8hz.F3pNZk6.8FqV4Vo2', NULL, '2025-09-02 03:00:17', '2025-09-02 03:00:17', 0),
(15, 'De Guman, Conrod Ingelio R.', 'supplier', 'a@c.com', NULL, '$2y$12$4gV6PWe6QRP4xFlgQtiPXeST0yIMakj2izBmRlEhZRMLy0TSRTZOK', NULL, '2025-09-02 03:04:11', '2025-09-02 03:04:11', 0),
(16, 'De Guman, Conrod Ingelio R.', 'supplier', 'acd@a.com', NULL, '$2y$12$ikDJu6e850t19uRD1VtweegqRD2yU0RlSCpKfJzu4oLK9n6IxO.Wq', NULL, '2025-09-02 03:08:14', '2025-09-02 03:08:14', 0),
(17, 'Conrod', 'supplier', 'c@b.com', NULL, '$2y$12$2W/MF06k1SfpBqCRkpBqGuvrWEJjfp9EC3NvNIGbJ0eI.mBmTFnf2', NULL, '2025-09-02 03:09:44', '2025-09-02 03:09:44', 0),
(18, 'Troy', 'supplier', 'troy@gmail.com', NULL, '$2y$12$zuny7UeiycjsbQ0/NOu1D.Hq5UpG3Ra23.HNI40E8GKH6XHfT4XSu', NULL, '2025-09-02 03:13:09', '2025-09-02 03:13:09', 0),
(19, 'conrody', 'supplier', 'abcdef@a.com', NULL, '$2y$12$2sHYy7XSNOsYeIg2RRWc2OMpGwpqI3rXkt/.J83paiqfdTI96irr6', NULL, '2025-09-02 03:18:28', '2025-09-02 03:18:28', 0),
(20, 'Deguzman', 'supplier', '1@g.com', NULL, '$2y$12$jujiX5mbHK2SAnp8uDpGkuzbb6/1RRQiqhYJu1E1Ex4i5LW2idRTO', NULL, '2025-09-02 03:24:24', '2025-09-02 03:24:24', 0),
(21, 'De Guman, Conrod Ingelio R.', 'supplier', '12@gmail.com', NULL, '$2y$12$jFpgKBGqXFN08tikNb5dk.nQwM8sUXZ4.f7Ik5/iOQjf1.0jfZYpC', NULL, '2025-09-02 03:26:11', '2025-09-02 03:26:11', 0),
(22, 'Fr', 'supplier', 'ace@gmail.c', NULL, '$2y$12$wCzXCSOT.KhQGs9iYmRB0OntWSiEDsJeDRLGlUXxRpgAnA44UU5uO', NULL, '2025-09-02 03:27:38', '2025-09-02 03:27:38', 0),
(23, 'De Guman, Conrod Ingelio R.', 'supplier', 'acorn@gmail.com', NULL, '$2y$12$FwPukRO/1XktTRzLwI1yz.CRGlOaXcd.OplBbw1qPS4h9QakzHz3i', NULL, '2025-09-02 03:29:40', '2025-09-02 03:29:40', 0),
(24, 'DeG', 'supplier', 'laravel@gmail.com', NULL, '$2y$12$snb1DLlPTJD1WNJ4UvXmZ.nqdpBdhL2cl5vvFXWm9jnVtRdgvWK76', NULL, '2025-09-02 03:43:49', '2025-09-02 03:43:49', 1),
(25, 'HollowBlocks', 'supplier', 'hollow@gmail.com', NULL, '$2y$12$jD.ePi19lC9iUhLeLuZY7.AoPcTHCrNHc6G3eTJL5FsqQgtCu1l5C', NULL, '2025-09-02 03:47:37', '2025-09-02 03:47:37', 0),
(26, 'Assignment', 'supplier', 'assign@gmail.com', NULL, '$2y$12$94/tff/D6KhawInen/aBB.hj0dsmjMLwDAPssISEZ2M8Bzat6MMdC', NULL, '2025-09-02 03:55:04', '2025-09-02 03:55:04', 1),
(27, 'flood', 'supplier', 'floodcontrol@gmail.com', NULL, '$2y$12$ImeVeB3Ed/FJAVkjijQqBe1iq/Ek8fpZbyLYMF.4zKzOAL3/9eo8K', NULL, '2025-09-02 03:58:32', '2025-09-02 03:58:32', 1),
(28, 'conroding', 'admin', 'conrod@g.com', NULL, '$2y$12$0Zk5lYUf1F9HApJQ.tXB.OGHfN/ytdNVHD/hoCbKP.O4HxH2.78x6', NULL, '2025-09-02 04:23:23', '2025-09-02 04:23:23', 0),
(29, 'hi', 'supplier', 'hi@a.com', NULL, '$2y$12$MN1/gtqsd14xuXPS9kdhq.ltOu9aabDrwPe710zfQnkte/PdFeUhS', NULL, '2025-09-02 05:07:05', '2025-09-02 05:07:05', 0),
(30, 'De Gzuman, Conrod Ingelio R.', 'supplier', 'a@ca.com', NULL, '$2y$12$2V91jc4c2e7sjOTwtlpM1eAIeWuO0pbHxvh0/xXcB/MU2Quh1Kyoy', NULL, '2025-09-02 05:20:40', '2025-09-02 05:20:40', 0),
(31, 'De Guman, Conrod Ingelio R.', 'admin', 'avc@a.com', NULL, '$2y$12$bi3RFFG0iXA0W/x.0xOIgOtAPgQRhkqHfxuKjj95WDiK.j16YSvCC', NULL, '2025-09-02 05:21:23', '2025-09-02 05:21:23', 0),
(32, 'abc', 'supplier', 'aw@g.com', NULL, '$2y$12$krFsIZJpdRZVlaDeXD7.Vu6tQlrLlym3rmGT9/WqWDQEgeaxAYqvW', NULL, '2025-09-02 05:43:10', '2025-09-02 05:43:10', 0);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
