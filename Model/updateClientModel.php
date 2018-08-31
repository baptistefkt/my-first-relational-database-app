<?php
require 'sql.php';
$id= $_GET['id'];
$resultat = $bdd->prepare('SELECT * FROM Personnes WHERE id=:id');
$resultat->bindParam(':id',$id);
$resultat->execute();
while ($donnees = $resultat->fetch())
{
  $nom= $donnees['Nom'];
  $prenom= $donnees['Prenom'];
  $tel= $donnees['Telephone'];
  $mail= $donnees['Email'];
}
$resultat->closeCursor();
?>