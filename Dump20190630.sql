-- MySQL dump 10.17  Distrib 10.3.16-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: os
-- ------------------------------------------------------
-- Server version	10.3.16-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Aldin Setiawan','admin','1sampai8'),(2,'Irfan','user','1');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `advance`
--

DROP TABLE IF EXISTS `advance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advance` (
  `id` int(11) NOT NULL,
  `distro` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advance`
--

LOCK TABLES `advance` WRITE;
/*!40000 ALTER TABLE `advance` DISABLE KEYS */;
INSERT INTO `advance` VALUES (1,'Xubuntu'),(2,'Lubuntu'),(3,'Ubuntu-Studio'),(4,'Debian'),(5,'Kali'),(6,'Arch'),(7,'Manjaro'),(8,'Fedora'),(9,'Parrot'),(10,'Tails'),(11,'OpenSUSE'),(12,'Android-x86'),(13,'Solus'),(14,'CentOs'),(15,'Tails');
/*!40000 ALTER TABLE `advance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beginner`
--

DROP TABLE IF EXISTS `beginner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beginner` (
  `id` int(11) NOT NULL,
  `distro` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beginner`
--

LOCK TABLES `beginner` WRITE;
/*!40000 ALTER TABLE `beginner` DISABLE KEYS */;
INSERT INTO `beginner` VALUES (1,'Ubuntu'),(2,'Kubuntu'),(3,'Ubuntu-Mate'),(4,'Ubuntu-Budgie'),(5,'Deepin'),(6,'Zorin'),(7,'Mint'),(8,'MX'),(9,'Elementary'),(10,'Lubuntu'),(11,'Xubuntu'),(12,'Debian'),(13,'Manjaro'),(14,'Pop-OS!'),(15,'OpenSUSE'),(16,'Endless-OS'),(17,'Android-x86'),(18,'Solus'),(19,'BlankOn'),(20,'Ubuntu-Studio'),(21,'Tails'),(22,'Pop!-OS');
/*!40000 ALTER TABLE `beginner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consumable`
--

DROP TABLE IF EXISTS `consumable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consumable` (
  `id` int(11) NOT NULL,
  `distro` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consumable`
--

LOCK TABLES `consumable` WRITE;
/*!40000 ALTER TABLE `consumable` DISABLE KEYS */;
INSERT INTO `consumable` VALUES (1,'Ubuntu'),(2,'Xubuntu'),(3,'Lubuntu'),(4,'Debian'),(5,'Arch'),(6,'Manjaro'),(7,'MX'),(8,'Gentoo'),(9,'LFS'),(10,'Kubuntu'),(11,'Zorin'),(12,'Mint'),(13,'Elementary'),(14,'DracOs');
/*!40000 ALTER TABLE `consumable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expert`
--

DROP TABLE IF EXISTS `expert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expert` (
  `id` int(11) NOT NULL,
  `distro` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expert`
--

LOCK TABLES `expert` WRITE;
/*!40000 ALTER TABLE `expert` DISABLE KEYS */;
INSERT INTO `expert` VALUES (1,'Gentoo'),(2,'LFS'),(3,'DracOs'),(4,'BackBox'),(5,'Ubuntu-Studio'),(6,'Debian'),(7,'Kali'),(8,'Arch'),(9,'Fedora'),(10,'Parrot'),(11,'Tails');
/*!40000 ALTER TABLE `expert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `friendly`
--

DROP TABLE IF EXISTS `friendly`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friendly` (
  `id` int(11) NOT NULL,
  `distro` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friendly`
--

LOCK TABLES `friendly` WRITE;
/*!40000 ALTER TABLE `friendly` DISABLE KEYS */;
INSERT INTO `friendly` VALUES (1,'Ubuntu'),(2,'Xubuntu'),(3,'Kubuntu'),(4,'Ubuntu-Mate'),(5,'Ubuntu-Budgie'),(6,'Deepin'),(7,'Zorin'),(8,'Mint'),(9,'Manjaro'),(10,'MX'),(11,'Elementary'),(12,'Tails'),(13,'Pop!-OS'),(14,'OpenSUSE'),(15,'Endless-OS'),(16,'Android-x86'),(17,'BackBox'),(18,'Solus'),(19,'BlankOn'),(20,'CentOS'),(21,'Ubuntu-Studio'),(22,'Debian');
/*!40000 ALTER TABLE `friendly` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `high`
--

DROP TABLE IF EXISTS `high`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `high` (
  `id` int(11) NOT NULL,
  `distro` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `high`
--

LOCK TABLES `high` WRITE;
/*!40000 ALTER TABLE `high` DISABLE KEYS */;
INSERT INTO `high` VALUES (1,'Ubuntu'),(2,'Ubuntu-Studio'),(3,'Deepin'),(4,'Kali'),(5,'Fedora'),(6,'Pop!-OS'),(7,'Endless-OS'),(8,'CentOS'),(9,'Ubuntu-Mate'),(10,'Ubuntu-Budgie'),(11,'Debian'),(12,'Arch'),(13,'Tails'),(14,'OpenSUSE'),(15,'Ubuntu-Studio');
/*!40000 ALTER TABLE `high` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `low`
--

DROP TABLE IF EXISTS `low`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `low` (
  `id` int(11) NOT NULL,
  `distro` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `low`
--

LOCK TABLES `low` WRITE;
/*!40000 ALTER TABLE `low` DISABLE KEYS */;
INSERT INTO `low` VALUES (1,'Xubuntu'),(2,'Lubuntu'),(3,'Kubuntu'),(4,'Mint'),(5,'Arch'),(6,'Manjaro'),(7,'MX'),(8,'Gentoo'),(9,'LFS'),(10,'Kali'),(11,'Elementary'),(12,'Fedora'),(16,'Parrot'),(17,'OpenSUSE'),(18,'Endless-Os'),(19,'Android-x86'),(20,'BackBox'),(21,'BlankOn'),(22,'DracOs');
/*!40000 ALTER TABLE `low` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `main`
--

DROP TABLE IF EXISTS `main`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `distro` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `versi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `main`
--

LOCK TABLES `main` WRITE;
/*!40000 ALTER TABLE `main` DISABLE KEYS */;
INSERT INTO `main` VALUES (1,'Ubuntu','Active','Debian-Like/Debian-Base','Apt','19.04 Disco Dingo','https://ubuntu.com/download/desktop'),(2,'Xubuntu','Active','Debian-Like/Debian-Base','Apt','19.04 Disco Dingo','https://xubuntu.org/download'),(3,'Lubuntu','Active','Debian-Like/Debian-Base','Apt','19.04 Disco Dingo','https://lubuntu.net/downloads'),(4,'Kubuntu','Active','Debian-Like/Debian-Base','Apt','19.04 Disco Dingo','https://kubuntu.org/getkubuntu/'),(5,'Ubuntu-Mate','Active','Debian-Like/Debian-Base','Apt','19.04 Disco Dingo','https://ubuntu-mate.org/download/'),(6,'Ubuntu-Budgie','Active','Debian-Like/Debian-Base','Apt','19.04 Disco Dingo','https://ubuntubudgie.org/downloads'),(7,'Ubuntu-Studio','Active','Debian-Like/Debian-Base','Apt','19.04 Disco Dingo','https://ubuntustudio.org/download/'),(8,'Debian','Active','Debian-Like/Debian-Base','Apt','9 Stretch','https://www.debian.org/CD/http-ftp/'),(9,'Deepin','Active','Debian-Like/Debian-Base','Apt','15.1','https://www.deepin.org/pb/download/'),(10,'Kali','Active','Debian-Like/Debian-Base','Apt','Rolling Release','https://www.kali.org/downloads/'),(11,'Zorin','Active','Debian-Like/Debian-Base','Apt','15','https://zorinos.com/download/'),(12,'Mint','Active','Debian-Like/Debian-Base','Apt','19.1 Tessa','https://linuxmint.com/download.php'),(13,'Arch','Active','Independent/Arch-Base','Pacman','Rolling Release','https://www.archlinux.org/download/'),(14,'Manjaro','Active','Arch-Like/Arch-Base','Pacman','Rolling Release','https://manjaro.org/download/'),(15,'MX','Active','Debian-Like/Debian-Base','Apt','MX-18.3','https://mxlinux.org/download-links#Mirrors'),(16,'Elementary','Active','Debian-Like/Debian-Base','Apt','5.0 Juno','https://elementary.io/'),(17,'Fedora','Active','Independent/Rhel-Base','Dnf','30','https://getfedora.org/en/workstation/download/'),(18,'Parrot','Active','Debian-Like/Debian-Base','Apt','Rolling Release','https://www.parrotsec.org/download.php'),(19,'Gentoo','Active','Independent','Portage','Rolling Release','http://www.gentoo.org/main/en/mirrors.xml'),(20,'LFS','Active','Independent','-','Rolling Release','http://www.linuxfromscratch.org/lfs/download.html'),(21,'Tails','Active','Debian-Like/Debian-Base','Apt','8.3','https://tails.boum.org/download'),(22,'Pop!-OS','Active','Debian-Like/Debian-Base','Apt','19.04','https://system76.com/pop'),(23,'OpenSUSE','Active','Independent','Zypper','15.1 LEAP','http://software.opensuse.org/'),(24,'Endless-OS','Active','Debian-Like/Debian-Base','Apt','3.6.0','https://endlessm.com/download/'),(25,'Android-x86','Active','Android-Like/Android-Base','-','8.1 Oreo','http://www.android-x86.org/download'),(26,'BackBox','Active','Debian-Like/Debian-Base','Apt','5','http://www.backbox.org/downloads'),(27,'Solus','Active','Independent','Eopkg','4','https://getsol.us/download/'),(28,'BlankOn','Active','Debian-Like/Debian-Base','Apt','XI ULUWATU','https://www.blankonlinux.or.id/#UNDUH'),(29,'DracOs','Active','Independent/LFS-Base','Pacman','4.0 Santet','https://dracos-linux.org/downloads.php'),(30,'CentOS','Active','Independent/Rhel-Base','Yum','7','http://www.centos.org/download/');
/*!40000 ALTER TABLE `main` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medium`
--

DROP TABLE IF EXISTS `medium`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medium` (
  `id` int(11) NOT NULL,
  `distro` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medium`
--

LOCK TABLES `medium` WRITE;
/*!40000 ALTER TABLE `medium` DISABLE KEYS */;
INSERT INTO `medium` VALUES (1,'Ubuntu-Mate'),(2,'Ubuntu-Budgie'),(3,'Debian'),(4,'Zorin'),(5,'Elementary'),(6,'Parrot'),(7,'Tails'),(8,'OpenSUSE'),(9,'Android-x86'),(10,'Solus'),(11,'Ubuntu'),(12,'Xubuntu'),(13,'Lubuntu'),(14,'Kubuntu'),(15,'Ubuntu-Studio'),(16,'Kali'),(17,'Mint'),(18,'Arch'),(19,'Manjaro'),(20,'MX'),(21,'Pop-OS'),(22,'BackBox'),(23,'BlankOn'),(24,'Parrot');
/*!40000 ALTER TABLE `medium` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `powerful`
--

DROP TABLE IF EXISTS `powerful`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `powerful` (
  `id` int(11) NOT NULL,
  `distro` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `powerful`
--

LOCK TABLES `powerful` WRITE;
/*!40000 ALTER TABLE `powerful` DISABLE KEYS */;
INSERT INTO `powerful` VALUES (1,'Ubuntu-Studio'),(2,'Kali'),(3,'Parrot'),(4,'BackBox');
/*!40000 ALTER TABLE `powerful` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `secure`
--

DROP TABLE IF EXISTS `secure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `secure` (
  `id` int(11) NOT NULL,
  `distro` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secure`
--

LOCK TABLES `secure` WRITE;
/*!40000 ALTER TABLE `secure` DISABLE KEYS */;
INSERT INTO `secure` VALUES (1,'Deepin'),(2,'Kali'),(3,'Mint'),(4,'Arch'),(5,'Fedora'),(6,'Parrot'),(7,'Gentoo'),(8,'Tails'),(9,'OpenSUSE'),(10,'Android-x86'),(11,'BackBox'),(12,'Solus'),(13,'DracOs'),(14,'CentOS'),(15,'Manjaro'),(16,'LFS');
/*!40000 ALTER TABLE `secure` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-30  2:21:19
