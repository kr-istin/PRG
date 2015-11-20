<?php

    // Variablen 
    $continue = true;
    $steps = 0;
    $randomEvent;
    
    // Programmablauf 
    do {
        $steps;
        $randomEvent = rand(0,2);       // im Spiel mehr Zahlen für geringere Wahrscheinlichkeit eines Events?
        if($randomEvent == 1){          // bei einer 1 wird ein Kampf vor das Weitergehen geschoben
            echo "Kampfsimulator wird ausgeführt.<br>";     // Platzhalter Ausgabe als Test       
        }
        else if($randomEvent == 2) {    // bei einer 2 wird vor dem Weitergehen ein Juwel aufgehoben
            echo "Es wird ein Juwel gefunden.<br>";      // Platzhalter Ausgabe als Test  
        }
        
        /*  An dieser Stelle sollen dann der normale Text und die Auswahlmöglichkeiten ausgegeben werden
         *  Die Ausgabe erfolgt abhängig von der Datenbank (Relationen innerhalb dieser)
         */
        echo "Der normale Spielfluss wird fortgeführt.<br>";     // Platzhalter Ausgabe als Test  
        
        $continue = false;
        
    } while($continue);
    
?>