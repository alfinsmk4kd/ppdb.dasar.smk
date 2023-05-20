-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2023 pada 07.04
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
-- Struktur dari tabel `tb_baner`
--

CREATE TABLE `tb_baner` (
  `id_baner` int(11) NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `baner` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_baner`
--

INSERT INTO `tb_baner` (`id_baner`, `ket`, `baner`) VALUES
(1, 'Baner 1', 'baner1.png'),
(2, 'Baner 2', 'baner2.png'),
(3, 'Baner 3', 'baner3.png'),
(4, 'Baner 4', 'baner4.png'),
(6, 'Baner 5', '1683854376_b4f03b952e199dcd74b1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jalur`
--

CREATE TABLE `tb_jalur` (
  `id_jalur` int(2) NOT NULL,
  `jalur_masuk` varchar(255) DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jalur`
--

INSERT INTO `tb_jalur` (`id_jalur`, `jalur_masuk`, `kuota`) VALUES
(1, 'Zonasi', 100),
(2, 'Prestasi', 20),
(3, 'Pindahan', 10);

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
  `logo` varchar(255) NOT NULL,
  `beranda` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_setting`
--

INSERT INTO `tb_setting` (`id`, `nama_sekolah`, `alamat`, `kecamatan`, `kabupaten`, `profinsi`, `no_telpon`, `email`, `web`, `deskripsi`, `logo`, `beranda`) VALUES
(1, 'SMK Negeri 4 Kendari', 'Jl. Kijang Kel. ahandouna Kec. Poasia Kota Kendari', 'Poasia', 'Kendari', 'Sulawesi Tenggara', '0423492382', 'smkn4kdi@gmail.com', 'https://smkn4kendari.sch.id', 'SMK Unggulan Kota Kendari', '1681398061_4c84acaac6ee7f0e8099.png', '                                                                                                                                                                        <p>                                                </p><blockquote style=\"text-align: center;\" class=\"blockquote\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\"><b><br></b></span></font></font></font></font></span><p class=\"MsoNormal\"><b><span style=\"font-size: 14pt; line-height: 115%; font-family: &quot;Segoe UI&quot;, &quot;sans-serif&quot;; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">PPDB Online\r\nSMKN 4 Kendari Tahu Ajaran 2023/2024</span></b><span style=\"font-size:14.0pt;\r\nline-height:115%\"><o:p></o:p></span></p></blockquote><h1 style=\"text-align: center;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\"><b><br></b></span></font></font></font></font></span></h1><h1 style=\"text-align: justify;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\"><b>Jadwal PPDB 2023 | SMK Negeri 4 Kendari</b></span></font></font></font></font></span></h1><h6 style=\"text-align: justify;\" class=\"\"><img src=\"data:image/png;base64,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\" data-filename=\"ppdb.png\" style=\"width: 798px;\"><br></h6><h6 style=\"text-align: justify;\" class=\"\"><br></h6><h6 style=\"text-align: justify;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\"><b>Syarat dan Berkas Pendaftaran PPDB SMK Negeri 4 Kendari</b></span></font></font></font></font></span></h6><h6 style=\"text-align: justify;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">Persyaratan dan Berkas Pendaftaran Calon Peserta Didik Baru 2023 | SMK Negeri 4 Kendari :</span></font></font></font></font></span></h6><h6 style=\"text-align: justify;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">1. Usia Maksimal 15 tahu per 20 juni 2023</span></font></font></font></font></span></h6><h6 style=\"text-align: justify;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">2. FC Akte Kelahiran / Surat Kenal Lahir (Menunjukkan Aslinya)</span></font></font></font></font></span></h6><h6 style=\"text-align: justify;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">3. FC KK / Surat Keterangan Tinggal (min. 1 Tahun) (menunjukkan aslinya)</span></font></font></font></font></span></h6><h6 style=\"text-align: justify;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">4. FC Ijazah yang dilegalisir (apabila sudah terbit)</span></font></font></font></font></span></h6><h6 style=\"text-align: justify;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">5. Asli SKL (Sutat Keterangan Lulus)</span></font></font></font></font></span></h6><h6 style=\"text-align: justify;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">6. Asli SKHUS</span></font></font></font></font></span></h6><h6 style=\"text-align: justify;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">7. Foto 3x4 (2 Lembar)</span></font></font></font></font></span></h6><h6 style=\"text-align: justify;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">8. FC Kip/Pkh/Dtks (menunjukkan aslinya) (Jalur Afirmasi)</span></font></font></font></font></span></h6><h6 style=\"text-align: justify;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">9. FC Piagam Prestasi Tertinggi Paling Singkat&nbsp; 6 Bulan Paling lama 3 Tahun (Bagi yang memilki dengan menunjukkan aslinya) (Jalur Prestasi)</span></font></font></font></font></span></h6><h6 style=\"text-align: justify;\" class=\"\"><span style=\"font-size: 1rem;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\"><span style=\"font-family: \" courier=\"\" new\";\"=\"\" arial=\"\" black\";\"=\"\">10. FC Surat Penugasan dari Instansi/Lembaga/Kantor (menunjukkan aslinya) (Jalur Perpindahan Orang</span></font></font></font></font></span></h6>                                                                                                                                            ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `no_daftar` varchar(12) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `nama_panggilan` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `id_jalur` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `no_daftar`, `tgl_daftar`, `nisn`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tgl_lahir`, `jk`, `password`, `foto`, `id_jalur`) VALUES
(1, '202305060001', '2023-05-05', '1234567891', 'Putu Tiara', 'Putu', 'Kendari', '2010-01-06', 'P', '1234567891', '1684552573_a193205e6253eac274e3.jpg', 2),
(2, '202305060002', '2023-05-05', '1234567892', 'Jeni Astuti', 'Jeni', 'Kolaka', '2011-02-10', 'P', '1234567892', '1684552523_1609b38c949613f435c0.jpg', 2),
(3, '202305060003', '2023-05-05', '1234567893', 'Muhammad Zaky', 'Zaky', 'Konsel', '2010-04-20', 'L', '1234567893', '1684551846_a4fa919b4a62ec7f64aa.jpg', 3),
(4, '202305060004', '2023-05-05', '1234567894', 'Muhammad Afril', 'Afril', 'Buton', '2010-11-18', 'L', '1234567894', '1684551955_8cc0ec09a4442e5ff9b4.png', 2),
(5, '202305060005', '2023-05-05', '1234567895', 'Desti Olivia', 'Desti', 'Kendari', '2012-01-01', 'P', '1234567895', '1684551661_cd3b672ca06026c08a04.png', 1),
(6, '202305060001', '2023-05-06', '1234567896', 'Yuliana', 'Yuli', 'Kendari', '2009-03-04', 'P', '1234567896', '1684552051_65791bb2d1ff09c918ec.jpg', 3);

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
-- Indeks untuk tabel `tb_baner`
--
ALTER TABLE `tb_baner`
  ADD PRIMARY KEY (`id_baner`);

--
-- Indeks untuk tabel `tb_jalur`
--
ALTER TABLE `tb_jalur`
  ADD PRIMARY KEY (`id_jalur`);

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
-- AUTO_INCREMENT untuk tabel `tb_baner`
--
ALTER TABLE `tb_baner`
  MODIFY `id_baner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_jalur`
--
ALTER TABLE `tb_jalur`
  MODIFY `id_jalur` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
