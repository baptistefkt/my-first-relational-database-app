<?php
require 'sql.php';


    $donneesSocietes=$bdd->prepare('SELECT * FROM societes');
    $donneesSocietes->execute();
    $donneesAffichSocietes=$donneesSocietes->fetchAll();
    function outSocietes(){
      global $donneesAffichSocietes;
      foreach ($donneesAffichSocietes as $s){
          echo '<option value="'.$s[0].'">'.$s[1].'</option>';
      }
    }
$donneesSocietes->closeCursor();
 ?>
