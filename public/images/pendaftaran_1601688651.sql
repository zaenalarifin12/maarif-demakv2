-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2020 at 05:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_praktik`
--

CREATE TABLE `daftar_praktik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` enum('baru','lama') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jekel` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_rumah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_praktik` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_tempat_praktik` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_kantor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `universitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_surat_rekomendasi_lama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_sip_lama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sip_ke` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_praktik`
--

INSERT INTO `daftar_praktik` (`id`, `jenis`, `nama`, `jekel`, `tanggal_lahir`, `tempat_lahir`, `agama`, `alamat_rumah`, `nomor_hp`, `alamat_praktik`, `nama_tempat_praktik`, `alamat_kantor`, `email`, `pendidikan_terakhir`, `universitas`, `no_surat_rekomendasi_lama`, `no_sip_lama`, `sip_ke`, `user_id`) VALUES
(3, 'baru', 'zaenal', 'laki-laki', '2020-07-08', 'lkasklas', 'islam', 'LAKALKSAS', '121212', '1212', '12', '1212', '12121@ASAS.ASASA', '212', '1221212', NULL, NULL, NULL, 1),
(4, 'baru', 'baru', 'laki-laki', '2020-07-15', 'jepara', 'islam', 'jepara', '90890890809', 'asasas', 'asasa', 'asas', 'asasasasas@sasas.asa', 'asa', 'as', NULL, NULL, NULL, 7);

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
(61, '2014_10_12_000000_create_users_table', 1),
(62, '2020_07_22_132941_create_daftar_praktik_table', 1),
(63, '2020_07_22_133037_create_pemberkasan_table', 1),
(64, '2020_07_22_133048_create_surat_rekomendasi_table', 1),
(65, '2020_07_22_133055_create_sip_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemberkasan`
--

CREATE TABLE `pemberkasan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rapi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `str_dilegalisir_kki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_pernyataan_tempat_praktik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_persetujuan_dari_atasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikat_bpjs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daftar_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemberkasan`
--

INSERT INTO `pemberkasan` (`id`, `rapi`, `ijazah`, `ktp`, `str_dilegalisir_kki`, `surat_pernyataan_tempat_praktik`, `surat_persetujuan_dari_atasan`, `sertifikat_bpjs`, `sip`, `daftar_id`) VALUES
(2, 'rapi1595810838.jpg', 'ijazah1595810838.jpg', 'ktp1595810838.jpg', 'str_dilegalisir_kki1595810838.jpg', 'surat_pernyataan_tempat_praktik1595810838.jpg', 'surat_persetujuan_dari_atasan1595810838.jpg', 'sertifikat_bpjs1595810838.jpg', NULL, 3),
(3, 'rapi1595819271.jpg', 'ijazah1595819271.jpg', 'ktp1595819271.jpg', 'str_dilegalisir_kki1595819271.jpg', 'surat_pernyataan_tempat_praktik1595819271.jpg', 'surat_persetujuan_dari_atasan1595819271.jpg', 'sertifikat_bpjs1595819271.jpg', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sip`
--

CREATE TABLE `sip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_sip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_rumah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tempat_praktik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_praktik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_berlaku_dari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_berlaku_sampai` date NOT NULL,
  `untuk_praktik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `rekomendasi_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sip`
--

INSERT INTO `sip` (`id`, `nomor_sip`, `nama`, `ttl`, `alamat_rumah`, `nama_tempat_praktik`, `alamat_praktik`, `masa_berlaku_dari`, `masa_berlaku_sampai`, `untuk_praktik`, `status`, `rekomendasi_id`) VALUES
(2, 'asas', 'as', 'as', 'asas', 'as', 'as', '2020-07-15', '2020-07-16', 'asas', '2', 2),
(3, 'asasa', 'asasa', 'asas', 'saas', 'as', 'as', '2020-07-01', '2020-07-22', 'as', '2', 3);

-- --------------------------------------------------------

--
-- Table structure for table `surat_rekomendasi`
--

CREATE TABLE `surat_rekomendasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_rekomendasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_praktik` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `daftar_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_rekomendasi`
--

INSERT INTO `surat_rekomendasi` (`id`, `no_rekomendasi`, `nama`, `jabatan`, `ttl`, `alamat_praktik`, `status`, `daftar_id`) VALUES
(2, 'asas', 'sasasasasas', 'asas', 'asas', 'ass', 2, 3),
(3, 'baru', 'asasas', 'sasas', 'aasas', 'asas', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('pendaftar','kasi','kabid','kepala') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `level`) VALUES
(1, 'test', 'test', '$2y$10$MTtdt1hQ/l.ibKmW72gyQeV6AxVeLrYZdjTiqd6kykWld4Lzvb0N2', 'pendaftar'),
(4, 'kasi', 'kasi', '$2y$10$4OxYIuwZeg5Wxlj2IRVboeSgEDQPMEY0VdXUKCBfuvDu6AoauLS7u', 'kasi'),
(5, 'kabid', 'kabid', '$2y$10$LX0uCHoPbo.PoEm0NukeVukoZhBtfJXOFA99cdkBVJCTsQvxnHQZ6', 'kabid'),
(6, 'kepala', 'kepala', '$2y$10$5TNOpv8EQ/VHLKkDapU9N.lfqKFc3YgzJrrcoIqiMSJ3kYnk14Rpi', 'kepala'),
(7, 'zaenal', 'zaenal', '$2y$10$m41CWJiirwHkOWllOFKsNePQeGPy2pyF4o13q2ZCTW0vzwQvkAHDi', 'pendaftar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_praktik`
--
ALTER TABLE `daftar_praktik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daftar_praktik_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemberkasan`
--
ALTER TABLE `pemberkasan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemberkasan_daftar_id_foreign` (`daftar_id`);

--
-- Indexes for table `sip`
--
ALTER TABLE `sip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sip_rekomendasi_id_foreign` (`rekomendasi_id`);

--
-- Indexes for table `surat_rekomendasi`
--
ALTER TABLE `surat_rekomendasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_rekomendasi_daftar_id_foreign` (`daftar_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_praktik`
--
ALTER TABLE `daftar_praktik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `pemberkasan`
--
ALTER TABLE `pemberkasan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sip`
--
ALTER TABLE `sip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_rekomendasi`
--
ALTER TABLE `surat_rekomendasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_praktik`
--
ALTER TABLE `daftar_praktik`
  ADD CONSTRAINT `daftar_praktik_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pemberkasan`
--
ALTER TABLE `pemberkasan`
  ADD CONSTRAINT `pemberkasan_daftar_id_foreign` FOREIGN KEY (`daftar_id`) REFERENCES `daftar_praktik` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sip`
--
ALTER TABLE `sip`
  ADD CONSTRAINT `sip_rekomendasi_id_foreign` FOREIGN KEY (`rekomendasi_id`) REFERENCES `surat_rekomendasi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `surat_rekomendasi`
--
ALTER TABLE `surat_rekomendasi`
  ADD CONSTRAINT `surat_rekomendasi_daftar_id_foreign` FOREIGN KEY (`daftar_id`) REFERENCES `daftar_praktik` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
