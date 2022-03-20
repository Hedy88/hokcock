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
       <h2 style="color:orange;">HokCock Admin Panel</h2>
       <p>:) lol</p>
       <h3>admin tools</h3>
       <form method="post" action="../actions/banuser.php">
       <input type="text" name="user" placeholder="JameOnCrack">
       <button type="submit" name="banuser">ban user</button><br>
       </form><br>
       <form method="post" action="../actions/unbanuser.php">
       <input type="text" name="unbanuser" placeholder="someone idk">
       <button type="submit" name="unbanuserbutton">unban user</button><br>
       </form>
       <h3>WARNING: THIS CAN CAUSE MAJOR DESTRUCION.</h3>
       <form method="post" action="../actions/giveadmin.php">
        <input type="text" name="adminuser" placeholder="idk what the fuck to put here">
        <button type="submit" name="giveadmin">give user admin</button>
       </form><br>
       <form method="post" action="../actions/removeadmin.php">
        <input type="text" name="nonadminuser" placeholder="lol">
        <button type="submit" name="removeadmin">remove admin perms from user</button>
       </form><br>
       <p><a href="stats.php">server stats</a></p>
       <hr>
       <?php require_once '../footer.php';?>
    </body>
</html>
