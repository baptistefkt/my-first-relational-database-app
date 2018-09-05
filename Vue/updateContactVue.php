<?php
include 'header.php';
require '../Model/sql.php';
require '../Model/updateContactModel.php';
?>

<!-- <body> -->
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
		<div class="input-field ">
			<select class="browser-default" name="societe" >
				<option value="<?php echo $societe ?>"><?php echo $societe ?></option>
				<?php echo out1bis() ?>
			</select>
		</div>
		<button type="submit">Envoyer</button>
	</form>
<?php include 'footer.php' ?>
