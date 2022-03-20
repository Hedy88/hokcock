<?php 

if (isset($username)) {
$sql = "SELECT * FROM users2 WHERE username = '$username'";
$result = mysqli_query($db_connection, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result); 
    $isAdmin = $row['isAdmin'];

    if ($isAdmin === "0") {
        header('Location: ../index.php');
    }
}    
}

?>