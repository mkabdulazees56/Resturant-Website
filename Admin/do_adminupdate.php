<?php

require_once("Database.php");

$db = new Database();

$fname = $_POST['fname'];
$lname = $_POST['lname'];                                                                                                                                                                         

$update = $db->UpdateAdmin($fname, $lname);

if ($update == true)
    header('Location:adminupdate.php?rid=1');
else
    header('Location:adminupdate.php?rid=2');
?>