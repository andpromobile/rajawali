-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_rajawali
DROP DATABASE IF EXISTS `db_rajawali`;
CREATE DATABASE IF NOT EXISTS `db_rajawali` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_rajawali`;

-- Dumping structure for table db_rajawali.tb_detail_transaksi
DROP TABLE IF EXISTS `tb_detail_transaksi`;
CREATE TABLE IF NOT EXISTS `tb_detail_transaksi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_transaksi` int DEFAULT NULL,
  `id_barang` int DEFAULT NULL,
  `qty_di_kirim` decimal(10,0) DEFAULT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  `subtotal` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_rajawali.tb_detail_transaksi: ~0 rows (approximately)
INSERT INTO `tb_detail_transaksi` (`id`, `id_transaksi`, `id_barang`, `qty_di_kirim`, `harga`, `subtotal`) VALUES
	(1, 2, 1, 50, 56000, 56000);

-- Dumping structure for table db_rajawali.tb_pelanggan
DROP TABLE IF EXISTS `tb_pelanggan`;
CREATE TABLE IF NOT EXISTS `tb_pelanggan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nomor_hp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

-- Dumping data for table db_rajawali.tb_pelanggan: ~74 rows (approximately)
INSERT INTO `tb_pelanggan` (`id`, `nama`, `alamat`, `nomor_hp`) VALUES
	(5, 'Tawan Resto', 'Duta Mall, Jl. A. Yani No.KM2, Sungai Baru, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Se', '0878'),
	(6, 'California Café', 'Jl. Kuripan No.11 A, Kuripan, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan 70236', NULL),
	(7, 'Wakaka', 'Jl. A. Yani km. 5 No. 1, Pemurus Baru, Kec. Banjarmasin Sel., Kota Banjarmasin, Kalimantan Selatan 7', NULL),
	(8, 'Office Coffee', 'Jl. M.T. Haryono No.32, RT.03, Kertak Baru Ilir, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimant', NULL),
	(9, 'Royal K BBQ Banjarmasin', 'Duta Mall, Jl. A. Yani No.195, Melayu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan', NULL),
	(10, 'Pochajjang A Yani', 'Jalan A. Yani komplek abri No.km 4, RW.5, Pemurus Baru, Kec. Banjarmasin Sel., Kota Banjarmasin, Kal', NULL),
	(11, 'Swiss Bell Hotel', 'Jl. P. Antasari No.86A, Kelayan Luar, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan 70', NULL),
	(12, 'Jeliyo & Steak ON', 'Kota Lama, Jl Simpang Hasanuddin Hm2 No 83, Kertak Baru Ulu, Kec. Banjarmasin Tengah, Kota Banjarmas', NULL),
	(13, 'Rodhita Hotel', 'Jl. P. Antasari No.41, Kelayan Luar, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 7', NULL),
	(14, 'Tree Park Hotel', 'Jl. Ahmad Yani, Pemurus Dalam, Kec. Banjarmasin Sel., Kota Banjarmasin, Kalimantan Selatan 70248', NULL),
	(15, 'Fugo Hotel', 'Duta Mall Jl. A. Yani No.98, Melayu, Banjarmasin Tengah, Banjarmasin City, South Kalimantan 70232', NULL),
	(16, 'Soraya Café', 'Jl. Simpang Telawang No.51, Kertak Baru Ilir, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan ', NULL),
	(17, 'Ta Xiao', 'Jl. Gatot Subroto, Kebun Bunga, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan 70237', NULL),
	(18, 'Cangkir Coffee Mahligai', 'Jl. Mahligai, RT.05/RW.02, Pemurus Luar, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan', NULL),
	(19, 'Waroeng Steak Sultan Adam', 'Jl. Sultan Adam No.10, Antasan Kecil Tim., Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Sela', NULL),
	(20, 'Kebablasan Bunyamin', 'Jl. A. Yani kilometer 5,9, Ray 5 No.7, Pemurus Dalam, Banjarmasin Selatan, Banjarmasin City, South K', NULL),
	(21, 'Effronte Café', 'Jl. Bumi Mas Raya No.3, Pemurus Baru, Kec. Banjarmasin Sel., Kota Banjarmasin, Kalimantan Selatan 70', NULL),
	(22, 'Kebablasan Karang Anyar', 'Jl. Karang Anyar 1, Loktabat Utara, Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan Selatan 70714', NULL),
	(23, 'Sushi OK ', 'Duta Mall, Melayu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan', NULL),
	(24, 'Jogja Steak', 'Jl. Sukarelawan No.1, Loktabat Utara, Kec. Banjarbaru Utara, Kota Banjar Baru, Kalimantan Selatan 70', NULL),
	(25, 'Nurida', 'di ambil, Komp Bunyamin Permai 2 blok ray 5 no 27', NULL),
	(26, 'Nasa Hotel', 'Jl. H.Djok Mentaya, Kertak Baru Ilir, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan ', NULL),
	(27, 'Kong Burger', ' Jl. M.T. Haryono No.63, Kertak Baru Ulu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Sela', NULL),
	(28, 'Pizza Buah', 'Jl. Let. Jend. Suprapto No.04, Langkai, Kec. Pahandut, Kota Palangka Raya, Kalimantan Tengah 73111', NULL),
	(29, 'Soondobu', 'Hotel Aria Barito, Jl. M.T. Haryono No.16, Kertak Baru Ulu, Kec. Banjarmasin Tengah, Kota Banjarmasi', NULL),
	(30, 'Takemori ', 'Hotel Aria Barito, Jl. M.T. Haryono No.16, Kertak Baru Ulu, Kec. Banjarmasin Tengah, Kota Banjarmasi', NULL),
	(31, 'Waroeng Steak S. Parman', 'Jl. S. Parman No 1B, Samping SPBU S. Parman', NULL),
	(32, 'MS Geisha', 'Jl. A. Yani No.KM 5, Pemurus Baru, Kec. Banjarmasin Sel., Kota Banjarmasin, Kalimantan Selatan 70238', NULL),
	(33, 'Little Taipei', 'Jl. A. Yani (Masuk Jl. Asdi Karya No.2 Sebrang Giant Ekstra Banjarmasin), Pemurus Luar, Kec. Banjarm', NULL),
	(34, 'Le zato', 'Jl Darma Praja', NULL),
	(35, 'Mukaram', 'di ambil, Komp Bunyamin Permai 2 blok ray 5 no 27', NULL),
	(36, 'Takosuki', 'Jl. A. Yani, Mentaos, Kec. Banjarbaru Utara, Kota Banjar Baru, Kalimantan Selatan 70714', NULL),
	(37, 'Rizki Aichi', 'Jl. A. Yani No.Km 33, RT.01/RW.01, Loktabat Utara, Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan ', NULL),
	(38, 'Aichi Resto', 'Jl. A. Yani No.Km 33, RT.01/RW.01, Loktabat Utara, Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan ', NULL),
	(39, 'Bp Budi-Martapura', 'JL.komplek graha permai No 7D jalan batas kota Martapura', NULL),
	(40, 'Bp Budi-Banjarmasin', 'JL.komplek DPR Gg PGRI No 24 Gg fanta 1 Banjarmasin', NULL),
	(41, 'Hj Udin', 'di ambil, Komp Bunyamin Permai 2 blok ray 5 no 27', NULL),
	(42, 'Rattan Inn', 'Jl. A. Yani No.KM, RW.7, Pemurus Dalam, Kec. Banjarmasin Sel., Kota Banjarmasin, Kalimantan Selatan ', NULL),
	(43, 'Saiful Mujab', 'JL. Telaga Intan Komplek telaga intan no 19A Blok A Banjarmasin', NULL),
	(44, 'Dip&Grill', 'Jl. Mayjen Sutoyo S No.8, Antasan Besar, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selat', NULL),
	(45, 'Nyoklateen ', 'Food Space, Jl. Gatot Subroto No.15, Kuripan, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Se', NULL),
	(46, 'Space Ground', 'Jalan Pramuka No.789, RT.20/RW.02, Sungai Lulut, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan', NULL),
	(47, 'Duta Rasa', 'Duta Mall Jl. A. Yani No.KM 2, Melayu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan', NULL),
	(48, 'Kordinat Café', 'Duta Mall Jl. A. Yani No.KM 2, Melayu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan', NULL),
	(49, 'Royal K BBQ Banjarbaru', 'Q-Mall,  Jalan, Komet, Banjarbaru Utara, Banjarbaru City, South Kalimantan', NULL),
	(50, 'Ohaya Suki&Grill', 'Jl.A. Yani km 7.5, Pemurus Luar, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan 70654', NULL),
	(51, 'Megumi Resto', 'Jl. Gatot Subroto No.73, Kuripan, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan 70236', NULL),
	(52, 'Calais Café', 'Jl. Veteran Sungai Bilu No.257 B, Melayu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Sela', NULL),
	(53, 'Mba Kiki', 'Toko Andalas, Jl. Perintis Kemerdekaan No.12, RT.22, Ps. Lama, Kec. Banjarmasin Tengah, Kota Banjarm', NULL),
	(54, 'Cangkir Cofffee LA', 'Jl. A. Yani, Landasan Ulin Sel., Kec. Liang Anggang, Kota Banjar Baru, Kalimantan Selatan 70722', NULL),
	(55, 'Healthy Box-Chintya', 'JL. Tembus prumnas kayutangi Komplek cemara jaya persada No9', NULL),
	(56, 'Felicita Resto', 'Jl. Rinjani No.04A, Palangka, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 73112', NULL),
	(57, 'Yumy Joy', 'Jl. Banjar Permai II No.6, Pemurus Dalam, Kec. Banjarmasin Sel., Kota Banjarmasin, Kalimantan Selata', NULL),
	(58, 'Chicken Pok Pok', 'Jl. Pramuka (Samping Komp. Sarimanis), Pemurus Luar, Banjarmasin Timur, Banjarmasin', NULL),
	(59, 'Waroeng Steak Banjarbaru', 'Jl. Rahayu Sungai Paring No.2, Loktabat Utara, Kec. Banjarbaru Utara, Kota Banjar Baru, Kalimantan S', NULL),
	(60, 'Talenta Gelora', 'di ambil, Komp Bunyamin Permai 2 blok ray 5 no 27', NULL),
	(61, 'Murasuki', 'Jl Liang Anggang', NULL),
	(62, 'Kantin MKS', 'Grand Palace Resto, Plaza Mitra Lt 4, Jl. P. Antasari, Pekapuran Laut, Banjarmasin Tengah, Banjarmas', NULL),
	(63, 'Grand Palace Resto', 'Grand Palace Resto, Plaza Mitra Lt 4, Jl. P. Antasari, Pekapuran Laut, Banjarmasin Tengah, Banjarmas', NULL),
	(64, 'A thousand feet', 'Jl. Ahmad Yani No.km 3,5, Kebun Bunga, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan 7', NULL),
	(65, 'Oishi Kitchen', 'Food Space, Jl. Gatot Subroto No.15, Kuripan, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Se', NULL),
	(66, 'Go Getsu', 'Food Space, Jl. Gatot Subroto No.15, Kuripan, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Se', NULL),
	(67, 'Steak Abu Syahid', 'Jl Banua Anyar, Komp Perum Banua Anyar Permai, no 10 A. Banjarmasin', NULL),
	(68, 'Hj Muhidin', 'di ambil, Komp Bunyamin Permai 2 blok ray 5 no 27', NULL),
	(69, 'Lia Raja Rasa', 'JL Brigjen H Hasan Basri Jl. Komp. Kayu Tangi No.7, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmas', NULL),
	(70, 'Hang Out Kitchen', 'Jl. Pegadaian No.10-11, Pekapuran Laut, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selata', NULL),
	(71, 'Ramen 1', 'Duta Mall LT 3. Banjarmasin', NULL),
	(72, 'Golden Lamian', 'Jl. Veteran, Melayu, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70122', NULL),
	(73, 'Lia Cake', 'Jl. Mayjen Sutoyo S No.16, Tlk. Dalam, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan', NULL),
	(74, 'Tajimaya Resto', 'Jl. Gatot Subroto No.2a, Kebun Bunga, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan 70', NULL),
	(75, 'Kupi Tambi', 'Jl. Yos Sudarso No.99A, Menteng, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 73112', NULL),
	(76, 'Zuri Hotel', ' Jalan Ahmad Yani Km. 6 No. 9, Pemurus Dalam, Banjarmasin Selatan, Banjarmasin City, South Kalimanta', NULL),
	(77, 'Shang Hai Palace Resto', 'Jl. H.Djok Mentaya No.48, Kertak Baru Ilir, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Se', NULL);

-- Dumping structure for table db_rajawali.tb_perusahaan
DROP TABLE IF EXISTS `tb_perusahaan`;
CREATE TABLE IF NOT EXISTS `tb_perusahaan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `no_hp_1` varchar(255) NOT NULL,
  `no_hp_2` varchar(255) NOT NULL,
  `img_perusahaan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_rajawali.tb_perusahaan: ~0 rows (approximately)
INSERT INTO `tb_perusahaan` (`id`, `nama_perusahaan`, `alamat_perusahaan`, `no_hp_1`, `no_hp_2`, `img_perusahaan`) VALUES
	(1, 'RAJAWALI SUKSES PRIMATAMA', 'Komp. Bunyamin Permai 2 Blok Ray 5 No. 27 Banjarmasin', '-', '-', 'Screenshot 2022-10-20 085837.png');

-- Dumping structure for table db_rajawali.tb_produk
DROP TABLE IF EXISTS `tb_produk`;
CREATE TABLE IF NOT EXISTS `tb_produk` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(30) DEFAULT NULL,
  `merk_barang` varchar(30) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `satuan_id` int DEFAULT NULL,
  `stok` decimal(10,0) DEFAULT NULL,
  `harga_jual` decimal(10,0) DEFAULT NULL,
  `harga_beli` decimal(10,0) DEFAULT NULL,
  `img_barang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT 'rajawali.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

-- Dumping data for table db_rajawali.tb_produk: ~46 rows (approximately)
INSERT INTO `tb_produk` (`id`, `kode`, `merk_barang`, `nama_barang`, `satuan_id`, `stok`, `harga_jual`, `harga_beli`, `img_barang`) VALUES
	(16, 'PDF-INA', '-', 'Fish Dori Fillet', 1, 0, 41500, 41500, 'rajawali.png'),
	(17, 'PSA', '-', 'Potato Shoestring', 1, 0, 30000, 30000, 'rajawali.png'),
	(18, 'BLD-PREM', '-', 'BLD Ahmad', 1, 0, 45000, 45000, 'rajawali.png'),
	(19, 'BLP-PREM', '-', 'BLP Ahmad', 1, 0, 44000, 44000, 'rajawali.png'),
	(20, 'BSO-US', '-', 'Beef Shortplate Omaha', 1, 0, 103000, 103000, 'rajawali.png'),
	(21, 'BSS-US', '-', 'Beef Shortplate Swift', 1, 0, 106000, 106000, 'rajawali.png'),
	(22, 'BBC-IND', '-', 'Beef Bufallo Cuberoll', 1, 0, 89000, 89000, 'rajawali.png'),
	(23, 'MELT-TEND', '-', 'Beef Meltiq Tenderloin', 1, 0, 189000, 189000, 'rajawali.png'),
	(24, 'MELT-SIR', '-', 'Beef Metiq Sirloin', 1, 0, 189000, 189000, 'rajawali.png'),
	(25, 'MELT-RIB', '-', 'Beef Metiq Ribeye', 1, 0, 189000, 189000, 'rajawali.png'),
	(26, 'POT-CRIN', '-', 'Potato Crinkle 2.5 kg', 1, 0, 32000, 32000, 'rajawali.png'),
	(27, 'POT-STH', '-', 'Potato Straight cut 2.5 kg', 1, 0, 30000, 30000, 'rajawali.png'),
	(28, 'SFD-TUB', '-', 'Cumi Tube', 1, 0, 54000, 54000, 'rajawali.png'),
	(29, 'FBAL-CID', '-', 'Bakso Ikan cidea', 1, 0, 56000, 56000, 'rajawali.png'),
	(30, 'BEEF-RIB', '-', 'Beef IGA Cutting', 1, 0, 88500, 88500, 'rajawali.png'),
	(31, 'CHICK-SKIN', '-', 'Kulit Body Ahmad', 1, 0, 33000, 33000, 'rajawali.png'),
	(32, 'BEEF-SILV', '-', 'Beef Silverside AMG', 1, 0, 118000, 118000, 'rajawali.png'),
	(33, 'BEEF-STRIP', '-', 'Beef Striploin', 1, 0, 155000, 155000, 'rajawali.png'),
	(34, 'BEEF-MNCD', '-', 'Minced Beef ', 1, 0, 120000, 120000, 'rajawali.png'),
	(35, 'BSI-US', '-', 'Beef Shortplate IBP', 1, 0, 103000, 103000, 'rajawali.png'),
	(36, 'BEEF-TEND-IND', '-', 'Beef Tenderloin 31', 1, 0, 115000, 115000, 'rajawali.png'),
	(37, 'FOAM', '-', 'Streofoam', 2, 0, 15000, 15000, 'rajawali.png'),
	(38, 'BEEF-STRIP-NZ', '-', 'Beef Striploin NZ', 1, 0, 155000, 155000, 'rajawali.png'),
	(39, 'BEEF-TEND-INA', '-', 'Beef Tenderloin INA VP', 1, 0, 145000, 145000, 'rajawali.png'),
	(40, 'BEEF-TAIL-INA', '-', 'Buntut Lokal ', 1, 0, 100000, 100000, 'rajawali.png'),
	(41, 'TOAST-BUR', '-', 'Burger Bun Sesame', 3, 0, 266000, 266000, 'rajawali.png'),
	(42, 'MILK-DIA', '-', 'Milk UHT Full Cream', 3, 0, 215000, 215000, 'rajawali.png'),
	(43, 'MEATBALL-PRIM', '-', 'Bakso Sapi Prima', 4, 0, 46000, 46000, 'rajawali.png'),
	(44, 'BEEF-CUBE-IND', '-', 'Beef Cuberoll Bufallo', 1, 0, 89000, 89000, 'rajawali.png'),
	(45, 'BEEF-TEND-TEYS', '-', 'Beef Tenderlon Teys', 1, 0, 205000, 205000, 'rajawali.png'),
	(46, 'MIX-VEG', '-', 'Mixed Vegetable', 1, 0, 31000, 31000, 'rajawali.png'),
	(47, 'NUG-HEM', '-', 'Nugget Hemato', 1, 0, 48000, 48000, 'rajawali.png'),
	(48, 'BEEF-CHUCK', '-', 'Beef Chuck Crest', 1, 0, 115000, 115000, 'rajawali.png'),
	(49, 'SFD-GUR', '-', 'Gurami', 1, 0, 55000, 55000, 'rajawali.png'),
	(50, 'NUG-SO-EC', '-', 'Nugget SO ECO', 1, 0, 48000, 48000, 'rajawali.png'),
	(51, 'BEEF-SAI-CUB', '-', 'Beef Saikoro', 1, 0, 153000, 153000, 'rajawali.png'),
	(52, 'KERN-CORN', '-', 'Kernel Corn', 1, 0, 30000, 30000, 'rajawali.png'),
	(53, 'BEEF-SAU-VIT', '-', 'Sosis Beef Vitalia', 1, 0, 75000, 75000, 'rajawali.png'),
	(54, 'CHICK-LIV', '-', 'CHICKEN LIVER', 1, 0, 40000, 40000, 'rajawali.png'),
	(55, 'BEEF-SAU-CHIC', '-', 'SAUSAGE CHICKEN', 1, 0, 70000, 70000, 'rajawali.png'),
	(56, 'FISH-SALM', '-', 'SALMON FRZ HEAD ON', 1, 0, 190000, 190000, 'rajawali.png'),
	(57, 'BEEF-STRIP-AMH', '-', 'BEEF STRIPLOIN AMH', 1, 0, 155000, 155000, 'rajawali.png'),
	(58, 'BEEF-TOP-AUS', '-', 'BEEF TOP SIDE AUS', 1, 0, 130000, 130000, 'rajawali.png'),
	(59, 'BEEF-RUMP-AUS', '-', 'BEEF RUMP AUS', 1, 0, 130000, 130000, 'rajawali.png'),
	(60, 'IC-REG-NEA', '-', 'IC Reg Neapolitan', 5, 0, 190000, 190000, 'rajawali.png'),
	(61, 'POT-SHS-MAR', '-', 'Potato Shoestring Marquase', 1, 0, 32000, 32000, 'rajawali.png');

-- Dumping structure for table db_rajawali.tb_satuan
DROP TABLE IF EXISTS `tb_satuan`;
CREATE TABLE IF NOT EXISTS `tb_satuan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `satuan` varchar(10) NOT NULL,
  `keterangan` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_rajawali.tb_satuan: ~5 rows (approximately)
INSERT INTO `tb_satuan` (`id`, `satuan`, `keterangan`) VALUES
	(1, 'KG', 'Ini keterangan satuan KG'),
	(2, 'PC', 'Ini keterangan satuan untuk PC'),
	(3, 'CS', 'Keterangan satuan untuk CS'),
	(4, 'PK', 'Keterangan untuk satuan PK'),
	(5, 'PL', 'Keterangan untuk satuan PL');

-- Dumping structure for table db_rajawali.tb_supplier
DROP TABLE IF EXISTS `tb_supplier`;
CREATE TABLE IF NOT EXISTS `tb_supplier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_supp` varchar(30) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_rajawali.tb_supplier: ~2 rows (approximately)
INSERT INTO `tb_supplier` (`id`, `nama_supp`, `alamat`, `no_hp`) VALUES
	(1, 'Supplier 1', 'Jalan Perdagangan', '087814258750');

-- Dumping structure for table db_rajawali.tb_transaksi
DROP TABLE IF EXISTS `tb_transaksi`;
CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomor_nota` varchar(255) DEFAULT NULL,
  `tgl_kirim` date DEFAULT NULL,
  `jatuh_tempo` date NOT NULL,
  `pelanggan_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_rajawali.tb_transaksi: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
