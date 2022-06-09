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
  `RutaImagen` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_provincia_idx` (`Provincia`),
  KEY `fk_propietario_idx` (`Propietario`),
  CONSTRAINT `fk_propietario` FOREIGN KEY (`Propietario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_provincia` FOREIGN KEY (`Provincia`) REFERENCES `provincias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casas`
--

LOCK TABLES `casas` WRITE;
/*!40000 ALTER TABLE `casas` DISABLE KEYS */;
INSERT INTO `casas` VALUES (1,'Apartamento','Pequeño apartamento en el centro','',1,300,'Alquiler',50,1,15,'../imagenes/Alvaro1/1/casa.jpg'),(3,'Ático','Ático de una 10ª planta con terraza','Atico en el centro muy bien ubicado y amueblado',4,110000,'Venta',150,4,4,'../imagenes/Alvaro/3/atico.jpg'),(4,'Bajo','Bajo sin jardin, muy bonito','',2,900,'Alquiler',130,12,16,'../imagenes/Erik/4/bajo sin jardin.jpg'),(8,'Piso','Piso cerca de la cosata ya amueblado','Murciano existe',4,800,'Alquiler',125,7,4,'../imagenes/Alvaro/8/playa2.jpg'),(10,'Piso','Piso frente a la playa totalmente amuebladp','4 planta con ascensor',4,1100,'Alquiler',125,13,4,'../imagenes/Alvaro/10/piso.jpg'),(11,'Bajo','Bajo sin jardin','',3,300,'Alquiler',100,8,4,'../imagenes/Alvaro/11/bajo sin jardin.jpg'),(12,'Apartamento','Apartamento asequible','Apartamento amueblado a buen precio en un barrio obrero',2,400,'Alquiler',50,20,17,'../imagenes/Mario/12/apartamento.jpg'),(14,'Ático','Ático en el casco antguo','',4,500000,'Alquiler',200,6,17,'../imagenes/Mario/14/atico.jpg'),(32,'Casa','Casa modesta','Casa de tres dormitorios con mucha luz y vistas muy agradables ubicado en la sexta planta de una de las mejores fincas ubicada en la plaza mayor en el centro. Recién reformado y equipado con todo lo necesario para entrar a vivir o alquilarlo',3,250000,'Venta',100,1,4,'../imagenes/Alvaro/32/piso.jpg'),(33,'Piso','2ª Planta con 2 baños','',3,250000,'Alquiler',125,1,16,'../imagenes/Erik/33/piso.jpg'),(35,'Ático','Ático a las afueras de zaragoza','',2,1100,'Alquiler',100,15,1,'../imagenes/Nuria/35/atico.jpg'),(36,'Apartamento','Piso de lujo en el centro de Barcelona','',4,500000,'Alquiler',200,2,1,'../imagenes/Nuria/36/piso.jpg'),(53,'Casa','Casa de campo','Casa de campo con jardin delantero y traero',2,320000,'Venta',300,7,1,'../imagenes/Nuria/53/casa2.jpg');
/*!40000 ALTER TABLE `casas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favoritos`
--

DROP TABLE IF EXISTS `favoritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favoritos` (
  `id_usuario` int NOT NULL,
  `id_casa` int NOT NULL,
  KEY `fk-casa_idx` (`id_casa`),
  KEY `fk_usuario_idx` (`id_usuario`),
  CONSTRAINT `fk_casa` FOREIGN KEY (`id_casa`) REFERENCES `casas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favoritos`
--

LOCK TABLES `favoritos` WRITE;
/*!40000 ALTER TABLE `favoritos` DISABLE KEYS */;
INSERT INTO `favoritos` VALUES (1,1),(1,3),(4,14),(4,12),(4,10),(4,1),(1,8),(1,36),(1,53);
/*!40000 ALTER TABLE `favoritos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provincias`
--

DROP TABLE IF EXISTS `provincias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `provincias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nombre` text,
  `Densidad` int DEFAULT NULL,
  `Poblacion` int DEFAULT NULL,
  `Superficie` bigint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provincias`
--

LOCK TABLES `provincias` WRITE;
/*!40000 ALTER TABLE `provincias` DISABLE KEYS */;
INSERT INTO `provincias` VALUES (1,'Madrid',839,6736407,8028),(2,'Barcelona',728,5629629,7728),(3,'Valencia',239,2577506,10807),(4,'Sevilla',139,1958922,14036),(5,'Alicante',326,1897848,5817),(6,'Malaga',232,1700752,7306),(7,'Murcia',134,1516055,11314),(8,'Cadiz',169,1257785,7440),(9,'Baleares',244,1219404,4992),(10,'Las Palmas',283,1152224,4066),(11,'Vizcaya',511,1134616,2217),(12,'La Coruña',140,1119957,7950),(13,'Santa Cruz de Tenerife',323,1094146,3381),(14,'Asturias',140,1119957,7950),(15,'Zaragoza',56,972528,17274),(16,'Pontevedra',209,941995,4495),(17,'Granada',73,928357,12647),(18,'Tarragona',130,821413,6303),(19,'Cordoba',56,779009,13771),(20,'Gerona',130,773577,5910),(21,'Almeria',82,720033,8775),(22,'Gipuzcua',360,713810,1980),(23,'Toledo',45,704532,15370),(24,'Badajoz',30,667620,21766),(25,'Navarra',63,656836,10391);
/*!40000 ALTER TABLE `provincias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Username` text,
  `Password` text,
  `Email` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Nuria','$2y$10$nyRX577defKLd5T5Q5cqo.KMJPKxuML.OJ2ETMR2lx3MqjA3krhBK','nuria@gmail.com'),(2,'prueba','prueba','prueba'),(3,'nombre','contraseña','correo'),(4,'Alvaro','$2y$10$nyRX577defKLd5T5Q5cqo.KMJPKxuML.OJ2ETMR2lx3MqjA3krhBK','alvaro@gmail.com'),(15,'Alvaro1','$2y$10$Gb7kHg73AqP0qqtkMI4uheCzyx3CMOEdELp8nhD.5U6OY/Csqv.gC','alvaro1@gmail.com'),(16,'Erik','$2y$10$FLp2UvpHv4tzg0CVnXVBM.NrZ5ID7IsW0OcrxL0BY1EyHBVuBATVe','erik@gmail.com'),(17,'Mario','$2y$10$pIYdhRZrbr9C4.9BqLJfWOLvjr1mobwX1CQZR8AnqYLzLwv7IM5Nm','mario@gmail.com');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-09 15:37:28
