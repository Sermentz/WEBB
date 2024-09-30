-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2024 pada 07.49
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbaka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok`
--

CREATE TABLE `stok` (
  `idbarang` int(11) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `nbarang` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `letak` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `stok`
--

INSERT INTO `stok` (`idbarang`, `barcode`, `nbarang`, `jenis`, `letak`, `stok`) VALUES
(17, '8998866203531', 'Sendok', 'Alat Makan', 'A22', 647),
(20, '8992759124354', 'Tisu Nice', 'Tisu', 'C10', 313),
(23, '8999999572730', 'Garpu', 'Alat Makan', 'B22', 65);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkeluar`
--

CREATE TABLE `tkeluar` (
  `idkeluar` int(11) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `ktanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kjumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tkeluar`
--

INSERT INTO `tkeluar` (`idkeluar`, `barcode`, `ktanggal`, `kjumlah`) VALUES
(29, '8999999572730', '2024-01-17 17:38:21', 3),
(32, '8999999572730', '2024-01-17 17:44:11', 2),
(35, '8998866203531', '2024-02-04 13:09:47', 5),
(37, '8992759124354', '2024-02-21 14:39:41', 20),
(56, '8999999572730', '2024-02-22 03:19:29', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmasuk`
--

CREATE TABLE `tmasuk` (
  `idmasuk` int(11) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mjumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tmasuk`
--

INSERT INTO `tmasuk` (`idmasuk`, `barcode`, `tanggal`, `mjumlah`) VALUES
(47, '8999999572730', '2024-01-17 17:18:14', 10),
(60, '8999999572730', '2024-01-18 18:38:35', 10),
(63, '8998866203531', '2024-02-04 13:09:32', 20),
(69, '8992759124354', '2024-02-21 14:41:43', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `email`, `password`, `role`) VALUES
(1, 'admin@gmail.com', 'admin', 'Admin'),
(3, 'pegawai@gmail.com', 'pegawai', 'Pegawai'),
(5, 'pemasok@gmail.com', 'pemasok', 'Pemasok');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`idbarang`),
  ADD UNIQUE KEY `barcode` (`barcode`);

--
-- Indeks untuk tabel `tkeluar`
--
ALTER TABLE `tkeluar`
  ADD PRIMARY KEY (`idkeluar`);

--
-- Indeks untuk tabel `tmasuk`
--
ALTER TABLE `tmasuk`
  ADD PRIMARY KEY (`idmasuk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `username` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `stok`
--
ALTER TABLE `stok`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tkeluar`
--
ALTER TABLE `tkeluar`
  MODIFY `idkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `tmasuk`
--
ALTER TABLE `tmasuk`
  MODIFY `idmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
