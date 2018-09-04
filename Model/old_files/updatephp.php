<?php
require 'sql.php';
$id=$_GET['id'];
$nom = $_POST['nom'];
$prenom = $_POST['Prenom'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$nomsoc = $_POST['societe'];


try {

	 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
	 // execute the query
	 $stmt->execute();

	 // echo a message to say the UPDATE succeeded
	 echo "Modifications réussies";
	 }
catch(PDOException $e)
	 {
	 echo $sql . "<br>" . $e->getMessage();
	 }

$bdd = null;
header('Location: ../Vue/clientsVue.php');
?>
