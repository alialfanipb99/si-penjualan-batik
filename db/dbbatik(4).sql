-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2021 pada 11.35
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbatik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_databatik`
--

CREATE TABLE `tb_databatik` (
  `jenis_batik` varchar(40) NOT NULL,
  `jenis_bahan` varchar(35) NOT NULL,
  `kategori_produk` varchar(50) NOT NULL,
  `jumlah_persediaan` varchar(25) NOT NULL,
  `supplier` varchar(45) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_databatik`
--

INSERT INTO `tb_databatik` (`jenis_batik`, `jenis_bahan`, `kategori_produk`, `jumlah_persediaan`, `supplier`, `id`) VALUES
('Cirebon', 'Kain Katun', 'Kemeja Pria Lengan Pendek', '20 pcs', 'PT. Harapan Abadi Tekstil Indonesia', 1),
('Solo dan Yogyakarta', 'Kain Mori', 'Dress Atasan Wanita', '15 pcs', 'UD.Rumah Batik Jawa Timur', 2),
('Pekalongan', 'Kain Paris', 'Kemeja Wanita Lengan Panjang', '30 pcs', 'UD.Busana Agung', 3),
('Tasik', 'Kain Serat Nanas', 'Gamis Anak-anak Perempuan', '10 pcs', 'PT. Kusama Kencana Mulya', 4),
('Pesisir Jawa', 'Kain Sutera', 'Kemeja Anak Laki-laki ', '5 pcs', 'PT. Armatama Dado', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualanbatik`
--

CREATE TABLE `tb_penjualanbatik` (
  `id` int(5) NOT NULL,
  `konsumen` varchar(20) NOT NULL,
  `jumlah_batik_terjual` varchar(25) NOT NULL,
  `motif_batik` varchar(35) NOT NULL,
  `harga` int(50) NOT NULL,
  `total_pembayaran` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penjualanbatik`
--

INSERT INTO `tb_penjualanbatik` (`id`, `konsumen`, `jumlah_batik_terjual`, `motif_batik`, `harga`, `total_pembayaran`) VALUES
(12, 'Amri', '10 pcs', 'Mega Mendung', 130000, 1500000),
(14, 'Rani', '5 pcs', 'Sogan', 130000, 650000),
(15, 'Putri', '20 pcs', 'Tujuh Rupa', 80000, 1600000),
(16, 'Mawar', '2 pcs', 'Priangan', 100000, 200000),
(17, 'Anggun', '4 pcs', 'Parang', 55000, 220000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'batco@gmail.com', 'Batik Collection', 1, 'Karyawan XYZ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_databatik`
--
ALTER TABLE `tb_databatik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penjualanbatik`
--
ALTER TABLE `tb_penjualanbatik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_databatik`
--
ALTER TABLE `tb_databatik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualanbatik`
--
ALTER TABLE `tb_penjualanbatik`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
