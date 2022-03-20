<?php require_once './important/config.php';?>
<?php include './important/auth.php';?>
<?php session_start(); 
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

$sql3 = "SELECT * FROM users2 WHERE isBanned=1";
$result = mysqli_query($db_connection, $sql3);

if (mysqli_num_rows($result) === 1) { 
    $row = mysqli_fetch_assoc($result);
    if ($row['isBanned'] === '1') {
        Header("Location: banned.php");
    }
}

if(!isset($_SESSION["username"])) {
    header("Location: ../login.php");
}

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
       <?php require_once 'header.php';?>
       <h2>Upload A Video</h2>
       <form method="post" action="./workers/upload_worker/init.php" enctype="multipart/form-data">
           <h3>Title</h3>
           <input type="text" name="title" placeholder="me at the zoo">
           <h3>Description</h3>
           <textarea name="description" placeholder="Hi guys, It's christmas less then a week! Woohoo, I am so exited for this news"></textarea><br><br>
           <input type="file" name="fileToUpload" id="filetoupload">
           <button type="submit" name="submit">Upload</button>
       </form>
       <hr>
       <?php require_once 'footer.php';?>
    </body>
</html>
