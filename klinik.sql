-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2024 pada 13.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_antrian`
--

CREATE TABLE `tb_antrian` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `no_telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('109118c8-c5c6-43da-a5f7-c244cf1c2e34', 'dr. Fatia Permata Sari, Sp.THT', 'THT', 'Magelang', '089278120912'),
('14d4b8c7-ce2f-456e-ba3b-5813238f1a47', 'dr. Ani Wulandari, Sp.KK', 'Kulit', 'Cirebon', '087242180428'),
('3c9d3399-8391-4bc6-a253-8ae2071c80d2', 'dr. Aulia Rahman, Sp.A', 'Kesehatan Anak', 'Tangerang', '083841890026'),
('464c30ad-9ae2-4eb0-9797-695fb9ab6d87', 'dr. Fadhil Pratama, Sp.JP', 'Jantung dan Pembuluh Darah', 'Bandung', '089236218901'),
('5174d76e-381f-4eef-9ff0-3c9d9880f0b1', 'dr. Aris Rizky, Sp.M', 'Mata', 'Bogor', '083812410940'),
('5ce58c97-86ad-4cf4-9153-fe82c5007205', 'dr. Audy Budiarty, Sp.BP', 'Bedah Plastik', 'Tangerang', '089234561289'),
('61b565ac-8af5-46f9-ae76-859ac0851992', 'dr. Arini Putri, Sp.S', 'Saraf', 'Jakarta', '083854120903'),
('7c739878-6237-476e-8ee3-468869a5dacd', 'dr. Sabrina Aulia, Sp.OG', 'Kandungan', 'Bekasi', '085289012365'),
('8725c76e-43f5-4d43-9deb-df6cf981421f', 'dr. Rahmawati, Sp.P', 'Paru', 'Depok', '087709218442'),
('91fd2af5-4c2c-4c91-9a53-4a49e4f98ebd', 'Dr. Firly Hartanto', 'Ginjal', 'Bandung', '089512480923'),
('9ac06630-9a85-42d7-a535-28433995c394', 'Dr. Bryan Saragih', 'Penyakit Dalam', 'Surabaya', '083814550234'),
('b56031ff-5e85-41fc-9df5-f4d913e8ed3e', 'drg. Anindhita Saraswati, Sp.KG', 'Gigi dan Mulut', 'Yogyakarta', '083872410923'),
('b956bbcf-83c1-4842-80e0-98f9d22e4131', 'Dr. Dina Agustin', 'Penyakit Dalam', 'Semarang', '083845732190'),
('cc72dfb4-8baf-4e3e-aa00-6e1a76a3de8c', 'dr. Andriani Putri, Sp.S', 'Saraf', 'Jakarta', '087423415672'),
('d7329761-9ed3-4e7e-aee4-059e04eda750', 'Dr. Bambang Supriyatno', 'Saraf', 'Surakarta', '087765218043'),
('eb11a611-2d04-4138-becd-901fe1fedd9d', 'dr. Elizabeth Yasmine Wardoyo, Sp.PD, FINASIM', 'Penyakit Dalam', 'Malang', '083890246812'),
('efbff8e8-1c0a-4c81-aebc-c8ead1f60722', 'dr. Ayu Wulansari, Sp.P', 'Paru', 'Subang', '087832145672'),
('fc29925d-14d1-4523-9c89-959087e79a64', 'dr. Rezadi Putra, Sp.P', 'Paru', 'Cirebon', '089235612189');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(200) NOT NULL,
  `ket_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `ket_obat`) VALUES
('0f19f765-9cc8-11ee-9741-4224ed3b5f2c', 'Paracetamol', 'Obat Demam'),
('479eaf8b-3482-4527-9f70-fb5dc577181d', 'Diprosalic Salep', 'Obat Kulit'),
('5e7bcfec-d5fa-40b9-8aea-23a0bf78e010', 'Oskadon', 'Obat Pusing'),
('697a3cea-997c-498b-b465-fca8b93ccce5', 'Tolak Angin', 'Obat Masuk Angin'),
('8ac409a3-f6b2-40c0-88cd-ec2a344bea80', 'Bodrex', 'Obat Pusing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `nomor_identitas` varchar(40) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama_pasien`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
('0133311a-7283-40dc-a715-26fbd2369faa', '11289234', 'Rizki', 'L', 'Bogor', '083845234589'),
('054f9e79-0f05-4717-ab7e-deee48cb2734', '177892340', 'Zakky', 'L', 'Banyuwangi', '083845621349'),
('0d90526d-af9e-442c-b848-8c85a2dcafc9', '15642356', 'Salsa', 'P', 'Jakarta', '087345620981'),
('15b2bf5c-acd3-4dcd-916f-1292daee000f', '189233234', 'Zahra', 'P', 'Cikarang', '089289014371'),
('d1cff5d6-dbe2-43df-a1d4-263c82907a5e', '18908245', 'Ridho', 'L', 'Jombang', '087789021321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poli` varchar(50) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `gedung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poli`, `nama_poli`, `gedung`) VALUES
('05069b6f-4169-4dc4-bceb-2fad944ecb88', 'Poli E', 'J.Lt.III'),
('2fb28956-a46a-45c6-9f3c-762c397a14da', 'Poli B', 'Jl.Lt.IV'),
('986d410b-a8bc-4dea-ad02-7a8208d4cfe6', 'Poli A', 'Jl.Lt.II'),
('b6322a66-a0bb-11ee-9741-4224ed3b5f2c', 'Poli F', 'J.Lt.I');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` varchar(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `id_dokter` varchar(50) NOT NULL,
  `diagnosa` text NOT NULL,
  `id_poli` varchar(50) NOT NULL,
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `id_pasien`, `keluhan`, `id_dokter`, `diagnosa`, `id_poli`, `tgl_periksa`) VALUES
('4da9a20b-2398-460d-a650-4ecf9a61f3ca', '15b2bf5c-acd3-4dcd-916f-1292daee000f', 'Gatal-Gatal', '14d4b8c7-ce2f-456e-ba3b-5813238f1a47', 'Herpes', '2fb28956-a46a-45c6-9f3c-762c397a14da', '2023-04-05'),
('a4faa2e9-18f0-40cd-8298-7ded0b1f4f07', '054f9e79-0f05-4717-ab7e-deee48cb2734', 'Batuk', '5174d76e-381f-4eef-9ff0-3c9d9880f0b1', 'TBC', '05069b6f-4169-4dc4-bceb-2fad944ecb88', '2023-12-01'),
('c76dbfb9-3546-4ea0-8cdc-200c8b2153cb', '0133311a-7283-40dc-a715-26fbd2369faa', 'Muntah-muntah', '91fd2af5-4c2c-4c91-9a53-4a49e4f98ebd', 'Keracunan', '05069b6f-4169-4dc4-bceb-2fad944ecb88', '2023-05-24'),
('c8b74723-20df-4bf7-9cab-e780544928e8', 'd1cff5d6-dbe2-43df-a1d4-263c82907a5e', 'Pilek', 'b956bbcf-83c1-4842-80e0-98f9d22e4131', 'Flu', 'b6322a66-a0bb-11ee-9741-4224ed3b5f2c', '2023-12-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `id` int(8) NOT NULL,
  `id_rm` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rm_obat`
--

INSERT INTO `tb_rm_obat` (`id`, `id_rm`, `id_obat`) VALUES
(6, '4da9a20b-2398-460d-a650-4ecf9a61f3ca', '479eaf8b-3482-4527-9f70-fb5dc577181d'),
(2, 'a4faa2e9-18f0-40cd-8298-7ded0b1f4f07', '0f19f765-9cc8-11ee-9741-4224ed3b5f2c'),
(1, 'a4faa2e9-18f0-40cd-8298-7ded0b1f4f07', '5e7bcfec-d5fa-40b9-8aea-23a0bf78e010'),
(3, 'a4faa2e9-18f0-40cd-8298-7ded0b1f4f07', '697a3cea-997c-498b-b465-fca8b93ccce5'),
(5, 'c76dbfb9-3546-4ea0-8cdc-200c8b2153cb', '697a3cea-997c-498b-b465-fca8b93ccce5'),
(4, 'c8b74723-20df-4bf7-9cab-e780544928e8', '8ac409a3-f6b2-40c0-88cd-ec2a344bea80');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL,
  `user_role` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`, `user_role`) VALUES
('443a5cf7-a704-11ee-970b-4121e20b8da3', 'Rizki', 'user', '12dea96fec20593566ab75692c9949596833adc9', '2', 'user'),
('982f6a48-9ca6-11ee-9741-4224ed3b5f2c', 'Agus', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_antrian`
--
ALTER TABLE `tb_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

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
-- Indeks untuk tabel `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indeks untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rm` (`id_rm`,`id_obat`),
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
-- AUTO_INCREMENT untuk tabel `tb_antrian`
--
ALTER TABLE `tb_antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `tb_rekammedis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_3` FOREIGN KEY (`id_poli`) REFERENCES `tb_poliklinik` (`id_poli`);

--
-- Ketidakleluasaan untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD CONSTRAINT `tb_rm_obat_ibfk_1` FOREIGN KEY (`id_rm`) REFERENCES `tb_rekammedis` (`id_rm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rm_obat_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
