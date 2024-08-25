<!--IT 23241732 A M K B Adikari-->

<?php
session_start();


if (!isset($_SESSION["UserName"])) {
    header("Location: adminLogin.php");
    exit;
}
?>

<!DOCTYPE html>
  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Payment Management</title>
    <link rel="stylesheet" href="css/orderManagement.css">
    
    <script src="js/orderManagement.js"></script>

  </head>

  <body>

    <div class="container">


    <?php include 'AdminNavigationPanel.php'?>


      <!--content/Main(all other components are belong with this div)-->
      <div class="main-panel">

        <!--Search & user icon-->
        <div class="top-level-bar">

          <div class="User">

          <h3>Hello Admin <?php echo $_SESSION['UserName']; ?></h3>

              <img src="images/userN.png" alt="user" id="userImg">

          </div>

        </div>

        <h1 id="title">Payment Management</h1>
          <hr>

        <!--Add order form section and data reading as a table from data base-->
        <div class="addRevision">



                                  <div id="form1">

                                  <fieldset>
                                    <legend>Data Insert form</legend>
                                    </form>
                                  </fieldset>
                                  </div>

                                  <div id="form2">

                                  <fieldset>
                                    <legend>Data update form</legend>

                                    <?php 
                                    if(isset($_POST['updtvlue'])){
                                  ?>

                                  <script>
                                  showForm('form2'); 
                                  </script>

                                  <?php
                                      $PaymentID = $_POST['paymentid'];
                                      $CustomerName = $_POST['customername'];
                                      $Email = $_POST['email'];
                                      $CardType = $_POST['cardtype'];
                                      $CardNumber = $_POST['cardnumber'];
                                    }

                                    
                                    ?>

                                    <form method="POST" action="updatePayment.php" class="form">
                                      <label>Payment ID :</label><br>
                                      <input type="text" name="paymentid" value="<?php echo($PaymentID); ?>" readonly><br><br>

                                      <label>Customer Name :</label><br>
                                      <input type="text" name="cutomername" value="<?php echo($CustomerName); ?>"><br><br>

                                      <label>Email :</label><br>
                                      <input type="text" name="email" value="<?php echo($Email); ?>"><br><br>

                                      <label>Card Type :</label><br>
                                      <input type="text" name="cardtype" value="<?php echo($CardType); ?>"><br><br>

                                      <label>Card Number :</label><br>
                                      <input type="text" name="cardnumber" value="<?php echo($CardNumber); ?>"><br><br>

                                      <input type="submit" value="Edit" name="edt" class="frmBtn">
                                    </form>
                                  </fieldset>
                                  </div>


                                  <!--Reading database data-->

                                  <table>
                                  <tr>
                                    <th>Customer Name</th>
                                 
                                    <th>Email</th>
                                
                                    <th>CardType</th>
                               
                                    <th>CardNumber</th>
                              
                                
                                    <th>paymentID</th>

                                    <th colspan=2>Action</th>
                                    
                                  </tr>

                                  

                                  <?php

                                  require 'config.php';

                                  $sqlRead="SELECT CustomerName,Email,ContactNumber,Address,ZipCode,CardType,CardNumber,paymentID FROM payment";

                                  $resultReading=$con->query($sqlRead);

                                  if($resultReading->num_rows>0){
                                    //reading
                                    while($row=$resultReading->fetch_assoc()){
                                      ?>
                                        <tr>
                                          <td> <?php echo($row['CustomerName']); ?> </td>

                                          <td> <?php echo($row['Email']); ?> </td>
                                          
                                          <td> <?php echo($row['CardType']); ?> </td>
                                          
                                          <td> <?php echo($row['CardNumber']); ?></td>
                                          
                                          <td> <?php echo($row['paymentID']); ?></td>
                                          
                                          
                                            
                                            <div>
                                          </td>

                                          <td>   
                                              <form action="" method="POST"> 
                                                  <input type="hidden" value="<?php echo($row['CustomerName']); ?>"  name="customername"/>

                                                  <input type="hidden" value="<?php echo($row['Email']); ?>"  name="email"/>

                                                  <input type="hidden" value="<?php echo($row['CardType']); ?>"  name="cardtype"/>

                                                  <input type="hidden" value="<?php echo($row['CardNumber']); ?>"
                                                  name="cardnumber"/>

                                                  <input type="hidden" name="paymentid" value="<?php echo($row['paymentID']); ?>">

                                                  <input type="submit" value="Update" name="updtvlue" class="buttonAction updateBtn"/>
                                              </form>
                                          </td>
                                          
                                          <td>  
                                          
                                              <form action="deletePayment.php" method="POST"> 
                                                  <input type="hidden" value="<?php echo($row['paymentID']); ?>"  name="<?php echo($row['paymentID']); ?>"/>

                                                  <input type="submit" value="Delete" name="dlt" class="buttonAction deleteBtn"/>
                                              </form>

                                          </td>
                                        </tr>
                                        <?php
                                    }
                                  }

                                  else{
                                    echo "No Data in the database";
                                  }

                                  ?>

                          </table>
            
          
       
        </div><!--end of the Add order form section-->

      </div><!--End of the main panel-->

    </div>

    <!--ionicons (import icons)-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  </body>
</html>