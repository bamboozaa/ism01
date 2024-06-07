<?php
$servername = "10.7.46.40"; //host
$username = "komsan"; //username
$password = "OCSsvdki8hk"; //password
$dbname = "db_admission_ism"; //database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
