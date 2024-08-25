<!--IT23171992 J K C T Jayawardhana-->

<?php

require 'config.php';

$PromoTitle = $_POST['PromoTitle'];
$PromoContent = $_POST['PromoContent'];
$PromoCode = $_POST['PromoCode'];
$file_name1=$_FILES['Image']['name'];
$tempname1=$_FILES['Image']['tmp_name'];
$folder1='images/promotionImages/'.$file_name1;

if(move_uploaded_file($tempname1,$folder1))
{
    $sql="INSERT INTO promotions VALUES ('$PromoTitle','','$PromoContent','$file_name1','$PromoCode')";
}

if($con->query($sql))
{
    header('location:adminPromotion.php');
}

else
{
    echo "Error ".$con->error;
}
?>