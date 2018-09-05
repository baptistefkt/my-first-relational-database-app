<?php
require 'sql.php';
require 'sanitizer.php';

function checkEmptyPost($postValue,$filterType){
    if (isset($postValue) && !empty($postValue)){
        $var=sanitize($postValue,$filterType);
         
    }
    return $var;    
}
$socNom;$socAdresse;$socPays;$socTel;$socTVA;$socType;

$socNom=checkEmptyPost($_POST['nom'],'string');
$socAdresse=checkEmptyPost($_POST['adresse'],'string');
$socPays=checkEmptyPost($_POST['pays'],'string');
$socTel=checkEmptyPost($_POST['telephone'],'integer');
$socTVA=checkEmptyPost($_POST['tva'],'integer');
$socType=checkEmptyPost($_POST['socType'],'integer');

// var_dump($socNom);var_dump($socTVA);var_dump($socType);


$updateSoc=$bdd->prepare(
    'INSERT INTO societes (nom, adresse,pays,telephone,tva)
    VALUES(:nom,:adresse,:pays,:telephone,:tva)'
);
$updateSoc->bindParam(':nom', $socNom);
$updateSoc->bindParam(':adresse', $socAdresse);
$updateSoc->bindParam(':pays', $socPays);
$updateSoc->bindParam(':telephone', $socTel);
$updateSoc->bindParam(':tva', $socTVA);
$updateSoc->execute();

$idList=$bdd->prepare('SELECT id_societe FROM societes as s ORDER BY id_societe DESC');
$idList->execute();
$idArray=$idList->fetchAll();
$newId=$idArray[0][0];
// var_dump($idArray);
// var_dump($newId);

$updateType=$bdd->prepare(
    'INSERT INTO societe_as_type (societe_id, type_id)
    VALUES(:newId,:socType)'
);
$updateType->bindParam(':newId',$newId);
$updateType->bindParam(':socType',$socType);
$updateType->execute();

if (!empty($socNom) && !empty($socAdresse) &&!empty($socPays) &&!empty($socTel)&& !empty($socType)){
    if($socType==1){
    header('Location: ../Controller/societeController.php?type=Fournisseur');    
    }
    else if($socType==2){
    header('Location: ../Controller/societeController.php?type=Client');    
    }
    else{
    header('Location: ../Controller/accueilController.php');
    }
}


?>