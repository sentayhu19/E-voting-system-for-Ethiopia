<!DOCTYPE html>
<html lang="en">
<head>
	<title>
Statistics</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/images/icons/list.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../assets/css/navfoot.css">

<link rel="stylesheet" type="text/css" href="../assets/css/table.css">
</head>
<style>
body {
  background-image: url('../assets/images/10.jpg');
  background-repeat: no-repeat;
 background-size: cover;
}
/*table{
    border-collapse: collapse;
    width:100%;
    font-family: monospace;
    font-size: 11px;
    text-align: left;   
    
}  */
#symb2
{
	background-image:url('../assets/images/search.png');   
 position: left;
 padding-left: 60px;
 background-size: 30px;
 background-repeat: no-repeat;
 border-radius: 8px;	
}
.outter
                {
                    height:25px;
                    width:500px;
                    border:solid 1px #000;
                }
                .inner
                {
                    height:25px;
            
                    
                    border-right:solid 1px #000;
                    background: linear-gradient(to  right, rgb(25, 255, 0), rgb(0, 139, 0));
                } 
                
</style>
	<!-- navigation css -->

<body>
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
        <li><a href="account.php">Account</a></li>  
      </ul>
    </nav>
	<!-- navigation -->
	<?php 
	include("../partials/connect.php");
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
            <span class="login100-form-title">
            <h3 style="color:green"> 


            <?php
            $sqlv="SELECT *  FROM voter";
            $resultv=$con->query(($sqlv));
            $sqlp="SELECT *  FROM pparties";
            $resultp=$con->query(($sqlp));
            $sqli="SELECT *  FROM indcandidate";
            $resulti=$con->query(($sqli));
            echo "<table border='1px'>
            <tr> <td><p>
            Total Number of Registered Voters : [".$resultv->num_rows."]  <br>
            Total Number of Registered Political Parties : [".$resultp->num_rows."]<br>
            Total Number of Registered Individual candidates : [".$resulti->num_rows."]<br><br>
            
           </p> ";	
            $sql="SELECT *  FROM voter";
            $result=$con->query(($sql));
            error_reporting(0); 
            $search = $_POST['search'];  
            $vcount=0;  
            $mv=0;
            $fm=0;     
            if($result->num_rows>0 )
            {
                while ($row=$result->fetch_assoc())
                {
if($row['status']==1)
{
$vcount+=1;
if($row['Gender']=="male")
{
$mv+=1;
}
if($row['Gender']=="female")
{
$fm+=1;
}

}

                }
                echo "-------***-----------";
                $per=round(($mv/($mv+$fm))*100,1);
                $per2=round(($fm/($mv+$fm))*100,1);
                echo "<h5>".$vcount." Voter have gave their Vote <br>
                From which <font color='green'> <br> ".$mv."</font> are  Male <br><font color='green'>".$fm."</font> are Females
                </h5><br> 
               
               
      	<br><p style='text-align:left'> </p> 
                 "?> 

            </td><td>
              <p>   Votes Made: </p>
                  <div class='outter' >
                <div class='inner'  style=' width:<?php echo $per; ?>%'>
              <p style="color:black">  <?php echo $per ?>% by Male </p>
                </div>
               
                  </div>
                  <div class="outter" >
					<div class="inner"  style=" width:<?php echo $per2; ?>%;">
					
				<p>	<?php	echo $per2; ?>%byfemales  </p>
					</div>
			</div> 
                 
                <?php
              echo " </td> <td>
                
                </tr></table>";
            }
            ?>

	</body>
</html>	
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