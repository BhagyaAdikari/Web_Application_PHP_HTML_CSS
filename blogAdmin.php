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

        <h1 id="title">Blog Management</h1>
          <hr>

        <!--Add order form section and data reading as a table from data base-->
        <div class="addRevision">


                            <button onclick="showForm('form1')"  class="OMbtn">Insert Blog</button>

                            

                                  <div id="form1">

                                  <fieldset>
                                    <legend>Data Insert form</legend>

                                    <form method="POST" action="insertBlog.php" class="form" enctype="multipart/form-data">
                                      <label>User ID :</label><br>
                                      <input type="text" name="UserID" class="OMform"><br><br>

                                      <label>Blog Title :</label><br>
                                      <input type="text" name="BlogTitle" class="OMform"><br><br>

                                      <label>Tags :</label><br>
                                      <input type="text" name="Tag"  class="OMform"><br><br>

                                      <label>Preview Text :</label><br>
                                      <input type="text" name="PreviewText"  class="OMform"><br><br>

                                      <label>Post Content :</label><br>
                                      <input type="text" name="PostContent" class="OMform"><br><br>

                                      <label>Attachment 01 :</label><br>
                                      <input type="file" name="image1" class="OMform"><br><br>

                                      <label>Attachment 02 :</label><br>
                                      <input type="file" name="image2" class="OMform"><br><br>

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

                                        $PostID = $_POST['PostID'];
                                        $BlogTitle = $_POST['BlogTitle'];
                                        $PostContent = $_POST['Content'];
                                   
                                    }

                                    
                                    ?>

                                    <form method="POST" action="updateBlog.php" class="form" enctype="multipart/form-data">
                                    <label>Post ID :</label><br>
                                    
                                      <input type="text" name="PostID" class="OMform" value="<?php echo($PostID);?>" readonly><br><br>

                                      <label>Blog Title :</label><br>
                                      <input type="text" name="BlogTitle" class="OMform" value="<?php echo($BlogTitle);?>"><br><br>

                                      <label>Post Content :</label><br>
                                      <input type="text" name="Content" class="OMform" value="<?php echo($PostContent);?>"><br><br>

                                      <input type="submit" value="edit" name="edt" class="frmBtn">

                                    </form>
                                  </fieldset>
                                  </div>


                                  <!--Reading database data-->

                                  <table>
                                  <tr>
                                  <th>UserID</th>
                                    <th>BlogTitle</th>
                                    <th>Tag</th>
                                    
                                    <th colspan=2>Action</th>
                                  </tr>

                                  

                                  <?php

                                  require 'config.php';

                                  $sqlRead="SELECT UserID,BlogTitle,Content,PostID FROM blog";

                                  $resultReading=$con->query($sqlRead);

                                  if($resultReading->num_rows>0){
                                    //reading
                                    while($row=$resultReading->fetch_assoc()){
                                      ?>
                                        <tr>
                                        <td> <?php echo($row['UserID']); ?></td>
                                          <td> <?php echo($row['BlogTitle']); ?> </td>
                                          <td> <?php echo($row['Content']); ?></td>
                                         
                                          
                                          <td>
                                            <div class="orderActionChanger">

                                              </form>
                                            <div>
                                          <td>
                                          <form action="" method="POST"> 
                                                  <input type="hidden" value="<?php echo($row['PostID']); ?>"  name="PostID"/>

                                                  <input type="hidden" value="<?php echo($row['BlogTitle']); ?>"  name="BlogTitle"/>

                                                  <input type="hidden" value="<?php echo($row['Content']); ?>"  name="Content"/>

                                                  <input type="submit" value="Update" name="updtvlue" class="buttonAction updateBtn"/>
                                              </form>
                                      
                                          
                                              <form action="deleteBlog.php" method="POST">
                                                  <input type="hidden" value="<?php echo($row['PostID']); ?>"  name="PostID"/>

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


