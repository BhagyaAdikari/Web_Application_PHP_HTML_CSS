<!--IT 23241732 A M K B Adikari-->

<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $AppID = $_POST['appid'];
  $Type = $_POST['type'];
  $Date = $_POST['Date'];
  $FurtherInformation = $_POST['furinfo'];


  $EditButton=$_POST['edt'];


  //upadate data in the database

  if(isset($EditButton)){
    if(empty($AppID)){
      echo "All Required !";
    }
  
    else{
      $sqlUpdate="UPDATE appointment SET Type='$Type',Date='$Date',FurInfo='$FurtherInformation' WHERE UserID='$UserID'";
  
      if($con->query($sqlUpdate)){
        header('Location: adminappointment.php');
      }
  
      else{
        echo "Not Updated !".$con->error;
      }
    }
  }

  $con->close();

?>