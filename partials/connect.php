<?php
$host="localhost";
$user="root";
$password="";
$dbname="evoting";
$con=mysqli_connect ($host,$user,$password,$dbname) ;
if ($con)
{
	
	echo "db connected sucessfully";
}
else
{
echo "unable to connect";
}
?>
