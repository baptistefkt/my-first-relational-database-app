<?php
require 'sql.php';
require 'sanitizer.php';

$id=sanitize($_GET['id'], 'integer');
//$table=sanitize($_GET['table'],'string');

$resultat = $bdd->prepare('DELETE FROM societes WHERE id_societe=:id');
$resultat->bindParam(':id',$id);
// $resultat->bindParam(':table',$table);
// $resultat->bindParam(':idName',$idName);
$resultat->execute();

header('Location: ../Controller/accueilController.php');
 ?>
