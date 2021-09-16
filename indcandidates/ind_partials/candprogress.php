<h4>Election progress</h4></br>
<div style="height:450px;width:840px;overflow:auto;border:8px solid #665f5f;padding:2%">
<p style="background-color:black; color:cornsilk; text-align:center;"> For political Parties </p>
<table>
	<tr>
				<?php 
				$percent=1;
				$pn="";
				$sum=0;
				$sql="SELECT *  FROM pparties";
                $result=$con->query(($sql));	
				if($result->num_rows>0 )
                {
					
                    while ($row=$result->fetch_assoc())
					{
					
$sum+=$row['count'];

					}
					$sql="SELECT *  FROM pparties";
                $result=$con->query(($sql));
					while ($row=$result->fetch_assoc())
					{
						$pn=$row['party_name'];	
					$current=$row['count'];
					$percent=round(($current/$sum)*100,1);
				
?>
					<style type="text/css">
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
					
			<td>	<br><p style="text-align:left">	<?php echo "Party Name : ".$pn; ?> </p> 
					<div class="outter" >
					<div class="inner"  style=" width:<?php echo $percent; ?>%;">
					
					<?php	echo $percent."%_of_vote"; ?> 
					</div>
			</div> 
			</td></tr>
			

					
	<?php }	echo "</table> </div>"; }	?>
				
	<br><br>
		<!--start individual candidates --------------------------- progress -->


		<div style="height:450px;width:840px;overflow:auto;border:8px solid #665f5f;padding:2%">
<p style="background-color:black; color:cornsilk;  text-align:center;"> Individual Candidates running for (HPR) </p>
<table>
	<tr>
				<?php 
				$percent=1;
				$pn="";
				$sum=0;
				$sql="SELECT *  FROM indcandidate";
                $result=$con->query(($sql));	
				if($result->num_rows>0 )
                {
					
                    while ($row=$result->fetch_assoc())
					{
					
$sum+=$row['count'];

					}
					$sql="SELECT *  FROM indcandidate";
                $result=$con->query(($sql));
					while ($row=$result->fetch_assoc())
					{
						$pn=$row['first_name'];	
					$current=$row['count'];
					$percent=round(($current/$sum)*100,1);
				
?>
					<style type="text/css">
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
					
			<td>	<br><p style="text-align:left">	<?php echo "Party Name : ".$pn; ?> </p> 
					<div class="outter" >
					<div class="inner"  style=" width:<?php echo $percent; ?>%;">
					
					<?php	echo $percent."%_of_vote"; ?> 
					</div>
			</div> 
			</td></tr>
			

					
	<?php }	echo "</table> </div>"; }	?>
				
		</div>