<?php
session_start();
if(empty($_SESSION['userType'])){
    header('location:loginController.php');
};
    require '../Model/facturesModel.php';
    require '../Vue/facturesVue.php';
 ?>
