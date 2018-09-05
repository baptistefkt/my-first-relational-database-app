<?php
require 'sql.php';


    $donneesPersonnes=$bdd->prepare('SELECT * FROM Personnes');
    $donneesPersonnes->execute();
    $donneesAffichPersonnes=$donneesPersonnes->fetchAll();
    function outPersonnes(){
      global $donneesAffichPersonnes;
      foreach ($donneesAffichPersonnes as $pe){
          echo '<option value="'.$pe[0].'">'.$pe[1].'</option>';
      }
    }
$donneesPersonnes->closeCursor();
 ?>
