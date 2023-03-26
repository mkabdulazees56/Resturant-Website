<?php

require_once("Database.php");

$db = new Database();

$email = $_POST['email'];
$password = $_POST['password'];                                                                                                                                                                         

$OneAdminExist = $db->OnlyOneAdminExist();

if ($OneAdminExist === true) 
    header('Location:showadmin.php?rid=1');
else{
    $delete = $db->Delete($email, $password);
    if ($delete === true)
        header('Location:admindelete.php?rid=1');
    else
        header('Location:admindelete.php?rid=2');
}
?>