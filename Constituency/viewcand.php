<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Registered Indcand</title>
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
#symb2
{
	background-image:url('../assets/images/search.png');   
 position: left;
 padding-left: 60px;
 background-size: 45px;
 background-repeat: no-repeat;
 border-radius: 8px;	
}
table{
    border-collapse: collapse;
    width:100%;
    font-family: monospace;
    font-size: 10px;
    text-align: left;   
    
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
        <li><a href="conhome.php"> Home</a></li>   
        <li><div class="dropdown" class="fas fa-bars"><button class="dropbtn" class="fas fa-bars" >REGISTER
    </button>   
    <div class="dropdown-content">
    
      <a href="regcand.php">Individual candidates</a>
    </div>
  </div>
</li>
<li><a class="active" href="viewcand.php">Registered Canidates </a></li>
         <li><a href="../logout.php">Log out</a></li>
       
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
            <form action="viewcand.php" method="post">
            <div id="symb2" class="container-login100-form-btn">
          
            <input type="text" class="input100" name="search" style="width:250px; height:30px;" placeholder="Search by user name" style=" text-align: left;"> 
          
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
                <th colspan="12" style="text-align: center;">Registered Individual candidates</th>
                </tr>  
                </thead>
                <thead>         
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Father Name</th>
                        <th>User name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Memeber of </th>
                        <th>Photo</th>   
                        <th>constituency id</th>     
                        <th>Level of Education</th>   
                        <th>Disability</th> 
                        <th>Region</th> 
                    </tr>
                    </thead>
                    <tbody>
				<?php
                $sql="SELECT *  FROM indcandidate";
                $result=$con->query(($sql));
                error_reporting(0); 
                $search = $_POST['search']; 

$flag=1;
                
                if($result->num_rows>0 )
                {
                    while ($row=$result->fetch_assoc())
                    {
                          if ((!empty($search)))
    {

     

      
        if($search==$row["user_name"])
        {
          if ($row['conid']==$_SESSION['ID'])
          {
            
        ?>
      
      <tr><td><?php echo $row["ID"] ?></td><td>
                       <?php  echo $row["first_name"] ;?></td><td>
                       <?php   echo $row["father_name"]; ?></td><td>
                      <?php   echo$row["user_name"];?></td><td>
                      <?php    echo$row["gender"];?></td><td>
                        <?php   echo$row["age"];?></td><td>
                        <?php   echo$row["party_name"];?>
                 </td><td><?php echo "<img src='../indcandidates/canduploads/".$row['symbol']."'  width='50px' height='50px'>";  ?>  
                 </td> <td><?php echo $row["conid"]; ?></td> <td> <?php  echo $row["edu"];?></td>  <td>  <?php  echo $row["disability"];?></td><td><?php  echo $row["region"];?></td> </tr> <?php
          } 
                  }
                    else{
                        $flag=0;
                    }
                }
                    
                    else{

                        if($search=="")
                        {  
                          if ($row['conid']==$_SESSION['ID'])
                          { 
                            ?>
                                                   
                   <tr><td><?php echo $row["ID"] ?></td><td>
                       <?php  echo $row["first_name"] ;?></td><td>
                       <?php   echo $row["father_name"]; ?></td><td>
                      <?php   echo$row["user_name"];?></td><td>
                      <?php    echo$row["gender"];?></td><td>
                        <?php   echo$row["age"];?></td><td>
                        <?php   echo$row["party_name"];?>
                 </td><td><?php echo "<img src='../indcandidates/canduploads/".$row['symbol']."'  width='50px' height='50px'>";  ?>  
                 </td> <td><?php echo $row["conid"]; ?></td> <td> <?php  echo $row["edu"];?></td>  <td>  <?php  echo $row["disability"];?></td><td><?php  echo $row["region"];?></td> </tr> <?php
                        }
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