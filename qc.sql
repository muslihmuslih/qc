-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 11:22 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qc`
--

-- --------------------------------------------------------

--
-- Table structure for table `inspector`
--

CREATE TABLE `inspector` (
  `id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `level` int(2) NOT NULL,
  `otoritas` varchar(10) NOT NULL,
  `bagian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspector`
--

INSERT INTO `inspector` (`id`, `nama`, `pass`, `level`, `otoritas`, `bagian`) VALUES
(1, 'desi', 'qwerty', 1, 'admin', 'Celupan'),
(2, 'epul', 'qwerty', 2, 'inspector', 'QC'),
(3, 'admin', 'qwerty', 1, 'admin', 'IT'),
(6, 'tes', '1234', 2, 'inspector', 'qc'),
(7, 'permana', 'qwerty', 2, 'inspector', 'qc'),
(8, 'yusuf', 'qwerty', 2, 'inspector', 'qc'),
(9, 'agung', 'qwerty', 2, 'inspector', 'qc'),
(10, 'acep', 'qwerty', 2, 'inspector', 'qc'),
(11, 'cepi', 'qwerty', 2, 'inspector', 'qc');

-- --------------------------------------------------------

--
-- Table structure for table `m_bulan`
--

CREATE TABLE `m_bulan` (
  `id_bulan` int(5) NOT NULL,
  `nama_bulan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_bulan`
--

INSERT INTO `m_bulan` (`id_bulan`, `nama_bulan`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `m_celupan`
--

CREATE TABLE `m_celupan` (
  `id_celupan` int(5) NOT NULL,
  `supplier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_celupan`
--

INSERT INTO `m_celupan` (`id_celupan`, `supplier`) VALUES
(1, 'ISA'),
(2, 'LONGSUN'),
(3, 'DAENONG'),
(4, 'WIS'),
(5, 'Indah Jaya'),
(6, 'GUCCITEX'),
(7, 'Subhan'),
(8, 'SALTEX');

-- --------------------------------------------------------

--
-- Table structure for table `m_hasil`
--

CREATE TABLE `m_hasil` (
  `id_hasil` int(5) NOT NULL,
  `hasil` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_hasil`
--

INSERT INTO `m_hasil` (`id_hasil`, `hasil`) VALUES
(1, 'OK'),
(2, 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `m_input`
--

CREATE TABLE `m_input` (
  `id_input` int(5) NOT NULL,
  `tanggal` text,
  `no_po` varchar(20) DEFAULT NULL,
  `no_lot` varchar(20) DEFAULT NULL,
  `nama_kain` varchar(20) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `supplier` varchar(20) DEFAULT NULL,
  `lebar` int(5) DEFAULT NULL,
  `gramasi` int(5) DEFAULT NULL,
  `hasil` varchar(5) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `tindakan` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `keterangan` varchar(20) NOT NULL,
  `ketinspector` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_input`
--

INSERT INTO `m_input` (`id_input`, `tanggal`, `no_po`, `no_lot`, `nama_kain`, `warna`, `supplier`, `lebar`, `gramasi`, `hasil`, `deskripsi`, `tindakan`, `status`, `nama`, `keterangan`, `ketinspector`) VALUES
(107, '2018-02-24', '1711isa-040163', '6911/3', 'kris', 'anggur', 'ISA', 170, 256, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', ''),
(108, '2018-02-24', '1711isa-019', '6547/16', 'kuljer', 'hitam', 'ISA', 170, 210, 'NO', 'Barre', 'Retur', 'Pending', 'epul', 'by desi, 2018-02-26', 'reture pa unjani toko idola 113 '),
(109, '2018-02-24', '1712mkl-010777', '98149/17', 'jersey', 'biru telor asin', 'DAENONG', 165, 208, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', ''),
(110, '2018-02-24', '1712mkl-010608', '98154/17', 'jersey', 'DW', 'DAENONG', 165, 205, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', 'muare tipis'),
(111, '2018-02-24', '1712mkl010598', '98154/6', 'jersey', 'DW', 'DAENONG', 165, 203, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', 'muare tipis'),
(112, '2018-02-24', '1712mkl-010771', '98149/11', 'jersey', 'biru telor asin', 'DAENONG', 165, 200, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', 'muare tipis'),
(113, '2018-02-24', '1709isa-020042', '5746/2', 'kuljer', 'abu tua', 'ISA', 180, 200, 'NO', 'Gugus', 'TBC', 'Pending', 'epul', 'by desi, 2018-02-26', 'ada gencetan vertikal full roll'),
(114, '2018-02-24', '1712mkl-010602', '98154/11', 'jersey', 'DW', 'DAENONG', 165, 200, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', 'muare tipis'),
(115, '2018-02-24', '1712mkl-010596', '98154/4', 'jersey', 'DW', 'DAENONG', 165, 205, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', ''),
(116, '2018-02-24', '1712mkl-010597', '98154/5', 'jersey', 'DW', 'DAENONG', 165, 215, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', 'muare tipis'),
(117, '2018-02-24', '1712mkl-010603', '98154/12', 'jersey', 'DW', 'DAENONG', 165, 205, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', 'muare tipis'),
(118, '2018-02-24', '1712mkl-010607', '98154/16', 'jersey', 'DW', 'DAENONG', 165, 200, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', 'muare tipis'),
(119, '2018-02-24', '1712mkl-010776', '98149/16', 'jersey', 'biru telor asin', 'DAENONG', 165, 205, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', 'muare tipis'),
(120, '2018-02-24', '1712mkl-010601', '98154/10', 'jersey', 'DW', 'DAENONG', 165, 205, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', 'muare tipis'),
(121, '2018-02-24', '1712mkl-010594', '98154/2', 'jersey', 'DW', 'DAENONG', 165, 202, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', 'muare tipis'),
(122, '2018-02-24', '1712mkl-010762', '98149/2', 'jersey', 'biru telor asin', 'DAENONG', 165, 210, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', 'muare tipis'),
(123, '2018-02-24', '1712pc-186064', 'A:23-12-17', 'sutra II ls', 'navy', 'LONGSUN', 165, 165, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-27', 'muare tipis, barre tipis'),
(124, '2018-02-24', '1712pc-186071', 'A:23-12-17', 'sutra II ls', 'navy', 'LONGSUN', 165, 170, 'OK', '', '', 'Pending', 'epul', 'by desi, 2018-02-26', 'muare tipis, barre tipis'),
(125, '2018-02-26', '1', '1', 'satu', 'satu', 'ISA', 1, 1, 'OK', '', '', 'Pending', 'cepi', '', '1'),
(126, '2018-02-26', '2', '2', 'dua', 'dua', 'ISA', 2, 2, 'OK', '', '', 'Pending', 'cepi', '', '2'),
(127, '2018-02-26', '3', '3', 'tiga', 'tiga', 'ISA', 3, 3, 'OK', '', '', 'Pending', 'cepi', 'by desi, 2018-02-27', '3');

-- --------------------------------------------------------

--
-- Table structure for table `m_masalah`
--

CREATE TABLE `m_masalah` (
  `id_masalah` int(11) NOT NULL,
  `kd_masalah` varchar(5) DEFAULT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_masalah`
--

INSERT INTO `m_masalah` (`id_masalah`, `kd_masalah`, `deskripsi`) VALUES
(1, '', 'Chafing Mark (Muda)'),
(2, NULL, 'Chafing Mark (Tua)'),
(3, NULL, 'Gugus'),
(4, NULL, 'Belang Spandex'),
(5, NULL, 'Noda Obat'),
(6, '', 'Barre');

-- --------------------------------------------------------

--
-- Table structure for table `m_status`
--

CREATE TABLE `m_status` (
  `id_status` int(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_status`
--

INSERT INTO `m_status` (`id_status`, `status`) VALUES
(1, 'YES'),
(2, 'NO'),
(3, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `m_tindakan`
--

CREATE TABLE `m_tindakan` (
  `id_tindakan` int(5) NOT NULL,
  `tindakan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_tindakan`
--

INSERT INTO `m_tindakan` (`id_tindakan`, `tindakan`) VALUES
(1, 'Retur'),
(2, 'Claim'),
(3, 'BS'),
(4, 'TBC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inspector`
--
ALTER TABLE `inspector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_bulan`
--
ALTER TABLE `m_bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `m_celupan`
--
ALTER TABLE `m_celupan`
  ADD PRIMARY KEY (`id_celupan`);

--
-- Indexes for table `m_hasil`
--
ALTER TABLE `m_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `m_input`
--
ALTER TABLE `m_input`
  ADD PRIMARY KEY (`id_input`);

--
-- Indexes for table `m_masalah`
--
ALTER TABLE `m_masalah`
  ADD PRIMARY KEY (`id_masalah`);

--
-- Indexes for table `m_status`
--
ALTER TABLE `m_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `m_tindakan`
--
ALTER TABLE `m_tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inspector`
--
ALTER TABLE `inspector`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `m_bulan`
--
ALTER TABLE `m_bulan`
  MODIFY `id_bulan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `m_celupan`
--
ALTER TABLE `m_celupan`
  MODIFY `id_celupan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `m_hasil`
--
ALTER TABLE `m_hasil`
  MODIFY `id_hasil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_input`
--
ALTER TABLE `m_input`
  MODIFY `id_input` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `m_masalah`
--
ALTER TABLE `m_masalah`
  MODIFY `id_masalah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `m_status`
--
ALTER TABLE `m_status`
  MODIFY `id_status` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `m_tindakan`
--
ALTER TABLE `m_tindakan`
  MODIFY `id_tindakan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
