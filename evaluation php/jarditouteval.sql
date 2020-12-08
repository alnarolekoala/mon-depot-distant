-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 08 déc. 2020 à 08:08
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Base de données : `jarditoueval`
--
CREATE DATABASE IF NOT EXISTS `jarditoueval` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `jarditoueval`;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Reference` varchar(50) DEFAULT NULL,
  `Libelle` varchar(50) DEFAULT NULL,
  `Prix` int(11) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `Couleur` varchar(50) DEFAULT NULL,
  `ajout` date DEFAULT NULL,
  `modif` varchar(255) DEFAULT NULL,
  `bloqué` varchar(50) DEFAULT NULL,
  `datemodif` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`ID`, `Reference`, `Libelle`, `Prix`, `Stock`, `Couleur`, `ajout`, `modif`, `bloqué`, `datemodif`) VALUES
(1, 'barb002', 'TRIKE', 249, 1, 'Noir', '2020-12-02', NULL, 'bloqué', '2020-12-08'),
(2, 'barb8000', 'ARAMIS', 250, 0, 'Noir', '2020-12-02', NULL, NULL, '2020-12-03'),
(3, 'barb8003', 'ATHOS', 249, 0, 'Noir', '2020-12-02', NULL, 'NULL', '2020-12-08'),
(4, 'brou2', 'SILVER', 250, 0, 'Noir', '2020-12-02', NULL, NULL, '2020-12-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
