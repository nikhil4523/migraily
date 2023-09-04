<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Yellow and Black Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome Icons -->
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        /* Header styles */
        .header {
            background-color: #FFD700; /* Yellow background color */
            color: #000; /* Black text color */
            padding: 15px;
        }

        .header .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header .logo {
            color: #000; /* Black text color for the logo */
            text-decoration: none;
            font-size: 24px;
        }

        .header .logo span {
            color: #000000; /* Optionally, you can add a red color to the dot in the logo */
        }

        .header .navbar a {
            color: #000; /* Black text color for the navigation links */
            text-decoration: none;
            margin-right: 20px;
            font-size: 18px;
            padding-top: 10px;
        }

        .header .icons {
            display: flex;
            color: #FFD700;
        }

        .header .profile {
            display: flex;
            align-items: center;
        }

        .header .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .header .profile p {
            margin-right: 10px;
        }

        .header .profile .btn {
            background-color: #000; /* Black background color for the buttons */
            color: #FFD700; /* Yellow text color for the buttons */
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            margin-right: 10px;
        }

        .header .profile .delete-btn {
            background-color: #FF0000; /* Red background color for the delete button */
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .header .profile .flex-btn {
            display: flex;
        }

        .header .profile .option-btn {
            background-color: #000; /* Black background color for the login and register buttons */
            color: #FFD700; /* Yellow text color for the buttons */
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            margin-right: 10px;
        }

        /* Mobile Menu styles (you may need to add a responsive menu) */
        /* Add your mobile menu styles here if required */
/* Zoom-in animation */
.zoom-in {
    animation: zoomIn 0.5s ease-in-out;
    animation-fill-mode: both;
}

@keyframes zoomIn {
    0% {
        transform: scale(0.5);
        opacity: 0;
        
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}

    </style>
</head>
<body>

<header class="header zoom-in"> <!-- Add the "zoom-in" class here -->
    <!-- ... your header content ... -->


    <header class="header">
        <div class="flex">
            <a href="admin_page.php" class="logo">MIGRAILY<span>.</span></a>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="about.php">About</a>
                <a href="faq.html">FAQ</a>
                <a href="contact.php">Register your business</a>
            </nav>
            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <div id="user-btn" class="fas fa-user"></div>
            </div>
            <div class="profile">
                <?php
                    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
                    $select_profile->execute([$user_id]);
                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                ?>
                <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
                <p><?= $fetch_profile['name']; ?></p>
                <a href="user_profile_update.php" class="btn">Update Profile</a>
                <a href="logout.php" class="delete-btn">Logout</a>
                <div class="flex-btn">
                    <a href="login.php" class="option-btn">Login</a>
                    <a href="register.php" class="option-btn">Register</a>
                </div>
            </div>
        </div>
    </header>

    </header>
</body>
</html>
