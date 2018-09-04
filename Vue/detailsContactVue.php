<?php
include 'header.php';
require '../Model/sql.php';
require '../Model/contactPrecisModel.php';
 ?>
 <div class="container">
   <h3>Details du contact : <?php echo $nom." ".$prenom ?></h3>
   <a class="waves-effect waves-light btn cyan darken-2" onclick="window.print();return false;">Imprimer</a>
   <table class="bordered centered responsive-table">
     <thead>
       <tr>
           <th>Nom</th>
           <th>Prénom</th>
           <th>Telephone</th>
           <th>Email</th>
           <th>Société</th>
           <th>Adresse société</th>
           <th>Factures liées</th>
       </tr>
     </thead>
     <tbody>
         <?php
         echo '<tr><td>'.$nom.'</td>';
         echo '<td>'.$prenom.'</td>';
         echo '<td>'.$tel.'</td>';
         echo '<td>'.$mail.'</td>';
         echo '<td>'.$societe.'</td>';
         echo '<td>'.$adressesoc.'</td>';
         echo '<td>'.$factures.'</td>';
         echo '<td>'.'<a href="delete.php?id='. $p['id'].'">'.'<i class="far fa-trash-alt"></i></a></td>';
         echo '<td>'.'<a href="../Vue/updateContactVue.php?id='. $p['id'].'">'.'<i class="far fa-edit"></i></a></td></tr>';

          ?>
     </tbody>
   </table>
 </div>

<?php
include 'footer.php'
 ?>
