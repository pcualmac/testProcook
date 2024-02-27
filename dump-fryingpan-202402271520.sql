-- MariaDB dump 10.19  Distrib 10.6.5-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: fryingpan
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sku` int(11) DEFAULT NULL,
  `product_name` varchar(64) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `point_1` varchar(128) DEFAULT NULL,
  `point_2` varchar(256) DEFAULT NULL,
  `point_3` varchar(256) DEFAULT NULL,
  `image` varchar(8) DEFAULT NULL,
  `colour` varchar(8) DEFAULT NULL,
  `material` varchar(32) DEFAULT NULL,
  `range` varchar(32) DEFAULT NULL,
  `size` varchar(4) DEFAULT NULL,
  `type` varchar(32) DEFAULT NULL,
  `overn_safe` tinyint(1) DEFAULT NULL,
  `dishwasher_safe` tinyint(1) DEFAULT NULL,
  `wash_by_hand` tinyint(1) DEFAULT NULL,
  `guarantee_period` int(11) DEFAULT NULL,
  `proce` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,7215,'Elite Tri-Ply Frying Pan',1916,'30cm frying pan featuring seamless 3mm tri-ply construction for ultimate performance','Cutting edge design engineered for optimised induction cooking with safe rivetless CoolTouch handle and helper handle','Uncoated 18/10 stainless steel interior that can handle high heat and lasts a lifetime','7215_C','Silver','Stainless Steel Uncoated','Elite Tri-ply','30cm','Frying Pans, Skillets',1,1,0,25,79,395),(2,7718,'Professional Stainless Steel Frying Pan',2050,'30cm Uncoated frying pan','Uncoated stainless steel interior with CoolTouch handles','Professional spec heavy duty 18/10 stainless steel construction with 7mm impact bonded base for perfect even heat distribution','7718_1','Silver','Stainless Steel Uncoated','Professional Stainless Steel','30cm','Frying Pans, Skillets',1,1,1,25,49,2300),(3,8726,'Professional Anodised Frying Pan',1170,'28cm Frying pan','Forged, anodised aluminium body for strength and durability offering amazing heat distribution and energy efficient cooking with CoolTouch handles','Features premium 5 star ProCook Ultra Plus triple layer PFOA free non-stick coating','8726_2','Grey','Aluminium Non-Stick','Professional Anodised','28cm','Frying Pans, Skillets',1,1,0,25,40,1196),(4,9326,'ProCook Soho Cookware Frying Pan',1092,'Soho 24cm frying pan','Finished in a deep blue and perfectly sized for your everyday frying needs','Designed to transform your kitchen into a modern and inviting space','9326_C','Blue','Aluminium Ceramic Non-Stick','Soho','24cm','Frying Pans',1,0,1,10,29,717),(5,9328,'ProCook Soho Cookware Frying Pan',1092,'Soho 24cm frying pan','Finished in a gorgeous green and perfectly sized for your everyday frying needs','Designed to transform your kitchen into a modern and inviting space','9328_C','Green','Aluminium Ceramic Non-Stick','Soho','24cm','Frying Pans',1,0,1,10,29,772),(6,9330,'ProCook Soho Cookware Frying Pan',1092,'Soho 24cm frying pan','Finished in a stylish coral and perfectly sized for your everyday frying needs','Designed to transform your kitchen into a modern and inviting space','9330_C','Silver','Aluminium Ceramic Non-Stick','Soho','24cm','Frying Pans',1,0,1,10,29,938),(7,9332,'ProCook Soho Cookware Frying Pan',1092,'Soho 24cm frying pan','Finished in a luxurious cream and perfectly sized for your everyday frying needs','Designed to transform your kitchen into a modern and inviting space','9332_C','Cream','Aluminium Ceramic Non-Stick','Soho','24cm','Frying Pans',1,0,1,10,29,443),(8,9355,'Gourmet Non-Stick Frying Pan',990,'Perfect for all of your everyday frying tasks','5 Star non-stick ceramic coating releases food quickly and easily','Stay-cool handles ensure safer handling on the hob','7675_C','Black','Aluminium Ceramic Non-Stick','Gourmet Non-Stick','24cm','Frying Pans',1,0,1,10,19,3095),(9,9373,'Gourmet Stainless Steel Frying Pan',1463,'28cm Stainless steel frying pan','Uncoated stainless steel interior with stay-cool handles for easy handling on the hob','Made from 18/10 stainless steel for even heat distribution and great cooking results','9373_C1','Silver','Stainless Steel','Gourmet Stainless Steel','28cm','Frying Pans',1,1,0,10,24,805),(10,9396,'Professional Stainless Steel Frying Pan',2045,'30cm Frying pan','5 Star Plus non-stick ceramic coating releases food quickly and easily','Professional spec heavy duty 18/10 stainless steel construction with 7mm impact bonded base for perfect even heat distribution with CoolTouch handles','7717_1','Silver','Stainless Steel','Professional Stainless Steel','30cm','Frying Pans',1,0,1,25,54,476);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-27 15:20:19
