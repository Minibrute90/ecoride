-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2025 at 07:53 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecoride`
--

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `avis_id` int NOT NULL,
  `commentaire` text NOT NULL,
  `role` varchar(50) NOT NULL,
  `statut` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

DROP TABLE IF EXISTS `configuration`;
CREATE TABLE IF NOT EXISTS `configuration` (
  `id_configuration` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_configuration`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `covoiturage`
--

DROP TABLE IF EXISTS `covoiturage`;
CREATE TABLE IF NOT EXISTS `covoiturage` (
  `covoiturage_id` int NOT NULL AUTO_INCREMENT,
  `date_depart` date NOT NULL,
  `heure_depart` time NOT NULL,
  `lieu_depart` varchar(50) NOT NULL,
  `date_arrivee` date NOT NULL,
  `heure_arrivee` time NOT NULL,
  `lieu_arrivee` varchar(50) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `nb_place` int NOT NULL,
  `prix_personne` float NOT NULL,
  PRIMARY KEY (`covoiturage_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `covoiturage`
--

INSERT INTO `covoiturage` (`covoiturage_id`, `date_depart`, `heure_depart`, `lieu_depart`, `date_arrivee`, `heure_arrivee`, `lieu_arrivee`, `statut`, `nb_place`, `prix_personne`) VALUES
(1, '2025-06-06', '16:00:00', 'belfort', '2025-06-06', '17:00:00', 'Besançon', 'écologique', 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `marque_id` int NOT NULL AUTO_INCREMENT,
  `marque` varchar(50) NOT NULL,
  PRIMARY KEY (`marque_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parametre`
--

DROP TABLE IF EXISTS `parametre`;
CREATE TABLE IF NOT EXISTS `parametre` (
  `parametre_id` int NOT NULL AUTO_INCREMENT,
  `propriete` varchar(50) NOT NULL,
  `valeur` varchar(50) NOT NULL,
  PRIMARY KEY (`parametre_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `utilisateur_id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `motdepasse` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telephone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `adresse` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date_naissance` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `photo` blob,
  `pseudo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`utilisateur_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateur_id`, `nom`, `prenom`, `email`, `motdepasse`, `telephone`, `adresse`, `date_naissance`, `photo`, `pseudo`) VALUES
(10, 'tyrion', 'lannister', 'tyrion@laposte.net', 'tyrion23***', '0618476712', '6 RUE PIERRE PROUDHON', '1978-08-23', NULL, 'Zelda'),
(7, NULL, NULL, 'olivier@gmail.com', 'Oli23***', NULL, NULL, NULL, NULL, 'Olivier'),
(8, NULL, NULL, 'david@gmail.com', 'Dav23***', NULL, NULL, NULL, NULL, 'David'),
(9, NULL, NULL, 'elisa@gmail.com', 'Eli23***', NULL, NULL, NULL, NULL, 'Elisa');

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `voiture_id` int NOT NULL AUTO_INCREMENT,
  `modele` varchar(50) NOT NULL,
  `immatriculation` varchar(50) NOT NULL,
  `energie` varchar(50) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `date_premiere_immatriculation` varchar(50) NOT NULL,
  PRIMARY KEY (`voiture_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
