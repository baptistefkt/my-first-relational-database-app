<?php
include 'header.php';
require '../Model/createUpdateContactModel.php';
?>

	<a href="/accueilVue.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="../Model/createContactphp.php" method="post">
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
		<div class="input-field">
			<SELECT name="societe" class="browser-default"  >
				<?php echo out1bis() ?>
				<option value="">Autre</option>
			</SELECT>
		</div>
		<div>
			<label for="facture">Facture</label>
			<input type="text" name="facture" value="7">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
<?php include 'footer.php' ?>
