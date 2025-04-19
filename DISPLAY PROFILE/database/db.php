<?php
$servername = "localhost:3310";
$username = "root";
$password = "";
$dbname = "boardlinker";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

