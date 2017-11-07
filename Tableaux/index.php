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
	print ($platsPreferes[2]);/*impression d'un des éléments du tableau*/
	?>
	
	<br>
	<br>
	
	<?php
			
		$papa = array (
		'prenom' => 'Jean',
		'nom' => 'Gravy',
		'age' => '69',
		'hobbies' => array(
			'aime_la_marche',
			'aime_l_apero',
			'aime la paella',
			)
		);
	
		$moi = array (
		'prenom' => 'Steve',
		'nom' => 'Gravy',
		'age' => 39,
		'numero_de_maison' => 106,
		'papa' => $papa,
		'hobbies' => array(
			'aime_le_foot',
			'aime_la_musique',
			)
		);
	
		echo '<pre>';
		print_r($moi);
		echo '<pre>';
		echo ('Nombre de hobbies de papa : ');/*imprime le nombre de hobbies de papa*/
		echo count ($papa ['hobbies']);
		echo '<pre>';
		echo ('Nombre de hobbies de Steve : ');/*imprime le nombre de hobbies de Steve*/
		echo count ($moi ['hobbies']);
		echo '<pre>';
		echo ('Nombre de hobbies des 2 : ');/*additionne le nombre de hobbies de Steve et papa*/
		echo count ($papa ['hobbies']) + count ($moi ['hobbies']);
	
		array_push($moi ['hobbies'], 'taxidermie');/*rajoute un hobbie à Steve*/
	
		echo '<br>';
	
		$moi['nom'] = 'Dieudonné';/*Steve change de nom*/
		echo $moi['nom'];
	
		echo '<br>';
	
		$ame_soeur = array (
			'prenom' => 'Adélaide',
			'nom'=> 'Zoma',
			'age' => '33',
			'hobbies' => array (
				'danse',
				'apero'
			)
		);
	
		$toi = array(
			'prenom' => 'Steve',
			'nom' => 'Gravy',
			'age' => 39,
			'hobbies' => array(
				'musique',
				'apero'
			)
		);
	
		/*intersection de 2 tableaux*/
		$noam = array_intersect($ame_soeur ['hobbies'], $toi ['hobbies']);
		print_r($noam);
		
		/*fusion de 2 tableaux*/
		$noam = array_merge($ame_soeur ['hobbies'], $toi ['hobbies']);
		print_r($noam);
	
		$web_development = array (
			'frontend' => array(
			),
			'backend' => array(
			),
		);
			
		array_push($web_development ['frontend'], 'xhtml');
		array_push($web_development ['backend'], 'Ruby on Rails');
		array_push($web_development ['frontend'], 'CSS');
		array_push($web_development ['frontend'], 'Flash');
		array_push($web_development ['frontend'], 'Javascript');
		array_push($web_development ['backend'], 'Javascript');
		/*$web_development ['frontend'][0], 'html';*/
		unset($web_development ['frontend'][2]);
		$web_developmen = array_values(array_filter($web_development));
		print_r($web_development);
		
	?>
</body>
</html>
