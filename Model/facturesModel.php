<?php
require 'sql.php';

$donneesFact=$bdd->prepare('SELECT * FROM factures as f LEFT JOIN societes as s on f.fk_id_societe=s.id_societe ORDER BY date DESC' );
$donneesFact->execute();
$donneesAffichFact=$donneesFact->fetchAll();
function outFact(){
  global $donneesAffichFact;
  foreach($donneesAffichFact as $f){
    echo '<tr><td>'.$f[2].'</td>';
    echo '<td><a href="../Vue/detailFactureVue.php?id='. $f['id'] . '">'.$f[1].'</td>';
    echo '<td>'.$f[7].'</td>';
    echo '<td>'.$f[3].'</td>';
    echo '<td>'.'<a href="delete.php?id='. $f['id'].'">'.'Supprimer</a></td>';
    echo '<td>'.'<a href="update.php?id='. $f['id'].'">'.'Modifier</a></td></tr>';
  }
}
$donneesFact->closeCursor();
 ?>
