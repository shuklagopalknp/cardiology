<?php
include 'dbconnect.php';
session_start();

if(isset($_POST['submit'])){

$user_name=$_POST["user_name"];
$user_password=$_POST["user_password"];


$query=mysql_query("SELECT * FROM `admin_login` WHERE `login`='".$user_name."' and `password`='".$user_password."'");

$num=mysql_num_rows($query);



if($num>0){
	
	$_SESSION["email"] = "$user_name";
	//echo "login valid";
	header('location:index.php');
	
	}
else{
	echo "login invalid";
}
}
?><!DOCTYPE HTML>
<html>
<head>
<title>VSDZone INFOTECH</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</head>
<body>
	<div class="login">
		<h1><a href=""> VSDZONE INFOTECH</a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<form action="signin.php" method="post">
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" placeholder="userid" name="user_name" required>
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" name="user_password" required>
					<i class="fa fa-lock"></i>
				</div>
				   <a class="news-letter " href="#">
						 <label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
					   </a>

			
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="login" name="submit">
					</label>
					
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
		<!---->
<div class="copy-right">
            <p> &copy; 2018 VSDZONE INFOTECH. All Rights Reserved | Design by <a href="http://www.onistech.com/" target="_blank">Onistech Info Systems</a> </p>	    </div>  
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

