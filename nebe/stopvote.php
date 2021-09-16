<?php
include("../partials/connect.php");
$set = "SELECT *  FROM nebe";
    $result = $con->query($set);
    $final  = $result->fetch_assoc();
$v=0;
$set="UPDATE `nebe` SET `vote`='$v' WHERE 1";
    $set = mysqli_query($con, $set);
    header("location:electionresult.php");
    ?>