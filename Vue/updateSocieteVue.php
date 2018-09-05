<?php
include 'header.php';
require '../Model/_displaySoc.php';


?>

	<a href="/accueilController.php">Accueil</a>
	<h1>Modifier <?=$oldName?> (<?=$oldTypeString?>)</h1>
	<form action="../Model/updateSocieteModel.php?id=<?=$socId?>&type=<?=$oldType?>" method="post">
		<div>
			<label for="nom">Nom</label>
			<input type="text" name="nom" value="<?=$oldName?>">
		</div>

		<div>
			<label for="adresse">Adresse</label>
			<input type="text" name="adresse" value="<?=$oldAdresse?>">
		</div>

		<div>
			<label for="pays">Pays</label>
			<input type="text" name="pays" value="<?=$oldPays?>">
		</div>
		<div>
			<label for="telephone">Téléphone</label>
			<input type="text" name="telephone" value="<?=$oldTel?>">
		</div>
		<div>
			<label for="tva">TVA</label>
			<input type="text" name="tva" value="<?=$oldTVA?>">
		</div>
        <div class="input-field">
        <label for="socType">Client/Fournisseur:</label><br><br>
            <SELECT name="socType" class="browser-default" >
				<option value="2" <?=$selectClient?>>Client</option>
                <option value="1" <?=$selectFournisseur?>>Fournisseur</option>
			</SELECT>
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
<?php include 'footer.php' ?>