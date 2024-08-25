<!--IT 23241732 A M K B Adikari-->

<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $PaymentID=$_POST['paymentid'];
  $CutomerName=$_POST['cutomername'];
  $Email=$_POST['email'];
  $CardType=$_POST['cardtype'];
  $CardNumber=$_POST['cardnumber'];

  $EditButton=$_POST['edt'];


  //upadate data in the database

  if(isset($EditButton)){
    if(empty($PaymentID)){
      echo "All Required !";
    }
  
    else{
      $sqlUpdate="UPDATE payment SET CustomerName='$CutomerName',Email='$Email',CardType='$CardType',CardNumber='$CardNumber' WHERE PaymentID='$PaymentID'";
  
      if($con->query($sqlUpdate)){
        header('Location: PaymentManagement.php');
      }
  
      else{
        echo "Not Updated !".$con->error;
      }
    }
  }

  $con->close();

?>