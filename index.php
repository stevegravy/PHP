<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercice_1</title>
</head>

<body>
	<h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>
	
	<!---0. Représente en code le fait de devoir ranger sa chambre si elle est sale.--->
	<p><?php 
		$prenom = 'Steve';
		$age = 39;
		$faim = true;
		$famile = array(0=>'Adé', 1=>'Noam', 2=>'Steve');
		
		echo('Je m\'appelle ' . $prenom . ' et j\'ai ' . $age . " ans")
	?>
	</p>
	
	
	
	<!-----1. Affiche un message de salutation différent selon l'heure courante.----->
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
	
	<!------2. Affiche une salutation différente selon l'âge de l'utilisateur.------->
	<p>
		<?php
			$heure = 9
				
			if($heure < 12){
				$comment = 'Bonjour';
			}elseif($heure >=12 && <18){
				$comment = 'Bonne journée';
			}elseif($heure = 
		?>
	</p>
</body>
</html>
