<!--IT23190320 W A H N Deshani-->

<?php
// Retrieve user input from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $mobile = $_POST["mobile"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repeatpassword = $_POST["repeatpassword"];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "petpulse");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the username already exists
    $query = "SELECT * FROM users WHERE Username='$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "<script type='text/javascript'>alert('Username already exists!!');
                window.location='UserSignUp.php';</script>";
    } else {
        // Insert new user into the database
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $query = "INSERT INTO users (Fisrtname, LastName, Mobile, Gender, Email,UserName, Password) VALUES ('$firstname', '$lastname', '$mobile','$gender', '$email','$username', '$password')";
        if (mysqli_query($conn, $query)) {
            echo "<script type='text/javascript'>alert('Sign up successful, you can now log in!!');
                window.location='userLogin.php';</script>";            
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}

?>
