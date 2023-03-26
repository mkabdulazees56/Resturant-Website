<?php

require_once("Admin/Database.php");

$db = new Database();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$no_people = $_POST['numPeople'];
$message = $_POST['message'];

$db->DeleteOldReservation();
$tableAvailable = $db->TableAvailable($date); 

if ($tableAvailable == true){
    $tableBooked = $db->BookTable($name,$email,$phone,$date,$no_people,$message);
    if($tableBooked == true)
        header('Location:index.php?rid=1#book-table');
    else
        header('Location:index.php?rid=2#book-table');
}
else
    header('Location:index.php?rid=3#book-table');
?>