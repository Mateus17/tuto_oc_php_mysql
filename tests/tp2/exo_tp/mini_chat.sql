-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 18 Avril 2016 à 13:43
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `mini_chat`
--

DROP TABLE IF EXISTS `mini_chat`;
CREATE TABLE IF NOT EXISTS `mini_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_envoi` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `mini_chat`
--

INSERT INTO `mini_chat` (`id`, `pseudo`, `message`, `date_envoi`) VALUES
(47, 'Casimir', 'Voici venu le temps des rires et des chants...', '2016-04-18 15:40:24'),
(48, 'Ares', 'Que la guerre soit...', '2016-04-18 15:40:45'),
(49, 'Cpt America', 'Avengers Unite!!!!!!!', '2016-04-18 15:41:01'),
(50, 'De Gaulle', 'Je vous ai compris!!!', '2016-04-18 15:41:14'),
(51, 'droid', 'star wars!!!!!!!!!!!!!!!', '2016-04-18 15:41:37'),
(52, 'Taratata', '&lt;strong&gt;essayons de mettre cela en gras&lt;/strong&gt;', '2016-04-18 15:41:59'),
(53, 'Moi', 'Cela semble marché, coolllll!', '2016-04-18 15:42:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
