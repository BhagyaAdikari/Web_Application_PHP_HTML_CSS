<!--IT23171192 J K C T Jayawardhana-->
<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $PromoID=$_POST['PromoID'];

  $DeleteButton=$_POST['dlt'];

  //Delete data from the database

  if(isset($DeleteButton)){
    $sqlDelete="DELETE FROM promotions WHERE PromoID='$PromoID' ";

    if($con->query($sqlDelete)){
      header('Location: adminPromotion.php');
    }

    else{
      echo "Not Deleted !".$con->error;
    }
  }


  $con->close();




?>