<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercices 7 a 10</title>
</head>

<body>
	<h1>Exercices 7 à 10</h1>	
	 <form action= "#" method="post">
        <div class="age">
          
          
  	<!-----7.Écrire une expression conditionnelle...------>
           <h1>Merci de remplir ce formulaire</h1>
            <label for="age">Quel est votre âge?</label>
            <input type="number" name="age">
            
            <h2>Merci d'indiquer votre genre</h2>
            <input type="radio" id="choixGenre" name="genre" value= 'femme'>
            <label for="choixGenre1">Femme</label>
            <input type="radio" id="choixGenre" name="genre" value= 'homme'>
            <label for="choixGenre2">Homme</label>
        </div>
        <div class = "bouton">
        	<button type="submit">Envoyer</button>
        </div>
    </form>		
    
    <?php
	$age = $_POST['age'];
	$sexe = $_POST['genre'];
		if($age>21 && $age<=40 && $sexe == 'femme'){
			echo('Bonjour, bienvenue parmis nous!');
		}
		else{
			echo('Désolé, vous ne remplissez pas les critères de sélection.');
		}
	?>
    
    
    <!----8. La réécrire, mais sans ELSE.------->
    <?php
	$age = $_POST['age'];
	$sexe = $_POST['genre'];
		if($age>21 && $age<=40 && $sexe == 'femme'){
			echo('Bonjour, bienvenue parmis nous!');
		}
		{
			echo('Désolé, vous ne remplissez pas les critères de sélection.');
		}
	?>
     
    
</body>
</html>
