<?php
require 'sql.php';
require 'updateContactModel.php';

$donnees2=$bdd->prepare('SELECT * FROM Personnes as p LEFT JOIN societes as s on p.societe_id=s.id_societe LEFT JOIN factures as f on p.id_personnes=f.fk_id_personne ');
$donnees2->execute();
$donneesAffich2=$donnees2->fetchAll();
function outContact(){
  global $donneesAffich2;
  foreach($donneesAffich2 as $p){
    echo '<tr><td>'.$p[1].'</td>';
    echo '<td>'.$p[2].'</td>';
    echo '<td>'.$p[3].'</td>';
    echo '<td>'.$p[4].'</td>';
    echo '<td>'.$p[7].'</td>';
    echo '<td>'.$p[8].'</td>';
    echo '<td>'.$p[13].'</td>';
    echo '<td>'.'<a href="delete.php?id='. $p['id_personnes'].'">'.'<i class="far fa-trash-alt"></i></a></td>';
    echo '<td>'.'<a href="../Vue/updateContactVue.php?id='. $p['id_personnes'].'">'.'<i class="far fa-edit"></i></a></td></tr>';
  }
}
 ?>
