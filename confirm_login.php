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
    ?>        
    
    <!-- gibt kurze Best�tigung inkl. Username aus --> 
    <p>Hallo <?=$username?>!</p><br>          
    <p>Du hast dich erfolgreich eingeloggt. Viel Spa� beim Spielen! :)</p><br><br>
    
    <p><b>Achtung:</b> Dies ist eine Testausgabe. Aktuell funktioniert das einloggen noch nicht.</p>
        
</body>
</html>