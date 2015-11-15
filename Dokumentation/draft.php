<?php

    // Variablen f�r das Hauptprogramm
    $continue = true;
    $steps;
    $randomEvent;
    $lvlHelper;
    $lvlOpponent;
    
    $inventar = array();
    $getGem;
    

    // dieser Teil sollte direkt im HTML Code stehen
    // falls m�glich sollte die Ausgabe vor erneutem Aufruf "gel�scht" werden, ohne die Seite neu laden zu m�ssen
    do {
        $steps++;
        $randomEvent = rand(0,2);       // im Spiel mehr Zahlen f�r geringere Wahrscheinlichkeit eines Events?
        if($randomEvent == 1){          // bei einer 1 wird ein Kampf vor das Weitergehen geschoben
            combatSimulator();          
        }
        else if($randomEvent == 2) {    // bei einer 2 wird vor dem Weitergehen ein Juwel aufgehoben
            $getGem = foundGem();
            $inventar[] = $newGem;      // f�gt das neue Juwel hinten ans Inventar-Array
        }
        
        /*  An dieser Stelle sollen dann der normale Text und die Auswahlm�glichkeiten ausgegeben werden
         *  Die Ausgabe erfolgt abh�ngig von der Datenbank (Relationen innerhalb dieser)
         *  
         *  Eine M�gliche L�sung:
         *  f�r alle 3 Ausgaben eine Variable, denen durch Abfrage der DB der text zugewiesen werden k�nnte,
         *  Ausgabe dann einfach mit echo
         */
        
    } while($continue);
    
    
    
    // folgende Funktion k�nnte sp�ter evtl in eine eigene PHP Datei verschoben werden
    function foundGem() {
        $newGem = rand(0, 3);   // Bonus des Juwels wird zuf�llig ausgew�hlt, Zahlen m�ssen noch angepasst werden
        echo "Du hast ein Juwel gefunden. Es hat die Stufe " + $newGem + ". Dein Helfer scheint nun st�rker zu sein.";  // Ausgabeentwurf, sollte noch angepasst werden
        return $newGem;
    }

?>