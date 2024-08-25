<!-- IT23190320 W A H N Deshani-->

<?php
session_start();


if (!isset($_SESSION["UserName"])) {
    header("Location: userLogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Pulse Care Hub : <?php echo $_SESSION['UserName']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-position: center;
            font-family: Arial;
        }

        * {
            margin: 0;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container h2 {
            font-size: 50px;
            padding-left: 50px;
            padding-top: 30px;
            color: white;
            margin:20px;
        }

        #title{
            margin:30px;
            font-size:30px;
        }

        .btn {
            color: red;
        }

        .container hr {
            border: none;
            width: 80%;
            height: 3px;
            border-radius: 10px;
            background: white;
        }

        .users {
            width: 80%;
            display: flex;
            justify-items: center;
            align-items: center;
            flex-direction: column;
            margin: 30px 140px;
            background-color: grey;
            padding: 40px;
            border-radius: 10px;
        }

        .profile-pic {
            width: 200px; /* Adjust size as needed */
            height: auto; /* Maintain aspect ratio */
            margin-bottom: 20px;
            margin:auto;
        }
    </style>
</head>
<?php include 'header.php'?>
<body>


<div class="container">  
    <h2><?php echo "Hello,".$_SESSION['UserName']; ?></h2>
    <hr/>
</div>

<div class="users">
    <h1 id="title"><b>Personal Info</b></h1>

    <!-- Display Photo -->
    <?php
    $conn = mysqli_connect("localhost", "root", "", "petpulse");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>
    

    <!-- Repeat the same structure for Fullname, Username, Email, PhoneNumber, and Gender -->
    <!-- Table for Fullname -->
    <h2>Fullname</h2>
    <table class="table">
        <tbody>
            <?php
            $sql = "SELECT FisrtName,LastName from users";
            $result = $conn->query($sql);
            if (!$result) {
                die("invalid query: " . $conn->error);
            }
            while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['FisrtName'] . ' ' . $row['LastName']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <!-- Table for Username -->
    <h2>Username</h2>
    <table class="table">
        <tbody>
            <?php
            $sql = "SELECT UserName,UserID from users";
            
            $result = $conn->query($sql);
            if (!$result) {
                die("invalid query: " . $conn->error);
            }
            while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['UserName']; ?></td>
                <?php $_SESSION['UserID']=$row['UserID'];?>
                
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    
    

    <!-- Table for Email -->
    <h2>Email</h2>
    <table class="table">
        <tbody>
            <?php
            $sql = "SELECT Email from users";
            $result = $conn->query($sql);
            if (!$result) {
                die("invalid query: " . $conn->error);
            }
            while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['Email']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <!-- Table for PhoneNumber -->
    <h2>Phone Number</h2>
    <table class="table">
        <tbody>
            <?php
            $sql = "SELECT Mobile from users";
            $result = $conn->query($sql);
            if (!$result) {
                die("invalid query: " . $conn->error);
            }
            while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['Mobile']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <!-- Table for Gender -->
    <h2>Gender</h2>
    <table class="table">
        <tbody>
            <?php
            $sql = "SELECT Gender from users";
            $result = $conn->query($sql);
            if (!$result) {
                die("invalid query: " . $conn->error);
            }
            while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['Gender']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <?php
    // Close the connection
    mysqli_close($conn);
    ?>
    
    <!-- Include action buttons only once outside the individual tables -->
    <div class="action-buttons">
        <a class='btn btn-primary btn-sm' href='update.php'>Update</a>
        <a class='btn btn-primary btn-sm' href='delete.php'>Delete</a>
    </div>
</div>

</body>
<?php include 'footer.php'?>
</html>