/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.18-MariaDB : Database - fila
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fila` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `fila`;

/*Table structure for table `kacamata` */

DROP TABLE IF EXISTS `kacamata`;

CREATE TABLE `kacamata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtrx` char(5) DEFAULT NULL,
  `barang` varchar(250) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `no_telp` char(13) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `kacamata` */

insert  into `kacamata`(`id`,`idtrx`,`barang`,`harga`,`no_telp`,`email`,`alamat`) values 
(10,'2327','Kacamata',170000,'082177794294','korwilpkhlampung@yahoo.co.id','Raden Intan, Lampung'),
(11,'22223','Kacamata Minusss',841242,'0','arifshop6545@gmail.com','lampung');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
