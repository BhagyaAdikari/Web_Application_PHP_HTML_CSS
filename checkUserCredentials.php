<!--IT23190320 W A H N Deshani-->


<?php
session_start();

// Retrieve user input from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "petpulse");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the username and password match
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["Password"])) {
            $_SESSION["UserName"] = $username;
            header("Location: profile.php");
        } else {
            echo "<script type='text/javascript'>alert('Invalid Password!');
            window.location='userLogin.php';</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Username not found!');
        window.location='userLogin.php';</script>";
    }

    mysqli_close($conn);
}
?>