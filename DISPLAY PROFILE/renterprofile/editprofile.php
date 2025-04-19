<?php
    include 'edit-profile_db.php';
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit Profile</title>
     <link rel="stylesheet" href="editProfile.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 </head>
 <body>
    <nav class="navbar">
       
        <div class="logo">BoardLinker</div>
        <ul class="nav-links">
            <li><a href="#"> <i  class="fas fa-home boarding-house-icon"></i></a></li>
            <li><a href="#"><i class="fas fa-user user-icon"></i></a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
    </nav>
     <div class="container">
         <h1>Edit Profile</h1>
         <form action="" method="POST" enctype="multipart/form-data">
             <label for="name">Name:</label>
             <input placeholder="Name" type="text" name="name" value="<?php echo $user['name']; ?>" required>
 
             <label for="school">School:</label>
             <input placeholder="School" type="text" name="school" value="<?php echo $user['school']; ?>" required>
 
             <label for="school_address">School Address:</label>
             <input placeholder="School Address" type="text" name="school_address" value="<?php echo $user['school_address']; ?>" required>
 
             <label for="phone">Phone:</label>
             <input placeholder="Phone Number" type="text" name="phone" value="<?php echo $user['phone']; ?>" required>
 
             <label for="address">Address:</label>
             <input class="Address" type="text" name="address" value="<?php echo $user['address']; ?>" required>
 
             <label for="email">E-mail:</label>
             <input placeholder="Email" type="email" name="email" value="<?php echo $user['email']; ?>" required>
 
             <label for="facebook">Facebook URL:</label>
             <input placeholder="Facebook url" type="text" name="facebook" value="<?php echo $user['facebook']; ?>" required>

             <label for="facebook">Instagram URL:</label>
             <input placeholder="Instagram url" type="text" name="instagram" value="<?php echo $user['instagram']; ?>" required>
 
             <label for="status">Status:</label>
             <select name="status"  required>
                 <option value="Active Lease" <?php echo ($user['status'] == 'Active Lease') ? 'selected' : ''; ?>>Active Lease</option>
                 <option value="Looking For Boarding House" <?php echo ($user['status'] == 'Looking For Boarding House') ? 'selected' : ''; ?>>Looking For Boarding House</option>
             </select>
 
             <label for="profile_image">Upload Image:</label>
             <input type="file" name="profile_image" accept="image/*">
 
             <button type="submit">Update Profile</button>
         </form>
     </div>
 </body>
 </html>