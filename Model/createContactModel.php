<?php
require 'sql.php';
$donneesbis=$bdd->prepare('SELECT * FROM societes as s');
$donneesbis->execute();
$donneesAffichbis=$donneesbis->fetchAll();
function out1bis(){
  global $donneesAffichbis;
  foreach($donneesAffichbis as $sn){
    echo '<option value="'.$sn[0].'">'.$sn[1].'</option>';

  }
}

try {
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $stmt = $bdd->prepare("INSERT INTO Personnes ( Nom, Prenom, Telephone, Email, societe_id, factures_id)
 VALUES ( :Nom, :Prenom, :Telephone, :Email, :societe_id, :factures_id)");
 $stmt->bindParam(':Nom', $_POST['Nom']);
 $stmt->bindParam(':Prenom', $_POST['Prenom']);
 $stmt->bindParam(':Telephone', $_POST['Telephone']);
 $stmt->bindParam(':Email', $_POST['Email']);
 $stmt->bindParam(':societe_id', $_POST['societe']);
 $stmt->bindParam(':factures_id', $_POST['facture']);
 $stmt->execute();
 echo "New records created successfully";
}

catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}


$stmt->close();
$bdd->close();
  header('Location: ../Vue/contactVue.php');
?>

