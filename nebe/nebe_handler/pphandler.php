<?php
include("../../partials/connect.php");
$user_name     =$_POST['user_name'];
$password     =$_POST['password'];
$abbr     =$_POST['abbr'];
$party_name    =$_POST['party_name'];
$file =$_FILES['file'];
//
/////
$name = $_FILES['file']['name'];
$target_dir = "../../assets/images/uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$filetype =$_FILES['file']['type'];
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$extensions_arr = array("jpg","jpeg","png","gif");
if( in_array($imageFileType,$extensions_arr) ){
   if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
	  $set = "INSERT INTO pparties (user_name,password,abbr,symbol,party_name) 
	  values ('$user_name','$password','$abbr','$name','$party_name')";
	  $set = mysqli_query($con, $set);
echo "sucess!";
header("Location:../viewpp.php?action=sucess");
   }
}
else{
	echo"File type Error";
	header("Location:../regpp.php?action=error");
}

?>
