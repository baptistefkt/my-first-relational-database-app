<?php
session_start();
require 'sql.php';
require 'sanitizer.php';

$dataSocBasicRaw=$bdd->prepare('SELECT * FROM societe_as_type as link
                                         INNER JOIN  societes as s ON link.societe_id=s.id_societe
                                         INNER JOIN type as t ON link.type_id=t.id_type');
$dataSocBasicRaw->execute();
$dataSocBasic=$dataSocBasicRaw->fetchAll();

if(isset($_GET['type'])){
    $type=sanitize($_GET['type'],'string');
};
?>
