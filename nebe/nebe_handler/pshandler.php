<?php
include("../../partials/connect.php");
$subcity     =$_POST['subcity'];
$wereda       = $_POST['wereda'];
$user_name     =$_POST['user_name'];
$password     =$_POST['password'];
$ketena     =$_POST['ketena'];
$set = "SELECT *  FROM polling_station where user_name='$user_name'";
$result = $con->query($set);
$final  = $result->fetch_assoc();
if($user_name == $final['user_name'])
{
    header("Location:../regps.php?action=dup");
}
else{
$set = "INSERT INTO polling_station (subcity,wereda,user_name,password,ketena) 
values ('$subcity', '$wereda','$user_name','$password','$ketena')";
$set = mysqli_query($con, $set);
echo("Registration sucess! and this is not printed");
header("Location:../viewps.php?action=success");
}
?>
