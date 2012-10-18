/*
SQLyog Ultimate v9.20 
MySQL - 5.5.16 : Database - ptiiktube
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ptiiktube` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ptiiktube`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id_category` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `category` */

/*Table structure for table `channel_comment` */

DROP TABLE IF EXISTS `channel_comment`;

CREATE TABLE `channel_comment` (
  `id_comment` varchar(255) NOT NULL,
  `content` mediumtext,
  `date` varchar(255) DEFAULT NULL,
  `username_p` varchar(255) DEFAULT NULL,
  `username_a` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `channel_comment` */

/*Table structure for table `favorites` */

DROP TABLE IF EXISTS `favorites`;

CREATE TABLE `favorites` (
  `username` varchar(255) DEFAULT NULL,
  `id_video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `favorites` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `birth_date` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `avatar_url` varchar(255) DEFAULT NULL,
  `join_date` varchar(255) DEFAULT NULL,
  `total_login` varchar(255) DEFAULT NULL,
  `total_user_view` varchar(255) DEFAULT NULL,
  `total_video_view` varchar(255) DEFAULT NULL,
  `history` varchar(255) DEFAULT NULL,
  `active` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*Table structure for table `video` */

DROP TABLE IF EXISTS `video`;

CREATE TABLE `video` (
  `id_video` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `allow_comment` varchar(255) DEFAULT NULL,
  `allow_rate` varchar(255) DEFAULT NULL,
  `like` int(10) DEFAULT NULL,
  `dislike` int(10) DEFAULT NULL,
  `active` int(10) DEFAULT NULL,
  `id_category` varchar(255) DEFAULT NULL,
  `total_view` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `video` */

/*Table structure for table `video_comment` */

DROP TABLE IF EXISTS `video_comment`;

CREATE TABLE `video_comment` (
  `id_comment` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `id_video` varchar(255) DEFAULT NULL,
  `like` varchar(255) DEFAULT NULL,
  `dislike` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `video_comment` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
