
<!--IT23323070 T S S Kumara-->
<?php
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Shop- PetPulse Care Hub
        </title>
        <link rel="stylesheet" href="css/service.css">
    </head>

    <?php include 'header.php' ?>

    <body>

        <div class="container">
        
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

           <img src="images/serviceCover.jpeg" width="100%">
           
        </div>
           
           <div class="container3">
            
          
      
                <?php

                    require 'config.php';

                    $sqlRead="SELECT ServiceID ,ServiceName,Description,Price,Type,Image FROM service " ;


                    $resultReading=$con->query($sqlRead);

                    if($resultReading->num_rows>0){
                    
                        $count=0;

                    while($row=$resultReading->fetch_assoc()){
                        $row['ServiceID'];
                    
                        $_SESSION["ServiceID"]=$count;
                        
                                ?>

                    <div class="p1">

                    <div class="itemPic" style="background-image:url('images/serviceItemImages/<?php echo $row['Image']; ?>'); width: 200px; height: 200px; background-size: cover; text-align:center;margin:auto;"></div>
  

                            <h3><?php echo($row['ServiceName']); ?> </h3>
                            <p><?php echo "Rs.".($row['Price']).".00"; ?></p>
                            
                            
                            <br><br><button class="b2"><a href="singleService.php?ServiceID=<?php echo($row['ServiceID']); ?>">Select</a></button>
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

    <?php include 'footer.php' ?>
</html>    
















