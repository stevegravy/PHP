<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    class voiture{
        private $immatriculation;
        private $date_mise_circulation;
        public $kilometrage;
        private $modele;
        private $marque;
        public $couleur;
        public $poids;

        public function __construct(){
            $this->disponibilite($modele);
            $this->classe($poids);
            $this->origine($immatriculation);
            $this->vetuste($kilometrage);
            $this->age($date_mise_circulation);
        }

        public function disponibilite($modele){
            if($modele === 'Audi'){
                echo'reserved <br>';
            } else {
                echo'free <br>';
            }
        }
        public function classe($poids){
            if ($poids>3500){
                echo'ce véhicule est un utilitaire <br>';
            } else{
                echo'ce véhicule est une voiture <br>';
            }
        }

        public function origine($immatriculation){
            if ($immatriculation === 'BE'){
                echo'Cette voiture provient de Belgique <br>';
            }
            elseif($immatriculation === 'FR'){
                echo'Cette voiture provient de France <br>';
            }
            elseif($immatriculation === 'DE'){
                echo'Cette voiture provient d\'Allemagne <br>';
            }
            else{
                echo'Mais d\'où vient cette voiture? <br>';
            }
        }

        public function vetuste($kilometrage){
            if ($kilometrage < 100000){
                echo'cette voiture n\'a pas beaucoup servi <br>';
            } elseif (($kilometrage >= 100000) && ($kilometrage<= 200000)){
                echo'cette voiture a moyennement servi <br>';
            } elseif ($kilometrage > 200000){
                echo'cette voiture a beaucoup servi <br>';
            }
        }

        public function age($date_mise_circulation){
            $from = $date_mise_circulation;
            $to = date('Y');
            $age=$to-$from;
            var_dump($age);
        }
    }

    $a = new voiture();
    $a->disponibilite('BMW');
    $a->classe(125);
    $a->origine('BE');
    $a->vetuste(125000);
    $a->age(1984);
    echo $a;
    ?>
</body>
</html>