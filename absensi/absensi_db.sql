-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Agu 2016 pada 06.47
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
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`kd_absensi`, `kd_siswa`, `kd_kelas`, `keterangan`, `tanggal`, `selesai`) VALUES
(169, 25, 12, 's', '08/08/2016', 'yes'),
(168, 26, 12, 'h', '08/08/2016', 'yes'),
(167, 25, 12, 'h', '09/08/2016', 'yes'),
(166, 26, 12, 'h', '09/08/2016', 'yes'),
(165, 25, 12, 'h', '10/08/2016', 'yes'),
(164, 26, 12, 'h', '10/08/2016', 'yes'),
(170, 27, 15, 'h', '10/08/2016', 'yes'),
(171, 28, 15, 's', '10/08/2016', 'yes'),
(172, 29, 16, 'h', '10/08/2016', 'yes'),
(173, 30, 16, 'a', '10/08/2016', 'yes'),
(174, 27, 15, 'a', '10/08/2016', 'yes'),
(175, 57, 16, 'h', '12/08/2016', 'yes'),
(176, 56, 16, 'h', '12/08/2016', 'yes'),
(177, 65, 16, 'a', '12/08/2016', 'yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kelamin` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `user` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1112 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `kelamin`, `user`, `password`) VALUES
(1, 'admin', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'poltekes', 'poltekes', '', 'poltekes', '08d20c83b3e1ad2c26d387ba4fddac67');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kd_kelas` int(3) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `nama_kelas`, `nama_dosen`) VALUES
(17, 'ANAK 1C', ''),
(16, 'ANAK 1B', ''),
(15, 'ANAK 1A', ''),
(18, 'KMB 1A', ''),
(19, 'KMB 1B', ''),
(20, 'KMB 1C', ''),
(27, 'ANAK 1D', 'Endang '),
(26, 'A', 's');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `kd_siswa` int(3) NOT NULL,
  `NIM` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `smt` int(5) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kd_kelas` int(3) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`kd_siswa`, `NIM`, `nama`, `smt`, `tgl_lahir`, `alamat`, `kd_kelas`) VALUES
(62, '10513006', 'Irma Indriyani', 1, '08/08/1997', 'dsakjdnbksandasdsadasdasd', 20),
(58, '10513005', 'Pipin Lisnawati', 0, '05/08/20', 'hdsadljsadsad', 17),
(57, '10513004', 'Fitri Pebriani', 0, '06/08/19', 'dhajdhfksa', 16),
(56, '10513003', 'Anisa Istiqoah', 0, '02/08/20', 'JL sadang serang nno 157 Bandung', 16),
(55, '10513002', 'NIkka Rizky K', 0, '31/07/19', 'fhdksfjdlsafdsaffdsafdsafdsfdsf no 167', 15),
(54, '10513001', 'Rachmi Yuniawati', 0, '13/08/19', 'JL sahdksalkd', 15),
(65, '10513006', 'NIcky Minaj', 6, '09/08/2016', 'lj saria ater ', 16);

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
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
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
  MODIFY `kd_absensi` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1112;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kd_kelas` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `kd_siswa` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
