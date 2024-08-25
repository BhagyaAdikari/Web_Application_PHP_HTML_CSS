<!--IT 23241732 A M K B Adikari-->

<html>
    <head>
        <title>
            Promotions Page - PetPulse Care Hub
        </title>
        <link rel="stylesheet" href="css/promotionreadstyle.css">
        <script src="js/orderManagement.js"></script>
    </head>
    <?php include 'header.php' ?>
    <body>

    <div id="container1">
            <h1 id="t1">Promotions Page</h1>
            <div class="container2">

    <?php

require 'config.php';
                
$sqlRead="SELECT PromoTitle,PromoID,PromoContent,Image,PromoCode FROM promotions";

$resultReading=$con->query($sqlRead);

if($resultReading->num_rows>0){

    $count=0;
 
  while($row=$resultReading->fetch_assoc()){ ?>

        
                <div class="p1">
                    <img src="images/promotionImages/<?php echo ($row['Image'])?>" width="100%">
                    <h3><?php echo($row['PromoTitle'])?> </h3>
                    <?php echo($row['PromoContent'])?>
                    <br><br><button>Promo Code : <?php echo($row['PromoCode'])?></button>
                </div>
               <?php 
                    
                    $count++;
        if ($count % 3 == 0) {
            echo "</div></div>";
            echo "<div class='container2'>";
        }
            
            }} ?>
            
           
            </div>
        </div>
    </body>
    <?php include 'footer.php' ?>
</html>