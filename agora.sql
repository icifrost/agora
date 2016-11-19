-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: agora
-- ------------------------------------------------------
-- Server version	5.5.53-0+deb8u1

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
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` text,
  `first_name` text,
  `last_name` text,
  `email` text,
  `last_time` bigint(20) DEFAULT NULL,
  `tsgone` bigint(20) DEFAULT '0',
  `old_time` bigint(20) DEFAULT '0',
  `status` int(11) DEFAULT '0',
  `posts` bigint(20) DEFAULT '0',
  `sig` text,
  `banned` varchar(50) DEFAULT 'no',
  `rank` varchar(50) DEFAULT '0',
  `usepm` int(11) DEFAULT '1',
  `aim` text,
  `icq` text,
  `location` text,
  `show_profile` int(11) DEFAULT '1',
  `avatar` text,
  `photo` text,
  `rating` bigint(20) DEFAULT '0',
  `total_votes` bigint(20) DEFAULT '0',
  `voted_for` text,
  `rps` int(11) DEFAULT '1',
  `rps_score` bigint(20) DEFAULT '0',
  PRIMARY KEY (`account_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES (1,'admin','$2y$11$yZPPSbkUeefoNInU4npyzuSYSesRBxRTRm7XK6egWjwN43FcqyDV6',NULL,NULL,NULL,NULL,0,0,0,0,NULL,'no','0',1,NULL,NULL,NULL,1,NULL,NULL,0,0,NULL,1,0);
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_artcats`
--

DROP TABLE IF EXISTS `forum_artcats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_artcats` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` text,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_artcats`
--

LOCK TABLES `forum_artcats` WRITE;
/*!40000 ALTER TABLE `forum_artcats` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_artcats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_articles`
--

DROP TABLE IF EXISTS `forum_articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_articles` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `validates` int(11) DEFAULT NULL,
  `author_id` bigint(20) DEFAULT NULL,
  `short_des` text,
  `body` text,
  `category` bigint(20) DEFAULT NULL,
  `titles` text,
  `the_date` text,
  `the_time` bigint(20) DEFAULT NULL,
  `forum_topic` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_articles`
--

LOCK TABLES `forum_articles` WRITE;
/*!40000 ALTER TABLE `forum_articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_categories`
--

DROP TABLE IF EXISTS `forum_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` text,
  `cat_sort` bigint(20) DEFAULT '0',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_categories`
--

LOCK TABLES `forum_categories` WRITE;
/*!40000 ALTER TABLE `forum_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_posts`
--

DROP TABLE IF EXISTS `forum_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `author` bigint(20) DEFAULT '0',
  `te_lapsed` bigint(20) DEFAULT '0',
  `time_post` text,
  `num_replies` int(11) DEFAULT '0',
  `post` text,
  `thread_parent` bigint(20) DEFAULT '0',
  `last_post` text,
  `post_forum` bigint(20) DEFAULT '0',
  `views` bigint(20) DEFAULT '0',
  `no_smilies` int(11) DEFAULT '0',
  `value` int(11) DEFAULT '0',
  `ip_address` text,
  `locked` int(11) DEFAULT '0',
  `article_identifier` bigint(20) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_posts`
--

LOCK TABLES `forum_posts` WRITE;
/*!40000 ALTER TABLE `forum_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `forum_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guestsonline`
--

DROP TABLE IF EXISTS `guestsonline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guestsonline` (
  `guestid` bigint(20) NOT NULL AUTO_INCREMENT,
  `guestip` varchar(250) NOT NULL DEFAULT '',
  `time` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`guestid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guestsonline`
--

LOCK TABLES `guestsonline` WRITE;
/*!40000 ALTER TABLE `guestsonline` DISABLE KEYS */;
INSERT INTO `guestsonline` VALUES (1,'127.0.0.1',1479536866),(2,'127.0.0.1',1479536992),(3,'127.0.0.1',1479537012),(4,'127.0.0.1',1479537196),(5,'127.0.0.1',1479537781),(6,'127.0.0.1',1479538328),(7,'127.0.0.1',1479545642),(8,'127.0.0.1',1479545681),(9,'127.0.0.1',1479545794),(10,'127.0.0.1',1479545887),(11,'127.0.0.1',1479545956),(12,'127.0.0.1',1479546005),(13,'127.0.0.1',1479546066),(14,'127.0.0.1',1479546112),(15,'127.0.0.1',1479546182),(16,'127.0.0.1',1479546197),(17,'127.0.0.1',1479546278),(18,'127.0.0.1',1479546305),(19,'127.0.0.1',1479546322),(20,'127.0.0.1',1479546352),(21,'127.0.0.1',1479546658),(22,'127.0.0.1',1479546673),(23,'127.0.0.1',1479546688),(24,'127.0.0.1',1479546691),(25,'127.0.0.1',1479546704),(26,'127.0.0.1',1479546729),(27,'127.0.0.1',1479547321),(28,'127.0.0.1',1479550753);
/*!40000 ALTER TABLE `guestsonline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `account_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `profilePic` text NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'agora'
--

--
-- Dumping routines for database 'agora'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-19 12:59:16
