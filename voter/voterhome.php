<!DOCTYPE html>
<html lang="en">
<head>
	<title>Voter Dashbord</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/images/icons/login.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../assets/css/navfoot.css">
<link rel="stylesheet" type="text/css" href="../assets/css/radiobtn.css">
<link rel="stylesheet" type="text/css" href="../assets/css/imagecss.css">
</head>
<style>
	
body {
  background-image: url('../assets/images/10.jpg');
  background-repeat: no-repeat;
 background-size: cover;
}
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>

	<!-- navigation css -->

<body>
	<?php 
	$_SESSION['user_name'] = time();
	$expiry = 6 ;//session expiry required after 6 sec
if (isset($_SESSION['user_name']) && (time() - $_SESSION['user_name'] > $expiry)) {
    session_unset();
    session_destroy();
}

	?>
	<!-- navigation -->
	<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><img src="../assets/images/ethioflag.gif" alt="et"></label>
      <ul>    
        <li><a class="active" href="voterhome.php">Home</a></li> 
		<li><button font color="red" id='btnCounter'onclick="window.location.href='../logout.php';" style="font-size: 20px;" disabled>Logout</button>
	</li>
	<li><h5 id='count' style="font-size: 15px color='white';">count</h5></li>
      </ul>
    </nav>

	


	<?php 
	include("../partials/connect.php"); 
	session_start();
	if ($_SESSION["user_name"]==null)
	{
		header("location:../login.php");
	}   ?>

	?>
	<!-- navigation -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
	
				<?php  



//

$sqlv="SELECT *  FROM voter";
$resultv=$con->query(($sqlv));
$sqlp="SELECT *  FROM pparties";
$resultp=$con->query(($sqlp));
$sqli="SELECT *  FROM indcandidate";
$resulti=$con->query(($sqli));


//ed
$id=$_SESSION ['ID'];
$set = "SELECT *  FROM voter where ID='$id'";
$result = $con->query($set);
$final  = $result->fetch_assoc();
//
$set = "SELECT *  FROM nebe where 1";
$result = $con->query($set);
$finaln  = $result->fetch_assoc();
if($finaln['vote']==1)
{
 
 if($final['status']==0)
{
	include("voter_partials/vote_body.php");  //if the voter did not give his/her vote then load the vote body
	
}
else
{

	echo "<table border='1px'>
	<td><h2 style=color:green> ✓ You have cast your vote! <br> Thank you! for Participating</h2> <br><br>  <h5>
	Total Number of Registered Voters : [".$resultv->num_rows."]  <br>
	Total Number of Registered Political Parties : [".$resultp->num_rows."]<br>
	Total Number of Registered Individual candidates : [".$resulti->num_rows."]<br><br>
	 </td></tr></table>
	";	
	echo "<script>
	var spn = document.getElementById('count');
	var btn = document.getElementById('btnCounter');
	var count = 15;     // Set count
	var timer = null;  // For referencing the timer
	
	(function countDown(){
	  // Display counter and start counting down
	  spn.textContent = count;
	  
	  // Run the function again every second if the count is not zero
	  if(count !== 0){
		timer = setTimeout(countDown, 1000);
		count--; // decrease the timer
	  } else {
		// Enable the button
		btn.removeAttribute('disabled');
		location.replace('../logout.php')
	  }
	}());
	</script>";
}
}
else{

 echo "<table border=1px align=left> <tr>";
 echo "
	<td><h3 style='color:'blue''>Election hasn't started yet Please be patient</h3> <br><br>  <h5>
	Total Number of Registered Voters : [".$resultv->num_rows."]  <br>
	Total Number of Registered Political Parties : [".$resultp->num_rows."]<br>
	Total Number of Registered Individual candidates : [".$resulti->num_rows."]<br><br>
	 </td></tr></table>
	 
	<script> 
	var btn = document.getElementById('btnCounter');
	btn.removeAttribute('disabled'); </script>";
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