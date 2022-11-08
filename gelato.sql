-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2022 pada 00.55
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gelato`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'chello', 'chello'),
(3, 'zahra', 'zahra'),
(4, 'anin', 'anin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `id_rasa` int(11) NOT NULL,
  `id_wadah` int(11) NOT NULL,
  `id_topping` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama`, `id_rasa`, `id_wadah`, `id_topping`, `tanggal`) VALUES
(4, 'Zahra', 1, 2, 2, '2022-11-04 06:24:01'),
(9, 'Anin', 1, 1, 3, '2022-11-04 09:12:55'),
(12, 'Chelloana', 2, 1, 2, '2022-11-05 07:52:27'),
(16, 'Hanni', 2, 2, 1, '2022-11-05 10:35:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rasa`
--

CREATE TABLE `rasa` (
  `id_rasa` int(11) NOT NULL,
  `rasa` varchar(20) NOT NULL,
  `harga_rasa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rasa`
--

INSERT INTO `rasa` (`id_rasa`, `rasa`, `harga_rasa`) VALUES
(1, 'Caramel', 30000),
(2, 'Lotus Biscoff', 32000),
(3, 'Tiramisu', 33000),
(15, 'Strawberry', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `topping`
--

CREATE TABLE `topping` (
  `id_topping` int(11) NOT NULL,
  `topping` varchar(20) NOT NULL,
  `harga_topping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `topping`
--

INSERT INTO `topping` (`id_topping`, `topping`, `harga_topping`) VALUES
(1, 'Oreo', 8000),
(2, 'Sprinkles', 5000),
(3, 'Cerry', 3500),
(6, 'Coco Crunch', 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wadah`
--

CREATE TABLE `wadah` (
  `id_wadah` int(11) NOT NULL,
  `wadah` varchar(20) NOT NULL,
  `harga_wadah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wadah`
--

INSERT INTO `wadah` (`id_wadah`, `wadah`, `harga_wadah`) VALUES
(1, 'Cup Besar', 3500),
(2, 'Cone', 5000),
(3, 'Cup Kecil', 2500),
(6, 'Waffle', 8000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_rasa` (`id_rasa`,`id_wadah`,`id_topping`);

--
-- Indeks untuk tabel `rasa`
--
ALTER TABLE `rasa`
  ADD PRIMARY KEY (`id_rasa`);

--
-- Indeks untuk tabel `topping`
--
ALTER TABLE `topping`
  ADD PRIMARY KEY (`id_topping`);

--
-- Indeks untuk tabel `wadah`
--
ALTER TABLE `wadah`
  ADD PRIMARY KEY (`id_wadah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `rasa`
--
ALTER TABLE `rasa`
  MODIFY `id_rasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `topping`
--
ALTER TABLE `topping`
  MODIFY `id_topping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `wadah`
--
ALTER TABLE `wadah`
  MODIFY `id_wadah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
