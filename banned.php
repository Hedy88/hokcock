<?php require_once './important/config.php';?>
<?php include './important/auth.php';?>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $sitename , " - " , $siteslogan; ?></title>
        <meta name="description" content="<?php echo $sitedescription; ?>">
	    <meta name="keywords" content="video,sharing,camera phone,video phone">
    </head>
    <body>
       <?php require_once 'header.php';?>
       <h2 style="color:red">You Have Been Banned!</h2>
       <p>congratulations! you have been banned. please contact the <a href="discordlink.php">hokcock discord</a> to get unbanned.</p>
       <button action="./actions/logout.php">logout</button>
       <hr>
       <?php require_once 'footer.php';?>
    </body>
</html>