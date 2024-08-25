<!--IT 23241732 A M K B Adikari-->

<?php
session_start();
?>

<?php
require 'config.php';

// Data inserting part

// Catching form data to variables
$paymentID = $_SESSION['paymentID'];

$DeleteButton = $_POST['dlt'];

// Delete data from the database

if (isset($DeleteButton)) {
    $sqlDelete = "DELETE FROM payment WHERE paymentID='$paymentID' ";

    if ($con->query($sqlDelete)) {
        header('location:paymentManagement.php');
    } else {
        echo "Not Deleted !" . $con->error;
    }
}

$con->close();
?>
