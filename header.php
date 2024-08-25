<!--IT23171992 J.K.C.T Jayawardhana-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Navigation Bar</title>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    
    <header>
        <div class="logo">
            <img src="images/new-logo.png" alt="Company Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>

                <li><a href="promotion.php">Promotion</a></li>

                <li><a href="service.php">Services</a></li>

                <li><a href="shop.php">Shop</a></li>

                <li><a href="blog.php">Blog</a></li>

                <li><a href="aboutus.php">About Us </a></li>

                <li><a href="contactUs.php">Contact Us</a></li>

                <li><a href="profile.php">Profile</a></li>

                <?php
                if (!isset($_SESSION["UserName"])) {
                ?>
                    <li><a href="userLogin.php">Login</a></li>
                    <li><a href="UserSignUp.php">Sign Up</a></li>
                <?php
                } else {
                ?>
                    <li><a href="userlogout.php">Log out</a></li>
                <?php
                }
                ?>
                
                
            </ul>
        </nav>
    </header>
    
    </body>
</html>
