/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.0.51b-community-nt-log : Database - sunat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sunat` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sunat`;

/*Table structure for table `tributos` */

DROP TABLE IF EXISTS `tributos`;

CREATE TABLE `tributos` (
  `id_tributo` int(10) unsigned NOT NULL auto_increment,
  `tipo_tributo` int(11) default NULL,
  `ruc` char(11) default NULL,
  `periodo_tributo` date default NULL,
  `resolucion_tributo` varchar(20) default NULL,
  `codigo_tributo` int(11) default NULL,
  `importe_tributo` decimal(10,0) default NULL,
  PRIMARY KEY  (`id_tributo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tributos` */

insert  into `tributos`(`id_tributo`,`tipo_tributo`,`ruc`,`periodo_tributo`,`resolucion_tributo`,`codigo_tributo`,`importe_tributo`) values (1,1,'20516755416','2013-09-05','0230170512704',8030,'486'),(2,2,'20516755416','2013-10-04','0230170512704',8030,'486'),(3,2,'20516755416','2013-10-05','0230170512704',8030,'486');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
