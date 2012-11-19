-- phpMyAdmin SQL Dump
-- version 3.5.0
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 16 Novembre 2012 à 13:19
-- Version du serveur: 5.1.55
-- Version de PHP: 5.3.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `GestStage`
--

-- --------------------------------------------------------

--
-- Structure de la table `ANNEESCOL`
--

CREATE TABLE IF NOT EXISTS `ANNEESCOL` (
  `ANNEESCOL` char(9) NOT NULL,
  PRIMARY KEY (`ANNEESCOL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ANNEESCOL`
--

INSERT INTO `ANNEESCOL` (`ANNEESCOL`) VALUES
('2009-2010'),
('2010-2011'),
('2011-2012'),
('2012-2013');

-- --------------------------------------------------------

--
-- Structure de la table `A_JOINDRE`
--

CREATE TABLE IF NOT EXISTS `A_JOINDRE` (
  `IDORGANISATION` varchar(10) NOT NULL,
  `IDPERSONNE` varchar(10) NOT NULL,
  PRIMARY KEY (`IDORGANISATION`,`IDPERSONNE`),
  KEY `I_FK_A_JOINDRE_ORGANISATION` (`IDORGANISATION`),
  KEY `I_FK_A_JOINDRE_CONTACT` (`IDPERSONNE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CLASSE`
--

CREATE TABLE IF NOT EXISTS `CLASSE` (
  `NUMCLASSE` char(32) NOT NULL,
  `NUMFILIERE` int(2) NOT NULL,
  `NOMCLASSE` char(32) NOT NULL,
  PRIMARY KEY (`NUMCLASSE`),
  KEY `I_FK_CLASSE_FILIERE` (`NUMFILIERE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `CLASSE`
--

INSERT INTO `CLASSE` (`NUMCLASSE`, `NUMFILIERE`, `NOMCLASSE`) VALUES
('1CGOA', 2, '1CGOA'),
('1CGOB', 2, '1CGOB'),
('1MUC', 1, '1MUC'),
('1SIOA', 4, '1SIOA'),
('1SIOB', 4, '1SIOB'),
('2CGOA', 2, '2CGOA'),
('2CGOB', 2, '2CGOB'),
('2IGD', 3, '2IGD'),
('2IGR', 3, '2IGR'),
('2MUC', 1, '2MUC'),
('2SISR', 4, '2SISR'),
('2SLAM', 4, '2SLAM'),
('DCG1', 5, 'DCG1'),
('DCG2', 5, 'DCG2'),
('FCIL VPM', 6, 'FCIL VPM');

-- --------------------------------------------------------

--
-- Structure de la table `CONTACT`
--

CREATE TABLE IF NOT EXISTS `CONTACT` (
  `IDPERSONNE` varchar(10) NOT NULL,
  `NOM` varchar(30) NOT NULL,
  `NUM_TEL` char(10) NOT NULL,
  `ADRESSE_MAIL` varchar(30) NOT NULL,
  `PRENOM` varchar(20) NOT NULL,
  `CIVILITE` char(32) NOT NULL,
  PRIMARY KEY (`IDPERSONNE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `CONTACT`
--

INSERT INTO `CONTACT` (`IDPERSONNE`, `NOM`, `NUM_TEL`, `ADRESSE_MAIL`, `PRENOM`, `CIVILITE`) VALUES
('1', 'LE GUEN', '0209755700', 'contac@aps-si.com', 'Paul', 'Mr'),
('2', 'Panelier', '0256320125', 'contac@akos.com', 'Antoine', 'Mr');

-- --------------------------------------------------------

--
-- Structure de la table `FILIERE`
--

CREATE TABLE IF NOT EXISTS `FILIERE` (
  `NUMFILIERE` int(2) NOT NULL,
  `LIBELLEFILIERE` varchar(50) NOT NULL,
  PRIMARY KEY (`NUMFILIERE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `FILIERE`
--

INSERT INTO `FILIERE` (`NUMFILIERE`, `LIBELLEFILIERE`) VALUES
(1, 'Management des Unités Commerciales'),
(2, 'Comptabilité et Gestion des Organisations'),
(3, 'Informatique de Gestion'),
(4, 'Services Informatiques aux Organisations'),
(5, 'Diplôme de Comptabilité et de Gestion'),
(6, 'Formation Complémentaire d''Initiative Locale');

-- --------------------------------------------------------

--
-- Structure de la table `OPTIONETUDIANT`
--

CREATE TABLE IF NOT EXISTS `OPTIONETUDIANT` (
  `IDOPTION` smallint(3) NOT NULL,
  `LIBELLECOURTOPTION` varchar(10) NOT NULL,
  `LIBELLELONGOPTION` varchar(50) NOT NULL,
  PRIMARY KEY (`IDOPTION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `OPTIONETUDIANT`
--

INSERT INTO `OPTIONETUDIANT` (`IDOPTION`, `LIBELLECOURTOPTION`, `LIBELLELONGOPTION`) VALUES
(1, 'SLAM', 'Solutions logicielles et applications métiers'),
(2, 'SISR', 'Solutions d''infrastructures systèmes et réseaux');

-- --------------------------------------------------------

--
-- Structure de la table `ORGANISATION`
--

CREATE TABLE IF NOT EXISTS `ORGANISATION` (
  `IDORGANISATION` varchar(10) NOT NULL,
  `NOM_ORGANISATION` varchar(255) NOT NULL,
  `VILLE_ORGANISATION` varchar(128) NOT NULL,
  `ADRESSE_ORGANISATION` varchar(128) NOT NULL,
  `CP_ORGANISATION` bigint(5) NOT NULL,
  `TEL_ORGANISATION` varchar(10) NOT NULL,
  `FAX_ORGANISATION` varchar(10) DEFAULT NULL,
  `FORMEJURIDIQUE` varchar(10) NOT NULL,
  PRIMARY KEY (`IDORGANISATION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ORGANISATION`
--

INSERT INTO `ORGANISATION` (`IDORGANISATION`, `NOM_ORGANISATION`, `VILLE_ORGANISATION`, `ADRESSE_ORGANISATION`, `CP_ORGANISATION`, `TEL_ORGANISATION`, `FAX_ORGANISATION`, `FORMEJURIDIQUE`) VALUES
('1', 'ECOLES DES MINES', 'NANTES', '4 rue alfred kastler', 44300, '0251858100', NULL, 'SA');

-- --------------------------------------------------------

--
-- Structure de la table `PROMOTION`
--

CREATE TABLE IF NOT EXISTS `PROMOTION` (
  `ANNEESCOL` char(9) NOT NULL,
  `IDPERSONNE` varchar(10) NOT NULL,
  `NUMCLASSE` char(32) NOT NULL,
  PRIMARY KEY (`ANNEESCOL`,`IDPERSONNE`),
  KEY `I_FK_PROMOTION_CLASSE` (`NUMCLASSE`),
  KEY `I_FK_PROMOTION_ANNEESCOL` (`ANNEESCOL`),
  KEY `I_FK_PROMOTION_UTILISATEUR` (`IDPERSONNE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `PROMOTION`
--

INSERT INTO `PROMOTION` (`ANNEESCOL`, `IDPERSONNE`, `NUMCLASSE`) VALUES
('2011-2012', '4', '1SIOA'),
('2012-2013', '4', '2SLAM');

-- --------------------------------------------------------

--
-- Structure de la table `ROLE`
--

CREATE TABLE IF NOT EXISTS `ROLE` (
  `IDROLE` smallint(3) NOT NULL,
  `RANG` smallint(1) NOT NULL,
  `LIBELLE` varchar(30) NOT NULL,
  PRIMARY KEY (`IDROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ROLE`
--

INSERT INTO `ROLE` (`IDROLE`, `RANG`, `LIBELLE`) VALUES
(1, 1, 'Etudiant'),
(2, 2, 'Secrétaire'),
(3, 3, 'Professeur'),
(4, 4, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `STAGE`
--

CREATE TABLE IF NOT EXISTS `STAGE` (
  `NUM_STAGE` int(3) NOT NULL,
  `IDMAITRESTAGE` varchar(10) NOT NULL,
  `IDCONTACT` varchar(10) NOT NULL,
  `IDETUDIANT` varchar(10) DEFAULT NULL,
  `IDPROFESSEUR` varchar(10) NOT NULL,
  `DATEDEBUT` date NOT NULL,
  `DATEFIN` date NOT NULL,
  `DATEVISITESTAGE` date DEFAULT NULL,
  `VILLE` char(32) NOT NULL,
  `DIVERS` char(32) DEFAULT NULL,
  `BILANTRAVAUX` varchar(255) DEFAULT NULL,
  `RESSOURCESOUTILS` varchar(255) DEFAULT NULL,
  `COMMENTAIRES` varchar(255) DEFAULT NULL,
  `PARTICIPATIONCCF` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`NUM_STAGE`),
  KEY `I_FK_STAGE_CONTACT` (`IDMAITRESTAGE`),
  KEY `I_FK_STAGE_CONTACT2` (`IDCONTACT`),
  KEY `I_FK_STAGE_UTILISATEUR` (`IDETUDIANT`),
  KEY `I_FK_STAGE_UTILISATEUR1` (`IDPROFESSEUR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `STAGE`
--

INSERT INTO `STAGE` (`NUM_STAGE`, `IDMAITRESTAGE`, `IDCONTACT`, `IDETUDIANT`, `IDPROFESSEUR`, `DATEDEBUT`, `DATEFIN`, `DATEVISITESTAGE`, `VILLE`, `DIVERS`, `BILANTRAVAUX`, `RESSOURCESOUTILS`, `COMMENTAIRES`, `PARTICIPATIONCCF`) VALUES
(1, '1', '1', '4', '2', '2012-10-22', '2012-11-21', '2012-11-08', 'NANTES', 'divers', 'très bien', 'drupal, php, css, ordinateur', 'Je trouve que le projet était intéressant', 0);

-- --------------------------------------------------------

--
-- Structure de la table `UTILISATEUR`
--

CREATE TABLE IF NOT EXISTS `UTILISATEUR` (
  `IDPERSONNE` varchar(10) NOT NULL,
  `IDOPTIONETUDIANT` smallint(3) DEFAULT NULL,
  `LOGINUTILISATEUR` varchar(25) DEFAULT NULL,
  `MDPUTILISATEUR` varchar(25) DEFAULT NULL,
  `NOM` varchar(30) NOT NULL,
  `NUM_TEL` char(10) NOT NULL,
  `ADRESSE_MAIL` varchar(30) NOT NULL,
  `PRENOM` varchar(20) NOT NULL,
  `CIVILITE` char(32) NOT NULL,
  `IDOPTION` smallint(3) DEFAULT NULL,
  `ETUDES` varchar(40) DEFAULT NULL,
  `FORMATION` varchar(40) DEFAULT NULL,
  `IDROLE` smallint(3) NOT NULL,
  PRIMARY KEY (`IDPERSONNE`),
  KEY `I_FK_UTILISATEUR_OPTIONETUDIANT` (`IDOPTIONETUDIANT`),
  KEY `I_FK_UTILISATEUR_ROLE` (`IDROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `UTILISATEUR`
--

INSERT INTO `UTILISATEUR` (`IDPERSONNE`, `IDOPTIONETUDIANT`, `LOGINUTILISATEUR`, `MDPUTILISATEUR`, `NOM`, `NUM_TEL`, `ADRESSE_MAIL`, `PRENOM`, `CIVILITE`, `IDOPTION`, `ETUDES`, `FORMATION`, `IDROLE`) VALUES
('1', NULL, 'admin', 'admin', 'Administrateur', '0240536986', 'admin@gmail.com', 'Admin', 'Mr', NULL, NULL, NULL, 4),
('2', NULL, 'prof', 'prof', 'Professeur', '0245454545', 'prof@gmail.com', 'Prof', 'Mr', NULL, NULL, NULL, 3),
('3', NULL, 'secretaire', 'secretaire', 'Secretaire', '0214141414', 'secretaire@gmail.com', 'Secretaire', 'Mlle', NULL, NULL, NULL, 2),
('4', 1, 'tperroin', 'tperroin', 'Perroin', '0279797979', 'tperroin@gmail.com', 'Thibault', 'Mr', NULL, NULL, NULL, 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `A_JOINDRE`
--
ALTER TABLE `A_JOINDRE`
  ADD CONSTRAINT `A_JOINDRE_ibfk_1` FOREIGN KEY (`IDORGANISATION`) REFERENCES `ORGANISATION` (`IDORGANISATION`),
  ADD CONSTRAINT `A_JOINDRE_ibfk_2` FOREIGN KEY (`IDPERSONNE`) REFERENCES `CONTACT` (`IDPERSONNE`);

--
-- Contraintes pour la table `CLASSE`
--
ALTER TABLE `CLASSE`
  ADD CONSTRAINT `CLASSE_ibfk_1` FOREIGN KEY (`NUMFILIERE`) REFERENCES `FILIERE` (`NUMFILIERE`);

--
-- Contraintes pour la table `PROMOTION`
--
ALTER TABLE `PROMOTION`
  ADD CONSTRAINT `PROMOTION_ibfk_1` FOREIGN KEY (`NUMCLASSE`) REFERENCES `CLASSE` (`NUMCLASSE`),
  ADD CONSTRAINT `PROMOTION_ibfk_2` FOREIGN KEY (`ANNEESCOL`) REFERENCES `ANNEESCOL` (`ANNEESCOL`),
  ADD CONSTRAINT `PROMOTION_ibfk_3` FOREIGN KEY (`IDPERSONNE`) REFERENCES `UTILISATEUR` (`IDPERSONNE`);

--
-- Contraintes pour la table `STAGE`
--
ALTER TABLE `STAGE`
  ADD CONSTRAINT `STAGE_ibfk_1` FOREIGN KEY (`IDMAITRESTAGE`) REFERENCES `CONTACT` (`IDPERSONNE`),
  ADD CONSTRAINT `STAGE_ibfk_2` FOREIGN KEY (`IDCONTACT`) REFERENCES `CONTACT` (`IDPERSONNE`),
  ADD CONSTRAINT `STAGE_ibfk_3` FOREIGN KEY (`IDETUDIANT`) REFERENCES `UTILISATEUR` (`IDPERSONNE`),
  ADD CONSTRAINT `STAGE_ibfk_4` FOREIGN KEY (`IDPROFESSEUR`) REFERENCES `UTILISATEUR` (`IDPERSONNE`);

--
-- Contraintes pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  ADD CONSTRAINT `UTILISATEUR_ibfk_1` FOREIGN KEY (`IDOPTIONETUDIANT`) REFERENCES `OPTIONETUDIANT` (`IDOPTION`),
  ADD CONSTRAINT `UTILISATEUR_ibfk_2` FOREIGN KEY (`IDROLE`) REFERENCES `ROLE` (`IDROLE`);
