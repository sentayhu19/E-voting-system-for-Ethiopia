<?php
session_start();
include("../../partials/connect.php");
$first_name      = $_POST['first_name'];
$Father_name       = $_POST['Father_name'];
$grand_father_name       = $_POST['grand_father_name'];
$age          = $_POST['age'];
$user_name     =$_POST['user_name'];
$password     =$_POST['password'];
$gender     =$_POST['gender'];
$subcity     =$_SESSION ['Subcity'];
$wereda     =$_SESSION ['wereda'];
$ketena     =$_SESSION ['ketena'];
$ID    =$_SESSION ['ID'];
$status     = 0;
$duration_of_residence     =$_POST['duration_of_residence'];
$house_number     =$_POST['house_number'];
$remark     =$_POST['remark'];
//
$set = "SELECT *  FROM voter where user_name='$user_name'";
$result = $con->query($set);
$final  = $result->fetch_assoc();
if($user_name == $final['user_name'])
{
    header("Location:../regvoter.php?action=dup");
}
else
{
//
$set = "INSERT INTO voter (first_name,Father_name,age,user_name,password,gender,subcity,wereda,ketena,grand_father_name,
station_id,status,duration_of_residence,house_number,remark) 
values ('$first_name','$Father_name','$age', '$user_name','$password','$gender', '$subcity','$wereda','$ketena',
'$grand_father_name','$ID','$status','$duration_of_residence','$house_number ','$remark ')";
$set = mysqli_query($con, $set);
echo("Registration sucess!");
header("Location:../viewvoter.php?action=success");
}
?>
