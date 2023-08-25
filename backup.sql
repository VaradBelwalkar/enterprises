-- MariaDB dump 10.19  Distrib 10.11.4-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: atlas_schema
-- ------------------------------------------------------
-- Server version	10.11.4-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `auth`
--

DROP TABLE IF EXISTS `auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth` (
  `username` text DEFAULT NULL,
  `userpass` text DEFAULT NULL,
  `email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth`
--

LOCK TABLES `auth` WRITE;
/*!40000 ALTER TABLE `auth` DISABLE KEYS */;
INSERT INTO `auth` VALUES
('temp','$2y$10$BGdKMQbGUdhvuAPbvkjHLO7F9pw4lYojmNlqNGQU7IKmpFrsOrP/O','timo@gmail.com'),
('limo','$2y$10$op733GVObfqIdSGMahuRMuOzs3IGUPHxbLaGCMskaKMmroFV7oDqC','timo@gmail.com');
/*!40000 ALTER TABLE `auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ch_en`
--

DROP TABLE IF EXISTS `ch_en`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ch_en` (
  `Company` text DEFAULT NULL,
  `Product` text DEFAULT NULL,
  `prd_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ch_en`
--

LOCK TABLES `ch_en` WRITE;
/*!40000 ALTER TABLE `ch_en` DISABLE KEYS */;
INSERT INTO `ch_en` VALUES
('Frigerifico Allana Private Limited','Sunny Oil','sunny_oil'),
('RSPL LTD','Ghadi Washing Powder','ghadi_powder'),
('Tata Chemicals Ltd','Tata Salt','tata_salt'),
('Shivani Detergents Pvt. Ltd.','SARGAM SOAP','sargam_soap'),
('WIPRO ENTERPRISES (P) LTD.','Santoor','santoor'),
('ADANI WILMAR LTD','Fortune','fortune'),
('DABUR INDIA LTD','Babool Toothpaste','babool_paste'),
('NESTLE INDIA LTD','Maggi','maggi'),
('Gujarat Tea Processors and Packers Limited','WAG BAKARI Tea','wag_bakri'),
('Godrej Consumer Products Limited','GODREJ NO 1 soap','godrej1_soap'),
('ITC India Ltd.','Chocolate & Home Product','itc_choco'),
('Marico India Ltd','Parachute Hair Oil','parachute_oil'),
('Hasmukhrai & Company','SOCIETY Tea','society_tea'),
('Mondelēz International, Inc.','CADBURY Chocolate','cadbury'),
('Tirumalla Oil Refinery Pvt. Ltd.','TIRUMALLA OIL','tirumala_oil'),
('VIBHAVA MARKETING CORPORATION','555 Zadu & Ozone',NULL),
('Cholayil Private Limited','MEDIMIX Soap','medimix_soap'),
('3M India Ltd','Scotch Brite','scotch_brite'),
('Ferrero India Pvt. Ltd','Kinder Joy Chocolate & Nutella','kinder_joy'),
('Johnson & Johnson','Baby Powder & Personal Care Product','baby_powder'),
('Tata Consumer Products Limited','TATA TEA','tata_tea');
/*!40000 ALTER TABLE `ch_en` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metainfo`
--

DROP TABLE IF EXISTS `metainfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metainfo` (
  `s1` varchar(20) DEFAULT NULL,
  `s2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metainfo`
--

LOCK TABLES `metainfo` WRITE;
/*!40000 ALTER TABLE `metainfo` DISABLE KEYS */;
INSERT INTO `metainfo` VALUES
('p_msg','SOME MESSAGE TO SHOW HERE'),
('principle','SOME MESSAGE TO SHOW HERE'),
('location','SOME MESSAGE TO SHOW HERE'),
('phone','59827983756'),
('email','somemail@gmail.com');
/*!40000 ALTER TABLE `metainfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `client` text DEFAULT NULL,
  `prd_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES
('limo','tata_salt'),
('temp','tata_salt'),
('temp','wag_bakri');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `prd_name` text DEFAULT NULL,
  `img_path` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `dsrp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES
('sunny_oil','sunny_oil.jpg',140,4,'Well refined sunflower oil from Sunny Oils limited'),
('medimix_soap','medimix_soap.jpg',40,3,'Herbal Soap made from real Herbs and natural extracts'),
('ghadi_powder','ghadi_powder.jpg',90,5,'Popular Ghadi Detergent Powder'),
('santoor','santoor.jpg',25,4,'Santoor Soap single'),
('tata_salt','tata_salt.jpg',45,5,'Tata Namak'),
('babool_paste','babool_paste.jpg',70,4,'Dabur Babool Paste, 100g'),
('maggi','maggi.jpg',15,4,'Maggi Noodles'),
('wag_bakri','wag_bakri.jpg',75,4,'Wagh Bakri Tea 200g'),
('godrej1_soap','godrej1_soap.jpg',34,4,'Godrej No. 1 Soap'),
('parachute_oil','parachute_oil.jpg',40,5,'Parachute Coconut Oil'),
('society_tea','society_tea.jpg',80,4,'Society Tea, 250g'),
('cadbury','cadbury.jpg',150,4,'Cadbury, pack of 3'),
('tirumala_oil','tirumala_oil.jpg',160,5,'Tirumala Cooking Oil'),
('scotch_brite','scotch_brite.jpg',20,4,'Scotch Brite Scrub'),
('tata_tea','tata_tea.jpg',70,5,'Tata Tea'),
('baby_powder','baby_powder.jpg',145,5,'Johnson\'s Baby powder, 150g'),
('kinder_joy','kinder_joy.jpg',40,5,'Kinder Joy'),
('sargam_soap','sargam_soap.jpg',20,4,'Sargam Soap'),
('itc_choco','itc_choco.jpg',100,4,'Various ITC products Available'),
('fortune','fortune.jpg',180,5,'Fortune Cooking Oil');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ss_en`
--

DROP TABLE IF EXISTS `ss_en`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ss_en` (
  `Company` text DEFAULT NULL,
  `Product` text DEFAULT NULL,
  `prd_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ss_en`
--

LOCK TABLES `ss_en` WRITE;
/*!40000 ALTER TABLE `ss_en` DISABLE KEYS */;
INSERT INTO `ss_en` VALUES
('DABUR INDIA LTD','Babool Toothpaste','babool_paste'),
('Ferrero India Pvt. Ltd','Kinder Joy Chocolate & Nutella','kinder_joy'),
('Johnson & Johnson','Baby Powder & Personal Care Product','baby_powder'),
('Gujarat Tea Processors and Packers Limited.','WAG BAKARI Tea','medimix_soap'),
('Cholayil Private Limited','MEDIMIX Soap','medimix_soap');
/*!40000 ALTER TABLE `ss_en` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-25  9:03:19
