<!--IT23171992 J.K.C.T Jayawardhana-->

<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $OrderID= $_POST['orderid'];
  $ItemID= $_POST['itemid'];
  $userID=$_POST['userid'];
  $ItemName=$_POST['itemname'];
  $Price=$_POST['price'];


  $EditButton=$_POST['edt'];


  //upadate data in the database

  if(isset($EditButton)){
    if(empty($OrderID)){
      echo "All Required !";
    }
  
    else{
      $sqlUpdate="UPDATE orderdetails SET ItemID='$ItemID',UserID='$userID',ItemName='$ItemName',Price='$Price' WHERE OrderID='$OrderID'";
  
      if($con->query($sqlUpdate)){
        header('Location: orderManagement.php');
      }
  
      else{
        echo "Not Updated !".$con->error;
      }
    }
  }

  $con->close();

?>