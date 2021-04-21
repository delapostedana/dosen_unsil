-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 10:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `buku`
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
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `isbn`, `penerbit`, `tahun_terbit`, `id_dosen`) VALUES
(1, 'Ini judul buku punya saya', 'no isbn ', 'penerbitnya siapa', '2020', '1'),
(3, 'Ini judul buku', 'no isbn', 'penerbitnya siapa', '2019', '1');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakul` int(11) NOT NULL,
  `nama_fakul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakul`, `nama_fakul`) VALUES
(1, 'Teknik Informatika'),
(2, 'Sistem Informatika'),
(3, 'Manajemen');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`) VALUES
(1, 'Basis Data'),
(2, 'Pemrograman 1'),
(3, 'Bahasa Inggris'),
(4, 'Pemrograman 2'),
(5, 'Pemrograman Web');

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
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
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`id_penelitian`, `judul`, `bidang_ilmu`, `lembaga`, `tahun`, `id_dosen`) VALUES
(1, 'Ini Judul Penelitian Saya', 'Ini Bidang Ilmu', 'Ini Lembaga', '2020', 1),
(4, 'Ini Judul', 'Ini Bidang Ilmu', 'Ini Lembaga', '2019', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengabdian`
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
-- Dumping data for table `pengabdian`
--

INSERT INTO `pengabdian` (`id_pengab`, `smester`, `id_matkul`, `kelas`, `perguruan_tinggi`, `id_dosen`) VALUES
(3, 'Ganjil 2016', 4, 'V.248', 'Universitas Siliwangi', 2),
(4, 'Ganjil 2017', 3, 'V.270', 'Universitas Siliwangi', 1),
(6, 'Ganjil 2016', 1, 'V.270', 'Universitas Bogor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
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
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `no_pengajuan`, `id_dosen`, `id_user`, `status_pengajuan`, `alasan`, `tgl_pengajuan`, `tgl_respon`) VALUES
(7, 'PBD0001', 1, 2, 'Reject', 'test\r\n', '2021-04-21 09:03:48', '2021-04-21 02:40:03'),
(8, 'PBD0002', 1, 2, 'Proses', '', '2021-04-21 09:22:21', '2021-04-21 02:54:06'),
(9, 'PBD0003', 1, 2, 'Approved', '', '2021-04-21 09:22:31', '2021-04-21 02:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `publikasi`
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
-- Dumping data for table `publikasi`
--

INSERT INTO `publikasi` (`id_publikasi`, `judul_pub`, `jurnal`, `no_artikel`, `volume`, `tahun`, `id_dosen`) VALUES
(1, 'Ini Judul Publiaksi punya saya', 'Ini Jurnal', 'Ini no artikelnya', 'ini volumenya', '2018', 1),
(3, 'Ini Judul Publiaksi saya', 'Ini Jurnal', 'asas', 'ini volumenya', '2015', 1);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendidikan`
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
-- Dumping data for table `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`id_riw_pendidikan`, `perguruan_tinggi`, `gelar_akademik`, `tahun_ijazah`, `jenjang`, `id_dosen`) VALUES
(1, 'Universitas Pamulang', 'S.Kom', '2018', 'S1', 1),
(6, 'Universitas Siliwangi', 'M.Kom', '2020', 'S2', 1),
(7, 'Universitas Siliwangi', 'S.Kom', '2017', 'S1', 2),
(8, 'Universitas Pamulang', 'M.Kom', '2019', 'S2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
  `status_aktivitas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `id_role`, `foto`, `nip`, `nidn`, `id_scopus`, `program_studi`, `jk`, `jabatan`, `pendidikan_tertinggi`, `status_ikatan_kerja`, `status_aktivitas`) VALUES
(1, 'Dana dela poste', 'admin', '12345', 1, '', '1', '2', '0', 'Teknik Informatika', 'Laki-laki', 'Sekretaris', 'D2', 'Dosen Tetap', 'Aktif'),
(2, 'Bapak Dosen Saya', 'dosen', 'dosen', 3, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Jajang', 'jajang', '12345', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_matkul_pengabdian`
-- (See below for the actual view)
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
-- Stand-in structure for view `v_pengajuan`
-- (See below for the actual view)
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
-- Structure for view `v_matkul_pengabdian`
--
DROP TABLE IF EXISTS `v_matkul_pengabdian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_matkul_pengabdian`  AS SELECT `matkul`.`id_matkul` AS `id_matkul`, `matkul`.`nama_matkul` AS `nama_matkul`, `pengabdian`.`id_pengab` AS `id_pengab`, `pengabdian`.`smester` AS `smester`, `pengabdian`.`kelas` AS `kelas`, `pengabdian`.`perguruan_tinggi` AS `perguruan_tinggi`, `pengabdian`.`id_dosen` AS `id_dosen` FROM (`matkul` join `pengabdian` on(`matkul`.`id_matkul` = `pengabdian`.`id_matkul`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_pengajuan`
--
DROP TABLE IF EXISTS `v_pengajuan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pengajuan`  AS SELECT `pengajuan`.`id` AS `id`, `pengajuan`.`no_pengajuan` AS `no_pengajuan`, `pengajuan`.`id_dosen` AS `id_dosen`, `pengajuan`.`id_user` AS `id_user`, `pengajuan`.`status_pengajuan` AS `status_pengajuan`, `pengajuan`.`alasan` AS `alasan`, `pengajuan`.`tgl_pengajuan` AS `tgl_pengajuan`, `pengajuan`.`tgl_respon` AS `tgl_respon`, `user`.`nama_user` AS `nama_user`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`id_role` AS `id_role`, `user`.`foto` AS `foto`, `user`.`nip` AS `nip`, `user`.`nidn` AS `nidn`, `user`.`id_scopus` AS `id_scopus`, `user`.`program_studi` AS `program_studi`, `user`.`jk` AS `jk`, `user`.`jabatan` AS `jabatan`, `user`.`pendidikan_tertinggi` AS `pendidikan_tertinggi`, `user`.`status_ikatan_kerja` AS `status_ikatan_kerja`, `user`.`status_aktivitas` AS `status_aktivitas` FROM (`pengajuan` join `user` on(`pengajuan`.`id_dosen` = `user`.`id_user`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakul`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indexes for table `pengabdian`
--
ALTER TABLE `pengabdian`
  ADD PRIMARY KEY (`id_pengab`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publikasi`
--
ALTER TABLE `publikasi`
  ADD PRIMARY KEY (`id_publikasi`);

--
-- Indexes for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD PRIMARY KEY (`id_riw_pendidikan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengabdian`
--
ALTER TABLE `pengabdian`
  MODIFY `id_pengab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `id_publikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  MODIFY `id_riw_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengabdian`
--
ALTER TABLE `pengabdian`
  ADD CONSTRAINT `pengabdian_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
