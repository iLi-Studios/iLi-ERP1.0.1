-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 18 Novembre 2015 à 10:39
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ili_erp`
--

-- --------------------------------------------------------

--
-- Structure de la table `system_log`
--

CREATE TABLE IF NOT EXISTS `system_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(8) NOT NULL,
  `date_operation` varchar(100) COLLATE utf8_bin NOT NULL,
  `operation` varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=71 ;

--
-- Contenu de la table `system_log`
--

INSERT INTO `system_log` (`id`, `id_user`, `date_operation`, `operation`) VALUES
(1, 8088718, '11-11-2015 10:27:29', 'Suppression de privilége <strong>MODIFIER</strong> sur le bloc <strong>USERS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a>'),
(2, 8088718, '11-11-2015 10:27:31', 'Suppression de privilége <strong>VOIR</strong> sur le bloc <strong>USERS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a>'),
(3, 8088718, '11-11-2015 10:33:46', 'Utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a> a été <strong>banni</strong>'),
(4, 8088718, '11-11-2015 10:33:47', 'Utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a> a été <strong>débanni</strong>'),
(5, 9188047, '11-11-2015 10:36:45', 'Ajout du diplôme : test, pour l''utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a>'),
(6, 8088718, '11-11-2015 10:37:22', 'Utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a> a été <strong>banni</strong>'),
(7, 8088718, '11-11-2015 10:37:24', 'Utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a> a été <strong>débanni</strong>'),
(8, 8088718, '11-11-2015 10:38:57', 'Ajout de privilége <strong>CREER</strong> sur le bloc <strong>USERS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a>'),
(9, 9188047, '11-11-2015 11:43:13', 'Connexion'),
(10, 8088718, '11-11-2015 16:09:53', 'Déconnexion'),
(11, 8088718, '11-11-2015 16:10:46', 'Connexion'),
(12, 8088718, '11-11-2015 16:10:55', 'Déconnexion'),
(13, 9188047, '11-11-2015 16:11:00', 'Connexion'),
(14, 9188047, '11-11-2015 16:25:09', 'Déconnexion'),
(15, 8088718, '11-11-2015 16:25:14', 'Connexion'),
(16, 9188047, '11-11-2015 16:28:08', 'Connexion'),
(17, 8088718, '11-11-2015 22:56:24', 'Connexion'),
(18, 8088718, '11-11-2015 23:13:57', 'Déconnexion'),
(19, 9188047, '11-11-2015 23:14:04', 'Connexion'),
(20, 8088718, '12-11-2015 13:33:22', 'Connexion'),
(21, 9188047, '12-11-2015 13:33:37', 'Connexion'),
(22, 9188047, '12-11-2015 15:24:04', 'Déconnexion'),
(23, 9188047, '12-11-2015 15:27:49', 'Connexion'),
(24, 9188047, '12-11-2015 15:40:05', 'Connexion'),
(25, 8088718, '13-11-2015 11:07:42', 'Connexion'),
(26, 8088718, '13-11-2015 11:08:37', 'Utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a> a été <strong>banni</strong>'),
(27, 8088718, '13-11-2015 13:07:29', 'Connexion'),
(28, 8088718, '13-11-2015 13:08:19', 'Utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a> a été <strong>débanni</strong>'),
(29, 9188047, '13-11-2015 13:08:25', 'Connexion'),
(30, 9188047, '13-11-2015 13:12:42', 'Connexion'),
(31, 8088718, '13-11-2015 13:29:59', 'Utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a> a été <strong>banni</strong>'),
(32, 8088718, '13-11-2015 13:32:54', 'Connexion'),
(33, 8088718, '13-11-2015 13:33:05', 'Déconnexion'),
(34, 8088718, '15-11-2015 18:15:25', 'Connexion'),
(35, 8088718, '15-11-2015 18:15:55', 'Utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a> a été <strong>débanni</strong>'),
(36, 8088718, '15-11-2015 18:16:53', 'Création de l''utilisateur : <a href="ili-users/user_profil?id=10000071">10000071</a>'),
(37, 8088718, '15-11-2015 18:17:05', 'Suppression de l''utilisateur avec CIN=10000071'),
(38, 8088718, '15-11-2015 20:16:30', 'Connexion'),
(39, 8088718, '16-11-2015 10:32:11', 'Connexion'),
(40, 8088718, '16-11-2015 11:16:01', 'Utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a> a été <strong>banni</strong>'),
(41, 8088718, '16-11-2015 11:20:57', 'Utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a> a été <strong>débanni</strong>'),
(42, 9188047, '16-11-2015 11:21:07', 'Connexion'),
(43, 8088718, '16-11-2015 16:21:23', 'Déconnexion'),
(44, 8088718, '16-11-2015 16:27:44', 'Connexion'),
(45, 8088718, '16-11-2015 21:05:36', 'Connexion'),
(46, 9188047, '16-11-2015 21:05:57', 'Connexion'),
(47, 9188047, '16-11-2015 23:02:22', 'Connexion'),
(48, 8088718, '16-11-2015 23:02:36', 'Déconnexion'),
(49, 8088718, '16-11-2015 23:02:44', 'Connexion'),
(50, 8088718, '17-11-2015 10:19:36', 'Connexion'),
(51, 9188047, '17-11-2015 10:19:52', 'Connexion'),
(52, 8088718, '17-11-2015 10:23:09', 'Déconnexion'),
(53, 9188047, '17-11-2015 10:23:22', 'Connexion'),
(54, 9188047, '17-11-2015 10:23:27', 'Déconnexion'),
(55, 8088718, '17-11-2015 10:23:31', 'Connexion'),
(56, 8088718, '17-11-2015 11:11:44', 'Connexion'),
(57, 8088718, '17-11-2015 11:13:05', 'Connexion'),
(58, 9188047, '17-11-2015 11:14:49', 'Connexion'),
(59, 8088718, '17-11-2015 11:22:10', 'Connexion'),
(60, 8088718, '17-11-2015 12:16:30', 'Connexion'),
(61, 8088718, '17-11-2015 12:16:59', 'Déconnexion'),
(62, 9188047, '17-11-2015 12:17:05', 'Connexion'),
(63, 8088718, '17-11-2015 16:38:43', 'Déconnexion'),
(64, 8088718, '17-11-2015 16:39:03', 'Connexion'),
(65, 8088718, '17-11-2015 19:23:04', 'Connexion'),
(66, 9188047, '17-11-2015 19:26:14', 'Connexion'),
(67, 8088718, '18-11-2015 09:57:11', 'Connexion'),
(68, 9188047, '18-11-2015 09:59:33', 'Connexion'),
(69, 8088718, '18-11-2015 10:02:35', 'Ajout de privilége <strong>SUPPRIMER</strong> sur le bloc <strong>USERS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a>'),
(70, 8088718, '18-11-2015 10:04:58', 'Ajout de privilége <strong>MODIFIER</strong> sur le bloc <strong>USERS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=9188047">9188047</a>');

-- --------------------------------------------------------

--
-- Structure de la table `system_msg`
--

CREATE TABLE IF NOT EXISTS `system_msg` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_envoie` int(8) NOT NULL,
  `user_reception` int(8) NOT NULL,
  `subject` varchar(100) COLLATE utf8_bin NOT NULL,
  `message` varchar(500) COLLATE utf8_bin NOT NULL,
  `date_msg` varchar(50) COLLATE utf8_bin NOT NULL,
  `vu` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_envoie` (`user_envoie`),
  KEY `user_reception` (`user_reception`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=28 ;

--
-- Contenu de la table `system_msg`
--

INSERT INTO `system_msg` (`id`, `user_envoie`, `user_reception`, `subject`, `message`, `date_msg`, `vu`) VALUES
(26, 8088718, 9188047, 'bienvenu', '<p>test</p>\r\n', '18-11-2015 00:27:01', 1),
(27, 8088718, 9188047, 'test2', '<p>1</p>\r\n', '18-11-2015 00:40:37', 1);

-- --------------------------------------------------------

--
-- Structure de la table `system_msg_rep`
--

CREATE TABLE IF NOT EXISTS `system_msg_rep` (
  `id_rep` int(8) NOT NULL AUTO_INCREMENT,
  `id_msg` int(8) NOT NULL,
  `user_envoie_rep` int(8) NOT NULL,
  `user_reception_rep` int(8) NOT NULL,
  `message_rep` varchar(500) COLLATE utf8_bin NOT NULL,
  `date_msg_rep` varchar(50) COLLATE utf8_bin NOT NULL,
  `vu_rep` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_rep`),
  KEY `id_msg` (`id_msg`,`user_envoie_rep`,`user_reception_rep`),
  KEY `user_envoie` (`user_envoie_rep`),
  KEY `user_reception` (`user_reception_rep`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=20 ;

--
-- Contenu de la table `system_msg_rep`
--

INSERT INTO `system_msg_rep` (`id_rep`, `id_msg`, `user_envoie_rep`, `user_reception_rep`, `message_rep`, `date_msg_rep`, `vu_rep`) VALUES
(13, 26, 9188047, 8088718, '<p>t2</p>\r\n', '18-11-2015 00:28:50', 1),
(14, 26, 8088718, 9188047, '<p>t3</p>\r\n', '18-11-2015 00:29:31', 1),
(15, 26, 9188047, 8088718, '<p>t5</p>\r\n', '18-11-2015 00:35:58', 1),
(16, 26, 8088718, 9188047, '<p>t7</p>\r\n', '18-11-2015 00:37:23', 1),
(17, 26, 9188047, 8088718, '<p>t8</p>\r\n', '18-11-2015 00:37:48', 1),
(18, 27, 9188047, 8088718, '<p>2</p>\r\n', '18-11-2015 00:41:40', 1),
(19, 27, 8088718, 9188047, '<p>3</p>\r\n', '18-11-2015 10:09:20', 1);

-- --------------------------------------------------------

--
-- Structure de la table `system_notif`
--

CREATE TABLE IF NOT EXISTS `system_notif` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_user` int(8) NOT NULL,
  `notification` varchar(500) COLLATE utf8_bin NOT NULL,
  `date_notif` varchar(50) COLLATE utf8_bin NOT NULL,
  `vu` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=24 ;

--
-- Contenu de la table `system_notif`
--

INSERT INTO `system_notif` (`id`, `id_user`, `notification`, `date_notif`, `vu`) VALUES
(1, 9188047, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Supprission du privilége <strong>MODIFIER</strong> sur le bloc <strong>USERS</strong> de Hafaeidh Abd El Krim', '11-11-2015 10:27:29', 1),
(2, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Supprission du privilége <strong>MODIFIER</strong> sur le bloc <strong>USERS</strong> de Hafaeidh Abd El Krim', '11-11-2015 10:27:29', 1),
(3, 9188047, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Supprission du privilége <strong>VOIR</strong> sur le bloc <strong>USERS</strong> de Hafaeidh Abd El Krim', '11-11-2015 10:27:31', 1),
(4, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Supprission du privilége <strong>VOIR</strong> sur le bloc <strong>USERS</strong> de Hafaeidh Abd El Krim', '11-11-2015 10:27:31', 1),
(5, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Hafaeidh Abd El Krim, a été banni', '11-11-2015 10:33:46', 1),
(6, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Hafaeidh Abd El Krim, a été débanni', '11-11-2015 10:33:47', 1),
(7, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Hafaeidh Abd El Krim, ajout du diplôme : test', '11-11-2015 10:36:45', 1),
(8, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Hafaeidh Abd El Krim, a été banni', '11-11-2015 10:37:22', 1),
(9, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Hafaeidh Abd El Krim, a été débanni', '11-11-2015 10:37:24', 1),
(10, 9188047, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Ajout du privilége <strong>CREER</strong> sur le bloc <strong>USERS</strong> de Hafaeidh Abd El Krim', '11-11-2015 10:38:57', 1),
(11, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Ajout du privilége <strong>CREER</strong> sur le bloc <strong>USERS</strong> de Hafaeidh Abd El Krim', '11-11-2015 10:38:57', 1),
(12, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Hafaeidh Abd El Krim, a été banni', '13-11-2015 11:08:37', 1),
(13, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Hafaeidh Abd El Krim, a été débanni', '13-11-2015 13:08:19', 1),
(14, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Hafaeidh Abd El Krim, a été banni', '13-11-2015 13:29:59', 1),
(15, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Hafaeidh Abd El Krim, a été débanni', '15-11-2015 18:15:55', 1),
(16, 9188047, '<a href="ili-users/user_profil?id=10000071">Nouveau utilisateur, test test', '15-11-2015 18:16:53', 1),
(17, 8088718, '<a href="ili-users/user_profil?id=10000071">Nouveau utilisateur, test test', '15-11-2015 18:16:53', 1),
(18, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Hafaeidh Abd El Krim, a été banni', '16-11-2015 11:16:01', 1),
(19, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Hafaeidh Abd El Krim, a été débanni', '16-11-2015 11:20:57', 1),
(20, 9188047, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Ajout du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>USERS</strong> de Hafaeidh Abd El Krim', '18-11-2015 10:02:35', 0),
(21, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Ajout du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>USERS</strong> de Hafaeidh Abd El Krim', '18-11-2015 10:02:35', 0),
(22, 9188047, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Ajout du privilége <strong>MODIFIER</strong> sur le bloc <strong>USERS</strong> de Hafaeidh Abd El Krim', '18-11-2015 10:04:58', 0),
(23, 8088718, '<a href="http://localhost/erp/ili-users/user_profil?id=9188047">Ajout du privilége <strong>MODIFIER</strong> sur le bloc <strong>USERS</strong> de Hafaeidh Abd El Krim', '18-11-2015 10:04:58', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(8) NOT NULL,
  `id_rank` int(4) NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `poste` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `tel` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `date_naissance` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `mdp` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `mdp_update_date` date DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `github` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `img_link` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `created_by` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`),
  KEY `id_rank` (`id_rank`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `id_rank`, `nom`, `prenom`, `email`, `poste`, `tel`, `adresse`, `date_naissance`, `mdp`, `mdp_update_date`, `fb`, `github`, `linkedin`, `img_link`, `created_by`, `created_date`) VALUES
(8088718, 3, 'Sakly', 'Ayoub', 'sakly@ili-studios.com', '					CEO & Founder iLi-Studios SARL', '20666996', '19 Rue Ibn Zid AGBA 2010 MANOUBA TUNISIE', '1988-09-22', '3cb61b94f984497b9230075a6f777346', '2015-11-02', 'http://www.faecbook.com/saklyayoub', 'http://www.linkedin.com/', 'http://www.github.com/saklyayoub', 'http://www.ili-studios.com/img/saklyayoub.png', 'Sakly Ayoub', '2015-10-28'),
(9188047, 2, 'Hafaeidh', 'Abd El Krim', 'hafaeidh@ili-studios.com', '																									CO-Founder iLi-Studios', '55836311', '60 Rue Tazarka Denden Manouba', '1993-08-01', '21232f297a57a5a743894a0e4a801fc3', '2015-11-10', '', '', '', 'http://www.ili-studios.com/img/abdou.png', 'Sakly Ayoub', '2015-11-06');

-- --------------------------------------------------------

--
-- Structure de la table `users_diploma`
--

CREATE TABLE IF NOT EXISTS `users_diploma` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_user` int(8) NOT NULL,
  `annee` int(4) NOT NULL,
  `lieux` varchar(100) COLLATE utf8_bin NOT NULL,
  `diplome` varchar(300) COLLATE utf8_bin NOT NULL,
  `etablissement` varchar(300) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_user_2` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Contenu de la table `users_diploma`
--

INSERT INTO `users_diploma` (`id`, `id_user`, `annee`, `lieux`, `diplome`, `etablissement`) VALUES
(2, 8088718, 2008, 'Kef', 'Bac Technique', 'Lycé Technique Ahmed Amara'),
(3, 8088718, 2011, 'Tunis', 'BTS WebMaster', 'Khawarezmi Centre'),
(4, 8088718, 2013, 'Tunis', 'BTS Developpement sur Internet', 'IMSET'),
(5, 8088718, 2014, 'Kef', 'CEFEE', 'Bureau D''emploie'),
(6, 8088718, 2014, 'Sousse', 'HP-Life E-learning', 'HP'),
(7, 8088718, 2015, 'Manouba', 'Formation sur le projet <création d''une boite de développement>', 'API Manouba'),
(8, 9188047, 2050, 'gamra', 'test', 'naza');

-- --------------------------------------------------------

--
-- Structure de la table `users_expirance`
--

CREATE TABLE IF NOT EXISTS `users_expirance` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_user` int(8) NOT NULL,
  `company` varchar(100) NOT NULL,
  `company_url` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `experience` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_user_2` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `users_expirance`
--

INSERT INTO `users_expirance` (`id`, `id_user`, `company`, `company_url`, `duration`, `experience`) VALUES
(10, 8088718, 'WorkGroup', '', 'Jan. - Mars 2001', 'Developpeur Web WebMaster<br> •	Conception, Developpement, et realisation d’un site e-commerce pour une bijouterie, avec sont système de facturation.'),
(11, 8088718, 'OkToBoot', 'http://www.oktoboot.com/', 'Sep. - Dec 2012', 'Developpeur Web<br>\r\n•	Conception, Developpement, et realisation d’un système ERP a base de Magento sur ZendFrimework\r\n'),
(12, 8088718, 'Solution Interactives Visuelles', '', 'Jan. - Mars 2013', 'Developpeur Web, Administrateur Système<br>•	Conception, Developpement, et integration de système de gestion des serveurs de jeux avec un site de factorisation sur un serveur VPS a base de Linux\r\n•	Administration de serveur Linux, Creation de solution de backup automatisé.\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `users_privileges`
--

CREATE TABLE IF NOT EXISTS `users_privileges` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_user` int(8) NOT NULL,
  `bloc` varchar(100) COLLATE utf8_bin NOT NULL,
  `s` tinyint(1) NOT NULL,
  `c` tinyint(1) NOT NULL,
  `u` tinyint(1) NOT NULL,
  `d` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Contenu de la table `users_privileges`
--

INSERT INTO `users_privileges` (`id`, `id_user`, `bloc`, `s`, `c`, `u`, `d`) VALUES
(7, 9188047, 'USERS', 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users_rank`
--

CREATE TABLE IF NOT EXISTS `users_rank` (
  `id_rank` int(4) NOT NULL,
  `rank` varchar(255) NOT NULL,
  PRIMARY KEY (`id_rank`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users_rank`
--

INSERT INTO `users_rank` (`id_rank`, `rank`) VALUES
(1, 'Suspendue'),
(2, 'Utilisateur'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `users_skills`
--

CREATE TABLE IF NOT EXISTS `users_skills` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_user` int(8) NOT NULL,
  `skills` varchar(200) COLLATE utf8_bin NOT NULL,
  `pourcentage` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_user_2` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Contenu de la table `users_skills`
--

INSERT INTO `users_skills` (`id`, `id_user`, `skills`, `pourcentage`) VALUES
(8, 8088718, 'PHP/MySQL', '83'),
(9, 8088718, 'HTML5/CSS3', '82'),
(10, 8088718, 'JQuery/Ajax/JavaScript', '13'),
(11, 8088718, 'Ubuntu/Linux/WebMin', '80'),
(12, 8088718, 'Git/Kdiff/SubVersion', '90');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `system_log`
--
ALTER TABLE `system_log`
  ADD CONSTRAINT `system_log_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `system_msg`
--
ALTER TABLE `system_msg`
  ADD CONSTRAINT `system_msg_ibfk_3` FOREIGN KEY (`user_envoie`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `system_msg_ibfk_4` FOREIGN KEY (`user_reception`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `system_msg_rep`
--
ALTER TABLE `system_msg_rep`
  ADD CONSTRAINT `system_msg_rep_ibfk_1` FOREIGN KEY (`id_msg`) REFERENCES `system_msg` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `system_msg_rep_ibfk_2` FOREIGN KEY (`user_envoie_rep`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `system_msg_rep_ibfk_3` FOREIGN KEY (`user_reception_rep`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `system_notif`
--
ALTER TABLE `system_notif`
  ADD CONSTRAINT `system_notif_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_rank`) REFERENCES `users_rank` (`id_rank`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users_diploma`
--
ALTER TABLE `users_diploma`
  ADD CONSTRAINT `users_diploma_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users_expirance`
--
ALTER TABLE `users_expirance`
  ADD CONSTRAINT `users_expirance_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users_privileges`
--
ALTER TABLE `users_privileges`
  ADD CONSTRAINT `users_privileges_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users_skills`
--
ALTER TABLE `users_skills`
  ADD CONSTRAINT `users_skills_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
