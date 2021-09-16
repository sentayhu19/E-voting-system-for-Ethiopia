<?php
include("../../partials/connect.php");
$select     =$_GET['select'];  //ind. candidate
$select2     =$_GET['select2'];  // political party
session_start();
echo "Select is".$select." and selec2 is ".$select2;
if (!empty($_GET['select']) && !empty($_GET['select2']))
{
$set = "SELECT *  FROM indcandidate where ID=$select";
$result = $con->query($set);
$final1  = $result->fetch_assoc();
$indcount=0;
$indcount+=$final1['count'];
//echo " showing candidate count  ".$final['count'];

$set = "UPDATE indcandidate set count='$indcount' where ID='$select'";
$set = mysqli_query($con, $set);
$set = "SELECT *  FROM pparties where ID=$select2";
$result = $con->query($set);
$final  = $result->fetch_assoc();
$partycount=1;
$partycount+=$final['count']; 

$set = "UPDATE pparties set count='$partycount' where ID='$select2'";
//echo "User choice is ".$select." then  party is  ".$select2;
$set = mysqli_query($con, $set);

$user=$_SESSION ['ID'];
$set = "UPDATE voter set status='1' where ID='$user'";
echo " user is party ID : ";
echo $select2;
header("Location:../voterhome.php?action=sucess");
$set = mysqli_query($con, $set);
}
else{

    echo "Error Handler says empty";
   // header("Location:../voterhome.php?action=error");
}
?>
