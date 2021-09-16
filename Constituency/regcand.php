<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Ind.cand</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/images/icons/reg.png"/>
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../assets/css/navfoot.css">
<link rel="stylesheet" type="text/css" href="../assets/css/radiobtn.css">



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
        <li><a href="conhome.php"> Home</a></li>   
        <li><div class="dropdown" class="fas fa-bars"><button class="dropbtn" class="fas fa-bars" style="background-color:black">REGISTER
    </button>   
    <div class="dropdown-content">
    
      <a href="regcand.php">Individual candidates</a>
    </div>
  </div>
</li>
<li><a  href="viewcand.php">Registered Canidates </a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="../logout.php">Log out</a></li>
        <li><a href="../../about.php">About</a></li>
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
session_start();
$set = "SELECT *  FROM nebe where 1";
$result = $con->query($set);
$finaln  = $result->fetch_assoc();
if($finaln['vote']==1)
{
	header("location:conhome.php?action=st");
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
  width: 50%;
  padding: 10px;" action="Con_partials/candhandler.php"  method="POST"  enctype="multipart/form-data">
					<span class="login100-form-title">    
						Register Individual Candidate 
					</span>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="user_name" placeholder="User Name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="first_name" placeholder="First Name">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="father_name" placeholder="Father Name">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="number" name="age" placeholder="Age">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "New Password is required">
						<input class="input100" type="password" name="password"  placeholder="New password">
						<span class="focus-input100"></span>
						
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

					<div class="wrap-input100 validate-input" >
						<br>
						<select style="width:340px;  height:40px"; name="party_name" class="wrap-input100">  
						<option value="self">Self </option>
						<?php
						$sql = "SELECT * FROM pparties";
                                    $result = mysqli_query($con, $sql);
                                    while($row = mysqli_fetch_assoc($result)){
									
                                        echo "<option value=".$row['party_name'].">".$row['party_name']."</option>";

										
                                    }
									echo "</select>";
?> 
 </div>
	<div class="wrap-input100">
                                
                                <input type="file" id="picture" name="file" style="border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;"> 

                                <p class="help-block">Symbol :Allowed file formats :[ jpg, jpeg, png, gif ]</p>
                            </div>
							<h5 style="color:red"> <?php
error_reporting(0);
if( $_GET['action'] == 'error' ) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   * wrong File format  !";
}
  ?> </h5> 
					<div class="wrap-input100 validate-input" >
						<br>
					<select style="width:340px;  height:40px"; name="edu" class="wrap-input100" >
<option value="Select">Select Level of Education....</option>
<option value="Master Degree and above">Master Degree and above</option>
<option value="University or college Degree">University or college Degree</option>
<option value="Level 1 Diploma">Level 1 Diploma</option>
<option value="Level 2 Diploma">Level 2 Diploma</option>
<option value="Level 3 Diploma">Level 3 Diploma</option>
<option value="Level 4 Diploma">Level 4 Diploma</option>


</select>
					</div>
					<br>
					<p> Disablity </p>
					<div class="continput">

<ul>
	<li style="position: relative;
padding: 10px;
padding-left: 40px;
height:30px;">
		<input type="radio" name="disability" value="No">
		<label>No</label>
		<div class="bullet">
			
		</div>
	</li>
	<li style="position: relative;
padding: 10px;
padding-left: 40px;
height:30px;">
		<input type="radio" name="disability" value="Yes">
		<label>Yes</label>
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
				
					<div class="text-center p-t-136">
					<a href="terms">	Terms and use </a>
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