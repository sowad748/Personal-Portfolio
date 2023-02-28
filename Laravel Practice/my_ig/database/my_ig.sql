-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 03:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_ig`
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_15_161524_create_profiles_table', 1),
(6, '2023_01_16_093101_create_posts_table', 1),
(7, '2023_02_19_133512_add_username_to_profiles_table', 2),
(8, '2023_02_21_144215_add_dp_to_profiles_table', 3),
(9, '2023_02_25_125601_add_title_to_users_table', 4),
(10, '2023_02_25_125641_add_description_to_users_table', 4),
(11, '2023_02_25_125700_add_dp_to_users_table', 4),
(12, '2023_02_28_130815_creates_profile_user_pivot_table', 5);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `caption`, `image`, `created_at`, `updated_at`) VALUES
(2, 1, 'Test', '1676476626.jpg', '2023-02-15 09:57:06', '2023-02-15 09:57:06'),
(3, 1, 'Test', '1676476710.jpg', '2023-02-15 09:58:30', '2023-02-15 09:58:30'),
(4, 1, 'Test', '1676478168.jpg', '2023-02-15 10:22:48', '2023-02-15 10:22:48'),
(5, 1, 'Real Post', '1676478328.jpg', '2023-02-15 10:25:28', '2023-02-15 10:25:28'),
(6, 1, 'Real Post', '1676550753.png', '2023-02-16 06:32:33', '2023-02-16 06:32:33'),
(7, 1, 'Last one', '1676550914.png', '2023-02-16 06:35:14', '2023-02-16 06:35:14'),
(10, 2, 'Another one', '1676995180.png', '2023-02-21 09:59:40', '2023-02-21 09:59:40'),
(11, 2, 'Just playing', '1676995211.png', '2023-02-21 10:00:11', '2023-02-21 10:00:11'),
(13, 5, '1st post', '1677084350.jpg', '2023-02-22 10:45:50', '2023-02-22 10:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `title`, `description`, `created_at`, `updated_at`, `username`, `dp`, `user_id`) VALUES
(2, 'Hello title', 'Hello Description', '2023-02-19 06:41:26', '2023-02-19 06:41:26', '', '', 0),
(3, 'Hello title', 'Hello Description', '2023-02-19 06:42:56', '2023-02-19 06:42:56', '', '', 0),
(4, 'Cool title', 'Cool description', '2023-02-19 06:56:38', '2023-02-19 06:56:38', '', '', 0),
(5, 'Cool title', 'Cool description', '2023-02-19 07:02:11', '2023-02-19 07:02:11', '', '', 0),
(6, 'Cool title', 'Cool description', '2023-02-19 07:02:44', '2023-02-19 07:02:44', '', '', 0),
(7, 'Yo', 'Moo', '2023-02-19 07:10:31', '2023-02-19 07:10:31', '', '', 0),
(8, 'adfvb', 'dfv', '2023-02-19 07:11:26', '2023-02-19 07:11:26', '', '', 0),
(9, 'adfvb', 'dfv', '2023-02-19 07:16:15', '2023-02-19 07:16:15', '', '', 0),
(10, 'Shakira', NULL, '2023-02-19 07:16:25', '2023-02-19 07:16:25', '', '', 0),
(11, 'Shakira', 'waka', '2023-02-19 07:16:36', '2023-02-19 07:16:36', '', '', 0),
(12, 'Latest Title', 'Latest Description', '2023-02-19 07:16:56', '2023-02-19 07:16:56', '', '', 0),
(13, 'Latest Title', 'Latest Description', '2023-02-19 07:17:59', '2023-02-19 07:17:59', '', '', 0),
(14, 'Latest Title', 'Latest Description', '2023-02-19 07:18:07', '2023-02-19 07:18:07', '', '', 0),
(15, 'Latest Title', 'Latest Description', '2023-02-19 07:18:13', '2023-02-19 07:18:13', '', '', 0),
(16, 'Latest Title', 'Latest Description', '2023-02-19 07:18:14', '2023-02-19 07:18:14', '', '', 0),
(17, 'Latest Title', 'Latest Description', '2023-02-19 07:18:21', '2023-02-19 07:18:21', '', '', 0),
(18, 'Latest Title', 'Latest Description', '2023-02-19 07:18:35', '2023-02-19 07:18:35', '', '', 0),
(19, 'Latest Title', 'Latest Description', '2023-02-19 07:18:40', '2023-02-19 07:18:40', '', '', 0),
(20, 'Latest Title', 'Latest Description', '2023-02-19 07:18:47', '2023-02-19 07:18:47', '', '', 0),
(21, 'Latest Title', 'Latest Description', '2023-02-19 07:18:52', '2023-02-19 07:18:52', '', '', 0),
(22, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:19:07', '2023-02-19 07:19:07', '', '', 0),
(23, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:23:17', '2023-02-19 07:23:17', '', '', 0),
(24, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:23:38', '2023-02-19 07:23:38', '', '', 0),
(25, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:25:47', '2023-02-19 07:25:47', '', '', 0),
(26, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:26:13', '2023-02-19 07:26:13', '', '', 0),
(27, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:26:33', '2023-02-19 07:26:33', '', '', 0),
(44, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:53:19', '2023-02-19 07:53:19', 'Sowad Lives', '', 0),
(45, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:53:25', '2023-02-19 07:53:25', 'Sowad Lives', '', 0),
(46, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:54:04', '2023-02-19 07:54:04', 'Sowad', '', 0),
(47, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:54:16', '2023-02-19 07:54:16', 'sowadlee_theyoungest', '', 0),
(48, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:54:56', '2023-02-19 07:54:56', 'sowadlee_theyoungest', '', 0),
(49, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:55:01', '2023-02-19 07:55:01', 'sowadlee_theyoungest', '', 0),
(50, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:55:06', '2023-02-19 07:55:06', 'sowadlee_theyoungest', '', 0),
(51, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:55:14', '2023-02-19 07:55:14', 'sowadlee_theyoungest', '', 0),
(52, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:55:26', '2023-02-19 07:55:26', 'sowadlee_theyoungest', '', 0),
(53, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:55:32', '2023-02-19 07:55:32', 'sowadlee_theyoungest', '', 0),
(54, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:55:36', '2023-02-19 07:55:36', 'sowadlee_theyoungest', '', 0),
(55, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:55:39', '2023-02-19 07:55:39', 'sowadlee_theyoungest', '', 0),
(56, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:55:42', '2023-02-19 07:55:42', 'sowadlee_theyoungest', '', 0),
(57, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:55:54', '2023-02-19 07:55:54', 'sowadlee_theyoungest', '', 0),
(58, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:56:00', '2023-02-19 07:56:00', 'sowadlee_theyoungest', '', 0),
(59, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:59:37', '2023-02-19 07:59:37', 'sowadlee_theyoungest', '', 0),
(60, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:59:42', '2023-02-19 07:59:42', 'sowadlee_theyoungest', '', 0),
(61, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:59:43', '2023-02-19 07:59:43', 'sowadlee_theyoungest', '', 0),
(62, 'Latest Title updated', 'Latest Description updated', '2023-02-19 07:59:51', '2023-02-19 07:59:51', 'sowadlee_theyoungest', '', 0),
(63, 'Latest Title updated', 'Latest Description updated', '2023-02-21 08:55:07', '2023-02-21 08:55:07', 'sowadlee_theyoungest', '1676991307.jpg', 0),
(64, 'Latest Title updated', 'Latest Description updated', '2023-02-21 08:55:54', '2023-02-21 08:55:54', 'sowadlee_theyoungest', '1676991354.jpg', 0),
(65, 'Latest Title updated', 'Latest Description updated', '2023-02-21 08:56:04', '2023-02-21 08:56:04', 'sowadlee_theyoungest', '1676991364.jpg', 0),
(66, 'Latest Title updated', 'Latest Description updated', '2023-02-21 08:56:07', '2023-02-21 08:56:07', 'sowadlee_theyoungest', '1676991367.jpg', 0),
(67, 'Latest Title updated', 'Latest Description updated', '2023-02-21 08:57:10', '2023-02-21 08:57:10', 'sowadlee_theyoungest', '1676991430.jpg', 0),
(68, 'Latest Title updated', 'Latest Description updated', '2023-02-21 08:57:21', '2023-02-21 08:57:21', 'sowadlee_theyoungest', '1676991441.jpg', 0),
(69, 'Latest Title updated', 'Latest Description updated', '2023-02-21 08:57:36', '2023-02-21 08:57:36', 'sowadlee_theyoungest', '1676991456.jpg', 0),
(70, 'Latest Title updated', 'Latest Description updated', '2023-02-21 08:57:49', '2023-02-21 08:57:49', 'sowadlee_theyoungest', '1676991469.jpg', 0),
(71, 'My another title', 'Another Description', '2023-02-21 09:53:07', '2023-02-21 09:53:07', 'Another_Sowad', '1676994787.jpg', 0),
(72, 'My another title', 'Another Description', '2023-02-21 09:53:21', '2023-02-21 09:53:21', 'Another_Sowad', '1676994801.jpg', 0),
(73, 'My another title', 'Another Description', '2023-02-21 09:53:35', '2023-02-21 09:53:35', 'Another_Sowad', '1676994815.png', 0),
(74, 'My another title', 'Another Description', '2023-02-21 09:53:46', '2023-02-21 09:53:46', 'Another_Sowad', '1676994826.jpg', 0),
(75, 'My another title', 'Another Description', '2023-02-21 09:53:59', '2023-02-21 09:53:59', 'Another_Sowad', '1676994839.jpg', 0),
(76, 'My another title', 'Another Description', '2023-02-21 09:54:12', '2023-02-21 09:54:12', 'Another_Sowad', '1676994852.png', 0),
(77, 'My another title', 'Another Description', '2023-02-21 09:55:13', '2023-02-21 09:55:13', 'Another_Sowad', '1676994913.jpg', 0),
(78, 'My another title', 'Another Description', '2023-02-21 09:59:21', '2023-02-21 09:59:21', 'Another_Sowad', '1676995161.jpg', 0),
(79, 'My another title', 'Another Description', '2023-02-21 09:59:25', '2023-02-21 09:59:25', 'Another_Sowad', '1676995165.jpg', 0),
(80, 'My another title', 'Another Description', '2023-02-22 10:40:12', '2023-02-22 10:40:12', 'Another_Sowad', '1677084012.png', 0),
(81, 'My another title', 'Another Description', '2023-02-22 10:40:29', '2023-02-22 10:40:29', 'Another_Sowad', '1677084029.png', 0),
(82, 'My another title', 'Another Description', '2023-02-22 10:41:01', '2023-02-22 10:41:01', 'Another_Sowad', '1677084061.jpg', 0),
(83, 'My another title', 'Another Description', '2023-02-22 10:41:09', '2023-02-22 10:41:09', 'Another_Sowad', '1677084069.jpg', 0),
(84, '2nd title', '2nd description', '2023-02-22 10:45:31', '2023-02-22 10:45:31', 'sowadlee_theyoungest', '1677084330.jpg', 0),
(85, '2nd title', '2nd description', '2023-02-22 10:46:18', '2023-02-22 10:46:18', 'sowadlee_theyoungest', '1677084378.jpg', 0),
(86, '2nd title', '2nd description', '2023-02-22 10:46:40', '2023-02-22 10:46:40', 'sowadlee_theyoungest', '1677084400.jpg', 0),
(87, 'My another title', 'Another Description', '2023-02-25 07:18:39', '2023-02-25 07:18:39', 'Another_Sowad', '1677331119.jpg', 0),
(88, 'My another title', 'Another Description', '2023-02-25 07:19:11', '2023-02-25 07:19:11', 'Another_Sowad', '1677331151.jpg', 0),
(89, 'My another title', 'Another Description', '2023-02-25 07:19:56', '2023-02-25 07:19:56', 'Another_Sowad', '1677331196.jpg', 0),
(90, 'Newtitle', 'New description', '2023-02-25 07:30:25', '2023-02-25 07:30:25', 'sowadlee_theyoungest', '1677331825.jpg', 1),
(91, 'Newtitle', 'New description', '2023-02-25 07:30:52', '2023-02-25 07:30:52', 'sowadlee_theyoungest', '1677331852.jpg', 1),
(92, 'Newtitle', 'New description', '2023-02-25 07:34:31', '2023-02-25 07:34:31', 'sowadlee_theyoungest', '1677332071.jpg', 1),
(93, 'Newtitle', 'New description', '2023-02-25 08:02:10', '2023-02-25 08:02:10', 'sowadlee_theyoungest', '1677333730.jpg', 1),
(94, 'Newtitle', 'New description', '2023-02-25 08:02:17', '2023-02-25 08:02:17', 'sowadlee_theyoungest', '1677333737.jpg', 1),
(95, 'Newtitle', 'New description', '2023-02-25 08:02:24', '2023-02-25 08:02:24', 'sowadlee_theyoungest', '1677333744.jpg', 1),
(96, 'Newtitle', 'New description', '2023-02-25 08:02:36', '2023-02-25 08:02:36', 'sowadlee_theyoungest', '1677333756.jpg', 1),
(97, 'Newtitle', 'New description', '2023-02-25 08:02:45', '2023-02-25 08:02:45', 'sowadlee_theyoungest', '1677333765.jpg', 1),
(98, 'Newtitle', 'New description', '2023-02-25 08:02:48', '2023-02-25 08:02:48', 'sowadlee_theyoungest', '1677333768.jpg', 1),
(99, 'Newtitle', 'New description', '2023-02-25 08:03:01', '2023-02-25 08:03:01', 'sowadlee_theyoungest', '1677333781.jpg', 1),
(100, 'Newtitle', 'New description', '2023-02-25 08:03:08', '2023-02-25 08:03:08', 'sowadlee_theyoungest', '1677333788.jpg', 1),
(101, 'Newtitle', 'New description', '2023-02-25 08:03:18', '2023-02-25 08:03:18', 'sowadlee_theyoungest', '1677333798.jpg', 1),
(102, 'Newtitle', 'New description', '2023-02-25 08:03:26', '2023-02-25 08:03:26', 'sowadlee_theyoungest', '1677333806.jpg', 1),
(103, 'Newtitle', 'New description', '2023-02-25 08:03:37', '2023-02-25 08:03:37', 'sowadlee_theyoungest', '1677333817.jpg', 1),
(104, 'Newtitle', 'New description', '2023-02-25 08:03:52', '2023-02-25 08:03:52', 'sowadlee_theyoungest', '1677333832.jpg', 1),
(105, 'Newtitle', 'New description', '2023-02-25 08:03:58', '2023-02-25 08:03:58', 'sowadlee_theyoungest', '1677333838.jpg', 1),
(106, 'My title', 'My description', '2023-02-25 08:16:22', '2023-02-25 08:16:22', 'sowadlee_theyoungest', '1677334582.jpg', 5),
(107, 'My title', 'My description', '2023-02-25 08:16:32', '2023-02-25 08:16:32', 'sowadlee_theyoungest', '1677334592.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `profile_user`
--

CREATE TABLE `profile_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_user`
--

INSERT INTO `profile_user` (`id`, `profile_id`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 107, 1, NULL, NULL),
(12, 105, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `title`, `description`, `dp`) VALUES
(1, 'Admin', 'Another_Sowad', 'admin@admin.com', NULL, '$2y$10$oDwKaC8k.Ym01IiQ4lyEhukVxEOWV8.3CaH1oYGBheRt5P4cNdJma', NULL, '2023-01-22 07:04:33', '2023-02-25 07:12:55', 'My another title', 'Another Description', '1677330775.jpg'),
(5, 'Sowad', 'sowadlee_theyoungest', 'sowrko@gmail.com', NULL, '$2y$10$I2r8BxZe0CGVk9rj3m2cz.Jq1wTBVmH.QYfu7Mc6LEDyqwmG.y0wS', NULL, '2023-02-22 10:44:40', '2023-02-22 10:44:40', '', '', '');

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_index` (`user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_user`
--
ALTER TABLE `profile_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `profile_user`
--
ALTER TABLE `profile_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
