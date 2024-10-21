-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 17, 2024 at 10:25 AM
-- Server version: 8.3.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emonitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_abd`
--

DROP TABLE IF EXISTS `tbl_abd`;
CREATE TABLE IF NOT EXISTS `tbl_abd` (
  `id_abd` int NOT NULL AUTO_INCREMENT,
  `id_spk` int NOT NULL,
  `dokumen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_abd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addendum`
--

DROP TABLE IF EXISTS `tbl_addendum`;
CREATE TABLE IF NOT EXISTS `tbl_addendum` (
  `id_addendum` int NOT NULL AUTO_INCREMENT,
  `id_spk` int NOT NULL,
  `no_addendum` varchar(100) NOT NULL,
  `dokumen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_addendum`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_beritaacara`
--

DROP TABLE IF EXISTS `tbl_beritaacara`;
CREATE TABLE IF NOT EXISTS `tbl_beritaacara` (
  `id_beritaacara` int NOT NULL AUTO_INCREMENT,
  `id_spk` int NOT NULL,
  `berita` text NOT NULL,
  `no_berita` varchar(100) NOT NULL,
  `dokumen` text NOT NULL,
  PRIMARY KEY (`id_beritaacara`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokumentasi`
--

DROP TABLE IF EXISTS `tbl_dokumentasi`;
CREATE TABLE IF NOT EXISTS `tbl_dokumentasi` (
  `id_dokumentasi` int NOT NULL AUTO_INCREMENT,
  `id_spk` int NOT NULL,
  `tanggal_dokumentasi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `progres_pekerjaan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gambar1` text NOT NULL,
  `gambar2` text NOT NULL,
  `gambar3` text NOT NULL,
  `gambar4` text NOT NULL,
  PRIMARY KEY (`id_dokumentasi`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_dokumentasi`
--

INSERT INTO `tbl_dokumentasi` (`id_dokumentasi`, `id_spk`, `tanggal_dokumentasi`, `progres_pekerjaan`, `gambar1`, `gambar2`, `gambar3`, `gambar4`) VALUES
(3, 2, '2024-09-12', '45%', '35febd232f1050dbc91d6a0bd366f746.png', 'e3b40210cc830693e4bfe9193825f96d.png', '4466f9ce4a7d04ea1cda666cc2d02f7d.png', '5cdf4d63715a90c295cac0e87932046b.png'),
(4, 2, '2024-09-13', '80%', 'd0e64a2e176932ccbe03d423c170d770.png', 'cd610af65860607977e3c0b07cd1c3ed.png', '6e873a01eedf1e3114697a15b5973502.png', '4480f6d9d9d9b4efbbeb6368009610d4.png'),
(5, 2, '2024-09-28', '100%', '0e889791f4ad922b23f7e930c7b75c5f.png', '2d8e85263b974a02a2a4975d9dab4671.png', '1ca050452547d62295bfc8592c06e87f.png', '58b956c1aa150b991a2458707a6fe5d6.png'),
(6, 3, '2024-09-12', '70%', 'b4cb562242250c5f8b9fe5adbe63039f.png', 'ac7e07f6e19bc0e25e397ec85444cc1d.png', 'ce35f53f90f25a57077e2d8c25983a29.png', 'd49fead876d11105d37f7d3b8994fc87.png'),
(7, 4, '2024-09-12', '45%', '3b6691ed96a962b67f5a0a0eb2dae5b4.png', '26c24620c086973d198c6b68408fc267.png', '162ae7b21d32ec5e9f24f3417209d9e1.png', '51f9a4d1a2c60b4aa8ecc52b9084c54c.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporankerja`
--

DROP TABLE IF EXISTS `tbl_laporankerja`;
CREATE TABLE IF NOT EXISTS `tbl_laporankerja` (
  `id_laporankerja` int NOT NULL AUTO_INCREMENT,
  `id_spk` int NOT NULL,
  `dokumen` text NOT NULL,
  PRIMARY KEY (`id_laporankerja`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_laporankerja`
--

INSERT INTO `tbl_laporankerja` (`id_laporankerja`, `id_spk`, `dokumen`) VALUES
(1, 1, 'b18346588f40dcb848755497ff6c7914.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

DROP TABLE IF EXISTS `tbl_pengguna`;
CREATE TABLE IF NOT EXISTS `tbl_pengguna` (
  `id_pengguna` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `username`, `password`, `jabatan`, `nama`) VALUES
(1, 'admin', '$2y$10$TnHE/bh0nrHleSLbtChZ5.CNWD01BhudR7Tm49iVyuvtXFbRiKX3W', 'admin', 'Admin'),
(11, 'dedi', '$2y$10$TnHE/bh0nrHleSLbtChZ5.CNWD01BhudR7Tm49iVyuvtXFbRiKX3W', 'user', 'M Dedi Robyyanto');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spk`
--

DROP TABLE IF EXISTS `tbl_spk`;
CREATE TABLE IF NOT EXISTS `tbl_spk` (
  `id_spk` int NOT NULL AUTO_INCREMENT,
  `pekerjaan` text NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `nomor_kontrak` text NOT NULL,
  `jangka_kontrak` text NOT NULL,
  `nilai_kontrak` int NOT NULL,
  `dokumen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_spk`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_spk`
--

INSERT INTO `tbl_spk` (`id_spk`, `pekerjaan`, `lokasi`, `nomor_kontrak`, `jangka_kontrak`, `nilai_kontrak`, `dokumen`) VALUES
(3, 'SPK Rehabilitasi dan Optimalisasi IPA III Kapasitas 110 L/D Lokasi IPA Imam Bonjol PERUMDA Air Minum Tirta Khatulistiwa', 'jl. imbon', '2/2/2', '20-juli-2024 samapi 20-juli-2025', 200000000, '8cbea0231e5d442bb4f9c67baa875612.pdf'),
(2, 'SPK Pemasangan Pompa Distribusi Reservoir Rambutan Kapasitas 100 L/D head 45 Meter Beserta Pengadaan dan Pemasangan Perpipaan dan Accesoriesnya', 'Reservoir Rambutan', '1/1/1', '20-juli-2024 samapi 20-juli-2025', 10000000, 'a6e1439467fc8f2627d5e8f5f4643470.pdf'),
(4, 'SPK Pengecatan Rumah Pompa Booster Swignyo Lokasi Jl. HM. Swignyo 1 Kec. Pontianak Kota Pontianak', 'Jl. HM. Swignyo 1 Kec. Pontianak Kota Pontianak', '3/3/3', '20-juli-2024 samapi 20-juli-2025', 350000000, 'e3b577c84fff037dff8812ca86e031b1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suratkeputusan`
--

DROP TABLE IF EXISTS `tbl_suratkeputusan`;
CREATE TABLE IF NOT EXISTS `tbl_suratkeputusan` (
  `id_suratkeputusan` int NOT NULL AUTO_INCREMENT,
  `id_spk` int NOT NULL,
  `no_suratkeputusan` varchar(100) NOT NULL,
  `pengawas` varchar(100) NOT NULL,
  `dokumen` text NOT NULL,
  PRIMARY KEY (`id_suratkeputusan`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surattugas`
--

DROP TABLE IF EXISTS `tbl_surattugas`;
CREATE TABLE IF NOT EXISTS `tbl_surattugas` (
  `id_surattugas` int NOT NULL AUTO_INCREMENT,
  `id_spk` int NOT NULL,
  `no_surattugas` text NOT NULL,
  `pengawas` varchar(50) NOT NULL,
  `dokumen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_surattugas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
