-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2021 pada 06.39
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
('Parang rusak', 'Kain tenun', 'gaun', '50 pcs', 'Toko MS Collection', 0);

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
(12, 'Wulandari', '10 pcs', 'Satwa Dalam Kehidupan', 127, 20),
(14, 'a', '2', 'hewan', 200, 0),
(15, 'dinda', '12pcs', 'binatang', 150, 160);

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
-- AUTO_INCREMENT untuk tabel `tb_penjualanbatik`
--
ALTER TABLE `tb_penjualanbatik`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
