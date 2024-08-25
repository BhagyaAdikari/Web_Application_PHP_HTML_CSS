<!--IT23190320 W A H N Deshani-->
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
    <title>Admin Dashboard - User Management</title>
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

        <h1 id="title">User Management</h1>
          <hr>

        <!--Add order form section and data reading as a table from data base-->
        <div class="addRevision">


                            <button onclick="showForm('form1')"  class="OMbtn">Insert Users</button>

                            

                                  <div id="form1">

                                  <fieldset>
                                    <legend>Data Insert form</legend>

                                    <form method="POST" action="insertUserDetails.php" class="form" enctype="multipart/form-data">
                                      <label>First Name :</label><br>
                                      <input type="text" name="fisrtname" class="OMform"><br><br>

                                      <label>Last Name :</label><br>
                                      <input type="text" name="lastname" class="OMform"><br><br>

                                      <label>Mobile :</label><br>
                                      <input type="text" name="mobile" class="OMform"><br><br>

                                      <label>Gender :</label><br>
                                      <input type="radio" name="gender" value="male" class="OMform">Male<br>
                                      <input type="radio" name="gender"  value="female" class="OMform">Female<br><br>

                                      <label>Email :</label><br>
                                      <input type="email" name="email"  class="OMform"><br><br>

                                      <label>User Name :</label><br>
                                      <input type="text" name="username" class="OMform"><br><br>

                                      <label>Password :</label><br>
                                      <input type="text" name="password" class="OMform"><br><br>

                                      <label>Re enter password :</label><br>
                                      <input type="text" name="repeatpassword" class="OMform"><br><br>
                                      

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

                                      $FirstName = $_POST['fisrtname'];
                                      $UserID = $_POST['userid'];
                                      $LastName = $_POST['lastname'];
                                      $Mobile = $_POST['mobile'];
                                      $UserName = $_POST['userName'];
                                      $Password = $_POST['password'];
                                     
                                    }

                                    
                                    ?>

                                    <form method="POST" action="updateUserdetails.php" class="form">
                                      <label>UserID</label><br>
                                      <input type="text" name="userid" value="<?php echo($UserID);?>" class="OMform" readonly><br><br>
                                    
                                      <label>First Name :</label><br>
                                      <input type="text" name="fisrtname" value="<?php echo($FirstName);?>" class="OMform"><br><br>

                                      <label>Last Name :</label><br>
                                      <input type="text" name="lastname" value="<?php echo($LastName);?>" class="OMform"><br><br>

                                      <label>Mobile :</label><br>
                                      <input type="text" name="mobile" value="<?php echo($Mobile);?>" class="OMform"><br><br>

                                      <label>User Name :</label><br>
                                      <input type="text" name="username" value="<?php echo($UserName);?>" value="male" class="OMform"><br>

                                      <label>Password :</label><br>
                                      <input type="text" name="password" value="<?php echo($Password);?>" class="OMform"><br><br>

                                      <input type="submit" value="edit" name="edt" class="frmBtn">
                                    </form>
                                  </fieldset>
                                  </div>


                                  <!--Reading database data-->

                                  <table>
                                  <tr>
                                    <th>UserID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Mobile</th>
                                    <th>User Name</th>
                                    <th>Password</th>
                                    <th colspan=2>Action</th>
                                  </tr>

                                  

                                  <?php

                                  require 'config.php';

                                  $sqlRead="SELECT UserID,FisrtName,LastName,Mobile,UserName,Password FROM users";

                                  $resultReading=$con->query($sqlRead);

                                  if($resultReading->num_rows>0){
                                    //reading
                                    while($row=$resultReading->fetch_assoc()){
                                      ?>
                                        <tr>
                                        <td><?php echo($row['UserID']); ?></td>
                                        <td><?php echo($row['FisrtName']); ?></td>
                                        <td><?php echo($row['LastName']); ?></td>
                                        <td><?php echo($row['Mobile']); ?></td>
                                        <td><?php echo($row['UserName']); ?></td>
                                        <td><?php echo($row['Password']); ?></td>                                       
                                        <td> 

                                    
                                    
                                                       
                                                    
                                             
                                              <form action="" method="POST"> 
                                                <input type="hidden" value="<?php echo($row['UserID']); ?>"  name="userid"/>
                                                <input type="hidden" value="<?php echo($row['FisrtName']); ?>"  name="fisrtname"/>
                                                <input type="hidden" value="<?php echo($row['LastName']); ?>"  name="lastname"/>
                                                <input type="hidden" value="<?php echo($row['Mobile']); ?>"  name="mobile"/>
                                                <input type="hidden" value="<?php echo($row['UserName']); ?>"  name="userName"/>
                                                <input type="hidden" value="<?php echo($row['Password']); ?>"  name="password"/>
                                                <input type="submit" value="Update" name="updtvlue" class="buttonAction updateBtn"/>
                                              </form>


                                          </td>
                                          <td>  
                                          
                                              <form action="DeleteUserDetails.php" method="POST"> 
                                                  <input type="hidden" value="<?php echo($row['UserID']); ?>"  name="userid"/>

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