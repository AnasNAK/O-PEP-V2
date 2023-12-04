-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 04 déc. 2023 à 10:27
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `opep`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `IdCart` int(11) NOT NULL,
  `PlantId` int(11) DEFAULT NULL,
  `UserId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`IdCart`, `PlantId`, `UserId`) VALUES
(31, 12, 7);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `IdCategorie` int(11) NOT NULL,
  `CategorieName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`IdCategorie`, `CategorieName`) VALUES
(8, 'waaaaaaaaaaa'),
(9, 'anas');

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

CREATE TABLE `command` (
  `IdCommand` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `PlantId` int(11) DEFAULT NULL,
  `UserId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `command`
--

INSERT INTO `command` (`IdCommand`, `TotalPrice`, `PlantId`, `UserId`) VALUES
(1, 1066, 12, 7),
(2, 1066, 11, 7),
(3, 244, 12, 7),
(4, 40, 10, 7),
(5, 947, 13, 7),
(6, 40, 10, 7),
(7, 862, 11, 7),
(8, 862, 10, 7),
(9, 40, 10, 7),
(10, 1769, 11, 7),
(11, 1769, 13, 7),
(12, 987, 13, 7),
(13, 987, 10, 7),
(14, 244, 12, 7),
(15, 244, 12, 7);

-- --------------------------------------------------------

--
-- Structure de la table `plant`
--

CREATE TABLE `plant` (
  `IdPlant` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `CategorieId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plant`
--

INSERT INTO `plant` (`IdPlant`, `Name`, `price`, `image`, `CategorieId`) VALUES
(10, 'Fredericka', 40, 'uploads/6567b64e423dc_png-7.png', 9),
(11, 'Garrett Trevino', 822, 'uploads/6567d0a9bc294_png-5.png', 8),
(12, 'Ruth Rodriguez', 244, 'uploads/6567ed82d9e73_png-4.png', 8),
(13, 'Neville Randolph', 947, 'uploads/6567ed8ea143c_png-5.png', 9),
(14, 'Candice Melendez', 904, 'uploads/6567ed9c4661a_png-2.png', 9),
(15, 'Jena Goff', 324, 'uploads/6567edbf55aa0_png-1.png', 9),
(16, 'Unity Carey', 279, 'uploads/6567edcb42e2d_png-3.png', 8),
(17, 'Kibo Robbins', 770, 'uploads/6567edde1cbf3_png-6.png', 8),
(18, 'Azalia Gilliam', 871, 'uploads/6567edf39fea5_png-5.png', 8),
(19, 'Ali Bowers', 29, 'uploads/6568416d05a84_png-4.png', 8);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `IdRole` int(11) NOT NULL,
  `RoleName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`IdRole`, `RoleName`) VALUES
(1, 'client'),
(2, 'admin'),
(3, 'superAdmin'),
(4, 'blocked');

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `idTag` int(11) NOT NULL,
  `TagName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `IdUser` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `RoleId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`IdUser`, `FirstName`, `LastName`, `Email`, `Password`, `RoleId`) VALUES
(5, 'anas', 'nakhli', 'anas@gmail.com', '$2y$10$FhAbRWFrkbmk2wg3Q23G0uph0jWTaq2Xx2yOUmce8Gv5BZMaI.ZPK', 3),
(6, 'nakhli', 'nak', 'nak@gmail.com', '$2y$10$sErFQnsQ32s4310q2zLne.YBHLiEce3MS5sZNQA556ntuwOdQawL2', 2),
(7, 'test', 'test', 'test@gmail.com', '$2y$10$A/fx.WhZEFDlyEkPuxTeTukMq5gwFYnJa8Zto/YWWeKJ.Xn8CJdk2', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`IdCart`),
  ADD KEY `PlantId` (`PlantId`),
  ADD KEY `UserId` (`UserId`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`IdCategorie`);

--
-- Index pour la table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`IdCommand`),
  ADD KEY `fk_plid` (`PlantId`),
  ADD KEY `fk_usid` (`UserId`);

--
-- Index pour la table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`IdPlant`),
  ADD KEY `CategorieId` (`CategorieId`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`IdRole`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`idTag`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `fk_rId_us` (`RoleId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `IdCart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `IdCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `command`
--
ALTER TABLE `command`
  MODIFY `IdCommand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `plant`
--
ALTER TABLE `plant`
  MODIFY `IdPlant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `IdRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `idTag` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`PlantId`) REFERENCES `plant` (`IdPlant`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `user` (`IdUser`);

--
-- Contraintes pour la table `command`
--
ALTER TABLE `command`
  ADD CONSTRAINT `fk_plid` FOREIGN KEY (`PlantId`) REFERENCES `plant` (`IdPlant`),
  ADD CONSTRAINT `fk_usid` FOREIGN KEY (`UserId`) REFERENCES `user` (`IdUser`);

--
-- Contraintes pour la table `plant`
--
ALTER TABLE `plant`
  ADD CONSTRAINT `plant_ibfk_1` FOREIGN KEY (`CategorieId`) REFERENCES `categorie` (`IdCategorie`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_rId_us` FOREIGN KEY (`RoleId`) REFERENCES `role` (`IdRole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
