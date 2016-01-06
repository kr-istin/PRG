-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 06. Jan 2016 um 10:10
-- Server Version: 10.0.22-MariaDB-1~jessie-log
-- PHP-Version: 5.6.14-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `abt633`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur fÃ¼r Tabelle `T_A`
--

CREATE TABLE IF NOT EXISTS `T_A` (
`ID` int(10) unsigned NOT NULL,
  `text_id` int(10) unsigned NOT NULL,
  `antwort_id` int(10) unsigned DEFAULT NULL,
  `folge_text` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Daten fÃ¼r Tabelle `T_A`
--

INSERT INTO `T_A` (`ID`, `text_id`, `antwort_id`, `folge_text`) VALUES
(1, 1, 2, 2),
(2, 1, 3, 3),
(3, 2, 1, 7),
(4, 7, 4, 8),
(5, 7, 5, 9),
(6, 3, 4, 10),
(7, 3, 5, 11),
(8, 8, 6, 16),
(9, 8, 7, 12),
(10, 9, 8, 13),
(11, 9, 9, 14),
(12, 10, 10, 15),
(13, 10, 11, 18),
(14, 11, 12, 17),
(15, 11, 13, 18),
(16, 12, 1, 17),
(17, 13, 1, 16),
(18, 14, 1, 17),
(19, 15, 1, 17);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes fÃ¼r die Tabelle `T_A`
--
ALTER TABLE `T_A`
 ADD PRIMARY KEY (`ID`), ADD KEY `text_id` (`text_id`), ADD KEY `antwort_id` (`antwort_id`), ADD KEY `folge_text` (`folge_text`);

--
-- AUTO_INCREMENT fÃ¼r exportierte Tabellen
--

--
-- AUTO_INCREMENT fÃ¼r Tabelle `T_A`
--
ALTER TABLE `T_A`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `T_A`
--
ALTER TABLE `T_A`
ADD CONSTRAINT `T_A_ibfk_1` FOREIGN KEY (`text_id`) REFERENCES `Text` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `T_A_ibfk_2` FOREIGN KEY (`antwort_id`) REFERENCES `Antwort` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `T_A_ibfk_3` FOREIGN KEY (`folge_text`) REFERENCES `Text` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
