<?php
session_start();
error_reporting(0);
unset($_SESSION["username"]);
unset($_SESSION["password"]);
header("Location:admin_login.php")
?>