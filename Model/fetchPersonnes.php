<?php
require 'sql.php';


    $donneesPersonnes=$bdd->prepare('SELECT * FROM Personnes');
    $donneesPersonnes->execute();
    $donneesAffichPersonnes=$donneesPersonnes->fetchAll();
    function outPersonnes(){
      global $donneesAffichPersonnes;
      foreach ($donneesAffichPersonnes as $p){
          echo '<option value="'.$p[0].'">'.$p[1].'</option>';
      }
    }
$donneesPersonnes->closeCursor();
 ?>
