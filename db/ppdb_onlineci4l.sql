-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2023 pada 03.08
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
-- Database: `ppdb_onlineci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id_agama` int(11) NOT NULL,
  `agama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_agama`
--

INSERT INTO `tb_agama` (`id_agama`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen Katolik'),
(3, 'Kristen Protestan'),
(4, 'Hindu'),
(5, 'Budha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(2) NOT NULL,
  `jurusan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `jurusan`) VALUES
(0, 'Tidak Ada'),
(2, 'Rekayasa Perangkat Lunak (RPL)'),
(3, 'Teknik Komputer dan Jaringan (TKJ)'),
(4, 'Desain Komunikasi Visual (DKV)'),
(5, 'Broadcasting dan Perfileman (BRF)'),
(6, 'Kriya Tekstil (KT)'),
(7, 'Kriya Kayu (KK)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_pekerjaan`, `pekerjaan`) VALUES
(1, 'PNS'),
(2, 'Swasta'),
(3, 'TNI/POLRI'),
(4, 'Wiraswasta'),
(5, 'Polisi'),
(12, 'Petani');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pendidikan` int(2) NOT NULL,
  `pendidikan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pendidikan`, `pendidikan`) VALUES
(1, 'SD'),
(2, 'SMP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penghasilan`
--

CREATE TABLE `tb_penghasilan` (
  `id_penghasilan` int(2) NOT NULL,
  `penghasilan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_penghasilan`
--

INSERT INTO `tb_penghasilan` (`id_penghasilan`, `penghasilan`) VALUES
(1, 'Rp. 0 s/d Rp. 500,000'),
(2, 'Rp. 500,000 s/d Rp. 1,000,000'),
(3, 'Rp. 1,000,000 s/d Rp. 1,500,000'),
(4, 'Rp. 1,500,000 s/d Rp. 2,000,000'),
(5, 'Rp. 2,000,000 s/d Rp. 2,500,000'),
(6, 'Rp. 2,500,000 s/d Rp. 3,000,000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_setting`
--

CREATE TABLE `tb_setting` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(25) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `profinsi` varchar(255) NOT NULL,
  `no_telpon` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `web` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_setting`
--

INSERT INTO `tb_setting` (`id`, `nama_sekolah`, `alamat`, `kecamatan`, `kabupaten`, `profinsi`, `no_telpon`, `email`, `web`, `deskripsi`, `logo`) VALUES
(1, 'SMK Negeri 4 Kendari', 'Jl. Kijang Kel. ahandouna Kec. Poasia Kota Kendari', 'Poasia', 'Kendari', 'Sulawesi Tenggara', '0423492382', 'smkn4kdi@gmail.com', 'https://smkn4kendari.sch.id', 'SMK Unggulan Kota Kendari', '1681398061_4c84acaac6ee7f0e8099.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `nama_panggilan` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tgl_lahir`, `jk`, `password`) VALUES
(1, '1234567891', 'Desti Olivia', 'Desti', 'Kendari', '2008-04-11', 'P', '1234567891'),
(2, '9876543212', 'Muhammad Zaky', 'Zaky', 'Konsel', '2010-04-14', 'L', '9876543212'),
(3, '2536475328', 'Putu Tiara', 'Tiara', 'Kolaka', '2009-04-01', 'P', '2536475328'),
(4, '7654567834', 'Jeni Astuti', 'Jeni', 'Kemaraya', '2007-04-11', 'P', '7654567834'),
(5, '1122334455', 'Aisyah', 'Ais', 'Kendari', '2010-03-17', 'P', '1122334455'),
(6, '1111111111', 'Nuzul', 'Nuzul', 'Kendari', '2010-02-12', 'L', '1111111111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ta`
--

CREATE TABLE `tb_ta` (
  `id_ta` int(11) NOT NULL,
  `tahun` year(4) DEFAULT NULL,
  `ta` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ta`
--

INSERT INTO `tb_ta` (`id_ta`, `tahun`, `ta`, `status`) VALUES
(1, 2019, '2019/2020', 0),
(2, 2020, '2020/2021', 0),
(3, 2021, '2021/2022', 0),
(4, 2022, '2022/2023', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email`, `password`, `foto`) VALUES
(1, 'Administrator', 'admin@gmail.com', '1234', '1680875759_828e9f12594408c6c75a.png'),
(2, 'alfin', 'alfinumk92@gmail.com', '1234', '1680876609_51a4d962f9a84dd2705f.jpg'),
(3, 'Anis', 'anis@gmail.com', '1234', '1680875813_68c6f6d2af94cc80ea55.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `tb_penghasilan`
--
ALTER TABLE `tb_penghasilan`
  ADD PRIMARY KEY (`id_penghasilan`);

--
-- Indeks untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_ta`
--
ALTER TABLE `tb_ta`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_penghasilan`
--
ALTER TABLE `tb_penghasilan`
  MODIFY `id_penghasilan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_ta`
--
ALTER TABLE `tb_ta`
  MODIFY `id_ta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
