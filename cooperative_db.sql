-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2023 pada 10.53
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cooperative_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_07_025933_create_user_table', 1),
(6, '2023_08_07_025956_create_tbl_member_table', 1),
(7, '2023_08_07_030021_create_tbl_payment_method_table', 1),
(8, '2023_08_07_030038_create_tbl_loan_table', 1),
(9, '2023_08_07_033224_create_userr_table', 2),
(10, '2023_08_07_035317_create_tbl_user_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `tbl_loan`
--

CREATE TABLE `tbl_loan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_loan` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `loan_amount` int(11) NOT NULL,
  `loan_interest` int(11) NOT NULL,
  `admin_fee` int(11) NOT NULL,
  `total_loan` int(11) NOT NULL,
  `total_installment` int(11) NOT NULL,
  `tenor` tinyint(2) NOT NULL,
  `start_at` datetime NOT NULL,
  `end_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_loan`
--

INSERT INTO `tbl_loan` (`id`, `no_loan`, `member_id`, `payment_method_id`, `description`, `loan_amount`, `loan_interest`, `admin_fee`, `total_loan`, `total_installment`, `tenor`, `start_at`, `end_at`, `created_at`, `updated_at`) VALUES
(1, 'A1', 1, 1, 'capital loan', 3000000, 600000, 5000, 9000000, 321000, 2, '2023-08-12 09:10:18', '2025-02-13 11:30:18', NULL, '2023-08-15 01:48:34'),
(4, 'A03', 2, 3, 'Pinjaman Modal Usaha', 3000000, 400000, 20000, 7602000, 7600000, 1, '2023-09-21 11:49:00', '2023-08-14 11:49:00', '2023-08-14 21:49:22', '2023-08-14 21:49:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `type_loan_interest` varchar(11) NOT NULL,
  `limit_loan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `user_id`, `type_loan_interest`, `limit_loan`, `created_at`, `updated_at`) VALUES
(1, '112', '7%', 2000000, '2023-08-14 20:39:01', '2023-08-15 01:51:17'),
(2, '113', '20%', 100000000, '2023-08-15 01:50:42', '2023-08-15 01:50:42'),
(3, '114', '20%', 200000000, '2023-08-15 01:50:55', '2023-08-15 01:51:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_payment_method`
--

CREATE TABLE `tbl_payment_method` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `account_number` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_payment_method`
--

INSERT INTO `tbl_payment_method` (`id`, `name`, `account_number`, `type`, `created_at`, `updated_at`) VALUES
(3, 'Mila Akbarullah', 112903, 'Kredit', '2023-08-12 02:19:35', '2023-08-15 01:49:20'),
(4, 'Dina Grisela', 112904, 'Kredit', '2023-08-15 01:49:41', '2023-08-15 01:49:41'),
(5, 'Fadhlan Akbarullah', 112905, 'Cash', '2023-08-15 01:50:03', '2023-08-15 01:50:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `birthday` date NOT NULL,
  `no_ktp` bigint(20) NOT NULL,
  `is_active` varchar(20) NOT NULL,
  `role` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`, `phone`, `address`, `birthday`, `no_ktp`, `is_active`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Mila Akbarullah', 'maulidamila07@gmail.com', '070903Mil', 81316434732, 'Jl.Mengger Girang 1 No.39 Kec.Regol Kel.Pasirluyu', '2003-09-07', 3206105808020001, '1', 'Admin', NULL, '2023-08-14 20:20:36'),
(3, 'IJem Markonah', 'sasjxa@gmail.com', 'sxaj89', 81316434733, 'Jl.Pustiii No,19', '2003-09-09', 3206105808020002, 'choose', 'choose', '2023-08-12 06:08:37', '2023-08-15 01:47:00'),
(11, 'Indah Permata', 'indahpermata@gmail.com', 'Indah021', 89122765419, 'Jl. Cikuni No.18 Kec.Regol Kel.Pasirluyu', '2006-01-09', 332309203829343246, '1', 'Anggota', '2023-08-15 01:46:53', '2023-08-15 01:46:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tbl_loan`
--
ALTER TABLE `tbl_loan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_payment_method`
--
ALTER TABLE `tbl_payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_loan`
--
ALTER TABLE `tbl_loan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_payment_method`
--
ALTER TABLE `tbl_payment_method`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
