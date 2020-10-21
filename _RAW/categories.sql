-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 21 Octobre 2020 à 08:49
-- Version du serveur :  5.1.73
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `jpof`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(32) NOT NULL,
  `building_id` int(3) NOT NULL,
  `category_number` varchar(32) NOT NULL,
  `category_email` varchar(32) NOT NULL,
  `category_slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `building_id`, `category_number`, `category_email`, `category_slug`) VALUES
(1, 'Technique', 1, '0123456789', 'a@a.a', 'technique'),
(2, 'Arts Appliqués', 1, '0123456789', 'a@a.a', 'arts-appliques'),
(3, 'Économique & Social', 2, '0123456789', 'a@a.a', 'economiquesocial'),
(5, 'Pédagogique', 5, '0123456789', 'a@a.a', 'pedagogique'),
(6, 'Paramédical', 3, '0123456789', 'a@a.a', 'paramedical');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
