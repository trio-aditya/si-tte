-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2021 pada 04.07
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si-tte`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(5) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Superadmin'),
(2, 'Operator OPD'),
(3, 'Kepala OPD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(5) NOT NULL,
  `judul_dokumen` varchar(100) NOT NULL,
  `tanggal_dokumen` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nomor_dokumen` varchar(50) NOT NULL,
  `posisi_tte` int(1) NOT NULL,
  `nilai_x` int(5) NOT NULL,
  `nilai_y` int(5) NOT NULL,
  `surat` varchar(100) NOT NULL,
  `tampil` int(1) NOT NULL,
  `waktu_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_surat`, `judul_dokumen`, `tanggal_dokumen`, `nomor_dokumen`, `posisi_tte`, `nilai_x`, `nilai_y`, `surat`, `tampil`, `waktu_upload`, `status`) VALUES
(8, 'Lorem Ipsun', '2021-06-27 03:00:58', '01/Kominfo/2021', 1, 100, 65, 'DAFTAR PUSTAKA.pdf', 1, '2021-06-29 03:01:03', 1),
(9, 'Lorem Ipsun', '2021-06-25 17:00:00', '03/Kominfo/2021', 3, 100, 65, 'DAFTAR PUSTAKA_1.pdf', 1, '2021-06-29 02:58:23', 1),
(10, 'Lorem Ipsun', '2021-06-29 01:27:40', '03/Kominfo/2021', 3, 100, 65, 'DAFTAR PUSTAKA_2.pdf', 1, '2021-06-29 01:27:40', 2),
(11, 'Lorem Ipsun 2', '2021-06-28 17:00:00', '06/kominfo/2021', 1, 100, 100, 'DAFTAR PUSTAKA_3.pdf', 1, '2021-06-28 15:57:54', 1),
(12, 'Lorem Ipsun 2', '2021-06-28 17:00:00', '06/kominfo/2021', 1, 100, 100, 'DAFTAR PUSTAKA_4.pdf', 1, '2021-06-28 15:58:23', 1),
(13, 'Lorem Ipsun 2', '2021-06-22 17:00:00', '01/kominfo/2021', 2, 100, 100, '26MEI21_DAILY REPORT LT.pdf.pdf', 0, '2021-06-28 16:00:45', 1),
(14, 'Lorem Ipsun 2', '2021-06-08 17:00:00', '01/kominfo/2021', 1, 100, 100, 'DAFTAR PUSTAKA_5.pdf', 1, '2021-06-28 16:03:37', 1),
(15, 'Lorem Ipsun 2', '2021-06-14 17:00:00', '01/kominfo/2021', 1, 100, 100, 'DAFTAR PUSTAKA_6.pdf', 1, '2021-06-28 16:35:53', 1),
(16, 'Lorem Ipsun 2', '2021-06-16 17:00:00', '01/kominfo/2021', 2, 100, 100, 'DAFTAR PUSTAKA_7.pdf', 1, '2021-06-28 16:43:15', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `role_id` int(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(1) NOT NULL,
  `masuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `session` varchar(50) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `golongan` varchar(20) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `role_id`, `username`, `password`, `status`, `masuk`, `session`, `nama_lengkap`, `nip`, `golongan`, `foto`) VALUES
(1, 1, 'admin', '$2y$10$aaRBGtlR1NMywWazGddute3UhKo6vMinMAJBd/TUfGAsl3HJf.dzi', 1, '2021-05-16 18:07:33', 'QWRtaW4=', 'Trio Aditya', '-', '-', NULL),
(2, 2, 'operator', '$2y$10$iELBNr6AxPao5z5R9.DOLOfBJs9M9kooM2xrgoE.wZ2cRC6EihrUy', 1, '2021-05-16 05:58:47', '', 'Operator', '-', '-', NULL),
(3, 3, 'kepala', '$2y$10$UYmzQP03utzqeQI2wqfPFeW.WWaUWeczx2SZrrdTv0rdbVPclTL3y', 1, '2021-05-16 05:59:24', '', 'Kepala', '-', '-', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_user_id_foreag` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
