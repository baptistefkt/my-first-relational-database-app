<?php
$user=$_SESSION['login'];
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="../assets/script.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/style.css"/>
  </head>
  <body>
    <!-- Navbar -->
    <nav>
       <div class="nav-wrapper cyan darken-2">
         <a href="../Controller/accueilController.php" class="brand-logo "><i class="fas fa-coffee"></i>COGIP</a>
         <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><a href="../Controller/accueilController.php">Accueil</a></li>
<<<<<<< HEAD
           <li><a href="../Controller/facturesController.php" >Factures</a></li>
=======
           <!-- Dropdown Trigger -->
           <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Factures<i class="material-icons right">arrow_drop_down</i></a></li>
>>>>>>> 5f2c1520e9e21044e8aeb41ad241dda9df724652
           <li><a href="../Controller/societeController.php?type=Client">Clients</a></li>
           <li><a href="../Controller/societeController.php?type=Fournisseur">Fournisseurs</a></li>
           <li><a href="../Controller/contactController.php">Contacts</a></li>
           <li>Bonjour <?=$user?></li>
           <li><a href="../Controller/logoutController.php">Log out</a></li>
         </ul>
       </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="../Controller/accueilController.php">Accueil</a></li>
<<<<<<< HEAD
      <li><a href="../Controller/facturesController.php">Factures</a></li>
      <li><a href="../Controller/societeController.php?type=Client">Clients</a></li>
      <li><a href="../Controller/societeController.php?type=Fournisseur">Fournisseurs</a></li>
      <li><a href="../Vue/contactVue.php">Contacts</a></li>
      <li><a href="../Controller/logoutController.php">Log out</a></li>
=======
      <li><a href="#">Factures</a></li>
      <li><a href="../Controller/societeController.php?type=Client">Clients</a></li>
      <li><a href="../Controller/societeController.php?type=Fournisseur">Fournisseurs</a></li>
      <li><a href="../Controller/contactController.php">Contacts</a></li>
      <li><a href="#">Log in</a></li>
>>>>>>> 5f2c1520e9e21044e8aeb41ad241dda9df724652
    </ul>
    <!-- Fin navbar -->
