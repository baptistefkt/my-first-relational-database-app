<?php
require 'sql.php';
require 'sanitizer.php';

function deleter ($db,$table,$idRef,$id,$destination){
    $id=sanitize($id,'integer');
    $resultat=$db->prepare('DELETE FROM :table WHERE :idRef=:id');
    $resultat->bindParam(':id',$id);
    $resultat->bindParam(':table',$table);
    $resultat->bindParam(':idRef',$idRef);
    $resultat->execute();
    return header('Location:'.$destination);
}

//example deleter($bdd,'societes','id_societe',$_GET['id'],'accueilController.php');
?>