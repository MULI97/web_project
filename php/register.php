<?php
    require 'config/dbConnect.php';
    require 'includes/header.php'; // Contains <head> and opening <html><body>
    require 'includes/nav.php';    // Top navigation bar
?>

<div class="header">
    <h1>Create Your Account</h1>
    <p>Join The_ePatriot and help shape Kenya’s future.</p>
</div>

<div class="row">
    <div class="content">
        <form action="registerAction.php" method="POST">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required />

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required />

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required />

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required />

            <button type="submit">Register</button>
        </form>

        <p style="margin-top: 15px;">
            Already have an account? <a href="login.php">Login here</a>.
        </p>
    </div>

    <div class="sidebar">
        <h2>Why Register?</h2>
        <p>Registration allows you to track petitions, follow officials, submit feedback, and participate more meaningfully in governance.</p>
        <img src="images/register.jpg" alt="Register Illustration" class="full-width-img" />
    </div>
</div>

<?php
    require 'includes/footer.php'; // Footer and closing </body></html>
?>
<script src="js/formValidation.js"></script>
