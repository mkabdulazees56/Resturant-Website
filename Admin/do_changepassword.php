<?php

require_once("Database.php");

$db = new Database();

$email = $_POST['email'];
$password = $_POST['password'];                                                                                                                                                                         
$newPassword = $_POST['newPassword'];                                                                                                                                                                         

$changePassword = $db->ChangePassword($email, $password, $newPassword);

if ($changePassword == true)
    header('Location:changepassword.php?rid=1');
else
    header('Location:changepassword.php?rid=2');
?>