-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2021 at 10:06 AM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housecatalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `house_packages_id` int NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `house_packages_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/gallery/tptJSbEHES1QznNAFXK8XfWVcKJDN5gvaPKHH3fF.png', NULL, '2021-04-10 11:11:21', '2021-04-10 14:10:02'),
(2, 1, 'assets/gallery/cZLEZM7xTIZeo6eXMiku9a8hJpWhYl7UqTlr7yUB.png', NULL, '2021-04-10 13:02:13', '2021-04-10 14:10:02'),
(3, 2, 'assets/gallery/IJUC54ueKXcTVBtOOE294eAflGMkp44X2LqrI97x.png', NULL, '2021-04-10 14:35:37', '2021-04-10 14:35:37'),
(4, 6, 'assets/gallery/g8htOCGMEOfbKxWJ3B56dDoQOfMJudU0VipGktXl.png', NULL, '2021-04-10 14:57:52', '2021-04-10 14:57:52'),
(5, 5, 'assets/gallery/5WgrzRHI3yyUSSGSSP6jNhr0sL7FxY5i6ZkyhDc4.png', NULL, '2021-04-10 15:00:17', '2021-04-10 15:00:17'),
(6, 4, 'assets/gallery/Apd7r2QpcHeRNYVZpkfiB9YcDEAf7iEMbEP6gB5t.png', NULL, '2021-04-10 15:03:44', '2021-04-10 15:03:44'),
(7, 3, 'assets/gallery/tD5zHpamX0drx9xO3UlA4LY12zN3vAeBWkAC34zE.png', NULL, '2021-04-10 15:04:43', '2021-04-10 15:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `house_packages`
--

CREATE TABLE `house_packages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedrooms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathups` int NOT NULL,
  `doors` int NOT NULL,
  `living` int NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `building_area` int NOT NULL,
  `surface_area` int NOT NULL,
  `total_units` int NOT NULL,
  `remain_units` int NOT NULL,
  `project_facilities` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `point_of_interest` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `supporting_facilities` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lowest_price` int NOT NULL,
  `highest_price` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `house_packages`
--

INSERT INTO `house_packages` (`id`, `title`, `slug`, `location`, `about`, `maps`, `bedrooms`, `bathups`, `doors`, `living`, `tipe`, `building_area`, `surface_area`, `total_units`, `remain_units`, `project_facilities`, `point_of_interest`, `supporting_facilities`, `name_person`, `no_hp`, `lowest_price`, `highest_price`, `deleted_at`, `created_at`, `updated_at`, `cities`) VALUES
(1, 'Citraland BSB City', 'citraland-bsb-city', 'Kelurahan Pesantren, Kecamatan Mijen, Kota Semarang, Provinsi Jawa Tengah', 'Citraland BSB City didesain untuk menjadi hunian mewah dan modern dikembangkan oleh Ciputra Grup dengan sensasi berlibur setiap hari bersama keluarga anda. Dekat dengan tempat wisata goa kreo, menawarkan fasilitas lengkap, menarik dan berbeda dengan hunian lainnya. Fasilitas yang diberikan oleh hunian ini antara lain playgorund, culinary area.', 'https://goo.gl/maps/2za3w541Rm3nLHH1A', '5', 2, 6, 1, 'Rumah', 120, 422, 950, 557, 'Jalan, ruko, jogging track, taman, kolam renang', 'Dekat dengan klinik, sekolah, jalan raya ± 0.5 km', 'Rumah Sakit Columbia\r\nSekolah SD Islam Al Azhar 29\r\nObjek Wisata Goa Kreo', 'Riyan Nagara', '085640444004', 800, 2500, NULL, '2021-04-10 10:11:47', '2021-04-10 14:17:48', 'Semarang'),
(2, 'Apartemen Amartha View', 'apartemen-amartha-view', 'Jl. Raya Boja Km.3 Semarang', 'aaaa', 'https://goo.gl/maps/sFCRB5QVZpgxqQrX6', '1', 1, 1, 1, 'Apartemen', 120, 120, 120, 100, 'aaa', 'aaaa', 'aaa', 'Nur Umar Wakhid', '082325018564', 601, 800, NULL, '2021-04-10 07:53:08', '2021-04-10 08:25:01', 'Semarang'),
(3, 'Bukit Kencana Jaya Semarang Jayametro', 'bukit-kencana-jaya-semarang-jayametro', 'aaa', 'aaa', 'https://goo.gl/maps/sFCRB5QVZpgxqQrX6', '1', 1, 1, 1, 'Rumah', 123, 123, 123, 123, 'aaa', 'aaa', 'aaa', 'Nur Umar Wakhid', '082325018564', 123, 1234, NULL, '2021-04-10 08:46:37', '2021-04-10 08:46:37', 'Semarang'),
(4, 'Pandanaran Hills Semarang Jayametro', 'pandanaran-hills-semarang-jayametro', 'asd', 'aaa', 'https://goo.gl/maps/sFCRB5QVZpgxqQrX6', '1', 1, 1, 1, 'Rumah', 123, 123, 123, 123, 'aaa', 'aaa', 'aaa', 'Nur Umar Wakhid', '082325018564', 123, 1230, NULL, '2021-04-10 08:48:01', '2021-04-10 08:48:01', 'Semarang'),
(5, 'Teras Bali PT. Mikroland Property Development', 'teras-bali-pt-mikroland-property-development', 'Jl. Raya Boja Km.3 Semarang', 'aaa', 'https://goo.gl/maps/sFCRB5QVZpgxqQrX6', '1', 2, 3, 4, 'Rumah', 123, 123, 123, 123, 'aaa', 'aaa', 'aaa', 'Nur Umar Wakhid', '082325018564', 321, 3021, NULL, '2021-04-10 08:48:56', '2021-04-10 13:59:06', 'Semarang'),
(6, 'BSB Village PT. Hijau Cipta Harmoni', 'bsb-village-pt-hijau-cipta-harmoni', 'Jl. Raya Boja Km.3 Semarang', 'aaa', 'https://goo.gl/maps/sFCRB5QVZpgxqQrX6', '1', 2, 3, 4, 'Rumah', 123, 123, 123, 123, 'a', 'a', 'a', 'Nur Umar Wakhid', '082325018564', 123, 652, NULL, '2021-04-10 08:49:48', '2021-04-10 08:49:48', 'Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_10_065700_create_house_packages_table', 1),
(5, '2021_04_10_072818_create_galleries_table', 1),
(6, '2021_04_10_073607_add_roles_field_to_users_table', 2),
(7, '2021_04_10_080534_add_cities_field_to_house_packages_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'Agung Rachmad', 'agung@admin.com', NULL, '$2y$10$uKEa/j5SupGR0NDTEAxd.Ok1dkxRLfAoaOtpMMv3lG8ZpodYyeGIi', NULL, '2021-04-10 01:54:19', '2021-04-10 01:54:19', 'ADMIN');

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
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house_packages`
--
ALTER TABLE `house_packages`
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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `house_packages`
--
ALTER TABLE `house_packages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
