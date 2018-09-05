<?php
include 'header.php';
require '../Model/contactPrecisModel.php';
 ?>
 <div class="container">
   <h3>Details du contact : <?php echo $nom." ".$prenom ?></h3>
   <a class="waves-effect waves-light btn cyan darken-2" onclick="window.print();return false;">Imprimer</a>
   <div class="row">
       <div class="col s6 m6">
         <div class="card-panel cyan darken-2">
           <div class="card-content white-text">
             <span class="card-title"></span>
             <ul>
                <li>Nom : <?php echo " ".$nom;  ?></li>
                <li>Prénom: <?php echo " ".$prenom; ?></li>
                <li>Telephone: <?php echo " ".$tel; ?></li>
                <li>Email: <?php echo " ".$mail; ?></li>
                <li>Société:<?php echo " ".$societe; ?> </li>
                <li>Adresse société:<?php echo " ".$adressesoc; ?> </li>
                <li>Factures liées: <?php echo " ".$factures; ?></li>
             </ul>
           </div>
         </div>
       </div>
     </div>
         <?php
         echo '<a href="deleteContact.php?id='. $id.'">'.'<i class="far fa-trash-alt"></i></a>';
         echo '<a href="../Vue/updateContactVue.php?id='. $id.'">'.'<i class="far fa-edit"></i></a>';
          ?>
 </div>

<?php
include 'footer.php'
 ?>
