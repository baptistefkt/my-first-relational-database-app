<?php
require 'sql.php';
$id=$_GET['id'];
$resultat = $bdd->prepare('DELETE FROM Personnes WHERE id=:id');
$resultat->bindParam(':id',$id);
$resultat->execute();
header('Location: cogip.php');
 ?>
