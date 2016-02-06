<!doctype html>
<html lang=de >
    
<head>
    <meta charset="UTF-8">
    <title>Registrierung</title>
</head>

<body>
    <header>
        <h1><img src="Grafiken\labLogo.png"  width="440" height="200" alt="logo"></h1> 
    </header>
    
    
    <?php 
        // PHP verarbeitet die Formulardaten
        $username = $_POST['name']; 
        $pw = $_POST['pass'];
        $pwRepeat = $_POST['repeat'];
        
        /*
            Erstellen des Benutzers in der Datenbank:
            
            INSERT�INTO�`Login`�SET(`Name`, `Passwort`) VALUES($username, $pw)

        */

        // �berpr�ft ob das wiederholte passwort �bereinstimmt
        if($pw == $pwRepeat) {      
            echo "<p>Hallo " . $username . "!</p><br>";    // gibt kurze Best�tigung inkl. Username aus      
            echo "<p>Danke f�r deine Anmeldung. Viel Spa� beim Spielen! :)</p><br><br>";
            echo "<p><b>Achtung:</b> Dies ist eine Testausgabe. Aktuell funktioniert das registrieren noch nicht.</p>"; 
        }
         else {
            echo "Die Passwortwiederholung stimmt nicht mit dem eingegebenen Passwort �berein.<br>";
            echo "Bitte geh noch einmal zur�ck und versuche es erneut!<br><br>";
            echo "<a href=registrieren.html>Zur�ck zur Registrierung</a>";
            }
    ?>        
    
</body>
</html>