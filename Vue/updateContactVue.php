
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
	<form action="../Model/updatephp.php?id=<?php echo intval($id)?>" method="post">
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
		<div>
			<SELECT name="societe" >
				<option value="<?php echo $societe ?>"><?php echo $societe ?></option>
				<?php echo out1bis() ?>
			</SELECT>
		</div>
		<button type="submit">Envoyer</button>
	</form>
</body>
</html>
