<?php 
session_start();
if(empty($_SESSION['userType'])){
    header('location:loginController.php');
};
require '../Model/updateSocieteModel.php';
require '../Vue/updateSocieteVue.php';
?>