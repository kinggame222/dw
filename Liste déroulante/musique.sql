-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 19 avr. 2022 à 00:27
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `musique`
--

-- --------------------------------------------------------

--
-- Structure de la table `tblalbum`
--

DROP TABLE IF EXISTS `tblalbum`;
CREATE TABLE IF NOT EXISTS `tblalbum` (
  `id_album` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL DEFAULT '',
  `code_genre` char(1) NOT NULL DEFAULT '',
  `id_auteur` int UNSIGNED NOT NULL,
  `id_maison` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tblalbum`
--

INSERT INTO `tblalbum` (`id_album`, `titre`, `code_genre`, `id_auteur`, `id_maison`) VALUES
(1, 'Chanson Canadienne Top Hits', 'F', 3, 2),
(2, 'Modern Warefare II', 'R', 3, 3),
(3, 'Dofus en RE mineur', 'J', 3, 4),
(4, 'Greatest Hits Alma Rock', 'C', 3, 5),
(5, 'Migael chante pour vous', 'F', 4, 1),
(6, 'Je suis déchainé du jazz', 'J', 4, 1),
(7, 'Chanson de Noel du Lac', 'F', 4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tblauteur`
--

DROP TABLE IF EXISTS `tblauteur`;
CREATE TABLE IF NOT EXISTS `tblauteur` (
  `id_auteur` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) NOT NULL DEFAULT '',
  `tel` varchar(10) DEFAULT '',
  PRIMARY KEY (`id_auteur`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tblauteur`
--

INSERT INTO `tblauteur` (`id_auteur`, `nom`, `tel`) VALUES
(1, 'Céline Dion', '2347772339'),
(2, 'Gaston Manville', '5146683399'),
(3, 'Jo Bocan', '5146659960'),
(4, 'Mario Pelchat', '4186795550'),
(5, 'Michael Jackson', '9999999999'),
(6, 'Elvis Presley', '9999999999');

-- --------------------------------------------------------

--
-- Structure de la table `tblgenre`
--

DROP TABLE IF EXISTS `tblgenre`;
CREATE TABLE IF NOT EXISTS `tblgenre` (
  `code_genre` char(1) NOT NULL DEFAULT '',
  `description` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`code_genre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tblgenre`
--

INSERT INTO `tblgenre` (`code_genre`, `description`) VALUES
('', 'Inconnu'),
('F', 'Folk'),
('P', 'Populaire'),
('R', 'Rock'),
('J', 'Jazz'),
('C', 'Classique');

-- --------------------------------------------------------

--
-- Structure de la table `tblmaison`
--

DROP TABLE IF EXISTS `tblmaison`;
CREATE TABLE IF NOT EXISTS `tblmaison` (
  `id_maison` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_maison` varchar(30) NOT NULL DEFAULT '',
  `dt_fondation` date NOT NULL DEFAULT '1900-01-01',
  `code_pays` char(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_maison`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tblmaison`
--

INSERT INTO `tblmaison` (`id_maison`, `nom_maison`, `dt_fondation`, `code_pays`) VALUES
(1, 'Sony Music', '1934-01-01', 'J'),
(2, 'A&M', '0000-00-00', 'U'),
(3, 'Québécor Musique', '2003-04-05', 'C'),
(4, 'Geffen', '1978-02-22', 'A'),
(5, 'Polydor', '1928-11-04', 'U');

-- --------------------------------------------------------

--
-- Structure de la table `tblpays`
--

DROP TABLE IF EXISTS `tblpays`;
CREATE TABLE IF NOT EXISTS `tblpays` (
  `code_pays` char(1) NOT NULL DEFAULT '',
  `description` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`code_pays`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tblpays`
--

INSERT INTO `tblpays` (`code_pays`, `description`) VALUES
('', 'Inconnu'),
('A', 'Angleterre'),
('C', 'Canada'),
('J', 'Japon'),
('U', 'USA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
