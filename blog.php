<!--IT 23241732 A M K B Adikari-->

<?php
  session_start();
?>

<script>
    alert ("Welcome to Blog - PetPulse Care Hub ");

    function leaveFunction()
    {
    return "You will leave this page !!!";
    }
</script>

<!DOCTYPE html>
<html>
    <?php include 'header.php' ?>
    <head>
        <title>
            Blog - PetPulse Care Hub
        </title>
        <link rel="stylesheet" href="css/blog.css">
    </head>
    <body onbeforeunload="return leaveFunction()">
        <div class="container">
           <h1 id="t1">Blog Page - PetPulse Care Hub</h1>
           <div class="container1">
            
            <div class="c1p1">
                <img src="images/red-white-cat-i-white-studio.jpg" width="100%">
                
            </div>
            <div class="c1p2">
                
                <h1 id="cate">Categories</h1><br>
                <button class="b1"><a href="blog.php?Tag=Pet Health">Pet Health</a></button><br><br>
                <button class="b1"><a href="blog.php?Tag=Pet Adoption">Pet Adoption</a></button><br><br>
                <button class="b1"><a href="blog.php?Tag=Pet Isolation">Pet Isolation</a></button><br><br>
                <button class="b1"><a href="blog.php?Tag=Vet. Help">Vet. Help</a></button>

            <p>
               
                            </p>
                            </div>
                            </div>
                        
                        <div class="container3">
                            
                        
      
                            <?php

                            require 'config.php';

                            $sqlRead="SELECT UserID,BlogTitle,Content,Preview,Image1,Image2,PostID FROM blog";


                            $resultReading=$con->query($sqlRead);

                            if($resultReading->num_rows>0){
                            
                                $count=0;

                            while($row=$resultReading->fetch_assoc()){
                            
                                $_SESSION["Post"]=$count;
                        
                                ?>

                            <div class="p1">
                                    <img src="images/BlogImages/BlogImages1/<?php echo($row['Image1']); ?>" width="100%">
                                    <h3><?php echo($row['BlogTitle']); ?> </h3>
                                    <?php echo($row['Preview']); ?>
                                    <br><br><button class="b2"><a href="singleBlogPage.php?postid=<?php echo($row['PostID']); ?>">Read blog post</a></button>
                                </div>

                                <?php 
                            
                            $count++;
                            if ($count % 3 == 0) {
                                echo "</div>";
                                echo "<div class='container3'>";
                            }
                            
                            }}?>

        </div>

        <div class ="writeBlog">
            <div class="w_p1">
            <img src="images/asd.jpeg" width=100%>
            </div>
            <div class="w_p2">
                <h2>🐾 Join PetPulse's community of pet lovers! Share your expertise and passion for furry friends by contributing to our blog. Whether it's health tips, training tricks, or heartwarming tales, your words can make tails wag. Let's create a pawsitive impact together! 🐾
                <br><br>
                <button class="b2"> <a href="bloguserwrite.php">Share your thoughts</a></button></h2>
            </div>
        </div>
    </div>


    
    

    </body>
    <?php include 'footer.php' ?>
</html>    
















