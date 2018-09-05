<?php
include 'header.php';
require '../Model/fetchSocietes.php';
require '../Model/fetchPersonnes.php';
 ?>

    <h1>Ajout d'une facture</h1>
    <form action="../Model/createFactureModel.php" method="post">
        <div class="row">
            <div class="input-field col s12 m8">
                <input name="factureNum" id="factureNum" type="text" class="validate" required>
                <label for="factureNum">Numéro de la facture :</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m8">
                <input name="factureDate" id="factureDate" type="date" class="validate" required>
                <label for="factureDate">Date de la facture :</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m8">
                <select class="browser-default" name="facturePers" id="facturePers">
                    <option value="" disabled selected>Choisissez un contact</option>
                    <?php echo outPersonnes(); ?>
    			</select>

            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m8">
                <select class="browser-default" name="factureSoc">
                    <option value="" disabled selected>Choisissez une société</option>
                    <?php echo outSocietes(); ?>
    			</select>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m8">
              <textarea id="textarea1" class="materialize-textarea" required name="factureObj"></textarea>
              <label for="textarea1">Objet de la facture: </label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m8">
                <button class="btn waves-effect waves-light cyan darken-2" type="submit" name="btnCreateFacture">Sauvegarder<i class="material-icons right">add</i></button>
            </div>

        </div>
    </form>
<?php
include 'footer.php';
 ?>
