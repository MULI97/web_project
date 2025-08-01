<?php
    require 'config/dbConnect.php';
    require 'includes/header.php'; // Contains <head> and opening <html><body>
    require 'includes/nav.php';    // Top navigation bar
?>

<div class="header">
    <h1>Welcome to The_ePatriot</h1>
    <p>Empowering Citizens. Holding Leaders Accountable.</p>
</div>

<div class="row">
    <div class="content">
        <h2>About The_ePatriot</h2>

        <div>
            <img src="images/civic_engagement.jpg" alt="Civic Engagement" class="full-width-img">
        </div> 

        <p><strong>The_ePatriot</strong> is a digital civic engagement platform designed to empower citizens, promote transparency, and foster accountability in public service. It enables users to:</p>
        <ul type="square">
            <li>Track elected officials and their promises</li>
            <li>Submit feedback and complaints directly</li>
            <li>Start or support petitions on public matters</li>
            <li>Access reports on governance performance</li>
        </ul>

        <h3>Mission</h3>
        <p>To bridge the gap between Kenyan citizens and their leaders by providing a transparent, tech-driven platform for civic participation.</p>

        <h3>Vision</h3>
        <p>A Kenya where every citizen has the tools to hold leaders accountable and actively shape democratic outcomes.</p>

        <h3>Core Values</h3>
        <ol type="a" start="1">
            <li>Transparency</li>
            <li>Accountability</li>
            <li>Empowerment</li>
            <li>Inclusion</li>
            <li>Participation</li>
        </ol>

        <p>HTML entities: &copy; 2025 The_ePatriot &nbsp; | &lt;Empowering Citizens&gt; &amp; Leaders</p>
    </div>

    <div class="sidebar">
        <h2>Quick Facts</h2>
        <p><strong>Launched:</strong> 2025</p>
        <p><strong>Focus:</strong> Political accountability, civic tech, citizen feedback</p>
        <p><strong>Target Users:</strong> Kenyan citizens (esp. youth), public officials, civil society</p>
        <p><strong>Technologies:</strong> HTML, CSS, JavaScript, PHP, Firebase</p>
    </div>
</div>

<?php
    require 'includes/footer.php'; // Footer and closing </body></html>
?>
