<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>
<div class="row">
    <div class="content">
        <h2>Join The_ePatriot</h2>
        <p>Please fill in the form below to create your account. As a registered user, you'll be able to submit petitions, provide feedback, and engage with your local leaders. Citizens, officials, and moderators are all welcome.</p>

        <form action="proc/processes.php" method="post">
            <input type="text" name="fullname" placeholder="Enter your full name" required autofocus/><br>
            <input type="email" name="email" placeholder="Enter your email address" required /><br>
            <input type="tel" name="phone" placeholder="Enter your phone number" maxlength="13" required /><br>

            <select name="genderId" required>
                <option value="">Select your gender</option>
                <?php
                $spot_gender = "SELECT * FROM gender";
                $result = $conn->query($spot_gender);
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['genderId'] . "'>" . $row['gender'] . "</option>";
                }
                ?>
            </select><br>

            <select name="roleId" required>
                <option value="">Select your role</option>
                <?php
                $spot_role = "SELECT * FROM roles";
                $result = $conn->query($spot_role);
                while ($row = $result->fetch_assoc()) {
                    if ($row['role'] === 'Admin') continue; // Prevent users from self-assigning Admin
                    echo "<option value='" . $row['roleId'] . "'>" . $row['role'] . "</option>";
                }
                ?>
            </select><br>

            <input type="text" name="username" placeholder="Create a username" required /><br>
            <input type="password" name="password" placeholder="Create a password" required /><br>
            <input type="password" name="confirm_password" placeholder="Confirm your password" required /><br>
            <br>
            <input type="submit" name="signup" value="Sign Up" />
            <p><a href="signin.php">Already have an account? Sign In</a></p>
        </form>

        <h2>Why Sign Up?</h2>
        <p>As a member of The_ePatriot, you’ll gain access to digital tools for civic participation. Whether you're submitting a petition, rating an elected official, or simply staying informed, your voice matters.</p>
        <p>Registered users can:</p>
        <ul>
            <li>Submit and track petitions in real-time</li>
            <li>Give feedback directly to public officials</li>
            <li>View official performance reports by county</li>
        </ul>

        <h2>Our Mission</h2>
        <p>The_ePatriot is committed to promoting transparency, accountability, and community empowerment in governance. By enabling citizens and leaders to engage constructively, we foster a culture of informed dialogue and civic responsibility.</p>
    </div>

    <div class="sidebar">
        <h2>Need Help?</h2>
        <p>Having trouble signing up? Make sure your email and phone number are correct and your passwords match. Still stuck? <a href="contact.php">Contact support</a>.</p>

        <h2>About The_ePatriot</h2>
        <p>We are a civic technology initiative working to improve political transparency in Kenya. Our team builds tools that help communities raise concerns, track promises, and monitor leadership performance in real time.</p>
    </div>
</div>

<?php
    require 'includes/footer.php';
?>
