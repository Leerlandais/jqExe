-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2024 at 01:44 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jquery_exe`
--

-- --------------------------------------------------------

--
-- Table structure for table `jq_text`
--

DROP TABLE IF EXISTS `jq_text`;
CREATE TABLE IF NOT EXISTS `jq_text` (
  `jq_text_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `jq_text_element` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jq_text_en` varchar(4096) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jq_text_fr` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jq_text_type` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'id',
  `jq_text_lock` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`jq_text_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jq_text`
--

INSERT INTO `jq_text` (`jq_text_id`, `jq_text_element`, `jq_text_en`, `jq_text_fr`, `jq_text_type`, `jq_text_lock`) VALUES
(1, 'introHeading1', 'Welcome to our Project', 'Bienvenue dans notre Projet', 'id', 0),
(2, 'introHeading2', 'Brought entirely to you with', 'Présenté entièrement avec', 'id', 0),
(3, 'introHeading3', 'Bootstrap', 'Bootstrap', 'id', 0),
(4, 'introHeading4', ' and ', ' et ', 'id', 0),
(5, 'introHeading5', 'jQuery', 'jQuery', 'id', 0),
(14, 'exe0heading', 'To change the text of an element, we can use :', 'Pour changer le texte d\'un élément, on peut utiliser :', 'id', 0),
(15, 'exeCodeSnip0', '.text()', '.text()', 'id', 0),
(16, 'codeDescSpan0', 'Press the \'activate\' button and my text will change', 'Appuyez sur le bouton \'activer\' et mon texte changera', 'id', 0),
(17, 'activateCodeButton', 'Activate', 'Activer', 'class', 0),
(18, 'resetWindowButton', 'Reset', 'Réinitialiser', 'class', 0),
(19, 'stopHeaderAnimation', 'Stop', 'Arrêter', 'id', 0),
(20, 'startHeaderAnimation', 'Activate', 'Activer', 'id', 0),
(21, 'exe1heading', 'To change the colour of an element, we can use', 'Pour changer la couleur d\'un élément, on peut utiliser', 'id', 0),
(22, 'exeCodeSnip1', '.css()', '.css()', 'id', 0),
(23, 'codeDescSpan1', 'Press the \'activate\' button and my colour will change', 'Appuyez sur le bouton \'activer\' et ma couleur changera', 'id', 0),
(24, 'exe2heading', 'Now, let\'s combine the two previous', 'Maintenant, combinons les deux méthodes précédentes', 'id', 0),
(25, 'codeDescSpan2', 'Press \'activate\' and my text and colour will change ', 'Appuyez sur \'activer\' et mon texte et ma couleur changera', 'id', 0),
(26, 'exeCodeSnip2', '.css().text()', '.css().text()', 'id', 0),
(27, 'exe3heading', 'And finally, let\'s do that but queue things up', 'Et enfin, faisons ça mais mettons les choses en file d\'attente', 'id', 0),
(28, 'codeDescSpan3', 'This time, my text will change as will my colour and then after a small delay, it will change again', 'Cette fois, mon texte changera ainsi que ma couleur puis après un petit délai, il changera à nouveau', 'id', 0),
(29, 'navBarHome', 'Text', 'Text()', 'id', 0),
(30, 'navBarSlide', 'Slide', 'Slide()', 'id', 0),
(31, 'navBarNext', 'Next', 'Next()', 'id', 0),
(32, 'navBarAnimate', 'Animate', 'Animate()', 'id', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
