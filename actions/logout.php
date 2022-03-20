<?php 
session_start();
$username = $_SESSION['username'];

$_SESSION = array();

session_destroy();

header("Location: ../index.php");
exit();
?>