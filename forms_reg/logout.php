<?php
session_start();
$data=$_SESSION['id'];
unset($_SESSION[$data]);
header("location:login.php");
?>