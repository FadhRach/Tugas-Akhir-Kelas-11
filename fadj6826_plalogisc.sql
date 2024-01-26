-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 13, 2023 at 02:33 AM
-- Server version: 10.5.22-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fadj6826_plalogisc`
--

-- --------------------------------------------------------

--
-- Table structure for table `eskul`
--

CREATE TABLE `eskul` (
  `id_eskul` int(10) UNSIGNED NOT NULL,
  `namaeskul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eskul`
--

INSERT INTO `eskul` (`id_eskul`, `namaeskul`, `created_at`, `updated_at`) VALUES
(1, 'Staff', '2023-06-11 07:32:47', '2023-06-11 07:32:47'),
(2, 'Guru', '2023-06-11 07:32:47', '2023-06-11 07:32:47'),
(3, 'Wakasek', '2023-06-11 07:32:47', '2023-06-11 07:32:47'),
(4, 'Siswa Biasa', '2023-06-11 07:32:47', '2023-06-11 07:32:47'),
(5, 'MPK', '2023-06-11 07:32:47', '2023-06-11 07:32:47'),
(6, 'OSIS', '2023-06-11 07:32:47', '2023-06-11 07:32:47'),
(7, 'PRAMUKA', '2023-06-11 07:32:47', '2023-06-11 07:32:47'),
(8, 'PASSUS', '2023-06-11 07:32:47', '2023-06-11 07:32:47'),
(9, 'PKS', '2023-06-11 07:32:47', '2023-06-11 07:32:47'),
(10, 'PMR', '2023-06-11 07:32:47', '2023-06-11 07:32:47'),
(11, 'STAMPARA', '2023-06-11 07:32:47', '2023-06-11 07:32:47');

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
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_item` int(10) UNSIGNED NOT NULL,
  `nameitem` varchar(255) NOT NULL,
  `photoitem` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id_item`, `nameitem`, `photoitem`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bola Plastik', '1686401352_WhatsApp Image 2022-09-17 at 11.22.18 AM.jpeg', '1 Buah, Jika sudah dipinjam tidak usah dikembalikan', 'Active', '2023-06-08 11:22:49', '2023-06-10 05:49:12'),
(3, 'Kursi Aula', '1686401402_kursi.png', 'Empuk, Nyaman, dan Kokoh. memiliki 140 buah kursi', 'Active', '2023-06-10 05:50:02', '2023-06-10 05:50:02'),
(4, 'Kabel HDMI', '1686401442_kabel hdmi.jpg', 'VGA to HDMI', 'Active', '2023-06-10 05:50:42', '2023-06-10 05:50:42'),
(5, 'PC Gaming', '1686401499_pc dewa.jpg', 'PC Spek Dewa bisa dipakai untuk game dan render rata kanan', 'Active', '2023-06-10 05:51:39', '2023-06-10 05:51:39'),
(6, 'Sapu&Pengki', '1686490840_sapupengki.jpg', 'sapu & pengki untuk bersih bersi indoor', 'Active', '2023-06-11 06:40:40', '2023-06-11 06:40:40'),
(7, 'Kanebo', '1686490866_kanebo.jpg', 'Untuk Lap kaca hanya tersedia 10 saja', 'Active', '2023-06-11 06:41:06', '2023-06-11 06:41:06'),
(8, 'Terminal', '1686490920_terminal.png', 'Untuk menyambungkan aliran listrik', 'Active', '2023-06-11 06:42:00', '2023-06-11 06:42:00');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_06_08_143336_place', 1),
(10, '2023_06_08_143343_item', 1),
(11, '2023_06_08_143742_eskul', 1),
(12, '2023_06_10_053032_pinjamplace', 2),
(13, '2023_06_10_053102_pinjamitem', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pinjamitem`
--

CREATE TABLE `pinjamitem` (
  `id_pinjamitem` int(10) UNSIGNED NOT NULL,
  `id_item` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `time_from` datetime NOT NULL,
  `time_to` datetime NOT NULL,
  `statadmin` varchar(255) NOT NULL DEFAULT 'Dalam Pengajuan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinjamitem`
--

INSERT INTO `pinjamitem` (`id_pinjamitem`, `id_item`, `id`, `description`, `time_from`, `time_to`, `statadmin`, `created_at`, `updated_at`) VALUES
(6, 5, 20, 'Untuk rendering website', '2023-06-24 22:08:00', '2023-07-07 22:08:00', 'DiTerima', '2023-06-11 08:08:40', '2023-06-14 03:36:26'),
(7, 5, 22, 'ngebuat game', '2023-06-15 22:01:00', '2024-06-15 22:01:00', 'DiTerima', '2023-06-15 08:02:48', '2023-06-15 08:04:48'),
(10, 1, 26, 'Buat nakol lo', '2023-08-31 00:27:00', '2023-08-31 00:27:00', 'Dalam Pengajuan', '2023-08-30 10:27:51', '2023-08-30 10:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `pinjampl`
--

CREATE TABLE `pinjampl` (
  `id_pinjampl` int(10) UNSIGNED NOT NULL,
  `id_place` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `time_from` datetime NOT NULL,
  `time_to` datetime NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `statadmin` varchar(255) NOT NULL DEFAULT 'Dalam Pengajuan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinjampl`
--

INSERT INTO `pinjampl` (`id_pinjampl`, `id_place`, `id`, `time_from`, `time_to`, `description`, `statadmin`, `created_at`, `updated_at`) VALUES
(10, 10, 18, '2023-06-10 20:47:00', '2023-06-13 20:47:00', 'Untuk Rapat Kelas', 'DiTerima', '2023-06-11 06:48:17', '2023-06-11 08:03:21'),
(11, 5, 4, '2023-06-11 20:51:00', '2023-06-11 09:25:00', 'Untuk Turnamen Mobile Legend OSIS', 'Dalam Pengajuan', '2023-06-11 06:51:36', '2023-06-11 06:51:36'),
(12, 7, 20, '2023-06-11 22:09:00', '2023-06-23 22:09:00', 'Untuk Praktik', 'DiTerima', '2023-06-11 08:09:36', '2023-06-11 08:10:13'),
(13, 5, 17, '2023-09-12 16:02:00', '2023-09-20 16:02:00', 'untuk bukber', 'Dalam Pengajuan', '2023-09-12 02:03:59', '2023-09-12 02:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id_place` int(10) UNSIGNED NOT NULL,
  `nameplace` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photoplace` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id_place`, `nameplace`, `description`, `photoplace`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Jabar Smart Classroom', 'dengan kapasitas maksimal 60 Orang ini didalamnya sudah memiliki banyak logistik yang canggih dan tentunya mendukung pembelajaran atau tempat untuk membuat sebuah acara dengan nuansa modern', '1686470879_DSCF8284.jpg', 'Active', '2023-06-09 21:15:06', '2023-06-10 22:12:26'),
(6, 'Meeting Room', 'meeting room menjadi salah satu tempat untuk bertemunya para petinggi kantor atau pekerja kantor', '1696227505_tahubulat.png', 'Ga Aktif', '2023-06-09 21:15:49', '2023-10-01 23:18:25'),
(7, 'Samsung Technology SMKN 1 Cimahi', 'Tempat laboratorium khusus untuk mempelajari Hardware Samsung', '1686490528_IMG_1137.png', 'Active', '2023-06-11 06:35:28', '2023-06-11 06:35:28'),
(9, 'Kantin', 'Tempat Untuk Kumpul2 & Makan bareng bersama teman2', '1686490617_IMG_1175.png', 'Active', '2023-06-11 06:36:57', '2023-06-11 06:36:57'),
(10, 'Ruang Media', 'Ruang Media adalah tempat rapat atau tempat kumpul yang vibes nya paling enak dan serius', '1686490662_DSCF8290.jpg', 'Active', '2023-06-11 06:37:42', '2023-06-11 06:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `photouser` varchar(255) DEFAULT 'iconprofile.png',
  `id_eskul` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `photouser`, `id_eskul`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Morgan Sama', 'morganlfay3@gmail.com', NULL, '$2y$10$Nd9d6liC6LBVwtMCa2XS3ePcWFzXdNpwXGRrheI.7SAQ8j3q3HZ1u', 'user', 'iconprofile.png', 4, NULL, '2023-06-08 18:13:20', '2023-06-08 18:13:20'),
(4, 'Maple', 'maple@outlook.com', NULL, '$2y$10$Dj512D4PUedXmr7XTDR7/.giI9E0.42BIR3Q0LWWZOgI75w2QKE/G', 'user', '1686492400_foto bung tomo.jpg', 2, NULL, '2023-06-09 05:57:16', '2023-06-11 07:06:40'),
(16, 'Admin', 'admin@example.com', NULL, '$2y$10$oOXmuWeGfMt8DeVcShl7MuUn.JzPtoATIuCQaA9xBAZX6Lh3H4ypy', 'admin', '1686481684_8c4205cb-0a26-425b-a7cb-28f46b9678b2.jpg', 1, NULL, '2023-06-11 03:53:48', '2023-06-11 04:17:19'),
(17, 'UserOrigin', 'user@example.com', NULL, '$2y$10$POEkfrhYav4vFOqwvSSuWe66MbXaDliAXW1WGmV7FzgioQ7xBSGIe', 'user', '1686480896_ichika steam.jpg', 4, NULL, '2023-06-11 03:53:48', '2023-08-30 23:33:35'),
(18, 'AhmadN', 'ahmadn@gmail.com', NULL, '$2y$10$rpyp9/sn1ZqT6tmkJsbIWO5rQ96EbXtzBkIJk6mavhNfYePX51fUy', 'user', 'iconprofile.png', 5, NULL, '2023-06-11 06:43:35', '2023-06-11 06:43:35'),
(20, 'Fadhlan Nur Rachman', 'fadhlannur007@gmail.com', NULL, '$2y$10$MpKwfRHyAOVfzxipcRbMluV37j81X/j0MHjTl9Lg3PMEroPsF4MAW', 'user', 'iconprofile.png', 4, NULL, '2023-06-11 07:44:12', '2023-06-11 07:44:12'),
(22, 'Morgan', 'morganlfay35@gmail.com', NULL, '$2y$10$S3yB65YGSOztzMSXd5nbJuvbJVeXvWTIjJgp9LUdvp8qBbbh7Z/GC', 'user', 'iconprofile.png', 5, NULL, '2023-06-15 07:59:27', '2023-06-15 07:59:27'),
(23, 'Ga ngerti cara uplaod img', 'johanno@gmail.com', NULL, '$2y$10$pWX3wtN8Jp0nbDhbMHY4.eT.YR7sPYCO4GI4ecMFMfQ1gaJCR6c7e', 'user', 'iconprofile.png', 4, NULL, '2023-07-22 23:14:09', '2023-07-22 23:14:09'),
(24, 'ajwar', 'muhammadazwarawarr@gmail.com', NULL, '$2y$10$gh0hwbyHEArYK3by63MhkOnaylYeNj6YUaEqGW78gD1N4ZHblIuO6', 'user', 'iconprofile.png', 2, NULL, '2023-08-09 17:47:33', '2023-08-09 17:47:33'),
(25, 'Darmo', 'darmo@gmail.com', NULL, '$2y$10$5DKMaKVGn0UiaeFRcLsINOcOMKxZeFFKyOcFIiZ4fQBKk2zTAa/D6', 'user', 'iconprofile.png', 4, NULL, '2023-08-19 05:18:05', '2023-08-19 05:18:05'),
(26, 'Idontknow', 'Idont', NULL, '$2y$10$9d4btBDyFRfW92PjxVCgZ.MMPi27MFskP7K6v8p8wKZOxAWCZHLX6', 'user', 'iconprofile.png', 1, NULL, '2023-08-30 10:26:54', '2023-08-30 10:26:54'),
(27, '8h.juangsyahidaljihad@gmail.com', '8h.juangsyahidaljihad@gmail.com', NULL, '$2y$10$47.IXGaJarusTHK5yaFhDe6sW7sSq.WDgpbd2JX0evsLPXd0.46M2', 'user', 'iconprofile.png', 4, NULL, '2023-09-17 23:04:18', '2023-09-17 23:04:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eskul`
--
ALTER TABLE `eskul`
  ADD PRIMARY KEY (`id_eskul`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`);

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
-- Indexes for table `pinjamitem`
--
ALTER TABLE `pinjamitem`
  ADD PRIMARY KEY (`id_pinjamitem`);

--
-- Indexes for table `pinjampl`
--
ALTER TABLE `pinjampl`
  ADD PRIMARY KEY (`id_pinjampl`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id_place`);

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
-- AUTO_INCREMENT for table `eskul`
--
ALTER TABLE `eskul`
  MODIFY `id_eskul` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pinjamitem`
--
ALTER TABLE `pinjamitem`
  MODIFY `id_pinjamitem` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pinjampl`
--
ALTER TABLE `pinjampl`
  MODIFY `id_pinjampl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id_place` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
