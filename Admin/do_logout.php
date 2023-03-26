<?php
// echo'<br>email:'. $_COOKIE['email'];
// echo'<br><br>password:'. $_COOKIE['password'];

setcookie("email", "", time() - 3600);
setcookie("password", "", time() - 3600);
setcookie("loggedin", "", time() - 3600);
header('location: adminlogin.php?rid=123');

?>