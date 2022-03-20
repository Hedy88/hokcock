<?php 
session_start();
include '../important/config.php';
include '../important/auth.php';

$post_username = $_POST['adminuser'];
$sql = "UPDATE users2 SET isAdmin=1 WHERE username = '$post_username'";
$result = mysqli_query($db_connection, $sql);

if(!$result) {
    header("Location: ../admin/index.php?error=User '" . $post_username . "' has not been given admin");
    die();
} else {
    header("Location: ../admin/index.php?success=User '" . $post_username . "' has been given admin");
}

?>