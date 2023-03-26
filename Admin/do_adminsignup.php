<?php

require_once("Database.php");

$db = new Database();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];                                                                                                                                                                         

$emailNotExist = $db->CheckEmail($email); 

if ($emailNotExist === true){
    $signUp = $db->SignUp($fname, $lname, $email, $password);
    if($signUp === true){
        setcookie("email", $email);
        setcookie("password", $password);
        setcookie("logedin", true);
        header('Location:adminpanel.php?rid=1');
    }
    else
        header('Location:adminsignup.php?rid=2');
}
else{
    header('Location:adminsignup.php?rid=3');
}


?>