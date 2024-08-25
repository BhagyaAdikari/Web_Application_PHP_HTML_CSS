<!--IT23171992 J K C T Jayawardhana-->


<?php
  session_start();

  if (!isset($_SESSION["UserName"])) {
    echo "<script type='text/javascript'>alert('Please Login to Continue!');
            window.location='userLogin.php';</script>";
    exit;
  }
?>

<!DOCTYPE html>
  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Promotion Management</title>
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

        <h1 id="title">Promotions Management</h1>
          <hr>

        <!--Add order form section and data reading as a table from data base-->
        <div class="addRevision">


                            <button onclick="showForm('form1')" class="OMbtn">Insert Promotion</button>



                                  <div id="form1">

                                  <fieldset>
                                    <legend>Data Insert form</legend>

                                    <form method="POST" action="insertPromotion.php" enctype="multipart/form-data" class="form">

                                      <label>Promotion Title :</label><br>
                                      <input type="text" name="PromoTitle" class="OMform"><br><br>

                                      <label>Promotion Content :</label><br>
                                      <input type="text" name="PromoContent" class="OMform"><br><br>

                                      <label>Image :</label><br>
                                      <input type="file" name="Image" class="OMform"><br><br>

                                      <label>Promo Code :</label><br>
                                      <input type="text" name="PromoCode" class="OMform"><br><br>

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

                                      $PromoTitle = $_POST['promotitle'];
                                      $PromoID = $_POST['promoid'];
                                      $content = $_POST['promocontent'];
                                      $PromoCode = $_POST['promocode'];
                                      
                                    }

                                    
                                    ?>

                                    <form method="POST" action="updatePromotion.php" class="form">
                                    <label>Promotion Title :</label><br>
                                      <input type="text" name="promotitle" class="OMform" value="<?php echo($PromoTitle); ?>"><br><br>

                                      <label>Promo ID :</label><br>
                                      <input type="text" name="promoid" class="OMform" value="<?php echo($PromoID); ?>"><br><br>

                                      <label>Promoo Content :</label><br>
                                      <input type="text" name="promocontent" class="OMform" value="<?php echo($content); ?>"><br><br>

                                      <label>Promo Code :</label><br>
                                      <input type="text" name="promocode" class="OMform" value="<?php echo($PromoCode); ?>"><br><br>

                                      

                                      <input type="submit" value="edit" name="edt" class="frmBtn">
                                    </form>
                                  </fieldset>
                                  </div>


                                  <!--Reading database data-->

                                  <table>
                                  <tr>
                                    <th>Promotion Title</th>
                                    <th>Promotion ID</th>
                                    <th>Promotion Content</th>
                                    <th>Promotion Code</th>
                                    
                                    <th colspan=2>Action</th>
                                  </tr>

                                  

                                  <?php

                                  require 'config.php';

                                  $sqlRead="SELECT PromoTitle,PromoID,PromoContent,Image,PromoCode FROM promotions";

                                  $resultReading=$con->query($sqlRead);

                                  if($resultReading->num_rows>0){
                                    //reading
                                    while($row=$resultReading->fetch_assoc()){
                                      ?>
                                        <tr>
                                          <td> <?php echo($row['PromoTitle']); ?></td>
                                          <td> <?php echo($row['PromoID']); ?> </td>
                                          <td> <?php echo($row['PromoContent']); ?></td>
                                          <td> <?php echo($row['PromoCode']); ?></td>
                                          <td> 
                                            <div class="orderActionChanger">

                                      </div>
                                           
                                              
                                               

                                              </form>
                                            <div>
 
                                              <form action="" method="POST"> 
                                                  <input type="hidden" value="<?php echo($row['PromoTitle']); ?>"  name="promotitle"/>

                                                  <input type="hidden" value="<?php echo($row['PromoID']); ?>"  name="promoid"/>

                                                  <input type="hidden" value="<?php echo($row['PromoContent']); ?>"  name="promocontent"/>

                                                  <input type="hidden" value="<?php echo($row['PromoCode']); ?>"  name="promocode"/>

                                                  <input type="submit" value="Update" name="updtvlue" class="buttonAction updateBtn"/>
                                              </form>
                                          </td>
                                          <td>  
                                          
                                              <form action="deletePromotion.php" method="POST"> 
                                                  <input type="hidden" value="<?php echo($row['PromoID']); ?>"  name="PromoID"/>

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