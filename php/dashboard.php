<?php
    require 'config/dbConnect.php';
    require 'includes/header.php'; // Contains <head> and opening <html><body>
    require 'includes/nav.php';    // Top navigation bar
?>

<div class="header">
    <h1>Welcome, Citizen!</h1>
    <p>Your participation makes democracy stronger.</p>
</div>

<div class="row">
    <div class="content">
        <h2>Quick Stats</h2>
        <div class="dashboard-grid">
            <div class="card">
                <h3>Signed Petitions</h3>
                <p>5</p>
            </div>
            <div class="card">
                <h3>Feedback Submitted</h3>
                <p>3</p>
            </div>
            <div class="card">
                <h3>Watched Officials</h3>
                <p>2</p>
            </div>
        </div>

        <h2 style="margin-top: 40px;">Quick Actions</h2>
        <ul class="dashboard-links">
            <li><a href="officials.php">🔍 Browse Public Officials</a></li>
            <li><a href="petitions.php">✍️ View and Sign Petitions</a></li>
            <li><a href="feedback.php">📢 Submit Feedback</a></li>
            <li><a href="about.php">ℹ️ About The_ePatriot</a></li>
        </ul>
    </div>

    <div class="sidebar">
        <h2>Did You Know?</h2>
        <p>Each petition needs at least 1,000 signatures to be submitted to Parliament. Help spread the word!</p>
        <img src="images/dashboard.jpg" alt="Dashboard Info" class="full-width-img">
    </div>
</div>

<?php
    require 'includes/footer.php'; // Footer and closing </body></html>
?>
