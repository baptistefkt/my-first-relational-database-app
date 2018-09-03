<?php
require 'sql.php';

$donnees=$bdd->prepare('SELECT * FROM societes as s');
$donnees->execute();
$donneesAffich=$donnees->fetchAll();
function out1(){
  global $donneesAffich;
  foreach($donneesAffich as $s){
    echo '<tr><td>'.$s[1].'</td>';
    echo '<td>'.$s[2].'</td>';
    echo '<td>'.$s[3].'</td>';
    echo '<td>'.$s[4].'</td>';
    echo '<td>'.$s[5].'</td>';
    echo '<td>'.'<a href="delete.php?id='. $s['id'].'">'.'Supprimer</a></td>';
    echo '<td>'.'<a href="updateClientVue.php?id='. $s['id'].'">'.'Modifier</a></td></tr>';
  }
}
?>

<?php
$donnees2=$bdd->prepare('SELECT * FROM Personnes as p LEFT JOIN societes as s on p.societe_id=s.id_societe ');
$donnees2->execute();
$donneesAffich2=$donnees2->fetchAll();
function out2(){
  global $donneesAffich2;
  foreach($donneesAffich2 as $p){
    echo '<tr><td>'.$p[1].'</td>';
    echo '<td>'.$p[2].'</td>';
    echo '<td>'.$p[3].'</td>';
    echo '<td>'.$p[4].'</td>';
    echo '<td>'.$p[8].'</td>';
    echo '<td>'.$p[9].'</td>';
    echo '<td>'.$p[14].'</td>';
    echo '<td>'.'<a href="../Model/delete.php?id='. $p['id'].'">'.'Supprimer</a></td>';
    echo '<td>'.'<a href="updateClientVue.php?id='. $p['id'].'">'.'Modifier</a></td></tr>';
  }
}
 ?>
<?php
$donnees3=$bdd->prepare('SELECT * FROM factures as f LEFT JOIN societes as s on s.factures_id=f.id ');
$donnees3->execute();
$donneesAffich3=$donnees3->fetchAll();
function out3(){
  global $donneesAffich3;
  foreach($donneesAffich3 as $f){
    echo '<tr><td>'.$f[1].'</td>';
    echo '<td>'.$f[2].'</td>';
    echo '<td>'.$f[3].'</td>';
    echo '<td>'.$f[5].'</td>';
    echo '<td>'.'<a href="delete.php?id='. $f['id'].'">'.'Supprimer</a></td>';
    echo '<td>'.'<a href="update.php?id='. $f['id'].'">'.'Modifier</a></td></tr>';
  }
}
?>
