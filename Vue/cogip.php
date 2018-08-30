<?php
require 'sql.php';
// $resultat = $bdd->query('SELECT * FROM Personnes');
// ob_start();
// while ($donnees = $resultat->fetch())
// {
//   echo '<td>'.$donnees['Nom'].'</td>';
//   echo '<td>'.$donnees['Prenom'].'</td>';
//   echo '<td>'.$donnees['Telephone'].'</td>';
//   echo '<td>'.$donnees['Email'].'</td>';
//   echo '<td>'.'<a href="delete.php?id='. $donnees['id'].'">'.'Supprimer</a></td>';
//   echo '<td>'.'<a href="update.php?id='. $donnees['id'].'">'.'Modifier</a></td></tr>';
// }
// $resultat->closeCursor();
// ;

// $out1 = ob_get_contents();
// ob_end_clean();


$donnees=$bdd->prepare('SELECT * FROM Personnes as p LEFT JOIN societes as s on p.societe_id=s.id_societe');
$donnees->execute();
$donneesAffich=$donnees->fetchAll();

function out1(){
  global $donneesAffich;
  foreach($donneesAffich as $p){
    echo '<tr><td>'.$p[1].'</td>';
    echo '<td>'.$p[2].'</td>';
    echo '<td>'.$p[3].'</td>';
    echo '<td>'.$p[4].'</td>';
    echo '<td>'.$p[7].'</td>';
    echo '<td>'.$p[8].'</td>';
    echo '<td>'.$p[9].'</td>';
    echo '<td>'.$p[10].'</td>';
    echo '<td>'.$p[11].'</td></tr>';
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>COGIP</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script src="main.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>
    <!-- Navbar -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!"> Historique des factures</a></li>
      <li><a href="#!">Créer une facture</a></li>
    </ul>
    <nav>
       <div class="nav-wrapper red darken-4">
         <a href="index.html" class="brand-logo "><img class="responsive-img" id="logo" src=""/></a>COGIP</a>
         <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><a href="cogip.php">Accueil</a></li>
           <!-- Dropdown Trigger -->
           <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Factures<i class="material-icons right">arrow_drop_down</i></a></li>
           <li><a href="#">Sociétés</a></li>
           <li><a href="cogip.php">Personnes</a></li>
         </ul>
       </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="cogip.php">Accueil</a></li>
      <li><a href="#">Factures</a></li>
      <li><a href="#">Sociétés</a></li>
      <li><a href="cogip.php">Historique de client</a></li>
    </ul>
    <!-- Fin navbar -->
    <div class="container">
    <h3>Historique de clients</h3>
    <a class="waves-effect waves-light btn red darken-4" onclick="window.print();return false;">Imprimer</a>
    <a href="create.php" class="waves-effect waves-light btn red darken-4">Créer un nouveau client</a>
      <table>
        <thead>
          <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Telephone</th>
              <th>Email</th>
          </tr>
        </thead>

        <tbody>
          <?php echo out1(); ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
