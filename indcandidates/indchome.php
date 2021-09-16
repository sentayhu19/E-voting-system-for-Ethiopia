<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | NEBE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../assets/css/navfoot.css">
<link rel="stylesheet" type="text/css" href="../partials/field_icn.css">
</head>
<script src="assets/js/main.js"></script>
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
	<?php 

session_start(); ?>
<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><img width="50px" height="50px" src="../assets/images/ethioflag.gif"></label>
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a  href="../logout.php">Logout</a></li>
        <li><a href="#">Election</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </nav>
	<?php  
	include("../partials/connect.php");

	?>
	<!-- navigation -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					Weclome <?php  echo $_SESSION['user_name']; ?> 
				</div>
				<?php 
				$sqlv="SELECT *  FROM voter";
				$resultv=$con->query(($sqlv));
				$sqlp="SELECT *  FROM pparties";
				$resultp=$con->query(($sqlp));
				$sqli="SELECT *  FROM indcandidate";
				$resulti=$con->query(($sqli));
$set = "SELECT *  FROM nebe where 1";
$result = $con->query($set);
$finaln  = $result->fetch_assoc();
if($finaln['vote'])
{
	include("ind_partials/candprogress.php");
	echo "<table border='1px'>
	<td>
	Total Number of Registered Voters : [".$resultv->num_rows."]  <br>
	Total Number of Registered Political Parties : [".$resultp->num_rows."]<br>
	Total Number of Registered Individual candidates : [".$resulti->num_rows."]<br><br>
	 </td></tr></table>
	";	
}
else{
	echo "<h3> Vote hasn't Started yet </h3>";
	echo "<table border='1px'>
	<td>Total Number of Registered Voters : [".$resultv->num_rows."]  <br>
	Total Number of Registered Political Parties : [".$resultp->num_rows."]<br>
	Total Number of Registered Individual candidates : [".$resulti->num_rows."]<br><br>
	 </td></tr></table>
	";	
}


              
                ?>
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