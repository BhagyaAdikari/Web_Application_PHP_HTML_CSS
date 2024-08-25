<!--IT 23241732 A M K B Adikari-->

<?php
session_start();

require 'config.php';

 $UserID = $_POST['userid'];
 $ServiceID=$_POST['serviceid'];
 $Type = $_POST['Type'];
 $Date = $_POST['Date'];
 $FurInfo = $_POST['FurInfo'];

$sql="INSERT INTO appointment VALUES ('$UserID','$ServiceID','','$Type','$Date','$FurInfo')";



if($con->query($sql))
{
    header('location:adminappointment.php');
}

else
{
    echo "Error ".$con->error;
}
?>