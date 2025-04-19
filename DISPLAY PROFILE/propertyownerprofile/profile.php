<?php
session_start(); // Start the session
include "db.php"; // Ensure this file fetches the user data correctly
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="RenterProfile.css">
    <link rel="stylesheet" href="responsiveprofile.css">
    <link rel="stylesheet" href="fonts/remixicon.css">
</head>
<body>
    <span class="main_bg"></span>
    <div class="container">
        <header>
            <div class="brandLogo">
                <span style="color:white;">BoardLinker</span>
                <ul class="nav-container">
                    <li class="links"><a class="link" href="../view-profile/propertyowner-view.php">Home</a></li>
                    <li class="links"><a href="" class="link">Info</a></li>
                    <li class="links"><a class="link" href="">Log out</a></li>
                </ul>
            </div>
        </header>

        <section class="userProfile card">
            <div class="profile">
                <!-- Display the profile image from the session -->
                <figure>
                    <?php if (!empty($user['profile_image'])): ?>
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($user['profile_image']); ?>" alt="profile">
                    <?php else: ?>
                        <img src="default-profile.png" alt="profile"> <!-- fallback image -->
                    <?php endif; ?>
                </figure>

            </div>
        </section>

        <section class="work_skills card">
            <div class="work">
                <h1 class="heading">Owner</h1>
            </div>

                        
        </section>

        <section class="userDetails card">
            <div class="userName">
                <h1 class="name"><?php echo $user['name']; ?></h1>
                <div class="map">
                    <i class="ri-map-pin-fill ri"></i>
                </div>
                <p style="color:hsl(266, 39%, 40%)">Owner</p>
            </div>

            <div class="rank">
                <h1 class="heading">Status</h1>
                <span><?php echo $user['status']; ?></span>
                <div class="rating">
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate"></i>
                    <i class="ri-star-fill rate underrate"></i>
                </div>
            </div>

            <div class="btns">
                <ul>
                    <li class="sendMsg">
                        <i class="ri-chat-4-fill ri"></i>
                        <a href="editprofile.php">Edit Profile</a>
                    </li>

                    <li class="sendMsg active" style=" background:  hsl(266, 39%, 40%);">
                        <i class="ri-check-fill ri"></i>
                        <a style="color: white;" href="#">Contacts</a>
                    </li>
                </ul>
            </div>
        </section>

        <section class ="timeline_about card">
            <div class="tabs">
                <ul>
                    <li class="about active">
                        <i class="ri-user-3-fill ri"></i>
                        <span>Contact Information</span>
                    </li>
                </ul>
            </div>

            <div class="contact_Info">

                <ul>
                    <li class="phone">
                        <h1 class="label">Phone:</h1>
                        <span class="info"><?php echo $user['phone']; ?></span>
                    </li>

                    <li class="address">
                        <h1 class="label">Address:</h1>
                        <span class="info"><?php echo $user['address']; ?></span>
                    </li>

                    <li class="email">
                        <h1 class="label">E-mail:</h1>
                        <span class="info"><?php echo $user['email']; ?></span>
                    </li>

                    <li class="site">
                        <h1 class="label">Facebook URL:</h1>
                        <span class="info"><?php echo $user['facebook']; ?></span>
                    </li>

                    <li class="site">
                        <h1 class="label">Instagram URL:</h1>
                        <span class="info"><?php echo $user['instagram']; ?></span>
                    </li>
                </ul>
            </div>

        </section>
    </div>
</body>
</html>