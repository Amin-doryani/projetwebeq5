-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 18 fév. 2024 à 21:46
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `loyer`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `email_c` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `password_c` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email_c`, `phone`, `ville`, `password_c`) VALUES
(2, 'ayman', 'ayman', 'ayman@gmail.com', '0612345678', 'fes', 'ayman'),
(3, 'achraf', 'dawdi', 'achraf@gmail.com', '0612121212', 'fes', 'achraf');

-- --------------------------------------------------------

--
-- Structure de la table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `img`
--

INSERT INTO `img` (`id`, `id_p`, `url`) VALUES
(22, 1, 'pubimages/65d10b8e438dc9.14605652.jpg'),
(23, 1, 'pubimages/65d10b93aeb3b9.98745036.jfif'),
(24, 1, 'pubimages/65d10b9f6b6379.88624776.jfif'),
(25, 2, 'pubimages/65d10c0b317b63.80039870.jpg'),
(26, 2, 'pubimages/65d10c0f848510.19861827.jfif'),
(27, 3, 'pubimages/65d10c5d34ecb9.97752890.jfif'),
(28, 3, 'pubimages/65d10c60d9d320.07196037.jfif'),
(29, 4, 'pubimages/65d10cb0998842.22631660.jpg'),
(30, 4, 'pubimages/65d10cb999e610.72986818.jfif'),
(31, 5, 'pubimages/65d10d6b040a56.19636441.jfif'),
(32, 6, 'pubimages/65d10dbaa6f164.48758058.jfif'),
(33, 7, 'pubimages/65d10dfa62dcb1.15523409.jpg'),
(34, 8, 'pubimages/65d10e398530a0.84679596.jpg'),
(35, 9, 'pubimages/65d10e78bae9e8.53395661.jpg'),
(36, 9, 'pubimages/65d10ea59e8b97.58209504.jpg'),
(37, 9, 'pubimages/65d10ed3c30817.16844866.jpg'),
(38, 10, 'pubimages/65d113d17cc338.07923559.jpg'),
(39, 11, 'pubimages/65d1140bb21fb8.60333903.jfif'),
(40, 12, 'pubimages/65d11441a3e228.18023923.jfif'),
(41, 13, 'pubimages/65d1147f9c87b7.95897555.jfif'),
(42, 14, 'pubimages/65d114cb9f27b3.57240960.jfif'),
(43, 15, 'pubimages/65d11507888da6.71471681.jfif');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `idc1` int(11) NOT NULL,
  `idc2` int(11) NOT NULL,
  `mss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descr` varchar(250) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `adrs` varchar(50) NOT NULL,
  `meubles` varchar(10) NOT NULL,
  `leau` varchar(10) NOT NULL,
  `elec` varchar(10) NOT NULL,
  `wifi` varchar(10) NOT NULL,
  `prix` int(11) NOT NULL,
  `idc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id`, `title`, `descr`, `ville`, `adrs`, `meubles`, `leau`, `elec`, `wifi`, `prix`, `idc`) VALUES
(1, 'tala yousef al hoceima', 'this is the 1st bub in our website and this is the description of it ', 'Al hoceima', 'TALA YOUSEF AL HOCEAMA', '0', '1', 'yes', 'yes', 3200, 2),
(2, 'sidi 3abid', 'this is the 2nd pub in our website', 'Al hoceima', 'SIDI ABID AL HOCIEMA', '1', '1', 'yes', 'no', 3200, 2),
(3, '7ay tighanimin', 'this is the 3ed pub in our website', 'fes', 'tighanimin fes 22', '1', '1', 'yes', 'yes', 4000, 2),
(4, 'maknas, hay lala zehra', 'this is the 4th pub in our website', 'maknas', 'maknas hay lala zehra', '1', '1', 'yes', 'yes', 4100, 2),
(5, 'tanger hay moulay rachi', 'this is the 5th pub', 'tanger', 'tanger hay lala zehra', '1', '0', 'no', 'no', 2900, 2),
(6, 'tanger hay moulay rachi', 'this is  the 6th pub', 'tanger', 'tanger hay lala zehra', '0', '1', 'yes', 'no', 2900, 2),
(7, 'sidi momen', 'this is the 7th pub ', 'fes', 'fes sidi momen ', '1', '1', 'yes', 'no', 1500, 2),
(8, 'minador al hoceima', 'this is the 8th pub', 'fes', 'fes sidi momen ', '0', '1', 'yes', 'yes', 5300, 2),
(9, 'kalabonita', 'this is the 9th pub', 'al hoceima', 'kalabonita al hoceima', '1', '1', 'yes', 'yes', 8000, 2),
(10, 'sidi momen', 'this is the 10th pub', 'fes', 'fes 1000 tanger', '1', '1', 'yes', 'no', 3000, 2),
(11, 'our 11 pub', 'this is the 11th pub', 'tanger', 'tanger hay lala zehra', '0', '1', 'yes', 'yes', 7200, 2),
(12, '12 pub', 'our 12 pub', 'fes', 'fes', '1', '1', 'yes', 'yes', 14000, 2),
(13, 'molay ya39oub fes', 'this is  the 13th pub', 'fes', 'fes molay ya39ob', '1', '1', 'yes', 'yes', 5300, 2),
(14, 'pub 15', 'this is the 15th pub', 'tanger', 'tanger', '0', '0', 'no', 'no', 6000, 2),
(15, 'pub 16', 'pub 16th', 'taza', 'taza', '0', '0', 'yes', 'yes', 12000, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
