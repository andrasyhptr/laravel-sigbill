-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 04:10 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigrizal`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_06_152054_create_info_table', 2),
('2016_10_06_152120_create_kecamatan_table', 2),
('2016_10_06_152140_create_kategori_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `jalan` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `kordinat_x` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `kordinat_y` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_info`
--

INSERT INTO `tb_info` (`id`, `nama`, `jalan`, `kordinat_x`, `kordinat_y`, `id_kecamatan`, `id_kategori`) VALUES
(1, 'Aisyah Massage', 'Jl. Siradj Salman', '-0.491490', '117.134277', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_media`
--

CREATE TABLE `tb_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(60) COLLATE utf8_unicode_ci NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_media`
--

INSERT INTO `tb_media` (`id_media`, `nama_media`) VALUES
(1, '1 sisi'),
(2, '2 sisi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(10) UNSIGNED NOT NULL,
  `nama_status` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id`, `nama_status`) VALUES
(1, 'Sewa'),
(2, 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`, `password`) VALUES
(1, 'username', 'username@mail.com', '$2y$10$uFHAe7hRkHCwv8.aaolIr.jsCstfbskIvWuPUA5HCUNLbA5w8RMYq'),
(2, 'Eko Pebrisulistiyo', 'eko.pebrisulistiyo@gmail.com', '$2y$10$uFHAe7hRkHCwv8.aaolIr.jsCstfbskIvWuPUA5HCUNLbA5w8RMYq');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'username', 'username@mail.com', '$2y$10$aLqimu4dJ1bu12eMxuy/ae5ZO2UHlEDrUque.qtxd/BtYUgP02d1O', 'VeRivovt3DH92rjnJebYAAmhH7KUCbqcn0vmuCtFgbwKNwY41u65LooqCIJT', '2016-09-19 08:29:15', '2016-10-23 06:46:08'),
(2, 'Eko Pebrisulistiyo', 'eko.pebrisulistiyo@gmail.com', '$2y$10$JpCmvoQ6qzjK9wzIBBG34uRz5SwozQPLKU5SrxQGBACRUL6JzReii', 'xuy8wwQUKmPtLnc1TV009qvXX2VdQT9THnhMitkrgpVkEeJ1RohpXkQFvbAH', '2016-10-23 03:35:14', '2016-10-23 04:26:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_media`
--
ALTER TABLE `tb_media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
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
-- AUTO_INCREMENT for table `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tb_media`
--
ALTER TABLE `tb_media`
  MODIFY `id_media` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
