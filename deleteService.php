<!--IT23323070 T S S Kumara-->

<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $ServiceID=$_POST['ServiceID'];

  $DeleteButton=$_POST['dlt'];

  //Delete data from the database

  if(isset($DeleteButton)){
    $sqlDelete="DELETE FROM service WHERE ServiceID='$ServiceID' ";

    if($con->query($sqlDelete)){
      header('Location: serviceManagement.php');
    }

    else{
      echo "Not Deleted !".$con->error;
    }
  }


  $con->close();

?>