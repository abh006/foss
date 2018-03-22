<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Blend Login Form Flat Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blend  Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->

<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Vollkorn+SC:400,600,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
<!-- //web font --> 
</head>
<body>
	<!-- main -->
	<div class="main">

		<div class="main-w3lsrow">
			<!-- login form -->
			<div class="login-form login-form-left"> 
				<div class="agile-row">
				
					<?php

	session_start();


	$HOST = 'localhost';
	$USER = 'root';
	$PASSWORD = 'mysql';
	
	
	$conn =mysqli_connect('localhost','root','password','new_db');

	if(!$conn)
	{
		die("Database connection failed".mysqli_error($conn));
	}
	$select_db =mysqli_select_db($conn,'new_db');
	
	if(!$conn){
		die("database selection failed".mysqli_error($conn));
	}

	
	if(isset($_POST['username']) and isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM user WHERE username='".$username."' and password='".$password."'";
		
		
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		
		$count = mysqli_num_rows($result);
		
		if($count == 1)
		{
			$_SESSION['username'] = $username;
			$row = mysqli_fetch_array($result);
			$active = $row['active'];
			if ( $active == 1 )
			{
			echo "<h1>Hi $username</h1>";
			echo "<h2 style='color:#fff'>Welcome to the members area</h3>";
			echo "<a class='login-agileits-bottom' href='logout.php' style='color:#fff;text-decoration:dotted'>Logout</a>";
			}
			else{
				echo "<h2>This account is not active. Contact the administrator</h2>";
			}
			
		}
		else{
			$fmsg = "Invalid login credentials";
			echo $fmsg;
		}
	}
	else{
	echo "Login again with valid username and password <br> <a href='index.html'>Home</a>";
	}
	
?>

				</div>  
			</div>  
		</div>	
		<!-- copyright -->
		<div class="copyright">
			<p> © 2018 Blend  Login Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div>
		<!-- //copyright --> 
	</div>	
	<!-- //main --> 
</body>
</html>

