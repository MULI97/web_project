<?php
// dbConnect.php
$servername = "localhost";
$username = "root";
$password = "student";
$dbname = "web_project_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection unsuccessful: " . $conn->connect_error);
}else {
    echo "Connected successfully";
}
?>