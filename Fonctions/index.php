<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fonctions PHP</title>
</head>

<body>
	<h1>Les fonctions en PHP</h1>
	
	<?php
	
	
	/*première lettre en majuscule*/
	function majuscule ($nom){
		$nom_maj = ucfirst($nom);
	echo $nom_maj;
	}
	majuscule('emile');
	
	
	/*Affiche la date et l'heure'*/
	function date_heure (){
		$date = date ('d-m-Y');
		$heure = date ('H : i');
		$date_heure	= 'Nous sommes le ' . $date . ' et il est ' . $heure;
		
		return $date_heure;
	}
	
	echo date_heure();
	
	echo '<br>';
	
	
	/*Fonction addition*/
	function addition ($a,$b){
		$add = $a + $b;
		
		if(is_numeric($a)==true && is_numeric($b)==true){
			return $add;
		}
		else{
			echo('Erreur, argument non numérique !<br>');
		}
	}
	echo addition('u',3) . '<br>';
	
	
	
	/*Fonction afficher les initiales*/
	/*function initiales($nom){
    $n_mot = explode(" ",$nom);
    	foreach($n_mot as $lettre){
        	$nom_initiale . = $lettre{0} . '.';
    	}
    return strtoupper($nom_initiale);
	}
	echo initiales('In code we trust!');*/
	
	
	/*Remplacer lettres*/
	function remplacement(){
		$tab = array ('caecotrophie', 'chaenichthys', 'microsphaera', 'sphaerotheca');
		foreach ($tab as $key){
			$new_tab = str_replace ("ae", "æ", $key);
			echo "<pre>";
			echo $new_tab;
			echo "</pre>";
		}
	}
	remplacement();
	
	
	?>
	
</body>
</html>
