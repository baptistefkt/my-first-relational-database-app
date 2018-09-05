<?php
session_start();
if(empty($_SESSION['userType'])){
    header('location:loginController.php');
};
require '../Model/updateContactModel.php';
require '../Vue/updateContactVue.php';

?>