
<!--IT23319592 K N L P Aravinda-->
<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $ItemID=$_POST['itemID'];

  $DeleteButton=$_POST['dlt'];

  //Delete data from the database

  if(isset($DeleteButton)){
    $sqlDelete="DELETE FROM shop WHERE ItemID='$ItemID' ";

    if($con->query($sqlDelete)){
      header('Location: shopManagement.php');
    }

    else{
      echo "Not Deleted !".$con->error;
    }
  }


  $con->close();

?>