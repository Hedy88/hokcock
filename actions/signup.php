<?php
require_once '../important/config.php';
include '../important/auth.php';

if (isset($_POST['username']) && $_POST['password']) {
    $post_username = trim(htmlspecialchars($_POST["username"]));
    $post_password = trim(htmlspecialchars($_POST["password"]));
    $post_email = trim(htmlspecialchars($_POST["email"]));

    $password = password_hash($post_password, PASSWORD_BCRYPT);

    $sql = "SELECT * FROM users2 WHERE username='$post_username' ";

    $result = mysqli_query($db_connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: ../signup.php?error=This username is already taken");
        exit();
    } else {
        $sql2 = "INSERT INTO users2 (username, password, email) VALUES('$post_username', '$password', '$post_email')";
        $result2 = mysqli_query($db_connection, $sql2);
    } if ($result2) {
        header("Location: ../signup.php?success=Your Account Has Successfully Created");
        exit();
    }
} else {
    header("Location: ../login.php?error=Please enter a username and password");
    exit();
}
