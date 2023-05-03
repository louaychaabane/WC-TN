-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 03 mai 2023 à 15:18
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `worldcup`
--

-- --------------------------------------------------------

--
-- Structure de la table `paiment`
--

CREATE TABLE `paiment` (
  `id_user` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `Mail` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `id_ticket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `paiment`
--

INSERT INTO `paiment` (`id_user`, `firstName`, `lastName`, `Mail`, `phone`, `id_ticket`) VALUES
(8, 'Ahmed', 'ghliss', 'ahmedghliss25@gmail.', '29456877', 'M02'),
(9, 'Ahmed', 'ghliss', 'ahmedghliss25@gmail.', '29456877', 'M01'),
(10, 'ahmed ghliss', 'ghliss', 'ahmedghliss25@gmail.', '29456877', 'M03'),
(11, 'Ahmed', 'ghliss', 'ahmedghliss25@gmail.', '29456877', 'M03'),
(12, 'Ahmed', 'ghliss', 'ahmedghliss25@gmail.', '29456877', 'M03'),
(17, 'Louay', 'LCHDesigner', 'lchdesigner00@gmail.', '50412250', 'M02');

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

CREATE TABLE `players` (
  `id_player` int(11) NOT NULL,
  `name_player` varchar(25) NOT NULL,
  `goals` int(11) NOT NULL DEFAULT 0,
  `assists` int(11) NOT NULL DEFAULT 0,
  `img` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `Rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `players`
--

INSERT INTO `players` (`id_player`, `name_player`, `goals`, `assists`, `img`, `age`, `Rating`) VALUES
(1, 'Aymen Mathlouthi', 0, 0, 'images/1.jpg', 38, NULL),
(2, 'Bilel Iffa', 0, 0, 'images/2.jpg', 32, NULL),
(3, 'Montassar Talbi', 0, 0, 'images/3.jpg', 24, NULL),
(4, 'Yassine Meriah', 0, 0, 'images/4.jpg', 29, NULL),
(5, 'Nader Ghandri', 0, 0, 'images/5.jpg', 27, 7.7),
(6, 'Dylan Bronn', 0, 0, 'images/6.jpg', 27, NULL),
(7, 'Youssef Msakni', 2, 0, 'images/7.jpg', 32, 7.25),
(8, 'Hannibal Mejbri', 0, 0, 'images/8.jpg', 19, NULL),
(9, 'Issam Jebali', 0, 0, 'images/9.jpg', 30, NULL),
(10, 'Wahbi Khazri', 3, 0, 'images/10.jpg', 31, NULL),
(11, 'Taha Yassine Khenissi', 2, 0, 'images/11.jpg', 30, NULL),
(12, 'Ali Maaloul', 0, 0, 'images/12.jpg', 32, NULL),
(13, 'Ferjani Sassi', 0, 0, 'images/13.jpg', 30, NULL),
(14, 'Aissa Laidouni', 0, 0, 'images/27.jpg', 25, NULL),
(15, 'Mohamed Ali Ben Romdhane', 0, 0, 'images/15.jpg', 23, NULL),
(16, 'Aymen Dahmen', 0, 0, 'images/16.jpg', 25, 7.27),
(17, 'Elyas Skhiri', 0, 0, 'images/17.jpg', 27, 7.17),
(18, 'Ghaylane Chaalali', 0, 0, 'images/18.jpg', 28, NULL),
(19, 'Seifeddine Jaziri', 0, 0, 'images/19.jpg', 29, NULL),
(20, 'Mohamed Drager', 0, 0, 'images/20.jpg', 26, NULL),
(21, 'Wajdi Kechrida', 0, 0, 'images/21.jpg', 27, NULL),
(22, 'Bechir Ben Said', 0, 0, 'images/22.jpg', 27, NULL),
(23, 'Naim Sliti', 0, 0, 'images/23.jpg', 30, NULL),
(24, 'Ali Abdi', 0, 0, 'images/24.jpg', 28, NULL),
(25, 'Anis Ben Slimane', 0, 0, 'images/25.jpg', 21, NULL),
(26, 'Mouez Hassen', 0, 0, 'images/26.jpg', 27, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `scorers`
--

CREATE TABLE `scorers` (
  `id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `goals` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `scorers`
--

INSERT INTO `scorers` (`id`, `name`, `nationality`, `goals`) VALUES
('ARG10', 'Lionel Messi', 'Argentine', 3),
('EC13', 'Enner Valencia', 'Ecuador', 3),
('FR09', 'Olivier Giroud', 'France', 3),
('FR10', 'Kylian Mbappe', 'France', 5);

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

CREATE TABLE `teams` (
  `id_team` int(11) NOT NULL,
  `name_team` varchar(20) DEFAULT NULL,
  `win` int(11) DEFAULT 0,
  `draw` int(11) DEFAULT 0,
  `loss` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `teams`
--

INSERT INTO `teams` (`id_team`, `name_team`, `win`, `draw`, `loss`) VALUES
(1, 'Tunisia', 1, 1, 1),
(2, 'Danemark', 0, 1, 2),
(3, 'France', 2, 0, 1),
(4, 'Australia', 2, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

CREATE TABLE `tickets` (
  `id_ticket` varchar(20) NOT NULL,
  `matches` varchar(20) NOT NULL,
  `prices` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`id_ticket`, `matches`, `prices`) VALUES
('M01', 'Tunsia VS Denamark', 540),
('M02', 'Tunsia VS Australia', 320),
('M03', 'Tunsia VS France', 600);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `paiment`
--
ALTER TABLE `paiment`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_ticket` (`id_ticket`);

--
-- Index pour la table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id_player`);

--
-- Index pour la table `scorers`
--
ALTER TABLE `scorers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id_team`);

--
-- Index pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id_ticket`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `paiment`
--
ALTER TABLE `paiment`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `teams`
--
ALTER TABLE `teams`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `paiment`
--
ALTER TABLE `paiment`
  ADD CONSTRAINT `paiment_ibfk_1` FOREIGN KEY (`id_ticket`) REFERENCES `tickets` (`id_ticket`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
