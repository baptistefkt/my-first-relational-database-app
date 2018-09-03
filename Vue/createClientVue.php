<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter un client</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="/cogip.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="createphp.php" method="post">
		<div>
			<label for="Nom">Nom</label>
			<input type="text" name="Nom" value="">
		</div>

		<div>
			<label for="Prenom">Prénom</label>
			<input type="text" name="Prenom" value="">
		</div>

		<div>
			<label for="Telephone">Telephone</label>
			<input type="number" name="Telephone" value="">
		</div>
		<div>
			<label for="Email">Email</label>
			<input type="text" name="Email" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>
