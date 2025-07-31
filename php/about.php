<?php
    require 'config/dbConnect.php';
    require 'includes/header.php'; // Includes <head> and opening <html><body>
    require 'includes/nav.php';    // Includes top navigation bar
?>

<div class="header">
    <h1>About The_ePatriot</h1>
    <p>Empowering citizens. Holding leaders accountable.</p>
</div>

<div class="row">
    <div class="content">
        <h2>What is The_ePatriot?</h2>
        <p>
            <strong>The_ePatriot</strong> is a civic engagement platform built to strengthen democracy in Kenya by enabling citizens to track public officials’ performance, submit feedback, and engage in petitions.
        </p>

        <h3>Core Features</h3>
        <ul>
            <li>Track political promises and delivery</li>
            <li>Submit feedback or complaints to elected officials</li>
            <li>View and support active citizen petitions</li>
            <li>Access official profiles, stats, and progress reports</li>
        </ul>

        <h3>Our Mission</h3>
        <p>To build a more transparent and responsive democratic system by giving every citizen a voice and every leader a scorecard.</p>

        <h3>Vision</h3>
        <p>A Kenya where technology bridges the gap between leaders and the people they serve.</p>

        <h3>Values</h3>
        <ol type="a">
            <li>Transparency</li>
            <li>Accountability</li>
            <li>Civic Empowerment</li>
            <li>Justice</li>
            <li>Participation</li>
        </ol>
    </div>

    <div class="sidebar">
        <h2>Quick Info</h2>
        <p><strong>Launched:</strong> 2025</p>
        <p><strong>Target:</strong> Kenyan citizens & youth</p>
        <p><strong>Tech Stack:</strong> HTML, CSS, JS, PHP, Firebase</p>
        <img src="images/civic.jpg" alt="Civic Engagement" class="full-width-img" height="300px">
    </div>
</div>

<?php
    require 'includes/footer.php'; // Includes footer and closing </body></html>
?>
