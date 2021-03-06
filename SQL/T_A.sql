--Erstellen der T_A Tabelle

CREATE TABLE IF NOT EXISTS `T_A` (
`ID` int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `text_id` int(10) unsigned NOT NULL,
  `antwort_id` int(10) unsigned DEFAULT NULL,
  `folge_text` int(10) unsigned NOT NULL,
  FOREIGN KEY (`text_id`) REFERENCES `Text`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`antwort_id`) REFERENCES `Antwort`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`folge_text`) REFERENCES `Text`(`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) 

--Befüllen der Tabelle mit den Verbindungen

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
(19, 15, 1, 17),
(20, 16, 14, 19),
(21, 16, 15, 20),
(22, 17, 16, 21),
(23, 17, 17, 22),
(24, 18, 18, 23),
(25, 18, 19, 24),
(26, 19, 20, 26),
(27, 19, 21, 28),
(28, 20, 22, 27),
(29, 27, 1, 26),
(30, 20, 23, 29),
(31, 22, 24, 25),
(32, 25, 20, 26),
(33, 25, 21, 28),
(34, 22, 25, 30),
(35, 24, 26, 31),
(36, 24, 27, 32),
(37, 21, 1, 33),
(38, 28, 1, 33),
(39, 29, 1, 33),
(40, 30, 1, 33),
(41, 26, 28, 35),
(42, 26, 29, 34),
(43, 34, 1, 33),
(44, 33, 30, 36),
(45, 33, 31, 37),
(46, 31, 32, 38),
(47, 31, 33, 39),
(48, 36, 34, 40),
(49, 36, 35, 41),
(50, 37, 34, 40),
(51, 37, 35, 41);


