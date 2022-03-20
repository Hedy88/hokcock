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
       <?php if (isset($_GET['success'])) { ?> 
            <p style="color:green">Success: <?php echo $_GET['success']; ?></p> 
       <?php } ?>
       <h2>Sign Up</h2>

       <form action="actions/signup.php" method="post">
        <label>Username</label>
        <input type="text" name="username" placeholder="rgb">
        <br><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="johncar96">
        <br><br>
        <label>Email</label>
        <input type="email" name="email" placeholder="balls@example.com">
        <br><br>
        <button type="submit">Sign up</button>
       </form>
       <p>Already a user? <a href="./login.php">Login</a></p>
       <hr>
       <?php require_once 'footer.php';?>
    </body>
</html>