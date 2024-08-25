
<!--IT23171992 J K C T Jayawardhana-->
<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $PromoTitle = $_POST['promotitle'];
  $PromoID = $_POST['promoid'];
  $content = $_POST['promocontent'];
  $PromoCode = $_POST['promocode'];



  $EditButton=$_POST['edt'];


  //upadate data in the database

  if(isset($EditButton)){

      $sqlUpdate="UPDATE promotions SET PromoTitle='$PromoTitle',PromoContent='$content' ,PromoCode='$PromoCode' WHERE PromoID='$PromoID'";
  
      if($con->query($sqlUpdate)){
        header('Location: adminPromotion.php');
      }
  
      else{
        echo "Not Updated !".$con->error;
      }
    }
  $con->close();

?>


