-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 12:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manobeesproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `education_qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `firstname`, `lastname`, `date_of_birth`, `education_qualification`, `address`, `email`, `phone`, `photo`, `resume`, `created_at`, `updated_at`) VALUES
(2, '100', 'MANIKANDAN', 'User', '2023-10-30', 'CSE', 'VVTi Pigments Pvt Ltd. A-81,Sipcot Industrial Complex, South Veerapandiapuram PO', 'manikandan.infob@gmail.com', '9790421777', NULL, NULL, '2023-11-25 02:40:05', '2023-11-25 02:40:05'),
(3, '1001', 'MANIKANDAN', 'Test', '2023-11-02', 'mn', 'hfhdgdg', 'manikandan@gmail.com', '9790421777', 'photos/gT7ITvUk3bThKjy7vWVZ059pxmxfVptASzgtVb0x.jpg', 'resumes/g0RL34GCLmdTwzJDsjn6Y6xxlYFa3IzshrMCmwuL.pdf', '2023-11-25 03:16:23', '2023-11-25 03:16:23'),
(9, '1004', 'MANIKANDAN', 'User', '2023-10-30', 'CSE', 'VVTi Pigments Pvt Ltd. A-81,Sipcot Industrial Complex, South Veerapandiapuram PO', 'manikandainfob@gmail.com', '9790421777', NULL, NULL, '2023-11-25 02:40:05', '2023-11-25 02:40:05'),
(11, '1005', 'MANIKANDAN', 'User', '2023-10-30', 'CSE', 'VVTi Pigments Pvt Ltd. A-81,Sipcot Industrial Complex, South Veerapandiapuram PO', 'maniandainfob@gmail.com', '9790421777', NULL, NULL, '2023-11-25 02:40:05', '2023-11-25 02:40:05'),
(12, '1006', 'MANIKANDAN', 'User', '2023-10-30', 'CSE', 'VVTi Pigments Pvt Ltd. A-81,Sipcot Industrial Complex, South Veerapandiapuram PO', 'manikandainfb@gmail.com', '9790421777', NULL, NULL, '2023-11-25 02:40:05', '2023-11-25 02:40:05'),
(13, '1007', 'MANIKANDAN', 'User', '2023-10-30', 'CSE', 'VVTi Pigments Pvt Ltd. A-81,Sipcot Industrial Complex, South Veerapandiapuram PO', 'manikandainfo@gmail.com', '9790421777', NULL, NULL, '2023-11-25 02:40:05', '2023-11-25 02:40:05'),
(14, '1008', 'MANIKANDAN', 'User', '2023-10-30', 'CSE', 'VVTi Pigments Pvt Ltd. A-81,Sipcot Industrial Complex, South Veerapandiapuram PO', 'manikandaob@gmail.com', '9790421777', NULL, NULL, '2023-11-25 02:40:05', '2023-11-25 02:40:05'),
(15, '1009', 'MANIKANDAN', 'User', '2023-10-30', 'CSE', 'VVTi Pigments Pvt Ltd. A-81,Sipcot Industrial Complex, South Veerapandiapuram PO', 'maniandainfob@gmal.com', '9790421777', NULL, NULL, '2023-11-25 02:40:05', '2023-11-25 02:40:05'),
(16, '1010', 'MANIKANDAN', 'User', '2023-10-30', 'CSE', 'VVTi Pigments Pvt Ltd. A-81,Sipcot Industrial Complex, South Veerapandiapuram PO', 'maniandainfob@gmil.com', '9790421777', NULL, NULL, '2023-11-25 02:40:05', '2023-11-25 02:40:05'),
(17, '1011', 'MANIKANDAN', 'User', '2023-10-30', 'CSE', 'VVTi Pigments Pvt Ltd. A-81,Sipcot Industrial Complex, South Veerapandiapuram PO', 'maniandainfob@gmai.com', '9790421777', NULL, NULL, '2023-11-25 02:40:05', '2023-11-25 02:40:05'),
(21, '1012', 'MANIKANDAN', 'User', '2023-10-30', 'CSE', 'VVTi Pigments Pvt Ltd. A-81,Sipcot Industrial Complex, South Veerapandiapuram PO', 'maniaainfob@gmai.com', '9790421777', NULL, NULL, '2023-11-25 02:40:05', '2023-11-25 02:40:05');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_25_065851_create_employees_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'CreativeBess', 'bees@gmail.com', NULL, '$2y$12$509g45tjzIlKyZzwIFwqz.YQnw63sb/5nCypVhHN0Ysp9WFRQ.6Fm', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_employee_id_unique` (`employee_id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
