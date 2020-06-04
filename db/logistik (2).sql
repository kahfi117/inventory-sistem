-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2020 at 02:56 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistik`
--

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id` int(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `kd_barang` varchar(255) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `stock_awal` int(15) NOT NULL,
  `stock_terjual` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `kd_barang`, `nama`, `jumlah`, `satuan`, `keterangan`, `stock_awal`, `stock_terjual`) VALUES
(1199, 'MGG-08.4.4', 'Vertical Guide Machine Steel', 0, 'pcs', 'Ready Stock', 0, 0),
(1200, 'MGG-100', 'Steel Wire Brush Wooden handle', 0, 'pcs', 'Ready Stock', 0, 0),
(1201, 'MGG-78.2A', 'Allen Key Hardened steels -1/4\"', 0, 'pcs', 'Ready Stock', 0, 0),
(1202, 'MGG-79.4', 'Pipe Wrench* 24\" Wrench', 0, 'pcs', 'Ready Stock', 0, 0),
(1203, 'MGG-79.4', 'Pipe Wrench', 0, 'pcs', 'Ready Stock', 0, 0),
(1204, 'MGS-07', 'HAND BOR', 0, 'Set', 'Ready Stock', 0, 0),
(1205, 'MGS-07.1', 'Drilling Rod Solid bar, 1 m length, 1 1/4- dia.', 0, 'pcs', 'Ready Stock', 0, 0),
(1206, 'MGS-07.10', 'Vertical Gutde Machine Steel', 0, 'pcs', 'Ready Stock', 0, 0),
(1207, 'MGS-07.2', 'Iwan Type Auger Welded steel two radial blades, 4\" dia.', 0, 'pcs', 'Ready Stock', 0, 0),
(1208, 'MGS-07.3', 'Straight Choping Auger Steel bar, hardened tip, 45 mm width', 0, 'pcs', 'Ready Stock', 0, 0),
(1209, 'MGS-07.4', 'T-Piece Welded steel', 0, 'pcs', 'Ready Stock', 0, 0),
(1210, 'MGS-07.5', 'Tube Adaptor Machine steel, with 3 clamptng bolts', 0, 'pcs', 'Ready Stock', 0, 0),
(1211, 'MGS-07.6', 'Turntng Rod Machine steel, 1 1/4\" daa. 60 cm length', 0, 'pcs', 'Ready Stock', 0, 0),
(1212, 'MGS-07.7', 'Sampling Tube 68 mm dia, 40 cm with 3 bolt holes.', 0, 'pcs', 'Ready Stock', 0, 0),
(1213, 'MGS-07.8', 'Rod Head Hardened, machined steels 2 1/2 dia', 0, 'pcs', 'Ready Stock', 0, 0),
(1214, 'MGS-07.9', 'Parafin', 0, 'kg', 'Ready Stock', 0, 0),
(1215, 'MGS-08', 'STANDARD PENETRATION TEST ASTM D-1586/AASHTO T-206', 0, 'Set', 'Ready Stock', 0, 0),
(1216, 'MGS-08.1', 'Split Barel Sampler hardened machined steel, 1 3/8\" I.d; 18\" length', 0, 'pcs', 'Ready Stock', 0, 0),
(1217, 'MGS-08.2', 'Sampling Rod Steel Pipe, 1.5 m length.', 0, 'pcs', 'Ready Stock', 0, 0),
(1218, 'MGS-08.3', 'Drive weight Assembly', 0, 'pcs', 'Ready Stock', 0, 0),
(1219, 'MGS-08.3.1', 'Hammer Steel 63.5 kg weight', 0, 'pcs', 'Ready Stock', 0, 0),
(1220, 'MGS-08.3.2', 'Anvil Machine Steel', 0, 'pcs', 'Ready Stock', 0, 0),
(1221, 'MGS-08.3.3', 'Guide Rod Steel 76.2 cm drop height', 0, 'pcs', 'Ready Stock', 0, 0),
(1222, 'MGS-08.4', 'Tripod Assembly', 0, 'pcs', 'Ready Stock', 0, 0),
(1223, 'MGS-08.4.1', 'Tripod Stand Steel pipe', 0, 'pcs', 'Ready Stock', 0, 0),
(1224, 'MGS-08.4.2', 'Pulley 20 cm dia.', 0, 'pcs', 'Ready Stock', 0, 0),
(1225, 'MGS-08.4.3', 'Rope 3/4 dia x 15 mtr', 0, 'rol', 'Ready Stock', 0, 0),
(1226, 'MGA-31', 'SPECIFIC GRAVITY & ABSORPTION OF COARSE AGGREGATE TEST SET ASTM C-127 / AASHTO T-85', 0, 'Set', 'Ready Stock', 0, 0),
(1227, 'MGA-31.1', 'Dunagan Balance', 0, 'Set', 'Ready Stock', 0, 0),
(1228, 'MGA-31.1.1', 'Mounting Table Welded steel table, elevated container support.', 0, 'pcs', 'Ready Stock', 0, 0),
(1229, 'MGA-31.1.2', 'Water Container Galvanized container. 20 ltr capacitv', 0, 'Set', 'Ready Stock', 0, 0),
(1230, 'MGG-18', 'Heavy Duty Solution Balance 20 kg capacity, 1 gr sensitivity suplied complete with weights.', 0, 'pcs', 'Ready Stock', 0, 0),
(1231, 'MGA-31.2', 'Sample Basket # 8 mesh, 200 mm dia. 200 mm height', 0, '', 'Ready Stock', 0, 0),
(1232, 'MGA-32', 'SPECIFIC GRAVITY & ABSORPTION OF COARSE AGGREGATE TEST SET ASTM C-127 / AASHTO T-85', 0, 'set', 'Ready Stock', 0, 0),
(1233, 'MGA-32.1', 'Dunagan Balance  ', 0, 'pcs', 'Ready Stock', 0, 0),
(1234, 'MGA-32.1.1', 'Mounting Table Welded steel table, elevated container support,', 0, 'pcs', 'Ready Stock', 0, 0),
(1235, 'MGA-32.1.2', 'Water Container Galvanized container, 20 ltr capacgty.', 0, 'pcs', 'Ready Stock', 0, 0),
(1236, 'MGG-21', 'Balance Digital balance, 220 6100 gr x 0.1 gr capacity.', 0, 'pcs', 'Ready Stock', 0, 0),
(1237, 'MGA-32.2', 'Sample Basket # 8 mesh. 200 mm dia. 200 mm height.', 0, 'pcs', 'Ready Stock', 0, 0),
(1238, 'MGA-29', 'BULK DENSITY TEST SET ASTM C-29 / AASHTO T-19', 0, 'Set', 'Ready Stock', 0, 0),
(1239, 'MGA-29.1', 'Vibrating Table Variable speed up to 3600 rpm separate control boxg 50 x 50 cm table,', 0, 'Set', 'Ready Stock', 0, 0),
(1240, 'MGA-29.2.1', 'Container Machined steel, galvanized, 3 capacity.', 0, 'pcs', 'Ready Stock', 0, 0),
(1241, 'MGA-29.2.2', 'Container Machined steel, galvanized, 10 capacity.', 0, 'pcs', 'Ready Stock', 0, 0),
(1242, 'MGA-29.2.3', 'Container Machined steel, galvanized, 15 capacity.', 0, 'pcs', 'Ready Stock', 0, 0),
(1243, 'MGA-29.2.4', 'Container Machined steel, galvanized, 30 capacity.', 0, 'pcs', 'Ready Stock', 0, 0),
(1244, 'MGA-28', 'AGGREGATE CRUSHING VALUE APPARATUS BS-812', 0, 'Set', 'Ready Stock', 0, 0),
(1245, 'MGA-28.1', 'Cylinder Machine steel, 154 mm dia.', 0, 'pcs', 'Ready Stock', 0, 0),
(1246, 'MGA-28.2', 'Plunger Machine steel.', 0, 'pcs', 'Ready Stock', 0, 0),
(1247, 'MGA-28.3', 'Base Plate Machine steel', 0, 'pcs', 'Ready Stock', 0, 0),
(1248, 'MGA-28.4', 'Metal Measure 115 mm dim. 180 mm deep.', 0, 'pcs', 'Ready Stock', 0, 0),
(1249, 'MGA-28.5', 'Tamping Rod Galvanized steel, 16 mm dia.. 500 mm length, hemispherical at both ends,', 0, 'pcs', 'Ready Stock', 0, 0),
(1250, 'MGA-27', 'AGGREGATE IMPACT TEST BS-812', 0, 'Set', 'Ready Stock', 0, 0),
(1251, 'MGA-27.1', 'Impact Machine Heavy-duty steel construction. safety locking bar, built in counter', 0, 'Set', 'Ready Stock', 0, 0),
(1252, 'MGA-27.2', 'Cylindrical Measure Mechanical steel, 75 mm chat 50 mm deep.', 0, 'pcs', 'Ready Stock', 0, 0),
(1253, 'MGA-27.3', 'Tamping Rod Galvanized steel, 3/8\" dia, length', 0, 'pcs', 'Ready Stock', 0, 0),
(1254, 'MGA-26', 'LOS ANGELES ABRASSION MACHINE ASTM C-131 / ASHTO T-96', 0, 'Set', 'Ready Stock', 0, 0),
(1255, 'MGA-26.1', 'Los Angeles Abrasion Machine', 0, 'Set', 'Ready Stock', 0, 0),
(1256, 'MGS-26.2', 'Los Angeles Abrasion Machine \nFrame : Welded steel frame 8 and 12 cm. [-steel profile. \nDrum : 1/2\" thick steel plate 28\" inner dia. 20\" inner width. \nAutomatic Counter :\nDigital, module system for easy maintanance \nPanel button : ON-OFF-RUN-STOP \nON-OFF-RUN-STOP-JOG-RESET-500-tOOO. \nPower : Electromotor, dual voltage 110-220V* 750 watt, 1 Phase, Heavy duty speed reducer. \nDrum Speed : 30 - 33 rpm, ', 0, 'pcs', 'Ready Stock', 0, 0),
(1257, 'MGS-26.3', 'Catching Pan \nGalvanized steel. ', 0, 'pcs', 'Ready Stock', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id_supplier` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id_supplier`, `nama`, `nomor`, `fax`, `email`, `alamat`) VALUES
('IDSUP-0001', 'PT. Maju Mundur', '088888888', '898989898', 'tes132@gamil.com', 'jalan jalan'),
('IDSUP-0002', 'Oppo', '6666', '6666', 'tes13213@gamil.com', 'bubububub'),
('IDSUP-0003', 'Asus', '0888888', '09999999', 'asus@asus.co.id', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tk_barang`
--

CREATE TABLE `tbl_tk_barang` (
  `detail_id` int(11) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `kodebar` varchar(20) NOT NULL,
  `namabar` varchar(50) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tk_barang`
--

INSERT INTO `tbl_tk_barang` (`detail_id`, `id_transaksi`, `kodebar`, `namabar`, `jumlah`, `waktu`) VALUES
(1, 'TRSBK-0001', 'MGA-01', 'Korek', 2, '2020-05-02 15:00:15'),
(3, 'TRSBK-0001', 'MGA-01', 'Korek', 212, '2020-05-02 15:00:15'),
(4, 'TRSBK-0002', 'MCO-01', 'Piring', 1, '2020-05-22 14:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tk_supplier`
--

CREATE TABLE `tbl_tk_supplier` (
  `id_transaksi` varchar(20) NOT NULL,
  `id_supplier` varchar(20) NOT NULL,
  `namasup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tk_supplier`
--

INSERT INTO `tbl_tk_supplier` (`id_transaksi`, `id_supplier`, `namasup`) VALUES
('TRSBK-0001', 'IDSUP-0001', 'PT. Maju Mundur'),
('TRSBK-0002', 'IDSUP-0002', 'Oppo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tm_barang`
--

CREATE TABLE `tbl_tm_barang` (
  `detail_id` int(100) NOT NULL,
  `id_transaksi` varchar(20) NOT NULL,
  `kd_barang` varchar(20) NOT NULL,
  `namabar` varchar(50) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tm_barang`
--

INSERT INTO `tbl_tm_barang` (`detail_id`, `id_transaksi`, `kd_barang`, `namabar`, `jumlah`, `waktu`) VALUES
(7, 'TRSBM-0001', 'MGA-01', 'Korek', 1, '2020-05-02 00:26:56'),
(12, 'TRSBM-0002', 'MCO-01', 'Piring', 2, '2020-05-02 14:25:47'),
(14, 'TRSBM-0002', 'MGA-01', 'Korek', 12, '2020-05-02 14:33:32'),
(15, 'TRSBM-0003', 'MGA-01', 'Korek', 3, '2020-05-15 15:13:37'),
(16, 'TRSBM-0004', 'MGA-01', 'Korek', 2, '2020-05-18 14:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tm_supplier`
--

CREATE TABLE `tbl_tm_supplier` (
  `id_transaksi` varchar(20) NOT NULL,
  `id_supplier` varchar(20) NOT NULL,
  `namasup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tm_supplier`
--

INSERT INTO `tbl_tm_supplier` (`id_transaksi`, `id_supplier`, `namasup`) VALUES
('TRSBM-0001', 'IDSUP-0002', 'Oppo'),
('TRSBM-0002', 'IDSUP-0002', 'Oppo'),
('TRSBM-0003', 'IDSUP-0001', 'PT. Maju Mundur'),
('TRSBM-0004', 'IDSUP-0002', 'Oppo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `tbl_tk_barang`
--
ALTER TABLE `tbl_tk_barang`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `tbl_tk_supplier`
--
ALTER TABLE `tbl_tk_supplier`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tbl_tm_barang`
--
ALTER TABLE `tbl_tm_barang`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `tbl_tm_supplier`
--
ALTER TABLE `tbl_tm_supplier`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1258;

--
-- AUTO_INCREMENT for table `tbl_tk_barang`
--
ALTER TABLE `tbl_tk_barang`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tm_barang`
--
ALTER TABLE `tbl_tm_barang`
  MODIFY `detail_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
