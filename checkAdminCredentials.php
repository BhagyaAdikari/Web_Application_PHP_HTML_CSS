<!--IT23171992 J K C T Jayawardhana-->

<?php
session_start();

// Retrieve user input from the form

    $username = $_POST["username"];
    $password = $_POST["password"];

    require 'config.php';

    // Check if the username and password match
    $query = "SELECT * FROM employee WHERE UserName='$username'";

    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);

        if ($password==$row["Password"]) {
            $_SESSION["UserName"] = $username;
            header("Location: adminDashboard.php");
        } 
        
        else {
            echo "<script type='text/javascript'>alert('Invalid Password!');
            window.location='adminLogin.php';</script>";
        }

    } 
    
    else {

        echo "<script type='text/javascript'>alert('Username not found!');
        window.location='adminLogin.php';</script>";
    }

    mysqli_close($con);

?>