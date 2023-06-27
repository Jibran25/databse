/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.24-MariaDB : Database - blog_management_system
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog_management_system` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `blog_management_system`;

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_by_user_id` int(11) DEFAULT NULL,
  `post_title` varchar(200) DEFAULT NULL,
  `post_description` longtext DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`post_id`),
  KEY `post_by_user_id` (`post_by_user_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`post_by_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `posts` */

insert  into `posts`(`post_id`,`post_by_user_id`,`post_title`,`post_description`,`is_active`) values 
(1,1,'Post 1','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',1),
(2,1,'Post 2','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',1),
(3,1,'Post 3','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',1),
(4,1,'Post 4','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',1),
(5,1,'Post 5','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',1);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_type` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `roles` */

insert  into `roles`(`role_id`,`role_type`,`is_active`) values 
(1,'Admin',1),
(2,'Author',1),
(3,'User',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `full_name` varchar(200) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `gender` varchar(15) DEFAULT 'Male',
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`user_id`,`role_id`,`full_name`,`user_email`,`user_password`,`gender`,`is_active`) values 
(1,1,'Hidaya','admin@gmail.com','12345','Male',NULL),
(2,2,'Ahmed','author@gmail.com','12345','Male',NULL),
(3,3,'Nazir','user@gmail.com','12345','Male',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
