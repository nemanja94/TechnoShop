CREATE DATABASE  IF NOT EXISTS `TechnoShop` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `TechnoShop`;
-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: TechnoShop
-- ------------------------------------------------------
-- Server version	5.7.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Artikl`
--

DROP TABLE IF EXISTS `Artikl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Artikl` (
  `artikl_id` int(11) NOT NULL AUTO_INCREMENT,
  `artikl_naziv` varchar(255) NOT NULL,
  `artikl_opis` varchar(255) NOT NULL,
  `artikl_sifra` varchar(45) NOT NULL,
  `artikl_cena` double NOT NULL,
  PRIMARY KEY (`artikl_id`),
  UNIQUE KEY `artikl_id_UNIQUE` (`artikl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Artikl`
--

LOCK TABLES `Artikl` WRITE;
/*!40000 ALTER TABLE `Artikl` DISABLE KEYS */;
INSERT INTO `Artikl` VALUES (17,'MiÅ¡','efwe qev er v','miÅ¡666',123),(18,'Tastatura','odkcn wjovn wr jvwne o','tast321',321),(19,'ZvuÄnik','kclqmw oign org','zv456',332093),(20,'Laptop','krgn qerog ner oern \r\n','lap1',1234567),(21,'Kabl','audio kabl','kabl311',30);
/*!40000 ALTER TABLE `Artikl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Katalog`
--

DROP TABLE IF EXISTS `Katalog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Katalog` (
  `katalog_id` int(11) NOT NULL AUTO_INCREMENT,
  `artikl_id` int(11) NOT NULL,
  `kategorija_id` int(11) NOT NULL,
  `podkategorija_id` int(11) NOT NULL DEFAULT '0',
  `podpodkategorija_id` int(11) NOT NULL DEFAULT '0',
  `proizvodjac_id` int(11) NOT NULL,
  PRIMARY KEY (`katalog_id`),
  UNIQUE KEY `katalog_id_UNIQUE` (`katalog_id`),
  UNIQUE KEY `artikle_id_UNIQUE` (`artikl_id`),
  UNIQUE KEY `kategorije_id_UNIQUE` (`kategorija_id`),
  KEY `podkategorija_fk_idx` (`podkategorija_id`),
  KEY `podpodkategorija_fk_idx` (`podpodkategorija_id`),
  KEY `proizvodjac_fk_idx` (`proizvodjac_id`),
  CONSTRAINT `artikl_id` FOREIGN KEY (`artikl_id`) REFERENCES `Artikl` (`artikl_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `kategorija_fk` FOREIGN KEY (`kategorija_id`) REFERENCES `Kategorije` (`kategorija_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `podkategorija_fk` FOREIGN KEY (`podkategorija_id`) REFERENCES `Podkategorija` (`podkategorija_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `podpodkategorija_fk` FOREIGN KEY (`podpodkategorija_id`) REFERENCES `Podpodkategorija` (`podpodkategorija_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `proizvodjac_fk` FOREIGN KEY (`proizvodjac_id`) REFERENCES `Proizvodjac` (`proizvodjac_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Katalog`
--

LOCK TABLES `Katalog` WRITE;
/*!40000 ALTER TABLE `Katalog` DISABLE KEYS */;
/*!40000 ALTER TABLE `Katalog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Kategorije`
--

DROP TABLE IF EXISTS `Kategorije`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Kategorije` (
  `kategorija_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategorija_naziv` varchar(128) NOT NULL,
  PRIMARY KEY (`kategorija_id`),
  UNIQUE KEY `kategorija_id_UNIQUE` (`kategorija_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Kategorije`
--

LOCK TABLES `Kategorije` WRITE;
/*!40000 ALTER TABLE `Kategorije` DISABLE KEYS */;
INSERT INTO `Kategorije` VALUES (13,'MiÅ¡'),(14,'Tastatura'),(15,'Kablovi');
/*!40000 ALTER TABLE `Kategorije` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Podkategorija`
--

DROP TABLE IF EXISTS `Podkategorija`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Podkategorija` (
  `podkategorija_id` int(11) NOT NULL AUTO_INCREMENT,
  `podkategorija_naziv` varchar(45) NOT NULL COMMENT 'Tabela koja sadrzi nazive svih podkategorija',
  PRIMARY KEY (`podkategorija_id`),
  UNIQUE KEY `podkategorija_id_UNIQUE` (`podkategorija_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Podkategorija`
--

LOCK TABLES `Podkategorija` WRITE;
/*!40000 ALTER TABLE `Podkategorija` DISABLE KEYS */;
INSERT INTO `Podkategorija` VALUES (3,'BeÅ¾iÄni miÅ¡'),(4,'Audio kablovi'),(5,'MreÅ¾ni kablovi');
/*!40000 ALTER TABLE `Podkategorija` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Podpodkategorija`
--

DROP TABLE IF EXISTS `Podpodkategorija`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Podpodkategorija` (
  `podpodkategorija_id` int(11) NOT NULL AUTO_INCREMENT,
  `podpodkategorija_naziv` varchar(128) NOT NULL COMMENT 'Tablea koja sadrzi nazive podkategorija od podkategoriaj',
  PRIMARY KEY (`podpodkategorija_id`),
  UNIQUE KEY `pod-podkategorija_id_UNIQUE` (`podpodkategorija_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Podpodkategorija`
--

LOCK TABLES `Podpodkategorija` WRITE;
/*!40000 ALTER TABLE `Podpodkategorija` DISABLE KEYS */;
INSERT INTO `Podpodkategorija` VALUES (2,'OptiÄki miÅ¡'),(3,'Laserski miÅ¡');
/*!40000 ALTER TABLE `Podpodkategorija` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Proizvodjac`
--

DROP TABLE IF EXISTS `Proizvodjac`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Proizvodjac` (
  `proizvodjac_id` int(11) NOT NULL AUTO_INCREMENT,
  `proizvodjac_naziv` varchar(128) NOT NULL,
  PRIMARY KEY (`proizvodjac_id`),
  UNIQUE KEY `proizvodjac_id_UNIQUE` (`proizvodjac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Proizvodjac`
--

LOCK TABLES `Proizvodjac` WRITE;
/*!40000 ALTER TABLE `Proizvodjac` DISABLE KEYS */;
INSERT INTO `Proizvodjac` VALUES (3,'Razer'),(4,'Logitech');
/*!40000 ALTER TABLE `Proizvodjac` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Slike`
--

DROP TABLE IF EXISTS `Slike`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Slike` (
  `slika_id` int(11) NOT NULL AUTO_INCREMENT,
  `artikl_sifra` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL,
  PRIMARY KEY (`slika_id`,`artikl_sifra`),
  UNIQUE KEY `slika_id_UNIQUE` (`slika_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Slike`
--

LOCK TABLES `Slike` WRITE;
/*!40000 ALTER TABLE `Slike` DISABLE KEYS */;
INSERT INTO `Slike` VALUES (38,'miÅ¡666','miÅ¡666-5a916be22ebe99.49981719.png'),(39,'miÅ¡666','miÅ¡666-5a916be22ebe99.49981719.png'),(40,'tast321','tast321-5a929e785e5156.63785407.png'),(41,'tast321','tast321-5a929e7cc0d567.64150682.png'),(42,'zv456','zv456-5a92ac6fb59081.61532865.png'),(43,'zv456','zv456-5a92ac74032b98.13204632.png'),(44,'lap1','lap1-5a92ac812dcbd1.04658392.png'),(45,'lap1','lap1-5a92ac812dcbd1.04658392.png'),(46,'kabl311','kabl311-5a92c12d842a41.83387633.png'),(47,'kabl311','kabl311-5a92c133edbfa4.13018850.png');
/*!40000 ALTER TABLE `Slike` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'TechnoShop'
--

--
-- Dumping routines for database 'TechnoShop'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-25 15:01:06
