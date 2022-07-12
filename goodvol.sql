-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 15 Janvier 2020 à 10:40
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `oncf_2`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE IF NOT EXISTS `billet` (
  `numbillet` int(11) NOT NULL AUTO_INCREMENT,
  `codevoyage` varchar(50) DEFAULT NULL,
  `datebillet` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`numbillet`),
  KEY `codevoyage` (`codevoyage`),
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cartebancaire`
--

CREATE TABLE IF NOT EXISTS `cartebancaire` (
  `numcarte` varchar(50) NOT NULL,
  `detenteur` varchar(50) DEFAULT NULL,
  `anneeexp` varchar(4) DEFAULT NULL,
  `moisexp` varchar(2) DEFAULT NULL,
  `crypto` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`numcarte`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cartebancaire`
--

INSERT INTO `cartebancaire` (`numcarte`, `detenteur`, `anneeexp`, `moisexp`, `crypto`) VALUES
('123456789', 'hamza', '2022', '11', '123');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE IF NOT EXISTS `voyage` (
  `codevoyage` varchar(50) NOT NULL,
  `heuredepart` time DEFAULT NULL,
  `villedepart` varchar(50) DEFAULT NULL,
  `heurearrivee` time DEFAULT NULL,
  `villearrivee` varchar(50) DEFAULT NULL,
  `prixvoyage` float DEFAULT NULL,
  PRIMARY KEY (`codevoyage`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `voyage`
--

INSERT INTO `voyage` (`codevoyage`, `heuredepart`, `villedepart`, `heurearrivee`, `villearrivee`, `prixvoyage`) VALUES
('vy0', '20:10:00', 'tanger', '21:00:00', 'assilah', 35),
('vy1', '10:10:00', 'casablanca', '16:00:00', 'assilah', 150),
('vy2', '19:30:00', 'kenitra', '23:00:00', 'tanger', 85);

-- --------------------------------------------------------

--
-- Structure de la table `voyageur`
--

CREATE TABLE IF NOT EXISTS `voyageur` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `datenaissance` date DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `voyageur`
--

INSERT INTO `voyageur` (`email`, `password`, `nom`, `prenom`, `datenaissance`, `telephone`) VALUES
('hamza.elkasmi.kassimi@gmail.com', '123', 'elkasmi', 'hamza', '1995-08-20', '0633326558'),
('k.azeggouar@gmail.com', '123', 'azeggouar', 'karim', '2019-12-04', '060000000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
