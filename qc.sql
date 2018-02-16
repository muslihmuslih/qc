-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 07:30 AM
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
(105, '2018-02-09', '546', '343', 'dgd', 'dgdf', 'WIS', 34, 34, 'OK', '', '', 'Pending', 'permana', 'by admin, 2018-02-10', 'dfgd'),
(106, '2018-02-10', '12', '27206-18', 'Reiny', 'Maroon', 'DAENONG', 27, 2, 'OK', '', '', 'Pending', 'epul', '', 'Ok');

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
(5, NULL, 'Noda Obat');

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
(3, 'BS');

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
  MODIFY `id_input` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `m_masalah`
--
ALTER TABLE `m_masalah`
  MODIFY `id_masalah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `m_status`
--
ALTER TABLE `m_status`
  MODIFY `id_status` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `m_tindakan`
--
ALTER TABLE `m_tindakan`
  MODIFY `id_tindakan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
