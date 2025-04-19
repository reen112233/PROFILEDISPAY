<?php
session_start(); 

// Database connection
$servername = "localhost:3310"; 
$username = "root"; 
$password = ""; 
$dbname = "boardlinker"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch user data
$sql = "SELECT * FROM users WHERE id = 2"; // Change the ID as needed
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $school = $_POST['school'];
    $school_address = $_POST['school_address'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $status = $_POST['status'];

    // Handle image upload
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
        $profile_image = file_get_contents($_FILES["profile_image"]["tmp_name"]);
    } else {
        $profile_image = $user['profile_image']; // Keep old image
    }

    // Prepare and execute update query
    $stmt = $conn->prepare("UPDATE users SET name=?, school=?, school_address=?, phone=?, address=?, email=?, facebook=?, instagram=?, status=?, profile_image=? WHERE id=2");
    $stmt->bind_param("sssssssssb", $name, $school, $school_address, $phone, $address, $email, $facebook, $instagram, $status, $null);

    // Need to bind the blob data separately
    $stmt->send_long_data(9, $profile_image);

    if ($stmt->execute()) {
        echo "<script>
            alert('Profile Updated Successfully!');
            window.location.href = 'profile.php';
        </script>";
    } else {
        echo "<script>alert('Error updating profile: " . $stmt->error . "');</script>";
    }

    $stmt->close();
}
