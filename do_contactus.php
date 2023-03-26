<?php
require_once("Admin/Database.php");

$db = new Database();

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$feedback = $db->Feedback($name, $email, $subject, $message); 

if ($feedback== true)
    header('Location:index.php?rid=1#contact');
else
    header('Location:index.php?rid=2#contact');

?>