<?php
session_start();
if(empty($_SESSION['userType'])){
    header('location:loginController.php');
};
require '../Model/createContactModel.php';
require '../Vue/createContactVue.php';


?>