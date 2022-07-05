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
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ticket` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `idUser` int NOT NULL,
  `descriptionTicket` varchar(255) DEFAULT NULL,
  `typeTicket` varchar(50) DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'open',
  `materiel` varchar(5000) DEFAULT NULL,
  `time` datetime DEFAULT CURRENT_TIMESTAMP,
  `motifRefus` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` VALUES (34,1,'1','Achat matériel','refuse','pc','2022-07-02 04:21:19','refuse psq nf7htli'),(35,1,'2','Remplacement de piece','fermer','imprimant','2022-07-02 04:21:39',NULL),(36,1,'3','Reparation de matériel','fermer','scaner','2022-07-02 04:22:10',NULL),(37,1,'pc t9il a hmouda','Remplacement de piece','onWork','laptop T580','2022-07-02 16:47:33',NULL),(38,2,'problem ram','Remplacement de piece','fermer','server RS700-E10-RS12U','2022-07-02 18:01:02',NULL),(39,2,'2','Reparation de matériel','refuse','server RS700-E10-RS12U','2022-07-02 18:02:22','pas de budget'),(40,2,'3','Reparation de matériel','open','server RS700-E10-RS12U','2022-07-02 18:04:12',NULL),(41,4,'saa','Remplacement de piece','open',NULL,'2022-07-02 18:20:40',NULL),(42,2,'gggg','Reparation de matériel','open','server RS700-E10-RS12U','2022-07-02 22:41:28',NULL);
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;
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
