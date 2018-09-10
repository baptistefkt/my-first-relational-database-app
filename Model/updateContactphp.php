<?php
require 'sql.php';
//require 'sanitizer.php';
$id=$_GET['id'];
$nom = $_POST['nom'];
$prenom = $_POST['Prenom'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$nomsoc = $_POST['societe'];


$sql = "UPDATE Personnes SET Nom=:Nom, Prenom=:Prenom, Telephone=:Telephone, Email=:Email, societe_id=:societe_id WHERE id=:id";
// Prepare statement
$stmt = $bdd->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->bindParam(':Nom', $nom);
$stmt->bindParam(':Prenom', $prenom);
$stmt->bindParam(':Telephone', $tel);
$stmt->bindParam(':Email', $mail);
$stmt->bindParam(':societe_id', $nomsoc);
$stmt->execute();





//header('Location: ../Controller/accueilController.php');
?>
