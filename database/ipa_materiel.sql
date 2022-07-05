-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: localhost    Database: ipa
-- ------------------------------------------------------
-- Server version	8.0.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `materiel`
--

DROP TABLE IF EXISTS `materiel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `materiel` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `idUser` int DEFAULT NULL,
  `idFournisseur` int DEFAULT NULL,
  `libelle` varchar(500) DEFAULT NULL,
  `Marque` varchar(500) DEFAULT NULL,
  `typeMateriel` varchar(500) DEFAULT NULL,
  `categorie` varchar(500) DEFAULT NULL,
  `nSerie` varchar(300) DEFAULT NULL,
  `prixAchat` varchar(10) DEFAULT NULL,
  `dateAchat` date DEFAULT NULL,
  `dateMiseEnMarche` date DEFAULT NULL,
  `dateDebutGarantie` date DEFAULT NULL,
  `dateFinGarantie` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiel`
--

LOCK TABLES `materiel` WRITE;
/*!40000 ALTER TABLE `materiel` DISABLE KEYS */;
INSERT INTO `materiel` VALUES (1,1,1,'laptop T580','Lenovo','pc','laptop','124572154','110000','2018-11-28','2019-06-01','2018-11-28','2022-12-01'),(2,1,1,'laptop L410','ASUS','pc','laptop','145468123','150000','2017-01-25','2017-02-21','2017-01-25','2019-01-25'),(3,2,1,'server RS700-E10-RS12U','ASUS','server','Rack server','455741581','200000','2020-01-15','2022-05-12','2020-01-15','2025-01-15'),(4,1,1,'NCS 500 Series','CISCO','Network Convergence','WAN','124578201','75,294.27','2022-07-02','2022-07-02','2022-07-02','2022-07-02');
/*!40000 ALTER TABLE `materiel` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-02 23:41:55
