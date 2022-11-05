-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 05 nov. 2022 à 21:50
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
-- Base de données : `bds`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(60) DEFAULT NULL,
  `nom` varchar(485) DEFAULT NULL,
  `prenom` varchar(852) DEFAULT NULL,
  `mail` varchar(589) DEFAULT NULL,
  `roles` varchar(523) DEFAULT 'user',
  `mdp` varchar(11) NOT NULL,
  `image` varchar(485) NOT NULL,
  `etat` int(11) NOT NULL DEFAULT '1',
  `date_Ins` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modif` datetime DEFAULT NULL,
  `date_archi` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `matricule`, `nom`, `prenom`, `mail`, `roles`, `mdp`, `image`, `etat`, `date_Ins`, `date_modif`, `date_archi`) VALUES
(1, NULL, 'nom1', 'ndiaye', 'user1@gmail.com', 'user', '123', 'pic-4.png', 1, '2022-11-05 19:32:12', NULL, NULL),
(2, NULL, 'koko', 'ndiaye', 'user2@gmail.com', 'admin', '123', 'pic-2.png', 1, '2022-11-05 19:33:52', NULL, NULL),
(3, NULL, 'koko', 'diop', 'user3@gmail.com', 'admin', '123', 'pic-3.png', 1, '2022-11-05 19:35:11', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
