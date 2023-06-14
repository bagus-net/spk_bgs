-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 02:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spklaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatives`
--

CREATE TABLE `alternatives` (
  `id_alternatif` int(10) NOT NULL,
  `nama_alternatif` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `alternatives`
--

INSERT INTO `alternatives` (`id_alternatif`, `nama_alternatif`) VALUES
(17, 'PC Rakitan Home & School INTEL'),
(18, 'PC Rakitan Home & School AMD');

-- --------------------------------------------------------

--
-- Table structure for table `criterias`
--

CREATE TABLE `criterias` (
  `id_kriteria` int(10) NOT NULL,
  `kode` varchar(225) NOT NULL,
  `nama_kriteria` varchar(225) NOT NULL,
  `atribut` enum('1','2') NOT NULL,
  `bobot` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `criterias`
--

INSERT INTO `criterias` (`id_kriteria`, `kode`, `nama_kriteria`, `atribut`, `bobot`) VALUES
(1, 'c1', 'processor', '1', '5'),
(2, 'c2', 'Ram', '1', '3'),
(3, 'c3', 'Harga', '2', '5'),
(4, 'c4', 'Storage', '1', '3'),
(5, 'c5', 'VGA', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

CREATE TABLE `relations` (
  `id_relasi` int(10) NOT NULL,
  `alternatif` varchar(225) NOT NULL,
  `kriteria` varchar(225) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `relations`
--

INSERT INTO `relations` (`id_relasi`, `alternatif`, `kriteria`, `nilai`) VALUES
(51, '11', '1', 2),
(52, '11', '2', 3),
(53, '11', '3', 3675000),
(54, '11', '4', 2),
(55, '11', '5', 3),
(56, '12', '1', 3),
(57, '12', '2', 3),
(58, '12', '3', 4670000),
(59, '12', '4', 2),
(60, '12', '5', 3),
(61, '13', '1', 3),
(62, '13', '2', 3),
(63, '13', '3', 2699000),
(64, '13', '4', 1),
(65, '13', '5', 3),
(66, '17', '1', 2),
(67, '17', '2', 3),
(68, '17', '3', 2809000),
(69, '17', '4', 1),
(70, '17', '5', 1),
(71, '18', '1', 3),
(72, '18', '2', 3),
(73, '18', '3', 3117000),
(74, '18', '4', 1),
(75, '18', '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id_result` int(10) NOT NULL,
  `alternatif` varchar(225) NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id_result`, `alternatif`, `hasil`) VALUES
(17, '17', 0),
(18, '18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jabatan` enum('admin','kepala_bidang') NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `jabatan`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'bagus', 'bagussetyawan551@gmail.com', 'admin', '$2y$10$W7ViBUBAWZ1wTHr/0vIctuv5BpSYcpBIUsSeSad.lQhoMTdiT5iUW', 'vzy3kPUrS50QtxKnjMoOhArNlxUfGG6UhthMMlBXT0ONT1QYeo3urjNhocOh', '2023-06-05 03:42:27', '2023-06-05 05:05:33'),
(4, 'user', 'user@gmail.com', 'admin', '$2y$10$dxkY41cJ8Xr6JzDY9TKEMO97.kerqctm91hru.Zv.IHO0zaDGYQIu', NULL, '2023-06-05 04:45:24', '2023-06-05 04:45:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatives`
--
ALTER TABLE `alternatives`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id_relasi`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id_result`);

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
-- AUTO_INCREMENT for table `alternatives`
--
ALTER TABLE `alternatives`
  MODIFY `id_alternatif` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `criterias`
--
ALTER TABLE `criterias`
  MODIFY `id_kriteria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `relations`
--
ALTER TABLE `relations`
  MODIFY `id_relasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id_result` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
