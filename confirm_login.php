<!doctype html>
<html lang=de >
    
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <header>
        <h1><img src="Grafiken\labLogo.png"  width="440" height="200" alt="logo"></h1> 
    </header>
    
    
    <?php 
        // PHP verarbeitet die Formulardaten
        $username = $_POST['name']; 
        $pw = $_POST['pass'];

        /*
            Holt sich das Passwort, damit es mit der Eingabe verglichen werden kann:
            
            SELECT†`Passwort` FROM†`Login` WHERE†`Name`†=†$username

        */
    ?>        
    
    <!-- gibt kurze Best‰tigung inkl. Username aus --> 
    <p>Hallo <?=$username?>!</p><br>          
    <p>Du hast dich erfolgreich eingeloggt. Viel Spaﬂ beim Spielen! :)</p><br><br>
    
    <p><b>Achtung:</b> Dies ist eine Testausgabe. Aktuell funktioniert das einloggen noch nicht.</p>
        
</body>
</html>

<!--
=== Feedback Alpers bez¸gl. MySQL, Feb 12 ===

Gut, genauso meinte ich das, als ich sagte, dass Sie den MySQL-Code als Kommentar
einf¸gen sollen, damit die/der PHP'ler den Aufruf integrieren kann.

(Gilt entsprechend auch f¸r die ¸brigen Dateien, in denen Sie das gemacht haben.)

=== Feedback Alpers, Ende ===
-->