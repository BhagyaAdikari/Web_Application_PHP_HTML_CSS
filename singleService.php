<!--IT23323070 T S S Kumara-->

<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
        <title>
            Shop Item Page - PetPulse Care Hub
        </title>
        <link rel="stylesheet" href="css/service.css">
</head>

<?php include 'header.php' ?>
    <body>
        <div class="container">
           <img src="">
        </div>
           <?php

            require 'config.php';

            $ServiceID = intval($_GET['ServiceID']);
            $sqlRead = "SELECT ServiceID, ServiceName, Description, Price,Type, Image FROM service WHERE ServiceID=$ServiceID";


            $resultReading=$con->query($sqlRead);

            if($resultReading->num_rows>0){
            
            

            while($row=$resultReading->fetch_assoc()){
            
                
                
                        ?>

                    <div class="container1-SP">
                        
                        <div class="Product-Image">
                            <div class="itemPic" style="background-image:url('images/serviceItemImages/<?php echo $row['Image']; ?>'); width: 400px; height: 400px; background-size: cover; text-align:center;margin:auto;"></div>     
                        </div>
                        <div class="Product-details">
                            
                            <h1 class="itemName"><?php echo($row['ServiceName']); ?></h1><br>
                            <p class="description"><?php echo($row['Description']); ?></p>
                            
                            <p class="Price"><?php echo "Rs".($row['Price']).".00"; ?></p>
                            <button class="payButton" onclick="goPayment()">Make a appointment</button>
                        </div>

                    </div>
                    
                        <?php
                        
                    }
                
                }
                    
                    ?>  

    </body>

    <script>
        function goPayment(){
            window.location.href='addappointment.php';
        }
    </script>

    <?php include 'footer.php' ?>
</html>    
















