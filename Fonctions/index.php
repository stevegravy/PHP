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
			echo('Erreur, argument non numérique !<pre>');
		}
	}
	echo addition('u',3) . '<pre>';
	
	
	
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
		}
	}
	remplacement();
	
	/*Remplacer lettre 2*/
	function diphtongue(){
		$tableau = array ('cæcotrophie', 'chænichthys', 'microsphæra', 'sphærotheca');
		foreach ($tableau as $i){
		$new_tableau = str_replace ('æ', 'ae', $i);
		echo '<pre>';
		echo $new_tableau;
		}
	}
	
	diphtongue();
	
	
	
	/*Messgae utilisateur*/
	function message_utilisateur(){
		$adresse_mail = 'stevegravy@hotmail.com';
		$html = '<div class="warning">Adresse email incorrecte.</div>';
		if($adresse_mail == 'steve.gravy@hotmail.com'){
			echo '<pre>';
			echo('C\'est bien Billy, tu as tappé la bonne adresse!');
		}else{
			echo '<pre>';
			echo $html;
		}
	}
	
	message_utilisateur();
	
	
	
	/*Mots aléatoires*/
	function aleatoire(){
		$lettre = array ('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		$num = rand(0,25);
		
		for($i=1; $i<=5; $i++){
			echo ($lettre[$i]);
		}
	}
	
	aleatoire();
	
	?>
	
</body>
</html>
