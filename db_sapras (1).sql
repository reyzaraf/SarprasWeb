-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 03:23 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sapras`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(8) NOT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  `spesifikasi` varchar(35) DEFAULT NULL,
  `lokasi_barang` varchar(40) DEFAULT NULL,
  `kategori` varchar(25) DEFAULT NULL,
  `jml_barang` int(5) DEFAULT '0',
  `kondisi` varchar(20) DEFAULT NULL,
  `jenis_barang` varchar(20) DEFAULT NULL,
  `sumber_dana` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `spesifikasi`, `lokasi_barang`, `kategori`, `jml_barang`, `kondisi`, `jenis_barang`, `sumber_dana`) VALUES
('BRG01', 'Kabel Rol', 'Kabel 4 Stop Kontak', 'Sarpras', 'Elektronik', 40, 'Baik', 'Kabel', 'Murid');

--
-- Triggers `barang`
--
DELIMITER $$
CREATE TRIGGER `Insert Stok` AFTER INSERT ON `barang` FOR EACH ROW INSERT into stok(kode_barang,nama_brg) VALUES (NEW.kode_barang,NEW.nama_barang)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `keluar_barang`
--

CREATE TABLE `keluar_barang` (
  `id_brg_keluar` varchar(8) NOT NULL,
  `kode_barang` varchar(8) DEFAULT NULL,
  `nama_brg` varchar(30) DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `penerima` varchar(35) DEFAULT NULL,
  `jml_brg_keluar` int(11) DEFAULT NULL,
  `keterangan` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `keluar_barang`
--
DELIMITER $$
CREATE TRIGGER `Pengurangan Stok` AFTER INSERT ON `keluar_barang` FOR EACH ROW Update stok set jml_brg_keluar = jml_brg_keluar + NEW.jml_brg_keluar, total_brg = jml_brg_masuk - jml_brg_keluar WHERE kode_barang = NEW.kode_barang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Update Barang` BEFORE INSERT ON `keluar_barang` FOR EACH ROW UPDATE barang set jml_barang = jml_barang - NEW.jml_brg_keluar WHERE kode_barang = NEW.kode_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `masuk_barang`
--

CREATE TABLE `masuk_barang` (
  `id_msk_brg` varchar(8) NOT NULL,
  `kode_barang` varchar(8) DEFAULT NULL,
  `nama_brg` varchar(30) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `jml_masuk` int(11) DEFAULT '0',
  `kode_supplier` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masuk_barang`
--

INSERT INTO `masuk_barang` (`id_msk_brg`, `kode_barang`, `nama_brg`, `tgl_masuk`, `jml_masuk`, `kode_supplier`) VALUES
('00192', 'BRG01', 'Kabel Rol', '2018-02-02', 15, '42323'),
('21421311', NULL, 'Kabel Lan', '2018-02-07', 10, '42323'),
('2241', 'BRG01', 'Kabel Rol', '2018-02-04', 6, '42323'),
('98849', 'BRG01', 'Kabel Rol', '2018-02-02', 12, '42323');

--
-- Triggers `masuk_barang`
--
DELIMITER $$
CREATE TRIGGER `Insert Brg Baru` AFTER INSERT ON `masuk_barang` FOR EACH ROW Update stok set jml_brg_masuk = jml_brg_masuk + NEW.jml_masuk, total_brg = jml_brg_masuk - jml_brg_keluar, keterangan="Tersedia" WHERE kode_barang = NEW.kode_barang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Update Stk Barang` BEFORE INSERT ON `masuk_barang` FOR EACH ROW UPDATE barang set jml_barang = jml_barang + NEW.jml_masuk where kode_barang = NEW.kode_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_barang`
--

CREATE TABLE `pinjam_barang` (
  `no_pinjam` varchar(8) NOT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `kode_barang` varchar(8) DEFAULT NULL,
  `nama_brg` varchar(30) DEFAULT NULL,
  `jml_pinjam` int(11) DEFAULT NULL,
  `peminjam` varchar(35) DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `keperluan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam_barang`
--

INSERT INTO `pinjam_barang` (`no_pinjam`, `tgl_pinjam`, `kode_barang`, `nama_brg`, `jml_pinjam`, `peminjam`, `tgl_kembali`, `keperluan`) VALUES
('412422', '2018-02-06', 'BRG01', 'Kabel Rol', 5, 'Fiqi', '2018-02-08', 'Kelas');

--
-- Triggers `pinjam_barang`
--
DELIMITER $$
CREATE TRIGGER `Kembali Stok` BEFORE UPDATE ON `pinjam_barang` FOR EACH ROW IF NEW.tgl_kembali = CURRENT_DATE THEN 
  UPDATE stok set jml_brg_keluar = jml_brg_keluar - NEW.jml_pinjam,total_brg = jml_brg_masuk - jml_brg_keluar WHERE kode_barang = NEW.kode_barang;
    END IF
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Peminjaman` AFTER INSERT ON `pinjam_barang` FOR EACH ROW update stok set jml_brg_keluar = jml_brg_keluar + NEW.jml_pinjam, total_brg = jml_brg_masuk - jml_brg_keluar where kode_barang = NEW.kode_barang
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Pengembalian` AFTER UPDATE ON `pinjam_barang` FOR EACH ROW UPDATE stok set jml_brg_keluar = (jml_brg_keluar - OLD.jml_pinjam) + NEW.jml_pinjam, total_brg = jml_brg_masuk - jml_brg_keluar where kode_barang = NEW.kode_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `kode_barang` varchar(8) DEFAULT NULL,
  `nama_brg` varchar(30) DEFAULT NULL,
  `jml_brg_masuk` int(11) DEFAULT '0',
  `jml_brg_keluar` int(11) DEFAULT '0',
  `total_brg` int(11) DEFAULT '0',
  `keterangan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`kode_barang`, `nama_brg`, `jml_brg_masuk`, `jml_brg_keluar`, `total_brg`, `keterangan`) VALUES
('BRG01', 'Kabel Rol', 43, 3, 40, 'Barang Baru Masuk');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` varchar(5) NOT NULL,
  `nama_supplier` varchar(35) DEFAULT NULL,
  `alamat_supplier` varchar(50) DEFAULT NULL,
  `telp_supplier` varchar(25) DEFAULT '0',
  `kota_supplier` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kode_supplier`, `nama_supplier`, `alamat_supplier`, `telp_supplier`, `kota_supplier`) VALUES
('42323', 'Joko Wi', 'Istana', '08829183', 'Bogor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(8) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
('1', 'sukaimin', 'pakmin', '827ccb0eea8a706c4c34a16891f84e7b', 1),
('2', 'sukaidah', 'idah', '827ccb0eea8a706c4c34a16891f84e7b', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `keluar_barang`
--
ALTER TABLE `keluar_barang`
  ADD PRIMARY KEY (`id_brg_keluar`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `masuk_barang`
--
ALTER TABLE `masuk_barang`
  ADD PRIMARY KEY (`id_msk_brg`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `kode_supplier` (`kode_supplier`);

--
-- Indexes for table `pinjam_barang`
--
ALTER TABLE `pinjam_barang`
  ADD PRIMARY KEY (`no_pinjam`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keluar_barang`
--
ALTER TABLE `keluar_barang`
  ADD CONSTRAINT `keluar_barang_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `masuk_barang`
--
ALTER TABLE `masuk_barang`
  ADD CONSTRAINT `masuk_barang_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `masuk_barang_ibfk_2` FOREIGN KEY (`kode_supplier`) REFERENCES `supplier` (`kode_supplier`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `pinjam_barang`
--
ALTER TABLE `pinjam_barang`
  ADD CONSTRAINT `pinjam_barang_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
