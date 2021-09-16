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
	<link rel="stylesheet" type="text/css" href="../assets/css/radiobtn.css">
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
        <li><a  href="ps_home.php"> Home</a></li>   
        <li><div class="dropdown" class="fas fa-bars"><button class="dropbtn" class="fas fa-bars" style="background-color: black;">Register
    </button>   
    <div class="dropdown-content">
      <a  href="regvoter.php">Voter</a>
    </div>
  </div>
</li>
       
        <li><a href="../logout.php">Logout </a></li>
      
     
      </ul>
    </nav>

</head>
<body>
  <!-- start nav bar  ------------------------------------------------ -->
<?php include("../partials/connect.php");
session_start();
if ($_SESSION["user_name"]==null)
{
	header("location:../login.php");
}
?>
<!-- end of Nav  -----------------------------------------  --> <h1>opps</h1>

	<div class="limiter  " >
		<div class="container-login100  " >
			<div class="wrap-login100 ">
				
        <!-- picture of the NEBE logo -->
      <div class="regpic">
        <center>
					<img src="../assets/images/img-01.jpg" alt="NEBE logo" height="30%" width="40%" > 
				
					<h3 style="color:green"> <?php
error_reporting(0);
if( $_GET['action'] == 'success' ) {
    echo "✓ Voter registration success!";
}
$set = "SELECT *  FROM nebe where 1";
$result = $con->query($set);
$finaln  = $result->fetch_assoc();
if($finaln['vote']==1)
{
	header("location:ps_home.php?action=st");
}

  ?> </h3>
  
				</center>
				</div>
				
				<form class="login100-form validate-form" style="margin: auto;
  width: 50%;
  padding: 10px;" action="ps_partials/voterhandler.php" method="post">
					<span class="login100-form-title">    
						Register Voter 
					</span>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="user_name" placeholder="User Name">
						<span class="focus-input100"></span>
						<h5 style="color:red"> <?php
error_reporting(0);
if( $_GET['action'] == 'dup' ) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   * User Name taken !";
}
  ?> </h5>
					</div>
				
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="first_name" placeholder="First Name">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Father_name" placeholder="Father Name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="grand_father_name" placeholder="Grand Father Name">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="number" name="age" placeholder="Age">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="number" name="house_number" placeholder="House Number">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="number" name="duration_of_residence" placeholder="Duration of Residence">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "New Password is required">
						<input class="input100" type="password" name="password"  placeholder="New password"
						pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
						>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" >
					<textarea name="remark" style="background-color:lightgray;"
   rows="6" cols="48">Remark: </textarea>
						<span class="focus-input100">
						</span>
					</div>
                    
					<div class="continput">

	<ul>
		<li style="position: relative;
	padding: 10px;
	padding-left: 40px;
	height:30px;">
			<input type="radio" name="gender" value="Male">
			<label>Male</label>
			<div class="bullet">
				
			</div>
		</li>
		<li style="position: relative;
	padding: 10px;
	padding-left: 40px;
	height:30px;">
			<input type="radio" name="gender" value="female">
			<label>Female</label>
			<div class="bullet">
				
			</div>
		</li>
	</ul>
</div>		
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