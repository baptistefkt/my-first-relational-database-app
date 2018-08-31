<?php ?>

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
       <div class="nav-wrapper indigo accent-1">
         <a href="index.html" class="brand-logo "><img class="responsive-img" id="logo" src=""/></a>COGIP</a>
         <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><a href="cogip.php">Accueil</a></li>
           <!-- Dropdown Trigger -->
           <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Factures<i class="material-icons right">arrow_drop_down</i></a></li>
           <li><a href="#">Sociétés</a></li>
           <li><a href="cogip.php">Personnes</a></li>
           <li><a href="login.php">Log in</a></li>
         </ul>
       </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="cogip.php">Accueil</a></li>
      <li><a href="#">Factures</a></li>
      <li><a href="#">Sociétés</a></li>
      <li><a href="cogip.php">Personnes</a></li>
      <li><a href="#">Log in</a></li>
    </ul>
    <!-- Fin navbar -->
