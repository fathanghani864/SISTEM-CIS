-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2025 pada 16.50
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
-- Database: `db_cis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cis`
--

CREATE TABLE `tbl_cis` (
  `id_siswa` int(50) NOT NULL,
  `nis` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_cis`
--

INSERT INTO `tbl_cis` (`id_siswa`, `nis`, `nama`, `kelas`) VALUES
(1, 24251001, 'RANGGA', 'X-3'),
(2, 24251002, 'AKSAJRENO ', 'X-2'),
(3, 24251003, 'GHANI', 'X-1'),
(4, 24251004, 'DENIZ', 'X-1'),
(5, 24251005, 'RAFA', 'X-1'),
(17, 123, 'efef', 'x-c'),
(269, 1234567, 'alvin', 'x-2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(50) NOT NULL,
  `nama_pelangaran` varchar(50) NOT NULL,
  `poin` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_pelangaran`, `poin`) VALUES
(1, 'TERLAMBAT', 10),
(2, 'TIDAK MENGGUNAKAN SABUK', 20),
(3, 'TIDAK MENGGUNAKAN DASI', 5),
(4, 'MEROKOK', 100),
(5, 'KELUAR DARI SEKOLAH TANPA IZIN', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggaran_siswa`
--

CREATE TABLE `tbl_pelanggaran_siswa` (
  `id_pelanggaran` int(50) NOT NULL,
  `kode_pelanggaran` varchar(50) NOT NULL,
  `id_siswa` int(50) NOT NULL,
  `id_kategori` int(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pelanggaran_siswa`
--

INSERT INTO `tbl_pelanggaran_siswa` (`id_pelanggaran`, `kode_pelanggaran`, `id_siswa`, `id_kategori`, `tanggal`) VALUES
(1, 'P001', 1, 5, '2024-04-24 17:00:00'),
(9, '', 2, 5, '2025-05-15 08:04:25'),
(10, '', 4, 3, '2025-05-15 08:05:11'),
(11, '', 4, 4, '2025-05-15 08:05:11'),
(12, '', 2, 4, '2025-05-15 08:10:41'),
(13, '', 2, 5, '2025-05-15 08:10:41'),
(14, '', 2, 4, '2025-05-15 08:12:37'),
(15, '', 2, 5, '2025-05-15 08:12:37'),
(16, '', 2, 1, '2025-05-15 08:12:42'),
(17, '', 2, 4, '2025-05-15 08:12:50'),
(18, '', 2, 4, '2025-05-15 08:17:42'),
(19, '', 1, 1, '2025-05-15 08:17:48'),
(20, '', 1, 2, '2025-05-15 08:17:48'),
(21, '', 1, 1, '2025-05-15 08:18:06'),
(22, '', 1, 2, '2025-05-15 08:18:06'),
(23, '', 1, 3, '2025-05-15 08:18:06'),
(24, '', 1, 4, '2025-05-15 08:18:06'),
(25, '', 1, 5, '2025-05-15 08:18:06'),
(26, '', 269, 1, '2025-05-20 07:25:30'),
(27, '', 269, 2, '2025-05-20 07:25:30'),
(28, '', 269, 3, '2025-05-20 07:25:30'),
(29, '', 269, 4, '2025-05-20 07:25:30'),
(30, '', 269, 5, '2025-05-20 07:25:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama`) VALUES
(9, 'dfghjkl', 'xsa', 'xsa'),
(10, 'asdfg', 'asdfgh', 'asdefrgt'),
(11, 'asdfg', 'asdfgh', ''),
(12, 'asdfg', 'asdfgh', 'asdefrgt'),
(13, 'asdfg', 'asdfgh', 'asdefrgt'),
(14, 'asdfg', 'asdfgh', 'asdefrgt'),
(15, 'asdfg', 'asdfgh', 'asdefrgt'),
(16, 'asdfg', 'asdfgh', 'asdefrgt'),
(17, 'rafa', 'hani', 'ngga tau'),
(18, 'fathan ghani', 'hazel', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_cis`
--
ALTER TABLE `tbl_cis`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_pelanggaran_siswa`
--
ALTER TABLE `tbl_pelanggaran_siswa`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_cis`
--
ALTER TABLE `tbl_cis`
  MODIFY `id_siswa` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggaran_siswa`
--
ALTER TABLE `tbl_pelanggaran_siswa`
  MODIFY `id_pelanggaran` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
