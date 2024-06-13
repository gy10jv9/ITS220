-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: db_redcross
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_approvalrequests`
--

DROP TABLE IF EXISTS `tbl_approvalrequests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_approvalrequests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `isdone` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`user_id`),
  KEY `tbl_approvalrequests_tbl_requesttypes_FK` (`type_id`),
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`),
  CONSTRAINT `tbl_approvalrequests_tbl_requesttypes_FK` FOREIGN KEY (`type_id`) REFERENCES `tbl_requesttypes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_approvalrequests`
--

LOCK TABLES `tbl_approvalrequests` WRITE;
/*!40000 ALTER TABLE `tbl_approvalrequests` DISABLE KEYS */;
INSERT INTO `tbl_approvalrequests` VALUES (2,24,1,1),(3,28,1,1),(4,29,1,1),(5,30,2,0),(6,31,2,1);
/*!40000 ALTER TABLE `tbl_approvalrequests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_beneficiaries`
--

DROP TABLE IF EXISTS `tbl_beneficiaries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_beneficiaries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beneficiaryName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_beneficiaries`
--

LOCK TABLES `tbl_beneficiaries` WRITE;
/*!40000 ALTER TABLE `tbl_beneficiaries` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_beneficiaries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_brands`
--

DROP TABLE IF EXISTS `tbl_brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brandName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_brands`
--

LOCK TABLES `tbl_brands` WRITE;
/*!40000 ALTER TABLE `tbl_brands` DISABLE KEYS */;
INSERT INTO `tbl_brands` VALUES (1,'brandtest');
/*!40000 ALTER TABLE `tbl_brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_distributors`
--

DROP TABLE IF EXISTS `tbl_distributors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_distributors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `distributorName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_distributors`
--

LOCK TABLES `tbl_distributors` WRITE;
/*!40000 ALTER TABLE `tbl_distributors` DISABLE KEYS */;
INSERT INTO `tbl_distributors` VALUES (1,'distributortest');
/*!40000 ALTER TABLE `tbl_distributors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_donations`
--

DROP TABLE IF EXISTS `tbl_donations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `contactnum` varchar(200) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `item` varchar(200) NOT NULL,
  `purchaseDate` date NOT NULL,
  `quant` int(11) NOT NULL,
  `distributor` varchar(200) NOT NULL,
  `streetAddr` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `cardnum` varchar(100) NOT NULL,
  `expdate` date NOT NULL,
  `ccv` varchar(100) NOT NULL,
  `addedDate` date NOT NULL DEFAULT curdate(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_donations`
--

LOCK TABLES `tbl_donations` WRITE;
/*!40000 ALTER TABLE `tbl_donations` DISABLE KEYS */;
INSERT INTO `tbl_donations` VALUES (1,'ssca','cassssss','csaaaaaaaa','sacccccccccc',47757,'kihhhh','lhhhhhhhk','2024-05-30',1,'hhhhhhhh','tttttttttt','kkkkkkk','yyyyyyyyy','kkkkkkkkk','uiiiiiiii','2024-05-23','111','2024-06-13');
/*!40000 ALTER TABLE `tbl_donations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_inventory`
--

DROP TABLE IF EXISTS `tbl_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `purchaseDate` date DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `distributor_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_inventory_tbl_brands_fk_1` (`brand_id`),
  KEY `tbl_inventory_tbl_items_fk` (`item_id`),
  KEY `tbl_inventory_tbl_distributors_fk` (`distributor_id`),
  CONSTRAINT `tbl_inventory_tbl_brands_fk` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brands` (`id`),
  CONSTRAINT `tbl_inventory_tbl_brands_fk_1` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brands` (`id`),
  CONSTRAINT `tbl_inventory_tbl_distributors_fk` FOREIGN KEY (`distributor_id`) REFERENCES `tbl_distributors` (`id`),
  CONSTRAINT `tbl_inventory_tbl_items_fk` FOREIGN KEY (`item_id`) REFERENCES `tbl_items` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_inventory`
--

LOCK TABLES `tbl_inventory` WRITE;
/*!40000 ALTER TABLE `tbl_inventory` DISABLE KEYS */;
INSERT INTO `tbl_inventory` VALUES (1,1,1,'2024-06-11',2,1,'test','test');
/*!40000 ALTER TABLE `tbl_inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_items`
--

DROP TABLE IF EXISTS `tbl_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_items`
--

LOCK TABLES `tbl_items` WRITE;
/*!40000 ALTER TABLE `tbl_items` DISABLE KEYS */;
INSERT INTO `tbl_items` VALUES (1,'itemtest');
/*!40000 ALTER TABLE `tbl_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_locations`
--

DROP TABLE IF EXISTS `tbl_locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_locations`
--

LOCK TABLES `tbl_locations` WRITE;
/*!40000 ALTER TABLE `tbl_locations` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_members2`
--

DROP TABLE IF EXISTS `tbl_members2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_members2` (
  `volunteer_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `contactNumber` varchar(20) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `sexuality_id` tinyint(4) NOT NULL,
  `civilStatus_id` tinyint(4) NOT NULL,
  `bdate` date DEFAULT NULL,
  `occupation` tinyint(4) NOT NULL,
  `streetAddress` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `day_id` tinyint(4) NOT NULL,
  `timeofday_id` tinyint(4) NOT NULL,
  `sun` tinyint(4) NOT NULL,
  `mon` tinyint(4) NOT NULL,
  `tue` tinyint(4) NOT NULL,
  `wed` tinyint(4) NOT NULL,
  `thu` tinyint(4) NOT NULL,
  `fri` tinyint(4) NOT NULL,
  `sat` tinyint(4) NOT NULL,
  `morning` tinyint(4) NOT NULL,
  `afternoon` tinyint(4) NOT NULL,
  `evening` tinyint(4) NOT NULL,
  `frequency_id` tinyint(4) NOT NULL,
  `profileImage_url` text DEFAULT NULL,
  `dateAdded` date NOT NULL DEFAULT curdate(),
  PRIMARY KEY (`volunteer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_members2`
--

LOCK TABLES `tbl_members2` WRITE;
/*!40000 ALTER TABLE `tbl_members2` DISABLE KEYS */;
INSERT INTO `tbl_members2` VALUES (4,'test','edited','','',0,0,'0000-00-00',0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-09'),(5,'Array','','0','0',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-09'),(6,'Array','','0','0',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-09'),(7,'Array','','0','0',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-09'),(8,'test3','','0','0',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-09'),(9,'test','random','09123456789','Atlantic',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(10,'random','with sexuality','587468465','wadaw',1,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(11,'random','with sexuality','587468465','wadaw',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(12,'random','with sexuality','587468465','wadaw',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(13,'random','name','524545','filam',1,1,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(14,'random','name','524545','filam',1,1,'0000-00-00',0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(15,'name','try','1354151','fil',1,2,'2015-12-17',0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(16,'test','date','587468465','wadaw',0,0,'2024-05-17',0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(17,'test2','date2','587468465','wadaw',0,0,'2024-05-31',0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(18,'test','with address','65165165','wdadw',0,1,'0000-00-00',0,'test asdrea','city','reg','countyr',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(19,'test','with address','65165165','wdadw',0,1,'0000-00-00',0,'test asdrea','city','reg','countyr',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(21,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(22,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(23,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-10'),(24,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-11'),(25,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-11'),(26,':fname',':lname',':num',':nat',1,1,'2024-05-31',1,':strtAddress',':city',':region',':country',0,0,1,1,1,1,1,1,1,1,1,1,1,NULL,'2024-06-11'),(27,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-11'),(28,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-12'),(29,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-12'),(30,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-12'),(31,'ewttt','wtttttttttt','w3333333','errrrr',0,2,'2024-05-23',2,'rge','yjjjjjjjjjjj','jyyyyyyyyyyy','htttttt',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-12'),(32,'ewttt','wtttttttttt','w3333333','errrrr',0,2,'2024-05-23',2,'rge','yjjjjjjjjjjj','jyyyyyyyyyyy','htttttt',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-12'),(37,'test','test','453378','test',0,1,'2024-06-13',2,'test','test','test','test',0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'2024-06-12'),(38,'url','test','516516','test',0,0,'0000-00-00',0,'url test','test','test','test',0,0,0,0,0,0,0,0,0,0,0,0,0,'img/','2024-06-12'),(39,'url','test2','56146444654','test2',0,1,'0000-00-00',0,'url test2','test2','test2','test2',0,0,0,0,0,0,0,0,0,0,0,0,0,'img/446809910_122118958346293815_920552017238265037_n.jpg','2024-06-12'),(40,'test','added date','','',0,0,'0000-00-00',0,'','','','',0,0,0,0,0,0,0,0,0,0,0,0,0,'img/','2024-06-12'),(41,'added date','test','416846','dadw',0,0,'2024-06-11',0,'fefwefw','ewafwe','fwfew','fwefw',0,0,0,1,0,1,0,0,0,0,1,0,3,'img/','2024-06-13');
/*!40000 ALTER TABLE `tbl_members2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_requesttypes`
--

DROP TABLE IF EXISTS `tbl_requesttypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_requesttypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_requesttypes`
--

LOCK TABLES `tbl_requesttypes` WRITE;
/*!40000 ALTER TABLE `tbl_requesttypes` DISABLE KEYS */;
INSERT INTO `tbl_requesttypes` VALUES (1,'role-superAdmin'),(2,'role-admin');
/*!40000 ALTER TABLE `tbl_requesttypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_roles`
--

DROP TABLE IF EXISTS `tbl_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roles` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_roles`
--

LOCK TABLES `tbl_roles` WRITE;
/*!40000 ALTER TABLE `tbl_roles` DISABLE KEYS */;
INSERT INTO `tbl_roles` VALUES (1,'guest'),(2,'admin'),(3,'super admin');
/*!40000 ALTER TABLE `tbl_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `role_id` int(11) DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `role` (`role_id`),
  CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES (24,'test','test@test.com','$2y$10$GRkNTftrepKR0jWJKDlZv.5o0sO2TnjhjdWsj9EOFsvNoqOylgQMy',3),(25,'admin','admin@admin.com','$2y$10$girSurEViGNgMYpTaoYj1eKrDY3VbU.2OGoQ6BXac3.AIKC0uUZP6',3),(26,'superadmintest','sample@email.com','$2y$10$.DMP6A8xmrEQJoWOsfMnu.OktCrS2GLUjjIUBEuoErh2hFt11d5Xu',1),(27,'superadmintest2','sample@email.com','$2y$10$WBt3ThSG/TriAH1llR1BRu1l2vB86Hi4HUXea1BWyT6XA.kIkSX/e',1),(28,'superadmintest3','sample@email.com','$2y$10$pxBxol9bMjcYgugC6yM/C.mIcD59P1FDow02tUSju4enCBKU8xGo.',3),(29,'superadmintest4','sample@email.com','$2y$10$6qm3Z/yXCW30ssz/RLTk6.HG5WJ.p8CsjeCocxi8Mxc59jVaW0nwq',1),(30,'admintest','sample@email.com','$2y$10$MO7a3k0k2u7ygKtpNYAIH.KiAb2nSrLlMyMueqLkIaf9Kek0UQ3LW',1),(31,'','','$2y$10$Ag.HTWc7Yfgofc3Ahwg7Yu.jwmJzTYDIqj2kNbkmvA9rsvb4Q98l6',1);
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_works`
--

DROP TABLE IF EXISTS `tbl_works`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beneficiary_id` int(11) DEFAULT NULL,
  `location_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT curdate(),
  `expenses` double NOT NULL,
  `description` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_works_tbl_beneficiaries_FK` (`beneficiary_id`),
  KEY `tbl_works_tbl_locations_FK` (`location_id`),
  CONSTRAINT `tbl_works_tbl_beneficiaries_FK` FOREIGN KEY (`beneficiary_id`) REFERENCES `tbl_beneficiaries` (`id`),
  CONSTRAINT `tbl_works_tbl_locations_FK` FOREIGN KEY (`location_id`) REFERENCES `tbl_locations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_works`
--

LOCK TABLES `tbl_works` WRITE;
/*!40000 ALTER TABLE `tbl_works` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_works` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_redcross'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-13 16:38:35
