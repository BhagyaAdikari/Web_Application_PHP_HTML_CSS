<!--IT23171992 J.K.C.T Jayawardhana-->

<?php
session_start();


if (!isset($_SESSION["UserName"])) {
    echo "<script type='text/javascript'>alert('Please Login to Continue!');
            window.location='userLogin.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/payment.css">


</head>
<?php include 'header.php'?>
<body>

<div class="container">
<img id="logo" src="images/new-logo.png">


    <form name="myForm" method="POST" action="insertPayment.php" onsubmit="return validateForm()">

        <div class="row">
            <div class="col">

                <h3 class="title">billing address</h3>
                
                <div class="inputBox">
                    <span>full name :</span>
                    <input id="name" type="text" placeholder="Janith Kaushalya" name="name">
                    <p id="nameError"></p>
                </div>

                <div class="inputBox">
                    <span>email :</span>
                    <input id="email" type="text" placeholder="example@example.com" name="email">
                    <p id="emailError"></p>
                </div>

                <div class="inputBox">
                    <span>Telephone :</span>
                    <input id="number" type="text" placeholder="0796985456" name="number">
                    <p id="telError"></p>
                </div>

                <div class="inputBox">
                    <span>address :</span>
                    <input id="address" type="text" placeholder="Mihindu Mawatha , Kurunegala" name="address">
                    <p id="addressError"></p>
                </div>

                <div class="inputBox">
                    <span>zip code :</span>
                    <input id="zip" type="text" placeholder="71055" name="zip">
                    <p id="zipError"></p>
                </div>


            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>

                
                <div class="inputBox">
                    <span>Card Type :</span>
                    <select name="cardType">
                        <option value="visa">Visa</option>
                        <option value="paypal">PayPal</option>
                        <option value="american express">American Express</option>
                        <option value="master card">Master Card</option>
                    </select>
                </div>

                <div class="inputBox">
                    <span>name on card :</span>
                    <input id="nameOnCard" type="text" placeholder="Janith" name="nameOnCard">
                    <p id="nameOnCardError"></p>
                </div>

                <div class="inputBox">
                    <span>credit card number :</span>
                    <input id="CardNum" type="number" placeholder="1111-2222-3333-4444" name="creditCardNumber">
                    <p id="cardNumberError"></p>
                </div>

                <div class="inputBox">
                    <span>Expire Month :</span>
                    <input id="month" type="month" placeholder="2026/04" name="expMonth">
                    <p id="monthError"></p>
                </div>

                <div class="inputBox">
                    <span>CVV :</span>
                    <input id="cvv" type="text" placeholder="567" name="cvv"> 
                    <p id="cvvError"></p>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn" id="sub-btn" name="">

    </form>

</div>    


<script src="js/payment.js"></script>
    
</body>
<?php include 'footer.php'?>
</html>