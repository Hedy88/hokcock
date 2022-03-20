<?php 
session_start();
include '../important/config.php';
include '../important/auth.php';

$post_username = $_POST['unbanuser'];
$sql = "UPDATE users2 SET isBanned=0 WHERE username = '$post_username'";
$result = mysqli_query($db_connection, $sql);

if(!$result) {
    header("Location: ../admin/index.php?error=User '" . $post_username . "' has not been unbanned");
    die();
} else {
    header("Location: ../admin/index.php?success=User '" . $post_username . "' has been unbanned");
}

?>