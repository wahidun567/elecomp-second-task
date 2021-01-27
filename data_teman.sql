-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2021 pada 05.47
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_teman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `teman`
--

CREATE TABLE `teman` (
  `id_teman` int(11) NOT NULL,
  `nama_teman` varchar(50) NOT NULL,
  `no_hp_teman` varchar(20) NOT NULL,
  `pekerjaan_teman` text NOT NULL,
  `kenalan_dari` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `teman`
--

INSERT INTO `teman` (`id_teman`, `nama_teman`, `no_hp_teman`, `pekerjaan_teman`, `kenalan_dari`) VALUES
(1, 'Wifqo Arova Syam', '085157284478', 'Pengusaha Sepatu', 'Sepril Hady Sasmonang'),
(2, 'Nur Wahid', '085855437148', 'Pengusaha Kuliner', 'Wifqo Arova Syam'),
(3, 'Sepril Hady Sasmonang', '088801787504', 'Marketing Matos', 'Sasmitha'),
(4, 'Pika Novisa', '088805686021', 'Direktur Mall Matos', 'coba2'),
(6, 'Mochammad Bisma Prasetya', '09893741996', 'Pengusaha Kuliner', 'Wifqo Arova Syam'),
(13, 'Rifki Adit', '0987754457889', 'progammer', 'Pika Novisa'),
(14, 'Sasmitha', '0898776656', 'Matos', 'Sepril Hady Sasmonang'),
(18, 'coba2', '812749180', 'progammer', 'Sepril Hady Sasmonang'),
(19, 'knqejfk', '0987754457889', 'juhbujhbjhbj', 'Nur Wahid');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `teman`
--
ALTER TABLE `teman`
  ADD PRIMARY KEY (`id_teman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `teman`
--
ALTER TABLE `teman`
  MODIFY `id_teman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
