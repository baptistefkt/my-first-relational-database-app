<?php
require 'sql.php';

$donnees=$bdd->prepare('SELECT * FROM societes as s LEFT JOIN societe_as_type as t on s.id_societe=t.societe_id ORDER BY id_societe DESC LIMIT 5');
$donnees->execute();
$donneesAffich=$donnees->fetchAll();
function out1(){
  global $donneesAffich;
  $table='societes';
  foreach($donneesAffich as $s){
    echo '<tr><td>'.$s[1].'</td>';
    echo '<td>'.$s[2].'</td>';
    echo '<td>'.$s[3].'</td>';
    echo '<td>'.$s[4].'</td>';
    echo '<td>'.$s[5].'</td>';

    if ($s[7]== '1'){
        echo '<td> Fournisseur </td>';
    } else {
        echo '<td> Client </td>';
    };
      if($_SESSION['userType']=='admin'){
      echo '<td><a href="../Model/deleteSoc.php?id='. $s['id_societe'].'&table='.$table.'"><i class="far fa-trash-alt"></i></a></td>';
      echo '<td>'.'<a href="updateSocieteController.php?id='. $s['id_societe'].'&type='.$s[7].'">'.'<i class="far fa-edit"></i></a></td></tr>';
    }
  }
}
?>

<?php
$donnees2=$bdd->prepare('SELECT * FROM Personnes as p LEFT JOIN societes as s on p.societe_id=s.id_societe ORDER BY id_personnes DESC LIMIT 5');
$donnees2->execute();
$donneesAffich2=$donnees2->fetchAll();
function out2(){
  global $donneesAffich2;
  foreach($donneesAffich2 as $p){
    echo '<tr><td>'.$p[1].'</td>';
    echo '<td>'.$p[2].'</td>';
    echo '<td>'.$p[3].'</td>';
    echo '<td>'.$p[4].'</td>';
    echo '<td>'.$p[7].'</td>';
    if($_SESSION['userType']=='admin'){
      echo '<td><a href="../Model/deleteContact.php?id='. $p['id_personnes'].'"><i class="far fa-trash-alt"></i></a></td>';
      echo '<td>'.'<a href="updateContactController.php?id='. $p['id_personnes'].'&type='.$s[7].'">'.'<i class="far fa-edit"></i></a></td></tr>';
    }
  }
}
 ?>

<?php
$donnees3=$bdd->prepare('SELECT * FROM factures as f LEFT JOIN societes as s on f.fk_id_societe=s.id_societe ORDER BY date DESC LIMIT 5' );
$donnees3->execute();
$donneesAffich3=$donnees3->fetchAll();
function out3(){
  global $donneesAffich3;
  foreach($donneesAffich3 as $f){
    echo '<tr><td>'.$f[2].'</td>';
    echo '<td><a href="../Vue/detailFactureVue.php?id='. $f['id'] . '">'.$f[1].'</td>';
    echo '<td>'.$f[7].'</td>';
    echo '<td>'.$f[3].'</td>';
    if($_SESSION['userType']=='admin'){
      echo '<td><a href="../Model/deleteSoc.php?id='. $f['id_societe'].'&table='.$table.'"><i class="far fa-trash-alt"></i></a></td>';
      echo '<td>'.'<a href="updateSocieteController.php?id='. $f['id_societe'].'&type='.$s[7].'">'.'<i class="far fa-edit"></i></a></td></tr>';
    }
  }
}
?>
