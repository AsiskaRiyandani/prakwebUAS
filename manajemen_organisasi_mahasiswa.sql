-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2025 at 11:19 AM
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
-- Database: `manajemen_organisasi_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_organisasi`
--

CREATE TABLE `anggota_organisasi` (
  `id` bigint(20) NOT NULL,
  `organisasi_id` bigint(20) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota_organisasi`
--

INSERT INTO `anggota_organisasi` (`id`, `organisasi_id`, `nama_anggota`, `nim`, `jurusan`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 'Yuji Itadori', '220110101', 'Ilmu Komunikasi', 'yuji@univ.ac.id', '2025-07-08 10:22:40', '2025-07-08 10:22:40'),
(2, 1, 'Anya Forger', '220110102', 'Ilmu Komunikasi', 'anya@univ.ac.id', '2025-07-08 10:23:41', '2025-07-08 10:23:41'),
(3, 2, 'Tanjiro Kamado', '230210201', 'Ilmu Komputer', 'tanjiro@univ.ac.id', '2025-07-08 10:24:29', '2025-07-08 10:24:29'),
(4, 2, 'Nezuko Kamado', '230210202', 'Ilmu Komputer', 'nezuko@univ.ac.id', '2025-07-08 10:25:14', '2025-07-08 10:25:14'),
(5, 3, 'Satoru Gojo', '200310301', 'Umum Universitas', 'gojo@univ.ac.id', '2025-07-08 10:26:05', '2025-07-08 10:26:05'),
(6, 3, 'Levi Ackerman', '210310302', 'Umum Univeritas', 'levi@univ.ac.id', '2025-07-08 10:27:00', '2025-07-08 10:27:00'),
(7, 4, 'Marin Kitagawa', '210410401', 'Seni & Budaya', 'marin@univ.ac.ic', '2025-07-08 10:31:01', '2025-07-08 10:31:01'),
(8, 4, 'Kaguya Shinomiya', '210410402', 'Seni & Budaya', 'kaguya@univ.ac.id', '2025-07-08 10:31:54', '2025-07-08 10:31:54'),
(9, 5, 'Loid Forger', '210510501', 'Ekonomi', 'loid@univ.ac.id', '2025-07-08 10:32:51', '2025-07-08 10:32:51'),
(10, 5, 'Chisato Nishikigi', '240510502', 'Ekonomi', 'chisato@univ.ac.id', '2025-07-08 10:33:37', '2025-07-08 10:33:37'),
(11, 6, 'Yor Forger', '200610601', 'Hukum', 'yor@univ.ac.id', '2025-07-08 10:34:11', '2025-07-08 10:34:11'),
(12, 6, 'Reigen Arataka', '250610602', 'Hukum', 'reigen@univ.ac.id', '2025-07-08 10:34:52', '2025-07-08 10:34:52'),
(13, 7, 'Mitsuri Kanroji', '230710701', 'Seni Rupa', 'mitsuri@univ.ac.id', '2025-07-08 10:35:30', '2025-07-08 10:35:30'),
(14, 7, 'Ai Hoshino', '220710702', 'Seni Rupa', 'ai@univ.ac.id', '2025-07-08 10:36:02', '2025-07-08 10:36:02'),
(16, 4, 'Kenma', '1234', 'Informatika', 'kenma@gmail.com', '2025-07-15 14:53:40', '2025-07-15 14:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `kegiatan_organisasi`
--

CREATE TABLE `kegiatan_organisasi` (
  `id` bigint(20) NOT NULL,
  `organisasi_id` bigint(20) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan_organisasi`
--

INSERT INTO `kegiatan_organisasi` (`id`, `organisasi_id`, `nama_kegiatan`, `tanggal_kegiatan`, `lokasi`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Anime Weekly Watch', '2025-04-12', 'Ruang AVA Lt.2', 'Nobar anime tiap minggu dan diskusi setelahnya', '2025-07-08 10:43:41', '2025-07-08 10:43:41'),
(2, 1, 'Workshop Desain Karakter Anime', '2025-05-20', 'Lab Multimedia, Gedung C', 'Pelatihan membuat desain karakter anime untuk pemula.', '2025-07-08 10:45:17', '2025-07-08 10:45:17'),
(3, 2, 'Seminar Kecerdasan Buatan', '2025-03-30', 'Auditorium Kampus A', 'Seminar tentang AI dan penerapannya dalam industri', '2025-07-08 10:48:57', '2025-07-08 10:48:57'),
(4, 2, 'Kompetisi Coding Bertema Anime', '2025-06-10', 'Lab Komputer 1, Gedung B', 'Lomba membuat game/anime tools kecil menggunakan pemrograman.', '2025-07-08 10:50:14', '2025-07-08 10:50:14'),
(5, 3, 'Pelatihan Kepemimpinan BEM', '2025-02-25', 'Ruang Sidang Rektorat', 'Pelatihan dasar untuk pengurus dan calon pengurus BEM.', '2025-07-08 10:51:27', '2025-07-08 10:51:27'),
(6, 3, 'Bakti Sosial Mahasiswa', '2025-05-05', 'Tokyo Metropolitan', 'Penyaluran bantuan dan kegiatan sosial di masyarakat', '2025-07-08 11:16:55', '2025-07-08 11:16:55'),
(7, 4, 'Festival Cosplay', '2025-09-17', 'Lapangan Parkir Timur', 'Acara cosplay tahunan terbuka untuk umum.', '2025-07-08 11:17:57', '2025-07-08 11:17:57'),
(8, 4, 'Workshop Pembuatan Atribut Cosplay', '2025-08-12', 'Ruang Seni Rupa', 'Pelatihan membuat props dan kostum cosplay dari karakter anime.', '2025-07-08 11:18:59', '2025-07-08 11:18:59'),
(9, 5, 'Pelatihan Pengembangan UMKM dan Kewirausahaan Sosial', '2025-04-05', 'Aula Fakultas Ekonomi', 'Meningkatkan kapasitas UMKM dan mendorong pengembangan kewirausahaan sosial.', '2025-07-08 11:27:57', '2025-07-08 11:27:57'),
(10, 5, 'Pameran produk UMKM lokal', '2025-07-03', 'Ruang Seminar D3', 'Menampilkan dan memasarkan karya terbaik UMKM daerah', '2025-07-08 11:35:03', '2025-07-08 11:35:03'),
(11, 6, 'Forum Komunikasi Antar Organisasi Mahasiswa Fakultas Hukum', '2025-03-15', 'Ruang Diskusi Hukum', 'Wadah koordinasi dan silaturahmi antar organisasi mahasiswa di Fakultas Hukum', '2025-07-08 11:37:33', '2025-07-08 11:37:33'),
(12, 6, 'Pertemuan rutin terjadwal atau insidental berdasarkan isu mendesak', '2025-06-18', 'Auditorium Fakultas Hukum', 'Pertemuan rutin terjadwal atau insidental berdasarkan isu mendesak.', '2025-07-08 11:40:18', '2025-07-08 11:40:18'),
(13, 7, 'Lomba Gambar Karakter Anime', '2025-04-29', 'Ruang Studio Ilustrasi', 'Lomba menggambar karakter dari anime favorit masing-masing peserta', '2025-07-08 11:41:08', '2025-07-08 11:41:08'),
(14, 7, 'Kelas Ilustrasi Anime Digital', '2025-05-19', 'Lab Gambar Digital Lt. 1', 'Pelatihan menggambar digital menggunakan drawing tablet', '2025-07-08 11:41:52', '2025-07-08 11:41:52');

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
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organisasi_mahasiswas`
--

CREATE TABLE `organisasi_mahasiswas` (
  `id` bigint(20) NOT NULL,
  `nama_organisasi` varchar(255) NOT NULL,
  `jenis_organisasi` varchar(100) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `tahun_berdiri` year(4) DEFAULT NULL,
  `status_aktif` tinyint(1) DEFAULT 1,
  `nomor_telepon` varchar(20) DEFAULT NULL,
  `media_sosial` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisasi_mahasiswas`
--

INSERT INTO `organisasi_mahasiswas` (`id`, `nama_organisasi`, `jenis_organisasi`, `fakultas`, `tahun_berdiri`, `status_aktif`, `nomor_telepon`, `media_sosial`, `created_at`, `updated_at`) VALUES
(1, 'Anime Discussion Forum', 'UKM', 'Ilmu Komunikasi', '2021', 1, '08123456789', 'Telegram: AnimeDiskusiUni', '2025-07-08 01:01:05', '2025-07-08 01:18:48'),
(2, 'Himpunan Mahasiswa Ilmu Komputer', 'HMJ', 'Ilmu Komputer', '2020', 1, '08765432101', 'IG: @himakom_uni', '2025-07-08 01:03:58', '2025-07-08 01:19:41'),
(3, 'Badan Eksekutif Mahasiswa (BEM) Universitas Jujutsu Kaisen', 'BEM', 'Umum Universitas', '2015', 1, '08998877665', 'IG: @bem_jujutsu, Twitter: @bem_jujutsu', '2025-07-08 01:05:39', '2025-07-08 10:01:42'),
(4, 'Cosplay & Otaku Club', 'UKM', 'Seni & Budaya', '2019', 1, '08987654321', 'FB: CosOtakuClub, IG: @cosotaku_club', '2025-07-08 01:13:40', '2025-07-08 01:21:10'),
(5, 'Himpunan Mahasiswa Ekonomi Pembangunan', 'HIMA', 'Ekonomi', '2017', 1, '08112233445', 'IG: @himaprodi_ep, Line: @himaep', '2025-07-08 01:14:27', '2025-07-08 01:21:44'),
(6, 'Dewan Perwakilan Mahasiswa (DPM) Fakultas Hukum', 'DPM', 'Hukum', '2016', 1, '08345678901', 'IG: @dpm_fakultashukum, \r\nEmail: dpm.fh@uni.ac.id', '2025-07-08 01:15:56', '2025-07-08 01:22:01'),
(7, 'Anime Drawing Society', 'HMJ', 'Seni Rupa', '2020', 1, '082345678901', 'IG: @animeart_uni', '2025-07-08 01:18:07', '2025-07-08 01:18:07');

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
('gUyVDzxDekhh3CnxPMu0Z4AWU8l42VYz8tejA002', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibzV1b0RMbkFNV0dwS3lTT0FleUt3T3I2SktUUTRvMkgycGw1c0V1NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9vcmdhbmlzYXNpIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1752616454);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_organisasi`
--
ALTER TABLE `anggota_organisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organisasi_id` (`organisasi_id`);

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
-- Indexes for table `kegiatan_organisasi`
--
ALTER TABLE `kegiatan_organisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `organisasi_id` (`organisasi_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisasi_mahasiswas`
--
ALTER TABLE `organisasi_mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- AUTO_INCREMENT for table `anggota_organisasi`
--
ALTER TABLE `anggota_organisasi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- AUTO_INCREMENT for table `kegiatan_organisasi`
--
ALTER TABLE `kegiatan_organisasi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `organisasi_mahasiswas`
--
ALTER TABLE `organisasi_mahasiswas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota_organisasi`
--
ALTER TABLE `anggota_organisasi`
  ADD CONSTRAINT `anggota_organisasi_ibfk_1` FOREIGN KEY (`organisasi_id`) REFERENCES `organisasi_mahasiswas` (`id`);

--
-- Constraints for table `kegiatan_organisasi`
--
ALTER TABLE `kegiatan_organisasi`
  ADD CONSTRAINT `kegiatan_organisasi_ibfk_1` FOREIGN KEY (`organisasi_id`) REFERENCES `organisasi_mahasiswas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
