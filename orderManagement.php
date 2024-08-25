<!--IT23171992 J.K.C.T Jayawardhana-->
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
    <title>Admin Dashboard - Order Management</title>
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

        <h1 id="title">Order Management</h1>
          <hr>

        <!--Add order form section and data reading as a table from data base-->
        <div class="addRevision">


                            <button onclick="showForm('form1')" class="OMbtn">Insert Order</button>



                                  <div id="form1">

                                  <fieldset>
                                    <legend>Data Insert form</legend>

                                    <form method="POST" action="insertOrder.php" class="form">
                                      <label>Item ID :</label><br>
                                      <input type="text" name="itemid" class="OMform" ><br><br>

                                      <label>User ID :</label><br>
                                      <input type="text" name="userid" class="OMform"><br><br>

                                      <label>Item Name :</label><br>
                                      <input type="text" name="itemName" maxlength="10" class="OMform"><br><br>

                                      <label>Price :</label><br>
                                      <input type="text" name="price" class="OMform"><br><br>

                                      <input type="submit" value="Insert" name="ist" class="frmBtn">
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

                                      $orderID = $_POST['orderid'];
                                      $itemID = $_POST['itemid'];
                                      $userID = $_POST['userid'];
                                      $itemName = $_POST['itemname'];
                                      $price = $_POST['price'];
                                    }

                                    
                                    ?>

                                    <form method="POST" action="updateOrder.php" class="form">
                                    <label>Order ID :</label><br>
                                      <input type="text" name="orderid" value="<?php echo($orderID); ?>"><br><br>

                                      <label>Item ID :</label><br>
                                      <input type="text" name="itemid" value="<?php echo($itemID); ?>"><br><br>

                                      <label>User ID :</label><br>
                                      <input type="text" name="userid" value="<?php echo($userID); ?>"><br><br>

                                      <label>Item Name :</label><br>
                                      <input type="text" name="itemname" value="<?php echo($itemName); ?>"><br><br>

                                      <label>Price :</label><br>
                                      <input type="text" name="price" value="<?php echo($price); ?>"><br><br>

                                      <input type="submit" value="Edit" name="edt" class="frmBtn">
                                    </form>
                                  </fieldset>
                                  </div>


                                  <!--Reading database data-->

                                  <table>
                                  <tr>
                                    <th>OrderID</th>
                                    <th>ItemID</th>
                                    <th>UserID</th>
                                    <th>ItemName</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th colspan=2>Action</th>
                                  </tr>

                                  

                                  <?php

                                  require 'config.php';

                                  $sqlRead="SELECT OrderID,ItemID,UserID,ItemName,Price,Status FROM Orderdetails";

                                  $resultReading=$con->query($sqlRead);

                                  if($resultReading->num_rows>0){
                                    //reading
                                    while($row=$resultReading->fetch_assoc()){
                                      ?>
                                        <tr>
                                          <td> <?php echo($row['OrderID']); ?></td>
                                          <td> <?php echo($row['ItemID']); ?> </td>
                                          <td> <?php echo($row['UserID']); ?></td>
                                          <td> <?php echo($row['ItemName']); ?></td>
                                          <td> <?php echo($row['Price']); ?></td>
                                          <td> 
                                            <div class="orderActionChanger">

                                            <?php
                                            // Assuming $row['Status'] contains the status
                                            $status = $row['Status'];
                                            $statusClass = '';

                                            // Define classes based on status
                                            if ($status == "Processing") {
                                                $statusClass = 'processing';
                                            } else if ($status == "Prepared") {
                                                $statusClass = 'prepared';
                                            } else if ($status == "Delivered") {
                                              $statusClass = 'delivered';
                                            }   

                                            ?>
                                              <button class="statusPreview <?php echo $statusClass;?>"><?php echo($row['Status']); ?></button>
                                           
                                              <form action="updateOrderStatus.php" method="POST" class="formOrderActions">
                                                <input type="hidden" name="orderid" value="<?php echo($row['OrderID']); ?>">

                                                    <?php 
                                                    
                                                    if($row['Status'] == "Processing"){
                                                    ?>

                                                        <button class="orderActions" id="c2" type="submit" name="status" value="Prepared"><img width="40px" src="images/prepared.png"></button>

                                                    <?php

                                                    }else if($row['Status'] == "Prepared") {

                                                    ?>

                                                      <button class="orderActions"  id="c3" type="submit" name="status" value="Delivered"><img width="40px" src="images/delivered.png"></button>  
                                                    
                                                    <?php

                                                    }

                                                    ?>
                                               

                                              </form>
                                            <div>
                                          </td>
                                          <td>   
                                              <form action="" method="POST"> 
                                                  <input type="hidden" value="<?php echo($row['OrderID']); ?>"  name="orderid"/>

                                                  <input type="hidden" value="<?php echo($row['ItemID']); ?>"  name="itemid"/>

                                                  <input type="hidden" value="<?php echo($row['UserID']); ?>"  name="userid"/>

                                                  <input type="hidden" value="<?php echo($row['ItemName']); ?>"  name="itemname"/>

                                                  <input type="hidden" value="<?php echo($row['Price']); ?>"  name="price"/>

                                                  <input type="submit" value="Update" name="updtvlue" class="buttonAction updateBtn"/>
                                              </form>
                                          </td>
                                          <td>  
                                          
                                              <form action="deleteOrder.php" method="POST"> 
                                                  <input type="hidden" value="<?php echo($row['OrderID']); ?>"  name="orderid"/>

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