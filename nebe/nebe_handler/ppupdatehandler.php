<?php
//update polling station
include("../../partials/connect.php");

$id     =$_GET['psuid'];
$party_name       = $_POST['pname'];
$user_name     =$_POST['user_name'];
$password     =$_POST['password'];
$abbr     =$_POST['abbr'];
$set = "SELECT *  FROM pparties where ID='$id'";
$result = $con->query($set);
$final  = $result->fetch_assoc();


        $set = "UPDATE pparties set party_name='$party_name', 
        abbr='$abbr', user_name='$user_name', password='$password' where id='$id'";
        echo "were id is ".$id;
    $set = mysqli_query($con, $set);
    echo("update success! ");

 





$name = $_FILES['file']['name'];
$target_dir = "../../assets/images/uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$filetype =$_FILES['file']['type'];
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$extensions_arr = array("jpg","jpeg","png","gif");
if( in_array($imageFileType,$extensions_arr) ){
   if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
	  $set = "UPDATE pparties set symbol='$name'  where id='$id'";
	  $set = mysqli_query($con, $set);

   }
}
header("Location:../viewpp.php?action=success");
?>
