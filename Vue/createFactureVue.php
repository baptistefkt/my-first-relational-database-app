<?php
require '../Model/fetchSocietes.php';
require '../Model/fetchPersonnes.php';
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Ajouter une facture</title>
        <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
    </head>
    <body>
        <h1>Ajout d'une facture</h1>
        <form action="../Model/createFactureModel.php" method="post">
            <div>
                <label>Numéro de la facture :<input type="text" name="factureNum" value="" required></label>
            </div>
            <div>
                <label>Date de la facture :<input type="date" name="factureDate" value="" required> </label>
            </div>
            <div>
                <label>
                    Société :
                    <select name="factureSoc" required>
                        <?php echo outSocietes(); ?>
        				<option value="">Autre</option>
        			</select>
                </label>
            </div>
            <div>
                <label>
                    Personne de contact :
                    <select name="facturePers">
                        <?php echo outPersonnes(); ?>
        				<option value="">Autre</option>
        			</select>
                </label>
            </div>
            <div>
                <label>
                    Objet de la facture :
                    <textarea rows="8" cols="60" name="factureObj" value="" placeholder="Objet de la facture" required></textarea>
                </label>
            </div>
            <div>
                <button type="submit" name="btnCreateFacture">Sauvegarder</button>
            </div>
        </form>
    </body>
</html>
