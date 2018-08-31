-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mysqldb
-- Généré le :  ven. 31 août 2018 à 13:48
-- Version du serveur :  5.7.22
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `COGIP`
--

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

CREATE TABLE `factures` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  `objet` varchar(255) NOT NULL,
  `fk_id_societe` int(10) NOT NULL,
  `fk_id_personne` int(10) UNSIGNED NOT NULL,
  `fk_id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `factures`
--

INSERT INTO `factures` (`id`, `numero`, `date`, `objet`, `fk_id_societe`, `fk_id_personne`, `fk_id_type`) VALUES
(5, 'Q055L9Y29', '2018-08-23 06:10:07', 'achat', 4, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Personnes`
--

CREATE TABLE `Personnes` (
  `id_personne` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(17) DEFAULT NULL,
  `Prénom` varchar(15) DEFAULT NULL,
  `Telephone` int(14) DEFAULT NULL,
  `Email` varchar(29) DEFAULT NULL,
  `societe_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Personnes`
--

INSERT INTO `Personnes` (`id_personne`, `Nom`, `Prénom`, `Telephone`, `Email`, `societe_id`) VALUES
(1, 'Charrette', 'Valerie', 450693922, 'ValerieCharrette@armyspy.com', 2),
(2, 'Bienvenue', 'Eloise', 454493821, 'EloiseBienvenue@dayrep.com ', 5),
(3, 'Courcelle', 'Dan', 454488831, 'Courcelledan@dayrep.com ', 1),
(4, 'Bilodeau', 'Mathieu', 455683831, 'MathieuBilodeau@teleworm.us', 1),
(5, 'Proux', 'Theo', 447693824, 'TheoeProux@jourrapide.com', 4);

-- --------------------------------------------------------

--
-- Structure de la table `societes`
--

CREATE TABLE `societes` (
  `id_societe` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `pays` varchar(45) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `tva` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `societes`
--

INSERT INTO `societes` (`id_societe`, `nom`, `adresse`, `pays`, `telephone`, `tva`) VALUES
(1, 'Stark Inc', 'Avengers Tower, New York', 'USA', '+15552525', '123456789'),
(2, 'Chez Léon', 'Rue des moules, 75 1040 Etterbeek', 'Belgique', '022225588', '478258123'),
(3, 'Café du Commerce', 'Rue de la gare, 79 1030 Schaerbeek', 'Belgique', '023365558', '456321789'),
(4, 'Ta mère', 'Rue du Pus, 25 1000 Bruxelles', 'Belgique', '0478225599', '987654321'),
(5, 'La Raie', 'Rue de la, Lunette, 25 4563 Montcucq', 'France', '+33166555485558', ''),
(6, 'Wayne Industries', 'Rue la chauve-souris, 69, 5300 La Cave', 'Belgique', '0498554422', '');

-- --------------------------------------------------------

--
-- Structure de la table `societe_as_type`
--

CREATE TABLE `societe_as_type` (
  `societe_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `societe_as_type`
--

INSERT INTO `societe_as_type` (`societe_id`, `type_id`) VALUES
(2, 2),
(2, 1),
(1, 1),
(5, 2),
(4, 1),
(6, 1),
(6, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_type`, `type`) VALUES
(1, 'Fournisseur'),
(2, 'Client');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_societe` (`fk_id_societe`),
  ADD KEY `fk_id_personne` (`fk_id_personne`),
  ADD KEY `fk_id_type` (`fk_id_type`);

--
-- Index pour la table `Personnes`
--
ALTER TABLE `Personnes`
  ADD PRIMARY KEY (`id_personne`),
  ADD KEY `societe_id` (`societe_id`);

--
-- Index pour la table `societes`
--
ALTER TABLE `societes`
  ADD PRIMARY KEY (`id_societe`);

--
-- Index pour la table `societe_as_type`
--
ALTER TABLE `societe_as_type`
  ADD KEY `ID_SOCIETE` (`societe_id`),
  ADD KEY `ID_TYPE` (`type_id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `factures`
--
ALTER TABLE `factures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Personnes`
--
ALTER TABLE `Personnes`
  MODIFY `id_personne` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `societes`
--
ALTER TABLE `societes`
  MODIFY `id_societe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `factures_ibfk_1` FOREIGN KEY (`fk_id_personne`) REFERENCES `Personnes` (`id_personne`),
  ADD CONSTRAINT `factures_ibfk_2` FOREIGN KEY (`fk_id_societe`) REFERENCES `societes` (`id_societe`),
  ADD CONSTRAINT `factures_ibfk_3` FOREIGN KEY (`fk_id_type`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `Personnes`
--
ALTER TABLE `Personnes`
  ADD CONSTRAINT `societe_id` FOREIGN KEY (`societe_id`) REFERENCES `societes` (`id_societe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `societe_as_type`
--
ALTER TABLE `societe_as_type`
  ADD CONSTRAINT `ID_SOCIETE` FOREIGN KEY (`societe_id`) REFERENCES `societes` (`id_societe`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ID_TYPE` FOREIGN KEY (`type_id`) REFERENCES `type` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
