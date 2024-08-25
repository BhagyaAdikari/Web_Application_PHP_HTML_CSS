
<!--IT 23241732 A M K B Adikari-->

<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <?php include 'header.php'?>
    <head>
        <title>
            Blog Post - PetPulse Care Hub
        </title>
        <link rel="stylesheet" href="css/blog.css">
    </head>
    <body>
        <div class="container">
           <h1 id="t1">Blog Post Page - PetPulse Care Hub</h1>

           <?php

            require 'config.php';

            $sqlRead="SELECT UserID,BlogTitle,PostID,Content,Preview,Image1,Image2 FROM blog WHERE PostID={$_GET['postid']}";


            $resultReading=$con->query($sqlRead);

            if($resultReading->num_rows>0){
            
            

            while($row=$resultReading->fetch_assoc()){
            
                
                
                        ?>

                    <div class="container1">
                        
                        <div class="c1p1">
                            <img src="images/BlogImages/BlogImages1/<?php echo($row['Image1']); ?>" width="100%">
                            <br><br><h1><?php echo($row['BlogTitle']); ?></h1><br>
                        </div>
                        <div class="c1p2">
                            
                            
                            <?php echo($row['Content']); ?>
                        </div>
                        </div>
                        
                        <?php
                        
            }}?>

        


        
    </div></div>
    
    

    </body>

    <?php include 'footer.php'?>
</html>    
















