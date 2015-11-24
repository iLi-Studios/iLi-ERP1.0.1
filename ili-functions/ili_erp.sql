-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 24 Novembre 2015 à 15:51
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
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_clt` varchar(50) COLLATE utf8_bin NOT NULL,
  `nom_clt` varchar(50) COLLATE utf8_bin NOT NULL,
  `prenom_clt` varchar(50) COLLATE utf8_bin NOT NULL,
  `date_nais_clt` varchar(50) COLLATE utf8_bin NOT NULL,
  `adresse_clt` varchar(250) COLLATE utf8_bin NOT NULL,
  `fix_clt` varchar(20) COLLATE utf8_bin NOT NULL,
  `fax_clt` varchar(20) COLLATE utf8_bin NOT NULL,
  `portable_clt` varchar(20) COLLATE utf8_bin NOT NULL,
  `email_clt` varchar(50) COLLATE utf8_bin NOT NULL,
  `rc` varchar(50) COLLATE utf8_bin NOT NULL,
  `activite_clt` varchar(250) COLLATE utf8_bin NOT NULL,
  `nom_con_clt` varchar(50) COLLATE utf8_bin NOT NULL,
  `prenom_con_clt` varchar(50) COLLATE utf8_bin NOT NULL,
  `post_con_clt` varchar(50) COLLATE utf8_bin NOT NULL,
  `email_con_clt` varchar(50) COLLATE utf8_bin NOT NULL,
  `tel_con_clt` varchar(20) COLLATE utf8_bin NOT NULL,
  `tel2_con_clt` varchar(20) COLLATE utf8_bin NOT NULL,
  `created_by` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id_clt`),
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `system_log`
--

CREATE TABLE IF NOT EXISTS `system_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(8) COLLATE utf8_bin NOT NULL,
  `date_operation` varchar(100) COLLATE utf8_bin NOT NULL,
  `operation` varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=24 ;

--
-- Contenu de la table `system_log`
--

INSERT INTO `system_log` (`id`, `id_user`, `date_operation`, `operation`) VALUES
(1, '08088718', '24-11-2015 15:03:57', 'Connexion'),
(2, '08088718', '24-11-2015 15:05:44', 'Modification des liens socieaux de l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(3, '08088718', '24-11-2015 15:09:52', 'Ajout du diplôme : Bac Technique, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(4, '08088718', '24-11-2015 15:10:18', 'Ajout du diplôme : BTS WebMaster, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(5, '08088718', '24-11-2015 15:11:00', 'Ajout du diplôme : BTS Développement Internet, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(6, '08088718', '24-11-2015 15:11:26', 'Ajout du diplôme : CEFEE, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(7, '08088718', '24-11-2015 15:11:38', 'Suppression du diplôme : CEFEE, de l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(8, '08088718', '24-11-2015 15:12:22', 'Ajout du diplôme : CEFEE, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(9, '08088718', '24-11-2015 15:12:40', 'Ajout du diplôme : HP-Life E-learning, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(10, '08088718', '24-11-2015 15:13:26', 'Ajout du diplôme : Formation sur le projet "Startup communication", pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(11, '08088718', '24-11-2015 15:14:10', 'Ajout de l''expérience dans l''etablissement : WorkGroup, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(12, '08088718', '24-11-2015 15:14:50', 'Ajout de l''expérience dans l''etablissement : OkToBoot, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(13, '08088718', '24-11-2015 15:15:08', 'Modification de l''expérience dans l''etablissement : WorkGroup, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(14, '08088718', '24-11-2015 15:15:44', 'Ajout de l''expérience dans l''etablissement : Solution Interractive Visuelle, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(15, '08088718', '24-11-2015 15:16:22', 'Ajout du compétence : JavaScript / Jquery / AJax, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(16, '08088718', '24-11-2015 15:16:39', 'Ajout du compétence : GitHub / Subvesion, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(17, '08088718', '24-11-2015 15:17:03', 'Ajout du compétence : PHP/HTML5/CSS3, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(18, '08088718', '24-11-2015 15:17:27', 'Ajout du compétence : Linux / Ubuntu / Windows, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(19, '08088718', '24-11-2015 15:25:01', 'Création de l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(20, '08088718', '24-11-2015 15:27:05', 'Création de l''utilisateur : <a href="ili-users/user_profil?id=09188047">09188047</a>'),
(21, '08088718', '24-11-2015 15:30:23', 'Création de l''utilisateur : <a href="ili-users/user_profil?id=10000071">10000071</a>'),
(22, '08088718', '24-11-2015 15:35:27', 'Déconnexion'),
(23, '08088718', '24-11-2015 15:35:37', 'Connexion');

-- --------------------------------------------------------

--
-- Structure de la table `system_msg`
--

CREATE TABLE IF NOT EXISTS `system_msg` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_envoie` varchar(8) COLLATE utf8_bin NOT NULL,
  `user_reception` varchar(8) COLLATE utf8_bin NOT NULL,
  `subject` varchar(100) COLLATE utf8_bin NOT NULL,
  `message` varchar(500) COLLATE utf8_bin NOT NULL,
  `date_msg` varchar(50) COLLATE utf8_bin NOT NULL,
  `vu` tinyint(1) NOT NULL,
  `fermer_par` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_envoie` (`user_envoie`),
  KEY `user_reception` (`user_reception`),
  KEY `fermer_par` (`fermer_par`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=54 ;

-- --------------------------------------------------------

--
-- Structure de la table `system_msg_rep`
--

CREATE TABLE IF NOT EXISTS `system_msg_rep` (
  `id_rep` int(8) NOT NULL AUTO_INCREMENT,
  `id_msg` int(8) NOT NULL,
  `user_envoie_rep` varchar(8) COLLATE utf8_bin NOT NULL,
  `user_reception_rep` varchar(8) COLLATE utf8_bin NOT NULL,
  `message_rep` varchar(500) COLLATE utf8_bin NOT NULL,
  `date_msg_rep` varchar(50) COLLATE utf8_bin NOT NULL,
  `vu_rep` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_rep`),
  KEY `id_msg` (`id_msg`,`user_envoie_rep`,`user_reception_rep`),
  KEY `user_envoie` (`user_envoie_rep`),
  KEY `user_reception` (`user_reception_rep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `system_notif`
--

CREATE TABLE IF NOT EXISTS `system_notif` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(8) COLLATE utf8_bin NOT NULL,
  `notification` varchar(500) COLLATE utf8_bin NOT NULL,
  `date_notif` varchar(50) COLLATE utf8_bin NOT NULL,
  `vu` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Contenu de la table `system_notif`
--

INSERT INTO `system_notif` (`id`, `id_user`, `notification`, `date_notif`, `vu`) VALUES
(1, '08088718', '<a href="ili-users/user_profil?id=09186670">Nouveau utilisateur, Abd El Krim Hafaeidh', '24-11-2015 15:25:01', 1),
(2, '09186670', '<a href="ili-users/user_profil?id=09188047">Nouveau utilisateur, Raissi Aziz', '24-11-2015 15:27:04', 0),
(3, '08088718', '<a href="ili-users/user_profil?id=09188047">Nouveau utilisateur, Raissi Aziz', '24-11-2015 15:27:04', 1),
(4, '09186670', '<a href="ili-users/user_profil?id=10000071">Nouveau utilisateur, Battikh Mohamed Mahdi', '24-11-2015 15:30:22', 0),
(5, '09188047', '<a href="ili-users/user_profil?id=10000071">Nouveau utilisateur, Battikh Mohamed Mahdi', '24-11-2015 15:30:23', 0),
(6, '08088718', '<a href="ili-users/user_profil?id=10000071">Nouveau utilisateur, Battikh Mohamed Mahdi', '24-11-2015 15:30:23', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` varchar(8) COLLATE utf8_bin NOT NULL,
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
('08088718', 3, 'Sakly', 'Ayoub', 'sakly@ili-studios.com', 'CEO & Founder iLi-Studios SARL', '20666996', '19 Rue Ibn Zid AGBA 2010 MANOUBA TUNISIE', '1988-09-02', '3cb61b94f984497b9230075a6f777346', '0000-00-00', 'https://www.facebook.com/saklyayoub', 'https://github.com/saklyayoub', 'https://www.linkedin.com/in/sakly-ayoub-ba269391', 'http://www.ili-studios.com/img/saklyayoub.png', 'Sakly Ayoub', '2015-10-28'),
('09186670', 2, 'Abd El Krim', 'Hafaeidh', 'hafaeidh@ili-studios.com', 'CO - Founder iLi-Studios', '52.239.322', '60 Rue Tazarka Denden Manouba', '01/08/1993', '21232f297a57a5a743894a0e4a801fc3', '2015-11-24', '', '', '', 'http://www.ili-studios.com/img/abdou.png', 'Sakly Ayoub', '2015-11-24'),
('09188047', 2, 'Raissi', 'Aziz', 'raissi@ili-studios.com', 'Head Team Designer iLi-Studios', '20.035.425', 'AGBA - Manouba', '14/11/1993', '21232f297a57a5a743894a0e4a801fc3', '2015-11-24', 'https://www.facebook.com/Deliiora', '', '', 'http://www.ili-studios.com/img/aziz.png', 'Sakly Ayoub', '2015-11-24'),
('10000071', 2, 'Battikh', 'Mohamed Mahdi', 'battikh@ili-studios.com', 'CO - Founder iLi-Studios', '55.836.311', '', '21/09/1993', '21232f297a57a5a743894a0e4a801fc3', '2015-11-24', '', '', '', 'http://www.ili-studios.com/img/medbattikh.png', 'Sakly Ayoub', '2015-11-24');

-- --------------------------------------------------------

--
-- Structure de la table `users_diploma`
--

CREATE TABLE IF NOT EXISTS `users_diploma` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(8) COLLATE utf8_bin NOT NULL,
  `annee` int(4) NOT NULL,
  `lieux` varchar(100) COLLATE utf8_bin NOT NULL,
  `diplome` varchar(300) COLLATE utf8_bin NOT NULL,
  `etablissement` varchar(300) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_user_2` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Contenu de la table `users_diploma`
--

INSERT INTO `users_diploma` (`id`, `id_user`, `annee`, `lieux`, `diplome`, `etablissement`) VALUES
(1, '08088718', 2008, 'Le Kef', 'Bac Technique', 'Lycé Ahmed Amara'),
(2, '08088718', 2011, 'Tunis', 'BTS WebMaster', 'Khawarezmi Centre'),
(3, '08088718', 2013, 'Tunis', 'BTS Développement Internet', 'IMSET'),
(5, '08088718', 2014, 'Le Kef', 'CEFEE', 'Bureau d''emploie'),
(6, '08088718', 2014, 'Sousse', 'HP-Life E-learning', 'HP'),
(7, '08088718', 2015, 'Manouba', 'Formation sur le projet "Startup communication"', 'API');

-- --------------------------------------------------------

--
-- Structure de la table `users_expirance`
--

CREATE TABLE IF NOT EXISTS `users_expirance` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(8) COLLATE utf8_bin NOT NULL,
  `company` varchar(100) COLLATE utf8_bin NOT NULL,
  `company_url` varchar(100) COLLATE utf8_bin NOT NULL,
  `duration` varchar(100) COLLATE utf8_bin NOT NULL,
  `experience` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users_expirance`
--

INSERT INTO `users_expirance` (`id`, `id_user`, `company`, `company_url`, `duration`, `experience`) VALUES
(1, '08088718', 'WorkGroup', '', 'Jan - Mars 2011', 'Developpeur Web, WebMaster\r\n\r\n•	Conception, Developpement, et realisation d’un site e-commerce pour '),
(2, '08088718', 'OkToBoot', 'http://www.oktoboot.com/', 'Sep - Dec 2012', 'Developpeur Web\r\n\r\n•	Conception, Developpement, et realisation d’un système ERP a base de Magento su'),
(3, '08088718', 'Solution Interractive Visuelle', '', 'Jan - Mars 2013', 'Developpeur Web, Administrateur Système\r\n\r\n•	Conception, Developpement, et integration de système de');

-- --------------------------------------------------------

--
-- Structure de la table `users_privileges`
--

CREATE TABLE IF NOT EXISTS `users_privileges` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(8) COLLATE utf8_bin NOT NULL,
  `bloc` varchar(100) COLLATE utf8_bin NOT NULL,
  `s` tinyint(1) NOT NULL,
  `c` tinyint(1) NOT NULL,
  `u` tinyint(1) NOT NULL,
  `d` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users_privileges`
--

INSERT INTO `users_privileges` (`id`, `id_user`, `bloc`, `s`, `c`, `u`, `d`) VALUES
(2, '09186670', 'USERS', 0, 0, 0, 0),
(3, '09188047', 'USERS', 0, 0, 0, 0),
(4, '10000071', 'USERS', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users_rank`
--

CREATE TABLE IF NOT EXISTS `users_rank` (
  `id_rank` int(4) NOT NULL,
  `rank` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_rank`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `id_user` varchar(8) COLLATE utf8_bin NOT NULL,
  `skills` varchar(200) COLLATE utf8_bin NOT NULL,
  `pourcentage` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_user_2` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users_skills`
--

INSERT INTO `users_skills` (`id`, `id_user`, `skills`, `pourcentage`) VALUES
(1, '08088718', 'JavaScript / Jquery / AJax', '35'),
(2, '08088718', 'GitHub / Subvesion', '77'),
(3, '08088718', 'PHP/HTML5/CSS3', '91'),
(4, '08088718', 'Linux / Ubuntu / Windows', '93');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id_user`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `system_log`
--
ALTER TABLE `system_log`
  ADD CONSTRAINT `system_log_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `system_msg`
--
ALTER TABLE `system_msg`
  ADD CONSTRAINT `system_msg_ibfk_3` FOREIGN KEY (`fermer_par`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `system_msg_ibfk_1` FOREIGN KEY (`user_envoie`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `system_msg_ibfk_2` FOREIGN KEY (`user_reception`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `system_msg_rep`
--
ALTER TABLE `system_msg_rep`
  ADD CONSTRAINT `system_msg_rep_ibfk_3` FOREIGN KEY (`user_reception_rep`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `system_msg_rep_ibfk_1` FOREIGN KEY (`id_msg`) REFERENCES `system_msg` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `system_msg_rep_ibfk_2` FOREIGN KEY (`user_envoie_rep`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

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
