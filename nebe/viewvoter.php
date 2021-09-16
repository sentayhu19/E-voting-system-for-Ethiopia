<!DOCTYPE html>
<html lang="en">
<head>
	<title>View registered Voters</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/images/icons/list.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="nebe_partials/main.css">
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
table{
    border-collapse: collapse;
    width:50%;
    font-family: monospace;
    font-size: 9px;
    text-align: left;
}
#symb2
{
	background-image:url('../assets/images/search.png');   
 position: left;
 padding-left: 60px;
 background-size: 30px;
 background-repeat: no-repeat;
 border-radius: 8px;	
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
        <li><a href="nebehome.php"> Home</a></li>   
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
<button class="dropbtn" class="fas fa-bars" style="background-color:black">MANAGE USERS
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
				<div class="login100-pic" style="margin: auto;
  width: 50%;
  padding: 10px;" >
					<img src="../assets/images/img-01.jpg"  alt="IMG" width="180px" >
				</div>  
            </span>
            <form action="viewvoter.php" method="post">
                
            <div class="container-login100-form-btn">
         
            <input type="text" class="input100" name="search" id="symb2" style="width:250px; height:30px;" placeholder="Search by user name" style=" text-align: left;"> 
          
						<button class="login100-form-btn" name="search1" type="submit" style=" float: left;  height:20px;
    width:100px;">
							Search
						</button>
				  
        </div> 
            
            </form>
                    <br><br><br><br>
                    <div class="container">
                <table border="1px" >
                    <thead>
                <tr>
                <th colspan="15" style="text-align: center;">Registered Voters</th>
                </tr> 
                    </thead>   
                    <thead>       
                    <tr>
                        <th>ID</th>
                        <th>User name</th>
                        <th>First Name</th>
                            <th>Father Name</th>
                            <th>Grand Father</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>SubCity</th>
                            <th>Wereda</th>
                            <th>Ketena</th>
                            <th>Station_id</th>
                          
                            <th>Duration of residence</th>
                            <th>House Number</th>
                            <th>Remark</th>
                            <th>Registration Date </th>
                    </tr>
                    </thead>
                    <tbody>
				<?php
                $sql="SELECT *  FROM voter";
                $result=$con->query(($sql));
                error_reporting(0); 
                $search = $_POST['search']; 
                
             
$flag=1;
                
                if($result->num_rows>0 )
                {
                    while ($row=$result->fetch_assoc())
                    {
                           if ((!empty($search)) )
    {
        $flag=1;
        if($search==$row["user_name"])
        {
                        echo"<tr><td>".$row["ID"]."</td><td>".$row["user_name"]."</td><td>".$row["first_name"].
                        "</td><td>".$row["father_name"]."</td><td>".$row["grand_father_name"]."</td><td>".$row["Age"]."</td><td>".$row["Gender"]."</td><td>".$row["subcity"].
                        "</td><td>".$row["wereda"].
                        "</td><td>".$row["ketena"]."</td><td>".$row["station_id"]."</td><td>".$row["duration_of_residence"]."</td><td>".$row["house_number"]."</td><td>".$row["remark"].
                        "</td><td>".$row["created_at"]."</td></tr>";
                    }
                    else{
                        $flag=0;
                    }
                }
                    
                    else{

                        
                                             
                        
                            
                      echo"<tr><td>".$row["ID"]."</td><td>".$row["user_name"]."</td><td>".$row["first_name"].
                      "</td><td>".$row["father_name"]."</td><td>".$row["grand_father_name"]."</td><td>".$row["Age"]."</td><td>".$row["Gender"]."</td><td>".$row["subcity"].
                      "</td><td>".$row["wereda"].
                      "</td><td>".$row["ketena"]."</td><td>".$row["station_id"]."</td><td>".$row["duration_of_residence"]."</td><td>".$row["house_number"]."</td><td>".$row["remark"].
                      "</td><td>".$row["created_at"]."</td></tr>";
                        
                    }
                    
                
                }
                    echo"</tbody></table>";
                    echo"</div>";
                }
                else{

                    echo "<h4>No registered polling station! <h4>";
                }
           
?>					
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