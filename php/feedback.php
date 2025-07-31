<?php
    require 'config/dbConnect.php';
    require 'includes/header.php'; // Contains <head> and opening <html><body>
    require 'includes/nav.php';    // Top navigation bar
?>

<div class="header">
    <h1>Submit Feedback</h1>
    <p>Let your voice be heard. Help improve governance.</p>
</div>

<div class="row">
    <div class="content">
        <?php
            if (isset($_GET['status']) && $_GET['status'] == 'success') {
                echo "<p style='color: green;'>Feedback submitted successfully!</p>";
            } elseif (isset($_GET['status']) && $_GET['status'] == 'error') {
                echo "<p style='color: red;'>There was a problem submitting your feedback.</p>";
            }
        ?>

        <h2>Your Feedback</h2>
        <form action="submit_feedback.php" method="POST">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required />

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required />

            <label for="official">Official (Name or Position):</label>
            <input type="text" id="official" name="official" required />

            <label for="type">Type of Feedback:</
