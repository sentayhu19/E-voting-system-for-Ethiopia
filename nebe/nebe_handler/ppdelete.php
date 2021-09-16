<?php
include("../../partials/connect.php");
$id=$_GET['ppdid'];
$set="DELETE FROM pparties WHERE ID='$id'";
$set = mysqli_query($con, $set);
echo "ID to be deleted".$id;
header("Location:../viewpp.php?action='sucess'");
?>