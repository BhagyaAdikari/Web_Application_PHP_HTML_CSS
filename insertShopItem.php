
<!--IT23319592 K N L P Aravinda-->
<?php

require 'config.php';

$ItemID = $_POST['Item_Id'];
$ItemName = $_POST['item_name'];
$Description = $_POST['description'];
$Price = $_POST['price'];
$Availability = $_POST['availability'];
$Type = $_POST['type'];

$file_name1 = $_FILES['image']['name'];
$tempname1 = $_FILES['image']['tmp_name'];
$folder1 = 'images/shopItemImages/'.$file_name1;

if (move_uploaded_file($tempname1, $folder1)) {
    $sql = "INSERT INTO shop VALUES ('$ItemID','$ItemName','$Description','$Price','$Availability','$Type','$file_name1')";

    if ($con->query($sql)) {
        header('location:shopManagement.php');
    } 
    
    else {
        echo "Error " . $con->error;
    }
}
?>
