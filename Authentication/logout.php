<?php
session_start();
unset($_SESSION["Name"]);
unset($_SESSION["Password"]);
session_destroy();  
header("Location:login_url.php");
?>