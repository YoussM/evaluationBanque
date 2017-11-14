-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 14 nov. 2017 à 11:14
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `EvaluationBanque`
--

-- --------------------------------------------------------

--
-- Structure de la table `ExoBanque`
--

CREATE TABLE `ExoBanque` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ExoBanque`
--

INSERT INTO `ExoBanque` (`id`, `name`, `type`, `amount`) VALUES
(27, 'cmpt1', 'Pel', '100.54'),
(28, 'cmpt2', 'Pel', '100.13'),
(29, 'cmpt3', 'Pel', '3100.18'),
(30, 'zertyui', 'Pel', '145600.00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ExoBanque`
--
ALTER TABLE `ExoBanque`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ExoBanque`
--
ALTER TABLE `ExoBanque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
