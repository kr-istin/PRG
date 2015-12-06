<?php

    /* ***********************************************
     *      Variablen
     *********************************************** */
        $continue = true;
        $randomEvent;
        
        $inventar = array();
        $getGem;
    
    
    
    /* ***********************************************
     *      Programmablauf 
     *********************************************** */
    
        do {
            $randomEvent = rand(0,2);       // Balancing muss noch angepasst werden!
            if($randomEvent == 1){          // bei einer 1 wird ein Kampf vor das Weitergehen geschoben
                echo "Kampfsimulator wird ausgefuehrt.<br>";     // Platzhalter Ausgabe als Test       
            }
            else if($randomEvent == 2) {    // bei einer 2 wird vor dem Weitergehen ein Juwel aufgehoben
                $getGem = foundGem();       // ruft die Juwelen-Funktion auf, weist Rückgabewert einer Variable zu, damit das Juwel leicht ins Array eingefügt werden kann
                $inventar[] = $getGem;      // fügt das neue Juwel hinten ans Inventar-Array 
            }

            //  An dieser Stelle sollen dann der normale Text und die Auswahlmoeglichkeiten ausgegeben werden
            echo "Der normale Spielfluss wird fortgefuehrt.<br>";     // Platzhalter Ausgabe als Test  

            //  folgende Zeile sollte außerhalb der Tests natürlich gelöscht/auskommentiert werden
            $continue = false;

        } while($continue);
    
    
    
    /* ***********************************************
     *      Funktionen Abschnitt
     *********************************************** */
    
        function foundGem() {
            $newGem = rand(0, 3);   // Bonus des Juwels wird zufällig ausgewählt. Muss noch ans Balancing angepasst werden
            echo "Du hast ein Juwel gefunden. Es hat die Stufe " . $newGem . ". Dein Helfer scheint nun stärker zu sein.";
            return $newGem;
        }
        
?>