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
    <title>Admin Dashboard - Appointment Management</title>
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

        <h1 id="title">Appointment Management</h1>
          <hr>

        <!--Add order form section and data reading as a table from data base-->
        <div class="addRevision">


                            <button onclick="showForm('form1')" class="OMbtn">Insert Appointment</button>



                                  <div id="form1">

                                  <fieldset>
                                    <legend>Data Insert form</legend>

                                    <form method="POST" action="insertAdminAppointment.php" class="form">
                                      <label>User ID :</label><br>
                                      <input type="text" name="userid" maxlength="10" class="OMform"><br><br>

                                      <label>Service ID :</label><br>
                                      <input type="text" name="serviceid" maxlength="10" class="OMform"><br><br>

                                      <label>Service Type :</label><br>
                                      <input type="text" name="Type" maxlength="10" class="OMform"><br><br>

                                      <label>Appointment Date :</label><br>
                                      <input type="date" name="Date" class="OMform"><br><br>

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

                                      $UserID = $_POST['UserID'];
                                      $AppID = $_POST['AppID'];
                                      $Type = $_POST['Type'];
                                      $Date = $_POST['Date'];
                                      $FurInfo = $_POST['FurInfo'];
                                    }

                                    
                                    ?>

                                    <form method="POST" action="updateAppointment.php" class="form">
                                      <label>User ID :</label><br>
                                      <input type="text" value="<?php echo($UserID);?>" readonly><br><br>

                                      <label>Service Type :</label><br>
                                      <input type="text" name="type" class="OMform" value="<?php echo($Type);?>"><br><br>

                                      <label>Appointment Date :</label><br>
                                      <input type="date" name="Date" class="OMform" value="<?php echo($Date);?>"><br><br>

                                      <label>Further Information :</label><br>
                                      <input type="text" name="furinfo" class="OMform" value="<?php echo($FurInfo);?>"><br><br>

                                      <label>Appointment ID :</label><br>
                                      <input type="text" name="appid" class="OMform" value="<?php echo($AppID);?>" readonly><br><br>

                                      <input type="submit" value="edit" name="edt" class="frmBtn">
                                    </form>
                                  </fieldset>
                                  </div>


                                  <!--Reading database data-->

                                  <table>
                                  <tr>
                                    <th>User ID</th>
                                    <th>App ID</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>FurInfo</th>
                                    <th colspan=2>Action</th>
                                    
                                  </tr>

                                  

                                  <?php

                                  require 'config.php';

                                  $sqlRead="SELECT UserID,AppID, Type, Date, FurInfo FROM appointment";

                                  $resultReading=$con->query($sqlRead);

                                  if($resultReading->num_rows>0){
                                    //reading
                                    while($row=$resultReading->fetch_assoc()){
                                      ?>
                                        <tr>
                                          <td> <?php echo($row['UserID']); ?></td>
                                          <td> <?php echo($row['AppID']); ?></td>
                                          <td> <?php echo($row['Type']); ?></td>
                                          <td> <?php echo($row['Date']); ?></td>
                                          <td> <?php echo($row['FurInfo']); ?></td>
                                          
                                          <td> 
  
                                              <form action="" method="POST"> 
                                                <input type="hidden" value="<?php echo($row['UserID']);?>" name="UserID" class="OMform">

                                                <input type="hidden" value="<?php echo($row['Type']);?>" name="Type" class="OMform">

                                                <input type="hidden" value="<?php echo($row['Date']);?>" name="Date" class="OMform">
                                              
                                                <input type="hidden" value="<?php echo($row['FurInfo']);?>" name="FurInfo" class="OMform">
                                              
                                                <input type="hidden" name="AppID" value="<?php echo($row['AppID']); ?>" class="OMform">
                                             

                                                  <input type="submit" value="Update" name="updtvlue" class="buttonAction updateBtn"/>
                                              </form>
                                          </td>
                                          <td>  
                                          
                                              <form action="deleteAppointment.php" method="POST"> 
                                                  <input type="hidden" value="<?php echo($row['AppID']); ?>"  name="appid"/>

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