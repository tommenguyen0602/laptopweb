-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: laptops
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `productId` int NOT NULL AUTO_INCREMENT,
  `productName` varchar(500) NOT NULL,
  `productBrand` varchar(50) NOT NULL DEFAULT 'Asus',
  `productCPU` varchar(500) NOT NULL DEFAULT 'Intel',
  `productRam` varchar(500) NOT NULL DEFAULT '8GB',
  `productImage` varchar(500) NOT NULL,
  `productPrice` int NOT NULL DEFAULT '30000000',
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (4,'Laptop Acer Gaming Nitro 5 Tiger AN515-58-52SP','Acer ','Intel Core i5 12500H','8GB','https://hanoicomputercdn.com/media/product/63453_laptop_acer_gaming_nitro_5_tiger_13.jpeg',25000000),(5,'Laptop Asus Gaming TUF FX517ZC-HN079W','Asus','Intel','8GB','https://hanoicomputercdn.com/media/product/64858_laptop_asus_gaming_tuf_fx517zc_5.png',30000000),(6,'Laptop Asus Gaming TUF FX507ZE-HN093W','Asus','Intel','8GB','https://hanoicomputercdn.com/media/product/66954_hacom_asus_gaming_tuf_fx507zc_126.png',30000000),(8,'Laptop Asus Gaming ROG Strix G513IH-HN015W ','Asus','Intel','8GB','https://hanoicomputercdn.com/media/product/63683_asus_gaming_rog_strix_g513_20.jpeg',30000000),(9,'Laptop Asus VivoBook A1403ZA-LY072W','Asus','Intel','8GB','https://hanoicomputercdn.com/media/product/67103_a1403_a1503_silver.jpg',30000000),(10,'Laptop Asus VivoBook F415EA-UB34','Asus','Intel','8GB','https://hanoicomputercdn.com/media/product/68151_laptop_asus_vivobook_f415ea_4.png',30000000),(11,'Laptop Asus ZenBook UP5401ZA-KN101W','Asus','Intel','8GB','https://hanoicomputercdn.com/media/product/66934_hacom_asus_zenbook_up5401za_7.png',30000000),(12,'Laptop Asus Vivobook Pro 14X OLED M7400QC-KM013W','Asus','Intel','8GB','https://hanoicomputercdn.com/media/product/62576_laptop_asus_vivobook_m7400qc_18.jpg',30000000),(13,'Laptop Asus Gaming ROG Strix G513RC-HN038W','Asus','Intel','8GB','https://hanoicomputercdn.com/media/product/64020_laptop_asus_gaming_rog_strix_g513rc_10.jpg',30000000),(14,'Laptop Asus Gaming Zephyrus Flow GV301RC-LJ050W','Asus','Intel','8GB','https://hanoicomputercdn.com/media/product/65409_laptop_asus_gaming_zephyrus_flow_gv301rc_7.png',30000000),(15,'Laptop Asus X1502ZA-BQ127W','Asus','Intel','8GB','https://hanoicomputercdn.com/media/product/66526_hacom_asus_x1502za_bq127w_win_11_xanh7.png',30000000),(16,'Laptop Asus Gaming Zephyrus Duo GX650RX-LO156W','Asus','Intel','8GB','https://hanoicomputercdn.com/media/product/66310_66311_hacom_asus_gaming_zephyrus_duo_gx650rw_12.png',30000000);
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

-- Dump completed on 2022-11-27 18:41:58
