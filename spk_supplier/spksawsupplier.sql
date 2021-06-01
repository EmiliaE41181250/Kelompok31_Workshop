-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 07:16 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spksawsupplier`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_perhitungan`
--

CREATE TABLE `hasil_perhitungan` (
  `id_hasil_perhitungan` int(3) NOT NULL,
  `id_supplier` int(3) NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(3) NOT NULL,
  `namaKriteria` varchar(30) NOT NULL,
  `sifat` enum('Benefit','Cost') NOT NULL,
  `bobotkriteria` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `namaKriteria`, `sifat`, `bobotkriteria`) VALUES
(1, 'Harga', 'Benefit', 3),
(2, 'Pelayanan', 'Benefit', 3),
(3, 'Lokasi', 'Benefit', 2),
(4, 'Pembayaran', 'Benefit', 1),
(5, 'Kelengkapan Produk', 'Benefit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kriteria`
--

CREATE TABLE `nilai_kriteria` (
  `id_nilaikriteria` int(3) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `nilai` float NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_kriteria`
--

INSERT INTO `nilai_kriteria` (`id_nilaikriteria`, `id_kriteria`, `nilai`, `keterangan`) VALUES
(5, 3, 0.2, '9km- 10km'),
(6, 3, 0.4, '7km - 8km'),
(7, 3, 0.6, '5km- 6km'),
(8, 3, 0.8, '3km - 4km'),
(10, 2, 0.2, 'sangat tidak baik'),
(11, 2, 0.4, 'Tidak Baik'),
(12, 2, 0.6, 'Cukup Baik'),
(13, 2, 0.8, 'Baik'),
(14, 4, 0.4, 'Cash'),
(15, 4, 0.6, 'DP'),
(16, 4, 0.8, 'Barang yang laku baru dibayar'),
(17, 5, 0.2, 'Sangat tidak lengkap'),
(18, 5, 0.4, 'Tidak Lengkap'),
(22, 1, 0.2, 'Sangat Mahal'),
(23, 1, 0.4, 'Mahal'),
(24, 1, 0.6, 'Rata-Rata'),
(25, 1, 0.8, 'Murah'),
(29, 1, 1, 'Sangat Murah'),
(30, 3, 1, '1km - 2km'),
(31, 4, 1, 'Hutang'),
(32, 5, 0.6, 'Kurang Lengkap'),
(33, 5, 0.8, 'Lengkap'),
(34, 5, 1, 'Sangat Lengkap'),
(35, 2, 1, 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_supplier`
--

CREATE TABLE `nilai_supplier` (
  `id_nilaisupplier` int(3) NOT NULL,
  `id_supplier` int(3) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `id_nilaikriteria` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(3) NOT NULL,
  `namaSupplier` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `namaSupplier`, `alamat`, `nohp`) VALUES
(6, 'Toko Pertanian Dharma Tani', 'Jl. Munginsidi, Sukorejo Kidul, Sukorejo, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115', '08123251731'),
(7, 'CV Istana Tani', 'Brenggolo, Kec. Kalitidu, Kabupaten Bojonegoro, Jawa Timur 62152', ''),
(8, 'Toko Pertanian Mohan Putra', 'l. Raya Bojonegoro-Cepu, RT.01/RW.01, Panjunan, Kec. Kalitidu, Kabupaten Bojonegoro, Jawa Timur 6215', '085257210061'),
(9, 'UD. Nedyo Utomo', 'Jl. Raya Bojonegoro - cepu, Ds. Mojosari, Kec. Kalitidu, Kab. Bojonegoro, Jawa timur  62152', '081335220394'),
(10, 'Toko Pertanian Remen Tani', 'Jl. Raya Cepu, Ngringinrejo, Kec. Kalitidu, Kabupaten Bojonegoro, Jawa Timur 62152', '082335599653');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_admin` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_perhitungan`
--
ALTER TABLE `hasil_perhitungan`
  ADD PRIMARY KEY (`id_hasil_perhitungan`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  ADD PRIMARY KEY (`id_nilaikriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `nilai_supplier`
--
ALTER TABLE `nilai_supplier`
  ADD PRIMARY KEY (`id_nilaisupplier`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_nilaikriteria` (`id_nilaikriteria`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_perhitungan`
--
ALTER TABLE `hasil_perhitungan`
  MODIFY `id_hasil_perhitungan` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  MODIFY `id_nilaikriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `nilai_supplier`
--
ALTER TABLE `nilai_supplier`
  MODIFY `id_nilaisupplier` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_admin` int(3) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  ADD CONSTRAINT `nilai_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_supplier`
--
ALTER TABLE `nilai_supplier`
  ADD CONSTRAINT `nilai_supplier_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_supplier_ibfk_3` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_supplier_ibfk_4` FOREIGN KEY (`id_nilaikriteria`) REFERENCES `nilai_kriteria` (`id_nilaikriteria`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
