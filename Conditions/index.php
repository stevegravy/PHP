<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<title>Exercice_1</title>
</head>

<body>
	
   
    <!-----1. Affiche un message de salutation différent selon l'heure courante.----->
	<p>
		<?php
			$heure = 18;
				
			if($heure >= 5 && $heure <= 9){
				$comment = 'Bonjour';
			}
            elseif($heure >9 && $heure<= 12){
                $comment = 'Bonne journée';
			}
            else if($heure >12 && $heure<=16){
                $comment = 'Bonne après midi';
            }
            elseif($heure >16 && $heure<=21){
                $comment = 'Bonne soirée';
            }
            else if ($heure >21 && $heure<5){
                $comment = 'Bonne nuit';
            }
            echo $comment;
		?>
	</p>
	
	
	
    <!------2. Affiche une salutation différente selon l'âge de l'utilisateur.
           &
            3. Affiche une salutation différente selon l'âge et le genre de l'utilisateur.--->



    <form action= "index.php" method="post">
        <div class="age">
           <h1>Merci de remplir ce formulaire</h1>
            <label for="age">Quel est votre âge?</label>
            <input type="number" name="age">
            
            <h2>Merci d'indiquer votre genre</h2>
            <input type="radio" id="choixGenre" name="genre" value= 'femme'>
            <label for="choixGenre1">Femme</label>
            <input type="radio" id="choixGenre" name="genre" value= 'homme'>
            <label for="choixGenre2">Homme</label>
            
            <h2>Parlez-vous anglais?</h2>
            <input type="radio" name="langue" value= 'yes'>
            <label for="choixGenre1">Oui</label>
            <input type="radio"  name="langue" value= 'no'>
            <label for="choixGenre2">Non</label>
            
        </div>
        <div class = "bouton">
        	<button type="submit">Envoyer</button>
        </div>
    </form>
    
    <?php
        $age = $_POST["age"];
		$genre = $_POST["genre"];
		$langue = $_POST["langue"];
            if ($age<12 && $genre=='femme' && $langue=='yes'){
                echo('Salut, petite' . '<br>Hello girl');
            }
			elseif ($age<12 && $genre=='femme' && $langue== 'No'){
                echo('Salut, petite' . '<br>Tu es nulle. Tu ne parle meme pas l\'anglais');
            }
			elseif ($age<12 && $genre=='homme' && $langue == 'yes'){
                echo('Salut, petit'.'<br>Hello boy');
            }
			elseif ($age<12 && $genre=='homme' && $langue == 'no'){
                echo('Salut, petit' . '<br>Aller, va à l\'école. Vite!');
            }
            else if ($age >=12 && $age<18 && $genre=='femme' && $langue=='yes'){
                echo('salut, l\'adolescente' . '<br> Hello teenage girl');
            }
	 		else if ($age >=12 && $age<18 && $genre=='femme' && $langue=='no'){
                echo('salut, l\'adolescente' . '<br>retourne au lucée apprendre');
            }
			 else if ($age >=12 && $age<18 && $genre=='homme' && $langue=='yes'){
                echo('salut, l\'adolescent' . '<br>Hello teenage boy');
            }
	 		else if ($age >=12 && $age<18 && $genre=='homme' && $langue=='no'){
                echo('salut, l\'adolescent' . '<br>Quoi? tu ne speak pas? Révoooolte!');
            }
            else if ($age>=18 && $age<115 && $genre=='femme' && $langue=='yes'){
                echo('Salut, ma grande' . "<br>Hello lady");
            }
			else if ($age>=18 && $age<115 && $genre=='femme' && $langue=='no'){
                echo('Salut, ma grande' . "<br>Retourne tout de suite à l'école");
            }
			else if ($age>=18 && $age<115 && $genre=='homme' && $langue=='yes'){
                echo('Salut, mon grand' . '<br>Hello, sir!');
            }
			else if ($age>=18 && $age<115 && $genre=='homme' && $langue=='no'){
                echo('Salut, mon grand' . '<br>Il n\'est pas trop tard pour apprendre');
            }
            else if ($age>=115 && $genre=='femme' && $langue=='yes'){
                echo('Hey, toujours vivante? Bien joué...' . '<br>Wow, still alive old lady?');
            }
	 		else if ($age>=115 && $genre=='femme' && $langue=='no'){
                echo('Hey, toujours vivante? Bien joué...' . '<br>Too bad!');
            }
			else if ($age>=115 && $genre=='homme' && $langue=='yes'){
                echo('Hey, toujours vivant? Bien joué...' . '<br>Wow, still alive old man?');
            }
			else if ($age>=115 && $genre=='homme' && $langue=='no'){
                echo('Hey, toujours vivant? Bien joué...' . '<br>You loooooose!!!');
            }
		
	?>
	
	
	
	<!----5. Retour à l'école de l'échec et du jugement------->
	
	<form action= "#" method="post">
        <div class="moyenne">
           <h1>quelle a été votre moyenne?</h1>
            <label for="age">Moyenne</label>
            <input type="number" name="moyenne">
        </div>
        <div class = "bouton">
        	<button type="submit">Envoyer</button>
        </div>
    </form>
	<?php
		$moyenne = $_POST["moyenne"];
		if ($moyenne>=1 && $moyenne<=3){
			echo('Ce travaille est nul!');
		}else if ($moyenne>=4 && $moyenne<=9){
			echo('Ce travail n\'est pas terrible');
		}else if ($moyenne == 10){
			echo('Tout juste!');
		}else if($moyenne>=11 && $moyenne <=14){
			echo('C\'est pas mal');
		}else if($moyenne >= 15 && $moyenne<= 18){
			echo('Bravo!');
		}else if ($moyenne >= 19 && $moyenne<=20){
			echo('Police! Arretez ce tricheur!');
		}
	?>
	<!---6. OU avec SWITCH------->
	<?php
	$moyenne = $_POST["moyenne"];
	
	switch($moyenne){
		case 1:
			echo 'Ce travaille est nul!';
			break;
		case 2:
			echo 'Ce travaille est nul!';
			break;
		case 3:
			echo 'Ce travaille est nul!';
			break;
		case 4:
			echo 'Ce travaille est nul!';
			break;
		case 5:
			echo 'Ce travaille est nul!';
			break;
		case 6:
			echo 'Ce travail n\'est pas terrible';
			break;
		case 7:
			echo 'Ce travail n\'est pas terrible';
			break;
		case 8:
			echo 'Ce travail n\'est pas terrible';
			break;
		case 9:
			echo 'Ce travail n\'est pas terrible';
			break;
		case 10:
			echo 'Tout juste!';
			break;
		case 11:
			echo 'C\'est pas mal';
			break;
		case 12:
			echo 'C\'est pas mal';
			break;
		case 13:
			echo 'C\'est pas mal';
			break;
		case 14:
			echo 'C\'est pas mal';
			break;
		case 15:
			echo 'Bravo!';
			break;
		case 16:
			echo 'Bravo!';
			break;
		case 17:
			echo 'Bravo!';
			break;
		case 18:
			echo 'Bravo!';
			break;
		case 19:
			echo 'Ce travaille est nul!';
			break;
		case 20:
			echo 'Ce travaille est nul!';
			break;
		}
	?>
	
	
	
	
</body>
</html>




