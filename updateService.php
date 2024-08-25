<!--IT23323070 T S S Kumara-->

<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $ServiceID= $_POST['serviceid'];
  $ServiceName= $_POST['ServiceName'];
  $Description=$_POST['Description'];
  $Price = $_POST['Price'];


  $EditButton=$_POST['edt'];


  //upadate data in the database

  if(isset($EditButton)){
    if(empty($ServiceID)){
      echo "All Required !";
    }
  
    else{
      $sqlUpdate="UPDATE service SET ServiceID='$ServiceID',ServiceName='$ServiceName',Description='$Description',Price='$Price' WHERE ServiceID='$ServiceID'";
  
      if($con->query($sqlUpdate)){
        header('Location: serviceManagement.php');
      }
  
      else{
        echo "Not Updated !".$con->error;
      }
    }
  }

  $con->close();

?>