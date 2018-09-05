<?php
$time = $_SERVER['REQUEST_TIME'];

$timeout_duration = 1800;


if (isset($_SESSION['LAST_ACTIVITY']) && 
   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    session_unset();
    session_destroy();
    header('location:loginController.php');
}

$_SESSION['LAST_ACTIVITY'] = $time;

?>