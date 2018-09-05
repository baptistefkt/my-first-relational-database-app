<?php
require 'sql.php';
$id=$_GET['id'];
$facSoc=intval($_POST['factureSoc']);
$facPers=intval($_POST['facturePers'])	;

print_r($_POST);


try {

	 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	 // Prepare statement
	 $stmt = $bdd->prepare("UPDATE factures SET numero=:numero, date=:date, objet=:objet, fk_id_societe=:fk_id_societe, fk_id_personne=:fk_id_personne WHERE id=:id");
     $stmt->bindParam(':id', $id);
     $stmt->bindParam(':numero', $_POST['factureNum']);
     $stmt->bindParam(':date', $_POST['factureDate']);
     $stmt->bindParam(':objet', $_POST['factureObj']);
     $stmt->bindParam(':fk_id_societe', $facSoc);
     $stmt->bindParam(':fk_id_personne', $facPers);
	 $stmt->execute();
	 // execute the query
     $stmt->closeCursor();

	 // echo a message to say the UPDATE succeeded
	 // echo "Modifications réussies";
	 }
catch(PDOException $e)
	 {
	 echo $sql . "<br>" . $e->getMessage();
	 }


header('Location: ../Controller/facturesController.php');
?>
