-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: microsoftazureai_customersfeedback
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

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
-- Table structure for table `feedback_comments_report`
--

DROP TABLE IF EXISTS `feedback_comments_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback_comments_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `type` int(10) NOT NULL,
  `comment` text,
  `timer1` varchar(100) DEFAULT NULL,
  `timer2` varchar(100) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `comment_approve` int(3) DEFAULT NULL,
  `data` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback_comments_report`
--

LOCK TABLES `feedback_comments_report` WRITE;
/*!40000 ALTER TABLE `feedback_comments_report` DISABLE KEYS */;
INSERT INTO `feedback_comments_report` VALUES (10,27,1,'Thanks','1617272634','Thursday, April 1, 2021, 6:23 am',8,'8','Esedo Fredrick','good1615666927.png',0,NULL),(11,28,1,'Thank You Ann for the feed back','1617272763','Thursday, April 1, 2021, 6:26 am',8,'8','Esedo Fredrick','good1615666927.png',0,NULL);
/*!40000 ALTER TABLE `feedback_comments_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback_reports`
--

DROP TABLE IF EXISTS `feedback_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `timer1` varchar(100) DEFAULT NULL,
  `timer2` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `userphoto` varchar(100) DEFAULT NULL,
  `userid` int(30) DEFAULT NULL,
  `total_comments` varchar(100) DEFAULT NULL,
  `report_date` varchar(100) DEFAULT NULL,
  `report_month` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `positivity` varchar(100) DEFAULT NULL,
  `negativity` varchar(100) DEFAULT NULL,
  `neutrality` varchar(100) DEFAULT NULL,
  `emotion_img` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `admin_identity` varchar(200) DEFAULT NULL,
  `sentiment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback_reports`
--

LOCK TABLES `feedback_reports` WRITE;
/*!40000 ALTER TABLE `feedback_reports` DISABLE KEYS */;
INSERT INTO `feedback_reports` VALUES (26,'Products','The Products is good','1617272475','Thursday, April 1, 2021, 6:21 am','8','Esedo Fredrick','good1615666927.png',8,'0','2021-04-02','4','admin@gmail.com','1','0','0','happy.png','Admin','d39c539d90f25040f7a8938a22d4feee1615666928','positive'),(27,'Design','The design is bad','1617272581','Thursday, April 1, 2021, 6:23 am','8','Esedo Fredrick','good1615666927.png',8,'1','2021-04-01','4','admin@gmail.com','0','1','0','sad.png','Admin','d39c539d90f25040f7a8938a22d4feee1615666928','negative'),(28,'Pricing','The Price is okay','1617272712','Thursday, April 1, 2021, 6:25 am',NULL,'Ann Ball','user.png',8,'1','2021-04-02','4','ann@gmail.com','0.03','0.23','0.74','neutral.png','Customer','d39c539d90f25040f7a8938a22d4feee1615666928','neutral');
/*!40000 ALTER TABLE `feedback_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback_statistics`
--

DROP TABLE IF EXISTS `feedback_statistics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback_statistics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_sentiments` varchar(30) DEFAULT NULL,
  `total_postive` varchar(30) DEFAULT NULL,
  `total_negative` varchar(30) DEFAULT NULL,
  `total_neutral` varchar(30) DEFAULT NULL,
  `total_products` varchar(30) DEFAULT NULL,
  `total_design` varchar(30) DEFAULT NULL,
  `total_bug` varchar(30) DEFAULT NULL,
  `total_pricing` varchar(30) DEFAULT NULL,
  `total_supports` varchar(30) DEFAULT NULL,
  `total_others` varchar(30) DEFAULT NULL,
  `owner_id` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback_statistics`
--

LOCK TABLES `feedback_statistics` WRITE;
/*!40000 ALTER TABLE `feedback_statistics` DISABLE KEYS */;
INSERT INTO `feedback_statistics` VALUES (1,'18','7','7','37','8','7','3','24','2','11','8'),(2,'6','4','2','1','4','2','1','0','2','0','9'),(3,'0','0','0','0','0','0','0','0','0','0','10');
/*!40000 ALTER TABLE `feedback_statistics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `userid` int(30) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `photo` text,
  `user_rank` varchar(100) DEFAULT NULL,
  `reciever_id` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title_seo` varchar(200) DEFAULT NULL,
  `patient_id` varchar(100) DEFAULT NULL,
  `doctor_id` varchar(100) DEFAULT NULL,
  `doctor_email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification`
--

LOCK TABLES `notification` WRITE;
/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
INSERT INTO `notification` VALUES (44,'26',8,'Esedo Fredrick','good1615666927.png','Admin','8','unread','report_post','1617272475','Products','Products-1617272475',NULL,NULL,NULL),(45,'27',8,'Esedo Fredrick','good1615666927.png','Admin','8','read','report_post','1617272581','Design','Design-1617272581',NULL,NULL,NULL),(46,'28',NULL,'Ann Ball','user.png','Customer','8','read','report_post','1617272712','Pricing','Pricing-1617272712',NULL,NULL,NULL);
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `user_rank` varchar(200) DEFAULT NULL,
  `user_verified` varchar(200) DEFAULT NULL,
  `user_banned` varchar(200) DEFAULT NULL,
  `created_time` varchar(200) DEFAULT NULL,
  `timer1` varchar(200) DEFAULT NULL,
  `timer2` varchar(200) DEFAULT NULL,
  `data` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `phone_no` varchar(60) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `points` varchar(100) DEFAULT NULL,
  `levels` varchar(30) DEFAULT NULL,
  `admin_id` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (8,NULL,'$2y$04$CTAOFtVhtF3VOLm7PG3oNuiWFTpBknTQkWyvgr1sHNZwMZ6rMZSWm','Esedo Fredrick','admin@gmail.com','good1615666927.png','Admin','1','0','Saturday, March 13, 2021, 4:22 pm','1615666928',NULL,'d39c539d90f25040f7a8938a22d4feee1615666928',NULL,'+123','Admin','0','1','d39c539d90f25040f7a8938a22d4feee1615666928'),(9,NULL,'$2y$04$9jvm4kIXkHzaEdoaLIZj0uMOw6c9aASWEDs7x9LdVg9dTRwyIiezC','admin2 cow','admin2@gmail.com','good1615668369.png','Admin','1','0','Saturday, March 13, 2021, 4:46 pm','1615668369',NULL,'12574bb0e86a0f65b1c45e6ac476e85c1615668369',NULL,'+123','Admin','0','1','12574bb0e86a0f65b1c45e6ac476e85c1615668369'),(10,NULL,'$2y$04$4Py4Ob.DOXoCzF2NRKU6L.6qH5avcWoGxV2wRE5CHPdm445eVDOg6','DDDDDDD','esedofredric2k@1gmail.com','good1616029559.png','Admin','1','0','Wednesday, March 17, 2021, 9:06 pm','1616029561',NULL,'9593cfac2da1ea9149e22cff99c401371616029561',NULL,'+123','Admin','0','1','9593cfac2da1ea9149e22cff99c401371616029561');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'microsoftazureai_customersfeedback'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-04 15:09:57
