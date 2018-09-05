<?php
session_start();

require '../Model/sessionTimer.php';
if(empty($_SESSION['userType'])){
    header('location:loginController.php');
};

 require '../Model/accueilModel.php';
 require '../Vue/accueilVue.php';
 ?>
