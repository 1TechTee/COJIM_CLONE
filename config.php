<?php
// config.php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if running on localhost
$local = ($_SERVER['SERVER_NAME'] == 'localhost');

if ($local) {
    // Localhost (XAMPP) settings
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'cojim_db'; // use your local DB name here
} else {
    // Live server (InfinityFree) settings
    $host = 'sql101.infinityfree.com';
    $user = 'if0_39216875';
    $pass = '09060946854Tee'; // Your actual MySQL password
    $dbname = 'if0_39216875_cojim';
}

// Create DB connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ DB connection failed: " . $conn->connect_error);
}
?>
