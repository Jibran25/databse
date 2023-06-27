/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.24-MariaDB : Database - php_jun_sep_2k22
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`php_jun_sep_2k22` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `php_jun_sep_2k22`;

/*Table structure for table `departments` */

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(20) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `departments` */

insert  into `departments`(`dept_id`,`dept_name`) values 
(1,'PHP'),
(2,'JAVA'),
(3,'PYTHON'),
(4,'HTML');

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `employee_id` int(12) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `middle_name` char(20) DEFAULT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` enum('Male','Female') DEFAULT 'Male',
  `salary` int(14) NOT NULL,
  `status` enum('Active','InActive') DEFAULT 'Active',
  `dept_id` int(11) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

/*Data for the table `employees` */

insert  into `employees`(`employee_id`,`first_name`,`middle_name`,`last_name`,`gender`,`salary`,`status`,`dept_id`,`manager_id`) values 
(1,'Asad',NULL,'Shaikh','Male',25000,'Active',3,3),
(2,'Ahsan Ali',NULL,'Khan','Male',190000,'InActive',1,NULL),
(3,'Haider',NULL,'Khan','Male',24000,'Active',3,6),
(5,'Haris',NULL,'Shaikh','Male',27000,'InActive',1,3),
(6,'Ahsan','Ali','Soomro','Male',890000,'Active',4,NULL),
(25,'Imtiaz','khan','Buriro','Male',60000,'Active',2,2);

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(25) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `items` */

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `FK_items_orders` (`item_id`),
  CONSTRAINT `FK_items_orders` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `orders` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
