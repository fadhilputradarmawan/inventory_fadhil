-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2025 at 01:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory_fadhil`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `Id_Barang` varchar(20) NOT NULL,
  `Id_Jenis` varchar(20) DEFAULT NULL,
  `Nama_barang` varchar(40) DEFAULT NULL,
  `Harga_barang` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`Id_Barang`, `Id_Jenis`, `Nama_barang`, `Harga_barang`) VALUES
('B001', 'Q001', 'Bor', 'RP15000'),
('B002', 'Q001', 'Linggis', 'RP50000'),
('B003', 'Q002', 'Buku', 'RP2500'),
('B004', 'Q002', 'Pensil', 'RP1000'),
('B005', 'Q001', 'Terminal', 'RP20000');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `Id_Jenis` varchar(20) NOT NULL,
  `Nama_Jenis` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`Id_Jenis`, `Nama_Jenis`) VALUES
('Q001', 'Matrial'),
('Q002', 'Peralatan sekolah'),
('Q003', 'Perabotan'),
('Q004', 'Bahan Pokok'),
('Q005', 'Bahan Baku');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Id_Barang`),
  ADD KEY `Id_Jenis` (`Id_Jenis`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`Id_Jenis`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`Id_Jenis`) REFERENCES `jenis` (`Id_Jenis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
