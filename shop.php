<!--IT23319592 K N L P Aravinda-->

<?php
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Shop- PetPulse Care Hub
        </title>
        <link rel="stylesheet" href="css/shop.css">
    </head>

    <?php include 'header.php'?>
    <body>
    
    <?php
    if(!isset($_SESSION['UserName'])){
    ?>
        <h1 id="greeting">Hello</h1>
    <?php
    }

    else{
    ?>
        <h1 id="greeting"><?php echo "Hello , ".$_SESSION['UserName']." !"; ?></h1>
    <?php
    }
    ?>

        <div class="container">
           <img src="images/shopimg.jpg" width="100%">
        </div>
           
           <div class="container3">
            
          
      
                <?php

                    require 'config.php';

                    $sqlRead="SELECT ItemID ,ItemName,Description,Price,Availability,Type,Image FROM shop " ;


                    $resultReading=$con->query($sqlRead);

                    if($resultReading->num_rows>0){
                    
                        $count=0;

                    while($row=$resultReading->fetch_assoc()){
                        $row['ItemID'];
                    
                        $_SESSION["ItemID"]=$count;
                        
                                ?>

                    <div class="p1">

                    <div class="itemPic" style="background-image:url('images/shopItemImages/<?php echo $row['Image']; ?>'); width: 200px; height: 200px; background-size: cover; text-align:center;margin:auto;"></div>
  

                            <h3><?php echo($row['ItemName']); ?> </h3>
                            <p><?php echo "Rs.".($row['Price']).".00"; ?></p>
                            <button id="ava" ><?php echo($row['Availability']); ?></button>
                            
                            <br><br><button class="b2"><a href="singleShopItem.php?Item_Id=<?php echo($row['ItemID']); ?>">Select</a></button>
                        </div>

                        <?php 
                    
                    $count++;
                    if ($count % 3 == 0) {
                        echo "</div>";
                    echo "<div class='container3'>";
                    }
                    
                }}?>
                
        </div>
    
    
    

    </body>

    <?php include 'footer.php'?>
</html>    
















