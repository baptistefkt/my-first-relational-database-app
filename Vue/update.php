<?php
require '../Method/sql.php';
$id= $_GET['id'];
$resultat = $bdd->prepare('SELECT * FROM Personnes WHERE id=:id');
$resultat->bindParam(':id',$id);
$resultat->execute();
while ($donnees = $resultat->fetch())
{
  $nom= $donnees['Nom'];
  $prenom= $donnees['Prenom'];
  $tel= $donnees['Telephone'];
  $mail= $donnees['Email'];
}
$resultat->closeCursor();
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifier un client</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="/php-pdo/read.php">Liste des données</a>
	<h1>Modifier</h1>
	<form action="updatephp.php?id=<?php echo intval($id)?>" method="post">
		<div>
			<label for="nom">Nom</label>
			<input type="text" name="nom" value="<?php echo $nom ?>">
		</div>
		<div>
			<label for="Prenom">Prénom</label>
			<input type="text" name="Prenom" value="<?php echo $prenom ?>">
		</div>
		<div>
			<label for="tel">Telephone</label>
			<input type="text" name="tel" value="<?php echo $tel ?>">
		</div>
		<div>
			<label for="mail">Email</label>
			<input type="text" name="mail" value="<?php echo $mail ?>">
		</div>
		<button type="submit">Envoyer</button>
	</form>
</body>
</html>
