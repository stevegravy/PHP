<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercice_1</title>
</head>

<body>
	<?php
		$nom = 'Steve';
	 echo "<h1>Bonjour ".$_GET['nom']." !</h1>";
	?>
	
	<p><?php 
		$prenom = 'Steve';
		$age = 39;
		$faim = true;
		$famile = array(0=>'Adé', 1=>'Noam', 2=>'Steve');
		
		echo('Je m\'appelle ' . $prenom . ' et j\'ai ' . $age . " ans")
	?>
	</p>
	
	
	<!---0. Représente en code le fait de devoir ranger sa chambre si elle est sale.--->
	<p>
		<?php 
			$chambre_est_salle = false;

			if($chambre_est_salle == true){
				$commentaires = 'Range ta chambre, on dirait la cage d\'un bonobo!';
			}elseif($chambre_est_salle == false){
				$commentaires = 'Ta chambre est trop propre, vis un peu!';
			}

			echo $commentaires
		?>
	</p>
	
</body>
</html>