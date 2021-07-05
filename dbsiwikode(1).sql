-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2021 at 09:41 AM
-- Server version: 10.5.10-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiwikode`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kuliner`
--

CREATE TABLE `jenis_kuliner` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_kuliner`
--

INSERT INTO `jenis_kuliner` (`id`, `nama`) VALUES
(1, 'Kedai/Cafe'),
(2, 'Restaurant'),
(3, 'Pasar Kaget');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_wisata`
--

CREATE TABLE `jenis_wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_wisata`
--

INSERT INTO `jenis_wisata` (`id`, `nama`) VALUES
(1, 'Argo Wisata'),
(2, 'Kuliner'),
(3, 'Taman Wisata'),
(4, 'Museum'),
(5, 'Water Park / Kolam Renang');

-- --------------------------------------------------------

--
-- Table structure for table `profesi`
--

CREATE TABLE `profesi` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profesi`
--

INSERT INTO `profesi` (`id`, `nama`) VALUES
(1, 'Artist'),
(2, 'Pejabat'),
(3, 'Mahasiswa'),
(4, 'Pegawai Swasta'),
(5, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wisata_id` int(11) NOT NULL,
  `profesi_id` int(11) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `komentar` text DEFAULT NULL,
  `last_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `user_id`, `wisata_id`, `profesi_id`, `rating`, `komentar`, `last_update`) VALUES
(1, 17, 1, 1, 1, 'Indah dan bagus', '2021-07-21 00:20:00'),
(2, 20, 3, 1, 3, 'Penuh dengan keanekaragaman tumbuhan.', '2021-07-01 00:00:00'),
(3, 17, 2, 4, 2, 'Salah satu objek wisata terbaik di depok.', '2021-07-01 00:00:00'),
(5, 17, 1, 1, 1, 'Sangat Ramai dan Indah', '2021-07-01 09:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `created_at`, `last_login`) VALUES
(17, 'fauzan', 'fauzanjenci007@gmail.com', '123', 'pengunjung', '2021-06-28 08:55:56', '2021-07-01 09:10:12'),
(18, 'admin', 'admin@admin.id', '123', 'admin', '2021-06-29 07:58:23', '2021-07-01 08:19:14'),
(19, 'admin2', 'admin2@123', 'admin123', 'admin', '2021-06-29 08:33:29', NULL),
(20, 'ahmad', 'ahmad123@gmail', 'ahmad', 'pengunjung', '2021-06-29 08:34:01', '2021-06-29 08:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jenis_wisata_id` int(11) NOT NULL,
  `fasilitas` text DEFAULT NULL,
  `bintang` smallint(6) DEFAULT NULL,
  `kontak` varchar(45) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `maps` text DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `jenis_kuliner_id` int(11) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `deskripsi`, `jenis_wisata_id`, `fasilitas`, `bintang`, `kontak`, `alamat`, `maps`, `email`, `web`, `jenis_kuliner_id`, `gambar`) VALUES
(1, 'Setu Pangasinan Depok', 'Di danau ini kamu bisa memuaskan hobby memancing sekaligus bersantai dan merefresh pikiran. Fasilitas seperti flying fox dan perahu bebek juga bisa kamu coba agar liburanmu semakin seru.', 5, 'Flying fox, Perahu Besar', 4, '082001', 'Jl. Pangasinan Sawangan, Depok', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253780.99322203913!2d106.69830791698226!3d-6.351561872913176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebbd5e7fcac9%3A0xfe17a63de6c13f61!2sKampung%203D%20Depok!5e0!3m2!1sid!2snl!4v1610034917193!5m2!1sid!2snl', 'setu@123.com', 'setupangasinan.com', 1, 'assets/siwikode/img/setu.png'),
(2, 'Kampung Pelangi', 'Pembuatan kampung ini pun dilakukan secara swadaya dan dijadikan tempat wisata oleh masyarakat. Warga setempat yang memiliki keterampilan melukis kemudian diberdayakan untuk menghias.', 1, 'Sarana Seni dan lukisan', 5, '082002', 'Jl. Danau Tandano II No.178, Abadijaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16417, Indonesia', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253780.99322203913!2d106.69830791698226!3d-6.351561872913176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebbd5e7fcac9%3A0xfe17a63de6c13f61!2sKampung%203D%20Depok!5e0!3m2!1sid!2snl!4v1610034917193!5m2!1sid!2snl', 'kampung@official.com', 'kampungpelangi.com', 3, 'assets/siwikode/img/kampung.png'),
(3, 'Taman Mekarsari', 'Taman seluas 957 m2 ini dilengkapi dengan fasilitas publik seperti ornament selfie, jalur refleksi, jogging track, shelter dan ruang baca, area permainan anak, amphitheater, dan parkir sepeda.', 3, 'ornament selfie, jalur refleksi, jogging track, shelter dan ruang baca, area permainan anak, amphitheater, dan parkir sepeda.', 2, '082003', 'Jl. Bunga Raya No.22, Mekarsari, Kec. Cimanggis, Kota Depok, Jawa Barat 16452, Indonesia', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2310557538894!2d106.86432121476994!3d-6.364136095394761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec8a02a59555%3A0x8f97688f9db8245e!2sTaman%20Mekarsari!5e0!3m2!1sid!2snl!4v1610036502637!5m2!1sid!2snl', 'taman123@taman.ph', 'TamanMekarsari.com', 2, 'assets/siwikode/img/taman.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profesi`
--
ALTER TABLE `profesi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_testimoni_wisata1_idx` (`wisata_id`),
  ADD KEY `fk_testimoni_profesi1_idx` (`profesi_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_wisata_jenis_wisata_idx` (`jenis_wisata_id`),
  ADD KEY `fk_wisata_jenis_kuliner1_idx` (`jenis_kuliner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profesi`
--
ALTER TABLE `profesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `fk_testimoni_profesi1` FOREIGN KEY (`profesi_id`) REFERENCES `profesi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_testimoni_wisata1` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `fk_wisata_jenis_kuliner1` FOREIGN KEY (`jenis_kuliner_id`) REFERENCES `jenis_kuliner` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wisata_jenis_wisata` FOREIGN KEY (`jenis_wisata_id`) REFERENCES `jenis_wisata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
