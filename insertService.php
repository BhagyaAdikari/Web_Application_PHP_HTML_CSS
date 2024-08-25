<!--IT23323070 T S S Kumara-->

<?php

require 'config.php';

$ServiceName= $_POST['ServiceName'];
$Description = $_POST['Description'];
$Price = $_POST['Price'];
$Type = $_POST['Type'];


$file_name1 = $_FILES['Image']['name'];
$tempname1 = $_FILES['Image']['tmp_name'];
$folder1 = 'images/serviceItemImages/'.$file_name1;

if (move_uploaded_file($tempname1, $folder1)) {
    $sql = "INSERT INTO service VALUES ('','$ServiceName','$Description','$Price','$Type','$file_name1')";

    if ($con->query($sql)) {
        header('location:serviceManagement.php');
    } 
    
    else {
        echo "Error " . $con->error;
    }
}
?>
