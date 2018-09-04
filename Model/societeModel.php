<?php
session_start();
require 'sql.php';
require 'sanitizer.php';

$dataSocieteRaw=$bdd->prepare('SELECT * FROM societes as s 
                                        LEFT JOIN factures as f ON s.id_societe=fk_id_societe 
                                        LEFT JOIN Personnes as p ON s.id_societe=p.societe_id');
$dataSocieteRaw->execute();
$dataSocieteFull=$dataSocieteRaw->fetchAll();


$dataSocBasicRaw=$bdd->prepare('SELECT * FROM societe_as_type as link
                                         INNER JOIN  societes as s ON link.societe_id=s.id_societe
                                         INNER JOIN type as t ON link.type_id=t.id_type');
$dataSocBasicRaw->execute();
$dataSocBasic=$dataSocBasicRaw->fetchAll();


function displaySocType($array,$key){
    foreach($array as $soc){
        if ($soc['type']==$key){
            echo '<tr><td>'.$soc['nom'].'</td>';
            echo '<td>'.$soc['adresse'].'</td>';
            echo '<td>'.$soc['pays'].'</td>';
            echo '<td>'.$soc['telephone'].'</td>';
            echo '<td>'.$soc['tva'].'</td></tr>';
        }
    }
}
// $address='index.php?status=false';
if(isset($_GET['type'])){
    $type=sanitize($_GET['type'],'string');
};
?>
