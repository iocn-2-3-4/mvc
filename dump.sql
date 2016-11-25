-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mvccms
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Category1','category1',5,0),(2,'Category2','category2',5,0),(3,'Category3','category3',2,0),(4,'Category4','category4',0,0),(5,'Category5','category5',0,0),(8,'Category6','category6',3,0),(14,'Category7','category7',14,0),(15,'Category8','category8',14,0),(16,'Category9','category9',2,0),(18,'Category10','category10',3,0);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `summ` varchar(255) NOT NULL,
  `order_content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (80,1338545364,'asd','','123','werweqr','123','a:1:{i:72;a:2:{s:5:\\\"price\\\";s:3:\\\"123\\\";s:5:\\\"count\\\";i:1;}}'),(81,1338979545,'Марк','','123','123','500','a:1:{i:58;a:2:{s:5:\\\"price\\\";s:3:\\\"500\\\";s:5:\\\"count\\\";i:1;}}');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,4,'product1','product description','500','product1','default_product.jpg','code'),(2,5,'product2','product description','679','product2','default_product.jpg','code'),(3,5,'product3','product description','800','product3','default_product.jpg','code'),(4,3,'product4','product description','1200','product4','default_product.jpg','code'),(5,5,'product5','product description','22300','product5','default_product.jpg','code'),(6,1,'product6','product description','9900','product6','default_product.jpg','code'),(7,4,'product7','product description','160','product7','default_product.jpg','code'),(8,4,'product8','product description','160','product7','default_product.jpg','code'),(9,4,'product9','product description','160','product7','default_product.jpg','code'),(10,4,'product10','product description','160','product7','default_product.jpg','code'),(11,4,'product11','product description','160','product7','default_product.jpg','code'),(12,4,'product12','product description','160','product7','default_product.jpg','code'),(13,4,'product13','product description','160','product7','default_product.jpg','code'),(14,4,'product14','product description','160','product7','default_product.jpg','code'),(15,4,'product15','product description','160','product7','default_product.jpg','code'),(16,4,'product16','product description','160','product7','default_product.jpg','code'),(17,4,'product17','product description','160','product7','default_product.jpg','code'),(18,4,'product18','product description','160','product7','default_product.jpg','code'),(19,4,'product19','product description','160','product7','default_product.jpg','code'),(20,4,'product20','product description','160','product7','default_product.jpg','code'),(21,4,'product21','product description','160','product7','default_product.jpg','code'),(22,4,'product22','product description','160','product7','default_product.jpg','code'),(23,4,'product23','product description','160','product7','default_product.jpg','code'),(24,4,'product24','product description','160','product7','default_product.jpg','code'),(25,4,'product25','product description','160','product7','default_product.jpg','code'),(26,4,'product26','product description','160','product7','default_product.jpg','code'),(27,4,'product27','product description','347','product8','default_product.jpg','code');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','1',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-25 21:05:36
