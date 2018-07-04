-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2018 at 11:27 AM
-- Server version: 5.5.56-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TechnoShop`
--
CREATE DATABASE IF NOT EXISTS `TechnoShop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `TechnoShop`;

-- --------------------------------------------------------

--
-- Table structure for table `Artikl`
--

DROP TABLE IF EXISTS `Artikl`;
CREATE TABLE IF NOT EXISTS `Artikl` (
  `artikl_id` int(11) NOT NULL,
  `artikl_naziv` varchar(255) NOT NULL,
  `artikl_opis` varchar(255) NOT NULL,
  `artikl_sifra` varchar(45) NOT NULL,
  `artikl_cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Katalog`
--

DROP TABLE IF EXISTS `Katalog`;
CREATE TABLE IF NOT EXISTS `Katalog` (
  `katalog_id` int(11) NOT NULL,
  `artikl_id` int(11) NOT NULL,
  `kategorija_id` int(11) NOT NULL,
  `podkategorija_id` int(11) NOT NULL DEFAULT '0',
  `proizvodjac_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Kategorije`
--

DROP TABLE IF EXISTS `Kategorije`;
CREATE TABLE IF NOT EXISTS `Kategorije` (
  `kategorija_id` int(11) NOT NULL,
  `kategorija_naziv` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Kategorije`
--

INSERT INTO `Kategorije` (`kategorija_id`, `kategorija_naziv`) VALUES
(16, 'Gotove Konfiguracije'),
(17, 'Hard Diskovi'),
(19, 'Mediji'),
(20, 'Memorije'),
(21, 'MreÅ¾na oprema'),
(22, 'Multimedija'),
(23, 'Navigacije'),
(24, 'Ostalo'),
(25, 'RaÄunarske komponente'),
(26, 'RaÄunarske periferije'),
(27, 'Ram Memorije'),
(28, 'Softwer'),
(29, 'Telefoni'),
(30, 'Televizori'),
(31, 'Za vaÅ¡ Auto'),
(32, 'Laptopovi'),
(33, 'Software'),
(34, 'PunjaÄi'),
(35, 'Toneri i KertridÅ¾i');

-- --------------------------------------------------------

--
-- Table structure for table `Podkategorija`
--

DROP TABLE IF EXISTS `Podkategorija`;
CREATE TABLE IF NOT EXISTS `Podkategorija` (
  `podkategorija_id` int(11) NOT NULL,
  `podkategorija_naziv` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Podkategorija`
--

INSERT INTO `Podkategorija` (`podkategorija_id`, `podkategorija_naziv`) VALUES
(6, 'Eksterni hard diskovi'),
(7, 'HDD Rack'),
(8, 'SSD'),
(9, 'Acer'),
(10, 'Asus'),
(11, 'Lenovo'),
(12, 'HP'),
(13, 'Tableti'),
(14, 'CD-R, CD-RW'),
(15, 'DVD-R, DVD+R, DVD-RW'),
(16, 'Kasete'),
(17, 'Kutije/Kesice CD/DVD'),
(18, 'Torbice'),
(19, 'ÄŒitaÄi kartica'),
(20, 'Kartice'),
(21, 'USB Memorije'),
(23, 'Memoriske Kartice'),
(24, 'Access Points'),
(25, 'Antene'),
(26, 'LAN Swicevi'),
(27, 'MreÅ¾ni adapteri'),
(28, 'MreÅ¾ni kablovi'),
(29, 'Ruteri'),
(30, 'UtiÄnice i Konektori'),
(31, 'Repiteri'),
(32, 'CD Radio'),
(33, 'Digitalni foto-aparati i kamere'),
(34, 'DVD i BluRay Player'),
(35, 'Hi-Fi Sistemi'),
(36, 'Media Player'),
(37, 'MP3/MP4'),
(38, 'Resiveri'),
(39, 'SluÅ¡alice'),
(40, 'ZvuÄnici'),
(41, 'BlueBerry'),
(42, 'Garmin'),
(43, 'Prosto'),
(44, 'Adapteri'),
(45, 'Baterije za UPS'),
(46, 'Kuleri'),
(47, 'Naponski adapteri'),
(48, 'Oprema za KuÄ‡iÅ¡ta'),
(49, 'ProduÅ¾ni kablovi'),
(50, 'GrafiÄke karte'),
(51, 'KuÄ‡iÅ¡ta'),
(52, 'MatiÄne ploÄe'),
(53, 'MiÅ¡evi i Podloge'),
(54, 'Monitori'),
(55, 'Napajanja'),
(56, 'OptiÄki ureÄ‘aji'),
(57, 'Procesori'),
(58, 'Tastature'),
(59, 'Laserski Å tampaÄi'),
(60, 'Multifunkciski ureÄ‘aji'),
(61, 'UPS-evi'),
(62, 'PotroÅ¡ni materijal'),
(63, 'Skeneri'),
(64, 'DDR2'),
(65, 'DDR3'),
(66, 'SD RAM'),
(67, 'SODIMM'),
(68, 'DDR4'),
(69, 'Windows 10 Home/Pro'),
(70, 'Office 365'),
(71, 'Office 2016'),
(72, 'Microsoft'),
(73, 'Anti Virusi'),
(74, 'Fiksni telefoni'),
(75, 'Samsung'),
(76, 'Huawei'),
(77, 'Xiaomi'),
(78, 'Vivax'),
(79, 'Oukitel'),
(80, 'Alcatel'),
(81, 'Nokia'),
(82, 'CAT'),
(83, 'Dodatna Oprema'),
(84, 'LED'),
(85, 'LCD'),
(86, 'Smart TV'),
(87, 'Android Box'),
(88, 'Kablovi'),
(89, 'DrÅ¾aÄi za Laptopove'),
(91, 'Selfi Å¡tapovi'),
(92, 'DÅ¾ojstici');

-- --------------------------------------------------------

--
-- Table structure for table `Proizvodjac`
--

DROP TABLE IF EXISTS `Proizvodjac`;
CREATE TABLE IF NOT EXISTS `Proizvodjac` (
  `proizvodjac_id` int(11) NOT NULL,
  `proizvodjac_naziv` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Slike`
--

DROP TABLE IF EXISTS `Slike`;
CREATE TABLE IF NOT EXISTS `Slike` (
  `slika_id` int(11) NOT NULL,
  `artikl_sifra` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Artikl`
--
ALTER TABLE `Artikl`
  ADD PRIMARY KEY (`artikl_id`),
  ADD UNIQUE KEY `artikl_id_UNIQUE` (`artikl_id`);

--
-- Indexes for table `Katalog`
--
ALTER TABLE `Katalog`
  ADD PRIMARY KEY (`katalog_id`),
  ADD UNIQUE KEY `katalog_id_UNIQUE` (`katalog_id`),
  ADD UNIQUE KEY `artikle_id_UNIQUE` (`artikl_id`),
  ADD UNIQUE KEY `kategorije_id_UNIQUE` (`kategorija_id`),
  ADD KEY `podkategorija_fk_idx` (`podkategorija_id`),
  ADD KEY `proizvodjac_fk_idx` (`proizvodjac_id`);

--
-- Indexes for table `Kategorije`
--
ALTER TABLE `Kategorije`
  ADD PRIMARY KEY (`kategorija_id`),
  ADD UNIQUE KEY `kategorija_id_UNIQUE` (`kategorija_id`);

--
-- Indexes for table `Podkategorija`
--
ALTER TABLE `Podkategorija`
  ADD PRIMARY KEY (`podkategorija_id`),
  ADD UNIQUE KEY `podkategorija_id_UNIQUE` (`podkategorija_id`);

--
-- Indexes for table `Proizvodjac`
--
ALTER TABLE `Proizvodjac`
  ADD PRIMARY KEY (`proizvodjac_id`),
  ADD UNIQUE KEY `proizvodjac_id_UNIQUE` (`proizvodjac_id`);

--
-- Indexes for table `Slike`
--
ALTER TABLE `Slike`
  ADD PRIMARY KEY (`slika_id`,`artikl_sifra`),
  ADD UNIQUE KEY `slika_id_UNIQUE` (`slika_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Artikl`
--
ALTER TABLE `Artikl`
  MODIFY `artikl_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Katalog`
--
ALTER TABLE `Katalog`
  MODIFY `katalog_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Kategorije`
--
ALTER TABLE `Kategorije`
  MODIFY `kategorija_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `Podkategorija`
--
ALTER TABLE `Podkategorija`
  MODIFY `podkategorija_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `Proizvodjac`
--
ALTER TABLE `Proizvodjac`
  MODIFY `proizvodjac_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Slike`
--
ALTER TABLE `Slike`
  MODIFY `slika_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
