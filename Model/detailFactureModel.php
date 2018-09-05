<?php
require 'sql.php';

  $id= $_GET['id'];
  $resultat = $bdd->prepare('SELECT * FROM factures
as f LEFT JOIN societes as s on f.fk_id_societe=s.id_societe LEFT JOIN Personnes as p on f.fk_id_personne=p.id_personnes
WHERE id=:id');
  $resultat->bindParam(':id',$id);
  $resultat->execute();
  while ($donnees = $resultat->fetch())
  {
    $factureNum=$donnees['numero'];
    $factureDate=$donnees['date'];
    $factureSoc=$donnees['nom'];
    $facturePrenom=$donnees['Prénom'];
    $factureObj=$donnees['objet'];
    $factureNom=$donnees['Nom'];
    $factureType=$donnees[''];
  }
  $resultat->closeCursor();

 ?>
