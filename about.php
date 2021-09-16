<!DOCTYPE html>
<html lang="en">
<head>
	<title>About NEBE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/css/navfoot.css">
</head>
<style>
body {
  background-image: url('assets/images/1110.jpg');
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
      <label class="logo">NEBE</label>
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="#">Election Info</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
    </nav>
	<!-- navigation -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/images/img-01.jpg" alt="IMG">
                    <center> <h1>About </h1> </center>

					<h4> Group Name </h4>  
					  <ul>
                        <li> Fuad Abdlemoin </li>
                        <li> Gedion Geremew </li>
                        <li> Meron Abrham </li>
                        <li> Sentayhu Berhanu </li>
                        <li> Trsit Tewabe </li>


					  </ul>
					 

			</div>
		</div>
	</div>
	<!-- FOOTER START -->
  <?php
include ("partials/footer.php")
  ?>
<!-- END OF FOOTER -->
    
<script src="js/input.js"></script>
</body>
</html>