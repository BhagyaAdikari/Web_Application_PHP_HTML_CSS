<!--IT23323070 T S S Kumara-->
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
    <title>Admin Dashboard - Service Management</title>
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

        <h1 id="title">Service Management</h1>
          <hr>

        <!--Add order form section and data reading as a table from data base-->
        <div class="addRevision">


                            <button onclick="showForm('form1')"  class="OMbtn">Insert Service</button>

                            

                                  <div id="form1">

                                  <fieldset>
                                    <legend>Data Insert form</legend>

                                    <form method="POST" action="insertService.php" class="form" enctype="multipart/form-data">

                                      <label>Service Name :</label><br>
                                      <input type="text" name="ServiceName" class="OMform"><br><br>

                                      <label>Description :</label><br>
                                      <input type="text" name="Description"  class="OMform"><br><br>

                                      <label>Price :</label><br>
                                      <input type="text" name="Price"  class="OMform"><br><br>

                                      <label>Type :</label><br>
                                      <input type="text" name="Type" class="OMform"><br><br>

                                      <label>Image :</label><br>
                                      <input type="file" name="Image" class="OMform"><br><br>



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

                                      $ServiceID = $_POST['serviceid'];
                                      $ServiceName= $_POST['servicename'];
                                      $Description = $_POST['description'];
                                      $Price = $_POST['price'];

                                      
                                   
                                    }

                                    
                                    ?>

                                    <form method="POST" action="updateService.php" class="form">

                                      <label>Service ID :</label><br>
                                      <input type="text" name="serviceid" value="<?php echo($ServiceID);?>" class="OMform" readonly><br><br>

                                      <label>Service Name :</label><br>
                                      <input type="text" name="ServiceName" value="<?php echo($ServiceName);?>" class="OMform"></input><br><br>

                                      <label>Description :</label><br>
                                      <textarea type="text" name="Description" value="<?php echo($Description);?>"  class="OMform" cols=30 rows=20></textarea><br><br>

                                      <label>Price :</label><br>
                                      <input type="text" name="Price" value="<?php echo($Price);?>"  class="OMform"><br><br>


                                      <input type="submit" value="edit" name="edt" class="frmBtn">

                                    </form>
                                  </fieldset>
                                  </div>


                                  <!--Reading database data-->

                                  <table>
                                  <tr>
                                    <th>Service ID</th>
                                    <th>Service Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th colspan=2>Action</th>
                                  </tr>

                                  

                                  <?php

                                  require 'config.php';

                                  $sqlRead="SELECT ServiceID,ServiceName,Description,Price FROM service";

                                  $resultReading=$con->query($sqlRead);

                                  if($resultReading->num_rows>0){
                                    //reading
                                    while($row=$resultReading->fetch_assoc()){
                                      ?>
                                        <tr>
                                          <td> <?php echo($row['ServiceID']); ?></td>
                                          <td> <?php echo($row['ServiceName']); ?> </td>
                                          <td> <?php echo($row['Description']); ?></td>
                                          <td> <?php echo($row['Price']); ?></td>
                                          <td>
                                          
                                          
                                              <form action="" method="POST">
                                                  <input type="hidden" value="<?php echo($row['ServiceID']); ?>"  name="serviceid"/>

                                                  <input type="hidden" value="<?php echo($row['ServiceName']); ?>"  name="servicename"/>

                                                  <input type="hidden" value="<?php echo($row['Description']); ?>"  name="description"/>

                                                  <input type="hidden" value="<?php echo($row['Price']); ?>"  name="price"/>

                                                  <input type="submit" value="Update" name="updtvlue" class="buttonAction updateBtn"/>
                                                  
                                              </form>
                                      
                                    </td>
                                    <td>
                                              <form action="deleteService.php" method="POST">
                                                  <input type="hidden" value="<?php echo($row['ServiceID']); ?>"  name="ServiceID"/>

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

    <script src="js/orderManagement.js"></script>

  </body>
</html>


