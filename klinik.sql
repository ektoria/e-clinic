-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for klinik
CREATE DATABASE IF NOT EXISTS `klinik` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `klinik`;

-- Dumping structure for table klinik.group_id
CREATE TABLE IF NOT EXISTS `group_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `definition` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table klinik.group_id: ~0 rows (approximately)
/*!40000 ALTER TABLE `group_id` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_id` ENABLE KEYS */;

-- Dumping structure for table klinik.obat
CREATE TABLE IF NOT EXISTS `obat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(128) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table klinik.obat: ~2 rows (approximately)
/*!40000 ALTER TABLE `obat` DISABLE KEYS */;
INSERT INTO `obat` (`id`, `nama_obat`, `keterangan`, `harga`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
	(1, 'Bodrex', 'Sakit Kepala', 5000, '2020-03-03 16:58:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
	(3, 'Procold', 'Obat Deman', 5000, '2021-05-31 06:30:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);
/*!40000 ALTER TABLE `obat` ENABLE KEYS */;

-- Dumping structure for table klinik.pasien
CREATE TABLE IF NOT EXISTS `pasien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_identitas` varchar(30) DEFAULT NULL,
  `nama_pasien` varchar(128) NOT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `alamat` text NOT NULL,
  `telephone` varchar(16) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table klinik.pasien: ~2 rows (approximately)
/*!40000 ALTER TABLE `pasien` DISABLE KEYS */;
INSERT INTO `pasien` (`id`, `nomor_identitas`, `nama_pasien`, `jenis_kelamin`, `alamat`, `telephone`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
	(1, '3215082394924', 'Siti', 'p', 'Karawang', '0989333333333', '2020-03-03 16:55:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
	(2, '3215082394923', 'Boi', 'l', 'Bekasi', '08561234567', '2020-03-03 16:56:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);
/*!40000 ALTER TABLE `pasien` ENABLE KEYS */;

-- Dumping structure for table klinik.pegawai
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pegawai` varchar(128) NOT NULL,
  `alamat` text DEFAULT NULL,
  `telephone` varchar(16) NOT NULL,
  `posisi` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table klinik.pegawai: ~1 rows (approximately)
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` (`id`, `nama_pegawai`, `alamat`, `telephone`, `posisi`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
	(1, 'Johan', 'Karawang', '0891234455', 'Hati', '2020-03-03 16:55:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;

-- Dumping structure for table klinik.rm_obat
CREATE TABLE IF NOT EXISTS `rm_obat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `obat_id` int(11) NOT NULL,
  `rm_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `obat_id` (`obat_id`),
  KEY `rm_id` (`rm_id`),
  CONSTRAINT `rm_obat_ibfk_1` FOREIGN KEY (`obat_id`) REFERENCES `obat` (`id`),
  CONSTRAINT `rm_obat_ibfk_2` FOREIGN KEY (`rm_id`) REFERENCES `tindakan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Dumping data for table klinik.rm_obat: ~2 rows (approximately)
/*!40000 ALTER TABLE `rm_obat` DISABLE KEYS */;
INSERT INTO `rm_obat` (`id`, `obat_id`, `rm_id`) VALUES
	(17, 1, 18),
	(18, 3, 18),
	(19, 1, 19);
/*!40000 ALTER TABLE `rm_obat` ENABLE KEYS */;

-- Dumping structure for table klinik.ruang
CREATE TABLE IF NOT EXISTS `ruang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruang` varchar(128) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table klinik.ruang: ~2 rows (approximately)
/*!40000 ALTER TABLE `ruang` DISABLE KEYS */;
INSERT INTO `ruang` (`id`, `nama_ruang`, `keterangan`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
	(1, 'Melati 01', 'Lantai 1', '2020-03-03 16:57:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
	(2, 'Melati 02', 'Lantai 1', '2020-03-03 16:57:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);
/*!40000 ALTER TABLE `ruang` ENABLE KEYS */;

-- Dumping structure for table klinik.tagihandt
CREATE TABLE IF NOT EXISTS `tagihandt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_transaksi` varchar(50) NOT NULL DEFAULT '0',
  `obat_id` int(11) NOT NULL DEFAULT 0,
  `harga_obat` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table klinik.tagihandt: ~4 rows (approximately)
/*!40000 ALTER TABLE `tagihandt` DISABLE KEYS */;
INSERT INTO `tagihandt` (`id`, `no_transaksi`, `obat_id`, `harga_obat`) VALUES
	(15, '20210601081436', 1, 5000),
	(16, '20210601081436', 3, 5000),
	(17, '20210601093812', 1, 5000);
/*!40000 ALTER TABLE `tagihandt` ENABLE KEYS */;

-- Dumping structure for table klinik.tagihanht
CREATE TABLE IF NOT EXISTS `tagihanht` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_transaksi` varchar(50) NOT NULL DEFAULT '0',
  `pasien_id` int(11) NOT NULL DEFAULT 0,
  `tagihan` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table klinik.tagihanht: ~2 rows (approximately)
/*!40000 ALTER TABLE `tagihanht` DISABLE KEYS */;
INSERT INTO `tagihanht` (`id`, `no_transaksi`, `pasien_id`, `tagihan`) VALUES
	(8, '20210601081436', 1, 10000),
	(9, '20210601093812', 2, 5000);
/*!40000 ALTER TABLE `tagihanht` ENABLE KEYS */;

-- Dumping structure for table klinik.tindakan
CREATE TABLE IF NOT EXISTS `tindakan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_transaksi` varchar(50) NOT NULL DEFAULT '0',
  `pasien_id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` text NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Dumping data for table klinik.tindakan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tindakan` DISABLE KEYS */;
INSERT INTO `tindakan` (`id`, `no_transaksi`, `pasien_id`, `pegawai_id`, `keluhan`, `diagnosa`, `tanggal`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
	(18, '20210601081436', 1, 1, 'Demam', 'Demam', '2021-06-01', '2021-06-01 20:14:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
	(19, '20210601093812', 2, 1, 'Pusing', 'Pusing', '2021-06-01', '2021-06-01 21:38:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);
/*!40000 ALTER TABLE `tindakan` ENABLE KEYS */;

-- Dumping structure for table klinik.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table klinik.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `group_id`, `username`, `password`, `last_login`, `created_at`) VALUES
	(1, 1, 'admin', '$2y$10$8DltCLYI6oYQP4UZBo4WruiqSUXxxq1I8Rqs1523kXNi6xTtusKUu', '0000-00-00 00:00:00', '2020-03-03 16:30:35'),
	(3, 0, 'pegawai', '$2y$10$HQKepf0uDgJHUkllPWlo3udby7QMRzy.IkTEGCvG5anfqHqN/m/pq', '0000-00-00 00:00:00', '2021-06-01 18:50:44');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table klinik.wilayah
CREATE TABLE IF NOT EXISTS `wilayah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_wilayah` varchar(50) NOT NULL DEFAULT '0',
  `keterangan` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table klinik.wilayah: ~0 rows (approximately)
/*!40000 ALTER TABLE `wilayah` DISABLE KEYS */;
/*!40000 ALTER TABLE `wilayah` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
