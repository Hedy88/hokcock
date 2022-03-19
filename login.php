<?php require_once './important/config.php';?>
<?php include './important/auth.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HokCock</title>
    </head>
    <body>
       <?php require_once 'header.php';?>
       <?php if (isset($_GET['error'])) { ?> 
            <p style="color:red">Error: <?php echo $_GET['error']; ?></p> 
       <?php } ?>
       <h2>Login</h2>

       <form action="actions/signin.php" method="post">
        <label>Username</label>
        <input type="text" name="username" placeholder="rgb">
        <br><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="johncar96">
        <br><br>
        <button type="submit">Login</button>
       </form>
       <hr>
       <?php require_once 'footer.php';?>
    </body>
</html>