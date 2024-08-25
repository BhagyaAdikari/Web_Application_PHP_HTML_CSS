<!--IT23319592 K N L P Aravinda-->

<!--IT23323070 T S S Kumara-->

<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $ItemID= $_POST['Item_Id'];
  $ItemName= $_POST['item_name'];
  $Description=$_POST['description'];
  $Price = $_POST['price'];
  $Image=$_POST['Img1'];


  $EditButton=$_POST['edt'];


  //upadate data in the database

  if(isset($EditButton)){
    if(empty($ItemID)){
      echo "All Required !";
    }
  
    else{
      $sqlUpdate="UPDATE shop SET ItemID='$ItemID',ItemName='$ItemName',Description='$Description',Price='$Price',Image='$Image' WHERE ItemID='$ItemID'";
  
      if($con->query($sqlUpdate)){
        header('Location: shopManagement.php');
      }
  
      else{
        echo "Not Updated !".$con->error;
      }
    }
  }

  $con->close();

?>