<!--IT23190320 W A H N Deshani-->

<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $UserID=$_POST['userid'];

  $DeleteButton=$_POST['dlt'];

  //Delete data from the database

  if(isset($DeleteButton)){
    $sqlDelete="DELETE FROM users WHERE UserID='$UserID' ";

    if($con->query($sqlDelete)){
      header('Location: userManagement.php');
    }

    else{
      echo "Not Deleted !".$con->error;
    }
  }


  $con->close();




?>