
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Confirm vote</title>
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
<script src="../../assets/js/main.js"></script>
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
        <li><a  href="voterhome.php">Home</a></li>
        <li><a href="../election.php">Election info</a></li>
        <li><a href="#">Contact</a></li>         
      </ul>
    </nav>
	<?php  
	include("../partials/connect.php");
	
	
$select     =$_POST['select'];  //ind. candidate
$select2     =$_POST['select2'];  // political party
session_start();
if (!empty($_POST['select']) && !empty($_POST['select2']))
{
    $set = "SELECT *  FROM indcandidate where ID=$select";
    $result = $con->query($set);
    $final1  = $result->fetch_assoc();
    $indcount=1;
    $indcount+=$final1['count'];
    //echo " showing candidate count  ".$final['count'];
    
    $set = "UPDATE indcandidate set count='$indcount' where ID='$select'";
    $set = mysqli_query($con, $set);
    $set = "SELECT *  FROM pparties where ID=$select2";
    $result = $con->query($set);
    $final  = $result->fetch_assoc();
}
else{
    header("Location:../voterhome.php?action=error");
}
	?>
	<!-- navigation -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
				
				</div>
				<form  method="POST"  action="voter_partials/votehandler.php?select=<?php echo $select?>& select2=<?php echo $select2 ?> " class="login100-form validate-form"  style="margin: auto;
  width: 50%;
  padding: 10px;">
					<span class="login100-form-title">
						 Confirm Your Vote 
                        
                         <table border="1px" style="width:400px" >
                             <tr><p>[You have selected the following ]<p></tr>
                             <tr>
                         <td>    <p><b>From Individual candidates</b><br> Candidate Name  : <?php echo $final1['first_name']; echo "  "; echo $final1['father_name'];?></p> </td>
                       <td>   <?php echo "<img src='../indcandidates/canduploads/".$final1['symbol']."'  width='100px' height='150px'>";  ?> </td>
                      <tr>   
<td>
<p><b> From Political Parties</b></p>
<p>party Name : <?php echo $final['party_name'];?></p> </td>
    <td><?php echo "<img src='../assets/images/uploads/".$final['symbol']."'  width='150px' height='100px'>";  ?> 
</td></tr>
                         
</table>
<br>

						<button  name="login" type="submit" style="width:350px; background-color:lime; height:40px">
							Confirm  vote
						</button>
            &nbsp;
                        <div style="width:350px;height:40px;border:1px solid #000; background-color:red">
                  <a href="voterhome.php" style="background-color:red; font-size:16px; color:white;" >  Cancel Vote
					  </a></div> 
                        </form>
					</div>
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
    </div>
					
				
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
