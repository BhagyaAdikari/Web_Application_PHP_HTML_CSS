
<!--IT23171992 J K C T Jayawardhana-->
<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $UserID = $_POST['userid'];
  $Name = $_POST['name'];
  $Email = $_POST['email'];
  $ContactID = $_POST['contactid'];
  $Need = $_POST['need'];


  $EditButton=$_POST['edt'];


  //upadate data in the database

  if(isset($EditButton)){
    if(empty($UserID)){
      echo "All Required !";
    }
  
    else{
      $sqlUpdate="UPDATE contact_form SET UserID='$UserID',Name='$Name',Email='$Email' ,ContactID='$ContactID' Need='$Need' WHERE UserID='$UserID'";
  
      if($con->query($sqlUpdate)){
        header('Location: index.php');
      }
  
      else{
        echo "Not Updated !".$con->error;
      }
    }
  }

  $con->close();

?>