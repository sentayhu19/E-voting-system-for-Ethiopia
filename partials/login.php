<?php 
include("../partials/connect.php");
error_reporting(0);
$user = $_POST['user_name'];
$password = $_POST['password'];
if(!empty($_SESSION['user_name'])&& !empty($_SESSION['password']))
	{
        $user = $_SESSION['user_name'];
$password = $_SESSION['password'];
    }

//Voter
$final['user_name']="";
$final['password']="";
$set = "SELECT *  FROM voter where user_name='$user' AND password='$password'";
$result = $con->query($set);
$final  = $result->fetch_assoc();
if ((!empty($user) AND !empty($password == $password)))
{
    echo "its not empty";
if ($user == $final['user_name'] AND $password == $final['password'])
{  
session_start();
$_SESSION ['user_name']=$final ['user_name'];
$_SESSION ['password']=$final ['password'];
$_SESSION ['ID']=$final ['ID'];
echo"Account avilalble";   
header("Location:../voter/voterhome.php");
}

else
{
//NEBE login
    $set = "SELECT *  FROM nebe where user_name='$user' AND password='$password'";
    $result = $con->query($set);
    $final  = $result->fetch_assoc();
    
    if ($user == $final['user_name'] AND $password == $final['password']){
    session_start();
    $_SESSION ['user_name']=$final ['user_name'];
    $_SESSION ['password']=$final ['password'];   

    header("Location:../nebe/nebehome.php");
    }

    else
    {
//Ps
$set = "SELECT *  FROM polling_station where user_name='$user' AND password='$password'";
$result = $con->query($set);
$final  = $result->fetch_assoc();
if ($user == $final['user_name'] AND $password == $final['password'])
{
session_start();
$_SESSION ['user_name']=$final ['user_name'];
$_SESSION ['password']=$final ['password'];
$_SESSION ['Subcity']=$final ['Subcity'];
$_SESSION ['wereda']=$final ['wereda'];
$_SESSION ['ketena']=$final ['ketena'];
$_SESSION ['ID']=$final ['ID'];
header("location:../ps/ps_home.php");
    }

    else{
//constituency
       
$set = "SELECT *  FROM constituency where user_name='$user' AND password='$password'";
$result = $con->query($set);
$final  = $result->fetch_assoc();
if ($user == $final['user_name'] AND $password == $final['password'])
{
session_start();
$_SESSION ['user_name']=$final ['user_name'];
$_SESSION ['password']=$final ['password']; 
$_SESSION ['ID']=$final ['ID'];
$_SESSION ['region']=$final ['region'];
header("location:../constituency/conhome.php")  ;     
    }
    else{  
        //ind candidate
       
$set = "SELECT *  FROM indcandidate where user_name='$user' AND password='$password'";
$result = $con->query($set);
$final  = $result->fetch_assoc();
if ($user == $final['user_name'] AND $password == $final['password'])
{
session_start();
$_SESSION ['user_name']=$final ['user_name'];
$_SESSION ['password']=$final ['password']; 
header("location:../indcandidates/indchome.php"); 
}
else{
    // Political Prties
         
    $set = "SELECT *  FROM pparties where user_name='$user' AND password='$password'";
    $result = $con->query($set);
    $final  = $result->fetch_assoc();
    if ($user == $final['user_name'] AND $password == $final['password'])
    {
    session_start();
    $_SESSION ['user_name']=$final ['user_name'];
    $_SESSION ['password']=$final ['password']; 
    header("location:../politicalparties/pphome.php"); 
  }
  else{
    echo "User name or password dosn't match";
    header("Location:../login.php?loginstatus=fail");
}
}
}
}
    }
}
}
else{
    echo "Empty ";
     header("Location:../login.php?loginstatus=empty");
}

?>