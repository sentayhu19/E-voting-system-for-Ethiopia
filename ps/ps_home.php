<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register voter</title>
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
</style>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><img width="50px" height="50px" src="../assets/images/ethioflag.gif"></label>
      <ul>
        <li><a class="active" href="../../index.php"> Home</a></li>   
        <li><div class="dropdown" class="fas fa-bars"><button class="dropbtn" class="fas fa-bars">Register
    </button>   
    <div class="dropdown-content">
      <a href="regvoter.php">Voter</a>
    </div>
  </div>
</li>
      
        <li><a href="../logout.php">Logout </a></li>
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

<!-- end of Nav  -----------------------------------------  -->

	<div class="limiter" >
		<div class="container-login100">
			<div class="wrap-login100">
        <!-- picture of the NEBE logo -->
        <span class="login100-form-title">    
					<?php 
          
          echo "Welcome ".$_SESSION['user_name'] ; ?>	
					</span>

        <?php  error_reporting(0); ?>
<?php if( $_GET['action'] == 'st' ) {
  echo "<h3 style='color:red'> You Can't Register while the Election is on progress<h3>";
}   ?>
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