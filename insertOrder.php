<!--IT23171992 J.K.C.T Jayawardhana-->
<?php
  session_start();
?>

<?php
  require 'config.php';

  //data inserting part

  //catching form data to variables
  $ItemID= $_POST['itemid'];
  $userID=$_POST['userid'];
  $ItemName=$_POST['itemName'];
  $Price=$_POST['price'];

  $InsertButton=$_POST['ist'];



  //sql insert data query
  if(isset($InsertButton)){
    $sqlInsert = "INSERT INTO orderdetails (ItemID, UserID, ItemName,Price) VALUES ('$ItemID', '$userID', '$ItemName','$Price')";

    //checking inserting
  
    if($con->query($sqlInsert))
    {
      header('Location: orderManagement.php');
    }
  
    else
    {
      echo "Error , ".$con->error;
    }
  }


  $con->close();




?>