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
    <title>Admin Dashboard - Contact Us Forms</title>
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

        <h1 id="title">Contact Us Forms</h1>
          <hr>

        <!--Add order form section and data reading as a table from data base-->
        <div class="addRevision">


                            <button onclick="showForm('form1')" class="OMbtn">Insert contact form</button>



                                  <div id="form1">

                                  <fieldset>
                                    <legend>Data Insert form</legend>

                                    <form method="POST" action="insertContactUs.php" class="form">

                                      <label>Name :</label><br>
                                      <input type="text" name="Name" class="OMform"><br><br>

                                      <label>E-mail :</label><br>
                                      <input type="email" name="Email"  class="OMform"><br><br>

                                      <label>Need :</label><br>
                                      <input type="text" name="Need" class="OMform"><br><br>

                                      <label>Further Information :</label><br>
                                      <input type="text" name="FurInfo" class="OMform"><br><br>

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


                                      $Name = $_POST['name'];
                                      $Email = $_POST['email'];
                                      $ContactID = $_POST['contactid'];
                                      $Need = $_POST['need'];
                                    }

                                    
                                    ?>

                                    <form method="POST" action="updateContactUs.php" class="form">

                                      <label>Name :</label><br>
                                      <input type="text" name="name" class="OMform" value="<?php echo($Name); ?>"><br><br>

                                      <label>E-mail :</label><br>
                                      <input type="text" name="email"  class="OMform" value="<?php echo($Email); ?>"><br><br>

                                      <label>ContactID :</label><br>
                                      <input type="text" name="contactid" class="OMform" value="<?php echo($ContactID); ?>" readonly><br><br>

                                      <label>Need :</label><br>
                                      <input type="text" name="need" class="OMform" value="<?php echo($Need); ?>"><br><br>

                                      <input type="submit" value="edit" name="edt" class="frmBtn">
                                    </form>
                                  </fieldset>
                                  </div>


                                  <!--Reading database data-->

                                  <table>
                                  <tr>
                                    
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Contact ID</th>
                                    
                                    <th>FurInfo</th>
                                    <th>Need</th>
                                    
                                    <th colspan=2>Action</th>
                                  </tr>

                                  

                                  <?php

                                  require 'config.php';

                                  $sqlRead="SELECT Name,Email,ContactID,Help,Need FROM contact_form";

                                  $resultReading=$con->query($sqlRead);

                                  if($resultReading->num_rows>0){
                                    //reading
                                    while($row=$resultReading->fetch_assoc()){
                                      ?>
                                        <tr>
                                          
                                          <td> <?php echo($row['Name']); ?> </td>
                                          <td> <?php echo($row['Email']); ?></td>
                                          <td> <?php echo($row['ContactID']); ?></td>
                                        
                                          <td> <?php echo($row['Need']); ?></td>
                                          
                                          
                                          <td> 
                                            
                                              </form>
                                            <div>
 
                                            <form action="" method="POST"> 
                                                 

                                                  <input type="hidden" value="<?php echo($row['Name']); ?>"  name="name"/>

                                                  <input type="hidden" value="<?php echo($row['Email']); ?>"  name="email"/>

                                                  <input type="hidden" value="<?php echo($row['ContactID']); ?>"  name="contactid"/>

                                                  <input type="hidden" value="<?php echo($row['Need']); ?>"  name="need"/>

                                                  <input type="submit" value="Update" name="updtvlue" class="buttonAction updateBtn"/>
                                              </form>
                                          </td>
                                          <td>  
                                          
                                              <form action="deleteContactUs.php" method="POST"> 
                                                  <input type="hidden" value="<?php echo($row['ContactID']); ?>"  name="ContactID"/>

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