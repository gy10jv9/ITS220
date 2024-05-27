-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: db_redcross
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
  PRIMARY KEY (`volunteer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_members2`
--

LOCK TABLES `tbl_members2` WRITE;
/*!40000 ALTER TABLE `tbl_members2` DISABLE KEYS */;
INSERT INTO `tbl_members2` VALUES (1,'','','0','0',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(2,'','','','',0,0,NULL,0,'','','','',0,0,0,0,0,0,0,0,0,0,0,0,0),(3,'','','0','0',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(4,'test','edited','','',0,0,'0000-00-00',0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(5,'Array','','0','0',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(6,'Array','','0','0',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(7,'Array','','0','0',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(8,'test3','','0','0',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(9,'test','random','09123456789','Atlantic',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(10,'random','with sexuality','587468465','wadaw',1,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(11,'random','with sexuality','587468465','wadaw',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(12,'random','with sexuality','587468465','wadaw',0,0,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(13,'random','name','524545','filam',1,1,NULL,0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(14,'random','name','524545','filam',1,1,'0000-00-00',0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(15,'name','try','1354151','fil',1,2,'2015-12-17',0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(16,'test','date','587468465','wadaw',0,0,'2024-05-17',0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(17,'test2','date2','587468465','wadaw',0,0,'2024-05-31',0,'','0','0','0',0,0,0,0,0,0,0,0,0,0,0,0,0),(18,'test','with address','65165165','wdadw',0,1,'0000-00-00',0,'test asdrea','city','reg','countyr',0,0,0,0,0,0,0,0,0,0,0,0,0),(19,'test','with address','65165165','wdadw',0,1,'0000-00-00',0,'test asdrea','city','reg','countyr',0,0,0,0,0,0,0,0,0,0,0,0,0),(21,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0),(22,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0),(23,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0),(24,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0),(25,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0),(26,':fname',':lname',':num',':nat',1,1,'2024-05-31',1,':strtAddress',':city',':region',':country',0,0,1,1,1,1,1,1,1,1,1,1,1),(27,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0),(28,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0),(29,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0),(30,'with','frequency','8327837','efage',1,1,'2024-05-22',1,'feeeeeeeeee','i,u','iul','.uooooooo',0,0,0,0,0,0,0,0,0,0,0,0,0),(31,'ewttt','wtttttttttt','w3333333','errrrr',0,2,'2024-05-23',2,'rge','yjjjjjjjjjjj','jyyyyyyyyyyy','htttttt',0,0,0,0,0,0,0,0,0,0,0,0,0),(32,'ewttt','wtttttttttt','w3333333','errrrr',0,2,'2024-05-23',2,'rge','yjjjjjjjjjjj','jyyyyyyyyyyy','htttttt',0,0,0,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `tbl_members2` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-27 22:23:33
