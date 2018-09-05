<?php
session_start();
if(empty($_SESSION['userType'])){
    header('location:loginController.php');
};
require '../Model/logoutModel.php';
require '../Vue/loginVue.php';


?>