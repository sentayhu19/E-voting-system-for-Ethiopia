<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register political party</title>
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
        <li><div class="dropdown" class="fas fa-bars"><button class="dropbtn" class="fas fa-bars" style="background-color:black">REGISTER
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

</head>
<body>
  <!-- start nav bar  ------------------------------------------------ -->
<?php include("../partials/connect.php")  ?>
<!-- end of Nav  -----------------------------------------  -->
<?php
if( $_GET['action'] == 'success' ) {
    echo "thanks for you registration, log in here";
}  
$set = "SELECT *  FROM nebe where 1";
$result = $con->query($set);
$finaln  = $result->fetch_assoc();
if($finaln['vote']==1)
{
	header("location:nebehome.php?action=st1");
}
?>
	<div class="limiter  " >
		<div class="container-login100  " >
			<div class="wrap-login100 ">
				
        <!-- picture of the NEBE logo -->
      <div class="regpic">
        <center>
					<img src="../assets/images/img-01.jpg" alt="NEBE logo" height="30%" width="40%" > </center>
				</div>			
				<form class="login100-form validate-form" style="margin: auto;
  width: 50%; padding: 10px;"  method="POST"  enctype="multipart/form-data" action="nebe_handler/pphandler.php">
					<span class="login100-form-title">    
						Register Party 
					</span>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="user_name" placeholder="User Name">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="abbr" placeholder="party abbr">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="party_name" placeholder="Pary Name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "New Password is required">
						<input class="input100" type="password" name="password"  placeholder="New password">
						<span class="focus-input100"></span>
						<br><br>
						<div class="wrap-input100">
                                <label for="picture">Symbol</label>
                                <input type="file" id="picture" name="file" style="border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;">

                                <p class="help-block">Allowed file formats :[ jpg, jpeg, png, gif ]</p>
                            </div>
							<h5 style="color:red"> <?php
error_reporting(0);
if( $_GET['action'] == 'error' ) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   * wrong File format  !";
}
  ?> </h5>
					</div>
					<div class="wrap-input100 validate-input" >
						<br>
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