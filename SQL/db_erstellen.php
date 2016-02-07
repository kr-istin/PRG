<?php
	//Hier würde die Verbindung zum Server entstehen auf der die Datenbank ist
	try {
	   $sql = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
	   $sql->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	} catch (PDOException $e) {
	   print "Database Error: ".$e->getMessage();
	}
 

/*
	Ausführen der Querys in den Datein Antwort.sql, Login,sql, Text.sql, T_A.sql
	Sodass die Tabellen erstellt werden
	ACHTUNG: T_A.sql muss als letztes ausgeführt werden, da dort die Foreing keys definiert sind.
*/

?>
