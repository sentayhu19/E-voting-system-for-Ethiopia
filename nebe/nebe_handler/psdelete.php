<?php
include("../../partials/connect.php");
$id=$_GET['psdid'];
$set="DELETE FROM polling_station WHERE ID='$id'";
$set = mysqli_query($con, $set);
echo "ID to be deleted".$id;
header("Location:../viewps.php?action='sucess'");
?>