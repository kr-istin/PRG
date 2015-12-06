<?php

    /* *******************************************************
     *      combatSimulator Funktion
     *      zur �bersicht in eigene PHP Datei ausgelagert
     ****************************************************** */

        function combatSimulator($inventar, $opponents, $amountTypes) {  
            
            /* "Grundlevel" f�r Helfer und Gegner an Hand des Juwelenbonus ausrechnen */
            $gemBonus = 0;                              // Juwelenbonus vor der Addition zur�ck setzen
            $array_length = count($inventar);           // Arrayl�nge als Variable zwischenspeichern, f�r einfacheres Durchlaufen
            for($i=0; $array_length; $i++){
                $gemBonus = $gemBonus + $inventar[i];
            }
            
            /* endg�ltige Level f�r diese Runde berechnen */
            $addHelper = rand(1, 15);
            $lvlHelper = $gemBonus + $addHelper;
            $addOpponent = rand(1, 10);
            $lvlOpponent = $gemBonus + $addOpponent;
            
            /* Gegnertyp generieren und Bild �ndern */
            $randomizeType = rand(0, $amountTypes);         // abh�ngig von der Anzahl der Gegnertypen, die im Hauptprogramm festgelegt wurden
            $opponentType = $opponents[$randomizeType];     // zuf�llig ausgew�hlter Gegnertyp
            // Bild des Gegners soll sp�ter abh�ngig von $opponentType angezeigt/ge�ndert werden

            echo $opponentType . " mit der Stufe " . $lvlOpponent . " taucht auf! <br>";
            echo "Dein Helfer st�rzt vor. Die Zahl auf seinem Schild beginnt sich zu ver�ndern und rastet schlie�lich auf " . $lvlHelper . " ein.<br><br>";    // Ausgabeentwurf, sollte noch angepasst werden

            if($lvlOpponent < $lvlHelper) {
                echo "Ihr habt den Kampf gewonnen!<br><br>"; 
            }
            else {
                echo "Dein Helfer gibt sein Bestes, doch seine Stufe ist einfach nicht hoch genug. Ihr habt verloren...<br><br>";
                /* Was genau passiert wenn man verliert muss noch entschieden werden. */
            }
    }
        
?>