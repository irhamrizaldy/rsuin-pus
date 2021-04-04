-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 02:08 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `gejala` varchar(256) NOT NULL,
  `pesan` varchar(256) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `status_janji` varchar(50) NOT NULL DEFAULT 'queue'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id_pendaftaran`, `id_user`, `id_dokter`, `id_jadwal`, `gejala`, `pesan`, `pembayaran`, `status_janji`) VALUES
(1, 9, 0, 2, 'sakit kepala', 'haiii', '', 'done'),
(3, 9, 0, 9, 'alergi', 'halo', '', 'queue'),
(4, 9, 0, 3, 'aduhh', 'aduh', '', 'queue'),
(5, 9, 0, 3, 'adah', 'adah', '', 'queue'),
(6, 9, 0, 2, 'idih', 'idih', '', 'queue'),
(7, 9, 0, 3, 'uduh', 'uduh', '', 'queue'),
(8, 9, 0, 3, 'hadah', 'hadah', '', 'queue'),
(41, 43, 1, 2, '1', '2', 'Pribadi', 'done'),
(43, 43, 2, 4, '2', '3', 'Pribadi', 'canceled'),
(45, 43, 4, 6, 'ad', 'sd', 'BPJS', 'queue'),
(46, 43, 2, 4, 'w', 'w', 'Pribadi', 'done'),
(47, 43, 4, 6, '3', '4', 'Pribadi', 'canceled');

-- --------------------------------------------------------

--
-- Table structure for table `checkup`
--

CREATE TABLE `checkup` (
  `id_checkup` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `paket` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `pesan` varchar(248) NOT NULL,
  `status_checkup` varchar(10) NOT NULL DEFAULT 'queue'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkup`
--

INSERT INTO `checkup` (`id_checkup`, `id_user`, `paket`, `tanggal`, `pesan`, `status_checkup`) VALUES
(1, 9, 'Woman Silver Packet', '2021-01-05', 'halohlao', 'queue');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(128) NOT NULL,
  `email_dokter` varchar(128) NOT NULL,
  `spesialisasi` varchar(50) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id_dokter`, `nama_dokter`, `email_dokter`, `spesialisasi`, `nomor_telepon`, `kota`) VALUES
(1, 'dr. Marthin Limba, Sp PD', 'zakky.okky@gmail.com', 'penyakit dalam', '087702840399', 'surabaya'),
(2, 'dr. saya', '05311940000038@gmail.com', 'Gigi', '087702840399', 'jakarta'),
(3, 'dr. hahaha', 'okky@gmail.com', 'Anak', '0871513545212', 'bandung'),
(4, 'dr. hihihi', 'hihihi@gmail.com', 'Kanker', '08123456789', 'jakarta'),
(5, 'dr. lalala', 'lalala@gmail.com', 'Penyakit Dalam', '0871513545', 'a'),
(6, 'dr. oi', 'oi@gmail.com', 'Jantung', '087702840399', 'jakarta'),
(8, 'dr. ku', 'ku@gmail.com', 'Paru-paru', '0871513545212', 'surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `idSchedule` int(11) NOT NULL,
  `idDoctors` int(11) NOT NULL,
  `dateSchedule` date NOT NULL,
  `daySchedule` varchar(10) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `avail` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`idSchedule`, `idDoctors`, `dateSchedule`, `daySchedule`, `starttime`, `endtime`, `avail`) VALUES
(2, 1, '2020-12-25', 'Wednesday', '13:00:00', '00:00:00', 'available'),
(4, 2, '2020-12-27', 'Saturday', '12:00:00', '00:00:00', 'available'),
(5, 3, '2021-01-25', 'Monday', '08:30:00', '09:45:00', 'available'),
(6, 4, '2021-01-09', 'Thursday', '12:00:00', '09:45:00', 'available'),
(7, 5, '2021-01-01', 'Sunday', '15:00:00', '15:45:00', 'available'),
(8, 6, '2020-12-25', 'Thursday', '06:30:00', '09:00:00', 'available'),
(9, 7, '2020-12-16', 'Tuesday', '15:00:00', '00:00:00', 'available'),
(10, 8, '2021-01-15', 'Monday', '13:00:00', '15:45:00', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `spesialisasi`
--

CREATE TABLE `spesialisasi` (
  `jenis_spesialisasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spesialisasi`
--

INSERT INTO `spesialisasi` (`jenis_spesialisasi`) VALUES
('Anak'),
('Bedah Syaraf'),
('Bedah Umum'),
('Dokter Umum'),
('Gigi'),
('Gizi'),
('Jantung'),
('Kandungan'),
('Kanker'),
('Paru-paru'),
('Penyakit Dalam'),
('Psikologi'),
('THT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersUsername` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `usersPassword` varchar(128) NOT NULL,
  `usersPhoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersUsername`, `usersEmail`, `phoneNumber`, `usersPassword`, `usersPhoto`) VALUES
(9, 'zakky okky', 'zakky', 'zakky.okky@gmail.com', '087702840399', '$2y$10$xeG0p4oQ8gBPxTKv51Y0K.AuTeype0IexrbMQNPsrwLTkouI1GG32', ''),
(11, 'papapapap', 'luluk', 'luluk@gmail.com', '087702840399', '$2y$10$BqLMSzvxoPStCnHNK9iFS.ydVMUqXOYMBmaAwKVJB95gmqkbjgK1O', ''),
(43, 'napiul', 'napiul', 'napiul@coding.com', '321123321', '$2y$10$AChbSNsrrKY4ucVuuC.Y9eMv8dXKJddRD4yxe4b27qpSOamaXBkVS', '590-e8749ba7b2db57675184325da43af2ac.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `checkup`
--
ALTER TABLE `checkup`
  ADD PRIMARY KEY (`id_checkup`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`idSchedule`);

--
-- Indexes for table `spesialisasi`
--
ALTER TABLE `spesialisasi`
  ADD PRIMARY KEY (`jenis_spesialisasi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `checkup`
--
ALTER TABLE `checkup`
  MODIFY `id_checkup` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `idSchedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
