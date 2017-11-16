
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

	$resultat = $bdd->query("SELECT * FROM meteo");
	$donnees = $resultat->fetch();
	while ($donnees = $resultat->fetch()){
		echo "<table>";
		//On affiche les données dans le tableau
    
        echo "<tr><td>";
        echo $donnees['ville'];
        echo '</td><td>';
        echo $donnees['bas'];
        echo '</td><td>';
        echo $donnees['haut'];
        echo '</td>';
		echo '<td><input type="checkbox" name="delete[]" value="delete"/></td>';
		echo '</tr>';
      
	}
	echo "</table>";

	$resultat->closeCursor();

?>

	<form method="post" action="">

		<p>
			<label>Entrez une ville :</label><input type="text" name="ville" /><br>
			<label>Température minimale</label><input type="number" name="bas" /><br>
			<label>Température maximale</label><input type="number" name="haut" /><br>

			<button action = "submit">Submit</button>

		</p>


	</form>
	

<?php
	
	$ville = $_POST['ville'];
	$bas = $_POST['bas'];
	$haut = $_POST['haut'];
	
	if (isset($_POST)){
		$bdd->query("INSERT INTO `meteo`(`ville`, `haut`, `bas`) VALUES ('$ville','$haut','$bas')");
	}
	
	
?>
	
	
<!---cocher des cases------>
		
<?php
	if(isset($_POST["Delete"])){
    $box=$_POST['suppr'];
    while(list($key,$val) = @each($box)){
    $bd->query("DELETE FROM ubeer-mail WHERE mail='$val'");
    header('location:admin.php');
      }
    }
    $resultat->closeCursor();
?>
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>


