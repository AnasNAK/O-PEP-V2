-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 06 déc. 2023 à 11:37
-- Version du serveur : 8.0.35
-- Version de PHP : 8.2.4

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
  `idArticle` int NOT NULL,
  `ArticleName` varchar(255) NOT NULL,
  `ArticleDes` varchar(255) NOT NULL,
  `ArticleImg` varchar(255) DEFAULT NULL,
  `ArticleSt` int DEFAULT '1',
  `ThemeId` int DEFAULT NULL,
  `TagId` int DEFAULT NULL,
  `UserId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `ArticleName`, `ArticleDes`, `ArticleImg`, `ArticleSt`, `ThemeId`, `TagId`, `UserId`) VALUES
(1, 'article title', 'Using Lorem ipsum to focus attention on graphic elements in a webpage design proposal · One of the earliest examples of the Lorem ipsum', 'logo.png', 1, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `art_tag`
--

CREATE TABLE `art_tag` (
  `ArticleId` int DEFAULT NULL,
  `TagID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `IdCart` int NOT NULL,
  `PlantId` int DEFAULT NULL,
  `UserId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `IdCategorie` int NOT NULL,
  `CategorieName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

CREATE TABLE `command` (
  `IdCommand` int NOT NULL,
  `TotalPrice` int NOT NULL,
  `PlantId` int DEFAULT NULL,
  `UserId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `idComment` int NOT NULL,
  `Content` varchar(255) NOT NULL,
  `cmntSt` int DEFAULT '1',
  `sessionId` int NOT NULL,
  `ArticleId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fav`
--

CREATE TABLE `fav` (
  `idfav` int NOT NULL,
  `articleId` int DEFAULT NULL,
  `sessionId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `plant`
--

CREATE TABLE `plant` (
  `IdPlant` int NOT NULL,
  `Name` varchar(30) NOT NULL,
  `price` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `CategorieId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reactart`
--

CREATE TABLE `reactart` (
  `idreact` int NOT NULL,
  `reactart` int NOT NULL,
  `articleId` int DEFAULT NULL,
  `sessionId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reactcmnt`
--

CREATE TABLE `reactcmnt` (
  `idReact` int NOT NULL,
  `reactCmnt` int NOT NULL,
  `commentId` int DEFAULT NULL,
  `sessionId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `IdRole` int NOT NULL,
  `RoleName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `idTag` int NOT NULL,
  `TagName` varchar(20) NOT NULL,
  `Themeid` int DEFAULT NULL,
  `TagSt` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tag`
--

INSERT INTO `tag` (`idTag`, `TagName`, `Themeid`, `TagSt`) VALUES
(1, 'shadowPlants', 1, 1),
(2, '#HouseDeco', 1, 1),
(3, '#seeds', 1, 1),
(4, '#plantlover', 1, 1),
(5, '#gardenlife', 1, 1),
(6, '#IndoorGardenMagic', 2, 1),
(7, '#HouseplantHaven', 2, 1),
(8, '#ApartmentGardening', 2, 1),
(9, '#GreenSpacesInCity', 2, 1),
(10, '#SmallSpaceGarden', 2, 1),
(16, '#SustainableGarden', 3, 1),
(17, '#OrganicGardenLife', 3, 1),
(18, '#NativePlantLove', 3, 1),
(19, '#GrowGreen', 3, 1),
(20, '#ConsciousGardening', 3, 1),
(21, '#MindfulGardening', 4, 1),
(22, '#PlantMeditation', 4, 1),
(23, '#WellnessOasis', 4, 1),
(24, '#TherapeuticGardens', 4, 1),
(25, '#StressFreeGreen', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `IdTheme` int NOT NULL,
  `ThemeName` varchar(50) NOT NULL,
  `ThemeDesc` varchar(255) NOT NULL,
  `ThemImg` varchar(255) DEFAULT NULL,
  `ThemeSt` int DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`IdTheme`, `ThemeName`, `ThemeDesc`, `ThemImg`, `ThemeSt`) VALUES
(1, 'Edible Gardens', 'An edible garden is a great way to put healthy, inexpensive food on your table each day. Cooking from your garden with fresh, organic fruits and vegetables is not as difficult as it may seem.', '25e8355d-e4e6-4460-a1d9-b4d87ad22f69', 1),
(2, 'Sustainable Gardening', 'Emphasize eco-friendly and sustainable gardening practices.Feature articles on organic gardening, permaculture, and using native plants to support local ecosystems.\r\n', NULL, 1),
(3, 'Healing Gardens', 'Explore the therapeutic and wellness aspects of gardening.Include information on medicinal plants, aromatherapy gardens, and the mental health benefits of spending time in nature.', NULL, 1),
(4, 'Urban Jungle', 'Focus on indoor plants, gardening in small spaces, and incorporating greenery into urban living.Provide tips on selecting and caring for houseplants that thrive indoors.\r\n\r\n', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `IdUser` int NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `RoleId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  ADD PRIMARY KEY (`idArticle`),
  ADD KEY `FK_ThAc_id` (`ThemeId`),
  ADD KEY `FK_TgAc_id` (`TagId`),
  ADD KEY `FK_UsAc_id` (`UserId`);

--
-- Index pour la table `art_tag`
--
ALTER TABLE `art_tag`
  ADD KEY `fk_pivot_art_id` (`ArticleId`),
  ADD KEY `fk_pivot_tag_id` (`TagID`);

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
  ADD PRIMARY KEY (`idTag`),
  ADD KEY `FK_THtg_id` (`Themeid`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`IdTheme`);

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
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idArticle` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `IdCart` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `IdCategorie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `command`
--
ALTER TABLE `command`
  MODIFY `IdCommand` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fav`
--
ALTER TABLE `fav`
  MODIFY `idfav` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `plant`
--
ALTER TABLE `plant`
  MODIFY `IdPlant` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `reactart`
--
ALTER TABLE `reactart`
  MODIFY `idreact` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reactcmnt`
--
ALTER TABLE `reactcmnt`
  MODIFY `idReact` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `IdRole` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `idTag` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `IdTheme` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- Contraintes pour la table `art_tag`
--
ALTER TABLE `art_tag`
  ADD CONSTRAINT `fk_pivot_art_id` FOREIGN KEY (`ArticleId`) REFERENCES `article` (`idArticle`),
  ADD CONSTRAINT `fk_pivot_tag_id` FOREIGN KEY (`TagID`) REFERENCES `tag` (`idTag`);

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
  ADD CONSTRAINT `FK_cmntAC_id` FOREIGN KEY (`ArticleId`) REFERENCES `article` (`idArticle`) ON DELETE CASCADE;

--
-- Contraintes pour la table `fav`
--
ALTER TABLE `fav`
  ADD CONSTRAINT `FK_artFav_id` FOREIGN KEY (`articleId`) REFERENCES `article` (`idArticle`) ON DELETE CASCADE;

--
-- Contraintes pour la table `plant`
--
ALTER TABLE `plant`
  ADD CONSTRAINT `plant_ibfk_1` FOREIGN KEY (`CategorieId`) REFERENCES `categorie` (`IdCategorie`);

--
-- Contraintes pour la table `reactart`
--
ALTER TABLE `reactart`
  ADD CONSTRAINT `FK_artRct_id` FOREIGN KEY (`articleId`) REFERENCES `article` (`idArticle`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reactcmnt`
--
ALTER TABLE `reactcmnt`
  ADD CONSTRAINT `FK_cmntRct_id` FOREIGN KEY (`commentId`) REFERENCES `comment` (`idComment`) ON DELETE CASCADE;

--
-- Contraintes pour la table `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `FK_THtg_id` FOREIGN KEY (`Themeid`) REFERENCES `theme` (`IdTheme`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_rId_us` FOREIGN KEY (`RoleId`) REFERENCES `role` (`IdRole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
