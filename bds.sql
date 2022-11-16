-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 16 nov. 2022 à 06:08
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
  `nom` text,
  `prenom` text,
  `mail` varchar(589) DEFAULT NULL,
  `roles` varchar(456) NOT NULL,
  `mdp` varchar(11) NOT NULL,
  `image` varchar(456) NOT NULL,
  `etat` int(11) NOT NULL DEFAULT '1',
  `date_Ins` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modif` date DEFAULT NULL,
  `date_archi` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `matricule`, `nom`, `prenom`, `mail`, `roles`, `mdp`, `image`, `etat`, `date_Ins`, `date_modif`, `date_archi`) VALUES
(12, ' 125724-- PM-MTR', 'souley', 'konate', 'jojo@gmail.com', 'user', '123', 'pic-2.png', 1, '2022-11-09 12:57:24', '2022-11-10', '2022-11-18'),
(13, ' 010154-- PM-MTR', 'modou', 'gueye', 'gian@gmail.com', 'admin', '123', 'pic-3.png', 1, '2022-11-09 13:01:54', '2022-11-08', NULL),
(14, ' 031715-- PM-MTR', 'nom1', 'ndiaye', 'user1@gmail.com', 'admin', '123', 'pic-4.png', 1, '2022-11-09 15:17:15', NULL, NULL),
(15, ' 051349-- PM-MTR', 'nom1', 'ndiaye', 'admin51@gmail.com', 'user', 'passer', 'pic-1.png', 1, '2022-11-09 17:13:49', NULL, NULL),
(16, ' 124334-- PM-MTR', 'chiekh', 'ndiaye', 'ndiaye@gmail.com', 'admin', '123', '', 1, '2022-11-10 12:43:34', NULL, NULL),
(17, ' 124430-- PM-MTR', 'awa', 'soumbane', 'soum@gmail.com', 'admin', '123', 'pic-2.png', 1, '2022-11-10 12:44:30', NULL, NULL),
(18, ' 124513-- PM-MTR', 'fatim', 'diop', 'diaop@gmail.com', 'user', '123', 'pic-2.png', 1, '2022-11-10 12:45:13', NULL, NULL),
(19, ' 124828-- PM-MTR', 'rosalie', 'badiane', 'badiane@gmail.com', 'user', '123', 'pic-4.png', 1, '2022-11-10 12:48:28', NULL, NULL),
(20, ' 124933-- PM-MTR', 'emma', 'coly', 'coly@gmail.com', 'user', '123', 'pic-4.png', 1, '2022-11-10 12:49:33', NULL, NULL),
(21, ' 125041-- PM-MTR', 'ndiankou', 'sembene', 'sembene@gmail.com', 'user', '123', 'pic-3.png', 1, '2022-11-10 12:50:41', NULL, NULL),
(22, ' 090957-- PM-MTR', 'matÃ©o', 'tourÃ©', 'toure@gmail.com', 'admin', '123', 'pic-3.png', 1, '2022-11-13 21:09:57', NULL, NULL),
(23, ' 091610-- PM-MTR', 'jacqueline', 'diouf', 'diouf@gmail.com', 'admin', '123', 'pic-2.png', 1, '2022-11-13 21:16:10', NULL, NULL),
(24, ' 065803-- PM-MTR', 'coumba', 'diongue', 'diongue@gmail.com', 'admin', '123', '', 1, '2022-11-14 18:58:03', NULL, NULL),
(25, ' 085136-- AM-MTR', 'jacqueline', 'ndiaye', 'admin5@gmail.com', 'admin', '123', 'pic-4.png', 1, '2022-11-15 08:51:36', NULL, NULL),
(26, ' 101130-- AM-MTR', 'sophie', 'diop', 'diop@gmail.com', 'admin', '123', 'pic-2.png', 1, '2022-11-15 10:11:30', NULL, NULL),
(27, ' 101609-- AM-MTR', '', '', '', 'admin', '', '', 1, '2022-11-15 10:16:09', NULL, NULL),
(28, ' 103050-- AM-MTR', 'issa', 'ndiaye', 'nn@gmail.com', 'admin', 'aaaaa', 'pic-1.png', 1, '2022-11-15 10:30:50', NULL, NULL),
(29, ' 103254-- AM-MTR', 'sofie', 'ndiaye', 'admin45@gmail.com', 'admin', '123', 'pic-4.png', 1, '2022-11-15 10:32:54', NULL, NULL),
(30, ' 082352-- PM-MTR', 'flora', 'ndiaye', 'faye@gmail.com', 'admin', '123', '', 1, '2022-11-15 20:23:52', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
