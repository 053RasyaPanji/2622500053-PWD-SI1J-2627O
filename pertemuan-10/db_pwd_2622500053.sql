-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2026 at 01:23 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd_2622500053`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak_2622500053`
--

CREATE TABLE `tbl_kontak_2622500053` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `semester` tinyint NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_pesan` varchar(20) NOT NULL,
  `minat` varchar(50) NOT NULL,
  `prodi` varchar(2) NOT NULL,
  `pesan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_kontak_2622500053`
--

INSERT INTO `tbl_kontak_2622500053` (`id`, `nama`, `email`, `semester`, `tanggal`, `jenis_pesan`, `minat`, `prodi`, `pesan`) VALUES
(1, 'Rasya Panji', 'rasyapanji@gmail.com', 1, '2026-11-17', 'Saran', 'Ngegame', 'SI', 'Anjay keren masbro'),
(2, 'Rasya P', 'Ras@gmail.com', 1, '2026-11-17', 'Saran', 'Ngegame', 'SI', 'Anjay keren masbro'),
(3, 'Iyan', 'yansyah@gmail.com', 3, '2026-11-10', 'Kritik', 'Ngomenin orang', 'TI', 'Apaan nih gaada keren kerennya bro.'),
(4, 'Fren', 'frendik@gmail.com', 5, '2026-11-17', 'Saran', 'Memuji', 'SI', 'Keren semester 1 bisa gini'),
(5, 'Gindang', 'gindastir@gmail.com', 3, '2026-11-17', 'Saran', 'Tidur', 'BD', 'Lumayan lah buat pemula');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kontak_2622500053`
--
ALTER TABLE `tbl_kontak_2622500053`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kontak_2622500053`
--
ALTER TABLE `tbl_kontak_2622500053`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
