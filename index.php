<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercice_1</title>
</head>

<body>
	<h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>
	
	
	<p><?php 
		$prenom = 'Steve';
		$age = 39;
		$faim = true;
		$famile = array(0=>'Adé', 1=>'Noam', 2=>'Steve');
		
		echo('Je m\'appelle ' . $prenom . ' et j\'ai ' . $age . " ans")
	?>
	</p>
	
	
	<!---0. Représente en code le fait de devoir ranger sa chambre si elle est sale.--->
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
	
   
    <!-----1. Affiche un message de salutation différent selon l'heure courante.----->
	<p>
		<?php
			$heure = 9
				
			if($heure >= 5 && $heure <= 9){
				$comment = 'Bonjour';
			}
            elseif($heure >9 && <= 12){
                $comment = 'Bonne journée';
			}
            else if($heure >12 && <=16){
                $comment = 'Bonne après midi';
            }
            elseif($heure >16 && <=21){
                $comment = 'Bonne soirée';
            }
            else if ($heure >21 && <5){
                $comment = 'Bonne nuit';
            }
        
            echo $comment;
		?>
	</p>
	
	
	
    <!------2. Affiche une salutation différente selon l'âge de l'utilisateur.------->



    <form action= "index.php" method="post">
        <div class="age">
           <h1>Dites nous quel âge vous avez</h1>
            <label for="age">âge</label>
            <input type="number" name="age">
        </div>


    </form>
    <?php
        $age = $POST["age"]){
            if ($age<12){
                echo('Salut, petit');
            }
            else if ($age >=12 && $age<18){
                echo('salut, l\'ado');
            }
            else if ($age>=18 && <115){
                echo('Salut, l\'adulte');
            }
            else if ($age>=115){
                echo('Hey, toujours vivant? Bien joué...')
            }
        }
	?>
</body>
</html>





























