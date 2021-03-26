-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 25 mars 2021 à 14:15
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `web`
--

-- --------------------------------------------------------

--
-- Structure de la table `Appartenance`
--

CREATE TABLE `Appartenance` (
  `id_entreprise` int(10) NOT NULL,
  `code_secteur_activité` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Convention`
--

CREATE TABLE `Convention` (
  `id_convention` int(10) NOT NULL,
  `id_stage` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `signature` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Entreprise`
--

CREATE TABLE `Entreprise` (
  `id_entreprise` int(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `localite` varchar(20) NOT NULL,
  `nbr_stagiaires_CESI` int(20) NOT NULL,
  `eva_stagiaires` int(20) NOT NULL,
  `confiance_pilote` varchar(20) NOT NULL,
  `id_stage` int(10) NOT NULL,
  `Id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Postuler`
--

CREATE TABLE `Postuler` (
  `id_stage` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `CV` text NOT NULL,
  `lm` text NOT NULL,
  `validation_stage` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Profil`
--

CREATE TABLE `Profil` (
  `id_profil` int(10) NOT NULL,
  `statut` varchar(20) NOT NULL,
  `Id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Promotin`
--

CREATE TABLE `Promotin` (
  `id_promo` int(10) NOT NULL,
  `nom_promo` varchar(20) NOT NULL,
  `année` int(4) NOT NULL,
  `centre` varchar(20) NOT NULL,
  `Id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `secteur_activite`
--

CREATE TABLE `secteur_activite` (
  `code_secteur_activite` int(20) NOT NULL,
  `nom_secteur_activite` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Stage`
--

CREATE TABLE `Stage` (
  `Id_stage` int(10) NOT NULL,
  `compétences` varchar(20) NOT NULL,
  `localite` varchar(20) NOT NULL,
  `type_promo` varchar(10) NOT NULL,
  `durée_stage` varchar(10) NOT NULL,
  `base_renumeration` int(10) NOT NULL,
  `date_offre` date NOT NULL,
  `place_offerte` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
  `id_user` int(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prénom` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Appartenance`
--
ALTER TABLE `Appartenance`
  ADD KEY `code_secteur_activité` (`code_secteur_activité`),
  ADD KEY `id_entreprise` (`id_entreprise`);

--
-- Index pour la table `Convention`
--
ALTER TABLE `Convention`
  ADD PRIMARY KEY (`id_convention`) USING BTREE,
  ADD KEY `id_stage` (`id_stage`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `Entreprise`
--
ALTER TABLE `Entreprise`
  ADD PRIMARY KEY (`id_entreprise`),
  ADD KEY `Id_user` (`Id_user`),
  ADD KEY `id_stage` (`id_stage`);

--
-- Index pour la table `Postuler`
--
ALTER TABLE `Postuler`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_stage` (`id_stage`);

--
-- Index pour la table `Profil`
--
ALTER TABLE `Profil`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `Id_user` (`Id_user`);

--
-- Index pour la table `Promotin`
--
ALTER TABLE `Promotin`
  ADD PRIMARY KEY (`id_promo`),
  ADD KEY `Id_user` (`Id_user`);

--
-- Index pour la table `secteur_activite`
--
ALTER TABLE `secteur_activite`
  ADD PRIMARY KEY (`code_secteur_activite`);

--
-- Index pour la table `Stage`
--
ALTER TABLE `Stage`
  ADD PRIMARY KEY (`Id_stage`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Convention`
--
ALTER TABLE `Convention`
  MODIFY `id_convention` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Entreprise`
--
ALTER TABLE `Entreprise`
  MODIFY `id_entreprise` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Profil`
--
ALTER TABLE `Profil`
  MODIFY `id_profil` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Promotin`
--
ALTER TABLE `Promotin`
  MODIFY `id_promo` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `secteur_activite`
--
ALTER TABLE `secteur_activite`
  MODIFY `code_secteur_activite` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Stage`
--
ALTER TABLE `Stage`
  MODIFY `Id_stage` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Appartenance`
--
ALTER TABLE `Appartenance`
  ADD CONSTRAINT `appartenance_ibfk_1` FOREIGN KEY (`id_entreprise`) REFERENCES `Entreprise` (`id_entreprise`) ON UPDATE CASCADE,
  ADD CONSTRAINT `appartenance_ibfk_2` FOREIGN KEY (`code_secteur_activité`) REFERENCES `secteur_activite` (`code_secteur_activite`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `Convention`
--
ALTER TABLE `Convention`
  ADD CONSTRAINT `convention_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `Utilisateurs` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `convention_ibfk_2` FOREIGN KEY (`id_stage`) REFERENCES `Stage` (`Id_stage`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `Entreprise`
--
ALTER TABLE `Entreprise`
  ADD CONSTRAINT `entreprise_ibfk_1` FOREIGN KEY (`id_stage`) REFERENCES `Stage` (`Id_stage`) ON UPDATE CASCADE,
  ADD CONSTRAINT `entreprise_ibfk_2` FOREIGN KEY (`Id_user`) REFERENCES `Utilisateurs` (`id_user`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `Postuler`
--
ALTER TABLE `Postuler`
  ADD CONSTRAINT `postuler_ibfk_1` FOREIGN KEY (`id_stage`) REFERENCES `Stage` (`Id_stage`) ON UPDATE CASCADE,
  ADD CONSTRAINT `postuler_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `Utilisateurs` (`id_user`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `Profil`
--
ALTER TABLE `Profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `Utilisateurs` (`id_user`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `Promotin`
--
ALTER TABLE `Promotion`
  ADD CONSTRAINT `promotin_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `Utilisateurs` (`id_user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
