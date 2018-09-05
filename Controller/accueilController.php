<?php
session_start();
if(empty($_SESSION['userType'])){
    header('location:loginController.php');
};
 require '../Model/accueilModel.php';
 require '../Vue/accueilVue.php';
 ?>
