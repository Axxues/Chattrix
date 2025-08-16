-- MySQL dump 10.13  Distrib 8.0.41, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: chattrix
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
-- Table structure for table `connections`
--

DROP TABLE IF EXISTS `connections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `connections` (
  `connections_id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`connections_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `connections`
--

LOCK TABLES `connections` WRITE;
/*!40000 ALTER TABLE `connections` DISABLE KEYS */;
/*!40000 ALTER TABLE `connections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_details`
--

DROP TABLE IF EXISTS `login_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_admin_id` int(11) DEFAULT NULL,
  `last_activity` timestamp NULL DEFAULT current_timestamp(),
  `is_typing` tinyint(1) DEFAULT NULL,
  `is_typing_to` int(11) DEFAULT NULL,
  PRIMARY KEY (`login_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_details`
--

LOCK TABLES `login_details` WRITE;
/*!40000 ALTER TABLE `login_details` DISABLE KEYS */;
INSERT INTO `login_details` VALUES (1,7,'2025-08-16 10:35:21',0,8),(2,6,'2025-08-16 10:35:22',0,7),(3,8,'2025-08-16 04:07:57',0,NULL);
/*!40000 ALTER TABLE `login_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `messages_id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver` int(11) DEFAULT NULL,
  `sender` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `files` text DEFAULT NULL,
  `is_seen` int(11) DEFAULT 0,
  `received` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_sender` tinyint(1) DEFAULT NULL,
  `deleted_receiver` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`messages_id`)
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (41,7,6,'Test Message 1',NULL,1,NULL,'2025-08-10 23:49:24','2025-08-14 09:29:29',NULL,NULL),(42,6,7,'Hello',NULL,1,NULL,'2025-08-10 23:49:48','2025-08-14 09:28:53',NULL,NULL),(43,7,6,'Test 2',NULL,1,NULL,'2025-08-10 23:51:33','2025-08-14 09:29:29',NULL,NULL),(44,7,6,'Test 2',NULL,1,NULL,'2025-08-10 23:51:33','2025-08-14 09:29:29',NULL,NULL),(45,7,6,'Test 2',NULL,1,NULL,'2025-08-10 23:51:37','2025-08-14 09:29:29',NULL,NULL),(46,7,6,'Test 2',NULL,1,NULL,'2025-08-10 23:51:49','2025-08-14 09:29:29',NULL,NULL),(47,7,6,'Test 2',NULL,1,NULL,'2025-08-10 23:51:56','2025-08-14 09:29:29',NULL,NULL),(49,7,6,'Test 3',NULL,1,NULL,'2025-08-10 23:58:41','2025-08-14 09:29:29',NULL,NULL),(50,6,7,'Hello world',NULL,1,NULL,'2025-08-11 00:10:48','2025-08-14 09:28:53',NULL,NULL),(51,7,6,'Hi There!',NULL,1,NULL,'2025-08-11 00:10:57','2025-08-14 09:29:29',NULL,NULL),(52,7,6,'Hello 1',NULL,1,NULL,'2025-08-11 00:11:50','2025-08-14 09:29:29',NULL,NULL),(53,6,7,'Hello 2',NULL,1,NULL,'2025-08-11 00:11:56','2025-08-14 09:28:53',NULL,NULL),(54,7,6,'Hello 3',NULL,1,NULL,'2025-08-11 10:29:22','2025-08-14 09:29:29',NULL,NULL),(55,7,6,'Test test',NULL,1,NULL,'2025-08-11 10:31:11','2025-08-14 09:29:29',NULL,NULL),(56,7,6,'tes test 1',NULL,1,NULL,'2025-08-11 10:33:30','2025-08-14 09:29:29',NULL,NULL),(57,7,6,'test test 2',NULL,1,NULL,'2025-08-11 10:34:17','2025-08-14 09:29:29',NULL,NULL),(58,7,6,'test test 3',NULL,1,NULL,'2025-08-11 10:34:38','2025-08-14 09:29:29',NULL,NULL),(59,7,6,'test test 4',NULL,1,NULL,'2025-08-11 10:34:47','2025-08-14 09:29:29',NULL,NULL),(60,7,6,'test test 5',NULL,1,NULL,'2025-08-11 10:35:00','2025-08-14 09:29:29',NULL,NULL),(61,7,6,'test test 6',NULL,1,NULL,'2025-08-11 10:35:11','2025-08-14 09:29:29',NULL,NULL),(62,7,6,'test test 7',NULL,1,NULL,'2025-08-11 10:35:23','2025-08-14 09:29:29',NULL,NULL),(63,7,6,'test test 8',NULL,1,NULL,'2025-08-11 10:41:18','2025-08-14 09:29:29',NULL,NULL),(64,7,6,'test',NULL,1,NULL,'2025-08-11 10:41:37','2025-08-14 09:29:29',NULL,NULL),(65,7,6,'test',NULL,1,NULL,'2025-08-11 10:43:26','2025-08-14 09:29:29',NULL,NULL),(66,6,7,'test',NULL,1,NULL,'2025-08-11 10:44:05','2025-08-14 09:28:53',NULL,NULL),(67,7,6,'test',NULL,1,NULL,'2025-08-11 10:45:00','2025-08-14 09:29:29',NULL,NULL),(68,7,6,'test',NULL,1,NULL,'2025-08-11 10:45:44','2025-08-14 09:29:29',NULL,NULL),(69,7,6,'test',NULL,1,NULL,'2025-08-11 10:48:13','2025-08-14 09:29:29',NULL,NULL),(70,7,6,'test',NULL,1,NULL,'2025-08-11 10:49:57','2025-08-14 09:29:29',NULL,NULL),(71,7,6,'test',NULL,1,NULL,'2025-08-11 10:51:36','2025-08-14 09:29:29',NULL,NULL),(72,7,6,'test',NULL,1,NULL,'2025-08-11 11:00:05','2025-08-14 09:29:29',NULL,NULL),(73,7,6,'test',NULL,1,NULL,'2025-08-11 11:00:13','2025-08-14 09:29:29',NULL,NULL),(74,7,6,'test 2',NULL,1,NULL,'2025-08-11 11:00:22','2025-08-14 09:29:29',NULL,NULL),(75,7,6,'test 3',NULL,1,NULL,'2025-08-11 11:00:41','2025-08-14 09:29:29',NULL,NULL),(76,7,6,'test 4',NULL,1,NULL,'2025-08-11 11:00:47','2025-08-14 09:29:29',NULL,NULL),(77,7,6,'test 5',NULL,1,NULL,'2025-08-11 11:00:54','2025-08-14 09:29:29',NULL,NULL),(78,7,6,'test 6',NULL,1,NULL,'2025-08-11 11:01:09','2025-08-14 09:29:29',NULL,NULL),(79,7,6,'test 7',NULL,1,NULL,'2025-08-11 11:01:14','2025-08-14 09:29:29',NULL,NULL),(80,7,6,'test 8',NULL,1,NULL,'2025-08-11 11:01:25','2025-08-14 09:29:29',NULL,NULL),(81,7,6,'test 8',NULL,1,NULL,'2025-08-11 11:01:28','2025-08-14 09:29:29',NULL,NULL),(82,7,6,'test  9',NULL,1,NULL,'2025-08-11 11:01:42','2025-08-14 09:29:29',NULL,NULL),(83,7,6,'test  9',NULL,1,NULL,'2025-08-11 11:01:44','2025-08-14 09:29:29',NULL,NULL),(84,7,6,'test 10',NULL,1,NULL,'2025-08-11 11:01:56','2025-08-14 09:29:29',NULL,NULL),(85,7,6,'test 11',NULL,1,NULL,'2025-08-11 11:02:02','2025-08-14 09:29:29',NULL,NULL),(86,7,6,'test 12',NULL,1,NULL,'2025-08-11 11:02:16','2025-08-14 09:29:29',NULL,NULL),(87,7,6,'test 13',NULL,1,NULL,'2025-08-11 11:02:21','2025-08-14 09:29:29',NULL,NULL),(88,7,6,'test 14',NULL,1,NULL,'2025-08-11 11:02:33','2025-08-14 09:29:29',NULL,NULL),(89,7,6,'test 15',NULL,1,NULL,'2025-08-11 11:02:38','2025-08-14 09:29:29',NULL,NULL),(90,7,6,'test 16',NULL,1,NULL,'2025-08-11 11:02:58','2025-08-14 09:29:29',NULL,NULL),(91,7,6,'test 17',NULL,1,NULL,'2025-08-11 11:03:16','2025-08-14 09:29:29',NULL,NULL),(92,7,6,'test 17',NULL,1,NULL,'2025-08-11 11:03:19','2025-08-14 09:29:29',NULL,NULL),(93,7,6,'test 17',NULL,1,NULL,'2025-08-11 11:03:21','2025-08-14 09:29:29',NULL,NULL),(94,7,6,'test 18',NULL,1,NULL,'2025-08-11 11:04:29','2025-08-14 09:29:29',NULL,NULL),(95,7,6,'test 19',NULL,1,NULL,'2025-08-11 11:04:35','2025-08-14 09:29:29',NULL,NULL),(96,7,6,'test 20',NULL,1,NULL,'2025-08-11 11:04:42','2025-08-14 09:29:29',NULL,NULL),(97,7,6,'test 21',NULL,1,NULL,'2025-08-11 11:04:55','2025-08-14 09:29:29',NULL,NULL),(98,7,6,'test 22',NULL,1,NULL,'2025-08-11 11:06:13','2025-08-14 09:29:29',NULL,NULL),(99,7,6,'test 23',NULL,1,NULL,'2025-08-11 11:06:18','2025-08-14 09:29:29',NULL,NULL),(100,7,6,'test 24',NULL,1,NULL,'2025-08-11 11:06:23','2025-08-14 09:29:29',NULL,NULL),(101,7,6,'test',NULL,1,NULL,'2025-08-11 11:07:19','2025-08-14 09:29:29',NULL,NULL),(102,7,6,'test 1',NULL,1,NULL,'2025-08-11 11:07:29','2025-08-14 09:29:29',NULL,NULL),(103,7,6,'test2',NULL,1,NULL,'2025-08-11 11:07:56','2025-08-14 09:29:29',NULL,NULL),(104,7,6,'test 2',NULL,1,NULL,'2025-08-11 11:08:04','2025-08-14 09:29:29',NULL,NULL),(105,7,6,'test 3',NULL,1,NULL,'2025-08-11 11:08:16','2025-08-14 09:29:29',NULL,NULL),(106,7,6,'test3',NULL,1,NULL,'2025-08-11 11:08:24','2025-08-14 09:29:29',NULL,NULL),(107,7,6,'test 4',NULL,1,NULL,'2025-08-11 11:08:37','2025-08-14 09:29:29',NULL,NULL),(108,7,6,'test4',NULL,1,NULL,'2025-08-11 11:08:44','2025-08-14 09:29:29',NULL,NULL),(109,7,6,'test 5',NULL,1,NULL,'2025-08-11 11:08:58','2025-08-14 09:29:29',NULL,NULL),(110,7,6,'test5',NULL,1,NULL,'2025-08-11 11:09:04','2025-08-14 09:29:29',NULL,NULL),(111,7,6,'test 6',NULL,1,NULL,'2025-08-11 11:09:21','2025-08-14 09:29:29',NULL,NULL),(112,7,6,'test6',NULL,1,NULL,'2025-08-11 11:09:28','2025-08-14 09:29:29',NULL,NULL),(113,7,6,'test 7',NULL,1,NULL,'2025-08-11 11:09:48','2025-08-14 09:29:29',NULL,NULL),(114,7,6,'test7',NULL,1,NULL,'2025-08-11 11:09:56','2025-08-14 09:29:29',NULL,NULL),(115,7,6,'test8',NULL,1,NULL,'2025-08-11 11:10:01','2025-08-14 09:29:29',NULL,NULL),(116,7,6,'test 8',NULL,1,NULL,'2025-08-11 11:10:30','2025-08-14 09:29:29',NULL,NULL),(117,7,6,'test8',NULL,1,NULL,'2025-08-11 11:10:40','2025-08-14 09:29:29',NULL,NULL),(118,7,6,'test 9',NULL,1,NULL,'2025-08-11 11:10:56','2025-08-14 09:29:29',NULL,NULL),(119,7,6,'test9',NULL,1,NULL,'2025-08-11 11:11:03','2025-08-14 09:29:29',NULL,NULL),(120,7,6,'test 10',NULL,1,NULL,'2025-08-11 11:11:08','2025-08-14 09:29:29',NULL,NULL),(121,7,6,'test 11',NULL,1,NULL,'2025-08-11 11:11:12','2025-08-14 09:29:29',NULL,NULL),(122,7,6,'test 12',NULL,1,NULL,'2025-08-11 11:11:32','2025-08-14 09:29:29',NULL,NULL),(123,7,6,'test 13',NULL,1,NULL,'2025-08-11 11:11:36','2025-08-14 09:29:29',NULL,NULL),(124,7,6,'test 14',NULL,1,NULL,'2025-08-11 11:11:40','2025-08-14 09:29:29',NULL,NULL),(125,7,6,'test 15',NULL,1,NULL,'2025-08-11 12:10:50','2025-08-14 09:29:29',NULL,NULL),(126,7,6,'test15',NULL,1,NULL,'2025-08-11 12:10:59','2025-08-14 09:29:29',NULL,NULL),(127,7,6,'test 16',NULL,1,NULL,'2025-08-11 12:11:58','2025-08-14 09:29:29',NULL,NULL),(128,7,6,'test 17',NULL,1,NULL,'2025-08-11 12:12:09','2025-08-14 09:29:29',NULL,NULL),(129,7,6,'test',NULL,1,NULL,'2025-08-11 12:13:34','2025-08-14 09:29:29',NULL,NULL),(130,6,7,'Halloo',NULL,1,NULL,'2025-08-11 12:18:42','2025-08-14 09:28:53',NULL,NULL),(131,6,7,'YAAAAHHOOOOOOOOOOOOOO',NULL,1,NULL,'2025-08-11 12:18:52','2025-08-14 09:28:53',NULL,NULL),(132,6,7,'Testing',NULL,1,NULL,'2025-08-12 08:42:43','2025-08-14 09:28:53',NULL,NULL),(133,7,6,'HAAALLOOO',NULL,1,NULL,'2025-08-12 10:22:57','2025-08-14 09:29:29',NULL,NULL),(134,7,6,'Send',NULL,1,NULL,'2025-08-12 10:45:27','2025-08-14 09:29:29',NULL,NULL),(135,7,6,'Test',NULL,1,NULL,'2025-08-12 23:18:39','2025-08-14 09:29:29',NULL,NULL),(136,7,6,'Hellooo',NULL,1,NULL,'2025-08-13 06:41:25','2025-08-14 09:29:29',NULL,NULL),(137,7,6,'Tatsuya',NULL,1,NULL,'2025-08-13 06:46:17','2025-08-14 09:29:29',NULL,NULL),(138,6,7,'YAAAAAAHOOOOOOO',NULL,1,NULL,'2025-08-13 06:47:06','2025-08-14 09:28:53',NULL,NULL),(139,7,6,'HAAAAALOOOOOO',NULL,1,NULL,'2025-08-13 21:37:54','2025-08-14 09:29:29',NULL,NULL),(140,6,7,'YAAAAHHOOOO',NULL,1,NULL,'2025-08-13 21:38:20','2025-08-14 09:28:53',NULL,NULL),(141,7,6,'Ang cute talaga ni grethel',NULL,1,NULL,'2025-08-13 21:38:35','2025-08-14 09:29:29',NULL,NULL),(142,6,7,'kaya nga, sobrang cute nya',NULL,1,NULL,'2025-08-13 21:38:44','2025-08-14 09:28:53',NULL,NULL),(143,7,6,'Approve',NULL,1,NULL,'2025-08-13 21:47:24','2025-08-14 09:29:29',NULL,NULL),(144,7,6,'Test',NULL,1,NULL,'2025-08-13 21:51:27','2025-08-14 09:29:29',NULL,NULL),(145,7,6,'HAAALOOO',NULL,1,NULL,'2025-08-13 21:51:34','2025-08-14 09:29:29',NULL,NULL),(146,7,6,'Test message 1',NULL,1,NULL,'2025-08-13 21:55:25','2025-08-14 09:29:29',NULL,NULL),(147,6,7,'Test Message 2',NULL,1,NULL,'2025-08-13 21:55:35','2025-08-14 09:28:53',NULL,NULL),(148,7,6,'Meron nang is_typing... and active status',NULL,1,NULL,'2025-08-13 21:55:53','2025-08-14 09:29:29',NULL,NULL),(149,7,6,'Test',NULL,1,NULL,'2025-08-14 09:41:04','2025-08-14 09:47:32',NULL,NULL),(150,7,6,'Hallooo',NULL,1,NULL,'2025-08-14 10:09:34','2025-08-16 06:29:14',NULL,NULL),(151,6,8,'Hello',NULL,1,NULL,'2025-08-16 01:56:36','2025-08-16 08:18:58',NULL,NULL),(152,6,8,'test 1',NULL,1,NULL,'2025-08-16 01:56:38','2025-08-16 08:18:58',NULL,NULL),(153,6,8,'Testing',NULL,1,NULL,'2025-08-16 01:56:41','2025-08-16 08:18:58',NULL,NULL),(154,6,8,'Test 1',NULL,1,NULL,'2025-08-16 02:00:57','2025-08-16 08:18:58',NULL,NULL),(155,6,8,'testing',NULL,1,NULL,'2025-08-16 02:07:36','2025-08-16 08:18:58',NULL,NULL),(156,7,6,'Zzup',NULL,1,NULL,'2025-08-16 08:18:33','2025-08-16 08:19:46',NULL,NULL),(157,8,6,'Hallo',NULL,0,NULL,'2025-08-16 08:19:02','2025-08-16 08:19:02',NULL,NULL),(158,5,6,'hey there',NULL,0,NULL,'2025-08-16 08:19:06','2025-08-16 08:19:06',NULL,NULL),(159,8,7,'Hey there',NULL,0,NULL,'2025-08-16 08:19:42','2025-08-16 08:19:42',NULL,NULL),(160,6,7,'Hello',NULL,1,NULL,'2025-08-16 08:19:53','2025-08-16 08:20:56',NULL,NULL),(161,6,7,'Yello',NULL,1,NULL,'2025-08-16 08:22:35','2025-08-16 08:23:54',NULL,NULL),(162,7,6,'Moshi',NULL,1,NULL,'2025-08-16 08:24:50','2025-08-16 08:28:52',NULL,NULL),(163,6,7,'Yoh',NULL,1,NULL,'2025-08-16 08:28:56','2025-08-16 08:30:27',NULL,NULL),(164,7,6,'Yello',NULL,1,NULL,'2025-08-16 08:30:32','2025-08-16 08:30:34',NULL,NULL),(165,7,6,'Moshi mosh',NULL,1,NULL,'2025-08-16 08:30:44','2025-08-16 08:37:47',NULL,NULL),(166,6,7,'Hello Hello',NULL,1,NULL,'2025-08-16 08:51:37','2025-08-16 09:24:13',NULL,NULL),(167,6,7,'test 1',NULL,1,NULL,'2025-08-16 08:51:40','2025-08-16 09:24:13',NULL,NULL),(168,6,7,'test 2',NULL,1,NULL,'2025-08-16 08:51:41','2025-08-16 09:24:13',NULL,NULL),(169,8,6,'Yello',NULL,0,NULL,'2025-08-16 09:23:51','2025-08-16 09:23:51',NULL,NULL),(170,6,7,'Yello',NULL,1,NULL,'2025-08-16 09:24:40','2025-08-16 09:24:41',NULL,NULL),(171,6,7,'YAAHOOOO',NULL,1,NULL,'2025-08-16 10:00:57','2025-08-16 10:00:57',NULL,NULL),(172,6,7,'Test',NULL,1,NULL,'2025-08-16 10:01:44','2025-08-16 10:01:44',NULL,NULL),(173,6,7,'test',NULL,1,NULL,'2025-08-16 10:01:53','2025-08-16 10:01:53',NULL,NULL),(174,6,7,'hey',NULL,1,NULL,'2025-08-16 10:02:05','2025-08-16 10:05:43',NULL,NULL),(175,7,6,'Hello',NULL,1,NULL,'2025-08-16 10:22:25','2025-08-16 10:23:19',NULL,NULL),(176,7,6,'look at me',NULL,1,NULL,'2025-08-16 10:22:34','2025-08-16 10:23:19',NULL,NULL),(177,7,6,'I was talking to you',NULL,1,NULL,'2025-08-16 10:22:38','2025-08-16 10:23:19',NULL,NULL),(178,7,6,'I AM talking to you',NULL,1,NULL,'2025-08-16 10:22:47','2025-08-16 10:23:19',NULL,NULL),(179,7,6,'seen my message',NULL,1,NULL,'2025-08-16 10:22:56','2025-08-16 10:23:19',NULL,NULL),(180,7,6,'testing 1',NULL,1,NULL,'2025-08-16 10:23:02','2025-08-16 10:23:19',NULL,NULL),(181,7,6,'testing 2',NULL,1,NULL,'2025-08-16 10:23:11','2025-08-16 10:23:19',NULL,NULL),(182,7,6,'test 1',NULL,1,NULL,'2025-08-16 10:27:24','2025-08-16 10:27:24',NULL,NULL),(183,6,7,'test 2',NULL,1,NULL,'2025-08-16 10:27:33','2025-08-16 10:27:33',NULL,NULL),(184,6,7,'test 2',NULL,1,NULL,'2025-08-16 10:27:41','2025-08-16 10:27:42',NULL,NULL),(185,7,6,'test 2',NULL,1,NULL,'2025-08-16 10:28:03','2025-08-16 10:28:04',NULL,NULL),(186,7,6,'Hello',NULL,1,NULL,'2025-08-16 10:28:39','2025-08-16 10:28:40',NULL,NULL),(187,7,6,'test',NULL,1,NULL,'2025-08-16 10:28:51','2025-08-16 10:28:51',NULL,NULL),(188,7,6,'test 1',NULL,1,NULL,'2025-08-16 10:31:50','2025-08-16 10:31:50',NULL,NULL),(189,7,6,'test 2',NULL,1,NULL,'2025-08-16 10:31:56','2025-08-16 10:31:56',NULL,NULL),(190,7,6,'test message 1',NULL,1,NULL,'2025-08-16 10:32:56','2025-08-16 10:32:56',NULL,NULL),(191,6,7,'test message 2',NULL,1,NULL,'2025-08-16 10:33:06','2025-08-16 10:33:07',NULL,NULL),(192,7,6,'Hello there',NULL,1,NULL,'2025-08-16 10:33:21','2025-08-16 10:34:01',NULL,NULL),(193,7,6,'seen',NULL,1,NULL,'2025-08-16 10:33:31','2025-08-16 10:34:01',NULL,NULL),(194,7,6,'meron na syang seen tag, latest message,  and count ng unread messages',NULL,1,NULL,'2025-08-16 10:33:54','2025-08-16 10:34:01',NULL,NULL);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_admin`
--

DROP TABLE IF EXISTS `user_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_admin` (
  `user_admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `profile_picture` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_admin`
--

LOCK TABLES `user_admin` WRITE;
/*!40000 ALTER TABLE `user_admin` DISABLE KEYS */;
INSERT INTO `user_admin` VALUES (6,'test5@gmail.com','$2y$10$j7ZUTH9rsLT91tp.Y427QeBbBDOK/lJ3jV9cD6gH/PFMVGlk4GBwq','test','5',NULL,NULL,'2025-08-09 09:20:18','2025-08-09 09:20:18',NULL),(7,'test6@gmail.com','$2y$10$6cCZw7d86HDmHasg4bxfSOAo.iRfJINtoTEABzbrdT9XkCwXNFYiC','Test','6',NULL,NULL,'2025-08-10 23:48:42','2025-08-10 23:48:42',NULL),(8,'test7@gmail.com','$2y$10$eivtL/H1Ev5OxgTGTi2r6uN2fxryEFmIn3PjywWjusdQdmbaGbtma','test','7',NULL,NULL,'2025-08-13 18:51:22','2025-08-13 18:51:22',NULL);
/*!40000 ALTER TABLE `user_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `vw_latest_messages`
--

DROP TABLE IF EXISTS `vw_latest_messages`;
/*!50001 DROP VIEW IF EXISTS `vw_latest_messages`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vw_latest_messages` AS SELECT 
 1 AS `messages_id`,
 1 AS `receiver`,
 1 AS `sender`,
 1 AS `message`,
 1 AS `files`,
 1 AS `is_seen`,
 1 AS `received`,
 1 AS `created_at`,
 1 AS `updated_at`,
 1 AS `deleted_sender`,
 1 AS `deleted_receiver`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vw_minutes_idle`
--

DROP TABLE IF EXISTS `vw_minutes_idle`;
/*!50001 DROP VIEW IF EXISTS `vw_minutes_idle`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vw_minutes_idle` AS SELECT 
 1 AS `login_details_id`,
 1 AS `user_admin_id`,
 1 AS `minutes_idle`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `vw_unread_messages`
--

DROP TABLE IF EXISTS `vw_unread_messages`;
/*!50001 DROP VIEW IF EXISTS `vw_unread_messages`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `vw_unread_messages` AS SELECT 
 1 AS `messages_id`,
 1 AS `receiver`,
 1 AS `sender`,
 1 AS `unread_messages`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `vw_latest_messages`
--

/*!50001 DROP VIEW IF EXISTS `vw_latest_messages`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_latest_messages` AS select `m`.`messages_id` AS `messages_id`,`m`.`receiver` AS `receiver`,`m`.`sender` AS `sender`,`m`.`message` AS `message`,`m`.`files` AS `files`,`m`.`is_seen` AS `is_seen`,`m`.`received` AS `received`,`m`.`created_at` AS `created_at`,`m`.`updated_at` AS `updated_at`,`m`.`deleted_sender` AS `deleted_sender`,`m`.`deleted_receiver` AS `deleted_receiver` from (`messages` `m` join (select `messages`.`sender` AS `sender`,`messages`.`receiver` AS `receiver`,max(`messages`.`messages_id`) AS `max_id` from `messages` group by `messages`.`sender`,`messages`.`receiver`) `latest` on(`m`.`messages_id` = `latest`.`max_id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_minutes_idle`
--

/*!50001 DROP VIEW IF EXISTS `vw_minutes_idle`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_minutes_idle` AS select `login_details`.`login_details_id` AS `login_details_id`,`login_details`.`user_admin_id` AS `user_admin_id`,floor(timestampdiff(SECOND,`login_details`.`last_activity`,current_timestamp()) / 60) AS `minutes_idle` from `login_details` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_unread_messages`
--

/*!50001 DROP VIEW IF EXISTS `vw_unread_messages`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_unread_messages` AS select `messages`.`messages_id` AS `messages_id`,`messages`.`receiver` AS `receiver`,`messages`.`sender` AS `sender`,count(`messages`.`is_seen`) AS `unread_messages` from `messages` where `messages`.`is_seen` = 0 group by `messages`.`sender`,`messages`.`receiver` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-08-16 18:35:23
