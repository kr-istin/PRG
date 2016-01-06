-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 06. Jan 2016 um 10:09
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
-- Tabellenstruktur fÃ¼r Tabelle `Antwort`
--

CREATE TABLE IF NOT EXISTS `Antwort` (
`ID` int(10) unsigned NOT NULL,
  `antwort` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Daten fÃ¼r Tabelle `Antwort`
--

INSERT INTO `Antwort` (`ID`, `antwort`) VALUES
(1, 'Du gehst weiter'),
(2, 'Du gehst aus dem Labor und lÃ¤sst die verletzte Maus liegen.\r\n'),
(3, 'Du wickelst die verletzte Maus in die Decke ein und nimmst sie vorsichtig mit.\r\n'),
(4, 'Du gehst nach links.'),
(5, 'Du gehst nach rechts.'),
(6, 'Du verlÃ¤sst den Raum und begibst dich auf die Suche nach dem Verfasser des Briefes.'),
(7, 'Du bleibst im Raum. Vielleicht findest du noch weitere Hinweise.'),
(8, 'Du beginnst zu zweifeln, ob du der Maus weiter folgen solltest. Du beschlieÃŸt in die andere Richtung zu gehen, weg von ihr.'),
(9, 'Du folgst deinem neuen Begleiter.'),
(10, 'Du willst dich nochmal genauer in dem Raum umschauen.'),
(11, 'Du hast dir wohl alles eingebildet und folgst der Maus.'),
(12, 'Du lÃ¤sst die Ratte liegen, rennst schnell mit der Maus raus und flÃ¼chtest von den GerÃ¤uschen, die immer nÃ¤her kommen.'),
(13, 'Du verriegelst die TÃ¼r und bleibst im Raum.');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes fÃ¼r die Tabelle `Antwort`
--
ALTER TABLE `Antwort`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT fÃ¼r exportierte Tabellen
--

--
-- AUTO_INCREMENT fÃ¼r Tabelle `Antwort`
--
ALTER TABLE `Antwort`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
