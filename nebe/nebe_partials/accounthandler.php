<?php 
include("../../partials/connect.php");
session_start();
if(!empty($_POST['user_name']) && !empty($_POST['new_password']) && !empty($_POST['password']))
{
$user_name=$_POST['user_name'];
$new_password=$_POST['new_password'];
$new_password1=md5($_POST['new_password']);
$password=$_POST['password'];
$set = "SELECT *  FROM nebe";
    $result = $con->query($set);
    $final  = $result->fetch_assoc();
//if($password==$final['password'])
{
if($new_password1==$final['password'])
{
header("Location:../account.php?action=newpsw");
}
else
{
    $u1=$_SESSION ['user_name'];
    //
  //  $set = "UPDATE nebe set user_name='' password='' where user_name='$u1'"; 
    $set="UPDATE `nebe` SET `user_name`='$user_name',`password`='$new_password' WHERE 1";
    $set = mysqli_query($con, $set);
    echo "inserted user name ".$user_name." inserted current password ".$password." inserted New psw ".$new_password1." session User is ".$_SESSION ['user_name'];
 header("location:../account.php?action=sucess");
   
}
}
//else
{
    header("location:../account.php?action=nomatch");
}
}
else
{
    header("Location:../account.php?action=empty");
}

    ?>