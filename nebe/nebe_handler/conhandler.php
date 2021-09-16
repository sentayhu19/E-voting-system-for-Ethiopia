<?php
include("../../partials/connect.php");
$user_name     =$_POST['user_name'];
$password       = $_POST['password'];
$region     =$_POST['region'];
$set = "INSERT INTO constituency (user_name,password,region) 
values ('$user_name','$password','$region')";
$set = mysqli_query($con, $set);
echo("Registration sucess! and this is not printed");
header("Location:../viewcon.php?action=success");
?>
