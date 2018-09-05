<?php
include 'header.php';
require '../Model/sql.php';
require '../Model/detailFactureModel.php';
 ?>

    <div class="container">
        <h3>Détail de la facture n° : <?php echo $factureNum;?></h3>
        <a class="waves-effect waves-light btn cyan darken-2" onclick="window.print();return false;">Imprimer<i class="material-icons right">print</i></a>
        <h5>Date : </h5>
        <h6><?php echo $factureDate; ?></h6>
        <h5>Société liée à la facture :</h5>
        <h6> <?php echo $factureSoc; ?></h6>
        <h5>Type de la société :</h5>
        <h6> <?php echo $factureType; ?></h6>
        <h5>Contact lié à la facture :</h5>
        <h6> <?php echo $facturePrenom.' '.$factureNom; ?></h6>
        <h5>Objet de la facture :</h5>
        <p><?php echo $factureObj; ?></p>
    </div>

<?php
include 'footer.php';
 ?>
