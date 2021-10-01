-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 01 oct. 2021 à 18:25
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gebcoservice`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiantannée1`
--

CREATE TABLE `etudiantannée1` (
  `IdEtu` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Pays` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mdp` varchar(30) NOT NULL,
  `SecSem1` text NOT NULL,
  `SecSem2` text NOT NULL,
  `SecSem3` text NOT NULL,
  `PreSem1` text NOT NULL,
  `PreSem2` text NOT NULL,
  `PreSem3` text NOT NULL,
  `TleSem1` text NOT NULL,
  `TleSem2` text NOT NULL,
  `TleSem3` text NOT NULL,
  `RlveNote` text NOT NULL,
  `Attestation` text NOT NULL,
  `Passport` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiantannée1`
--

INSERT INTO `etudiantannée1` (`IdEtu`, `Nom`, `Prenom`, `Pays`, `Email`, `Mdp`, `SecSem1`, `SecSem2`, `SecSem3`, `PreSem1`, `PreSem2`, `PreSem3`, `TleSem1`, `TleSem2`, `TleSem3`, `RlveNote`, `Attestation`, `Passport`) VALUES
(1, 'chitou', 'kismath', 'france', 'kissmachitou@gmail.coma', 'kismath0512', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiantannée1`
--
ALTER TABLE `etudiantannée1`
  ADD PRIMARY KEY (`IdEtu`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiantannée1`
--
ALTER TABLE `etudiantannée1`
  MODIFY `IdEtu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
