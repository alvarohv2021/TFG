-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: tfg
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `casas`
--

DROP TABLE IF EXISTS `casas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `casas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Tipo` text,
  `DescripcionBreve` text,
  `Descripcion` text,
  `Habitaciones` int DEFAULT NULL,
  `Precio` int DEFAULT NULL,
  `Oferta` text,
  `Metros` int DEFAULT NULL,
  `Provincia` int NOT NULL,
  `Propietario` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_provincia_idx` (`Provincia`),
  KEY `fk_propietario_idx` (`Propietario`),
  CONSTRAINT `fk_propietario` FOREIGN KEY (`Propietario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_provincia` FOREIGN KEY (`Provincia`) REFERENCES `provincias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casas`
--

LOCK TABLES `casas` WRITE;
/*!40000 ALTER TABLE `casas` DISABLE KEYS */;
INSERT INTO `casas` VALUES (1,'Apartamento','Pequeño apartamento en el centro',NULL,1,300,'Alquiler',50,1,15),(3,'Ático','Atico de ua 10ª planta con terraza','Atico en el centro muy bien ubicado',4,1100,'Alquiler',150,4,4),(4,'Bajo','Bajo sin jardin, muy bonito',NULL,2,900,'Alquiler',130,12,16),(8,'Piso','Piso cerca de la cosata ya amueblado','',4,800,'Alquiler',125,7,4),(10,'Piso','Piso frente a la playa totalmente amuebladp','4 planta con ascensor',4,100000,'Venta',125,13,4),(11,'Bajo','Bajo sin jardin','',3,300,'Alquiler',100,8,4),(12,'Apartamento','Apartamento amueblado a buen precio en un barrio obrero','Apartamento asequible',2,400,'Alquiler',50,20,17);
/*!40000 ALTER TABLE `casas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-03 23:18:18
