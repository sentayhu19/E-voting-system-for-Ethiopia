<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Constituency</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/images/icons/reg.png"/>
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../assets/css/navfoot.css">



<style>
body {
  background-image: url('../assets/images/10.jpg');
  background-repeat: no-repeat;
 background-size: cover;
 /* filter: blur(8px);  */
}
 /*Radio button style */
 /* rad end  */

</style>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><img width="50px" height="50px" src="../assets/images/ethioflag.gif"></label>
      <ul>
        <li><a  href="nebehome.php"> Home</a></li>   
        <li><div class="dropdown" class="fas fa-bars"><button class="dropbtn" class="fas fa-bars" style="background-color:black ;">REGISTER
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
?>

</head>
<body>
  <!-- start nav bar  ------------------------------------------------ -->
<?php include("../partials/connect.php");  ?>
<!-- end of Nav  -----------------------------------------  -->
<div class="wrap-input100 validate-input">

<h3 style="color:green"> <?php
error_reporting(0);
if( $_GET['action'] == 'success' ) {
    echo "???  Constituency registration  success!";
}
  ?> </h3>
				</div>
				
	<div class="limiter  " >
		<div class="container-login100  " >
			<div class="wrap-login100 ">
				
        <!-- picture of the NEBE logo -->
      <div class="regpic">
        <center>
					<img src="../assets/images/img-01.jpg" alt="NEBE logo" height="30%" width="40%" > </center>
				</div>	
				<form class="login100-form validate-form" style="margin: auto;
  width: 50%;
  padding: 10px;"  method="post" action="nebe_handler/conhandler.php">
					<span class="login100-form-title">    
						Register Constituency
					</span>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="user_name" placeholder="User Name">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "New Password is required">
						<input class="input100" type="password" name="password"  placeholder="New password">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<br>
					<select style="width:200px;" name="region">
<option value="Select">Select Region....</option>
<option value="Addis Ababa">Addis Ababa</option>
</select>				</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="sub">
							Submit
						</button>
					</div>				
				</form>
        </div>
        </div>
        
				<!-- =============== footer =============================================== -->

			</div>
		</div>
	</div>
				<!-- FOOTER START -->
	<?php
include ("../partials/footer.php")
  ?>
<!-- END OF FOOTER -->
</body>
</html>