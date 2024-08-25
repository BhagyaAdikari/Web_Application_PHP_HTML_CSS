<!--IT23319592 K N L P Aravinda-->
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
    <title>Admin Dashboard - Blog Management</title>
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

        <h1 id="title">Shop Management</h1>
          <hr>

        <!--Add order form section and data reading as a table from data base-->
        <div class="addRevision">


                            <button onclick="showForm('form1')"  class="OMbtn">Insert Shop Item</button>

                            

                                  <div id="form1">

                                  <fieldset>
                                    <legend>Data Insert form</legend>

                                    <form method="POST" action="insertShopItem.php" class="form" enctype="multipart/form-data">
                                      <label>ITEM ID :</label><br>
                                      <input type="text" name="Item_Id" class="OMform" readonly><br><br>

                                      <label>ITEM NAME :</label><br>
                                      <input type="text" name="item_name" class="OMform"><br><br>

                                      <label>DESCRIPTION :</label><br>
                                      <input type="text" name="description"  class="OMform"><br><br>

                                      <label>PRICE :</label><br>
                                      <input type="text" name="price"  class="OMform"><br><br>

                                      <label>AVAILABILITY :</label><br>
                                      <input type="text" name="availability" class="OMform"><br><br>
                                      
                                      <label>TYPE :</label><br>
                                      <input type="text" name="type" class="OMform"><br><br>

                                      <label>IMAGE :</label><br>
                                      <input type="file" name="image" class="OMform"><br><br>



                                      <input type="submit" value="Insert" name="ist" class="frmBtn" >
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

                                      $ItemID = $_POST['Item_Id'];
                                      $ItemName= $_POST['item_name'];
                                      $Description = $_POST['description'];
                                      $Price = $_POST['price'];
                                    
                                   
                                    }

                                    
                                    ?>

                                    <form method="POST" action="updateShop.php" class="form">
                                    <label>Item ID :</label><br>
                                    
                                      <input type="text" name="Item_Id" class="OMform" value="<?php echo($ItemID); ?>"><br><br>

                                      <label>Item Name :</label><br>
                                      <input type="text" name="item_name" class="OMform" value="<?php echo($ItemName); ?>"><br><br>

                                      <label>Description :</label><br>
                                      <input type="text" name="description"  class="OMform" value="<?php echo($Description); ?>"><br><br>

                                      <label>Price :</label><br>
                                      <input type="text" name="price"  class="OMform" value="<?php echo($Price); ?>"><br><br>


                                      <input type="submit" value="edit" name="edt" class="frmBtn">

                                    </form>
                                  </fieldset>
                                  </div>


                                  <!--Reading database data-->

                                  <table>
                                  <tr>
                                    <th>Item_Id</th>
                                    <th>item_name</th>
                                    <th>description</th>
                                    <th>price</th>
                                    <th colspan=2>Action</th>
                                  </tr>

                                  

                                  <?php

                                  require 'config.php';

                                  $sqlRead="SELECT ItemID,ItemName,Description,Price,Availability,Type,Image   FROM shop";

                                  $resultReading=$con->query($sqlRead);

                                  if($resultReading->num_rows>0){
                                    //reading
                                    while($row=$resultReading->fetch_assoc()){
                                      ?>
                                        <tr>
                                          <td> <?php echo($row['ItemID']); ?></td>
                                          <td> <?php echo($row['ItemName']); ?> </td>
                                          <td> <?php echo($row['Description']); ?></td>
                                          <td> <?php echo($row['Price']); ?></td>
                                        
                                          <td>
                                              <form action="" method="POST">
                                                  <input type="hidden" value="<?php echo($row['ItemID']); ?>"  name="Item_Id"/>

                                                  <input type="hidden" value="<?php echo($row['ItemName']); ?>"  name="item_name"/>

                                                  <input type="hidden" value="<?php echo($row['Description']); ?>"  name="description"/>

                                                  <input type="hidden" value="<?php echo($row['Price']); ?>"  name="price"/>

                                                  <input type="submit" value="Update" name="updtvlue" class="buttonAction updateBtn"/>
                                                  
                                              </form>
                                          
                                          </td>
                                          <td>
                                          
                                              <form action="deleteShopItem.php" method="POST">
                                                  <input type="hidden" value="<?php echo($row['ItemID']); ?>"  name="itemID"/>

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


