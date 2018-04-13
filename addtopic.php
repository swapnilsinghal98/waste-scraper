<?php
include('dbconn.php');
session_start();
if(!isset($_SESSION['name'])){
    header ('location : login.php'); 
}
else
{
    $title = mysqli_real_escape_string($con,$_POST["title"]);
    $desc = mysqli_real_escape_string($con,$_POST["desc"]);
    $image1 = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));
    $query = "INSERT into topic (title, image1, description) VALUES ('$title','$image1','$desc')";
    if(mysqli_query($con,$query))
    {
        echo "<script>alert('Image inserted')</script>";
        header('location: viewtopic.php');
    }
}
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css"  type="text/css"> 
    </head>
</html>