<?php

require_once("Database.php");

$db = new Database();

$email = $_POST['email'];
$password = $_POST['password'];                                                                                                                                                                         

$login = $db->Login($email, $password);

if ($login == true){
    setcookie("email", $email);
    setcookie("password", $password);
    setcookie("loggedin", true);
    header('Location:adminpanel.php?rid=10');
}
else
    header('Location:adminlogin.php?rid=20');

?>