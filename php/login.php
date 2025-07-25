<?php
require "dbConnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - The_ePatriot</title>
  <link rel="stylesheet" href="css/main.css" />
</head>
<body>

  <div class="topnav">
    <a href="index.html">Home</a>
    <a href="about.html">About</a>
    <a href="officials.html">Officials</a>
    <a href="petitions.html">Petitions</a>
    <a href="feedback.html">Feedback</a>
    <div class="topnav-right">
      <a href="login.html">Login</a>
      <a href="register.html">Register</a>
    </div>
  </div>

  <div class="header">
    <h1>Login to Your Account</h1>
    <p>Access your dashboard and participate in civic actions.</p>
  </div>

  <div class="row">
    <div class="content">
      <form action="login.php" method="POST">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />

        <button type="submit">Login</button>
      </form>

      <p style="margin-top: 15px;">
        Don't have an account? <a href="register.html">Register here</a>.
      </p>
    </div>

    <div class="sidebar">
      <h2>Why Login?</h2>
      <p>Logging in lets you track your activity, sign petitions, submit feedback, and follow your favorite officials.</p>
      <img src="images/login.jpg" alt="Login Illustration" class="full-width-img" />
    </div>
  </div>

  <div class="footer">
    <p>© 2025 The_ePatriot. All rights reserved.</p>
    <p>Email us at <a href="mailto:support@theepatriot.org">support@theepatriot.org</a></p>
  </div>

</body>
</html>
