<?php
// Exercice:
//créer 1 classe avec 4  méthode=
// -Additionner
// -Soustraire
// -Multiplier
// -Diviser
//
// créer 4 variables.


  class jerome{
    public $tab_1;

    public function addition($tab_1){
      $somme = 0;
      for($i=0; $i<count($tab_1); $i++){
      $somme = $tab_1[$i] + $somme;
      }
      echo '<pre>';
      echo $somme;
    }

    public function soustraire($tab_1){
      $soustraction=$tab_1[0];
      for($i=1; $i<count($tab_1); $i++){
      $soustraction = $soustraction - $tab_1[$i];
      }
      echo '<pre>';
      echo $soustraction;
    }

    public function multiplication($tab_1){
      $multiplication = $tab_1[0];
      for($i=1; $i<count($tab_1); $i++){
      $multiplication = $tab_1[$i] * $multiplication;
      }
      echo '<pre>';
      echo $multiplication;
    }

    public function division($tab_1){
      $division = $tab_1[count($tab_1)-1];
      for($i=count($tab_1)-1; $i>0; $i--){
      $division = $division / $tab_1[$i];
      }
      echo '<pre>';
      echo $division;
    }

  }

 ?>
