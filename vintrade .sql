-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 26 jan. 2022 à 14:35
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vintrade`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `id_annonce` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `localisation` varchar(255) NOT NULL,
  `taille` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_annonce`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id_avis` int(11) NOT NULL AUTO_INCREMENT,
  `etoile` varchar(255) NOT NULL,
  `id_envoie` int(11) NOT NULL,
  `id_receveur` int(11) NOT NULL,
  `message` varchar(2000) NOT NULL,
  PRIMARY KEY (`id_avis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `id_envoie` int(11) NOT NULL,
  `id_user1` int(11) NOT NULL,
  `text` varchar(500) NOT NULL,
  `id_user2` int(11) NOT NULL,
  PRIMARY KEY (`id_chat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `echanges`
--

DROP TABLE IF EXISTS `echanges`;
CREATE TABLE IF NOT EXISTS `echanges` (
  `id_echange` int(11) NOT NULL AUTO_INCREMENT,
  `id_envoie` int(11) NOT NULL,
  `id_receveur` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  PRIMARY KEY (`id_echange`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `id_favori` int(11) NOT NULL AUTO_INCREMENT,
  `id_objet` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_favori`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `avatar`, `pseudo`, `prenom`, `nom`, `email`, `mdp`, `description`) VALUES
(1, 'avatar.png', 'Fredo', 'Fredo', 'Fredo', 'jessy@jessy', '$2y$10$D1GMd9KLT7jjHQqoVWXrO.cLOEnAJiuFlw6tGwSXD83NCEpQF1vjK', NULL),
(2, 'avatar.png', 'Fredo', 'Fredo', 'Fredo', 'jessy@jessy', '$2y$10$igPlhVfMsq0kivcdxTpV/eYzzKFURmz1tE0v/djogvWmzxY5WSP0a', NULL),
(3, 'avatar.png', 'Marvin', 'Marvin', 'Marvin', 'marvin@marvin', '$2y$10$OzkYUoV3fy5brnoIrn8equfvnZFyuW9QGXFq8xjht8vCUG4bjbwOq', NULL),
(4, 'avatar.png', 'rouquin', 'rouquin', 'rouquin', 'rouquin@rouquin', '$2y$10$H6qLRrygA1xzox0udGH2ae5E8NExnp4juPHOSzgGt5Gt98Ffihbs2', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
