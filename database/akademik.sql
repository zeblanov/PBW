-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2024 pada 06.42
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tahun` int(4) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `isdel` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `tahun`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `isdel`) VALUES
(1, 'abc', 2020, 0, '2024-12-16 07:00:44', NULL, NULL, NULL, NULL, 0),
(2, 'abc', 2020, 0, '2024-12-16 07:02:04', NULL, NULL, 0, '2024-12-21 12:33:22', 1),
(3, 'dono', 2020, 0, '2024-12-16 07:05:37', NULL, NULL, 0, '2024-12-21 12:29:01', 1),
(4, 'dilan 90', 2018, 0, '2024-12-21 12:20:50', NULL, NULL, 0, '2024-12-21 12:29:00', 1),
(5, 'abc', 2925, 0, '2024-12-21 12:34:33', NULL, NULL, 0, '2024-12-21 12:34:35', 1),
(6, 'dono', 2019, 0, '2024-12-21 12:34:43', NULL, NULL, 0, '2024-12-21 12:35:05', 1),
(7, 'bajajaj', 20910, 0, '2024-12-21 12:34:53', NULL, NULL, 0, '2024-12-21 12:46:45', 1),
(8, 'avenger end ', 2018, 0, '2024-12-21 12:42:24', 0, '2024-12-23 06:43:49', 0, '2024-12-23 06:43:52', 1),
(9, 'avatar', 2925, 0, '2024-12-23 06:39:02', 0, '2024-12-23 06:39:40', NULL, NULL, 0),
(10, '', 0, 0, '2024-12-23 06:39:33', NULL, NULL, 0, '2024-12-23 06:39:37', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `active`) VALUES
(1212, 'zhe', 'example@gmail.com', 'e2679f45d42a09893b228fd5459644b4', 1),
(1213, 'pw ze123\r\n', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1214;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
