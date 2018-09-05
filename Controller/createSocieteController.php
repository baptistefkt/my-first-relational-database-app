<?php 
session_start();
if(empty($_SESSION['userType'])){
    header('location:loginController.php');
};
require '../Model/createSocieteModel.php';
require '../Vue/createSocieteVue.php';
?>