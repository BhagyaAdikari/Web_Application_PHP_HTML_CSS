<!--IT 23241732 A M K B Adikari-->

<?php
session_start();

require 'config.php';

 $UserID = $_SESSION['UserID'];
 $ServiceID=$_SESSION['ServiceID'];
 $Type = $_POST['Type'];
 $Date = $_POST['Date'];
 $FurInfo = $_POST['FurInfo'];

$sql="INSERT INTO appointment VALUES ('$UserID','$ServiceID','','$Type','$Date','$FurInfo')";



if($con->query($sql))
{
    header('location:service.php');
}

else
{
    echo "Error ".$con->error;
}
?>