-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 30 mars 2024 à 18:44
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
(2, 'ayman', 'ayman', 'ayman@gmail.com', '612345678', 'fes', 'ayman123'),
(3, 'ziko', 'therawi', 'achraf@gmail.com', '612121212', 'fes', 'achraf'),
(4, 'hakimi', 'achraf', 'user@loyer.ma', '1840883', 'fes', 'admin'),
(8, 'achraf', 'rif', 'achrafrif@gmail.com', '40405050', 'fes', 'achrafrif');

--
-- Déclencheurs `client`
--
DELIMITER $$
CREATE TRIGGER `ajouter_client_a_image` AFTER INSERT ON `client` FOR EACH ROW BEGIN
    INSERT INTO clientimg (url, idc, client_id)
    VALUES (' clientimages/profile.png', NEW.id, NEW.id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `clientimg`
--

CREATE TABLE `clientimg` (
  `id` int(11) NOT NULL,
  `idc` int(11) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clientimg`
--

INSERT INTO `clientimg` (`id`, `idc`, `url`) VALUES
(1, 4, ' clientimages/66017acd589318.95610676.jpg'),
(8, 8, 'clientimages/profile.png'),
(9, 3, 'clientimages/profile.png'),
(10, 2, ' clientimages/66006cebc82641.15880800.jfif');

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
(34, 8, 'pubimages/65d10e398530a0.84679596.jpg'),
(35, 9, 'pubimages/65d10e78bae9e8.53395661.jpg'),
(36, 9, 'pubimages/65d10ea59e8b97.58209504.jpg'),
(37, 9, 'pubimages/65d10ed3c30817.16844866.jpg'),
(38, 10, 'pubimages/65d113d17cc338.07923559.jpg'),
(39, 11, 'pubimages/65d1140bb21fb8.60333903.jfif'),
(40, 12, 'pubimages/65d11441a3e228.18023923.jfif'),
(44, 16, 'pubimages/65da22d64e5fb6.96662785.png'),
(66, 13, 'pubimages/660844ba2660e4.68851347.jpg'),
(67, 13, 'pubimages/660844bdb0faf6.08825197.jpg'),
(68, 13, 'pubimages/660844c6274a11.53240428.jfif'),
(69, 13, 'pubimages/660844caa0ddd0.01365554.jpg'),
(70, 13, 'pubimages/660844ce08f471.71150445.jpg'),
(71, 13, 'pubimages/660844d27e2168.12990424.jfif'),
(72, 13, 'pubimages/660844d6df1186.56855735.jfif'),
(73, 13, 'pubimages/660844dc79fa22.52318157.jfif'),
(74, 13, 'pubimages/660844e7ef11c8.20182631.jpg'),
(75, 13, 'pubimages/660844f6b89f33.88489435.jfif');

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
  `descr` varchar(10000) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `adrs` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `idc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id`, `title`, `descr`, `ville`, `adrs`, `prix`, `idc`) VALUES
(1, 'tala yousef al hoceima', 'this is the 1st bub in our website and this is the description of it ', 'Al hoceima', 'TALA YOUSEF AL HOCEAMA', 3200, 2),
(2, 'sidi 3abid', 'this is the 2nd pub in our website', 'Al hoceima', 'SIDI ABID AL HOCIEMA', 3200, 2),
(3, '7ay tighanimin', 'this is the 3ed pub in our website', 'fes', 'tighanimin fes 22', 4000, 2),
(4, 'maknas, hay lala zehra', 'this is the 4th pub in our website', 'maknas', 'maknas hay lala zehra', 4100, 2),
(5, 'tanger hay moulay rachi', 'this is the 5th pub', 'tanger', 'tanger hay lala zehra', 2900, 2),
(9, 'kalabonita', 'this is the 9th pub', 'al hoceima', 'kalabonita al hoceima', 8000, 2),
(10, 'sidi momen', 'this is the 10th pub', 'fes', 'fes 1000 tanger', 3000, 2),
(11, 'our 11 pub', 'this is the 11th pub', 'tanger', 'tanger hay lala zehra', 7200, 2),
(12, '12 pub', 'our 12 pubb', 'fes', 'fes', 14000, 2),
(13, 'Al hoceima 12 kalabonita', 'orem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, quasi sint fuga tenetur, deleniti modi aperiam eos', 'al hoceima', 'al hoceima 12 kalabonita', 3500, 4);

-- --------------------------------------------------------

--
-- Structure de la table `savep`
--

CREATE TABLE `savep` (
  `id` int(11) NOT NULL,
  `idc` int(11) NOT NULL,
  `idp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `savep`
--

INSERT INTO `savep` (`id`, `idc`, `idp`) VALUES
(41, 4, 17);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clientimg`
--
ALTER TABLE `clientimg`
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
-- Index pour la table `savep`
--
ALTER TABLE `savep`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `clientimg`
--
ALTER TABLE `clientimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `savep`
--
ALTER TABLE `savep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
