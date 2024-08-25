<!--IT23171992 J K C T Jayawardhana-->

<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $OrderID=$_POST['orderid'];

  $DeleteButton=$_POST['dlt'];

  //Delete data from the database

  if(isset($DeleteButton)){
    $sqlDelete="DELETE FROM orderdetails WHERE OrderID='$OrderID' ";

    if($con->query($sqlDelete)){
      header('Location: orderManagement.php');
    }

    else{
      echo "Not Deleted !".$con->error;
    }
  }


  $con->close();




?>