<?php
session_start();
include("../../partials/connect.php");
$user_name     =$_POST['user_name'];
$password     =$_POST['password'];
$first_name     =$_POST['first_name'];
$father_name     =$_POST['father_name'];
$party_name    =$_POST['party_name'];
$age     =$_POST['age'];
$gender     =$_POST['gender'];
$file =$_FILES['file'];
$ID    =$_SESSION ["ID"];
$approval=1;
$region    =$_SESSION ["region"];
$edu     =$_POST['edu'];
$disability   =$_POST['disability'];
/////
$name = $_FILES['file']['name'];
$target_dir = "../../indcandidates/canduploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$filetype =$_FILES['file']['type'];
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$extensions_arr = array("jpg","jpeg","png","gif");
if( in_array($imageFileType,$extensions_arr) ){
   if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
	  $set = "INSERT INTO indcandidate (user_name,first_name,symbol,password,age,gender,party_name,father_name,conid,approval,edu,disability,region) 
	  values ('$user_name','$first_name','$name','$password','$age','$gender','$party_name','$father_name','$ID','$approval','$edu','$disability','$region')";
	  $set = mysqli_query($con, $set);
echo "sucess!";
header("Location:../viewcand.php?action=sucess");
   }
}
else{
	echo"File type Error";
	header("Location:../regcand.php?action=error");
}

?>
