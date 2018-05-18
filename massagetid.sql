-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1:3306
-- Tid vid skapande: 18 maj 2018 kl 09:41
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
-- Tabellstruktur `bestallare`
--

DROP TABLE IF EXISTS `bestallare`;
CREATE TABLE IF NOT EXISTS `bestallare` (
  `BestallareId` int(11) NOT NULL AUTO_INCREMENT,
  `Email` int(11) NOT NULL,
  `Username` varchar(160) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Password` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `BestallareAdressID` int(11) DEFAULT NULL,
  `BetalningsUppgifter` int(11) DEFAULT NULL,
  PRIMARY KEY (`BestallareId`),
  UNIQUE KEY `email` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `bestallareadress`
--

DROP TABLE IF EXISTS `bestallareadress`;
CREATE TABLE IF NOT EXISTS `bestallareadress` (
  `BestallareAdressId` int(11) NOT NULL AUTO_INCREMENT,
  `Adress` varchar(160) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Postnummer` int(10) NOT NULL,
  `Stad` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`BestallareAdressId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `betalningsuppgifter`
--

DROP TABLE IF EXISTS `betalningsuppgifter`;
CREATE TABLE IF NOT EXISTS `betalningsuppgifter` (
  `BetalningsuppgifterId` int(11) NOT NULL AUTO_INCREMENT,
  `Personnummer` int(12) DEFAULT NULL,
  `Organisationsnummer` int(20) DEFAULT NULL,
  `Andra uppgifter` text,
  PRIMARY KEY (`BetalningsuppgifterId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `bokningsbartid`
--

DROP TABLE IF EXISTS `bokningsbartid`;
CREATE TABLE IF NOT EXISTS `bokningsbartid` (
  `TidId` int(11) NOT NULL AUTO_INCREMENT,
  `MassorId` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `StartTid` time NOT NULL,
  `BehandlingsId` int(11) NOT NULL,
  `BestallarId` int(11) DEFAULT NULL,
  `BestallarAdress` int(11) DEFAULT NULL,
  PRIMARY KEY (`TidId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `certifikat`
--

DROP TABLE IF EXISTS `certifikat`;
CREATE TABLE IF NOT EXISTS `certifikat` (
  `CertifikatsId` int(11) NOT NULL AUTO_INCREMENT,
  `SvenskMassage` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`CertifikatsId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Tabellstruktur `massoradress`
--

DROP TABLE IF EXISTS `massoradress`;
CREATE TABLE IF NOT EXISTS `massoradress` (
  `MassorAdressId` int(11) NOT NULL AUTO_INCREMENT,
  `Gata` varchar(160) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Postnummer` int(5) NOT NULL,
  `Postadress` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `MassorId` int(11) NOT NULL,
  PRIMARY KEY (`MassorAdressId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `recension`
--

DROP TABLE IF EXISTS `recension`;
CREATE TABLE IF NOT EXISTS `recension` (
  `RecensionsId` int(11) NOT NULL AUTO_INCREMENT,
  `Betyg` tinyint(1) NOT NULL COMMENT 'true innebär bra',
  `Recension` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `BestallareId` int(11) NOT NULL,
  `MassorId` int(11) NOT NULL,
  `Timestamp` timestamp NOT NULL,
  PRIMARY KEY (`RecensionsId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
