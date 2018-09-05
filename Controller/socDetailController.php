<?php
session_start();
if(empty($_SESSION['userType'])){
    header('location:loginController.php');
};
require '../Model/socDetailModel.php';
require '../Vue/socDetailVue.php';

?>