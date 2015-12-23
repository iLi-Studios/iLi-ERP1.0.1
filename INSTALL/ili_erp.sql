-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 23 Décembre 2015 à 10:59
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
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `code_art` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_type` int(11) NOT NULL,
  `id_famille_art` int(11) NOT NULL,
  `designation_art` varchar(250) COLLATE utf8_bin NOT NULL,
  `id_unit_art` int(11) DEFAULT NULL,
  `id_tva_art` int(11) DEFAULT NULL,
  `prix_vente_ht` varchar(100) COLLATE utf8_bin NOT NULL,
  `max_remise_art` varchar(5) COLLATE utf8_bin NOT NULL,
  `created_by` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`code_art`),
  UNIQUE KEY `code_art` (`code_art`),
  UNIQUE KEY `code_art_2` (`code_art`),
  KEY `unite_art` (`id_unit_art`),
  KEY `tva_art` (`id_tva_art`),
  KEY `type_art` (`id_type`),
  KEY `sous_famille_art` (`id_famille_art`),
  KEY `famille_art` (`id_famille_art`),
  KEY `created_by` (`created_by`),
  KEY `created_by_2` (`created_by`),
  KEY `id_tva_art` (`id_tva_art`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`code_art`, `id_type`, `id_famille_art`, `designation_art`, `id_unit_art`, `id_tva_art`, `prix_vente_ht`, `max_remise_art`, `created_by`, `created_date`) VALUES
(4, 1, 2, 'ARTICLE PAR DEFAUT STANDART', 5, 3, '15.000', '20', '08088718', '2015-12-22');

-- --------------------------------------------------------

--
-- Structure de la table `article_fabrique`
--

CREATE TABLE IF NOT EXISTS `article_fabrique` (
  `id_art_fab` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `compo_art_fab` bigint(20) unsigned NOT NULL,
  `qte_art_fab` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_art_fab`),
  UNIQUE KEY `id_art_fab` (`id_art_fab`),
  KEY `compo_art_fab` (`compo_art_fab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `article_famille`
--

CREATE TABLE IF NOT EXISTS `article_famille` (
  `id_famille_art` int(11) NOT NULL AUTO_INCREMENT,
  `famille_art` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_famille_art`),
  UNIQUE KEY `famille_art` (`famille_art`),
  KEY `famille_art_2` (`famille_art`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Contenu de la table `article_famille`
--

INSERT INTO `article_famille` (`id_famille_art`, `famille_art`) VALUES
(1, ''),
(2, 'F1'),
(3, 'F2'),
(4, 'F3'),
(5, 'F4');

-- --------------------------------------------------------

--
-- Structure de la table `article_tva`
--

CREATE TABLE IF NOT EXISTS `article_tva` (
  `id_tva_art` int(11) NOT NULL AUTO_INCREMENT,
  `tva_art` varchar(5) COLLATE utf8_bin NOT NULL,
  `tva_na_art` varchar(5) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_tva_art`),
  UNIQUE KEY `tva_art_2` (`tva_art`),
  KEY `tva_art` (`tva_art`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `article_tva`
--

INSERT INTO `article_tva` (`id_tva_art`, `tva_art`, `tva_na_art`) VALUES
(1, '6', '7'),
(2, '12', '13'),
(3, '18', '19');

-- --------------------------------------------------------

--
-- Structure de la table `article_type`
--

CREATE TABLE IF NOT EXISTS `article_type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `article_type`
--

INSERT INTO `article_type` (`id_type`, `type`) VALUES
(1, 'STANDARD'),
(2, 'FABRIQUE'),
(3, 'SERVICE');

-- --------------------------------------------------------

--
-- Structure de la table `article_unitee`
--

CREATE TABLE IF NOT EXISTS `article_unitee` (
  `id_unit_art` int(11) NOT NULL AUTO_INCREMENT,
  `unit_art` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_unit_art`),
  UNIQUE KEY `unit_art_2` (`unit_art`),
  KEY `unite_art` (`unit_art`),
  KEY `unite_art_2` (`unit_art`),
  KEY `unit_art` (`unit_art`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Contenu de la table `article_unitee`
--

INSERT INTO `article_unitee` (`id_unit_art`, `unit_art`) VALUES
(3, 'KG'),
(4, 'L'),
(5, 'M'),
(2, 'Pièce'),
(1, 'Un');

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
('00000000', 'CLIENT', 'COMPTANT', '19-12-2000', 'TUNIS', '', '00.000.000', '', '', '', '', '', '', '', '', '', '', '08088718', '0000-00-00', 0, NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

CREATE TABLE IF NOT EXISTS `etablissement` (
  `id_ets` int(11) NOT NULL AUTO_INCREMENT,
  `rs_ets` varchar(250) COLLATE utf8_bin NOT NULL,
  `mf_ets` varchar(250) COLLATE utf8_bin NOT NULL,
  `vente_en_gros` tinyint(1) NOT NULL,
  `rc_ets` varchar(250) COLLATE utf8_bin NOT NULL,
  `activites_principale_ets` varchar(1000) COLLATE utf8_bin NOT NULL,
  `activites_secondaire_ets` varchar(1000) COLLATE utf8_bin NOT NULL,
  `adresse_ets` varchar(1000) COLLATE utf8_bin NOT NULL,
  `gerant_ets` varchar(8) COLLATE utf8_bin DEFAULT NULL,
  `web_ets` varchar(250) COLLATE utf8_bin NOT NULL,
  `email1_ets` varchar(250) COLLATE utf8_bin NOT NULL,
  `email2_ets` varchar(250) COLLATE utf8_bin NOT NULL,
  `tel1_ets` varchar(250) COLLATE utf8_bin NOT NULL,
  `tel2_ets` varchar(250) COLLATE utf8_bin NOT NULL,
  `fax_ets` varchar(250) COLLATE utf8_bin NOT NULL,
  `rib1_ets` varchar(250) COLLATE utf8_bin NOT NULL,
  `rib2_ets` varchar(250) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_ets`),
  KEY `gerant_ets` (`gerant_ets`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Contenu de la table `etablissement`
--

INSERT INTO `etablissement` (`id_ets`, `rs_ets`, `mf_ets`, `vente_en_gros`, `rc_ets`, `activites_principale_ets`, `activites_secondaire_ets`, `adresse_ets`, `gerant_ets`, `web_ets`, `email1_ets`, `email2_ets`, `tel1_ets`, `tel2_ets`, `fax_ets`, `rib1_ets`, `rib2_ets`) VALUES
(1, 'ILI-STUDIOS SARL', '000 M A 1411208/J', 1, 'B26162912015', 'ACTIVITES INFORMATIQUES', 'ARCHIVAGE NUMERIQUE', '000. PEP DES ENTREPRISES, MANOUBA 2010', '08088718', 'http://www.ili-studios.com/', 'contact@ili-studios.com', 'commercial@ili-studios.com', '36 166 996', '20 666 996', '', '09 080 0138340000178 90 AMEN BANK – AGBA TUNIS', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id_frn`, `mf_frn`, `rc_frn`, `nom_frn`, `activite_frn`, `adresse_frn`, `tel_frn`, `tel2_frn`, `fax_frn`, `email_frn`, `site_frn`, `created_by`, `created_date`) VALUES
(3, '0000000C/M/T000', '000FC0000000/T', 'FOURNISSEUR COMPTANT', 'Ventes de produit divers', 'Tunis', '', '00.000.000', '00.000.000', '', 'site_web', '08088718', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=41 ;

--
-- Contenu de la table `system_log`
--

INSERT INTO `system_log` (`id`, `id_user`, `date_operation`, `operation`) VALUES
(1, '08088718', '18-12-2015 14:58:53', 'Création d''artcile: <a href="ili-modules/article/article?id=22">22</a>'),
(2, '08088718', '18-12-2015 22:13:30', 'Connexion'),
(3, '08088718', '19-12-2015 08:45:55', 'Connexion'),
(4, '08088718', '19-12-2015 10:56:38', 'Connexion'),
(5, '08088718', '19-12-2015 11:08:11', 'Déconnexion'),
(6, '08088718', '19-12-2015 11:08:17', 'Connexion'),
(7, '08088718', '19-12-2015 11:14:10', 'Modification de client : <a href="ili-modules/client/client?id=00000000">CLIENT COMPTANT</a>'),
(8, '08088718', '19-12-2015 11:16:15', 'Ajout du compétence : TEST, pour l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(9, '08088718', '19-12-2015 11:16:22', 'Suppression du compétence : TEST de l''utilisateur : <a href="ili-users/user_profil?id=08088718">08088718</a>'),
(10, '08088718', '20-12-2015 09:24:28', 'Connexion'),
(11, '08088718', '21-12-2015 09:00:31', 'Connexion'),
(12, '08088718', '21-12-2015 12:09:21', 'Déconnexion'),
(13, '08088718', '21-12-2015 12:09:23', 'Connexion'),
(14, '08088718', '21-12-2015 12:10:22', 'Modification de client : <a href="ili-modules/client/client?id=00000000">CLIENT COMPTANT</a>'),
(15, '08088718', '21-12-2015 12:10:42', 'Client : <a href="ili-modules/client/client?id=00000000">00000000</a> a été <strong>banni</strong>'),
(16, '08088718', '21-12-2015 12:10:54', 'Client : <a href="ili-modules/client/client?id=00000000">00000000</a> a été <strong>débanni</strong>'),
(17, '08088718', '21-12-2015 12:38:36', 'Modification d''article : <a href="ili-modules/article/article?id=22">22</a>'),
(18, '08088718', '21-12-2015 12:39:51', 'Modification d''article : <a href="ili-modules/article/article?id=22">22</a>'),
(19, '08088718', '21-12-2015 12:40:21', 'Modification d''article : <a href="ili-modules/article/article?id=22">22</a>'),
(20, '08088718', '21-12-2015 13:13:46', 'Connexion'),
(21, '08088718', '21-12-2015 15:02:27', 'Connexion'),
(22, '08088718', '21-12-2015 16:08:18', 'Modification d''article : <a href="ili-modules/article/article?id=22">22</a>'),
(23, '08088718', '21-12-2015 16:47:21', 'Suppression de l article22'),
(24, '08088718', '21-12-2015 17:42:44', 'Connexion'),
(25, '08088718', '21-12-2015 17:43:03', 'Modification d''article : <a href="ili-modules/article/article?id=1">1</a>'),
(26, '08088718', '22-12-2015 00:45:01', 'Connexion'),
(27, '08088718', '22-12-2015 11:12:29', 'Connexion'),
(28, '09186670', '22-12-2015 11:20:25', 'Connexion'),
(29, '08088718', '22-12-2015 11:21:33', 'Ajout de privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(30, '08088718', '22-12-2015 11:22:03', 'Ajout de privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(31, '08088718', '22-12-2015 11:22:51', 'Ajout de privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(32, '08088718', '22-12-2015 11:23:03', 'Ajout de privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> pour l''utilisateur : <a href="ili-users/user_profil?id=09186670">09186670</a>'),
(33, '09186670', '22-12-2015 11:30:34', 'Déconnexion'),
(34, '08088718', '22-12-2015 12:55:30', 'Suppression de l article 1'),
(35, '08088718', '22-12-2015 12:55:40', 'Suppression de l article 2'),
(36, '08088718', '22-12-2015 12:55:48', 'Suppression de l article 3'),
(37, '08088718', '22-12-2015 12:58:29', 'Création d''artcile: <a href="ili-modules/article/article?id=4">4</a>'),
(38, '08088718', '22-12-2015 15:11:54', 'Connexion'),
(39, '08088718', '22-12-2015 15:25:05', 'Connexion'),
(40, '08088718', '23-12-2015 10:18:02', 'Connexion');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=95 ;

--
-- Contenu de la table `system_notif`
--

INSERT INTO `system_notif` (`id`, `id_user`, `notification`, `date_notif`, `vu`) VALUES
(1, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=12">Sakly Ayoub a creé un nouveau article : test', '18-12-2015 14:19:43', 0),
(2, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=12">Sakly Ayoub a creé un nouveau article : test', '18-12-2015 14:19:44', 0),
(3, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=12">Sakly Ayoub a creé un nouveau article : test', '18-12-2015 14:19:44', 0),
(4, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=12">Sakly Ayoub a creé un nouveau article : test', '18-12-2015 14:19:44', 1),
(5, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=13">Sakly Ayoub a creé un nouveau article : test', '18-12-2015 14:31:16', 0),
(6, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=13">Sakly Ayoub a creé un nouveau article : test', '18-12-2015 14:31:16', 0),
(7, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=13">Sakly Ayoub a creé un nouveau article : test', '18-12-2015 14:31:16', 0),
(8, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=13">Sakly Ayoub a creé un nouveau article : test', '18-12-2015 14:31:16', 1),
(9, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=14">Sakly Ayoub a creé un nouveau article : test 51', '18-12-2015 14:35:51', 0),
(10, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=14">Sakly Ayoub a creé un nouveau article : test 51', '18-12-2015 14:35:51', 0),
(11, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=14">Sakly Ayoub a creé un nouveau article : test 51', '18-12-2015 14:35:51', 0),
(12, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=14">Sakly Ayoub a creé un nouveau article : test 51', '18-12-2015 14:35:51', 1),
(13, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=18">Sakly Ayoub a creé un nouveau article : article de test', '18-12-2015 14:41:42', 0),
(14, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=18">Sakly Ayoub a creé un nouveau article : article de test', '18-12-2015 14:41:42', 0),
(15, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=18">Sakly Ayoub a creé un nouveau article : article de test', '18-12-2015 14:41:42', 0),
(16, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=18">Sakly Ayoub a creé un nouveau article : article de test', '18-12-2015 14:41:42', 1),
(17, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=21">Sakly Ayoub a creé un nouveau article : huyvighv', '18-12-2015 14:57:46', 0),
(18, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=21">Sakly Ayoub a creé un nouveau article : huyvighv', '18-12-2015 14:57:46', 0),
(19, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=21">Sakly Ayoub a creé un nouveau article : huyvighv', '18-12-2015 14:57:46', 0),
(20, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=21">Sakly Ayoub a creé un nouveau article : huyvighv', '18-12-2015 14:57:46', 1),
(21, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=22">Sakly Ayoub a creé un nouveau article : test', '18-12-2015 14:58:52', 0),
(22, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=22">Sakly Ayoub a creé un nouveau article : test', '18-12-2015 14:58:52', 0),
(23, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=22">Sakly Ayoub a creé un nouveau article : test', '18-12-2015 14:58:52', 0),
(24, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=22">Sakly Ayoub a creé un nouveau article : test', '18-12-2015 14:58:53', 1),
(25, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub a modifié le client, CLIENT COMPTANT', '19-12-2015 11:14:10', 0),
(26, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub a modifié le client, CLIENT COMPTANT', '19-12-2015 11:14:10', 0),
(27, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub a modifié le client, CLIENT COMPTANT', '19-12-2015 11:14:10', 0),
(28, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub a modifié le client, CLIENT COMPTANT', '19-12-2015 11:14:10', 1),
(29, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=08088718">Sakly Ayoub, ajout de compétence : TEST', '19-12-2015 11:16:15', 0),
(30, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=08088718">Sakly Ayoub, ajout de compétence : TEST', '19-12-2015 11:16:15', 0),
(31, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=08088718">Sakly Ayoub, ajout de compétence : TEST', '19-12-2015 11:16:15', 0),
(32, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=08088718">Sakly Ayoub, suppression de compétance : TEST', '19-12-2015 11:16:22', 0),
(33, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=08088718">Sakly Ayoub, suppression de compétance : TEST', '19-12-2015 11:16:22', 0),
(34, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=08088718">Sakly Ayoub, suppression de compétance : TEST', '19-12-2015 11:16:22', 0),
(35, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub a modifié le client, CLIENT COMPTANT', '21-12-2015 12:10:22', 0),
(36, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub a modifié le client, CLIENT COMPTANT', '21-12-2015 12:10:22', 0),
(37, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub a modifié le client, CLIENT COMPTANT', '21-12-2015 12:10:22', 0),
(38, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub a modifié le client, CLIENT COMPTANT', '21-12-2015 12:10:22', 1),
(39, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub, a banni le client CLIENT COMPTANT</a>', '21-12-2015 12:10:42', 0),
(40, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub, a banni le client CLIENT COMPTANT</a>', '21-12-2015 12:10:42', 0),
(41, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub, a banni le client CLIENT COMPTANT</a>', '21-12-2015 12:10:42', 0),
(42, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub, a banni le client CLIENT COMPTANT</a>', '21-12-2015 12:10:42', 1),
(43, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub, a débanni le client CLIENT COMPTANT</a>', '21-12-2015 12:10:54', 0),
(44, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub, a débanni le client CLIENT COMPTANT</a>', '21-12-2015 12:10:54', 0),
(45, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub, a débanni le client CLIENT COMPTANT</a>', '21-12-2015 12:10:54', 0),
(46, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/client/client?id=00000000">Sakly Ayoub, a débanni le client CLIENT COMPTANT</a>', '21-12-2015 12:10:54', 1),
(47, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=22">Sakly Ayoub a modifié l article : test', '21-12-2015 12:40:21', 0),
(48, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=22">Sakly Ayoub a modifié l article : test', '21-12-2015 12:40:21', 0),
(49, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=22">Sakly Ayoub a modifié l article : test', '21-12-2015 12:40:21', 0),
(50, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=22">Sakly Ayoub a modifié l article : test', '21-12-2015 12:40:21', 1),
(51, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=22">Sakly Ayoub a modifié l article : test', '21-12-2015 16:08:17', 0),
(52, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=22">Sakly Ayoub a modifié l article : test', '21-12-2015 16:08:17', 0),
(53, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=22">Sakly Ayoub a modifié l article : test', '21-12-2015 16:08:17', 0),
(54, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=22">Sakly Ayoub a modifié l article : test', '21-12-2015 16:08:18', 1),
(55, '09186670', '<a href="#">Sakly Ayoub a supprimé l article, test', '21-12-2015 16:47:20', 0),
(56, '09188047', '<a href="#">Sakly Ayoub a supprimé l article, test', '21-12-2015 16:47:21', 0),
(57, '10000071', '<a href="#">Sakly Ayoub a supprimé l article, test', '21-12-2015 16:47:21', 0),
(58, '08088718', '<a href="#">Sakly Ayoub a supprimé l article, test', '21-12-2015 16:47:21', 1),
(59, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=1">Sakly Ayoub a modifié l article : ARTICLE PAR DEFAUT STANDARD', '21-12-2015 17:43:03', 0),
(60, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=1">Sakly Ayoub a modifié l article : ARTICLE PAR DEFAUT STANDARD', '21-12-2015 17:43:03', 0),
(61, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=1">Sakly Ayoub a modifié l article : ARTICLE PAR DEFAUT STANDARD', '21-12-2015 17:43:03', 0),
(62, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=1">Sakly Ayoub a modifié l article : ARTICLE PAR DEFAUT STANDARD', '21-12-2015 17:43:03', 1),
(63, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:21:33', 0),
(64, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:21:33', 0),
(65, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:21:33', 0),
(66, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>VOIR</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:21:33', 1),
(67, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:22:03', 0),
(68, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:22:03', 0),
(69, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:22:03', 0),
(70, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>CREER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:22:03', 1),
(71, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:22:51', 0),
(72, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:22:51', 0),
(73, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:22:51', 0),
(74, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>MODIFIER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:22:51', 1),
(75, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:23:03', 0),
(76, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:23:03', 0),
(77, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:23:03', 0),
(78, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-users/user_profil?id=09186670">Ajout du privilége <strong>SUPPRIMER</strong> sur le bloc <strong>FOURNISSEURS</strong> de Abd El Krim Hafaeidh', '22-12-2015 11:23:03', 1),
(79, '09186670', '<a href="#">Sakly Ayoub a supprimé l article, ARTICLE PAR DEFAUT STANDARD', '22-12-2015 12:55:30', 0),
(80, '09188047', '<a href="#">Sakly Ayoub a supprimé l article, ARTICLE PAR DEFAUT STANDARD', '22-12-2015 12:55:30', 0),
(81, '10000071', '<a href="#">Sakly Ayoub a supprimé l article, ARTICLE PAR DEFAUT STANDARD', '22-12-2015 12:55:30', 0),
(82, '08088718', '<a href="#">Sakly Ayoub a supprimé l article, ARTICLE PAR DEFAUT STANDARD', '22-12-2015 12:55:30', 1),
(83, '09186670', '<a href="#">Sakly Ayoub a supprimé l article, ARTICLE PAR DEFAUT FABRIQUE', '22-12-2015 12:55:40', 0),
(84, '09188047', '<a href="#">Sakly Ayoub a supprimé l article, ARTICLE PAR DEFAUT FABRIQUE', '22-12-2015 12:55:40', 0),
(85, '10000071', '<a href="#">Sakly Ayoub a supprimé l article, ARTICLE PAR DEFAUT FABRIQUE', '22-12-2015 12:55:40', 0),
(86, '08088718', '<a href="#">Sakly Ayoub a supprimé l article, ARTICLE PAR DEFAUT FABRIQUE', '22-12-2015 12:55:40', 1),
(87, '09186670', '<a href="#">Sakly Ayoub a supprimé l article, ARTICLE PAR DEFAUT SERVICE', '22-12-2015 12:55:48', 0),
(88, '09188047', '<a href="#">Sakly Ayoub a supprimé l article, ARTICLE PAR DEFAUT SERVICE', '22-12-2015 12:55:48', 0),
(89, '10000071', '<a href="#">Sakly Ayoub a supprimé l article, ARTICLE PAR DEFAUT SERVICE', '22-12-2015 12:55:48', 0),
(90, '08088718', '<a href="#">Sakly Ayoub a supprimé l article, ARTICLE PAR DEFAUT SERVICE', '22-12-2015 12:55:48', 1),
(91, '09186670', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=4">Sakly Ayoub a creé un nouveau article : ARTICLE PAR DEFAUT STANDART', '22-12-2015 12:58:29', 0),
(92, '09188047', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=4">Sakly Ayoub a creé un nouveau article : ARTICLE PAR DEFAUT STANDART', '22-12-2015 12:58:29', 0),
(93, '10000071', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=4">Sakly Ayoub a creé un nouveau article : ARTICLE PAR DEFAUT STANDART', '22-12-2015 12:58:29', 0),
(94, '08088718', '<a href="http://localhost/ili-erp1.0.1/ili-modules/article/article?id=4">Sakly Ayoub a creé un nouveau article : ARTICLE PAR DEFAUT STANDART', '22-12-2015 12:58:29', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Contenu de la table `users_privileges`
--

INSERT INTO `users_privileges` (`id`, `id_user`, `bloc`, `s`, `c`, `u`, `d`) VALUES
(2, '09186670', 'USERS', 1, 0, 0, 0),
(3, '09188047', 'USERS', 0, 0, 0, 0),
(4, '10000071', 'USERS', 0, 0, 0, 0),
(5, '09186670', 'CLIENTS', 1, 0, 0, 0),
(6, '10000071', 'CLIENTS', 0, 0, 0, 0),
(7, '09188047', 'CLIENTS', 1, 1, 1, 1),
(8, '09186670', 'FOURNISSEURS', 1, 1, 1, 1),
(9, '09188047', 'FOURNISSEURS', 0, 0, 0, 0),
(10, '10000071', 'FOURNISSEURS', 0, 0, 0, 0),
(11, '09188047', 'ARTICLES', 1, 0, 0, 0),
(12, '10000071', 'ARTICLES', 1, 0, 0, 0),
(13, '09186670', 'ARTICLES', 1, 0, 0, 0);

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
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_10` FOREIGN KEY (`id_type`) REFERENCES `article_type` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_ibfk_11` FOREIGN KEY (`id_unit_art`) REFERENCES `article_unitee` (`id_unit_art`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_ibfk_7` FOREIGN KEY (`created_by`) REFERENCES `users` (`id_user`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `article_ibfk_8` FOREIGN KEY (`id_tva_art`) REFERENCES `article_tva` (`id_tva_art`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_ibfk_9` FOREIGN KEY (`id_famille_art`) REFERENCES `article_famille` (`id_famille_art`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `article_fabrique`
--
ALTER TABLE `article_fabrique`
  ADD CONSTRAINT `article_fabrique_ibfk_1` FOREIGN KEY (`compo_art_fab`) REFERENCES `article` (`code_art`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id_user`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `client_ibfk_2` FOREIGN KEY (`banned_by`) REFERENCES `users` (`id_user`) ON DELETE SET NULL;

--
-- Contraintes pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD CONSTRAINT `etablissement_ibfk_1` FOREIGN KEY (`gerant_ets`) REFERENCES `users` (`id_user`) ON DELETE SET NULL ON UPDATE CASCADE;

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
