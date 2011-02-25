# Sequel Pro dump
# Version 2492
# http://code.google.com/p/sequel-pro
#
# Host: localhost (MySQL 5.1.50)
# Database: vocab
# Generation Time: 2010-09-21 04:01:00 +0200
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table vocab-exact_match_trainings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vocab-exact_match_trainings`;

CREATE TABLE `vocab-exact_match_trainings` (
  `id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table vocab-languages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vocab-languages`;

CREATE TABLE `vocab-languages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `country_code` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

LOCK TABLES `vocab-languages` WRITE;
/*!40000 ALTER TABLE `vocab-languages` DISABLE KEYS */;
INSERT INTO `vocab-languages` (`id`,`name`,`country_code`)
VALUES
	(1,'English','EN'),
	(2,'French','FR'),
	(3,'German','GE'),
	(4,'Spanish','SP'),
	(5,'Rusian','RU'),
	(6,'Thai','TH'),
	(7,'Polish','PL'),
	(8,'Italian','IT'),
	(9,'Arabic','AR'),
	(10,'Greek','GR'),
	(11,'Hebrew','HB'),
	(12,'Turkisk','TK');

/*!40000 ALTER TABLE `vocab-languages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table vocab-proposition_trainings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vocab-proposition_trainings`;

CREATE TABLE `vocab-proposition_trainings` (
  `id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table vocab-translations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vocab-translations`;

CREATE TABLE `vocab-translations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `base` varchar(255) NOT NULL,
  `translation` varchar(255) NOT NULL,
  `vocabulary_list_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;


# Dump of table vocab-vocabulary_lists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vocab-vocabulary_lists`;

CREATE TABLE `vocab-vocabulary_lists` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '',
  `description` varchar(1024) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `input_language_id` int(11) NOT NULL,
  `output_language_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
