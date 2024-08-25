<!--IT23190320 W A H N Deshani-->


<?php

session_start();
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $UserID=$_POST['userid'];
  $FirstName = $_POST['fisrtname'];
  $LastName = $_POST['lastname'];
  $Mobile = $_POST['mobile'];
  $UserName = $_POST['username'];
  $Password = $_POST['password'];


  $EditButton=$_POST['edt'];


  //upadate data in the database

  if(isset($EditButton)){
    if(empty($UserID)){
      echo "All Required !";
    }
  
    else{
      $sqlUpdate="UPDATE users SET FisrtName='$FirstName',LastName='$LastName',Mobile='$Mobile' ,UserName='$UserName' WHERE UserID='$UserID'";
  
      if($con->query($sqlUpdate)){
        header('Location: userManagement.php');
      }
  
      else{
        echo "Not Updated !".$con->error;
      }
    }
  }

  $con->close();

?>