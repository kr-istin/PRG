<?php

    // Variablen für das Hauptprogramm
    $continue = true;
    $steps;
    $randomEvent;
    $lvlHelper;
    $lvlOpponent;
    
    $inventar = array();
    $getGem;
    

    // dieser Teil sollte direkt im HTML Code stehen
    // falls möglich sollte die Ausgabe vor erneutem Aufruf "gelöscht" werden, ohne die Seite neu laden zu müssen
    do {
        $steps++;
        $randomEvent = rand(0,2);       // im Spiel mehr Zahlen für geringere Wahrscheinlichkeit eines Events?
        if($randomEvent == 1){          // bei einer 1 wird ein Kampf vor das Weitergehen geschoben
            combatSimulator();          
        }
        else if($randomEvent == 2) {    // bei einer 2 wird vor dem Weitergehen ein Juwel aufgehoben
            $getGem = foundGem();
            $inventar[] = $newGem;      // fügt das neue Juwel hinten ans Inventar-Array
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

?>