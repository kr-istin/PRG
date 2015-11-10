<?php

    // Variablen die genutzt werden sollen
    $continue = true;
    $steps;
    $randomEvent;
    $lvlHelper;
    $lvlOpponent;


    // dieser Teil sollte direkt im HTML Code stehen
    // falls möglich sollte die Ausgabe vor erneutem Aufruf "gelöscht" werden, ohne die Seite neu laden zu müssen
    do {
        $steps++;
        $randomEvent = rand(0,2);       // im Spiel mehr Zahlen für geringere Wahrscheinlichkeit eines Events?
        if($randomEvent == 1){          // bei einer 1 wird ein Kampf vor das Weitergehen geschoben
            combatSimulator();          
        }
        else if($randomEvent == 2) {    // bei einer 2 wird vor dem Weitergehen ein Juwel aufgehoben
            foundGem();
        }
        
        /*  An dieser Stelle sollen dann der normale Text und die Auswahlmöglichkeiten ausgegeben werden
         *  Die Ausgabe erfolgt abhängig von der Datenbank (Relationen innerhalb dieser)
         *  
         *  Eine Mögliche Lösung:
         *  für alle 3 Ausgaben eine Variable, denen durch Abfrage der DB der text zugewiesen werden könnte,
         *  Ausgabe dann einfach mit echo
         */
        
    } while($continue);

?>