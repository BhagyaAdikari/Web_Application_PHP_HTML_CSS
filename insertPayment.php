
<!--IT 23241732 A M K B Adikari-->
<?php
session_start();
require 'config.php';

// Check if all input fields are filled
if(isset($_POST['name'], $_POST['email'], $_POST['number'], $_POST['address'], $_POST['zip'], $_POST['cardType'], $_POST['nameOnCard'], $_POST['creditCardNumber'], $_POST['expMonth'], $_POST['cvv'])) {
  
  // Retrieve session variables
  $ItemID = $_SESSION['ItemID'];
  $UserID = $_SESSION['UserID'];
  $ItemName = $_SESSION['ItemName'];
  $Price = $_SESSION['Price'];

  // Retrieve form data
  $Name = $_POST['name'];
  $Email = $_POST['email'];
  $Telephone = $_POST['number'];
  $Address = $_POST['address'];
  $Zip = $_POST['zip'];
  $CardType = $_POST['cardType'];
  $NameOnCard = $_POST['nameOnCard'];
  $CardNumber = $_POST['creditCardNumber'];
  $ExpMonth = $_POST['expMonth'];
  $CVV = $_POST['cvv'];

  // Check if any field is empty
  if(empty($Name) || empty($Email) || empty($Telephone) || empty($Address) || empty($Zip) || empty($CardType) || empty($NameOnCard) || empty($CardNumber) || empty($ExpMonth) || empty($CVV)) {
    echo "<script>alert('Fill all input fields!');</script>";
    
  } else {
    // Insert into orderdetails table
    $insertOrder = "INSERT INTO orderdetails (ItemID, UserID, ItemName, Price) VALUES ('$ItemID', '$UserID', '$ItemName', '$Price')";

    if($con->query($insertOrder)) {
      // Insert into payment table
      $sqlInsert = "INSERT INTO payment (CustomerName, Email, ContactNumber, Address, ZipCode, CardType, NameOnCard, CardNumber, ExpireDate, CVV) VALUES ('$Name', '$Email', '$Telephone', '$Address', '$Zip', '$CardType', '$NameOnCard', '$CardNumber', '$ExpMonth', '$CVV')";

      if($con->query($sqlInsert)) {
        echo "<script>alert('successfull!');</script>";
        header('Location: payment.php');
        exit;

      } else {
        echo "Error: " . $con->error;
      }

    } else {
      echo "Error: " . $con->error;
    }

  }
} else {
  echo "<script>alert('Fill all input fields!');</script>";
}

$con->close();
?>
