<?php
session_start(); 

// Database connection
$servername = "localhost:3310"; 
$username = "root"; 
$password = ""; 
$dbname = "boardlinker"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch user data
$sql = "SELECT * FROM users WHERE id = 2"; // Change as needed
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>