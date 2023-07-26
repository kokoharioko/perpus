-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2020 pada 19.35
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_buku`
--

CREATE TABLE `t_buku` (
  `id_buku` int(4) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `pengarang` varchar(75) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_buku`
--

INSERT INTO `t_buku` (`id_buku`, `nama_buku`, `penerbit`, `pengarang`, `harga`) VALUES
(1002, 'Tokyo Dan Perayaan Kesedihan', ' Gramedia Pustaka Utama', 'Ruth Priscilia Angelina', 'Rp.75.000'),
(1003, '111 Kode HTML untuk Belajar Kilat', ' Elex Media Komputindo', 'Arista Prasetyo Adi', 'Rp.56.800'),
(1004, 'Mahir Bahasa Pemrograman PHP', ' Elex Media Komputindo', 'Miftahul Jannah, Sarwandi, Cyber Creative', 'Rp.60.800');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengarang`
--

CREATE TABLE `t_pengarang` (
  `id_pengarang` int(11) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pengarang`
--

INSERT INTO `t_pengarang` (`id_pengarang`, `nama_pengarang`) VALUES
(101, 'Ruth Priscilia Angelina	'),
(102, 'Arista Prasetyo Adi'),
(103, 'Miftahul Jannah, Sarwandi, Cyber Creative');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_penjualan`
--

CREATE TABLE `t_penjualan` (
  `id_buku` int(4) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `jumlah_terjual` int(11) NOT NULL,
  `total_harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_penjualan`
--

INSERT INTO `t_penjualan` (`id_buku`, `harga`, `jumlah_terjual`, `total_harga`) VALUES
(1002, 'Rp.75.000', 3, 'Rp.225.000'),
(1003, 'Rp.56.800', 7, 'Rp.397.600'),
(1004, 'Rp.60.800', 16, 'Rp.851.200');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_stok`
--

CREATE TABLE `t_stok` (
  `nama_buku` varchar(100) NOT NULL,
  `stok_tersedia` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_stok`
--

INSERT INTO `t_stok` (`nama_buku`, `stok_tersedia`) VALUES
('Tokyo Dan Perayaan Kesedihan', 7),
('111 Kode HTML untuk Belajar Kilat', 19),
('Mahir Bahasa Pemrograman PHP', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id-user` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(255) NOT NULL,
  `type_user` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id-user`, `username`, `password`, `type_user`) VALUES
('j001', 'admin', 12345, 1),
('j002', 'admin2', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_buku`
--
ALTER TABLE `t_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `t_pengarang`
--
ALTER TABLE `t_pengarang`
  ADD PRIMARY KEY (`id_pengarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
