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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="../assets/script.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/style.css"/>
  </head>
  <body>
    <!-- Navbar -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!"> Historique des factures</a></li>
      <li><a href="#!">Créer une facture</a></li>
    </ul>
    <nav>
       <div class="nav-wrapper cyan darken-2">
         <a href="../Vue/accueilVue.php" class="brand-logo "><i class="fas fa-coffee"></i>COGIP</a>
         <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><a href="accueilController.php">Accueil</a></li>
           <!-- Dropdown Trigger -->
           <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Factures<i class="material-icons right">arrow_drop_down</i></a></li>
           <li><a href="#">Sociétés</a></li>
           <li><a href="../Vue/contactVue.php">Contacts</a></li>
           <li><a href="login.php">Log in</a></li>
         </ul>
       </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="accueilController.php">Accueil</a></li>
      <li><a href="#">Factures</a></li>
      <li><a href="#">Sociétés</a></li>
      <li><a href="../Vue/contactVue.php">Contacts</a></li>
      <li><a href="#">Log in</a></li>
    </ul>
    <!-- Fin navbar -->
