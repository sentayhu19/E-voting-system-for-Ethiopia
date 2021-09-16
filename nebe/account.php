<!DOCTYPE html>
<html lang="en">
<head>
	<title>Account</title>
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
        <li><a  href="nebehome.php"> Home</a></li>   
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
        <li><a class="active" href="account.php">Account</a></li>
 
      </ul>
    </nav>
	<?php 
	session_start();
	if ($_SESSION["user_name"]==null)
	{
		header("location:../login.php");
	}?>
	<!-- navigation -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../assets/images/lock.gif" alt="IMG">
				</div>
				<form class="login100-form validate-form" action="nebe_partials/accounthandler.php" method="post">
					<span class="login100-form-title">
						Change Account credentials 
					</span>
                    <h3 style="color:green"> <?php
error_reporting(0);
if( $_GET['action'] == 'sucess' ) {
    echo "✓ credentials chnaged! </h3>";
}
else if ($_GET['action'] == 'nomatch')
{
    echo " <h3 style='color:red'> Current password does not match!</h3>";

}
else if ($_GET['action'] == 'empty')
{
    echo " <h3 style=color:red>Filed Empty! </h3>";

}
  ?> 
                    <div class="wrap-input100 validate-input" >	
						<input class="input100" id="symb1" type="text" name="user_name" placeholder="User Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" >	
						<input class="input100" id="symb1" type="password" name="password" placeholder="Current password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" >	
						<input class="input100" id="symb1" type="password" name="new_password" placeholder="New password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login" type="submit">
							Change
						</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	<!-- FOOTER START -->
  <?php
include ("../partials/footer.php")
  ?>
<!-- END OF FOOTER -->
<script src="js/input.js"></script>
</body>
</html>