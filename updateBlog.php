<!--IT 23241732 A M K B Adikari-->

<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $PostID = $_POST['PostID'];
  $BlogTitle = $_POST['BlogTitle'];
  $PostContent = $_POST['Content'];
  $PreviewText = $_POST['Preview'];



  $EditButton=$_POST['edt'];


  //upadate data in the database

  if(isset($EditButton)){
  
      $sqlUpdate="UPDATE blog SET BlogTitle='$BlogTitle',Content='$PostContent' ,Preview='$PreviewText' WHERE PostID='$PostID'";
  
      if($con->query($sqlUpdate)){
        header('Location: blogAdmin.php');
      }
  
      else{
        echo "Not Updated !".$con->error;
      }
  }

  $con->close();

?>