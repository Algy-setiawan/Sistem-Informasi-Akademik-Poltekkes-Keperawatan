-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Agu 2016 pada 05.29
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `kd_absensi` int(3) NOT NULL,
  `kd_siswa` int(3) NOT NULL,
  `kd_kelas` int(3) NOT NULL,
  `keterangan` enum('h','s','i','a') NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `selesai` varchar(3) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=252 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`kd_absensi`, `kd_siswa`, `kd_kelas`, `keterangan`, `tanggal`, `selesai`) VALUES
(245, 201, 46, 'h', '21/08/2016', 'yes'),
(244, 202, 46, 'h', '21/08/2016', 'yes'),
(243, 203, 46, 'h', '21/08/2016', 'yes'),
(242, 200, 46, 'h', '21/08/2016', 'yes'),
(241, 204, 46, 'h', '21/08/2016', 'yes'),
(240, 201, 46, 'h', '11/08/2016', 'yes'),
(239, 202, 46, 'h', '11/08/2016', 'yes'),
(238, 203, 46, 'h', '11/08/2016', 'yes'),
(237, 200, 46, 'h', '11/08/2016', 'yes'),
(236, 204, 46, 'h', '11/08/2016', 'yes'),
(235, 201, 46, 'h', '04/08/2016', 'yes'),
(234, 202, 46, 'h', '04/08/2016', 'yes'),
(233, 203, 46, 'h', '04/08/2016', 'yes'),
(232, 200, 46, 'h', '04/08/2016', 'yes'),
(231, 204, 46, 'h', '04/08/2016', 'yes'),
(230, 194, 27, 'h', '21/08/2016', 'yes'),
(229, 195, 27, 'h', '21/08/2016', 'yes'),
(228, 196, 27, 'h', '21/08/2016', 'yes'),
(227, 199, 27, 'h', '21/08/2016', 'yes'),
(226, 198, 27, 'h', '21/08/2016', 'yes'),
(225, 157, 15, 'i', '20/08/2016', 'yes'),
(224, 228, 15, 'h', '20/08/2016', 'yes'),
(223, 173, 15, 'h', '20/08/2016', 'yes'),
(222, 191, 15, 'h', '20/08/2016', 'yes'),
(221, 192, 15, 'h', '20/08/2016', 'yes'),
(220, 193, 15, 'h', '20/08/2016', 'yes'),
(219, 173, 15, 'h', '18/08/2016', 'yes'),
(218, 191, 15, 'h', '18/08/2016', 'yes'),
(217, 157, 15, 'h', '18/08/2016', 'yes'),
(216, 192, 15, 'h', '18/08/2016', 'yes'),
(215, 193, 15, 'h', '18/08/2016', 'yes'),
(214, 173, 15, 'h', '17/08/2016', 'yes'),
(213, 191, 15, 'h', '17/08/2016', 'yes'),
(212, 157, 15, 'h', '17/08/2016', 'yes'),
(211, 192, 15, 'h', '17/08/2016', 'yes'),
(210, 193, 15, 'h', '17/08/2016', 'yes'),
(246, 193, 15, 'h', '22/08/2016', 'yes'),
(247, 192, 15, 'h', '22/08/2016', 'yes'),
(248, 157, 15, 'h', '22/08/2016', 'yes'),
(249, 191, 15, 'h', '22/08/2016', 'yes'),
(250, 173, 15, 'h', '22/08/2016', 'yes'),
(251, 228, 15, 'h', '22/08/2016', 'yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kelamin` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `user` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1113 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `kelamin`, `user`, `password`) VALUES
(1, 'admin', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'poltekes', 'poltekes', '', 'poltekes', '08d20c83b3e1ad2c26d387ba4fddac67'),
(1112, 'asep', '', '', 'asep', 'asep');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `kd_dosen` int(10) NOT NULL,
  `no_dosen` varchar(20) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `bidang` varchar(30) NOT NULL,
  `jurnal` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`kd_dosen`, `no_dosen`, `nama_dosen`, `bidang`, `jurnal`) VALUES
(6, '10A12341', 'dadang sukijem', 'memasak', ''),
(8, '10A123456', 'wawan', 'anak', ''),
(9, '10A12345', 'asep saepuloh', 'kesehatan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(11) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(6, '2016-08-17', 'xxxxxxxx', 'xls', '549888', 'files/xxxxxxxx.xls');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kd_kelas` int(3) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `mata_kuliah` varchar(50) NOT NULL,
  `kd_matakuliah` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `nama_kelas`, `nama_dosen`, `mata_kuliah`, `kd_matakuliah`) VALUES
(15, '1A-Dasar', 'dadang sukijem', 'dasar', ''),
(18, '2A', 'asep saepuloh', 'Kesehatan', '1'),
(19, '2B', 'dadang sukijem', 'dasar', ''),
(20, '2C', 'asep saepuloh', '2', ''),
(27, '1B', 'asep saepuloh', '1', ''),
(47, '3A', 'wawan', 'agama', ''),
(46, '1C', 'dadang sukijem', 'dasar', ''),
(48, '3B', 'wawan', '2', ''),
(49, '3C', 'asep saepuloh', 'dasar', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `kd_matakuliah` int(11) NOT NULL,
  `no_matakuliah` varchar(20) NOT NULL,
  `mata_kuliah` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kd_matakuliah`, `no_matakuliah`, `mata_kuliah`) VALUES
(1, '1', '1'),
(2, '2', '2'),
(3, '3', 'dasar'),
(4, '4', 'agama'),
(5, '6', 'Kesehatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(100) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `provinsi`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara'),
(3, 'Bengkulu'),
(4, 'Jambi'),
(5, 'Riau'),
(6, 'Sumatera Barat'),
(7, 'Sumatera Selatan'),
(8, 'Lampung'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Kepulauan Riau'),
(11, 'Banten'),
(12, 'Jawa Barat'),
(13, 'DKI Jakarta'),
(14, 'Jawa Tengah'),
(15, 'Jawa Timur'),
(16, 'Daerah Istimewa Yogyakarta'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Selatan'),
(22, 'Kalimantan Tengah'),
(23, 'Kalimantan Timur'),
(24, 'Gorontalo'),
(25, 'Sulawesi Selatan'),
(26, 'Sulawesi Tenggara'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Utara'),
(29, 'Sulawesi Barat'),
(30, 'Maluku'),
(31, 'Maluku Utara'),
(32, 'Papua'),
(33, 'Papua Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `NIM` varchar(20) NOT NULL,
  `kd_siswa` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `smt` varchar(10) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kd_kelas` varchar(20) NOT NULL,
  `kd_matakuliah` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=257 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIM`, `kd_siswa`, `nama`, `jk`, `smt`, `tgl_lahir`, `alamat`, `kd_kelas`, `kd_matakuliah`) VALUES
('P17320115007', 204, 'DEA PUTRI AMALIA', 'P', 'Ganjil', '', '', '46', ''),
('P17320115121', 200, 'ANIS GUSNIAWATI', 'P', 'Ganjil', '', '', '46', ''),
('P17320115001', 198, 'ANI MULYANTI', 'P', 'Ganjil', '', '', '27', ''),
('P17320115035', 199, 'BILQISTHI ADINDA UMA', 'P', 'Ganjil', '', '', '27', ''),
('P17320115060', 196, 'AMALIA FITRIANI', 'P', 'Ganjil', '', '', '27', ''),
('P17320115075', 195, 'ALFI ALFIONITA', 'P', 'Ganjil', '', '', '27', ''),
('P17320115023', 194, 'ADITIO PURNOMO', 'L', 'Ganjil', '', '', '27', ''),
('P17320115011', 193, 'CECEP SULAEMAN', 'L', 'Ganjil', '', '', '15', ''),
('P17320115016', 192, 'ASTI SYAHIDA RIDWAN', 'P', 'Ganjil', '', '', '15', ''),
('P17320115015 ', 157, 'AFNI NURAINI FAJRIN ', 'P', 'Ganjil', '', '', '15', ''),
('P17320114068', 205, 'AMELIA FERINA MUZANA', 'P', 'Ganjil', '', '', '18', ''),
('P17320115071', 203, 'CHUSNUL NUR NIDA', 'P', 'Ganjil', '', '', '46', ''),
('P17320115022', 202, 'ARIEF RAMADHAN', 'L', 'Ganjil', '', '', '46', ''),
('P17320115033', 201, 'ANNISA WAHYUDANTI', 'P', 'Ganjil', '', '', '46', ''),
('P17320115063', 191, 'ANNISA RAHMAN', 'P', 'Ganjil', '', '', '15', ''),
('P17320115118', 173, 'ANNIDA RAHMATU LAILY', 'P', 'Ganjil', '', '', '15', ''),
('P17320114080', 206, 'ANISA SUGIHARTI', 'P', 'Ganjil', '', '', '18', ''),
('P17320114013', 207, 'ARDAN ANWAR', 'L', 'Ganjil', '', '', '18', ''),
('P17320114028', 208, 'CAHYA RISKA WIDIYANT', 'P', 'Ganjil', '', '', '18', ''),
('P17320114031', 209, 'CHANDRA TRIYANA', 'L', 'Ganjil', '', '', '18', ''),
('P17320114045', 210, 'AGNI MUNGGARAN RACHM', 'P', 'Ganjil', '', '', '19', ''),
('P17320114086', 211, 'AGUS SUTISNA', 'L', 'Ganjil', '', '', '19', ''),
('P17320114009', 212, 'ANNA PUTRIN INDRIA', 'P', 'Ganjil', '', '', '19', ''),
('P17320114116', 213, 'ANNISA HERLIANI', 'P', 'Ganjil', '', '', '19', ''),
('P17320114041', 214, 'ASRIL KOESTRI NURHAL', 'P', 'Ganjil', '', '', '19', ''),
('P17320114085', 215, 'AGHNIA NAILAH', 'P', 'Ganjil', '', '', '20', ''),
('P17320114001', 216, 'ANINDIA TITIAN DEWI ', 'P', 'Ganjil', '', '', '20', ''),
('P17320114103', 217, 'ANNISA ISTIQOMAH', 'P', 'Ganjil', '', '', '20', ''),
('P17320114012', 218, 'AYUTA NADHIFA DJUNET', 'P', 'Ganjil', '', '', '20', ''),
('P17320114061', 219, 'DEFI YULIANIS', 'P', 'Ganjil', '', '', '20', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tampil_kelas`
--

CREATE TABLE IF NOT EXISTS `tampil_kelas` (
  `kd_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tampil_kelas`
--

INSERT INTO `tampil_kelas` (`kd_kelas`, `nama_kelas`, `nama_dosen`) VALUES
(1, 'MEMASAK', 'nani'),
(2, 'IPA', 'dadang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tampil_siswa`
--

CREATE TABLE IF NOT EXISTS `tampil_siswa` (
  `kd_siswa` int(11) NOT NULL,
  `NIM` varchar(20) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jk` varchar(10) NOT NULL,
  `smt` int(15) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tampil_siswa`
--

INSERT INTO `tampil_siswa` (`kd_siswa`, `NIM`, `nama`, `jk`, `smt`, `tgl_lahir`, `alamat`, `kelas`, `nama_kelas`) VALUES
(15, NULL, NULL, 'L', NULL, NULL, NULL, NULL, ''),
(16, NULL, NULL, 'P', NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'poltekes', '08d20c83b3e1ad2c26d387ba4fddac67');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`kd_absensi`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`kd_dosen`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`),
  ADD KEY `kd_kelas` (`kd_kelas`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kd_matakuliah`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`kd_siswa`);

--
-- Indexes for table `tampil_kelas`
--
ALTER TABLE `tampil_kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indexes for table `tampil_siswa`
--
ALTER TABLE `tampil_siswa`
  ADD PRIMARY KEY (`kd_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `kd_absensi` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=252;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1113;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `kd_dosen` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kd_kelas` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `kd_matakuliah` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `kd_siswa` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=257;
--
-- AUTO_INCREMENT for table `tampil_kelas`
--
ALTER TABLE `tampil_kelas`
  MODIFY `kd_kelas` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tampil_siswa`
--
ALTER TABLE `tampil_siswa`
  MODIFY `kd_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
