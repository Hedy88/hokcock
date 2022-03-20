<?php require_once '../important/config.php';?>
<?php include '../important/auth.php';?>
<?php session_start(); 
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

$sql3 = "SELECT * FROM users2 WHERE isBanned=1";
$result = mysqli_query($db_connection, $sql3);

if (mysqli_num_rows($result) === 1) { 
    $row = mysqli_fetch_assoc($result);
    if ($row['isBanned'] === 1) {
        Header("Location: banned.php");
    }
}

if(!isset($_SESSION["username"])) {
    header("Location: ../login.php");
}

include '../important/admincheck.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $sitename , " - " , $siteslogan; ?></title>
        <meta name="description" content="<?php echo $sitedescription; ?>">
	    <meta name="keywords" content="video,sharing,camera phone,video phone">
    </head>
    <body>
    <?php if (isset($_GET['error'])) { ?> 
        <p style="color:red">Error: <?php echo $_GET['error']; ?></p> 
    <?php } ?>
    <?php if (isset($_GET['success'])) { ?> 
        <p style="color:green">Success: <?php echo $_GET['success']; ?></p> 
    <?php } ?>
       <?php require_once '../header.php';?>
       <h2 style="color:orange;">HokCock Admin Panel - Stats</h2>
       <h3>Server Stats</h3>
       <?php echo '<p>PHP Version: ' . phpversion() . '</p>'; ?>
       <?php echo '<p>MySQL / MariaDB Version: ' . mysqli_get_server_info($db_connection) . '</p>'; ?>
       <?php echo '<p>Webserver Info: ' . $_SERVER['SERVER_SOFTWARE'] . '</p>'; ?>
       <?php echo '<p>Webserver Host: ' . php_uname() . '</p>'; ?>
       <h3>Site Stats</h3>
       <?php echo '<p>hokcock version: ' . $version . '</p>'; ?>
       <hr>
       <?php require_once '../footer.php';?>
    </body>
</html>
