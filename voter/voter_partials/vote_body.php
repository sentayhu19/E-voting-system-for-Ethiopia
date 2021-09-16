<form action="confirmvote.php" method="post">
					<span class="login100-form-title">
						 <h5 align="right">	Welcome <?php echo $_SESSION["user_name"];  ?> </h5>
					</span>

					<div style="height:450px;width:840px;overflow:auto;border:8px solid #665f5f;padding:2%"><br>
				<h4 style="background-color: #55608f;  
text-align: center;">		Select from Individual candidates <h4>
				
					<table border="1px" style="background-color: #f2f2f2; ">

<?php      
		$sql="SELECT *  FROM indcandidate";
        $count = 0;
		$result=$con->query(($sql));
		while($row=$result->fetch_assoc())
        {
            if($count==3) //three images per row
            {
               echo "</tr>";
               $count = 0;
            }
            if($count==0)
               echo "<tr>";
            echo "<td>";
            ?>
                 </p>



					
					<div class="container">
					<?php echo "<img src='../indcandidates/canduploads/".$row['symbol']."' alt='candidate Avatar' class='image' width='200px' height='100px'>";  ?>
  <div class="overlay">
    <div class="text"><?php echo "<p>Gender: </p>". $row['gender'];?>
	<?php echo "<p>Age: </p>". $row['age'];?>
</div>
  </div>
</div>
					<?php echo "<h5>Name: </h5>". $row['first_name'];?>
					<?php echo $row['father_name'];?>		<br>	
					<?php echo "<h5>Memeber of: </h5>".$row['party_name'];?>
				<?php  //start radio ?> 
				<div class="continput">

<ul>
	<li style="position: relative;
padding: 10px;
padding-left: 40px;
height:30px;">
		<input type="radio" name="select" value=<?php echo $row['ID'] ?>>
		<label>Vote</label>
		<div class="bullet">
			
		</div>
	</li>
	
</ul>
</div>	
					<?php // end rad ?>
                <?php
            $count++;
            echo "</td>";
        }
        if($count>0)
           echo "</tr>";
        ?>

</table>
			</div>
				<br><br>
					<div style="height:450px;width:840px;overflow:auto;border:8px solid #665f5f;padding:2%">
				<h4 style="background-color: #55608f;; 
text-align: center;">	Select from political party <h4>
					<table border="1px">

<?php 
       
		$sql="SELECT *  FROM pparties";
        $count = 0;
		$result=$con->query(($sql));
		while($row=$result->fetch_assoc())
        {
            if($count==3) //three images per row
            {
               echo "</tr>";
               $count = 0;
            }
            if($count==0)
               echo "<tr>";
            echo "<td>";
            ?>
                    </p>


					<div class="container">
					<?php echo "<img src='../assets/images/uploads/".$row['symbol']."' alt='party Avatar' class='image' width='200px' height='200px'>";  ?> <br>
					<div class="overlay">
    <div class="text"><?php echo "Party abbr.: "."<br>".$row['abbr'];?> <br>
	</div></div></div>
					<?php echo "Party Name : ".$row['party_name'];?> <br>
					
					<?php  //start radio ?> 
				<div class="continput">
				</div>
<ul>
	<li style="position: relative;
padding: 10px;
padding-left: 40px;
height:30px;">
		<input type="radio" name="select2" value=<?php echo $row['ID'] ?>>
		<label>Vote</label>
		<div class="bullet">
			
		</div>
	</li>
	
</ul>
	
					<?php // end rad ?>

                <?php
            $count++;
            echo "</td>";
        }
        if($count>0)
           echo "</tr>";
        ?>

</table>
				
				</div>
				<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" type="submit" style="width: 200px;">
							Sumbit
						</button>
					</div>
	</form>

	