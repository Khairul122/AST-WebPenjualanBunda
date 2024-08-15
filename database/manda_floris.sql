-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2024 at 09:59 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manda_floris`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `kode_pembelian` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `id_pengguna` int NOT NULL,
  `id_produk` int NOT NULL,
  `kode_voucher` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_beli` int NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `bank` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_bukti` text COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('Dikonfirmasi','Belum Dikonfirmasi') COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_beli` date NOT NULL,
  `bulan` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `wsimpan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`kode_pembelian`, `id_pengguna`, `id_produk`, `kode_voucher`, `jumlah_beli`, `alamat`, `bank`, `foto_bukti`, `status`, `tgl_beli`, `bulan`, `tahun`, `wsimpan`) VALUES
('KP2024123426', 13, 23, 'V085407', 2, 'Inderapura', 'BCA', 'download.jpeg', 'Dikonfirmasi', '2024-08-12', '08', '2024', '2024-08-12 21:39:51'),
('KP2024124214', 13, 11, '-', 1, 'Dh Lah', 'BCA', 'Genesis.png', 'Dikonfirmasi', '2024-08-12', '08', '2024', '2024-08-12 21:43:59'),
('KP2024124301', 13, 21, 'V085510', 3, 'Kiw kiw', 'BRI', 'artikel12.jpg', 'Dikonfirmasi', '2024-08-12', '08', '2024', '2024-08-12 21:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `wsimpan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `wsimpan`) VALUES
(9, 'Bouqet', '2024-08-04 17:21:56'),
(10, 'Karangan Bunga', '2024-08-05 15:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int NOT NULL,
  `id_pengguna` int NOT NULL,
  `id_produk` int NOT NULL,
  `jumlah_produk` int NOT NULL,
  `wsimpan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `id_komen` int NOT NULL,
  `id_produk` int NOT NULL,
  `id_pengguna` int NOT NULL,
  `komen` text COLLATE utf8mb4_general_ci NOT NULL,
  `bintang` int NOT NULL,
  `waktu_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int NOT NULL,
  `user` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_pengguna` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `jk` enum('Laki-laki','Perempuan') COLLATE utf8mb4_general_ci NOT NULL,
  `nohp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `level` enum('Admin','Personal','Perusahaan') COLLATE utf8mb4_general_ci NOT NULL,
  `wsimpan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `user`, `pass`, `nama_pengguna`, `jk`, `nohp`, `alamat`, `level`, `wsimpan`) VALUES
(6, 'admin', 'admin', 'Gading Maharani', 'Perempuan', '082392042430', 'Kota Solok\r\n', 'Admin', '2024-08-05 15:17:14'),
(12, 'gadingmr', '12345', 'gading', 'Perempuan', '0987654321', 'kota solok', 'Personal', '2024-08-04 17:21:13'),
(13, 'lian18', 'root', 'Aprilian Gevindo', 'Laki-laki', '0909090909', 'Pessel', 'Perusahaan', '2024-08-12 21:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int NOT NULL,
  `id_kategori` int NOT NULL,
  `nama_produk` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `stok` int NOT NULL,
  `harga_produk` int NOT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci NOT NULL,
  `wsimpan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `stok`, `harga_produk`, `foto`, `keterangan`, `wsimpan`) VALUES
(11, 9, 'Bouqet bunga mawar', 9, 75000, 'id-11134207-7r98q-lxgo3gryvpn191.jpeg', '-Buket isi 15 tangkai <br>\r\n-Warna bunga tulis dicatatan <br>\r\n-Warna divariasi adalah warna kertas <br>\r\n-Tulis dicatatan warna bunga yg diinginkan <br>\r\n-Free blank greeting card <br>\r\n-Ukuran buket panjang ±30-35cm <br>\r\n-Wrapping kertas chellopane premium (anti air) <br>', '2024-08-12 21:42:14'),
(14, 9, 'Flower box', 5, 200000, 'id-11134207-7r990-lxnjkhzycujwc2.jpeg', '-Rangkaian bunga sesuai foto, bisa request warna <br>\r\n-Rangkaian bunga bisa disimpan selamanya dan dipajang dengan cantik <br>\r\n-Pilihan warna tulisan: Putih, Hitam, Gold <br>\r\n-Cocok banget buat hadiah opening toko, hadiah wisuda, hadiah ulang tahun <br>', '2024-08-05 15:30:24'),
(15, 9, 'Buket Boneka Wisuda', 10, 150000, 'id-11134207-7r98o-lux5ik85th2518.jpeg', '- Boneka beruang ukuran 5” bisa dikasih selempang nama , nama di selempang nama bisa request <br>\r\n-Bunga Artificial ( warna tema bunga bisa custom) <br>\r\n- FREE selempang nama custom <br>\r\n- FREE kartu ucapan <br>', '2024-08-05 15:35:17'),
(16, 9, 'Buket Bunga Palsu', 8, 20000, 'id-11134207-7r98u-lr2u8c8o9vm1da.jpeg', '- (BUNGA PALSU/ARTIFICIAL)\r\nDeskripsi :  \r\n- hanya bisa pilih warna bunga saja <br>\r\n- Bisa Request kartu ucapan <br>\r\n- tidak diberi buble wrap <br>\r\n- ukuran buket dan kardus 40x5x5 <br>\r\n\r\n', '2024-08-05 15:39:31'),
(17, 9, 'Mini Buket Coklat Cadbury', 10, 55000, 'id-11134207-7r98q-lxtk2cx92rak2a.jpeg', 'Isi Buket:\r\n-10 pcs Cadbury mini (4.5) gram <br>\r\n-Bunga/Tanpa Bunga <br>\r\n-Warna wrapping Hitam dan Putih <br>\r\n- Request kartu ucapan <br>\r\n- Pilihan warna sesuai dengan gambar <br>\r\n', '2024-08-05 15:43:43'),
(18, 9, 'Black Roses Flower Bouqet', 7, 157000, 'id-11134207-7qul4-lj00dxtl9phz09.jpeg', 'Detail Produk :\r\n• Black Roses (bisa request) <br>\r\n• Gift Card (bisa request) <br>\r\n• Artificial Flowers <br>\r\n• Wrapping (bisa request) <br>\r\n• Sticker Bouquet <br>\r\n• Pita <br>\r\n\r\nDimensi Ukuran (-/+) : <br>\r\n• 3 tangkai = 15x25 cm <br>\r\n• 5 tangkai = 28x40 cm <br>\r\n• 7 tangkai = 35x55 cm <br>\r\n• 10 tangkai = 39x63 cm <br>\r\n• 12 tangkai = 41x67 cm <br>\r\n• 15 tangkai = 47x72 cm <br>', '2024-08-05 15:47:48'),
(20, 10, 'Karangan Bungaa Double', 8, 400000, 'papan bunga doble.jpeg', 'Ukuran single (1 papan) = 1.8m x 2.7m <br>\r\nUkuran Double/ Jumbo ( 2 papan )= 1.8m x 5.2 m <br>\r\nBisa Request Tulisan\r\n', '2024-08-05 15:53:45'),
(21, 10, 'Papan Bunga Ucapan Akrilik', 12, 450000, 'id-11134207-7r98y-lv3dh9fzhnil19.jpeg', '-FREE Design, bisa request tulisan & logo di acrylic <br>\r\n-BEBAS pilih warna bunga, rangkaian bunga artificial / dried & preserved akan awet selamanya (tidak akan layu) <br> \r\n-Cocok buat hadiah grand opening toko atau sebagai pengganti papan bunga, karena awet bisa dipajang selamanya <br>\r\n- Akrilik bentuk bulat <br>\r\n-Tinggi produk = 140cm <br>', '2024-08-12 21:43:01'),
(22, 10, 'Flower Box', 15, 200000, 'id-11134207-7r98w-lwnfysyrjnl626.jpeg', '-Uk 50x60 | BOX ONLY\r\n-Untuk acara wisuda/ kelulusan /Grand opening\r\nPesta\r\n-Wedding & Engagment\r\ndll\r\n- bisa reqeust mode\r\n- Bahan PVC ', '2024-08-05 16:10:42'),
(23, 10, 'Papan Akrilik Kubah', 8, 250000, 'id-11134207-7r98o-lrg0zkh2gnra8c.jpeg', '-BISA REQUEST TULISAN  <br>\r\n- Papan Bunga berbentuk kubah <br>\r\nWarna <br>\r\n- Bening <br>\r\n- Putih Susu <br>\r\n- Hitam <br>\r\nUkuran <br>\r\n-40x60 cm <br>\r\n', '2024-08-12 21:34:26'),
(24, 10, 'Papan Bunga Standar', 8, 200000, 'papan bunga staandar.jpeg', '-Ukuran 2m x 1,25m / 2M x 1,50m / 4m x 1,25m. <br>\r\n-Terbuat dari papan styrofoam dengan rangka bambu <br>\r\n-Bunga yang dipakai dijamin adalah bunga segar Kombinasi <br>\r\n- Bisa Request Tulisan <br>\r\n', '2024-08-05 16:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` int NOT NULL,
  `kode_voucher` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `diskon` float NOT NULL,
  `min_belanja` int NOT NULL,
  `akun` enum('Personal','Perusahaan') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `wsimpan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id_voucher`, `kode_voucher`, `diskon`, `min_belanja`, `akun`, `wsimpan`) VALUES
(12, 'V085041', 5, 200000, 'Perusahaan', '2024-08-12 20:50:41'),
(13, 'V085407', 10, 500000, 'Perusahaan', '2024-08-12 20:54:07'),
(14, 'V085510', 15, 1000000, 'Perusahaan', '2024-08-12 20:55:10'),
(15, 'V085558', 20, 2000000, 'Perusahaan', '2024-08-12 20:55:58'),
(16, 'V085714', 2.5, 100000, 'Personal', '2024-08-12 20:57:34'),
(17, 'V085803', 5, 150000, 'Personal', '2024-08-12 20:58:03'),
(18, 'V085822', 7.5, 200000, 'Personal', '2024-08-12 20:58:22'),
(19, 'V085842', 10, 300000, 'Personal', '2024-08-12 20:58:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`kode_pembelian`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_voucher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `id_komen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_voucher` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komen`
--
ALTER TABLE `komen`
  ADD CONSTRAINT `komen_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komen_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
