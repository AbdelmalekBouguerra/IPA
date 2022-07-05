-- Active: 1650949481625@@127.0.0.1@3306@ipa

UPDATE users
SET
    `nom` = "boutakhedmit",
    `idService` = 1,
    `prenom` = "assia",
    `matricule` = "1818310",
    `email` = "assia@gmail.com",
    `fonction` = "IT",
    `userName` = "assia",
    `userPassword` = "0000",
    `userRole` = "superAdmin"
WHERE `id` = 1;

-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)

--

-- Host: localhost    Database: ipa

-- ------------------------------------------------------

-- Server version	8.0.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!50503 SET NAMES utf8 */

;

/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */

;

/*!40103 SET TIME_ZONE='+00:00' */

;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */

;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */

;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */

;

/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */

;

--

-- Table structure for table `departement`

--

DROP TABLE IF EXISTS `departement`;

/*!40101 SET @saved_cs_client     = @@character_set_client */

;

/*!50503 SET character_set_client = utf8mb4 */

;

CREATE TABLE
    `departement` (
        `idDepartement` int NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
        `idDirection` int DEFAULT NULL,
        `libelleDepartement` varchar(5000) DEFAULT NULL,
        `codeDepartement` varchar(50) DEFAULT NULL,
        PRIMARY KEY (`idDepartement`)
    ) ENGINE = InnoDB AUTO_INCREMENT = 2 DEFAULT CHARSET = utf8mb3 COMMENT = ' ';

/*!40101 SET character_set_client = @saved_cs_client */

;

--

-- Dumping data for table `departement`

--

LOCK TABLES `departement` WRITE;

/*!40000 ALTER TABLE `departement` DISABLE KEYS */

;

INSERT INTO `departement` VALUES (1,1,'info','info-01');

/*!40000 ALTER TABLE `departement` ENABLE KEYS */

;

UNLOCK TABLES;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */

;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */

;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */

;

/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */

;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */

;

-- Dump completed on 2022-07-02 23:41:56