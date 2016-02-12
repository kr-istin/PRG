--Tabelle Antwort erstellen

CREATE TABLE IF NOT EXISTS `Antwort` (
	`ID` int(10) unsigned NOT NULL PRIMARY KEY,
	`antwort` text NOT NULL
) 



--Die Tabelle mit Daten füllen

INSERT INTO `Antwort` (`ID`, `antwort`) VALUES
(1, 'Du gehst weiter'),
(2, 'Du gehst aus dem Labor und lässt die verletzte Maus liegen.'),
(3, 'Du wickelst die verletzte Maus in die Decke ein und nimmst sie vorsichtig mit.'),
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
(21, 'Deine Neugier hat dich doch gepackt. Du willst unbedingt wissen, was hier los ist und machst dich wieder auf die Suche nach der Maus.'),
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


/*
=== Feedback Alpers, Jan 20 ===

Leider haben Sie die Aufgabe nicht erledigt: Sie sollten als Teil des Teams die DB-Erzeugung und Transaktionen
programmieren. Was Sie getan haben ist mittels eines Tools (PHPMyAdmin) eine DB und einige Transaktionen erzeugen zu
lassen. In anderen Worten: Sie haben sich ein Programm gesucht, das die Aufgabe erfüllt, die Sie erfüllen sollten.

Deshalb hier nochmal Ihre zentrale Aufgabe des Projekts: Programmieren Sie MySQL-Transaktionen, mit denen eine DB erzeugt
und im Anwendungsverlauf genutzt wird. Diese werden dann z.B. innerhalb eines PHP-Programms genutzt, um aus der
Anwendung auf die DB zuzugreifen.

Um Ihre Aufgabe zu erfüllen müssen Sie nicht den PHP-Code entwickeln, der nötig ist, um die MySQL-Anweisungen einzubinden,
aber das Minimum Ihrer Aufgabe besteht darin, die Transaktionen an den Stellen ins PHP-Skript als Kommentare einzutragen, wo
Sie aufgerufen werden sollen. Wenn es keine solche PHP-Datei gibt, dann erzeugen Sie eine, die einen passenden Namen hat.

=== Feedback Alpers, Ende ===
-->

/*
=== Feedback Alpers, Feb 12 ===

Ja, so können Sie eine Relation in einer DB erzeugen.

=== Feedback Alpers, Ende ===
*/