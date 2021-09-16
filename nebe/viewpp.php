<!DOCTYPE html>
<html lang="en">
<head>
	<title>View registered Voters</title>
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
<button class="dropbtn" class="fas fa-bars" style="background-color:black;">MANAGE USERS
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
				<div class="login100-pic" style="margin: auto;
  width: 50%;
  padding: 10px;" >
					<img src="../assets/images/img-01.jpg"  alt="IMG" width="180px" >
				</div>  
            </span>
            <form action="viewpp.php" method="post">
            <div class="container-login100-form-btn">
           
            <input   id="symb2" type="text" class="input100" name="search" style="width:250px; height:30px;" placeholder="Search by user name" style=" text-align: left;"> 
          
						<button class="login100-form-btn" name="search1" type="submit" style=" float: left;  height:20px;
    width:100px;">
							Search
						</button>
				  
        </div> 
            
            </form>
                    <br><br><br><br>
                    <div class="container">
                <table border="1px">
                    <thead>
                <tr>
                <th colspan="7" style="text-align: center;">Registered Political Parties</th>
                </tr>  
                </thead>
                <thead>         
                    <tr>
                        <th>ID</th>
                        <th>Party Name</th>
                        <th>User name</th>
                        <th>Abbrivation</th>
                        <th>Symbol</th> 
                        <th></th>
                        <th></th>          
                    </tr>
                    </thead>
                    <tbody>
				<?php
                $sql="SELECT *  FROM pparties";
                $result=$con->query(($sql));
                error_reporting(0); 
                $search = $_POST['search']; 

$flag=1;
$flag2=0;
                
                if($result->num_rows>0 )
                {
                    while ($row=$result->fetch_assoc())
                    {
                          if ((!empty($search)))
    {
        if($search==$row["user_name"])
        {

        
      ?>
          <tr><td><?php echo $row["ID"];?></td>
          <td><?php echo $row["party_name"];?></td>
      <td><?php echo $row["user_name"];?></td>
          <td> <?php echo $row["abbr"];?>
          </td><td><?php echo "<img src='../assets/images/uploads/".$row['symbol']."'  width='50px' height='50px'>";  ?> </td>
       
          <td> <a href="updatepp.php.php? ppuid=<?php echo $row['ID'] ?>"><button style="width:40px; height:35px; font-size:13px;">
          Update  </button></a> </td>
          <td><a href="nebe_handler/ppdelete.php?ppdid=<?php  $flag2=1; echo $row['ID'] ?>"><button  
           style="background-color: red; width:40px; height:35px; font-size:13px"> Delete1 </button> </a> <?php "</td></tr>";
                  
                    }
                    else{
                      if($flag2==1)
                      {
                   
                        $flag=0;
                      }
                    }
                }
                    
                    else{

                        if($search=="")
                        {   
                            ?>
                                                   
                            <tr><td><?php echo $row["ID"];?></td>
                            <td><?php echo $row["party_name"];?></td>
                        <td><?php echo $row["user_name"];?></td>
                            <td> <?php echo $row["abbr"];?>
                            </td><td><?php echo "<img src='../assets/images/uploads/".$row['symbol']."'  width='50px' height='50px'>";  ?> </td><td>
                            <a href="updatepp.php? psuid=<?php echo $row['ID'] ?>"><button style="width:40px; height:35px; font-size:13px;">
                            Update  </button></a> </td><td> <a href="nebe_handler/ppdelete.php?ppdid=<?php echo $row['ID'] ?>"><button  
                             style="background-color: red; width:40px; height:35px; font-size:13px"> Delete </button> </a> <?php "</td></tr>";
?>
                            <?php
                        }
                    }   
                }
                ?>
                </tbody>
                    </table>
                    </div>
                    <?php
                }
                else{

                    echo "<h4>No registered political parties! <h4>";
                }
                if($flag==0)
                {
                    echo"<h4>No Results <h4>";
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