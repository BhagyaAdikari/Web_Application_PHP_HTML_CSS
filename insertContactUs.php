
<!--IT23171992 J K C T Jayawardhana-->
<?php
session_start();
require 'config.php';


$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Need = $_POST['Need'];
$FurInfo = $_POST['FurInfo'];

$sql="INSERT INTO contact_form VALUES ('$Name','$Email','','$FurInfo','$Need')";



if($con->query($sql))
{
    echo "Insert Sucessful";
}

else
{
    echo "Error ".$con->error;
}
?>