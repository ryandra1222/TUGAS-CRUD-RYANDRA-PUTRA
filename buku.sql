-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 11:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `ID_Buku` varchar(10) NOT NULL,
  `Kategori` varchar(15) NOT NULL,
  `Nama_Buku` varchar(50) NOT NULL,
  `Harga` varchar(10) NOT NULL,
  `Stok` varchar(10) NOT NULL,
  `Penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`ID_Buku`, `Kategori`, `Nama_Buku`, `Harga`, `Stok`, `Penerbit`) VALUES
('K1001', 'Keilmuan', 'Analisis & Perancangan Sistem  Informasi', '50.000', '60', 'Penerbit Informatika'),
('K1002', 'Keilmuan', 'Artifical Intelligence', '45.000', '60', 'Penerbit Informatika'),
('K2003', 'Keilmuan', 'Autocad 3 Dimensi', '40.000', '25', 'Penerbit Informatika'),
('N1001', 'Novel', 'Cahaya Di Penjuru Hati', '68.000', '10', 'Andi Offset'),
('N1002', 'Novel', 'Aku Ingin Cerita', '48.000', '12', 'Danendra'),
('B1001', 'Bisnis', 'Bisnis Online', '75.000', '9', 'Penerbit Informatika'),
('B1002', 'Bisnis', 'Etika Bisnis dan Tanggung Jawab Sosial', '67.500', '20', 'Penerbit Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembuat`
--

CREATE TABLE `tb_pembuat` (
  `ID_Penerbit` varchar(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Kota` varchar(10) NOT NULL,
  `Telepon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pembuat`
--

INSERT INTO `tb_pembuat` (`ID_Penerbit`, `Nama`, `Alamat`, `Kota`, `Telepon`) VALUES
('SP01', 'Penerbit Informatika', 'Jl. Buah Batu No. 121', 'Bandung', '0813-2220-1946'),
('SP02', 'Andi Offset', 'Jl. Suryalaya IX No.3', 'Bandung', '0878-3903-0688'),
('SP03', 'Danendra', 'Jl Moch. Toha 44', 'Bandung', '022-5201215');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
