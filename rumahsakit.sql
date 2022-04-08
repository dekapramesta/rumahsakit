-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2022 pada 05.09
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_rm`
--

CREATE TABLE `tb_detail_rm` (
  `id_detail_rm` int(11) NOT NULL,
  `id_rm` int(11) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_detail_rm`
--

INSERT INTO `tb_detail_rm` (`id_detail_rm`, `id_rm`, `keluhan`, `diagnosa`, `tgl_periksa`) VALUES
(1, 3, 'Pusing', 'Migrain', '2022-04-08'),
(2, 4, 'Pegel', 'Pegel Linu', '2022-04-09'),
(3, 5, 'Mencret', 'Tipes', '2022-04-03'),
(4, 6, 'Muntah', 'Tipes', '2022-04-06'),
(5, 7, 'Mbuh', 'Mbuh', '2022-04-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('8de1a500-3663-457b-9a27-1644e0c17fa2', 'Dokter A', 'Penyakit Dalam', 'Pati', '088200110016'),
('e6bfe5eb-02b5-4ec1-b7f7-ce2e41547700', 'Dr. Yudi saputra', 'Penyakit Kulit', 'Kudus', '081275121552');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `ket_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `ket_obat`) VALUES
('403abc2b-2ef9-4a4e-96d2-b4d83a6a4d2b', 'Obat A', 'obat pusing'),
('43288b0b-661f-44ab-a86d-e149a1c529a9', 'Obat D', '-'),
('4d328bb7-8e21-4812-9686-cbfee056f0f3', 'obat C', 'sakit gigi'),
('bdba4c10-4993-4d4a-b76a-d8cad34326e9', 'Obat E', '-'),
('e2ea0e7e-04cf-4b41-8a87-04add912f993', 'obat B', 'obat demam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(11) NOT NULL,
  `nomor_identitas` varchar(100) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama_pasien`, `jenis_kelamin`, `alamat`, `no_telp`, `agama`, `tgl_lahir`) VALUES
(1, '187291267', 'deka', 'L', 'Dagangan, Madiun', '08976251652', 'Islam', '2022-04-08'),
(2, '427642', 'dk', 'L', 'Dagangan', '0898248738274', 'Islam', '2022-04-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `id_user`, `nama_lengkap`, `alamat`, `no_hp`, `email`) VALUES
(2, 1, 'admin griya', 'Dagangan, Madiun', '08976271251', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` varchar(50) NOT NULL,
  `status_rm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `id_pasien`, `id_dokter`, `status_rm`) VALUES
(3, 2, '8de1a500-3663-457b-9a27-1644e0c17fa2', 1),
(4, 2, '8de1a500-3663-457b-9a27-1644e0c17fa2', 1),
(5, 1, '8de1a500-3663-457b-9a27-1644e0c17fa2', 1),
(6, 1, '8de1a500-3663-457b-9a27-1644e0c17fa2', 1),
(7, 2, 'e6bfe5eb-02b5-4ec1-b7f7-ce2e41547700', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `id` int(10) NOT NULL,
  `id_rm` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '$2y$10$s2uU/B5yKx.b4u9eOCdite.IshVEM/vxaIcyArHEmkVzWv1HWOpdO', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_detail_rm`
--
ALTER TABLE `tb_detail_rm`
  ADD PRIMARY KEY (`id_detail_rm`),
  ADD KEY `id_rm` (`id_rm`);

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indeks untuk tabel `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `tb_rekammedis_ibfk_1` (`id_pasien`),
  ADD KEY `tb_rekammedis_ibfk_2` (`id_dokter`);

--
-- Indeks untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rm` (`id_rm`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_detail_rm`
--
ALTER TABLE `tb_detail_rm`
  MODIFY `id_detail_rm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  MODIFY `id_rm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_rm`
--
ALTER TABLE `tb_detail_rm`
  ADD CONSTRAINT `tb_detail_rm_ibfk_1` FOREIGN KEY (`id_rm`) REFERENCES `tb_rekammedis` (`id_rm`);

--
-- Ketidakleluasaan untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD CONSTRAINT `tb_pegawai_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `tb_rekammedis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_3` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`);

--
-- Ketidakleluasaan untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD CONSTRAINT `tb_rm_obat_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
