<!-- IT23171992 Tharanga Jayawardhana-->
<?php
  session_start();
?>
<!DOCTYPE html>

  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-PetPulse Care Center</title>
    <link rel="stylesheet" href="css/index.css">

  </head>

  

  <body>

    </div><div class="preloader">
        <img src="images/new-logo.png" alt="Company Logo" class="logo">
        <div class="loader"></div>
    </div>

   

    <div class="container">
    
      <?php include 'header.php';?>
      <!--Division 1 of container-->
      <div class="row">

        <div class="col">
          <h3 class="welcome">Welcome to,</h3>
          <h4 class="company-name">PetPulse Care Hub</h4>
          <p class="company-slogan">Your pet's well-being is our commitment, around the clock.</p>
        </div>

      </div>
    </div>
      <!--creating cards-->
      <div class="container-2">
        
        <h4 id="pet-care-services">Our Professional Services</h4>
        <h2 id="pet-care-services-2">Best Pet Care Services</h2>

        <div class="row row2">

          <div class="card">
  
            <div class="card-image card-image1">
            </div>
  
            <h3 class="card-title">24x7 Emergancy Services</h3>
            <p class="card-phara">When emergencies happen, trust Surathala pet care center to be there for you and your furry family member.</p>
    
          </div>
          
          <div class="card">
  
            <div class="card-image card-image2">
            </div>
  
            <h3 class="card-title">Pet Shop & Pharmacy</h3>
            <p class="card-phara">Trust us to provide the products and medications your pet needs to live their best life, all under one roof.</p>
    
          </div>
  
          <div class="card">
  
            <div class="card-image card-image3">
            </div>
  
            <h3 class="card-title">Advanced technological labs</h3>
            <p class="card-phara">Experience the difference advanced laboratory services can make in your pet's care.</p>
    
          </div>
  
          <div class="card">
  
            <div class="card-image card-image4">
            </div>
  
            <h3 class="card-title">Online Consultations</h3>
            <p class="card-phara">Experience the convenience of online consultations with Surathala pet care center, your trusted partner in pet health.</p>
    
          </div>
          <!--End of the card creating-->
        </div>
      </div>


      <!--Anesthesia plan-->

      <div class="row3">
        
          <div class="anesthesia-img">
          
          </div>
  
          <div class="anesthesia-article">

            <div class="article-header">
              <h3>Importance of vaccinating your pet</h3>
            </div>

            <div class="article-phara">
              <p> 
                Pet vaccination safeguards pets from deadly diseases, ensuring <br>well-being by reducing illness and suffering through protection from harmful viruses and bacteria.<br><br>
                
              
                Routine pet vaccinations prevent spreading diseases from pets to humans, creating safer environments for families and communities by ensuring pets are vaccinated.<br><br>
                
                Ultimately, pet vaccination is crucial for responsible ownership, safeguarding pets' well-being and promoting health and harmony within households.<br><br>
              </p>

              <div class="article-btn">
                <button id="btn1" onclick="loadService()">Make an appointment</button>
              </div>
            </div>

          </div>

      </div>

      <!--Welfare works-->

      <div class="container-3">
        <h1 class="social-title">
          Pet Welfare Initiative
        </h1>

        <p id="social-para">Introducing PetPulse Pet Care Center's innovative pet welfare initiative! Committed to enhancing the well-being of our furry friends, we provide<br> comprehensive care and support. From advanced medical treatments to personalized attention, we prioritize pets' health and happiness,<br> ensuring they thrive in a nurturing and compassionate environment.
        </p>

        
        
        <div class="slider">
          <div class="list">
              <div class="item">
                  <img src="images/welfare-gallery/10.jpg" alt="">
              </div>
              <div class="item">
                  <img src="images/welfare-gallery/7.jpg" alt="">
              </div>
              <div class="item">
                  <img src="images/welfare-gallery/8.jpg" alt="">
              </div>
              <div class="item">
                  <img src="images/welfare-gallery/5.jpg" alt="">
              </div>
              <div class="item">
                  <img src="images/welfare-gallery/6.jpg" alt="">
              </div>
          </div>
          <div class="buttons">
              <button id="prev"><</button>
              <button id="next">></button>
          </div>
          <ul class="dots">
              <li class="active"></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
          </ul>
      </div>

      <div class="social-btn">
        <button id="btn2" onclick="loadWelfare()"> Learn More </button>
      </div>

      <div class="sponsors">
        <h3 id="p-title">Our Partners</h3>
        <div class="partners">
          <div class="p-card p1"></div>
          <div class="p-card p2"></div>
          <div class="p-card p3"></div>
          <div class="p-card p4"></div>
        </div>
      </div>

     </div>



   
  <?php include('footer.php') ?>

    <script src="js/index.js"></script>
  </body>
  
 

</html>



