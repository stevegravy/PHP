<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tableaux</title>
</head>

<body>
	<h1>Les tableaux</h1>			
	
	
	<!---1.Famille----->
	<?php
	$famille = ['Adé', 'Noam', 'Steve'];
	
	print_r ($famille);
	
	?>
	
	<br>
	
	<?php
	$platsPreferes = ['couscous', 'bananes', 'nutella', 'choucroute'];
	
	print_r ($platsPreferes);
	print ($platsPreferes[2]);
	?>
	
	<br>
	<br>
	
	<?php
			
		$papa = array (
		'prenom' => 'Jean',
		'nom' => 'Gravy',
		'age' => '69',
		'hobbies' => array(
			'aime_la_marche' => true,
			'aime_l_apero' => true,
			'aime la paella' => false,
			)
		);
	
		$moi = array (
		'prenom' => 'Steve',
		'nom' => 'Gravy',
		'age' => 39,
		'numero_de_maison' => 106,
		'papa' => $papa,
		'hobbies' => array(
			'aime_le_foot' => false,
			'aime_la_musique' => true,
			)
		);
	
		echo '<pre>';
		print_r($moi);
		echo '<pre>';
		echo ('Nombre de hobbies de papa : ');
		echo count ($papa ['hobbies']);
		echo '<pre>';
		echo ('Nombre de hobbies de Steve : ');
		echo count ($moi ['hobbies']);
		echo '<pre>';
		echo ('Nombre de hobbies des 2 : ');
		echo count ($papa ['hobbies']) + count ($moi ['hobbies']);
	
		array_push($moi ['hobbies'], 'taxidermie');
		echo '<br>';
		echo $moi['hobbies'];
	
	?>
</body>
</html>
