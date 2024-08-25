<!--IT 23241732 A M K B Adikari-->

<?php
session_start();
require 'config.php';

$UserID = $_SESSION['UserID'];
$BlogTitle = $_POST['BlogTitle'];
$Tag = $_POST['Tag'];
$PostContent = $_POST['PostContent'];
$PreviewText = $_POST['PreviewText'];
$file_name1=$_FILES['image1']['name'];
$tempname1=$_FILES['image1']['tmp_name'];
$folder1='images/BlogImages/BlogImages1/'.$file_name1;
$file_name2=$_FILES['image2']['name'];
$tempname2=$_FILES['image2']['tmp_name'];
$folder2='images/BlogImages/BlogImages2/'.$file_name2;




if(move_uploaded_file($tempname1,$folder1) && move_uploaded_file($tempname2, $folder2))
    {
        
        $sql="INSERT INTO blog VALUES ('$UserID','$BlogTitle','$Tag',' ','$file_name1','$file_name1','$PreviewText','$PostContent')";
    }

    
if($con->query($sql))
{
    header('location:blogAdmin.php');
}

else
{
    echo "Error ".$con->error;
}
?>