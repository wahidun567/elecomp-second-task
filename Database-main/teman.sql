-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 09:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_teman`
--

-- --------------------------------------------------------

--
-- Table structure for table `teman`
--

CREATE TABLE `teman` (
  `id_teman` int(11) NOT NULL,
  `nama_teman` varchar(50) NOT NULL,
  `no_hp_teman` varchar(20) NOT NULL,
  `pekerjaan_teman` text NOT NULL,
  `kenalan_dari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teman`
--

INSERT INTO `teman` (`id_teman`, `nama_teman`, `no_hp_teman`, `pekerjaan_teman`, `kenalan_dari`) VALUES
(1, 'Wifqo Arova Syam', '085157284478', 'Pengusaha Sepatu', 0),
(2, 'Nur Wahid', '085855437148', 'Pengusaha Kuliner', 1),
(3, 'Sepril Hady Sasmonang', '088801787504', 'Marketing Matos', 1),
(4, 'Pika Novisa', '088805686021', 'Direktur Mall Matos', 1),
(5, 'Dita Natasya', '082298767062', 'Manager Matos', 3),
(6, 'Mochammad Bisma Prasetya', '09893741996', 'Pengusaha Kuliner', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teman`
--
ALTER TABLE `teman`
  ADD PRIMARY KEY (`id_teman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teman`
--
ALTER TABLE `teman`
  MODIFY `id_teman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
