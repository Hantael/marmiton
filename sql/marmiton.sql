-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 25 Janvier 2017 à 14:07
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `marmiton`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_recette` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `auteur_com` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE `ingredient` (
  `id_recette` int(11) NOT NULL,
  `nom_ingre` text NOT NULL,
  `poid` float NOT NULL,
  `unite_poid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `titre` text NOT NULL,
  `budget` int(11) NOT NULL,
  `temps_prep` int(11) NOT NULL,
  `difficultee` int(11) NOT NULL,
  `nb_personne` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `origine` text NOT NULL,
  `id_recette` int(11) NOT NULL,
  `recette` text NOT NULL,
  `photo` text NOT NULL,
  `proposition_repas` text NOT NULL,
  `auteur` text NOT NULL,
  `date_crea` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `regime_recette`
--

CREATE TABLE `regime_recette` (
  `id_recette` int(11) NOT NULL,
  `vegetarien` tinyint(1) DEFAULT NULL,
  `vegetalien` tinyint(1) DEFAULT NULL,
  `no_gluten` tinyint(1) DEFAULT NULL,
  `pregnent` tinyint(1) DEFAULT NULL,
  `no_lactose` tinyint(1) DEFAULT NULL,
  `no_porc` tinyint(1) DEFAULT NULL,
  `no_oil` tinyint(1) DEFAULT NULL,
  `no_arach` tinyint(1) DEFAULT NULL,
  `no_coque` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_recette`);

--
-- Index pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id_recette`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id_recette`);

--
-- Index pour la table `regime_recette`
--
ALTER TABLE `regime_recette`
  ADD PRIMARY KEY (`id_recette`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
