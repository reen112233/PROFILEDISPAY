<?php
    include 'renterprofile_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Renter Profile</title>
    <link rel="stylesheet" href="Propertyprofile.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
</head>
<body>
    <nav class="navbar">
        <div class="logo">BoardLinker</div>
        <ul class="nav-links">
            <li><a href="#"><i class="fas fa-home boarding-house-icon"></i> Home</a></li>
            <li><a href="../renterprofile/profile.php"><i class="fas fa-user user-icon"></i> Profile</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </nav>
    
    <main class="main-con">
        <section class="user-infoCon">
            <div class="child-con">
                <?php if (!empty($user['profile_image'])): ?>
                    <img src="data:image/jpeg;base64,<?= base64_encode($user['profile_image']) ?>" alt="Profile Picture" />
                <?php else: ?>
                    <img src="https://via.placeholder.com/150" alt="Profile Picture" />
                <?php endif; ?>
                <h1 class="name"><?= htmlspecialchars($user['name']) ?></h1>
            </div>
            <div class="info-box">
                <a href="#" class="btn">Send Message</a>
                <h2>Contact Information</h2>
                <div class="box">
                    <label class="phone" for="phone">Phone:</label>
                    <p id="phone"><?= htmlspecialchars($user['phone']) ?></p>
                </div>
                <div class="box">
                    <label for="address">Address:</label>
                    <p id="address"><?= htmlspecialchars($user['address']) ?></p>
                </div>
                <div class="box">
                    <label for="email">Email:</label>
                    <p id="email"><?= htmlspecialchars($user['email']) ?></p>
                </div>
                <div class="box">
                    <label for="facebook">Facebook:</label>
                    <p id="facebook"><?= htmlspecialchars($user['facebook']) ?></p>
                </div>
                <div class="box">
                    <label for="instagram">Instagram:</label>
                    <p id="instagram"><?= htmlspecialchars($user['instagram']) ?></p>
                </div>
                <div class="box">
                <label for="status">Status:</label>
                <p id="status"> <?= htmlspecialchars($user['status']) ?></p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
