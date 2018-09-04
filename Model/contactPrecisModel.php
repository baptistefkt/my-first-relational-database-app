<?php
require 'sql.php';

  $id= $_GET['id'];
  $resultat = $bdd->prepare('SELECT * FROM Personnes as p LEFT JOIN societes as s on p.societe_id=s.id_societe LEFT JOIN factures as f on p.id_personnes=f.fk_id_personne  WHERE id_personnes=:id');
  $resultat->bindParam(':id',$id);
  $resultat->execute();
  while ($donnees = $resultat->fetch())
  {
    $nom= $donnees['Nom'];
    $prenom= $donnees['Prenom'];
    $tel= $donnees['Telephone'];
    $mail= $donnees['Email'];
    $societe= $donnees['nom'];
    $adressesoc= $donnees['adresse'];
    $factures= $donnees['numero'];
  }
  $resultat->closeCursor();

 ?>
