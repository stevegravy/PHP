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
	function message_utilisateur($adresse_mail){
		$html = '<div class="warning">Adresse email incorrecte.</div>';
		if($adresse_mail == 'steve.gravy@hotmail.com'){
			echo '<pre>';
			echo('C\'est bien Billy, tu as tappé la bonne adresse!');
			echo '<br>';
		}else{
			echo '<pre>';
			echo $html;
			echo '<br>';
		}
	}
	
	message_utilisateur('stevegravy@hotmail.com');
	
	
	
	/*Mots aléatoires*/
	function aleatoire($size){
		$lettre = array ('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		$random = array_rand($lettre,$size);
		for($i=0; $i<$size; $i++){
		
			echo $lettre[$random[$i]];
		}
	}
	
	aleatoire(6);
	aleatoire(15);
	
	
	/*Mettre en minuscule une chaine de caractère*/
	function lowercase($phrase){
		$phrase_low = strtolower($phrase);
		echo '<pre>';
		echo $phrase_low;
		echo '<br>';
	}
	
	lowercase("ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!");
	
	
	
	/*fonctions pour volume d'un cone*/
	function volume_dun_cone($rayon, $hauteur){
		$volume= (3.14 * ($rayon * $rayon) * $hauteur) / 3;
		echo $volume;
	}
	
	volume_dun_cone(5, 2);
	
	
	/*fonction reverse_string*/
	function reverse($string){
		echo '<pre>';
		echo strrev ($string);
	}
		
	reverse("Hello world!");
	
	
	
	/*Buvons un coup*/
	function remplacer_lettres(){
		$chansons = 'Bavas a ca ma sarpata a parda,
					Ma la macha ma la macha
					Bavas a ca ma sarpata a parda
					Ma la macha a ravana.';
		$substitution = array( 'E', 'I', 'O', 'U', 'OU', 'É', 'È', 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN');
		for ($i=0; $i<count($substitution); $i++){
			$nouv_chansons= str_replace('a', $substitution[$i], $chansons);
			echo $nouv_chansons; 
		}
	}
	remplacer_lettres();
	
	
	?>
	
	
	
</body>
</html>
