<?php
//update polling station
include("../../partials/connect.php");
$subcity     =$_POST['subcity'];
$id     =$_GET['psuid'];
$wereda       = $_POST['wereda'];
$user_name     =$_POST['user_name'];
$password     =$_POST['password'];
$ketena     =$_POST['ketena'];
$set = "SELECT *  FROM polling_station where ID='$id'";
$result = $con->query($set);
$final  = $result->fetch_assoc();

    $set = "UPDATE polling_station set Subcity='$subcity', 
    wereda='$wereda', user_name='$user_name', password='$password', ketena='$ketena' where id='$id'";
    echo "were id is ".$id;
$set = mysqli_query($con, $set);
echo("update sucess! ");
header("Location:../viewps.php?action=success");
?>
