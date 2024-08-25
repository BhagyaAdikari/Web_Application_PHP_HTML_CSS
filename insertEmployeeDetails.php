

<!--IT231719992 k k c t jayawardhana-->
<?php
// Retrieve user input from the form

require 'config.php';
    
$UserName = $_POST["username"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$password = $_POST["password"];

if(empty($UserName) || empty($mobile) || empty($email) || empty($password)) {
    echo "<script>alert('Fill all input fields!');</script>";
else{
    // Check if the username already exists
$query = "SELECT * FROM employee WHERE UserName='$UserName'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<script type='text/javascript'>alert('Username already exists!!');
            window.location='adminSignUp.php';</script>";
} 

else {
    // Insert new employee into the database
    $query = "INSERT INTO employee (UserName, Mobile, Email, Password) VALUES ('$UserName', '$mobile', '$email', '$password')";

    // Perform the insertion
    if (mysqli_query($con, $query)) {
        header('Location: adminDashboard.php');
        exit(); // Exit after redirect
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}
}

}

mysqli_close($con);
?>
