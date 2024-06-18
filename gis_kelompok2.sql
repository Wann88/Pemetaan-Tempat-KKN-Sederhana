-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Jun 2024 pada 04.47
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_kelompok2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `lat` float(9,6) NOT NULL,
  `lng` float(9,6) NOT NULL,
  `kelompok` varchar(255) NOT NULL,
  `anggota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `lokasi`, `keterangan`, `lat`, `lng`, `kelompok`, `anggota`) VALUES
(1, 'Desa Pandan Sari, Kec.Karang bintang', '...', -3.359367, 115.852844, '1', '(1)Wanda,(2)Muhammad Malik Akba, (3)Elza Ilham Adi Pratama,(4)Muhammad Anugerah Mufti,(5)⁠Trimuldiyanto Wijaya ,(6)Muhammad Rizqi Rizald'),
(2, 'Desa Sari Gadung, Kec.Simpang Empat', '...', -3.396450, 115.977692, '2', '(1)Wanda,(2)Muhammad Malik Akba, (3)Elza Ilham Adi Pratama,(4)Muhammad Anugerah Mufti,(5)⁠Trimuldiyanto Wijaya ,(6)Muhammad Rizqi Rizald'),
(3, 'Desa Sidomulyo, Kec. Mantewe', '...', -3.285930, 115.839188, '3', '(1)Wanda,(2)Muhammad Malik Akba, (3)Elza Ilham Adi Pratama,(4)Muhammad Anugerah Mufti,(5)⁠Trimuldiyanto Wijaya ,(6)Muhammad Rizqi Rizald'),
(4, 'Desa Karang Rejo, Kec. Karang Bintang', '...', -3.399153, 115.826248, '4', '(1)Wanda,(2)Muhammad Malik Akba, (3)Elza Ilham Adi Pratama,(4)Muhammad Anugerah Mufti,(5)⁠Trimuldiyanto Wijaya ,(6)Muhammad Rizqi Rizald'),
(5, 'Desa Manunggal, Kec. Karang Bintang', '...', -3.336813, 115.928055, '5', '(1)Wanda,(2)Muhammad Malik Akba, (3)Elza Ilham Adi Pratama,(4)Muhammad Anugerah Mufti,(5)⁠Trimuldiyanto Wijaya ,(6)Muhammad Rizqi Rizald');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Wanda', 'wanda', '123', 'Administrator'),
(2, 'Elza', 'elza', '123', 'Kepala');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
