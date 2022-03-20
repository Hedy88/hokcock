<div class="header">
    <h1>hokcock</h1>
    <p><i><?php echo $sitetagline;?></i> 
    <?php if (isset($username)) {
         echo ' | Welcome, ' . $username; 
         echo ' | <a href="upload.php">Upload</a> | <a href="./actions/logout.php">Logout</a>';
        } else {
            echo ' | <a href="login.php">Login</a> / <a href="signup.php">Sign Up</a>'; 
        }
    ?>
    </p>
    <hr>
</div>