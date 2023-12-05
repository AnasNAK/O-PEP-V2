-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 04 déc. 2023 à 23:56
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
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `IdArticle` int(11) NOT NULL,
  `ArticleName` varchar(255) NOT NULL,
  `ArticleDes` varchar(255) NOT NULL,
  `ArticleImg` varchar(255) DEFAULT NULL,
  `ArticleSt` int(11) DEFAULT 1,
  `ThemeId` int(11) DEFAULT NULL,
  `TagId` int(11) DEFAULT NULL,
  `UserId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `IdCart` int(11) NOT NULL,
  `PlantId` int(11) DEFAULT NULL,
  `UserId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `IdCategorie` int(11) NOT NULL,
  `CategorieName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `idComment` int(11) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `cmntSt` int(11) DEFAULT 1,
  `sessionId` int(11) NOT NULL,
  `ArticleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fav`
--

CREATE TABLE `fav` (
  `idfav` int(11) NOT NULL,
  `articleId` int(11) DEFAULT NULL,
  `sessionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Structure de la table `reactart`
--

CREATE TABLE `reactart` (
  `idreact` int(11) NOT NULL,
  `reactart` int(11) NOT NULL,
  `articleId` int(11) DEFAULT NULL,
  `sessionId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reactcmnt`
--

CREATE TABLE `reactcmnt` (
  `idReact` int(11) NOT NULL,
  `reactCmnt` int(11) NOT NULL,
  `commentId` int(11) DEFAULT NULL,
  `sessionId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `IdTheme` int(11) NOT NULL,
  `ThemeName` varchar(50) NOT NULL,
  `ThemeDesc` varchar(255) NOT NULL,
  `ThemImg` varchar(255) DEFAULT NULL,
  `TagId` int(11) DEFAULT NULL
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
(7, 'test', 'test', 'test@gmail.com', '$2y$10$A/fx.WhZEFDlyEkPuxTeTukMq5gwFYnJa8Zto/YWWeKJ.Xn8CJdk2', 2),
(9, 'Qui odio et et eu si', 'Nihil neque ea labor', 'tasyvizyj@mailinator.com', '$2y$10$GjzJJTAVG19v2/5bHiqGNerjR2aJDGqsF1uGKrU2M1ISj5R3Rmjbe', 2),
(10, 'nakhli', 'yxca', '123@gmail.com', '$2y$10$PRt1hcYYYohDw0n2wfEzBOz8I/YFdVyxhko82YokgWHp6rH06atfu', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`IdArticle`),
  ADD KEY `FK_ThAc_id` (`ThemeId`),
  ADD KEY `FK_TgAc_id` (`TagId`),
  ADD KEY `FK_UsAc_id` (`UserId`);

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
  ADD KEY `fk_usid` (`UserId`),
  ADD KEY `fk_plid` (`PlantId`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`),
  ADD KEY `FK_cmntAC_id` (`ArticleId`);

--
-- Index pour la table `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`idfav`),
  ADD KEY `FK_artFav_id` (`articleId`);

--
-- Index pour la table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`IdPlant`),
  ADD KEY `CategorieId` (`CategorieId`);

--
-- Index pour la table `reactart`
--
ALTER TABLE `reactart`
  ADD PRIMARY KEY (`idreact`),
  ADD KEY `FK_artRct_id` (`articleId`);

--
-- Index pour la table `reactcmnt`
--
ALTER TABLE `reactcmnt`
  ADD PRIMARY KEY (`idReact`),
  ADD KEY `FK_cmntRct_id` (`commentId`);

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
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`IdTheme`),
  ADD KEY `FK_tgTH_id` (`TagId`);

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
  MODIFY `IdCart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `IdCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `command`
--
ALTER TABLE `command`
  MODIFY `IdCommand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fav`
--
ALTER TABLE `fav`
  MODIFY `idfav` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `plant`
--
ALTER TABLE `plant`
  MODIFY `IdPlant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `reactart`
--
ALTER TABLE `reactart`
  MODIFY `idreact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reactcmnt`
--
ALTER TABLE `reactcmnt`
  MODIFY `idReact` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `IdTheme` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_TgAc_id` FOREIGN KEY (`TagId`) REFERENCES `tag` (`idTag`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_ThAc_id` FOREIGN KEY (`ThemeId`) REFERENCES `theme` (`IdTheme`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_UsAc_id` FOREIGN KEY (`UserId`) REFERENCES `user` (`IdUser`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `fk_plid` FOREIGN KEY (`PlantId`) REFERENCES `plant` (`IdPlant`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_usid` FOREIGN KEY (`UserId`) REFERENCES `user` (`IdUser`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_cmntAC_id` FOREIGN KEY (`ArticleId`) REFERENCES `article` (`IdArticle`) ON DELETE CASCADE;

--
-- Contraintes pour la table `fav`
--
ALTER TABLE `fav`
  ADD CONSTRAINT `FK_artFav_id` FOREIGN KEY (`articleId`) REFERENCES `article` (`IdArticle`) ON DELETE CASCADE;

--
-- Contraintes pour la table `plant`
--
ALTER TABLE `plant`
  ADD CONSTRAINT `plant_ibfk_1` FOREIGN KEY (`CategorieId`) REFERENCES `categorie` (`IdCategorie`);

--
-- Contraintes pour la table `reactart`
--
ALTER TABLE `reactart`
  ADD CONSTRAINT `FK_artRct_id` FOREIGN KEY (`articleId`) REFERENCES `article` (`IdArticle`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reactcmnt`
--
ALTER TABLE `reactcmnt`
  ADD CONSTRAINT `FK_cmntRct_id` FOREIGN KEY (`commentId`) REFERENCES `comment` (`idComment`) ON DELETE CASCADE;

--
-- Contraintes pour la table `theme`
--
ALTER TABLE `theme`
  ADD CONSTRAINT `FK_tgTH_id` FOREIGN KEY (`TagId`) REFERENCES `tag` (`idTag`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_rId_us` FOREIGN KEY (`RoleId`) REFERENCES `role` (`IdRole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
