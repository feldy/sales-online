-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2016 at 05:23 AM
-- Server version: 5.5.47-0ubuntu0.12.04.1
-- PHP Version: 5.6.18-1+deb.sury.org~precise+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gku`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` varchar(36) NOT NULL,
  `id_referensi_user` varchar(36) NOT NULL,
  `kode_customer` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `photo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `id_referensi_user`, `kode_customer`, `nama`, `alamat`, `tlp`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `photo`) VALUES
('20d1c5d8-3ddb-11e5-a727-38b1db16526a', 'acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'CUST007', 'Endra Krisna Putra', 'Bekasi Jauh', '069876546577', 'L', 'Bandung', '1991-05-13', ''),
('48c49169-3ddb-11e5-a727-38b1db16526a', 'acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'CUST008', 'Feldi Yusuf', 'Juanda Depok', '0878765465467', 'L', 'Jakarta', '1992-02-02', ''),
('76aa58b1-3dda-11e5-a727-38b1db16526a', 'acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'CUST004', 'Gugun Yuniarahman', 'Bogor Dermaga 2', '0986745', 'L', 'Tasikmalaya', '1984-03-12', ''),
('7eea5379-3ddb-11e5-a727-38b1db16526a', 'acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'CUST009', 'Hendra Prastiawan', 'Bumi Serpong Damai 12', '097539878', 'L', 'Jakarta', '1970-09-15', ''),
('9e9faa89-37ef-11e5-a924-1c4bd610cb0e', 'acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'CUST0002', 'ANDIKA', 'JAKARTA', '0987890976', 'L', 'Jakarta', '2015-08-02', ''),
('9e9faa89-39ef-11e5-a924-1c4bd610cb0e', 'acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'CUST0001', 'FELDI YUSUF', 'DEPOK', '0987890976', 'L', 'Jakarta', '2015-08-02', ''),
('9e9faa89-39vf-11e5-a924-1c4bd610cb0e', 'acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'CUST0003', 'NAMA SATU', 'BANDUNG', '0987890976', 'L', 'Jakarta', '2015-08-02', ''),
('a8076fa4-3ddb-11e5-a727-38b1db16526a', 'acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'CUST010', 'Niko Hunarko', 'Kemayoran 4', '0978645687', 'L', 'Solo', '1989-08-21', ''),
('ba82c434-3dda-11e5-a727-38b1db16526a', 'acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'CUST005', 'Novi Mustikasari', 'Klender Timur 3', '09764545', 'P', 'Yogyakarta', '1990-08-19', ''),
('c8e0da2a-3dd8-11e5-9217-38b1db16526a', 'acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'CUST002', 'Andreas Edy', 'Citayem Indah 40', '757690', 'L', 'Wonosari', '1981-12-25', ''),
('f1c2b36a-3dda-11e5-a727-38b1db16526a', 'acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'CUST006', 'Urmilasari', 'Mampang Prapatan Raya 24', '0987656547880', 'P', 'Bogor', '1990-01-05', ''),
('f429edb8-3dd8-11e5-9217-38b1db16526a', 'acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'CUST003', 'Hartono Zung', 'Pademangan 3', '8768798', 'L', 'Kalimantan', '1972-08-11', ''),
('f4b64b97-3dd7-11e5-9217-38b1db16526a', 'acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'CUST001', 'Nanang Suryana', 'Grand Depok City', '76576679809', 'L', 'Garut', '1977-06-14', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` varchar(36) NOT NULL,
  `no_invoice` varchar(20) NOT NULL,
  `id_sj` varchar(36) NOT NULL,
  `tagihan` double NOT NULL,
  `status_penagihan` varchar(20) NOT NULL,
  `no_urut_invoice` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `po_detail`
--

CREATE TABLE `po_detail` (
  `id` varchar(36) NOT NULL,
  `id_po_header` varchar(36) NOT NULL,
  `id_barang` varchar(36) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `po_header`
--

CREATE TABLE `po_header` (
  `id` varchar(36) NOT NULL,
  `no_po` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `id_customer` varchar(36) NOT NULL,
  `alamat` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `no_urut_po` int(5) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po_header`
--

INSERT INTO `po_header` (`id`, `no_po`, `tanggal`, `id_customer`, `alamat`, `photo`, `no_urut_po`, `status`) VALUES
('773f868d-96ba-4de9-bbf5-5838a59167eb', 'P00001', '2016-07-21', '9e9faa89-39ef-11e5-a924-1c4bd610cb0e', 'DEPOK', '', 1, 'NEW');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` varchar(36) NOT NULL,
  `id_barang` varchar(36) NOT NULL,
  `qty` int(10) NOT NULL,
  `account` varchar(100) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_jalan`
--

CREATE TABLE `surat_jalan` (
  `id` varchar(36) NOT NULL,
  `no_sj` varchar(20) NOT NULL,
  `id_po` varchar(36) NOT NULL,
  `tanggal` date NOT NULL,
  `driver` varchar(50) NOT NULL,
  `status_pengiriman` varchar(30) NOT NULL,
  `no_urut_sj` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` varchar(36) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` double NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `kode_barang`, `nama_barang`, `deskripsi`, `harga`, `is_active`) VALUES
('0ab3f4b4-3dd5-11e5-9217-38b1db16526a', 'TP-02', 'Tessa Softpack 260s FSC', 'Facial Tissue Kemasan Ecoplas 40pcs/ktn', 450000, 1),
('158242f9-3dd7-11e5-9217-38b1db16526a', 'PB-16', 'Tessa Bathroom 8roll', 'Tessa Bathroom 3ply 8pcs/ktn', 450000, 1),
('167313b7-3dd6-11e5-9217-38b1db16526a', 'TTP-001', 'Tessa Kitchen Towel 3s', 'Tessa Kitchen Towel 1ply 6pcs/ktn', 120000, 1),
('50210d93-3dd7-11e5-9217-38b1db16526a', 'TN-07', 'Tessa Napkin 100s', 'Tessa Napkin Semi Emboss 60pcs/ktn', 120000, 1),
('5a828501-3dd5-11e5-9217-38b1db16526a', 'TP-09', 'Tessa Travel Pack 50s', 'Tessa Travel 3ply 48pcs/ktn', 150000, 1),
('74a0399c-3dd7-11e5-9217-38b1db16526a', 'TN-10', 'Tessa Napkin Dinner 50s', 'Tessa Napkin Dinner 2ply 60pcs/ktn', 300000, 1),
('8a2abdbe-3dd5-11e5-9217-38b1db16526a', 'TP-18', 'Tessa Travel Pack Ecofriendly 100s', 'Tessa Travel 2ply Ecofriendly 60pcs/ktn', 100000, 1),
('aa7cbe89-3dd3-11e5-9217-38b1db16526a', 'TP-01', 'Tessa Softpack 250s', 'Facial Tissue 2ply 32pcs/ktn', 400000, 1),
('b73befbe-3dd5-11e5-9217-38b1db16526a', 'THSN-001', 'Tessa Towel 150s', 'Tessa Towel 2ply 20pcs/ktn', 200000, 1),
('f7ac9bbf-3dd6-11e5-9217-38b1db16526a', 'PB-03', 'Tessa Bathroom 6roll', 'Tessa Bathroom 2ply 16pcs/ktn', 380000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(36) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `photo` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `jenis_kelamin`, `tempat`, `tanggal_lahir`, `alamat`, `photo`, `jabatan`) VALUES
('acd540ad-39e6-11e5-a924-1c4bd610cb0e', 'sales', '12345', 'SALES 1', 'L', 'Jakarta', '2015-08-03', 'Jakarta', '', 'SALES'),
('fc4b93c9-3dbc-11e5-a727-38b1db16526a', 'admin', 'admin', 'ADMIN', 'L', 'Jakarta', '1982-11-27', 'Kalimalang Selatan', '', 'ADMIN'),
('fc4b93c9-3ddc-11e5-a727-38b1db16526a', 'finance', '12345', 'Ridho', 'L', 'Jakarta', '1982-11-27', 'Kalimalang Selatan', '', 'FINANCE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_fk1` (`id_referensi_user`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_fk1` (`id_sj`);

--
-- Indexes for table `po_detail`
--
ALTER TABLE `po_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `po_detail_fk1` (`id_po_header`),
  ADD KEY `po_detail_fk2` (`id_barang`);

--
-- Indexes for table `po_header`
--
ALTER TABLE `po_header`
  ADD PRIMARY KEY (`id`),
  ADD KEY `po_header_fk1` (`id_customer`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_jalan_fk1` (`id_po`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_fk1` FOREIGN KEY (`id_referensi_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_fk1` FOREIGN KEY (`id_sj`) REFERENCES `surat_jalan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `po_detail`
--
ALTER TABLE `po_detail`
  ADD CONSTRAINT `po_detail_fk1` FOREIGN KEY (`id_po_header`) REFERENCES `po_header` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `po_detail_fk2` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `po_header`
--
ALTER TABLE `po_header`
  ADD CONSTRAINT `po_header_fk1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  ADD CONSTRAINT `surat_jalan_fk1` FOREIGN KEY (`id_po`) REFERENCES `po_header` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
