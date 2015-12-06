<?php

    /* *******************************************************
     *      combatSimulator Funktion
     *      zur Übersicht in eigene PHP Datei ausgelagert
     ****************************************************** */

        function combatSimulator($inventar, $opponents, $amountTypes) {  
            
            /* "Grundlevel" für Helfer und Gegner an Hand des Juwelenbonus ausrechnen */
            $gemBonus = 0;                              // Juwelenbonus vor der Addition zurück setzen
            $array_length = count($inventar);           // Arraylänge als Variable zwischenspeichern, für einfacheres Durchlaufen
            for($i=0; $array_length; $i++){
                $gemBonus = $gemBonus + $inventar[i];
            }
            
            /* endgültige Level für diese Runde berechnen */
            $addHelper = rand(1, 15);
            $lvlHelper = $gemBonus + $addHelper;
            $addOpponent = rand(1, 10);
            $lvlOpponent = $gemBonus + $addOpponent;
            
            /* Gegnertyp generieren und Bild ändern */
            $randomizeType = rand(0, $amountTypes);         // abhängig von der Anzahl der Gegnertypen, die im Hauptprogramm festgelegt wurden
            $opponentType = $opponents[$randomizeType];     // zufällig ausgewählter Gegnertyp
            // Bild des Gegners soll später abhängig von $opponentType angezeigt/geändert werden

            echo $opponentType . " mit der Stufe " . $lvlOpponent . " taucht auf! <br>";
            echo "Dein Helfer stürzt vor. Die Zahl auf seinem Schild beginnt sich zu verändern und rastet schließlich auf " . $lvlHelper . " ein.<br><br>";    // Ausgabeentwurf, sollte noch angepasst werden

            if($lvlOpponent < $lvlHelper) {
                echo "Ihr habt den Kampf gewonnen!<br><br>"; 
            }
            else {
                echo "Dein Helfer gibt sein Bestes, doch seine Stufe ist einfach nicht hoch genug. Ihr habt verloren...<br><br>";
                /* Was genau passiert wenn man verliert muss noch entschieden werden. */
            }
    }
        
?>