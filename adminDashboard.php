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
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin.css">

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


              <img src="images/userN.png" alt="user">

          </div>

        </div>

        <!--Cards-->
        <div class="cardBox">

          <div class="card">
            <div>
                  <?php
                      require 'config.php';

                      $sales="SELECT COUNT(OrderID) AS userCount FROM orderdetails";

                      $salesCount=$con->query($sales);

                      if($salesCount->num_rows>0){
                        $row=$salesCount->fetch_assoc();
                        $totalBuyers = $row['userCount'];
                      }else{
                        $totalSales=0;
                      }
                ?>
                <div class="numbers"><?php echo($totalBuyers);?></div>
                <div class="cardName">Buyers Count</div>
            </div>

            <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
          </div>

          <div class="card">
                <div>
                    <?php
                      require 'config.php';

                      $sales="SELECT COUNT(OrderID) AS count FROM orderdetails";

                      $salesCount=$con->query($sales);

                      if($salesCount->num_rows>0){
                        $row=$salesCount->fetch_assoc();
                        $totalEarnings = $row['count'];
                      }else{
                        $totalSales=0;
                      }
                    ?>
                    <div class="numbers"><?php echo($totalEarnings);?></div>
                    <div class="cardName">Sales</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
          </div>

          <div class="card">
                <div>
                    <?php
                      require 'config.php';

                      $blog="SELECT SUM(PostID) AS total_blogs FROM blog";

                      $blogsResult=$con->query($blog);

                      if($blogsResult->num_rows>0){
                        $row=$blogsResult->fetch_assoc();
                        $totalBlogs = $row['total_blogs'];
                      }else{
                        $totalSales=0;
                      }
                    ?>

                    <div class="numbers"><?php echo ($totalBlogs); ?></div>
                    <div class="cardName">Blogs</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
          </div>

          <div class="card">
                <div>

                    <?php
                      require 'config.php';

                      $sales="SELECT SUM(Price) AS total_earnings FROM shop";

                      $salesResult=$con->query($sales);

                      if($salesResult->num_rows>0){
                        $row=$salesResult->fetch_assoc();
                        $totalEarnings = $row['total_earnings'];
                      }else{
                        $totalSales=0;
                      }
                    ?>

                    <div class="numbers"><?php echo "Rs.".number_format($totalEarnings, 2); ?></div>
                    <div class="cardName">Earnings</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
          </div>
          
        </div><!--End of the card section-->

        <!--Chart section for shop items-->
        <div class="charts">

          <div class="charts-card">
            <p class="chart-title">Recent Orders</p>
            <div id="bar-chart">
              <table id="Products">
                <tr>
                  <th>Item ID</th>
                  <th>Item Name</th>
                  <th>Order Status</th>
                </tr>

                <?php
                  require 'config.php';
                  
                  $sqlRead = "SELECT OrderID,ItemName,Status FROM orderdetails LIMIT 5";
                  
                  $result = $con->query($sqlRead);
                  
                  if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                ?>

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


                        <tr>
                          <td><?php echo ($row['OrderID']); ?></td>
                          <td><?php echo ($row['ItemName']); ?></td>
                          <td class="status <?php echo $statusClass;?>"><?php echo ($row['Status']); ?></td>
                        </tr>

                <?php
                      }
                  } else {
                      echo "No data in database";
                  }
                ?>


               
              </table>
            </div>
          </div>

          <div class="charts-card">
            <p class="chart-title">Top 5 Payment Methods</p>
            <div id="area-chart">
            <table id="Products">
                <tr>
                  <th>Payment Method</th>
                </tr>

                <?php
                  require 'config.php';
                  
                  $sqlRead = "SELECT CardType FROM payment LIMIT 5";
                  
                  $result = $con->query($sqlRead);
                  
                  if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                ?>

                        <tr>
                          <td><?php echo ($row['CardType']); ?></td>
                        </tr>

                <?php
                      }
                  } else {
                      echo "No data in database";
                  }
                ?>


               
              </table>
            </div>
          </div>

        </div><!--end of the chart section of shop items-->

        <!--Chart section for service items-->
        <div class="charts">

          <div class="charts-card">
            <p class="chart-title">Recent Services</p>
            <div id="bar-chart">
              <table id="Products">
                <tr>
                  <th>Service ID</th>
                  <th> Appointment Type</th>
                </tr>

                <?php
                  require 'config.php';
                  
                  $sqlRead = "SELECT ServiceID,Type FROM appointment LIMIT 5";
                  
                  $result = $con->query($sqlRead);
                  
                  if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                ?>

                        <tr>
                          <td><?php echo ($row['ServiceID']); ?></td>
                          <td><?php echo ($row['Type']); ?></td>
                        </tr>

                <?php
                      }
                  } else {
                      echo "No data in database";
                  }
                ?>


               
              </table>
            </div>
          </div>

          <div class="charts-card">
            <p class="chart-title">Recent Blogs</p>
            <div id="area-chart">
            <table id="Products">
                <tr>
                  <th>Post ID</th>
                  <th>Blog Title</th>
                </tr>

                <?php
                  require 'config.php';
                  
                  $sqlRead = "SELECT PostID,BlogTitle FROM blog LIMIT 5";
                  
                  $result = $con->query($sqlRead);
                  
                  if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                ?>

                        <tr>
                          <td><?php echo ($row['PostID']); ?></td>
                          <td><?php echo ($row['BlogTitle']); ?></td>
                        </tr>

                <?php
                      }
                  } else {
                      echo "No data in database";
                  }
                ?>


               
              </table>
            </div>
          </div>

        </div><!--end of the chart section of shop items-->


      </div><!--End of the main panel-->

    </div>

    <!--ionicons (import icons)-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Custom JS -->
    <script src="js/admin.js"></script>

  </body>
</html>