<?php 
include("logconnect.php");

 ?>


<!DOCTYPE HTML>


<!--	Licensed to Educo International School	-->



<html>

	<head>
		<title>Educo International School</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel='icon' href="images/logo.png"/>

	</head>


	<body>


		<!-- Header -->
			<header id="header">
				<div class="logo"> <a href="" title="Homepage"> <img src="images/logo3.png" alt="Educo International School"/><span></span></a></div>


<ul class="sp-megamenu-parent menu-rotate hidden-sm hidden-xs">
	<li class="sp-menu-item"><a  href="index0.php"  >Home</a></li>

<li class="sp-menu-item"><li class="sp-menu-item"><li class="sp-menu-item current-item active"><a  href="student_login.php"  >Student Login</a></li>
<li class="sp-menu-item"><a  href="admin_validate.php"  >Admin Login</a></li><li class="sp-menu-item">
<a  href="teachers_login.php"  >Teachers Login</a></li><li class="sp-menu-item">

						</div>






			</header>


			<section id="main">
				<div class="inner">



<form action="student_validate.php" method="post" >
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

<label for="usname"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="usname" required>




    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>



  </div>
  <input type="submit" name="submit" value="submit">


</form>
















        <!-- Footer -->
			<footer id="footer">

				<div> <i class="fa fa-map-marker" style="font-size:25px"></i>&nbsp <strong>Address: </strong>&nbsp
					<a href="" target="_blank" title="See our location on Google Map">
					<font style="font-size:18px;">151/C, Distrilary Road (Katherpul), Gandaria, Dhaka-1204 </font> </a>	</div>



				<div>
					<i class="fa fa-envelope" style="font-size:20px"></i>&nbsp
					<strong>Email:</strong>&nbsp <a href="" target="_blank" title="Email us for any query or ADMISSION related info">
					<font style="font-size:18px">info@educointschool.com </font>
					</a>
				</div>

				</br>
				<div>
					<strong></strong>&nbsp <a href="" title="Our Facebook page" target="_blank" class="icon">
					<font style="font-size:18px">&nbsp Visit us on <i class="fa fa-facebook" style="font-size:30px"></i>acebook </font>
					</a>
				</div> <br></br>
				<div class="copyright">	&copy; 2020, Educo International School. All rights reserved. </div>

			</footer>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery1.poptrox.min.js"></script>
			<script src="assets/js/skel1.min.js"></script>
			<script src="assets/js/util1.js"></script>
			<script src="assets/js/main1.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>

	</body>
</html>
