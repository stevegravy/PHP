
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tableau SQL</title>
</head>

<body>
	
<?php
	try
	{
		// On se connecte à MySQL
		$bdd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', 'user');
	  echo "ta db marche !";
	}
	catch(Exception $e)
	{
		// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
	}

	$resultat = $bdd->query(' SELECT * FROM Météo');
	$donnees = $resultat->fetch();

	while ($donnees = $resultat->fetch()){
		
?>
	
	
	<p>
		Ville : <?php echo $donnees['ville']; ?> <br>
		Minima: <?php echo $donnees['bas']; ?> <br>
		Maxima: <?php echo $donnees['haut']; ?> <br>
	</p>
	
<?php
$resultat->closeCursor();
?>


	<!---
	<form method="post" action="">

   	<p>
   		<label>Entrez une ville :</label><input type="text" name="ville" /><br>
   		<label>Température minimale</label><input type="number" name="bas" /><br>
   		<label>Température maximale</label><input type="number" name="bas" /><br>
   		
   		<button action = "submit">Submit</button>
   		
	</p>
   	

	</form>
	----->
</body>
</html>