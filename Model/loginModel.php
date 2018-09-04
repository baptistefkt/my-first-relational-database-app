<?php 
require 'sql.php';
require 'sanitizer.php';

//DRY!!
$loginRaw=$bdd->prepare('SELECT username, password FROM utilisateurs');
$loginRaw->execute();
$loginData=$loginRaw->fetchAll(PDO::FETCH_NUM);

// $userName=sanitize($_POST['username'],'string');
// $userPWD=sanitize($_POST['password'],'string');
$userName=$_POST['username'];
$userPWD=$_POST['password'];
$userInput=array (0=>$userName, 1=>$userPWD);


$loginTypeRaw=$bdd->prepare('SELECT * FROM utilisateurs where username=:username');
$loginTypeRaw->bindParam(':username',$userName);
$loginTypeRaw->execute();
$loginType=$loginTypeRaw->fetchAll(PDO::FETCH_ASSOC);
var_dump($loginType);

function checkLogin($input,$DBData,$controlType){
    if(in_array($input,$DBData)==true){
        session_start();
        $_SESSION['login']=$input[0];
        $_SESSION['pwd']=$input[1];
        $_SESSION['userType']= $controlType[0]['usertype'];
        header('location:../Controller/accueilController.php');
        return $_SESSION;
        }
    else{
        echo "error";
        var_dump($_SESSION);

    }
}

if(isset($userName) && isset($userPWD)){
    checkLogin($userInput,$loginData,$loginType);
}
?>