<!DOCTYPE html>
<html lang="en">
<head>
	<title>NEBE Dashbord</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/images/icons/login.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../assets/css/navfoot.css">
</head>
<style>
body {
  background-image: url('../assets/images/10.jpg');
  background-repeat: no-repeat;
 background-size: cover;
}

</style>
	<!-- navigation css -->

<body>
	<!-- navigation -->
	<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><img width="50px" height="50px" src="../assets/images/ethioflag.gif"></label>
      <ul>
        <li><a class="active" href="nebehome.php"> Home</a></li>   
        <li><div class="dropdown" class="fas fa-bars"><button class="dropbtn" class="fas fa-bars">REGISTER
    </button>   
    <div class="dropdown-content">
      <a href="regcon.php">Constituency</a>
      <a href="regps.php">Polling stations</a>
      <a href="regpp.php">Political parties</a>
    </div>
  </div>
</li>
<li><div class="dropdown" class="fas fa-bars">
<button class="dropbtn" class="fas fa-bars">MANAGE USERS
    </button>   
    <div class="dropdown-content">
      <a href="viewcon.php">Constituency</a>
      <a href="viewps.php">Polling stations</a>
      <a href="viewpp.php">Political parties</a>
	  <a href="viewvoter.php">Voter</a>
    </div>
  </div>
</li>
        <li><a href="../logout.php">Logout </a></li>
        <li><a href="account.php">Account</a></li>
      </ul>
    </nav>
	<?php 
	session_start();
	if ($_SESSION["user_name"]==null)
	{
		header("location:../login.php");
		
	}
	include("../partials/connect.php")
	?>
	<!-- navigation -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../assets/images/img-01.jpg" alt="IMG" width="200px" height="80px" style="margin: auto;
  width: 50%;
  padding: 10px;">
				</div>  
				<br>
<?php
error_reporting(0);
 if($_GET['action']=='st1')
{
echo "<h3 style='color:red'>You Cant Register while the Election is on progress </h3>";
}  ?>
					<span class="login100-form-title">
						Welcome <?php echo  $_SESSION["user_name"] ;?>
					</span> 
          
      <form action="votesettings.php">
          <div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login" type="submit" >
							Vote Settings
						</button>
					</div>  <br>
</form>   


<form action="votestat.php">
          <div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login" type="submit" >
							Statistics
						</button>
					</div>  <br>
</form>  
<?php
 $set = "SELECT *  FROM nebe where 1";
 $result = $con->query($set);
 $final  = $result->fetch_assoc();
if($final['vote']==1)
{
  include("nebe_partials/progress.php");
}
else{
  echo "<h3 style='color:'blue''>Vote hasn't started yet</h3>";
}


?>
		<!-- end ind progress -->
	</div></div>
	<!-- FOOTER START -->
  <?php
include ("../partials/footer.php")
  ?>
<!-- END OF FOOTER -->
<script src="js/input.js"></script>
</body>
</html>