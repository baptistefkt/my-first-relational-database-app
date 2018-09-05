<?php
session_start();
if(empty($_SESSION['userType'])){
    header('location:loginController.php');
};
require '../Model/societeModel.php';
require '../Vue/societeVue.php';

?>