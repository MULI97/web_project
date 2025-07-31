<div class="topnav">
    <!-- Top navigation section -->
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="officials.php">Officials</a>
    <a href="petitions.php">Petitions</a>
    <a href="feedback.php">Feedback</a>
    <a href="php_basics.php">PHP Basics</a>
    <a href="processes.php">Processes</a>

    <div class="topnav-right">
        <a href="login.php">Sign In</a>
        <a href="register.php">Sign Up</a>
    </div>
</div>

<div class="header">
    <h1>
        <?php 
            $title = explode('.', basename($_SERVER['PHP_SELF']));
            echo ucwords(str_replace('_', ' ', reset($title)));
        ?>
    </h1>
</div>
