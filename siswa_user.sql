-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 02:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_bulanan`
--

CREATE TABLE `pembayaran_bulanan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `januari` tinyint(1) DEFAULT 0,
  `febuari` tinyint(1) DEFAULT 0,
  `maret` tinyint(1) DEFAULT 0,
  `april` tinyint(1) DEFAULT 0,
  `mei` tinyint(1) DEFAULT 0,
  `juni` tinyint(1) DEFAULT 0,
  `juli` tinyint(1) DEFAULT 0,
  `agustus` tinyint(1) DEFAULT 0,
  `septembar` tinyint(1) DEFAULT 0,
  `oktober` tinyint(1) DEFAULT 0,
  `november` tinyint(1) DEFAULT 0,
  `desembar` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pembayaran_bulanan`
--

INSERT INTO `pembayaran_bulanan` (`id`, `user_id`, `januari`, `febuari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `septembar`, `oktober`, `november`, `desembar`) VALUES
(47, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `nis` varchar(30) DEFAULT NULL,
  `password_siswa` varchar(255) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `password_siswa`, `kelas`) VALUES
(16, 'test', '', '$2y$10$C5.2B/xfPRMUEQ28TTY42elbtrM9GZK/vYwvzOFjHSGyI3EefnZAe', ''),
(17, 'joko', '232323', '$2y$10$gtO48sBZUPe1sjdZlgBTge992Dt.XrEOfKcFw78FsfdTJ.Whrh4s.', 'x-4'),
(27, 'alifa', '1212', '$2y$10$SeF7EFI6OAcYUrYl7/eMo.LIb5oLAyIwTPWeI547tRrtoYpfqeNYG', 'X-5'),
(28, 'budi', '2302020', 'aku ganteng', NULL),
(29, 'tono', '2302020', 'aku mantap', NULL),
(30, 'ujang', '2302020', 'aku keren', NULL),
(31, 'kipli', '2302020', 'boom', NULL),
(32, 'anto', '2302020', 'aku capcay', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembayaran_bulanan`
--
ALTER TABLE `pembayaran_bulanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_siswa_pembayaranBulanan` (`user_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran_bulanan`
--
ALTER TABLE `pembayaran_bulanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran_bulanan`
--
ALTER TABLE `pembayaran_bulanan`
  ADD CONSTRAINT `fk_siswa_pembayaranBulanan` FOREIGN KEY (`user_id`) REFERENCES `siswa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
