-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 08:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodations`
--

CREATE TABLE `accomodations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accomodation_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_per_night` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accomodations`
--

INSERT INTO `accomodations` (`id`, `destination_id`, `picture`, `accomodation_name`, `price_per_night`, `description`, `created_at`, `updated_at`) VALUES
(2, 2, 'Mount Kilimanjaro National Park view from Kenya-1642525717.jpg', 'Cool Breeze', '900', 'The study was based on institutional, socioeconomic and systems theories. The research problem used a case study. The population\r\nof interest was employees working in Kenya Power Company Limited head office,\r\nNairobi. Purposive sampling was used to pick the primary sample of 55 out of the total\r\npopulation of 110 employees. The study used both primary and secondary data. Primary\r\ndata was collected using semi-structured questionnaire and secondary data from research\r\nproposals, internet, journals and books. The questionnaires correctly filled were coded;\r\nthe data entered into statistical package for social sciences and analyzed based on\r\ndescriptive statistics. Study findings indicated that strategic procurement has a positive\r\nimpact on the performance of public enterprises; such as reduced costs, improvements in\r\nquality of goods and services in the organization. Challenges of implementing strategic\r\nprocurement in public enterprises include changes in technology, employees\' lack of\r\nrequisite skills to undertake strategic procurement, l', '2022-01-18 14:08:37', '2022-01-18 14:08:37'),
(3, 2, 'Mount Kilimanjaro National Park view from Kenya-1642525801.jpg', 'Cool Breeze', '8000', 'The study was based on institutional, socioeconomic and systems theories. The research problem used a case study. The population\r\nof interest was employees working in Kenya Power Company Limited head office,\r\nNairobi. Purposive sampling was used to pick the primary sample of 55 out of the total\r\npopulation of 110 employees. The study used both primary and secondary data. Primary\r\ndata was collected using semi-structured questionnaire and secondary data from research\r\nproposals, internet, journals and books. The questionnaires correctly filled were coded;\r\nthe data entered into statistical package for social sciences and analyzed based on\r\ndescriptive statistics. Study findings indicated that strategic procurement has a positive\r\nimpact on the performance of public enterprises; such as reduced costs, improvements in\r\nquality of goods and services in the organization. Challenges of implementing strategic\r\nprocurement in public enterprises include changes in technology, employees\' lack of\r\nrequisite skills to undertake strategic procurement, l', '2022-01-18 14:10:01', '2022-01-18 14:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `book_accomodations`
--

CREATE TABLE `book_accomodations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `accomodation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `transaction_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_paid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_accomodations`
--

INSERT INTO `book_accomodations` (`id`, `user_id`, `accomodation_id`, `transaction_code`, `total_days`, `amount_paid`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 'qoalsmznd9', '6', '5400', 'pending', '2022-01-18 18:42:20', '2022-01-18 18:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `destination_name`, `destination_category`, `destination_price`, `picture`, `location_address`, `site_description`, `created_at`, `updated_at`) VALUES
(2, 'Mount Kiilimanjaro', 'Game Reserve', '2000', 'Mount Kilimanjaro National Park view from Kenya-1642524282.jpg', 'blishes the long range objectives and overall strategy by which procurement function\r\nfulfills its mission. It entails the transformation of an organization’s mission, goals, and\r\nobjectives into measurable activities to be used to plan, budget and manage the\r\nprocurement function. During the last two decades procurement has undergone profound\r\nchanges. Policy makers, academicians and practitioners alike share the broad view that\r\nprocurement has evolved from a clerical signoff-ridden set of activities to a strategic\r\npublic administrative tool that can enhance efficiency in public organizations. Today,\r\nprocurement is recognized as the most single function that contributes immensely to\r\norganizational performance and accounts for huge proportion of total expenditure in\r\nmany countries. However, despite significant expenditure in resource allocation to\r\nprocurement, there is a growing concern that organizational performance by many public\r\nenterprises in developing countries is becoming a challenge. Poor distribution of\r\nelectricity by KPCL in Kenya for example, can be attributed to ineffective procurement\r\nsystems within the organization. Consequently adoption of strategic procurement as\r\nsuggested by many re', 'blishes the long range objectives and overall strategy by which procurement function\r\nfulfills its mission. It entails the transformation of an organization’s mission, goals, and\r\nobjectives into measurable activities to be used to plan, budget and manage the\r\nprocurement function. During the last two decades procurement has undergone profound\r\nchanges. Policy makers, academicians and practitioners alike share the broad view that\r\nprocurement has evolved from a clerical signoff-ridden set of activities to a strategic\r\npublic administrative tool that can enhance efficiency in public organizations. Today,\r\nprocurement is recognized as the most single function that contributes immensely to\r\norganizational performance and accounts for huge proportion of total expenditure in\r\nmany countries. However, despite significant expenditure in resource allocation to\r\nprocurement, there is a growing concern that organizational performance by many public\r\nenterprises in developing countries is becoming a challenge. Poor distribution of\r\nelectricity by KPCL in Kenya for example, can be attributed to ineffective procurement\r\nsystems within the organization. Consequently adoption of strategic procurement as\r\nsuggested by many re', '2022-01-18 13:44:42', '2022-01-18 13:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `destination_images`
--

CREATE TABLE `destination_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destination_images`
--

INSERT INTO `destination_images` (`id`, `destination_id`, `picture`, `created_at`, `updated_at`) VALUES
(3, 2, 'Mount Kilimanjaro National Park view from Kenya-1642524310.jpg', '2022-01-18 13:45:10', '2022-01-18 13:45:10'),
(4, 2, 'Mount Kilimanjaro National Park view from Kenya-1642524324.jpg', '2022-01-18 13:45:24', '2022-01-18 13:45:24');

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
(5, '2021_12_12_071919_laratrust_setup_tables', 1),
(7, '2022_01_16_094239_create_destinations_table', 2),
(8, '2022_01_16_111309_create_destination_images_table', 3),
(9, '2022_01_18_164726_create_accomodations_table', 4),
(10, '2022_01_18_183006_create_tourists_table', 5),
(11, '2022_01_18_205141_create_book_accomodations_table', 6),
(13, '2022_01_18_215429_create_tour_packages_table', 7),
(15, '2022_01_18_223711_create_tourist_trip_plans_table', 8),
(17, '2022_01_19_221359_create_package_bookings_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `package_bookings`
--

CREATE TABLE `package_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `accomodation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `destination_id` bigint(20) UNSIGNED DEFAULT NULL,
  `package_id` bigint(20) UNSIGNED DEFAULT NULL,
  `transaction_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_bookings`
--

INSERT INTO `package_bookings` (`id`, `user_id`, `accomodation_id`, `destination_id`, `package_id`, `transaction_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 2, 1, 'pokjmnbhoo', 'confirmed', '2022-01-19 19:34:30', '2022-01-19 20:02:21');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2022-01-15 19:02:45', '2022-01-15 19:02:45'),
(2, 'users-read', 'Read Users', 'Read Users', '2022-01-15 19:02:45', '2022-01-15 19:02:45'),
(3, 'users-update', 'Update Users', 'Update Users', '2022-01-15 19:02:45', '2022-01-15 19:02:45'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-01-15 19:02:45', '2022-01-15 19:02:45'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-01-15 19:02:45', '2022-01-15 19:02:45'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-01-15 19:02:45', '2022-01-15 19:02:45'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-01-15 19:02:45', '2022-01-15 19:02:45'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-01-15 19:02:45', '2022-01-15 19:02:45'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2022-01-15 19:02:46', '2022-01-15 19:02:46'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2022-01-15 19:02:46', '2022-01-15 19:02:46'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2022-01-15 19:02:49', '2022-01-15 19:02:49'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2022-01-15 19:02:49', '2022-01-15 19:02:49'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2022-01-15 19:02:49', '2022-01-15 19:02:49'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2022-01-15 19:02:49', '2022-01-15 19:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 4),
(12, 4),
(13, 4),
(14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2022-01-15 19:02:45', '2022-01-15 19:02:45'),
(2, 'administrator', 'Administrator', 'Administrator', '2022-01-15 19:02:47', '2022-01-15 19:02:47'),
(3, 'tourist', 'Tourist', 'Tourist', '2022-01-15 19:02:48', '2022-01-15 19:02:48'),
(4, 'role_name', 'Role Name', 'Role Name', '2022-01-15 19:02:49', '2022-01-15 19:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`, `team_id`) VALUES
(1, 1, 'App\\Models\\User', NULL),
(2, 2, 'App\\Models\\User', NULL),
(3, 3, 'App\\Models\\User', NULL),
(4, 4, 'App\\Models\\User', NULL),
(3, 5, 'App\\Models\\User', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tourists`
--

CREATE TABLE `tourists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tourists`
--

INSERT INTO `tourists` (`id`, `user_id`, `phone_number`, `id_number`, `home_place`, `created_at`, `updated_at`) VALUES
(1, 5, '0722992288', '87221123', 'this is my place', '2022-01-18 16:18:28', '2022-01-18 16:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `tourist_trip_plans`
--

CREATE TABLE `tourist_trip_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `accomodation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `destination_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accomodation_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_paid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tourist_trip_plans`
--

INSERT INTO `tourist_trip_plans` (`id`, `user_id`, `accomodation_id`, `destination_id`, `total_days`, `driver_fee`, `accomodation_fee`, `amount_paid`, `transaction_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 2, '5', '2500', '2', '9000', 'pokjmnbhgt', 'confirmed', '2022-01-19 16:12:49', '2022-01-19 17:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `tour_packages`
--

CREATE TABLE `tour_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destination_id` bigint(20) UNSIGNED DEFAULT NULL,
  `accomodation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_paid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_packages`
--

INSERT INTO `tour_packages` (`id`, `destination_id`, `accomodation_id`, `package_name`, `picture`, `duration`, `amount_paid`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 2, '4 day trip', 'Mount Kilimanjaro National Park view from Kenya-1642627477.jpg', '1', '6000', 'wertyuidfghjkldfghjojooooooooooooooooooo', '2022-01-19 18:24:38', '2022-01-19 18:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `picture`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrator', 'superadministrator@app.com', '', NULL, '$2y$10$ZKUJHF1Aa74ZWzvbuDp7a.dPKGPfahRi4hwbxKmn8aVlVxCffovPG', NULL, '2022-01-15 19:02:47', '2022-01-15 19:02:47'),
(2, 'Administrator', 'administrator@app.com', '', NULL, '$2y$10$.e1D9xFnzjCLCAFh9x1qpe0mgNEFDJBBfnNWN/chzNSrqv4.o53oK', NULL, '2022-01-15 19:02:48', '2022-01-15 19:02:48'),
(3, 'Tourist', 'tourist@app.com', '', NULL, '$2y$10$ip0U032ZEHNu3JX8a0hS.egxW4aLt0hJzvxm03eczr.80Zz.oyrXe', NULL, '2022-01-15 19:02:48', '2022-01-15 19:02:48'),
(4, 'Role Name', 'role_name@app.com', '', NULL, '$2y$10$DLMgXv7OuDJqIbEZu2vCvO/PFtFRYwZOu1NrKaJogsY7Lnq3vgFcm', NULL, '2022-01-15 19:02:49', '2022-01-15 19:02:49'),
(5, 'ecvans s', 'vnsmusyoki@gmail.com', '', NULL, '$2y$10$ImhGKet/WsI2cw3W4.n9q.AjMNTwLm3JO9uSxsU0unScFIqPW58D6', NULL, '2022-01-18 15:48:28', '2022-01-18 15:48:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodations`
--
ALTER TABLE `accomodations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accomodations_destination_id_foreign` (`destination_id`);

--
-- Indexes for table `book_accomodations`
--
ALTER TABLE `book_accomodations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_accomodations_user_id_foreign` (`user_id`),
  ADD KEY `book_accomodations_accomodation_id_foreign` (`accomodation_id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination_images`
--
ALTER TABLE `destination_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_images_destination_id_foreign` (`destination_id`);

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
-- Indexes for table `package_bookings`
--
ALTER TABLE `package_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_bookings_user_id_foreign` (`user_id`),
  ADD KEY `package_bookings_accomodation_id_foreign` (`accomodation_id`),
  ADD KEY `package_bookings_destination_id_foreign` (`destination_id`),
  ADD KEY `package_bookings_package_id_foreign` (`package_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD UNIQUE KEY `permission_user_user_id_permission_id_user_type_team_id_unique` (`user_id`,`permission_id`,`user_type`,`team_id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD UNIQUE KEY `role_user_user_id_role_id_user_type_team_id_unique` (`user_id`,`role_id`,`user_type`,`team_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_name_unique` (`name`);

--
-- Indexes for table `tourists`
--
ALTER TABLE `tourists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tourists_user_id_foreign` (`user_id`);

--
-- Indexes for table `tourist_trip_plans`
--
ALTER TABLE `tourist_trip_plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tourist_trip_plans_user_id_foreign` (`user_id`),
  ADD KEY `tourist_trip_plans_accomodation_id_foreign` (`accomodation_id`),
  ADD KEY `tourist_trip_plans_destination_id_foreign` (`destination_id`);

--
-- Indexes for table `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_packages_destination_id_foreign` (`destination_id`),
  ADD KEY `tour_packages_accomodation_id_foreign` (`accomodation_id`);

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
-- AUTO_INCREMENT for table `accomodations`
--
ALTER TABLE `accomodations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book_accomodations`
--
ALTER TABLE `book_accomodations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destination_images`
--
ALTER TABLE `destination_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `package_bookings`
--
ALTER TABLE `package_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tourists`
--
ALTER TABLE `tourists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tourist_trip_plans`
--
ALTER TABLE `tourist_trip_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tour_packages`
--
ALTER TABLE `tour_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accomodations`
--
ALTER TABLE `accomodations`
  ADD CONSTRAINT `accomodations_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_accomodations`
--
ALTER TABLE `book_accomodations`
  ADD CONSTRAINT `book_accomodations_accomodation_id_foreign` FOREIGN KEY (`accomodation_id`) REFERENCES `accomodations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_accomodations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `destination_images`
--
ALTER TABLE `destination_images`
  ADD CONSTRAINT `destination_images_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `package_bookings`
--
ALTER TABLE `package_bookings`
  ADD CONSTRAINT `package_bookings_accomodation_id_foreign` FOREIGN KEY (`accomodation_id`) REFERENCES `accomodations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `package_bookings_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `package_bookings_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `tour_packages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `package_bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tourists`
--
ALTER TABLE `tourists`
  ADD CONSTRAINT `tourists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tourist_trip_plans`
--
ALTER TABLE `tourist_trip_plans`
  ADD CONSTRAINT `tourist_trip_plans_accomodation_id_foreign` FOREIGN KEY (`accomodation_id`) REFERENCES `accomodations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tourist_trip_plans_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tourist_trip_plans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD CONSTRAINT `tour_packages_accomodation_id_foreign` FOREIGN KEY (`accomodation_id`) REFERENCES `accomodations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tour_packages_destination_id_foreign` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
