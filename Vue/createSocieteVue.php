<?php
include 'header.php';


?>

	<a href="/accueilController.php">Accueil</a>
	<h1>Ajouter</h1>
	<form action="../Model/createSocieteModel.php" method="post">
		<div>
			<label for="nom">Nom</label>
			<input type="text" name="nom" value="">
		</div>

		<div>
			<label for="adresse">Adresse</label>
			<input type="text" name="adresse" value="">
		</div>

		<div>
			<label for="pays">Pays</label>
			<input type="text" name="pays" value="">
		</div>
		<div>
			<label for="telephone">Téléphone</label>
			<input type="text" name="telephone" value="">
		</div>
		<div>
			<label for="tva">TVA</label>
			<input type="text" name="tva" value="">
		</div>
        <div class="input-field">
        <label for="socType">Client/Fournisseur:</label><br><br>
            <SELECT name="socType" class="browser-default" >
				<option value="2">Client</option>
                <option value="1">Fournisseur</option>
			</SELECT>
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
<?php include 'footer.php' ?>