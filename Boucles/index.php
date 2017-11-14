<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Boucles</title>
</head>

<body>
	<h1>Les Boucles</h1>
	
	<?php
		$pronoms_personnels = array ('Je ', ' Tu ', ' Il/Elle ',' Nous ', ' Vous ', ' Elles/Ils');
	
		foreach ($pronoms_personnels as $value){
			echo $value . '<br>';
			if ($value == 'Je'){
				echo $value . ' code';
			}
			elseif ($value == 'Tu'){
				echo $value . ' codes';
			}
			elseif ($value == 'Il/Elle'){
				echo $value . ' code';
			}
			elseif ($value == 'Nous'){
				echo $value . ' codons' ;
			}
			elseif ($value == 'Vous'){
				echo $value . ' codez';
			}
			elseif ($value == 'Ils/Elles'){
				echo $value . ' codent';
			}
		}
	
		/*
		$nombre_de_ligne = 1;
		while ($nombre_de_ligne <= 120){
			echo $nombre_de_ligne . '<br>';
			$nombre_de_ligne++;
		}
	
		for ($nombre_de_ligne = 1; $nombre_de_ligne <= 120; $nombre_de_ligne++){
			echo $nombre_de_ligne . '<br>';
		}
		*/
	
		$prenom_classe = array ('Nico1', 'Nico2', 'Antoine', 'Caro', 'Steve', 'Delphine', 'Omar', 'Jimmy', 'Gaetan', 'Valerian');
		foreach ($prenom_classe as &$value){
			echo $value . '<br>';
		}
		
	?>
	
	<select>
		<option value ="">Select...</option>;
	<?php
		$nom_pays = array ('BE'=>'Belgique', 'FR'=>'France', 'IT'=>'Italie', 'LI'=>'Linchtenchtein', 'VE'=>'Venezuela', 'CO'=>'Colombie', 'ES'=>'Espagne', 'SU'=>'Suède', 'PO'=>'Portugal', 'FI'=>'Finlande');
	
		foreach ($nom_pays as $key => $value){
			echo '<option value = "" ' .$key.'>' .$value. '</option>';
		}
	?>
	</select>
</body>
</html>
