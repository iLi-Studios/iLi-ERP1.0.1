-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 03 Décembre 2015 à 00:28
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
  `ban` tinyint(1) NOT NULL,
  `banned_by` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `ban_raison` varchar(250) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_clt`),
  KEY `created_by` (`created_by`),
  KEY `banned_by` (`banned_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_clt`, `nom_clt`, `prenom_clt`, `date_nais_clt`, `adresse_clt`, `fix_clt`, `fax_clt`, `portable_clt`, `email_clt`, `rc`, `activite_clt`, `nom_con_clt`, `prenom_con_clt`, `post_con_clt`, `email_con_clt`, `tel_con_clt`, `tel2_con_clt`, `created_by`, `created_date`, `ban`, `banned_by`, `ban_raison`) VALUES
('00000000', 'CLIENT', 'COMPTANT', '00-00-0000', 'TUNIS', '', '', '', '', '', '', '', '', '', '', '', '', '08088718', '0000-00-00', 0, NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id_frn` int(11) NOT NULL AUTO_INCREMENT,
  `mf_frn` varchar(50) COLLATE utf8_bin NOT NULL,
  `rc_frn` varchar(50) COLLATE utf8_bin NOT NULL,
  `nom_frn` varchar(250) COLLATE utf8_bin NOT NULL,
  `activite_frn` varchar(500) COLLATE utf8_bin NOT NULL,
  `adresse_frn` varchar(250) COLLATE utf8_bin NOT NULL,
  `tel_frn` varchar(10) COLLATE utf8_bin NOT NULL,
  `tel2_frn` varchar(10) COLLATE utf8_bin NOT NULL,
  `fax_frn` varchar(250) COLLATE utf8_bin NOT NULL,
  `email_frn` varchar(250) COLLATE utf8_bin NOT NULL,
  `site_frn` varchar(250) COLLATE utf8_bin NOT NULL,
  `created_by` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id_frn`),
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id_frn`, `mf_frn`, `rc_frn`, `nom_frn`, `activite_frn`, `adresse_frn`, `tel_frn`, `tel2_frn`, `fax_frn`, `email_frn`, `site_frn`, `created_by`, `created_date`) VALUES
(2, '0000000O/V/H000', '000OV0000000/H', 'ovh_test', 'nom de domaine, hebergement web, serveur VPS', 'test', '', '22.222.222', '33.333.333', 'email@email.ste', 'site_web', '08088718', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- Contenu de la table `system_log`
--

INSERT INTO `system_log` (`id`, `id_user`, `date_operation`, `operation`) VALUES
(1, '08088718', '02-12-2015 13:44:56', 'Création de fournisseur : <a href="ili-modules/fournisseur/fournisseur?mf=0000000O/V/H000">0000000O/V/H000</a>'),
(2, '08088718', '02-12-2015 14:01:15', 'Création de client : <a href="ili-modules/client/client?id=00000000">00000000</a>'),
(3, '08088718', '02-12-2015 14:35:22', 'Modification de fournisseur : <a href="ili-modules/fournisseur/fournisseur?id=2">ovh</a>'),
(4, '09186670', '02-12-2015 14:38:27', 'Connexion'),
(5, '08088718', '02-12-2015 14:39:20', 'Ajout de privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(6, '08088718', '02-12-2015 14:39:51', 'Ajout de privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(7, '09186670', '02-12-2015 14:41:00', 'Modification de fournisseur : <a href="ili-modules/fournisseur/fournisseur?id=2">ovh_test</a>'),
(8, '08088718', '02-12-2015 14:41:41', 'Ajout de privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(9, '08088718', '02-12-2015 14:42:06', 'Ajout de privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(10, '08088718', '02-12-2015 14:48:53', 'Déconnexion'),
(11, '08088718', '02-12-2015 14:48:58', 'Connexion'),
(12, '08088718', '02-12-2015 14:57:08', 'Suppression de privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(13, '08088718', '02-12-2015 14:57:14', 'Suppression de privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(14, '08088718', '02-12-2015 14:57:19', 'Suppression de privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(15, '08088718', '02-12-2015 14:57:25', 'Suppression de privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(16, '08088718', '02-12-2015 14:57:45', 'Ajout de privilége <strong>VOIR</strong> sur le bloc <strong>CLIENTS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(17, '08088718', '02-12-2015 15:00:05', 'Connexion'),
(18, '08088718', '02-12-2015 15:01:01', 'Connexion');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `system_msg`
--

INSERT INTO `system_msg` (`id`, `user_envoie`, `user_reception`, `subject`, `message`, `date_msg`, `vu`, `fermer_par`) VALUES
(1, '08088718', '10000071', 'test', '<p>jhgvjhg</p>\r\n', '27-11-2015 11:31:56', 1, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=53 ;

--
-- Contenu de la table `system_notif`
--

INSERT INTO `system_notif` (`id`, `id_user`, `notification`, `date_notif`, `vu`) VALUES
(1, '09186670', '<a href="http://localhost/erp/ili-modules/fournisseur/fournisseur?mf=0000000O/V/H000">Sakly Ayoub a creé un nouveau fournisseur, ovh', '02-12-2015 13:44:56', 1),
(2, '09188047', '<a href="http://localhost/erp/ili-modules/fournisseur/fournisseur?mf=0000000O/V/H000">Sakly Ayoub a creé un nouveau fournisseur, ovh', '02-12-2015 13:44:56', 0),
(3, '10000071', '<a href="http://localhost/erp/ili-modules/fournisseur/fournisseur?mf=0000000O/V/H000">Sakly Ayoub a creé un nouveau fournisseur, ovh', '02-12-2015 13:44:56', 0),
(4, '08088718', '<a href="http://localhost/erp/ili-modules/fournisseur/fournisseur?mf=0000000O/V/H000">Sakly Ayoub a creé un nouveau fournisseur, ovh', '02-12-2015 13:44:56', 1),
(5, '09186670', '<a href="ili-modules/client/client?id=00000000">Sakly Ayoub a creé un nouveau client particulier, CLIENT COMPTANT', '02-12-2015 14:01:15', 1),
(6, '09188047', '<a href="ili-modules/client/client?id=00000000">Sakly Ayoub a creé un nouveau client particulier, CLIENT COMPTANT', '02-12-2015 14:01:15', 0),
(7, '10000071', '<a href="ili-modules/client/client?id=00000000">Sakly Ayoub a creé un nouveau client particulier, CLIENT COMPTANT', '02-12-2015 14:01:15', 0),
(8, '08088718', '<a href="ili-modules/client/client?id=00000000">Sakly Ayoub a creé un nouveau client particulier, CLIENT COMPTANT', '02-12-2015 14:01:15', 1),
(9, '09186670', '<a href="ili-modules/fournisseur/fournisseur?id=2">Sakly Ayoub a modifié le fournisseur, ovh', '02-12-2015 14:35:22', 1),
(10, '09188047', '<a href="ili-modules/fournisseur/fournisseur?id=2">Sakly Ayoub a modifié le fournisseur, ovh', '02-12-2015 14:35:22', 0),
(11, '10000071', '<a href="ili-modules/fournisseur/fournisseur?id=2">Sakly Ayoub a modifié le fournisseur, ovh', '02-12-2015 14:35:22', 0),
(12, '08088718', '<a href="ili-modules/fournisseur/fournisseur?id=2">Sakly Ayoub a modifié le fournisseur, ovh', '02-12-2015 14:35:22', 1),
(13, '09186670', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:39:20', 1),
(14, '09188047', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:39:20', 0),
(15, '10000071', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:39:20', 0),
(16, '08088718', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:39:20', 1),
(17, '09186670', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:39:50', 1),
(18, '09188047', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:39:50', 0),
(19, '10000071', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:39:51', 0),
(20, '08088718', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:39:51', 1),
(21, '09186670', '<a href="http://localhost/erp/ili-modules/fournisseur/fournisseur?id=2">Abd El Krim Hafaeidh a modifié le fournisseur, ovh_test', '02-12-2015 14:41:00', 1),
(22, '09188047', '<a href="http://localhost/erp/ili-modules/fournisseur/fournisseur?id=2">Abd El Krim Hafaeidh a modifié le fournisseur, ovh_test', '02-12-2015 14:41:00', 0),
(23, '10000071', '<a href="http://localhost/erp/ili-modules/fournisseur/fournisseur?id=2">Abd El Krim Hafaeidh a modifié le fournisseur, ovh_test', '02-12-2015 14:41:00', 0),
(24, '08088718', '<a href="http://localhost/erp/ili-modules/fournisseur/fournisseur?id=2">Abd El Krim Hafaeidh a modifié le fournisseur, ovh_test', '02-12-2015 14:41:00', 1),
(25, '09186670', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:41:41', 1),
(26, '09188047', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:41:41', 0),
(27, '10000071', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:41:41', 0),
(28, '08088718', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:41:41', 1),
(29, '09186670', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:42:06', 1),
(30, '09188047', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:42:06', 0),
(31, '10000071', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:42:06', 0),
(32, '08088718', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:42:06', 1),
(33, '09186670', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Supprission du privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:08', 1),
(34, '09188047', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Supprission du privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:08', 0),
(35, '10000071', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Supprission du privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:08', 0),
(36, '08088718', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Supprission du privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:08', 1),
(37, '09186670', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Suppression du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:13', 1),
(38, '09188047', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Suppression du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:13', 0),
(39, '10000071', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Suppression du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:13', 0),
(40, '08088718', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Suppression du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:14', 1),
(41, '09186670', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Supprission du privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:18', 1),
(42, '09188047', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Supprission du privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:18', 0),
(43, '10000071', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Supprission du privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:19', 0),
(44, '08088718', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Supprission du privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:19', 1),
(45, '09186670', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Supprission du privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:24', 1),
(46, '09188047', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Supprission du privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:24', 0),
(47, '10000071', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Supprission du privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:25', 0),
(48, '08088718', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Supprission du privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:25', 1),
(49, '09186670', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>VOIR</strong> sur le bloc <strong>CLIENTS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:45', 0),
(50, '09188047', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>VOIR</strong> sur le bloc <strong>CLIENTS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:45', 0),
(51, '10000071', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>VOIR</strong> sur le bloc <strong>CLIENTS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:45', 0),
(52, '08088718', '<a href="http://localhost/erp/ili-users/user_profil?id=09186670">Ajout du privilége <strong>VOIR</strong> sur le bloc <strong>CLIENTS</strong> de Abd El Krim Hafaeidh', '02-12-2015 14:57:45', 1);

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
('08088718', 3, 'Sakly', 'Ayoub', 'sakly@ili-studios.com', 'CEO & Founder iLi-Studios SARL', '20666996', '19 Rue Ibn Zid AGBA 2010 MANOUBA TUNISIE', '22-09-1988', '3cb61b94f984497b9230075a6f777346', '0000-00-00', 'https://www.facebook.com/saklyayoub', 'https://github.com/saklyayoub', 'https://www.linkedin.com/in/sakly-ayoub-ba269391', 'http://www.ili-studios.com/img/saklyayoub.png', 'Sakly Ayoub', '2015-10-28'),
('09186670', 2, 'Abd El Krim', 'Hafaeidh', 'hafaeidh@ili-studios.com', 'CO - Founder iLi-Studios', '52.239.322', '60 Rue Tazarka Denden Manouba', '01-08-1993', '21232f297a57a5a743894a0e4a801fc3', '2015-11-24', '', '', '', 'http://www.ili-studios.com/img/abdou.png', 'Sakly Ayoub', '2015-11-24'),
('09188047', 2, 'Raissi', 'Aziz', 'raissi@ili-studios.com', 'Head Team Designer iLi-Studios', '20.035.425', 'AGBA - Manouba', '14-11-1993', '21232f297a57a5a743894a0e4a801fc3', '2015-11-24', 'https://www.facebook.com/Deliiora', '', '', 'http://www.ili-studios.com/img/aziz.png', 'Sakly Ayoub', '2015-11-24'),
('10000071', 2, 'Battikh', 'Mohamed Mahdi', 'battikh@ili-studios.com', 'CO - Founder iLi-Studios', '55.836.311', '', '21-09-1993', '21232f297a57a5a743894a0e4a801fc3', '2015-11-24', '', '', '', 'http://www.ili-studios.com/img/medbattikh.png', 'Sakly Ayoub', '2015-11-24');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Contenu de la table `users_privileges`
--

INSERT INTO `users_privileges` (`id`, `id_user`, `bloc`, `s`, `c`, `u`, `d`) VALUES
(2, '09186670', 'USERS', 0, 0, 0, 0),
(3, '09188047', 'USERS', 0, 0, 0, 0),
(4, '10000071', 'USERS', 0, 0, 0, 0),
(5, '09186670', 'CLIENTS', 1, 0, 0, 0),
(6, '10000071', 'CLIENTS', 0, 0, 0, 0),
(7, '09188047', 'CLIENTS', 0, 0, 0, 0),
(8, '09186670', 'FOURNISSEURS', 0, 0, 0, 0),
(9, '09188047', 'FOURNISSEURS', 0, 0, 0, 0),
(10, '10000071', 'FOURNISSEURS', 0, 0, 0, 0);

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
(3, 'Admin'),
(4, 'Développeur');

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
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id_user`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `client_ibfk_2` FOREIGN KEY (`banned_by`) REFERENCES `users` (`id_user`) ON DELETE SET NULL;

--
-- Contraintes pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD CONSTRAINT `fournisseur_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id_user`) ON DELETE SET NULL;

--
-- Contraintes pour la table `system_log`
--
ALTER TABLE `system_log`
  ADD CONSTRAINT `system_log_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `system_msg`
--
ALTER TABLE `system_msg`
  ADD CONSTRAINT `system_msg_ibfk_1` FOREIGN KEY (`user_envoie`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `system_msg_ibfk_2` FOREIGN KEY (`user_reception`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `system_msg_ibfk_3` FOREIGN KEY (`fermer_par`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

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
