/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.21-MariaDB : Database - cosc_project
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cosc_project` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cosc_project`;

/*Table structure for table `cities` */

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `City` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Province` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `cities` */

insert  into `cities`(`Id`,`City`,`Province`) values (1,'Bancroft',1),(2,'Barrie',1),(3,'Belleville',1),(4,'Brampton',1),(5,'Brantford',1),(6,'Brockville',1),(7,'Burlington',1),(8,'Cambridge',1),(9,'Toronto',1),(10,'Asbestos',2),(11,'Baie-Comeau',2),(12,'Beloeil',2),(13,'Quebec',2),(14,'Baddeck',3),(15,'Digby',3),(16,'Glace Bay',3),(17,'Halifax',3),(18,'Liverpool',3);

/*Table structure for table `personaldetails` */

DROP TABLE IF EXISTS `personaldetails`;

CREATE TABLE `personaldetails` (
  `Username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Birthdate` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phonenumber` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Firstname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lastname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Province` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `City` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Note` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `personaldetails` */

/*Table structure for table `provinces` */

DROP TABLE IF EXISTS `provinces`;

CREATE TABLE `provinces` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Province` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `provinces` */

insert  into `provinces`(`Id`,`Province`) values (1,'Ontario'),(2,'Quebec'),(3,'Nova Scotia'),(4,'New Brunswick'),(5,'Manitoba'),(6,'British Columbia'),(7,'Prince Edward Island'),(8,'Saskatchewan'),(9,'Alberta'),(10,'Newfoundland and Labrador');

/*Table structure for table `staff_manager` */

DROP TABLE IF EXISTS `staff_manager`;

CREATE TABLE `staff_manager` (
  `StaffId` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ManagerID` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `staff_manager` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `Username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UserType` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`Username`,`Password`,`Email`,`UserType`) values ('admin','$2y$10$ocXXV18wqxfrwc1zKSZp/.xupAnzChluI/o3hZoTs5DKxiEK2L2MS','admin@gmail.com','admin'),('manager1','$2y$10$zIMwyIY/FQagNcRCqKJofOwNfKkcFq9uV1K8UPfC5Mbko8yZhTEw.','manager1@gmail.com','manager'),('test1','$2y$10$hR..0kW/0eXmFdKA2UdxvuF60Me379/sb.cxsB5b8BKzPYfpUPVgi','test1@gmail.com','staff');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
