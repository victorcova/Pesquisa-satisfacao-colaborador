/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.35-81.0-log : Database - tb_pesquisa
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tb_pesquisa` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci */;

USE `tb_pesquisa`;

/*Table structure for table `tb_login` */

DROP TABLE IF EXISTS `tb_login`;

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `passw` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `ativo` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*Data for the table `tb_login` */

insert  into `tb_login`(`id`,`user`,`passw`,`ativo`) values (1,'admin','123456',1);

/*Table structure for table `tb_resultados` */

DROP TABLE IF EXISTS `tb_resultados`;

CREATE TABLE `tb_resultados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mensagem` mediumtext COLLATE latin1_general_ci NOT NULL,
  `data_hora` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '00/00/0000 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
