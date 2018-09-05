<?php
require 'sql.php';
require 'sanitizer.php';

$id= sanitize($_GET['id'],'integer');
$resultat = $bdd->prepare('SELECT * FROM Personnes as p LEFT JOIN societes as s on p.societe_id=s.id_societe  WHERE id_personnes=:id');
$resultat->bindParam(':id',$id);
$resultat->execute();
while ($donnees = $resultat->fetch())
{
  $nom= $donnees['Nom'];
  $prenom= $donnees['Prenom'];
  $tel= $donnees['Telephone'];
  $mail= $donnees['Email'];
  $societe= $donnees['nom'];
}
$resultat->closeCursor();
?>
<?php

$donneesbis=$bdd->prepare('SELECT * FROM societes as s');
$donneesbis->execute();
$donneesAffichbis=$donneesbis->fetchAll();
function out1bis(){
  global $donneesAffichbis;
  foreach($donneesAffichbis as $sn){
    echo '<option value="'.$sn[0].'">'.$sn[1].'</option>';

  }
}
 ?>
