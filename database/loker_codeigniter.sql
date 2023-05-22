-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2023 at 04:07 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loker_codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelamar`
--

CREATE TABLE `tb_pelamar` (
  `id_pelamar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat_domisili` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kode_pos` varchar(25) NOT NULL,
  `sd` varchar(255) NOT NULL,
  `smp` varchar(255) NOT NULL,
  `sma` varchar(255) NOT NULL,
  `universitas` varchar(255) NOT NULL,
  `pengalaman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelamar`
--

INSERT INTO `tb_pelamar` (`id_pelamar`, `id_user`, `no_ktp`, `nama`, `alamat_domisili`, `email`, `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `provinsi`, `kabupaten`, `kecamatan`, `kode_pos`, `sd`, `smp`, `sma`, `universitas`, `pengalaman`) VALUES
(59, 18, '1771070307960001', 'almukaram', 'padang', 'yahdialmukaram03@gmail.com', '03-09-2020', 'padang panjang', 'laki laki', 'z', 'padang', 'z', '27265', 'sd 03 pasar malalo', 'yastu malalo', 'smk cendana', 'iain batusangkar', 'buat skripsi tugas akhir. magang di dinas pmd. sering interview'),
(60, 19, '1771070307968888', 'kaka', 'padang', 'kaka@gmail.com', '09-04-2023', 'padang', '--pilih je', 'sumbar', 'tanah datar', 'batipuh selatan', '27265', 'sd 14 duo koto malalo', 'smp4 batipuh selatan', 'smk 1 batipuh ', 'iain batusangkar', 'ok'),
(61, 37, '1771070307960002', 'pelamar', 'padang kota', 'pelamar@gmail.com', '09-05-1991', 'bukitinggi', 'Laki Laki', 'sumatra barat', 'tanah datar', 'batipuah selatan', '27266', 'sd 02 pasar malalo', 'smp4 batipuh selatan', 'smk 1 batipuh ', 'iain batusangkar', 'tukang ketik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `posisi_lowongan` varchar(255) NOT NULL,
  `jenjang_pendidikan` varchar(50) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `keterangan` text NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `posisi_lowongan`, `jenjang_pendidikan`, `alamat_perusahaan`, `keterangan`, `waktu`) VALUES
(7, 'menejer', 's1', 'padang', 'ok', '09-05-2023 10:55:59'),
(8, 'sekretaris', 's1', 'jakarta', 'ok', '09-05-2023 11:02:27'),
(9, 'ob', 'sma', 'padang', 'ok\n', '09-05-2023 11:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`, `waktu`, `level`) VALUES
(35, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '05-04-2023 11:07:53', 'admin'),
(36, 'yahdi', 'yahdialmukaram03@gmail.com', '58d432c74ad12fc7d0f30300771bec18', '05-04-2023 10:19:03', 'admin'),
(37, 'pelamar', 'pelamar@gmail.com', 'd106cd9e18dab5c9bce2b1b7c9a17d2b', '10-04-2023, 14:34:50', 'pelamar'),
(38, 'hrd', 'hrd@gmail.com', '4bf31e6f4b818056eaacb83dff01c9b8', '11-04-2023, 11:00:15', 'hrd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
