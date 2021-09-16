<?php
//update polling station
include("../../partials/connect.php");

$id     =$_GET['psuid'];

$user_name     =$_POST['user_name'];
$password     =$_POST['password'];
$region     =$_POST['region'];
$set = "SELECT *  FROM polling_station where ID='$id'";
$result = $con->query($set);
$final  = $result->fetch_assoc();

    $set = "UPDATE constituency set  user_name='$user_name', password='$password', region='$region' where id='$id'";
    echo "were id is ".$id;
$set = mysqli_query($con, $set);
echo("update success! ");
header("Location:../viewcon.php?action=success");

?>
