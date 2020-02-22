-- MySQL dump 10.16  Distrib 10.1.44-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: dumbways
-- ------------------------------------------------------
-- Server version	10.1.44-MariaDB-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `hobby_tb`
--

DROP TABLE IF EXISTS `hobby_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hobby_tb` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hobby_tb`
--

LOCK TABLES `hobby_tb` WRITE;
/*!40000 ALTER TABLE `hobby_tb` DISABLE KEYS */;
INSERT INTO `hobby_tb` VALUES (1,'berenang'),(2,'futsal'),(3,'basket'),(4,'tennis'),(9,'Main Game'),(16,'Gaming');
/*!40000 ALTER TABLE `hobby_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_tb`
--

DROP TABLE IF EXISTS `profile_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_tb` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `born_date` date DEFAULT NULL,
  `address` text,
  `hobby_id` int(6) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_tb`
--

LOCK TABLES `profile_tb` WRITE;
/*!40000 ALTER TABLE `profile_tb` DISABLE KEYS */;
INSERT INTO `profile_tb` VALUES (1,'ardy','1996-03-01','jl.tanah cimo depok',1,'img01.jpg'),(3,'reza','1996-02-01','jl.tanah kusir',2,'img03.jpg'),(4,'andi','1996-04-12','jl.sulawesi',1,'img04.jpg'),(5,'Ikshan Muhammad A','1996-05-12','jl.sulawesi',3,'img05.jpg'),(6,'Jubaidah','1996-05-06','JL.landak no.23',4,'img06.jpg'),(7,'Rezky Putra Akkif','1996-02-25','Jl. Tanah Cimo Depok',2,'img02.jpg');
/*!40000 ALTER TABLE `profile_tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-22 20:18:49
