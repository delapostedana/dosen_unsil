-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2021 pada 17.50
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(255) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `tahun_terbit` varchar(255) DEFAULT NULL,
  `id_dosen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `isbn`, `penerbit`, `tahun_terbit`, `id_dosen`) VALUES
(1, 'Ini judul buku punya saya', 'no isbn ', 'penerbitnya siapa', '2020', '1'),
(3, 'Ini judul buku', 'no isbn', 'penerbitnya siapa', '2019', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakul` int(11) NOT NULL,
  `nama_fakul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id_fakul`, `nama_fakul`) VALUES
(1, 'Teknik Informatika'),
(2, 'Sistem Informatika'),
(3, 'Manajemen'),
(16, 'Akuntansi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`) VALUES
(1, 'Basis Data'),
(2, 'Pemrograman 1'),
(3, 'Bahasa Inggris'),
(4, 'Pemrograman 2'),
(5, 'Pemrograman Web');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `bidang_ilmu` varchar(255) DEFAULT NULL,
  `lembaga` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penelitian`
--

INSERT INTO `penelitian` (`id_penelitian`, `judul`, `bidang_ilmu`, `lembaga`, `tahun`, `id_dosen`) VALUES
(1, 'Ini Judul Penelitian Saya', 'Ini Bidang Ilmu', 'Ini Lembaga', '2020', 1),
(4, 'Ini Judul', 'Ini Bidang Ilmu', 'Ini Lembaga', '2019', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian`
--

CREATE TABLE `pengabdian` (
  `id_pengab` int(11) NOT NULL,
  `smester` varchar(255) DEFAULT NULL,
  `id_matkul` int(11) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `perguruan_tinggi` varchar(255) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengabdian`
--

INSERT INTO `pengabdian` (`id_pengab`, `smester`, `id_matkul`, `kelas`, `perguruan_tinggi`, `id_dosen`) VALUES
(3, 'Ganjil 2016', 4, 'V.248', 'Universitas Siliwangi', 2),
(4, 'Ganjil 2017', 3, 'V.270', 'Universitas Siliwangi', 1),
(6, 'Ganjil 2016', 1, 'V.270', 'Universitas Bogor', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` int(11) NOT NULL,
  `no_pengajuan` varchar(255) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status_pengajuan` varchar(255) DEFAULT NULL,
  `alasan` varchar(255) DEFAULT NULL,
  `tgl_pengajuan` datetime DEFAULT NULL,
  `tgl_respon` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `no_pengajuan`, `id_dosen`, `id_user`, `status_pengajuan`, `alasan`, `tgl_pengajuan`, `tgl_respon`) VALUES
(7, 'PBD0001', 1, 2, 'Proses', 'test\r\n', '2021-04-21 09:03:48', '2021-04-21 02:40:03'),
(8, 'PBD0002', 1, 1, 'Approved', '', '2021-04-21 09:22:21', '2021-04-23 10:20:50'),
(10, 'PBD0003', 4, 13, 'Approved', '', '2021-04-23 09:57:31', '2021-05-06 08:45:53'),
(11, 'PBD0004', 4, 1, 'Reject', 'Double data', '2021-04-23 09:58:53', '2021-04-23 09:59:51'),
(12, 'PBD0005', 4, NULL, 'Proses', NULL, '2021-05-06 10:10:37', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `publikasi`
--

CREATE TABLE `publikasi` (
  `id_publikasi` int(11) NOT NULL,
  `judul_pub` varchar(255) DEFAULT NULL,
  `jurnal` varchar(255) DEFAULT NULL,
  `no_artikel` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `publikasi`
--

INSERT INTO `publikasi` (`id_publikasi`, `judul_pub`, `jurnal`, `no_artikel`, `volume`, `tahun`, `id_dosen`) VALUES
(1, 'Ini Judul Publiaksi punya saya', 'Ini Jurnal', 'Ini no artikelnya', 'ini volumenya', '2018', 1),
(3, 'Ini Judul Publiaksi saya', 'Ini Jurnal', 'asas', 'ini volumenya', '2015', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `id_riw_pendidikan` int(11) NOT NULL,
  `perguruan_tinggi` varchar(255) DEFAULT NULL,
  `gelar_akademik` varchar(255) DEFAULT NULL,
  `tahun_ijazah` varchar(255) DEFAULT NULL,
  `jenjang` varchar(255) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`id_riw_pendidikan`, `perguruan_tinggi`, `gelar_akademik`, `tahun_ijazah`, `jenjang`, `id_dosen`) VALUES
(1, 'Universitas Pamulang', 'S.Kom', '2018', 'S1', 1),
(6, 'Universitas Siliwangi', 'M.Kom', '2020', 'S2', 1),
(7, 'Universitas Siliwangi', 'S.Kom', '2017', 'S1', 2),
(8, 'Universitas Pamulang', 'M.Kom', '2019', 'S2', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `id_user`, `created`) VALUES
(1, '80e312d383843d1a223a2199b241ab', 11, '2021-04-22'),
(2, '461360ccea1ce5b58176dc2863b729', 11, '2021-04-22'),
(3, '38096faf25459836e549d6297b1632', NULL, '2021-04-22'),
(4, '210b72b5343ae58697344e23f326a6', 11, '2021-04-22'),
(5, 'a6052f7bdd37f6bd03a162a9349e1b', 11, '2021-04-22'),
(6, 'd0f3874cf37f84d18dbac57c78512a', 11, '2021-04-22'),
(7, '15b1ed81f05319a71cee07c497d237', 11, '2021-04-22'),
(8, '0f6be6fec4926e900371018068599c', 11, '2021-04-22'),
(9, 'c3438172e62f469cb6b546e51738ec', 11, '2021-04-22'),
(10, '6ae7675ed414ff93ae225306b01429', 11, '2021-04-22'),
(11, 'fmPsUAVz+jMD6MJOagGtXOvIsVwp0OO/kMCbigShisI=', 11, '0000-00-00'),
(12, 'jcNFXUGgXeYzc1xo0TfMOly2zZe7J4ubzyGhsOR1GzI=', 11, '2021-04-22'),
(13, 'iGCfyJtJWji9KIoO58+iaei554VRMIr1CNDqwBNbSRs=', 11, '2021-04-23'),
(14, 'ghJabNqUUGFk3KWFUJenQtu900ceKGwTmcWbWW0GfM4=', 11, '2021-04-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL COMMENT '1=admin, 2=approver, 3=dosen',
  `foto` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nidn` varchar(255) DEFAULT NULL,
  `id_scopus` varchar(255) DEFAULT NULL,
  `program_studi` varchar(255) DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `pendidikan_tertinggi` varchar(255) DEFAULT NULL,
  `status_ikatan_kerja` varchar(255) DEFAULT NULL,
  `status_aktivitas` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `id_role`, `foto`, `nip`, `nidn`, `id_scopus`, `program_studi`, `jk`, `jabatan`, `pendidikan_tertinggi`, `status_ikatan_kerja`, `status_aktivitas`, `email`) VALUES
(1, 'Dana dela poste', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 1, '1619163900-adm.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12345@g'),
(2, 'Bapak Dosen Saya', 'dosen', '827ccb0eea8a706c4c34a16891f84e7b', 3, 'default.png', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abc@gmail.com'),
(4, 'Jajang', 'jajang', '827ccb0eea8a706c4c34a16891f84e7b', 3, '1619668351-21192554611598811058-128.png', '123456789', '123456789', '123456789', 'Sistem Informatika', 'Laki-laki', 'Sekretaris', 'S2', 'Dosen Tetap', 'Aktif', 'abc@gmail.com'),
(7, 'Farid Yulianto', 'farids', '827ccb0eea8a706c4c34a16891f84e7b', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abc@gmail.com'),
(9, 'Pipit Riyani', 'pipit', '827ccb0eea8a706c4c34a16891f84e7b', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abc@gmail.com'),
(11, 'Joko Widodo', 'jokowi', '827ccb0eea8a706c4c34a16891f84e7b', 1, '1620314560-63b44da0158231bdd36aa21f8f64a0d1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nirwanasecondary@yahoo.com'),
(12, 'Bapak Dosen Yang Terhormat', 'ythdosen', '827ccb0eea8a706c4c34a16891f84e7b', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dosen@gmail.com'),
(13, 'Approver', 'approver', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'default.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'approver@yahoo.com');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_matkul_pengabdian`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_matkul_pengabdian` (
`id_matkul` int(11)
,`nama_matkul` varchar(255)
,`id_pengab` int(11)
,`smester` varchar(255)
,`kelas` varchar(255)
,`perguruan_tinggi` varchar(255)
,`id_dosen` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_pengajuan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_pengajuan` (
`id` int(11)
,`no_pengajuan` varchar(255)
,`id_dosen` int(11)
,`id_user` int(11)
,`status_pengajuan` varchar(255)
,`alasan` varchar(255)
,`tgl_pengajuan` datetime
,`tgl_respon` datetime
,`nama_user` varchar(255)
,`username` varchar(255)
,`password` varchar(255)
,`id_role` int(11)
,`foto` varchar(255)
,`nip` varchar(255)
,`nidn` varchar(255)
,`id_scopus` varchar(255)
,`program_studi` varchar(255)
,`jk` varchar(255)
,`jabatan` varchar(255)
,`pendidikan_tertinggi` varchar(255)
,`status_ikatan_kerja` varchar(255)
,`status_aktivitas` varchar(255)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_matkul_pengabdian`
--
DROP TABLE IF EXISTS `v_matkul_pengabdian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_matkul_pengabdian`  AS  select `matkul`.`id_matkul` AS `id_matkul`,`matkul`.`nama_matkul` AS `nama_matkul`,`pengabdian`.`id_pengab` AS `id_pengab`,`pengabdian`.`smester` AS `smester`,`pengabdian`.`kelas` AS `kelas`,`pengabdian`.`perguruan_tinggi` AS `perguruan_tinggi`,`pengabdian`.`id_dosen` AS `id_dosen` from (`matkul` join `pengabdian` on(`matkul`.`id_matkul` = `pengabdian`.`id_matkul`)) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_pengajuan`
--
DROP TABLE IF EXISTS `v_pengajuan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pengajuan`  AS  select `pengajuan`.`id` AS `id`,`pengajuan`.`no_pengajuan` AS `no_pengajuan`,`pengajuan`.`id_dosen` AS `id_dosen`,`pengajuan`.`id_user` AS `id_user`,`pengajuan`.`status_pengajuan` AS `status_pengajuan`,`pengajuan`.`alasan` AS `alasan`,`pengajuan`.`tgl_pengajuan` AS `tgl_pengajuan`,`pengajuan`.`tgl_respon` AS `tgl_respon`,`user`.`nama_user` AS `nama_user`,`user`.`username` AS `username`,`user`.`password` AS `password`,`user`.`id_role` AS `id_role`,`user`.`foto` AS `foto`,`user`.`nip` AS `nip`,`user`.`nidn` AS `nidn`,`user`.`id_scopus` AS `id_scopus`,`user`.`program_studi` AS `program_studi`,`user`.`jk` AS `jk`,`user`.`jabatan` AS `jabatan`,`user`.`pendidikan_tertinggi` AS `pendidikan_tertinggi`,`user`.`status_ikatan_kerja` AS `status_ikatan_kerja`,`user`.`status_aktivitas` AS `status_aktivitas` from (`pengajuan` join `user` on(`pengajuan`.`id_dosen` = `user`.`id_user`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakul`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indeks untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indeks untuk tabel `pengabdian`
--
ALTER TABLE `pengabdian`
  ADD PRIMARY KEY (`id_pengab`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `publikasi`
--
ALTER TABLE `publikasi`
  ADD PRIMARY KEY (`id_publikasi`);

--
-- Indeks untuk tabel `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD PRIMARY KEY (`id_riw_pendidikan`);

--
-- Indeks untuk tabel `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengabdian`
--
ALTER TABLE `pengabdian`
  MODIFY `id_pengab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `id_publikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  MODIFY `id_riw_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengabdian`
--
ALTER TABLE `pengabdian`
  ADD CONSTRAINT `pengabdian_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
