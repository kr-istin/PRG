-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2016 at 08:51 PM
-- Server version: 10.0.22-MariaDB-1~jessie-log
-- PHP Version: 5.6.14-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abt633`
--

-- --------------------------------------------------------

--
-- Table structure for table `Antwort`
--

CREATE TABLE IF NOT EXISTS `Antwort` (
`ID` int(10) unsigned NOT NULL,
  `antwort` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Antwort`
--

INSERT INTO `Antwort` (`ID`, `antwort`) VALUES
(1, 'Du gehst weiter'),
(2, 'Du gehst aus dem Labor und lässt die verletzte Maus liegen.\r\n'),
(3, 'Du wickelst die verletzte Maus in die Decke ein und nimmst sie vorsichtig mit.\r\n'),
(4, 'Du gehst nach links.'),
(5, 'Du gehst nach rechts.'),
(6, 'Du verlässt den Raum und begibst dich auf die Suche nach dem Verfasser des Briefes.'),
(7, 'Du bleibst im Raum. Vielleicht findest du noch weitere Hinweise.'),
(8, 'Du beginnst zu zweifeln, ob du der Maus weiter folgen solltest. Du beschließt in die andere Richtung zu gehen, weg von ihr.'),
(9, 'Du folgst deinem neuen Begleiter.'),
(10, 'Du willst dich nochmal genauer in dem Raum umschauen.'),
(11, 'Du hast dir wohl alles eingebildet und folgst der Maus.'),
(12, 'Du lässt die Ratte liegen, rennst schnell mit der Maus raus und flüchtest von den Geräuschen, die immer näher kommen.'),
(13, 'Du verriegelst die Tür und bleibst im Raum.'),
(14, 'Obwohl dir die Maus befahl zu warten, gehst du den Weg zurück und biegst diesmal rechts ab an der Kreuzung.'),
(15, 'Du wartest lieber auf die Maus.'),
(16, 'Du gehorchst und verbarrikadierst dich im Zimmer.'),
(17, 'Du willst dich nicht von der Maus trennen. '),
(18, 'Du nutzt das Chaos und fliehst. Die Maus hat sowieso nur Ärger gebracht.'),
(19, 'Du willst der Maus helfen und verdeckst sie mit deinem Körper von den anderen.'),
(20, 'Du gehst den Weg weiter.'),
(21, 'Deine Neugier hat dich doch gepackt. Du willst unbedingt wissen, was hier los ist und machst dich wieder auf \r\ndie Suche nach der Maus.'),
(22, 'Du haust schnell ab, solange die Maus noch nicht zurückgekommen ist.'),
(23, 'Du wartest auf die Maus.'),
(24, 'Du nutzt die Chance, dass die Maus beschäftigt ist und fliehst. Du hattest schon die ganze Zeit ein ungutes Gefühl bei ihr.'),
(25, 'Du wartest den Kampf ab. Es sieht danach aus, dass die Maus gewinnt. '),
(26, 'Du fragst nach dem Plan.'),
(27, 'Du willst lieber nichts davon wissen und fragst nach dem Ausgang aus dem Labor.'),
(28, 'Du willst auf keinen Fall wieder zurück. Du beschließt weiter raus zu gehen und nach Menschen zu suchen.'),
(29, 'Du beschließt, die Maus zu suchen und herauszufinden, was hier passiert ist.'),
(30, 'Du tust so, als wüsstest du was du machst und baust die Maschine irgendwie zusammen.'),
(31, 'Du versuchst noch einmal mit der Maus zu reden.'),
(32, 'Du schlägst der Maus vor mit dir zu kommen.'),
(33, 'Du schlägst ihr vor hier zu bleiben.'),
(34, 'Dir fällt ein, dass du ja noch das Fläschchen in der Hosentasche hast...'),
(35, 'Du rennst so schnell es geht zum Ausgang...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Antwort`
--
ALTER TABLE `Antwort`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Antwort`
--
ALTER TABLE `Antwort`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;