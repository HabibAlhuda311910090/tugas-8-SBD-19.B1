-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 06:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasa_loundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis barang`
--

CREATE TABLE `jenis barang` (
  `id_jenis` int(11) NOT NULL,
  `nama_barang` text NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis barang`
--

INSERT INTO `jenis barang` (`id_jenis`, `nama_barang`, `tarif`) VALUES
(12345, 'baju kemeja dan celana', 20000),
(13579, 'koko dan kemeja', 15000),
(24680, 'sepatu kaos topi dan celana', 18000),
(67890, 'celana', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` text NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `no_telp`) VALUES
(11111, 'Micheal', '081212896758'),
(11112, 'bayu', '085717783078'),
(11113, 'rizky', '082113991089');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` text NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_telp`, `alamat`) VALUES
(1, 'dede kurniawan', '089776559865', 'Jakarta Timur '),
(2, 'kiki', '089788990935', 'Bekasi Timur '),
(3, 'gilang', '086755432456', 'Cikarang Timur '),
(4, 'jai', '089955334657', 'Bekasi Timur ');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `berat` varchar(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tarif` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `tanggal`, `id_karyawan`, `id_pelanggan`, `berat`, `id_jenis`, `tarif`, `total`, `note`) VALUES
(11, '2020-07-13', 11111, 1, '1 kg', 12345, 20000, 20000, 'Terima kasih sudah menyuci di tempat kami.\r\nDi tunggu kehadirannya kembali'),
(12, '2020-07-14', 11112, 2, '700 gram', 24680, 18000, 18000, 'Terima kasih sudah menyuci di tempat kami.\r\nDi tunggu kehadirannya kembali'),
(13, '2020-07-01', 11113, 3, '500 gram', 13579, 15000, 15000, 'Terima kasih sudah menyuci di tempat kami.\r\nDi tunggu kehadirannya kembali'),
(14, '2020-07-09', 11111, 4, '300 gram', 67890, 6000, 6000, 'Terima kasih sudah menyuci di tempat kami.\r\nDi tunggu kehadirannya kembali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis barang`
--
ALTER TABLE `jenis barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`,`id_karyawan`,`id_pelanggan`,`id_jenis`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_jenis`) REFERENCES `jenis barang` (`id_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
