-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1:3306
-- Tid vid skapande: 18 maj 2018 kl 09:35
-- Serverversion: 5.7.21
-- PHP-version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `massagetid`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `massor`
--

DROP TABLE IF EXISTS `massor`;
CREATE TABLE IF NOT EXISTS `massor` (
  `MassorId` int(11) NOT NULL AUTO_INCREMENT,
  `Namn` varchar(160) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `KlinikNamn` varchar(160) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `MassorAdressId` int(11) NOT NULL,
  `BetalningsId` int(11) NOT NULL,
  `CertifikatId` int(11) NOT NULL,
  `Email` varchar(160) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Password` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`MassorId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
