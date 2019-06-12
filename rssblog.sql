-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 12 jun 2019 om 16:44
-- Serverversie: 5.7.21
-- PHP-versie: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rssblog`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` text NOT NULL,
  `name` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `messages`
--

INSERT INTO `messages` (`message_id`, `titel`, `name`, `message`, `date`) VALUES
(10, 'test', 'tommie', 'komt deze in de rss reader?', '2019-06-12'),
(3, 'Mijn tweede post', 'Rebecca', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-06-12'),
(4, 'Derde post', 'admin', 'Wat is Lorem Ipsum?\r\n', '2019-06-12'),
(7, '303', 'admin', 'en we tellen maar door ', '2019-06-12'),
(8, '404', 'admin', 'page not found', '2019-06-12'),
(9, 'Vandaag ', 'DIMPHY', 'Regent het bakken uit de lucht', '2019-06-12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
