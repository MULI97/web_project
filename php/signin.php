<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>

<div class="row">
    <div class="content">
        <h2>Terms and Conditions – The_ePatriot</h2>

        <p>By using The_ePatriot platform, you agree to engage respectfully and truthfully in civic participation. All content submitted, including petitions, feedback, and public statements, must adhere to the platform's standards for accuracy, civility, and legality. Misuse or false reporting may result in suspension of access.</p>

        <p>Users must register using accurate identification details. Data collected is used solely for enhancing civic engagement, ensuring transparency, and tracking accountability.</p>

        <p>Below are the key forms you are expected to interact with as a user of The_ePatriot:</p>
        <ul>
            <li><strong>Submit Petition</strong> – To raise issues or demands related to your county or officials</li>
            <li><strong>Submit Feedback</strong> – To provide constructive input on services or performance</li>
            <li><strong>Sign Up / Sign In</strong> – To access your citizen or official dashboard</li>
        </ul>

        <h2>About The_ePatriot Team & Mission</h2>
        <p>We are a team of dedicated civic innovators committed to improving governance through public participation. Our platform bridges the gap between citizens and public officials, enabling transparent communication, petition tracking, and community feedback.</p>

        <p>Through digital tools, we empower citizens to raise their voices and hold leaders accountable. Join us in creating a more engaged, responsive, and just society.</p>
    </div>

    <div class="sidebar">
        <h2>Sign In to The_ePatriot</h2>

        <form action="proc/processes.php" method="post">
            <input type="email" name="username" placeholder="Enter your email" required /><br>
            <input type="password" name="passphrase" placeholder="Enter your passphrase" required /><br><br>
            <input type="submit" name="signin" value="Sign In" />
            <br><br>
            <a href="signup.php">Don't have an account? Sign Up</a>
        </form>

        <h2>Why Join The_ePatriot?</h2>
        <p>As a user, you'll be able to:</p>
        <ul>
            <li>Submit and track public petitions</li>
            <li>Rate and review public officials</li>
            <li>Access dashboards tailored to your role (citizen, official, or admin)</li>
        </ul>
        <p>We aim to make public service delivery more transparent and accountable — together with you.</p>
    </div>
</div>

<?php
    require 'includes/footer.php';
?>
