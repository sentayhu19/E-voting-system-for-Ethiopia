<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home | NEBE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="assets/css/navfoot.css">
<link rel="stylesheet" type="text/css" href="assets/css/slidercss.css">
<link rel="stylesheet" type="text/css" href="assets/css/navfoot.css">
    <style>
body {
  background-image: url('assets/images/10.jpg');
  background-repeat: no-repeat;
 background-size: cover;
}
.row {
  display: flex;
  background-color: white;
}

.column {
  flex: 80%;
}
/* end of col  */
</style>
</head>
<body>

	<!-- navigation -->
	<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><img width="50px" height="50px" src="assets/images/ethioflag.gif"></label>
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a  href="login.php">Login</a></li>
        <li><a href="election.php">Election info</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </nav>	
          <!-- Slideshow container -->
          <div class="slider">
		<!-- fade css -->
		<div class="myslide fade">
			<div class="txt">
				<h1>Election </h1>
				<p>Welcome to NEBE website </p>
			</div>
			<img src="assets/images/s1.jpg" style="width: 100%; height: 100%;"
			>
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>ETHIOPIA</h1>
				<p>NEBE Web voting system</p>
			</div>
			<img src="assets/images/s2.jpg" style="width: 100%; height: 100%;">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
				<h1>Free and Fair</h1>
				<p>NEBE web</p>
			</div>
			<img src="assets/images/s3.jpg" style="width: 100%; height: 100%;">
		</div>
		<div class="myslide fade">
			<div class="txt">
				<h1>Free and Fair</h1>
				<p>NEBE web</p>
			</div>
			<img src="assets/images/s4png.png" style="width: 100%; height: 100%;">
		</div>
		
		<!-- /fade css -->
		<!-- onclick js -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>	
		<div class="dotsbox" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
		</div>
		  </div>
		  <br><br><br><br><br><br><br><br>
		  <div class="row">
  <div class="column">
	  	<i><b>Political Parties</b></i>
‘’Political Party’’ means an association that is organized bycitizens and is a registered entity <br> according to Proclamation No. 1162/2011.<br>
 A political party formulates political programmes at the national <br>, regional or sub-regional levels in order to gain political power at the <br>national level. 
</div>
  <div class="column">
	<b><i>  The National Electoral Board of Ethiopia </i></b> is an institution established in
	   accordance with the constitution of the Federal Democratic Republic of Ethiopia and the new proclamation is cited 
	   as the “National Electoral Board of Ethiopia Establishment Proclamation No. 1133/2019”.
	</div>
<div class="colum">
<b>	The National Election Board of Ethiopia  </b> is authorized by <br>Article 7 of Proclamation No.	11/33/2011 to establish constituencies and polling <br>
	stations throughout the country.  and conditions of the <br>establishment of constituencies and polling stations as well as other subjects related <br>
	to the powers and functions of constituencies and stations that is provided for in accordance with Article 14 of Proclamation No. 1162/2011.
</div>

</div>
 
 <!-- FOOTER START -->
  <?php
include ("partials/footer.php")
  ?>
<!-- END OF FOOTER -->
</body>
<script src="assets/js/slider.js"></script>
</html>
