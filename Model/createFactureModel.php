<?php
require 'sql.php';


 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $stmt = $bdd->prepare("INSERT INTO factures ( numero, date, objet, fk_id_societe, fk_id_personne)
 VALUES ( :numero, :date, :objet, :fk_id_societe, :fk_id_personne)");
 $stmt->bindParam(':numero', $_POST['factureNum']);
 $stmt->bindParam(':date', $_POST['factureDate']);
 $stmt->bindParam(':objet', $_POST['factureObj']);
 $stmt->bindParam(':fk_id_societe', $_POST['factureSoc']);
 $stmt->bindParam(':fk_id_personne', $_POST['facturePers']);
 $stmt->execute();
 // echo "New records created successfully";


 header('Location: ../Controller/facturesController.php');
?>
