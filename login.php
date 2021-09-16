<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | NEBE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/css/navfoot.css">
<link rel="stylesheet" type="text/css" href="partials/field_icn.css">
</head>
<script src="assets/js/main.js"></script>
<style>
body {
  background-image: url('assets/images/10.jpg');
  background-repeat: no-repeat;
 background-size: cover;
}
#symb1
{
 background-image:url('assets/images/icons/user.png');   
 position: left;
 padding-left: 60px;
 background-size: 45px;
 background-repeat: no-repeat;
 border-radius: 8px;
 
}
#symb2
{
	background-image:url('assets/images/icons/psw.png');   
 position: left;
 padding-left: 60px;
 background-size: 45px;
 background-repeat: no-repeat;
 border-radius: 8px;	
}
</style>
	<!-- navigation css -->

<body>
	<!-- navigation -->
	<?php 

session_start(); ?>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><img width="50px" height="50px" src="assets/images/ethioflag.gif"></label>
      <ul>
        <li><a  href="index.php">Home</a></li>
        <li><a class="active" href="login.php">Login</a></li>
        <li><a href="election.php">Election info</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
    </nav>
	<?php  
	include("partials/connect.php");
	session_start();
	if(!empty($_SESSION['user_name'])&& !empty($_SESSION['password']))
	{
		header("Location:partials/login.php");
	}
	?>
	<!-- navigation -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/images/img-01.jpg" alt="IMG">
				</div>
				<form action="partials/login.php" method="POST" class="login100-form validate-form" >
					<span class="login100-form-title" onsubmit="validate()">
						 Login
					</span>
					<div class="wrap-input100 validate-input" >	
						<input class="input100" id="symb1" type="text" name="user_name" placeholder="User Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input"  data-validate = "Password is required">
						<input class="input100" type="password" id="symb2" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login" type="submit">
							Login
						</button>
					</div>
					<h5 style="color:red"> <?php
error_reporting(0);
if( $_GET['loginstatus'] == 'fail' ) {
    echo " <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;╳ Wrong User name or password!";
}
  ?> </h5>
  	<h5 style="color:red"> <?php
error_reporting(0);
if( $_GET['loginstatus'] == 'empty' ) {
    echo " <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Please fill the user name and password";
}
  ?> </h5>
					
				</form>
			</div>
		</div>
	</div>
	<!-- FOOTER START -->
  <?php
include ("partials/footer.php")
  ?>
<!-- END OF FOOTER -->

</body>
</html>