-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Okt 2019 pada 09.04
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_persuratan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `nama`, `role`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rahmat Ilyas', 1, 'admin', '$2y$10$qvDdH4jmo6f4GlfV30BX6.Dr0KfbcH9qOi2i7LVlpGuFPcIpJPcSu', '1f3kyBOewE7niActCgGrYnBbbTauQKPiYXBiq0gFjQD9TCSusNpLud7JqVyR', '2019-08-26 06:28:15', '2019-08-26 06:28:15'),
(2, 'Ayumi Anita', 2, 'admin123', '$2y$10$pw8.d03eLEVpNwxfzFwrIOdux5G9nggu/qomZNIxbfH5hgIxCIL3i', 'HsgCxKTGnfTjmbXG7EDI4YuT9xsxwJrOLYCvmu1NfVByiZ3Mnemkk2WOQNec', '2019-08-26 08:34:38', '2019-08-26 08:34:38'),
(3, 'Muhammad Ilham', 3, 'kabag', '$2y$10$pw8.d03eLEVpNwxfzFwrIOdux5G9nggu/qomZNIxbfH5hgIxCIL3i', 'YUL9Fw5H7xVRLdnwNizlBZaMg5rNU8sCXRkX9T5ze9LWfltqG2FTB1CI9YGV', NULL, NULL),
(4, 'Wakil Dekan', 4, 'wakildekan', '$2y$10$pw8.d03eLEVpNwxfzFwrIOdux5G9nggu/qomZNIxbfH5hgIxCIL3i', '78RcHzYHnPnpKUnWAM3BJUdDsagasftVkc9HALPXESLVi85hqmOrRBbiIftt', NULL, NULL),
(5, 'Nama Dekan', 5, 'dekan', '$2y$10$M2yQWm9qStyngAGJpDWa.uj0wMRpxq4.cjHKrVFH3W6gxf1FXzJbO', 'Eou778P8M8vreiqLCRFpoZGitNxH2pj1NJNE0GiV3pwJIfIPQ5Pu6hSMo6dF', '2019-09-03 10:59:37', '2019-09-03 10:59:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_surats`
--

CREATE TABLE `file_surats` (
  `id` int(10) UNSIGNED NOT NULL,
  `surat_id` int(10) UNSIGNED NOT NULL,
  `file_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `file_surats`
--

INSERT INTO `file_surats` (`id`, `surat_id`, `file_surat`, `created_at`, `updated_at`) VALUES
(1, 28, 'Praktek Pengalaman Lapangan_28_1910134538.pdf', '2019-10-13 05:45:38', '2019-10-13 05:45:38'),
(2, 26, 'Praktek Pengalaman Lapangan_26_1910134059.pdf', '2019-10-13 06:40:59', '2019-10-13 06:40:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `surat_id` int(10) UNSIGNED NOT NULL,
  `item_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `items`
--

INSERT INTO `items` (`id`, `surat_id`, `item_surat`, `tipe`, `created_at`, `updated_at`) VALUES
(95, 27, 'H. Muh. Ilyas', 'nama wali', '2019-10-13 05:35:34', '2019-10-13 05:35:34'),
(96, 27, '34566', 'nip', '2019-10-13 05:35:34', '2019-10-13 05:35:34'),
(97, 27, 'Pegawai', 'jabatan', '2019-10-13 05:35:34', '2019-10-13 05:35:34'),
(98, 27, 'PT. XYZ', 'instansi', '2019-10-13 05:35:34', '2019-10-13 05:35:34'),
(99, 27, 'Sangat baik', 'keterangan', '2019-10-13 05:35:34', '2019-10-13 05:35:34'),
(100, 28, 'Capil Kab. Gowa', 'instansi', '2019-10-13 05:39:36', '2019-10-13 05:39:36'),
(101, 28, '14 Mei - 20 Juli 2019', 'waktu pelaksana', '2019-10-13 05:39:36', '2019-10-13 05:39:36'),
(102, 28, 'Muhammad Ilham', 'nama', '2019-10-13 05:39:36', '2019-10-13 05:39:36'),
(103, 28, 'Rizki Amalia A. Gani', 'nama', '2019-10-13 05:39:37', '2019-10-13 05:39:37'),
(104, 28, 'Wardaniar', 'nama', '2019-10-13 05:39:37', '2019-10-13 05:39:37'),
(105, 28, '60900116082', 'nim', '2019-10-13 05:39:37', '2019-10-13 05:39:37'),
(106, 28, '60900116086', 'nim', '2019-10-13 05:39:37', '2019-10-13 05:39:37'),
(107, 28, '60900116062', 'nim', '2019-10-13 05:39:37', '2019-10-13 05:39:37'),
(108, 26, 'Perawat.ID', 'instansi', '2019-10-13 05:49:06', '2019-10-13 05:49:06'),
(109, 26, '27 Juni - 29 September 2019', 'waktu pelaksana', '2019-10-13 05:49:06', '2019-10-13 05:49:06'),
(110, 26, 'Rahmat Ilyas', 'nama', '2019-10-13 05:49:06', '2019-10-13 05:49:06'),
(111, 26, 'Reza Maulana', 'nama', '2019-10-13 05:49:06', '2019-10-13 05:49:06'),
(112, 26, 'Mahfud Hidayat', 'nama', '2019-10-13 05:49:07', '2019-10-13 05:49:07'),
(113, 26, 'Muh. Azwar Bahar', 'nama', '2019-10-13 05:49:07', '2019-10-13 05:49:07'),
(114, 26, 'Miftahul Khair', 'nama', '2019-10-13 05:49:07', '2019-10-13 05:49:07'),
(115, 26, '60900116081', 'nim', '2019-10-13 05:49:07', '2019-10-13 05:49:07'),
(116, 26, '60900116071', 'nim', '2019-10-13 05:49:07', '2019-10-13 05:49:07'),
(117, 26, '60900116027', 'nim', '2019-10-13 05:49:07', '2019-10-13 05:49:07'),
(118, 26, '60900116085', 'nim', '2019-10-13 05:49:07', '2019-10-13 05:49:07'),
(119, 26, '60900116094', 'nim', '2019-10-13 05:49:07', '2019-10-13 05:49:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_img.jpg',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nim`, `nama`, `jurusan`, `foto`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '60900116081', 'Rahmat Ilyas', 'Sistem Informasi', 'default_img.jpg', '$2y$10$pnkRDALo.ifJufFPt3Q26.vRncYQXFhHdoMvFB2sE.4f8mX3yjpGW', 'owexHRoLkujNbQJ7KxaRLq3iATYXw7FL0UtTFZAj8pemnODwsL6HRssbsMCM', '2019-08-24 17:51:02', '2019-08-24 17:51:02'),
(2, '60900116080', 'Alqaf Gautama', 'Sistem Informasi', 'default_img.jpg', '$2y$10$Qa1aNr1DP.VFwVMja72D9.RLsXXj4BkRn56q/avmW5zxChwpMk1DO', '9Da67ILtdly18NM9PpiVaDfD5QTxzOZV1sZ7B8rVX4gS5NlRLUOzbyEWVy6K', '2019-08-24 17:53:17', '2019-08-24 17:53:17'),
(3, '60900116082', 'Muhammad Ilham', 'Sistem Informasi', 'default_img.jpg', '$2y$10$J8EnngK7eb3B72miqoQhguJ77hDel8ZRBChgFf2lb8Q5i/DrmCDRe', 'Pj9Ha4wMhYtFGbno6Z1bKMaK8hefZVmkCL5wLJg0aViOdC6kOk0tMpz5YeLI', '2019-08-24 17:53:56', '2019-08-24 17:53:56'),
(4, '60900116085', 'Muhammad Azwar Bahar', 'Sistem Informasi', 'default_img.jpg', '$2y$10$LGe4f0B47q2kdA5YEaKpjuXW86xGrbDE.fuK.0HOS5JRkrrduE296', 'gOlgkxErz2q8qTTudP4HchYUpMMQVk8QlcIb9EXtABLxInWl99lChYCpL258', '2019-09-20 09:35:25', '2019-09-20 09:35:25'),
(5, '60900116083', 'Fard Nashrullah', 'Sistem Informasi', 'default_img.jpg', '$2y$10$bUj8qBcyXn9T9PrAlfdKP.q0cUqLFnQNHEzg2Ng5ScKG8jUOT.SK6', 'NULL', '2019-09-20 11:45:06', '2019-10-13 06:52:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_25_000803_create_mahasiswas_table', 2),
(5, '2019_08_25_024034_add_remember_token_to_mahasiswa', 3),
(7, '2019_08_26_132842_create_admins_table', 5),
(12, '2019_08_24_231022_create_surats_table', 6),
(13, '2019_08_25_061200_create_persyaratans_table', 6),
(14, '2019_08_28_135530_create_proses_table', 7),
(15, '2019_08_31_103406_create_items_table', 8),
(17, '2019_08_31_160446_create_nomor_surats_table', 9),
(18, '2019_09_03_162418_create_parafs_table', 10),
(19, '2019_09_03_221800_create_tandatgns_table', 11),
(20, '2019_10_12_223841_create_file_surats_table', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nomor_surats`
--

CREATE TABLE `nomor_surats` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nomor_surats`
--

INSERT INTO `nomor_surats` (`id`, `no_surat`, `created_at`, `updated_at`) VALUES
(1, '28848', NULL, '2019-10-13 05:49:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `parafs`
--

CREATE TABLE `parafs` (
  `id` int(10) UNSIGNED NOT NULL,
  `surat_id` int(10) UNSIGNED NOT NULL,
  `file_paraf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratans`
--

CREATE TABLE `persyaratans` (
  `id` int(10) UNSIGNED NOT NULL,
  `surat_id` int(10) UNSIGNED NOT NULL,
  `nama_syarat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `persyaratans`
--

INSERT INTO `persyaratans` (`id`, `surat_id`, `nama_syarat`, `file_berkas`, `created_at`, `updated_at`) VALUES
(23, 26, 'Scen Suarat Pengantar Jurusan', 'file_berkas_0026_0.png', '2019-10-13 05:28:57', '2019-10-13 05:28:57'),
(24, 27, 'Scen Suarat Kerja Perusahaan Orang Tua', 'file_berkas_0027_0.png', '2019-10-13 05:31:17', '2019-10-13 05:31:17'),
(25, 27, 'Foto Copy Slip Pembayaran UKT', 'file_berkas_0027_1.png', '2019-10-13 05:31:17', '2019-10-13 05:31:17'),
(26, 28, 'Scen Suarat Pengantar Jurusan', 'file_berkas_0028_0.png', '2019-10-13 05:32:40', '2019-10-13 05:32:40'),
(27, 29, 'Scen Suarat Pengantar Jurusan', 'file_berkas_0029_0.png', '2019-10-13 06:44:05', '2019-10-13 06:44:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surats`
--

CREATE TABLE `surats` (
  `id` int(10) UNSIGNED NOT NULL,
  `mhs_id` int(10) UNSIGNED NOT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proses` tinyint(4) NOT NULL DEFAULT 0,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tggl_surat` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surats`
--

INSERT INTO `surats` (`id`, `mhs_id`, `jenis_surat`, `no_surat`, `status`, `proses`, `keterangan`, `tggl_surat`, `created_at`, `updated_at`) VALUES
(26, 1, 'Praktek Pengalaman Lapangan', '28847', 'Sudah Selesai', 2, NULL, '2019-10-13', '2019-10-13 05:28:57', '2019-10-13 06:40:58'),
(27, 1, 'Surat Aktif Kuliah', '28845', 'Ditolak', 1, 'File yang di ajukan tidak lengkap', '2019-10-13', '2019-10-13 05:31:16', '2019-10-13 05:40:32'),
(28, 3, 'Praktek Pengalaman Lapangan', '28846', 'Sudah Selesai', 2, NULL, '2019-10-13', '2019-10-13 05:32:39', '2019-10-13 05:45:38'),
(29, 2, 'Praktek Pengalaman Lapangan', NULL, 'Dalam Proses', 0, NULL, NULL, '2019-10-13 06:44:05', '2019-10-13 06:44:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tandatgns`
--

CREATE TABLE `tandatgns` (
  `id` int(10) UNSIGNED NOT NULL,
  `surat_id` int(10) UNSIGNED NOT NULL,
  `file_ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indeks untuk tabel `file_surats`
--
ALTER TABLE `file_surats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file_surats_surat_id_foreign` (`surat_id`);

--
-- Indeks untuk tabel `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_surat_id_foreign` (`surat_id`);

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nomor_surats`
--
ALTER TABLE `nomor_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `parafs`
--
ALTER TABLE `parafs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parafs_surat_id_foreign` (`surat_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `persyaratans`
--
ALTER TABLE `persyaratans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persyaratans_surat_id_foreign` (`surat_id`);

--
-- Indeks untuk tabel `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surats_mhs_id_foreign` (`mhs_id`);

--
-- Indeks untuk tabel `tandatgns`
--
ALTER TABLE `tandatgns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tandatgns_surat_id_foreign` (`surat_id`);

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
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `file_surats`
--
ALTER TABLE `file_surats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `nomor_surats`
--
ALTER TABLE `nomor_surats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `parafs`
--
ALTER TABLE `parafs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `persyaratans`
--
ALTER TABLE `persyaratans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `surats`
--
ALTER TABLE `surats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tandatgns`
--
ALTER TABLE `tandatgns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `file_surats`
--
ALTER TABLE `file_surats`
  ADD CONSTRAINT `file_surats_surat_id_foreign` FOREIGN KEY (`surat_id`) REFERENCES `surats` (`id`);

--
-- Ketidakleluasaan untuk tabel `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_surat_id_foreign` FOREIGN KEY (`surat_id`) REFERENCES `surats` (`id`);

--
-- Ketidakleluasaan untuk tabel `parafs`
--
ALTER TABLE `parafs`
  ADD CONSTRAINT `parafs_surat_id_foreign` FOREIGN KEY (`surat_id`) REFERENCES `surats` (`id`);

--
-- Ketidakleluasaan untuk tabel `persyaratans`
--
ALTER TABLE `persyaratans`
  ADD CONSTRAINT `persyaratans_surat_id_foreign` FOREIGN KEY (`surat_id`) REFERENCES `surats` (`id`);

--
-- Ketidakleluasaan untuk tabel `surats`
--
ALTER TABLE `surats`
  ADD CONSTRAINT `surats_mhs_id_foreign` FOREIGN KEY (`mhs_id`) REFERENCES `mahasiswas` (`id`);

--
-- Ketidakleluasaan untuk tabel `tandatgns`
--
ALTER TABLE `tandatgns`
  ADD CONSTRAINT `tandatgns_surat_id_foreign` FOREIGN KEY (`surat_id`) REFERENCES `surats` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
