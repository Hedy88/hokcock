<div class="header">
    <h1>hokcock</h1>
    <p><i>The most advanced video sharing website</i> 
    <?php if (isset($SESSION['username'])) {
         echo ' | Welcome' . $SESSION['username']; 
         echo ' | <a href="upload.php">Upload</a>';
        } else {
            echo ' | <a href="login.php">Login</a> / <a href="signup.php">Sign Up</a>'; 
        }
    ?>
    </p>
    <hr>
</div>