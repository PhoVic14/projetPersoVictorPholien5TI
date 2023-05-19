CREATE DATABASE  IF NOT EXISTS `victor` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `victor`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: victor
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorie` (
  `categorieId` int NOT NULL AUTO_INCREMENT,
  `categorieType` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`categorieId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` VALUES (1,'Meuble'),(2,'Nourriture'),(3,'Vetement'),(4,'Informatique'),(5,'Livre');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enchere`
--

DROP TABLE IF EXISTS `enchere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `enchere` (
  `enchereId` int NOT NULL AUTO_INCREMENT,
  `enchereTemps` datetime DEFAULT NULL,
  `encherePrix` varchar(255) DEFAULT NULL,
  `produitNote` int DEFAULT NULL,
  `utilisateurId` int DEFAULT NULL,
  `produitId` int DEFAULT NULL,
  PRIMARY KEY (`enchereId`),
  KEY `utilisateurId` (`utilisateurId`),
  KEY `produitId` (`produitId`),
  CONSTRAINT `enchere_ibfk_1` FOREIGN KEY (`utilisateurId`) REFERENCES `utilisateur` (`utilisateurId`),
  CONSTRAINT `enchere_ibfk_2` FOREIGN KEY (`produitId`) REFERENCES `produit` (`produitId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enchere`
--

LOCK TABLES `enchere` WRITE;
/*!40000 ALTER TABLE `enchere` DISABLE KEYS */;
INSERT INTO `enchere` VALUES (1,'2023-07-22 16:30:00','200',NULL,1,4),(2,'2024-06-28 00:00:00','10',NULL,2,2),(3,'2023-03-14 14:00:00','1000',NULL,3,1),(5,'2023-04-29 23:59:59','100',NULL,5,5);
/*!40000 ALTER TABLE `enchere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produit` (
  `produitId` int NOT NULL AUTO_INCREMENT,
  `produitTitre` varchar(255) DEFAULT NULL,
  `produitImage` varchar(255) DEFAULT NULL,
  `produitNote` int DEFAULT NULL,
  `produitDescription` text,
  `utilisateurId` int DEFAULT NULL,
  PRIMARY KEY (`produitId`),
  KEY `utilisateurId` (`utilisateurId`),
  CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`utilisateurId`) REFERENCES `utilisateur` (`utilisateurId`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produit`
--

LOCK TABLES `produit` WRITE;
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;
INSERT INTO `produit` VALUES (1,'Montre','https://picsum.photos/200/300',8,'Cette montre est un accessoire élégant et pratique pour rester à lheure toute la journée. Elle possède un boîtier en acier inoxydable poli, un cadran noir avec des chiffres blancs contrastants et des aiguilles blanches pour une lecture claire. Le bracelet en cuir noir est confortable et durable, doté dune boucle en acier inoxydable pour un ajustement facile. La montre est équipée dun mécanisme à quartz précis et fiable, ainsi que dune fonction de date pour rester organisé. En somme, cette montre est une combinaison élégante et fonctionnelle pour toute occasion.',1),(2,'Telephone','https://picsum.photos/200/300',4,'Ce téléphone est un appareil compact et puissant qui vous permettra de rester connecté avec vos proches et de réaliser toutes vos tâches quotidiennes. Il dispose dun écran tactile haute définition de 6,2 pouces, qui affiche des images et des vidéos claires et lumineuses. La caméra arrière est dotée dun capteur de 12 mégapixels pour prendre des photos et des vidéos de haute qualité, tandis que la caméra avant de 8 mégapixels vous permet de prendre des selfies impeccables.',2),(3,'Oridnateur','https://picsum.photos/200/300',2,'Cet ordinateur est un outil indispensable pour effectuer toutes vos tâches informatiques. Il possède un écran haute définition de 15 pouces, offrant une excellente qualité daffichage pour vos vidéos et vos images. Il est équipé dun processeur rapide et puissant, ainsi que dune grande capacité de stockage interne de 1 To pour stocker toutes vos données importantes.',3),(4,'Table','https://picsum.photos/200/300',8,'Cette table est une pièce magnifique pour votre salle à manger. Elle possède un plateau en bois massif, qui brille sous la lumière du soleil grâce à son vernis brillant. Les pieds sculptés ajoutent une touche de sophistication et de style à cette pièce de mobilier.',4),(5,'Etagere','https://picsum.photos/200/300',4,'Cette étagère était autrefois une pièce pratique et fonctionnelle dans votre maison, mais malheureusement, elle est maintenant cassée. Les planches en bois qui la composaient sont désormais disjointes, créant un aspect délabré et peu attrayant.',5),(6,'chaussure','https://picsum.photos/200/300',3,'Ces chaussures étaient autrefois une pièce de mode pratique et confortable dans votre garde-robe, mais malheureusement, elles sont maintenant trouées. Les trous dans les semelles et les talons rendent ces chaussures inutilisables pour les activités quotidiennes.',4),(7,'pantalon','https://picsum.photos/200/300',2,'Ce pantalon était autrefois une pièce confortable et élégante dans votre garde-robe, mais malheureusement, il est maintenant troué. Les trous dans le tissu créent un aspect délabré et peu attrayant, rendant le pantalon inutilisable pour les occasions formelles ou professionnelles.',3),(8,'bonbon','https://picsum.photos/200/300',10,'Ces bonbons sont une délicieuse gâterie sucrée à savourer. Leur texture douce et moelleuse fond dans la bouche, révélant une explosion de saveurs fruitées et sucrées.',2),(9,'Livre 1994','https://picsum.photos/200/300',4,'Ce livre est un véritable trésor pour tout amateur de lecture. Sa couverture rigide et son papier de haute qualité donnent une impression de durabilité et de sophistication.',1),(10,'Livre bob l eponge','https://picsum.photos/200/300',7,'Ce livre de Bob léponge est un véritable régal pour les fans de la série animée populaire. La couverture colorée présente les personnages familiers et leurs aventures hilarantes sous la mer.',2),(12,'test3','test3',0,'test3',4),(13,'test4','test4',0,'test4',4),(14,'test4','test4',0,'test4',4),(15,'test5','test5',0,'test5',4),(16,'test5','test5',0,'test5',4);
/*!40000 ALTER TABLE `produit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produit_categorie`
--

DROP TABLE IF EXISTS `produit_categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produit_categorie` (
  `utilisateurId` int DEFAULT NULL,
  `produitId` int DEFAULT NULL,
  `categorieId` int DEFAULT NULL,
  KEY `utilisateurId` (`utilisateurId`),
  KEY `produitId` (`produitId`),
  KEY `produit_categorie_ibfk_1` (`categorieId`),
  CONSTRAINT `produit_categorie_ibfk_1` FOREIGN KEY (`categorieId`) REFERENCES `categorie` (`categorieId`),
  CONSTRAINT `produit_categorie_ibfk_2` FOREIGN KEY (`produitId`) REFERENCES `produit` (`produitId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produit_categorie`
--

LOCK TABLES `produit_categorie` WRITE;
/*!40000 ALTER TABLE `produit_categorie` DISABLE KEYS */;
INSERT INTO `produit_categorie` VALUES (1,5,NULL),(2,4,NULL),(3,3,NULL),(5,1,NULL),(NULL,16,1),(NULL,16,2);
/*!40000 ALTER TABLE `produit_categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilisateur` (
  `utilisateurId` int NOT NULL AUTO_INCREMENT,
  `utilisateurPseudo` varchar(255) DEFAULT NULL,
  `utilisateurEmail` varchar(255) DEFAULT NULL,
  `utilisateurPrenom` varchar(255) DEFAULT NULL,
  `utilisateurNom` varchar(255) DEFAULT NULL,
  `utilisateurMotDePasse` varchar(255) DEFAULT NULL,
  `utilisateurRole` varchar(255) DEFAULT NULL,
  `utilisateurDateDeNaissance` datetime DEFAULT NULL,
  PRIMARY KEY (`utilisateurId`),
  UNIQUE KEY `utilisateurPseudo` (`utilisateurPseudo`),
  UNIQUE KEY `utilisateurEmail` (`utilisateurEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES (1,'Kev','kevin@hotmail.fr','Kevin','bruyne','rootroot','utilisateur','2000-05-12 00:00:00'),(2,'Wntzko','wntzko@hotmail.fr','Zuko','winter','rootroot','utilisateur','2004-12-12 00:00:00'),(3,'KZ','botKz@hotmail.fr','Ali','bot','rootroot','utilisateur','2003-12-12 00:00:00'),(4,'Valpha','victorpholien@hotmail.fr','Victoraa','Pholien','rootroot','admin','2002-01-01 00:00:00'),(5,'SofyanABD','ABD@hotmail.fr','Sofyan','ABD','rootroot','utilisateur','2001-11-02 00:00:00'),(7,'test','test@test','test','test','testtest',NULL,'2023-05-24 00:00:00');
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-19 20:50:25
