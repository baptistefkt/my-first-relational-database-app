<?php
require 'sql.php';
require 'sanitizer.php';

//Fill with existing data
$socId=checkEmptyPost($_GET['id'],'integer');
$oldType=checkEmptyPost($_GET['type'],'integer');

//Pre-select option
$oldTypeString;
if($oldType==1){
    $oldTypeString='Fournisseur';
}
else if ($oldType==2){
    $oldTypeString='Client';
}

//Pre-fill other fields
$oldDataRaw=$bdd->prepare('SELECT * FROM societes WHERE id_societe=:socId');
$oldDataRaw->bindParam(':socId',$socId);
$oldDataRaw->execute();
$oldData=$oldDataRaw->fetchAll();


$oldName=$oldData[0]['nom'];
$oldAdresse=$oldData[0]['adresse'];
$oldPays=$oldData[0]['pays'];
$oldTel=$oldData[0]['telephone'];
$oldTVA=$oldData[0]['tva'];

//Update

$socNom=checkEmptyPost($_POST['nom'],'string');
$socAdresse=checkEmptyPost($_POST['adresse'],'string');
$socPays=checkEmptyPost($_POST['pays'],'string');
$socTel=checkEmptyPost($_POST['telephone'],'integer');
$socTVA=checkEmptyPost($_POST['tva'],'integer');
$socType=checkEmptyPost($_POST['socType'],'integer');

$updateSoc=$bdd->prepare(
    'UPDATE societes 
    SET nom=:socNom, adresse=:socAdresse, pays=:socPays, telephone=:socTel, tva=:socTVA 
    WHERE id_societe=:socId'
);//what if id does not exist?

$updateSoc->bindParam(':socNom',$socNom);
$updateSoc->bindParam(':socAdresse',$socAdresse);
$updateSoc->bindParam(':socPays',$socPays);
$updateSoc->bindParam(':socTel',$socTel);
$updateSoc->bindParam(':socTVA',$socTVA);
$updateSoc->bindParam(':socId',$socId);
$updateSoc->execute();

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