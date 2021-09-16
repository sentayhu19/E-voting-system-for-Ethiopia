<!DOCTYPE html>
<html lang="en">
<head>
	<title>Constituency dashbord</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico"/>
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
        <li><a class="active" href="conhome.php"> Home</a></li>   
        <li><div class="dropdown" class="fas fa-bars"><button class="dropbtn" class="fas fa-bars">Register
    </button>   
    <div class="dropdown-content">
      <a href="regcand.php">Individual candidates</a>
     
    </div>
  </div>
</li>
<li><a href="viewcand.php">Registered Canidates </a></li>
        <li><a href="#">Contact</a></li>

        <li><a href="../logout.php">Log out</a></li>
        <li><a href="../../about.php">About</a></li>
      </ul>
    </nav>
	<?php
	session_start();
	if ($_SESSION["user_name"]==null)
	{
		header("location:../login.php");
	}
	?>
	<!-- navigation -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
	
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../assets/images/img-01.jpg" alt="IMG">					
				</div>
				<form class="login100-form validate-form">
					<span class="login100-form-title">
						 <h5 align="right">	Welcome <?php echo $_SESSION["user_name"];   echo $_SESSION["ID"]; ?> </h5>
						 
					</span>
<?php 
error_reporting(0);
if( $_GET['action'] == 'st' ) {
    echo "<h3 style='color:red'>You Can't Register while the Election is on progress! <h3>";
}
?>
			
					
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