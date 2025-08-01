<?php
session_start();

// Example user data after login (normally comes from database)
$_SESSION['user_id'] = 'U001';
$_SESSION['user_name'] = 'Patience Muli';
$_SESSION['user_email'] = 'patience@example.com';
$_SESSION['user_role'] = 'citizen'; // roles: citizen, official, admin
$_SESSION['county'] = 'Nairobi';

// Print a personalized message
echo "Welcome, {$_SESSION['user_name']}!<br>";
echo "Role: {$_SESSION['user_role']}<br>";
echo "County: {$_SESSION['county']}<br>";
?>
