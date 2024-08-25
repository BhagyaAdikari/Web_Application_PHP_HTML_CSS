
<!--IT23171992 J K C T Jayawardhana-->
<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $ContactID=$_POST['ContactID'];

  $DeleteButton=$_POST['dlt'];

  //Delete data from the database

  if(isset($DeleteButton)){
    $sqlDelete="DELETE FROM contact_form WHERE ContactID='$ContactID' ";

    if($con->query($sqlDelete)){
      header('Location: adminContactUs.php');
    }

    else{
      echo "Not Deleted !".$con->error;
    }
  }


  $con->close();




?>