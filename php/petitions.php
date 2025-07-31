<?php
    require 'config/dbConnect.php';
    require 'includes/header.php'; // Contains <head> and opening <html><body>
    require 'includes/nav.php';    // Top navigation bar
?>

<div class="header">
    <h1>Citizen Petitions</h1>
    <p>Join your voice with others for impactful change.</p>
</div>

<div class="row">
    <div class="content">
        <h2>Active Petitions</h2>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Signatures</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Improve Public Health Clinics</td>
                    <td>Push for better funding and staffing in local clinics.</td>
                    <td>1,024</td>
                    <td><a href="petition-details.php?id=1">View</a></td>
                </tr>
                <tr>
                    <td>Transparency in Road Projects</td>
                    <td>Demand publication of project budgets and timelines.</td>
                    <td>786</td>
                    <td><a href="petition-details.php?id=2">View</a></td>
                </tr>
                <tr>
                    <td>Reduce University Tuition Fees</td>
                    <td>Call for tuition reviews and more scholarships.</td>
                    <td>2,340</td>
                    <td><a href="petition-details.php?id=3">View</a></td>
                </tr>
            </tbody>
        </table>

        <p style="margin-top: 20px;">
            Want to start your own petition? <a href="submit-petition.php">Submit here</a>.
        </p>
    </div>

    <div class="sidebar">
        <h2>Why Petitions Matter</h2>
        <p>Petitions unite citizens around causes and pressure leaders to act. When many voices speak together, change follows.</p>
        <img src="images/petition.jpg" alt="Petition Banner" class="full-width-img">
    </div>
</div>

<?php
    require 'includes/footer.php'; // Footer and closing </body></html>
?>
