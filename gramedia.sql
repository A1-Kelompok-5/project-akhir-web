-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2023 pada 17.33
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gramedia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `stock` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `kategori`, `judul`, `penulis`, `harga`, `stock`) VALUES
(1, 'ilmu sosial', 'Aldera', 'Teddy Wibisana', 'Rp 84.000', '23'),
(2, 'ilmu sosial', 'Cahaya Baru', 'Buya Hamka', 'Rp 72.000', '12'),
(3, 'ilmu sosial', 'Jalan Pulang', 'Kepustakaan Populer Grame', 'Rp 93.000', '33'),
(4, 'ilmu sosial', 'How to Grow Old', 'Marcus Tullius Cicero', 'Rp 67.000', '3'),
(5, 'ilmu sosial', 'Memburu Cipta,Rasa & Karsa', 'Mayjend (Purn) Samsudin', 'Rp 101.000', '27'),
(6, 'kesehatan', 'Keperawatan Jiwa', 'Ns. Sutejo, M.Kep., Sp.Kep.J.', 'Rp 54.000', '2'),
(7, 'kesehatan', 'Komunikasi Dalam Keperawatan', 'Tri Prabowo, S.kp., M.sc.', 'Rp 35.000', '6'),
(8, 'kesehatan', 'Ilmu Kesehatan Masyarakat', 'I Ketut Swarjana', 'Rp 108.000', '32'),
(9, 'kesehatan', 'Advokasi', 'Hadi Pratomo', 'Rp 149.000', '19'),
(10, 'kesehatan', 'Pendidikan Keperawatan Gerontik', 'Abdul Muhith', 'Rp 103.000', '13'),
(11, 'sains', 'Gen', 'Siddhartha Mukherjee', 'Rp 149.000', '7'),
(12, 'sains', 'The Selfish Gene', 'Richard Dawkins', 'Rp 71.000', '3'),
(13, 'sains', 'The Biology of Belief', 'Bruce Lipton ', 'Rp 102.000', '12'),
(14, 'sains', 'Biologi Molekular', 'Triwibowo Yuwono ', 'Rp 152.000', '9'),
(15, 'sains', 'Morfologi Tumbuhan', 'Dewi Rosanti ', 'Rp 238.000', '13'),
(16, 'astronomi', 'Kosmos: Aneka Ragam Dunia', 'Ann Druyan ', 'Rp 108.000', '43'),
(17, 'astronomi', 'Pokok-Pokok Materi Statistik 1 edisi 2', 'Iqbal Hasan ', 'Rp 122.000', '31'),
(18, 'romance', '5 Cm', 'Donny Dhirgantoro ', 'Rp 67.000', '11'),
(19, 'romance', 'Ananta Prahadi', 'Risa Saraswati ', 'Rp 71.000', '11'),
(20, 'romance', 'Merayakan Kehilangan', 'Brian Khrisna ', 'Rp 58.000', '6'),
(21, 'romance', 'Novel Berjuta Rasanya', 'Tere Liye', 'Rp 50.000', '6'),
(22, 'novel', 'EL', 'Luluk HF ', 'Rp 99.000', '5'),
(23, 'novel', 'Taman Sang Nabi', ' Kahlil Gibran ', 'Rp 35.000', '12'),
(24, 'novel', 'Komet', ' Tere Liye ', 'Rp 71.000', '11'),
(25, 'novel', 'Novel Dilan 2:Dia Adalah Dilanku Tahun 1991', ' Pidi Baiq ', 'Rp 89.000', '44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_transaksi`
--

CREATE TABLE `riwayat_transaksi` (
  `id` int(3) NOT NULL,
  `id_transaksi` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('BERHASIL','GAGAL') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `riwayat_transaksi`
--

INSERT INTO `riwayat_transaksi` (`id`, `id_transaksi`, `tanggal`, `status`) VALUES
(1, 1, '2023-04-29', 'BERHASIL'),
(2, 2, '2023-04-29', 'GAGAL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `id_buku` int(3) NOT NULL,
  `jumlah` char(3) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_buku`, `jumlah`, `total`) VALUES
(1, 6, 13, '2', 'Rp. 202.000'),
(2, 6, 25, '3', 'Rp. 300.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` enum('PEMILIK','ADMIN','PEMBELI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Pemilik Toko', 'pemilik', 'pemilik123', 'PEMILIK'),
(2, 'Admin Panji', 'panji', 'panji123', 'ADMIN'),
(3, 'Admin Naya', 'naya', 'naya123', 'ADMIN'),
(4, 'Admin Windy', 'windy', 'windy123', 'ADMIN'),
(5, 'Pembeli Toko', 'pembeli', 'pembeli123', 'PEMBELI'),
(6, 'madan', 'madhan', '123', 'PEMBELI');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `riwayat_transaksi`
--
ALTER TABLE `riwayat_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `riwayat_transaksi`
--
ALTER TABLE `riwayat_transaksi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `riwayat_transaksi`
--
ALTER TABLE `riwayat_transaksi`
  ADD CONSTRAINT `riwayat_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
