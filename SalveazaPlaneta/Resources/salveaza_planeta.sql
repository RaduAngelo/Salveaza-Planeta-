-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 11:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salveaza_planeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori_noi`
--

CREATE TABLE `utilizatori_noi` (
  `UN_ID` int(11) NOT NULL,
  `NUME` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `PRENUME` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `EMAIL` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `DATA_NASTERII` date NOT NULL,
  `HOBBY` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `CONSUM_MASINA` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `DEPLASARE` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `PANOURI_SOLARE` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `RECICLARE` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `ULEI` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `COPACI` int(3) NOT NULL,
  `DESEURI` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `CURENT_ELECTRIC` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `CONSUM_GAZ` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `PARERE` text COLLATE utf8mb4_romanian_ci NOT NULL,
  `SCOR` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_romanian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilizatori_noi`
--
ALTER TABLE `utilizatori_noi`
  ADD PRIMARY KEY (`UN_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utilizatori_noi`
--
ALTER TABLE `utilizatori_noi`
  MODIFY `UN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
