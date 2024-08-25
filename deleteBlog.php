<!--IT 23241732 A M K B Adikari-->

<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $PostID=$_POST['PostID'];

  $DeleteButton=$_POST['dlt'];

  //Delete data from the database

  if(isset($DeleteButton)){
    $sqlDelete="DELETE FROM blog WHERE PostID='$PostID' ";

    if($con->query($sqlDelete)){
      header('Location: blogAdmin.php');
    }

    else{
      echo "Not Deleted !".$con->error;
    }
  }


  $con->close();




?>