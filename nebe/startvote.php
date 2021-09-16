<?php
include("../partials/connect.php");
$set = "SELECT *  FROM nebe";
    $result = $con->query($set);
    $final  = $result->fetch_assoc();
$v=1;
$set="UPDATE `nebe` SET `vote`='$v' WHERE 1";
    $set = mysqli_query($con, $set);
    header("location:votesettings.php?action=success");
    ?>