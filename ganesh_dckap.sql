-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 10:20 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ganesh_dckap`
--

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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_uploadby` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newfilename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_uploadby`, `file_extension`, `file_type`, `file_name`, `file_size`, `newfilename`, `created_at`, `updated_at`) VALUES
(1, 'ganeshtest', 'jpg', 'image/jpeg', 'VWR_BDH.jpg', '131090', '1618061161_VWR_BDH.jpg', NULL, NULL),
(6, 'test testganesh', 'png', 'image/png', 'TeknolabSorbent.png', '75655', '1618067201_TeknolabSorbent.png', NULL, NULL),
(7, 'aadhya test', 'pdf', 'application/pdf', 'Texas_Scientific_4C.pdf', '113788', '1618071306_Texas_Scientific_4C.pdf', NULL, NULL),
(8, 'shyam', 'jpg', 'image/jpeg', 'Texas_Scientific_4C.JPG', '66105', '1618072496_Texas_Scientific_4C.JPG', NULL, NULL),
(9, 'test testganesh', 'jpg', 'image/jpeg', 'Spectro Ametek.jpg', '16056', '1618115102_Spectro Ametek.jpg', NULL, NULL),
(10, 'test testganesh', 'png', 'image/png', 'Ohio Lumex.png', '11252', '1618115165_Ohio Lumex.png', NULL, NULL),
(11, 'test testganesh', 'png', 'image/png', 'iv.PNG', '18098', '1618115556_iv.PNG', NULL, NULL),
(12, 'test testganesh', 'png', 'image/png', 'Ohio Lumex.png', '11252', '1618117130_Ohio Lumex.png', NULL, NULL),
(13, 'test testganesh', 'png', 'image/png', 'iv.PNG', '18098', '1618134433_iv.PNG', NULL, NULL),
(14, 'test testganesh', 'png', 'image/png', 'iv.PNG', '18098', '1618134458_iv.PNG', NULL, NULL),
(15, 'test testganesh', 'png', 'image/png', 'iv.PNG', '18098', '1618134492_iv.PNG', NULL, NULL),
(16, 'test testganesh', 'jpg', 'image/jpeg', 'Texas_Scientific_4C.JPG', '66105', '1618135826_Texas_Scientific_4C.JPG', NULL, NULL),
(17, 'test testganesh', 'jpg', 'image/jpeg', 'VWR_BDH.jpg', '131090', '1618135860_VWR_BDH.jpg', NULL, NULL),
(18, 'test testganesh', 'png', 'image/png', 'Ohio Lumex.png', '11252', '1618135945_Ohio Lumex.png', NULL, NULL),
(19, 'ganeshtest', 'jpg', 'image/jpeg', 'Texas_Scientific_4C.JPG', '66105', '1618136018_Texas_Scientific_4C.JPG', NULL, NULL),
(20, 'ganeshtest', 'png', 'image/png', 'iv.PNG', '18098', '1618136095_iv.PNG', NULL, NULL),
(21, 'ganeshtest', 'jpg', 'image/jpeg', 'VWR_BDH.jpg', '131090', '1618136897_VWR_BDH.jpg', NULL, NULL),
(22, 'ganeshtest', 'jpg', 'image/jpeg', 'VWR_BDH.jpg', '131090', '1618136912_VWR_BDH.jpg', NULL, NULL),
(23, 'ganeshtest', 'png', 'image/png', 'iv.PNG', '18098', '1618137000_iv.PNG', NULL, NULL),
(24, 'ganeshtest', 'png', 'image/png', 'iv.PNG', '18098', '1618137013_iv.PNG', NULL, NULL),
(25, 'aaa bbb', 'jpg', 'image/jpeg', 'VWR_BDH.jpg', '131090', '1618139585_VWR_BDH.jpg', NULL, NULL),
(26, 'aaa bbb', 'jpg', 'image/jpeg', 'VWR_BDH.jpg', '131090', '1618139607_VWR_BDH.jpg', NULL, NULL),
(27, 'aaa bbb', 'png', 'image/png', 'TeknolabSorbent.png', '75655', '1618139656_TeknolabSorbent.png', NULL, NULL),
(28, 'aaa bbb', 'png', 'image/png', 'Ohio Lumex.png', '11252', '1618139728_Ohio Lumex.png', NULL, NULL),
(29, 'ganeshkumar', 'jpg', 'image/jpeg', 'Texas_Scientific_4C.JPG', '66105', '1618147866_Texas_Scientific_4C.JPG', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_10_075411_create_registers_table', 2),
(5, '2021_04_10_125835_create_files_table', 3);

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
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'test testganesh', 'test@gmail.com', '$2y$10$g3ve9YmM34CRjM0xSNo4seDeDnH/97XDfe6TLCoAy4cnCB2HDwIpS', '2021-04-10 03:31:45', '2021-04-10 03:31:45'),
(8, 'ganeshtest', 'ganeshtest@gmail.com', '$2y$10$x3S96jFVwruPLQwvk4p9IuG8HT/NDTZ2XZsBoFRsX83BYLpWqsyQa', '2021-04-10 04:29:45', '2021-04-10 04:29:45'),
(9, 'shyam', 'shyam@gmail.com', '$2y$10$LokDfz8xaIoOzJV1rsR9r.Co/KJfB/BOy2i2xSxbj8t.ynPn3kkFK', '2021-04-10 09:50:03', '2021-04-10 09:50:03'),
(11, 'abc', 'abc@gmail.com', '$2y$10$wmIb9ooB92Gw8eooZzEeSOdlYxz0A9YIB.Iu.bjxzhJGfcKdvcqw.', '2021-04-10 10:40:38', '2021-04-10 10:40:38'),
(12, 'aadhya test', 'add@gmail.com', '$2y$10$TEDJJnFLrHgaWWNZ7NLMueAmEavnYroRVL8pVncrZPqS1FuNgEj4.', '2021-04-10 10:44:35', '2021-04-10 10:44:35'),
(13, 'user1', 'user@gmail.com', '$2y$10$HGkhEM8ljyXR5Fi/TP6rGOc5UCDfHj2t59Hu6DkWaZL8i/ii7TtU6', '2021-04-10 10:49:20', '2021-04-10 10:49:20'),
(14, 'aadhya aaaa', 'add@gmail.com', '$2y$10$XnTkm.Qlxlh4dcJOYKOLneNJFj9nG70D7UvueCKdqd.2tNH8OfTMi', '2021-04-10 10:50:17', '2021-04-10 10:50:17'),
(15, 'test2', 'test2@gmail.com', '$2y$10$VKJcuJpfHiV81EgM9OhEl.fZBYZwl54bOIz3SRNJWFULLii7Dbx3W', '2021-04-10 23:30:44', '2021-04-10 23:30:44'),
(16, 'aaa bbb', 'aaa@gmail.com', '$2y$10$7KuMrWN1dYREGreYzdI7me3tR84sDXD7cENpId3hdBx6pq/iTjUG6', '2021-04-11 05:42:00', '2021-04-11 05:42:00'),
(17, 'ganeshkumar', 'ganesh.php0608@gmail.com', '$2y$10$TzegVE21Vu.ABi/hXjwth.HrGeaq70x.65KJ5txO0c9VgAPwUFGW2', '2021-04-11 08:00:07', '2021-04-11 08:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
