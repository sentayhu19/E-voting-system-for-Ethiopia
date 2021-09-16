<?php
include("../../partials/connect.php");
$id=$_GET['condid'];
$set="DELETE FROM constituency WHERE ID='$id'";
$set = mysqli_query($con, $set);
echo "ID to be deleted".$id;
header("Location:../viewcon.php?action='sucess'");
?>