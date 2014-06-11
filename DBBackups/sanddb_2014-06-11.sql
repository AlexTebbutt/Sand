# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.10)
# Database: sanddb
# Generation Time: 2014-06-11 10:04:55 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table clients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_code` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `main_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `importance` smallint(6) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;

INSERT INTO `clients` (`id`, `name`, `address`, `post_code`, `main_phone`, `importance`, `created_at`, `updated_at`)
VALUES
	(1,'Draft FCB','84 Eccleston Square,\nLondon,\nUK','SW1V 1PX','',10,'2014-04-03 12:45:02','2014-04-04 05:58:37'),
	(2,'Start JG','An Address,\nA street','SW87','',10,'2014-04-03 12:45:02','2014-04-04 05:58:27'),
	(3,'TBWA','76 - 80 Whitfield St.,London','','',10,'2014-04-03 12:45:02','2014-04-03 12:45:02'),
	(4,'Four23','Berry House, Berry Street','EC1V 0AA','',10,'2014-04-03 12:45:02','2014-04-03 12:45:02'),
	(5,'Coppafeel','','','',10,'2014-04-04 13:21:17','2014-04-04 13:21:17'),
	(6,'Jam','60 Great Portland Street,\nLondon','W1W 7RT','',10,'2014-04-04 13:22:21','2014-04-04 13:22:21'),
	(7,'Ibiza Rocks','','','',8,'2014-04-04 13:22:44','2014-04-04 13:22:44'),
	(8,'Sophie Edginton','','','',8,'2014-04-04 13:22:55','2014-04-04 13:22:55'),
	(9,'Breed','','','',7,'2014-04-04 13:23:06','2014-04-04 13:23:06'),
	(10,'Lima London','31 Rathbone Place\nLondon W1T 1JH\nRestaurant : 0203 002 2640\nHead Office: 0207 0258 008','W1T 1JH','0203 002 2640',7,'2014-04-04 13:23:20','2014-04-10 11:52:26'),
	(11,'S&H','','','',10,'2014-04-04 13:23:28','2014-04-04 13:23:28'),
	(12,'Causeway','','','',9,'2014-04-04 13:23:43','2014-04-04 13:23:43'),
	(13,'Leapfrog','','','',8,'2014-04-04 13:24:21','2014-04-04 13:24:21'),
	(14,'GPStudio','','','',9,'2014-04-04 13:24:40','2014-04-04 13:24:40'),
	(15,'Cue & Co','','','',NULL,'2014-04-04 13:25:02','2014-04-04 13:25:02'),
	(16,'Cavo Alkyoni','','','',NULL,'2014-04-04 13:25:22','2014-04-04 13:25:22'),
	(17,'RSBP','','','',NULL,'2014-04-04 13:25:32','2014-04-04 13:25:32'),
	(18,'Atticus Associates','','','',0,'2014-04-10 11:20:30','2014-04-10 11:20:30'),
	(19,'IOVOX','99c Talbot Road\nLondon, W11 2AT','','',0,'2014-04-10 11:20:40','2014-04-10 11:20:40'),
	(20,'Fox Collective','','','',0,'2014-04-12 09:13:11','2014-04-12 09:13:11'),
	(21,'INITIALS Marketing','','','020 7747 7400',0,'2014-04-17 12:34:01','2014-04-17 12:34:01'),
	(22,'Medway Council','Gun Wharf\r\nDock Road\r\nChatham\r\nKent ','ME4 4TR','01634 337083',9,'2014-04-30 07:18:21','2014-04-30 07:18:21'),
	(23,'Home Associates','Bellissimoto\r\n36 Raymouth Road\r\nLondon ','SE16 2DB','020 7183 3223',2,'2014-05-07 20:28:13','2014-05-07 20:28:13'),
	(24,'Not Known','','','',0,'2014-05-07 20:30:02','2014-05-07 20:30:02'),
	(25,'Achieve Events','','','',10,'2014-05-07 23:08:09','2014-05-07 23:08:09'),
	(26,'Northern Ireland Rare Disease Partnership (NIRDP)','6 Ava Crescent\r\nBelfast','BT7 3DU','',7,'2014-05-27 06:50:12','2014-05-27 06:50:12'),
	(27,'Colorido Studios Ltd','5th floor\r\n28 Throgmorten Street\r\nLondon','EC2N 2AN','',9,'2014-05-29 21:38:23','2014-05-29 21:38:23'),
	(28,'Ragdoll Productions','','','',10,'2014-06-10 14:01:05','2014-06-10 14:01:05');

/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Full Name',
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `main_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;

INSERT INTO `contacts` (`id`, `client_id`, `name`, `role`, `email`, `main_phone`, `mobile_phone`, `created_at`, `updated_at`)
VALUES
	(1,6,'Rob Kent','Senior Project Manager','Rob.Kent@spreadingjam.com','020 3128 6886','','2014-04-04 13:32:34','2014-04-04 13:32:34'),
	(2,6,'Seb Carder','','Sebastian.Carder@spreadingjam.com','','','2014-04-04 13:32:57','2014-04-04 13:37:35'),
	(3,3,'Natalie Lennon','Account Executive','natalie.lennon@tbwa.com','020 7573 6509','','2014-04-04 13:33:29','2014-04-04 13:37:41'),
	(4,3,'Olga Bortkevica','Account Manager','olga.bortkevica@tbwa.com','020 7573 6678','','2014-04-04 13:38:36','2014-04-04 13:38:36'),
	(5,8,'Sophie Edginton','CEO','svedginton@hotmail.com','','','2014-04-04 13:39:04','2014-04-04 13:39:04'),
	(6,4,'Sinead McCarthy','Digital Project Manager','sinead@four23.net','020 7253 7219','','2014-04-04 15:20:37','2014-04-04 15:20:37'),
	(7,5,'Maren Hallenga','CEO','maren@coppafeel.org','01872 519239','','2014-04-04 16:06:51','2014-04-04 16:06:51'),
	(8,9,'Olivia Triggs','','olivia@breedlondon.com','020 7269 0196','0777 599 2006','2014-04-04 18:22:20','2014-04-04 18:22:20'),
	(9,11,'Julian Wakely','Head of Interactive','Julian.Wakeley@sudler.com','','','2014-04-04 18:22:52','2014-04-04 18:22:52'),
	(10,12,'Garry Monaghan','CEO','garrypmonaghan@gmail.com','','','2014-04-04 18:23:22','2014-04-04 18:23:22'),
	(11,15,'Zena Bentzen','Account Manager','zena@cuedevelopments.co.uk','','','2014-04-10 10:58:29','2014-04-10 10:58:29'),
	(12,7,'Michael Fensom','Project Manager','michael.fensom@ibizarocks.com','','','2014-04-10 11:11:50','2014-04-10 11:11:50'),
	(13,13,'Ben Potter','Commercial Director','Ben.Potter@Leapfrogg.co.uk','','','2014-04-10 11:18:45','2014-04-10 11:18:45'),
	(14,13,'Anna Taylor','','Anna.Taylor@Leapfrogg.co.uk','','','2014-04-10 11:19:08','2014-04-10 11:19:08'),
	(15,14,'Chris Poulton','Director / Owner','Chris@gpstudio.uk.com','','','2014-04-10 11:22:13','2014-04-10 11:22:13'),
	(16,16,'Jo Hughes','','jo@skoposdesign.com','','','2014-04-10 11:22:43','2014-04-10 11:22:43'),
	(17,17,'Rachel Carless','','rachel.carless@rspb.org.uk','01273 763 374','','2014-04-10 11:23:14','2014-04-10 11:23:14'),
	(18,2,'Mark Moses','Senior Account Manager','mark.moses@startjg.com','020 7269 0101','07715 291997','2014-04-10 11:23:59','2014-04-10 11:23:59'),
	(19,19,'Ryan Gallagher','CEO','ryan@iovox.com','020 7099 1077','','2014-04-10 11:24:41','2014-04-10 11:24:41'),
	(20,18,'Debbie J Cole','','debbie.jcole@atticus-associates.com','','07786 802 790','2014-04-10 11:25:07','2014-04-10 11:25:07'),
	(21,10,'Justine Henry','Marketing Coordinator','justine@limalondon.com','0203 002 2640','','2014-04-10 11:51:53','2014-04-10 11:51:53'),
	(22,11,'Mark Gledhill','','mark.gledhill@sudler.com','','','2014-04-10 11:57:16','2014-04-10 11:57:16'),
	(23,1,'Vishal Raval','Project Manager','vishal.ravel@fcbinferno.com','','','2014-04-10 12:03:20','2014-04-10 12:03:20'),
	(24,2,'Tom Lowndes','Senior Producer','tom.lowndes@startjg.com','','','2014-04-10 12:07:45','2014-04-10 12:07:45'),
	(25,11,'Ruari Burgham','','ruari.burgham@sudler.com','','','2014-04-11 06:28:46','2014-04-18 12:50:56'),
	(26,20,'Tony Fox','','tony@unknown.com','','','2014-04-11 09:37:49','2014-04-11 09:37:49'),
	(27,21,'Initials Marketing Person','','info@initialsmarketing.co.uk','020 7747 7400','','2014-04-17 12:34:35','2014-04-17 12:34:35'),
	(28,22,'Lauren Gibson','','lauren.gibson@medway.gov.uk','01634 337083','','2014-04-30 07:18:40','2014-04-30 07:18:40'),
	(29,3,'Chloe Nicholson','Senior Dealer Marketing Consultant','chloe.nicholson@tbwa.com','020 7573 7197','','2014-05-07 07:25:15','2014-05-07 07:25:15'),
	(30,23,'Elisabetta Cirulli','Project Manager','elisabetta@home-associates.com','020 7183 3223','07749 142 295','2014-05-07 20:28:57','2014-05-07 20:28:57'),
	(31,24,'Not Known','','not@known.com','','','2014-05-07 20:30:17','2014-05-07 20:30:17'),
	(32,25,'Simon Kentish','','simon.kentish@achieveevents.com','','','2014-05-07 23:09:00','2014-05-07 23:09:00'),
	(33,3,'Rachel Patel','','rachel.patel@tbwa.com','','','2014-05-23 22:51:01','2014-05-23 22:51:01'),
	(34,26,'Tristan Collins','','tristan@mailforce.net','','','2014-05-27 06:50:46','2014-05-27 06:50:46'),
	(35,27,'Nicholas Morland','Owner','nick@coloridostudios.com','','07843 441831','2014-05-29 21:38:46','2014-05-29 21:39:16'),
	(36,28,'Chris Wood','Owner','chrisw@ragdoll.co.uk','','','2014-06-10 14:01:37','2014-06-10 14:01:37'),
	(37,1,'Chris Savioz','Digital Project Manager','Chris.Savioz@fcbinferno.com',' +44 (0)20 3048 0034','','2014-06-10 17:21:10','2014-06-10 17:21:10');

/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_02_25_190634_create_tasks_table',1),
	('2014_02_26_152948_create_users_table',1),
	('2014_03_01_132858_create_projects_table',1),
	('2014_03_31_155822_create_clients_table',1),
	('2014_03_31_160035_create_contacts_table',1),
	('2014_04_07_113214_create_projectphases_table',1),
	('2014_04_29_163208_create_paymentphases_table',1),
	('2014_02_25_190634_create_tasks_table',1),
	('2014_02_26_152948_create_users_table',1),
	('2014_03_01_132858_create_projects_table',1),
	('2014_03_31_155822_create_clients_table',1),
	('2014_03_31_160035_create_contacts_table',1),
	('2014_04_07_113214_create_projectphases_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table paymentphases
# ------------------------------------------------------------

DROP TABLE IF EXISTS `paymentphases`;

CREATE TABLE `paymentphases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `paymentphases` WRITE;
/*!40000 ALTER TABLE `paymentphases` DISABLE KEYS */;

INSERT INTO `paymentphases` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'Create Estimate','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,'Estimate Created','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(3,'Estimate Sent','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(4,'Estimate Signed Off','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(5,'Invoice Created','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(6,'Invoice Sent','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(7,'Invoice Paid','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `paymentphases` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projectnotes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projectnotes`;

CREATE TABLE `projectnotes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `projectnotes` WRITE;
/*!40000 ALTER TABLE `projectnotes` DISABLE KEYS */;

INSERT INTO `projectnotes` (`id`, `project_id`, `user_id`, `note`, `created_at`, `updated_at`)
VALUES
	(12,8,1,'Dinner Set Time Line:<br><br>Design: 4 days<br>- User Account<br>- Recipe list<br>- Team Landing<br>- Team / blogger profile<br>- Search results listing<br><br>Front end Templates: 20 days<br>- Home<br>- Join<br>- Get Started<br>- Blog Landing<br>- Blog Individual<br>- Create Event<br>- Create Event Success<br>- Plan It<br>- Recipe Landing<br>- Recipe list<br>- Recipe Individual<br>- View Event<br>- User Account<br>- Team Landing<br>- Team / blogger profile<br><br>Backend: 20 days<br>- Build recipe plugin<br>- Integrate templates<br>- Populate content<br><br>General: 1 day<br>- Set up stage environment<br>- Install / configure CMS<br>- Set up live environment<br>- Install / configure CMS<br>- Migrate data / files','2014-06-10 14:07:41','2014-06-10 14:07:41'),
	(13,15,1,'Previous estimate (912: https://diginutltd.freeagent.com/estimates/579083) updated, client required the holding page to be an actual CMS home page, updated estimate accordingly.','2014-06-10 14:08:07','2014-06-10 14:08:07'),
	(14,27,1,'We have added the interim fixes to the current site (new contact page and links) and we are in the process of putting together <br>the front end work at the same time as looking at how we will go about building the multi-language content structure in the back end.','2014-06-10 14:08:47','2014-06-10 14:08:47'),
	(15,27,1,'List of work<br>-----------------------<br>Header updates<br>- The logo and header are to be shrunk, effectively always showing the ‘compact view’<br>- Remove region & language options (these will be integrated into the main page)<br>- Cosmetic changes to the header and addition of ‘Contact Us’ to the main menu<br><br>Home page<br>- Addition of region filter. Content will filter based on the option selected. Default to ‘Global’ or All<br>- Addition of language option<br>- Redesign of above the fold content to show 6 tiles<br>	> Hero tile<br>	> Contact tile (this will change depending on region selected)<br>	> 4 additional content tiles<br>- Tag to be displayed on tiles (only 1 even if there are more per content item)<br><br>Contact Page<br>- New page to be built which will include<br>	> Office address<br>	> Map<br>	> Enquiry form<br>	> email address<br>	> Social media links (these are global, not per region)<br>- Each region has it’s own contact page, uses the same template<br><br>Case study / Detail Page<br>- Remove bread crumb, add tags instead.<br><br>Mobile view:<br>- Cosmetic amends to header<br>- Amends to design to include changed region / language filter / option<br>- Tags are not displayed on the content tiles<br><br>Back end<br>- Ability to be able to chose which content items feature in the top content block. This would be the hero image and then four further content items. Ideally they would like to be able to order them with the 1st item being the hero image / block.<br>- Addition of Alt tags to all images<br>','2014-06-10 14:08:59','2014-06-10 14:08:59'),
	(16,30,1,'We have been sent the remaining 5 designs for build and work flowing.','2014-06-10 14:09:50','2014-06-10 14:09:50'),
	(17,45,1,'Main reasons we didn\'t win the work (full letter from Medway is also in the Tenders Dropbox folder):<br><br>\"As such it will be useful for me to offer feedback in the respect of these two areas. In regards to Quality, the panel felt that you offered strong responses in a number of areas, however they felt there was lack of creative showcasing with regard to the wireframes and mock-ups for the Recreate sample site. We also felt that your timetable for creation of the site was too long to allow the site to deliver its outcomes before the project would come to an end. \"','2014-06-10 14:10:11','2014-06-10 14:10:11'),
	(18,31,1,'We didn\'t win the project (as suspected) but we were highly commended and the panel were very impressed with our pitch document. Reason stated for not winning was lack of experience in building cultural applications (also as suspected). Good learning curve as the document structure clearly works well.','2014-06-10 14:10:19','2014-06-10 14:10:19'),
	(19,56,1,'Training was approx. 1h 20min with 1hr 30m travelling time.','2014-06-10 14:12:12','2014-06-10 14:12:12'),
	(20,61,1,'Decision is with the board and they\'ll respond soon with next steps. Looking to have it completed by end of August.','2014-06-10 14:12:34','2014-06-10 14:12:34');

/*!40000 ALTER TABLE `projectnotes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projectphases
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projectphases`;

CREATE TABLE `projectphases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `projectphases` WRITE;
/*!40000 ALTER TABLE `projectphases` DISABLE KEYS */;

INSERT INTO `projectphases` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'Pipeline','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,'Estimate','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(3,'Scope','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(4,'Design','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(5,'Build','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(6,'UAT','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(7,'Support','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(8,'Complete','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(9,'On Hold','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(10,'Rejected','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `projectphases` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `golive_date` date DEFAULT NULL,
  `likelihood` int(11) DEFAULT NULL,
  `resource` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `projectphase_id` int(11) NOT NULL,
  `percentage_complete` int(11) NOT NULL DEFAULT '0',
  `estimate_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estimate_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invoice_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invoice_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paymentphase_id` int(11) NOT NULL DEFAULT '1',
  `value` decimal(9,2) DEFAULT NULL,
  `estimated_development_time` int(11) DEFAULT NULL,
  `actual_development_time` int(11) DEFAULT NULL,
  `completed_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `client_id`, `contact_id`, `name`, `start_date`, `due_date`, `golive_date`, `likelihood`, `resource`, `projectphase_id`, `percentage_complete`, `estimate_number`, `estimate_link`, `invoice_number`, `invoice_link`, `paymentphase_id`, `value`, `estimated_development_time`, `actual_development_time`, `completed_date`, `created_at`, `updated_at`)
VALUES
	(1,3,3,'Spring Check Email',NULL,NULL,NULL,NULL,'Simon (FE), Danny',8,100,'950','https://diginutltd.freeagent.com/projects/564563/invoices','950','https://diginutltd.freeagent.com/invoices/8595533',1,300.00,5,4,'2014-03-27','2014-04-10 10:44:40','2014-05-07 20:43:41'),
	(2,9,8,'March Newsletter',NULL,NULL,NULL,NULL,'Alex',8,0,'959','https://diginutltd.freeagent.com/invoices/8606567','959','https://diginutltd.freeagent.com/invoices/8606567',1,288.00,4,6,'2014-03-27','2014-04-10 10:55:11','2014-05-07 20:44:21'),
	(3,15,11,'Cue & Co CMS',NULL,NULL,NULL,NULL,NULL,8,100,'934','https://diginutltd.freeagent.com/invoices/8351403','934','https://diginutltd.freeagent.com/invoices/8351403',7,15500.00,NULL,NULL,'2014-03-21','2014-04-10 11:04:45','2014-05-29 02:07:17'),
	(4,5,7,'Coppafeel Post Launch Amends',NULL,NULL,NULL,NULL,'Alex (BE)',8,0,'946','https://diginutltd.freeagent.com/invoices/8542730','946','https://diginutltd.freeagent.com/invoices/8542730',7,777.60,12,8,'2014-03-24','2014-04-10 11:06:39','2014-06-06 04:22:32'),
	(5,3,4,'Nissan Trade Email April - x5',NULL,NULL,NULL,NULL,'Simon (BE), Danny',8,0,'880','https://diginutltd.freeagent.com/estimates/542398','951','https://diginutltd.freeagent.com/invoices/8595549',1,1740.00,29,29,'2014-03-31','2014-04-10 11:08:00','2014-05-07 20:46:42'),
	(7,7,12,'Ibiza Rocks',NULL,NULL,NULL,NULL,NULL,4,40,'811','https://diginutltd.freeagent.com/estimates/429175',NULL,NULL,1,22752.00,NULL,NULL,NULL,'2014-04-10 11:11:01','2014-05-01 23:34:56'),
	(8,8,5,'Dinner Set',NULL,NULL,NULL,NULL,'Anh (Design), Pete (FE), Simon (BE)',4,50,'815','https://diginutltd.freeagent.com/estimates/432782',NULL,NULL,1,20736.00,NULL,NULL,NULL,'2014-04-10 11:31:11','2014-05-31 00:16:29'),
	(9,14,15,'Centria',NULL,NULL,NULL,NULL,'Pete (FE), Simon (BE)',5,90,'851','https://diginutltd.freeagent.com/estimates/506997',NULL,NULL,1,8760.00,NULL,NULL,NULL,'2014-04-10 11:31:45','2014-05-01 23:34:31'),
	(10,3,4,'Nissan Trade Campaign (May to September) Emails x 3 - Brake pads & discs',NULL,'2014-04-23','2014-04-23',100,'Simon (BE), Danny',7,95,'881','https://diginutltd.freeagent.com/estimates/542407',NULL,NULL,1,379.99,2,2,'2014-04-28','2014-04-10 11:32:25','2014-04-30 23:49:52'),
	(11,3,4,'Nissan eNewsletter',NULL,NULL,NULL,NULL,'Simon (BE), Danny',8,95,'863','https://diginutltd.freeagent.com/estimates/527431','952','https://diginutltd.freeagent.com/invoices/8595593',1,480.00,3,10,'2014-04-28','2014-04-10 11:33:05','2014-05-20 20:07:06'),
	(12,12,10,'Causeway Finance Web App',NULL,NULL,NULL,NULL,'Pete (FE), Julian (BE)',5,80,'787','https://diginutltd.freeagent.com/estimates/400375',NULL,NULL,1,11088.00,NULL,NULL,NULL,'2014-04-10 11:35:00','2014-05-30 23:35:35'),
	(13,11,9,'Imbruvica iRep App',NULL,'2014-05-20',NULL,NULL,'Simon (BE), Pete (FE)',4,90,'850','https://diginutltd.freeagent.com/estimates/506635',NULL,NULL,1,20952.00,NULL,NULL,NULL,'2014-04-10 11:36:01','2014-05-20 20:08:49'),
	(14,6,1,'Samsung SSD',NULL,NULL,NULL,10,NULL,10,0,NULL,NULL,NULL,NULL,0,23148.00,NULL,NULL,NULL,'2014-04-10 11:38:28','2014-04-30 07:20:55'),
	(15,10,21,'Lima London Multiple Website Redevelopment',NULL,NULL,NULL,100,'Simon (BE)',3,85,'920','https://diginutltd.freeagent.com/estimates/595410',NULL,NULL,1,5472.00,44,NULL,NULL,'2014-04-10 11:53:27','2014-06-06 04:19:38'),
	(17,11,22,'Siltuximab - Castleman Disease','2014-04-30',NULL,NULL,100,'Simon',7,90,'876','https://diginutltd.freeagent.com/estimates/536500','998','https://diginutltd.freeagent.com/invoices/9112982',6,6048.00,NULL,NULL,NULL,'2014-04-10 11:57:53','2014-05-31 00:14:51'),
	(18,11,22,'Siltuximab - Sylvant','2014-04-30',NULL,NULL,100,'Simon (BE)',7,90,'875','https://diginutltd.freeagent.com/estimates/536496','999','https://diginutltd.freeagent.com/invoices/9113037',6,6048.00,NULL,NULL,NULL,'2014-04-10 11:58:09','2014-05-31 00:02:27'),
	(19,11,22,'Siltuximab 3',NULL,NULL,NULL,NULL,NULL,1,0,NULL,NULL,NULL,NULL,0,6912.00,NULL,NULL,NULL,'2014-04-10 11:58:34','2014-04-10 11:58:34'),
	(20,11,22,'Siltuximab 4',NULL,NULL,NULL,NULL,NULL,1,0,NULL,NULL,NULL,NULL,0,3744.00,NULL,NULL,NULL,'2014-04-10 11:58:56','2014-04-10 11:58:56'),
	(22,11,22,'Imbruvica 2',NULL,NULL,NULL,NULL,NULL,1,0,NULL,NULL,NULL,NULL,0,8064.00,NULL,NULL,NULL,'2014-04-10 11:59:55','2014-04-10 11:59:55'),
	(23,4,6,'Virgin Money Extramile YouTube',NULL,NULL,NULL,100,'Pete (FE), Julian (BE)',8,100,'888','https://diginutltd.freeagent.com/estimates/549127','969','https://diginutltd.freeagent.com/invoices/8853840',1,6336.00,40,NULL,'2014-05-16','2014-04-10 12:01:10','2014-05-07 20:48:16'),
	(24,1,23,'Sky Bundle App',NULL,NULL,NULL,50,NULL,9,0,NULL,NULL,NULL,NULL,1,29376.00,NULL,NULL,NULL,'2014-04-10 12:04:41','2014-05-29 22:09:40'),
	(25,12,10,'Hosting',NULL,NULL,NULL,50,NULL,1,0,NULL,NULL,NULL,NULL,0,1822.80,NULL,NULL,NULL,'2014-04-10 12:05:22','2014-04-10 12:05:22'),
	(26,13,14,'Wordpress Update',NULL,NULL,NULL,50,NULL,1,0,NULL,NULL,NULL,NULL,0,2484.00,NULL,NULL,NULL,'2014-04-10 12:06:12','2014-04-10 12:06:12'),
	(27,2,24,'Start JG Phase II Updates',NULL,NULL,NULL,75,NULL,5,20,'900','https://diginutltd.freeagent.com/estimates/562618',NULL,NULL,1,10994.00,NULL,NULL,NULL,'2014-04-10 12:06:45','2014-05-21 02:12:26'),
	(28,16,16,'Cavo Alkyoni Website',NULL,NULL,NULL,NULL,NULL,1,0,NULL,NULL,NULL,NULL,0,1890.00,NULL,NULL,NULL,'2014-04-10 12:08:30','2014-04-10 12:08:30'),
	(29,5,7,'Coppafeel SMS sign up updates',NULL,NULL,NULL,50,NULL,1,0,'884','https://diginutltd.freeagent.com/estimates/545725',NULL,NULL,1,712.80,NULL,NULL,NULL,'2014-04-11 06:24:22','2014-06-05 23:37:47'),
	(30,3,3,'Nissan FPS HTML Emails',NULL,'2014-05-05','2014-05-08',100,NULL,8,100,'921','https://diginutltd.freeagent.com/estimates/602838','987','https://diginutltd.freeagent.com/invoices/9041177',6,2460.00,45,NULL,NULL,'2014-04-11 06:26:24','2014-05-23 19:57:18'),
	(31,17,17,'Mobile Website & App',NULL,NULL,NULL,NULL,NULL,10,0,'915','https://diginutltd.freeagent.com/estimates/580869',NULL,NULL,1,53280.00,NULL,NULL,NULL,'2014-04-11 06:26:56','2014-05-07 07:40:41'),
	(32,2,18,'Adidas CRP Site amends',NULL,NULL,NULL,50,NULL,1,0,'919','https://diginutltd.freeagent.com/estimates/595406',NULL,NULL,1,1584.00,NULL,NULL,NULL,'2014-04-11 06:27:38','2014-05-16 01:54:55'),
	(33,11,25,'Vfend iRep Detail Aid',NULL,NULL,NULL,60,NULL,1,0,NULL,NULL,NULL,NULL,0,8400.00,160,NULL,NULL,'2014-04-11 06:28:03','2014-04-11 06:30:46'),
	(34,19,19,'IOVOX Reseller Platform',NULL,NULL,NULL,50,'Pete (FE), Simon (BE), Anh',3,0,'898','https://diginutltd.freeagent.com/estimates/559220',NULL,NULL,0,13176.00,160,NULL,NULL,'2014-04-11 06:29:23','2014-04-24 11:09:27'),
	(35,18,20,'Interim Design Refresh',NULL,NULL,NULL,NULL,NULL,1,0,NULL,NULL,NULL,NULL,0,5472.00,NULL,NULL,NULL,'2014-04-11 06:29:53','2014-04-11 06:29:53'),
	(36,20,26,'Brand App',NULL,NULL,NULL,NULL,NULL,1,0,NULL,NULL,NULL,NULL,0,10000.00,NULL,NULL,NULL,'2014-04-11 09:38:45','2014-04-18 12:13:22'),
	(38,1,23,'Golden Toaster Newsletter Form',NULL,NULL,NULL,NULL,NULL,1,0,NULL,NULL,NULL,NULL,0,1008.00,NULL,NULL,NULL,'2014-04-17 12:32:55','2014-04-17 12:32:55'),
	(39,21,27,'Facebook / Twitter Sharing Tool ',NULL,NULL,NULL,NULL,NULL,10,0,NULL,NULL,NULL,NULL,1,3168.00,NULL,NULL,NULL,'2014-04-17 12:33:29','2014-05-27 06:58:44'),
	(40,5,7,'Coppafeel Shop Page Update',NULL,'2014-04-02','2014-05-02',50,'Simon (BE)',8,100,'905','https://diginutltd.freeagent.com/estimates/571582','973','https://diginutltd.freeagent.com/invoices/8854102',7,842.40,15,6,'2014-04-28','2014-04-23 06:52:42','2014-05-07 20:48:59'),
	(41,3,4,'Nissan Trade Campaign (May to September) Emails x 3 - Remanufactured Exchange Parts',NULL,NULL,NULL,100,'Simon (BE), Danny',8,100,'907','https://diginutltd.freeagent.com/estimates/571628',NULL,NULL,4,379.99,3,NULL,NULL,'2014-04-23 08:04:04','2014-05-19 22:37:12'),
	(42,3,4,'Nissan Trade Campaign (May to September) Emails x 3 - Mechanical Parts',NULL,NULL,NULL,90,'Simon (BE), Danny',5,0,'906','https://diginutltd.freeagent.com/estimates/571625',NULL,NULL,1,379.99,NULL,NULL,NULL,'2014-04-23 08:04:59','2014-06-03 21:52:57'),
	(44,11,25,'Ecalta iRep Detail Aid',NULL,NULL,NULL,50,'Simon (BE)',1,0,'903','https://diginutltd.freeagent.com/estimates/563695',NULL,NULL,0,10080.00,100,NULL,NULL,'2014-04-29 18:25:55','2014-04-29 18:25:55'),
	(45,22,28,'Microsite & Social Platform',NULL,NULL,NULL,25,'Anh, Simon, Alex',10,0,'909','https://diginutltd.freeagent.com/estimates/577296',NULL,NULL,1,34464.00,320,NULL,NULL,'2014-04-30 07:20:28','2014-05-29 22:11:53'),
	(46,9,8,'Breed Content Updates 2014 Q2',NULL,NULL,'2014-04-29',100,'Alex',8,100,'904','https://diginutltd.freeagent.com/estimates/567684','972','https://diginutltd.freeagent.com/invoices/8854080',6,168.00,NULL,2,'2014-04-28','2014-04-30 03:46:05','2014-05-07 20:49:29'),
	(50,3,3,'Nissan Contract Hire (May 2014)','2014-05-06','2014-05-23',NULL,100,'Danny',5,75,'916','https://diginutltd.freeagent.com/estimates/582252','997','https://diginutltd.freeagent.com/invoices/9112750',6,720.00,8,NULL,NULL,'2014-05-02 20:13:44','2014-05-30 23:34:29'),
	(52,3,29,'X-Trail Email (April 2014)','2014-05-07',NULL,'2014-05-09',90,'Danny',8,50,'914','https://diginutltd.freeagent.com/estimates/579873','996','https://diginutltd.freeagent.com/invoices/9112729',6,480.00,8,NULL,NULL,'2014-05-07 07:23:58','2014-05-30 23:30:41'),
	(53,23,30,'GFSI Website Migration',NULL,NULL,NULL,100,'Danny / Alex',8,90,'917','https://diginutltd.freeagent.com/estimates/586428','994','https://diginutltd.freeagent.com/invoices/9112449',4,180.00,3,NULL,'2014-05-13','2014-05-07 20:27:17','2014-05-30 23:23:36'),
	(54,25,32,'Pru Vitality (Phase 1)',NULL,NULL,'2014-05-21',100,'Anh (Design), Danny (FE/BE)',8,100,'913','https://diginutltd.freeagent.com/estimates/579365','971/992','https://diginutltd.freeagent.com/projects/606898/invoices',6,14496.00,NULL,NULL,'2014-05-20','2014-05-07 20:30:49','2014-06-09 17:44:33'),
	(56,23,30,'Home Associates CMS Training','2014-05-06','2014-05-06','2014-05-06',NULL,'Alex',8,100,'927','https://diginutltd.freeagent.com/estimates/611346','993','https://diginutltd.freeagent.com/invoices/9112307',3,216.00,NULL,NULL,'2014-05-06','2014-05-15 00:48:03','2014-05-30 23:14:10'),
	(57,11,22,'Imbruvica iRep App - UK & Extras',NULL,NULL,NULL,NULL,'Simon, Alex',7,100,'918','https://diginutltd.freeagent.com/estimates/588370','991','https://diginutltd.freeagent.com/invoices/9099413',3,3816.00,NULL,NULL,NULL,'2014-05-15 00:52:55','2014-06-10 14:40:54'),
	(58,3,4,'New emails for Olga',NULL,NULL,NULL,25,'Danny',1,0,NULL,NULL,NULL,NULL,1,1350.00,27,NULL,NULL,'2014-05-19 22:21:10','2014-05-19 22:38:02'),
	(60,20,26,'Responsive Ecommerce Website',NULL,NULL,NULL,50,'Simon, Alex',1,0,'922','https://diginutltd.freeagent.com/estimates/606956',NULL,NULL,3,11232.00,120,NULL,NULL,'2014-05-27 06:28:47','2014-05-27 06:28:47'),
	(61,26,34,'NIRDP WordPress Theme',NULL,NULL,NULL,25,'Anh, Simon, Alex',1,0,'923','https://diginutltd.freeagent.com/estimates/606976',NULL,NULL,3,6624.00,40,NULL,NULL,'2014-05-27 06:52:37','2014-06-03 21:34:15'),
	(62,3,29,'Nissan Leaf Email (May 2014)',NULL,NULL,'2014-05-30',100,'Danny',8,100,'924','https://diginutltd.freeagent.com/estimates/607388','995','https://diginutltd.freeagent.com/invoices/9112618',6,420.00,NULL,NULL,'2014-05-30','2014-05-27 19:01:33','2014-06-09 17:39:48'),
	(63,27,35,'Child Poverty Action Group New Website',NULL,NULL,NULL,50,'Simon, Alex',1,0,'925','https://diginutltd.freeagent.com/estimates/610837',NULL,NULL,3,30528.00,300,NULL,NULL,'2014-05-29 21:40:40','2014-05-29 21:40:40'),
	(64,3,3,'Nissan Juke Email (June 2014)',NULL,NULL,NULL,50,NULL,1,0,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,'2014-06-06 01:00:06','2014-06-06 01:00:06'),
	(66,28,36,'Games & Digital Content',NULL,NULL,NULL,50,'Anh, Simon, Alex',1,0,NULL,NULL,NULL,NULL,3,70000.00,NULL,NULL,NULL,'2014-06-10 14:03:15','2014-06-10 14:03:15'),
	(67,1,37,'Low Emissions Vehicles site amends (June 2014)',NULL,NULL,NULL,50,'Simon',1,0,'928','https://diginutltd.freeagent.com/estimates/626451',NULL,NULL,2,NULL,NULL,NULL,NULL,'2014-06-10 17:22:17','2014-06-10 17:22:17'),
	(68,9,8,'testing',NULL,NULL,NULL,NULL,'asdfasdf',1,0,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,'2014-06-10 14:18:40','2014-06-10 14:18:40');

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'Super Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,'Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(3,'Editor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(4,'Viewer','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tasks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `user_id` int(11) NOT NULL,
  `due_date` datetime DEFAULT NULL,
  `complete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `tasks_title_index` (`title`),
  KEY `tasks_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;

INSERT INTO `tasks` (`id`, `title`, `note`, `user_id`, `due_date`, `complete`, `created_at`, `updated_at`)
VALUES
	(8,'Add \'Complete Task\' functionality','Style check box next to task\r\nUse AJAX to complete a task once the box is checked\r\nUse AJAX to reload tasks',1,NULL,0,'2014-05-01 08:53:05','2014-05-01 08:53:05'),
	(12,'Build a user show page','Display all current users. Link through to edit a specific user. Super admins only should have access to this.',1,NULL,0,'2014-05-09 22:38:26','2014-05-09 22:40:13'),
	(14,'Build \'Create a new user\' page','',1,NULL,0,'2014-05-09 22:39:52','2014-05-09 22:40:02'),
	(15,'Build a Roles management page','',1,NULL,0,'2014-05-09 22:40:26','2014-05-09 22:40:26');

/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '5',
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `last_login`, `enabled`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Alex','alex.tebbutt@digi-nut.co.uk','$2y$10$hGbLQZ1JGN2nab9te61pfeJ2aCalDVjbhhmHDin09RobFAPYfqwNe',1,'2014-06-06 13:02:02',1,'oN5MgND3miAfjze7tciiOJV6XsokkmHn1eBBaMFU3jrPy9xQ416MlcwUvCIn','2014-04-29 16:42:40','2014-06-06 17:02:02'),
	(3,'Danny','danny.bull@digi-nut.co.uk','$2y$10$/Ct.2JjsQ8YQCVFg3Krd5Of6Ah/GOdY3boQG7wugTtfPpF1qq0YOy',1,'0000-00-00 00:00:00',1,'','2014-04-29 16:42:40','2014-04-29 16:42:40');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
