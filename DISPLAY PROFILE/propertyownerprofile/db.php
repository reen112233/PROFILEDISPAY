<?php
$servername = "localhost:3310";
$username = "root";
$password = "";
$dbname = "boardlinker";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Replace with the correct user ID or session ID
$sql = "SELECT * FROM users WHERE id = 2";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>
