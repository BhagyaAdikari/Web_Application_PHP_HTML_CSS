
<!--IT23171992 J K C T Jayawardhana-->
<?php 
session_start();
session_destroy();
header("Location:adminLogin.php");
exit;

?>