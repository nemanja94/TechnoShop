-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 04, 2018 at 03:24 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Artikl`
--

INSERT INTO `Artikl` (`artikl_id`, `artikl_naziv`, `artikl_opis`, `artikl_sifra`, `artikl_cena`) VALUES
(2, 'Nokia 1', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '1', 100),
(3, 'Nokia 2', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book\r\n', '2', 200),
(4, 'Nokia 3', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '3', 300),
(5, 'Nokia 4', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '4', 400),
(6, 'Nokia 5', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '5', 500),
(7, 'Nokia 6', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '6', 600),
(8, 'Nokia 7', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '7', 700),
(9, 'Nokia 8', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '9', 800),
(10, 'Samsung S1', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 's1', 100),
(11, 'Samsung S2', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 's2', 200),
(12, 'Samsung s3', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 's3', 300),
(13, 'Huawei P10', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'p1', 100),
(14, 'Huawei P20', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'p2', 200),
(15, 'Huawei P30', 'Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'p3', 300);

-- --------------------------------------------------------

--
-- Table structure for table `Katalog`
--

DROP TABLE IF EXISTS `Katalog`;
CREATE TABLE IF NOT EXISTS `Katalog` (
  `katalog_id` int(11) NOT NULL,
  `artikl_id` int(11) NOT NULL,
  `kategorija_id` int(11) NOT NULL,
  `podkategorija_id` int(11) NOT NULL,
  `proizvodjac_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Katalog`
--

INSERT INTO `Katalog` (`katalog_id`, `artikl_id`, `kategorija_id`, `podkategorija_id`, `proizvodjac_id`) VALUES
(1, 13, 16, 24, 3),
(2, 3, 22, 19, 1),
(3, 2, 29, 81, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Proizvodjac`
--

INSERT INTO `Proizvodjac` (`proizvodjac_id`, `proizvodjac_naziv`) VALUES
(1, 'Nokia'),
(2, 'Samsung'),
(3, 'Huawei');

-- --------------------------------------------------------

--
-- Table structure for table `Slike`
--

DROP TABLE IF EXISTS `Slike`;
CREATE TABLE IF NOT EXISTS `Slike` (
  `slika_id` int(11) NOT NULL,
  `artikl_sifra` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Slike`
--

INSERT INTO `Slike` (`slika_id`, `artikl_sifra`, `slika`) VALUES
(1, '1', '1-5b3cb713c69c10.24152581.jpg'),
(2, '2', '2-5b3cb71872bcb2.52923787.jpg'),
(3, '3', '3-5b3cb71f900d28.69218101.jpg'),
(4, '4', '4-5b3cb72acc11c8.69487001.jpg'),
(5, '5', '5-5b3cb7329096f6.10718581.jpg'),
(6, '6', '6-5b3cb738c441f3.98931430.jpg'),
(7, '7', '7-5b3cb742db97c6.27607864.jpg'),
(10, 's1', 's1-5b3cb7886309b4.70514066.jpg'),
(11, 's2', 's2-5b3cb7927aa0a1.98978770.jpg'),
(12, 's3', 's3-5b3cb79a330d88.26233214.jpg'),
(13, 'p1', 'p1-5b3cb7a33aab58.11645165.jpg'),
(14, 'p2', 'p2-5b3cb7b20077a8.91499837.jpg'),
(15, 'p3', 'p3-5b3cb7bc20acd6.16455969.jpg'),
(16, '9', '9-5b3cb7dc46f047.65766988.jpg');

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
  ADD PRIMARY KEY (`katalog_id`);

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
  MODIFY `artikl_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `Katalog`
--
ALTER TABLE `Katalog`
  MODIFY `katalog_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
  MODIFY `proizvodjac_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Slike`
--
ALTER TABLE `Slike`
  MODIFY `slika_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
