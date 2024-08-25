
<!--IT23171992 J K C T Jayawardhana-->
<?php session_start(); ?>

<html>
    <head>
        <title>
            Contact Us Page - PetPulse Care Hub
        </title>
        <link rel="stylesheet" href="css/contactUs.css">
        <script src="script.js"></script>
    </head>
    <?php include 'header.php' ?>
    <body>
            <div id="container1">
            <h1 id="t1">Contact Us Page</h1>
            </div>
            
            <div class="container2">
                <div class="p1">
                    <h2>Contact Us </h2>
                    <img src="images/old-typical-phone.png" width="30%">
                    <h3>Telephone No :<br><br>
                011-123 1234<br>
                011-123 1235<br>
                011-123 1236</h3>
                </div>
                <div class="p2">
                    <h2>Visit Us</h2>
                    <img src="images/location-mark (1).png" width="30%">
                    <h3>Address :<br><br>
                No.50,<br>
                D.Silva road<br>
                Colombo 10. </h3>
                </div>
                <div class="p3">
                    <h2>Follow Us</h2>  
                    <h3><img src="images/social-media.png" width="30%"><br><br>
                                    <img src="images/facebook1.png" id="fb" alt="fb">   PetPulse Care Hub <br>
                <img src="images/instagram1.png" id="insta" alt="insta">PetPulse_Care_Hub  <br>
                <img src="images/twitter1.png" id="twitter" alt="twitter">   PetPulse Care Hub</h3>
                </div>
            </div>

            <div class="container3">
                <div class="c3p1">
                    <img src="images/5124556.jpg" width="100%">
                </div>
                <div class="c3p2">
                    <h1>Contact Form</h1>
                    <form method="post" action="insertContactUs.php"><h3>
                        <label for="fullName">Name : </label> <br></h3>
                        <input type="text" id="fullName" name="Name" required><br><br>

                        <h3><label for="email : ">E-mail : </label> <br></h3>
                        <input type="email" id="email" name="Email" required> <br><br>

                        <h3>Select your need :  <br></h3><br>
                        <input type="radio" id="editApp" name="Need" value="editApp">

                        <label for="editApp">Edit Appointment </label> <br>
                        <input type="radio" id="editApp" name="Need" value="More Information">

                        <label for="moreInfo">More Information</label><br>
                        <input type="radio" id="editApp" name="Need" value="Customer Support">

                        <label for="moreInfo">Customer Support</label><br>
                        <input type="radio" id="editApp" name="Need" value="Feedback and sugestions">

                        <label for="moreInfo">Feedback and sugestions</label><br>
                        <input type="radio" id="editApp" name="Need" value="Partnerships and collaborations"> 

                        <label for="moreInfo">Partnerships and collaborations</label><br><br>

                        <h3><label for="des">What can we help you with : </label><br></h3>

                        <input type="text" id="des" name="FurInfo"><br><br>

                        <button type="submit">Submit</button></h3>
                    </form>
                </div>
            </div>
        
    </body>
    <?php include 'footer.php' ?>
</html>