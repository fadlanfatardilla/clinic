-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2024 pada 12.59
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
  `nama_pasien` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_antrian`
--

INSERT INTO `tb_antrian` (`id`, `nama_pasien`) VALUES
(1, 'Alif'),
(5, 'Fadlan'),
(6, 'Zahra'),
(7, 'Bayu'),
(8, 'Faith');

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
('14d4b8c7-ce2f-456e-ba3b-5813238f1a47', 'dr. Ani Wulandari, Sp.KK', 'Kulit', 'Jakarta', '087242180428'),
('3722e0df-db23-4af1-be50-1fc48fbb90df', 'dr. Dian Amelia, SpKj', 'Jiwa', 'Magelang', '086242570921'),
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
  `nama_pasien` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jadwal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nama_pasien`, `no_telp`, `jenis_kelamin`, `alamat`, `jadwal`) VALUES
('51bcd05b-9280-45ac-ba6f-32f746214497', 'Satria', '087622670982', 'L', 'Jakarta', '2024-01-23 12:30:00'),
('9c769729-03cf-4042-9d2d-f4721f36b62f', 'Fadil', '657613', 'L', 'hgdjhsa', '2024-01-05 08:46:00'),
('a6dfe216-960b-482a-9394-7dc5c7f47735', 'Benny', '087823560912', 'L', 'Bandung', '2024-01-19 08:00:00'),
('a8a374c4-c80b-42cb-8931-f34f14b79017', 'Bayu', '087723568902', 'L', 'Karawang', '2024-01-11 10:00:00'),
('b946d6b6-528f-4d2c-b2e7-5d7e76d940a0', 'Faith', '08959021456', 'L', 'Ulekan', '2024-01-19 13:22:00'),
('d23d5171-b1dc-49b9-bb9e-c24a2aa5c680', 'alif', '7672378', 'L', 'jsadyg', '2024-02-04 11:31:00');

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
('05069b6f-4169-4dc4-bceb-2fad944ecb88', 'Poli R', 'J.Lt.III'),
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
('9445e668-80fa-488f-97b8-adf298c6a81a', '9c769729-03cf-4042-9d2d-f4721f36b62f', 'Demam', 'b56031ff-5e85-41fc-9df5-f4d913e8ed3e', 'Demam Berdarah', '986d410b-a8bc-4dea-ad02-7a8208d4cfe6', '2024-01-12');

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
(7, '9445e668-80fa-488f-97b8-adf298c6a81a', '8ac409a3-f6b2-40c0-88cd-ec2a344bea80');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
