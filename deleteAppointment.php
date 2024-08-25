<!--IT 23241732 A M K B Adikari-->

<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $AppID=$_POST['appid'];

  $DeleteButton=$_POST['dlt'];

  //Delete data from the database

  if(isset($DeleteButton)){
    $sqlDelete="DELETE FROM appointment WHERE AppID='$AppID' ";

    if($con->query($sqlDelete)){
      header('Location: adminappointment.php');
    }

    else{
      echo "Not Deleted !".$con->error;
    }
  }


  $con->close();




?>