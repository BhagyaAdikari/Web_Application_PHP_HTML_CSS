<!--IT 23241732 A M K B  Adikari-->


<?php
  session_start();

  if (!isset($_SESSION["UserName"])) {
    echo "<script type='text/javascript'>alert('Please Login to Continue!');
            window.location='userLogin.php';</script>";
    exit;
  }
?>

<html>
    <head>
        <title>Appointment Page - PetPulse Care Hub </title>
        <link rel="stylesheet" href="css/appointment.css">
        <script src="script.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="container1">
                <div class="p1">
                    <img src="images/image.jpeg" width="100%">
                </div>
                <div class="p2">
                    <h1>Appointment Form</h1>
                    <form action="insertAppointment.php" method="POST">
                        <div class="perinfo">
                       
                            <div class="q1">
                                <h3><label>Service Type : <br></h3>
                                    <input type="checkbox" id="" name="Type" value="Pet Health">
                                    <label for="Pet Health">Pet Health</label>
                                    <input type="checkbox" id="" name="Type" value="Training Tips">
                                    <label for="Training Tips">Training Tipsa</label><br>
                                    <input type="checkbox" id="" name="Type" value="Pet Behaviour">
                                    <label for="Pet Behaviour">Pet Behaviour</label>
                                    <input type="checkbox" id="" name="Type" value="Pet Care">
                                    <label for="Pet Care">Pet Care</label><br>
                                    <input type="checkbox" id="" name="Type" value="DIY Pet Enrichment">
                                    <label for="DIY Pet Enrichment">DIY Pet Enrichment</label>
                                    <input type="checkbox" id="" name="" value="Pet training">
                                    <label for="Pet training">Pet training</label><br>
                                    <input type="checkbox" id="" name="Type" value="Vetenary Services">
                                    <label for="Vetenary Services">Vetenary Services</label><br><br>
                                </label>
                            </div>
                            <div class="q1">
                                <h3><label for="Attachments">Appointment Date :</label>  <br>     </h3>   
                                    <input type="date" id="" name="Date" value=""><br><br>
                            </div>
                            <div class="q1">                        
                                    <h3><label for="Further Information">Further Information :</label>       <br></h3>
                                    <input type="text" id="Further Information" name="FurInfo" value="Further Information"><br>    <br>                 
                            </div>
                            
                            
                            <input type="submit" value="Submit" id="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>