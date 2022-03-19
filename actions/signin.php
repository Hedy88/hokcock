<?php
require_once '../important/config.php';
include '../important/auth.php';

if (isset($_POST['username']) && $_POST['password']) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header('Location: ../login.php?error=Username required');
    } else if(empty($password)) {
        header('Location: ../login.php?error=Pass required');
    } else {
        $sql = "SELECT * FROM users2 WHERE username='$username' AND password='$password'";

        $result = mysqli_query($db_connection, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
              $_SESSION['username'] = $row['username'];
              $_SESSION['id'] = $row['id'];  
              
              if (isset($_SESSION['username'])) {
                header("Location: ../index.php");
                close();
              }
            } 
        } else {
            header('Location: ../login.php?error=Incorrect username or password');
        }
    }
} else {
    header('Location: ../login.php?error=Please put your username and password');
    exit();
}


