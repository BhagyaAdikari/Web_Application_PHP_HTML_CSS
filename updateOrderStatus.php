<!--IT23171992 J.K.C.T Jayawardhana-->

<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $OrderID=$_POST['orderid'];
  $Status=$_POST['status'];

  //upadate data in the database


    if(empty($OrderID)){
      echo "All Required !";
    }
  
    else{
      $sqlUpdate = "UPDATE orderdetails SET Status = '$Status' WHERE OrderID = '$OrderID'";
  
      if($con->query($sqlUpdate)){
        header('Location: orderManagement.php');
      }
  
      else{
        echo "Not Updated !".$con->error;
      }
    }
  

  $con->close();

?>