<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=promo1;charset=utf8', 'root', 'user');
  echo "ta db marche !";
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

/*$resultat = $bd->query('SELECT * FROM octocats');*/
?>
