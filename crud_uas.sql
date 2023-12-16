-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 10:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `jenis`, `harga`, `deskripsi`, `gambar`) VALUES
(14, 'Tiket Kapal', 'Economics', '700000', 'Layanan kami menawarkan berbagai pilihan tiket kapal untuk tujuan yang beragam. Baik Anda ingin menjelajahi pulau-pulau tropis, mengunjungi destinasi wisata populer, atau melakukan perjalanan bisnis, kami memiliki tiket yang sesuai dengan kebutuhan Anda.', '971627 Best Cruise Lines for Solo Travelers (2022).jpeg'),
(17, 'Tiket Pesawat', 'Economics', '700000', 'Layanan kami menawarkan berbagai pilihan tiket pesawat untuk tujuan yang beragam. Baik Anda ingin melakukan perjalanan domestik maupun internasional, kami memiliki tiket yang sesuai dengan kebutuhan Anda. Kami bekerja sama dengan maskapai terkemuka untuk menawarkan jaringan penerbangan yang luas dan jadwal yang fleksibel.', '96356AIRBUS A380 Aircraft Airliner History Information Facts and Interior A380 Pictures Photos.jpeg'),
(18, 'Tiket Bus', 'Economics', '45000', 'Layanan kami menawarkan berbagai pilihan tiket bus untuk tujuan yang beragam. Baik Anda ingin melakukan perjalanan antar kota, perjalanan wisata, atau perjalanan bisnis, kami memiliki tiket yang sesuai dengan kebutuhan Anda. Kami bekerja sama dengan perusahaan bus terpercaya untuk menawarkan jaringan rute yang luas dan jadwal keberangkatan yang fleksibel.', '25968TRAC _ Bus Pariwisata . Rexus HDD . Piala Mas Karoseri . Mercedes Benz');

-- --------------------------------------------------------

--
-- Table structure for table `dari`
--

CREATE TABLE `dari` (
  `dari_id` int(11) NOT NULL,
  `nama_tiket` int(11) NOT NULL,
  `kota_dari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dari`
--

INSERT INTO `dari` (`dari_id`, `nama_tiket`, `kota_dari`) VALUES
(7, 14, 'Cilegon'),
(8, 14, 'Badung'),
(9, 14, 'Cirebon'),
(10, 14, 'Surabaya'),
(11, 14, 'Jakarta'),
(12, 14, 'Probolinggo'),
(13, 14, 'Semarang'),
(14, 14, 'Cilacap'),
(15, 14, 'Lingga'),
(16, 14, 'Tanjungpinang'),
(17, 14, 'Banyuwangi'),
(18, 17, 'Gresik'),
(19, 17, 'Bandung'),
(20, 17, 'Bogor'),
(21, 17, 'Denpasar'),
(22, 17, 'Tasikmalaya'),
(23, 18, 'Surakarta'),
(24, 18, 'Bandung'),
(25, 18, 'Yogyakarta'),
(26, 18, 'Cilacap'),
(27, 18, 'Wonogiri'),
(28, 18, 'Klaten'),
(29, 18, 'Semarang'),
(30, 18, 'Pekalongan'),
(31, 18, 'Banyumas'),
(32, 18, 'Wonosobo'),
(33, 18, 'Magelang'),
(34, 18, 'Salatiga'),
(35, 18, 'Demak'),
(36, 18, 'Kudus'),
(37, 18, 'Boyolali');

-- --------------------------------------------------------

--
-- Table structure for table `ke`
--

CREATE TABLE `ke` (
  `ke_id` int(11) NOT NULL,
  `nama_tiket` int(11) NOT NULL,
  `kota_ke` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ke`
--

INSERT INTO `ke` (`ke_id`, `nama_tiket`, `kota_ke`) VALUES
(7, 14, 'Banyuwangi'),
(8, 14, 'Cilegon'),
(9, 14, 'Badung'),
(10, 14, 'Cirebon'),
(11, 14, 'Surabaya'),
(12, 14, 'Jakarta'),
(13, 14, 'Probolinggo'),
(14, 14, 'Semarang'),
(15, 14, 'Cilacap'),
(16, 14, 'Lingga'),
(17, 14, 'Tanjungpinang'),
(18, 17, 'Gresik'),
(19, 17, 'Bandung'),
(20, 17, 'Bogor'),
(21, 17, 'Denpasar'),
(22, 17, 'Tasikmalaya'),
(23, 18, 'Surakarta'),
(24, 18, 'Bandung'),
(25, 18, 'Yogyakarta'),
(26, 18, 'Cilacap'),
(27, 18, 'Wonogiri'),
(28, 18, 'Klaten'),
(29, 18, 'Semarang'),
(30, 18, 'Pekalongan'),
(31, 18, 'Banyumas'),
(32, 18, 'Wonosobo'),
(33, 18, 'Magelang'),
(34, 18, 'Salatiga'),
(35, 18, 'Demak'),
(36, 18, 'Kudus'),
(37, 18, 'Boyolali');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fakultas`
--

CREATE TABLE `tbl_fakultas` (
  `fakultas_id` int(11) NOT NULL,
  `fakultas_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fakultas`
--

INSERT INTO `tbl_fakultas` (`fakultas_id`, `fakultas_nama`) VALUES
(1, 'Jawa Tengah'),
(2, 'Jawa Barat'),
(3, 'DKI Jakarta'),
(4, 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `jurusan_id` int(11) NOT NULL,
  `jurusan_fakultas` int(11) NOT NULL,
  `jurusan_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`jurusan_id`, `jurusan_fakultas`, `jurusan_nama`) VALUES
(1, 1, 'Surakarta'),
(2, 1, 'Semarang'),
(3, 1, 'Tegal'),
(4, 1, 'Magelang'),
(5, 1, 'Klaten'),
(6, 4, 'Surabaya'),
(7, 4, 'Malang'),
(8, 4, 'Kediri'),
(9, 4, 'Blitar'),
(10, 4, 'Sidoarjo'),
(11, 2, 'Bandung'),
(12, 2, 'Bogor'),
(13, 3, 'Depok'),
(14, 2, 'Tasikmalaya'),
(15, 2, 'Bekasi'),
(16, 3, 'Jakarta Pusat'),
(17, 3, 'Jakarta Barat'),
(18, 3, 'Jakarta Selatan'),
(19, 3, 'Jakarta Timur'),
(20, 3, 'Jakarta Utara');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'admin', '25d55ad283aa400af464c76d713c07ad'),
(4, 'alfian', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dari`
--
ALTER TABLE `dari`
  ADD PRIMARY KEY (`dari_id`),
  ADD KEY `nama_tiket` (`nama_tiket`);

--
-- Indexes for table `ke`
--
ALTER TABLE `ke`
  ADD PRIMARY KEY (`ke_id`),
  ADD KEY `nama_tiket` (`nama_tiket`);

--
-- Indexes for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  ADD PRIMARY KEY (`fakultas_id`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`jurusan_id`),
  ADD KEY `jurusan_fakultas` (`jurusan_fakultas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dari`
--
ALTER TABLE `dari`
  MODIFY `dari_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `ke`
--
ALTER TABLE `ke`
  MODIFY `ke_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  MODIFY `fakultas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `jurusan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dari`
--
ALTER TABLE `dari`
  ADD CONSTRAINT `dari_ibfk_1` FOREIGN KEY (`nama_tiket`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ke`
--
ALTER TABLE `ke`
  ADD CONSTRAINT `ke_ibfk_1` FOREIGN KEY (`nama_tiket`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD CONSTRAINT `tbl_jurusan_ibfk_1` FOREIGN KEY (`jurusan_fakultas`) REFERENCES `tbl_fakultas` (`fakultas_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
