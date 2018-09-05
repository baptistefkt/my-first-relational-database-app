<?php
include 'header.php';
require '../Model/updateFactureModel.php';
require '../Model/fetchPersonnes.php';
require '../Model/fetchSocietes.php';
 ?>

 <a href="#">Retour à l'accueil</a>
 <a href="#">Historique des factures</a>
 <h1>Modifier la facture</h1>
 <form action="../Model/factureUpdate.php" method="post">
     <div class="row">
         <div class="input-field col s12 m8">
             <input name="factureNum" id="factureNum" type="text" class="validate" required value="<?php echo $factureNum; ?>">
             <label for="factureNum">Numéro de la facture :</label>
         </div>
     </div>
     <div class="row">
         <div class="input-field col s12 m8">
             <input name="factureDate" id="factureDate" type="date" class="validate" required value="<?php echo $factureDate; ?>">
             <label for="factureDate">Date de la facture :</label>
         </div>
     </div>
     <div class="row">
         <div class="input-field col s12 m8">
             <select class="browser-default" name="facturePers" id="facturePers">
                 <option value="<?php echo $facturePersId; ?>" selected><?php echo $facturePers; ?></option>
                 <?php echo outPersonnes(); ?>
             </select>

         </div>
     </div>
     <div class="row">
         <div class="input-field col s12 m8">
             <select class="browser-default" name="factureSoc">
                 <option value="<?php echo $factureSocId; ?>" selected><?php echo $factureSoc; ?></option>
                 <?php echo outSocietes(); ?>
             </select>
         </div>
     </div>
     <div class="row">
         <div class="input-field col s12 m8">
           <textarea id="textarea1" class="materialize-textarea" required name="factureObj"><?php echo $factureObj; ?></textarea>
           <label for="textarea1">Objet de la facture: </label>
         </div>
     </div>
     <div class="row">
         <div class="col s12 m8">
             <button class="btn waves-effect waves-light cyan darken-2" type="submit" name="btnCreateFacture">Sauvegarder<i class="material-icons right">update</i></button>
         </div>

     </div>
 </form>
<?php
include 'footer.php';
?>
