<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<title>Excuses</title>
</head>

<body>

	
	<form action= "#" method="post">
        <div class="form_excuse">
           <h1>Formulaire d'excuses</h1>
            <label for="enfant">nom de l'enfant</label>
            <input type="text" name="nom_enfant">
            
            <label for="instit">nom de l'institutrice</label>
            <input type="text" name="nom_instit">
            
            <h2>Cause de l'absence :</h2>
            <input type="radio" id="raison" name="excuse" value= 'maladie'>
            <label for="choix_excuse">Maladie</label>
            <input type="radio" id="raison" name="excuse" value= 'deces'>
            <label for="choix_excuse">Décès de l'animal de compagnie (ou d'un membre de la famille)</label>
            <input type="radio" id="raison" name="excuse" value= 'activite'>
            <label for="choix_excuse">Activité extra-scolaire importante</label>
            <input type="radio"  id="raison" name="excuse" value= 'autre_excuse'>
            <label for="choix_excuse">Toute autre excuse de ton choix</label>
            
        </div>
        <div class = "bouton">
        	<button type="submit">Envoyer</button>
        	<br>
        	
	<?php
		$nom_enfant = $_POST['nom_enfant'];
		$nom_instit = $_POST['nom_instit'];
		$excuse = $_POST['excuse'];
		$date = date('d-m-Y');
		$formule_politesse = ('Bonne journée');
		
			if($excuse == 'maladie'){
				echo($nom_enfant . ', élève de Madame ' . $nom_instit . ',<br>ne pourra etre présent ce ' . $date . ' pour cause de maladie<br>' . $formule_politesse);
			}
			elseif($excuse == 'deces'){
				echo($nom_enfant . ', élève de Madame ' . $nom_instit . ',<br>ne pourra etre présent ce ' . $date . ' pour cause de décès dans la famille<br>' . $formule_politesse);
			}
			elseif($excuse == 'activite'){
				echo($nom_enfant . ', élève de Madame ' . $nom_instit . ',<br>ne pourra etre présent ce ' . $date . ' pour cause d\'activité extra-scolaire importante<br>' . $formule_politesse);
			}
			elseif($excuse == 'autre_excuse'){
				echo($nom_enfant . ', élève de Madame ' . $nom_instit . ',<br>ne pourra etre présent ce ' . $date . ' pour raison familiale<br>' . $formule_politesse);
			}
	?>
			
        </div>
    </form> 
</body>
</html>
