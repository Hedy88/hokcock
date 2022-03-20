<?php
session_start();
require_once '../important/config.php';
include '../important/auth.php';

$post_username = trim(htmlspecialchars($_POST["username"]));
$post_password = trim(htmlspecialchars($_POST["password"]));

$sql = "SELECT * FROM users2 WHERE username='".mysqli_real_escape_string($db_connection, $post_username)."'";
$result = mysqli_query($db_connection, $sql);
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result); 
    if (password_verify($post_password, $row['password'])) {
        $isLoggedin = true;
        $_SESSION['username'] = $row['username'];
        header('Location: ../index.php');
    } else {
        header('Location: ../login.php?error=Invalid password');
    }
} 