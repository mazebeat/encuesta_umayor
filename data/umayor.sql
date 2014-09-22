CREATE DATABASE  IF NOT EXISTS `umayor` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `umayor`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: umayor
-- ------------------------------------------------------
-- Server version	5.6.20-log

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
-- Table structure for table `bdd_umayor`
--

DROP TABLE IF EXISTS `bdd_umayor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bdd_umayor` (
  `Id_Alumno` varchar(45) NOT NULL,
  `Id_Negocio` varchar(45) NOT NULL,
  `Facultad` varchar(20) NOT NULL,
  `Escuela` varchar(20) NOT NULL,
  `Carrera` varchar(50) NOT NULL,
  `Jornada` varchar(20) NOT NULL,
  `Sede` varchar(45) NOT NULL,
  `Campus` varchar(45) NOT NULL,
  `RUT` int(11) NOT NULL,
  `Apellido_Paterno` varchar(45) NOT NULL,
  `Apellido_Materno` varchar(45) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Año_Ingreso_1Año_Carrera` datetime NOT NULL,
  `Año_Ingreso_Carrera` datetime NOT NULL,
  `Año_Egreso_Plan_Regular` datetime NOT NULL,
  `Fecha_Registro` datetime NOT NULL,
  `Negocio_Id_Negocio` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Alumno`,`Negocio_Id_Negocio`),
  UNIQUE KEY `Id_Alumno_UNIQUE` (`Id_Alumno`),
  KEY `fk_BDD_UMayor_Negocio1_idx` (`Negocio_Id_Negocio`),
  CONSTRAINT `fk_BDD_UMayor_Negocio1` FOREIGN KEY (`Negocio_Id_Negocio`) REFERENCES `negocio` (`Id_Negocio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bdd_umayor`
--

LOCK TABLES `bdd_umayor` WRITE;
/*!40000 ALTER TABLE `bdd_umayor` DISABLE KEYS */;
/*!40000 ALTER TABLE `bdd_umayor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `canal_conexion`
--

DROP TABLE IF EXISTS `canal_conexion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `canal_conexion` (
  `Id_Canal` varchar(45) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `Respuesta_Id_Respuestas` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Canal`,`Respuesta_Id_Respuestas`),
  UNIQUE KEY `Id_Canal_UNIQUE` (`Id_Canal`),
  KEY `fk_Canal_Conexion_Respuesta1_idx` (`Respuesta_Id_Respuestas`),
  CONSTRAINT `fk_Canal_Conexion_Respuesta1` FOREIGN KEY (`Respuesta_Id_Respuestas`) REFERENCES `respuesta` (`Id_Respuestas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `canal_conexion`
--

LOCK TABLES `canal_conexion` WRITE;
/*!40000 ALTER TABLE `canal_conexion` DISABLE KEYS */;
/*!40000 ALTER TABLE `canal_conexion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `Id_Negocio` varchar(45) NOT NULL,
  `Estado` varchar(3) NOT NULL,
  `Id_Clientes` varchar(45) NOT NULL,
  `BDD_UMayor_Id_Alumno` varchar(45) NOT NULL,
  `Excepciones_Clientes_Clientes_Id_Negocio` varchar(45) NOT NULL,
  `Excepciones_Clientes_Clientes_Id_Clientes` varchar(45) NOT NULL,
  `Excepciones_Clientes_Clientes_BDD_UMayor_Id_Alumno` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Negocio`,`Id_Clientes`,`BDD_UMayor_Id_Alumno`,`Excepciones_Clientes_Clientes_Id_Negocio`,`Excepciones_Clientes_Clientes_Id_Clientes`,`Excepciones_Clientes_Clientes_BDD_UMayor_Id_Alumno`),
  UNIQUE KEY `Id_Negocio_UNIQUE` (`Id_Negocio`),
  UNIQUE KEY `Id_Clientes_UNIQUE` (`Id_Clientes`),
  KEY `fk_Clientes_BDD_UMayor1_idx` (`BDD_UMayor_Id_Alumno`),
  KEY `fk_Clientes_Excepciones_Clientes1_idx` (`Excepciones_Clientes_Clientes_Id_Negocio`,`Excepciones_Clientes_Clientes_Id_Clientes`,`Excepciones_Clientes_Clientes_BDD_UMayor_Id_Alumno`),
  CONSTRAINT `fk_Clientes_BDD_UMayor1` FOREIGN KEY (`BDD_UMayor_Id_Alumno`) REFERENCES `bdd_umayor` (`Id_Alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Clientes_Excepciones_Clientes1` FOREIGN KEY (`Excepciones_Clientes_Clientes_Id_Negocio`, `Excepciones_Clientes_Clientes_Id_Clientes`, `Excepciones_Clientes_Clientes_BDD_UMayor_Id_Alumno`) REFERENCES `excepciones_clientes` (`Clientes_Id_Negocio`, `Clientes_Id_Clientes`, `Clientes_BDD_UMayor_Id_Alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encuesta`
--

DROP TABLE IF EXISTS `encuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encuesta` (
  `Id_Encuestas` varchar(45) NOT NULL,
  `Id_Negocio` varchar(45) NOT NULL,
  `Titulo` varchar(45) NOT NULL,
  `Estado` varchar(3) NOT NULL,
  `Fecha_Creacion` datetime NOT NULL,
  `Fecha_Modificacion` datetime NOT NULL,
  `Negocio_Id_Negocio` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Encuestas`,`Negocio_Id_Negocio`),
  UNIQUE KEY `Id_Encuestas_UNIQUE` (`Id_Encuestas`),
  KEY `fk_Encuesta_Negocio1_idx` (`Negocio_Id_Negocio`),
  CONSTRAINT `fk_Encuesta_Negocio1` FOREIGN KEY (`Negocio_Id_Negocio`) REFERENCES `negocio` (`Id_Negocio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encuesta`
--

LOCK TABLES `encuesta` WRITE;
/*!40000 ALTER TABLE `encuesta` DISABLE KEYS */;
/*!40000 ALTER TABLE `encuesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `Id_Estado` varchar(45) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Pregunta_Detalle_Id_Pregunta_Detalle` varchar(45) NOT NULL,
  `Pregunta_Id_Pregunta` varchar(45) NOT NULL,
  `Pregunta_Encuestas_Id_Encuestas` varchar(45) NOT NULL,
  `Pregunta_Pregunta_Detalle_Id_Pregunta_Detalle` varchar(45) NOT NULL,
  `Encuesta_Id_Encuestas` varchar(45) NOT NULL,
  `Respuesta_Id_Respuestas` varchar(45) NOT NULL,
  `Clientes_Id_Negocio` varchar(45) NOT NULL,
  `Clientes_Id_Clientes` varchar(45) NOT NULL,
  `Clientes_BDD_UMayor_Id_Alumno` varchar(45) NOT NULL,
  `Negocio_Id_Negocio` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Estado`,`Pregunta_Detalle_Id_Pregunta_Detalle`,`Pregunta_Id_Pregunta`,`Pregunta_Encuestas_Id_Encuestas`,`Pregunta_Pregunta_Detalle_Id_Pregunta_Detalle`,`Encuesta_Id_Encuestas`,`Respuesta_Id_Respuestas`,`Clientes_Id_Negocio`,`Clientes_Id_Clientes`,`Clientes_BDD_UMayor_Id_Alumno`,`Negocio_Id_Negocio`),
  UNIQUE KEY `Id_Estado_UNIQUE` (`Id_Estado`),
  KEY `fk_Estado_Pregunta_Detalle1_idx` (`Pregunta_Detalle_Id_Pregunta_Detalle`),
  KEY `fk_Estado_Pregunta1_idx` (`Pregunta_Id_Pregunta`,`Pregunta_Encuestas_Id_Encuestas`,`Pregunta_Pregunta_Detalle_Id_Pregunta_Detalle`),
  KEY `fk_Estado_Encuesta1_idx` (`Encuesta_Id_Encuestas`),
  KEY `fk_Estado_Respuesta1_idx` (`Respuesta_Id_Respuestas`),
  KEY `fk_Estado_Clientes1_idx` (`Clientes_Id_Negocio`,`Clientes_Id_Clientes`,`Clientes_BDD_UMayor_Id_Alumno`),
  KEY `fk_Estado_Negocio1_idx` (`Negocio_Id_Negocio`),
  CONSTRAINT `fk_Estado_Clientes1` FOREIGN KEY (`Clientes_Id_Negocio`, `Clientes_Id_Clientes`, `Clientes_BDD_UMayor_Id_Alumno`) REFERENCES `clientes` (`Id_Negocio`, `Id_Clientes`, `BDD_UMayor_Id_Alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Estado_Encuesta1` FOREIGN KEY (`Encuesta_Id_Encuestas`) REFERENCES `encuesta` (`Id_Encuestas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Estado_Negocio1` FOREIGN KEY (`Negocio_Id_Negocio`) REFERENCES `negocio` (`Id_Negocio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Estado_Pregunta1` FOREIGN KEY (`Pregunta_Id_Pregunta`, `Pregunta_Encuestas_Id_Encuestas`, `Pregunta_Pregunta_Detalle_Id_Pregunta_Detalle`) REFERENCES `pregunta` (`Id_Pregunta`, `Encuestas_Id_Encuestas`, `Pregunta_Detalle_Id_Pregunta_Detalle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Estado_Pregunta_Detalle1` FOREIGN KEY (`Pregunta_Detalle_Id_Pregunta_Detalle`) REFERENCES `pregunta_detalle` (`Id_Pregunta_Detalle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Estado_Respuesta1` FOREIGN KEY (`Respuesta_Id_Respuestas`) REFERENCES `respuesta` (`Id_Respuestas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `excepciones`
--

DROP TABLE IF EXISTS `excepciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `excepciones` (
  `Id_Excepciones` varchar(45) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `Id_Negocio` varchar(45) NOT NULL,
  `Negocio_Id_Negocio` varchar(45) NOT NULL,
  `Excepciones_Clientes_Clientes_Id_Negocio` varchar(45) NOT NULL,
  `Excepciones_Clientes_Clientes_Id_Clientes` varchar(45) NOT NULL,
  `Excepciones_Clientes_Clientes_BDD_UMayor_Id_Alumno` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Excepciones`,`Negocio_Id_Negocio`,`Excepciones_Clientes_Clientes_Id_Negocio`,`Excepciones_Clientes_Clientes_Id_Clientes`,`Excepciones_Clientes_Clientes_BDD_UMayor_Id_Alumno`),
  UNIQUE KEY `Id_Excepciones_UNIQUE` (`Id_Excepciones`),
  KEY `fk_Excepciones_Negocio1_idx` (`Negocio_Id_Negocio`),
  KEY `fk_Excepciones_Excepciones_Clientes1_idx` (`Excepciones_Clientes_Clientes_Id_Negocio`,`Excepciones_Clientes_Clientes_Id_Clientes`,`Excepciones_Clientes_Clientes_BDD_UMayor_Id_Alumno`),
  CONSTRAINT `fk_Excepciones_Excepciones_Clientes1` FOREIGN KEY (`Excepciones_Clientes_Clientes_Id_Negocio`, `Excepciones_Clientes_Clientes_Id_Clientes`, `Excepciones_Clientes_Clientes_BDD_UMayor_Id_Alumno`) REFERENCES `excepciones_clientes` (`Clientes_Id_Negocio`, `Clientes_Id_Clientes`, `Clientes_BDD_UMayor_Id_Alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Excepciones_Negocio1` FOREIGN KEY (`Negocio_Id_Negocio`) REFERENCES `negocio` (`Id_Negocio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `excepciones`
--

LOCK TABLES `excepciones` WRITE;
/*!40000 ALTER TABLE `excepciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `excepciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `excepciones_clientes`
--

DROP TABLE IF EXISTS `excepciones_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `excepciones_clientes` (
  `Id_Cliente` varchar(45) NOT NULL,
  `Id_Excepciones` varchar(45) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Clientes_Id_Negocio` varchar(45) NOT NULL,
  `Clientes_Id_Clientes` varchar(45) NOT NULL,
  `Clientes_BDD_UMayor_Id_Alumno` varchar(45) NOT NULL,
  PRIMARY KEY (`Clientes_Id_Negocio`,`Clientes_Id_Clientes`,`Clientes_BDD_UMayor_Id_Alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `excepciones_clientes`
--

LOCK TABLES `excepciones_clientes` WRITE;
/*!40000 ALTER TABLE `excepciones_clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `excepciones_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `negocio`
--

DROP TABLE IF EXISTS `negocio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `negocio` (
  `Id_Negocio` varchar(45) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Estado` varchar(3) NOT NULL,
  PRIMARY KEY (`Id_Negocio`),
  UNIQUE KEY `Id_Negocio_UNIQUE` (`Id_Negocio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `negocio`
--

LOCK TABLES `negocio` WRITE;
/*!40000 ALTER TABLE `negocio` DISABLE KEYS */;
/*!40000 ALTER TABLE `negocio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pregunta`
--

DROP TABLE IF EXISTS `pregunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pregunta` (
  `Id_Pregunta` varchar(45) NOT NULL,
  `Id_Encuesta` varchar(45) NOT NULL,
  `Estado` varchar(3) NOT NULL,
  `Descripcion_1` varchar(50) NOT NULL,
  `Descripcion_2` varchar(50) NOT NULL,
  `Descripcion_3` varchar(50) NOT NULL,
  `Encuestas_Id_Encuestas` varchar(45) NOT NULL,
  `Pregunta_Detalle_Id_Pregunta_Detalle` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Pregunta`,`Encuestas_Id_Encuestas`,`Pregunta_Detalle_Id_Pregunta_Detalle`),
  UNIQUE KEY `Id_Pregunta_UNIQUE` (`Id_Pregunta`),
  KEY `fk_Pregunta_Encuestas1_idx` (`Encuestas_Id_Encuestas`),
  KEY `fk_Pregunta_Pregunta_Detalle1_idx` (`Pregunta_Detalle_Id_Pregunta_Detalle`),
  CONSTRAINT `fk_Pregunta_Encuestas1` FOREIGN KEY (`Encuestas_Id_Encuestas`) REFERENCES `encuesta` (`Id_Encuestas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pregunta_Pregunta_Detalle1` FOREIGN KEY (`Pregunta_Detalle_Id_Pregunta_Detalle`) REFERENCES `pregunta_detalle` (`Id_Pregunta_Detalle`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pregunta`
--

LOCK TABLES `pregunta` WRITE;
/*!40000 ALTER TABLE `pregunta` DISABLE KEYS */;
/*!40000 ALTER TABLE `pregunta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pregunta_detalle`
--

DROP TABLE IF EXISTS `pregunta_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pregunta_detalle` (
  `Id_Pregunta_Detalle` varchar(45) NOT NULL,
  `Id_Encuesta` varchar(45) NOT NULL,
  `Id_Pregunta` varchar(45) NOT NULL,
  `Fecha_Creacion` datetime NOT NULL,
  `Fecha_Modificacion` datetime NOT NULL,
  `Estado` varchar(3) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Respuesta_Id_Respuestas` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Pregunta_Detalle`,`Respuesta_Id_Respuestas`),
  UNIQUE KEY `Id_Pregunta_Detalle_UNIQUE` (`Id_Pregunta_Detalle`),
  KEY `fk_Pregunta_Detalle_Respuesta1_idx` (`Respuesta_Id_Respuestas`),
  CONSTRAINT `fk_Pregunta_Detalle_Respuesta1` FOREIGN KEY (`Respuesta_Id_Respuestas`) REFERENCES `respuesta` (`Id_Respuestas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pregunta_detalle`
--

LOCK TABLES `pregunta_detalle` WRITE;
/*!40000 ALTER TABLE `pregunta_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `pregunta_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respuesta`
--

DROP TABLE IF EXISTS `respuesta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respuesta` (
  `Id_Respuestas` varchar(45) NOT NULL,
  `Id_Encuesta` varchar(45) NOT NULL,
  `Id_Pregunta` varchar(45) NOT NULL,
  `Id_Pregunta_Detalle` varchar(45) NOT NULL,
  `Estado` varchar(3) NOT NULL,
  `Id_Cliente` varchar(45) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Canal` varchar(45) NOT NULL COMMENT 'El Canal es por el medio donde se ingreso a la encuenta, Facebook, Mail, Portal U Mayor, etc...',
  `Respuesta_Detalle_Id_Respuesta_Detalle` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Respuestas`,`Respuesta_Detalle_Id_Respuesta_Detalle`),
  UNIQUE KEY `Id_Respuestas_UNIQUE` (`Id_Respuestas`),
  KEY `fk_Respuesta_Respuesta_Detalle1_idx` (`Respuesta_Detalle_Id_Respuesta_Detalle`),
  CONSTRAINT `fk_Respuesta_Respuesta_Detalle1` FOREIGN KEY (`Respuesta_Detalle_Id_Respuesta_Detalle`) REFERENCES `respuesta_detalle` (`Id_Respuesta_Detalle`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respuesta`
--

LOCK TABLES `respuesta` WRITE;
/*!40000 ALTER TABLE `respuesta` DISABLE KEYS */;
/*!40000 ALTER TABLE `respuesta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respuesta_detalle`
--

DROP TABLE IF EXISTS `respuesta_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respuesta_detalle` (
  `Id_Respuesta_Detalle` varchar(45) NOT NULL,
  `Id_Respuesta` varchar(45) NOT NULL,
  `Valor_Respuesta` varchar(900) NOT NULL,
  PRIMARY KEY (`Id_Respuesta_Detalle`),
  UNIQUE KEY `Id_Respuesta_Detalle_UNIQUE` (`Id_Respuesta_Detalle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respuesta_detalle`
--

LOCK TABLES `respuesta_detalle` WRITE;
/*!40000 ALTER TABLE `respuesta_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `respuesta_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'umayor'
--

--
-- Dumping routines for database 'umayor'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-22 18:36:32
