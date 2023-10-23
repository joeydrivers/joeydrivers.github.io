-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2023 pada 16.46
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `travel`
--

CREATE TABLE `travel` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `travel`
--

INSERT INTO `travel` (`id`, `nama`, `alamat`, `no_hp`, `tujuan`, `tanggal`, `gambar`) VALUES
(9, 'Joy Disanto Nupa', 'Jl. Borneo', '085387395006', 'Samarinda - Balikpapan', '2023-10-14', '2023-10-23 22-32-49Joy Disanto Nupapng'),
(10, 'Sabda Mangetek', 'Jl. AYAM 1', '0976888876567', 'Samarinda - Makassar', '2023-10-20', '2023-10-23 10-33-25Sabda Mangetek.jpeg'),
(11, 'Aldi Malakka', 'Jl. Lumau 32', '56787654567', 'Berau-Gorontalo', '2023-10-28', '2023-10-23 10-35-37Aldi Malakka.jpg'),
(12, 'Assaalam', 'Jl. ABC', '976888876567', 'Samarinda - Malinau', '2023-10-20', '2023-10-23 22-45-42Assaalampng');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
