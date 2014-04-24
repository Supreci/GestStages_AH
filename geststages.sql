-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Jeu 16 Janvier 2014 à 10:52
-- Version du serveur: 5.5.32
-- Version de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `geststages`
--
CREATE DATABASE IF NOT EXISTS `geststages` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `geststages`;

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE IF NOT EXISTS `activite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `activite_entreprise`
--

CREATE TABLE IF NOT EXISTS `activite_entreprise` (
  `activite_id` int(11) NOT NULL,
  `entreprise_id` int(11) NOT NULL,
  PRIMARY KEY (`activite_id`,`entreprise_id`),
  KEY `IDX_51E964159B0F88B1` (`activite_id`),
  KEY `IDX_51E96415A4AEAFEA` (`entreprise_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE IF NOT EXISTS `enseignant` (
  `id` int(11) NOT NULL,
  `matiere_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CEFA2C71F46CD258` (`matiere_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `raisonSociale` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `numSiret` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `rue` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codePostal` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `raisonSociale`, `numSiret`, `rue`, `codePostal`, `ville`) VALUES
(4, 'Amonet 3', '02158548622155', 'La Hervière', '50140', 'La Lande d"Airou'),
(5, 'Jacky-Michel FOREVER', '16485128247521684', 'rue de matignon', '22123', 'Nantes');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL,
  `Specialite` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `redoublant` tinyint(1) NOT NULL,
  `section_id` int(11) NOT NULL,
  `promo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_880840B5D823E37A` (`section_id`),
  KEY `IDX_880840B5D0C07AFF` (`promo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `Specialite`, `redoublant`, `section_id`, `promo_id`) VALUES
(1, 'SLAM', 0, 3, 9),
(2, 'SLAM', 0, 3, 10);

-- --------------------------------------------------------

--
-- Structure de la table `internaute`
--

CREATE TABLE IF NOT EXISTS `internaute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `dateNaissance` datetime DEFAULT NULL,
  `rue` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `copos` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `adressemail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telmobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telfixe` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `internaute`
--

INSERT INTO `internaute` (`id`, `matricule`, `nom`, `prenom`, `dateNaissance`, `rue`, `copos`, `ville`, `adressemail`, `telmobile`, `telfixe`, `login`, `mdp`, `type`) VALUES
(1, '000000000000001', 'HAMONIC', 'Alexis', NULL, '8 Rue du Grand Saint-Lin', '50700', 'VALOGNES', 'alexis.hamonic@orange.fr', '0659628461', '02XXXXXXXX', 'ahamonic', 'mp', 'etudiant'),
(2, '000000000000002', 'FAHLUN', 'Sidney', '2014-01-10 00:00:00', 'Chateau d eau', '14000', 'CAEN', 'sidney.fahlun@orange.fr', '06XXXXXXXX', '02XXXXXXXX', 'sfahlun', 'mp', 'etudiant');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE IF NOT EXISTS `matiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

CREATE TABLE IF NOT EXISTS `promo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Contenu de la table `promo`
--

INSERT INTO `promo` (`id`, `libelle`) VALUES
(9, '2012-2014'),
(10, '2012-2014'),
(11, '2012-2014'),
(12, '2012-2014'),
(13, '2012-2014'),
(14, '2012-2014'),
(15, '2012-2014'),
(16, '2012-2014');

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `libelle` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `section`
--

INSERT INTO `section` (`id`, `code`, `libelle`) VALUES
(1, 'CGO', 'BTS Comptabilit'),
(3, 'SIO', 'BTS Services Informatique aux Organisations');

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DateDebut` datetime DEFAULT NULL,
  `DateFin` datetime DEFAULT NULL,
  `etudiant_id` int(11) NOT NULL,
  `Missions` longtext COLLATE utf8_unicode_ci NOT NULL,
  `entreprise_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3BDBC6DDDEAB1A3` (`etudiant_id`),
  KEY `IDX_3BDBC6DA4AEAFEA` (`entreprise_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `stage`
--

INSERT INTO `stage` (`id`, `DateDebut`, `DateFin`, `etudiant_id`, `Missions`, `entreprise_id`) VALUES
(1, '2014-01-20 00:00:00', '2014-03-07 00:00:00', 1, 'Créer une application permettant la gestion des salariés par le GRH', 4),
(2, NULL, NULL, 2, 'Créer un jeu ma Bimbo 3 qui sera vendu à 20 millions d"exemplaires', 5);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `activite_entreprise`
--
ALTER TABLE `activite_entreprise`
  ADD CONSTRAINT `FK_51E964159B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_51E96415A4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `FK_CEFA2C71BF396750` FOREIGN KEY (`id`) REFERENCES `internaute` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CEFA2C71F46CD258` FOREIGN KEY (`matiere_id`) REFERENCES `matiere` (`id`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FK_880840B5BF396750` FOREIGN KEY (`id`) REFERENCES `internaute` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_880840B5D0C07AFF` FOREIGN KEY (`promo_id`) REFERENCES `promo` (`id`),
  ADD CONSTRAINT `FK_880840B5D823E37A` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`);

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `FK_3BDBC6DA4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`),
  ADD CONSTRAINT `FK_3BDBC6DDDEAB1A3` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiant` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
