<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=mysqldb;dbname=COGIP;charset=utf8', 'root', 'root');
	//Connexion via Docker
	// $bdd=new PDO('mysql:host=mysqldb;dbname=COGIP;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>
