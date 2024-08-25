<!--IT23171992 J.K.C.T Jayawardhana-->

<?php
  $con=new mysqli("localhost","root","","petpulse");

  if($con->connect_error){
    die("connection error".$con->connect_error);
  }

?>