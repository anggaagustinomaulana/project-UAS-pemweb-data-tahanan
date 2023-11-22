-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2023 pada 15.42
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_login`
--

CREATE TABLE `db_login` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_login`
--

INSERT INTO `db_login` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 0),
(3, 'user', 'user', '12dea96fec20593566ab75692c9949596833adc9', 0),
(4, 'rico', 'rico', '2affaef592569667bbc4c70dae8e877a3d0943bf', 0),
(7, 'tegar', 'tegar', '839fb980adb31f080ab0a7f7e3317744ebaa9c60', 0),
(8, 'angga', 'angga', '26c352d286df9c08cafd83fa2f36143412aa5e0d', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_tahanan`
--

CREATE TABLE `db_tahanan` (
  `id` int(5) NOT NULL,
  `nama_tahanan` varchar(50) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `info` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_tahanan`
--

INSERT INTO `db_tahanan` (`id`, `nama_tahanan`, `tgl`, `info`, `asal`) VALUES
(2, 'Nova Cornelius', '12 - 07 - 2023', 'Seumur Hidup', 'Pati'),
(3, 'Tulang Punggung', '20 - 06 - 2023', 'Mati', 'Semarang'),
(22, 'Faisal Akmaludin', '20 - 06 - 2023', '8 Bulan', 'Semarang'),
(27, 'Anggi Ade', '28 - 05 - 2023', '2 Tahun', 'Pemalang'),
(28, 'Ardi Lambang', '28 - 05 - 2023', '2 Tahun', 'Kendal'),
(29, 'Bagas Aditya', '28 - 03 - 2023', '1 Tahun', 'Kendal'),
(30, 'Chairunnita', '12 - 07 - 2023', '4 Bulan', 'Rembang'),
(31, 'Syahrul Adrianto', '20 - 04 - 2023', 'Seumur Hidup', 'Pemalang'),
(32, 'Abdun Nafi', '05 - 04 - 2023', 'Seumur Hidup', 'Demak'),
(33, 'Aldi Widodo', '12 - 07 - 2023', 'Seumur Hidup', 'Pemalang'),
(34, 'Bima Aditya', '05 - 12 - 2022', '2 Tahun', 'Pemalang'),
(35, 'Arwan Mangli', '09 - 11 - 2022', '2 Tahun', 'Pati'),
(36, 'Lirih Setyo', '12 - 07 - 2023', '4 Bulan', 'Pati'),
(37, 'Jajak Desem', '05 - 12 - 2022', 'Mati', 'Grobogan'),
(38, 'Alvin Novizar', '24 - 12 - 2022', 'Seumur Hidup', 'Rembang'),
(39, 'Falah Desi', '28 - 03 - 2023', '2 Tahun', 'Brebes'),
(40, 'Yabes Palapa', '05 - 04 - 2023', '1 Tahun', 'Grobogan'),
(41, 'Baromim Mimim', '20 - 04 - 2023', '8 Bulan', 'Batang'),
(42, 'Zaenal Abidin', '16 - 01 - 2023', '1 Tahun', 'Kendal'),
(43, 'Arsyad Waulimo', '19 - 07 - 2022', 'Seumur Hidup', 'Demak'),
(44, 'Jefri Frimawan', '20 - 04 - 2023', 'Seumur Hidup', 'Demak'),
(45, 'Vivi Dwi', '02 - 12 - 2022', 'Seumur Hidup', 'Pati'),
(46, 'Yoga Utama', '12 - 07 - 2023', '2 Tahun', 'Jepara'),
(47, 'Ruang Rindu', '20 - 04 - 2023', 'Seumur Hidup', 'Pati'),
(48, 'Anas Lawles', '11 - 02 - 2022', '2 Tahun', 'Pati'),
(49, 'Luffy Miyaki', '05 - 12 - 2022', 'Seumur Hidup', 'Jepang'),
(50, 'Slamet Tujuan', '28 - 05 - 2023', '2 Tahun', 'Tegal'),
(51, 'Azarine Alamboh', '05 - 12 - 2022', '1 Tahun', 'Kendal'),
(52, 'Ilham Maane Arif', '05 - 12 - 2022', 'Seumur Hidup', 'Semarang'),
(53, 'Alfina Uhuy', '05 - 12 - 2022', '1 Tahun', 'Brebes'),
(54, 'Risma Hidayat', '28 - 03 - 2023', '2 Tahun', 'Kendal'),
(55, 'Karlok Wamesta', '05 - 12 - 2022', 'Seumur Hidup', 'Pemalang'),
(56, 'Wulanpari', '20 - 04 - 2023', 'Mati', 'Brebes'),
(57, 'Novan Anabelle', '12 - 07 - 2023', '8 Bulan', 'Demak'),
(58, 'Rifqi Mualaf', '12 - 07 - 2023', 'Seumur Hidup', 'Semarang'),
(59, 'Nicko Nukman', '12 - 07 - 2023', 'Mati', 'Blora');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_login`
--
ALTER TABLE `db_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `db_tahanan`
--
ALTER TABLE `db_tahanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_login`
--
ALTER TABLE `db_login`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `db_tahanan`
--
ALTER TABLE `db_tahanan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
