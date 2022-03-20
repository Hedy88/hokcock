<?php 
session_start();
include '../important/config.php';
include '../important/auth.php';

$post_username = $_POST['nonadminuser'];
$sql = "UPDATE users2 SET isAdmin=0 WHERE username = '$post_username'";
$result = mysqli_query($db_connection, $sql);

if(!$result) {
    header("Location: ../admin/index.php?error=User '" . $post_username . "' still has admin perms");
    die();
} else {
    header("Location: ../admin/index.php?success=User '" . $post_username . "' has got there admin perms removed");
}

?>