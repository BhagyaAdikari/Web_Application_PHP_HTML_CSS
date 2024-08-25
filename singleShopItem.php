
<!--IT23319592 K N L P Aravinda-->
<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
        <title>
            Shop Item Page - PetPulse Care Hub
        </title>
        <link rel="stylesheet" href="css/shop.css">
</head>
<?php include 'header.php'?>
    <body>
        <div class="container">
           <img src="">
        </div>
           <?php

            require 'config.php';

            $itemID = intval($_GET['Item_Id']);
            $sqlRead = "SELECT ItemID, ItemName, Description, Price, Availability, Type, Image FROM shop WHERE ItemID=$itemID";


            $resultReading=$con->query($sqlRead);

            if($resultReading->num_rows>0){
            
            

            while($row=$resultReading->fetch_assoc()){
            
                $_SESSION['ItemID']=$row['ItemID'];
                $_SESSION['ItemName']=$row['ItemName'];
                $_SESSION['Price']=$row['Price'];
                
                        ?>

                    <div class="container1-SP">
                        
                        <div class="Product-Image">
                            <div class="itemPic" style="background-image:url('images/shopItemImages/<?php echo $row['Image']; ?>'); width: 400px; height: 400px; background-size: cover; text-align:center;margin:auto;"></div>     
                        </div>
                        <div class="Product-details">
                            
                            <h1 class="itemName"><?php echo($row['ItemName']); ?></h1><br>
                            <p class="description"><?php echo($row['Description']); ?></p>
                            
                            <p class="Price"><?php echo "Rs".($row['Price']).".00"; ?></p>
                            <button class="payButton" onclick="goPayment()">Pay Now</button>
                        </div>

                    </div>
                    
                        <?php
                        
                    }
                
                }
                    
                    ?>  

    </body>

    <script>
        function goPayment(){
            window.location.href='Payment.php';
        }
    </script>
    
    

    <?php include 'footer.php'?>
</html>    
















