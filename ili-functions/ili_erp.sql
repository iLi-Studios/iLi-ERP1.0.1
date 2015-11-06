-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 06 Novembre 2015 à 13:29
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
-- Structure de la table `privileges_default`
--

CREATE TABLE IF NOT EXISTS `privileges_default` (
  `id` int(8) NOT NULL,
  `bloc` varchar(50) COLLATE utf8_bin NOT NULL,
  `s` tinyint(1) NOT NULL,
  `u` tinyint(1) NOT NULL,
  `c` tinyint(1) NOT NULL,
  `d` tinyint(1) NOT NULL,
  `b` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `privileges_default`
--

INSERT INTO `privileges_default` (`id`, `bloc`, `s`, `u`, `c`, `d`, `b`) VALUES
(1, 'users', 1, 0, 0, 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `system_log`
--

INSERT INTO `system_log` (`id`, `id_user`, `date_operation`, `operation`) VALUES
(1, 8088718, '11/06/15-13:22:48', 'Connexion');

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
(8088718, 3, 'Sakly', 'Ayoub', 'sakly@ili-studios.com', '					CEO & Founder iLi-Studios SARL', '20666996', '19 Rue Ibn Zid AGBA 2010 MANOUBA TUNISIE', '1988-09-22', '3cb61b94f984497b9230075a6f777346', '2015-11-02', 'http://www.faecbook.com/saklyayoub', 'http://www.linkedin.com/', 'http://www.github.com/', 'http://www.ili-studios.com/img/saklyayoub.png', 'Sakly Ayoub', '2015-10-28');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Contenu de la table `users_diploma`
--

INSERT INTO `users_diploma` (`id`, `id_user`, `annee`, `lieux`, `diplome`, `etablissement`) VALUES
(2, 8088718, 2008, 'Kef', 'Bac Technique', 'Lycé Technique Ahmed Amara'),
(3, 8088718, 2011, 'Tunis', 'BTS WebMaster', 'Khawarezmi Centre'),
(4, 8088718, 2013, 'Tunis', 'BTS Developpement sur Internet', 'IMSET'),
(5, 8088718, 2014, 'Kef', 'CEFEE', 'Bureau D''emploie'),
(6, 8088718, 2014, 'Sousse', 'HP-Life E-learning', 'HP'),
(7, 8088718, 2015, 'Manouba', 'Formation sur le projet <création d''une boite de développement>', 'API Manouba');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=34 ;

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
