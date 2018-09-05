<?php
session_start();
require 'sql.php';
require 'sanitizer.php';

function fetcher($raw,$alias,$param){
    $raw->bindParam($alias,$param);
    $raw->execute();
    $fetched=$raw->fetchAll(PDO::FETCH_NUM);
    return $fetched;
}

if(isset($_GET['socId'])){
    $socId=sanitize($_GET['socId'],'integer');
};

$socDetailRaw=$bdd->prepare(
    'SELECT s.nom,s.adresse,s.pays,s.telephone,s.tva FROM societes as s 
    WHERE s.id_societe=:id'    
);

$factureBySocRaw=$bdd->prepare(
    'SELECT numero, date, objet FROM factures as f
    LEFT JOIN societes as s 
    ON f.fk_id_societe=s.id_societe
    WHERE s.id_societe=:id'
);

$contactBySocRaw=$bdd->prepare(
    'SELECT p.Nom,p.Prénom, p.Telephone,p.Email FROM Personnes as p
    LEFT JOIN societes as s 
    ON p.societe_id=s.id_societe
    WHERE s.id_societe=:id'
);

$socDetail=fetcher($socDetailRaw,':id',$socId);
$factureBySoc=fetcher($factureBySocRaw,':id',$socId);
$contactBySoc=fetcher($contactBySocRaw,':id',$socId);

$socName=$socDetail[0]['nom'];
?>