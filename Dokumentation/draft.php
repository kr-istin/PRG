<?php

    // Variablen für das Hauptprogramm
    $continue = true;
    $steps;
    $randomEvent;
    
    // Variablen die eventuell in anderen PHP Dateien instanziert werden müssen, falls Funktionen ausgekoppelt werden
    // -> ansonsten evtl mit getter und setter Methoden arbeiten?
    $lvlHelper;
    $lvlOpponent;
    
    $inventar = array();
    $getGem;
    
    $opponentType;                      // wird später zur anzeige und bestimmung des gegnertyps genutzt
    $opponents = array("Ratte", "Schwein", "Kaninchen");       // enthält alle gegnertypen
    
    

    // dieser Teil sollte direkt im HTML Code stehen
    // falls möglich sollte die Ausgabe vor erneutem Aufruf "gelöscht" werden, ohne die Seite neu laden zu müssen
    do {
        $steps++;
        $randomEvent = rand(0,2);       // im Spiel mehr Zahlen für geringere Wahrscheinlichkeit eines Events?
        if($randomEvent == 1){          // bei einer 1 wird ein Kampf vor das Weitergehen geschoben
            combatSimulator($steps);          
        }
        else if($randomEvent == 2) {    // bei einer 2 wird vor dem Weitergehen ein Juwel aufgehoben
            $getGem = foundGem();
            $inventar[] = $getGem;      // fügt das neue Juwel hinten ans Inventar-Array
        }
        
        /*  An dieser Stelle sollen dann der normale Text und die Auswahlmöglichkeiten ausgegeben werden
         *  Die Ausgabe erfolgt abhängig von der Datenbank (Relationen innerhalb dieser)
         *  
         *  Eine Mögliche Lösung:
         *  für alle 3 Ausgaben eine Variable, denen durch Abfrage der DB der text zugewiesen werden könnte,
         *  Ausgabe dann einfach mit echo
         */
        
    } while($continue);
    
    
    
    // folgende Funktion könnte später evtl in eine eigene PHP Datei verschoben werden
    function foundGem() {
        $newGem = rand(0, 3);   // Bonus des Juwels wird zufällig ausgewählt, Zahlen müssen noch angepasst werden
        echo "Du hast ein Juwel gefunden. Es hat die Stufe " + $newGem + ". Dein Helfer scheint nun stärker zu sein.";  // Ausgabeentwurf, sollte noch angepasst werden
        return $newGem;
    }

    
    
    // folgende Funktion könnte später evtl in eine eigene PHP Datei verschoben werden
    function combatSimulator(/* hier Steps, lvl- und opponent-Variablen übergeben */) {      
        if($steps > 5) {          // "Levelbereiche", damit nicht zu starke Gegner generiert werden. Muss noch angepasst werden
            $lvlOpponent = rand(0, 5);       // Gegnerlevel generieren
            $lvlHelper = rand(0, 5);         // Helferlevel generieren
            if(!empty($inventar)) {     // prüft ob Inventar Array nicht leer ist
                $array_length = count($inventar);
                for($i=0; $array_length; $i++){
                    $lvlHelper = $lvlHelper + $inventar[i];
                    /* hier evtl noch eine Variable/Ausgabe wie viel die Juwelen als Bonus genau geben? */
                }
            }
        }
        
        $randomizeType = rand(0, 3);     // Grenze abhängig davon wie viele Gegnertypen es geben wird
        $opponentType = $opponents[$randomizeType];     // zufällig ausgewählter Gegnertyp
        /* Bild des Gegners soll später abhängig von $opponentType angezeigt/geändert werden */

        echo $opponentType + " mit der Stufe " + $lvlOpponent + " taucht auf! <br>";
        echo "Dein Helfer stürzt vor. Die Zahl auf seinem Schild beginnt sich zu veränder und rastet schließlich auf " + $lvlHelper + " ein.";    // Ausgabeentwurf, sollte noch angepasst werden
        
        if($lvlOpponent < $lvlHelper) {
            echo "Ihr habt den Kampf gewonnen!";
        }
        else {
            echo "Dein Helfer gibt sein Bestes, doch seine Stufe ist einfach nicht hoch genug. Ihr habt verloren...";
            /* Was genau passiert wenn man verliert muss noch entschieden werden. */
        }
        
    }
    
?>